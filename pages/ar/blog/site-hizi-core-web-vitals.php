<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Core Web Vitals وسرعة الموقع: دليل LCP وINP وCLS (2026)</title>
<meta name="description" content="ما هي Core Web Vitals؟ عتبات LCP وINP وCLS، والقياس عبر PageSpeed Insights وSearch Console، وخطوات عملية لزيادة سرعة الموقع.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Core Web Vitals وسرعة الموقع: دليل LCP وINP وCLS (2026)">
<meta property="og:description" content="ما هي Core Web Vitals؟ عتبات LCP وINP وCLS، والقياس عبر PageSpeed Insights وSearch Console، وخطوات عملية لزيادة سرعة الموقع.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/ar/site-hizi-core-web-vitals">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="ar_AR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/site-hizi-core-web-vitals.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/ar/site-hizi-core-web-vitals">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Core Web Vitals وسرعة الموقع: دليل LCP وINP وCLS (2026)", "description": "ما هي Core Web Vitals؟ عتبات LCP وINP وCLS، والقياس عبر PageSpeed Insights وSearch Console، وخطوات عملية لزيادة سرعة الموقع.", "image": "https://cyftech.com.tr/assets/img/og/site-hizi-core-web-vitals.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "ar", "mainEntityOfPage": "https://cyftech.com.tr/ar/site-hizi-core-web-vitals", "url": "https://cyftech.com.tr/ar/site-hizi-core-web-vitals", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/ar/"}, {"@type": "ListItem", "position": 2, "name": "المدونة", "item": "https://cyftech.com.tr/ar/blog"}, {"@type": "ListItem", "position": 3, "name": "Core Web Vitals وسرعة الموقع: دليل LCP وINP وCLS (2026)", "item": "https://cyftech.com.tr/ar/site-hizi-core-web-vitals"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "ar", "mainEntity": [{"@type": "Question", "name": "ما هي Core Web Vitals؟", "acceptedAnswer": {"@type": "Answer", "text": "Core Web Vitals ثلاثة مقاييس حددتها Google لقياس تجربة المستخدم الحقيقية: LCP لسرعة التحميل، وINP للاستجابة للتفاعل، وCLS للاستقرار البصري. وتُستخدم هذه المقاييس في تقييم Google لتجربة الصفحة."}}, {"@type": "Question", "name": "كم ثانية تعدّ قيمة LCP جيدة؟", "acceptedAnswer": {"@type": "Answer", "text": "بحسب Google، يُعدّ LCP جيدًا إن كان 2.5 ثانية أو أقل، وضعيفًا إن تجاوز 4 ثوانٍ. ويُجرى التقييم وفق الشريحة المئوية 75 من زيارات المستخدمين الحقيقيين."}}, {"@type": "Question", "name": "لماذا حلّ INP محل FID؟", "acceptedAnswer": {"@type": "Answer", "text": "كان FID يقيس فقط تأخر التفاعل الأول في الصفحة، وكانت معظم المواقع تجتاز هذا الاختبار بسهولة. أما INP فيتابع جميع التفاعلات في الصفحة ويُبلغ عن أحد أبطئها؛ لذلك يعكس تجربة المستخدم الحقيقية بشكل أفضل. وقد دخل التغيير حيز التنفيذ في مارس 2024."}}, {"@type": "Question", "name": "إن لم تكن درجة PageSpeed 100، فهل يكون SEO لموقعي سيئًا؟", "acceptedAnswer": {"@type": "Answer", "text": "لا. درجة Lighthouse اختبار مختبري وليست إشارة ترتيب مباشرة. المهم أن تكون قيم LCP وINP وCLS في بيانات المستخدمين الحقيقيين ضمن العتبات الجيدة. فالصفحة ذات الدرجة 85 والبيانات الميدانية الجيدة أكثر دلالة من نتيجة اختبار بدرجة 100."}}, {"@type": "Question", "name": "متى تنعكس إصلاحات Core Web Vitals؟", "acceptedAnswer": {"@type": "Answer", "text": "لأن البيانات الميدانية تستند إلى تجربة المستخدمين في آخر 28 يومًا، يستغرق انعكاس الإصلاحات كاملة على التقارير نحو أربعة أسابيع. أما في اختبارات المختبر فيمكنك رؤية التحسن فورًا."}}]}</script>
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600;700&amp;display=swap">
<style>:root{--sans:'Space Grotesk','IBM Plex Sans Arabic',system-ui,sans-serif}</style>
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
<a class="sr-only" href="#icerik">انتقل إلى المحتوى</a>
<header class="site-head">
  <a class="logo" href="./" aria-label="cyftech الصفحة الرئيسية" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="القائمة الرئيسية">
    <div class="nav-dd">
      <button type="button" aria-haspopup="true">الخدمات <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
      <div class="dd-menu"><a href="web-cozumleri"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg><span class="num">01</span><span><b>حلول الويب</b><small>تصميم المواقع والبرمجيات والتجارة الإلكترونية وSEO — تحت سقف واحد.</small></span></a><a href="masaustu-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg><span class="num">02</span><span><b>تطبيقات سطح المكتب</b><small>برمجيات سطح مكتب مصممة لعملك، تعمل حتى دون اتصال.</small></span></a><a href="mobil-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span class="num">03</span><span><b>تطبيقات الجوال</b><small>تطبيقات سريعة وسهلة الاستخدام لنظامي iOS وAndroid.</small></span></a></div>
    </div>
    <a href="projelerimiz">المشاريع</a>
    <a href="referanslar">المراجع</a>
    <a href="blog" aria-current="page">المدونة</a>
    <a href="hakkimizda">من نحن</a>
    <a href="iletisim">تواصل معنا</a>
  </nav>
  <div class="head-actions">
    <div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="اختر اللغة"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span data-lang-cur>AR</span></button>
      <div class="lang-menu"><a href="../site-hizi-core-web-vitals" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="../en/site-hizi-core-web-vitals" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="../de/site-hizi-core-web-vitals" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="site-hizi-core-web-vitals" hreflang="ar" lang="ar" data-lang="ar" aria-current="true"><b>AR</b><span>العربية</span></a><a href="../zh/site-hizi-core-web-vitals" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="../ru/site-hizi-core-web-vitals" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
    </div>
    <button type="button" class="icon-btn theme-btn" aria-label="الوضع الليلي / النهاري" title="الوضع الليلي / النهاري"><svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg></button>
    <a class="btn btn-primary btn-sm" href="iletisim">اطلب عرض سعر<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    <button class="menu-btn" type="button" aria-label="افتح القائمة" data-label-open="افتح القائمة" data-label-close="أغلق القائمة" aria-expanded="false" aria-controls="mnav"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
  </div>
  
