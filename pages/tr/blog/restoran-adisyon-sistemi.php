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
<title>Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi</title>
<meta name="description" content="Restoran adisyon sistemi seçerken nelere dikkat edilmeli? Mutfak ekranı, ÖKC entegrasyonu, e-Adisyon, stok ve reçete, çok şube yönetimi ve kontrol listesi.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi">
<meta property="og:description" content="Restoran adisyon sistemi seçerken nelere dikkat edilmeli? Mutfak ekranı, ÖKC entegrasyonu, e-Adisyon, stok ve reçete, çok şube yönetimi ve kontrol listesi.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/restoran-adisyon-sistemi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/restoran-adisyon-sistemi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/restoran-adisyon-sistemi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi", "description": "Restoran adisyon sistemi seçerken nelere dikkat edilmeli? Mutfak ekranı, ÖKC entegrasyonu, e-Adisyon, stok ve reçete, çok şube yönetimi ve kontrol listesi.", "image": "https://cyftech.com.tr/assets/img/og/restoran-adisyon-sistemi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/restoran-adisyon-sistemi", "url": "https://cyftech.com.tr/restoran-adisyon-sistemi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi", "item": "https://cyftech.com.tr/restoran-adisyon-sistemi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Adisyon programı ile POS sistemi arasındaki fark nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Adisyon programı siparişlerin alınmasını, mutfağa iletilmesini ve masaların hesabını yönetir. POS ise ödemenin alındığı kasa ve kart cihazı tarafıdır. Günümüzde çoğu restoran yazılımı ikisini birleştirir ve yeni nesil yazarkasa ile entegre çalışır."}}, {"@type": "Question", "name": "e-Adisyon her restoran için zorunlu mu?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. GİB, belirlediği mükelleflere en az üç ay süre tanıyarak e-Adisyon zorunluluğu getirebilir; zorunluluk getirilmeyen işletmeler için uygulama isteğe bağlıdır. İşletmenizin durumunu mali müşavirinizle ve GİB duyurularıyla kontrol edin."}}, {"@type": "Question", "name": "Restoranlar kuver veya servis ücreti alabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Hayır. 30 Ocak 2026’da yürürlüğe giren Fiyat Etiketi Yönetmeliği değişikliğiyle zorunlu servis, masa ve kuver ücreti alınması yasaklandı. Müşteri yalnızca sipariş ettiği ürünlerin bedelini öder; bahşiş isteğe bağlıdır."}}, {"@type": "Question", "name": "Adisyon sistemi internet olmadan çalışır mı?", "acceptedAnswer": {"@type": "Answer", "text": "Sisteme göre değişir. Bazı çözümler yerel ağda çalışmaya devam edip bağlantı geldiğinde verileri eşitler, bazıları ise tamamen internete bağlıdır. Seçim yapmadan önce kesinti senaryosunu mutlaka sorun."}}, {"@type": "Question", "name": "Küçük bir kafe için adisyon sistemi gerekli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Az masalı bir kafede bile hesap hatalarını azaltmak, ürün bazlı satışları görmek ve yazarkasa ile çift girişten kurtulmak için basit bir adisyon sistemi fayda sağlar. İşletme büyüdükçe mutfak ekranı ve stok modülleri eklenebilir."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/restoran-adisyon-sistemi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/restoran-adisyon-sistemi">
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
      <div class="lang-menu"><a href="restoran-adisyon-sistemi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/restoran-adisyon-sistemi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/restoran-adisyon-sistemi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/restoran-adisyon-sistemi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/restoran-adisyon-sistemi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/restoran-adisyon-sistemi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">Restoran adisyon sistemi seçimi: POS ve adisyon programı rehberi.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Yazılım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/restoran-adisyon-sistemi.svg" alt=""></div>
      <p class="bi-lead">Cuma akşamı, salon dolu. Garson siparişi kâğıda yazıp mutfağa koşuyor, mutfak okunmayan bir fişi tahmin ediyor, kasada hesap tutmuyor. Bir restoranda kaybolan para çoğu zaman pahalı malzemede değil, <b>sipariş ile kasa arasındaki boşluklarda</b>dır.</p>
      <p>Bir <b>restoran adisyon sistemi</b>, siparişin masada alındığı andan hesabın kapandığı ana kadar her adımı kayıt altına alan yazılım ve donanım bütünüdür: garson ekranı ya da el terminali, mutfak ekranı veya yazıcısı, kasa ve yazarkasa bağlantısı, menü, stok ve raporlar. Doğru kurulduğunda servis hızlanır, hatalı siparişler azalır ve işletme sahibi gün sonunda neyin ne kadar sattığını rakamla görür.</p>
      <p>Piyasada çok sayıda adisyon programı var ve hepsi benzer vaatlerle geliyor. Bu yazıda belirli bir markayı değil, seçim yaparken bakmanız gereken kriterleri anlatıyoruz: temel modüller, mutfak ekranı, ÖKC ve e-belge uyumu, Türkiye’deki güncel menü ve fiyat kuralları, stok ve reçete yönetimi, çok şubeli yapı, donanım ve maliyet. Sonda karşılaştırma yaparken kullanabileceğiniz bir kontrol listesi bulacaksınız.</p>
      <h2 id="temel-moduller" class="bi-h2" data-n="01">Bir restoran adisyon sisteminde olması gereken modüller</h2>
      <p>İşletmenizin büyüklüğü ve konsepti ne olursa olsun, iyi bir adisyon programında şu temel parçalar bulunmalı:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Masa ve sipariş yönetimi:</b> Salon planı, masa birleştirme ve taşıma, kişi sayısı, sipariş notları (“soğansız”, “az pişmiş”) ve ürün varyasyonları.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Garson ekranı:</b> Tablet, telefon veya el terminalinden sipariş alma; siparişin anında mutfağa ve kasaya düşmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Mutfak ve bar ekranı:</b> Siparişlerin hazırlanacağı istasyona göre ayrılması, sıraya konması ve “hazır” bilgisinin garsona dönmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kasa ve ödeme:</b> Hesap bölme, kısmi ödeme, indirim ve ikram yetkileri, nakit, kart ve yemek kartı gibi farklı ödeme tipleri.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Menü yönetimi:</b> Ürün, kategori, fiyat ve saatlik menülerin (kahvaltı, öğle, happy hour) tek yerden yönetilmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Raporlar:</b> Gün sonu, ürün bazlı satış, personel performansı, iptal ve ikram raporları.</span></li>
      </ul>
      <h3>Paket servis ve entegrasyonlar</h3>
      <p>Paket servis yapıyorsanız telefon siparişi, müşteri adres kaydı ve kurye takibi de bu listeye eklenir. Online yemek sipariş platformlarından gelen siparişlerin ayrı bir tabletten elle yeniden girilmesi, yoğun saatlerde hata ve gecikmenin en sık nedenlerinden biridir; bu siparişlerin doğrudan adisyon sistemine ve mutfak ekranına düşmesi büyük fark yaratır. Benzer şekilde yemek kartlarıyla ödeme alıyorsanız, bu ödemelerin kasa raporlarında ayrı bir ödeme tipi olarak görünmesi gün sonu mutabakatını kolaylaştırır.</p>
      <p>Seçim yaparken bugün kullandığınız platformların ve muhasebe programınızın listesini çıkarın ve her biri için “entegrasyon hazır mı, ek ücretli mi, yoksa geliştirme mi gerekiyor?” sorusunu ayrı ayrı sorun.</p>
      <h2 id="mutfak-ekrani" class="bi-h2" data-n="02">Mutfak ekranı (KDS) ve anlık senkronizasyon</h2>
      <p>Kâğıt fişten mutfak ekranına geçiş, adisyon sistemlerinde en hızlı fark edilen iyileştirmelerden biridir. Mutfak ekranı (Kitchen Display System, KDS) siparişleri istasyonlara göre ayırır, bekleme süresini gösterir ve hangi masanın siparişinin geciktiğini herkesin görmesini sağlar.</p>
      <p>Değerlendirirken şu sorulara cevap arayın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gerçek zamanlı mı?</b> Garsonun girdiği sipariş, yaptığı değişiklik ya da iptal mutfak ve kasa ekranına saniyeler içinde yansımalı. Gecikmeli senkronizasyon, “bu iptal edilmişti” tartışmalarının ana kaynağıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İstasyon ayrımı var mı?</b> Sıcak mutfak, soğuk mutfak, bar ve tatlı istasyonları yalnızca kendi kalemlerini görebilmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hazırlık süreleri ölçülüyor mu?</b> Ürün bazında ortalama hazırlık süresi raporu, yoğun saatlerdeki darboğazları ortaya çıkarır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>İnternet kesilirse ne olur?</b> Sistemin yerel ağda çalışmaya devam edip edemediğini, bağlantı geri geldiğinde verilerin nasıl eşitlendiğini mutlaka sorun.</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Mutfak ekranı yalnızca kâğıdı kaldırmaz; mutfakla salon arasındaki tartışmayı da kaldırır.</blockquote>
      <h2 id="okc-ve-ebelge" class="bi-h2" data-n="03">Yazarkasa (ÖKC) entegrasyonu, e-Fatura ve e-Adisyon</h2>
      <p>Türkiye’de bir adisyon sistemini seçerken mali mevzuat uyumu, özellik listesinden daha önemlidir. Bakılması gereken üç başlık var:</p>
      <h3>Yeni nesil ödeme kaydedici cihaz (ÖKC) entegrasyonu</h3>
      <p>Perakende satışlarda yeni nesil ÖKC kullanımı Gelir İdaresi Başkanlığı (GİB) düzenlemeleriyle belirlenir; mevzuat bu cihazları bilgisayar bağlantılı ve EFT-POS özellikli olanlar şeklinde gruplandırır. Adisyon programının, kullandığınız ya da kullanacağınız ÖKC marka ve modeliyle entegre çalışıp çalışmadığını, yani hesabın kasaya tekrar elle girilmeden fişe dönüşüp dönüşmediğini kontrol edin. Çift giriş hem zaman kaybıdır hem de kayıt dışı satış riskini artırır.</p>
      <h3>e-Fatura ve e-Arşiv Fatura</h3>
      <p>Kurumsal müşterilere fatura kesiyorsanız ya da e-Fatura mükellefiyseniz, adisyon sisteminin e-Fatura ve e-Arşiv sağlayıcınızla entegre olması hesap kapanışını hızlandırır.</p>
      <h3>e-Adisyon</h3>
      <p>e-Adisyon, masada servis yapılan yeme-içme işletmelerinde adisyonun elektronik ortamda düzenlenmesini öngören bir e-belge uygulamasıdır. GİB, belirlediği mükelleflere en az üç ay süre tanıyarak e-Adisyon’a geçiş zorunluluğu getirebilir; zorunluluk getirilmeyen işletmeler için uygulama isteğe bağlıdır. Bu nedenle seçeceğiniz sistemin e-Adisyon’a geçişi destekleyip desteklemediğini veya yol haritasında olup olmadığını sormakta fayda var.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Not:</b> Mali mevzuat sık değişir ve kapsam işletmeden işletmeye farklılık gösterir. Bu bölüm genel bilgilendirme amaçlıdır, mali veya hukuki danışmanlık değildir; güncel yükümlülükleriniz için mali müşavirinize danışın ve GİB duyurularını takip edin.</div></div>
      <h2 id="menu-kurallari" class="bi-h2" data-n="04">Menü, fiyat listesi ve kuver yasağı: 2026 kuralları</h2>
      <p>Ticaret Bakanlığı’nın Fiyat Etiketi Yönetmeliği’nde son yıllarda yaptığı değişiklikler, adisyon sisteminizdeki menü ve fiyat ayarlarını doğrudan etkiliyor:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Giriş ve masada fiyat listesi:</b> 2024 başından itibaren restoran ve kafelerin fiyat listelerini işletme girişinde ve masalarda bulundurması gerekiyor. 2025’teki değişiklikle karekodlu dijital menü de sunulabiliyor; ancak bu, basılı fiyat listesi yükümlülüğünü ortadan kaldırmıyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Servis, masa ve kuver ücreti yasağı:</b> 30 Ocak 2026’da yürürlüğe giren değişiklikle tüketiciden zorunlu servis ücreti, masa ücreti veya kuver ücreti alınamıyor; istenmeden masaya getirilen ürünler ücretlendirilemiyor. Bahşiş ise yalnızca isteğe bağlı olabilir.</span></li>
      </ul>
      <p>Adisyon sisteminiz bu kurallara uyumlu olmalı: otomatik servis bedeli ekleyen ayarlar kapatılabilmeli, menü fiyatları tek merkezden güncellendiğinde dijital menüye, garson ekranına ve basılacak fiyat listesine aynı anda yansımalı. Fiyatı bir ekranda güncelleyip diğerinde unutmak, tüketici şikâyetlerine ve idari yaptırımlara yol açabilir.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Pratik öneri:</b> Fiyat değişikliklerini sistemde ileri tarihli olarak tanımlayabilen bir programla, zam günü sabahı bütün ekranlar ve menüler aynı anda güncellenir.</div></div>
      <h2 id="stok-recete" class="bi-h2" data-n="05">Stok, reçete ve maliyet takibi</h2>
      <p>Restoran kârlılığı satıştan çok maliyetle ilgilidir. Adisyon sistemi satışları kayıt altına alıyorsa, bir adım ötesi her satışın stoktan neyi düştüğünü bilmektir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Reçete tanımı:</b> Her menü ürünü için gramajlı reçete; ürün satıldıkça malzemelerin stoktan otomatik düşmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Porsiyon maliyeti:</b> Malzeme fiyatı değiştiğinde ürün maliyetinin ve kâr marjının otomatik güncellenmesi. Enflasyonist dönemlerde fiyatlamayı doğru yapmanın en sağlam yolu budur.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Fire ve sayım:</b> Fire kayıtları ile dönemsel sayım sonuçlarının teorik stokla karşılaştırılması; kaçak ve israfın görünür hâle gelmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kritik stok uyarısı:</b> Yoğun bir hafta sonundan önce eksik malzemelerin listelenmesi.</span></li>
      </ul>
      <p>Her işletmenin ilk günden tam stok modülüne ihtiyacı yoktur; ancak seçtiğiniz sistemin büyüdüğünüzde bu modülleri sunabilmesi, ileride yazılım değiştirme zahmetinden kurtarır.</p>
      <h2 id="cok-sube" class="bi-h2" data-n="06">Çok şubeli restoranlar için merkezi yönetim</h2>
      <p>İkinci şubeyi açtığınızda yazılımdan beklentiniz değişir. Her şubenin ayrı bir program kullandığı, raporların e-postayla toplandığı bir yapı kısa sürede yönetilemez hâle gelir. Çok şubeli işletmeler için aranması gerekenler:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Merkezi menü ve fiyat:</b> Menünün merkezden yönetilmesi, gerekirse şubeye özel fiyat ve ürün tanımlanabilmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Şube karşılaştırmalı raporlar:</b> Ciro, ürün karması, ortalama hesap tutarı ve iptal oranlarının şubeler arasında yan yana görülmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Personel ve yetki yönetimi:</b> Hangi personelin hangi şubede hangi yetkiyle (indirim, ikram, iptal) çalıştığının tek panelden yönetilmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kasa ve finans takibi:</b> Şube kasalarının, gün sonu kapanışlarının ve finansal raporların merkezden izlenmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Bulut tabanlı erişim:</b> İşletme sahibinin şubeye gitmeden, telefonundan anlık satışları görebilmesi.</span></li>
      </ul>
      <h2 id="donanim-maliyet" class="bi-h2" data-n="07">Donanım, kurulum ve adisyon programı fiyatları</h2>
      <p>Adisyon sisteminin maliyeti yalnızca yazılım lisansından oluşmaz. Teklifleri karşılaştırırken şu kalemleri ayrı ayrı görün:</p>
      <table>
        <thead><tr><th>Kalem</th><th>Neye dikkat etmeli?</th></tr></thead>
        <tbody>
          <tr><td>Yazılım</td><td>Aylık/yıllık abonelik mi, tek seferlik lisans mı? Şube, cihaz veya kullanıcı başına mı ücretlendiriliyor?</td></tr>
          <tr><td>Donanım</td><td>Kasa bilgisayarı, garson tableti veya el terminali, mutfak ekranı, fiş ve mutfak yazıcıları. Mevcut cihazlarınız kullanılabiliyor mu?</td></tr>
          <tr><td>ÖKC ve ödeme</td><td>Yeni nesil yazarkasa ve banka POS entegrasyonu için ek ücret var mı?</td></tr>
          <tr><td>Entegrasyonlar</td><td>e-Fatura sağlayıcısı, online sipariş platformları, yemek kartları ve muhasebe entegrasyonları dahil mi?</td></tr>
          <tr><td>Kurulum ve eğitim</td><td>Menü girişi, salon planı, personel eğitimi kim tarafından yapılıyor?</td></tr>
          <tr><td>Destek</td><td>Akşam ve hafta sonu, yani en yoğun saatlerde destek alınabiliyor mu?</td></tr>
        </tbody>
      </table>
      <p>Restoranlarda en kritik saatler, yazılım firmalarının mesai saatleri dışında kalır. Cuma akşamı sistem durduğunda telefonu açan biri yoksa, ucuz yazılım çok pahalıya gelir. Teklifte destek saatlerini ve müdahale sürelerini yazılı olarak isteyin.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Deneme süresini akıllıca kullanın:</b> Demoyu boş bir ofiste değil, mümkünse yoğun bir serviste deneyin. Garsonların sistemi ne kadar sürede öğrendiği, sizin için en gerçekçi ölçüttür.</div></div>
      <h2 id="ornek" class="bi-h2" data-n="08">Bir örnek: RestaurantBill’i nasıl kurguladık?</h2>
      <p>Yukarıdaki kriterlerin bir kısmını kendi ürünümüzü geliştirirken yakından tecrübe ettik. CYF Tech olarak geliştirdiğimiz <b>RestaurantBill</b>, çok şubeli restoranlar için tasarlanmış bir adisyon ve mutfak ekranı sistemi. Garson, mutfak ve kasa ekranları siparişleri anlık olarak paylaşıyor; şube, personel, menü, kasa ve finansal raporlar tek panelden yönetiliyor.</p>
      <p>Bu süreçte öğrendiğimiz en önemli şey, restoran yazılımının ofiste değil salonda test edilmesi gerektiği oldu: bir özelliğin değeri, yoğun serviste garsonun onu kaç saniyede kullanabildiğiyle ölçülüyor. Ürünü <a href="projelerimiz">projelerimiz</a> sayfasında inceleyebilirsiniz. Hangi sistemi seçerseniz seçin, aşağıdaki kontrol listesini teklifleri karşılaştırırken kullanmanızı öneririz. Restoranınızın web sitesini de yenilemeyi düşünüyorsanız <a href="web-cozumleri">web çözümlerimize</a> göz atabilirsiniz.</p>
      <div class="bi-check">
        <div class="eyebrow">// ADİSYON SİSTEMİ SEÇMEDEN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Garson, mutfak ve kasa ekranları gerçek zamanlı senkron mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>İnternet kesildiğinde sistem çalışmaya devam ediyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kullandığınız ÖKC ve e-Fatura sağlayıcısıyla entegrasyon var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Menü ve fiyat değişiklikleri tüm ekranlara aynı anda yansıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Otomatik servis veya kuver bedeli ekleyen ayarlar kapatılabiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Stok, reçete ve çok şube modülleri ihtiyaç olduğunda eklenebiliyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Akşam ve hafta sonu destek saatleri yazılı olarak taahhüt ediliyor mu?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Adisyon programı ile POS sistemi arasındaki fark nedir?</summary><p>Adisyon programı siparişlerin alınmasını, mutfağa iletilmesini ve masaların hesabını yönetir. POS ise ödemenin alındığı kasa ve kart cihazı tarafıdır. Günümüzde çoğu restoran yazılımı ikisini birleştirir ve yeni nesil yazarkasa ile entegre çalışır.</p></details><details class="bi-faq-i"><summary>e-Adisyon her restoran için zorunlu mu?</summary><p>Hayır. GİB, belirlediği mükelleflere en az üç ay süre tanıyarak e-Adisyon zorunluluğu getirebilir; zorunluluk getirilmeyen işletmeler için uygulama isteğe bağlıdır. İşletmenizin durumunu mali müşavirinizle ve GİB duyurularıyla kontrol edin.</p></details><details class="bi-faq-i"><summary>Restoranlar kuver veya servis ücreti alabilir mi?</summary><p>Hayır. 30 Ocak 2026’da yürürlüğe giren Fiyat Etiketi Yönetmeliği değişikliğiyle zorunlu servis, masa ve kuver ücreti alınması yasaklandı. Müşteri yalnızca sipariş ettiği ürünlerin bedelini öder; bahşiş isteğe bağlıdır.</p></details><details class="bi-faq-i"><summary>Adisyon sistemi internet olmadan çalışır mı?</summary><p>Sisteme göre değişir. Bazı çözümler yerel ağda çalışmaya devam edip bağlantı geldiğinde verileri eşitler, bazıları ise tamamen internete bağlıdır. Seçim yapmadan önce kesinti senaryosunu mutlaka sorun.</p></details><details class="bi-faq-i"><summary>Küçük bir kafe için adisyon sistemi gerekli mi?</summary><p>Az masalı bir kafede bile hesap hatalarını azaltmak, ürün bazlı satışları görmek ve yazarkasa ile çift girişten kurtulmak için basit bir adisyon sistemi fayda sağlar. İşletme büyüdükçe mutfak ekranı ve stok modülleri eklenebilir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Doğru restoran adisyon sistemi, servisinizi hızlandırır, sipariş ve hesap hatalarını azaltır, maliyetlerinizi görünür kılar ve mali mevzuata uyumu kolaylaştırır. Seçim yaparken parlak demolardan çok gerçek zamanlı senkronizasyona, ÖKC ve e-belge uyumuna, güncel menü kurallarına, büyüme ihtimalinize ve yoğun saatlerdeki desteğe odaklanın.</p>
      <p>İşletmenize uygun adisyon kurgusunu konuşmak, RestaurantBill’i yakından görmek ya da kendi iş akışınıza özel bir çözüm değerlendirmek isterseniz <a href="iletisim">bizimle iletişime geçin</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://ticaret.gov.tr/haberler/ticaret-bakanligi-tarafindan-fiyat-etiketi-yonetmeliginde-degisiklik-yapildi" target="_blank" rel="noopener nofollow">Ticaret Bakanlığı — Fiyat Etiketi Yönetmeliği’nde değişiklik (30 Ocak 2026)</a></li><li><a href="https://ynokc.gib.gov.tr" target="_blank" rel="noopener nofollow">GİB — Yeni Nesil Ödeme Kaydedici Cihazlar</a></li><li><a href="https://ebelge.gib.gov.tr" target="_blank" rel="noopener nofollow">GİB — e-Belge uygulamaları (e-Fatura, e-Arşiv, e-Adisyon)</a></li><li><a href="https://sovos.com/tr/blog/kdv/e-adisyon-donemi-basliyor-beklenen-kilavuz-yayimlandi/" target="_blank" rel="noopener nofollow">Sovos — E-Adisyon kılavuzu</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#temel-moduller" data-n="01">Temel modüller</a></li><li><a href="#mutfak-ekrani" data-n="02">Mutfak ekranı</a></li><li><a href="#okc-ve-ebelge" data-n="03">ÖKC ve e-belge uyumu</a></li><li><a href="#menu-kurallari" data-n="04">Menü ve fiyat kuralları</a></li><li><a href="#stok-recete" data-n="05">Stok ve reçete</a></li><li><a href="#cok-sube" data-n="06">Çok şubeli yönetim</a></li><li><a href="#donanim-maliyet" data-n="07">Donanım ve maliyet</a></li><li><a href="#ornek" data-n="08">Bir örnek: RestaurantBill</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="wordpress-mi-ozel-yazilim-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="ozel-yazilim-gelistirme"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Özel Yazılım Geliştirme: Ne Zaman Gerekir, Süreç Nasıl İşler?</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="masaustu-mu-web-uygulamasi-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Masaüstü Uygulama mı Web Uygulaması mı? Doğru Seçim İçin Rehber</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="apartman-yonetim-yazilimi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li></ul>
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
