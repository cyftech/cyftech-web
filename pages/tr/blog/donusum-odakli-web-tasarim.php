<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<script id="cyf-lang-redirect">try{var L=["en", "de", "ar", "zh", "ru", "tr"],s=localStorage.getItem("cyf-lang");if(!s&&!/bot|crawl|spider|slurp|lighthouse/i.test(navigator.userAgent)){var ls=navigator.languages||[navigator.language||""];for(var i=0;i<ls.length&&!s;i++){var c=(ls[i]||"").slice(0,2).toLowerCase();if(L.indexOf(c)>-1)s=c}s=s||"en"}if(s&&s!=="tr"&&L.indexOf(s)>-1){var p=location.pathname,f=p.split("/").pop();location.replace(p.slice(0,p.length-f.length)+s+"/"+f+location.search+location.hash)}}catch(e){}</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler — CYF Tech Blog</title>
<meta name="description" content="Dönüşüm odaklı web tasarım nedir? İlk ekran, CTA, form tasarımı, güven unsurları, hız ve A/B testiyle ziyaretçiyi müşteriye çeviren UX ilkelerini öğrenin.">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler — CYF Tech Blog">
<meta property="og:description" content="Dönüşüm odaklı web tasarım nedir? İlk ekran, CTA, form tasarımı, güven unsurları, hız ve A/B testiyle ziyaretçiyi müşteriye çeviren UX ilkelerini öğrenin.">
<meta property="og:type" content="article">
<meta property="og:url" content="https://cyftech.com.tr/donusum-odakli-web-tasarim">
<meta property="og:site_name" content="CYF Tech">
<meta property="og:locale" content="tr_TR">
<link rel="canonical" href="https://cyftech.com.tr/donusum-odakli-web-tasarim">
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BlogPosting", "headline": "Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler", "description": "Dönüşüm odaklı web tasarım nedir? İlk ekran, CTA, form tasarımı, güven unsurları, hız ve A/B testiyle ziyaretçiyi müşteriye çeviren UX ilkelerini öğrenin.", "image": "https://cyftech.com.tr/assets/img/blog/donusum-odakli-web-tasarim.svg", "datePublished": "2026-10-31", "dateModified": "2026-10-31", "inLanguage": "tr", "mainEntityOfPage": "https://cyftech.com.tr/donusum-odakli-web-tasarim", "url": "https://cyftech.com.tr/donusum-odakli-web-tasarim", "author": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}, "publisher": {"@type": "Organization", "name": "CYF Tech", "url": "https://cyftech.com.tr/", "logo": {"@type": "ImageObject", "url": "https://cyftech.com.tr/assets/img/logo/ico.png"}}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "CYF Tech", "item": "https://cyftech.com.tr/"}, {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://cyftech.com.tr/blog"}, {"@type": "ListItem", "position": 3, "name": "Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler", "item": "https://cyftech.com.tr/donusum-odakli-web-tasarim"}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "inLanguage": "tr", "mainEntity": [{"@type": "Question", "name": "Dönüşüm odaklı web tasarım nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Ziyaretçinin sitede belirli bir eylemi, örneğin teklif istemeyi, satın almayı ya da aramayı tamamlamasını kolaylaştırmayı amaçlayan tasarım yaklaşımıdır. Sayfa düzeni, metinler, butonlar, formlar ve hız bu hedefe göre kurgulanır ve sonuçlar veriyle ölçülerek sürekli iyileştirilir."}}, {"@type": "Question", "name": "İyi bir dönüşüm oranı kaçtır?", "acceptedAnswer": {"@type": "Answer", "text": "Evrensel bir doğru değer yoktur. Sektör, ürün fiyatı, trafik kaynağı ve hedef eyleme göre oranlar büyük farklılık gösterir. En sağlıklı karşılaştırma, kendi sitenizin önceki dönemlerdeki performansıdır."}}, {"@type": "Question", "name": "Web sitemin dönüşüm oranını nasıl artırırım?", "acceptedAnswer": {"@type": "Answer", "text": "Önce hedeflerinizi analitikte ölçmeye başlayın. Ardından ilk ekranı netleştirin, tek ve açık bir eylem çağrısı kullanın, formları kısaltın, güven unsurlarını görünür kılın ve sayfa hızını iyileştirin. Değişiklikleri tek tek test ederek hangisinin işe yaradığını görün."}}, {"@type": "Question", "name": "UX ile dönüşüm oranı arasındaki ilişki nedir?", "acceptedAnswer": {"@type": "Answer", "text": "Kullanıcı deneyimi, ziyaretçinin aradığını ne kadar kolay bulduğunu ve işlemi ne kadar zahmetsiz tamamladığını belirler. Kafa karıştıran menüler, uzun formlar ve yavaş sayfalar sürtünme yaratır; sürtünme azaldıkça dönüşüm genellikle artar."}}, {"@type": "Question", "name": "A/B testi küçük siteler için anlamlı mı?", "acceptedAnswer": {"@type": "Answer", "text": "Trafiği düşük sitelerde istatistiksel olarak anlamlı sonuç almak uzun sürer. Bu durumda önce bilinen iyi uygulamaları hayata geçirmek, kullanıcı görüşmeleri ve oturum kayıtlarıyla sorunları bulmak daha verimlidir; A/B testini trafik arttıkça devreye alabilirsiniz."}}]}</script>
<link rel="icon" type="image/png" href="assets/img/logo/ico.png">
<script>try{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}catch(e){}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&amp;family=Space+Grotesk:wght@400;500;600;700&amp;display=swap">
<link rel="stylesheet" href="assets/css/site.css?v=20261031d">
<link rel="stylesheet" href="assets/css/blog.css?v=20261031d">
<link rel="stylesheet" href="assets/css/theme-light.css?v=20261031d">
<script src="assets/js/site.js?v=20261031d" defer></script>
<script src="assets/js/ambient.js?v=20261031d" defer></script>
<link rel="alternate" hreflang="tr" href="https://cyftech.com.tr/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="en" href="https://cyftech.com.tr/en/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="de" href="https://cyftech.com.tr/de/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="ar" href="https://cyftech.com.tr/ar/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="zh" href="https://cyftech.com.tr/zh/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="ru" href="https://cyftech.com.tr/ru/donusum-odakli-web-tasarim">
<link rel="alternate" hreflang="x-default" href="https://cyftech.com.tr/donusum-odakli-web-tasarim">
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
  <a class="logo" href="./" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
      <div class="lang-menu"><a href="donusum-odakli-web-tasarim" hreflang="tr" lang="tr" data-lang="tr" aria-current="true"><b>TR</b><span>Türkçe</span></a><a href="en/donusum-odakli-web-tasarim" hreflang="en" lang="en" data-lang="en"><b>EN</b><span>English</span></a><a href="de/donusum-odakli-web-tasarim" hreflang="de" lang="de" data-lang="de"><b>DE</b><span>Deutsch</span></a><a href="ar/donusum-odakli-web-tasarim" hreflang="ar" lang="ar" data-lang="ar"><b>AR</b><span>العربية</span></a><a href="zh/donusum-odakli-web-tasarim" hreflang="zh" lang="zh" data-lang="zh"><b>ZH</b><span>中文</span></a><a href="ru/donusum-odakli-web-tasarim" hreflang="ru" lang="ru" data-lang="ru"><b>RU</b><span>Русский</span></a></div>
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
    <h1 class="h1" style="max-width:900px">Dönüşüm odaklı web tasarım: ziyaretçiyi müşteriye çeviren ilkeler.</h1>
    <div class="bi-meta"><div class="bi-tag"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/></svg>Web Tasarım</div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg><time datetime="2026-10-31">31 Ekim 2026</time></div><div><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>10 dk okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/donusum-odakli-web-tasarim.svg" alt=""></div>
      <p class="bi-lead">Sitenize her ay yüzlerce kişi geliyor ama telefon çalmıyor, form dolmuyor mu? Sorun çoğu zaman trafik değil, tasarımdır. <b>Dönüşüm odaklı web tasarım</b>, ziyaretçinin sitede ne yapmasını istediğinizi merkeze alır ve her öğeyi o eyleme hizmet edecek şekilde kurar.</p>
      <p>Estetik önemlidir; ama bir web sitesinin işi beğenilmek değil, sonuç üretmektir. Teklif talebi, satın alma, randevu, abonelik ya da bir telefon araması: hangisi sizin için değerliyse tasarımın her kararı ona göre verilmelidir.</p>
      <p>Bu yazıda dönüşümün ne olduğunu ve nasıl ölçüldüğünü, ardından kullanıcı deneyimi (UX) araştırmalarına dayanan ve bizim projelerimizde de uyguladığımız temel ilkeleri anlatıyoruz. Her ilkenin sonunda kendi sitenizde hemen kontrol edebileceğiniz somut öneriler bulacaksınız.</p>
      <h2 id="donusum-nedir" class="bi-h2" data-n="01">Dönüşüm nedir, dönüşüm oranı nasıl hesaplanır?</h2>
      <p>Dönüşüm, ziyaretçinin sitede sizin için değerli bir eylemi tamamlamasıdır. Dönüşüm oranı ise bu eylemi yapan ziyaretçi sayısının toplam ziyaretçi sayısına bölünmesiyle bulunur. Ayda 2.000 ziyaretçi alan ve 40 teklif talebi toplayan bir sitenin dönüşüm oranı yüzde 2’dir.</p>
      <p>Dönüşümleri ikiye ayırmak faydalıdır:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Makro dönüşüm:</b> Asıl hedef. Satın alma, teklif formu, randevu, telefon araması.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Mikro dönüşüm:</b> Hedefe giden adımlar. Katalog indirme, bültene kayıt, fiyat sayfasını görüntüleme, WhatsApp butonuna tıklama.</span></li>
      </ul>
      <p>“İyi dönüşüm oranı kaçtır?” sorusunun tek bir cevabı yoktur; sektör, trafik kaynağı, ürün fiyatı ve hedef eyleme göre büyük farklar görülür. En sağlıklı kıyas, kendi sitenizin geçen ayki ve geçen yılki değeridir. Önce ölçün, sonra iyileştirin.</p>
      <h2 id="ilk-ekran" class="bi-h2" data-n="02">İlk ekran: birkaç saniyede “neden siz?” sorusunu yanıtlayın</h2>
      <p>Ziyaretçi sayfayı açtığında kaydırmadan gördüğü alan, kalıp kalmayacağına karar verdiği yerdir. Bu alanda üç sorunun cevabı net olmalıdır: <b>Ne yapıyorsunuz, kimin için yapıyorsunuz ve ziyaretçi şimdi ne yapmalı?</b></p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Fayda anlatan başlık:</b> “Geleceğin çözümleri” gibi genel sloganlar yerine “Apartman aidatlarını tek panelden takip edin” gibi somut bir vaat.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Destekleyici alt başlık:</b> Vaadi bir cümleyle somutlaştırın: kime, nasıl, ne kadar sürede.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Tek bir ana buton:</b> Ziyaretçinin atması gereken ilk adım.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gerçek görsel:</b> Ürününüzün ekranı, ekibiniz ya da yaptığınız iş. Stok fotoğraflar güven değil şüphe uyandırır.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg><div><b>Beş saniye testi:</b> Sitenizi tanımayan birine ana sayfayı beş saniye gösterip kapatın. Ardından “Bu firma ne yapıyor, senden ne istiyor?” diye sorun. Cevap veremiyorsa ilk ekranı yeniden yazmanın zamanı gelmiştir.</div></div>
      <h2 id="cta" class="bi-h2" data-n="03">Eylem çağrısı (CTA) tasarımı: tek hedef, net metin</h2>
      <p>Eylem çağrısı butonları dönüşüm odaklı tasarımın kalbidir. Her sayfanın bir ana hedefi olmalı ve sayfadaki görsel hiyerarşi o hedefe işaret etmelidir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Fiil ile başlayan, sonucu anlatan metin:</b> “Gönder” yerine “Ücretsiz teklif alın”, “Tıklayın” yerine “Demo randevusu oluşturun”.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Kontrast:</b> Ana buton, sayfadaki diğer öğelerden renk ve boyutla ayrışmalı. İkincil eylemler daha sade görünmeli.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Doğru yer:</b> İlk ekranda bir kez, uzun sayfalarda ilgili bölümlerin sonunda tekrar. Mobilde başparmağın ulaştığı alanda.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Az seçenek:</b> Aynı alanda beş farklı buton, ziyaretçiyi karar vermekten alıkoyar. Seçenekler azaldıkça karar kolaylaşır.</span></li>
      </ul>
      <p>Butonun hemen altına kaygıyı azaltan kısa bir not eklemek de işe yarar: “Ücretsizdir, 24 saat içinde dönüş yapıyoruz” ya da “Kredi kartı gerekmez” gibi.</p>
      <h2 id="hiyerarsi" class="bi-h2" data-n="04">Görsel hiyerarşi ve taranabilir içerik</h2>
      <p>İnsanlar web sayfalarını okumaz, tarar. Nielsen Norman Group’un göz izleme araştırmaları, kullanıcıların metin ağırlıklı sayfalarda büyük ölçüde “F” şeklinde bir tarama deseni izlediğini ve bu desenin masaüstünde de mobilde de geçerliliğini koruduğunu gösteriyor. Bu desenin dışında kalan bilgiler büyük ölçüde gözden kaçar. Sağdan sola okunan dillerde, örneğin Arapçada, desen tersine döner.</p>
      <p>Bu davranışa göre tasarlamanın yolları:</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Her bölümü açıklayıcı bir ara başlıkla başlatın; başlıkları okuyan kişi sayfanın özetini almalı.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Paragrafları kısa tutun, önemli bilgiyi cümlenin başına koyun ve anahtar ifadeleri kalın yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Uzun açıklamalar yerine madde işaretli listeler, karşılaştırma tabloları ve ikonlu kartlar kullanın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Beyaz alandan korkmayın; sıkışık bir sayfa ne kadar bilgi içerirse içersin okunmaz.</span></li>
      </ul>
      <blockquote><div class="bi-q"><svg class="ic" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/></svg></div>Ziyaretçi aradığını bulmak için düşünmek zorunda kalıyorsa, tasarım işini yapmıyor demektir.</blockquote>
      <h2 id="formlar" class="bi-h2" data-n="05">Form tasarımı: her alan bir engel</h2>
      <p>Formlar dönüşümün gerçekleştiği yerdir ve en çok kaybın yaşandığı yer de genellikle burasıdır. Baymard Institute’un e-ticaret ödeme süreci araştırması, ortalama bir ödeme akışında varsayılan olarak 14,88 form alanı gösterildiğini, oysa ideal bir akışın 7–8 alanla tamamlanabileceğini ortaya koyuyor. Aynı ilke teklif ve iletişim formları için de geçerlidir: sorduğunuz her ek soru, formu yarıda bırakmak için bir gerekçedir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Yalnızca gerekeni sorun:</b> İlk temasta ad, telefon veya e-posta ve kısa bir mesaj çoğu zaman yeterlidir. Ayrıntıyı görüşmede alırsınız.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Etiketleri alanın üstüne yazın:</b> Yalnızca kutunun içindeki silik yazıya güvenmeyin; yazmaya başlayınca kaybolur.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Doğru klavyeyi açın:</b> Telefon alanında rakam klavyesi, e-posta alanında @ işaretli klavye mobilde ciddi fark yaratır.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Hataları anında ve nazikçe gösterin:</b> Form gönderildikten sonra tüm alanları silen bir hata mesajı, ziyaretçiyi kalıcı olarak kaybettirir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Teşekkür sayfası kullanın:</b> Hem ziyaretçiye ne olacağını anlatır hem de dönüşümü ölçmeyi kolaylaştırır.</span></li>
      </ul>
      <div class="bi-note"><svg class="ic" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg><div><b>KVKK hatırlatması:</b> Formda kişisel veri topluyorsanız aydınlatma metnine bağlantı vermeniz, pazarlama iletişimi için ayrı ve önceden işaretlenmemiş bir onay kutusu kullanmanız gerekir. Bu not hukuki danışmanlık değildir; ayrıntılar için <a href="kvkk-uyumlu-web-sitesi">KVKK uyumlu web sitesi</a> yazımıza ve bir hukukçuya başvurun.</div></div>
      <h2 id="guven" class="bi-h2" data-n="06">Güven unsurları ve sosyal kanıt</h2>
      <p>Ziyaretçi sizi tanımıyorsa, karar vermeden önce kanıt arar. Baymard’ın aynı araştırmasında kullanıcıların yaklaşık beşte biri, siteye kart bilgisini emanet edecek kadar güvenmedikleri için alışverişi yarıda bıraktığını söylüyor. Güven, tasarımın bir süsü değil, dönüşümün ön koşuludur.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Gerçek referanslar:</b> Müşteri logoları, isim ve fotoğrafla desteklenmiş yorumlar, tamamlanmış proje örnekleri.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Somut rakamlar:</b> Kaç yıldır faaliyettesiniz, kaç projeyi tamamladınız? Doğrulanabilir olanları yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Şeffaf iletişim bilgileri:</b> Açık adres, sabit telefon, harita ve çalışma saatleri.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Teknik güven işaretleri:</b> HTTPS, güncel bir tasarım ve hatasız çalışan sayfalar. Kırık bir bağlantı bile güveni sarsar.</span></li>
      </ul>
      <p>Referansları ayrı bir sayfada saklamak yerine karar anına yakın yerleştirin: fiyat bilgisinin ya da teklif butonunun yanında bir müşteri yorumu, “Hakkımızda” sayfasının en altında kalan bir logodan çok daha etkilidir.</p>
      <h2 id="surtunme" class="bi-h2" data-n="07">Sürtünmeyi azaltın: ziyaretçiyi yoran küçük engeller</h2>
      <p>Dönüşümü öldüren şey çoğu zaman tek bir büyük hata değil, üst üste binen küçük engellerdir. Baymard’ın listesindeki terk nedenlerine bakınca tablo netleşir: beklenmedik ek maliyetler, zorunlu üyelik, uzun ve karmaşık süreçler, site hataları. Bunların hiçbiri tasarım ekibinin kontrolü dışında değildir.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Sade menü:</b> Ana menüde beş-yedi öğe çoğu site için yeterlidir. Menü öğelerine iç jargon değil, müşterinin aradığı kelimeleri yazın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Saygılı açılır pencereler:</b> Sayfa açılır açılmaz ekranı kaplayan bülten pencereleri, ziyaretçiyi içeriği görmeden kaçırır. Gerekiyorsa sayfanın sonuna doğru ve kolayca kapatılabilir biçimde gösterin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Şeffaf fiyat ve koşullar:</b> Kargo, kurulum ya da ek ücretleri son adımda değil, en baştan gösterin. Sürpriz maliyet, en sık terk nedenidir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Üyeliği zorunlu tutmayın:</b> E-ticarette misafir olarak satın alma seçeneği sunun; üyeliği işlemden sonra önerin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>Alternatif iletişim yolları:</b> Formu doldurmak istemeyen ziyaretçi için telefon ve WhatsApp seçeneği görünür olsun.</span></li>
      </ul>
      <p>Kendi sitenizde bir müşteri gibi baştan sona bir işlem yapın: ürün seçin, form doldurun, telefonda deneyin. Sizi bir saniye bile duraksatan her nokta, ziyaretçilerinizin bir kısmını kaybettiğiniz yerdir.</p>
      <h2 id="hiz-mobil" class="bi-h2" data-n="08">Hız ve mobil deneyim: görünmeyen dönüşüm katili</h2>
      <p>Yavaş açılan bir sayfa, ziyaretçinin tasarımınızı görmesine bile fırsat vermez. Google, sayfa deneyimini Core Web Vitals adı verilen üç metrikle ölçer ve web.dev’de iyi deneyim için şu eşikleri önerir:</p>
      <table>
        <thead><tr><th>Metrik</th><th>Neyi ölçer?</th><th>İyi kabul edilen değer</th></tr></thead>
        <tbody>
          <tr><td>LCP (Largest Contentful Paint)</td><td>Ana içeriğin yüklenme süresi</td><td>2,5 saniye veya altı</td></tr>
          <tr><td>INP (Interaction to Next Paint)</td><td>Tıklamalara verilen tepki hızı</td><td>200 milisaniye veya altı</td></tr>
          <tr><td>CLS (Cumulative Layout Shift)</td><td>Sayfa yüklenirken öğelerin kayması</td><td>0,1 veya altı</td></tr>
        </tbody>
      </table>
      <p>Bunlar yalnızca SEO metrikleri değildir; doğrudan dönüşümü etkiler. Butona basmak üzereyken kayan bir sayfa ya da tepki vermeyen bir form, ziyaretçinin vazgeçmesi için yeterlidir. Hız optimizasyonunun ayrıntılarını <a href="site-hizi-core-web-vitals">site hızı ve Core Web Vitals</a> yazımızda anlattık.</p>
      <p>Mobilde ayrıca telefon numarasının tek dokunuşla aranabilmesi, butonların parmakla rahat basılacak büyüklükte olması ve açılır pencerelerin ekranı kapatmaması gerekir.</p>
      <h2 id="olcum-test" class="bi-h2" data-n="09">Ölçüm ve A/B testi: tahmin değil veri</h2>
      <p>Dönüşüm odaklı tasarım bir kerelik bir iş değil, sürekli bir döngüdür. “Bence bu renk daha iyi” tartışmaları yerine verinin konuşmasına izin verin.</p>
      <ul class="bi-list">
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>1. Adım — Hedefleri tanımlayın:</b> Google Analytics 4’te form gönderimi, telefon tıklaması ve WhatsApp tıklamasını önemli etkinlik olarak işaretleyin.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>2. Adım — Sızıntıyı bulun:</b> Ziyaretçilerin en çok hangi sayfada çıktığına, formun hangi alanında vazgeçtiğine bakın.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>3. Adım — Davranışı izleyin:</b> Isı haritaları ve oturum kayıtları, ziyaretçinin nereye tıkladığını ve nerede takıldığını gösterir.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>4. Adım — Tek değişkeni test edin:</b> Başlığı, buton metnini ya da form uzunluğunu A/B testiyle karşılaştırın. Aynı anda her şeyi değiştirirseniz neyin işe yaradığını bilemezsiniz.</span></li>
        <li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span><b>5. Adım — Yeterli veri bekleyin:</b> Düşük trafikli sitelerde birkaç günlük sonuç yanıltıcıdır; kararı anlamlı bir örneklemle verin.</span></li>
      </ul>
      <p>Reklam trafiği alan sayfalar için bu ilkelerin özel bir uygulamasını <a href="landing-page-rehberi">landing page rehberimizde</a> bulabilirsiniz.</p>
      <div class="bi-check">
        <div class="eyebrow">// DÖNÜŞÜM İÇİN HIZLI KONTROL LİSTESİ</div>
        <ul class="bi-list"><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Her sayfanın tek bir ana hedefi var mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>İlk ekran ne yaptığınızı ve kime hitap ettiğinizi söylüyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Ana buton metni sonucu anlatıyor mu?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Formda yalnızca gerçekten gerekli alanlar mı var?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Referans ve yorumlar karar anına yakın mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>LCP, INP ve CLS değerleri iyi aralıkta mı?</span></li><li><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12l5 5 9-10"/></svg><span>Form ve telefon tıklamaları analitikte ölçülüyor mu?</span></li></ul>
      </div>
      <h2 id="sss" class="bi-h2" data-n="10">Sık sorulan sorular</h2>
      <div class="bi-faq"><details class="bi-faq-i"><summary>Dönüşüm odaklı web tasarım nedir?</summary><p>Ziyaretçinin sitede belirli bir eylemi, örneğin teklif istemeyi, satın almayı ya da aramayı tamamlamasını kolaylaştırmayı amaçlayan tasarım yaklaşımıdır. Sayfa düzeni, metinler, butonlar, formlar ve hız bu hedefe göre kurgulanır ve sonuçlar veriyle ölçülerek sürekli iyileştirilir.</p></details><details class="bi-faq-i"><summary>İyi bir dönüşüm oranı kaçtır?</summary><p>Evrensel bir doğru değer yoktur. Sektör, ürün fiyatı, trafik kaynağı ve hedef eyleme göre oranlar büyük farklılık gösterir. En sağlıklı karşılaştırma, kendi sitenizin önceki dönemlerdeki performansıdır.</p></details><details class="bi-faq-i"><summary>Web sitemin dönüşüm oranını nasıl artırırım?</summary><p>Önce hedeflerinizi analitikte ölçmeye başlayın. Ardından ilk ekranı netleştirin, tek ve açık bir eylem çağrısı kullanın, formları kısaltın, güven unsurlarını görünür kılın ve sayfa hızını iyileştirin. Değişiklikleri tek tek test ederek hangisinin işe yaradığını görün.</p></details><details class="bi-faq-i"><summary>UX ile dönüşüm oranı arasındaki ilişki nedir?</summary><p>Kullanıcı deneyimi, ziyaretçinin aradığını ne kadar kolay bulduğunu ve işlemi ne kadar zahmetsiz tamamladığını belirler. Kafa karıştıran menüler, uzun formlar ve yavaş sayfalar sürtünme yaratır; sürtünme azaldıkça dönüşüm genellikle artar.</p></details><details class="bi-faq-i"><summary>A/B testi küçük siteler için anlamlı mı?</summary><p>Trafiği düşük sitelerde istatistiksel olarak anlamlı sonuç almak uzun sürer. Bu durumda önce bilinen iyi uygulamaları hayata geçirmek, kullanıcı görüşmeleri ve oturum kayıtlarıyla sorunları bulmak daha verimlidir; A/B testini trafik arttıkça devreye alabilirsiniz.</p></details></div>
      <h2 id="sonuc">Son söz</h2>
      <p>Dönüşüm odaklı web tasarım; net bir ilk ekran, tek bir hedefe işaret eden eylem çağrıları, kısa formlar, görünür güven unsurları ve hızlı sayfalarla başlar, ölçüm ve testle olgunlaşır. Güzel bir site ile iş getiren bir site arasındaki fark çoğu zaman bu küçük ama bilinçli kararlarda saklıdır.</p>
      <p>Mevcut sitenizin nerede ziyaretçi kaybettiğini birlikte incelemek ya da yeni sitenizi baştan dönüşüm odaklı kurgulamak isterseniz <a href="iletisim">bize yazın</a>. Tasarım ve geliştirme hizmetlerimizin ayrıntıları <a href="web-cozumleri">web çözümleri</a> sayfamızda.</p>
      <div class="bi-src"><div class="eyebrow">// KAYNAKLAR</div><ol><li><a href="https://www.nngroup.com/articles/f-shaped-pattern-reading-web-content/" target="_blank" rel="noopener nofollow">Nielsen Norman Group — F-Shaped Pattern of Reading on the Web</a></li><li><a href="https://baymard.com/lists/cart-abandonment-rate" target="_blank" rel="noopener nofollow">Baymard Institute — Cart Abandonment Rate Statistics</a></li><li><a href="https://web.dev/articles/vitals" target="_blank" rel="noopener nofollow">web.dev — Web Vitals</a></li><li><a href="https://support.google.com/analytics/answer/13965727" target="_blank" rel="noopener nofollow">Google Analytics Yardım — Önemli etkinlikler</a></li><li><a href="https://www.kvkk.gov.tr/" target="_blank" rel="noopener nofollow">KVKK — Kişisel Verileri Koruma Kurumu</a></li></ol></div>
      <div class="bi-foot">
        <a class="bi-back" href="blog"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg>Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/></svg>Paylaş</div><a class="bi-share-btn" data-share="wa" href="#" target="_blank" rel="noopener" aria-label="WhatsApp ile paylaş" title="WhatsApp ile paylaş"><svg width="18" height="18" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg></a><a class="bi-share-btn" data-share="li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn’de paylaş" title="LinkedIn’de paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/></svg></a><a class="bi-share-btn" data-share="x" href="#" target="_blank" rel="noopener" aria-label="X’te paylaş" title="X’te paylaş"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a><a class="bi-share-btn" data-share="mail" href="#" target="_blank" rel="noopener" aria-label="E-posta ile gönder" title="E-posta ile gönder"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></div>
      </div>
    </article>
    <aside class="bi-aside">
      <nav class="bi-box" aria-label="İçindekiler">
        <div class="eyebrow">// BU YAZIDA</div>
        <ol class="bi-toc"><li><a href="#donusum-nedir" data-n="01">Dönüşüm nedir?</a></li><li><a href="#ilk-ekran" data-n="02">İlk ekran ve değer önerisi</a></li><li><a href="#cta" data-n="03">Eylem çağrısı (CTA)</a></li><li><a href="#hiyerarsi" data-n="04">Taranabilir içerik</a></li><li><a href="#formlar" data-n="05">Form tasarımı</a></li><li><a href="#guven" data-n="06">Güven ve sosyal kanıt</a></li><li><a href="#surtunme" data-n="07">Sürtünmeyi azaltın</a></li><li><a href="#hiz-mobil" data-n="08">Hız ve mobil deneyim</a></li><li><a href="#olcum-test" data-n="09">Ölç, test et, iyileştir</a></li><li><a href="#sss" data-n="10">Sık sorulan sorular</a></li></ol>
      </nav>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others"><li><a href="kurumsal-web-sitesi-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Kurumsal Web Sitesi Yaptırmadan Önce Bilmeniz Gereken 7 Şey</b><span class="bi-read">6 dk okuma</span></div></a></li><li><a href="web-sitesi-fiyatlari"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Web Sitesi Fiyatları 2026: Maliyeti Belirleyen 9 Faktör</b><span class="bi-read">10 dk okuma</span></div></a></li><li><a href="alan-adi-ve-hosting-secimi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi</b><span class="bi-read">9 dk okuma</span></div></a></li><li><a href="seo-nedir"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg></span><div><span class="d">31 Ekim 2026</span><b>SEO Nedir? 2026 İçin Sade ve Uygulanabilir Başlangıç Rehberi</b><span class="bi-read">8 dk okuma</span></div></a></li><li><a href="e-ticaret-sitesi-kurma-rehberi"><span class="bi-oic"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/></svg></span><div><span class="d">31 Ekim 2026</span><b>E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası</b><span class="bi-read">10 dk okuma</span></div></a></li></ul>
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
        <a class="logo" href="./" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
