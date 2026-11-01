<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<script id="cyf-lang-redirect">try{var L=["en", "de", "ar", "zh", "ru", "tr"],s=localStorage.getItem("cyf-lang");if(!s&&!/bot|crawl|spider|slurp|lighthouse/i.test(navigator.userAgent)){var ls=navigator.languages||[navigator.language||""];for(var i=0;i<ls.length&&!s;i++){var c=(ls[i]||"").slice(0,2).toLowerCase();if(L.indexOf(c)>-1)s=c}s=s||"en"}if(s&&s!=="tr"&&L.indexOf(s)>-1){var p=location.pathname,f=p.split("/").pop();location.replace(p.slice(0,p.length-f.length)+s+"/"+f+location.search+location.hash)}}catch(e){}</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog — CYF Tech</title>
<meta name="description" content="CYF Tech blog: web tasarım, yazılım, SEO ve dijital pazarlama üzerine içerikler; şirket haberleri ve duyurular.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Blog — CYF Tech">
<meta property="og:description" content="CYF Tech blog: web tasarım, yazılım, SEO ve dijital pazarlama üzerine içerikler; şirket haberleri ve duyurular.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://cyftech.com.tr/blog">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<link rel="canonical" href="https://cyftech.com.tr/blog">
<link rel="icon" type="image/png" href="assets/img/logo/ico.png">
<script>try{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}catch(e){}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&amp;family=Space+Grotesk:wght@400;500;600;700&amp;display=swap">
<link rel="stylesheet" href="assets/css/site.css?v=20261031d">
<link rel="stylesheet" href="assets/css/blog.css?v=20261031d">
<link rel="stylesheet" href="assets/css/theme-light.css?v=20261031d">
<script src="assets/js/site.js?v=20261031d" defer></script>
<script src="assets/js/ambient.js?v=20261031d" defer></script>
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/blog">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/blog">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/blog">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/blog">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/blog">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/blog">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/blog">
</head>
<body>
<div class="boot" aria-hidden="true" translate="no">
  <div class="boot-floor"><div><div></div></div></div>
  <canvas class="boot-cv"></canvas>
  <div class="boot-hud"><i></i><i></i><i></i><i></i><span class="bh-tl">CYF TECH // SYSTEM BOOT</span><span class="bh-tr">38.6144° N · 27.4265° E</span><span class="bh-bl">MANISA · TR</span><span class="bh-br">BUILD <b class="boot-fps">0000</b></span></div>
  <div class="boot-core">
    <div class="boot-word"><span class="boot-type"></span><i class="boot-caret"></i></div>
    <div class="boot-meter"><div class="boot-bar"><i></i></div><span class="boot-pct">000</span></div>
    <ul class="boot-log"><li><b>$</b> boot cyftech</li><li>modules<span>ok</span></li><li>assets<span>ok</span></li><li>ready<span>200</span></li></ul>
  </div>
