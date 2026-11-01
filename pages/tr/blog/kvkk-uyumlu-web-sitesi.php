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
<title>KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza</title>
<meta name="description" content="KVKK uyumlu web sitesi için aydınlatma metni, çerez politikası, açık rıza, form tasarımı ve VERBİS adımları; KVKK’nın 2025 çerez rehberine göre kontrol listesi.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza">
<meta property="og:description" content="KVKK uyumlu web sitesi için aydınlatma metni, çerez politikası, açık rıza, form tasarımı ve VERBİS adımları; KVKK’nın 2025 çerez rehberine göre kontrol listesi.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/kvkk-uyumlu-web-sitesi">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<meta property="og:image" content="https://cyftech.com.tr/assets/img/og/kvkk-uyumlu-web-sitesi.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://cyftech.com.tr/kvkk-uyumlu-web-sitesi">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza", "description": "KVKK uyumlu web sitesi için aydınlatma metni, çerez politikası, açık rıza, form tasarımı ve VERBİS adımları; KVKK’nın 2025 çerez rehberine göre kontrol listesi.", "image": "https://cyftech.com.tr/assets/img/og/kvkk-uyumlu-web-sitesi.jpg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/kvkk-uyumlu-web-sitesi", "url": "https://cyftech.com.tr/kvkk-uyumlu-web-sitesi", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza", "item": "https://cyftech.com.tr/kvkk-uyumlu-web-sitesi"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Küçük bir işletmenin web sitesi için KVKK zorunlu mu?", "acceptedAnswer": {"@type": "Answer", "text": "Evet. KVKK, kişisel veri işleyen tüm gerçek ve tüzel kişiler için geçerlidir. Küçük işletmeler VERBİS kaydından muaf olabilir, ancak aydınlatma, veri güvenliği ve ilgili kişi başvurularına yanıt verme yükümlülükleri devam eder."}}, {"@type": "Question", "name": "İletişim formu için açık rıza almak gerekir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Genellikle hayır. Talebe dönüş yapmak için veri işlemek çoğu zaman sözleşmenin kurulmasına hazırlık veya meşru menfaat kapsamında değerlendirilir; aydınlatma metni yeterlidir. Pazarlama amaçlı iletişim içinse ayrı ve isteğe bağlı bir onay gerekir."}}, {"@type": "Question", "name": "Google Analytics kullanmak için çerez onayı gerekir mi?", "acceptedAnswer": {"@type": "Answer", "text": "KVKK’nın çerez rehberi, yalnızca sitenin işleyişini ölçmeye yönelik, verisi azaltılmış ve çapraz takip yapmayan birinci taraf analitiği açık rıza dışındaki şartlar kapsamında değerlendirebiliyor. Reklam özellikleri, yeniden pazarlama veya üçüncü taraf takip içeren kurulumlarda ise açık rıza alınması gerekir."}}, {"@type": "Question", "name": "Çerez bandında Reddet butonu olmak zorunda mı?", "acceptedAnswer": {"@type": "Answer", "text": "Kurum’un 2025 rehberi, Kabul et, Reddet ve Tercihler butonlarının eşit büyüklük, renk ve puntoda sunulmasını iyi uygulama örneği olarak gösteriyor. Reddetmenin kabul etmek kadar kolay olması, rızanın özgür iradeye dayandığını göstermenin en güvenli yoludur."}}, {"@type": "Question", "name": "KVKK aydınlatma metni hazır şablondan kopyalanabilir mi?", "acceptedAnswer": {"@type": "Answer", "text": "Önerilmez. Aydınlatma metni, sizin gerçekte hangi veriyi hangi amaçla ve hangi servislerle işlediğinizi anlatmalıdır. Başka bir şirketin metnini kopyalamak, gerçeği yansıtmayan ve yanıltıcı bir bilgilendirmeye yol açabilir."}}]}</script>
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
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/kvkk-uyumlu-web-sitesi">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/kvkk-uyumlu-web-sitesi">
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
      <div class="lang-menu"><a href="kvkk-uyumlu-web-sitesi" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/kvkk-uyumlu-web-sitesi" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/kvkk-uyumlu-web-sitesi" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/kvkk-uyumlu-web-sitesi" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/kvkk-uyumlu-web-sitesi" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/kvkk-uyumlu-web-sitesi" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <div class="crumbs"><a href="./">CYF TECH</a><span>/</span><a href="blog">BLOG</a><span>/</span><span>GÜVENLİK</span></div>
    <h1 class="h1" style="max-width:900px">KVKK uyumlu web sitesi: aydınlatma metni, çerez politikası ve açık rıza.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Güvenlik</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>9 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/kvkk-uyumlu-web-sitesi.svg" alt=""></div>
      <p class="bi-lead">Sitenizde bir iletişim formu, bir Google Analytics kodu ya da bir WhatsApp butonu varsa, kişisel veri işliyorsunuz demektir. <b>KVKK uyumlu web sitesi</b> artık büyük şirketlere özgü bir lüks değil; küçük bir işletmenin sitesi de aynı kurallara tabi.</p>
      <p>Kişisel Verileri Koruma Kurumu, Temmuz 2025’te <b>Çerez Uygulamaları Hakkında Rehber</b>’in güncel sürümünü yayımladı; 2024’te ise 6698 sayılı Kanun’da özel nitelikli veriler ve yurt dışına aktarım konusunda önemli değişiklikler yürürlüğe girdi. Bu yazıda bir web sitesinin KVKK açısından nerelerde risk taşıdığını, aydınlatma metni ile açık rızanın farkını, doğru bir çerez bandının nasıl görünmesi gerektiğini ve teknik tarafta neleri düzeltmeniz gerektiğini adım adım anlatıyoruz.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Önemli not:</b> Bu yazı genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Sitenizin veri işleme süreçleri için bir KVKK uzmanı veya avukatla çalışmanızı öneririz.</div></div>
      <h2 id="kapsam" class="bi-h2" data-n="01">Web sitesi hangi kişisel verileri işler?</h2>
      <p>KVKK’ya uyumun ilk adımı, sitenizin hangi noktalarda veri topladığını dürüstçe listelemektir. Çoğu işletme yalnızca iletişim formunu düşünür; oysa kişisel veri sandığınızdan çok daha fazla yerde işlenir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Formlar:</b> iletişim, teklif, randevu, iş başvurusu, bülten aboneliği. Ad, e-posta, telefon, hatta CV gibi kapsamlı veriler.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Çerezler ve izleme kodları:</b> Google Analytics, Meta pikseli, Google Ads dönüşüm etiketi, ısı haritası araçları. Bunlar çevrim içi tanımlayıcılar ve davranış verisi toplar.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Sunucu kayıtları:</b> IP adresi, tarayıcı bilgisi, erişim zamanı. 5651 sayılı Kanun kapsamında tutulan trafik kayıtları da bu gruptadır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Üçüncü taraf eklentiler:</b> gömülü YouTube videosu, Google Haritalar, canlı destek ve WhatsApp widget’ları, sosyal medya paylaşım butonları.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Üyelik ve e-ticaret:</b> hesap bilgileri, adres, sipariş geçmişi. Ödeme kartı verisi ise genellikle doğrudan ödeme kuruluşunda işlenir.</span></li>
      </ul>
      <p>Bu listeyi çıkardığınızda, her veri için üç soruyu yanıtlayın: <b>Neden</b> topluyorum, <b>hangi hukuki sebebe</b> dayanıyorum ve <b>ne kadar süre</b> saklıyorum? Bu cevaplar, birazdan anlatacağımız aydınlatma metninin ve çerez politikasının iskeletini oluşturur.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Kısa ipucu:</b> Kullanmadığınız bir veri alanını formdan kaldırmak, en ucuz KVKK önlemidir. Teklif formunda TC kimlik numarası ya da doğum tarihi sormanın çoğu zaman hiçbir gerekçesi yoktur; veri minimizasyonu Kanun’un temel ilkelerinden biridir.</div></div>
      <h2 id="aydinlatma" class="bi-h2" data-n="02">Aydınlatma metni ile açık rıza aynı şey değil</h2>
      <p>Web sitelerinde en sık rastlanan hata, aydınlatma metni ile açık rızanın tek bir onay kutusunda birleştirilmesidir. “KVKK metnini okudum ve kabul ediyorum” ifadesi iki ayrı yükümlülüğü karıştırır.</p>
      <h3>Aydınlatma metni: her durumda zorunlu</h3>
      <p>Kanun’un 10. maddesine göre veri toplarken kişiyi bilgilendirmeniz gerekir: veri sorumlusunun kimliği, işleme amaçları, verilerin kimlere ve hangi amaçla aktarılabileceği, toplama yöntemi ile hukuki sebebi ve kişinin 11. maddedeki hakları. Aydınlatma bir <b>bilgilendirmedir</b>; kişiden onay istemez. Bu yüzden “okudum, kabul ediyorum” kutusu yerine formun hemen altında, açıkça görünen bir bağlantı yeterlidir.</p>
      <h3>Açık rıza: yalnızca başka sebep yoksa</h3>
      <p>Açık rıza belirli bir konuya ilişkin, bilgilendirmeye dayanan ve özgür iradeyle verilen onaydır. Veri sorumlusu önce sözleşmenin kurulması, hukuki yükümlülük veya meşru menfaat gibi diğer işleme şartlarından birinin uygun olup olmadığına bakmalı; hiçbiri yoksa açık rızaya başvurmalıdır. Örneğin teklif formuna yazan birine dönüş yapmak için açık rıza gerekmez; ama aynı kişiye kampanya e-postası göndermek için ayrı bir onay gerekir.</p>
      <table>
        <thead><tr><th>Durum</th><th>Aydınlatma</th><th>Açık rıza</th></tr></thead>
        <tbody>
          <tr><td>İletişim formuna yanıt vermek</td><td>Gerekli</td><td>Genellikle gerekmez</td></tr>
          <tr><td>Bülten ve kampanya e-postası</td><td>Gerekli</td><td>Ayrı onay gerekli (İYS kaydı ile birlikte)</td></tr>
          <tr><td>Zorunlu (oturum, sepet, güvenlik) çerezleri</td><td>Gerekli</td><td>Gerekmez</td></tr>
          <tr><td>Reklam ve yeniden pazarlama çerezleri</td><td>Gerekli</td><td>Gerekli</td></tr>
          <tr><td>İş başvurusunda sağlık bilgisi gibi özel nitelikli veri</td><td>Gerekli</td><td>Duruma göre; 2024 değişikliğiyle şartlar genişledi</td></tr>
        </tbody>
      </table>
      <p>Açık rıza hizmetin ön şartı yapılamaz. Bülten onayı vermeyen birinin iletişim formunu gönderememesi, rızayı özgür olmaktan çıkarır. Onay kutuları da varsayılan olarak <b>boş</b> gelmelidir.</p>
      <h2 id="cerez" class="bi-h2" data-n="03">KVKK çerez rehberine göre doğru çerez bandı</h2>
      <p>KVKK’nın Temmuz 2025 tarihli <b>Çerez Uygulamaları Hakkında Rehber</b>’i, web sitesi sahipleri için en somut yol haritasıdır. Rehberin temel mesajı şudur: her çerez açık rıza gerektirmez, ama rıza gerektiren çerezler kullanıcı onay vermeden <b>çalışmamalıdır</b>.</p>
      <h3>Hangi çerezler rıza olmadan kullanılabilir?</h3>
      <p>Rehber, oturum ve form girdisi çerezleri, kimlik doğrulama, kullanıcı merkezli güvenlik, yük dengeleme, dil gibi arayüz tercihleri ve sepet çerezleri gibi örnekleri açık rıza dışındaki işleme şartları kapsamında değerlendiriyor. Birinci taraf analitik çerezlerin de, yalnızca sitenin işleyişini ölçmekle sınırlı kalması, IP maskeleme gibi önlemlerle verinin azaltılması ve farklı siteler arasında çapraz takip yapılmaması koşuluyla bu kapsamda düşünülebileceğini belirtiyor. Reklam, yeniden pazarlama ve üçüncü taraf takip çerezleri ise açık rıza gerektirir.</p>
      <h3>İyi bir çerez yönetim paneli nasıl olmalı?</h3>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Eşit butonlar:</b> Rehber, siteye girildiğinde açılan panelde “Kabul et”, “Reddet” ve “Tercihler” butonlarının renk, büyüklük ve punto açısından eşit sunulmasını iyi uygulama örneği olarak gösteriyor. Reddetmeyi gri ve küçük bir bağlantıya gömmek bu ilkeye aykırıdır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Varsayılan kapalı:</b> Açık rızaya dayanan çerez kategorileri tercihler ekranında ilk anda pasif gelmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Önce rıza, sonra kod:</b> Reklam pikselleri ve takip etiketleri kullanıcı onay verene kadar yüklenmemeli. Sadece bant göstermek, arka planda her şeyi çalıştırırken uyum sağlamaz.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Geri alınabilir rıza:</b> Kullanıcı tercihini sonradan kolayca değiştirebilmeli; rehber, sayfanın köşesinde duran küçük bir ikon veya bandı iyi örnek olarak anıyor.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Çerez duvarı yok:</b> Siteye girişi tüm çerezlerin kabulüne bağlayan “çerez duvarı” uygulamaları özgür iradeyi sakatlayabilir ve geçerli rıza sayılmayabilir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Rıza yorgunluğu:</b> Her ziyarette yeniden sormak yerine tercihin, çerezin ömrüyle orantılı aralıklarla hatırlatılması öneriliyor.</span></li>
      </ul>
      <p>Çerez politikası ise panelden bağlantı verilen ayrı bir sayfadır: kullanılan çerezlerin listesi, amacı, süresi, birinci mi üçüncü taraf mı olduğu ve nasıl yönetileceği burada yer alır. Rehber ayrıca “siteyi kullanarak çerezleri kabul etmiş sayılırsınız” türü ifadelerin geçerli rıza oluşturmayacağını vurguluyor.</p>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Çerez bandı bir dekor değil, bir anahtardır: kullanıcı “evet” demeden kapı açılmamalı.</blockquote>
      <h2 id="formlar" class="bi-h2" data-n="04">İletişim formu, bülten ve ticari ileti izinleri</h2>
      <p>Formlar KVKK uyumlu web sitesi tasarımında en görünür kısımdır ve doğru kurgulandığında kullanıcı deneyimini bozmaz. Önerdiğimiz yapı şu şekildedir:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım —</b> Formun hemen altına “Kişisel verileriniz, Aydınlatma Metni kapsamında işlenmektedir.” gibi kısa bir cümle ve metne bağlantı koyun. Onay kutusu zorunlu değildir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım —</b> Pazarlama izni gerekiyorsa ayrı, boş gelen ve isteğe bağlı bir kutu ekleyin. Formun gönderilmesi bu kutuya bağlı olmasın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım —</b> Ticari elektronik ileti göndermek istiyorsanız 6563 sayılı Kanun ve İleti Yönetim Sistemi (İYS) yükümlülüklerini de unutmayın; alınan onayların İYS’ye kaydedilmesi gerekir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım —</b> Form verilerinin nereye gittiğini belirleyin: e-posta kutusu, CRM, Google Sheets ya da yurt dışında barındırılan bir form aracı. Bu, aşağıda anlatacağımız yurt dışı aktarım konusunu doğrudan ilgilendirir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım —</b> Saklama süresi belirleyin. İki yıl önce gelen ve teklife dönüşmemiş form kayıtlarını süresiz tutmanın bir gerekçesi yoksa periyodik olarak silin veya anonimleştirin.</span></li>
      </ul>
      <p>Kişilerin KVKK 11. maddesindeki haklarını kullanabilmesi için bir başvuru yöntemi de sunmalısınız. Başvurular en geç 30 gün içinde yanıtlanmalıdır; sitede bir başvuru formu veya açık bir e-posta adresi bu süreci kolaylaştırır.</p>
      <h2 id="yurtdisi" class="bi-h2" data-n="05">2024 değişiklikleri: yurt dışı aktarım ve yabancı servisler</h2>
      <p>7499 sayılı Kanun’la yapılan ve 1 Haziran 2024’te yürürlüğe giren değişiklikler, web siteleri için özellikle <b>yurt dışına veri aktarımı</b> konusunda önemlidir. Yurt dışında barındırılan bir hosting, e-posta servisi, analitik aracı, form servisi veya CRM kullanıyorsanız, verileriniz yurt dışına aktarılıyor olabilir.</p>
      <p>Yeni düzende aktarım; bir işleme şartının bulunması ve hakkında yeterlilik kararı verilmiş bir ülkeye aktarım ya da Kurum’un ilan ettiği <b>standart sözleşme</b> gibi uygun güvencelerden birinin sağlanması ile yapılabiliyor. Standart sözleşmenin imzalanmasından itibaren beş iş günü içinde Kurum’a bildirilmesi gerekiyor. Eski düzende kullanılan açık rıza ile aktarım seçeneği ise geçiş süreci olan 1 Eylül 2024’ten sonra tek başına dayanak olmaktan çıktı; arızi aktarımlar için açık rıza dar bir istisna olarak kaldı.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Pratik öneri:</b> Sitenizde kullandığınız tüm üçüncü taraf servislerin (hosting, e-posta, analitik, form, canlı destek) bir listesini çıkarın ve her biri için verinin hangi ülkede işlendiğini not edin. Mümkünse Türkiye’de barındırılan altyapı tercih etmek uyum yükünü azaltır.</div></div>
      <p>Aynı değişiklikle özel nitelikli verilerin işlenme şartları da genişletildi. İş başvurusu formunda sağlık bilgisi isteyen veya bir klinik için randevu formu tasarlayan siteler bu konuyu ayrıca değerlendirmelidir; çünkü özel nitelikli verilerde Kurul’un belirlediği ek güvenlik önlemleri de geçerlidir.</p>
      <h2 id="teknik" class="bi-h2" data-n="06">KVKK için teknik ve idari güvenlik önlemleri</h2>
      <p>KVKK’nın 12. maddesi, veri sorumlusuna verilerin hukuka aykırı erişime karşı korunması için uygun teknik ve idari tedbirleri alma yükümlülüğü yükler. Web sitesi açısından bunun karşılığı somut ve ölçülebilir adımlardır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>HTTPS her sayfada:</b> Geçerli bir SSL sertifikası ve HTTP’den HTTPS’e kalıcı yönlendirme. Ayrıntılar için <a href="web-sitesi-guvenligi">web sitesi güvenliği ve SSL rehberimize</a> göz atabilirsiniz.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Güncel yazılım:</b> CMS, eklenti ve kütüphanelerin düzenli güncellenmesi; kullanılmayan eklentilerin kaldırılması.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yetki yönetimi:</b> Yönetim paneline güçlü parola ve iki adımlı doğrulama; form kayıtlarına yalnızca gereken kişilerin erişmesi.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yedekleme ve kayıt:</b> Düzenli, şifreli yedekler ve panel erişimlerinin loglanması.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Veri ihlali planı:</b> Bir sızıntı fark edildiğinde Kurul’a en kısa sürede ve en geç 72 saat içinde bildirim yapılması gerekir. Kimin ne yapacağını önceden yazmak, kriz anında zaman kazandırır.</span></li>
      </ul>
      <p>Bu önlemler yalnızca KVKK için değil, sitenizin itibarı ve arama görünürlüğü için de önemlidir. Güvenliği ihlal edilmiş bir site hem müşteri güvenini hem de Google sıralamasını kaybedebilir.</p>
      <h2 id="verbis" class="bi-h2" data-n="07">VERBİS kaydı gerekir mi, cezalar ne kadar?</h2>
      <p>VERBİS (Veri Sorumluları Sicil Bilgi Sistemi), her işletme için zorunlu değildir. Kurul kararlarına göre, ana faaliyeti özel nitelikli veri işleme olmayan ve yıllık çalışan sayısı 50’den, yıllık mali bilanço toplamı 100 milyon TL’den az olan veri sorumluları kayıttan muaftır. Kurum’un 1 Ekim 2025 tarihli duyurusuyla, ana faaliyeti özel nitelikli veri işleme olsa bile yıllık çalışan sayısı 10’dan ve mali bilançosu 10 milyon TL’den az olanlar da istisna kapsamına alındı.</p>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>Dikkat:</b> VERBİS istisnası yalnızca kayıt yükümlülüğünü kaldırır. Aydınlatma, veri güvenliği ve başvurulara yanıt verme yükümlülükleri her işletme için geçerlidir; küçük bir şirketin sitesi de bu kurallara uymak zorundadır.</div></div>
      <p>İdari para cezaları her yıl yeniden değerleme oranıyla güncellenir ve Kurum güncel tabloyu sitesinde yayımlar. 2026 yılı için aydınlatma yükümlülüğüne aykırılıkta alt sınır yaklaşık 85 bin TL, üst sınır yaklaşık 1,7 milyon TL düzeyindedir; veri güvenliği ve VERBİS ihlallerinde üst sınır 17 milyon TL’yi aşar. Rakamların kesin hâli için Kurum’un resmî tablosuna bakmanızı öneririz.</p>
      <div class="bi-check">
        <div class="eyebrow">// KVKK UYUM KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Sitedeki tüm veri toplama noktaları listelendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Her formun altında aydınlatma metni bağlantısı var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Pazarlama onayı ayrı, isteğe bağlı ve boş gelen bir kutu mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Çerez panelinde Kabul et / Reddet / Tercihler eşit görünüyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Reklam ve takip kodları rıza alınmadan yüklenmiyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Yurt dışındaki servisler ve aktarım dayanağı belirlendi mi?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Başvuru kanalı ve veri ihlali müdahale planı hazır mı?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="08">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Küçük bir işletmenin web sitesi için KVKK zorunlu mu?</summary><p>Evet. KVKK, kişisel veri işleyen tüm gerçek ve tüzel kişiler için geçerlidir. Küçük işletmeler VERBİS kaydından muaf olabilir, ancak aydınlatma, veri güvenliği ve ilgili kişi başvurularına yanıt verme yükümlülükleri devam eder.</p></details><details class="bi-faq-i"><summary>İletişim formu için açık rıza almak gerekir mi?</summary><p>Genellikle hayır. Talebe dönüş yapmak için veri işlemek çoğu zaman sözleşmenin kurulmasına hazırlık veya meşru menfaat kapsamında değerlendirilir; aydınlatma metni yeterlidir. Pazarlama amaçlı iletişim içinse ayrı ve isteğe bağlı bir onay gerekir.</p></details><details class="bi-faq-i"><summary>Google Analytics kullanmak için çerez onayı gerekir mi?</summary><p>KVKK’nın çerez rehberi, yalnızca sitenin işleyişini ölçmeye yönelik, verisi azaltılmış ve çapraz takip yapmayan birinci taraf analitiği açık rıza dışındaki şartlar kapsamında değerlendirebiliyor. Reklam özellikleri, yeniden pazarlama veya üçüncü taraf takip içeren kurulumlarda ise açık rıza alınması gerekir.</p></details><details class="bi-faq-i"><summary>Çerez bandında Reddet butonu olmak zorunda mı?</summary><p>Kurum’un 2025 rehberi, Kabul et, Reddet ve Tercihler butonlarının eşit büyüklük, renk ve puntoda sunulmasını iyi uygulama örneği olarak gösteriyor. Reddetmenin kabul etmek kadar kolay olması, rızanın özgür iradeye dayandığını göstermenin en güvenli yoludur.</p></details><details class="bi-faq-i"><summary>KVKK aydınlatma metni hazır şablondan kopyalanabilir mi?</summary><p>Önerilmez. Aydınlatma metni, sizin gerçekte hangi veriyi hangi amaçla ve hangi servislerle işlediğinizi anlatmalıdır. Başka bir şirketin metnini kopyalamak, gerçeği yansıtmayan ve yanıltıcı bir bilgilendirmeye yol açabilir.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>KVKK uyumlu bir web sitesi, uzun hukuk metinleriyle dolu bir site değil; ne topladığını bilen, gereksizini toplamayan, kullanıcıya gerçek bir seçim sunan ve verileri güvenle saklayan bir sitedir. Bu yaklaşım, ziyaretçinin güvenini de artırır. Hukuki metinlerin içeriği için bir uzmanla çalışmanızı öneririz; çerez paneli, form akışları, etiketlerin rızaya göre yüklenmesi ve sunucu güvenliği gibi teknik tarafta ise <a href="web-cozumleri">web çözümlerimizle</a> yanınızdayız. Yeni bir site planlıyorsanız <a href="kurumsal-web-sitesi-rehberi">kurumsal web sitesi rehberimize</a> de göz atabilir, mevcut sitenizin teknik KVKK kontrolü için <a href="iletisim">bizimle iletişime geçebilirsiniz</a>.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://kvkk.gov.tr/Icerik/7353/Cerez-Uygulamalari-Hakkinda-Rehber" target="_blank" rel="noopener nofollow">KVKK — Çerez Uygulamaları Hakkında Rehber (Temmuz 2025)</a></li><li><a href="https://kvkk.gov.tr/Icerik/8388/KAMUOYU-DUYURUSU" target="_blank" rel="noopener nofollow">KVKK — VERBİS istisnası kamuoyu duyurusu (1 Ekim 2025)</a></li><li><a href="https://www.kvkk.gov.tr/Icerik/8145/6698-sayili-kisisel-verilerin-korunmasi-kanunu-kapsaminda-idari-para-cezasi-tutarlari" target="_blank" rel="noopener nofollow">KVKK — 2026 idari para cezası tutarları</a></li><li><a href="https://www.kvkk.gov.tr/Icerik/8170/Yurt-Disina-Kisisel-Veri-Aktariminda-Kullanilacak-Standart-Sozlesmelerde-Dikkat-Edilmesi-Gereken-Hususlara-Iliskin-Kamuoyu-Duyurusu" target="_blank" rel="noopener nofollow">KVKK — Standart sözleşmelere ilişkin kamuoyu duyurusu</a></li><li><a href="https://www.mevzuat.gov.tr/mevzuatmetin/1.5.6698.pdf" target="_blank" rel="noopener nofollow">Mevzuat — 6698 sayılı Kişisel Verilerin Korunması Kanunu</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#kapsam" data-n="01">Sitenizde hangi veri var?</a></li><li><a href="#aydinlatma" data-n="02">Aydınlatma ve açık rıza</a></li><li><a href="#cerez" data-n="03">Çerez bandı ve politikası</a></li><li><a href="#formlar" data-n="04">Formlar ve e-posta</a></li><li><a href="#yurtdisi" data-n="05">Yurt dışı aktarım</a></li><li><a href="#teknik" data-n="06">Teknik önlemler</a></li><li><a href="#verbis" data-n="07">VERBİS ve cezalar</a></li><li><a href="#sss" data-n="08">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="web-sitesi-guvenligi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Güvenliği ve SSL: KOBİ’ler İçin 2026 Rehberi</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 Ekim 2026</span><b>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
