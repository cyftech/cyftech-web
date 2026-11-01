<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<script id="cyf-lang-redirect">try{var L=["en", "de", "ar", "zh", "ru", "tr"],s=localStorage.getItem("cyf-lang");if(!s&&!/bot|crawl|spider|slurp|lighthouse/i.test(navigator.userAgent)){var ls=navigator.languages||[navigator.language||""];for(var i=0;i<ls.length&&!s;i++){var c=(ls[i]||"").slice(0,2).toLowerCase();if(L.indexOf(c)>-1)s=c}s=s||"en"}if(s&&s!=="tr"&&L.indexOf(s)>-1){var p=location.pathname,f=p.split("/").pop();location.replace(p.slice(0,p.length-f.length)+s+"/"+f+location.search+location.hash)}}catch(e){}</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026) — CYF Tech Blog</title>
<meta name="description" content="Core Web Vitals nedir? LCP, INP ve CLS eşikleri, PageSpeed Insights ve Search Console ile ölçüm ve site hızını artırmak için uygulanabilir adımlar.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026) — CYF Tech Blog">
<meta property="og:description" content="Core Web Vitals nedir? LCP, INP ve CLS eşikleri, PageSpeed Insights ve Search Console ile ölçüm ve site hızını artırmak için uygulanabilir adımlar.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/site-hizi-core-web-vitals">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<link rel="canonical" href="https://cyftech.com.tr/site-hizi-core-web-vitals">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)", "description": "Core Web Vitals nedir? LCP, INP ve CLS eşikleri, PageSpeed Insights ve Search Console ile ölçüm ve site hızını artırmak için uygulanabilir adımlar.", "image": "https://cyftech.com.tr/assets/img/blog/site-hizi-core-web-vitals.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/site-hizi-core-web-vitals", "url": "https://cyftech.com.tr/site-hizi-core-web-vitals", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)", "item": "https://cyftech.com.tr/site-hizi-core-web-vitals"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Core Web Vitals nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Core Web Vitals, Google’ın gerçek kullanıcı deneyimini ölçmek için belirlediği üç metriktir: yükleme hızı için LCP, etkileşime tepki için INP ve görsel kararlılık için CLS. Bu metrikler Google’ın sayfa deneyimi değerlendirmesinde kullanılır."}}, {"@type": "Question", "name": "İyi bir LCP değeri kaç saniyedir?", "acceptedAnswer": {"@type": "Answer", "text": "Google’a göre LCP 2,5 saniye veya altındaysa iyi, 4 saniyenin üzerindeyse zayıf kabul edilir. Değerlendirme, gerçek kullanıcı ziyaretlerinin 75. yüzdelik dilimine göre yapılır."}}, {"@type": "Question", "name": "INP neden FID’nin yerini aldı?", "acceptedAnswer": {"@type": "Answer", "text": "FID yalnızca sayfadaki ilk etkileşimin gecikmesini ölçüyordu ve çoğu site bu testi kolayca geçiyordu. INP ise sayfadaki tüm etkileşimleri izleyip en yavaşlarından birini raporlar; bu yüzden kullanıcının gerçek deneyimini daha iyi yansıtır. Değişiklik Mart 2024’te yürürlüğe girdi."}}, {"@type": "Question", "name": "PageSpeed puanı 100 olmazsa SEO’m kötü mü olur?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. Lighthouse puanı bir laboratuvar testidir ve doğrudan sıralama sinyali değildir. Önemli olan, gerçek kullanıcı verisinde LCP, INP ve CLS değerlerinin iyi eşikler içinde olmasıdır. 85 puanlı ama saha verisi iyi olan bir sayfa, 100 puanlı bir test sonucundan daha anlamlıdır."}}, {"@type": "Question", "name": "Core Web Vitals düzeltmeleri ne zaman yansır?", "acceptedAnswer": {"@type": "Answer", "text": "Saha verisi son 28 günün kullanıcı deneyimine dayandığı için düzeltmelerin raporlara tam yansıması yaklaşık dört hafta sürer. Laboratuvar testlerinde ise iyileşmeyi hemen görebilirsiniz."}}]}</script>
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
      <div class="lang-menu"><a href="site-hizi-core-web-vitals" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/site-hizi-core-web-vitals" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/site-hizi-core-web-vitals" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/site-hizi-core-web-vitals" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/site-hizi-core-web-vitals" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/site-hizi-core-web-vitals" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
