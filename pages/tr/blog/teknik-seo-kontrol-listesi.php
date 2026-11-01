<?php
header('Vary: Accept-Language, Cookie');
$L = ['en', 'de', 'ar', 'zh', 'ru']; $c = $_COOKIE['cyf-lang'] ?? ''; $al = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''; $to = '';
if (in_array($c, $L, true)) $to = $c;
elseif ($c === '' && $al !== '') {
  $to = 'en';
  foreach (explode(',', $al) as $x) { $x = strtolower(substr(trim($x), 0, 2)); if ($x === 'tr') { $to = ''; break; } if (in_array($x, $L, true)) { $to = $x; break; } }
}
if ($to !== '' && !preg_match('/bot|crawl|spider|slurp|lighthouse|preview|facebookexternalhit|whatsapp|telegram|slack|discord/i', $_SERVER['HTTP_USER_AGENT'] ?? '')
    && is_file(str_replace(DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'tr' . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $to . DIRECTORY_SEPARATOR, __FILE__))) {
  $n = basename(__FILE__, '.php'); $q = $_SERVER['QUERY_STRING'] ?? '';
  header('Location: /' . $to . '/' . ($n === 'index' ? '' : $n) . ($q !== '' ? '?' . $q : ''), true, 302);
  exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde</title>
<meta name="description" content="Teknik SEO kontrol listesi: robots.txt, site haritası, canonical, Core Web Vitals, mobil dizin, hreflang ve yapılandırılmış veri için 30 maddelik 2026 rehberi.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde">
<meta property="og:description" content="Teknik SEO kontrol listesi: robots.txt, site haritası, canonical, Core Web Vitals, mobil dizin, hreflang ve yapılandırılmış veri için 30 maddelik 2026 rehberi.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/teknik-seo-kontrol-listesi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/teknik-seo-kontrol-listesi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/teknik-seo-kontrol-listesi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde", "description": "Teknik SEO kontrol listesi: robots.txt, site haritası, canonical, Core Web Vitals, mobil dizin, hreflang ve yapılandırılmış veri için 30 maddelik 2026 rehberi.", "image": "https://cyftech.com.tr/assets/img/og/teknik-seo-kontrol-listesi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/teknik-seo-kontrol-listesi", "url": "https://cyftech.com.tr/teknik-seo-kontrol-listesi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde", "item": "https://cyftech.com.tr/teknik-seo-kontrol-listesi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Teknik SEO nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Teknik SEO, arama motorlarının bir web sitesini sorunsuz tarayabilmesi, anlayabilmesi ve dizine ekleyebilmesi için altyapıda yapılan çalışmalardır. robots.txt, site haritası, canonical etiketleri, yönlendirmeler, HTTPS, mobil uyum, sayfa hızı ve yapılandırılmış veri bu kapsamdadır."}}, {"@type": "Question", "name": "Teknik SEO denetimi ne sıklıkla yapılmalı?", "acceptedAnswer": {"@type": "Answer", "text": "Küçük ve az değişen sitelerde birkaç ayda bir genel kontrol ve Search Console uyarılarının düzenli takibi yeterlidir. Site taşıma, yeniden tasarım, alan adı değişikliği veya büyük bir yazılım güncellemesinden önce ve hemen sonra ise mutlaka ayrıntılı denetim yapılmalıdır."}}, {"@type": "Question", "name": "Sayfam neden Google’da çıkmıyor?", "acceptedAnswer": {"@type": "Answer", "text": "En sık sebepler sayfanın noindex etiketi taşıması, robots.txt ile engellenmesi, hiçbir sayfadan bağlantı almaması, yinelenen içerik nedeniyle başka bir adresin canonical seçilmesi veya henüz taranmamış olmasıdır. Search Console’daki URL Denetimi aracı sebebi büyük ölçüde gösterir."}}, {"@type": "Question", "name": "robots.txt ile noindex arasındaki fark nedir?", "acceptedAnswer": {"@type": "Answer", "text": "robots.txt Google’ın bir sayfayı taramasını engeller ama sayfa başka yerlerden bağlantı alıyorsa içeriği olmadan dizinde görünebilir. noindex ise sayfanın taranmasına izin verir ve arama sonuçlarında gösterilmemesini söyler. Bir sayfayı sonuçlardan çıkarmak için noindex kullanılmalı ve sayfa robots.txt ile engellenmemelidir."}}, {"@type": "Question", "name": "Yapay zekâ aramaları için llms.txt gibi özel bir dosya gerekli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Google’ın resmi belgesine göre AI Overviews ve AI Modu’nda görünmek için yeni bir yapay zekâ dosyası veya özel işaretleme gerekmez. Sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olması yeterlidir. Diğer yapay zekâ hizmetlerinin bu tür dosyaları nasıl kullandığı ise değişkendir."}}]}</script>
<link rel="icon" type="image/png" href="assets/img/logo/ico.png">
<script>try{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}catch(e){}</script>
<link rel="preload" href="/assets/fonts/SpaceGrotesk-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/assets/fonts/JetBrainsMono-latin.woff2" as="font" type="font/woff2" crossorigin>
<style>@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-cyrillic-ext.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-cyrillic.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-latin-ext.woff2) format('woff2');unicode-range:U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'JetBrains Mono';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/JetBrainsMono-latin.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD}@font-face{font-family:'Space Grotesk';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/SpaceGrotesk-latin-ext.woff2) format('woff2');unicode-range:U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'Space Grotesk';font-style:normal;font-weight:400 700;font-display:swap;src:url(/assets/fonts/SpaceGrotesk-latin.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD}</style>
<link rel="stylesheet" href="assets/css/site.css?v=20261101a">
<link rel="stylesheet" href="assets/css/blog.css?v=20261101a">
<link rel="stylesheet" href="assets/css/theme-light.css?v=20261101a">
<script src="assets/js/site.js?v=20261101a" defer></script>
<script src="assets/js/ambient.js?v=20261101a" defer></script>
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/teknik-seo-kontrol-listesi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/teknik-seo-kontrol-listesi">
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
  <a class="logo" href="./" aria-label="cyftech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
      <div class="lang-menu"><a href="teknik-seo-kontrol-listesi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/teknik-seo-kontrol-listesi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/teknik-seo-kontrol-listesi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/teknik-seo-kontrol-listesi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/teknik-seo-kontrol-listesi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/teknik-seo-kontrol-listesi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">Teknik SEO kontrol listesi 2026: sitenizi denetlemek için 30 madde.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/teknik-seo-kontrol-listesi.svg" alt=""></div>
      <p class="bi-lead">En iyi yazılmış hizmet sayfası bile, Google onu tarayamıyor ya da dizine ekleyemiyorsa arama sonuçlarında yoktur. <b>Teknik SEO</b>, içeriğinizle Google arasındaki yolu temizleme işidir ve çoğu sorun birkaç dakikalık bir kontrolle bulunabilir.</p>
      <p>Bu yazıyı bir denetim listesi olarak hazırladık. Maddeleri Google’ın arama sürecindeki sıraya göre grupladık: önce tarama, sonra dizine ekleme, sonra sayfa deneyimi ve zengin sonuçlar. Her grubun sonunda hangi araçla kontrol edeceğinizi de yazdık. Kaynak olarak birincil olarak Google Search Central belgelerini kullandık.</p>
      <p>SEO’nun teknik dışındaki ayaklarını merak ediyorsanız <a href="seo-nedir">SEO nedir</a> yazımız genel çerçeveyi veriyor. Burada doğrudan sitenin altyapısına iniyoruz.</p>
      <h2 id="arac-kutusu" class="bi-h2" data-n="01">Teknik SEO denetimine başlamadan önce: ücretsiz araçlar</h2>
      <p>Teknik SEO denetimi için pahalı yazılımlara gerek yok. Başlangıçta şu ücretsiz araçlar işin büyük kısmını görür:</p>
      <table>
        <thead><tr><th>Araç</th><th>Ne için?</th></tr></thead>
        <tbody>
          <tr><td><b>Google Search Console</b></td><td>Dizine ekleme durumu, URL denetimi, site haritası, Core Web Vitals ve manuel işlem bildirimleri</td></tr>
          <tr><td><b>PageSpeed Insights</b></td><td>Gerçek kullanıcı verisiyle (CrUX) ve laboratuvar testiyle hız ölçümü</td></tr>
          <tr><td><b>Zengin Sonuç Testi</b></td><td>Yapılandırılmış verinin hatasız olup olmadığı ve zengin sonuca uygunluğu</td></tr>
          <tr><td><b>Tarayıcı geliştirici araçları</b></td><td>Sayfanın kaynak kodu, yönlendirmeler, HTTP durum kodları, meta etiketler</td></tr>
          <tr><td><b>Bir site tarayıcısı</b></td><td>Tüm siteyi tarayıp kırık bağlantı, yinelenen başlık ve yönlendirme zinciri bulmak (birçoğunun ücretsiz sürümü küçük siteler için yeterli)</td></tr>
        </tbody>
      </table>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Başlangıç noktası:</b> Search Console’daki “Sayfa dizine ekleme” raporu, sitenizin teknik sağlığının özetidir. Hangi sayfaların neden dizinde olmadığını tek ekranda gösterir.</div></div>
      <h2 id="tarama" class="bi-h2" data-n="02">Tarama: Google sitenize ulaşabiliyor mu?</h2>
      <p>Googlebot’un sayfalarınıza erişebilmesi her şeyin ön koşuludur. Kontrol edin:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. robots.txt doğru mu?</b> alanadiniz.com/robots.txt adresini açın. Yayına alınırken geliştirme ortamından kalan bir “Disallow: /” satırı, tüm siteyi taramaya kapatır. Şaşırtıcı derecede sık görülen bir hatadır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. robots.txt’yi gizleme aracı olarak kullanmıyor musunuz?</b> Google’a göre robots.txt taramayı yönetir, sayfayı arama sonuçlarından gizlemez. Engellenen bir sayfa başka sitelerden bağlantı alıyorsa içeriği olmadan da dizinde görünebilir. Gizlemek için noindex kullanılır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. CSS ve JavaScript dosyaları açık mı?</b> Google sayfayı bir tarayıcı gibi işler; stil ve betik dosyalarını engellerseniz sayfayı doğru göremez.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Sunucu ve CDN Googlebot’u engellemiyor mu?</b> Güvenlik duvarı veya bot koruması ayarları, Googlebot’u yanlışlıkla saldırgan sanabilir. Google’ın yapay zekâ özellikleri belgesi de taramanın yalnızca robots.txt’de değil, CDN ve barındırma altyapısında da açık olmasını öneriyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Önemli sayfalar iç bağlantıyla erişilebilir mi?</b> Hiçbir sayfadan bağlantı almayan “yetim” sayfalar zor keşfedilir. Bağlantılar düz bir a etiketi ve href ile verilmeli; yalnızca JavaScript tıklama olayıyla çalışan bağlantıları Google takip edemeyebilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>6. Sunucu hataları (5xx) yok mu?</b> Sürekli hata veren bir sunucu, Google’ın tarama hızını düşürmesine yol açar. Search Console’daki tarama istatistikleri raporuna bakın.</span></li>
      </ul>
      <h2 id="dizin" class="bi-h2" data-n="03">Dizine ekleme: doğru sayfalar dizinde mi?</h2>
      <p>Taranan her sayfanın dizine girmesi gerekmez; teşekkür sayfaları, filtre kombinasyonları, sepet ve yönetim paneli dizinde olmamalı. Önemli olan, <b>doğru</b> sayfaların dizinde olmasıdır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>7. Önemli sayfalarda yanlışlıkla noindex yok mu?</b> Yayın öncesi “arama motorlarından gizle” seçeneği açık unutulabilir. URL Denetimi aracıyla ana sayfalarınızı tek tek kontrol edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>8. Her içerik tek bir adreste mi?</b> http ve https, www’lu ve www’suz, sonunda eğik çizgi olan ve olmayan adresler aynı sayfayı gösteriyorsa, tümü 301 ile tek bir sürüme yönlendirilmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>9. Canonical etiketleri doğru mu?</b> Her sayfa kendini (ya da tercih edilen asıl sürümü) canonical olarak göstermeli. Google, canonical etiketinin, iç bağlantıların ve site haritasının aynı adresi işaret etmesini ister; çelişen sinyaller Google’ın kendi seçimini yapmasına yol açar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>10. Site haritası temiz mi?</b> Site haritası yalnızca dizine girmesini istediğiniz, 200 kodu dönen, canonical adresleri içermeli. Tek bir dosya en fazla 50.000 URL veya sıkıştırılmamış 50 MB olabilir; büyük sitelerde site haritası dizini kullanılır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>11. lastmod tarihleri gerçek mi?</b> Google, lastmod değerini yalnızca doğruysa kullanır ve önemli bir güncellemeyi yansıtmasını ister. priority ve changefreq alanları ise Google tarafından yok sayılır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>12. Site haritası Search Console’a gönderildi ve robots.txt’de belirtildi mi?</b></span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>13. İnce ve yinelenen sayfalar kontrol altında mı?</b> Neredeyse aynı metinli onlarca sayfa, tarama bütçesini boşa harcar ve kalite sinyalini düşürür. Birleştirin, geliştirin ya da noindex verin.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Site taşıma veya yeniden tasarım sırasında eski adresleri yeni adreslere 301 ile tek tek yönlendirmemek, yıllarca biriken görünürlüğü birkaç haftada kaybettirebilir. Taşımadan önce eski URL listesini mutlaka çıkarın.</div></div>
      <h2 id="url-https" class="bi-h2" data-n="04">Adres yapısı, HTTPS ve hata sayfaları</h2>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>14. Adresler okunaklı mı?</b> “/hizmetler/kurumsal-web-sitesi” gibi anlamlı, kısa ve küçük harfli adresler; “/page.php?id=482&amp;cat=7” gibi parametreli adreslerden hem kullanıcı hem Google için daha anlaşılırdır. Türkçe karakter yerine sade Latin harfleri kullanmak, paylaşımda bozulmayı önler.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>15. Tüm site HTTPS mi?</b> Geçerli bir SSL sertifikası ve karışık içerik (https sayfada http görsel veya betik) uyarısı olmaması gerekir. HTTPS, Google’ın sayfa deneyimi değerlendirmesinin parçasıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>16. Silinen sayfalar doğru kodu dönüyor mu?</b> Kalıcı olarak kaldırılan sayfa 404 veya 410 dönmeli; yerine benzer bir sayfa varsa 301 ile oraya yönlendirilmeli. Var olmayan sayfaların “200 OK” ile boş içerik göstermesi (soft 404) Google’ı yanıltır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>17. Yönlendirme zincirleri yok mu?</b> A’dan B’ye, B’den C’ye giden zincirleri doğrudan A’dan C’ye kısaltın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>18. Kullanıcı dostu bir 404 sayfanız var mı?</b> Arama kutusu ve ana kategorilere bağlantı içeren bir 404 sayfası, kaybolan ziyaretçiyi sitede tutar.</span></li>
      </ul>
      <h2 id="mobil-hiz" class="bi-h2" data-n="05">Mobil öncelikli dizin ve Core Web Vitals</h2>
      <p>Google, mobil öncelikli dizine geçişi 2024’te tamamladı. Yani sitenizi değerlendirirken esas olarak <b>mobil sürümü</b> tarar ve dizine ekler. Masaüstünde olup mobilde gizlenen metinler, Google için de büyük ölçüde yok hükmündedir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>19. Mobil ve masaüstü aynı içeriği sunuyor mu?</b> Başlıklar, metinler, görseller, yapılandırılmış veri ve meta etiketler her iki sürümde de aynı olmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>20. Görünüm alanı (viewport) etiketi var mı, yazılar büyütmeden okunuyor mu, butonlar parmakla rahat tıklanıyor mu?</b></span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>21. Core Web Vitals eşikleri geçiliyor mu?</b> web.dev’e göre iyi bir deneyim için ziyaretlerin yüzde 75’inde LCP 2,5 saniye, INP 200 milisaniye, CLS 0,1 veya altında olmalı. INP, 2024’te FID’in yerini aldı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>22. Görseller optimize mi?</b> WebP veya AVIF biçimi, gösterildiği boyutta dosya, ekran dışındaki görsellerde geç yükleme ve her görselde genişlik-yükseklik değerleri.</span></li>
      </ul>
      <p>Hız konusu başlı başına bir uzmanlık alanı; LCP, INP ve CLS’yi nasıl iyileştireceğinizi <a href="site-hizi-core-web-vitals">site hızı ve Core Web Vitals rehberimizde</a> ayrıntılı anlatıyoruz.</p>
      <h2 id="js-render" class="bi-h2" data-n="06">JavaScript ile çalışan sitelerde teknik SEO</h2>
      <p>React, Vue veya Angular gibi çerçevelerle yapılan ve içeriği tarayıcıda oluşturan siteler, Google tarafından işlenebilir; ancak bu ek bir adım ve ek risk demektir. Google’ın JavaScript SEO belgesi, sayfaların önce tarandığını, ardından işlenmek (render) için sıraya alındığını anlatır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>23. Ana içerik ilk HTML’de var mı?</b> Sunucu tarafında oluşturma (SSR) veya önceden oluşturma (statik HTML), başlık, metin ve bağlantıların JavaScript beklenmeden görünmesini sağlar. Bu yalnızca Google için değil, birçok yapay zekâ tarayıcısı için de önemlidir; bunların bir kısmı JavaScript çalıştırmaz.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>24. Her görünümün kendi adresi var mı?</b> Tek sayfalık uygulamalarda içerik değiştiğinde adres de değişmeli; “#” sonrası parçalarla yönetilen içerik ayrı sayfa olarak dizine eklenmez.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>25. URL Denetimi’nde “taranan sayfa” görünümü içeriği eksiksiz gösteriyor mu?</b></span></li>
      </ul>
      <p>Özel yazılımla geliştirdiğimiz sitelerde bu kararları baştan veriyoruz; <a href="web-cozumleri">web çözümlerimiz</a> sayfasında yaklaşımımızı görebilirsiniz.</p>
      <h2 id="yapilandirilmis-veri" class="bi-h2" data-n="07">Yapılandırılmış veri ve çok dilli siteler</h2>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>26. Uygun schema türleri ekli mi?</b> Organization, LocalBusiness, Product, Article, BreadcrumbList gibi işaretlemeler Google’ın sayfayı anlamasına yardım eder ve zengin sonuçlara uygunluk sağlar. İşaretleme, sayfada görünen içerikle birebir aynı olmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>27. Zengin Sonuç Testi’nde hata yok mu?</b> Ayrıca beklentiyi doğru kurun: Google 2023’ten bu yana SSS zengin sonuçlarını yalnızca bilinen, yetkili kamu ve sağlık sitelerinde gösteriyor. İşaretleme yine de anlam sinyali olarak zarar vermez ama her sitede görsel bir kazanç getirmez.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>28. Çok dilli sitede hreflang doğru mu?</b> Türkçe, İngilizce, Almanca gibi dil sürümleriniz varsa her sayfa, diğer dillerdeki karşılıklarını ve kendisini hreflang ile göstermeli; bağlantılar karşılıklı olmalı. Dil sürümlerini otomatik IP yönlendirmesiyle zorlamak yerine kullanıcıya dil seçtirmek Google’ın önerisidir.</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Teknik SEO sıralamayı tek başına yükseltmez; ama teknik bir hata, en iyi içeriği bile görünmez yapabilir.</blockquote>
      <h2 id="yapay-zeka-tarayici" class="bi-h2" data-n="08">Yapay zekâ özellikleri ve tarayıcılar için teknik ayarlar</h2>
      <p>2026’da teknik SEO listesine yeni bir başlık eklendi: yapay zekâ. Google’ın “Yapay zekâ özellikleri ve web siteniz” belgesi, AI Overviews ve AI Modu için özel bir teknik gereklilik olmadığını, sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olmasının yeterli olduğunu söyler. Yeni bir yapay zekâ dosyası ya da özel işaretleme gerekmez. Yine de bilmeniz gereken kontroller var:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>29. Snippet kontrolleri bilinçli mi kullanılıyor?</b> nosnippet, data-nosnippet ve max-snippet etiketleri, içeriğinizin arama sonuçlarında ve yapay zekâ özetlerinde ne kadar gösterileceğini sınırlar. Yanlışlıkla eklenmiş bir nosnippet, sayfanızın özetlerde kaynak olma şansını ortadan kaldırır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>30. Yapay zekâ tarayıcıları için politikanız net mi?</b> Google-Extended belirteci, içeriğinizin Gemini gibi modellerin eğitiminde ve bazı başka Google sistemlerinde kullanımını sınırlamanızı sağlar; Google Arama’daki görünürlüğü etkilemez. Diğer şirketlerin yapay zekâ tarayıcıları da robots.txt’de kendi adlarıyla ayrı ayrı yönetilebilir. Engellemek ya da izin vermek bir iş kararıdır; önemli olan bunu bilerek yapmaktır.</span></li>
      </ul>
      <p>Search Console’da yapay zekâ özelliklerinden gelen trafik, “Web” arama türündeki performans raporuna dahildir. Teknik sorunları çözdükten sonra ölçümü buradan izleyebilirsiniz.</p>
      <div class="bi-check">
        <div class="eyebrow">// YAYINA ALMADAN ÖNCE HIZLI TEKNİK KONTROL</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>robots.txt’de siteyi kapatan bir “Disallow: /” satırı yok</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Önemli sayfalarda noindex yok, canonical kendini gösteriyor</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>http ve www’suz sürümler tek adrese 301 ile yönleniyor</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Site haritası gönderildi, yalnızca 200 dönen adresleri içeriyor</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Mobil sürüm masaüstüyle aynı içeriği sunuyor</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Core Web Vitals mobilde “iyi” seviyesinde</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Eski adresler yeni adreslere tek tek yönlendirildi</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yapılandırılmış veri Zengin Sonuç Testi’nden hatasız geçiyor</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Teknik SEO nedir?</summary><p>Teknik SEO, arama motorlarının bir web sitesini sorunsuz tarayabilmesi, anlayabilmesi ve dizine ekleyebilmesi için altyapıda yapılan çalışmalardır. robots.txt, site haritası, canonical etiketleri, yönlendirmeler, HTTPS, mobil uyum, sayfa hızı ve yapılandırılmış veri bu kapsamdadır.</p></details><details class="bi-faq-i"><summary>Teknik SEO denetimi ne sıklıkla yapılmalı?</summary><p>Küçük ve az değişen sitelerde birkaç ayda bir genel kontrol ve Search Console uyarılarının düzenli takibi yeterlidir. Site taşıma, yeniden tasarım, alan adı değişikliği veya büyük bir yazılım güncellemesinden önce ve hemen sonra ise mutlaka ayrıntılı denetim yapılmalıdır.</p></details><details class="bi-faq-i"><summary>Sayfam neden Google’da çıkmıyor?</summary><p>En sık sebepler sayfanın noindex etiketi taşıması, robots.txt ile engellenmesi, hiçbir sayfadan bağlantı almaması, yinelenen içerik nedeniyle başka bir adresin canonical seçilmesi veya henüz taranmamış olmasıdır. Search Console’daki URL Denetimi aracı sebebi büyük ölçüde gösterir.</p></details><details class="bi-faq-i"><summary>robots.txt ile noindex arasındaki fark nedir?</summary><p>robots.txt Google’ın bir sayfayı taramasını engeller ama sayfa başka yerlerden bağlantı alıyorsa içeriği olmadan dizinde görünebilir. noindex ise sayfanın taranmasına izin verir ve arama sonuçlarında gösterilmemesini söyler. Bir sayfayı sonuçlardan çıkarmak için noindex kullanılmalı ve sayfa robots.txt ile engellenmemelidir.</p></details><details class="bi-faq-i"><summary>Yapay zekâ aramaları için llms.txt gibi özel bir dosya gerekli mi?</summary><p>Google’ın resmi belgesine göre AI Overviews ve AI Modu’nda görünmek için yeni bir yapay zekâ dosyası veya özel işaretleme gerekmez. Sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olması yeterlidir. Diğer yapay zekâ hizmetlerinin bu tür dosyaları nasıl kullandığı ise değişkendir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Teknik SEO’nun güzel yanı, sorunların çoğunun ölçülebilir ve düzeltilebilir olmasıdır. Bu listeyi yılda birkaç kez ve her büyük değişiklikten önce uygulamak, görünürlüğünüzü sessizce eriten hataları erkenden yakalamanızı sağlar. Teknik zemin sağlamlaştıktan sonra emeğinizi içeriğe ve yerel görünürlüğe ayırabilirsiniz; işletmeniz bölgesel çalışıyorsa sıradaki adım <a href="yerel-seo-google-isletme-profili">yerel SEO ve Google İşletme Profili</a> olmalı.</p>
      <p>CYF Tech olarak geliştirdiğimiz sitelerde bu maddeleri yayından önce tek tek kontrol ediyoruz. Mevcut sitenizin teknik denetimini yaptırmak ya da bir site taşımasını görünürlük kaybetmeden planlamak isterseniz <a href="iletisim">bize ulaşın</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — robots.txt’ye giriş</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Yinelenen URL’leri birleştirme (canonical)</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Site haritası oluşturma ve gönderme</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Mobil öncelikli dizine ekleme</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/javascript/javascript-seo-basics?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — JavaScript SEO temelleri</a></li><li><a href="https://developers.google.com/search/docs/specialty/international/localized-versions?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Yerelleştirilmiş sürümler (hreflang)</a></li><li><a href="https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Yapılandırılmış veriye giriş</a></li><li><a href="https://developers.google.com/search/docs/appearance/ai-features" target="_blank" rel="noopener nofollow">Google Search Central — AI features and your website</a></li><li><a href="https://developers.google.com/search/blog/2023/08/howto-faq-changes" target="_blank" rel="noopener nofollow">Google Search Central Blog — HowTo ve SSS zengin sonuçlarındaki değişiklikler (2023)</a></li><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#arac-kutusu" data-n="01">Araç kutusu</a></li><li><a href="#tarama" data-n="02">Tarama</a></li><li><a href="#dizin" data-n="03">Dizine ekleme</a></li><li><a href="#url-https" data-n="04">Adres yapısı ve HTTPS</a></li><li><a href="#mobil-hiz" data-n="05">Mobil ve hız</a></li><li><a href="#js-render" data-n="06">JavaScript siteler</a></li><li><a href="#yapilandirilmis-veri" data-n="07">Yapılandırılmış veri</a></li><li><a href="#yapay-zeka-tarayici" data-n="08">Yapay zekâ tarayıcıları</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Yerel SEO ve Google İşletme Profili: Haritalarda Öne Çıkma Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="site-hizi-core-web-vitals"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
        <a class="logo" href="./" aria-label="cyftech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
