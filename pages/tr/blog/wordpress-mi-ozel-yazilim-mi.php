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
<title>WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi</title>
<meta name="description" content="WordPress mi özel yazılım mı? Hazır altyapı ile özel web yazılımını maliyet, güvenlik, performans ve ölçeklenebilirlik açısından karşılaştırın, doğru kararı verin.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi">
<meta property="og:description" content="WordPress mi özel yazılım mı? Hazır altyapı ile özel web yazılımını maliyet, güvenlik, performans ve ölçeklenebilirlik açısından karşılaştırın, doğru kararı verin.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/wordpress-mi-ozel-yazilim-mi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi", "description": "WordPress mi özel yazılım mı? Hazır altyapı ile özel web yazılımını maliyet, güvenlik, performans ve ölçeklenebilirlik açısından karşılaştırın, doğru kararı verin.", "image": "https://cyftech.com.tr/assets/img/og/wordpress-mi-ozel-yazilim-mi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi", "url": "https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi", "item": "https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "WordPress güvenli mi?", "acceptedAnswer": {"@type": "Answer", "text": "WordPress çekirdeği düzenli güncellenen ve oldukça güvenli bir yazılımdır. Güvenlik açıklarının büyük çoğunluğu eklenti ve temalardan kaynaklanır. Az sayıda, güvenilir eklenti kullanılan ve düzenli bakımı yapılan bir WordPress sitesi güvenli şekilde işletilebilir."}}, {"@type": "Question", "name": "Özel yazılım web sitesi daha mı pahalı?", "acceptedAnswer": {"@type": "Answer", "text": "Başlangıç maliyeti genellikle daha yüksektir. Ancak lisans yenilemeleri, eklenti bağımlılığı ve manuel iş yükü hesaba katıldığında, karmaşık iş süreçleri olan projelerde özel yazılım üç-beş yıllık toplam maliyette daha ekonomik olabilir."}}, {"@type": "Question", "name": "WordPress SEO için yeterli mi?", "acceptedAnswer": {"@type": "Answer", "text": "Evet, doğru kurulduğunda WordPress SEO açısından yeterlidir. Sıralamayı altyapının adından çok içerik kalitesi, site hızı, teknik yapı ve kullanıcı deneyimi belirler. Özel yazılımda da aynı teknik SEO kurallarının baştan uygulanması gerekir."}}, {"@type": "Question", "name": "WordPress sitesi sonradan özel yazılıma taşınabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Taşınabilir. İçerikler, görseller ve adres yapısı yeni sisteme aktarılır, değişen adresler için 301 yönlendirmesi yapılır. Planlı yapılan bir geçişte arama motoru görünürlüğü korunabilir."}}, {"@type": "Question", "name": "E-ticaret için WordPress mi, hazır paket mi, özel yazılım mı?", "acceptedAnswer": {"@type": "Answer", "text": "Az ürünlü, standart satış yapan bir mağaza için hazır paketler ya da WordPress tabanlı çözümler hızlı bir başlangıçtır. Bayi fiyatlandırması, ERP entegrasyonu veya kendine özgü sipariş akışı varsa özel yazılım daha sağlıklı sonuç verir."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/wordpress-mi-ozel-yazilim-mi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/wordpress-mi-ozel-yazilim-mi">
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
      <div class="lang-menu"><a href="wordpress-mi-ozel-yazilim-mi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/wordpress-mi-ozel-yazilim-mi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/wordpress-mi-ozel-yazilim-mi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/wordpress-mi-ozel-yazilim-mi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/wordpress-mi-ozel-yazilim-mi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/wordpress-mi-ozel-yazilim-mi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">WordPress mi özel yazılım mı? Doğru altyapıyı seçme rehberi.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Yazılım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/wordpress-mi-ozel-yazilim-mi.svg" alt=""></div>
      <p class="bi-lead">Web sitesi projelerinde ilk büyük yol ayrımı tasarım değil, altyapıdır: <b>WordPress gibi hazır bir sistem mi, yoksa size özel yazılmış bir yazılım mı?</b> Yanlış seçim, ya gereksiz yere pahalı bir proje ya da iki yıl sonra baştan yapılması gereken bir site demektir.</p>
      <p>İnternette bu sorunun cevabı genellikle taraflı verilir: WordPress uzmanları her şeyin WordPress ile yapılabileceğini, yazılım firmaları da hazır sistemlerin yetersiz olduğunu söyler. Gerçek ise işinizin ne gerektirdiğine bağlıdır.</p>
      <p>Bu rehberde hazır altyapı seçeneklerini, WordPress’in güçlü ve zayıf yanlarını, özel yazılımın ne zaman gerçekten gerekli olduğunu ve kararı verirken kullanabileceğiniz basit bir yöntemi anlatıyoruz. Biz iki yolu da uygulayan bir ekip olarak, hangisinin hangi durumda daha mantıklı olduğunu kendi projelerimizden örneklerle aktarıyoruz.</p>
      <h2 id="secenekler" class="bi-h2" data-n="01">Hazır altyapı ve özel yazılım: seçenekleri tanıyalım</h2>
      <p>“Hazır altyapı” tek bir şey değildir. Karar vermeden önce masadaki seçenekleri ayırmak gerekir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Açık kaynak içerik yönetim sistemleri (CMS):</b> WordPress en yaygın örnektir. Yazılım ücretsizdir; tema, eklenti, barındırma ve geliştirme emeği için ödeme yaparsınız. Kendi sunucunuzda çalışır, kodu size aittir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kiralık site kurucular (SaaS):</b> Sürükle-bırak editörlü, aylık abonelikle çalışan platformlar. Hızlı başlarsınız ama altyapı sağlayıcıya aittir; aboneliği bıraktığınızda siteniz de gider.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hazır e-ticaret paketleri:</b> Türkiye’de yaygın kiralık e-ticaret altyapıları; sanal POS, kargo ve pazaryeri entegrasyonlarıyla gelir, kapsamı paketle sınırlıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Özel yazılım:</b> İşinizin kurallarına göre sıfırdan ya da bir framework üzerine geliştirilen sistem. Ne gerekiyorsa o vardır; fazlası yoktur.</span></li>
      </ul>
      <p>Bu yazıda karşılaştırmayı en sık sorulan ikili üzerinden, yani WordPress ile özel yazılım arasında yapacağız; ancak söylediklerimizin çoğu diğer hazır sistemler için de geçerlidir.</p>
      <h2 id="wordpress-guclu" class="bi-h2" data-n="02">WordPress’in güçlü olduğu durumlar</h2>
      <p>WordPress’in yaygınlığı tesadüf değil. W3Techs verilerine göre Ekim 2026 itibarıyla dünyadaki tüm web sitelerinin yaklaşık yüzde 39,5’i, içerik yönetim sistemi bilinen sitelerin ise yaklaşık yüzde 58’i WordPress kullanıyor. Bu yaygınlığın size sağladığı avantajlar şunlardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hızlı başlangıç:</b> Kurumsal tanıtım siteleri ve bloglar için temel ihtiyaçlar hazırdır; proje süresi kısalır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kolay içerik yönetimi:</b> Ekibiniz teknik bilgi olmadan sayfa, haber ve blog yazısı ekleyebilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Geniş eklenti ekosistemi:</b> Form, çok dil, SEO, galeri gibi yaygın ihtiyaçlar için hazır çözümler vardır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Geliştirici bulmak kolay:</b> Ajansınızı değiştirdiğinizde siteyi devralacak birini bulmak görece kolaydır.</span></li>
      </ul>
      <p>Kısacası amacınız içerik yayınlamak, kurumsal kimliğinizi göstermek ve teklif toplamaksa, iyi kurulmuş bir WordPress sitesi çoğu KOBİ için fazlasıyla yeterlidir.</p>
      <p>Tipik örnekler: bir hukuk bürosunun tanıtım sitesi, bir mimarlık ofisinin proje portfolyosu, düzenli makale yayınlayan bir klinik ya da birkaç dilde ürün kataloğu gösteren bir üretici. Bu projelerde ziyaretçi içerik okur ve iletişime geçer; sistemin arka planda karmaşık bir iş yapması gerekmez. Burada önemli olan, temayı hafif tutmak, eklenti sayısını gerçekten gerekli olanlarla sınırlamak ve güncellemeleri düzenli yapmaktır.</p>
      <h2 id="wordpress-sinirlar" class="bi-h2" data-n="03">WordPress’in zayıf yanları: eklenti, güvenlik ve performans</h2>
      <p>WordPress’in en büyük gücü olan eklenti ekosistemi, aynı zamanda en büyük riskidir. Her eklenti farklı bir geliştiriciden gelir, farklı bir güncelleme takvimine sahiptir ve sitenize ek kod yükler.</p>
      <p>Güvenlik firması Patchstack’in 2026 raporuna göre WordPress ekosisteminde 2025 yılında 11.334 yeni güvenlik açığı kaydedildi; bu açıkların yaklaşık yüzde 91’i eklentilerde, yüzde 9’u temalarda bulundu, WordPress çekirdeğinde ise yalnızca birkaç düşük öncelikli açık raporlandı. Aynı rapora göre açıkların yüzde 46’sı kamuya duyurulduğunda henüz bir yamaya sahip değildi.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Ne anlama geliyor?</b> Sorun WordPress’in kendisi değil, kontrolsüz eklenti kullanımı ve güncellenmeyen sitelerdir. 30 eklentili, bakımı yapılmayan bir WordPress sitesi ciddi bir risk taşır; az eklentili ve düzenli güncellenen bir site ise oldukça güvenlidir.</div></div>
      <p>Diğer sınırlar:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Performans:</b> Ağır sayfa oluşturucular ve çok amaçlı temalar, sayfaya kullanılmayan yüzlerce kilobayt kod ekleyebilir. Bu da Core Web Vitals skorlarını düşürür.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Karmaşık iş kuralları:</b> Rol bazlı yetkiler, onay akışları, özel fiyatlandırma ya da ERP entegrasyonu eklentilerle “yamalandığında” sistem kırılganlaşır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Güncelleme bağımlılığı:</b> Bir eklentinin güncellemesi diğerini bozabilir; düzenli bakım şarttır.</span></li>
      </ul>
      <h2 id="ozel-yazilim" class="bi-h2" data-n="04">Özel yazılım ne zaman gerçekten gerekli?</h2>
      <p>Özel yazılım, “daha prestijli” olduğu için değil, işinizin hazır bir sistemin kalıbına sığmadığı durumlarda anlamlıdır. Şu işaretlerden birkaçını görüyorsanız özel yazılımı ciddi biçimde düşünmelisiniz:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Site aslında bir uygulama:</b> Kullanıcılar giriş yapıyor, kayıt oluşturuyor, işlem yapıyor, raporlara bakıyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kendine özgü iş süreçleriniz var:</b> Teklif hesaplama, rezervasyon kuralları, bayi bazlı fiyat ya da çok adımlı onay akışları.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yoğun entegrasyon gerekiyor:</b> ERP, muhasebe, e-Fatura, sanal POS, SMS ve kargo sistemleriyle sürekli veri alışverişi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Aynı veri birden çok kanalda kullanılacak:</b> Web paneli, mobil uygulama ve masaüstü uygulaması tek bir sunucudan beslenecek.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Ürünün kendisi yazılım:</b> Abonelikle satacağınız bir platform kuruyorsunuz.</span></li>
      </ul>
      <p>Kendi ürünümüz KATSİS buna iyi bir örnektir: apartman ve site yönetiminde aidat ve borç takibi, kasa, duyuru, destek talepleri, sanal POS ve SMS aynı sistemde; web, iOS, Android ve Windows uygulamaları tek bir altyapıdan çalışıyor. Bunu bir CMS’in üzerine eklentilerle kurmak mümkün olmazdı. Bu tür projeleri <a href="projelerimiz">projelerimiz</a> sayfasında inceleyebilirsiniz.</p>
      <p>Özel yazılımın süreci, kapsam çıkarma ve aşamalı geliştirme yöntemlerini <a href="ozel-yazilim-gelistirme">özel yazılım geliştirme</a> yazımızda ayrıntılı anlattık.</p>
      <h2 id="karsilastirma" class="bi-h2" data-n="05">WordPress ve özel yazılım karşılaştırma tablosu</h2>
      <table>
        <thead><tr><th>Kriter</th><th>WordPress (hazır altyapı)</th><th>Özel yazılım</th></tr></thead>
        <tbody>
          <tr><td>Başlangıç maliyeti</td><td>Düşük – orta</td><td>Orta – yüksek</td></tr>
          <tr><td>Yayına çıkış süresi</td><td>Birkaç hafta</td><td>Kapsama göre birkaç ay</td></tr>
          <tr><td>İçerik yönetimi</td><td>Hazır ve kolay</td><td>İhtiyaca göre tasarlanır</td></tr>
          <tr><td>Esneklik</td><td>Tema ve eklentilerle sınırlı</td><td>İş kurallarınıza birebir uyar</td></tr>
          <tr><td>Performans</td><td>İyi kurulumda iyi, ağır temalarda zayıf</td><td>Yalnızca gereken kod yüklenir</td></tr>
          <tr><td>Güvenlik</td><td>Eklenti sayısı ve bakımla doğrudan ilişkili</td><td>Saldırı yüzeyi küçük; güvenlik ekibin disiplinine bağlı</td></tr>
          <tr><td>Entegrasyon</td><td>Hazır eklenti varsa kolay, yoksa zor</td><td>Baştan tasarlanır</td></tr>
          <tr><td>Bakım</td><td>Sık güncelleme gerekir</td><td>Daha seyrek ama uzman ister</td></tr>
          <tr><td>Bağımlılık</td><td>Eklenti geliştiricilerine</td><td>Yazılımı geliştiren ekibe</td></tr>
        </tbody>
      </table>
      <p>Tabloda “kazanan” yok; her satır sizin önceliğinize göre ağırlık kazanır. Hızlı yayına çıkmak birinci önceliğinizse sol sütun, uzun vadeli esneklik ve entegrasyon birinci önceliğinizse sağ sütun öne çıkar.</p>
      <h2 id="toplam-maliyet" class="bi-h2" data-n="06">Maliyeti doğru hesaplamak: toplam sahip olma maliyeti</h2>
      <p>Altyapı kararında en sık yapılan hata, yalnızca kurulum bedelini karşılaştırmaktır. Doğru karşılaştırma üç yıllık toplam maliyete bakar:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kurulum:</b> Tasarım, geliştirme, içerik girişi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Lisanslar:</b> Premium tema ve eklentilerin yıllık yenilemeleri (çoğu döviz bazlıdır).</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Bakım:</b> Güncellemeler, yedekleme, güvenlik takibi, hata düzeltmeleri.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Geçici çözümler:</b> Hazır sistemin yapamadığı işler için harcanan manuel emek ya da ek eklentiler.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yeniden yapım riski:</b> Büyüdüğünüzde sistemi baştan kurmak zorunda kalırsanız ödeyeceğiniz bedel.</span></li>
      </ul>
      <p>Basit bir kurumsal site için WordPress üç yılın sonunda da genellikle daha ekonomiktir. Ancak sitenizde her gün manuel olarak yapılan işler varsa, özel yazılımın otomasyonla geri kazandırdığı zaman kısa sürede farkı kapatabilir. Fiyat kalemlerinin genel resmini <a href="web-sitesi-fiyatlari">web sitesi fiyatları</a> yazımızda bulabilirsiniz.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>En ucuz altyapı, iki yıl sonra baştan kurmak zorunda kalmadığınız altyapıdır.</blockquote>
      <h2 id="yanilgilar" class="bi-h2" data-n="07">Altyapı seçiminde sık duyulan 4 yanılgı</h2>
      <p>Teklif görüşmelerinde sık karşılaştığımız bazı inanışlar, kararı yanlış yöne çekebiliyor. En yaygın dördünü kısaca düzeltelim:</p>
      <h3>“WordPress ücretsiz, o halde site de ucuz olur.”</h3>
      <p>Yazılımın lisansı ücretsizdir ama sitenin tasarımı, kurulumu, içerik girişi, premium eklentiler, barındırma ve bakımı ücretlidir. Ücretsiz olan yalnızca başlangıç noktasıdır; iyi kurulmuş bir WordPress sitesi de profesyonel emek ister.</p>
      <h3>“Özel yazılım her zaman daha hızlıdır.”</h3>
      <p>Özel yazılım hızlı olma potansiyeline sahiptir çünkü yalnızca gereken kodu yükler. Ancak optimize edilmemiş görseller, kötü yazılmış veritabanı sorguları ya da zayıf bir sunucu, özel yazılımı da yavaşlatır. Hız, altyapının adından çok uygulamanın kalitesine bağlıdır.</p>
      <h3>“Özel yazılımda içeriği kendim güncelleyemem.”</h3>
      <p>İyi bir özel yazılım projesi, içerik ekibi için kullanımı kolay bir yönetim paneliyle birlikte gelir. Panelde neyin düzenlenebileceği projenin başında konuşulmalı ve kapsama yazılmalıdır.</p>
      <h3>“Hazır sistem seçersem ileride büyüyemem.”</h3>
      <p>Büyümek her zaman baştan yapmak anlamına gelmez. Doğru kurulmuş bir hazır altyapı, ihtiyaç doğduğunda özel bir modül ya da ayrı bir uygulama ile genişletilebilir. Önemli olan, başlangıçta bu genişlemeyi engelleyecek kısa yollara sapmamaktır.</p>
      <h2 id="karar" class="bi-h2" data-n="08">Karar vermek için 5 adımlı yöntem</h2>
      <p>Toplantılarda müşterilerimizle birlikte uyguladığımız basit yöntem şudur:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım —</b> Sitenin ziyaretçiye ve ekibinize yaptıracağı işleri madde madde yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım —</b> Her maddeyi “içerik göstermek” ya da “işlem yapmak” olarak işaretleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım —</b> Bağlanması gereken dış sistemleri (ERP, muhasebe, ödeme, kargo) listeleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım —</b> İki yıl sonra sitenin ne yapıyor olmasını beklediğinizi yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım —</b> Maddelerin çoğu “içerik göstermek” ise hazır altyapı; “işlem yapmak” ve entegrasyon ağırlıktaysa özel yazılım.</span></li>
      </ul>
      <p>Arada kalan projeler için hibrit bir yol da mümkündür: Kurumsal sayfalar ve blog bir CMS ile yönetilirken müşteri paneli, teklif motoru ya da bayi portalı ayrı bir özel uygulama olarak geliştirilir. Böylece içerik ekibi rahat çalışır, kritik iş süreçleri de sağlam bir altyapıda durur.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Kısa ipucu:</b> Hangi yolu seçerseniz seçin, kaynak kodun, alan adının ve sunucu erişiminin sizde olduğunu sözleşmeye yazdırın. Altyapı ne olursa olsun, sahiplik sizde olmalı.</div></div>
      <div class="bi-check">
        <div class="eyebrow">// ALTYAPI SEÇMEDEN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sitenin yapacağı işler madde madde yazıldı mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Entegre edilecek sistemler belli mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>İki yıllık büyüme planı konuşuldu mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kullanılacak eklenti ve lisanslar listelendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Bakım ve güncelleme sorumlusu belli mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kaynak kod ve erişimlerin mülkiyeti sözleşmede mi?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="09">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>WordPress güvenli mi?</summary><p>WordPress çekirdeği düzenli güncellenen ve oldukça güvenli bir yazılımdır. Güvenlik açıklarının büyük çoğunluğu eklenti ve temalardan kaynaklanır. Az sayıda, güvenilir eklenti kullanılan ve düzenli bakımı yapılan bir WordPress sitesi güvenli şekilde işletilebilir.</p></details><details class="bi-faq-i"><summary>Özel yazılım web sitesi daha mı pahalı?</summary><p>Başlangıç maliyeti genellikle daha yüksektir. Ancak lisans yenilemeleri, eklenti bağımlılığı ve manuel iş yükü hesaba katıldığında, karmaşık iş süreçleri olan projelerde özel yazılım üç-beş yıllık toplam maliyette daha ekonomik olabilir.</p></details><details class="bi-faq-i"><summary>WordPress SEO için yeterli mi?</summary><p>Evet, doğru kurulduğunda WordPress SEO açısından yeterlidir. Sıralamayı altyapının adından çok içerik kalitesi, site hızı, teknik yapı ve kullanıcı deneyimi belirler. Özel yazılımda da aynı teknik SEO kurallarının baştan uygulanması gerekir.</p></details><details class="bi-faq-i"><summary>WordPress sitesi sonradan özel yazılıma taşınabilir mi?</summary><p>Taşınabilir. İçerikler, görseller ve adres yapısı yeni sisteme aktarılır, değişen adresler için 301 yönlendirmesi yapılır. Planlı yapılan bir geçişte arama motoru görünürlüğü korunabilir.</p></details><details class="bi-faq-i"><summary>E-ticaret için WordPress mi, hazır paket mi, özel yazılım mı?</summary><p>Az ürünlü, standart satış yapan bir mağaza için hazır paketler ya da WordPress tabanlı çözümler hızlı bir başlangıçtır. Bayi fiyatlandırması, ERP entegrasyonu veya kendine özgü sipariş akışı varsa özel yazılım daha sağlıklı sonuç verir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>WordPress mi özel yazılım mı sorusunun doğru cevabı, sitenizin içerik mi göstereceği yoksa iş mi yapacağıyla başlar. Tanıtım ve içerik odaklı projelerde iyi kurulmuş bir hazır altyapı hızlı ve ekonomiktir; iş süreçleri, entegrasyonlar ve çok kanallı kullanım varsa özel yazılım uzun vadede daha sağlam bir temel sunar.</p>
      <p>Projeniz için hangi yolun daha mantıklı olduğundan emin değilseniz, ihtiyaç listenizle birlikte <a href="iletisim">bizimle iletişime geçin</a>. Hem hazır altyapı hem özel yazılım geliştiren bir ekip olarak size tarafsız bir yol haritası çıkaralım; hizmet kapsamımızı <a href="web-cozumleri">web çözümleri</a> sayfasında da görebilirsiniz.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://w3techs.com/technologies/details/cm-wordpress" target="_blank" rel="noopener nofollow">W3Techs — Usage statistics and market share of WordPress</a></li><li><a href="https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/" target="_blank" rel="noopener nofollow">Patchstack — State of WordPress Security in 2026</a></li><li><a href="https://wordpress.org/about/requirements/" target="_blank" rel="noopener nofollow">WordPress.org — Requirements</a></li><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Core Web Vitals</a></li><li><a href="https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes" target="_blank" rel="noopener nofollow">Google Search Central — Site taşıma ve URL değişiklikleri</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#secenekler" data-n="01">Hangi seçenekler var?</a></li><li><a href="#wordpress-guclu" data-n="02">WordPress’in güçlü yanları</a></li><li><a href="#wordpress-sinirlar" data-n="03">WordPress’in sınırları</a></li><li><a href="#ozel-yazilim" data-n="04">Özel yazılım ne zaman?</a></li><li><a href="#karsilastirma" data-n="05">Yan yana karşılaştırma</a></li><li><a href="#toplam-maliyet" data-n="06">Toplam sahip olma maliyeti</a></li><li><a href="#yanilgilar" data-n="07">Yaygın yanılgılar</a></li><li><a href="#karar" data-n="08">Karar nasıl verilir?</a></li><li><a href="#sss" data-n="09">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="ozel-yazilim-gelistirme"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Özel Yazılım Geliştirme: Ne Zaman Gerekir, Süreç Nasıl İşler?</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="masaustu-mu-web-uygulamasi-mi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Masaüstü Uygulama mı Web Uygulaması mı? Doğru Seçim İçin Rehber</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="apartman-yonetim-yazilimi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="restoran-adisyon-sistemi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li></ul>
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
