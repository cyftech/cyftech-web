<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Core Web Vitals 与网站速度：LCP、INP、CLS 指南（2026）</title>
<meta name="description" content="什么是 Core Web Vitals？LCP、INP 和 CLS 阈值，如何用 PageSpeed Insights 和 Search Console 测量，以及提升网站速度的实用步骤。">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Core Web Vitals 与网站速度：LCP、INP、CLS 指南（2026）">
<meta property="og:description" content="什么是 Core Web Vitals？LCP、INP 和 CLS 阈值，如何用 PageSpeed Insights 和 Search Console 测量，以及提升网站速度的实用步骤。">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/zh/site-hizi-core-web-vitals">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="zh_CN">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/site-hizi-core-web-vitals.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/zh/site-hizi-core-web-vitals">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Core Web Vitals 与网站速度：LCP、INP、CLS 指南（2026）", "description": "什么是 Core Web Vitals？LCP、INP 和 CLS 阈值，如何用 PageSpeed Insights 和 Search Console 测量，以及提升网站速度的实用步骤。", "image": "https://cyftech.com.tr/assets/img/og/site-hizi-core-web-vitals.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "zh", "mainEntityOfPage": "https://cyftech.com.tr/zh/site-hizi-core-web-vitals", "url": "https://cyftech.com.tr/zh/site-hizi-core-web-vitals", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/zh/"}, {"@type": "ListItem", "position": 2, "name": "博客", "item": "https://cyftech.com.tr/zh/blog"}, {"@type": "ListItem", "position": 3, "name": "Core Web Vitals 与网站速度：LCP、INP、CLS 指南（2026）", "item": "https://cyftech.com.tr/zh/site-hizi-core-web-vitals"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "zh", "mainEntity": [{"@type": "Question", "name": "什么是 Core Web Vitals？", "acceptedAnswer": {"@type": "Answer", "text": "Core Web Vitals 是 Google 为衡量真实用户体验而设定的三项指标：衡量加载速度的 LCP、衡量交互响应的 INP 和衡量视觉稳定性的 CLS。这些指标用于 Google 的页面体验评估。"}}, {"@type": "Question", "name": "LCP 多少秒算良好？", "acceptedAnswer": {"@type": "Answer", "text": "根据 Google 的标准，LCP 在 2.5 秒及以下为良好，超过 4 秒为较差。评估依据真实用户访问的第 75 百分位。"}}, {"@type": "Question", "name": "INP 为什么取代了 FID？", "acceptedAnswer": {"@type": "Answer", "text": "FID 只测量页面上首次交互的延迟，大多数网站都能轻松通过。而 INP 会跟踪页面上的所有交互，并报告其中最慢的之一，因此能更好地反映用户的真实体验。这一变更于 2024 年 3 月生效。"}}, {"@type": "Question", "name": "PageSpeed 分数不到 100，我的 SEO 就会很差吗？", "acceptedAnswer": {"@type": "Answer", "text": "不会。Lighthouse 分数是一项实验室测试，并非直接的排名信号。重要的是真实用户数据中的 LCP、INP 和 CLS 处于良好阈值以内。一个 85 分但实地数据良好的页面，比一个 100 分的测试结果更有意义。"}}, {"@type": "Question", "name": "Core Web Vitals 的修复多久能体现出来？", "acceptedAnswer": {"@type": "Answer", "text": "由于实地数据基于最近 28 天的用户体验，修复效果完全体现在报告中大约需要四周。而在实验室测试中，您可以立即看到改善。"}}]}</script>
<link rel="icon" type="image/png" href="../assets/img/logo/ico.png">
<script>try{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}catch(e){}</script>
<link rel="preload" href="/assets/fonts/SpaceGrotesk-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/assets/fonts/JetBrainsMono-latin.woff2" as="font" type="font/woff2" crossorigin>
<style>@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-cyrillic-ext.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-cyrillic.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-latin-ext.woff2) format('woff2');unicode-range:U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-latin.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD}@font-face{font-family:'Space Grotesk';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/SpaceGrotesk-latin-ext.woff2) format('woff2');unicode-range:U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'Space Grotesk';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/SpaceGrotesk-latin.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD}</style>
<link rel="stylesheet" href="../assets/css/site.css?v=20261101a">
<link rel="stylesheet" href="../assets/css/blog.css?v=20261101a">
<link rel="stylesheet" href="../assets/css/theme-light.css?v=20261101a">
<script src="../assets/js/site.js?v=20261101a" defer></script>
<script src="../assets/js/ambient.js?v=20261101a" defer></script>
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/site-hizi-core-web-vitals">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/site-hizi-core-web-vitals">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;600;700&amp;display=swap">
<style>:root{--sans:'Space Grotesk','Noto Sans SC',system-ui,sans-serif}</style>
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
<a class="sr-only" href="#icerik">跳到正文</a>
<header class="site-head">
  <a class="logo" href="./" aria-label="cyftech 首页" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="主菜单">
    <div class="nav-dd">
      <button type="button" aria-haspopup="true">服务 <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
      <div class="dd-menu"><a href="web-cozumleri"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg><span class="num">01</span><span><b>网站解决方案</b><small>网站设计、软件开发、电商与 SEO，一站式完成。</small></span></a><a href="masaustu-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg><span class="num">02</span><span><b>桌面应用</b><small>为您的业务量身定制，离线也能运行的桌面软件。</small></span></a><a href="mobil-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span class="num">03</span><span><b>移动应用</b><small>适用于 iOS 和 Android 的快速、易用的应用。</small></span></a></div>
    </div>
    <a href="projelerimiz">项目</a>
    <a href="referanslar">客户案例</a>
    <a href="blog" aria-current="page">博客</a>
    <a href="hakkimizda">关于我们</a>
    <a href="iletisim">联系我们</a>
  </nav>
  <div class="head-actions">
    <div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="选择语言"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span data-lang-cur>ZH</span></button>
      <div class="lang-menu"><a href="../site-hizi-core-web-vitals" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="../en/site-hizi-core-web-vitals" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="../de/site-hizi-core-web-vitals" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="../ar/site-hizi-core-web-vitals" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="site-hizi-core-web-vitals" hreflang="zh" lang="zh" data-lang="zh" aria-current="true"><b>ZH</b><span>中文</span></a><a href="../ru/site-hizi-core-web-vitals" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
    </div>
    <button type="button" class="icon-btn theme-btn" aria-label="夜间 / 日间主题" title="夜间 / 日间主题"><svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg></button>
    <a class="btn btn-primary btn-sm" href="iletisim">获取报价<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    <button class="menu-btn" type="button" aria-label="打开菜单" data-label-open="打开菜单" data-label-close="关闭菜单" aria-expanded="false" aria-controls="mnav"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
  </div>
  