</div>
<script>(function () {
  var R = document.documentElement, boot = document.querySelector('.boot');
  if (!R.classList.contains('intro') || !boot) return;
  var cv = boot.querySelector('.boot-cv'), ctx = cv.getContext('2d');
  var light = R.getAttribute('data-theme') === 'light';
  var AC = getComputedStyle(R).getPropertyValue('--accent').trim() || '#38BDF8';
  var dpr = Math.min(window.devicePixelRatio || 1, 2), W, H;
  function size() { W = innerWidth; H = innerHeight; cv.width = W * dpr; cv.height = H * dpr; cv.style.width = W + 'px'; cv.style.height = H + 'px'; ctx.setTransform(dpr, 0, 0, dpr, 0, 0); }
  size(); addEventListener('resize', size);

  // target shape: the </> glyph sampled from an offscreen canvas, plus a tilted ring around it
  var g = document.createElement('canvas'), gw = 420, gh = 190, gx = g.getContext('2d');
  g.width = gw; g.height = gh;
  gx.fillStyle = '#fff'; gx.textAlign = 'center'; gx.textBaseline = 'middle';
  gx.font = '700 170px "JetBrains Mono", ui-monospace, monospace';
  gx.fillText('</>', gw / 2, gh / 2 + 8);
  var px = gx.getImageData(0, 0, gw, gh).data, P = [];
  for (var y = 0; y < gh; y += 4) for (var x = 0; x < gw; x += 4)
    if (px[(y * gw + x) * 4 + 3] > 140) P.push({ tx: (x - gw / 2) / gw, ty: (y - gh / 2) / gw, tz: (Math.random() - .5) * .1, ring: 0 });
  for (var i = 0; i < 240; i++) P.push({ a: i / 240 * Math.PI * 2, ring: 1 });
  P.forEach(function (p) {
    var u = Math.random() * Math.PI * 2, v = Math.acos(2 * Math.random() - 1), r = 1.4 + Math.random() * 1.6;
    p.sx = r * Math.sin(v) * Math.cos(u); p.sy = r * Math.sin(v) * Math.sin(u); p.sz = r * Math.cos(v);
    p.d = Math.random(); p.s = .6 + Math.random() * .8;
  });

  var ease = function (k) { return k < 0 ? 0 : k > 1 ? 1 : 1 - Math.pow(1 - k, 3); };
  var word = boot.querySelector('.boot-type'), pct = boot.querySelector('.boot-pct'), fps = boot.querySelector('.boot-fps');
  var GLY = '<>/{}[]#$%&*+=?!01';
  var t0 = performance.now(), last = '';
  (function frame(now) {
    var t = (now - t0) / 1000;
    if (!boot.isConnected || t > 4.6) return;
    var S = Math.min(W * .95, H * 1.15, 860), cx = W / 2, cy = H * .4, F = 3.2;
    var sp = Math.max(0, Math.min(1, (t - 1.6) / 1.7)), spin = (sp < .5 ? 4 * sp * sp * sp : 1 - Math.pow(-2 * sp + 2, 3) / 2) * Math.PI * 2;
    var ry = (1 - ease((t - .2) / 1.3)) * 2.2 + Math.sin(t * 1.4) * .12 + spin, rx = -.18 + Math.sin(t * .9) * .05;
    var cY = Math.cos(ry), sY = Math.sin(ry), cX = Math.cos(rx), sX = Math.sin(rx);
    var burst = ease((t - 3.4) / .8);
    ctx.clearRect(0, 0, W, H);
    ctx.globalCompositeOperation = light ? 'source-over' : 'lighter';
    ctx.fillStyle = AC;
    for (var n = 0; n < P.length; n++) {
      var p = P[n], k = ease((t - .15 - p.d * .55) / .95), x, y, z;
      if (p.ring) {
        var a = p.a + t * .9, rr = Math.min(.66, W * .46 / S);
        x = Math.cos(a) * rr; y = Math.sin(a) * rr * .16; z = Math.sin(a) * rr;
        k = ease((t - .7 - p.d * .4) / .8);
      } else { x = p.tx; y = p.ty; z = p.tz; }
      x = p.sx + (x - p.sx) * k; y = p.sy + (y - p.sy) * k; z = p.sz + (z - p.sz) * k;
      var X = x * cY + z * sY, Z = -x * sY + z * cY, Y = y * cX - Z * sX; Z = y * sX + Z * cX;
      X *= 1 + burst * 2.4; Y *= 1 + burst * 2.4; Z -= burst * 2.2;
      var q = F / (F + Z + 1.2);
      if (q <= 0) continue;
      var sz = Math.max(1.2, 3.1 * q * p.s), al = Math.max(0, Math.min(1, (.4 + .6 * k) * q)) * (1 - burst * .9);
      var sx = cx + X * S * q, sy = cy + Y * S * q;
      ctx.globalAlpha = al * .13;
      ctx.fillRect(sx - sz * 2, sy - sz * 2, sz * 4, sz * 4);  // soft halo
      ctx.globalAlpha = al;
      ctx.fillRect(sx - sz / 2, sy - sz / 2, sz, sz);
    }
    ctx.globalAlpha = 1;
    // name decodes from random glyphs, counter climbs with the bar
    var dk = Math.max(0, Math.min(1, (t - .95) / .6)), name = 'cyftech', out = '';
    for (var c = 0; c < name.length; c++) out += c < Math.floor(dk * name.length + .001) ? name[c] : (t > .9 ? GLY[(Math.random() * GLY.length) | 0] : '');
    if (out !== last) { word.textContent = out; last = out; }
    if (dk >= 1 && !word.firstElementChild) word.innerHTML = 'cyf<b>tech</b>';
    pct.textContent = ('00' + Math.round(100 * ease((t - .4) / 1.3))).slice(-3);
    fps.textContent = ('000' + Math.round(t * 1173 % 10000)).slice(-4);
    requestAnimationFrame(frame);
  })(t0);
})();</script>
<a class="sr-only" href="#icerik">İçeriğe geç</a>
<header class="site-head">
  <a class="logo" href="./" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="Ana menü">
    <div class="nav-dd">
      <button type="button" aria-haspopup="true">Hizmetler <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
      <div class="dd-menu"><a href="web-cozumleri"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg><span class="num">01</span><span><b>Web Çözümleri</b><small>Web tasarım, yazılım, e-ticaret ve SEO — tek çatı altında.</small></span></a><a href="masaustu-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg><span class="num">02</span><span><b>Masaüstü Uygulamalar</b><small>İşinize özel, çevrimdışı da çalışan masaüstü yazılımlar.</small></span></a><a href="mobil-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span class="num">03</span><span><b>Mobil Uygulamalar</b><small>iOS ve Android için hızlı, kullanıcı dostu uygulamalar.</small></span></a></div>
    </div>
    <a href="projelerimiz">Projeler</a>
    <a href="referanslar">Referanslar</a>
    <a href="blog" aria-current="page">Blog</a>
    <a href="hakkimizda">Hakkımızda</a>
    <a href="iletisim">İletişim</a>
  </nav>
  <div class="head-actions">
    <div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="Dil seçin"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span data-lang-cur>TR</span></button>
      <div class="lang-menu"><a href="blog" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/blog" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/blog" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/blog" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/blog" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/blog" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
    </div>
    <button type="button" class="icon-btn theme-btn" aria-label="Gece / gündüz teması" title="Gece / gündüz teması"><svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg></button>
    <a class="btn btn-primary btn-sm" href="iletisim">Teklif Al<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    <button class="menu-btn" type="button" aria-label="Menüyü aç" data-label-open="Menüyü aç" data-label-close="Menüyü kapat" aria-expanded="false" aria-controls="mnav"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
  </div>
  
