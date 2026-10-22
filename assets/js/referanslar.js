// CYF Tech — references: CD shelf + retro PC
(function () {
  // Referanslar — add a row per reference (fits ~40 on the shelf)
  var R = [
    { ad: 'Hürsat', etiket: 'HÜRSAT', dosya: 'HURSAT.EXE', renk: '#1A6CFF', sektor: 'E-Ticaret Yazılımı', gorsel: 'assets/img/proje/01.png', aciklama: 'İşletmelere e-ticaret yazılım çözümleri sunan Hürsat için paketlerini ve iletişim adımlarını öne çıkaran, mobil, tablet ve masaüstünde uyumlu bir web sitesi hazırladık.', hizmetler: ['Web Tasarım', 'E-Ticaret'], url: '' },
    { ad: 'Softrue Solutions', etiket: 'SOFTRUE', dosya: 'SOFTRUE.EXE', renk: '#E0503A', sektor: 'Yazılım', gorsel: 'assets/img/proje/02.png', aciklama: 'Yazılım çözümleri geliştiren Softrue Solutions için ürünlerini, güvenlik yaklaşımını ve kurumsal kimliğini anlatan, tüm ekranlara uyumlu bir web sitesi geliştirdik.', hizmetler: ['Web Tasarım', 'Web Geliştirme'], url: '' },
    { ad: 'Sistem KYS', etiket: 'SİSTEM KYS', dosya: 'SISTKYS.EXE', renk: '#1F9D6B', sektor: 'KOBİ Yönetim Platformu', gorsel: 'assets/img/proje/03.png', aciklama: 'Ekonomik ve sürdürülebilir bir KOBİ yönetim platformu olan Sistem KYS için, platformu tanıtan ve tüm cihazlarda sorunsuz çalışan bir web sitesi geliştirdik.', hizmetler: ['Web Geliştirme'], url: '' },
    { ad: 'Eurolab', etiket: 'EUROLAB', dosya: 'EUROLAB.EXE', renk: '#F2B33D', sektor: 'Laboratuvar', gorsel: 'assets/img/proje/eurolab.webp', aciklama: 'EUROLAB için kullanıcı dostu arayüzüyle laboratuvar hizmetlerini, sertifikalarını ve haberlerini sunan kurumsal web sitesini hayata geçirdik.', hizmetler: ['Web Tasarım', 'SEO'], url: '' }
  ];
  var Z = 2.45;
  var SHELF_Y = 37;       // top of the cases on the shelf
  var TRAY = [1130, 369]; // centre of the CD tray recess
  var SX = 700, SY = 389.5; // screen centre in stage px

  var $ = function (sel) { return document.querySelector(sel); };
  var root = $('[data-fl-root]');
  var area = $('[data-fl-area]');
  if (!root || !area) return;
  var stage = $('[data-fl-stage]');
  var world = $('[data-fl-world]');
  var shelf = $('[data-fl-shelf]');
  var mlist = $('[data-fl-mobile]');
  var disc = $('[data-fl-disc]');
  var discSpin = $('[data-fl-disc-spin]');
  var discCore = $('[data-fl-disc-core]');
  var discLabel = $('[data-fl-disc-label]');
  var tray = $('[data-fl-tray]');
  var trayGap = $('[data-fl-tray-gap]');
  var leds = document.querySelectorAll('[data-fl-led]');
  var cdLed = $('[data-fl-cdled]');
  var hddLed = $('[data-fl-hddled]');
  var screen = $('[data-fl-screen]');
  var vIdle = $('[data-fl-idle]');
  var vBoot = $('[data-fl-boot]');
  var vShow = $('[data-fl-show]');
  var bootBox = $('[data-fl-bootlines]');
  var intro = $('[data-fl-intro]');
  var ejectWrap = $('[data-fl-ejectwrap]');
  var bookL = $('[data-fl-bookl]');
  var bookR = $('[data-fl-bookr]');
  var card = {
    renk: $('[data-c-renk]'), dosya: $('[data-c-dosya]'), img: $('[data-c-img]'), meta: $('[data-c-meta]'),
    ad: $('[data-c-ad]'), aciklama: $('[data-c-aciklama]'), tags: $('[data-c-tags]'), href: $('[data-c-href]'), idx: $('[data-c-idx]')
  };

  var st = { phase: 'idle', active: -1, boot: 0 };
  var timers = [];
  var n = R.length;

  function ink(hex) {
    var h = (hex || '#000000').replace('#', '');
    var r = parseInt(h.slice(0, 2), 16), g = parseInt(h.slice(2, 4), 16), b = parseInt(h.slice(4, 6), 16);
    return (0.299 * r + 0.587 * g + 0.114 * b) > 160 ? '#11161F' : '#FFFFFF';
  }
  function esc(s) { return String(s).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; }); }

  // shelf layout: spines side by side, centred
  var W = 22, GAP = 3, total = n * W + (n - 1) * GAP, x0 = 800 - total / 2, y0 = SHELF_Y;
  var caseX = function (i) { return x0 + i * (W + GAP); };
  var pullX = function (i) { return Math.max(130, Math.min(1470, caseX(i) + 11)) - 11; };
  bookL.style.left = (x0 - 14).toFixed(1) + 'px';
  bookR.style.left = (x0 + total + 4).toFixed(1) + 'px';

  // ---------- build the CD cases ----------
  var cases = R.map(function (r, i) {
    var k = ink(r.renk);
    var soft = k === '#FFFFFF' ? 'rgba(255,255,255,0.22)' : 'rgba(17,22,31,0.2)';
    var num = (i + 1 < 10 ? '0' : '') + (i + 1);
    var b = document.createElement('button');
    b.type = 'button';
    b.className = 'cd-btn';
    b.setAttribute('aria-label', r.ad + ' referans CD\'sini bilgisayara tak');
    b.title = r.ad;
    b.innerHTML =
      '<span class="cd-in">' +
        '<span class="cd-spine" style="background:' + r.renk + '">' +
          '<span class="cd-spine-top"><span style="background:' + r.renk + '"></span></span>' +
          '<span class="cd-spine-label" style="color:' + k + '">' + esc(r.etiket) + '</span>' +
          '<span class="cd-spine-num" style="color:' + k + '">' + num + '</span>' +
          '<span class="cd-spine-shine"></span>' +
        '</span>' +
        '<span class="cd-ring"></span>' +
        '<span class="cd-side">' +
          '<span class="cd-inside"><span class="cd-tray"></span><span class="cd-hub"></span></span>' +
          '<span class="cd-cover" style="background:' + r.renk + '">' +
            '<span class="cd-cover-spine"><span>CYF TECH</span></span>' +
            '<span class="cd-cover-lines"></span>' +
            '<span class="cd-cover-disc" style="border-color:' + soft + '"></span>' +
            '<span class="cd-cover-top" style="color:' + k + '"><span>REFERANS</span><span>' + num + '</span></span>' +
            '<span class="cd-cover-title" style="color:' + k + '">' + esc(r.etiket) + '</span>' +
            '<span class="cd-cover-shine"></span>' +
          '</span>' +
        '</span>' +
      '</span>';
    b.addEventListener('click', function () { insert(i); });
    shelf.appendChild(b);

    var m = document.createElement('button');
    m.type = 'button';
    m.className = 'fl-mbtn';
    m.innerHTML = '<span style="background:' + r.renk + '"></span>' + esc(r.ad);
    m.addEventListener('click', function () { insert(i); });
    mlist.appendChild(m);

    return { btn: b, cover: b.querySelector('.cd-cover') };
  });

  // ---------- timeline ----------
  function clearT() { timers.forEach(function (id) { clearTimeout(id); }); timers = []; }
  function at(ms, fn) { timers.push(setTimeout(fn, ms)); }
  function set(patch) { for (var k in patch) st[k] = patch[k]; render(); }
  function go(p) { set({ phase: p }); }

  function bootSeq(base) {
    for (var k = 1; k <= 6; k++) (function (k) { at(base + k * 230, function () { set({ boot: k }); }); })(k);
    at(base + 6 * 230 + 400, function () { go('show'); });
  }

  function insert(i) {
    if (st.phase !== 'idle') return;
    clearT();
    set({ active: i, phase: 'pull', boot: 0 }); // case slides off the shelf, spine first
    at(420, function () { go('turn'); });       // turns so the cover faces the viewer
    at(900, function () { go('open'); });       // cover swings open, disc pops out
    at(1460, function () { go('fly'); });       // disc flies to the PC, tray opens
    at(2300, function () { go('lay'); });       // disc lies down on the tray, case closes
    at(2800, function () { go('close'); });     // tray closes, case turns back onto the shelf
    at(3260, function () { go('boot'); });      // zoom to the monitor, DOS boot
    bootSeq(3860);
  }

  function eject() {
    var p = st.phase;
    if (p !== 'show' && p !== 'boot') return;
    clearT();
    go('unzoom');
    at(1100, function () { go('ejectA'); }); // tray opens with the disc
    at(1600, function () { go('ejectB'); }); // case comes off the shelf & opens, disc flies back
    at(2380, function () { go('ejectC'); }); // disc goes into the case, cover closes
    at(2860, function () { go('ejectD'); }); // case returns to the shelf
    at(3360, function () { set({ phase: 'idle', active: -1, boot: 0 }); });
  }

  function step(d) {
    if (st.phase !== 'show') return;
    clearT();
    set({ active: (st.active + d + n) % n, phase: 'boot', boot: 0 });
    bootSeq(0);
  }

  document.querySelectorAll('[data-fl-eject]').forEach(function (b) { b.addEventListener('click', eject); });
  $('[data-fl-prev]').addEventListener('click', function () { step(-1); });
  $('[data-fl-next]').addEventListener('click', function () { step(1); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') eject(); });

  // ---------- fit the 1600×1000 stage into the area ----------
  function fit() {
    var w = area.clientWidth || 1440, h = area.clientHeight || 828;
    stage.style.transform = 'scale(' + Math.min(w / 1600, h / 1000).toFixed(4) + ')';
  }
  fit();
  window.addEventListener('resize', fit);

  // ---------- render ----------
  var pulledPhases = { pull: 1, turn: 1, open: 1, fly: 1, lay: 1, ejectB: 1, ejectC: 1 };
  var turnedPhases = { turn: 1, open: 1, fly: 1, lay: 1, ejectB: 1, ejectC: 1 };
  var openPhases = { open: 1, fly: 1, ejectB: 1 };
  var lastCard = -1;

  function render() {
    var phase = st.phase, A = st.active;
    var zoomed = phase === 'boot' || phase === 'show';

    root.classList.toggle('fl-busy', phase !== 'idle');
    world.style.transform = zoomed
      ? 'translate(' + (800 - SX * Z).toFixed(1) + 'px, ' + (500 - SY * Z).toFixed(1) + 'px) scale(' + Z + ')'
      : 'translate(0px, 0px) scale(1)';

    cases.forEach(function (c, i) {
      var on = i === A;
      var pulled = on && pulledPhases[phase];
      c.btn.style.transform = pulled
        ? 'translate(' + pullX(i) + 'px, ' + (y0 + 50) + 'px) rotateY(' + (turnedPhases[phase] ? -90 : 0) + 'deg) scale(1.25)'
        : 'translate(' + caseX(i) + 'px, ' + y0 + 'px) rotateY(0deg) scale(1)';
      c.btn.style.zIndex = pulled ? 20 : 10;
      c.btn.tabIndex = phase === 'idle' ? 0 : -1;
      c.cover.style.transform = 'rotateY(' + (on && openPhases[phase] ? -112 : 0) + 'deg)';
    });

    // disc path
    var a = A >= 0 ? A : 0;
    var r = R[a];
    var cx = pullX(a) + 11, cy = y0 + 50 + 56.5; // centre of the pulled-out, turned case
    var tx = TRAY[0], ty = TRAY[1];
    var T = function (x, y, s, rx) { return 'translate(' + (x - 50) + 'px, ' + (y - 50) + 'px) rotateX(' + rx + 'deg) scale(' + s + ')'; };
    var dtf = T(cx, cy, 0.8, 0), dtr = 'transform .4s ease, opacity .3s ease', dop = 0;
    if (phase === 'open') { dtf = T(cx, cy + 6, 1.08, 0); dop = 1; dtr = 'transform .45s cubic-bezier(.3,.7,.3,1), opacity .2s ease'; }
    else if (phase === 'fly') { dtf = T(tx, 214, 1, 0); dop = 1; dtr = 'transform .82s cubic-bezier(.65,0,.35,1)'; }
    else if (phase === 'lay') { dtf = T(tx, ty, 0.92, 74); dop = 1; dtr = 'transform .45s ease-in-out'; }
    else if (phase === 'close' || phase === 'boot' || phase === 'show' || phase === 'unzoom') { dtf = T(tx, 344, 0.85, 74); dop = 0; dtr = 'transform .42s ease-in, opacity .38s ease-in'; }
    else if (phase === 'ejectA') { dtf = T(tx, ty, 0.92, 74); dop = 1; dtr = 'transform .45s ease-out, opacity .2s ease-out'; }
    else if (phase === 'ejectB') { dtf = T(cx, cy + 6, 1.08, 0); dop = 1; dtr = 'transform .78s cubic-bezier(.65,0,.35,1)'; }
    else if (phase === 'ejectC') { dtf = T(cx, cy, 0.8, 0); dop = 0; dtr = 'transform .4s ease-in, opacity .35s ease-in'; }
    disc.style.transition = dtr;
    disc.style.transform = dtf;
    disc.style.opacity = dop;
    discSpin.classList.toggle('cd-spin', phase === 'open' || phase === 'fly' || phase === 'ejectB');
    discCore.style.background = r.renk;
    discLabel.style.color = ink(r.renk);
    discLabel.textContent = r.etiket;

    // PC
    var trayOpen = phase === 'fly' || phase === 'lay' || phase === 'ejectA';
    var ledOn = phase === 'fly' || phase === 'lay' || phase === 'close' || phase === 'boot' || phase === 'ejectA';
    tray.style.transform = 'perspective(500px) rotateX(48deg) scaleY(' + (trayOpen ? 1 : 0) + ')';
    trayGap.style.background = trayOpen ? '#000000' : 'rgba(0,0,0,0.4)';
    leds.forEach(function (l) { l.classList.toggle('fl-blink', ledOn); });
    cdLed.style.background = ledOn ? '#7CFF6B' : '#2D3A2C';
    cdLed.style.boxShadow = ledOn ? '0 0 8px #7CFF6B' : 'none';
    hddLed.style.background = ledOn ? '#FFB020' : '#4A3A1A';
    screen.style.boxShadow = zoomed ? '0 0 60px rgba(56,189,248,0.35)' : '0 0 26px rgba(56,189,248,0.18)';

    // screen states
    vIdle.hidden = zoomed;
    vBoot.hidden = phase !== 'boot';
    vShow.hidden = phase !== 'show';
    if (phase === 'boot') {
      var pct = Math.min(100, Math.round(((st.boot || 0) / 6) * 100));
      var filled = Math.round(pct / 100 * 16);
      var bar = '[' + '█'.repeat(filled) + '░'.repeat(16 - filled) + '] ' + pct + '%';
      var lines = [
        'CYF-DOS 6.22    (C) CYF TECH',
        'D:\\> dir',
        '  ' + r.dosya + '        650 MB',
        'D:\\> ' + r.dosya,
        'Yükleniyor ' + bar,
        'Referans hazır.'
      ].slice(0, st.boot || 0);
      bootBox.innerHTML = lines.map(function (t) { return '<div>' + esc(t) + '</div>'; }).join('') + '<div><span class="fl-cur">_</span></div>';
    }
    if (a !== lastCard) {
      lastCard = a;
      card.renk.style.background = r.renk;
      card.dosya.textContent = 'D:\\' + r.dosya;
      card.img.src = r.gorsel;
      card.img.alt = r.ad + ' web sitesi ekran görüntüsü';
      card.meta.textContent = r.sektor;
      card.ad.textContent = r.ad;
      card.aciklama.textContent = r.aciklama;
      card.tags.innerHTML = r.hizmetler.map(function (t) { return '<span>' + esc(t) + '</span>'; }).join('');
      card.href.hidden = !r.url;
      if (r.url) card.href.href = r.url;
      card.idx.textContent = (a + 1) + ' / ' + n;
    }

    // overlay copy + controls
    var showIntro = !(zoomed || phase === 'unzoom');
    intro.style.opacity = showIntro ? 1 : 0;
    mlist.style.opacity = showIntro ? 1 : 0;
    mlist.style.pointerEvents = phase === 'idle' ? 'auto' : 'none';
    ejectWrap.style.opacity = zoomed ? 1 : 0;
    ejectWrap.style.pointerEvents = zoomed ? 'auto' : 'none';
  }

  render();
})();
