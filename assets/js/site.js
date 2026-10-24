// CYF Tech — shared behaviour: mobile menu, language menu, day/night theme, bracket cursor, reveal on scroll
(function () {
  var root = document.documentElement;

  // boot screen (first page of the session): mark it seen, let a click or key skip it, drop it once it has lifted
  if (root.classList.contains('intro')) {
    try { sessionStorage.setItem('cyf-intro', '1'); } catch (e) {}
    var boot = document.querySelector('.boot');
    var done = function () { root.classList.remove('intro'); if (boot && boot.parentNode) boot.parentNode.removeChild(boot); };
    var skip = function () { if (boot) boot.classList.add('skip'); setTimeout(done, 450); };
    if (boot) {
      boot.addEventListener('click', skip);
      boot.addEventListener('animationend', function (e) { if (e.target === boot) done(); });
    }
    document.addEventListener('keydown', function onKey() { skip(); document.removeEventListener('keydown', onKey); });
    setTimeout(done, 5000);
  }

  var btn = document.querySelector('.menu-btn');
  var panel = document.getElementById('mnav');
  if (btn && panel) {
    var setOpen = function (open) {
      panel.classList.toggle('open', open);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      btn.setAttribute('aria-label', btn.getAttribute(open ? 'data-label-close' : 'data-label-open'));
      document.body.style.overflow = open ? 'hidden' : '';
    };
    btn.addEventListener('click', function () { setOpen(!panel.classList.contains('open')); });
    panel.addEventListener('click', function (e) { if (e.target.closest('a')) setOpen(false); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') setOpen(false); });
    window.addEventListener('resize', function () { if (window.innerWidth > 960) setOpen(false); });
  }

  // language menu: opens on hover (CSS) and on click/tap
  var dd = document.querySelector('.lang-dd');
  if (dd) {
    var lbtn = dd.querySelector('.lang-btn');
    var setLang = function (open) { dd.classList.toggle('open', open); lbtn.setAttribute('aria-expanded', open ? 'true' : 'false'); };
    lbtn.addEventListener('click', function (e) { e.stopPropagation(); setLang(!dd.classList.contains('open')); });
    document.addEventListener('click', function (e) { if (!dd.contains(e.target)) setLang(false); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') setLang(false); });
    // remember an explicit pick, so the Turkish root pages stop redirecting by browser language
    dd.querySelectorAll('[data-lang]').forEach(function (a) {
      a.addEventListener('click', function () { try { localStorage.setItem('cyf-lang', a.getAttribute('data-lang')); } catch (e) {} });
    });
  }

  // day / night: data-theme on <html> (set before paint by the inline head script). Until the visitor picks one with
  // the button, it follows the system setting, live; after that their choice is remembered per browser.
  var setTheme = function (t) {
    root.setAttribute('data-theme', t);
    document.dispatchEvent(new CustomEvent('cyf:theme', { detail: t }));
  };
  var saved = function () { try { return localStorage.getItem('cyf-theme'); } catch (e) { return null; } };
  var sys = window.matchMedia('(prefers-color-scheme: light)');
  var onSys = function () { if (!saved()) setTheme(sys.matches ? 'light' : 'dark'); };
  if (sys.addEventListener) sys.addEventListener('change', onSys); else if (sys.addListener) sys.addListener(onSys);
  var tbtn = document.querySelector('.theme-btn');
  if (tbtn) {
    tbtn.addEventListener('click', function () {
      var next = root.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
      setTheme(next);
      try { localStorage.setItem('cyf-theme', next); } catch (e) {}
    });
  }

  // cursor: a dot on the pointer plus four corner brackets that trail it and lock onto whatever is clickable
  var fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var calm = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (fine) {
    var box = document.createElement('div');
    box.className = 'cur';
    box.setAttribute('aria-hidden', 'true');
    box.innerHTML = '<i></i><i></i><i></i><i></i>';
    var dot = document.createElement('div');
    dot.className = 'cur-dot';
    dot.setAttribute('aria-hidden', 'true');
    document.body.appendChild(box);
    document.body.appendChild(dot);
    root.classList.add('has-cur');

    var HOT = 'a, button, [role="button"], label, summary, select, .rf-chip, .member';
    var SIZE = 26, PAD = 6;
    var mx = -100, my = -100, x = mx, y = my, w = SIZE, h = SIZE, target = null, shown = false;

    document.addEventListener('mousemove', function (e) {
      mx = e.clientX; my = e.clientY;
      if (!shown) { shown = true; x = mx - SIZE / 2; y = my - SIZE / 2; root.classList.add('cur-on'); }
    });
    document.addEventListener('mouseover', function (e) {
      if (e.target.tagName === 'IFRAME') { root.classList.remove('cur-on'); shown = false; return; }
      target = e.target.closest(HOT);
      root.classList.toggle('cur-text', !target && !!e.target.closest('input, textarea, [contenteditable]'));
    });
    document.documentElement.addEventListener('mouseleave', function () { root.classList.remove('cur-on'); shown = false; });
    document.addEventListener('mousedown', function () { root.classList.add('cur-down'); });
    document.addEventListener('mouseup', function () { root.classList.remove('cur-down'); });

    var k = calm ? 1 : 0.22;
    (function tick() {
      var tx, ty, tw, th;
      if (target && target.isConnected) {
        var r = target.getBoundingClientRect();
        tx = r.left - PAD; ty = r.top - PAD; tw = r.width + PAD * 2; th = r.height + PAD * 2;
      } else {
        tx = mx - SIZE / 2; ty = my - SIZE / 2; tw = SIZE; th = SIZE;
      }
      x += (tx - x) * k; y += (ty - y) * k; w += (tw - w) * k; h += (th - h) * k;
      box.style.transform = 'translate(' + x + 'px,' + y + 'px)';
      box.style.width = w + 'px';
      box.style.height = h + 'px';
      dot.style.transform = 'translate(' + mx + 'px,' + my + 'px)';
      root.classList.toggle('cur-lock', !!target);
      requestAnimationFrame(tick);
    })();
  }

  var items = document.querySelectorAll('.reveal');
  if (!('IntersectionObserver' in window)) {
    items.forEach(function (el) { el.classList.add('in'); });
    return;
  }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (en) {
      if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
    });
  }, { rootMargin: '0px 0px -8% 0px' });
  items.forEach(function (el) { io.observe(el); });
})();
