<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Native or Cross-Platform? Flutter vs React Native Compared — CYF Tech Blog</title>
<meta name="description" content="Native or cross-platform? We compare Flutter, React Native and Kotlin Multiplatform on performance, cost, maintenance and team: which one suits which project?">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Native or Cross-Platform? Flutter vs React Native Compared — CYF Tech Blog">
<meta property="og:description" content="Native or cross-platform? We compare Flutter, React Native and Kotlin Multiplatform on performance, cost, maintenance and team: which one suits which project?">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/en/native-mi-cross-platform-mu">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="en_US">
<link rel="canonical" href="https://cyftech.com.tr/en/native-mi-cross-platform-mu">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Native or Cross-Platform? Flutter vs React Native Compared", "description": "Native or cross-platform? We compare Flutter, React Native and Kotlin Multiplatform on performance, cost, maintenance and team: which one suits which project?", "image": "https://cyftech.com.tr/assets/img/blog/native-mi-cross-platform-mu.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "en", "mainEntityOfPage": "https://cyftech.com.tr/en/native-mi-cross-platform-mu", "url": "https://cyftech.com.tr/en/native-mi-cross-platform-mu", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/en/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/en/blog"}, {"@type": "ListItem", "position": 3, "name": "Native or Cross-Platform? Flutter vs React Native Compared", "item": "https://cyftech.com.tr/en/native-mi-cross-platform-mu"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "en", "mainEntity": [{"@type": "Question", "name": "Are cross-platform apps as fast as native?", "acceptedAnswer": {"@type": "Answer", "text": "In the vast majority of business apps, users won’t notice a difference. Flutter delivers a smooth experience with its own rendering engine, and React Native with its new architecture. For heavy graphics, games or real-time media processing, native still has the edge."}}, {"@type": "Question", "name": "Which is better, Flutter or React Native?", "acceptedAnswer": {"@type": "Answer", "text": "There is no single right answer. Flutter usually makes more sense for a brand-specific interface that looks the same on every device and for desktop targets alongside mobile; React Native if you have a team that knows React and TypeScript or an existing React web project."}}, {"@type": "Question", "name": "Can an app built cross-platform be published on the App Store and Google Play?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Apps built with Flutter and React Native are compiled like native apps and published on both stores under the same rules. Users cannot tell which technology the app was written in."}}, {"@type": "Question", "name": "Is it possible to start cross-platform and switch to native later?", "acceptedAnswer": {"@type": "Answer", "text": "It is possible, but it usually means rewriting the app. Instead, writing specific screens or modules in native code within the cross-platform app is often the more economical route."}}, {"@type": "Question", "name": "Can a mobile app and a website use the same infrastructure?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, and in most cases they should. Whatever mobile technology you choose, the app and the website or admin panel can connect to the same API and database. If React Native is used, part of the business logic can also be shared with a React-based web project. This approach lowers maintenance costs and keeps data consistent in one central place."}}, {"@type": "Question", "name": "What is Kotlin Multiplatform and when should you choose it?", "acceptedAnswer": {"@type": "Answer", "text": "Kotlin Multiplatform is an approach that shares business logic between iOS and Android while letting you write the interface natively or with Compose Multiplatform. It suits projects with a strong Android team that want to share code without losing the native feel."}}]}</script>
<link rel="icon" type="image/png" href="../assets/img/logo/ico.png">
<script>try{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}catch(e){}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&amp;family=Space+Grotesk:wght@400;500;600;700&amp;display=swap">
<link rel="stylesheet" href="../assets/css/site.css?v=20261031d">
<link rel="stylesheet" href="../assets/css/blog.css?v=20261031d">
<link rel="stylesheet" href="../assets/css/theme-light.css?v=20261031d">
<script src="../assets/js/site.js?v=20261031d" defer></script>
<script src="../assets/js/ambient.js?v=20261031d" defer></script>
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/native-mi-cross-platform-mu">

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
<a class="sr-only" href="#icerik">Skip to content</a>
<header class="site-head">
  <a class="logo" href="./" aria-label="CYF Tech home page" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="Main menu">
    <div class="nav-dd">
      <button type="button" aria-haspopup="true">Services <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
      <div class="dd-menu"><a href="web-cozumleri"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg><span class="num">01</span><span><b>Web Solutions</b><small>Web design, software, e-commerce and SEO — all under one roof.</small></span></a><a href="masaustu-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg><span class="num">02</span><span><b>Desktop Applications</b><small>Desktop software tailored to your business that works offline too.</small></span></a><a href="mobil-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span class="num">03</span><span><b>Mobile Applications</b><small>Fast, user-friendly apps for iOS and Android.</small></span></a></div>
    </div>
    <a href="projelerimiz">Projects</a>
    <a href="referanslar">References</a>
    <a href="blog" aria-current="page">Blog</a>
    <a href="hakkimizda">About Us</a>
    <a href="iletisim">Contact</a>
  </nav>
  <div class="head-actions">
    <div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="Select language"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span data-lang-cur>EN</span></button>
      <div class="lang-menu"><a href="../native-mi-cross-platform-mu" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="native-mi-cross-platform-mu" hreflang="en" lang="en" data-lang="en" aria-current="true"><b>EN</b><span>English</span></a><a href="../de/native-mi-cross-platform-mu" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="../ar/native-mi-cross-platform-mu" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="../zh/native-mi-cross-platform-mu" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="../ru/native-mi-cross-platform-mu" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
    </div>
    <button type="button" class="icon-btn theme-btn" aria-label="Dark / light theme" title="Dark / light theme"><svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg></button>
    <a class="btn btn-primary btn-sm" href="iletisim">Get a Quote<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    <button class="menu-btn" type="button" aria-label="Open menu" data-label-open="Open menu" data-label-close="Close menu" aria-expanded="false" aria-controls="mnav"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
  </div>
  
