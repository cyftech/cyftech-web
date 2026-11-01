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
<title>Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması</title>
<meta name="description" content="Native mi cross-platform mu? Flutter, React Native ve Kotlin Multiplatform’u performans, maliyet, bakım ve ekip açısından karşılaştırdık; hangi proje için hangisi?">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması">
<meta property="og:description" content="Native mi cross-platform mu? Flutter, React Native ve Kotlin Multiplatform’u performans, maliyet, bakım ve ekip açısından karşılaştırdık; hangi proje için hangisi?">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/native-mi-cross-platform-mu">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/native-mi-cross-platform-mu.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/native-mi-cross-platform-mu">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması", "description": "Native mi cross-platform mu? Flutter, React Native ve Kotlin Multiplatform’u performans, maliyet, bakım ve ekip açısından karşılaştırdık; hangi proje için hangisi?", "image": "https://cyftech.com.tr/assets/img/og/native-mi-cross-platform-mu.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/native-mi-cross-platform-mu", "url": "https://cyftech.com.tr/native-mi-cross-platform-mu", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması", "item": "https://cyftech.com.tr/native-mi-cross-platform-mu"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Cross-platform uygulamalar native kadar hızlı mı?", "acceptedAnswer": {"@type": "Answer", "text": "İş uygulamalarının büyük çoğunluğunda kullanıcı farkı hissetmez. Flutter kendi çizim motoruyla, React Native ise yeni mimarisiyle akıcı bir deneyim sunar. Yoğun grafik, oyun veya gerçek zamanlı medya işleme gibi durumlarda ise native hâlâ avantajlıdır."}}, {"@type": "Question", "name": "Flutter mı daha iyi, React Native mi?", "acceptedAnswer": {"@type": "Answer", "text": "Tek bir doğru yoktur. Markaya özel, her cihazda aynı görünen arayüz ve mobilin yanında masaüstü hedefleri için Flutter; React ve TypeScript bilen bir ekip veya mevcut React web projesi varsa React Native genellikle daha mantıklıdır."}}, {"@type": "Question", "name": "Cross-platform ile geliştirilen uygulama App Store ve Google Play’de yayınlanabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Evet. Flutter ve React Native ile geliştirilen uygulamalar, native uygulamalar gibi derlenir ve her iki mağazada da aynı kurallarla yayınlanır. Kullanıcı açısından uygulamanın hangi teknolojiyle yazıldığı görünmez."}}, {"@type": "Question", "name": "Cross-platform ile başlayıp sonra native’e geçmek mümkün mü?", "acceptedAnswer": {"@type": "Answer", "text": "Mümkündür ama bu genellikle uygulamanın yeniden yazılması demektir. Bunun yerine cross-platform uygulamanın içinde ihtiyaç duyulan belirli ekranları veya modülleri native kodla yazmak çoğu zaman daha ekonomik bir yoldur."}}, {"@type": "Question", "name": "Mobil uygulama ile web sitesi aynı altyapıyı kullanabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Evet ve çoğu zaman kullanmalıdır. Hangi mobil teknoloji seçilirse seçilsin, uygulama ile web sitesi veya yönetim paneli aynı API ve veritabanına bağlanabilir. React Native kullanılıyorsa, React tabanlı bir web projesiyle iş mantığının bir kısmı da paylaşılabilir. Bu yaklaşım bakım maliyetini düşürür ve verilerin tek merkezde tutarlı kalmasını sağlar."}}, {"@type": "Question", "name": "Kotlin Multiplatform nedir, ne zaman tercih edilir?", "acceptedAnswer": {"@type": "Answer", "text": "Kotlin Multiplatform, iş mantığını iOS ve Android arasında paylaşırken arayüzü native veya Compose Multiplatform ile yazmaya imkân veren bir yaklaşımdır. Güçlü bir Android ekibi olan ve native his kaybetmeden kod paylaşmak isteyen projeler için uygundur."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/native-mi-cross-platform-mu">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/native-mi-cross-platform-mu">
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
      <div class="lang-menu"><a href="native-mi-cross-platform-mu" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/native-mi-cross-platform-mu" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/native-mi-cross-platform-mu" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/native-mi-cross-platform-mu" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/native-mi-cross-platform-mu" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/native-mi-cross-platform-mu" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>MOBİL UYGULAMA</span></div>
    <h1 class="h1" style="max-width:900px">Native mi cross-platform mu? Flutter ve React Native karşılaştırması.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Mobil Uygulama</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>8 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/native-mi-cross-platform-mu.svg" alt=""></div>
      <p class="bi-lead">Mobil uygulama projesine başlayan herkes er geç aynı soruyla karşılaşır: <b>native mi cross-platform mu</b>? Bu tercih yalnızca bir teknoloji seçimi değil; bütçeyi, takvimi, ekibi ve uygulamanın önümüzdeki beş yılını belirleyen bir iş kararıdır.</p>
      <p>Birkaç yıl öncesine kadar cevap daha basitti: performans istiyorsanız native, hızlı ve ucuz istiyorsanız cross-platform. Bugün Flutter ve React Native olgunlaştı, Kotlin Multiplatform ise iOS tarafında da kararlı sürüme ulaştı. Bu yazıda yaklaşımları sade bir dille açıklıyor, Flutter ile React Native’i karşılaştırıyor ve hangi projede hangisinin mantıklı olduğunu örneklerle anlatıyoruz.</p>
      <h2 id="kavramlar" class="bi-h2" data-n="01">Native ve cross-platform uygulama ne demek?</h2>
      <p><b>Native uygulama</b>, her işletim sistemi için o platformun kendi diliyle ve araçlarıyla ayrı ayrı yazılan uygulamadır: iOS için Swift ve SwiftUI, Android için Kotlin ve Jetpack Compose. Sonuçta iki ayrı kod tabanı, çoğu zaman iki ayrı ekip olur.</p>
      <p><b>Cross-platform uygulama</b> ise tek bir kod tabanından hem iOS hem Android sürümü üretir. Bugün öne çıkan seçenekler şunlardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Flutter:</b> Google’ın geliştirdiği, Dart dilini kullanan çatı. Arayüzü kendi çizim motoruyla oluşturur; bu sayede her cihazda piksel piksel aynı görünüm elde edilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>React Native:</b> Meta’nın geliştirdiği, JavaScript / TypeScript ve React kullanan çatı. Platformun yerel arayüz bileşenlerini kullanır. 0.76 sürümüyle birlikte “Yeni Mimari” varsayılan hâle geldi ve JavaScript ile yerel kod arasındaki eski köprü yapısının darboğazları büyük ölçüde giderildi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kotlin Multiplatform:</b> JetBrains’in çözümü. İş mantığını Kotlin ile paylaşıp arayüzü isteğe göre native ya da Compose Multiplatform ile yazmaya imkân verir. Compose Multiplatform’un iOS desteği Mayıs 2025’te kararlı sürüme ulaştı.</span></li>
      </ul>
      <p>Bir de <b>PWA</b> (progresif web uygulaması) seçeneği var: tarayıcıda çalışan, ana ekrana eklenebilen web uygulaması. Mağaza zorunluluğu olmayan basit ihtiyaçlar için iyi bir başlangıç olabilir, ancak bildirim ve cihaz özelliklerinde, özellikle iOS’ta, kısıtları vardır.</p>
      <h2 id="karsilastirma" class="bi-h2" data-n="02">Native vs cross-platform: 7 kriterde karşılaştırma</h2>
      <p>Kararı kolaylaştırmak için iki yaklaşımı iş açısından en önemli kriterlerde yan yana koyduk:</p>
      <table>
        <thead><tr><th>Kriter</th><th>Native (Swift + Kotlin)</th><th>Cross-platform (Flutter / React Native)</th></tr></thead>
        <tbody>
          <tr><td>Geliştirme maliyeti</td><td>Yüksek; iki ayrı kod tabanı</td><td>Daha düşük; çoğu kod iki platformda ortak</td></tr>
          <tr><td>Pazara çıkış süresi</td><td>Daha uzun</td><td>Daha kısa; iki platform aynı anda yayınlanır</td></tr>
          <tr><td>Performans</td><td>En iyi; özellikle grafik ve donanım yoğun işlerde</td><td>İş uygulamalarının büyük çoğunluğu için fark edilmeyecek düzeyde</td></tr>
          <tr><td>Yeni platform özelliklerine erişim</td><td>İlk gün</td><td>Genellikle eklenti veya yerel kod köprüsüyle, bazen gecikmeli</td></tr>
          <tr><td>Görünüm ve his</td><td>Platformun doğal tasarım dili</td><td>Flutter’da tutarlı marka görünümü; React Native’de yerel bileşenler</td></tr>
          <tr><td>Bakım</td><td>Her özellik iki kez güncellenir</td><td>Tek yerde güncelleme; çatı sürümlerini takip etmek gerekir</td></tr>
          <tr><td>Ekip</td><td>iOS ve Android uzmanları ayrı ayrı</td><td>Tek ekip; yine de yerel tarafı bilen biri gerekli</td></tr>
        </tbody>
      </table>
      <p>Tablodan görüleceği üzere cross-platform çoğu kriterde iş açısından avantajlıdır; native’in öne geçtiği yer ise performansın ve platforma özgü özelliklerin ürünün kalbinde olduğu projelerdir.</p>
      <h2 id="flutter-rn" class="bi-h2" data-n="03">Flutter mı React Native mi? Farkları ve seçim kriterleri</h2>
      <p>Cross-platform’a karar verdiyseniz ikinci soru gelir. İki çatı da olgun, geniş topluluğa sahip ve büyük şirketlerin üretim uygulamalarında kullanılıyor. Seçimi belirleyen asıl etkenler şunlardır:</p>
      <h3>Flutter öne çıkar, eğer…</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Markaya özel, animasyonlu ve her cihazda birebir aynı görünen bir arayüz istiyorsanız.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Aynı kodla mobilin yanında web ve masaüstü (Windows, macOS, Linux) hedefleri de düşünüyorsanız.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Düşük donanımlı Android cihazlarda da akıcı çalışan, öngörülebilir bir performans önemliyse.</span></li>
      </ul>
      <h3>React Native öne çıkar, eğer…</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ekibiniz veya mevcut web projeniz zaten React ve TypeScript kullanıyorsa; bilgi ve kod paylaşımı kolaylaşır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Uygulamanın her platformda o platformun kendi bileşenleriyle görünmesini istiyorsanız.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>JavaScript ekosistemindeki geniş kütüphane havuzundan yararlanmak, geliştirici bulmayı kolaylaştırmak istiyorsanız.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Kısa ipucu:</b> “Hangisi daha hızlı?” tartışmalarına takılmayın. Bağımsız ölçümlerde iki çatı arasındaki fark, kötü yazılmış bir liste ekranı veya optimize edilmemiş görsellerin yarattığı farktan çoğu zaman küçüktür. Ekibin deneyimi, seçilen çatıdan daha belirleyicidir.</div></div>
      <h2 id="native-ne-zaman" class="bi-h2" data-n="04">Native geliştirme hangi projelerde gerçekten gerekli?</h2>
      <p>Cross-platform her işi görür mü? Hayır. Aşağıdaki durumlarda native geliştirme ya da en azından önemli bir native katman gerekir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yoğun grafik ve gerçek zamanlı işlem:</b> oyunlar, artırılmış gerçeklik, gelişmiş kamera ve video düzenleme.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Derin donanım entegrasyonu:</b> özel Bluetooth cihazları, tıbbi sensörler, düşük seviyeli ses işleme, sürekli arka plan çalışması.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Platform özelliklerine ilk gün erişim:</b> widget’lar, saat uygulamaları, Apple’ın veya Google’ın yeni duyurduğu API’ler ürününüzün merkezindeyse.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Çok büyük ölçek:</b> milyonlarca kullanıcısı olan, her milisaniyenin ve uygulama boyutunun önemli olduğu ürünler.</span></li>
      </ul>
      <p>Bu durumlar dışında kalan e-ticaret, rezervasyon, saha ekipleri, müşteri sadakati, kurumsal iç uygulamalar ve yönetim panelleri gibi projelerin büyük çoğunluğu cross-platform ile rahatlıkla geliştirilebilir. Üstelik cross-platform uygulamalarda gerektiğinde belirli bir ekranı veya özelliği native kodla yazmak da mümkündür; seçim siyah ya da beyaz değildir.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Doğru teknoloji, en popüler olan değil; ürününüzün en kritik özelliğini en az riskle hayata geçiren teknolojidir.</blockquote>
      <h2 id="maliyet" class="bi-h2" data-n="05">Maliyet, bakım ve uzun vadeli riskler</h2>
      <p>Teknoloji kararı ilk yatırımdan çok <b>toplam sahip olma maliyetini</b> etkiler. Native’de her yeni özellik iki kez yazılır, iki kez test edilir; hata düzeltmeleri de öyle. Cross-platform’da ortak kod oranı arttıkça bu yük azalır.</p>
      <p>Öte yandan cross-platform’un kendine özgü riskleri vardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Çatı güncellemeleri:</b> Flutter veya React Native’in büyük sürüm geçişleri ve üçüncü taraf eklentilerin bu sürümlere uyumu düzenli emek ister.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Eklenti bağımlılığı:</b> Bakımı bırakılmış bir eklenti, kritik bir özelliği kilitleyebilir. Eklenti seçerken güncellenme sıklığına ve topluluğa bakmak gerekir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Uygulama boyutu:</b> Cross-platform uygulamalar, çatı motorunu da içerdikleri için native muadillerinden biraz daha büyük olabilir.</span></li>
      </ul>
      <p>Bütçe tarafını ayrıntılı merak ediyorsanız <a href="mobil-uygulama-gelistirme-maliyeti">mobil uygulama geliştirme maliyeti yazımızda</a> fiyatı belirleyen kalemleri tek tek açtık.</p>
      <h2 id="senaryolar" class="bi-h2" data-n="06">Dört örnek proje: hangi teknoloji neden seçilir?</h2>
      <p>Soyut kriterler yerine somut örneklerle düşünmek kararı kolaylaştırır. Sık karşılaştığımız dört proje tipini ve bizim değerlendirmemizi aşağıda bulabilirsiniz:</p>
      <h3>Restoran sipariş ve sadakat uygulaması</h3>
      <p>Menü, sepet, online ödeme, kampanya bildirimi ve puan sistemi. Donanım ihtiyacı neredeyse yok, iki platformda aynı anda çıkmak ve markaya özel bir görünüm önemli. Burada Flutter veya React Native ile tek kod tabanı açık ara en verimli seçimdir.</p>
      <h3>Saha ekibi uygulaması</h3>
      <p>Teknisyenler iş emirlerini görüyor, fotoğraf çekiyor, barkod okutuyor, bazen internetin olmadığı bodrum katlarda çalışıyor. Çevrimdışı veri saklama ve eşitleme kritik. Cross-platform bu ihtiyacı karşılar; ancak çevrimdışı mimariyi baştan doğru kurmak, teknoloji seçiminden daha önemlidir.</p>
      <h3>Özel bir Bluetooth cihazıyla konuşan sağlık uygulaması</h3>
      <p>Uygulamanın kalbi, cihazla sürekli ve güvenilir veri alışverişi; arka planda çalışması da gerekiyor. Burada native geliştirme ya da en azından cihaz iletişimini native modüllerle yazan hibrit bir yapı daha güvenli bir tercihtir. Sağlık verisi işlendiği için KVKK tarafındaki özel nitelikli veri kuralları da ayrıca planlanmalıdır.</p>
      <h3>Kurumsal iç kullanım uygulaması</h3>
      <p>Çalışanların izin talebi, onay akışı ve duyuruları takip ettiği bir uygulama. Kullanıcı sayısı belli, mağaza görünürlüğü önemsiz. Bütçe kısıtlıysa bir PWA ile başlamak, ihtiyaç büyüdüğünde cross-platform bir uygulamaya geçmek mantıklı olabilir. Böyle durumlarda <a href="masaustu-mu-web-uygulamasi-mi">masaüstü mü web uygulaması mı</a> sorusu da gündeme gelir.</p>
      <h2 id="karar" class="bi-h2" data-n="07">5 soruda doğru mobil teknoloji kararı</h2>
      <p>Kararı kendi projeniz için vermek üzere aşağıdaki soruları sırayla yanıtlayın:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Soru —</b> Uygulamanın kalbinde yoğun grafik, gerçek zamanlı medya veya özel donanım var mı? Evetse native’e ciddi olarak bakın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Soru —</b> İki platformda aynı anda ve sınırlı bütçeyle mi çıkmanız gerekiyor? Evetse cross-platform öne geçer.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Soru —</b> Mevcut ekibiniz veya web projeniz hangi teknolojiyi kullanıyor? React tabanlıysa React Native, sıfırdan başlıyorsanız Flutter güçlü bir aday.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Soru —</b> Aynı ürünü web ve masaüstünde de sunacak mısınız? Flutter tek kodla daha fazla hedefi kapsar; ortak bir backend ise her durumda şarttır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Soru —</b> Uygulamanın en az üç yıl bakımını kim yapacak? Seçilen teknolojide geliştirici bulabilecek misiniz?</span></li>
      </ul>
      <p>Kendi ürünlerimizde de bu soruları sorduk. Örneğin apartman ve site yönetim yazılımımız KATSİS’in web paneli, iOS / Android uygulamaları ve Windows uygulaması aynı altyapıya bağlı. Arayüzü her platformdaki kullanıcının ihtiyacına göre kurgulayıp veriyi tek merkezde toplamak, bakım yükünü önemli ölçüde azalttı. Ayrıntılar için <a href="projelerimiz">projelerimize</a> göz atabilirsiniz.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> Teknoloji kararını ajansın en iyi bildiği araca göre değil, ürününüzün ihtiyacına göre verin. Teklif aldığınız firmaya “neden bu teknolojiyi öneriyorsunuz, alternatifi ne olurdu?” diye sorun; iyi bir ekip bu soruya somut gerekçelerle cevap verir.</div></div>
      <div class="bi-check">
        <div class="eyebrow">// TEKNOLOJİ SEÇMEDEN ÖNCE KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Uygulamanın en kritik özelliği yazılı olarak belirlendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Donanım ve performans gereksinimleri netleşti mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>İki platform aynı anda mı yayınlanacak?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Mevcut ekip ve web altyapısı hangi teknolojiyi kullanıyor?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Seçilen teknolojide uzun vadeli geliştirici bulunabilir mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Kullanılacak eklentilerin bakım durumu kontrol edildi mi?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Cross-platform uygulamalar native kadar hızlı mı?</summary><p>İş uygulamalarının büyük çoğunluğunda kullanıcı farkı hissetmez. Flutter kendi çizim motoruyla, React Native ise yeni mimarisiyle akıcı bir deneyim sunar. Yoğun grafik, oyun veya gerçek zamanlı medya işleme gibi durumlarda ise native hâlâ avantajlıdır.</p></details><details class="bi-faq-i"><summary>Flutter mı daha iyi, React Native mi?</summary><p>Tek bir doğru yoktur. Markaya özel, her cihazda aynı görünen arayüz ve mobilin yanında masaüstü hedefleri için Flutter; React ve TypeScript bilen bir ekip veya mevcut React web projesi varsa React Native genellikle daha mantıklıdır.</p></details><details class="bi-faq-i"><summary>Cross-platform ile geliştirilen uygulama App Store ve Google Play’de yayınlanabilir mi?</summary><p>Evet. Flutter ve React Native ile geliştirilen uygulamalar, native uygulamalar gibi derlenir ve her iki mağazada da aynı kurallarla yayınlanır. Kullanıcı açısından uygulamanın hangi teknolojiyle yazıldığı görünmez.</p></details><details class="bi-faq-i"><summary>Cross-platform ile başlayıp sonra native’e geçmek mümkün mü?</summary><p>Mümkündür ama bu genellikle uygulamanın yeniden yazılması demektir. Bunun yerine cross-platform uygulamanın içinde ihtiyaç duyulan belirli ekranları veya modülleri native kodla yazmak çoğu zaman daha ekonomik bir yoldur.</p></details><details class="bi-faq-i"><summary>Mobil uygulama ile web sitesi aynı altyapıyı kullanabilir mi?</summary><p>Evet ve çoğu zaman kullanmalıdır. Hangi mobil teknoloji seçilirse seçilsin, uygulama ile web sitesi veya yönetim paneli aynı API ve veritabanına bağlanabilir. React Native kullanılıyorsa, React tabanlı bir web projesiyle iş mantığının bir kısmı da paylaşılabilir. Bu yaklaşım bakım maliyetini düşürür ve verilerin tek merkezde tutarlı kalmasını sağlar.</p></details><details class="bi-faq-i"><summary>Kotlin Multiplatform nedir, ne zaman tercih edilir?</summary><p>Kotlin Multiplatform, iş mantığını iOS ve Android arasında paylaşırken arayüzü native veya Compose Multiplatform ile yazmaya imkân veren bir yaklaşımdır. Güçlü bir Android ekibi olan ve native his kaybetmeden kod paylaşmak isteyen projeler için uygundur.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Native mi cross-platform mu sorusunun evrensel bir cevabı yok, ama doğru soruları sorduğunuzda cevap genellikle netleşir. Çoğu işletme uygulaması için Flutter veya React Native ile tek kod tabanı, hem bütçe hem takvim açısından en verimli yoldur; performansın ve donanımın ürünün kalbinde olduğu projelerde ise native yatırım karşılığını verir. Projeniz için hangi yaklaşımın uygun olduğunu birlikte değerlendirmek isterseniz <a href="mobil-uygulamalar">mobil uygulama hizmetlerimize</a> göz atabilir ya da <a href="iletisim">bizimle iletişime geçebilirsiniz</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://reactnative.dev/blog/2024/10/23/release-0.76-new-architecture" target="_blank" rel="noopener nofollow">React Native — 0.76 ve Yeni Mimari duyurusu</a></li><li><a href="https://blog.jetbrains.com/kotlin/2025/05/compose-multiplatform-1-8-0-released-compose-multiplatform-for-ios-is-stable-and-production-ready/" target="_blank" rel="noopener nofollow">JetBrains — Compose Multiplatform 1.8.0: iOS desteği kararlı</a></li><li><a href="https://docs.flutter.dev/" target="_blank" rel="noopener nofollow">Flutter — Resmî dokümantasyon</a></li><li><a href="https://developer.android.com/compose" target="_blank" rel="noopener nofollow">Android Developers — Jetpack Compose</a></li><li><a href="https://developer.apple.com/swiftui/" target="_blank" rel="noopener nofollow">Apple Developer — SwiftUI</a></li><li><a href="https://web.dev/explore/progressive-web-apps" target="_blank" rel="noopener nofollow">web.dev — Progressive Web Apps</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#kavramlar" data-n="01">Native ve cross-platform</a></li><li><a href="#karsilastirma" data-n="02">Karşılaştırma tablosu</a></li><li><a href="#flutter-rn" data-n="03">Flutter mı React Native mi</a></li><li><a href="#native-ne-zaman" data-n="04">Native ne zaman şart?</a></li><li><a href="#maliyet" data-n="05">Maliyet ve bakım</a></li><li><a href="#senaryolar" data-n="06">Örnek senaryolar</a></li><li><a href="#karar" data-n="07">Karar rehberi</a></li><li><a href="#sss" data-n="08">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="mobil-uygulama-gelistirme-maliyeti"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Mobil Uygulama Geliştirme Maliyeti 2026: Fiyatı Belirleyen 8 Kalem</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 Ekim 2026</span><b>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
