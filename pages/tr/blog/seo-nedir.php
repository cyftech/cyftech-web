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
<title>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</title>
<meta name="description" content="SEO nedir, nasıl çalışır? Google’ın tarama-dizine ekleme-sıralama sürecini, AI Overviews etkisini ve işletmeniz için ilk adımları sade bir dille anlatıyoruz.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi">
<meta property="og:description" content="SEO nedir, nasıl çalışır? Google’ın tarama-dizine ekleme-sıralama sürecini, AI Overviews etkisini ve işletmeniz için ilk adımları sade bir dille anlatıyoruz.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/seo-nedir">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/seo-nedir.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/seo-nedir">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi", "description": "SEO nedir, nasıl çalışır? Google’ın tarama-dizine ekleme-sıralama sürecini, AI Overviews etkisini ve işletmeniz için ilk adımları sade bir dille anlatıyoruz.", "image": "https://cyftech.com.tr/assets/img/og/seo-nedir.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/seo-nedir", "url": "https://cyftech.com.tr/seo-nedir", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi", "item": "https://cyftech.com.tr/seo-nedir"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "SEO nedir ve ne işe yarar?", "acceptedAnswer": {"@type": "Answer", "text": "SEO, yani arama motoru optimizasyonu, web sitenizin reklam ödemeden Google gibi arama motorlarında ilgili aramalarda daha görünür olması için yapılan teknik, içerik ve otorite çalışmalarının bütünüdür. Amacı, sizi arayan potansiyel müşterilerin sitenize ulaşmasını sağlamaktır."}}, {"@type": "Question", "name": "SEO kendi kendine yapılabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Temel adımlar yapılabilir: Search Console kurmak, sayfa başlıklarını düzenlemek, Google İşletme Profili açmak ve müşteri sorularını yanıtlayan içerik yazmak. Teknik sorunlar, site mimarisi ve rekabetçi sektörlerde ise deneyimli bir ekipten destek almak zaman kazandırır."}}, {"@type": "Question", "name": "SEO ne kadar sürede sonuç verir?", "acceptedAnswer": {"@type": "Answer", "text": "Sitenin yaşına, sektördeki rekabete ve başlangıçtaki teknik duruma göre değişir. Teknik engellerin kaldırılması birkaç haftada etki gösterebilirken yeni bir sitede anlamlı organik trafik genellikle aylar sürer. Kesin süre veya bir numara garantisi veren hizmetlere temkinli yaklaşın."}}, {"@type": "Question", "name": "Yapay zekâ aramaları SEO’yu bitirdi mi?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. Google’a göre AI Overviews ve AI Modu’nda görünmek için ek bir gereklilik yok; dizine eklenmiş ve iyi içerik sunan sayfalar bu özetlerde kaynak olarak gösterilebiliyor. Basit bilgi sorularında tıklamalar azalabilir, ancak özgün ve deneyime dayalı içeriğin değeri artıyor."}}, {"@type": "Question", "name": "SEO ile Google Ads arasındaki fark nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Google Ads’te tıklama başına ödeme yaparak reklam alanında hemen görünürsünüz ve bütçe bittiğinde görünürlük durur. SEO’da tıklama için ödeme yapmazsınız ama sonuç almak zaman ve emek ister; kazanılan görünürlük daha kalıcıdır. Birçok işletme ikisini birlikte kullanır."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/seo-nedir">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/seo-nedir">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/seo-nedir">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/seo-nedir">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/seo-nedir">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/seo-nedir">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/seo-nedir">
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
      <div class="lang-menu"><a href="seo-nedir" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/seo-nedir" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/seo-nedir" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/seo-nedir" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/seo-nedir" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/seo-nedir" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">SEO nedir? 2026 için sade ve uygulanabilir başlangıç rehberi.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>SEO</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/seo-nedir.svg" alt=""></div>
      <p class="bi-lead">Müşterilerinizin büyük kısmı sizi bulmadan önce Google’a bir şey yazıyor: “yakınımda muhasebeci”, “kurumsal web sitesi fiyatı”, “apartman aidat programı”. <b>SEO</b>, o arama yapıldığı anda sitenizin karşılarına çıkıp çıkmayacağını belirleyen işin adıdır.</p>
      <p>Bu yazıda <b>SEO nedir</b> sorusunu teknik terimlere boğmadan yanıtlıyoruz: Google bir sayfayı nasıl keşfeder, neye göre sıralar, 2025–2026’da yapay zekâ özetleri (AI Overviews ve AI Modu) oyunu nasıl değiştirdi ve bir işletme sahibi olarak ilk ay hangi adımları atmalısınız.</p>
      <p>Konuyu derinlemesine işleyen üç yazımız daha var; yeri geldikçe onlara yönlendireceğiz. Bu yazıyı haritanın tamamını gösteren giriş bölümü olarak düşünün.</p>
      <h2 id="tanim" class="bi-h2" data-n="01">SEO nedir? Kısa ve net bir tanım</h2>
      <p>SEO, İngilizce <b>Search Engine Optimization</b> yani <b>arama motoru optimizasyonu</b> ifadesinin kısaltmasıdır. Amacı, sitenizin reklam ödemeden, yani <b>organik</b> olarak, ilgili aramalarda daha görünür olmasını sağlamaktır.</p>
      <p>Google’ın kendi tanımı da buna yakındır: SEO, arama motorlarının içeriğinizi anlamasına ve kullanıcıların sitenizi bulup ona tıklamaya karar vermesine yardımcı olma işidir. Dikkat edin, tanımda iki taraf var: arama motoru ve insan. İyi SEO ikisine birden hizmet eder.</p>
      <p>Türkiye’de arama pazarının büyük kısmı Google’da. Statcounter’ın Eylül 2026 verilerine göre Google’ın Türkiye’deki arama motoru payı yaklaşık yüzde 73, Yandex’inki yaklaşık yüzde 25. Bu yüzden bu rehberde Google’ı esas alıyoruz; ancak anlatılan ilkelerin çoğu Yandex için de geçerlidir.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Akılda tutun:</b> SEO bir eklenti, bir ayar ya da tek seferlik bir paket değildir. Sitenizin yapısı, içeriği ve itibarı üzerinde süren bir çalışmadır.</div></div>
      <h2 id="google-nasil-calisir" class="bi-h2" data-n="02">Google bir sayfayı nasıl bulur, saklar ve sıralar?</h2>
      <p>Google Search Central belgeleri süreci üç aşamada anlatır. SEO’daki hemen her teknik konu bu üç aşamadan birine dokunur:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Tarama (crawling) —</b> Googlebot adlı otomatik program, bağlantıları ve site haritalarını izleyerek yeni ve güncellenmiş sayfaları keşfeder ve indirir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Dizine ekleme (indexing) —</b> Google sayfadaki metni, görselleri ve başlıkları analiz eder, sayfanın neyle ilgili olduğunu anlar ve büyük veritabanına (dizin) kaydeder. Taranan her sayfa dizine girmez.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Sonuç gösterme (serving) —</b> Biri arama yaptığında Google, dizindeki sayfalar arasından o kişi için en yararlı olduğunu düşündüklerini sıralar. Burada aramanın anlamı, konum, dil ve cihaz gibi yüzlerce etken rol oynar.</span></li>
      </ul>
      <p>Pratik sonuç şu: Google sayfanıza ulaşamıyorsa (tarama), sayfanızı anlayamıyorsa (dizine ekleme) ya da sayfanız soruyu rakiplerden iyi yanıtlamıyorsa (sıralama) görünmezsiniz. Sorunun hangi aşamada olduğunu bilmek, çözümü de belirler.</p>
      <p>Google ayrıca açıkça şunu söyler: sıralamada daha üst sıra için Google’a ödeme yapılamaz. Reklamlar ayrı bir alandır ve organik sonuçları etkilemez.</p>
      <h2 id="uc-ayak" class="bi-h2" data-n="03">SEO’nun üç ayağı: teknik, içerik ve otorite</h2>
      <p>SEO çalışmaları genellikle üç başlıkta toplanır. Birini ihmal ettiğinizde diğer ikisinin etkisi de sınırlı kalır.</p>
      <table>
        <thead><tr><th>Ayak</th><th>Ne demek?</th><th>Örnek işler</th></tr></thead>
        <tbody>
          <tr><td><b>Teknik SEO</b></td><td>Google’ın siteyi sorunsuz tarayıp dizine ekleyebilmesi</td><td>robots.txt, site haritası, HTTPS, hız, mobil uyum, yönlendirmeler</td></tr>
          <tr><td><b>İçerik ve sayfa içi SEO</b></td><td>Doğru soruya doğru sayfayla, iyi bir yanıt vermek</td><td>Anahtar kelime ve niyet analizi, başlık etiketleri, metin, görseller, iç bağlantılar</td></tr>
          <tr><td><b>Otorite (sayfa dışı SEO)</b></td><td>Sitenizin dış dünyada ne kadar tanındığı ve güvenildiği</td><td>Doğal bağlantılar, marka bahisleri, yorumlar, sektör dizinleri</td></tr>
        </tbody>
      </table>
      <p>Teknik tarafı tek tek kontrol etmek isterseniz <a href="teknik-seo-kontrol-listesi">teknik SEO kontrol listemizi</a> adım adım uygulayabilirsiniz. Fiziksel bir dükkânınız ya da belirli bir bölgeye hizmetiniz varsa, otorite ayağının önemli bir kısmı haritalarda ve yorumlarda döner; bunu <a href="yerel-seo-google-isletme-profili">yerel SEO ve Google İşletme Profili rehberimizde</a> ayrıntılı anlattık.</p>
      <h2 id="anahtar-kelime" class="bi-h2" data-n="04">Anahtar kelime ve arama niyeti: doğru soruyu seçmek</h2>
      <p>SEO’nun başlangıç noktası, müşterilerinizin hangi kelimelerle arama yaptığını bilmektir. Ama kelimenin kendisinden daha önemli olan, arkasındaki <b>niyettir</b>. Aynı konudaki iki arama çok farklı şeyler isteyebilir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Bilgi niyeti:</b> “SEO nedir”, “aidat nasıl hesaplanır”. Kişi öğrenmek istiyor; rehber ve açıklayıcı yazı bekliyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ticari araştırma:</b> “en iyi adisyon programı”, “WordPress mi özel yazılım mı”. Kişi seçenekleri karşılaştırıyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İşlem niyeti:</b> “web sitesi yaptırmak istiyorum”, “restoran POS sistemi fiyat”. Kişi satın almaya ya da teklif istemeye yakın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yerel niyet:</b> “Kadıköy diş kliniği”, “yakınımda oto servis”. Kişi yakındaki bir işletmeyi arıyor.</span></li>
      </ul>
      <p>Her niyet için ayrı bir sayfa türü gerekir. Hizmet sayfanızı bilgi arayanlara, blog yazınızı da teklif isteyenlere göstermeye çalışmak işe yaramaz. Google’da bir kelimeyi aratıp ilk sayfadaki sonuçlara bakmak, o kelimenin niyetini anlamanın en hızlı yoludur.</p>
      <h3>Uzun kuyruklu kelimeler neden değerli?</h3>
      <p>“Web sitesi” gibi genel kelimelerde rekabet çok yüksektir ve arayanın ne istediği belirsizdir. “İstanbul’da kurumsal web sitesi yaptırma fiyatı” gibi uzun kuyruklu aramaların hacmi daha düşüktür ama arayan kişi ne istediğini bilir. Yeni ve küçük siteler için gerçekçi kazanımlar genellikle buradan gelir.</p>
      <h2 id="icerik-kalitesi" class="bi-h2" data-n="05">Google hangi içeriği “yararlı” sayar?</h2>
      <p>Google, sıralama sistemlerinin insanlara yardımcı olmak için hazırlanmış, güvenilir içeriği öne çıkarmayı hedeflediğini açıkça yazar. “Yararlı, güvenilir ve insan odaklı içerik oluşturma” belgesinde sorulan soruların özü şudur: Bu sayfa, okuyanın işini gerçekten görüyor mu, yoksa yalnızca arama motoru için mi yazılmış?</p>
      <p>Bu değerlendirmede sık duyacağınız kısaltma <b>E-E-A-T</b>’dir: deneyim (experience), uzmanlık (expertise), yetkinlik (authoritativeness) ve güvenilirlik (trust). Bunlar tek tek ölçülen puanlar değil, iyi içeriğin taşıdığı özelliklerdir. Bir işletme sitesinde bunu şöyle gösterebilirsiniz:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Gerçek proje örnekleri, kendi çektiğiniz fotoğraflar ve somut rakamlar</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yazıyı kimin yazdığını ve hangi deneyime dayandığını gösteren bilgiler</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Açık iletişim bilgileri, adres, şirket bilgileri ve referanslar</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Rakiplerin söylediğini tekrarlamak yerine kendi bilginizi ve bakış açınızı eklemek</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Google’ın spam politikaları, sıralamayı manipüle etmek için çok sayıda düşük değerli sayfa üretmeyi (yapay zekâyla ya da elle) açıkça yasaklar. Yapay zekâ araç olarak kullanılabilir; sorun aracın kendisi değil, ortaya çıkan içeriğin kimseye fayda sağlamamasıdır.</div></div>
      <h2 id="yapay-zeka" class="bi-h2" data-n="06">Yapay zekâ aramaları SEO’yu nasıl etkiliyor?</h2>
      <p>2025 ve 2026, aramada büyük bir değişimin yılları oldu. Google’ın yapay zekâ özetleri (Türkçede <b>AI Bakışı</b> olarak da geçen AI Overviews) ve sohbet tarzındaki <b>AI Modu</b>, Şubat 2026’dan itibaren Türkiye’de kademeli olarak kullanıma açıldı. Artık birçok sorunun yanıtı, sonuç listesinin üstünde, kaynak bağlantılarıyla birlikte özetleniyor.</p>
      <p>Bu, tıklama davranışını değiştiriyor. Pew Research Center’ın ABD’de 900 yetişkinin tarama verisiyle yaptığı 2025 araştırmasında, yapay zekâ özeti gösterilen aramalarda kullanıcılar klasik sonuçlara ziyaretlerin yüzde 8’inde tıklarken, özet olmayan aramalarda bu oran yüzde 15’ti. Yani özellikle basit bilgi sorularında daha az tıklama bekleyin.</p>
      <p>Peki ne yapmalı? Google’ın “Yapay zekâ özellikleri ve web siteniz” belgesi net: AI Overviews veya AI Modu’nda görünmek için <b>ek bir gereklilik ya da özel bir optimizasyon yok</b>. Sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olması yeterli; özel bir yapay zekâ dosyası ya da özel bir schema işaretlemesi gerekmiyor. Temel SEO uygulamaları burada da geçerli:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Önemli bilgiyi görselin içine değil, metin olarak yazın</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Soruları açıkça sorup ilk paragrafta doğrudan yanıtlayın, ayrıntıyı sonra verin</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kendi deneyiminize dayanan, başka yerde bulunmayan bilgi ekleyin; özetlerin kaynak olarak bağlantı vermek istediği içerik budur</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yapay zekâ trafiği Search Console’da ayrı bir rapor olarak değil, “Web” arama türündeki performans verilerine dahil gelir; ölçümünüzü buna göre yorumlayın</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Yapay zekâ çağında SEO ölmedi; sıradan içeriğin değeri düştü, gerçekten yararlı içeriğin değeri arttı.</blockquote>
      <h2 id="sure-olcum" class="bi-h2" data-n="07">SEO ne kadar sürede sonuç verir, nasıl ölçülür?</h2>
      <p>Dürüst cevap: değişir. Yeni bir site, rekabetçi bir sektör ve sıfırdan otorite söz konusuysa anlamlı organik trafik genellikle aylar alır. Teknik bir engeli (örneğin yanlışlıkla “noindex” bırakılmış sayfaları) kaldırmak ise birkaç hafta içinde fark yaratabilir. Google’ın kendisi de bir SEO danışmanına “hangi sonuçları, hangi sürede bekliyorsunuz?” diye sormanızı önerir ve ekler: kimse Google’da bir numarayı garanti edemez.</p>
      <p>Ölçüm için iki ücretsiz araç yeter:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Google Search Console:</b> Hangi aramalarda göründüğünüzü, kaç kez gösterilip kaç tıklama aldığınızı ve dizine ekleme sorunlarını gösterir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Google Analytics 4:</b> Gelen ziyaretçilerin sitede ne yaptığını, form doldurup doldurmadığını ya da aradığını gösterir.</span></li>
      </ul>
      <p>Başarıyı sıralamayla değil, işle ölçün: organik aramadan gelen teklif talebi, telefon araması, satış. Hızlı sonuç gereken dönemlerde reklamla SEO’yu nasıl dengeleyeceğinizi <a href="google-ads-mi-seo-mu">Google Ads mi SEO mu</a> yazımızda karşılaştırdık.</p>
      <h2 id="ilk-adimlar" class="bi-h2" data-n="08">İşletmeniz için ilk 30 günde yapılacaklar</h2>
      <p>SEO’ya nereden başlayacağını bilemeyen işletmeler için uygulanabilir bir sıra:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Hafta —</b> Google Search Console ve Analytics’i kurun, site haritanızı gönderin, “Sayfa dizine ekleme” raporundaki hataları not edin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Hafta —</b> Her hizmetiniz için müşterinin kullandığı 3–5 aramayı listeleyin ve her birine karşılık gelen bir sayfanız olup olmadığına bakın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Hafta —</b> Ana sayfaların başlık (title) ve açıklama etiketlerini, H1 başlıklarını ve metinlerini bu aramalara göre yeniden yazın. Yerel çalışıyorsanız Google İşletme Profilinizi doğrulayın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Hafta —</b> Müşterilerinizin en sık sorduğu bir soruyu yanıtlayan ilk rehber yazınızı yayınlayın ve hizmet sayfalarınıza iç bağlantı verin.</span></li>
      </ul>
      <p>Siteniz yeni yapılacaksa bu temelleri sonradan eklemek yerine baştan kurmak çok daha ucuzdur; <a href="kurumsal-web-sitesi-rehberi">kurumsal web sitesi yaptırmadan önce bilmeniz gerekenler</a> yazımız bu açıdan iyi bir başlangıç.</p>
      <div class="bi-check">
        <div class="eyebrow">// SEO’YA BAŞLAMADAN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Search Console ve Analytics kurulu ve doğrulanmış mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Her hizmet için ayrı ve dolu bir sayfa var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sayfa başlıkları ve açıklamaları müşterinin aramalarını yansıtıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Site telefonda hızlı açılıyor ve rahat kullanılıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Önemli bilgiler görselde değil, metin olarak mı yazılı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Başarıyı sıralamayla değil, talep ve satışla mı ölçüyorsunuz?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>SEO nedir ve ne işe yarar?</summary><p>SEO, yani arama motoru optimizasyonu, web sitenizin reklam ödemeden Google gibi arama motorlarında ilgili aramalarda daha görünür olması için yapılan teknik, içerik ve otorite çalışmalarının bütünüdür. Amacı, sizi arayan potansiyel müşterilerin sitenize ulaşmasını sağlamaktır.</p></details><details class="bi-faq-i"><summary>SEO kendi kendine yapılabilir mi?</summary><p>Temel adımlar yapılabilir: Search Console kurmak, sayfa başlıklarını düzenlemek, Google İşletme Profili açmak ve müşteri sorularını yanıtlayan içerik yazmak. Teknik sorunlar, site mimarisi ve rekabetçi sektörlerde ise deneyimli bir ekipten destek almak zaman kazandırır.</p></details><details class="bi-faq-i"><summary>SEO ne kadar sürede sonuç verir?</summary><p>Sitenin yaşına, sektördeki rekabete ve başlangıçtaki teknik duruma göre değişir. Teknik engellerin kaldırılması birkaç haftada etki gösterebilirken yeni bir sitede anlamlı organik trafik genellikle aylar sürer. Kesin süre veya bir numara garantisi veren hizmetlere temkinli yaklaşın.</p></details><details class="bi-faq-i"><summary>Yapay zekâ aramaları SEO’yu bitirdi mi?</summary><p>Hayır. Google’a göre AI Overviews ve AI Modu’nda görünmek için ek bir gereklilik yok; dizine eklenmiş ve iyi içerik sunan sayfalar bu özetlerde kaynak olarak gösterilebiliyor. Basit bilgi sorularında tıklamalar azalabilir, ancak özgün ve deneyime dayalı içeriğin değeri artıyor.</p></details><details class="bi-faq-i"><summary>SEO ile Google Ads arasındaki fark nedir?</summary><p>Google Ads’te tıklama başına ödeme yaparak reklam alanında hemen görünürsünüz ve bütçe bittiğinde görünürlük durur. SEO’da tıklama için ödeme yapmazsınız ama sonuç almak zaman ve emek ister; kazanılan görünürlük daha kalıcıdır. Birçok işletme ikisini birlikte kullanır.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>SEO’yu özetlemek gerekirse: Google’ın sitenize ulaşabilmesini sağlayın, müşterinin sorusunu en iyi yanıtlayan sayfayı yazın ve zamanla güven kazanın. Yapay zekâ özetleri bu ilkeleri değiştirmedi; yalnızca sıradan içerikle yetinmenin bedelini artırdı.</p>
      <p>CYF Tech olarak sitelerimizi SEO’yu sonradan eklenen bir hizmet olarak değil, mimarinin parçası olarak kuruyoruz. Mevcut sitenizin neden görünmediğini merak ediyorsanız ya da yeni bir siteye SEO temeliyle başlamak istiyorsanız <a href="iletisim">bize yazın</a>; birlikte bakalım.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — SEO Başlangıç Kılavuzu</a></li><li><a href="https://developers.google.com/search/docs/fundamentals/how-search-works?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Google Arama’nın işleyiş şekli</a></li><li><a href="https://developers.google.com/search/docs/fundamentals/creating-helpful-content?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Yararlı, güvenilir, insan odaklı içerik oluşturma</a></li><li><a href="https://developers.google.com/search/docs/appearance/ai-features" target="_blank" rel="noopener nofollow">Google Search Central — AI features and your website</a></li><li><a href="https://developers.google.com/search/docs/fundamentals/do-i-need-seo" target="_blank" rel="noopener nofollow">Google Search Central — Do you need an SEO?</a></li><li><a href="https://developers.google.com/search/docs/essentials/spam-policies?hl=tr" target="_blank" rel="noopener nofollow">Google Search Central — Spam politikaları</a></li><li><a href="https://www.pewresearch.org/short-reads/2025/07/22/google-users-are-less-likely-to-click-on-links-when-an-ai-summary-appears-in-the-results/" target="_blank" rel="noopener nofollow">Pew Research Center — Google users are less likely to click on links when an AI summary appears (2025)</a></li><li><a href="https://gs.statcounter.com/search-engine-market-share/all/turkey" target="_blank" rel="noopener nofollow">Statcounter — Türkiye arama motoru pazar payı</a></li><li><a href="https://webrazzi.com/2026/02/18/google-ai-modu-ve-ai-bakisi-ozelliklerini-turkiye-de-de-kullanima-sunmaya-basladi/" target="_blank" rel="noopener nofollow">Webrazzi — Google AI Modu ve AI Bakışı Türkiye’de (Şubat 2026)</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#tanim" data-n="01">SEO ne demek?</a></li><li><a href="#google-nasil-calisir" data-n="02">Google nasıl çalışır?</a></li><li><a href="#uc-ayak" data-n="03">SEO’nun üç ayağı</a></li><li><a href="#anahtar-kelime" data-n="04">Anahtar kelime ve niyet</a></li><li><a href="#icerik-kalitesi" data-n="05">İçerik ve güven</a></li><li><a href="#yapay-zeka" data-n="06">AI Overviews etkisi</a></li><li><a href="#sure-olcum" data-n="07">Süre ve ölçüm</a></li><li><a href="#ilk-adimlar" data-n="08">İlk 30 gün</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="yerel-seo-google-isletme-profili"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Yerel SEO ve Google İşletme Profili: Haritalarda Öne Çıkma Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="site-hizi-core-web-vitals"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="teknik-seo-kontrol-listesi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
