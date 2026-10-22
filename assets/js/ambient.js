// CYF Tech — ambient depth for inner pages: drifting points, soft light, cursor glow on cards
(function () {
  var reduce = !!(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
  var coarse = !!(window.matchMedia && window.matchMedia('(pointer: coarse)').matches);

  // ---------- cursor glow: cards get --mx/--my relative to themselves ----------
  if (!coarse) {
    document.addEventListener('pointermove', function (e) {
      var el = e.target && e.target.closest ? e.target.closest('.card, .pcard, .member, .mq-item') : null;
      if (!el) return;
      var r = el.getBoundingClientRect();
      el.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      el.style.setProperty('--my', (e.clientY - r.top) + 'px');
    }, { passive: true });
  }

  // ---------- drifting points + two soft glows ----------
  var cv = document.createElement('canvas');
  cv.className = 'ambient';
  cv.setAttribute('aria-hidden', 'true');
  document.body.insertBefore(cv, document.body.firstChild);
  var ctx = cv.getContext('2d');
  var W = 0, H = 0, dpr = 1, pts = [], raf = 0, running = false;

  function resize() {
    dpr = Math.min(2, window.devicePixelRatio || 1);
    W = window.innerWidth; H = window.innerHeight;
    cv.width = Math.round(W * dpr); cv.height = Math.round(H * dpr);
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    var n = W < 760 ? 50 : 110;
    pts = [];
    for (var i = 0; i < n; i++) {
      pts.push({
        x: Math.random() * W, y: Math.random() * H,
        z: 0.3 + Math.random() * 0.7,                  // depth → size, alpha, parallax
        vx: (Math.random() - 0.5) * 0.12, vy: (Math.random() - 0.5) * 0.12,
        ph: Math.random() * Math.PI * 2
      });
    }
  }

  function frame(now) {
    var t = now / 1000, sy = window.scrollY;
    ctx.clearRect(0, 0, W, H);

    // soft light pools that slide a little with scroll
    var gx = W * 0.15, gy = H * 0.2 - sy * 0.03;
    var g1 = ctx.createRadialGradient(gx, gy, 0, gx, gy, Math.max(W, H) * 0.45);
    g1.addColorStop(0, 'rgba(56,189,248,0.09)'); g1.addColorStop(1, 'rgba(56,189,248,0)');
    ctx.fillStyle = g1; ctx.fillRect(0, 0, W, H);
    var hx = W * 0.88, hy = H * 0.85 + sy * 0.02;
    var g2 = ctx.createRadialGradient(hx, hy, 0, hx, hy, Math.max(W, H) * 0.4);
    g2.addColorStop(0, 'rgba(56,189,248,0.06)'); g2.addColorStop(1, 'rgba(56,189,248,0)');
    ctx.fillStyle = g2; ctx.fillRect(0, 0, W, H);

    ctx.fillStyle = '#38BDF8';
    for (var i = 0; i < pts.length; i++) {
      var p = pts[i];
      if (!reduce) {
        p.x += p.vx; p.y += p.vy;
        if (p.x < -10) p.x = W + 10; else if (p.x > W + 10) p.x = -10;
        if (p.y < -10) p.y = H + 10; else if (p.y > H + 10) p.y = -10;
      }
      // parallax: deeper points move less with scroll
      var y = p.y - (sy * 0.05 * p.z) % (H + 20);
      if (y < -10) y += H + 20;
      var tw = reduce ? 1 : 0.75 + 0.25 * Math.sin(t * 0.8 + p.ph);
      ctx.globalAlpha = (0.18 + 0.42 * p.z) * tw;
      var s = 0.8 + 1.6 * p.z;
      ctx.fillRect(p.x - s / 2, y - s / 2, s, s);
    }
    ctx.globalAlpha = 1;
    if (running) raf = requestAnimationFrame(frame);
  }

  function start() { if (running) return; running = true; raf = requestAnimationFrame(frame); }
  function stop() { running = false; cancelAnimationFrame(raf); }

  resize();
  window.addEventListener('resize', resize);
  document.addEventListener('visibilitychange', function () { document.hidden ? stop() : start(); });
  if (reduce) { frame(0); } else { start(); }
  if (reduce) window.addEventListener('scroll', function () { frame(0); }, { passive: true });
})();