</header>
<nav class="mnav" id="mnav" aria-label="Mobile menu">
  <a href="./">Home</a>
  <div class="mnav-label">SERVICES</div>
  <a href="web-cozumleri"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Web Solutions</a><a href="masaustu-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Desktop Applications</a><a href="mobil-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Mobile Applications</a>
  <div class="mnav-label">COMPANY</div>
  <a href="projelerimiz">Projects</a>
  <a href="referanslar">References</a>
  <a href="blog" aria-current="page">Blog</a>
  <a href="hakkimizda">About Us</a>
  <a href="iletisim">Contact</a>
  <a class="btn btn-primary" href="iletisim">Get a Quote<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
</nav>
<main id="icerik">
<section class="page-hero" style="padding-bottom:48px">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>MOBILE APPS</span></div>
    <h1 class="h1" style="max-width:900px">Native or cross-platform? Flutter vs React Native compared.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Mobile Apps</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 October 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 min read</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/native-mi-cross-platform-mu.svg" alt=""></div>
      <p class="bi-lead">Everyone starting a mobile app project sooner or later faces the same question: <b>native or cross-platform</b>? This is not just a technology choice; it is a business decision that shapes the budget, the timeline, the team and the next five years of the app.</p>
      <p>Until a few years ago the answer was simpler: native if you wanted performance, cross-platform if you wanted fast and cheap. Today Flutter and React Native have matured, and Kotlin Multiplatform has reached a stable release on iOS as well. In this article we explain the approaches in plain language, compare Flutter and React Native, and show with examples which one makes sense for which project.</p>
      <h2 id="kavramlar" class="bi-h2" data-n="01">What do native and cross-platform apps mean?</h2>
      <p>A <b>native app</b> is written separately for each operating system using that platform’s own language and tools: Swift and SwiftUI for iOS, Kotlin and Jetpack Compose for Android. The result is two separate codebases and often two separate teams.</p>
      <p>A <b>cross-platform app</b>, on the other hand, produces both iOS and Android versions from a single codebase. Today’s leading options are:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Flutter:</b> A framework developed by Google that uses the Dart language. It renders the interface with its own drawing engine, giving a pixel-identical look on every device.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>React Native:</b> A framework developed by Meta that uses JavaScript / TypeScript and React. It uses the platform’s native UI components. With version 0.76 the “New Architecture” became the default, largely removing the bottlenecks of the old bridge between JavaScript and native code.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kotlin Multiplatform:</b> JetBrains’ solution. It lets you share business logic in Kotlin and write the interface either natively or with Compose Multiplatform. Compose Multiplatform’s iOS support reached a stable release in May 2025.</span></li>
      </ul>
      <p>There is also the <b>PWA</b> (progressive web app) option: a web app that runs in the browser and can be added to the home screen. It can be a good start for simple needs that don’t require an app store, but it has limitations with notifications and device features, especially on iOS.</p>
      <h2 id="karsilastirma" class="bi-h2" data-n="02">Native vs cross-platform: compared on 7 criteria</h2>
      <p>To make the decision easier, we put the two approaches side by side on the criteria that matter most for business:</p>
      <table>
        <thead><tr><th>Criterion</th><th>Native (Swift + Kotlin)</th><th>Cross-platform (Flutter / React Native)</th></tr></thead>
        <tbody>
          <tr><td>Development cost</td><td>High; two separate codebases</td><td>Lower; most code is shared across both platforms</td></tr>
          <tr><td>Time to market</td><td>Longer</td><td>Shorter; both platforms launch at the same time</td></tr>
          <tr><td>Performance</td><td>Best; especially for graphics- and hardware-intensive work</td><td>Imperceptible for the vast majority of business apps</td></tr>
          <tr><td>Access to new platform features</td><td>Day one</td><td>Usually via a plugin or native code bridge, sometimes with a delay</td></tr>
          <tr><td>Look and feel</td><td>The platform’s native design language</td><td>Consistent brand look in Flutter; native components in React Native</td></tr>
          <tr><td>Maintenance</td><td>Every feature is updated twice</td><td>Updated in one place; framework versions need to be tracked</td></tr>
          <tr><td>Team</td><td>Separate iOS and Android specialists</td><td>One team; you still need someone who knows the native side</td></tr>
        </tbody>
      </table>
      <p>As the table shows, cross-platform has the business advantage on most criteria; native pulls ahead in projects where performance and platform-specific features are at the heart of the product.</p>
      <h2 id="flutter-rn" class="bi-h2" data-n="03">Flutter or React Native? Differences and selection criteria</h2>
      <p>Once you have decided on cross-platform, the second question arrives. Both frameworks are mature, have large communities and are used in production apps by major companies. The real deciding factors are:</p>
      <h3>Flutter stands out if…</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>You want a brand-specific, animated interface that looks exactly the same on every device.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>You are also considering web and desktop (Windows, macOS, Linux) targets alongside mobile with the same code.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Smooth, predictable performance on low-end Android devices matters.</span></li>
      </ul>
      <h3>React Native stands out if…</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Your team or existing web project already uses React and TypeScript; sharing knowledge and code becomes easier.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>You want the app to look like it uses each platform’s own components.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>You want to tap into the huge library pool of the JavaScript ecosystem and make hiring developers easier.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Quick tip:</b> Don’t get stuck on “which one is faster?” debates. In independent benchmarks the difference between the two frameworks is often smaller than the difference caused by a poorly written list screen or unoptimised images. The team’s experience matters more than the framework chosen.</div></div>
      <h2 id="native-ne-zaman" class="bi-h2" data-n="04">Which projects really need native development?</h2>
      <p>Can cross-platform do everything? No. In the following cases you need native development, or at least a significant native layer:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Heavy graphics and real-time processing:</b> games, augmented reality, advanced camera and video editing.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Deep hardware integration:</b> custom Bluetooth devices, medical sensors, low-level audio processing, continuous background work.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Day-one access to platform features:</b> if widgets, watch apps or APIs newly announced by Apple or Google are at the core of your product.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Very large scale:</b> products with millions of users where every millisecond and the app size matter.</span></li>
      </ul>
      <p>Outside these cases, the vast majority of projects such as e-commerce, booking, field teams, customer loyalty, internal corporate apps and admin panels can comfortably be built cross-platform. What’s more, in cross-platform apps you can write a specific screen or feature in native code when needed; the choice is not black and white.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>The right technology is not the most popular one; it is the one that delivers your product’s most critical feature with the least risk.</blockquote>
      <h2 id="maliyet" class="bi-h2" data-n="05">Cost, maintenance and long-term risks</h2>
      <p>The technology decision affects the <b>total cost of ownership</b> more than the initial investment. In native, every new feature is written twice and tested twice; so are bug fixes. In cross-platform, this burden shrinks as the share of shared code grows.</p>
      <p>On the other hand, cross-platform has its own risks:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Framework updates:</b> Major version upgrades of Flutter or React Native, and keeping third-party plugins compatible with them, require regular effort.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Plugin dependency:</b> An abandoned plugin can block a critical feature. When choosing plugins, look at how often they are updated and at their community.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>App size:</b> Because cross-platform apps also bundle the framework engine, they can be somewhat larger than their native counterparts.</span></li>
      </ul>
      <p>If you want the budget side in detail, <a href="mobil-uygulama-gelistirme-maliyeti">in our article on mobile app development costs</a> we break down the items that determine the price one by one.</p>
      <h2 id="senaryolar" class="bi-h2" data-n="06">Four example projects: which technology and why?</h2>
      <p>Thinking in concrete examples rather than abstract criteria makes the decision easier. Below are four project types we often encounter and our assessment of each:</p>
      <h3>Restaurant ordering and loyalty app</h3>
      <p>Menu, basket, online payment, campaign notifications and a points system. There is almost no hardware requirement; launching on both platforms at once and having a brand-specific look matter. Here a single codebase with Flutter or React Native is by far the most efficient choice.</p>
      <h3>Field team app</h3>
      <p>Technicians view work orders, take photos, scan barcodes and sometimes work in basements with no internet. Offline data storage and syncing are critical. Cross-platform meets this need; but getting the offline architecture right from the start matters more than the technology choice.</p>
      <h3>Health app that talks to a custom Bluetooth device</h3>
      <p>The heart of the app is continuous, reliable data exchange with the device, and it also needs to run in the background. Here native development, or at least a hybrid structure with device communication written in native modules, is the safer choice. Because health data is processed, the KVKK rules on special categories of personal data must also be planned for.</p>
      <h3>Internal corporate app</h3>
      <p>An app where employees track leave requests, approval flows and announcements. The number of users is known and store visibility is irrelevant. If the budget is tight, it can make sense to start with a PWA and move to a cross-platform app as needs grow. In such cases <a href="masaustu-mu-web-uygulamasi-mi">desktop or web application</a> also becomes a question.</p>
      <h2 id="karar" class="bi-h2" data-n="07">The right mobile technology decision in 5 questions</h2>
      <p>To make the decision for your own project, answer the following questions in order:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Question 1 —</b> Is there heavy graphics, real-time media or custom hardware at the heart of the app? If yes, take native seriously.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Question 2 —</b> Do you need to launch on both platforms at once with a limited budget? If yes, cross-platform pulls ahead.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Question 3 —</b> What technology does your current team or web project use? If it is React-based, React Native; if you are starting from scratch, Flutter is a strong candidate.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Question 4 —</b> Will you also offer the same product on web and desktop? Flutter covers more targets with one codebase; a shared backend is essential in any case.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Question 5 —</b> Who will maintain the app for at least three years? Will you be able to find developers for the chosen technology?</span></li>
      </ul>
      <p>We asked these questions for our own products too. For example, the web panel, iOS / Android apps and Windows app of KATSİS, our apartment and residential complex management software, are all connected to the same infrastructure. Designing the interface around the needs of users on each platform while keeping the data in one central place significantly reduced the maintenance burden. For details, see <a href="projelerimiz">our projects</a>.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Note:</b> Make the technology decision based on your product’s needs, not on the tool the agency knows best. Ask the company quoting you: “Why do you recommend this technology, and what would the alternative be?” A good team answers this with concrete reasons.</div></div>
      <div class="bi-check">
        <div class="eyebrow">// CHECKLIST BEFORE CHOOSING A TECHNOLOGY</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Has the app’s most critical feature been defined in writing?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Are the hardware and performance requirements clear?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Will both platforms be released at the same time?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>What technology do the current team and web infrastructure use?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Will developers for the chosen technology be available in the long term?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Has the maintenance status of the plugins to be used been checked?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">Frequently asked questions</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Are cross-platform apps as fast as native?</summary><p>In the vast majority of business apps, users won’t notice a difference. Flutter delivers a smooth experience with its own rendering engine, and React Native with its new architecture. For heavy graphics, games or real-time media processing, native still has the edge.</p></details><details class="bi-faq-i"><summary>Which is better, Flutter or React Native?</summary><p>There is no single right answer. Flutter usually makes more sense for a brand-specific interface that looks the same on every device and for desktop targets alongside mobile; React Native if you have a team that knows React and TypeScript or an existing React web project.</p></details><details class="bi-faq-i"><summary>Can an app built cross-platform be published on the App Store and Google Play?</summary><p>Yes. Apps built with Flutter and React Native are compiled like native apps and published on both stores under the same rules. Users cannot tell which technology the app was written in.</p></details><details class="bi-faq-i"><summary>Is it possible to start cross-platform and switch to native later?</summary><p>It is possible, but it usually means rewriting the app. Instead, writing specific screens or modules in native code within the cross-platform app is often the more economical route.</p></details><details class="bi-faq-i"><summary>Can a mobile app and a website use the same infrastructure?</summary><p>Yes, and in most cases they should. Whatever mobile technology you choose, the app and the website or admin panel can connect to the same API and database. If React Native is used, part of the business logic can also be shared with a React-based web project. This approach lowers maintenance costs and keeps data consistent in one central place.</p></details><details class="bi-faq-i"><summary>What is Kotlin Multiplatform and when should you choose it?</summary><p>Kotlin Multiplatform is an approach that shares business logic between iOS and Android while letting you write the interface natively or with Compose Multiplatform. It suits projects with a strong Android team that want to share code without losing the native feel.</p></details></div>
      <h2 id="sonuc">Final word</h2>
      <p>There is no universal answer to native vs cross-platform, but when you ask the right questions the answer usually becomes clear. For most business apps, a single codebase with Flutter or React Native is the most efficient path in terms of both budget and timeline; in projects where performance and hardware are at the heart of the product, a native investment pays off. If you’d like to assess together which approach suits your project, you can browse <a href="mobil-uygulamalar">our mobile app services</a> or <a href="iletisim">get in touch with us</a>.</p>
      <div class="bi-src"><div class="eyebrow">// SOURCES</div><ol><li><a href="https://reactnative.dev/blog/2024/10/23/release-0.76-new-architecture" target="_blank" rel="noopener nofollow">React Native — 0.76 and the New Architecture announcement</a></li><li><a href="https://blog.jetbrains.com/kotlin/2025/05/compose-multiplatform-1-8-0-released-compose-multiplatform-for-ios-is-stable-and-production-ready/" target="_blank" rel="noopener nofollow">JetBrains — Compose Multiplatform 1.8.0: iOS support is stable</a></li><li><a href="https://docs.flutter.dev/" target="_blank" rel="noopener nofollow">Flutter — Official documentation</a></li><li><a href="https://developer.android.com/compose" target="_blank" rel="noopener nofollow">Android Developers — Jetpack Compose</a></li><li><a href="https://developer.apple.com/swiftui/" target="_blank" rel="noopener nofollow">Apple Developer — SwiftUI</a></li><li><a href="https://web.dev/explore/progressive-web-apps" target="_blank" rel="noopener nofollow">web.dev — Progressive Web Apps</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>All posts</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Share</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="Share on WhatsApp" title="Share on WhatsApp"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="Share on LinkedIn" title="Share on LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="Share on X" title="Share on X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="Send by email" title="Send by email"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="Contents">
        <div class="eyebrow">// IN THIS ARTICLE</div>
        <ol class="bi-toc"><li><a href="#kavramlar" data-n="01">Native and cross-platform</a></li><li><a href="#karsilastirma" data-n="02">Comparison table</a></li><li><a href="#flutter-rn" data-n="03">Flutter or React Native</a></li><li><a href="#native-ne-zaman" data-n="04">When is native a must?</a></li><li><a href="#maliyet" data-n="05">Cost and maintenance</a></li><li><a href="#senaryolar" data-n="06">Example scenarios</a></li><li><a href="#karar" data-n="07">Decision guide</a></li><li><a href="#sss" data-n="08">Frequently asked questions</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// MORE POSTS</div>
        <ul class="bi-others"><li><a href="mobil-uygulama-gelistirme-maliyeti"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></span><div><span class="d">31 October 2026</span><b>Mobile App Development Cost in 2026: 8 Items That Set the Price</b><span class="bi-read">8 min read</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 October 2026</span><b>7 Things to Know Before Commissioning a Corporate Website</b><span class="bi-read">6 min read</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 October 2026</span><b>Website Prices in 2026: 9 Factors That Determine the Cost</b><span class="bi-read">10 min read</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 October 2026</span><b>What Is SEO? A Simple, Practical Beginner’s Guide for 2026</b><span class="bi-read">8 min read</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 October 2026</span><b>How to Set Up an E-Commerce Site in 2026: A Step-by-Step Roadmap</b><span class="bi-read">10 min read</span></div></a></li></ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim"><b>Let’s talk about your project.</b><span>Tell us about your idea, and we’ll prepare a quote tailored to you.</span><div class="bi-go">Get a Quote<svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div></a>
    </aside>
  </div>
