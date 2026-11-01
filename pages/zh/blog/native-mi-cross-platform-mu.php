<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>原生还是跨平台？Flutter 与 React Native 对比</title>
<meta name="description" content="原生还是跨平台？我们从性能、成本、维护和团队角度对比了 Flutter、React Native 和 Kotlin Multiplatform——哪种项目适合哪种方案？">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="原生还是跨平台？Flutter 与 React Native 对比">
<meta property="og:description" content="原生还是跨平台？我们从性能、成本、维护和团队角度对比了 Flutter、React Native 和 Kotlin Multiplatform——哪种项目适合哪种方案？">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/zh/native-mi-cross-platform-mu">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="zh_CN">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/native-mi-cross-platform-mu.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/zh/native-mi-cross-platform-mu">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "原生还是跨平台？Flutter 与 React Native 对比", "description": "原生还是跨平台？我们从性能、成本、维护和团队角度对比了 Flutter、React Native 和 Kotlin Multiplatform——哪种项目适合哪种方案？", "image": "https://cyftech.com.tr/assets/img/og/native-mi-cross-platform-mu.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "zh", "mainEntityOfPage": "https://cyftech.com.tr/zh/native-mi-cross-platform-mu", "url": "https://cyftech.com.tr/zh/native-mi-cross-platform-mu", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/zh/"}, {"@type": "ListItem", "position": 2, "name": "博客", "item": "https://cyftech.com.tr/zh/blog"}, {"@type": "ListItem", "position": 3, "name": "原生还是跨平台？Flutter 与 React Native 对比", "item": "https://cyftech.com.tr/zh/native-mi-cross-platform-mu"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "zh", "mainEntity": [{"@type": "Question", "name": "跨平台应用和原生应用一样快吗？", "acceptedAnswer": {"@type": "Answer", "text": "在绝大多数业务应用中，用户感觉不到差异。Flutter 借助自有渲染引擎、React Native 借助新架构，都能提供流畅的体验。但在密集图形、游戏或实时媒体处理等场景下，原生仍然更具优势。"}}, {"@type": "Question", "name": "Flutter 和 React Native 哪个更好？", "acceptedAnswer": {"@type": "Answer", "text": "没有唯一的正确答案。如果需要品牌专属、在每台设备上外观一致的界面，并同时面向桌面端，通常选 Flutter；如果团队熟悉 React 和 TypeScript，或已有 React Web 项目，React Native 通常更合适。"}}, {"@type": "Question", "name": "用跨平台技术开发的应用可以在 App Store 和 Google Play 上架吗？", "acceptedAnswer": {"@type": "Answer", "text": "可以。用 Flutter 和 React Native 开发的应用会像原生应用一样编译，并按相同规则在两大应用商店上架。对用户而言，看不出应用是用哪种技术编写的。"}}, {"@type": "Question", "name": "可以先用跨平台开发，之后再转为原生吗？", "acceptedAnswer": {"@type": "Answer", "text": "可以，但这通常意味着要重写应用。相比之下，在跨平台应用中用原生代码编写所需的特定界面或模块，往往是更经济的做法。"}}, {"@type": "Question", "name": "移动应用和网站可以使用同一套基础设施吗？", "acceptedAnswer": {"@type": "Answer", "text": "可以，而且大多数情况下也应该这样做。无论选择哪种移动技术，应用都可以与网站或管理后台接入同一个 API 和数据库。如果使用 React Native，还可以与基于 React 的 Web 项目共享部分业务逻辑。这种方式能降低维护成本，并确保数据集中、一致。"}}, {"@type": "Question", "name": "什么是 Kotlin Multiplatform？何时适合选择它？", "acceptedAnswer": {"@type": "Answer", "text": "Kotlin Multiplatform 是一种在 iOS 和 Android 之间共享业务逻辑，同时可用原生方式或 Compose Multiplatform 编写界面的方案。它适合拥有强大 Android 团队、希望在不牺牲原生体验的前提下共享代码的项目。"}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/native-mi-cross-platform-mu">

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
      <div class="lang-menu"><a href="../native-mi-cross-platform-mu" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="../en/native-mi-cross-platform-mu" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="../de/native-mi-cross-platform-mu" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="../ar/native-mi-cross-platform-mu" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="native-mi-cross-platform-mu" hreflang="zh" lang="zh" data-lang="zh" aria-current="true"><b>ZH</b><span>中文</span></a><a href="../ru/native-mi-cross-platform-mu" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">博客</a><span>/</span><span>移动应用</span></div>
    <h1 class="h1" style="max-width:900px">原生还是跨平台？Flutter 与 React Native 对比。</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>移动应用</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">2026年10月31日</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 分钟阅读</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/native-mi-cross-platform-mu.svg" alt=""></div>
      <p class="bi-lead">每个启动移动应用项目的人迟早都会面对同一个问题：<b>原生还是跨平台</b>？这不仅是一个技术选择，更是一项决定预算、进度、团队以及应用未来五年走向的商业决策。</p>
      <p>几年前答案还比较简单：要性能就选原生，要快速和便宜就选跨平台。如今 Flutter 和 React Native 已经成熟，Kotlin Multiplatform 在 iOS 端也已发布稳定版。本文将用通俗的语言解释这些方案，对比 Flutter 与 React Native，并结合实例说明哪种项目适合哪种方案。</p>
      <h2 id="kavramlar" class="bi-h2" data-n="01">什么是原生应用和跨平台应用？</h2>
      <p><b>原生应用</b>是针对每个操作系统，使用该平台自有的语言和工具分别编写的应用：iOS 使用 Swift 和 SwiftUI，Android 使用 Kotlin 和 Jetpack Compose。结果是两套独立的代码库，通常也意味着两个独立的团队。</p>
      <p><b>跨平台应用</b>则通过一套代码库同时生成 iOS 和 Android 版本。目前主流的选项有：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Flutter：</b>由 Google 开发、使用 Dart 语言的框架。它通过自有渲染引擎绘制界面，因此在每台设备上都能实现像素级一致的外观。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>React Native：</b>由 Meta 开发、使用 JavaScript / TypeScript 和 React 的框架。它使用平台原生的界面组件。自 0.76 版本起，“新架构”成为默认选项，JavaScript 与原生代码之间旧桥接结构的瓶颈已基本消除。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kotlin Multiplatform：</b>JetBrains 的解决方案。它允许用 Kotlin 共享业务逻辑，界面则可根据需要使用原生方式或 Compose Multiplatform 编写。Compose Multiplatform 的 iOS 支持已于 2025 年 5 月发布稳定版。</span></li>
      </ul>
      <p>此外还有 <b>PWA</b>（渐进式 Web 应用）可选：一种在浏览器中运行、可添加到主屏幕的 Web 应用。对于无需上架应用商店的简单需求，它是不错的起点，但在推送通知和设备功能方面存在限制，尤其是在 iOS 上。</p>
      <h2 id="karsilastirma" class="bi-h2" data-n="02">原生与跨平台：7 项标准对比</h2>
      <p>为了便于决策，我们将两种方案按商业角度最重要的标准并列对比：</p>
      <table>
        <thead><tr><th>标准</th><th>原生（Swift + Kotlin）</th><th>跨平台（Flutter / React Native）</th></tr></thead>
        <tbody>
          <tr><td>开发成本</td><td>较高；两套独立代码库</td><td>较低；大部分代码两个平台共用</td></tr>
          <tr><td>上市时间</td><td>较长</td><td>较短；两个平台同时发布</td></tr>
          <tr><td>性能</td><td>最佳；尤其适合图形和硬件密集型任务</td><td>对绝大多数业务应用而言差异几乎察觉不到</td></tr>
          <tr><td>新平台功能的支持</td><td>第一时间</td><td>通常需借助插件或原生代码桥接，有时会滞后</td></tr>
          <tr><td>外观与体验</td><td>平台原生设计语言</td><td>Flutter 品牌外观统一；React Native 使用原生组件</td></tr>
          <tr><td>维护</td><td>每项功能需更新两次</td><td>一处更新；需跟进框架版本</td></tr>
          <tr><td>团队</td><td>分别需要 iOS 和 Android 专家</td><td>一个团队；但仍需懂原生端的人员</td></tr>
        </tbody>
      </table>
      <p>从表中可以看出，跨平台在大多数标准上都具有商业优势；而原生方案领先的领域，是性能和平台专属功能处于产品核心的项目。</p>
      <h2 id="flutter-rn" class="bi-h2" data-n="03">Flutter 还是 React Native？差异与选择标准</h2>
      <p>如果您已决定采用跨平台，第二个问题随之而来。两个框架都已成熟，拥有庞大的社区，并被大公司用于生产环境的应用。真正决定选择的因素如下：</p>
      <h3>以下情况更适合 Flutter……</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您希望打造品牌专属、动画丰富、在每台设备上外观完全一致的界面。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您计划用同一套代码，除移动端外还覆盖 Web 和桌面端（Windows、macOS、Linux）。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您看重在低配置 Android 设备上也能流畅运行的可预测性能。</span></li>
      </ul>
      <h3>以下情况更适合 React Native……</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您的团队或现有 Web 项目已经在使用 React 和 TypeScript，知识和代码共享会更容易。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您希望应用在每个平台上都以该平台自有的组件呈现。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>您想利用 JavaScript 生态中丰富的库资源，并更容易招到开发者。</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>小贴士：</b>不要纠结于“哪个更快？”的争论。在独立测评中，两个框架之间的差距往往小于一个写得糟糕的列表页面或未经优化的图片所造成的差距。团队经验比所选框架更具决定性。</div></div>
      <h2 id="native-ne-zaman" class="bi-h2" data-n="04">哪些项目真正需要原生开发？</h2>
      <p>跨平台能胜任所有工作吗？不能。在以下情况下，需要原生开发，或者至少需要相当比重的原生层：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>密集图形与实时处理：</b>游戏、增强现实、高级相机和视频编辑。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>深度硬件集成：</b>专用蓝牙设备、医疗传感器、底层音频处理、持续后台运行。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>第一时间使用平台功能：</b>如果小组件、手表应用，或 Apple、Google 新发布的 API 是您产品的核心。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>超大规模：</b>拥有数百万用户、每一毫秒和应用体积都至关重要的产品。</span></li>
      </ul>
      <p>除上述情况外，电商、预订、外勤团队、客户忠诚度、企业内部应用和管理后台等绝大多数项目，都可以轻松采用跨平台开发。而且，跨平台应用在必要时也可以用原生代码编写特定界面或功能；这并不是非黑即白的选择。</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>正确的技术不是最流行的技术，而是能以最低风险实现产品最关键功能的技术。</blockquote>
      <h2 id="maliyet" class="bi-h2" data-n="05">成本、维护与长期风险</h2>
      <p>技术决策对<b>总体拥有成本</b>的影响远大于初期投入。原生开发中，每项新功能都要编写两次、测试两次，修复缺陷也是如此。而在跨平台开发中，共享代码比例越高，这一负担就越轻。</p>
      <p>另一方面，跨平台也有其特有的风险：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>框架更新：</b>Flutter 或 React Native 的大版本升级，以及第三方插件对新版本的适配，都需要持续投入精力。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>插件依赖：</b>一个停止维护的插件可能会卡住某项关键功能。选择插件时，需要关注其更新频率和社区活跃度。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>应用体积：</b>跨平台应用由于内置框架引擎，体积可能比同类原生应用略大。</span></li>
      </ul>
      <p>如果您想详细了解预算方面的内容， <a href="mobil-uygulama-gelistirme-maliyeti">我们在移动应用开发成本一文中</a> 逐项拆解了决定价格的各个因素。</p>
      <h2 id="senaryolar" class="bi-h2" data-n="06">四个示例项目：选择哪种技术，为什么？</h2>
      <p>用具体案例代替抽象标准来思考，会让决策更容易。以下是我们经常遇到的四类项目以及我们的评估：</p>
      <h3>餐厅点餐与会员忠诚度应用</h3>
      <p>菜单、购物车、在线支付、促销推送和积分系统。几乎没有硬件需求，同时在两个平台上线并呈现品牌专属外观非常重要。在这种情况下，使用 Flutter 或 React Native 的单一代码库无疑是最高效的选择。</p>
      <h3>外勤团队应用</h3>
      <p>技术人员查看工单、拍照、扫描条码，有时还要在没有网络的地下室作业。离线数据存储和同步至关重要。跨平台可以满足这一需求；但从一开始就正确搭建离线架构，比技术选型更加重要。</p>
      <h3>与专用蓝牙设备通信的健康应用</h3>
      <p>应用的核心是与设备持续、可靠地交换数据，并且需要在后台运行。在这种情况下，原生开发，或者至少用原生模块实现设备通信的混合架构，是更稳妥的选择。由于涉及健康数据处理，还需另行规划 KVKK（土耳其个人数据保护法）中关于特殊类别数据的规定。</p>
      <h3>企业内部应用</h3>
      <p>员工用于提交请假申请、跟踪审批流程和公告的应用。用户数量固定，应用商店曝光并不重要。如果预算有限，先从 PWA 起步，待需求增长后再转向跨平台应用，可能是明智之举。在这种情况下， <a href="masaustu-mu-web-uygulamasi-mi">桌面应用还是 Web 应用</a> 的问题也会随之出现。</p>
      <h2 id="karar" class="bi-h2" data-n="07">5 个问题帮您做出正确的移动技术决策</h2>
      <p>要为您自己的项目做出决定，请依次回答以下问题：</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>问题 1 —</b>应用的核心是否涉及密集图形、实时媒体或专用硬件？如果是，请认真考虑原生开发。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>问题 2 —</b>您是否需要在预算有限的情况下同时在两个平台上线？如果是，跨平台更具优势。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>问题 3 —</b>您现有的团队或 Web 项目使用什么技术？如果基于 React，React Native 是有力的候选；如果从零开始，Flutter 也是强有力的选择。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>问题 4 —</b>您是否也要在 Web 和桌面端提供同一产品？Flutter 一套代码可覆盖更多目标平台；而无论哪种情况，共用的后端都必不可少。</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>问题 5 —</b>谁来负责应用至少三年的维护？您能否找到熟悉所选技术的开发者？</span></li>
      </ul>
      <p>我们在自己的产品中也问过这些问题。例如，我们的公寓与小区管理软件 KATSİS 的 Web 后台、iOS / Android 应用和 Windows 应用都接入同一套基础设施。根据各平台用户的需求设计界面，同时将数据集中在一处，大大降低了维护负担。详情请参阅 <a href="projelerimiz">我们的项目</a>。</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>注意：</b>技术决策应基于产品需求，而不是外包公司最擅长的工具。请向报价方提问：“你们为什么推荐这项技术？替代方案是什么？”优秀的团队会给出具体的理由。</div></div>
      <div class="bi-check">
        <div class="eyebrow">// 技术选型前的检查清单</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>应用最关键的功能是否已书面确定？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>硬件和性能要求是否已明确？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>两个平台是否同时发布？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>现有团队和 Web 基础设施使用什么技术？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>所选技术能否长期找到开发者？</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>是否已检查所用插件的维护状况？</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">常见问题</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>跨平台应用和原生应用一样快吗？</summary><p>在绝大多数业务应用中，用户感觉不到差异。Flutter 借助自有渲染引擎、React Native 借助新架构，都能提供流畅的体验。但在密集图形、游戏或实时媒体处理等场景下，原生仍然更具优势。</p></details><details class="bi-faq-i"><summary>Flutter 和 React Native 哪个更好？</summary><p>没有唯一的正确答案。如果需要品牌专属、在每台设备上外观一致的界面，并同时面向桌面端，通常选 Flutter；如果团队熟悉 React 和 TypeScript，或已有 React Web 项目，React Native 通常更合适。</p></details><details class="bi-faq-i"><summary>用跨平台技术开发的应用可以在 App Store 和 Google Play 上架吗？</summary><p>可以。用 Flutter 和 React Native 开发的应用会像原生应用一样编译，并按相同规则在两大应用商店上架。对用户而言，看不出应用是用哪种技术编写的。</p></details><details class="bi-faq-i"><summary>可以先用跨平台开发，之后再转为原生吗？</summary><p>可以，但这通常意味着要重写应用。相比之下，在跨平台应用中用原生代码编写所需的特定界面或模块，往往是更经济的做法。</p></details><details class="bi-faq-i"><summary>移动应用和网站可以使用同一套基础设施吗？</summary><p>可以，而且大多数情况下也应该这样做。无论选择哪种移动技术，应用都可以与网站或管理后台接入同一个 API 和数据库。如果使用 React Native，还可以与基于 React 的 Web 项目共享部分业务逻辑。这种方式能降低维护成本，并确保数据集中、一致。</p></details><details class="bi-faq-i"><summary>什么是 Kotlin Multiplatform？何时适合选择它？</summary><p>Kotlin Multiplatform 是一种在 iOS 和 Android 之间共享业务逻辑，同时可用原生方式或 Compose Multiplatform 编写界面的方案。它适合拥有强大 Android 团队、希望在不牺牲原生体验的前提下共享代码的项目。</p></details></div>
      <h2 id="sonuc">结语</h2>
      <p>“原生还是跨平台”没有放之四海而皆准的答案，但只要问对问题，答案通常就会清晰起来。对大多数企业应用来说，使用 Flutter 或 React Native 的单一代码库在预算和进度上都是最高效的方式；而在性能和硬件处于产品核心的项目中，原生投入物有所值。如果您希望与我们一起评估哪种方案适合您的项目， <a href="mobil-uygulamalar">欢迎浏览我们的移动应用服务</a>，或者 <a href="iletisim">与我们联系</a>.</p>
      <div class="bi-src"><div class="eyebrow">// 参考资料</div><ol><li><a href="https://reactnative.dev/blog/2024/10/23/release-0.76-new-architecture" target="_blank" rel="noopener nofollow">React Native — 0.76 与新架构发布公告</a></li><li><a href="https://blog.jetbrains.com/kotlin/2025/05/compose-multiplatform-1-8-0-released-compose-multiplatform-for-ios-is-stable-and-production-ready/" target="_blank" rel="noopener nofollow">JetBrains — Compose Multiplatform 1.8.0：iOS 支持进入稳定版</a></li><li><a href="https://docs.flutter.dev/" target="_blank" rel="noopener nofollow">Flutter — 官方文档</a></li><li><a href="https://developer.android.com/compose" target="_blank" rel="noopener nofollow">Android Developers — Jetpack Compose</a></li><li><a href="https://developer.apple.com/swiftui/" target="_blank" rel="noopener nofollow">Apple Developer — SwiftUI</a></li><li><a href="https://web.dev/explore/progressive-web-apps" target="_blank" rel="noopener nofollow">web.dev — Progressive Web Apps</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>全部文章</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>分享</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="通过 WhatsApp 分享" title="通过 WhatsApp 分享"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="分享到 LinkedIn" title="分享到 LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="分享到 X" title="分享到 X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="通过电子邮件发送" title="通过电子邮件发送"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="目录">
        <div class="eyebrow">// 本文内容</div>
        <ol class="bi-toc"><li><a href="#kavramlar" data-n="01">原生与跨平台</a></li><li><a href="#karsilastirma" data-n="02">对比表</a></li><li><a href="#flutter-rn" data-n="03">Flutter 还是 React Native</a></li><li><a href="#native-ne-zaman" data-n="04">什么时候必须用原生？</a></li><li><a href="#maliyet" data-n="05">成本与维护</a></li><li><a href="#senaryolar" data-n="06">示例场景</a></li><li><a href="#karar" data-n="07">决策指南</a></li><li><a href="#sss" data-n="08">常见问题</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// 其他文章</div>
        <ul class="bi-others"><li><a href="mobil-uygulama-gelistirme-maliyeti"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></span><div><span class="d">2026年10月31日</span><b>2026 年移动应用开发成本：决定价格的 8 项内容</b><span class="bi-read">8 分钟阅读</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">2026年10月31日</span><b>建企业网站之前必须了解的 7 件事</b><span class="bi-read">6 分钟阅读</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">2026年10月31日</span><b>2026 年网站价格：决定成本的 9 个因素</b><span class="bi-read">10 分钟阅读</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">2026年10月31日</span><b>什么是 SEO？2026 年简明实用入门指南</b><span class="bi-read">8 分钟阅读</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">2026年10月31日</span><b>2026 年电商网站搭建指南：分步路线图</b><span class="bi-read">10 分钟阅读</span></div></a></li></ul>
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
