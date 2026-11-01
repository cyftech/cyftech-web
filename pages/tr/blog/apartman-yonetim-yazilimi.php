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
<title>Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey</title>
<meta name="description" content="Apartman yönetim yazılımı seçerken nelere bakılmalı? Aidat ve gecikme tazminatı, işletme projesi, online tahsilat, KVKK, mobil uygulama ve kontrol listesi.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey">
<meta property="og:description" content="Apartman yönetim yazılımı seçerken nelere bakılmalı? Aidat ve gecikme tazminatı, işletme projesi, online tahsilat, KVKK, mobil uygulama ve kontrol listesi.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/apartman-yonetim-yazilimi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/apartman-yonetim-yazilimi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/apartman-yonetim-yazilimi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey", "description": "Apartman yönetim yazılımı seçerken nelere bakılmalı? Aidat ve gecikme tazminatı, işletme projesi, online tahsilat, KVKK, mobil uygulama ve kontrol listesi.", "image": "https://cyftech.com.tr/assets/img/og/apartman-yonetim-yazilimi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/apartman-yonetim-yazilimi", "url": "https://cyftech.com.tr/apartman-yonetim-yazilimi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey", "item": "https://cyftech.com.tr/apartman-yonetim-yazilimi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Apartman aidatı gecikme faizi ne kadar?", "acceptedAnswer": {"@type": "Answer", "text": "634 sayılı Kat Mülkiyeti Kanunu’nun 20. maddesine göre gider veya avans payını zamanında ödemeyen kat maliki, geciktiği günler için aylık yüzde 5 gecikme tazminatı öder. Hesaplama yöntemi konusunda tereddüt varsa bir hukukçuya danışılması önerilir."}}, {"@type": "Question", "name": "Aidat borçlularının listesi asansöre asılabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. Kişisel Verileri Koruma Kurulu, aidat borcu olan sakinlerin bilgilerinin asansör, giriş ve koridor gibi ortak alanlarda ilan edilmesini hukuka aykırı buldu. Bilgilendirme, yalnızca ilgili kişilerin erişebildiği kanallarla yapılmalıdır."}}, {"@type": "Question", "name": "Küçük bir apartman için yönetim programı gerekli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Zorunlu değildir, ancak birkaç daireli apartmanlarda bile online ödeme, kişiye özel borç ekstresi ve duyuru özelliği yöneticinin işini ciddi biçimde kolaylaştırır ve yönetici değişiminde kayıtların kaybolmasını önler."}}, {"@type": "Question", "name": "Apartman yönetim yazılımı ücretleri neye göre belirlenir?", "acceptedAnswer": {"@type": "Answer", "text": "Genellikle daire veya bağımsız bölüm sayısına, seçilen modüllere ve platformlara göre belirlenir. SMS paketleri ve sanal POS komisyonları çoğu zaman ayrıca ücretlendirilir; karşılaştırmayı yıllık toplam maliyet üzerinden yapmak gerekir."}}, {"@type": "Question", "name": "Aidat borcu için dava açmadan önce ne yapılmalı?", "acceptedAnswer": {"@type": "Answer", "text": "1 Eylül 2023’ten bu yana Kat Mülkiyeti Kanunu’ndan doğan uyuşmazlıklarda dava açmadan önce arabulucuya başvurmak zorunludur. Kesinleşmiş işletme projesine dayanan alacaklar için icra takibi de bir seçenektir; süreç için avukattan destek alınmalıdır."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/apartman-yonetim-yazilimi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/apartman-yonetim-yazilimi">
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
      <div class="lang-menu"><a href="apartman-yonetim-yazilimi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/apartman-yonetim-yazilimi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/apartman-yonetim-yazilimi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/apartman-yonetim-yazilimi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/apartman-yonetim-yazilimi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/apartman-yonetim-yazilimi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>YAZILIM</span></div>
    <h1 class="h1" style="max-width:900px">Apartman yönetim yazılımı seçerken dikkat edilmesi gereken 9 şey.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Yazılım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/apartman-yonetim-yazilimi.svg" alt=""></div>
      <p class="bi-lead">Aidat defteri bir yerde, banka dökümü başka yerde, borç listesi WhatsApp grubunda, arıza talepleri yöneticinin telefonunda. Apartman yönetimi gönüllülük üzerine kurulu bir iş gibi görünür ama işin aslı <b>para, hukuk ve iletişim</b>tir; doğru yazılım bu üçünü tek yerde toplar.</p>
      <p>Birkaç daireli bir apartmandan yüzlerce bağımsız bölümlü toplu yapılara kadar, yönetimlerin önündeki sorular aynıdır: Aidatlar zamanında toplanıyor mu, kim ne kadar borçlu, para nereye harcandı, sakinler bilgilendiriliyor mu? Bir <b>apartman yönetim yazılımı</b> bu soruların cevabını herkesin görebileceği şeffaf bir düzene dönüştürür.</p>
      <p>Piyasada çok sayıda site yönetim programı var ve tanıtımları birbirine benziyor. Bu yazıda belirli bir ürünü değil, seçim yaparken bakmanız gereken kriterleri anlatıyoruz: Kat Mülkiyeti Kanunu’na uyum, aidat ve gecikme tazminatı hesabı, online tahsilat, KVKK, mobil erişim, raporlama ve destek. Yazının sonunda yazılımları karşılaştırırken kullanabileceğiniz bir kontrol listesi de bulacaksınız.</p>
      <h2 id="neden" class="bi-h2" data-n="01">Apartman yönetim yazılımı neden gerekli?</h2>
      <p>Defter ve Excel ile yönetim, birkaç daireli küçük apartmanlarda bir süre idare eder. Ancak daire sayısı arttıkça, yönetici değiştikçe ve kiracı sirkülasyonu yükseldikçe sorunlar büyür:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hesap karışıklığı:</b> Hangi ödemenin hangi aya ve hangi gider kalemine ait olduğu belirsizleşir; devir sırasında açıklar ortaya çıkar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Şeffaflık eksikliği:</b> Sakinler paranın nereye harcandığını göremediğinde güven azalır, toplantılar tartışmaya döner, tahsilat zorlaşır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yöneticinin zamanı:</b> Tek tek mesaj atmak, makbuz yazmak, borç hatırlatmak ve arızaları takip etmek gönüllü yöneticiler için ciddi bir yüktür.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hukuki risk:</b> Gecikme tazminatının yanlış hesaplanması ya da borçluların ortak alanlarda ilan edilmesi, yönetimi hukuki sorunlarla karşı karşıya bırakabilir.</span></li>
      </ul>
      <p>İyi bir yazılım bu yükü azaltırken her kat malikine kendi hesabını görme imkânı vererek yönetime duyulan güveni de artırır.</p>
      <h2 id="aidat-ve-borc" class="bi-h2" data-n="02">Aidat takibi ve gecikme tazminatı: Kanuna uygun hesap</h2>
      <p>Bir site yönetim programının kalbi aidat ve borç takibidir. 634 sayılı Kat Mülkiyeti Kanunu’nun 20. maddesine göre gider ve avans payını zamanında ödemeyen kat maliki, geciktiği günler için <b>aylık yüzde 5</b> gecikme tazminatı öder. Bu oran 2007’deki değişiklikle yüzde 10’dan yüzde 5’e indirilmiştir; hâlâ eski oranla hesap yapan şablonlarla karşılaşabilirsiniz.</p>
      <p>Yazılımı değerlendirirken şunlara bakın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Esnek tahakkuk:</b> Arsa payına göre, eşit ya da yönetim planındaki özel bir dağıtım anahtarına göre aidat tanımlanabiliyor mu? Yakıt, asansör, demirbaş gibi kalemler ayrı ayrı dağıtılabiliyor mu?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gecikme tazminatı ayarı:</b> Oran, son ödeme günü ve hesaplama yöntemi (aylık ya da gün bazında) yönetim kararına göre ayarlanabiliyor mu? Hesaplamanın nasıl yapıldığı ekstrede açıkça görünüyor mu?</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Malik ve kiracı ayrımı:</b> Kanun, kiracıyı da belirli şartlarda gider payından malikle birlikte sorumlu tutar. Yazılım malik ve kiracıyı ayrı tanımlayıp borcu doğru kişiye gösterebilmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kısmi ödeme ve mahsup:</b> Eksik ödemelerin hangi borca sayılacağı, avans ve iadeler net biçimde kaydedilmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kişiye özel ekstre:</b> Her daire kendi borç, ödeme ve gecikme geçmişini görebilmeli.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Toplantı öncesi kontrol:</b> Yazılımın demo hesabında kendi apartmanınızdan iki gerçek örnek (geç ödeyen bir daire, kısmi ödeme yapan bir daire) girip sonucun mevcut defterinizle tutup tutmadığına bakın. Hesap mantığını anlamanın en hızlı yolu budur.</div></div>
      <h2 id="isletme-projesi" class="bi-h2" data-n="03">İşletme projesi, karar defteri ve hesap verme</h2>
      <p>Kanun, yönetimden yıllık bir <b>işletme projesi</b> hazırlamasını ister. Kat Mülkiyeti Kanunu’nun 37. maddesine göre işletme projesine bildirimden itibaren yedi gün içinde itiraz edilebilir; kesinleşen işletme projesi ve kat malikleri kurulunun işletme giderlerine ilişkin kararları, İcra ve İflas Kanunu’nun 68. maddesinin birinci fıkrasında sayılan belgelerden kabul edilir. Bu da aidat alacağının takibinde işletme projesinin ne kadar önemli olduğunu gösterir.</p>
      <p>Yazılımın bu süreçte sunması gereken kolaylıklar:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Bütçe ve proje hazırlama:</b> Geçmiş yılın gerçekleşen giderlerinden yeni yılın işletme projesini oluşturup daire bazında paylara bölebilmek.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Bütçe–gerçekleşen karşılaştırması:</b> Yıl içinde hangi kalemde ne kadar sapma olduğunu gösteren raporlar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kasa ve banka hareketleri:</b> Toplanan paraların, Kanun’un öngördüğü şekilde yönetici sıfatıyla ana gayrimenkul adına açılan hesapta tutulması ve hareketlerin yazılıma işlenmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Belge arşivi:</b> Faturalar, sözleşmeler, toplantı tutanakları ve karar örneklerinin dijital kopyalarının saklanması. Karar defterinin noter onaylı olması gerektiğini unutmayın; yazılım bu defterin yerini değil, düzenini tutar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yıl sonu hesap raporu:</b> Kat malikleri kurulunda sunulacak gelir-gider tablosunun tek tıkla alınabilmesi.</span></li>
      </ul>
      <p>1 Eylül 2023’ten bu yana Kat Mülkiyeti Kanunu’ndan doğan uyuşmazlıklarda dava açmadan önce arabulucuya başvurmak zorunlu. Düzenli tutulmuş ekstre ve kayıtlar, hem arabuluculuk hem icra aşamasında yönetimin elini güçlendirir.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Not:</b> Bu yazıdaki hukuki bilgiler genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Gecikme tazminatı, icra ve arabuluculuk süreçleri için bir avukattan görüş alın.</div></div>
      <h2 id="tahsilat" class="bi-h2" data-n="04">Online aidat ödeme: sanal POS, havale eşleştirme ve hatırlatmalar</h2>
      <p>Tahsilatı kolaylaştırmanın en etkili yolu, ödemeyi zahmetsiz hâle getirmektir. Sakinlerin aidatını telefonundan kartla ödeyebilmesi, “bankaya gidip yatırırım” bahanesini ortadan kaldırır.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Sanal POS ile kartla ödeme:</b> Ödeme anında borçtan düşülmeli, makbuz otomatik oluşmalı. Komisyon oranlarını ve bu komisyonu kimin üstleneceğini önceden netleştirin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Havale / EFT eşleştirme:</b> Açıklamasız gelen havaleler yönetimlerin en büyük derdidir. Daireye özel referans kodu ya da banka hareketlerini içe aktarıp eşleştirme özelliği büyük zaman kazandırır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Otomatik hatırlatma:</b> Son ödeme gününden önce ve sonra SMS, e-posta veya uygulama bildirimiyle kişiye özel hatırlatma.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ödeme güvenliği:</b> Kart bilgileri yazılımda değil, lisanslı ödeme kuruluşunun altyapısında işlenmeli; 3D Secure desteklenmeli.</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Aidat tahsilatında en güçlü hatırlatma, ödemenin iki dokunuşla yapılabilmesidir.</blockquote>
      <h2 id="kvkk" class="bi-h2" data-n="05">KVKK uyumu: borç listesi, kamera ve sakin verileri</h2>
      <p>Apartman ve site yönetimleri; ad, telefon, daire numarası, borç bilgisi, araç plakası, kamera görüntüsü gibi pek çok kişisel veri işler. Kişisel Verileri Koruma Kurulu son dönemde bu alanda iki önemli konuya dikkat çekti:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Borç listeleri ortak alanlara asılmamalı:</b> Kurul’un 2026’da duyurduğu karara göre aidat borcu olan sakinlerin bilgilerinin asansör, bina girişi, koridor gibi ortak alanlara asılması, 6698 sayılı Kanun’a aykırı bulundu. Bilgilendirmenin yalnızca ilgili kişilerin erişebildiği kanallarla, örneğin kişiye özel bir uygulama veya kapalı bir kanal üzerinden yapılması öneriliyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Güvenlik kamerası kullanımı:</b> Kurum’un apartmanlarda güvenlik kamerası kullanımına ilişkin kamuoyu duyurusu, kamera sisteminin hem KVKK’ya hem Kat Mülkiyeti Kanunu’na uygun kurulması gerektiğini vurguluyor.</span></li>
      </ul>
      <p>Yazılım tarafında aranması gereken güvenceler:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Rol bazlı yetki:</b> Yönetici, denetçi, görevli ve sakin farklı ekranlar ve farklı veriler görmeli. Bir sakin yalnızca kendi borcunu görebilmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Veri konumu ve yedekleme:</b> Verilerin nerede barındırıldığı, ne sıklıkla yedeklendiği ve sözleşme bittiğinde verinin size nasıl teslim edileceği yazılı olmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Aydınlatma metni:</b> Sakinlere verilerinin hangi amaçla işlendiğini anlatan bir aydınlatma metni ve gerekiyorsa açık rıza mekanizması bulunmalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İşlem kayıtları:</b> Kimin hangi kaydı ne zaman değiştirdiği izlenebilmeli; bu hem güvenlik hem yönetici devri için önemlidir.</span></li>
      </ul>
      <p>KVKK’ya uygun dijital altyapı hakkında daha fazlası için <a href="kvkk-uyumlu-web-sitesi">KVKK uyumlu web sitesi</a> yazımıza göz atabilirsiniz.</p>
      <h2 id="iletisim-mobil" class="bi-h2" data-n="06">Sakin iletişimi, destek talepleri ve mobil uygulama</h2>
      <p>Yönetimle sakinler arasındaki iletişimin büyük kısmı bugün dağınık mesajlaşma gruplarında yürüyor. Bu gruplarda duyurular kaybolur, kişisel bilgiler herkese açık paylaşılır, arıza bildirimleri takipsiz kalır. Yazılımda şu özelliklere bakın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Duyuru modülü:</b> Su kesintisi, toplantı çağrısı, bakım çalışması gibi duyuruların uygulama bildirimi ve gerekirse SMS ile tüm sakinlere ya da belirli bloklara gönderilmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Destek talepleri:</b> Sakinin fotoğraf ekleyerek arıza bildirebildiği, talebin durumunu (alındı, işlemde, çözüldü) takip edebildiği bir talep sistemi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Mobil uygulama:</b> Sakinlerin borcunu görmesi, ödeme yapması, duyuruları okuması ve talep açması için iOS ve Android uygulaması. Yalnızca mobil uyumlu bir web sayfası da iş görür, ancak bildirim desteği için uygulama daha etkilidir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yönetici ekranı:</b> Yönetici ve muhasebe tarafında, detaylı işlemler için masaüstü veya web paneli. Büyük sitelerde yoğun veri girişi telefondan yapılmaz.</span></li>
      </ul>
      <h2 id="karsilastirma" class="bi-h2" data-n="07">Site yönetim programlarını karşılaştırma tablosu</h2>
      <p>Teklif aldığınız yazılımları aşağıdaki tabloyla yan yana koyabilirsiniz:</p>
      <table>
        <thead><tr><th>Kriter</th><th>Ne sormalı?</th></tr></thead>
        <tbody>
          <tr><td>Aidat ve tahakkuk</td><td>Arsa payı, eşit ve özel dağıtım anahtarları destekleniyor mu?</td></tr>
          <tr><td>Gecikme tazminatı</td><td>Oran ve yöntem ayarlanabiliyor mu, ekstrede gösteriliyor mu?</td></tr>
          <tr><td>Tahsilat</td><td>Sanal POS, havale eşleştirme, otomatik makbuz var mı? Komisyon kimde?</td></tr>
          <tr><td>Raporlama</td><td>İşletme projesi, bütçe–gerçekleşen, yıl sonu hesap raporu alınabiliyor mu?</td></tr>
          <tr><td>KVKK</td><td>Rol bazlı yetki, veri konumu, yedekleme, işlem kaydı nasıl?</td></tr>
          <tr><td>Platformlar</td><td>Web, iOS, Android, masaüstü seçenekleri neler?</td></tr>
          <tr><td>Geçiş</td><td>Mevcut Excel verileri ve açılış bakiyeleri aktarılabiliyor mu?</td></tr>
          <tr><td>Fiyatlandırma</td><td>Daire başına mı, sabit mi? SMS ve POS ücretleri dahil mi?</td></tr>
          <tr><td>Destek</td><td>Telefon, e-posta, eğitim; yönetici değiştiğinde devir desteği var mı?</td></tr>
        </tbody>
      </table>
      <p>Fiyatlandırmada yalnızca aylık ücrete değil, SMS paketleri, sanal POS komisyonları ve ek modül ücretleri dahil yıllık toplam maliyete bakın. Ucuz görünen bir paket, ek kalemlerle birlikte pahalıya gelebilir.</p>
      <h2 id="ornek" class="bi-h2" data-n="08">Bir örnek: KATSİS’i nasıl kurguladık?</h2>
      <p>Bu kriterlerin bir kısmını kendi ürünümüzü geliştirirken bizzat yaşadık. CYF Tech olarak geliştirdiğimiz <b>KATSİS</b>, apartman ve site yönetimini tek panelde toplamak amacıyla tasarlandı: aidat ve borç takibi, kasa, duyurular, destek talepleri, sanal POS ile online tahsilat ve SMS modülleri bir arada çalışıyor. Yöneticiler için web paneli ve Windows uygulaması, sakinler için iOS ve Android uygulamaları bulunuyor.</p>
      <p>Geliştirme sürecinde gördüğümüz en önemli ders şu oldu: Yönetimlerin asıl ihtiyacı çok sayıda özellik değil, aidat hesabının doğru, tahsilatın kolay ve iletişimin düzenli olması. Ürünü ve diğer işlerimizi <a href="projelerimiz">projelerimiz</a> sayfasında inceleyebilirsiniz. Hangi yazılımı seçerseniz seçin, yukarıdaki kontrol listesini kullanmanızı öneririz.</p>
      <div class="bi-check">
        <div class="eyebrow">// YAZILIM SEÇMEDEN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Aidat dağıtım anahtarı (arsa payı, eşit, özel) desteklenebiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Gecikme tazminatı oranı ve yöntemi yönetim kararına göre ayarlanabiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Online ödeme, havale eşleştirme ve otomatik makbuz var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Borç bilgileri yalnızca ilgili kişiye mi gösteriliyor?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Veri konumu, yedekleme ve sözleşme sonu veri teslimi yazılı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Mevcut kayıtlar ve açılış bakiyeleri aktarılabiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>SMS, POS ve ek modüller dahil yıllık toplam maliyet hesaplandı mı?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Apartman aidatı gecikme faizi ne kadar?</summary><p>634 sayılı Kat Mülkiyeti Kanunu’nun 20. maddesine göre gider veya avans payını zamanında ödemeyen kat maliki, geciktiği günler için aylık yüzde 5 gecikme tazminatı öder. Hesaplama yöntemi konusunda tereddüt varsa bir hukukçuya danışılması önerilir.</p></details><details class="bi-faq-i"><summary>Aidat borçlularının listesi asansöre asılabilir mi?</summary><p>Hayır. Kişisel Verileri Koruma Kurulu, aidat borcu olan sakinlerin bilgilerinin asansör, giriş ve koridor gibi ortak alanlarda ilan edilmesini hukuka aykırı buldu. Bilgilendirme, yalnızca ilgili kişilerin erişebildiği kanallarla yapılmalıdır.</p></details><details class="bi-faq-i"><summary>Küçük bir apartman için yönetim programı gerekli mi?</summary><p>Zorunlu değildir, ancak birkaç daireli apartmanlarda bile online ödeme, kişiye özel borç ekstresi ve duyuru özelliği yöneticinin işini ciddi biçimde kolaylaştırır ve yönetici değişiminde kayıtların kaybolmasını önler.</p></details><details class="bi-faq-i"><summary>Apartman yönetim yazılımı ücretleri neye göre belirlenir?</summary><p>Genellikle daire veya bağımsız bölüm sayısına, seçilen modüllere ve platformlara göre belirlenir. SMS paketleri ve sanal POS komisyonları çoğu zaman ayrıca ücretlendirilir; karşılaştırmayı yıllık toplam maliyet üzerinden yapmak gerekir.</p></details><details class="bi-faq-i"><summary>Aidat borcu için dava açmadan önce ne yapılmalı?</summary><p>1 Eylül 2023’ten bu yana Kat Mülkiyeti Kanunu’ndan doğan uyuşmazlıklarda dava açmadan önce arabulucuya başvurmak zorunludur. Kesinleşmiş işletme projesine dayanan alacaklar için icra takibi de bir seçenektir; süreç için avukattan destek alınmalıdır.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Doğru apartman yönetim yazılımı, yöneticinin yükünü hafifletir, aidat tahsilatını hızlandırır ve en önemlisi yönetime duyulan güveni artırır. Seçim yaparken parlak özellik listelerinden çok aidat hesabının Kanun’a uygunluğuna, tahsilat kolaylığına, KVKK güvencelerine ve geçiş ile destek süreçlerine odaklanın.</p>
      <p>Sitenize ya da yönettiğiniz binalara uygun çözümü konuşmak, KATSİS’i yakından görmek veya kendi yönetim süreçlerinize özel bir yazılım ihtiyacını değerlendirmek isterseniz <a href="iletisim">bize ulaşın</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://www.mevzuat.gov.tr/mevzuatmetin/1.5.634.pdf" target="_blank" rel="noopener nofollow">634 sayılı Kat Mülkiyeti Kanunu (mevzuat.gov.tr)</a></li><li><a href="https://www.kvkk.gov.tr/Icerik/8769/apartmanlarda-guvenlik-kamerasi-sistemi-kullaniminda-dikkat-edilecek-hususlara-dair-kamuoyu-duyurusu" target="_blank" rel="noopener nofollow">KVKK — Apartmanlarda güvenlik kamerası kullanımına dair kamuoyu duyurusu</a></li><li><a href="https://www.alomaliye.com/2026/03/31/toplu-yapilarda-apartman-site-sakinlerine-ait-borc-bilgilerinin-ortak-yerlere-asilmasi-hakkinda-kvkk-duyurusu/" target="_blank" rel="noopener nofollow">Borç bilgilerinin ortak yerlere asılması hakkında KVKK duyurusu (Alomaliye)</a></li><li><a href="https://adb.adalet.gov.tr" target="_blank" rel="noopener nofollow">7445 sayılı Kanun ile getirilen dava şartı arabuluculuk (Adalet Bakanlığı Arabuluculuk Daire Başkanlığı)</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#neden" data-n="01">Neden yazılım?</a></li><li><a href="#aidat-ve-borc" data-n="02">Aidat ve borç takibi</a></li><li><a href="#isletme-projesi" data-n="03">İşletme projesi</a></li><li><a href="#tahsilat" data-n="04">Online tahsilat</a></li><li><a href="#kvkk" data-n="05">KVKK ve veri güvenliği</a></li><li><a href="#iletisim-mobil" data-n="06">İletişim ve mobil</a></li><li><a href="#karsilastirma" data-n="07">Nasıl karşılaştırılır?</a></li><li><a href="#ornek" data-n="08">Bir örnek: KATSİS</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="wordpress-mi-ozel-yazilim-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="ozel-yazilim-gelistirme"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Özel Yazılım Geliştirme: Ne Zaman Gerekir, Süreç Nasıl İşler?</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="masaustu-mu-web-uygulamasi-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Masaüstü Uygulama mı Web Uygulaması mı? Doğru Seçim İçin Rehber</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="restoran-adisyon-sistemi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li></ul>
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
