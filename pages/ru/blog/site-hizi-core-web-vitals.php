<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Core Web Vitals и скорость сайта: руководство по LCP, INP, CLS (2026) — CYF Tech Blog</title>
<meta name="description" content="Что такое Core Web Vitals? Пороги LCP, INP и CLS, измерение в PageSpeed Insights и Search Console и практические шаги для ускорения сайта.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Core Web Vitals и скорость сайта: руководство по LCP, INP, CLS (2026) — CYF Tech Blog">
<meta property="og:description" content="Что такое Core Web Vitals? Пороги LCP, INP и CLS, измерение в PageSpeed Insights и Search Console и практические шаги для ускорения сайта.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/ru/site-hizi-core-web-vitals">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="ru_RU">
<link rel="canonical" href="https://cyftech.com.tr/ru/site-hizi-core-web-vitals">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Core Web Vitals и скорость сайта: руководство по LCP, INP и CLS (2026)", "description": "Что такое Core Web Vitals? Пороги LCP, INP и CLS, измерение в PageSpeed Insights и Search Console и практические шаги для ускорения сайта.", "image": "https://cyftech.com.tr/assets/img/blog/site-hizi-core-web-vitals.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "ru", "mainEntityOfPage": "https://cyftech.com.tr/ru/site-hizi-core-web-vitals", "url": "https://cyftech.com.tr/ru/site-hizi-core-web-vitals", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/ru/"}, {"@type": "ListItem", "position": 2, "name": "Блог", "item": "https://cyftech.com.tr/ru/blog"}, {"@type": "ListItem", "position": 3, "name": "Core Web Vitals и скорость сайта: руководство по LCP, INP и CLS (2026)", "item": "https://cyftech.com.tr/ru/site-hizi-core-web-vitals"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "ru", "mainEntity": [{"@type": "Question", "name": "Что такое Core Web Vitals?", "acceptedAnswer": {"@type": "Answer", "text": "Core Web Vitals — три метрики, которые Google определил для измерения реального пользовательского опыта: LCP для скорости загрузки, INP для отклика на взаимодействие и CLS для визуальной стабильности. Эти метрики используются в оценке удобства страниц Google."}}, {"@type": "Question", "name": "Какое значение LCP считается хорошим?", "acceptedAnswer": {"@type": "Answer", "text": "По Google, LCP 2,5 секунды и меньше считается хорошим, более 4 секунд — плохим. Оценка проводится по 75-му процентилю реальных посещений пользователей."}}, {"@type": "Question", "name": "Почему INP заменила FID?", "acceptedAnswer": {"@type": "Answer", "text": "FID измеряла только задержку первого взаимодействия на странице, и большинство сайтов легко проходили этот тест. INP отслеживает все взаимодействия на странице и сообщает об одном из самых медленных, поэтому лучше отражает реальный опыт пользователя. Изменение вступило в силу в марте 2024 года."}}, {"@type": "Question", "name": "Если балл PageSpeed не 100, моё SEO будет плохим?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Балл Lighthouse — это лабораторный тест и не прямой сигнал ранжирования. Важно, чтобы в данных реальных пользователей значения LCP, INP и CLS укладывались в хорошие пороги. Страница с баллом 85, но хорошими полевыми данными значит больше, чем тест со 100 баллами."}}, {"@type": "Question", "name": "Когда отражаются исправления Core Web Vitals?", "acceptedAnswer": {"@type": "Answer", "text": "Поскольку полевые данные основаны на опыте пользователей за последние 28 дней, полное отражение исправлений в отчётах занимает около четырёх недель. В лабораторных тестах улучшение видно сразу."}}]}</script>
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
<style>:root{--sans:'Space Grotesk','Inter',system-ui,sans-serif}</style>
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
<a class="sr-only" href="#icerik">Перейти к содержимому</a>
<header class="site-head">
  <a class="logo" href="./" aria-label="CYF Tech — главная страница" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="Главное меню">
    <div class="nav-dd">
      <button type="button" aria-haspopup="true">Услуги <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
      <div class="dd-menu"><a href="web-cozumleri"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg><span class="num">01</span><span><b>Веб-решения</b><small>Веб-дизайн, разработка, e-commerce и SEO — в одних руках.</small></span></a><a href="masaustu-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg><span class="num">02</span><span><b>Десктопные приложения</b><small>Программы под Ваш бизнес, работающие и без интернета.</small></span></a><a href="mobil-uygulamalar"><svg class="ic dd-ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg><span class="num">03</span><span><b>Мобильные приложения</b><small>Быстрые и удобные приложения для iOS и Android.</small></span></a></div>
    </div>
    <a href="projelerimiz">Проекты</a>
    <a href="referanslar">Референсы</a>
    <a href="blog" aria-current="page">Блог</a>
    <a href="hakkimizda">О нас</a>
    <a href="iletisim">Контакты</a>
  </nav>
  <div class="head-actions">
    <div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="Выберите язык"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span data-lang-cur>RU</span></button>
      <div class="lang-menu"><a href="../site-hizi-core-web-vitals" hreflang="tr" lang="tr" data-lang="tr"><b>TR</b><span>Türkçe</span></a><a href="../en/site-hizi-core-web-vitals" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="../de/site-hizi-core-web-vitals" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="../ar/site-hizi-core-web-vitals" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="../zh/site-hizi-core-web-vitals" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="site-hizi-core-web-vitals" hreflang="ru" lang="ru" data-lang="ru" aria-current="true"><b>RU</b><span>Русский</span></a></div>
    </div>
    <button type="button" class="icon-btn theme-btn" aria-label="Тёмная / светлая тема" title="Тёмная / светлая тема"><svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg></button>
    <a class="btn btn-primary btn-sm" href="iletisim">Получить предложение<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    <button class="menu-btn" type="button" aria-label="Открыть меню" data-label-open="Открыть меню" data-label-close="Закрыть меню" aria-expanded="false" aria-controls="mnav"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
  </div>
  