</header>
<nav class="mnav" id="mnav" aria-label="Mobil menü">
  <a href="./">Ana Sayfa</a>
  <div class="mnav-label">HİZMETLER</div>
  <a href="web-cozumleri"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Web Çözümleri</a><a href="masaustu-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Masaüstü Uygulamalar</a><a href="mobil-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Mobil Uygulamalar</a>
  <div class="mnav-label">KURUMSAL</div>
  <a href="projelerimiz">Projeler</a>
  <a href="referanslar">Referanslar</a>
  <a href="blog" aria-current="page">Blog</a>
  <a href="hakkimizda">Hakkımızda</a>
  <a href="iletisim">İletişim</a>
  <a class="btn btn-primary" href="iletisim">Teklif Al<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
</nav>
<main id="icerik">
<section class="page-hero">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
      <div class="hero-grid"><div><div class="crumbs"><a href="./">CYF TECH</a><span>/</span><span>BLOG</span></div>
      <div class="eyebrow">// CYF TECH · BLOG</div>
      <h1 class="h1">Blog ve <span class="accent">haberler.</span></h1>
      <p class="lead" style="margin-top:24px">Teknoloji, yazılım ve sektörel gelişmeler üzerine içerikler; CYF Tech’ten en güncel duyurular ve haberler.</p></div><div><div class="bl-term" aria-hidden="true">
        <div class="bl-bar"><i></i><i></i><i></i><span>~/cyftech/blog</span></div>
        <div class="bl-screen"><p><span class="bl-p">$</span> git log --oneline</p><ul><li style="--i:0"><span class="bl-h">da86c96</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">web tasarım:</span> Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</li><li style="--i:1"><span class="bl-h">483bdc8</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">web tasarım:</span> Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</li><li style="--i:2"><span class="bl-h">59eef87</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">seo:</span> SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</li><li style="--i:3"><span class="bl-h">1b3c2b9</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">e-ticaret:</span> E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</li><li style="--i:4"><span class="bl-h">1496763</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">mobil uygulama:</span> Mobil Uygulama Geliştirme Maliyeti 2026: Fiyatı Belirleyen 8 Kalem</li><li style="--i:5"><span class="bl-h">4617861</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">yazılım:</span> WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</li><li style="--i:6"><span class="bl-h">8f0b6dd</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">seo:</span> Yerel SEO ve Google İşletme Profili: Haritalarda Öne Çıkma Rehberi</li><li style="--i:7"><span class="bl-h">5179c62</span> <span class="bl-d">2026-10-31</span> <span class="bl-k">yapay zekâ:</span> KOBİ’ler İçin Yapay Zekâ: 10 Pratik Kullanım Alanı ve Yol Haritası</li><li style="--i:8"><span class="bl-d">… +14</span></li></ul><p style="--i:9"><span class="bl-p">$</span> <span class="bl-caret"></span></p></div>
      </div></div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap">
    <a class="bl-feat reveal" href="kurumsal-web-sitesi-rehberi">
      <div class="bl-feat-img"><img src="assets/img/blog/01.jpeg" alt="" loading="lazy"></div>
      <div class="bl-feat-body">
        <span class="bl-flag">ÖNE ÇIKAN</span>
        <div class="bl-meta"><b>Web Tasarım</b><span>·</span><time datetime="2026-10-31">31 Ekim 2026</time><span>·</span>6 dk okuma</div>
        <h2 class="h2">Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</h2>
        <p>Amaçtan mobil uyuma, hızdan SEO’ya ve yayın sonrası bakıma: yeni bir web sitesine yatırım yapmadan önce sormanız gereken soruları ve sık yapılan hataları derledik.</p>
        <span class="link-arrow">Yazıyı oku →</span>
      </div>
    </a>
  </div>