</header>
<nav class="mnav" id="mnav" aria-label="移动端菜单">
  <a href="./">首页</a>
  <div class="mnav-label">服务</div>
  <a href="web-cozumleri"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>网站解决方案</a><a href="masaustu-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>桌面应用</a><a href="mobil-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>移动应用</a>
  <div class="mnav-label">企业</div>
  <a href="projelerimiz">项目</a>
  <a href="referanslar">客户案例</a>
  <a href="blog" aria-current="page">博客</a>
  <a href="hakkimizda">关于我们</a>
  <a href="iletisim">联系我们</a>
  <a class="btn btn-primary" href="iletisim">获取报价<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
</nav>
<main id="icerik">
<section class="page-hero" style="padding-bottom:48px">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">博客</a><span>/</span><span>SEO</span></div>
    <h1 class="h1" style="max-width:900px">Core Web Vitals 与网站速度：LCP、INP 和 CLS 指南。</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">2026年10月31日</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 分钟阅读</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/site-hizi-core-web-vitals.svg" alt=""></div>
      <p class="bi-lead">访客来到您的网站，但页面迟迟打不开；点了按钮却没有反应；刚开始阅读，文字就往下跳。这三种小小的失望，在 Google 那里各有其名：<b>Core Web Vitals</b>。衡量和提升网站速度最清晰的途径，正是这三项指标。</p>
      <p>本文将介绍 Core Web Vitals 是什么、LCP、INP 和 CLS 指标最新的“良好”阈值、如何用哪些工具正确测量这些数值，以及对每项指标效果最显著的优化方法。</p>
      <p>即使您没有技术团队，读完本文后也能自行检查网站状况，并向您的服务商或开发人员提出正确的问题。</p>
      <h2 id="neden" class="bi-h2" data-n="01">为什么网站速度既关乎客户，也关乎 SEO？</h2>
      <p>慢速网站首先会让您失去用户。在移动网络下盯着空白屏幕等了几秒钟的访客，会返回搜索结果点击下一个链接。对于您通过广告带来的流量，这直接意味着金钱损失。</p>
      <p>在 Google 方面，Core Web Vitals 属于“页面体验”范畴，是排名系统考虑的信号之一。Google 搜索中心对此有明确说明；但同一文档也强调，内容的相关性仍然具有更大的决定作用。也就是说，速度快但内容薄弱的页面不会排到前列；而在质量相近的两个页面之间，体验则可能拉开差距。</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>速度本身不会让您排第一，但缓慢很容易让您落后。</blockquote>
      <h2 id="metrikler" class="bi-h2" data-n="02">Core Web Vitals 指标与 2026 年阈值</h2>
      <p>Core Web Vitals 由三项指标组成，分别衡量用户体验的不同方面：加载、交互和视觉稳定性。</p>
      <table>
        <thead><tr><th>指标</th><th>衡量什么？</th><th>良好</th><th>需要改进</th><th>较差</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b>（Largest Contentful Paint，最大内容绘制）</td><td>页面中最大的图片或文本块出现在屏幕上所需的时间</td><td>≤ 2.5 秒</td><td>2.5–4 秒</td><td>&gt; 4 秒</td></tr>
          <tr><td><b>INP</b>（Interaction to Next Paint，交互到下一次绘制）</td><td>页面对点击、触摸和按键做出视觉响应所需的时间</td><td>≤ 200 毫秒</td><td>200–500 毫秒</td><td>&gt; 500 毫秒</td></tr>
          <tr><td><b>CLS</b>（Cumulative Layout Shift，累积布局偏移）</td><td>页面加载和使用过程中元素的意外移动</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0.25</td></tr>
        </tbody>
      </table>
      <p>一个重要细节：Google 依据<b>真实用户的第 75 百分位</b>来评估这些数值。也就是说，至少 75% 的访问应处于“良好”阈值以内。页面要通过 Core Web Vitals 评估，三项指标都必须良好；只要有一项较差，就不会取平均值。</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>如果您还在看到 FID：</b>2024 年 3 月，INP 取代 FID（First Input Delay，首次输入延迟）成为交互指标。FID 只关注首次交互的延迟，而 INP 会统计页面上的所有交互，因此要求更高。在旧报告中按 FID 看起来“良好”的网站，在 INP 上可能卡住。</div></div>
      <h2 id="olcum" class="bi-h2" data-n="03">如何测量 Core Web Vitals：实地数据与实验室数据</h2>
      <p>测量中最常见的错误，是只看一个 PageSpeed 分数就下结论。数据分为两类，各自说明不同的问题：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>实地数据（field data）：</b>即从 Chrome 用户真实体验中收集的 Chrome UX Report（CrUX）数据。这正是 Google 在排名中参考的数据，反映的是最近 28 天的情况。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>实验室数据（lab data）：</b>即 Lighthouse 在单一模拟设备和网络条件下进行的测试。它非常适合诊断问题，但不能完全代表真实用户体验。它无法直接测量 INP，而是参考 Total Blocking Time（TBT，总阻塞时间）。</span></li>
      </ul>
      <h3>什么工具用于什么用途？</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>PageSpeed Insights：</b>针对单个网址同时显示实地数据和实验室数据。请以上方的“真实用户体验”部分为准。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Search Console — Core Web Vitals 报告：</b>将整个网站划分为相似的页面组，显示移动端和桌面端哪些 URL 表现较差。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Chrome DevTools（Performance 面板）：</b>供开发人员逐行查找交互缓慢和布局偏移原因的工具。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>web-vitals 库：</b>Google 提供的小型 JavaScript 库，用于将真实用户测量数据发送到您自己的分析工具。</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>注意：</b>流量较少的新网站可能没有 CrUX 数据。这种情况下可以依据实验室数据推进，但务必也在一部中端 Android 手机和移动网络下手动测试。</div></div>
      <h2 id="lcp" class="bi-h2" data-n="04">如何优化 LCP：更快地显示主要内容</h2>
      <p>在大多数企业网站上，LCP 元素是页面顶部的大图（hero）或主标题。LCP 时间由四部分组成：服务器首次响应（TTFB）、资源发现、资源下载和屏幕渲染。优化也按这一顺序进行。</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>加快服务器响应：</b>web.dev 认为 TTFB 在 0.8 秒及以下为良好。页面缓存、优质托管和 CDN 能显著缩短这一时间。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>让 LCP 图片尽早被发现：</b>不要通过 CSS 背景或 JavaScript 加载图片，而是直接写在 HTML 中；并用 fetchpriority="high" 设置优先级。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>不要对首屏图片使用懒加载：</b>懒加载适用于首屏以下的图片；用在主图上会推迟 LCP。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>压缩图片：</b>使用 WebP 或 AVIF 格式、合适的尺寸和 srcset，避免在移动端下载不必要的大文件。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>减少阻塞渲染的资源：</b>前置关键 CSS，清理未使用的 CSS 和同步加载的脚本，字体使用 font-display: swap。</span></li>
      </ul>
      <p>关于托管方面的决策对速度的影响， <a href="alan-adi-ve-hosting-secimi">域名与主机选择</a> 一文中也专门讨论过类似的两难选择。</p>
      <h2 id="inp" class="bi-h2" data-n="05">如何优化 INP：对点击即时响应</h2>
      <p>INP 问题通常源于浏览器主线程（main thread）被 JavaScript 占用。用户点击菜单时，浏览器恰好在运行某个分析脚本或庞大的轮播代码，响应因此延迟。</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>拆分长任务：</b>将超过 50 毫秒的 JavaScript 任务拆分成小块；先向用户提供视觉反馈，再执行繁重的工作。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>审查第三方脚本：</b>在线聊天气泡、热力图工具、多个广告和分析标签是影响 INP 最常见的元凶。保留真正在用的，其余的延迟加载。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>保持 DOM 精简：</b>在包含成千上万个元素的页面上，每次交互后的重绘成本都会变高。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>减轻插件和主题负担：</b>现成主题在每个页面加载的无用代码，尤其会拖慢低配手机上的交互。</span></li>
      </ul>
      <p>在这一点上，基础架构的选择起决定作用。靠插件堆起来的网站与按需编写的轻量网站之间的差异， <a href="wordpress-mi-ozel-yazilim-mi">WordPress 还是定制开发</a> 一文。</p>
      <h2 id="cls" class="bi-h2" data-n="06">如何优化 CLS：防止页面跳动</h2>
      <p>正在阅读的那一行突然往下跳，或者正要点击时按钮换了位置，这就是 CLS 所衡量的。好在解决方法通常很简单：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>为图片和视频指定尺寸：</b>通过 width 和 height 属性或 CSS aspect-ratio，让浏览器预先留出空间。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>为广告、横幅和嵌入内容预留固定区域：</b>后加载的 Cookie 提示或促销横条不应把内容往下挤，而应以覆盖层（overlay）形式在上方弹出。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>让字体切换更平滑：</b>预加载网页字体，并使备用字体的尺寸与其接近。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>动画使用 transform：</b>用 transform 和 opacity 做动画，而不是 top、left、height 等会影响布局的属性。</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>快速检查：</b>在手机上用慢速网络打开您的网站，仔细观察前三秒的屏幕。您肉眼看到的每一次跳动，都会反映在 CLS 分数中。</div></div>
      <h2 id="platform" class="bi-h2" data-n="07">不同类型网站最常见的速度问题</h2>
      <p>每个网站变慢的原因各不相同。按网站类型总结我们在项目中遇到的情况：</p>
      <table>
        <thead><tr><th>网站类型</th><th>最常见的问题</th><th>首先检查的地方</th></tr></thead>
        <tbody>
          <tr><td>使用现成主题的企业网站</td><td>主题臃肿、插件众多、轮播图片过大</td><td>未使用的插件、主图尺寸、页面缓存</td></tr>
          <tr><td>电商网站</td><td>商品图片、筛选器、大量跟踪和营销标签</td><td>分类页的 LCP、第三方脚本、购物车交互的 INP</td></tr>
          <tr><td>单页应用（React、Vue 等）</td><td>JavaScript 包体积大、内容在浏览器中生成过晚</td><td>服务端渲染或预渲染、代码分割</td></tr>
          <tr><td>新闻与博客网站</td><td>广告位延迟加载导致内容偏移</td><td>为广告位预留的固定区域、CLS</td></tr>
        </tbody>
      </table>
      <p>此表只是一个起点；确切的诊断始终要靠测量。不过，了解问题最可能出在哪里，能在与开发人员沟通时节省时间。例如，如果某个电商网站的商品详情页很快，分类页却很慢，问题往往在于列表中的几十张图片同时以原始尺寸下载。</p>
      <p>如果您的目标是像移动应用一样快速轻盈的体验，就需要在设计阶段讨论这一点。事后添加到页面上的每一个“小”功能，都会占用速度预算。</p>
      <h2 id="plan" class="bi-h2" data-n="08">提升网站速度的分步计划</h2>
      <p>不要试图同时修复所有问题，而是从影响最大的开始：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第 1 步 —</b>在 Search Console 中打开 Core Web Vitals 报告，列出移动端“较差”的页面组。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第 2 步 —</b>从每组中选一个示例网址在 PageSpeed Insights 中测试，记下哪项指标未达标。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第 3 步 —</b>先解决模板层面的问题：使用同一模板的数百个页面，一次修复即可全部改善。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第 4 步 —</b>先实施图片、缓存和 CDN 等见效快的优化，再处理 JavaScript 和第三方脚本。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第 5 步 —</b>在 Search Console 中点击“验证修复”，等待实地数据在 28 天内更新。</span></li>
      </ul>
      <p>速度不是一次性项目，而是需要持续守护的预算。一个新插件、一张大图或一段额外的跟踪代码，都可能在几周内抵消已有的成果。因此，每次添加新功能前，都要问一问：“这会让页面慢多少？”如果您想从更宏观的角度了解速度在搜索曝光中的位置， <a href="teknik-seo-kontrol-listesi">也可以看看我们的技术 SEO 检查清单</a>。</p>
      <div class="bi-check">
        <div class="eyebrow">// 速度检查清单</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>移动端 LCP 是否低于 2.5 秒？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>INP 是否低于 200 毫秒，多余的第三方脚本是否已清理？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>CLS 是否低于 0.1，所有图片是否都设定了尺寸？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>主图是否不使用懒加载并优先加载？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>图片是否为 WebP/AVIF 格式且尺寸合适？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>页面缓存、压缩和 CDN 是否已启用？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>是否定期查看 Search Console 的 Core Web Vitals 报告？</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">常见问题</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>什么是 Core Web Vitals？</summary><p>Core Web Vitals 是 Google 为衡量真实用户体验而设定的三项指标：衡量加载速度的 LCP、衡量交互响应的 INP 和衡量视觉稳定性的 CLS。这些指标用于 Google 的页面体验评估。</p></details><details class="bi-faq-i"><summary>LCP 多少秒算良好？</summary><p>根据 Google 的标准，LCP 在 2.5 秒及以下为良好，超过 4 秒为较差。评估依据真实用户访问的第 75 百分位。</p></details><details class="bi-faq-i"><summary>INP 为什么取代了 FID？</summary><p>FID 只测量页面上首次交互的延迟，大多数网站都能轻松通过。而 INP 会跟踪页面上的所有交互，并报告其中最慢的之一，因此能更好地反映用户的真实体验。这一变更于 2024 年 3 月生效。</p></details><details class="bi-faq-i"><summary>PageSpeed 分数不到 100，我的 SEO 就会很差吗？</summary><p>不会。Lighthouse 分数是一项实验室测试，并非直接的排名信号。重要的是真实用户数据中的 LCP、INP 和 CLS 处于良好阈值以内。一个 85 分但实地数据良好的页面，比一个 100 分的测试结果更有意义。</p></details><details class="bi-faq-i"><summary>Core Web Vitals 的修复多久能体现出来？</summary><p>由于实地数据基于最近 28 天的用户体验，修复效果完全体现在报告中大约需要四周。而在实验室测试中，您可以立即看到改善。</p></details></div>
      <h2 id="sonuc">结语</h2>
      <p>Core Web Vitals 把网站给访客的感受浓缩为三个数字：主要内容在 2.5 秒内出现，每次点击在 200 毫秒内得到响应，页面偏移低于 0.1。实现这些目标，往往不需要昂贵的重建，而需要准确的诊断和有条不紊的小幅修复。</p>
      <p>CYF Tech 开发的 <a href="web-cozumleri">网站和 Web 软件</a> 从一开始就按速度预算进行设计；对于现有网站，我们也提供 Core Web Vitals 分析和优化服务。如果您想和我们一起找出网站变慢的原因， <a href="iletisim">联系我们</a>.</p>
      <div class="bi-src"><div class="eyebrow">// 参考资料</div><ol><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://web.dev/articles/defining-core-web-vitals-thresholds" target="_blank" rel="noopener nofollow">web.dev — Core Web Vitals 指标阈值是如何确定的</a></li><li><a href="https://web.dev/articles/lcp" target="_blank" rel="noopener nofollow">web.dev — Largest Contentful Paint（LCP）</a></li><li><a href="https://web.dev/articles/inp" target="_blank" rel="noopener nofollow">web.dev — Interaction to Next Paint（INP）</a></li><li><a href="https://web.dev/articles/cls" target="_blank" rel="noopener nofollow">web.dev — Cumulative Layout Shift（CLS）</a></li><li><a href="https://web.dev/articles/ttfb" target="_blank" rel="noopener nofollow">web.dev — Time to First Byte（TTFB）</a></li><li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals" target="_blank" rel="noopener nofollow">Google 搜索中心 — 了解 Core Web Vitals 与 Google 搜索结果</a></li><li><a href="https://developers.google.com/search/docs/appearance/page-experience" target="_blank" rel="noopener nofollow">Google 搜索中心 — 了解页面体验</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>全部文章</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>分享</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="通过 WhatsApp 分享" title="通过 WhatsApp 分享"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="分享到 LinkedIn" title="分享到 LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="分享到 X" title="分享到 X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="通过电子邮件发送" title="通过电子邮件发送"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="目录">
        <div class="eyebrow">// 本文内容</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">为什么重要？</a></li><li><a href="#metrikler" data-n="02">LCP、INP 和 CLS</a></li><li><a href="#olcum" data-n="03">如何测量？</a></li><li><a href="#lcp" data-n="04">优化 LCP</a></li><li><a href="#inp" data-n="05">优化 INP</a></li><li><a href="#cls" data-n="06">优化 CLS</a></li><li><a href="#platform" data-n="07">按网站类型的问题</a></li><li><a href="#plan" data-n="08">优化计划</a></li><li><a href="#sss" data-n="09">常见问题</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// 其他文章</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">2026年10月31日</span><b>什么是 SEO？2026 年简明实用入门指南</b><span class="bi-read">8 分钟阅读</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">2026年10月31日</span><b>本地 SEO 与 Google 商家资料：在地图中脱颖而出指南</b><span class="bi-read">8 分钟阅读</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">2026年10月31日</span><b>2026 技术 SEO 检查清单：网站审查 30 项要点</b><span class="bi-read">8 分钟阅读</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">2026年10月31日</span><b>建企业网站之前必须了解的 7 件事</b><span class="bi-read">6 分钟阅读</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">2026年10月31日</span><b>2026 年网站价格：决定成本的 9 个因素</b><span class="bi-read">10 分钟阅读</span></div></a></li></ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim"><b>聊聊您的项目。</b><span>告诉我们您的想法，我们将为您准备专属报价。</span><div class="bi-go">获取报价<svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div></a>
    </aside>
  </div>
