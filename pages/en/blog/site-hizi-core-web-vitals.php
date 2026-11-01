<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Core Web Vitals and Site Speed: A Guide to LCP, INP and CLS (2026) — CYF Tech Blog</title>
<meta name="description" content="What are Core Web Vitals? LCP, INP and CLS thresholds, measuring with PageSpeed Insights and Search Console, and practical steps to speed up your site.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Core Web Vitals and Site Speed: A Guide to LCP, INP and CLS (2026) — CYF Tech Blog">
<meta property="og:description" content="What are Core Web Vitals? LCP, INP and CLS thresholds, measuring with PageSpeed Insights and Search Console, and practical steps to speed up your site.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/en/site-hizi-core-web-vitals">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="en_US">
<link rel="canonical" href="https://cyftech.com.tr/en/site-hizi-core-web-vitals">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Core Web Vitals and Site Speed: A Guide to LCP, INP and CLS (2026)", "description": "What are Core Web Vitals? LCP, INP and CLS thresholds, measuring with PageSpeed Insights and Search Console, and practical steps to speed up your site.", "image": "https://cyftech.com.tr/assets/img/blog/site-hizi-core-web-vitals.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "en", "mainEntityOfPage": "https://cyftech.com.tr/en/site-hizi-core-web-vitals", "url": "https://cyftech.com.tr/en/site-hizi-core-web-vitals", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/en/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/en/blog"}, {"@type": "ListItem", "position": 3, "name": "Core Web Vitals and Site Speed: A Guide to LCP, INP and CLS (2026)", "item": "https://cyftech.com.tr/en/site-hizi-core-web-vitals"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "en", "mainEntity": [{"@type": "Question", "name": "What are Core Web Vitals?", "acceptedAnswer": {"@type": "Answer", "text": "Core Web Vitals are three metrics defined by Google to measure real user experience: LCP for loading speed, INP for responsiveness to interaction and CLS for visual stability. These metrics are used in Google’s page experience assessment."}}, {"@type": "Question", "name": "What is a good LCP value in seconds?", "acceptedAnswer": {"@type": "Answer", "text": "According to Google, an LCP of 2.5 seconds or less is considered good, and over 4 seconds is considered poor. The assessment is based on the 75th percentile of real user visits."}}, {"@type": "Question", "name": "Why did INP replace FID?", "acceptedAnswer": {"@type": "Answer", "text": "FID only measured the delay of the first interaction on a page, and most sites passed it easily. INP tracks all interactions on the page and reports one of the slowest, so it better reflects the user’s real experience. The change took effect in March 2024."}}, {"@type": "Question", "name": "If my PageSpeed score isn’t 100, is my SEO bad?", "acceptedAnswer": {"@type": "Answer", "text": "No. The Lighthouse score is a lab test and not a direct ranking signal. What matters is that LCP, INP and CLS are within the good thresholds in real user data. A page scoring 85 with good field data means more than a test result of 100."}}, {"@type": "Question", "name": "When do Core Web Vitals fixes show up?", "acceptedAnswer": {"@type": "Answer", "text": "Because field data is based on the user experience of the last 28 days, it takes about four weeks for fixes to be fully reflected in reports. In lab tests, however, you can see the improvement immediately."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/site-hizi-core-web-vitals">

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
      <div class="lang-menu"><a href="../site-hizi-core-web-vitals" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="site-hizi-core-web-vitals" hreflang="en" lang="en" data-lang="en" aria-current="true"><b>EN</b><span>English</span></a><a href="../de/site-hizi-core-web-vitals" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="../ar/site-hizi-core-web-vitals" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="../zh/site-hizi-core-web-vitals" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="../ru/site-hizi-core-web-vitals" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>SEO</span></div>
    <h1 class="h1" style="max-width:900px">Core Web Vitals and site speed: a guide to LCP, INP and CLS.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 October 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 min read</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/site-hizi-core-web-vitals.svg" alt=""></div>
      <p class="bi-lead">A visitor arrived at your site, but the page didn’t load; they tapped a button, but nothing happened; they started reading and the text jumped down. Each of these three small frustrations has a name at Google: <b>Core Web Vitals</b>. The clearest way to measure and improve site speed runs through these three metrics.</p>
      <p>In this article we explain what Core Web Vitals are, the current “good” thresholds for LCP, INP and CLS, which tools to use to measure them correctly and how, and the improvements that make the biggest difference for each.</p>
      <p>Even without a technical team, by the end of the article you’ll be able to check your site’s status yourself and ask your agency or developer the right questions.</p>
      <h2 id="neden" class="bi-h2" data-n="01">Why is site speed both a customer and an SEO issue?</h2>
      <p>A slow site first loses you users. A visitor staring at a blank screen for a few seconds on a mobile connection goes back to the search and clicks the next result. For traffic you’ve paid for with ads, that is a direct loss of money.</p>
      <p>On Google’s side, Core Web Vitals are among the signals its ranking systems consider as part of “page experience”. Google Search Central states this clearly; however, the same document stresses that content relevance is still far more decisive. So a fast page with weak content won’t rise to the top; between two pages of similar quality, though, experience can make the difference.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Speed alone won’t make you number one, but slowness can easily leave you behind.</blockquote>
      <h2 id="metrikler" class="bi-h2" data-n="02">Core Web Vitals metrics and 2026 thresholds</h2>
      <p>Core Web Vitals consist of three metrics. Each measures a different aspect of user experience: loading, interactivity and visual stability.</p>
      <table>
        <thead><tr><th>Metric</th><th>What does it measure?</th><th>Good</th><th>Needs improvement</th><th>Poor</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b> (Largest Contentful Paint)</td><td>Time for the largest image or text block on the page to appear on screen</td><td>≤ 2.5 s</td><td>2.5–4 s</td><td>&gt; 4 s</td></tr>
          <tr><td><b>INP</b> (Interaction to Next Paint)</td><td>Time for the page to respond visually to clicks, taps and key presses</td><td>≤ 200 ms</td><td>200–500 ms</td><td>&gt; 500 ms</td></tr>
          <tr><td><b>CLS</b> (Cumulative Layout Shift)</td><td>Unexpected shifting of elements while the page loads and is used</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0.25</td></tr>
        </tbody>
      </table>
      <p>An important detail: Google evaluates these values at the <b>75th percentile of real users</b>. In other words, at least 75 percent of visits must fall within the “good” threshold. For a page to pass Core Web Vitals, all three metrics must be good; if one is poor, no averaging takes place.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>If you still see FID:</b> INP replaced FID (First Input Delay) as the interactivity metric in March 2024. FID looked only at the delay of the first interaction, while INP takes all interactions on the page into account, so it is more demanding. Sites that looked “good” on FID in old reports can fail on INP.</div></div>
      <h2 id="olcum" class="bi-h2" data-n="03">How to measure Core Web Vitals: field data and lab data</h2>
      <p>The most common measurement mistake is deciding based on a single PageSpeed score. There are two types of data, and they tell you different things:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Field data:</b> Chrome UX Report (CrUX) data collected from the real experiences of Chrome users. This is the data Google considers for ranking, and it reflects the average of the last 28 days.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Lab data:</b> A Lighthouse test run on a single simulated device and connection. It is ideal for diagnosing problems but doesn’t exactly reflect real user experience. It can’t measure INP directly; Total Blocking Time (TBT) is used instead.</span></li>
      </ul>
      <h3>Which tool should you use for what?</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>PageSpeed Insights:</b> Shows both field and lab data together for a single URL. Rely on the “real user experience” section at the top.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Search Console — Core Web Vitals report:</b> Groups your whole site into similar pages and shows which URLs are poor on mobile and desktop.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Chrome DevTools (Performance panel):</b> The developers’ tool for finding the cause of slow interactions and shifts line by line.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>web-vitals library:</b> Google’s small JavaScript library for sending real user measurements to your own analytics tool.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Note:</b> New sites with little traffic may have no CrUX data. In that case, work with lab data, but be sure to also test manually on a mid-range Android phone over a mobile connection.</div></div>
      <h2 id="lcp" class="bi-h2" data-n="04">How to improve LCP: show the main content faster</h2>
      <p>On most corporate sites, the LCP element is the large image (hero) or main heading at the top of the page. LCP time consists of four parts: the server’s first response (TTFB), resource discovery, resource download and rendering. Improvements follow the same order.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Speed up the server response:</b> web.dev considers a TTFB of 0.8 seconds or less to be good. Page caching, quality hosting and a CDN reduce this time significantly.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Make the LCP image discoverable early:</b> Put the image directly in the HTML, not via a CSS background or JavaScript; prioritise it with fetchpriority="high".</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Don’t lazy-load the above-the-fold image:</b> Lazy loading is for images below the fold; on the main image it delays LCP.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Shrink the image:</b> Use WebP or AVIF, the right dimensions and srcset to avoid downloading unnecessarily large files on mobile.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Reduce render-blocking resources:</b> Inline critical CSS, remove unused CSS and synchronously loaded scripts, and use font-display: swap for fonts.</span></li>
      </ul>
      <p>For the impact of hosting decisions on speed, see our article on <a href="alan-adi-ve-hosting-secimi">choosing a domain and hosting</a> as well.</p>
      <h2 id="inp" class="bi-h2" data-n="05">How to improve INP: respond to clicks instantly</h2>
      <p>INP problems usually stem from the browser’s main thread being busy with JavaScript. The user taps the menu, but the response is delayed because the browser is running an analytics script or a large slider’s code at that moment.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Break up long tasks:</b> Split JavaScript tasks longer than 50 ms into chunks; give the user visual feedback first and do the heavy work afterwards.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Review third-party scripts:</b> Chat bubbles, heatmap tools and multiple ad and analytics tags are the most common INP culprits. Keep the ones you really use and defer loading the rest.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Keep the DOM small:</b> On pages with thousands of elements, re-rendering after every interaction becomes expensive.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Reduce plugin and theme overhead:</b> Unused code that ready-made themes load on every page slows interaction, especially on low-end phones.</span></li>
      </ul>
      <p>This is where the choice of platform becomes decisive. For the difference between a site that grows with plugins and a lightweight site written for its needs, see <a href="wordpress-mi-ozel-yazilim-mi">WordPress or custom software</a>.</p>
      <h2 id="cls" class="bi-h2" data-n="06">How to improve CLS: stop the page from shifting</h2>
      <p>The line you’re reading suddenly jumping down, or a button moving just as you’re about to tap it, is what CLS measures. Fortunately the fixes are usually simple:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Give images and videos dimensions:</b> With width and height attributes or CSS aspect-ratio, the browser reserves the space in advance.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Reserve fixed space for ads, banners and embeds:</b> A cookie notice or campaign bar that loads later shouldn’t push content down; it should open as an overlay on top.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Smooth out font swaps:</b> Preload the web font and keep the fallback font’s metrics close to it.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Use transform for animations:</b> Animate with transform and opacity instead of layout-affecting properties such as top, left and height.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Quick check:</b> Open your site on a phone with a slow connection and watch the screen closely for the first three seconds. Every jump you see with your own eyes is reflected in your CLS score.</div></div>
      <h2 id="platform" class="bi-h2" data-n="07">The most common speed problems by site type</h2>
      <p>Not every site is slow for the same reason. Here is a summary, by site type, of what we encounter in projects:</p>
      <table>
        <thead><tr><th>Site type</th><th>Most common problem</th><th>Where to look first</th></tr></thead>
        <tbody>
          <tr><td>Corporate site with a ready-made theme</td><td>Heavy theme, lots of plugins, large slider images</td><td>Unused plugins, main image size, page caching</td></tr>
          <tr><td>E-commerce site</td><td>Product images, filters, lots of tracking and marketing tags</td><td>Category page LCP, third-party scripts, INP of basket interactions</td></tr>
          <tr><td>Single-page application (React, Vue, etc.)</td><td>Large JavaScript bundles, content rendered late in the browser</td><td>Server-side rendering or pre-rendering, code splitting</td></tr>
          <tr><td>News and blog site</td><td>Ad slots loading late and shifting content</td><td>Fixed space reserved for ad slots, CLS</td></tr>
        </tbody>
      </table>
      <p>This table is a starting point; an exact diagnosis always comes from measurement. Still, knowing where the problem most likely lies saves time when talking to a developer. For example, if the product detail page of an e-commerce site is fast but the category page is slow, the problem is usually dozens of listed images being downloaded at once and at full size.</p>
      <p>If you’re aiming for a fast, lightweight experience that feels like a mobile app, this needs to be discussed at the design stage. Every “small” feature added to a page later takes a share of the speed budget.</p>
      <h2 id="plan" class="bi-h2" data-n="08">A step-by-step plan to speed up your site</h2>
      <p>Instead of trying to fix everything at once, start with what has the biggest impact:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Step 1 —</b> Open the Core Web Vitals report in Search Console and list the page groups rated “poor” on mobile.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Step 2 —</b> Test a sample URL from each group in PageSpeed Insights and note which metric is failing.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Step 3 —</b> Fix template-level problems first: hundreds of pages using the same template improve with a single fix.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Step 4 —</b> Apply quick wins such as images, caching and a CDN; then move on to JavaScript and third-party scripts.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Step 5 —</b> Click “validate fix” in Search Console and wait for the field data to update within 28 days.</span></li>
      </ul>
      <p>Speed is not a one-off project but a budget that must be protected continuously. A new plugin, a large image or an extra tracking code can undo the gains within a few weeks. So before adding any new feature, ask “how much will this slow the page down?” If you want to see speed’s place in search visibility in a broader context, you can also take a look at <a href="teknik-seo-kontrol-listesi">our technical SEO checklist</a>.</p>
      <div class="bi-check">
        <div class="eyebrow">// SPEED CHECKLIST</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Is LCP under 2.5 seconds on mobile?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Is INP under 200 ms, and have unnecessary third-party scripts been removed?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Is CLS under 0.1, and do all images have dimensions defined?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Is the main image loaded with priority and without lazy loading?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Are images in WebP/AVIF and the right size?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Are page caching, compression and a CDN enabled?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Is the Search Console Core Web Vitals report monitored regularly?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Frequently asked questions</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>What are Core Web Vitals?</summary><p>Core Web Vitals are three metrics defined by Google to measure real user experience: LCP for loading speed, INP for responsiveness to interaction and CLS for visual stability. These metrics are used in Google’s page experience assessment.</p></details><details class="bi-faq-i"><summary>What is a good LCP value in seconds?</summary><p>According to Google, an LCP of 2.5 seconds or less is considered good, and over 4 seconds is considered poor. The assessment is based on the 75th percentile of real user visits.</p></details><details class="bi-faq-i"><summary>Why did INP replace FID?</summary><p>FID only measured the delay of the first interaction on a page, and most sites passed it easily. INP tracks all interactions on the page and reports one of the slowest, so it better reflects the user’s real experience. The change took effect in March 2024.</p></details><details class="bi-faq-i"><summary>If my PageSpeed score isn’t 100, is my SEO bad?</summary><p>No. The Lighthouse score is a lab test and not a direct ranking signal. What matters is that LCP, INP and CLS are within the good thresholds in real user data. A page scoring 85 with good field data means more than a test result of 100.</p></details><details class="bi-faq-i"><summary>When do Core Web Vitals fixes show up?</summary><p>Because field data is based on the user experience of the last 28 days, it takes about four weeks for fixes to be fully reflected in reports. In lab tests, however, you can see the improvement immediately.</p></details></div>
      <h2 id="sonuc">Final word</h2>
      <p>Core Web Vitals reduce how your site feels to visitors to three numbers: the main content should appear within 2.5 seconds, every click should get a response within 200 milliseconds, and the page should shift by less than 0.1. Meeting these targets usually requires not an expensive rebuild but the right diagnosis and disciplined small fixes.</p>
      <p>At CYF Tech, we design the <a href="web-cozumleri">websites and web software</a> we build with a speed budget from the outset, and we also carry out Core Web Vitals analysis and improvements on existing sites. If you’d like to find out together why your site is slow, <a href="iletisim">contact us</a>.</p>
      <div class="bi-src"><div class="eyebrow">// SOURCES</div><ol><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://web.dev/articles/defining-core-web-vitals-thresholds" target="_blank" rel="noopener nofollow">web.dev — How the Core Web Vitals metrics thresholds were defined</a></li><li><a href="https://web.dev/articles/lcp" target="_blank" rel="noopener nofollow">web.dev — Largest Contentful Paint (LCP)</a></li><li><a href="https://web.dev/articles/inp" target="_blank" rel="noopener nofollow">web.dev — Interaction to Next Paint (INP)</a></li><li><a href="https://web.dev/articles/cls" target="_blank" rel="noopener nofollow">web.dev — Cumulative Layout Shift (CLS)</a></li><li><a href="https://web.dev/articles/ttfb" target="_blank" rel="noopener nofollow">web.dev — Time to First Byte (TTFB)</a></li><li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals" target="_blank" rel="noopener nofollow">Google Search Central — Understanding Core Web Vitals and Google search results</a></li><li><a href="https://developers.google.com/search/docs/appearance/page-experience" target="_blank" rel="noopener nofollow">Google Search Central — Understanding page experience</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>All posts</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Share</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="Share on WhatsApp" title="Share on WhatsApp"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="Share on LinkedIn" title="Share on LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="Share on X" title="Share on X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="Send by email" title="Send by email"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="Contents">
        <div class="eyebrow">// IN THIS ARTICLE</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">Why does it matter?</a></li><li><a href="#metrikler" data-n="02">LCP, INP and CLS</a></li><li><a href="#olcum" data-n="03">How is it measured?</a></li><li><a href="#lcp" data-n="04">Improving LCP</a></li><li><a href="#inp" data-n="05">Improving INP</a></li><li><a href="#cls" data-n="06">Improving CLS</a></li><li><a href="#platform" data-n="07">Problems by site type</a></li><li><a href="#plan" data-n="08">Improvement plan</a></li><li><a href="#sss" data-n="09">Frequently asked questions</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// MORE POSTS</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 October 2026</span><b>What Is SEO? A Simple, Practical Beginner’s Guide for 2026</b><span class="bi-read">8 min read</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 October 2026</span><b>Local SEO and Google Business Profile: A Guide to Standing Out on Maps</b><span class="bi-read">8 min read</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 October 2026</span><b>Technical SEO Checklist 2026: 30 Points to Audit Your Website</b><span class="bi-read">8 min read</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 October 2026</span><b>7 Things to Know Before Commissioning a Corporate Website</b><span class="bi-read">6 min read</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 October 2026</span><b>Website Prices in 2026: 9 Factors That Determine the Cost</b><span class="bi-read">10 min read</span></div></a></li></ul>
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