</section>

<section class="section-tight">
  <div class="wrap">
    <div class="sec-head" data-num="01"><div><div class="eyebrow">// TÜM YAZILAR</div><h2 class="h2">Yayın akışı.</h2></div><p class="muted">22 yazı yayında. Yeni içerikler akışın en üstüne eklenir.</p></div>
    <div class="bl-filter" role="group" aria-label="Kategoriye göre süz"><button type="button" class="bl-chip" data-kat="" aria-pressed="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Tümü</span><i>22</i></button><button type="button" class="bl-chip" data-kat="Yazılım" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg><span>Yazılım</span><i>5</i></button><button type="button" class="bl-chip" data-kat="SEO" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg><span>SEO</span><i>4</i></button><button type="button" class="bl-chip" data-kat="Web Tasarım" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg><span>Web Tasarım</span><i>4</i></button><button type="button" class="bl-chip" data-kat="Dijital Pazarlama" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg><span>Dijital Pazarlama</span><i>2</i></button><button type="button" class="bl-chip" data-kat="Mobil Uygulama" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span>Mobil Uygulama</span><i>2</i></button><button type="button" class="bl-chip" data-kat="Güvenlik" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><span>Güvenlik</span><i>2</i></button><button type="button" class="bl-chip" data-kat="Haber" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10M7 12h10M7 16h6"/></svg><span>Haber</span><i>1</i></button><button type="button" class="bl-chip" data-kat="E-Ticaret" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg><span>E-Ticaret</span><i>1</i></button><button type="button" class="bl-chip" data-kat="Yapay Zekâ" aria-pressed="false"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/></svg><span>Yapay Zekâ</span><i>1</i></button></div>
    <div class="bl-log">
      <a class="bl-row reveal" href="kurumsal-web-sitesi-rehberi" data-kat="Web Tasarım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">da86c96</span><b>Web Tasarım</b><span>·</span>6 dk okuma</div>
          <h3 class="h3">Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</h3>
          <p>Amaçtan mobil uyuma, hızdan SEO’ya ve yayın sonrası bakıma: yeni bir web sitesine yatırım yapmadan önce sormanız gereken soruları ve sık yapılan hataları derledik.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/01.jpeg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="web-sitesi-fiyatlari" data-kat="Web Tasarım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">483bdc8</span><b>Web Tasarım</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</h3>
          <p>Aynı site için bir teklif 10 bin, diğeri 150 bin TL olabiliyor. Web sitesi fiyatlarını belirleyen 9 faktörü, yıllık giderleri ve teklifleri doğru karşılaştırmanın yolunu anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/web-sitesi-fiyatlari.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="seo-nedir" data-kat="SEO"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">59eef87</span><b>SEO</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</h3>
          <p>SEO nedir, Google bir sayfayı nasıl bulur ve sıralar, yapay zekâ özetleri neyi değiştirdi? İşletme sahipleri için jargonsuz, adım adım bir başlangıç rehberi.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/seo-nedir.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="e-ticaret-sitesi-kurma-rehberi" data-kat="E-Ticaret"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">1b3c2b9</span><b>E-Ticaret</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</h3>
          <p>Şirket kuruluşundan ETBİS kaydına, sanal POS’tan mesafeli satış sözleşmesine ve kargoya kadar Türkiye’de e-ticaret sitesi kurmanın tüm adımları tek rehberde.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/e-ticaret-sitesi-kurma-rehberi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="mobil-uygulama-gelistirme-maliyeti" data-kat="Mobil Uygulama"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">1496763</span><b>Mobil Uygulama</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Mobil Uygulama Geliştirme Maliyeti 2026: Fiyatı Belirleyen 8 Kalem</h3>
          <p>Bir mobil uygulamanın fiyatı neden 250 bin TL de olabilir, 3 milyon TL de? Kapsam, platform, backend, tasarım, mağaza ücretleri ve bakım kalemlerini tek tek açıkladık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/mobil-uygulama-gelistirme-maliyeti.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="wordpress-mi-ozel-yazilim-mi" data-kat="Yazılım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">4617861</span><b>Yazılım</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</h3>
          <p>Hazır altyapı hızlı ve ekonomik, özel yazılım esnek ve size ait. WordPress ile özel yazılımı maliyet, güvenlik, hız ve büyüme açısından karşılaştırıp hangisinin size uygun olduğunu anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/wordpress-mi-ozel-yazilim-mi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="yerel-seo-google-isletme-profili" data-kat="SEO"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">8f0b6dd</span><b>SEO</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Yerel SEO ve Google İşletme Profili: Haritalarda Öne Çıkma Rehberi</h3>
          <p>“Yakınımda” aramalarında neden rakibiniz çıkıyor da siz çıkmıyorsunuz? Google İşletme Profili, yorumlar, NAP tutarlılığı ve yerel sayfalarla haritalarda görünür olmanın yolları.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/yerel-seo-google-isletme-profili.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="kobiler-icin-yapay-zeka" data-kat="Yapay Zekâ"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">5179c62</span><b>Yapay Zekâ</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">KOBİ’ler İçin Yapay Zekâ: 10 Pratik Kullanım Alanı ve Yol Haritası</h3>
          <p>Yapay zekâ artık yalnızca büyük şirketlerin işi değil. KOBİ’lerin bugün kullanabileceği 10 somut alanı, Türkiye’deki güncel kullanım verilerini, KVKK risklerini ve küçük adımlarla başlama planını derledik.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/kobiler-icin-yapay-zeka.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="site-hizi-core-web-vitals" data-kat="SEO"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">c88aa60</span><b>SEO</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)</h3>
          <p>LCP, INP ve CLS ne anlama gelir, iyi eşikler nedir, nasıl ölçülür ve nasıl iyileştirilir? Site hızını artırmak için Core Web Vitals’ı sade bir dille anlatıyoruz.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/site-hizi-core-web-vitals.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="kvkk-uyumlu-web-sitesi" data-kat="Güvenlik"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">6050e47</span><b>Güvenlik</b><span>·</span>9 dk okuma</div>
          <h3 class="h3">KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza</h3>
          <p>İletişim formundan çerez bandına, Google Analytics’ten VERBİS’e: bir web sitesini KVKK’ya uygun hâle getirmek için atılması gereken adımları, Kurum’un 2025 çerez rehberi ışığında anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/kvkk-uyumlu-web-sitesi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="native-mi-cross-platform-mu" data-kat="Mobil Uygulama"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">88c7181</span><b>Mobil Uygulama</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması</h3>
          <p>Swift ve Kotlin ile iki ayrı uygulama mı, Flutter veya React Native ile tek kod tabanı mı? Performans, maliyet, ekip ve bakım açısından doğru kararı vermenize yardımcı olacak bir karşılaştırma.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/native-mi-cross-platform-mu.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="ozel-yazilim-gelistirme" data-kat="Yazılım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">d457165</span><b>Yazılım</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Özel Yazılım Geliştirme: Ne Zaman Gerekir, Süreç Nasıl İşler?</h3>
          <p>Hazır programlar işinize yetmiyor mu? Özel yazılım geliştirmenin ne zaman mantıklı olduğunu, adım adım süreci, maliyeti belirleyen kalemleri ve sözleşmede mutlaka olması gerekenleri anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/ozel-yazilim-gelistirme.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="google-ads-mi-seo-mu" data-kat="Dijital Pazarlama"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">b85b32c</span><b>Dijital Pazarlama</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Google Ads mi SEO mu? Bütçenizi Nereye Yatırmalısınız (2026)</h3>
          <p>Reklam hemen trafik getirir ama bütçe bitince durur; SEO yavaş başlar ama birikir. İşletmenizin durumuna göre hangisinin, ne zaman ve hangi oranda mantıklı olduğunu karşılaştırıyoruz.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/google-ads-mi-seo-mu.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="donusum-odakli-web-tasarim" data-kat="Web Tasarım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">f017d9e</span><b>Web Tasarım</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler</h3>
          <p>Güzel görünen her site satış getirmez. Dönüşüm odaklı web tasarımın temel ilkelerini; ilk ekran, CTA, form, güven, hız ve ölçümle ilgili uygulanabilir önerilerle anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/donusum-odakli-web-tasarim.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="teknik-seo-kontrol-listesi" data-kat="SEO"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">1e8c5de</span><b>SEO</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde</h3>
          <p>İçeriğiniz iyi ama Google sayfalarınızı görmüyorsa sorun büyük ihtimalle tekniktir. Tarama, dizine ekleme, hız, yapılandırılmış veri ve yapay zekâ tarayıcıları için madde madde denetim listesi.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/teknik-seo-kontrol-listesi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="alan-adi-ve-hosting-secimi" data-kat="Web Tasarım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">dc66376</span><b>Web Tasarım</b><span>·</span>9 dk okuma</div>
          <h3 class="h3">Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi</h3>
          <p>.com mu .com.tr mi, TRABİS nedir, alan adı kimin adına kayıtlı olmalı, hangi hosting türü size uygun? Web sitenizin temelini doğru atmak için pratik rehber.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/alan-adi-ve-hosting-secimi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="web-sitesi-guvenligi" data-kat="Güvenlik"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">4da070c</span><b>Güvenlik</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">Web Sitesi Güvenliği ve SSL: KOBİ’ler İçin 2026 Rehberi</h3>
          <p>SSL sertifikası yeterli mi? Güncellemeler, güçlü erişim, yedekleme, güvenlik duvarı ve OWASP Top 10 ile web sitenizi korumanın pratik yolları ve kısalan SSL süreleri.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/web-sitesi-guvenligi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="landing-page-rehberi" data-kat="Dijital Pazarlama"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">64bcd0f</span><b>Dijital Pazarlama</b><span>·</span>10 dk okuma</div>
          <h3 class="h3">Landing Page Nedir, Nasıl Hazırlanır? Adım Adım Rehber</h3>
          <p>Reklama para verip ziyaretçiyi ana sayfaya göndermek bütçeyi boşa harcamaktır. Landing page’in ne olduğunu, türlerini, temel bileşenlerini ve adım adım nasıl hazırlanacağını anlattık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/landing-page-rehberi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="masaustu-mu-web-uygulamasi-mi" data-kat="Yazılım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">2730961</span><b>Yazılım</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Masaüstü Uygulama mı Web Uygulaması mı? Doğru Seçim İçin Rehber</h3>
          <p>Kurulumlu bir Windows programı mı, tarayıcıdan açılan bir web uygulaması mı? Çevrimdışı çalışma, donanım erişimi, güvenlik, maliyet ve güncelleme açısından iki yaklaşımı karşılaştırdık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/masaustu-mu-web-uygulamasi-mi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="apartman-yonetim-yazilimi" data-kat="Yazılım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">f29ec96</span><b>Yazılım</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey</h3>
          <p>Aidat takibinden KVKK’ya, online tahsilattan raporlamaya: apartman ve site yönetim yazılımı seçerken bakmanız gereken kriterleri, Kat Mülkiyeti Kanunu’na uyumu ve kontrol listesini tarafsız bir gözle derledik.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/apartman-yonetim-yazilimi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="restoran-adisyon-sistemi" data-kat="Yazılım"><time class="bl-date" datetime="2026-10-31"><b>31</b><span>Eki 2026</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">1188e94</span><b>Yazılım</b><span>·</span>8 dk okuma</div>
          <h3 class="h3">Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi</h3>
          <p>Garson ekranından mutfak ekranına, yazarkasa entegrasyonundan e-Adisyon’a, çok şubeli raporlamadan kuver yasağına: restoran adisyon ve POS sistemi seçerken bakmanız gerekenleri tarafsız bir rehberde topladık.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/restoran-adisyon-sistemi.svg" alt="" loading="lazy"></div></a><a class="bl-row reveal" href="blog-inside" data-kat="Haber"><time class="bl-date" datetime="2025-08-24"><b>24</b><span>Ağu 2025</span></time>
        <div class="bl-node" aria-hidden="true"><svg class="ic" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10M7 12h10M7 16h6"/></svg></div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">3a774ca</span><b>Haber</b><span>·</span>2 dk okuma</div>
          <h3 class="h3">CYF Tech ÜLKE TV'de</h3>
          <p>CYF Tech, Ülke TV’de yayınlanan Aycan Gül ile Yeni Nesil İşler programına konuk oldu; kuruluş hikâyemizi, projelerimizi ve yapay zekânın iş dünyasına etkisini konuştuk.</p><span class="bl-more">Devamını oku →</span>
        </div>
        <div class="bl-thumb"><img src="assets/img/blog/ulketv.webp" alt="" loading="lazy"></div></a>
    </div>
  </div>