<section class="page-hero" style="padding-bottom:48px">
  <div class="floor" aria-hidden="true"><div><div></div></div></div>
  <div class="wrap">
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>SEO</span></div>
    <h1 class="h1" style="max-width:900px">Core Web Vitals ve site hızı: LCP, INP ve CLS rehberi.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/site-hizi-core-web-vitals.svg" alt=""></div>
      <p class="bi-lead">Ziyaretçi sitenize geldi, ama sayfa açılmadı, butona bastı ama tepki gelmedi, okumaya başladı ve metin aşağı kaydı. Bu üç küçük hayal kırıklığının her birinin Google’da bir adı var: <b>Core Web Vitals</b>. Site hızını ölçmenin ve iyileştirmenin en net yolu da bu üç metrikten geçiyor.</p>
      <p>Bu yazıda Core Web Vitals’ın ne olduğunu, LCP, INP ve CLS metriklerinin güncel “iyi” eşiklerini, bu değerleri hangi araçlarla ve nasıl doğru ölçeceğinizi ve her biri için en çok fark yaratan iyileştirmeleri anlatıyoruz.</p>
      <p>Teknik ekibiniz olmasa bile yazının sonunda sitenizin durumunu kendiniz kontrol edebilecek ve ajansınıza ya da yazılımcınıza doğru soruları sorabileceksiniz.</p>
      <h2 id="neden" class="bi-h2" data-n="01">Site hızı neden hem müşteri hem SEO meselesi?</h2>
      <p>Yavaş bir site önce kullanıcıyı kaybettirir. Mobil bağlantıda birkaç saniye boş ekrana bakan ziyaretçi, aramaya geri dönüp bir sonraki sonuca tıklar. Bu, reklamla getirdiğiniz trafikte doğrudan para kaybı demektir.</p>
      <p>Google tarafında ise Core Web Vitals, “sayfa deneyimi” kapsamında sıralama sistemlerinin dikkate aldığı sinyaller arasında yer alıyor. Google Search Central bunu açıkça ifade ediyor; ancak aynı belgede, içeriğin alaka düzeyinin hâlâ çok daha belirleyici olduğu da vurgulanıyor. Yani hızlı ama içeriği zayıf bir sayfa üst sıralara çıkmaz; benzer kalitede iki sayfa arasında ise deneyim fark yaratabilir.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Hız tek başına sizi birinci yapmaz, ama yavaşlık sizi kolayca geride bırakır.</blockquote>
      <h2 id="metrikler" class="bi-h2" data-n="02">Core Web Vitals metrikleri ve 2026 eşik değerleri</h2>
      <p>Core Web Vitals üç metrikten oluşur. Her biri kullanıcı deneyiminin farklı bir yönünü ölçer: yükleme, etkileşim ve görsel kararlılık.</p>
      <table>
        <thead><tr><th>Metrik</th><th>Neyi ölçer?</th><th>İyi</th><th>İyileştirilmeli</th><th>Zayıf</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b> (Largest Contentful Paint)</td><td>Sayfadaki en büyük görsel ya da metin bloğunun ekranda belirme süresi</td><td>≤ 2,5 sn</td><td>2,5–4 sn</td><td>&gt; 4 sn</td></tr>
          <tr><td><b>INP</b> (Interaction to Next Paint)</td><td>Tıklama, dokunma ve tuş vuruşlarına sayfanın görsel tepki verme süresi</td><td>≤ 200 ms</td><td>200–500 ms</td><td>&gt; 500 ms</td></tr>
          <tr><td><b>CLS</b> (Cumulative Layout Shift)</td><td>Sayfa açılırken ve kullanılırken öğelerin beklenmedik kayması</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0,25</td></tr>
        </tbody>
      </table>
      <p>Önemli bir ayrıntı: Google bu değerleri <b>gerçek kullanıcıların 75. yüzdelik dilimine</b> göre değerlendirir. Yani ziyaretlerin en az yüzde 75’i “iyi” eşiğin içinde kalmalıdır. Bir sayfanın Core Web Vitals’ı geçmesi için üç metriğin de iyi olması gerekir; biri zayıfsa ortalama alınmaz.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>FID’yi hâlâ görüyorsanız:</b> INP, Mart 2024’te etkileşim metriği olarak FID’nin (First Input Delay) yerini aldı. FID yalnızca ilk etkileşimin gecikmesine bakarken INP sayfadaki tüm etkileşimleri hesaba katar, bu yüzden daha zorlayıcıdır. Eski raporlarda FID’ye göre “iyi” görünen siteler INP’de takılabiliyor.</div></div>
      <h2 id="olcum" class="bi-h2" data-n="03">Core Web Vitals nasıl ölçülür: saha verisi ve laboratuvar verisi</h2>
      <p>Ölçümde en sık yapılan hata, tek bir PageSpeed puanına bakıp karar vermektir. İki tür veri vardır ve ikisi farklı şey söyler:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Saha verisi (field data):</b> Chrome kullanıcılarının gerçek deneyimlerinden toplanan Chrome UX Report (CrUX) verisidir. Google’ın sıralamada dikkate aldığı veri budur ve son 28 günün ortalamasını yansıtır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Laboratuvar verisi (lab data):</b> Lighthouse’un tek bir simüle cihaz ve bağlantıda yaptığı testtir. Sorunları teşhis etmek için idealdir, ancak gerçek kullanıcı deneyimini birebir göstermez. INP’yi doğrudan ölçemez; yerine Total Blocking Time (TBT) değerine bakılır.</span></li>
      </ul>
      <h3>Hangi aracı ne için kullanmalı?</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>PageSpeed Insights:</b> Tek bir adres için hem saha hem laboratuvar verisini birlikte gösterir. Üstteki “gerçek kullanıcı deneyimi” bölümünü esas alın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Search Console — Core Web Vitals raporu:</b> Tüm sitenizi benzer sayfa gruplarına ayırarak mobil ve masaüstü için hangi URL’lerin zayıf olduğunu gösterir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Chrome DevTools (Performance paneli):</b> Yavaş etkileşimlerin ve kaymaların nedenini satır satır bulmak için geliştiricilerin aracıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>web-vitals kütüphanesi:</b> Kendi analitik aracınıza gerçek kullanıcı ölçümü göndermek için Google’ın küçük JavaScript kütüphanesidir.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Trafiği az olan yeni sitelerde CrUX verisi bulunmayabilir. Bu durumda laboratuvar verisiyle ilerleyin, ama mutlaka orta segment bir Android telefonda ve mobil bağlantıda da elle test edin.</div></div>
      <h2 id="lcp" class="bi-h2" data-n="04">LCP nasıl iyileştirilir: ana içeriği daha hızlı gösterin</h2>
      <p>Çoğu kurumsal sitede LCP öğesi, sayfanın üst kısmındaki büyük görsel (hero) ya da ana başlıktır. LCP süresi dört parçadan oluşur: sunucunun ilk yanıtı (TTFB), kaynağın keşfedilmesi, kaynağın indirilmesi ve ekrana çizilmesi. İyileştirme de bu sırayla yapılır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Sunucu yanıtını hızlandırın:</b> web.dev, TTFB için 0,8 saniye ve altını iyi kabul ediyor. Sayfa önbelleği, kaliteli barındırma ve CDN bu süreyi belirgin şekilde düşürür.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>LCP görselini erken keşfettirin:</b> Görseli CSS arka planı veya JavaScript ile değil, HTML içinde doğrudan verin; fetchpriority="high" ile önceliklendirin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Üst kısımdaki görsele lazy loading uygulamayın:</b> Tembel yükleme ekranın altındaki görseller içindir; ana görselde LCP’yi geciktirir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Görseli küçültün:</b> WebP veya AVIF biçimi, doğru boyut ve srcset ile mobilde gereksiz büyük dosya indirilmesini önleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Render’ı engelleyen kaynakları azaltın:</b> Kritik CSS’i öne alın, kullanılmayan CSS ve senkron yüklenen betikleri temizleyin, yazı tiplerinde font-display: swap kullanın.</span></li>
      </ul>
      <p>Barındırma tarafındaki kararların hıza etkisini <a href="alan-adi-ve-hosting-secimi">alan adı ve hosting seçimi</a> yazımızda ayrıca ele aldık.</p>
      <h2 id="inp" class="bi-h2" data-n="05">INP nasıl iyileştirilir: tıklamalara anında tepki verin</h2>
      <p>INP sorunu genellikle tarayıcının ana iş parçacığının (main thread) JavaScript ile meşgul olmasından kaynaklanır. Kullanıcı menüye dokunur, ama tarayıcı o anda bir analitik betiğini ya da büyük bir slider kodunu çalıştırdığı için tepki gecikir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Uzun görevleri bölün:</b> 50 ms’yi aşan JavaScript görevlerini parçalara ayırın; kullanıcıya görsel geri bildirimi önce verin, ağır işi sonra yapın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Üçüncü taraf betikleri gözden geçirin:</b> Sohbet balonları, ısı haritası araçları, birden fazla reklam ve analitik etiketi INP’nin en yaygın suçlularıdır. Gerçekten kullandıklarınızı bırakın, diğerlerini geciktirerek yükleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>DOM’u küçük tutun:</b> Binlerce öğe içeren sayfalarda her etkileşim sonrası yeniden çizim pahalılaşır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Eklenti ve tema yükünü azaltın:</b> Hazır temaların her sayfada yüklediği kullanılmayan kodlar, özellikle düşük donanımlı telefonlarda etkileşimi yavaşlatır.</span></li>
      </ul>
      <p>Bu noktada altyapı seçimi belirleyici olur. Eklentiyle büyüyen bir site ile ihtiyaca göre yazılmış hafif bir site arasındaki farkı <a href="wordpress-mi-ozel-yazilim-mi">WordPress mi özel yazılım mı</a> yazımızda karşılaştırdık.</p>
      <h2 id="cls" class="bi-h2" data-n="06">CLS nasıl iyileştirilir: sayfanın kaymasını önleyin</h2>
      <p>Okuduğunuz satırın aniden aşağı kayması ya da tam tıklayacakken butonun yer değiştirmesi, CLS’nin ölçtüğü şeydir. Neyse ki çözümleri genellikle basittir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Görsellere ve videolara boyut verin:</b> width ve height öznitelikleri ya da CSS aspect-ratio ile tarayıcı yeri önceden ayırır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Reklam, banner ve gömülü içeriklere sabit alan ayırın:</b> Sonradan yüklenen çerez bildirimi veya kampanya şeridi içeriği itmesin; üstte kaplama (overlay) olarak açılsın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yazı tipi değişimini yumuşatın:</b> Web fontunu önceden yükleyin ve yedek fontun ölçülerini ona yakın tutun.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Animasyonlarda transform kullanın:</b> top, left, height gibi düzeni etkileyen özellikler yerine transform ve opacity ile animasyon yapın.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Hızlı kontrol:</b> Sitenizi telefonda yavaş bağlantıyla açın ve ilk üç saniyede ekrana dikkatle bakın. Gözünüzle gördüğünüz her zıplama CLS puanınıza yansır.</div></div>
      <h2 id="platform" class="bi-h2" data-n="07">Site türüne göre en sık görülen hız sorunları</h2>
      <p>Her site aynı nedenle yavaşlamaz. Projelerde karşılaştığımız tabloyu site türüne göre özetlersek:</p>
      <table>
        <thead><tr><th>Site türü</th><th>En sık sorun</th><th>İlk bakılacak yer</th></tr></thead>
        <tbody>
          <tr><td>Hazır temalı kurumsal site</td><td>Ağır tema, çok sayıda eklenti, büyük slider görselleri</td><td>Kullanılmayan eklentiler, ana görselin boyutu, sayfa önbelleği</td></tr>
          <tr><td>E-ticaret sitesi</td><td>Ürün görselleri, filtreler, çok sayıda takip ve pazarlama etiketi</td><td>Kategori sayfası LCP’si, üçüncü taraf betikler, sepet etkileşimlerinin INP’si</td></tr>
          <tr><td>Tek sayfa uygulaması (React, Vue vb.)</td><td>Büyük JavaScript paketleri, içeriğin tarayıcıda geç oluşması</td><td>Sunucu tarafı render veya ön render, kod bölme</td></tr>
          <tr><td>Haber ve blog sitesi</td><td>Reklam alanlarının sonradan yüklenip içeriği kaydırması</td><td>Reklam yuvaları için ayrılmış sabit alanlar, CLS</td></tr>
        </tbody>
      </table>
      <p>Bu tablo bir başlangıç noktasıdır; kesin teşhis her zaman ölçümle yapılır. Yine de sorunun büyük ihtimalle nerede olduğunu bilmek, geliştiriciyle konuşurken zaman kazandırır. Örneğin bir e-ticaret sitesinde ürün detay sayfası hızlı olduğu halde kategori sayfası yavaşsa, sorun çoğu zaman listelenen onlarca görselin aynı anda ve tam boyutta indirilmesidir.</p>
      <p>Mobil uygulama gibi hissettiren, hızlı ve hafif bir deneyim hedefliyorsanız, bunu tasarım aşamasında konuşmak gerekir. Sayfaya sonradan eklenen her “küçük” özellik, hız bütçesinden pay alır.</p>
      <h2 id="plan" class="bi-h2" data-n="08">Site hızını artırmak için adım adım plan</h2>
      <p>Her şeyi aynı anda düzeltmeye çalışmak yerine, etkisi en büyük olandan başlayın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım —</b> Search Console’da Core Web Vitals raporunu açın, mobilde “zayıf” olan sayfa gruplarını listeleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım —</b> Her gruptan örnek bir adresi PageSpeed Insights’ta test edin, hangi metriğin takıldığını not edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım —</b> Önce şablon düzeyindeki sorunları çözün: aynı şablonu kullanan yüzlerce sayfa tek düzeltmeyle iyileşir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım —</b> Görseller, önbellek ve CDN gibi hızlı kazanımları uygulayın; ardından JavaScript ve üçüncü taraf betiklere geçin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım —</b> Search Console’da “düzeltmeyi doğrula” deyin ve saha verisinin 28 gün içinde güncellenmesini bekleyin.</span></li>
      </ul>
      <p>Hız, bir kerelik bir proje değil, sürekli korunması gereken bir bütçedir. Yeni bir eklenti, büyük bir görsel ya da ek bir takip kodu kazanımları birkaç hafta içinde geri alabilir. Bu yüzden her yeni özellik eklenmeden önce “bu, sayfayı ne kadar yavaşlatır?” sorusunu sorun. Hızın arama görünürlüğündeki yerini daha geniş çerçevede görmek isterseniz <a href="teknik-seo-kontrol-listesi">teknik SEO kontrol listemize</a> de göz atabilirsiniz.</p>
      <div class="bi-check">
        <div class="eyebrow">// HIZ KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Mobilde LCP 2,5 saniyenin altında mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>INP 200 ms’nin altında, gereksiz üçüncü taraf betikler temizlendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>CLS 0,1’in altında, tüm görsellerde boyut tanımlı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ana görsel lazy loading olmadan ve öncelikli yükleniyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Görseller WebP/AVIF ve doğru boyutta mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sayfa önbelleği, sıkıştırma ve CDN etkin mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Search Console Core Web Vitals raporu düzenli izleniyor mu?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Core Web Vitals nedir?</summary><p>Core Web Vitals, Google’ın gerçek kullanıcı deneyimini ölçmek için belirlediği üç metriktir: yükleme hızı için LCP, etkileşime tepki için INP ve görsel kararlılık için CLS. Bu metrikler Google’ın sayfa deneyimi değerlendirmesinde kullanılır.</p></details><details class="bi-faq-i"><summary>İyi bir LCP değeri kaç saniyedir?</summary><p>Google’a göre LCP 2,5 saniye veya altındaysa iyi, 4 saniyenin üzerindeyse zayıf kabul edilir. Değerlendirme, gerçek kullanıcı ziyaretlerinin 75. yüzdelik dilimine göre yapılır.</p></details><details class="bi-faq-i"><summary>INP neden FID’nin yerini aldı?</summary><p>FID yalnızca sayfadaki ilk etkileşimin gecikmesini ölçüyordu ve çoğu site bu testi kolayca geçiyordu. INP ise sayfadaki tüm etkileşimleri izleyip en yavaşlarından birini raporlar; bu yüzden kullanıcının gerçek deneyimini daha iyi yansıtır. Değişiklik Mart 2024’te yürürlüğe girdi.</p></details><details class="bi-faq-i"><summary>PageSpeed puanı 100 olmazsa SEO’m kötü mü olur?</summary><p>Hayır. Lighthouse puanı bir laboratuvar testidir ve doğrudan sıralama sinyali değildir. Önemli olan, gerçek kullanıcı verisinde LCP, INP ve CLS değerlerinin iyi eşikler içinde olmasıdır. 85 puanlı ama saha verisi iyi olan bir sayfa, 100 puanlı bir test sonucundan daha anlamlıdır.</p></details><details class="bi-faq-i"><summary>Core Web Vitals düzeltmeleri ne zaman yansır?</summary><p>Saha verisi son 28 günün kullanıcı deneyimine dayandığı için düzeltmelerin raporlara tam yansıması yaklaşık dört hafta sürer. Laboratuvar testlerinde ise iyileşmeyi hemen görebilirsiniz.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Core Web Vitals, sitenizin ziyaretçiye nasıl hissettirdiğini üç sayıya indirger: ana içerik 2,5 saniyede görünsün, her tıklama 200 milisaniyede tepki bulsun, sayfa 0,1’in altında kaysın. Bu hedefler çoğu zaman pahalı bir yeniden yapım değil, doğru teşhis ve disiplinli küçük düzeltmeler gerektirir.</p>
      <p>CYF Tech olarak geliştirdiğimiz <a href="web-cozumleri">web sitelerini ve web yazılımlarını</a> en baştan hız bütçesiyle tasarlıyor, mevcut sitelerde de Core Web Vitals analizi ve iyileştirmesi yapıyoruz. Sitenizin neden yavaş olduğunu birlikte bulmak isterseniz <a href="iletisim">bize ulaşın</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://web.dev/articles/defining-core-web-vitals-thresholds" target="_blank" rel="noopener nofollow">web.dev — How the Core Web Vitals metrics thresholds were defined</a></li><li><a href="https://web.dev/articles/lcp" target="_blank" rel="noopener nofollow">web.dev — Largest Contentful Paint (LCP)</a></li><li><a href="https://web.dev/articles/inp" target="_blank" rel="noopener nofollow">web.dev — Interaction to Next Paint (INP)</a></li><li><a href="https://web.dev/articles/cls" target="_blank" rel="noopener nofollow">web.dev — Cumulative Layout Shift (CLS)</a></li><li><a href="https://web.dev/articles/ttfb" target="_blank" rel="noopener nofollow">web.dev — Time to First Byte (TTFB)</a></li><li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals" target="_blank" rel="noopener nofollow">Google Search Central — Understanding Core Web Vitals and Google search results</a></li><li><a href="https://developers.google.com/search/docs/appearance/page-experience" target="_blank" rel="noopener nofollow">Google Search Central — Understanding page experience</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">Neden önemli?</a></li><li><a href="#metrikler" data-n="02">LCP, INP ve CLS</a></li><li><a href="#olcum" data-n="03">Nasıl ölçülür?</a></li><li><a href="#lcp" data-n="04">LCP iyileştirme</a></li><li><a href="#inp" data-n="05">INP iyileştirme</a></li><li><a href="#cls" data-n="06">CLS iyileştirme</a></li><li><a href="#platform" data-n="07">Site türüne göre sorunlar</a></li><li><a href="#plan" data-n="08">İyileştirme planı</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Yerel SEO ve Google İşletme Profili: Haritalarda Öne Çıkma Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim"><b>Projenizi konuşalım.</b><span>Aklınızdaki fikri anlatın, size özel teklifimizi hazırlayalım.</span><div class="bi-go">Teklif Al<svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div></a>
    </aside>
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