</header>
<nav class="mnav" id="mnav" aria-label="قائمة الجوال">
  <a href="./">الرئيسية</a>
  <div class="mnav-label">الخدمات</div>
  <a href="web-cozumleri"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>حلول الويب</a><a href="masaustu-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>تطبيقات سطح المكتب</a><a href="mobil-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>تطبيقات الجوال</a>
  <div class="mnav-label">الشركة</div>
  <a href="projelerimiz">المشاريع</a>
  <a href="referanslar">المراجع</a>
  <a href="blog" aria-current="page">المدونة</a>
  <a href="hakkimizda">من نحن</a>
  <a href="iletisim">تواصل معنا</a>
  <a class="btn btn-primary" href="iletisim">اطلب عرض سعر<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
</nav>
<main id="icerik">
<section class="page-hero" style="padding-bottom:48px">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">المدونة</a><span>/</span><span>SEO</span></div>
    <h1 class="h1" style="max-width:900px">Core Web Vitals وسرعة الموقع: دليل LCP وINP وCLS.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 أكتوبر 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 دقائق قراءة</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/site-hizi-core-web-vitals.svg" alt=""></div>
      <p class="bi-lead">جاء الزائر إلى موقعك، لكن الصفحة لم تفتح، ضغط على زر فلم يحدث شيء، بدأ القراءة فانزلق النص إلى الأسفل. لكل واحدة من هذه الخيبات الصغيرة الثلاث اسم لدى Google: <b>Core Web Vitals</b>. وأوضح طريق لقياس سرعة الموقع وتحسينها يمر عبر هذه المقاييس الثلاثة.</p>
      <p>في هذا المقال نشرح ماهية Core Web Vitals، والعتبات “الجيدة” الحالية لمقاييس LCP وINP وCLS، وبأي أدوات وكيف تقيس هذه القيم بشكل صحيح، والتحسينات الأكثر تأثيرًا لكل منها.</p>
      <p>حتى إن لم يكن لديك فريق تقني، ستتمكن في نهاية المقال من فحص وضع موقعك بنفسك وطرح الأسئلة الصحيحة على وكالتك أو مطوّرك.</p>
      <h2 id="neden" class="bi-h2" data-n="01">لماذا سرعة الموقع مسألة تخص العملاء وSEO معًا؟</h2>
      <p>الموقع البطيء يُفقدك المستخدم أولًا. فالزائر الذي يحدّق في شاشة فارغة لبضع ثوانٍ على اتصال الجوال يعود إلى البحث وينقر على النتيجة التالية. وهذا يعني خسارة مالية مباشرة في الحركة التي جلبتها بالإعلانات.</p>
      <p>أما على جانب Google، فإن Core Web Vitals من الإشارات التي تأخذها أنظمة الترتيب في الحسبان ضمن “تجربة الصفحة”. يصرّح Google Search Central بذلك بوضوح؛ لكنه يؤكد في الوثيقة نفسها أن صلة المحتوى لا تزال أكثر حسمًا بكثير. أي أن الصفحة السريعة ضعيفة المحتوى لا ترتقي إلى المراتب العليا؛ أما بين صفحتين متقاربتين في الجودة فقد تُحدث التجربة فرقًا.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>السرعة وحدها لا تجعلك الأول، لكن البطء يتركك في الخلف بسهولة.</blockquote>
      <h2 id="metrikler" class="bi-h2" data-n="02">مقاييس Core Web Vitals وقيم العتبات لعام 2026</h2>
      <p>تتكون Core Web Vitals من ثلاثة مقاييس. يقيس كل منها جانبًا مختلفًا من تجربة المستخدم: التحميل، والتفاعل، والاستقرار البصري.</p>
      <table>
        <thead><tr><th>المقياس</th><th>ماذا يقيس؟</th><th>جيد</th><th>يحتاج إلى تحسين</th><th>ضعيف</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b> (Largest Contentful Paint)</td><td>مدة ظهور أكبر صورة أو كتلة نصية في الصفحة على الشاشة</td><td>≤ 2.5 ث</td><td>2.5–4 ث</td><td>&gt; 4 ث</td></tr>
          <tr><td><b>INP</b> (Interaction to Next Paint)</td><td>مدة استجابة الصفحة بصريًا للنقرات واللمسات وضغطات المفاتيح</td><td>≤ 200 ms</td><td>200–500 ms</td><td>&gt; 500 ms</td></tr>
          <tr><td><b>CLS</b> (Cumulative Layout Shift)</td><td>الانزياح غير المتوقع للعناصر أثناء فتح الصفحة واستخدامها</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0.25</td></tr>
        </tbody>
      </table>
      <p>تفصيل مهم: يقيّم Google هذه القيم وفق <b>الشريحة المئوية 75 من المستخدمين الحقيقيين</b>. أي يجب أن تبقى 75 بالمئة من الزيارات على الأقل ضمن العتبة “الجيدة”. ولكي تجتاز الصفحة Core Web Vitals يجب أن تكون المقاييس الثلاثة جيدة؛ فإن كان أحدها ضعيفًا لا يُؤخذ المتوسط.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>إن كنت لا تزال ترى FID:</b> حلّ INP محل FID (First Input Delay) كمقياس للتفاعل في مارس 2024. فبينما كان FID ينظر فقط إلى تأخر التفاعل الأول، يأخذ INP جميع التفاعلات في الصفحة بالحسبان، ولذلك فهو أكثر صرامة. والمواقع التي بدت “جيدة” وفق FID في التقارير القديمة قد تتعثر في INP.</div></div>
      <h2 id="olcum" class="bi-h2" data-n="03">كيف تُقاس Core Web Vitals: البيانات الميدانية وبيانات المختبر</h2>
      <p>أكثر الأخطاء شيوعًا في القياس هو اتخاذ القرار بالنظر إلى درجة PageSpeed واحدة. فهناك نوعان من البيانات، ولكل منهما دلالة مختلفة:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>البيانات الميدانية (field data):</b> هي بيانات Chrome UX Report (CrUX) المجمّعة من التجارب الحقيقية لمستخدمي Chrome. وهي البيانات التي يأخذها Google في الحسبان عند الترتيب، وتعكس متوسط آخر 28 يومًا.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>بيانات المختبر (lab data):</b> هي اختبار يجريه Lighthouse على جهاز واتصال محاكَيين واحدين. وهي مثالية لتشخيص المشكلات، لكنها لا تعكس تجربة المستخدم الحقيقية حرفيًا. ولا يمكنها قياس INP مباشرة؛ بل يُنظر بدلًا منه إلى قيمة Total Blocking Time (TBT).</span></li>
      </ul>
      <h3>أي أداة تُستخدم ولأي غرض؟</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>PageSpeed Insights:</b> يعرض البيانات الميدانية وبيانات المختبر معًا لعنوان واحد. اعتمد على قسم “تجربة المستخدم الحقيقية” في الأعلى.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Search Console — تقرير Core Web Vitals:</b> يقسم موقعك كله إلى مجموعات صفحات متشابهة ويعرض عناوين URL الضعيفة على الجوال وسطح المكتب.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Chrome DevTools (لوحة Performance):</b> أداة المطوّرين لتحديد أسباب التفاعلات البطيئة والانزياحات سطرًا بسطر.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>مكتبة web-vitals:</b> مكتبة JavaScript صغيرة من Google لإرسال قياسات المستخدمين الحقيقيين إلى أداة التحليلات الخاصة بك.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>تنبيه:</b> قد لا تتوفر بيانات CrUX للمواقع الجديدة قليلة الحركة. في هذه الحالة تابع ببيانات المختبر، لكن اختبر يدويًا أيضًا وبشكل حتمي على هاتف Android من الفئة المتوسطة وعلى اتصال جوال.</div></div>
      <h2 id="lcp" class="bi-h2" data-n="04">كيف يُحسَّن LCP: أظهر المحتوى الرئيسي بشكل أسرع</h2>
      <p>في معظم مواقع الشركات يكون عنصر LCP هو الصورة الكبيرة (hero) أعلى الصفحة أو العنوان الرئيسي. وتتكون مدة LCP من أربعة أجزاء: الاستجابة الأولى للخادم (TTFB)، واكتشاف المورد، وتنزيله، ورسمه على الشاشة. ويُجرى التحسين بهذا الترتيب أيضًا.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>سرّع استجابة الخادم:</b> يعدّ web.dev قيمة 0.8 ثانية فأقل جيدة لـ TTFB. وتقلل ذاكرة التخزين المؤقت للصفحات والاستضافة الجيدة وCDN هذه المدة بشكل ملحوظ.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>اجعل صورة LCP تُكتشف مبكرًا:</b> ضع الصورة مباشرة في HTML لا كخلفية CSS أو عبر JavaScript؛ وأعطها الأولوية باستخدام fetchpriority="high".</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>لا تطبّق التحميل الكسول على صورة أعلى الصفحة:</b> التحميل الكسول مخصص للصور أسفل الشاشة؛ وعلى الصورة الرئيسية يؤخر LCP.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>صغّر الصورة:</b> باستخدام صيغة WebP أو AVIF والحجم الصحيح وsrcset، تجنّب تنزيل ملفات كبيرة بلا داعٍ على الجوال.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>قلّل الموارد التي تعيق العرض:</b> قدّم CSS الحرج، وأزل CSS غير المستخدم والسكربتات المحمّلة بشكل متزامن، واستخدم font-display: swap للخطوط.</span></li>
      </ul>
      <p>أما أثر قرارات الاستضافة على السرعة <a href="alan-adi-ve-hosting-secimi">اختيار اسم النطاق والاستضافة</a> ضمن مقال مستقل.</p>
      <h2 id="inp" class="bi-h2" data-n="05">كيف يُحسَّن INP: استجب للنقرات فورًا</h2>
      <p>تنشأ مشكلة INP عادةً من انشغال الخيط الرئيسي (main thread) للمتصفح بـ JavaScript. يلمس المستخدم القائمة، لكن الاستجابة تتأخر لأن المتصفح ينفّذ في تلك اللحظة سكربت تحليلات أو شيفرة شريط عرض (slider) كبيرة.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>قسّم المهام الطويلة:</b> جزّئ مهام JavaScript التي تتجاوز 50 ms؛ وقدّم الاستجابة البصرية للمستخدم أولًا، ثم نفّذ العمل الثقيل.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>راجع سكربتات الأطراف الثالثة:</b> فقاعات الدردشة، وأدوات الخرائط الحرارية، ووسوم الإعلانات والتحليلات المتعددة هي أكثر المتسببين شيوعًا في INP. أبقِ ما تستخدمه فعلًا، وحمّل الباقي بشكل مؤجل.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>أبقِ DOM صغيرًا:</b> في الصفحات التي تحتوي آلاف العناصر يصبح إعادة الرسم بعد كل تفاعل مكلفًا.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>خفّف عبء الإضافات والقوالب:</b> الشيفرات غير المستخدمة التي تحمّلها القوالب الجاهزة في كل صفحة تبطئ التفاعل، خاصة على الهواتف منخفضة المواصفات.</span></li>
      </ul>
      <p>عند هذه النقطة يصبح اختيار البنية التحتية حاسمًا. أما الفرق بين موقع يكبر بالإضافات وموقع خفيف مكتوب حسب الحاجة <a href="wordpress-mi-ozel-yazilim-mi">WordPress أم برمجيات مخصصة</a> بالتفصيل.</p>
      <h2 id="cls" class="bi-h2" data-n="06">كيف يُحسَّن CLS: امنع انزياح الصفحة</h2>
      <p>انزلاق السطر الذي تقرؤه فجأة إلى الأسفل، أو تغيّر موضع الزر لحظة النقر عليه، هو ما يقيسه CLS. ولحسن الحظ فإن الحلول بسيطة عادةً:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>حدّد أبعاد الصور ومقاطع الفيديو:</b> بخاصيتي width وheight أو عبر CSS aspect-ratio يحجز المتصفح المساحة مسبقًا.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>خصّص مساحة ثابتة للإعلانات واللافتات والمحتوى المضمّن:</b> لا تدع إشعار ملفات تعريف الارتباط أو شريط الحملة المحمّل لاحقًا يدفع المحتوى؛ بل اجعله يفتح كطبقة علوية (overlay).</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>خفّف أثر تبديل الخطوط:</b> حمّل خط الويب مسبقًا واجعل مقاسات الخط الاحتياطي قريبة منه.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>استخدم transform في الحركات:</b> نفّذ الحركات بـ transform وopacity بدلًا من الخصائص التي تؤثر في التخطيط مثل top وleft وheight.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>فحص سريع:</b> افتح موقعك على الهاتف باتصال بطيء وراقب الشاشة بانتباه في الثواني الثلاث الأولى. فكل قفزة تراها بعينك تنعكس على درجة CLS لديك.</div></div>
      <h2 id="platform" class="bi-h2" data-n="07">أكثر مشكلات السرعة شيوعًا حسب نوع الموقع</h2>
      <p>لا تبطؤ كل المواقع للسبب نفسه. وإن لخّصنا ما نصادفه في المشاريع حسب نوع الموقع:</p>
      <table>
        <thead><tr><th>نوع الموقع</th><th>المشكلة الأكثر شيوعًا</th><th>أول ما يجب فحصه</th></tr></thead>
        <tbody>
          <tr><td>موقع شركة بقالب جاهز</td><td>قالب ثقيل، وعدد كبير من الإضافات، وصور شرائح عرض كبيرة</td><td>الإضافات غير المستخدمة، وحجم الصورة الرئيسية، وذاكرة التخزين المؤقت للصفحات</td></tr>
          <tr><td>موقع تجارة إلكترونية</td><td>صور المنتجات، والمرشحات، وعدد كبير من وسوم التتبع والتسويق</td><td>LCP صفحة الفئة، وسكربتات الأطراف الثالثة، وINP تفاعلات السلة</td></tr>
          <tr><td>تطبيق صفحة واحدة (React وVue وغيرهما)</td><td>حزم JavaScript كبيرة، وتأخر تكوّن المحتوى في المتصفح</td><td>العرض من جانب الخادم أو العرض المسبق، وتقسيم الشيفرة</td></tr>
          <tr><td>موقع أخبار ومدونة</td><td>تحميل مساحات الإعلانات لاحقًا وإزاحتها للمحتوى</td><td>مساحات ثابتة مخصصة لخانات الإعلانات، CLS</td></tr>
        </tbody>
      </table>
      <p>هذا الجدول نقطة انطلاق؛ فالتشخيص القاطع يكون دائمًا بالقياس. ومع ذلك فإن معرفة الموضع المرجح للمشكلة توفر الوقت عند الحديث مع المطوّر. فمثلًا، إن كانت صفحة تفاصيل المنتج سريعة في موقع تجارة إلكترونية بينما صفحة الفئة بطيئة، فالمشكلة غالبًا هي تنزيل عشرات الصور المعروضة دفعة واحدة وبحجمها الكامل.</p>
      <p>إن كنت تستهدف تجربة سريعة وخفيفة تمنح إحساس تطبيق الجوال، فيجب مناقشة ذلك في مرحلة التصميم. فكل ميزة “صغيرة” تُضاف إلى الصفحة لاحقًا تأخذ حصة من ميزانية السرعة.</p>
      <h2 id="plan" class="bi-h2" data-n="08">خطة خطوة بخطوة لزيادة سرعة الموقع</h2>
      <p>بدلًا من محاولة إصلاح كل شيء دفعة واحدة، ابدأ بالأكبر أثرًا:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 1 —</b> افتح تقرير Core Web Vitals في Search Console، وأدرج مجموعات الصفحات “الضعيفة” على الجوال.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 2 —</b> اختبر عنوانًا نموذجيًا من كل مجموعة في PageSpeed Insights، ودوّن المقياس المتعثر.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 3 —</b> عالج أولًا المشكلات على مستوى القوالب: فمئات الصفحات التي تستخدم القالب نفسه تتحسن بإصلاح واحد.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 4 —</b> طبّق المكاسب السريعة مثل الصور والتخزين المؤقت وCDN؛ ثم انتقل إلى JavaScript وسكربتات الأطراف الثالثة.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 5 —</b> اختر “التحقق من الإصلاح” في Search Console وانتظر تحديث البيانات الميدانية خلال 28 يومًا.</span></li>
      </ul>
      <p>السرعة ليست مشروعًا لمرة واحدة، بل ميزانية يجب الحفاظ عليها باستمرار. فإضافة جديدة أو صورة كبيرة أو شيفرة تتبع إضافية قد تمحو المكاسب خلال أسابيع قليلة. لذلك اطرح قبل إضافة أي ميزة جديدة سؤال: “كم سيبطئ هذا الصفحة؟”. وإن أردت رؤية مكانة السرعة في الظهور في البحث ضمن إطار أوسع <a href="teknik-seo-kontrol-listesi">قائمة التحقق الخاصة بـ SEO التقني لدينا</a> يمكنك الاطلاع عليها أيضًا.</p>
      <div class="bi-check">
        <div class="eyebrow">// قائمة تحقق السرعة</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل LCP على الجوال أقل من 2.5 ثانية؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل INP أقل من 200 ms، وهل أُزيلت سكربتات الأطراف الثالثة غير الضرورية؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل CLS أقل من 0.1، وهل الأبعاد محددة في جميع الصور؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل تُحمَّل الصورة الرئيسية بأولوية ودون تحميل كسول؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل الصور بصيغة WebP/AVIF وبالحجم الصحيح؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل ذاكرة التخزين المؤقت للصفحات والضغط وCDN مفعّلة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل يُتابَع تقرير Core Web Vitals في Search Console بانتظام؟</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">الأسئلة الشائعة</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>ما هي Core Web Vitals؟</summary><p>Core Web Vitals ثلاثة مقاييس حددتها Google لقياس تجربة المستخدم الحقيقية: LCP لسرعة التحميل، وINP للاستجابة للتفاعل، وCLS للاستقرار البصري. وتُستخدم هذه المقاييس في تقييم Google لتجربة الصفحة.</p></details><details class="bi-faq-i"><summary>كم ثانية تعدّ قيمة LCP جيدة؟</summary><p>بحسب Google، يُعدّ LCP جيدًا إن كان 2.5 ثانية أو أقل، وضعيفًا إن تجاوز 4 ثوانٍ. ويُجرى التقييم وفق الشريحة المئوية 75 من زيارات المستخدمين الحقيقيين.</p></details><details class="bi-faq-i"><summary>لماذا حلّ INP محل FID؟</summary><p>كان FID يقيس فقط تأخر التفاعل الأول في الصفحة، وكانت معظم المواقع تجتاز هذا الاختبار بسهولة. أما INP فيتابع جميع التفاعلات في الصفحة ويُبلغ عن أحد أبطئها؛ لذلك يعكس تجربة المستخدم الحقيقية بشكل أفضل. وقد دخل التغيير حيز التنفيذ في مارس 2024.</p></details><details class="bi-faq-i"><summary>إن لم تكن درجة PageSpeed 100، فهل يكون SEO لموقعي سيئًا؟</summary><p>لا. درجة Lighthouse اختبار مختبري وليست إشارة ترتيب مباشرة. المهم أن تكون قيم LCP وINP وCLS في بيانات المستخدمين الحقيقيين ضمن العتبات الجيدة. فالصفحة ذات الدرجة 85 والبيانات الميدانية الجيدة أكثر دلالة من نتيجة اختبار بدرجة 100.</p></details><details class="bi-faq-i"><summary>متى تنعكس إصلاحات Core Web Vitals؟</summary><p>لأن البيانات الميدانية تستند إلى تجربة المستخدمين في آخر 28 يومًا، يستغرق انعكاس الإصلاحات كاملة على التقارير نحو أربعة أسابيع. أما في اختبارات المختبر فيمكنك رؤية التحسن فورًا.</p></details></div>
      <h2 id="sonuc">كلمة أخيرة</h2>
      <p>تختزل Core Web Vitals إحساس الزائر بموقعك في ثلاثة أرقام: أن يظهر المحتوى الرئيسي خلال 2.5 ثانية، وأن تلقى كل نقرة استجابة خلال 200 ميلي ثانية، وأن يبقى انزياح الصفحة أقل من 0.1. وهذه الأهداف لا تتطلب غالبًا إعادة بناء مكلفة، بل تشخيصًا صحيحًا وإصلاحات صغيرة منضبطة.</p>
      <p>في CYF Tech نصمم <a href="web-cozumleri">مواقع الويب وبرمجيات الويب</a> التي نطوّرها بميزانية سرعة منذ البداية، كما نجري تحليل Core Web Vitals وتحسينها للمواقع القائمة. وإن أردت أن نكتشف معًا سبب بطء موقعك <a href="iletisim">تواصل معنا</a>.</p>
      <div class="bi-src"><div class="eyebrow">// المصادر</div><ol><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://web.dev/articles/defining-core-web-vitals-thresholds" target="_blank" rel="noopener nofollow">web.dev — How the Core Web Vitals metrics thresholds were defined</a></li><li><a href="https://web.dev/articles/lcp" target="_blank" rel="noopener nofollow">web.dev — Largest Contentful Paint (LCP)</a></li><li><a href="https://web.dev/articles/inp" target="_blank" rel="noopener nofollow">web.dev — Interaction to Next Paint (INP)</a></li><li><a href="https://web.dev/articles/cls" target="_blank" rel="noopener nofollow">web.dev — Cumulative Layout Shift (CLS)</a></li><li><a href="https://web.dev/articles/ttfb" target="_blank" rel="noopener nofollow">web.dev — Time to First Byte (TTFB)</a></li><li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals" target="_blank" rel="noopener nofollow">Google Search Central — Understanding Core Web Vitals and Google search results</a></li><li><a href="https://developers.google.com/search/docs/appearance/page-experience" target="_blank" rel="noopener nofollow">Google Search Central — Understanding page experience</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>كل المقالات</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>مشاركة</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="مشاركة عبر واتساب" title="مشاركة عبر واتساب"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="مشاركة على LinkedIn" title="مشاركة على LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="مشاركة على X" title="مشاركة على X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="إرسال عبر البريد الإلكتروني" title="إرسال عبر البريد الإلكتروني"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="المحتويات">
        <div class="eyebrow">// في هذا المقال</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">لماذا هي مهمة؟</a></li><li><a href="#metrikler" data-n="02">LCP وINP وCLS</a></li><li><a href="#olcum" data-n="03">كيف تُقاس؟</a></li><li><a href="#lcp" data-n="04">تحسين LCP</a></li><li><a href="#inp" data-n="05">تحسين INP</a></li><li><a href="#cls" data-n="06">تحسين CLS</a></li><li><a href="#platform" data-n="07">المشكلات حسب نوع الموقع</a></li><li><a href="#plan" data-n="08">خطة التحسين</a></li><li><a href="#sss" data-n="09">الأسئلة الشائعة</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// مقالات أخرى</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>ما هو SEO؟ دليل مبسّط وعملي للمبتدئين لعام 2026</b><span class="bi-read">8 دقائق قراءة</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>SEO المحلي وملف Google التجاري: دليل التميّز في الخرائط</b><span class="bi-read">8 دقائق قراءة</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>قائمة تحقق SEO التقني 2026: 30 بندًا لتدقيق موقعك</b><span class="bi-read">8 دقائق قراءة</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>7 أمور يجب معرفتها قبل إنشاء موقع ويب لشركتك</b><span class="bi-read">6 دقائق قراءة</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>أسعار المواقع الإلكترونية 2026: 9 عوامل تحدد التكلفة</b><span class="bi-read">10 دقائق قراءة</span></div></a></li></ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim"><b>لنتحدث عن مشروعك.</b><span>حدّثنا عن فكرتك، وسنعدّ لك عرضًا مخصصًا.</span><div class="bi-go">اطلب عرض سعر<svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div></a>
    </aside>
  </div>