</header>
<nav class="mnav" id="mnav" aria-label="Мобильное меню">
  <a href="./">Главная</a>
  <div class="mnav-label">УСЛУГИ</div>
  <a href="web-cozumleri"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Веб-решения</a><a href="masaustu-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Десктопные приложения</a><a href="mobil-uygulamalar"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Мобильные приложения</a>
  <div class="mnav-label">КОМПАНИЯ</div>
  <a href="projelerimiz">Проекты</a>
  <a href="referanslar">Референсы</a>
  <a href="blog" aria-current="page">Блог</a>
  <a href="hakkimizda">О нас</a>
  <a href="iletisim">Контакты</a>
  <a class="btn btn-primary" href="iletisim">Получить предложение<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
</nav>
<main id="icerik">
<section class="page-hero" style="padding-bottom:48px">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">БЛОГ</a><span>/</span><span>SEO</span></div>
    <h1 class="h1" style="max-width:900px">Core Web Vitals и скорость сайта: руководство по LCP, INP и CLS.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 октября 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 мин чтения</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="../assets/img/blog/site-hizi-core-web-vitals.svg" alt=""></div>
      <p class="bi-lead">Посетитель пришёл на сайт, но страница не открылась; нажал кнопку — реакции нет; начал читать — и текст уехал вниз. У каждого из этих трёх маленьких разочарований в Google есть название: <b>Core Web Vitals</b>. Самый понятный способ измерить и улучшить скорость сайта лежит через эти три метрики.</p>
      <p>В этой статье мы рассказываем, что такое Core Web Vitals, каковы актуальные «хорошие» пороги метрик LCP, INP и CLS, какими инструментами и как правильно их измерять и какие улучшения дают наибольший эффект для каждой из них.</p>
      <p>Даже без технической команды к концу статьи вы сможете сами проверить состояние сайта и задать правильные вопросы агентству или разработчику.</p>
      <h2 id="neden" class="bi-h2" data-n="01">Почему скорость сайта важна и для клиентов, и для SEO?</h2>
      <p>Медленный сайт прежде всего теряет пользователя. Посетитель, который несколько секунд смотрит на пустой экран при мобильном соединении, возвращается к поиску и кликает на следующий результат. Для трафика, привлечённого рекламой, это прямая потеря денег.</p>
      <p>Со стороны Google Core Web Vitals входят в число сигналов, которые системы ранжирования учитывают в рамках «удобства страницы». Google Search Central говорит об этом прямо, но в том же документе подчёркивает, что релевантность контента по-прежнему гораздо важнее. То есть быстрая страница со слабым контентом наверх не поднимется, а вот между двумя страницами схожего качества удобство может стать решающим.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Скорость сама по себе не сделает вас первым, но медлительность легко отбросит вас назад.</blockquote>
      <h2 id="metrikler" class="bi-h2" data-n="02">Метрики Core Web Vitals и пороговые значения 2026 года</h2>
      <p>Core Web Vitals состоят из трёх метрик. Каждая измеряет свою сторону пользовательского опыта: загрузку, интерактивность и визуальную стабильность.</p>
      <table>
        <thead><tr><th>Метрика</th><th>Что измеряет?</th><th>Хорошо</th><th>Требует улучшения</th><th>Плохо</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b> (Largest Contentful Paint)</td><td>Время появления на экране самого большого изображения или текстового блока страницы</td><td>≤ 2,5 с</td><td>2,5–4 с</td><td>&gt; 4 с</td></tr>
          <tr><td><b>INP</b> (Interaction to Next Paint)</td><td>Время визуального отклика страницы на клики, касания и нажатия клавиш</td><td>≤ 200 мс</td><td>200–500 мс</td><td>&gt; 500 мс</td></tr>
          <tr><td><b>CLS</b> (Cumulative Layout Shift)</td><td>Неожиданные сдвиги элементов при загрузке и использовании страницы</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0,25</td></tr>
        </tbody>
      </table>
      <p>Важная деталь: Google оценивает эти значения по <b>75-му процентилю реальных пользователей</b>. То есть не менее 75 процентов посещений должны укладываться в «хороший» порог. Чтобы страница прошла Core Web Vitals, все три метрики должны быть хорошими; если одна плохая, среднее не считается.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Если вы всё ещё видите FID:</b> в марте 2024 года INP заменила FID (First Input Delay) в роли метрики интерактивности. FID учитывала только задержку первого взаимодействия, а INP — все взаимодействия на странице, поэтому она строже. Сайты, выглядевшие «хорошими» по FID в старых отчётах, могут не проходить по INP.</div></div>
      <h2 id="olcum" class="bi-h2" data-n="03">Как измерять Core Web Vitals: полевые и лабораторные данные</h2>
      <p>Самая частая ошибка — принимать решение по одному баллу PageSpeed. Существует два типа данных, и они говорят о разном:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Полевые данные (field data):</b> данные Chrome UX Report (CrUX), собранные из реального опыта пользователей Chrome. Именно их Google учитывает при ранжировании; они отражают среднее за последние 28 дней.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Лабораторные данные (lab data):</b> тест Lighthouse на одном смоделированном устройстве и соединении. Идеален для диагностики проблем, но не отражает реальный пользовательский опыт один в один. INP он измерить напрямую не может; вместо неё смотрят на Total Blocking Time (TBT).</span></li>
      </ul>
      <h3>Какой инструмент для чего использовать?</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>PageSpeed Insights:</b> показывает для одного адреса и полевые, и лабораторные данные. Ориентируйтесь на верхний раздел «реальный опыт пользователей».</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Search Console — отчёт Core Web Vitals:</b> делит весь сайт на группы похожих страниц и показывает, какие URL слабые на мобильных и десктопе.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Chrome DevTools (панель Performance):</b> инструмент разработчиков, чтобы построчно находить причины медленных взаимодействий и сдвигов.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Библиотека web-vitals:</b> небольшая JavaScript-библиотека от Google для отправки замеров реальных пользователей в вашу систему аналитики.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Внимание:</b> у новых сайтов с малым трафиком данных CrUX может не быть. В этом случае опирайтесь на лабораторные данные, но обязательно протестируйте вручную на Android-смартфоне среднего сегмента и мобильном соединении.</div></div>
      <h2 id="lcp" class="bi-h2" data-n="04">Как улучшить LCP: показывайте основной контент быстрее</h2>
      <p>На большинстве корпоративных сайтов элемент LCP — это большое изображение в верхней части страницы (hero) или главный заголовок. Время LCP складывается из четырёх частей: первый ответ сервера (TTFB), обнаружение ресурса, загрузка ресурса и отрисовка на экране. Улучшать нужно в том же порядке.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ускорьте ответ сервера:</b> web.dev считает хорошим TTFB 0,8 секунды и меньше. Кеширование страниц, качественный хостинг и CDN заметно сокращают это время.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Дайте браузеру рано обнаружить изображение LCP:</b> указывайте его прямо в HTML, а не через фон CSS или JavaScript; повышайте приоритет с помощью fetchpriority="high".</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Не применяйте lazy loading к верхнему изображению:</b> ленивая загрузка предназначена для изображений ниже первого экрана; для главного изображения она задерживает LCP.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Уменьшите изображение:</b> форматы WebP или AVIF, правильный размер и srcset избавят от загрузки лишне больших файлов на мобильных.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Сократите ресурсы, блокирующие отрисовку:</b> выносите критический CSS вперёд, удаляйте неиспользуемый CSS и синхронно загружаемые скрипты, используйте font-display: swap для шрифтов.</span></li>
      </ul>
      <p>О влиянии решений по хостингу на скорость мы рассказали в статье о <a href="alan-adi-ve-hosting-secimi">выборе домена и хостинга</a>.</p>
      <h2 id="inp" class="bi-h2" data-n="05">Как улучшить INP: мгновенно реагируйте на клики</h2>
      <p>Проблема с INP обычно возникает из-за того, что основной поток браузера (main thread) занят JavaScript. Пользователь касается меню, но браузер в этот момент выполняет скрипт аналитики или громоздкий код слайдера, и отклик задерживается.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Разбивайте длинные задачи:</b> делите задачи JavaScript длиннее 50 мс на части; сначала дайте пользователю визуальный отклик, а тяжёлую работу выполните потом.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Проверьте сторонние скрипты:</b> чат-виджеты, инструменты тепловых карт, несколько рекламных и аналитических тегов — самые частые виновники плохого INP. Оставьте то, чем действительно пользуетесь, остальное загружайте отложенно.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Держите DOM небольшим:</b> на страницах с тысячами элементов перерисовка после каждого взаимодействия обходится дорого.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Уменьшите нагрузку от плагинов и тем:</b> неиспользуемый код, который готовые темы подгружают на каждой странице, замедляет взаимодействие, особенно на слабых телефонах.</span></li>
      </ul>
      <p>Здесь решающим становится выбор платформы. О разнице между сайтом, разрастающимся за счёт плагинов, и лёгким сайтом, написанным под конкретные задачи, читайте в статье <a href="wordpress-mi-ozel-yazilim-mi">WordPress или заказная разработка</a>.</p>
      <h2 id="cls" class="bi-h2" data-n="06">Как улучшить CLS: не допускайте сдвигов страницы</h2>
      <p>Строка, которую вы читаете, внезапно уезжает вниз, или кнопка смещается в момент нажатия — именно это измеряет CLS. К счастью, решения обычно простые:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Задавайте размеры изображениям и видео:</b> с атрибутами width и height или CSS aspect-ratio браузер заранее резервирует место.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Резервируйте фиксированное место под рекламу, баннеры и встраиваемый контент:</b> подгружаемое позже уведомление о cookie или акционная полоса не должны сдвигать контент; пусть открываются поверх (overlay).</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Смягчите смену шрифта:</b> предзагружайте веб-шрифт и подбирайте метрики запасного шрифта близкими к нему.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Используйте transform в анимациях:</b> анимируйте через transform и opacity, а не свойства, влияющие на макет, вроде top, left, height.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Быстрая проверка:</b> откройте сайт на телефоне при медленном соединении и внимательно посмотрите на экран в первые три секунды. Каждый скачок, который вы видите глазами, отражается на показателе CLS.</div></div>
      <h2 id="platform" class="bi-h2" data-n="07">Самые частые проблемы со скоростью по типам сайтов</h2>
      <p>Не каждый сайт тормозит по одной и той же причине. Если обобщить картину, которую мы видим в проектах, по типам сайтов:</p>
      <table>
        <thead><tr><th>Тип сайта</th><th>Самая частая проблема</th><th>С чего начать проверку</th></tr></thead>
        <tbody>
          <tr><td>Корпоративный сайт на готовой теме</td><td>Тяжёлая тема, множество плагинов, большие изображения слайдера</td><td>Неиспользуемые плагины, размер главного изображения, кеширование страниц</td></tr>
          <tr><td>Интернет-магазин</td><td>Фото товаров, фильтры, множество трекинговых и маркетинговых тегов</td><td>LCP страницы категории, сторонние скрипты, INP взаимодействий с корзиной</td></tr>
          <tr><td>Одностраничное приложение (React, Vue и т. п.)</td><td>Большие JavaScript-бандлы, поздняя сборка контента в браузере</td><td>Серверный рендеринг или пре-рендеринг, разделение кода</td></tr>
          <tr><td>Новостной сайт и блог</td><td>Рекламные блоки подгружаются позже и сдвигают контент</td><td>Фиксированные области под рекламные слоты, CLS</td></tr>
        </tbody>
      </table>
      <p>Эта таблица — отправная точка; точный диагноз всегда ставится по замерам. Тем не менее, понимание того, где вероятнее всего проблема, экономит время в разговоре с разработчиком. Например, если в интернет-магазине карточка товара быстрая, а страница категории медленная, проблема чаще всего в том, что десятки изображений в списке загружаются одновременно и в полном размере.</p>
      <p>Если вы стремитесь к быстрому и лёгкому опыту, похожему на мобильное приложение, это нужно обсуждать на этапе дизайна. Каждая «маленькая» функция, добавленная на страницу позже, отнимает долю бюджета скорости.</p>
      <h2 id="plan" class="bi-h2" data-n="08">Пошаговый план ускорения сайта</h2>
      <p>Вместо того чтобы исправлять всё сразу, начните с того, что даст наибольший эффект:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Шаг 1 —</b> откройте отчёт Core Web Vitals в Search Console и выпишите группы страниц со статусом «плохо» на мобильных.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Шаг 2 —</b> протестируйте по одному адресу из каждой группы в PageSpeed Insights и отметьте, какая метрика проваливается.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Шаг 3 —</b> сначала решайте проблемы на уровне шаблона: сотни страниц на одном шаблоне улучшатся одним исправлением.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Шаг 4 —</b> примените быстрые улучшения: изображения, кеширование, CDN; затем переходите к JavaScript и сторонним скриптам.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Шаг 5 —</b> нажмите «Проверить исправление» в Search Console и подождите, пока полевые данные обновятся в течение 28 дней.</span></li>
      </ul>
      <p>Скорость — не разовый проект, а бюджет, который нужно постоянно беречь. Новый плагин, большое изображение или дополнительный код отслеживания могут свести достижения на нет за несколько недель. Поэтому перед добавлением каждой новой функции спрашивайте: «Насколько это замедлит страницу?» Если хотите увидеть место скорости в поисковой видимости в более широком контексте, загляните также в <a href="teknik-seo-kontrol-listesi">наш чек-лист по техническому SEO</a>.</p>
      <div class="bi-check">
        <div class="eyebrow">// ЧЕК-ЛИСТ СКОРОСТИ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>LCP на мобильных меньше 2,5 секунды?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>INP меньше 200 мс, лишние сторонние скрипты удалены?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>CLS меньше 0,1, у всех изображений заданы размеры?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Главное изображение загружается приоритетно и без lazy loading?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Изображения в WebP/AVIF и правильного размера?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Включены ли кеширование страниц, сжатие и CDN?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Регулярно ли отслеживается отчёт Core Web Vitals в Search Console?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Частые вопросы</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Что такое Core Web Vitals?</summary><p>Core Web Vitals — три метрики, которые Google определил для измерения реального пользовательского опыта: LCP для скорости загрузки, INP для отклика на взаимодействие и CLS для визуальной стабильности. Эти метрики используются в оценке удобства страниц Google.</p></details><details class="bi-faq-i"><summary>Какое значение LCP считается хорошим?</summary><p>По Google, LCP 2,5 секунды и меньше считается хорошим, более 4 секунд — плохим. Оценка проводится по 75-му процентилю реальных посещений пользователей.</p></details><details class="bi-faq-i"><summary>Почему INP заменила FID?</summary><p>FID измеряла только задержку первого взаимодействия на странице, и большинство сайтов легко проходили этот тест. INP отслеживает все взаимодействия на странице и сообщает об одном из самых медленных, поэтому лучше отражает реальный опыт пользователя. Изменение вступило в силу в марте 2024 года.</p></details><details class="bi-faq-i"><summary>Если балл PageSpeed не 100, моё SEO будет плохим?</summary><p>Нет. Балл Lighthouse — это лабораторный тест и не прямой сигнал ранжирования. Важно, чтобы в данных реальных пользователей значения LCP, INP и CLS укладывались в хорошие пороги. Страница с баллом 85, но хорошими полевыми данными значит больше, чем тест со 100 баллами.</p></details><details class="bi-faq-i"><summary>Когда отражаются исправления Core Web Vitals?</summary><p>Поскольку полевые данные основаны на опыте пользователей за последние 28 дней, полное отражение исправлений в отчётах занимает около четырёх недель. В лабораторных тестах улучшение видно сразу.</p></details></div>
      <h2 id="sonuc">В заключение</h2>
      <p>Core Web Vitals сводят ощущения посетителя от сайта к трём числам: основной контент появляется за 2,5 секунды, каждый клик получает отклик за 200 миллисекунд, сдвиг страницы меньше 0,1. Эти цели чаще всего требуют не дорогой переделки, а правильной диагностики и дисциплинированных небольших исправлений.</p>
      <p>В CYF Tech мы с самого начала проектируем <a href="web-cozumleri">сайты и веб-приложения</a> с учётом бюджета скорости, а для существующих сайтов проводим анализ и улучшение Core Web Vitals. Если хотите вместе выяснить, почему ваш сайт медленный, <a href="iletisim">свяжитесь с нами</a>.</p>
      <div class="bi-src"><div class="eyebrow">// ИСТОЧНИКИ</div><ol><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://web.dev/articles/defining-core-web-vitals-thresholds" target="_blank" rel="noopener nofollow">web.dev — How the Core Web Vitals metrics thresholds were defined</a></li><li><a href="https://web.dev/articles/lcp" target="_blank" rel="noopener nofollow">web.dev — Largest Contentful Paint (LCP)</a></li><li><a href="https://web.dev/articles/inp" target="_blank" rel="noopener nofollow">web.dev — Interaction to Next Paint (INP)</a></li><li><a href="https://web.dev/articles/cls" target="_blank" rel="noopener nofollow">web.dev — Cumulative Layout Shift (CLS)</a></li><li><a href="https://web.dev/articles/ttfb" target="_blank" rel="noopener nofollow">web.dev — Time to First Byte (TTFB)</a></li><li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals" target="_blank" rel="noopener nofollow">Google Search Central — Understanding Core Web Vitals and Google search results</a></li><li><a href="https://developers.google.com/search/docs/appearance/page-experience" target="_blank" rel="noopener nofollow">Google Search Central — Understanding page experience</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Все статьи</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Поделиться</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="Поделиться в WhatsApp" title="Поделиться в WhatsApp"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="Поделиться в LinkedIn" title="Поделиться в LinkedIn"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="Поделиться в X" title="Поделиться в X"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="Отправить по e-mail" title="Отправить по e-mail"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="Содержание">
        <div class="eyebrow">// В ЭТОЙ СТАТЬЕ</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">Почему это важно?</a></li><li><a href="#metrikler" data-n="02">LCP, INP и CLS</a></li><li><a href="#olcum" data-n="03">Как измерять?</a></li><li><a href="#lcp" data-n="04">Улучшение LCP</a></li><li><a href="#inp" data-n="05">Улучшение INP</a></li><li><a href="#cls" data-n="06">Улучшение CLS</a></li><li><a href="#platform" data-n="07">Проблемы по типам сайтов</a></li><li><a href="#plan" data-n="08">План улучшений</a></li><li><a href="#sss" data-n="09">Частые вопросы</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// ДРУГИЕ СТАТЬИ</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 октября 2026</span><b>Что такое SEO? Простое и практичное руководство для начинающих на 2026 год</b><span class="bi-read">8 мин чтения</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 октября 2026</span><b>Локальное SEO и профиль компании в Google: как выделиться на картах</b><span class="bi-read">8 мин чтения</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 октября 2026</span><b>Чек-лист по техническому SEO 2026: 30 пунктов для аудита сайта</b><span class="bi-read">8 мин чтения</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 октября 2026</span><b>7 вещей, которые нужно знать перед заказом корпоративного сайта</b><span class="bi-read">6 мин чтения</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 октября 2026</span><b>Стоимость сайта в 2026 году: 9 факторов, определяющих цену</b><span class="bi-read">10 мин чтения</span></div></a></li></ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim"><b>Давайте обсудим ваш проект.</b><span>Расскажите о своей идее — мы подготовим индивидуальное предложение.</span><div class="bi-go">Получить предложение<svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div></a>
    </aside>
  </div>