</section>

<section class="section cta-dark">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// LET'S GET STARTED</div>
        <h2 class="h2">Let's bring your project to life together.</h2>
        <p class="lead" style="margin-top:20px">Tell us about the project you have in mind, and we'll prepare a quote tailored to you.</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim">Get a Quote<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn" href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>Message us on WhatsApp</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg><span class="k">tel</span>0543 791 10 61</a>
        <a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span class="k">mail</span>info@cyftech.com.tr</a>
        <a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="k">address</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="./" aria-label="CYF Tech home page" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
        <p>Your trusted partner in digital. Web design, software development and digital solutions.</p>
      </div>
      <div>
        <h2>QUICK MENU</h2>
        <ul><li><a href="./">Home</a></li><li><a href="projelerimiz">Projects</a></li><li><a href="referanslar">References</a></li><li><a href="blog">Blog</a></li><li><a href="hakkimizda">About Us</a></li><li><a href="iletisim">Contact</a></li></ul>
      </div>
      <div>
        <h2>SERVICES</h2>
        <ul><li><a href="web-cozumleri"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Web Solutions</a></li><li><a href="masaustu-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Desktop Applications</a></li><li><a href="mobil-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Mobile Applications</a></li></ul>
      </div>
      <div>
        <h2>CONTACT</h2>
        <ul><li><a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg>0543 791 10 61</a></li><li><a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@cyftech.com.tr</a></li><li><a href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp</a></li><li><a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — Your trusted partner in digital.</span> <span>All rights reserved.</span>
    </div>
  </div>
</footer>
<a class="wa-fab" href="https://wa.me/905437911061" target="_blank" rel="noopener" aria-label="Message us on WhatsApp"><svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a>
</body>
</html>