</section>

<section class="section cta-dark">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// 现在就开始吧</div>
        <h2 class="h2">携手实现您的项目。</h2>
        <p class="lead" style="margin-top:20px">告诉我们您的项目构想，我们将为您准备专属报价。</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim">获取报价<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn" href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>通过 WhatsApp 联系</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg><span class="k">电话</span>0543 791 10 61</a>
        <a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span class="k">邮箱</span>info@cyftech.com.tr</a>
        <a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="k">地址</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="./" aria-label="cyftech 首页" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
        <p>值得信赖的数字化伙伴。网站设计、软件开发与数字化解决方案。</p>
      </div>
      <div>
        <h2>快速导航</h2>
        <ul><li><a href="./">首页</a></li><li><a href="projelerimiz">项目</a></li><li><a href="referanslar">客户案例</a></li><li><a href="blog">博客</a></li><li><a href="hakkimizda">关于我们</a></li><li><a href="iletisim">联系我们</a></li></ul>
      </div>
      <div>
        <h2>服务</h2>
        <ul><li><a href="web-cozumleri"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>网站解决方案</a></li><li><a href="masaustu-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>桌面应用</a></li><li><a href="mobil-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>移动应用</a></li></ul>
      </div>
      <div>
        <h2>联系我们</h2>
        <ul><li><a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg>0543 791 10 61</a></li><li><a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@cyftech.com.tr</a></li><li><a href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp</a></li><li><a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — 值得信赖的数字化伙伴。</span> <span>保留所有权利。</span>
    </div>
  </div>
</footer>
<a class="wa-fab" href="https://wa.me/905437911061" target="_blank" rel="noopener" aria-label="通过 WhatsApp 联系"><svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a>
</body>
</html>
