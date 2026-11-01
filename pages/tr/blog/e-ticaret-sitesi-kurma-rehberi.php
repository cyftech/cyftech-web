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
<title>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</title>
<meta name="description" content="E-ticaret sitesi kurma rehberi: şirket ve vergi, altyapı seçimi, sanal POS, ETBİS kaydı, mesafeli satış sözleşmesi, kargo ve SEO adımları (2026).">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası">
<meta property="og:description" content="E-ticaret sitesi kurma rehberi: şirket ve vergi, altyapı seçimi, sanal POS, ETBİS kaydı, mesafeli satış sözleşmesi, kargo ve SEO adımları (2026).">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/e-ticaret-sitesi-kurma-rehberi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası", "description": "E-ticaret sitesi kurma rehberi: şirket ve vergi, altyapı seçimi, sanal POS, ETBİS kaydı, mesafeli satış sözleşmesi, kargo ve SEO adımları (2026).", "image": "https://cyftech.com.tr/assets/img/og/e-ticaret-sitesi-kurma-rehberi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi", "url": "https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası", "item": "https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "E-ticaret sitesi kurmak için şirket gerekli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Düzenli ve sürekli satış yapacaksanız evet. Sanal POS başvurusu, kargo anlaşması ve ETBİS kaydı için vergi mükellefiyeti gerekir. Evde üretilen ürünleri sınırlı ölçekte satanlar için esnaf muafiyeti seçeneği bulunur, ancak uygunluğunuzu mali müşavirinize danışın."}}, {"@type": "Question", "name": "ETBİS kaydı zorunlu mu, ücretli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Kendi web sitesi veya mobil uygulaması üzerinden satış yapan işletmeler için ETBİS kaydı zorunludur ve faaliyete başlamadan önce yapılmalıdır. Kayıt eticaret.gov.tr üzerinden e-Devlet ile ücretsiz yapılır. Yalnızca yurt içi pazaryerlerinde satış yapanların ayrıca kayıt yükümlülüğü bulunmaz."}}, {"@type": "Question", "name": "Sanal POS mu ödeme kuruluşu mu daha avantajlı?", "acceptedAnswer": {"@type": "Answer", "text": "Yeni başlayan işletmeler için ödeme kuruluşları hızlı başvuru ve tek entegrasyonla tüm kartlara taksit avantajı sunar. Ciro büyüdükçe bankalarla doğrudan sanal POS anlaşması yapmak komisyon açısından avantajlı hale gelebilir. Karar verirken komisyonun yanında valör süresi ve sabit ücretleri de karşılaştırın."}}, {"@type": "Question", "name": "E-ticaret sitesinde cayma hakkı kaç gündür?", "acceptedAnswer": {"@type": "Answer", "text": "Mesafeli Sözleşmeler Yönetmeliği’ne göre tüketici kural olarak malı teslim aldığı tarihten itibaren 14 gün içinde gerekçe göstermeden cayabilir. Satıcı da cayma bildiriminden itibaren 14 gün içinde ödemeyi iade etmelidir. Kişiye özel üretilen ürünler gibi istisnalar yönetmelikte sayılmıştır."}}, {"@type": "Question", "name": "E-ticaret sitesi kurmak ne kadar sürer?", "acceptedAnswer": {"@type": "Answer", "text": "Hazır bir altyapıyla, içerik ve ürünler hazırsa birkaç hafta içinde yayına çıkmak mümkündür. Özel tasarım veya entegrasyon gerektiren projelerde süre genellikle birkaç ayı bulur. Süreyi en çok uzatan kalem genellikle ürün içerikleri ve sanal POS onay süreçleridir."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/e-ticaret-sitesi-kurma-rehberi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/e-ticaret-sitesi-kurma-rehberi">
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
      <div class="lang-menu"><a href="e-ticaret-sitesi-kurma-rehberi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/e-ticaret-sitesi-kurma-rehberi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/e-ticaret-sitesi-kurma-rehberi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/e-ticaret-sitesi-kurma-rehberi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/e-ticaret-sitesi-kurma-rehberi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/e-ticaret-sitesi-kurma-rehberi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>E-TİCARET</span></div>
    <h1 class="h1" style="max-width:900px">E-ticaret sitesi kurma rehberi 2026: adım adım yol haritası.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>E-Ticaret</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/e-ticaret-sitesi-kurma-rehberi.svg" alt=""></div>
      <p class="bi-lead">Ürününüz hazır, fiyatınız rekabetçi, ama “internetten satışa nasıl başlarım?” sorusu bir türlü netleşmiyor mu? <b>E-ticaret sitesi kurma</b> süreci; birkaç güzel ürün fotoğrafından çok daha fazlası: vergi, ödeme altyapısı, yasal metinler ve teslimat bir bütün olarak doğru kurulmalı.</p>
      <p>Bu rehberde Türkiye’de kendi online mağazanızı açmak için izlemeniz gereken adımları sırasıyla anlatıyoruz: şirket ve vergi altyapısı, altyapı (platform) seçimi, sanal POS ve ödeme kuruluşları, ETBİS kaydı ve mesafeli satış mevzuatı, kargo ve iade süreçleri, son olarak da ilk siparişleri getirecek ürün sayfaları ve SEO.</p>
      <p>CYF Tech olarak hem hazır altyapılar üzerinde hem de sıfırdan yazdığımız e-ticaret projelerinde en sık gördüğümüz hataları da her bölümün içine not olarak ekledik. Amaç, siteyi yayına aldıktan sonra “bunu baştan bilseydik” dememeniz.</p>
      <h2 id="sirket" class="bi-h2" data-n="01">E-ticarete başlamadan önce şirket ve vergi altyapısı</h2>
      <p>Kendi siteniz üzerinden düzenli satış yapacaksanız ticari bir kimliğe ihtiyacınız var. Sanal POS başvurusu, kargo anlaşması ve ETBİS kaydı gibi adımların hepsi bir vergi numarası ister. Bu yüzden ilk iş, faaliyetinize uygun şirket türünü seçmektir.</p>
      <table>
        <thead><tr><th>Seçenek</th><th>Kimler için uygun?</th><th>Dikkat edilecekler</th></tr></thead>
        <tbody>
          <tr><td>Şahıs şirketi</td><td>Yeni başlayan, düşük-orta ciro bekleyen girişimciler</td><td>Kuruluşu hızlı ve ucuz; sorumluluk kişisel malvarlığına uzanır</td></tr>
          <tr><td>Limited şirket</td><td>Ortaklı yapılar, büyüme ve yatırım planı olanlar</td><td>Kuruluş ve muhasebe maliyeti daha yüksek; sorumluluk şirketle sınırlı</td></tr>
          <tr><td>Esnaf muafiyeti</td><td>Evde üretilen ürünleri sınırlı ölçekte satanlar</td><td>Kapsamı ve tutar sınırları dar; uygun olup olmadığınızı mali müşavirinize sorun</td></tr>
        </tbody>
      </table>
      <p>Vergi mükellefiyeti açıldıktan sonra fatura düzeni de konuşulmalı. İnternetten satış yapan işletmeler belirli ciro eşiklerini aştığında e-Arşiv ve e-Fatura uygulamasına geçmek zorunda kalıyor; eşikler Gelir İdaresi tarafından zaman zaman güncellendiği için güncel durumu muhasebecinizle teyit edin. E-ticaret altyapınızın bir e-fatura entegratörüyle konuşabilmesi, sipariş başına elle fatura kesme yükünü baştan ortadan kaldırır.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Pratik öneri:</b> Mali müşavirinizle ilk görüşmeye tahmini aylık sipariş sayınızı, ortalama sepet tutarınızı ve yurt dışına satış yapıp yapmayacağınızı yazıp gidin. Şirket türü ve fatura düzeni bu üç rakama göre şekillenir.</div></div>
      <h2 id="altyapi" class="bi-h2" data-n="02">E-ticaret altyapısı: hazır paket mi, açık kaynak mı, özel yazılım mı?</h2>
      <p>E-ticaret sitesi kurmanın en kritik teknik kararı altyapıdır. Türkiye’de üç ana yol var ve her birinin maliyet, esneklik ve bağımlılık dengesi farklı:</p>
      <table>
        <thead><tr><th>Yol</th><th>Artıları</th><th>Eksileri</th></tr></thead>
        <tbody>
          <tr><td>Hazır e-ticaret paketi (kiralık)</td><td>Hızlı açılış, sanal POS ve kargo entegrasyonları hazır, teknik bakım sağlayıcıda</td><td>Aylık/yıllık kira, tasarım ve özellikte sınırlar, platforma bağımlılık</td></tr>
          <tr><td>Açık kaynak (WooCommerce vb.)</td><td>Lisans maliyeti düşük, geniş eklenti ekosistemi</td><td>Güncelleme, güvenlik ve hız sizin sorumluluğunuzda; eklenti yığını yavaşlatır</td></tr>
          <tr><td>Özel yazılım</td><td>İş akışınıza birebir uyum, ERP/stok/B2B entegrasyonları, tam mülkiyet</td><td>İlk yatırım ve geliştirme süresi daha yüksek</td></tr>
        </tbody>
      </table>
      <p>Az sayıda ürünle pazarı test eden bir marka için hazır paket mantıklı bir başlangıç olabilir. Bayi fiyatlandırması, çok depolu stok, özel kampanya kuralları ya da muhasebe ve üretim sistemleriyle entegrasyon gerekiyorsa, hazır paketin sınırlarına çok çabuk dayanırsınız. Bu kararın ayrıntılarını <a href="wordpress-mi-ozel-yazilim-mi">hazır altyapı mı, özel yazılım mı</a> yazımızda karşılaştırdık.</p>
      <h3>Hangi yolu seçerseniz seçin, mutlaka sorun</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ürün, müşteri ve sipariş verilerimi <b>dışa aktarabiliyor muyum</b>? Platform değiştirirsem ne olur?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Alan adı kimin adına kayıtlı ve <b>yönetim paneline</b> kim erişiyor?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kullanmak istediğim sanal POS, kargo firması ve e-fatura entegratörü <b>destekleniyor mu</b>?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Site mobilde ne kadar hızlı açılıyor? Örnek bir mağazanın PageSpeed sonucunu görebilir miyim?</span></li>
      </ul>
      <h2 id="odeme" class="bi-h2" data-n="03">Sanal POS ve ödeme kuruluşu seçimi</h2>
      <p>Kartla ödeme almak için iki seçeneğiniz var: doğrudan bir bankadan <b>sanal POS</b> almak ya da Türkiye Cumhuriyet Merkez Bankası (TCMB) tarafından lisanslanmış bir <b>ödeme kuruluşu</b> üzerinden tahsilat yapmak. Ödeme kuruluşları 6493 sayılı Kanun kapsamında faaliyet gösterir ve izinli kuruluşların güncel listesi TCMB’nin sitesinde yayımlanır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Banka sanal POS’u:</b> Komisyon oranı genellikle pazarlığa açıktır, ancak başvuru için şirketin belli bir geçmişi ve cirosu istenebilir. Birden çok bankayla çalışmak taksit seçeneklerini artırır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ödeme kuruluşu:</b> Başvuru ve entegrasyon daha hızlıdır, tüm banka kartlarına taksit tek entegrasyonla gelir. Karşılığında komisyon biraz daha yüksek olabilir ve paranın hesabınıza geçme süresi (valör) sözleşmeye göre değişir.</span></li>
      </ul>
      <p>Teklifleri karşılaştırırken yalnızca komisyon oranına bakmayın. Valör süresi, taksitli satışlarda vade farkını kimin üstlendiği, iade ve itiraz (chargeback) süreçleri, kayıtlı kart (tek tıkla ödeme) desteği ve yıllık sabit ücretler toplam maliyeti belirler.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Güvenlik notu:</b> Kart bilgilerini kendi sunucunuzda asla saklamayın. 3D Secure doğrulamasını açık tutun ve kart verisinin doğrudan ödeme sağlayıcısının sayfasında ya da güvenli ödeme formunda işlendiği bir entegrasyon tercih edin. Böylece PCI DSS yükünün büyük kısmı ödeme sağlayıcısında kalır. Ayrıntılar için <a href="web-sitesi-guvenligi">web sitesi güvenliği</a> rehberimize göz atın.</div></div>
      <p>Havale/EFT, kapıda ödeme ve dijital cüzdanlar da dönüşümü artırabilir; ancak kapıda ödeme iade ve sahte sipariş riskini yükselttiği için kargo firmasının ücret politikasıyla birlikte değerlendirilmelidir.</p>
      <h2 id="yasal" class="bi-h2" data-n="04">ETBİS kaydı, mesafeli satış sözleşmesi ve diğer yasal yükümlülükler</h2>
      <p>Türkiye’de e-ticaret, 6563 sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun ve 6502 sayılı Tüketicinin Korunması Hakkında Kanun’a bağlı yönetmeliklerle düzenlenir. Kendi siteniz üzerinden satış yapıyorsanız şu başlıklar zorunludur:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. ETBİS kaydı —</b> Ticaret Bakanlığı’nın Elektronik Ticaret Bilgi Sistemi’ne (eticaret.gov.tr) e-Devlet ile giriş yapılarak, faaliyete başlamadan önce kayıt olunur. Bilgilerde değişiklik olduğunda 30 gün içinde güncelleme yapılır. Kayıt sonrası verilen doğrulama kodu/QR kod sitenin alt kısmında yayımlanır. Bakanlığın açıklamasına göre yalnızca yurt içindeki pazaryerleri üzerinden satış yapanların ayrıca kayıt yükümlülüğü yoktur.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Ön bilgilendirme formu ve mesafeli satış sözleşmesi —</b> Mesafeli Sözleşmeler Yönetmeliği’ne göre tüketici, siparişi onaylamadan önce satıcı bilgileri, ürünün temel nitelikleri, vergiler dahil toplam fiyat, teslimat ve cayma hakkı konusunda bilgilendirilmeli; bu onay ödeme adımında açıkça alınmalıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Cayma hakkı ve iade —</b> Tüketici, kural olarak malı teslim aldığı tarihten itibaren 14 gün içinde gerekçe göstermeden cayabilir. Satıcı, cayma bildirimini aldığı tarihten itibaren 14 gün içinde tahsil ettiği tüm ödemeleri iade etmekle yükümlüdür. Kişiye özel üretilen ya da hızlı bozulan ürünler gibi istisnalar yönetmelikte sayılmıştır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. KVKK metinleri —</b> Aydınlatma metni, gerektiğinde açık rıza metni ve çerez politikası. Üyelik, sipariş ve pazarlama izinleri ayrı ayrı ele alınmalıdır (bkz. <a href="kvkk-uyumlu-web-sitesi">KVKK uyumlu web sitesi</a>).</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Ticari elektronik ileti onayı —</b> Kampanya e-postası ve SMS göndermek için alıcının onayı alınmalı ve onaylar İleti Yönetim Sistemi’ne (İYS) kaydedilmelidir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>6. Künye bilgileri —</b> Unvan, adres, vergi numarası, MERSİS numarası (varsa), iletişim bilgileri ve tüketici şikâyetleri için başvuru yolları sitede kolay bulunur biçimde yer almalıdır.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Önemli:</b> Bu bölüm genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Mevzuat zaman zaman değişir; sözleşme metinlerinizi bir avukata ya da e-ticaret hukukunda deneyimli bir danışmana kontrol ettirin ve kaynak listesindeki resmi sayfaları takip edin.</div></div>
      <h2 id="kargo" class="bi-h2" data-n="05">Kargo, stok ve iade süreçlerini baştan kurgulayın</h2>
      <p>Müşteri deneyiminin yarısı sipariş verildikten sonra yaşanır. Hızlı ve şeffaf bir teslimat, tekrar eden alışverişin en güçlü nedenlerinden biridir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kargo anlaşması:</b> Birden fazla firmadan desi bazlı fiyat alın. Entegrasyon sayesinde gönderi barkodu ve takip numarası otomatik oluşsun, müşteriye SMS/e-posta ile gitsin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ücretsiz kargo eşiği:</b> Ortalama sepet tutarınızın biraz üzerinde bir eşik belirlemek, sepet büyütmenin en basit yollarından biridir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Stok senkronu:</b> Hem mağazada hem sitede hem pazaryerinde satış yapıyorsanız stok tek kaynaktan yönetilmeli; aksi halde olmayan ürünü satıp iptal etmek zorunda kalırsınız.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İade akışı:</b> Müşteri iade talebini hesabından başlatabilmeli, iade kargo kodu otomatik üretilmeli. Yasal 14 günlük iade süresini kaçırmamak için iade süreçlerini panelden izleyin.</span></li>
      </ul>
      <p>Paketleme de markanın bir parçasıdır: sağlam ama abartısız ambalaj, fatura ve kısa bir teşekkür notu, iade oranını ve olumsuz yorumları azaltır.</p>
      <h2 id="urun-seo" class="bi-h2" data-n="06">Satış yapan ürün sayfaları ve e-ticaret SEO’su</h2>
      <p>Bir e-ticaret sitesinde trafiği ve satışı getiren asıl sayfalar ürün ve kategori sayfalarıdır. Ziyaretçi ürünü elleyemediği için, sayfanın bu eksikliği kapatması gerekir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Özgün ürün açıklaması:</b> Üreticinin metnini kopyalamak yerine kullanım senaryosunu, ölçüleri, malzemeyi ve bakım bilgisini kendi cümlelerinizle yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gerçek ve çok açılı fotoğraflar:</b> Beyaz fon ürün görselinin yanında kullanım fotoğrafı ve mümkünse kısa video ekleyin; görselleri WebP/AVIF biçiminde sıkıştırın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Fiyat, stok ve teslim süresi:</b> “Yarın kargoda” gibi net bir teslimat bilgisi sepete ekleme oranını artırır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yapılandırılmış veri:</b> Product, Offer ve Review şemaları sayesinde fiyat ve puan bilgisi arama sonuçlarında görünebilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hız:</b> Özellikle mobilde yavaş açılan ürün sayfaları hem sıralamada hem dönüşümde kaybettirir. Ölçüm ve iyileştirme adımları için <a href="site-hizi-core-web-vitals">site hızı ve Core Web Vitals</a> yazımıza bakabilirsiniz.</span></li>
      </ul>
      <p>Kategori sayfalarına da kısa bir giriş metni yazın, filtre sayfalarının arama motorlarında binlerce kopya sayfa üretmesini kanonik etiketlerle engelleyin. Ödeme adımını mümkün olduğunca kısa tutun: üye olmadan alışveriş seçeneği, otomatik adres tamamlama ve tek sayfada ödeme, sepeti terk etme oranını belirgin şekilde düşürür.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>E-ticarette en iyi ürün sayfası, müşterinin aklına gelecek soruyu o sormadan cevaplayan sayfadır.</blockquote>
      <h2 id="yayin" class="bi-h2" data-n="07">Yayından sonra: trafik, ölçüm ve pazaryeri dengesi</h2>
      <p>Site yayına girdiği gün satış gelmeye başlamaz; trafiği sizin getirmeniz gerekir. İlk aylarda genellikle şu karışım iyi sonuç verir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Google Alışveriş ve arama reklamları</b> ile hızlı test, aynı anda <b>SEO</b> ile uzun vadeli organik trafik</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sosyal medyada ürün kullanım içerikleri ve mevcut müşterilere e-posta kampanyaları</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Pazaryerleri</b> ile bilinirlik kazanırken, tekrar eden müşteriyi kendi sitenize yönlendirmek</span></li>
      </ul>
      <p>Pazaryerleri hızlı satış sağlar ama yüksek komisyon alır ve müşteri ilişkisinin sahibi siz olmazsınız. Kendi siteniz ise marka değeri, müşteri verisi ve kâr marjı demektir. Sağlıklı strateji çoğu zaman ikisini birlikte yürütmektir.</p>
      <p>Ölçmediğinizi geliştiremezsiniz: Google Analytics 4’te e-ticaret olaylarını (ürün görüntüleme, sepete ekleme, ödeme başlatma, satın alma) kurun, Search Console’u bağlayın ve her ay en çok terk edilen adımı iyileştirmeye odaklanın.</p>
      <div class="bi-check">
        <div class="eyebrow">// YAYINA ALMADAN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Vergi kaydı açıldı, e-Arşiv/e-Fatura düzeni belirlendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>ETBİS kaydı yapıldı, doğrulama kodu sitenin altında mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ön bilgilendirme formu ve mesafeli satış sözleşmesi ödeme adımında onaylatılıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>KVKK aydınlatma metni, çerez politikası ve İYS onay akışı hazır mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sanal POS 3D Secure ile test edildi, iade senaryosu denendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kargo entegrasyonu, takip SMS’i ve iade kodu çalışıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ürün sayfaları mobilde hızlı açılıyor, yapılandırılmış veri ekli mi?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>E-ticaret sitesi kurmak için şirket gerekli mi?</summary><p>Düzenli ve sürekli satış yapacaksanız evet. Sanal POS başvurusu, kargo anlaşması ve ETBİS kaydı için vergi mükellefiyeti gerekir. Evde üretilen ürünleri sınırlı ölçekte satanlar için esnaf muafiyeti seçeneği bulunur, ancak uygunluğunuzu mali müşavirinize danışın.</p></details><details class="bi-faq-i"><summary>ETBİS kaydı zorunlu mu, ücretli mi?</summary><p>Kendi web sitesi veya mobil uygulaması üzerinden satış yapan işletmeler için ETBİS kaydı zorunludur ve faaliyete başlamadan önce yapılmalıdır. Kayıt eticaret.gov.tr üzerinden e-Devlet ile ücretsiz yapılır. Yalnızca yurt içi pazaryerlerinde satış yapanların ayrıca kayıt yükümlülüğü bulunmaz.</p></details><details class="bi-faq-i"><summary>Sanal POS mu ödeme kuruluşu mu daha avantajlı?</summary><p>Yeni başlayan işletmeler için ödeme kuruluşları hızlı başvuru ve tek entegrasyonla tüm kartlara taksit avantajı sunar. Ciro büyüdükçe bankalarla doğrudan sanal POS anlaşması yapmak komisyon açısından avantajlı hale gelebilir. Karar verirken komisyonun yanında valör süresi ve sabit ücretleri de karşılaştırın.</p></details><details class="bi-faq-i"><summary>E-ticaret sitesinde cayma hakkı kaç gündür?</summary><p>Mesafeli Sözleşmeler Yönetmeliği’ne göre tüketici kural olarak malı teslim aldığı tarihten itibaren 14 gün içinde gerekçe göstermeden cayabilir. Satıcı da cayma bildiriminden itibaren 14 gün içinde ödemeyi iade etmelidir. Kişiye özel üretilen ürünler gibi istisnalar yönetmelikte sayılmıştır.</p></details><details class="bi-faq-i"><summary>E-ticaret sitesi kurmak ne kadar sürer?</summary><p>Hazır bir altyapıyla, içerik ve ürünler hazırsa birkaç hafta içinde yayına çıkmak mümkündür. Özel tasarım veya entegrasyon gerektiren projelerde süre genellikle birkaç ayı bulur. Süreyi en çok uzatan kalem genellikle ürün içerikleri ve sanal POS onay süreçleridir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>E-ticaret sitesi kurmak; doğru şirket yapısı, ihtiyaca uygun altyapı, güvenli ödeme, eksiksiz yasal metinler ve sorunsuz bir teslimat zincirinin aynı anda kurulmasıdır. Bu parçalardan biri eksik kaldığında satış ya hiç başlamaz ya da ilk iade talebinde sorun çıkar.</p>
      <p>CYF Tech olarak hazır altyapıların yetmediği noktada ihtiyacınıza özel <a href="web-cozumleri">e-ticaret ve web yazılımı</a> geliştiriyor, ödeme ve kargo entegrasyonlarını uçtan uca kuruyoruz. Projenizi konuşmak isterseniz <a href="iletisim">bize yazın</a>; mevcut durumunuzu birlikte değerlendirelim.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://ticaret.gov.tr/ic-ticaret/elektronik-ticaret/elektronik-ticaret-bilgi-sistemi-etbis" target="_blank" rel="noopener nofollow">Ticaret Bakanlığı — Elektronik Ticaret Bilgi Sistemi (ETBİS)</a></li><li><a href="https://ticaret.gov.tr/ic-ticaret/sikca-sorulan-sorular/elektronik-ticaret" target="_blank" rel="noopener nofollow">Ticaret Bakanlığı — Elektronik ticaret sıkça sorulan sorular</a></li><li><a href="https://ticaret.gov.tr/haberler/internet-ve-telefon-vasitasiyla-yapilan-satislara-yeni-standartlar-geldi" target="_blank" rel="noopener nofollow">Ticaret Bakanlığı — İnternet ve telefonla yapılan satışlara yeni standartlar</a></li><li><a href="https://www.lexpera.com.tr/mevzuat/yonetmelikler/mesafeli-sozlesmeler-yonetmeligi" target="_blank" rel="noopener nofollow">Mesafeli Sözleşmeler Yönetmeliği (güncel metin, Lexpera)</a></li><li><a href="https://www.tcmb.gov.tr/wps/wcm/connect/TR/TCMB+TR/Main+Menu/Temel+Faaliyetler/Odeme+Hizmetleri/Elektronik+Para+Kuruluslari" target="_blank" rel="noopener nofollow">TCMB — Ödeme hizmetleri: elektronik para kuruluşları</a></li><li><a href="https://iys.org.tr/" target="_blank" rel="noopener nofollow">İleti Yönetim Sistemi (İYS)</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#sirket" data-n="01">Şirket ve vergi</a></li><li><a href="#altyapi" data-n="02">Altyapı seçimi</a></li><li><a href="#odeme" data-n="03">Sanal POS ve ödeme</a></li><li><a href="#yasal" data-n="04">Yasal yükümlülükler</a></li><li><a href="#kargo" data-n="05">Kargo ve iade</a></li><li><a href="#urun-seo" data-n="06">Ürün sayfaları ve SEO</a></li><li><a href="#yayin" data-n="07">Yayın ve büyüme</a></li><li><a href="#sss" data-n="08">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="mobil-uygulama-gelistirme-maliyeti"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Mobil Uygulama Geliştirme Maliyeti 2026: Fiyatı Belirleyen 8 Kalem</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="wordpress-mi-ozel-yazilim-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
