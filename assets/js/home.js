// CYF Tech — home: scroll-driven 3D point shapes
(function () {
  var ACCENT = '#38BDF8';
  var NAMES = ['Giriş', 'Web Tasarım', 'Web Geliştirme', 'SEO', 'E-Ticaret', 'Süreç', 'İletişim'];
  var NS = NAMES.length;

  var cv = document.querySelector('[data-pc-canvas]');
  var secs = Array.prototype.slice.call(document.querySelectorAll('.pc-sec'));
  var txts = secs.map(function (s) { return s.querySelector('.pc-txt'); });
  var chipBox = document.querySelector('.pc-chips');
  var chipSets = Array.prototype.slice.call(document.querySelectorAll('.pc-chipset'));
  var dragHint = document.querySelector('.pc-drag');
  var railLinks = Array.prototype.slice.call(document.querySelectorAll('.pc-rail a'));
  var curNum = document.querySelector('[data-cur-num]');
  var curName = document.querySelector('[data-cur-name]');
  var prog = document.querySelector('.head-prog');
  var foot = document.querySelector('.site-foot');
  var wasPast = false;
  if (!cv || !secs.length) return;

  var reduce = !!(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
  var ctx, W = 0, H = 0, vh = 900, mids = [];
  var target = window.scrollY, cur = target, lastS = -1;
  var shapes = null, scatter, stag, ph, builtN = 0;
  var hit = null;

  function clamp(v, a, b) { return Math.max(a, Math.min(b, v)); }

  function resize() {
    var dpr = Math.min(2, window.devicePixelRatio || 1);
    W = cv.clientWidth || window.innerWidth;
    H = cv.clientHeight || window.innerHeight;
    cv.width = Math.round(W * dpr);
    cv.height = Math.round(H * dpr);
    ctx = cv.getContext('2d');
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    vh = window.innerHeight;
    mids = secs.map(function (sec) { return sec.getBoundingClientRect().top + window.scrollY + sec.offsetHeight / 2; });
    lastS = -1;
  }

  // ---------- point clouds ----------
  function rng(seed) {
    var a = seed;
    return function () { a |= 0; a = a + 0x6D2B79F5 | 0; var t = Math.imul(a ^ a >>> 15, 1 | a); t = t + Math.imul(t ^ t >>> 7, 61 | t) ^ t; return ((t ^ t >>> 14) >>> 0) / 4294967296; };
  }

  function build(N) {
    var r = rng(2024);
    var TAU = Math.PI * 2;
    var mk = function (fn) { var a = new Float32Array(N * 3); for (var p = 0; p < N; p++) { var v = fn(p); a[p * 3] = v[0]; a[p * 3 + 1] = v[1]; a[p * 3 + 2] = v[2]; } return a; };
    var rectEdge = function (x0, y0, x1, y1, z) {
      var w = x1 - x0, h = y1 - y0, per = 2 * (w + h);
      var d = r() * per;
      if (d < w) return [x0 + d, y0, z]; d -= w;
      if (d < h) return [x1, y0 + d, z]; d -= h;
      if (d < w) return [x1 - d, y1, z]; d -= w;
      return [x0, y1 - d, z];
    };
    var textCloud = function (str, cw, ch, font, sx) {
      var c = document.createElement('canvas'); c.width = cw; c.height = ch;
      var g = c.getContext('2d');
      g.fillStyle = '#fff'; g.textAlign = 'center'; g.textBaseline = 'middle'; g.font = font;
      g.fillText(str, cw / 2, ch / 2);
      var data = g.getImageData(0, 0, cw, ch).data, px = [];
      for (var y = 0; y < ch; y += 2) for (var x = 0; x < cw; x += 2) if (data[(y * cw + x) * 4 + 3] > 128) px.push(x, y);
      var sy = sx * ch / cw, n = px.length / 2;
      return function () {
        if (!n) return [0, 0, 0];
        var k = Math.floor(r() * n) * 2;
        return [(px[k] / cw - 0.5) * sx + (r() - 0.5) * 0.02, -(px[k + 1] / ch - 0.5) * sy, (r() * 2 - 1) * 0.22];
      };
    };

    scatter = mk(function () { return [(r() * 2 - 1) * 3.8, (r() * 2 - 1) * 2.1, (r() * 2 - 1) * 1.8]; });
    stag = new Float32Array(N); ph = new Float32Array(N);
    for (var p = 0; p < N; p++) { stag[p] = r(); ph[p] = r() * TAU; }

    // 0 · Giriş — globe with orbit ring
    var M = Math.floor(N * 0.8);
    var sphere = mk(function (p) {
      if (p < M) {
        var phi = Math.acos(1 - 2 * (p + 0.5) / M), th = Math.PI * (1 + Math.sqrt(5)) * p;
        return [Math.cos(th) * Math.sin(phi), Math.cos(phi), Math.sin(th) * Math.sin(phi)];
      }
      var a = r() * TAU, R = 1.5, tl = 0.45;
      var x = R * Math.cos(a), z = R * Math.sin(a);
      return [x, -z * Math.sin(tl), z * Math.cos(tl)];
    });

    // 1 · Web Tasarım — monitor with page layout
    var monitor = mk(function () {
      var u = r();
      if (u < 0.30) return rectEdge(-1.3, -0.55, 1.3, 0.95, r() < 0.5 ? -0.06 : 0.06);
      if (u < 0.40) return [-1.12 + r() * 2.24, 0.74 + r() * 0.08, 0];
      if (u < 0.58) return rectEdge(-1.12, 0.08, 0.22, 0.62, 0);
      if (u < 0.68) return [-1.0 + r() * 0.9, 0.42 + (r() < 0.5 ? 0 : -0.1), 0];
      if (u < 0.80) { var k = Math.floor(r() * 3), x0 = -1.12 + k * 0.76; return rectEdge(x0, -0.44, x0 + 0.68, -0.02, 0); }
      if (u < 0.88) return rectEdge(0.34, 0.08, 1.12, 0.62, 0);
      if (u < 0.93) return [(r() - 0.5) * 0.2, -0.55 - r() * 0.4, (r() - 0.5) * 0.12];
      var a = r() * TAU; return [Math.cos(a) * 0.6, -0.97, Math.sin(a) * 0.3];
    });

    // 2 · Web Geliştirme — extruded </>
    var code = mk(textCloud('</>', 420, 180, '700 150px "JetBrains Mono", monospace', 2.9));

    // 3 · SEO — magnifier with rising bars inside the lens
    var cx = -0.3, cy = 0.3, R = 0.78, tr = 0.13;
    var magnifier = mk(function () {
      var u = r();
      if (u < 0.52) {
        var a = r() * TAU, b = r() * TAU;
        return [cx + (R + tr * Math.cos(b)) * Math.cos(a), cy + (R + tr * Math.cos(b)) * Math.sin(a), tr * Math.sin(b)];
      }
      if (u < 0.76) {
        var L = r() * 1.0, b2 = r() * TAU, d = 0.7071, st = R + 0.12;
        var ax = cx + d * (st + L), ay = cy - d * (st + L), rr = 0.15;
        return [ax + d * rr * Math.cos(b2), ay + d * rr * Math.cos(b2), rr * Math.sin(b2)];
      }
      var k = Math.floor(r() * 3), hs = [0.35, 0.6, 0.9][k];
      var x0 = cx - 0.45 + k * 0.32, y0 = cy - 0.45;
      return [x0 + r() * 0.2, y0 + r() * hs, (r() - 0.5) * 0.1];
    });

    // 4 · E-Ticaret — shopping bag
    var bag = mk(function () {
      var u = r(), X = 0.8, Y0 = -0.95, Y1 = 0.45, Z = 0.32;
      if (u < 0.16) {
        var side = r() < 0.5 ? Z : -Z, a = r() * Math.PI, b = r() * TAU;
        var rad = 0.36 + 0.04 * Math.cos(b);
        return [Math.cos(a) * rad, Y1 + Math.sin(a) * rad * 1.25, side + 0.04 * Math.sin(b)];
      }
      if (u < 0.42) {
        var e = Math.floor(r() * 6), t = r();
        if (e === 0) return [-X + 2 * X * t, Y1, Z];
        if (e === 1) return [-X + 2 * X * t, Y0, Z];
        if (e === 2) return [-X, Y0 + (Y1 - Y0) * t, Z];
        if (e === 3) return [X, Y0 + (Y1 - Y0) * t, Z];
        if (e === 4) return [X, Y0 + (Y1 - Y0) * t, -Z];
        return [-X, Y0 + (Y1 - Y0) * t, -Z];
      }
      var f = r(), x = -X + 2 * X * r(), y = Y0 + (Y1 - Y0) * r(), z = -Z + 2 * Z * r();
      if (f < 0.55) return [x, y, r() < 0.5 ? Z : -Z];
      if (f < 0.8) return [r() < 0.5 ? X : -X, y, z];
      return [x, r() < 0.5 ? Y1 : Y0, z];
    });

    // 5 · Süreç — double helix pipeline with 4 step nodes
    var helix = mk(function () {
      var u = r();
      if (u < 0.66) {
        var a = r(), ang = a * TAU * 2.5 + (r() < 0.5 ? Math.PI : 0);
        return [-1.6 + 3.2 * a, 0.48 * Math.cos(ang), 0.48 * Math.sin(ang)];
      }
      if (u < 0.82) {
        var k = Math.floor(r() * 20), a2 = (k + 0.5) / 20, ang2 = a2 * TAU * 2.5, f = r() * 2 - 1;
        return [-1.6 + 3.2 * a2, 0.48 * Math.cos(ang2) * f, 0.48 * Math.sin(ang2) * f];
      }
      var k2 = Math.floor(r() * 4), phi = Math.acos(2 * r() - 1), th = r() * TAU, rr = 0.2;
      return [-1.2 + k2 * 0.8 + rr * Math.sin(phi) * Math.cos(th), rr * Math.cos(phi), rr * Math.sin(phi) * Math.sin(th)];
    });

    // 6 · İletişim — extruded @
    var at = mk(textCloud('@', 260, 260, '700 220px "JetBrains Mono", monospace', 2.4));

    shapes = [sphere, monitor, code, magnifier, bag, helix, at];
    builtN = N;
  }

  // ---------- drag to rotate (only while a shape is formed) ----------
  var ux = 0, uy = 0, vx = 0, vy = 0, dragging = false, lx = 0, ly = 0;
  function overShape(x, y) {
    if (!hit || hit.dist > 0.2) return false;
    var dx = x - hit.cx, dy = y - hit.cy;
    return dx * dx + dy * dy < hit.r * hit.r;
  }
  document.addEventListener('pointerdown', function (e) {
    if (e.button !== undefined && e.button !== 0) return;
    if (e.pointerType === 'touch') return;
    if (e.target && e.target.closest && e.target.closest('a, button, input, textarea, header, nav, .pc-txt, footer')) return;
    if (!overShape(e.clientX, e.clientY)) return;
    dragging = true; lx = e.clientX; ly = e.clientY; vx = 0; vy = 0;
    document.body.style.cursor = 'grabbing';
    document.body.style.userSelect = 'none';
    e.preventDefault();
  });
  window.addEventListener('pointermove', function (e) {
    if (dragging) {
      var dx = e.clientX - lx, dy = e.clientY - ly;
      lx = e.clientX; ly = e.clientY;
      vy = dx * 0.008; vx = dy * 0.008;
      uy += vy; ux = clamp(ux + vx, -1.3, 1.3);
    } else if (e.pointerType !== 'touch') {
      var over = overShape(e.clientX, e.clientY) && !(e.target.closest && e.target.closest('a, button, header, nav, .pc-txt, footer'));
      document.body.style.cursor = over ? 'grab' : '';
    }
  });
  var up = function () {
    if (!dragging) return;
    dragging = false;
    document.body.style.cursor = '';
    document.body.style.userSelect = '';
  };
  window.addEventListener('pointerup', up);
  window.addEventListener('pointercancel', up);

  // ---------- DOM updates driven by scroll position ----------
  function updateDom(s) {
    var active = clamp(Math.round(s), 0, NS - 1);
    var mx = 0;
    for (var i = 0; i < NS; i++) {
      var dist = s - i;
      var a = clamp(1 - Math.abs(dist) * 1.3, 0, 1);
      var ty = clamp(-dist * 70, -70, 70);
      if (txts[i]) { txts[i].style.opacity = a.toFixed(3); txts[i].style.transform = 'translateY(' + ty.toFixed(1) + 'px)'; }
      var c = clamp(1 - Math.abs(dist) * 3.2, 0, 1);
      mx = Math.max(mx, c);
      if (chipSets[i]) {
        chipSets[i].style.opacity = c.toFixed(3);
        chipSets[i].style.transform = 'scale(' + (0.85 + 0.15 * c).toFixed(3) + ')';
        chipSets[i].style.visibility = c > 0.01 ? 'visible' : 'hidden';
      }
    }
    if (chipBox) chipBox.style.left = (50 + 22 * Math.cos(Math.PI * s)).toFixed(2) + '%';
    if (dragHint) dragHint.style.opacity = (mx * 0.9).toFixed(3);
    if (prog) prog.style.width = (clamp(s / (NS - 1), 0, 1) * 100).toFixed(2) + '%';
    railLinks.forEach(function (a, i) {
      var on = i === active;
      a.style.color = on ? ACCENT : '';
      if (on) a.setAttribute('aria-current', 'true'); else a.removeAttribute('aria-current');
    });
    if (curNum) curNum.textContent = '0' + active;
    if (curName) curName.textContent = NAMES[active];
  }

  // ---------- render loop ----------
  function frame() {
    target = window.scrollY;
    var d = target - cur;
    cur = Math.abs(d) < 0.5 ? target : cur + d * 0.1;
    // s = fractional section index under the viewport centre
    var y = cur + vh / 2, s = 0;
    if (y >= mids[NS - 1]) s = NS - 1;
    else for (var m = 0; m < NS - 1; m++) {
      if (y < mids[m + 1]) { s = m + clamp((y - mids[m]) / (mids[m + 1] - mids[m]), 0, 1); break; }
    }
    if (Math.abs(s - lastS) > 0.003) { lastS = s; updateDom(s); }
    // hide the fixed overlays once the footer takes over the viewport
    var past = foot ? foot.getBoundingClientRect().top < vh * 0.7 : false;
    if (past !== wasPast) { wasPast = past; document.body.classList.toggle('pc-past', past); }

    var mobile = W < 860;
    var N = mobile ? 1600 : 3000;
    if (builtN !== N || !shapes) build(N);

    ctx.clearRect(0, 0, W, H);
    var t = reduce ? 0 : performance.now() / 1000;
    var i = clamp(Math.round(s), 0, NS - 1);
    var dist = Math.abs(s - i);
    var cx = W * (mobile ? 0.5 : 0.5 + 0.22 * Math.cos(Math.PI * s));
    var cy = H * (mobile ? 0.34 : 0.52);
    var scale = Math.min(mobile ? W * 0.42 : W * 0.25, H * (mobile ? 0.24 : 0.3));
    var shape = shapes[i];
    if (!dragging) {
      uy += vy; ux = clamp(ux + vx, -1.3, 1.3);
      vx *= 0.94; vy *= 0.94; ux *= 0.985;
    }
    hit = { cx: cx, cy: cy, r: scale * 1.6, dist: dist };
    var ry = t * 0.25 + s * 1.4 + uy, rx = -0.3 + 0.08 * Math.sin(t * 0.5) + ux;
    var cY = Math.cos(ry), sY = Math.sin(ry), cX = Math.cos(rx), sX = Math.sin(rx);
    var F = 3.4;

    ctx.fillStyle = ACCENT;
    for (var p = 0; p < N; p++) {
      var k = p * 3;
      // formation: 1 = on the shape, 0 = scattered; staggered per point
      var q = (dist - stag[p] * 0.1 - 0.08) / 0.32;
      q = q < 0 ? 0 : q > 1 ? 1 : q;
      var f = 1 - q * q * (3 - 2 * q);
      var wob = (1 - f) * 0.12;
      var sx = scatter[k] + Math.sin(t * 0.5 + ph[p]) * wob;
      var sy = scatter[k + 1] + Math.cos(t * 0.4 + ph[p]) * wob;
      var x = sx + (shape[k] - sx) * f;
      var yy = sy + (shape[k + 1] - sy) * f;
      var z = scatter[k + 2] + (shape[k + 2] - scatter[k + 2]) * f;
      var x1 = x * cY + z * sY;
      var z1 = -x * sY + z * cY;
      var y1 = yy * cX - z1 * sX;
      var z2 = yy * sX + z1 * cX;
      if (z2 > F - 0.4) continue;
      var pr = F / (F - z2);
      var px = cx + x1 * scale * pr;
      var py = cy - y1 * scale * pr;
      if (px < -10 || py < -10 || px > W + 10 || py > H + 10) continue;
      var depth = clamp((z2 + 1.6) / 3.2, 0, 1);
      ctx.globalAlpha = (0.18 + 0.82 * depth) * (0.45 + 0.55 * f);
      var sz = (0.9 + 1.7 * depth) * pr;
      ctx.fillRect(px - sz / 2, py - sz / 2, sz, sz);
    }
    ctx.globalAlpha = 1;
    requestAnimationFrame(frame);
  }

  resize();
  window.addEventListener('resize', resize);
  // rebuild the text-based shapes once the mono font has loaded
  if (document.fonts && document.fonts.ready) document.fonts.ready.then(function () { builtN = 0; resize(); });
  window.addEventListener('load', resize);
  requestAnimationFrame(frame);
})();