</section>

<section class="section cta-dark">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// HAYDİ BAŞLAYALIM</div>
        <h2 class="h2">Projenizi birlikte hayata geçirelim.</h2>
        <p class="lead" style="margin-top:20px">Aklınızdaki projeyi anlatın, size özel teklifimizi hazırlayalım.</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim">Teklif Al<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn" href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp'tan yazın</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg><span class="k">tel</span>0543 791 10 61</a>
        <a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span class="k">mail</span>info@cyftech.com.tr</a>
        <a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="k">adres</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="./" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
        <p>Dijitalin güvenilir noktası. Web tasarım, yazılım geliştirme ve dijital çözümler.</p>
      </div>
      <div>
        <h2>HIZLI MENÜ</h2>
        <ul><li><a href="./">Ana Sayfa</a></li><li><a href="projelerimiz">Projeler</a></li><li><a href="referanslar">Referanslar</a></li><li><a href="blog">Blog</a></li><li><a href="hakkimizda">Hakkımızda</a></li><li><a href="iletisim">İletişim</a></li></ul>
      </div>
      <div>
        <h2>HİZMETLER</h2>
        <ul><li><a href="web-cozumleri"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Web Çözümleri</a></li><li><a href="masaustu-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Masaüstü Uygulamalar</a></li><li><a href="mobil-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Mobil Uygulamalar</a></li></ul>
      </div>
      <div>
        <h2>İLETİŞİM</h2>
        <ul><li><a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg>0543 791 10 61</a></li><li><a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@cyftech.com.tr</a></li><li><a href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp</a></li><li><a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — Dijitalin güvenilir noktası.</span>
      <span>Tüm hakları saklıdır.</span>
    </div>
  </div>
</footer>
<a class="wa-fab" href="https://wa.me/905437911061" target="_blank" rel="noopener" aria-label="WhatsApp ile yazın"><svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a>
</body>
</html>
