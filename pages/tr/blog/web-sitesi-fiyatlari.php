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
<title>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</title>
<meta name="description" content="Web sitesi fiyatları 2026’da neye göre değişiyor? Site türüne göre yaklaşık fiyat aralıkları, maliyeti belirleyen 9 faktör, yıllık giderler ve teklif karşılaştırma.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör">
<meta property="og:description" content="Web sitesi fiyatları 2026’da neye göre değişiyor? Site türüne göre yaklaşık fiyat aralıkları, maliyeti belirleyen 9 faktör, yıllık giderler ve teklif karşılaştırma.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/web-sitesi-fiyatlari">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/web-sitesi-fiyatlari.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/web-sitesi-fiyatlari">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör", "description": "Web sitesi fiyatları 2026’da neye göre değişiyor? Site türüne göre yaklaşık fiyat aralıkları, maliyeti belirleyen 9 faktör, yıllık giderler ve teklif karşılaştırma.", "image": "https://cyftech.com.tr/assets/img/og/web-sitesi-fiyatlari.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/web-sitesi-fiyatlari", "url": "https://cyftech.com.tr/web-sitesi-fiyatlari", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör", "item": "https://cyftech.com.tr/web-sitesi-fiyatlari"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Web sitesi yaptırmak ne kadar tutar?", "acceptedAnswer": {"@type": "Answer", "text": "Kapsama göre değişir. 2026 itibarıyla yaklaşık olarak tek sayfalık bir tanıtım sitesi 10 ila 30 bin TL, hazır temalı kurumsal bir site 15 ila 50 bin TL, özel tasarımlı kurumsal bir site 50 bin TL ve üzeri bantta fiyatlanıyor. E-ticaret ve özel yazılım projeleri ise modül ve entegrasyonlara göre çok daha geniş bir aralıkta değişir."}}, {"@type": "Question", "name": "Web sitesinin yıllık masrafı ne kadar?", "acceptedAnswer": {"@type": "Answer", "text": "Kurulumdan sonra her yıl alan adı yenileme, barındırma, varsa premium tema ve eklenti lisansları, kurumsal e-posta ve bakım-destek bedeli ödenir. Küçük bir kurumsal site için bu kalemler kurulum bedelinin küçük bir bölümüdür; e-ticaret ve yoğun trafikli sitelerde ise belirgin şekilde artar."}}, {"@type": "Question", "name": "Ucuz web sitesi yaptırmak mantıklı mı?", "acceptedAnswer": {"@type": "Answer", "text": "Amaç yalnızca kısa süreli bir dijital kartvizitse olabilir. Ancak çok düşük teklifler genellikle lisanssız tema, zayıf sunucu, eksik SEO altyapısı ya da yayın sonrası desteksizlik anlamına gelir ve site kısa sürede yeniden yaptırılmak zorunda kalınabilir."}}, {"@type": "Question", "name": "Web sitesi kaç günde hazır olur?", "acceptedAnswer": {"@type": "Answer", "text": "İçerik hazırsa tek sayfalık bir site birkaç günde, kurumsal bir site genellikle 3 ila 6 haftada, e-ticaret ve özel yazılım projeleri ise kapsamına göre birkaç ayda tamamlanır. En sık gecikme nedeni metin ve görsellerin geç gelmesidir."}}, {"@type": "Question", "name": "Hazır site kurucular mı, ajans mı daha uygun?", "acceptedAnswer": {"@type": "Answer", "text": "Basit bir tanıtım sayfası için hazır site kurucular hızlı ve uygun maliyetli bir başlangıç olabilir. Markaya özel tasarım, SEO performansı, entegrasyon ve büyüme planınız varsa profesyonel bir ekip uzun vadede daha ekonomik sonuç verir."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/web-sitesi-fiyatlari">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/web-sitesi-fiyatlari">
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
      <div class="lang-menu"><a href="web-sitesi-fiyatlari" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/web-sitesi-fiyatlari" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/web-sitesi-fiyatlari" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/web-sitesi-fiyatlari" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/web-sitesi-fiyatlari" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/web-sitesi-fiyatlari" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">Web sitesi fiyatları 2026: maliyeti belirleyen 9 faktör.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Web Tasarım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/web-sitesi-fiyatlari.svg" alt=""></div>
      <p class="bi-lead">“Bir web sitesi ne kadar?” sorusunun tek cevabı yok: aynı brifle istenen iki teklif arasında <b>on kata varan fark</b> görmek bugün sıradan. Asıl mesele en ucuz ya da en pahalı teklifi seçmek değil, neye para ödediğinizi bilmek.</p>
      <p>Bu yazıda web sitesi fiyatlarını oluşturan kalemleri tek tek açıyoruz: site türüne göre 2026 itibarıyla piyasadaki yaklaşık fiyat bantları, fiyatı yukarı ya da aşağı çeken 9 faktör, ilk yılın ardından her yıl ödemeye devam edeceğiniz giderler ve tekliflerde çoğu zaman yazmayan gizli maliyetler.</p>
      <p>Amacımız size bir “fiyat listesi” vermek değil; ajanslarla, serbest çalışanlarla ya da bizimle konuşurken doğru soruları sorabilmeniz ve teklifleri elma ile elmayı kıyaslar gibi değerlendirebilmeniz.</p>
      <h2 id="neden-farkli" class="bi-h2" data-n="01">Web sitesi fiyatları neden bu kadar farklı?</h2>
      <p>Web sitesi bir raf ürünü değil, bir hizmet paketidir. “Kurumsal site” dendiğinde biri hazır bir temaya logonuzu ve metinlerinizi yerleştirmeyi anlar, diğeri markanıza özel arayüz tasarımı, içerik yazımı, SEO altyapısı, hız optimizasyonu ve bir yıllık bakımı. İkisi de “site” teslim eder ama ortaya çıkan iş, harcanan emek ve uzun vadeli sonuç tamamen farklıdır.</p>
      <p>Fiyat farkının üç ana kaynağı vardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kapsam:</b> Sayfa sayısı, dil sayısı, özel modüller ve entegrasyonlar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yöntem:</b> Hazır tema, hazır altyapı üzerine özelleştirme ya da sıfırdan özel yazılım.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ekip ve süreç:</b> Tek kişinin hafta sonu işi ile tasarımcı, yazılımcı, içerik ve test aşamaları olan bir ekip süreci aynı maliyette olmaz.</span></li>
      </ul>
      <p>Ayrıca 2025’ten 2026’ya geçerken döviz bazlı yazılım lisansları, sunucu ve personel maliyetleri fiyatlara doğrudan yansıdı. Bu yüzden internette gördüğünüz eski fiyat listeleri çoğu zaman güncel değildir.</p>
      <h2 id="site-turleri" class="bi-h2" data-n="02">Site türüne göre yaklaşık web sitesi fiyatları (2026)</h2>
      <p>Aşağıdaki aralıklar, 2026 itibarıyla Türkiye’de yayımlanan fiyat rehberleri ve piyasadaki tekliflerden derlenmiş <b>yaklaşık</b> bantlardır. Kesin fiyat değil, bütçe planlaması için bir başlangıç noktasıdır; KDV, alan adı ve barındırma genellikle ayrıca hesaplanır.</p>
      <table>
        <thead><tr><th>Site türü</th><th>Tipik kapsam</th><th>Yaklaşık aralık (2026)</th></tr></thead>
        <tbody>
          <tr><td>Tek sayfa / tanıtım sayfası</td><td>Tek uzun sayfa, iletişim formu, temel SEO</td><td>10.000 – 30.000 TL</td></tr>
          <tr><td>Kurumsal site (hazır tema)</td><td>5–10 sayfa, tema özelleştirme, yönetim paneli</td><td>15.000 – 50.000 TL</td></tr>
          <tr><td>Kurumsal site (özel tasarım)</td><td>Markaya özel arayüz, çok dil, blog, SEO altyapısı</td><td>50.000 – 150.000 TL ve üzeri</td></tr>
          <tr><td>E-ticaret sitesi</td><td>Ürün kataloğu, sanal POS, kargo, fatura entegrasyonu</td><td>Hazır paketlerde aylık abonelik; özel projelerde 100.000 TL’den başlar</td></tr>
          <tr><td>Özel web yazılımı / portal</td><td>Üyelik, rol bazlı paneller, iş süreçleri, API</td><td>Kapsama göre 200.000 TL’den milyonlara</td></tr>
        </tbody>
      </table>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Ortalamanın çok altındaki teklifler genellikle bir yerden kısar: lisanssız tema, paylaşımlı ucuz sunucu, alan adının ajans adına kaydı ya da yayından sonra sıfır destek. Teklifin neden düşük olduğunu sormaktan çekinmeyin.</div></div>
      <p>E-ticaret tarafında ETBİS kaydı, mesafeli satış sözleşmesi ve sanal POS gibi ek başlıklar devreye girdiği için bu konuyu ayrıca <a href="e-ticaret-sitesi-kurma-rehberi">e-ticaret sitesi kurma rehberimizde</a> ele aldık.</p>
      <h2 id="faktorler" class="bi-h2" data-n="03">Web sitesi maliyetini belirleyen 9 faktör</h2>
      <p>Bir teklifi incelerken aşağıdaki dokuz kalemin her birinin karşılığını görmek istersiniz. Fiyatı asıl belirleyen bunlardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Tasarım yaklaşımı —</b> Hazır tema mı, markanıza özel arayüz mü? Özel tasarım, wireframe ve revizyon turlarıyla birlikte projenin en büyük kalemlerinden biridir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Altyapı —</b> WordPress gibi hazır bir içerik yönetim sistemi mi, yoksa özel yazılım mı? Bu kararın artı ve eksilerini <a href="wordpress-mi-ozel-yazilim-mi">WordPress mi özel yazılım mı</a> yazımızda karşılaştırdık.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Sayfa ve içerik hacmi —</b> 5 sayfalık bir tanıtım sitesiyle 50 hizmet sayfası, blog ve referans arşivi olan bir site arasında ciddi emek farkı vardır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Dil sayısı —</b> Her yeni dil; çeviri, sağdan sola (Arapça) yerleşim, dil bazlı SEO etiketleri ve test demektir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Özel modüller —</b> Randevu sistemi, teklif hesaplayıcı, bayi girişi, üye paneli gibi özellikler ayrı ayrı fiyatlanır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>6. Entegrasyonlar —</b> ERP, muhasebe, CRM, e-Fatura, kargo, SMS ya da ödeme sistemleriyle bağlantı, çoğu zaman tasarımdan daha fazla zaman alır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>7. SEO ve performans altyapısı —</b> Temiz adres yapısı, şema işaretlemeleri, site haritası, görsel optimizasyonu ve Core Web Vitals uyumu.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>8. İçerik üretimi —</b> Metin yazarlığı, profesyonel fotoğraf, video ve ikon setleri genellikle fiyata dahil değildir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>9. Bakım ve destek —</b> Güncellemeler, yedekleme, güvenlik takibi ve küçük değişiklikler için aylık ya da yıllık destek paketi.</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Fiyatı değil kapsamı karşılaştırın; kapsamı aynı olmayan iki teklif aslında iki farklı ürünün fiyatıdır.</blockquote>
      <h2 id="ornek-senaryolar" class="bi-h2" data-n="04">Üç örnek senaryo: hangi işletme ne kadar bütçe ayırmalı?</h2>
      <p>Rakamlar soyut kalmasın diye, sık karşılaştığımız üç işletme profilini ve bu profillerde bütçenin nereye gittiğini özetleyelim. Tutarlar yine yaklaşık ve 2026 itibarıyladır.</p>
      <h3>Yeni açılan bir danışmanlık ofisi</h3>
      <p>Hedef: güven vermek ve telefon ya da WhatsApp ile ulaşılmak. Beş sayfalık, hazır tema üzerine özelleştirilmiş, tek dilli bir site çoğu zaman yeterlidir. Bütçenin büyük kısmı tasarım uyarlamasına ve metinlere gider; özel modül gerekmez. Bu profil genellikle tablonun alt bandında kalır.</p>
      <h3>İhracat yapan bir üretici</h3>
      <p>Hedef: yurt dışından teklif talebi toplamak. Üç ya da dört dil, ürün kataloğu, teknik doküman indirme alanı ve her dil için ayrı SEO çalışması gerekir. Burada maliyeti tasarımdan çok dil sayısı, çeviri kalitesi ve içerik hacmi belirler; özel tasarım bandına çıkmak olağandır.</p>
      <h3>Bayi ağı olan bir distribütör</h3>
      <p>Hedef: bayilerin sipariş ve stok bilgisini siteden görmesi. Bu artık klasik bir web sitesi değil, ERP ile konuşan bir bayi portalıdır. Bütçeyi entegrasyon, kullanıcı rolleri ve güvenlik belirler; özel web yazılımı kategorisine girer ve aşamalı planlanması gerekir.</p>
      <p>Gördüğünüz gibi aynı “web sitesi” kelimesi üç farklı ürünü anlatabiliyor. Bu yüzden teklif istemeden önce hangi profile yakın olduğunuzu belirlemek, gelen fiyatları yorumlamanın en kısa yoludur.</p>
      <h2 id="yillik-giderler" class="bi-h2" data-n="05">Web sitesinin yıllık giderleri: ilk yıldan sonra ne ödersiniz?</h2>
      <p>Web sitesi bir kerelik bir harcama gibi görünse de her yıl tekrarlayan kalemleri vardır. Bütçeyi planlarken yalnızca kurulum bedeline değil, üç yıllık toplam maliyete bakmak daha sağlıklıdır.</p>
      <table>
        <thead><tr><th>Kalem</th><th>Ne işe yarar?</th><th>Not</th></tr></thead>
        <tbody>
          <tr><td>Alan adı (.com, .com.tr)</td><td>Sitenizin adresi</td><td>Her yıl yenilenir; .tr uzantıları TRABİS üzerinden kayıt edilir</td></tr>
          <tr><td>Barındırma (hosting)</td><td>Sitenin çalıştığı sunucu</td><td>Paylaşımlı, VPS ya da bulut; trafik ve yazılıma göre değişir</td></tr>
          <tr><td>SSL sertifikası</td><td>HTTPS ve adres çubuğundaki kilit</td><td>Çoğu barındırmada ücretsiz; kurumsal sertifikalar ücretlidir</td></tr>
          <tr><td>Lisanslar</td><td>Premium tema, eklenti, font, e-ticaret yazılımı</td><td>Birçoğu yıllık yenilenir ve döviz bazlıdır</td></tr>
          <tr><td>Bakım ve destek</td><td>Güncelleme, yedek, güvenlik, küçük değişiklikler</td><td>Aylık sabit paket ya da saatlik ücret</td></tr>
          <tr><td>Kurumsal e-posta</td><td>ad@firmaniz.com.tr adresleri</td><td>Kullanıcı başına aylık ücretlendirilir</td></tr>
        </tbody>
      </table>
      <p>Alan adı ve barındırma seçimini nasıl yapacağınızı, .com.tr için gereken belgeleri ve nelere dikkat etmeniz gerektiğini <a href="alan-adi-ve-hosting-secimi">alan adı ve hosting seçimi</a> yazımızda anlattık.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Kısa ipucu:</b> Alan adınızın ve barındırma hesabınızın kendi şirketiniz adına kayıtlı olduğundan emin olun. Ajans değiştirmek istediğinizde en çok sorun çıkaran konu budur.</div></div>
      <h2 id="gizli-maliyetler" class="bi-h2" data-n="06">Teklifte yazmayan gizli maliyetler</h2>
      <p>Projeler en çok, başta kimsenin konuşmadığı kalemler yüzünden bütçeyi aşar. Teklifi imzalamadan önce aşağıdakilerin kime ait olduğunu netleştirin:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Metinler ve çeviri:</b> İçeriği siz mi hazırlayacaksınız, ajans mı? Çeviri profesyonel mi, makine çevirisi mi?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Görseller:</b> Stok fotoğraf lisansları, ürün çekimi ya da ofis fotoğrafları.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Revizyon sınırı:</b> Kaç tur tasarım revizyonu dahil? Sonrası nasıl ücretlendiriliyor?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yasal metinler:</b> KVKK aydınlatma metni, çerez politikası, mesafeli satış sözleşmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Veri taşıma:</b> Eski sitedeki içeriklerin, ürünlerin ve eski adreslerin yönlendirmesi (301). Yönlendirme yapılmazsa yıllardır kazanılmış arama trafiği kaybolabilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Eğitim:</b> Yönetim panelini kullanmayı ekibinize kim öğretecek?</span></li>
      </ul>
      <p>Bu kalemler tek tek küçük görünür ama toplandığında kurulum bedelinin önemli bir kısmına ulaşabilir. Bunları baştan konuşmak, hem bütçe sürprizlerini hem de takvim kaymalarını önler.</p>
      <h2 id="teklif-karsilastirma" class="bi-h2" data-n="07">Web sitesi tekliflerini doğru karşılaştırma yöntemi</h2>
      <p>Elinizde üç farklı teklif varsa, önce hepsini aynı formata çevirin. Basit bir tablo açın ve her teklif için şu soruların cevabını yazın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım —</b> Hangi sayfalar ve modüller kapsamda? Liste halinde yazılı mı?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım —</b> Tasarım özel mi, hazır tema mı? Temanın lisansı kimin adına?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım —</b> Mobil görünüm, hız ve temel SEO işleri dahil mi, nasıl ölçülecek?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım —</b> Kaynak kod, alan adı ve barındırma kimin mülkiyetinde olacak?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım —</b> Yayın sonrası kaç ay ücretsiz destek var, sonrası ne kadar?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>6. Adım —</b> Teslim takvimi ve ödeme planı aşamalara bağlı mı?</span></li>
      </ul>
      <p>Firmanın daha önce yaptığı işlere bakmak da en az fiyat kadar önemlidir. Canlı siteleri telefonda açın, hızlarını deneyin, mümkünse referanslarından biriyle konuşun. Bizim yaptığımız işleri ve kendi ürünlerimizi <a href="referanslar">referanslarımız</a> sayfasında görebilirsiniz.</p>
      <p>Siteyi yaptırmadan önce cevaplamanız gereken stratejik soruları ise <a href="kurumsal-web-sitesi-rehberi">kurumsal web sitesi rehberimizde</a> toparladık.</p>
      <h2 id="tasarruf" class="bi-h2" data-n="08">Kaliteden ödün vermeden web sitesi maliyetini düşürmek</h2>
      <p>Bütçe sınırlıysa her şeyden biraz yapmak yerine önceliklendirmek en doğrusudur. Bize gelen KOBİ’lere önerdiğimiz yaklaşım şudur:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Aşamalı ilerleyin:</b> İlk sürümde temel sayfalar ve iletişim; blog, ikinci dil ve özel modüller sonraki aşamalara.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İçeriği hazır gelin:</b> Metinleri, logoyu ve fotoğrafları projeden önce toplamak süreyi ve dolayısıyla maliyeti kısaltır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gereğinden büyük altyapı kurmayın:</b> Ayda birkaç bin ziyaretçi alan bir tanıtım sitesi için pahalı bulut mimarisine gerek yoktur.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ucuz olanı değil, sürdürülebilir olanı seçin:</b> Bakımı yapılmayan, iki yıl sonra yeniden yapılması gereken bir site uzun vadede en pahalı seçenektir.</span></li>
      </ul>
      <p>Özellikle ölçeklenmesi muhtemel işletmeler için başta doğru altyapıyı seçmek, sonradan sıfırdan başlamaktan her zaman ucuzdur. Kurumsal web sitesi, e-ticaret ve özel web yazılımı hizmetlerimizin kapsamını <a href="web-cozumleri">web çözümleri</a> sayfamızda bulabilirsiniz.</p>
      <div class="bi-check">
        <div class="eyebrow">// TEKLİF İMZALAMADAN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sayfalar, modüller ve entegrasyonlar madde madde yazılı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Tasarımın özel mi hazır tema mı olduğu belli mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Alan adı, barındırma ve kaynak kod sizin adınıza mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yıllık yenilenen lisans ve hizmet bedelleri listelendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Revizyon sayısı ve ek iş ücretlendirmesi net mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yayın sonrası destek süresi ve kapsamı yazılı mı?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Web sitesi yaptırmak ne kadar tutar?</summary><p>Kapsama göre değişir. 2026 itibarıyla yaklaşık olarak tek sayfalık bir tanıtım sitesi 10 ila 30 bin TL, hazır temalı kurumsal bir site 15 ila 50 bin TL, özel tasarımlı kurumsal bir site 50 bin TL ve üzeri bantta fiyatlanıyor. E-ticaret ve özel yazılım projeleri ise modül ve entegrasyonlara göre çok daha geniş bir aralıkta değişir.</p></details><details class="bi-faq-i"><summary>Web sitesinin yıllık masrafı ne kadar?</summary><p>Kurulumdan sonra her yıl alan adı yenileme, barındırma, varsa premium tema ve eklenti lisansları, kurumsal e-posta ve bakım-destek bedeli ödenir. Küçük bir kurumsal site için bu kalemler kurulum bedelinin küçük bir bölümüdür; e-ticaret ve yoğun trafikli sitelerde ise belirgin şekilde artar.</p></details><details class="bi-faq-i"><summary>Ucuz web sitesi yaptırmak mantıklı mı?</summary><p>Amaç yalnızca kısa süreli bir dijital kartvizitse olabilir. Ancak çok düşük teklifler genellikle lisanssız tema, zayıf sunucu, eksik SEO altyapısı ya da yayın sonrası desteksizlik anlamına gelir ve site kısa sürede yeniden yaptırılmak zorunda kalınabilir.</p></details><details class="bi-faq-i"><summary>Web sitesi kaç günde hazır olur?</summary><p>İçerik hazırsa tek sayfalık bir site birkaç günde, kurumsal bir site genellikle 3 ila 6 haftada, e-ticaret ve özel yazılım projeleri ise kapsamına göre birkaç ayda tamamlanır. En sık gecikme nedeni metin ve görsellerin geç gelmesidir.</p></details><details class="bi-faq-i"><summary>Hazır site kurucular mı, ajans mı daha uygun?</summary><p>Basit bir tanıtım sayfası için hazır site kurucular hızlı ve uygun maliyetli bir başlangıç olabilir. Markaya özel tasarım, SEO performansı, entegrasyon ve büyüme planınız varsa profesyonel bir ekip uzun vadede daha ekonomik sonuç verir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Web sitesi fiyatları kapsam, yöntem ve ekibe göre geniş bir aralıkta değişir; doğru bütçe, ihtiyacınızı netleştirip teklifleri aynı ölçüyle karşılaştırdığınızda ortaya çıkar. Kurulum bedelinin yanında yıllık giderleri ve yayından sonraki desteği de hesaba katın.</p>
      <p>Projenizin kapsamını birlikte çıkarmak ve size özel, kalem kalem açıklanmış bir teklif almak isterseniz <a href="iletisim">bize ulaşın</a>; ilk görüşmede ihtiyacınız olan ile olmayan arasındaki çizgiyi birlikte çizelim.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://www.karekod.org/blog/web-site-fiyati/" target="_blank" rel="noopener nofollow">Karekod — Web Site Fiyatı 2026 (piyasa fiyat rehberi)</a></li><li><a href="https://braverytechnology.com/tr/web-sitesi-fiyatlari/" target="_blank" rel="noopener nofollow">Bravery Technology — Web Sitesi Fiyatları 2026 Türkiye</a></li><li><a href="https://www.godaddy.com/resources/tr/stories/web-sitesi-maliyeti-ne-kadar" target="_blank" rel="noopener nofollow">GoDaddy — 2026’da bir web sitesi maliyeti ne kadar?</a></li><li><a href="https://www.trabis.gov.tr/" target="_blank" rel="noopener nofollow">TRABİS — .tr Alan Adları Yönetim Sistemi</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes" target="_blank" rel="noopener nofollow">Google Search Central — Site taşıma ve URL değişiklikleri</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#neden-farkli" data-n="01">Fiyatlar neden farklı?</a></li><li><a href="#site-turleri" data-n="02">Türlere göre fiyatlar</a></li><li><a href="#faktorler" data-n="03">Fiyatı belirleyen 9 faktör</a></li><li><a href="#ornek-senaryolar" data-n="04">Üç örnek senaryo</a></li><li><a href="#yillik-giderler" data-n="05">Yıllık giderler</a></li><li><a href="#gizli-maliyetler" data-n="06">Gizli maliyetler</a></li><li><a href="#teklif-karsilastirma" data-n="07">Teklifleri karşılaştırın</a></li><li><a href="#tasarruf" data-n="08">Bütçeyi verimli kullanın</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="donusum-odakli-web-tasarim"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="alan-adi-ve-hosting-secimi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi</b><span class="bi-read">9 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 Ekim 2026</span><b>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