</section>

<section class="section cta-dark">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// لنبدأ الآن</div>
        <h2 class="h2">لنحوّل مشروعك إلى واقع معًا.</h2>
        <p class="lead" style="margin-top:20px">حدّثنا عن مشروعك، وسنعدّ لك عرضًا مخصصًا.</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim">اطلب عرض سعر<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn" href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>راسلنا عبر WhatsApp</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg><span class="k">هاتف</span>0543 791 10 61</a>
        <a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span class="k">بريد</span>info@cyftech.com.tr</a>
        <a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="k">العنوان</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="./" aria-label="cyftech الصفحة الرئيسية" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
        <p>نقطتك الموثوقة في العالم الرقمي. تصميم المواقع وتطوير البرمجيات والحلول الرقمية.</p>
      </div>
      <div>
        <h2>روابط سريعة</h2>
        <ul><li><a href="./">الرئيسية</a></li><li><a href="projelerimiz">المشاريع</a></li><li><a href="referanslar">المراجع</a></li><li><a href="blog">المدونة</a></li><li><a href="hakkimizda">من نحن</a></li><li><a href="iletisim">تواصل معنا</a></li></ul>
      </div>
      <div>
        <h2>الخدمات</h2>
        <ul><li><a href="web-cozumleri"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>حلول الويب</a></li><li><a href="masaustu-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>تطبيقات سطح المكتب</a></li><li><a href="mobil-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>تطبيقات الجوال</a></li></ul>
      </div>
      <div>
        <h2>تواصل معنا</h2>
        <ul><li><a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg>0543 791 10 61</a></li><li><a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@cyftech.com.tr</a></li><li><a href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp</a></li><li><a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — نقطتك الموثوقة في العالم الرقمي.</span> <span>جميع الحقوق محفوظة.</span>
    </div>
  </div>
</footer>
<a class="wa-fab" href="https://wa.me/905437911061" target="_blank" rel="noopener" aria-label="راسلنا عبر WhatsApp"><svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a>
</body>
</html>