</section>

<section class="section cta-dark">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// ДАВАЙТЕ НАЧНЁМ</div>
        <h2 class="h2">Воплотим Ваш проект вместе.</h2>
        <p class="lead" style="margin-top:20px">Расскажите о своём проекте — мы подготовим индивидуальное предложение.</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim">Получить предложение<svg class="ic ic-dir" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn" href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>Написать в WhatsApp</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg><span class="k">тел</span>0543 791 10 61</a>
        <a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span class="k">почта</span>info@cyftech.com.tr</a>
        <a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="k">адрес</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="./" aria-label="CYF Tech — главная страница" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
        <p>Надёжная точка цифрового мира. Веб-дизайн, разработка ПО и цифровые решения.</p>
      </div>
      <div>
        <h2>БЫСТРОЕ МЕНЮ</h2>
        <ul><li><a href="./">Главная</a></li><li><a href="projelerimiz">Проекты</a></li><li><a href="referanslar">Референсы</a></li><li><a href="blog">Блог</a></li><li><a href="hakkimizda">О нас</a></li><li><a href="iletisim">Контакты</a></li></ul>
      </div>
      <div>
        <h2>УСЛУГИ</h2>
        <ul><li><a href="web-cozumleri"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/></svg>Веб-решения</a></li><li><a href="masaustu-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Десктопные приложения</a></li><li><a href="mobil-uygulamalar"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>Мобильные приложения</a></li></ul>
      </div>
      <div>
        <h2>КОНТАКТЫ</h2>
        <ul><li><a href="tel:+905437911061"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/></svg>0543 791 10 61</a></li><li><a href="mailto:info@cyftech.com.tr"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@cyftech.com.tr</a></li><li><a href="https://wa.me/905437911061" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/></svg>WhatsApp</a></li><li><a href="https://maps.app.goo.gl/161gqpBeCkMonnv89" target="_blank" rel="noopener"><svg class="ic" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — надёжная точка цифрового мира.</span> <span>Все права защищены.</span>
    </div>
  </div>
</footer>
<a class="wa-fab" href="https://wa.me/905437911061" target="_blank" rel="noopener" aria-label="Написать в WhatsApp"><svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a>
</body>
</html>
