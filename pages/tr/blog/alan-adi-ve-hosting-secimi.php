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
<title>Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi</title>
<meta name="description" content="Alan adı ve hosting seçimi rehberi: .com.tr ve TRABİS süreci, alan adı mülkiyeti, paylaşımlı hosting, VPS ve bulut karşılaştırması, doğru sunucu kriterleri.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi">
<meta property="og:description" content="Alan adı ve hosting seçimi rehberi: .com.tr ve TRABİS süreci, alan adı mülkiyeti, paylaşımlı hosting, VPS ve bulut karşılaştırması, doğru sunucu kriterleri.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/alan-adi-ve-hosting-secimi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/alan-adi-ve-hosting-secimi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/alan-adi-ve-hosting-secimi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi", "description": "Alan adı ve hosting seçimi rehberi: .com.tr ve TRABİS süreci, alan adı mülkiyeti, paylaşımlı hosting, VPS ve bulut karşılaştırması, doğru sunucu kriterleri.", "image": "https://cyftech.com.tr/assets/img/og/alan-adi-ve-hosting-secimi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/alan-adi-ve-hosting-secimi", "url": "https://cyftech.com.tr/alan-adi-ve-hosting-secimi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi", "item": "https://cyftech.com.tr/alan-adi-ve-hosting-secimi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": ".com.tr alan adı almak için belge gerekiyor mu?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. TRABİS’in 2022’de faaliyete geçmesiyle .com.tr, .net.tr ve .org.tr alan adları belge gerekmeden, ilk başvurana tahsis edilmeye başlandı. .av.tr, .edu.tr veya .gov.tr gibi belirli kurumlara ayrılmış uzantılarda ise hâlâ belge istenir."}}, {"@type": "Question", "name": "Alan adı ve hosting aynı firmadan mı alınmalı?", "acceptedAnswer": {"@type": "Answer", "text": "Zorunlu değildir. Aynı firmadan almak yönetimi kolaylaştırır; ayrı firmalardan almak ise hosting değiştirirken alan adınızı riske atmamanızı sağlar. Önemli olan alan adının sizin adınıza kayıtlı ve panelin sizin kontrolünüzde olmasıdır."}}, {"@type": "Question", "name": "Alan adının süresi dolarsa ne olur?", "acceptedAnswer": {"@type": "Answer", "text": "Süresi dolan alan adı önce askıya alınır ve site ile e-postalar çalışmaz. Belirli bir ek süre içinde yenilenmezse silinir ve yeniden tahsise açılır; bu noktada başka biri tarafından alınabilir. Otomatik yenileme ve güncel iletişim e-postası bu riski ortadan kaldırır."}}, {"@type": "Question", "name": "Kurumsal bir site için hangi hosting yeterli?", "acceptedAnswer": {"@type": "Answer", "text": "Tanıtım amaçlı, aylık birkaç bin ziyaret alan bir kurumsal site için kaliteli bir paylaşımlı veya yönetilen hosting genellikle yeterlidir. E-ticaret, üyelik sistemi veya özel yazılım içeren projelerde VPS ya da bulut sunucu tercih edilmelidir."}}, {"@type": "Question", "name": ".com mu .com.tr mi SEO için daha iyi?", "acceptedAnswer": {"@type": "Answer", "text": "İkisi de SEO için uygundur. .com.tr, Türkiye’yi hedeflediğinizi otomatik olarak gösterir; .com ile aynı sinyali dil, içerik ve Search Console ayarlarıyla verebilirsiniz. Seçimi hedef pazarınıza ve markanızın akılda kalıcılığına göre yapın."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/alan-adi-ve-hosting-secimi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/alan-adi-ve-hosting-secimi">
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
      <div class="lang-menu"><a href="alan-adi-ve-hosting-secimi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/alan-adi-ve-hosting-secimi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/alan-adi-ve-hosting-secimi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/alan-adi-ve-hosting-secimi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/alan-adi-ve-hosting-secimi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/alan-adi-ve-hosting-secimi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>WEB TASARIM</span></div>
    <h1 class="h1" style="max-width:900px">Alan adı ve hosting seçimi: .com.tr, TRABİS ve sunucu rehberi.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Web Tasarım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>9 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/alan-adi-ve-hosting-secimi.svg" alt=""></div>
      <p class="bi-lead">Bir web sitesinin adresi ve evi, çoğu firmanın en az düşündüğü ama sorun çıktığında en çok canını yakan iki kalemdir. Yanlış <b>alan adı ve hosting seçimi</b>; yavaş açılan sayfalara, e-postaların gitmemesine, hatta yıllardır kullandığınız adresin başkasının eline geçmesine yol açabilir.</p>
      <p>Bu rehberde alan adı ile hosting arasındaki farkı, iyi bir alan adının nasıl seçildiğini, .com.tr alan adlarının TRABİS üzerinden nasıl alındığını, alan adınızı neden kendi adınıza kaydettirmeniz gerektiğini ve paylaşımlı hosting, VPS, bulut gibi seçenekler arasında nasıl karar vereceğinizi anlatıyoruz.</p>
      <p>Kurumsal web sitesi projelerine başlarken müşterilerimize ilk sorduğumuz sorulardan biri “alan adınız kimin adına kayıtlı?” sorusudur. Cevabın ne kadar sık “bilmiyoruz” olduğunu görünce bu yazının gerekli olduğuna karar verdik.</p>
      <h2 id="fark" class="bi-h2" data-n="01">Alan adı ve hosting arasındaki fark</h2>
      <p>En basit benzetmeyle alan adı sitenizin <b>adresi</b>, hosting ise sitenizin dosyalarının durduğu <b>bina</b>dır. Ziyaretçi tarayıcıya firmaniz.com.tr yazdığında DNS kayıtları bu adresin hangi sunucuya yönlendiğini söyler ve site o sunucudan yüklenir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Alan adı (domain):</b> Yıllık olarak kiralanır, bir kayıt kuruluşu (registrar) üzerinden alınır. Sitenin yanı sıra kurumsal e-posta adreslerinizin de temelidir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hosting (barındırma):</b> Sitenin dosyalarının, veritabanının ve çoğu zaman e-postaların çalıştığı sunucu hizmetidir. Aylık veya yıllık ödenir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>DNS:</b> Alan adını hosting’e, e-posta sunucusuna ve diğer hizmetlere bağlayan kayıtlar bütünüdür. Alan adını ve hosting’i farklı firmalardan almak tamamen mümkündür.</span></li>
      </ul>
      <p>Alan adı ile hosting’in aynı firmada olması kolaylık sağlar, ama zorunlu değildir. Hatta bazı durumlarda ayrı tutmak, hosting firmasını değiştirmek istediğinizde işinizi kolaylaştırır.</p>
      <h2 id="secim" class="bi-h2" data-n="02">İyi bir alan adı nasıl seçilir?</h2>
      <p>Alan adı yıllarca kartvizitinizde, araçlarınızda, faturalarınızda ve e-posta imzanızda yer alacak. Bu yüzden şu ilkeleri göz önünde bulundurun:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kısa ve söylenebilir olsun:</b> Telefonda harf harf kodlamak zorunda kalmadığınız bir ad seçin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Türkçe karakter kullanmayın:</b> ç, ğ, ı, ö, ş, ü içeren alan adları teknik olarak mümkün olsa da e-posta ve paylaşımda sorun çıkarır. “ı” ve “i” karışıklığına özellikle dikkat edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Tire ve rakamdan kaçının:</b> Sözlü aktarımda kaybolur, akılda kalmaz.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Marka adınızı esas alın:</b> Anahtar kelime doldurulmuş alan adları (ör. en-ucuz-mobilya-istanbul) artık SEO avantajı sağlamaz, güven de vermez.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yakın varyasyonları da düşünün:</b> Hem .com.tr hem .com uzantısını almak, markanızı taklitlere ve yanlış yazımlara karşı korur.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Marka kontrolü:</b> Alan adını almadan önce Türk Patent ve Marka Kurumu’nun sorgulama ekranından benzer bir tescilli marka olup olmadığına bakın. Başkasının markasını içeren bir alan adı, ileride uyuşmazlık konusu olabilir.</div></div>
      <h2 id="comtr" class="bi-h2" data-n="03">.com mu .com.tr mi? TRABİS ile .tr alan adı alma süreci</h2>
      <p>“.tr” uzantılı alan adlarının yönetimi, Bilgi Teknolojileri ve İletişim Kurumu (BTK) bünyesindeki <b>TRABİS</b> (.tr Ağ Bilgi Sistemi) ile yürütülür. 14 Eylül 2022’de faaliyete geçen TRABİS ile birlikte en önemli değişiklik şu oldu: <b>.com.tr, .net.tr ve .org.tr</b> gibi uzantılar artık belge gerekmeden, “ilk gelen alır” esasıyla tahsis ediliyor. Eskiden marka tescil belgesi ya da ticaret sicili istenen .com.tr, bugün .com kadar kolay alınabiliyor.</p>
      <p>Başvurular doğrudan TRABİS’e değil, BTK tarafından yetkilendirilmiş <b>kayıt kuruluşları</b> üzerinden yapılır. Güncel kayıt kuruluşu listesi trabis.gov.tr adresinde yayımlanır. .av.tr, .edu.tr, .gov.tr, .bel.tr gibi belirli kurum ve meslek gruplarına ayrılmış uzantılar için ise hâlâ belge istenir. Kamuya yansıyan verilere göre 2025 sonu itibarıyla aktif .tr alan adı sayısı 1,3 milyon civarına ulaştı.</p>
      <table>
        <thead><tr><th>Uzantı</th><th>Kimler için uygun?</th><th>Not</th></tr></thead>
        <tbody>
          <tr><td>.com.tr</td><td>Türkiye pazarına hitap eden şirketler</td><td>Yerel güven algısı güçlü; belgesiz alınabiliyor</td></tr>
          <tr><td>.com</td><td>Uluslararası satış veya yurt dışı hedefi olan markalar</td><td>Kısa ve kolay adların çoğu çoktan alınmış</td></tr>
          <tr><td>.tr</td><td>Kısa, akılda kalıcı adres isteyenler</td><td>Doğrudan .tr tahsisi de mümkün; kurallar için kayıt kuruluşuna danışın</td></tr>
          <tr><td>.net, .org, yeni uzantılar</td><td>Özel amaçlı projeler, kampanyalar</td><td>Ana kurumsal adres olarak genellikle ikinci tercih</td></tr>
        </tbody>
      </table>
      <p>Arama motorları açısından .com.tr, Türkiye’yi hedeflediğinizi doğal olarak gösterir. .com kullanıyorsanız bu sinyali dil, içerik ve Search Console ayarlarıyla verirsiniz. Kısacası iki seçenek de SEO için sorun değildir; asıl soru markanızın hangi pazara konuştuğudur.</p>
      <h2 id="mulkiyet" class="bi-h2" data-n="04">Alan adı mülkiyeti ve yenileme: en sık yapılan hata</h2>
      <p>Alan adının hukuki sahibi, kayıt sırasında “kayıt sahibi” olarak yazılan kişi veya şirkettir. Ajansın ya da çalışan bir personelin bireysel hesabıyla alınan alan adları, ilişki bozulduğunda veya o kişi işten ayrıldığında ciddi sorun yaratır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kayıt sahibi şirketiniz olsun:</b> Ajansınız işlemleri yürütse bile alan adı sizin unvanınıza kayıtlı olmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Panel erişimi sizde de bulunsun:</b> Kayıt kuruluşundaki hesabın şifresi ve iletişim e-postası şirketin kalıcı bir adresine bağlı olmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Otomatik yenilemeyi açın ve süreyi uzatın:</b> Alan adını birkaç yıllığına yenilemek, unutma riskini azaltır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hatırlatma e-postalarını kaçırmayın:</b> Mevzuata göre kayıt kuruluşu, süre bitmeden önce alan adı sahibini uyarmakla yükümlüdür; ama bu uyarı artık kullanılmayan bir e-posta adresine gidiyorsa işe yaramaz.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Süresi dolan alan adı önce askıya alınır, belirli bir bekleme süresinin sonunda yeniden tahsise açılır. Bu süreçte siteniz ve e-postalarınız çalışmaz. Bilinen bir marka adresinin boşa düşmesi, başkalarının onu kapması için fırsat yaratır.</div></div>
      <h2 id="hosting" class="bi-h2" data-n="05">Hosting türleri: paylaşımlı, VPS, bulut ve yönetilen sunucu</h2>
      <p>Hosting fiyatları birkaç yüz liradan binlerce liraya kadar uzanır; fark genellikle ayrılan kaynakta, performansta ve sorumluluğun kimde olduğunda yatar.</p>
      <table>
        <thead><tr><th>Tür</th><th>Uygun olduğu durum</th><th>Artıları</th><th>Sınırları</th></tr></thead>
        <tbody>
          <tr><td>Paylaşımlı hosting</td><td>Az trafikli tanıtım siteleri</td><td>Ucuz, kurulumu kolay, panel hazır</td><td>Kaynaklar diğer sitelerle paylaşılır; komşu site yavaşlarsa siz de etkilenirsiniz</td></tr>
          <tr><td>VPS / sanal sunucu</td><td>Orta trafikli siteler, e-ticaret, özel yazılımlar</td><td>Ayrılmış kaynak, tam kontrol</td><td>Güncelleme ve güvenlik yönetimi teknik bilgi ister</td></tr>
          <tr><td>Bulut sunucu</td><td>Trafiği dalgalı, büyüyen projeler</td><td>Kaynağı ihtiyaca göre artırıp azaltma, yüksek erişilebilirlik</td><td>Maliyet doğru planlanmazsa artabilir</td></tr>
          <tr><td>Yönetilen hosting</td><td>Teknik ekibi olmayan işletmeler</td><td>Bakım, yedek ve güvenlik sağlayıcıda</td><td>Aylık ücret daha yüksek</td></tr>
        </tbody>
      </table>
      <p>Tanıtım amaçlı bir kurumsal site için kaliteli bir paylaşımlı veya yönetilen hosting çoğu zaman yeterlidir. Kullanıcı girişi, ödeme ya da yoğun veritabanı işlemi olan sistemlerde ise VPS veya bulut sunucu gerekir. Örneğin <a href="projelerimiz">KATSİS</a> gibi bir site yönetim yazılımında yük, sakinlerin aidat ödediği ay başı günlerinde belirgin şekilde artar; böyle sistemlerde kaynağı ihtiyaca göre büyütebilen bir altyapı belirleyici olur.</p>
      <h2 id="kriter" class="bi-h2" data-n="06">Hosting seçerken bakmanız gereken 8 kriter</h2>
      <p>“Sınırsız disk, sınırsız trafik” gibi pazarlama ifadeleri yerine şu somut kriterlere bakın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Performans:</b> SSD/NVMe disk, yeterli işlemci ve bellek, güncel PHP veya Node.js sürümleri. Sunucu yanıt süresi sitenizin hızını doğrudan belirler (bkz. <a href="site-hizi-core-web-vitals">site hızı ve Core Web Vitals</a>).</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Sunucu konumu:</b> Ziyaretçileriniz Türkiye’deyse Türkiye’ye yakın bir veri merkezi ya da CDN gecikmeyi azaltır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Kişisel veriler:</b> Sunucu yurt dışındaysa bu, KVKK açısından kişisel verilerin yurt dışına aktarılması anlamına gelebilir; aydınlatma metninizde ve sözleşmelerinizde bu durumu ele alın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Otomatik yedekleme:</b> Günlük yedek alınıyor mu, kaç gün saklanıyor, geri yükleme ücretli mi?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Ücretsiz SSL:</b> Let’s Encrypt gibi otomatik yenilenen sertifika desteği bugün temel bir beklentidir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>6. Çalışma süresi taahhüdü:</b> Yüzde 99,9 gibi bir erişilebilirlik taahhüdü ve kesinti halinde ne olacağı sözleşmede yazmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>7. Destek:</b> Türkçe, 7/24 ve gerçekten teknik bilgiye sahip bir destek ekibi; sorun gece çıktığında fark yaratır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>8. Taşınabilirlik:</b> Dosyalarınızı ve veritabanınızı istediğiniz zaman tam olarak indirebilmeli, başka sağlayıcıya geçebilmelisiniz.</span></li>
      </ul>
      <p>Güvenlik tarafında sunucunun güncel tutulması, güvenlik duvarı ve kötü amaçlı yazılım taraması da önemlidir. Bu konuları <a href="web-sitesi-guvenligi">web sitesi güvenliği ve SSL</a> yazımızda ayrıntılı anlattık.</p>
      <h2 id="tasima" class="bi-h2" data-n="07">Hosting değiştirmek veya siteyi taşımak: kesintisiz geçiş</h2>
      <p>Mevcut hosting’iniz yavaşsa, destek alamıyorsanız ya da siteniz büyüdüyse taşınmak gerekebilir. Doğru planlanan bir taşıma, ziyaretçilerin fark etmeyeceği kadar sorunsuz geçer:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım —</b> Mevcut sitenin dosyalarının ve veritabanının tam yedeğini alın; e-posta hesaplarınızı da listeleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım —</b> Yeni sunucuda siteyi kurun ve DNS’i değiştirmeden önce geçici bir adres üzerinden test edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım —</b> Taşımadan bir gün önce DNS kayıtlarının TTL süresini kısaltın; böylece değişiklik daha hızlı yayılır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım —</b> DNS’i yeni sunucuya yönlendirin, SSL sertifikasının oluştuğunu ve formların, e-postaların çalıştığını kontrol edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım —</b> Eski hosting’i birkaç gün daha açık tutun; tüm trafiğin yeni sunucuya geçtiğinden emin olmadan kapatmayın.</span></li>
      </ul>
      <p>Adres yapısını da değiştiriyorsanız eski URL’lerden yenilerine kalıcı (301) yönlendirme yapmayı unutmayın. Aksi halde yıllardır kazanılmış arama sıralamaları kısa sürede kaybolabilir.</p>
      <h2 id="eposta" class="bi-h2" data-n="08">Kurumsal e-posta ve DNS ayarlarını unutmayın</h2>
      <p>Alan adınızla birlikte gelen en değerli hizmetlerden biri ad@firmaniz.com.tr biçimindeki kurumsal e-postadır. E-postayı hosting paketinin içinden mi, yoksa ayrı bir kurumsal e-posta hizmetinden mi alacağınıza kullanıcı sayınıza ve depolama ihtiyacınıza göre karar verin.</p>
      <p>Hangi yolu seçerseniz seçin, e-postalarınızın spam klasörüne düşmemesi için DNS’te <b>SPF, DKIM ve DMARC</b> kayıtlarının doğru tanımlanması gerekir. Büyük e-posta sağlayıcıları, toplu gönderim yapan alan adlarından bu kimlik doğrulama kayıtlarını artık zorunlu olarak istiyor. Bu kayıtlar eksikse en önemli teklif e-postanız bile müşterinin gelen kutusuna ulaşmayabilir.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Alan adı sizin dijital tapunuzdur; tapuyu başkasının adına bırakmazsınız.</blockquote>
      <div class="bi-check">
        <div class="eyebrow">// ALAN ADI VE HOSTING KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Alan adı şirketinizin unvanına kayıtlı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kayıt kuruluşu paneline şirketiniz erişebiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Otomatik yenileme açık, iletişim e-postası güncel mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Hosting’de günlük yedek ve ücretsiz SSL var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sunucu konumu ve KVKK durumu değerlendirildi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>SPF, DKIM ve DMARC kayıtları tanımlı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Dosya ve veritabanını tam olarak indirebiliyor musunuz?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>.com.tr alan adı almak için belge gerekiyor mu?</summary><p>Hayır. TRABİS’in 2022’de faaliyete geçmesiyle .com.tr, .net.tr ve .org.tr alan adları belge gerekmeden, ilk başvurana tahsis edilmeye başlandı. .av.tr, .edu.tr veya .gov.tr gibi belirli kurumlara ayrılmış uzantılarda ise hâlâ belge istenir.</p></details><details class="bi-faq-i"><summary>Alan adı ve hosting aynı firmadan mı alınmalı?</summary><p>Zorunlu değildir. Aynı firmadan almak yönetimi kolaylaştırır; ayrı firmalardan almak ise hosting değiştirirken alan adınızı riske atmamanızı sağlar. Önemli olan alan adının sizin adınıza kayıtlı ve panelin sizin kontrolünüzde olmasıdır.</p></details><details class="bi-faq-i"><summary>Alan adının süresi dolarsa ne olur?</summary><p>Süresi dolan alan adı önce askıya alınır ve site ile e-postalar çalışmaz. Belirli bir ek süre içinde yenilenmezse silinir ve yeniden tahsise açılır; bu noktada başka biri tarafından alınabilir. Otomatik yenileme ve güncel iletişim e-postası bu riski ortadan kaldırır.</p></details><details class="bi-faq-i"><summary>Kurumsal bir site için hangi hosting yeterli?</summary><p>Tanıtım amaçlı, aylık birkaç bin ziyaret alan bir kurumsal site için kaliteli bir paylaşımlı veya yönetilen hosting genellikle yeterlidir. E-ticaret, üyelik sistemi veya özel yazılım içeren projelerde VPS ya da bulut sunucu tercih edilmelidir.</p></details><details class="bi-faq-i"><summary>.com mu .com.tr mi SEO için daha iyi?</summary><p>İkisi de SEO için uygundur. .com.tr, Türkiye’yi hedeflediğinizi otomatik olarak gösterir; .com ile aynı sinyali dil, içerik ve Search Console ayarlarıyla verebilirsiniz. Seçimi hedef pazarınıza ve markanızın akılda kalıcılığına göre yapın.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Doğru alan adı ve hosting seçimi; kısa ve markanızı taşıyan bir adres, şirketinize kayıtlı bir mülkiyet, otomatik yenileme ve ihtiyacınıza uygun, yedekli, hızlı bir sunucu demektir. Bu kararlar bir kez doğru verildiğinde yıllarca düşünmeniz gerekmez.</p>
      <p>Web sitesi projelerimizde alan adı ve barındırma kurulumunu, DNS ve e-posta ayarlarını da üstleniyoruz; tüm hakların sizde kalacağı şekilde. Sıfırdan bir site düşünüyorsanız önce <a href="kurumsal-web-sitesi-rehberi">kurumsal web sitesi rehberimize</a> göz atabilir, mevcut altyapınızı birlikte gözden geçirmek için <a href="iletisim">bizimle iletişime geçebilirsiniz</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://www.trabis.gov.tr/" target="_blank" rel="noopener nofollow">TRABİS — .tr Ağ Bilgi Sistemi</a></li><li><a href="https://btk.gov.tr/en/news/bakan-yardimcisi-sayan-trabis-in-hayata-gecirilmesinin-ulkemiz-adina-onemli-bir-adim" target="_blank" rel="noopener nofollow">BTK — TRABİS’in hayata geçirilmesi haberi</a></li><li><a href="https://www.trthaber.com/haber/bilim-teknoloji/internette-tr-alan-adi-sayisi-13-milyona-ulasti-944042.html" target="_blank" rel="noopener nofollow">TRT Haber — İnternette .tr alan adı sayısı 1,3 milyona ulaştı</a></li><li><a href="https://www.lexpera.com.tr/mevzuat/yonetmelikler/internet-alan-adlari-yonetmeligi" target="_blank" rel="noopener nofollow">İnternet Alan Adları Yönetmeliği (Lexpera)</a></li><li><a href="https://www.kvkk.gov.tr/" target="_blank" rel="noopener nofollow">KVKK — Kişisel Verileri Koruma Kurumu</a></li><li><a href="https://developers.google.com/search/docs/specialty/international/managing-multi-regional-sites" target="_blank" rel="noopener nofollow">Google Search Central — Managing multi-regional and multilingual sites</a></li><li><a href="https://support.google.com/a/answer/81126" target="_blank" rel="noopener nofollow">Google — Email sender guidelines</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#fark" data-n="01">Alan adı mı hosting mi?</a></li><li><a href="#secim" data-n="02">İyi alan adı seçmek</a></li><li><a href="#comtr" data-n="03">.com.tr ve TRABİS</a></li><li><a href="#mulkiyet" data-n="04">Mülkiyet ve yenileme</a></li><li><a href="#hosting" data-n="05">Hosting türleri</a></li><li><a href="#kriter" data-n="06">Hosting kriterleri</a></li><li><a href="#tasima" data-n="07">Hosting değiştirmek</a></li><li><a href="#eposta" data-n="08">Kurumsal e-posta</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="donusum-odakli-web-tasarim"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 Ekim 2026</span><b>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
