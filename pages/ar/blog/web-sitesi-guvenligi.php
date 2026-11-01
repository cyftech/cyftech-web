<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>أمن مواقع الويب وSSL: دليل 2026 للشركات الصغيرة والمتوسطة — مدونة CYF Tech</title>
<meta name="description" content="دليل أمن مواقع الويب: أنواع شهادات SSL ومدد صلاحيتها المتقلصة في 2026، والتحديثات، و2FA، والنسخ الاحتياطي، وWAF، وOWASP Top 10، والإبلاغ عن خرق البيانات وفق KVKK.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="أمن مواقع الويب وSSL: دليل 2026 للشركات الصغيرة والمتوسطة — مدونة CYF Tech">
<meta property="og:description" content="دليل أمن مواقع الويب: أنواع شهادات SSL ومدد صلاحيتها المتقلصة في 2026، والتحديثات، و2FA، والنسخ الاحتياطي، وWAF، وOWASP Top 10، والإبلاغ عن خرق البيانات وفق KVKK.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/ar/web-sitesi-guvenligi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="ar_AR">
<link rel="canonical" href="https://cyftech.com.tr/ar/web-sitesi-guvenligi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "أمان المواقع وشهادات SSL: دليل 2026 للشركات الصغيرة والمتوسطة", "description": "دليل أمن مواقع الويب: أنواع شهادات SSL ومدد صلاحيتها المتقلصة في 2026، والتحديثات، و2FA، والنسخ الاحتياطي، وWAF، وOWASP Top 10، والإبلاغ عن خرق البيانات وفق KVKK.", "image": "https://cyftech.com.tr/assets/img/blog/web-sitesi-guvenligi.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "ar", "mainEntityOfPage": "https://cyftech.com.tr/ar/web-sitesi-guvenligi", "url": "https://cyftech.com.tr/ar/web-sitesi-guvenligi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/ar/"}, {"@type": "ListItem", "position": 2, "name": "المدونة", "item": "https://cyftech.com.tr/ar/blog"}, {"@type": "ListItem", "position": 3, "name": "أمان المواقع وشهادات SSL: دليل 2026 للشركات الصغيرة والمتوسطة", "item": "https://cyftech.com.tr/ar/web-sitesi-guvenligi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "ar", "mainEntity": [{"@type": "Question", "name": "هل تجعل شهادة SSL موقع الويب آمنًا تمامًا؟", "acceptedAnswer": {"@type": "Answer", "text": "لا. تشفّر SSL حركة البيانات بين الزائر والخادم؛ لكنها لا تسد الثغرات البرمجية أو كلمات المرور الضعيفة أو الإضافات غير المحدّثة. ويتطلب الأمن إلى جانب SSL تحديثًا منتظمًا وتحكمًا قويًا في الوصول ونسخًا احتياطيًا."}}, {"@type": "Question", "name": "هل تكفي شهادة SSL المجانية؟", "acceptedAnswer": {"@type": "Answer", "text": "نعم، لمعظم مواقع الشركات ومواقع التجارة الإلكترونية. فشهادات DV المجانية مثل Let’s Encrypt تقدم قوة التشفير نفسها التي تقدمها الشهادات المدفوعة. وتوفر شهادات OV وEV المدفوعة تحققًا إضافيًا من المؤسسة، لكنها لا تجعل الاتصال أكثر أمانًا."}}, {"@type": "Question", "name": "كم مدة صلاحية شهادة SSL؟", "acceptedAnswer": {"@type": "Answer", "text": "بحسب قرار CA/Browser Forum، تبلغ المدة القصوى لصلاحية الشهادات الجديدة 200 يوم اعتبارًا من 15 مارس 2026. وستنخفض إلى 100 يوم في 15 مارس 2027، وإلى 47 يومًا في 15 مارس 2029. لذلك أصبح التجديد التلقائي ضرورة."}}, {"@type": "Question", "name": "كيف أعرف أن موقعي قد اختُرق؟", "acceptedAnswer": {"@type": "Answer", "text": "أكثر العلامات شيوعًا: رؤية صفحات أو روابط لا تعرفها في الموقع، وظهور عناوين بلغة أجنبية في نتائج بحث Google، وتوجيه الزوار إلى مواقع أخرى، وتحذير أمني في Search Console، وإشعارات رسائل مزعجة من شركة الاستضافة."}}, {"@type": "Question", "name": "كم مرة يجب إجراء التحديثات لأمن موقع الويب؟", "acceptedAnswer": {"@type": "Answer", "text": "يجب تطبيق التحديثات الأمنية في أقرب وقت بعد صدورها. وكقاعدة عامة، افحص موقعك مرة في الشهر على الأقل، وثبّت التصحيحات الأمنية الحرجة دون انتظار. ولا تنسَ أخذ نسخة احتياطية قبل التحديث."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/web-sitesi-guvenligi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/web-sitesi-guvenligi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/web-sitesi-guvenligi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/web-sitesi-guvenligi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/web-sitesi-guvenligi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/web-sitesi-guvenligi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/web-sitesi-guvenligi">

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
  <a class="logo" href="./" aria-label="الصفحة الرئيسية لـ CYF Tech" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
      <div class="lang-menu"><a href="../web-sitesi-guvenligi" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="../en/web-sitesi-guvenligi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="../de/web-sitesi-guvenligi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="web-sitesi-guvenligi" hreflang="ar" lang="ar" data-lang="ar" aria-current="true"><b>AR</b><span>العربية</span></a><a href="../zh/web-sitesi-guvenligi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="../ru/web-sitesi-guvenligi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">المدونة</a><span>/</span><span>الأمان</span></div>
    <h1 class="h1" style="max-width:900px">أمن مواقع الويب وSSL: دليل 2026 للشركات الصغيرة والمتوسطة.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>الأمان</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 أكتوبر 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 دقائق قراءة</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/web-sitesi-guvenligi.svg" alt=""></div>
      <p class="bi-lead">“نحن شركة صغيرة، فمن سيهتم بموقعنا؟” نسمع هذه الجملة كثيرًا. غير أن معظم الهجمات تُنفَّذ بأدوات آلية لا تستهدف شركة بعينها، بل أي موقع فيه ثغرة. و<b>أمن مواقع الويب</b> مسألة تخصكم جميعًا بصرف النظر عن حجمكم.</p>
      <p>في هذا الدليل نشرح لماذا يصبح موقع الويب هدفًا، وما فائدة شهادة SSL، وكيف تؤثر عليك مدد الشهادات المتقلصة اعتبارًا من 2026، والتدابير الأساسية مثل التحديثات والوصول والنسخ الاحتياطي وجدار الحماية، ومخاطر OWASP Top 10 التي يجب مراعاتها عند تطوير البرمجيات، وما يجب فعله عند التعرض لهجوم.</p>
      <p>الهدف ليس تحويلك إلى خبير أمني؛ بل أن تتمكن من طرح الأسئلة الصحيحة على وكالتك أو شركة الاستضافة أو فريق البرمجة لديك، وأن تتجنب أكثر الأخطاء شيوعًا.</p>
      <h2 id="tehdit" class="bi-h2" data-n="01">لماذا يتعرض موقع صغير للهجوم؟</h2>
      <p>بالنسبة للمهاجمين، لا تقل قيمة الموارد التي يستخدمها موقعك عن قيمة الموقع نفسه. فالموقع المخترق يمكن استخدامه في:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الرسائل المزعجة والتصيّد:</b> تُرسل آلاف الرسائل المزيفة عبر خادمك، ويدخل اسم نطاقك القوائم السوداء.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>رسائل SEO المزعجة:</b> تُضاف صفحات وروابط مخفية إلى موقعك؛ وقد يصنّف Google موقعك على أنه “مخترق”.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>سرقة البيانات:</b> تُسرق نماذج التواصل وبيانات الأعضاء وسجلات الطلبات؛ وهذا يعني خرقًا للبيانات بموجب KVKK.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الفدية والبرمجيات الخبيثة:</b> تُشفَّر الملفات أو تُوزَّع برمجيات ضارة على الزوار.</span></li>
      </ul>
      <p>وهناك أيضًا تكلفة غير مرئية: فتنظيف موقع مخترق، واستعادة الثقة، واسترجاع ترتيب البحث، وتقديم التوضيحات للعملاء، يكلّف غالبًا أكثر بكثير من تكلفة اتخاذ التدابير الوقائية. بل إن نطاق بريدك الإلكتروني حين يدخل القائمة السوداء، تتوقف حتى رسائل العروض والفواتير العادية عن الوصول إلى عملائك.</p>
      <p>معظم هذه الهجمات تبحث عن ثغرات معروفة صدرت تصحيحاتها منذ زمن. أي أن الجزء الأكبر من الأمن يتحقق بالصيانة المنتظمة والانضباط أكثر من التقنيات المعقدة.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>المهاجم لا يختارك؛ بل يجد الموقع الذي تُرك بابه مفتوحًا.</blockquote>
      <h2 id="ssl" class="bi-h2" data-n="02">ما هي شهادة SSL، وأي نوع يجب أن تختار؟</h2>
      <p>شهادة SSL (واسمها التقني اليوم TLS) تشفّر الحركة بين متصفح الزائر وخادمك، وتوفر <b>https</b> ورمز القفل في شريط العنوان. فرقم الهاتف أو كلمة المرور المرسلة عبر نموذج يمكن أن يقرأها شخص على الشبكة دون SSL. وتصنّف المتصفحات الصفحات دون SSL بأنها “غير آمنة”؛ كما يعدّ Google بروتوكول HTTPS جزءًا من تقييم تجربة الصفحة.</p>
      <table>
        <thead><tr><th>النوع</th><th>ماذا تتحقق منه؟</th><th>لمن تناسب؟</th></tr></thead>
        <tbody>
          <tr><td>DV (التحقق من النطاق)</td><td>فقط أن السيطرة على اسم النطاق بيدك</td><td>مواقع الشركات والمدونات؛ والخيارات المجانية مثل Let’s Encrypt من هذا النوع</td></tr>
          <tr><td>OV (التحقق من المؤسسة)</td><td>وجود الشركة إضافة إلى اسم النطاق</td><td>المنشآت التي تريد إظهار هويتها المؤسسية في الشهادة</td></tr>
          <tr><td>EV (التحقق الموسّع)</td><td>تحقق شامل من الشركة</td><td>بعض الجهات المالية والمؤسسية؛ ولم تعد المتصفحات تعرض شريطًا أخضر مستقلًا</td></tr>
        </tbody>
      </table>
      <p>لا فرق بين الأنواع الثلاثة من حيث قوة التشفير. الفرق في التحقق من الهوية خلف الشهادة. وبالنسبة لمعظم مواقع الشركات الصغيرة والمتوسطة ومواقع التجارة الإلكترونية، تكفي شهادة DV مهيأة جيدًا وتتجدد تلقائيًا.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>رمز القفل لا يعني “موقعًا آمنًا”:</b> SSL يشفّر الاتصال فقط. ولا يسد الثغرات في برمجيات الموقع أو كلمات المرور الضعيفة أو الإضافات غير المحدّثة. ومعظم مواقع التصيّد تمتلك هي الأخرى شهادة SSL صالحة.</div></div>
      <h2 id="sure" class="bi-h2" data-n="03">مدد شهادات SSL تتقلص في 2026: ماذا يجب أن تفعل؟</h2>
      <p>قرر CA/Browser Forum، الذي يضم مصنّعي المتصفحات وجهات إصدار الشهادات، بموجب القرار SC-081 المعتمد في أبريل 2025، تقليص مدة الصلاحية القصوى لشهادات SSL/TLS العامة تدريجيًا:</p>
      <table>
        <thead><tr><th>التاريخ</th><th>المدة القصوى للشهادة</th></tr></thead>
        <tbody>
          <tr><td>اعتبارًا من 15 مارس 2026</td><td>200 يوم</td></tr>
          <tr><td>اعتبارًا من 15 مارس 2027</td><td>100 يوم</td></tr>
          <tr><td>اعتبارًا من 15 مارس 2029</td><td>47 يومًا</td></tr>
        </tbody>
      </table>
      <p>عمليًا، يعني هذا انتهاء عهد “شراء الشهادة مرة في السنة وتثبيتها يدويًا”. ففترة الـ 200 يوم سارية بالفعل؛ وبحلول 2029 سيتعين تجديد الشهادات سبع أو ثماني مرات في السنة.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>انتقل إلى التجديد التلقائي:</b> استخدم مزوّدًا يدعم بروتوكول ACME (مثل Let’s Encrypt) أو ميزة SSL التلقائية في لوحة الاستضافة.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>تابع الشهادات:</b> ثبّت أداة مراقبة تنبهك إلى الشهادات التي أوشكت صلاحيتها على الانتهاء.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>أدرج الشهادات المثبتة يدويًا:</b> إن كنت تستخدم شهادة OV/EV مدفوعة، فاسأل مزوّدك من الآن عن خيارات الأتمتة.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>فعّل HSTS:</b> ترويسة HSTS، التي تطلب من المتصفح الاتصال بموقعك عبر HTTPS دائمًا، تمنع هجمات خفض الاتصال إلى اتصال غير مشفّر.</span></li>
      </ul>
      <h2 id="temel" class="bi-h2" data-n="04">5 تدابير أساسية لأمن مواقع الويب</h2>
      <p>التدابير التي تبدو الأبسط تقنيًا هي التي توقف أكبر عدد من الهجمات:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. برمجيات محدّثة —</b> يجب تحديث نظام إدارة المحتوى والقالب والإضافات وبرمجيات الخادم والمكتبات المستخدمة بانتظام. ولا يكفي تعطيل الإضافات غير المستخدمة، بل احذفها تمامًا.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. وصول محكم —</b> استخدم كلمات مرور فريدة وطويلة للوحة الإدارة ولوحة الاستضافة وFTP وقاعدة البيانات، ومدير كلمات مرور، والتحقق بخطوتين (2FA) حيثما أمكن.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. أقل صلاحية —</b> امنح كل مستخدم الصلاحية التي يحتاجها فقط. وأغلق فورًا حسابات الموظفين المغادرين والوكالات التي انتهت مشاريعها.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. نسخ احتياطي منتظم —</b> طبّق قاعدة 3-2-1: ثلاث نسخ على الأقل، على وسيطين مختلفين، ونسخة واحدة في مكان مستقل عن الخادم. واختبر قابلية استعادة النسخة الاحتياطية بضع مرات في السنة.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. المراقبة —</b> احصل على تنبيهات بشأن إتاحة الموقع وتغييرات الملفات ومحاولات تسجيل الدخول الفاشلة. وراجع تقرير “مشكلات الأمان” في Google Search Console بانتظام.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>أسرع مكسب:</b> أضف اليوم التحقق بخطوتين إلى لوحة الإدارة لديك، وأغلق جميع حسابات المستخدمين التي لم تسجّل الدخول في الأشهر الستة الأخيرة. هاتان الخطوتان تُبطلان إلى حد كبير أكثر طرق الهجوم شيوعًا، وهي كلمات المرور المسروقة أو المخمَّنة.</div></div>
      <h2 id="waf" class="bi-h2" data-n="05">جدار الحماية (WAF) والحماية من DDoS وترويسات الأمان</h2>
      <p>الطبقة الثانية التي تُضاف فوق التدابير الأساسية هي إيقاف الحركة الخبيثة قبل وصولها إلى موقعك.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>جدار حماية تطبيقات الويب (WAF):</b> يرشّح حقن SQL ومحاولات تسجيل الدخول بالقوة الغاشمة وأنماط الهجوم المعروفة. وتقدمه معظم خدمات CDN ضمن حزمها الأساسية.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الحماية من DDoS:</b> الحماية على مستوى CDN أو الاستضافة من محاولات إسقاط الموقع بطلبات مفرطة تكتسب أهمية خاصة في فترات الحملات.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>تقييد تسجيل الدخول وCAPTCHA:</b> تقييد عدد المحاولات في لوحة الإدارة والنماذج يصعّب عمل الروبوتات.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>ترويسات الأمان:</b> ترويسات HTTP مثل Content-Security-Policy وX-Frame-Options (أو CSP frame-ancestors) وX-Content-Type-Options وReferrer-Policy تخبر المتصفح بالمصادر التي يجب أن يثق بها، وتمنع أنواعًا كثيرة من الهجمات من الأساس.</span></li>
      </ul>
      <p>كما أن CDN والتخزين المؤقت يسرّعان موقعك أيضًا؛ فيتحسن الأمان والأداء هنا بالاستثمار نفسه. وقد تناولنا جانب السرعة <a href="site-hizi-core-web-vitals">سرعة الموقع وCore Web Vitals</a> في مقالنا.</p>
      <h2 id="owasp" class="bi-h2" data-n="06">الأمن في البرمجيات المخصصة: OWASP Top 10:2025</h2>
      <p>إن كانت في موقعك أقسام مطوّرة خصيصًا مثل العضوية أو الدفع أو الحجز أو لوحة العملاء، فإن الأمن يعتمد إلى حد كبير على طريقة كتابة الشيفرة. والقائمة المرجعية عالميًا في هذا المجال هي <b>OWASP Top 10</b> التي ترتّب فيها OWASP أخطر المخاطر في تطبيقات الويب. وأبرز العناوين في إصدار 2025، وهو أول تحديث منذ 2021:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>خلل التحكم في الوصول:</b> أخطاء مثل قدرة مستخدم على رؤية فاتورة شخص آخر بتغيير رقم في شريط العنوان. ولا يزال في المرتبة الأولى من القائمة.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>سوء إعدادات الأمان:</b> شاشات إدارة متروكة مفتوحة، وكلمات مرور افتراضية، ورسائل أخطاء مفصلة. وقد صعد إلى المرتبة الثانية في قائمة 2025.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>إخفاقات سلسلة توريد البرمجيات:</b> هذه الفئة المضافة حديثًا تشمل أمن الحزم والإضافات وأدوات البناء الخارجية المستخدمة في المشروع.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الإخفاقات التشفيرية والحقن:</b> تخزين كلمات المرور نصًا صريحًا، أو إدراج مدخلات المستخدم في استعلام قاعدة البيانات دون تحقق.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>سوء التعامل مع الحالات الاستثنائية:</b> وهي أيضًا فئة جديدة؛ تصف وقوع النظام في حالة غير آمنة عند حدوث خطأ.</span></li>
      </ul>
      <p>عند العمل مع فريق البرمجة، استخدم هذه القائمة أداةَ فحص: اسأل عن التدبير المتخذ في مواجهة كل خطر. ومن الممارسات الجيدة أيضًا إجراء اختبار اختراق مستقل قبل الإطلاق في المشاريع الحرجة. ولهذا السبب فإن الصلاحيات حسب الأدوار والاتصالات المشفّرة وحفظ السجلات (log) حاضرة منذ اليوم الأول للتصميم في أنظمة تعالج المدفوعات والبيانات الشخصية مثل منتجينا KATSİS وRestaurantBill. ولمزيد من المعلومات عن هذه المنتجات <a href="projelerimiz">مشاريعنا</a> يمكنك زيارة صفحة.</p>
      <h2 id="ihlal" class="bi-h2" data-n="07">ماذا تفعل عند اختراق موقعك؟</h2>
      <p>رغم أفضل التدابير قد تواجه حادثة. والتدخلات المذعورة كثيرًا ما تمحو الآثار وتضخّم المشكلة. اتبع تسلسلًا هادئًا:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 1 —</b> ضع الموقع في وضع الصيانة أو أغلقه مؤقتًا؛ وامنع تضرر الزوار.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 2 —</b> غيّر جميع كلمات المرور (اللوحة، والاستضافة، وFTP، وقاعدة البيانات، والبريد الإلكتروني) وأنهِ الجلسات.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 3 —</b> افحص سجلات الخادم والملفات المتغيرة لمعرفة مصدر الهجوم؛ فالاستعادة من النسخة الاحتياطية دون سد الثغرة تؤدي إلى تكرار الهجوم.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 4 —</b> استعد من نسخة احتياطية نظيفة، وحدّث جميع البرمجيات، واطلب مراجعة عبر Search Console.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>الخطوة 5 —</b> إن تأثرت بيانات شخصية فقيّم الوضع من الناحية القانونية. ينص KVKK على أن يُبلغ مسؤولو البيانات هيئة حماية البيانات الشخصية في أقرب وقت بعد علمهم بالخرق، وفي موعد أقصاه 72 ساعة وفق قرار الهيئة؛ وأن يُعلموا الأشخاص المعنيين خلال مدة معقولة.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>مهم:</b> هذه المعلومات المتعلقة بـ KVKK لأغراض المعلومات العامة وليست استشارة قانونية. عند وقوع خرق للبيانات تصرّف بالتنسيق مع مختص قانوني. وبشأن نص الإفصاح وإجراءات ملفات تعريف الارتباط في موقعك <a href="kvkk-uyumlu-web-sitesi">موقع متوافق مع KVKK</a> يمكنك قراءة مقالنا.</div></div>
      <p>يصدر المركز الوطني للاستجابة للحوادث السيبرانية (USOM) في تركيا تحذيرات بشأن التهديدات السيبرانية ويستقبل بلاغات الحوادث. ومتابعة الإعلانات التي تخص مؤسستك عادة جيدة.</p>
      <div class="bi-check">
        <div class="eyebrow">// قائمة تحقق الأمان</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل تفتح جميع الصفحات عبر HTTPS، وهل تتجدد شهادة SSL تلقائيًا؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل نظام إدارة المحتوى والقالب والإضافات محدّثة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل التحقق بخطوتين مفعّل في لوحة الإدارة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل أُغلقت حسابات المستخدمين والوكالات القديمة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل تُحفظ النسخ الاحتياطية خارج الخادم، وهل اختُبرت الاستعادة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل WAF/CDN وترويسات الأمان مفعّلة؟</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>هل من سيفعل ماذا عند وقوع خرق مكتوب؟</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">الأسئلة الشائعة</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>هل تجعل شهادة SSL موقع الويب آمنًا تمامًا؟</summary><p>لا. تشفّر SSL حركة البيانات بين الزائر والخادم؛ لكنها لا تسد الثغرات البرمجية أو كلمات المرور الضعيفة أو الإضافات غير المحدّثة. ويتطلب الأمن إلى جانب SSL تحديثًا منتظمًا وتحكمًا قويًا في الوصول ونسخًا احتياطيًا.</p></details><details class="bi-faq-i"><summary>هل تكفي شهادة SSL المجانية؟</summary><p>نعم، لمعظم مواقع الشركات ومواقع التجارة الإلكترونية. فشهادات DV المجانية مثل Let’s Encrypt تقدم قوة التشفير نفسها التي تقدمها الشهادات المدفوعة. وتوفر شهادات OV وEV المدفوعة تحققًا إضافيًا من المؤسسة، لكنها لا تجعل الاتصال أكثر أمانًا.</p></details><details class="bi-faq-i"><summary>كم مدة صلاحية شهادة SSL؟</summary><p>بحسب قرار CA/Browser Forum، تبلغ المدة القصوى لصلاحية الشهادات الجديدة 200 يوم اعتبارًا من 15 مارس 2026. وستنخفض إلى 100 يوم في 15 مارس 2027، وإلى 47 يومًا في 15 مارس 2029. لذلك أصبح التجديد التلقائي ضرورة.</p></details><details class="bi-faq-i"><summary>كيف أعرف أن موقعي قد اختُرق؟</summary><p>أكثر العلامات شيوعًا: رؤية صفحات أو روابط لا تعرفها في الموقع، وظهور عناوين بلغة أجنبية في نتائج بحث Google، وتوجيه الزوار إلى مواقع أخرى، وتحذير أمني في Search Console، وإشعارات رسائل مزعجة من شركة الاستضافة.</p></details><details class="bi-faq-i"><summary>كم مرة يجب إجراء التحديثات لأمن موقع الويب؟</summary><p>يجب تطبيق التحديثات الأمنية في أقرب وقت بعد صدورها. وكقاعدة عامة، افحص موقعك مرة في الشهر على الأقل، وثبّت التصحيحات الأمنية الحرجة دون انتظار. ولا تنسَ أخذ نسخة احتياطية قبل التحديث.</p></details></div>
      <h2 id="sonuc">كلمة أخيرة</h2>
      <p>أمن موقع الويب ليس إعدادًا لمرة واحدة، بل عادة مستمرة: SSL تتجدد تلقائيًا، وبرمجيات محدّثة، وتحقق بخطوتين، ونسخ احتياطية محفوظة خارج الخادم، وجدار حماية. هذه الطبقات الأساسية توقف الجزء الأكبر من الهجمات الآلية عند الباب.</p>
      <p>في CYF Tech نطوّر <a href="web-cozumleri">مواقع الويب وبرمجيات الويب المخصصة</a> مع التفكير في الأمن منذ البداية، ونقدم دعم الصيانة والتحديث بعد الإطلاق أيضًا. وإن أردت أن نراجع معًا الوضع الأمني لموقعك الحالي <a href="iletisim">راسلنا</a>.</p>
      <div class="bi-src"><div class="eyebrow">// المصادر</div><ol><li><a href="https://owasp.org/Top10/2025/0x00_2025-Introduction/" target="_blank" rel="noopener nofollow">OWASP Top 10:2025</a></li><li><a href="https://www.digicert.com/faq/tls-ssl-certificate-validity" target="_blank" rel="noopener nofollow">DigiCert — TLS/SSL certificate validity changes</a></li><li><a href="https://cabforum.org/2025/04/11/ballot-sc081v3-introduce-schedule-of-reducing-validity-and-data-reuse-periods/" target="_blank" rel="noopener nofollow">CA/Browser Forum — Ballot SC-081v3</a></li><li><a href="https://letsencrypt.org/how-it-works/" target="_blank" rel="noopener nofollow">Let’s Encrypt — How it works</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/https" target="_blank" rel="noopener nofollow">Google Search Central — Secure your site with HTTPS</a></li><li><a href="https://developers.google.com/search/docs/monitor-debug/security/hacked" target="_blank" rel="noopener nofollow">Google Search Central — Hacked sites</a></li><li><a href="https://www.kvkk.gov.tr/" target="_blank" rel="noopener nofollow">KVKK — الإبلاغ عن خروقات البيانات الشخصية</a></li><li><a href="https://www.usom.gov.tr/" target="_blank" rel="noopener nofollow">USOM — المركز الوطني للاستجابة للحوادث السيبرانية</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>كل المقالات</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>مشاركة</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="مشاركة عبر واتساب" title="مشاركة عبر واتساب"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="مشاركة على LinkedIn" title="مشاركة على LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="مشاركة على X" title="مشاركة على X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="إرسال عبر البريد الإلكتروني" title="إرسال عبر البريد الإلكتروني"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="المحتويات">
        <div class="eyebrow">// في هذا المقال</div>
        <ol class="bi-toc"><li><a href="#tehdit" data-n="01">لماذا تكون هدفًا؟</a></li><li><a href="#ssl" data-n="02">SSL وHTTPS</a></li><li><a href="#sure" data-n="03">تقلّص مدد SSL</a></li><li><a href="#temel" data-n="04">التدابير الأساسية</a></li><li><a href="#waf" data-n="05">WAF والترويسات</a></li><li><a href="#owasp" data-n="06">OWASP Top 10</a></li><li><a href="#ihlal" data-n="07">إذا وقع هجوم</a></li><li><a href="#sss" data-n="08">الأسئلة الشائعة</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// مقالات أخرى</div>
        <ul class="bi-others"><li><a href="kvkk-uyumlu-web-sitesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>موقع ويب متوافق مع KVKK: نص الإفصاح وملفات تعريف الارتباط والموافقة الصريحة</b><span class="bi-read">9 دقائق قراءة</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>7 أمور يجب معرفتها قبل إنشاء موقع ويب لشركتك</b><span class="bi-read">6 دقائق قراءة</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>أسعار المواقع الإلكترونية 2026: 9 عوامل تحدد التكلفة</b><span class="bi-read">10 دقائق قراءة</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>ما هو SEO؟ دليل مبسّط وعملي للمبتدئين لعام 2026</b><span class="bi-read">8 دقائق قراءة</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 أكتوبر 2026</span><b>دليل إنشاء متجر إلكتروني 2026: خارطة طريق خطوة بخطوة</b><span class="bi-read">10 دقائق قراءة</span></div></a></li></ul>
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
        <a class="logo" href="./" aria-label="الصفحة الرئيسية لـ CYF Tech" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
