import os, re, sys
OUT = sys.argv[1]
VER = '20261023'  # bump on every deploy so browsers fetch fresh css/js

TEL = '0543 791 10 61'
TEL_HREF = 'tel:+905437911061'
MAIL = 'info@cyftech.com.tr'
WA = 'https://wa.me/905437911061'
MAPS = 'https://maps.app.goo.gl/161gqpBeCkMonnv89'

SERVICES = [
    ('web-cozumleri.html', 'Web Çözümleri', 'Web tasarım, yazılım, e-ticaret ve SEO — tek çatı altında.'),
    ('masaustu-uygulamalar.html', 'Masaüstü Uygulamalar', 'İşinize özel, çevrimdışı da çalışan masaüstü yazılımlar.'),
    ('mobil-uygulamalar.html', 'Mobil Uygulamalar', 'iOS ve Android için hızlı, kullanıcı dostu uygulamalar.'),
]

PROJECTS = [
    dict(ad='Hürsat', sektor='E-Ticaret Yazılımı', img='assets/img/proje/01.png',
         aciklama='İşletmelere e-ticaret yazılım çözümleri sunan Hürsat için paketlerini ve iletişim adımlarını öne çıkaran, tüm cihazlara uyumlu bir web sitesi hazırladık.',
         tags=['Web Tasarım', 'E-Ticaret']),
    dict(ad='Softrue Solutions', sektor='Yazılım', img='assets/img/proje/02.png',
         aciklama='Yazılım çözümleri geliştiren Softrue Solutions için ürünlerini, güvenlik yaklaşımını ve kurumsal kimliğini anlatan bir web sitesi geliştirdik.',
         tags=['Web Tasarım', 'Web Geliştirme']),
    dict(ad='Sistem KYS', sektor='KOBİ Yönetim Platformu', img='assets/img/proje/03.png',
         aciklama='Ekonomik ve sürdürülebilir bir KOBİ yönetim platformu olan Sistem KYS için platformu tanıtan bir web sitesi geliştirdik.',
         tags=['Web Geliştirme']),
    dict(ad='Eurolab', sektor='Laboratuvar', img='assets/img/proje/eurolab.webp',
         aciklama='EUROLAB için kullanıcı dostu arayüzüyle laboratuvar hizmetlerini sunan kurumsal web sitesini hayata geçirdik.',
         tags=['Web Tasarım', 'SEO']),
]

POSTS = [
    dict(date='24 Ağustos 2025', title="CYF Tech ÜLKE TV'de", img='assets/img/blog/ulketv.webp', href='blog-inside.html',
         ozet='CYF Tech, Ülke TV’de yayınlanan Aycan Gül ile Yeni Nesil İşler programına konuk oldu; kuruluş hikâyemizi, projelerimizi ve yapay zekânın iş dünyasına etkisini konuştuk.'),
    dict(date='22 Mayıs 2025', title='SEO Stratejileri ile Trafik Artırma', img='assets/img/blog/03.png', href=None,
         ozet='Arama motorlarında görünürlüğü artırmak için teknik SEO, içerik ve bağlantı stratejileri.'),
    dict(date='25 Nisan 2025', title='Web Tasarımında 5 Temel İpucu', img='assets/img/blog/01.jpeg', href=None,
         ozet='Ziyaretçinin ilk saniyede güven duyduğu, sade ve hızlı bir web sitesi için temel ilkeler.'),
    dict(date='2 Nisan 2025', title='Dijital Pazarlamada En İyi Uygulamalar', img='assets/img/blog/02.webp', href=None,
         ozet='Markanızı dijitalde doğru kitleye ulaştırmak için öne çıkan yöntemler.'),
]

I_CHEV = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>'
I_MENU = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>'
I_WA = '<svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>'
I_DOWN = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 4v16M6 14l6 6 6-6"/></svg>'
I_DRAG = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 9l-4 3 4 3M16 9l20 3-4 3M4 12h16"/></svg>'.replace('l20 3', 'l4 3')


def cur(active, key):
    return ' aria-current="page"' if active == key else ''


def header(active, overlay=False, progress=False):
    dd = ''.join(
        f'<a href="{h}"{cur(active, h)}><span class="num">0{i+1}</span><span><b>{t}</b><small>{d}</small></span></a>'
        for i, (h, t, d) in enumerate(SERVICES))
    mserv = ''.join(f'<a href="{h}"{cur(active, h)}>{t}</a>' for h, t, _ in SERVICES)
    is_serv = active in [s[0] for s in SERVICES]
    return f'''<header class="site-head{' overlay' if overlay else ''}">
  <a class="logo" href="index.html" aria-label="CYF Tech ana sayfa"><span class="logo-mark">&lt;/&gt;</span><span class="logo-word">cyf<span>tech</span></span></a>
  <nav class="nav" aria-label="Ana menü">
    <div class="nav-dd{' is-current' if is_serv else ''}">
      <button type="button" aria-haspopup="true">Hizmetler {I_CHEV}</button>
      <div class="dd-menu">{dd}</div>
    </div>
    <a href="projelerimiz.html"{cur(active, 'projeler')}>Projeler</a>
    <a href="referanslar.html"{cur(active, 'referanslar')}>Referanslar</a>
    <a href="blog.html"{cur(active, 'blog')}>Blog</a>
    <a href="hakkimizda.html"{cur(active, 'hakkimizda')}>Hakkımızda</a>
    <a href="iletisim.html"{cur(active, 'iletisim')}>İletişim</a>
  </nav>
  <div class="head-actions">
    <a class="btn btn-primary btn-sm" href="iletisim.html">Teklif Al</a>
    <button class="menu-btn" type="button" aria-label="Menüyü aç" aria-expanded="false" aria-controls="mnav">{I_MENU}</button>
  </div>
  {'<div class="head-prog" aria-hidden="true"></div>' if progress else ''}
</header>
<nav class="mnav" id="mnav" aria-label="Mobil menü">
  <a href="index.html"{cur(active, 'home')}>Ana Sayfa</a>
  <div class="mnav-label">HİZMETLER</div>
  {mserv}
  <div class="mnav-label">KURUMSAL</div>
  <a href="projelerimiz.html"{cur(active, 'projeler')}>Projeler</a>
  <a href="referanslar.html"{cur(active, 'referanslar')}>Referanslar</a>
  <a href="blog.html"{cur(active, 'blog')}>Blog</a>
  <a href="hakkimizda.html"{cur(active, 'hakkimizda')}>Hakkımızda</a>
  <a href="iletisim.html"{cur(active, 'iletisim')}>İletişim</a>
  <a class="btn btn-primary" href="iletisim.html">Teklif Al</a>
</nav>'''


def footer():
    serv = ''.join(f'<li><a href="{h}">{t}</a></li>' for h, t, _ in SERVICES)
    return f'''<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="index.html" aria-label="CYF Tech ana sayfa"><span class="logo-mark">&lt;/&gt;</span><span class="logo-word">cyf<span>tech</span></span></a>
        <p>Dijitalin güvenilir noktası. Web tasarım, yazılım geliştirme ve dijital çözümler.</p>
      </div>
      <div>
        <h2>HIZLI MENÜ</h2>
        <ul><li><a href="index.html">Ana Sayfa</a></li><li><a href="projelerimiz.html">Projeler</a></li><li><a href="referanslar.html">Referanslar</a></li><li><a href="blog.html">Blog</a></li><li><a href="hakkimizda.html">Hakkımızda</a></li><li><a href="iletisim.html">İletişim</a></li></ul>
      </div>
      <div>
        <h2>HİZMETLER</h2>
        <ul>{serv}</ul>
      </div>
      <div>
        <h2>İLETİŞİM</h2>
        <ul><li><a href="{TEL_HREF}">{TEL}</a></li><li><a href="mailto:{MAIL}">{MAIL}</a></li><li><a href="{WA}" target="_blank" rel="noopener">WhatsApp</a></li><li><a href="{MAPS}" target="_blank" rel="noopener">Şehzadeler / Manisa</a></li></ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 CYF Tech — Dijitalin güvenilir noktası.</span>
      <span>Tüm hakları saklıdır.</span>
    </div>
  </div>
</footer>'''


def number_sections(body):
    """Give every section head a sequential watermark numeral (data-num="01", "02", …)."""
    counter = [0]

    def sub(m):
        counter[0] += 1
        return f'{m.group(1) or m.group(2)} data-num="{counter[0]:02d}"'
    # a section head gets the attribute appended; an explicit empty slot (data-num="") gets filled
    return re.sub(r'(<div class="sec-head"|<div class="reveal") data-num=""|(<div class="sec-head")', sub, body)


def doc(fname, title, desc, body, active, css=(), js=(), overlay=False, progress=False, vt323=False, wa=True, ambient=True, body_class=''):
    fonts = 'family=JetBrains+Mono:wght@400;500;700&amp;family=Space+Grotesk:wght@400;500;600;700' + ('&amp;family=VT323' if vt323 else '') + '&amp;display=swap'
    css_tags = ''.join(f'\n<link rel="stylesheet" href="assets/css/{c}?v={VER}">' for c in ('site.css',) + tuple(css))
    js_list = ('site.js',) + (('ambient.js',) if ambient else ()) + tuple(js)
    js_tags = ''.join(f'\n<script src="assets/js/{j}?v={VER}" defer></script>' for j in js_list)
    fab = f'\n<a class="wa-fab" href="{WA}" target="_blank" rel="noopener" aria-label="WhatsApp ile yazın">{I_WA}</a>' if wa else ''
    body = number_sections(body)
    body_attr = f' class="{body_class}"' if body_class else ''
    html = f'''<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{title}</title>
<meta name="description" content="{desc}">
<meta name="theme-color" content="#040814">
<meta property="og:title" content="{title}">
<meta property="og:description" content="{desc}">
<meta property="og:type" content="website">
<link rel="icon" type="image/png" href="assets/img/logo/ico.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?{fonts}">{css_tags}{js_tags}
</head>
<body{body_attr}>
<a class="sr-only" href="#icerik">İçeriğe geç</a>
{header(active, overlay, progress)}
<main id="icerik">
{body}
</main>
{footer()}{fab}
</body>
</html>
'''
    with open(os.path.join(OUT, fname), 'w', encoding='utf-8', newline='\n') as f:
        f.write(html)


def floor():
    return '<div class="floor" aria-hidden="true"><div><div></div></div></div>'


def page_hero(crumb, eyebrow, h1, lead, extra='', right=''):
    inner = f'''<div class="crumbs"><a href="index.html">CYF TECH</a><span>/</span><span>{crumb}</span></div>
      <div class="eyebrow">{eyebrow}</div>
      <h1 class="h1">{h1}</h1>
      <p class="lead" style="margin-top:24px">{lead}</p>{extra}'''
    if right:
        inner = f'<div class="hero-grid"><div>{inner}</div><div>{right}</div></div>'
    return f'''<section class="page-hero">
  {floor()}
  <div class="wrap">
      {inner}
  </div>
</section>'''


def project_cards(limit=None, link='referanslar.html'):
    out = []
    for p in PROJECTS[:limit]:
        tags = ''.join(f'<span>{t}</span>' for t in p['tags'])
        out.append(f'''<a class="pcard reveal" href="{link}">
        <div class="pcard-img"><img src="{p['img']}" alt="{p['ad']} web sitesi ekran görüntüsü" loading="lazy"></div>
        <div class="pcard-body"><div class="pcard-meta">{p['sektor']}</div><h3 class="h3">{p['ad']}</h3><p>{p['aciklama']}</p><div class="tags">{tags}</div></div>
      </a>''')
    return '\n      '.join(out)


def project_marquee():
    """Full-bleed, tilted, self-scrolling strip of the real project mockups (two copies for a seamless loop)."""
    items = ''.join(f'''<a class="mq-item" href="referanslar.html"><img src="{p['img']}" alt="{p['ad']} web sitesi ekran görüntüsü" loading="lazy"><div class="mq-cap"><b>{p['ad']}</b><span>{p['sektor']}</span></div></a>''' for p in PROJECTS)
    return f'''<div class="marquee" aria-label="Tamamlanan projeler">
  <div class="mq-tilt"><div class="marquee-track"><div class="mq-set">{items}</div><div class="mq-set" aria-hidden="true">{items}</div></div></div>
</div>'''


def cta(title='Projenizi birlikte hayata geçirelim.', text='Aklınızdaki projeyi anlatın, size özel teklifimizi hazırlayalım.'):
    return f'''<section class="band-light">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="cta reveal">
      <div style="position:relative">
        <div class="eyebrow">// HAYDİ BAŞLAYALIM</div>
        <h2 class="h2">{title}</h2>
        <p class="lead" style="margin-top:20px">{text}</p>
        <div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="{WA}" target="_blank" rel="noopener">WhatsApp'tan yazın</a></div>
      </div>
      <div class="contact-lines" style="position:relative">
        <a href="{TEL_HREF}"><span class="k">tel</span>{TEL}</a>
        <a href="mailto:{MAIL}"><span class="k">mail</span>{MAIL}</a>
        <a href="{MAPS}" target="_blank" rel="noopener"><span class="k">adres</span>Şehzadeler / Manisa</a>
      </div>
    </div>
  </div>
</section>'''


# ------------------------------------------------------------------ home
def chipset(items, kind='dot'):
    out = []
    for tag, b, s in items:
        lead = f'<span class="tag">{tag}</span>' if kind == 'tag' else '<span class="dot"></span>'
        out.append(f'<div><div class="chip float">{lead}<div><b>{b}</b><small>{s}</small></div></div></div>')
    return '<div class="pc-chipset">' + ''.join(out) + '</div>'


def home():
    chips = [
        chipset([('', 'Güvenilirlik', 'Uzun soluklu iş ortaklığı'), ('', 'Hızlı teslimat', 'Planlanan takvimde'), ('', 'Özel çözümler', 'İşinize göre şekillenir'), ('', '7/24 destek', 'Yayından sonra da yanınızda')]),
        chipset([('ui', 'UI / UX', 'Kullanıcı akışı'), ('rwd', 'Responsive', 'Mobil · Tablet · Masaüstü'), ('br', 'Marka kimliği', 'Renk, tipografi, dil'), ('pr', 'Prototip', 'Kodlamadan önce test')], 'tag'),
        chipset([('{ }', 'API', 'Entegrasyonlar'), ('ssl', 'Güvenlik', 'Güvenli altyapı'), ('↗', 'Ölçeklenebilir', 'Büyümeye hazır'), ('cms', 'Yönetim paneli', 'İçeriği kendiniz yönetin')], 'tag'),
        chipset([('', 'Teknik SEO', 'Taranabilir yapı'), ('', 'Site hızı', 'Hızlı açılış'), ('', 'Anahtar kelime', 'Doğru aramalarda görünün'), ('', 'Raporlama', 'Ölçülebilir sonuç')]),
        chipset([('', 'Ödeme', 'Güvenli ödeme adımı'), ('', 'Ürün yönetimi', 'Stok ve varyant'), ('', 'Sipariş takibi', 'Kargo süreçleri'), ('', 'Kampanyalar', 'İndirim ve kupon')]),
        chipset([('01', 'Planlama', 'İhtiyaç analizi'), ('02', 'Tasarım', 'Arayüz ve akış'), ('03', 'Geliştirme', 'Kodlama ve test'), ('04', 'Yayın', 'Canlıya alma')], 'tag'),
        chipset([('', 'Telefon', TEL), ('', 'E-posta', MAIL), ('', 'WhatsApp', 'Hızlı iletişim'), ('', 'Teklif', 'Size özel fiyatlandırma')]),
    ]
    names = ['Giriş', 'Web Tasarım', 'Web Geliştirme', 'SEO', 'E-Ticaret', 'Süreç', 'İletişim']
    rail = ''.join(f'<a href="#p{i}" aria-label="{n}">0{i}<span></span></a>' for i, n in enumerate(names))

    def svc(i, side, bg, eyebrow, h2, p, items, href, link):
        lis = ''.join(f'<li>{x}</li>' for x in items)
        return f'''<section id="p{i}" class="pc-sec">
    <div class="bg-layer {bg} bg-fade" aria-hidden="true"></div>
    <div class="pc-txt {side}">
      <div class="eyebrow">{eyebrow}</div>
      <h2 class="pc-h2">{h2}</h2>
      <p class="pc-p">{p}</p>
      <ul class="arrow-list">{lis}</ul>
      <a class="link-arrow" href="{href}">{link}</a>
    </div>
  </section>'''

    recent = ' · '.join(f'<a href="referanslar.html">{p["ad"]}</a>' for p in PROJECTS)
    body = f'''<canvas class="pc-canvas" data-pc-canvas aria-hidden="true"></canvas>
<div class="pc-track">
  <section id="p0" class="pc-sec hero">
    <div class="bg-layer hero-floor" aria-hidden="true"><div><div><div></div></div></div></div>
    <div class="pc-txt l">
      <div class="eyebrow">// CYF TECH · YAZILIM &amp; DİJİTAL ÇÖZÜMLER</div>
      <h1 class="pc-h1">Yazılım ve dijitalin güvenilir <span class="accent">noktasıyız.</span></h1>
      <p class="pc-p">Dağınık fikirleri bir araya getirip hızlı, güvenli ve ölçeklenebilir dijital ürünlere dönüştürüyoruz.</p>
      <div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="projelerimiz.html">Projelerimize Göz At</a></div>
    </div>
    <div class="pc-hint">{I_DOWN}Kaydırın — noktalar dağılıp yeniden birleşsin</div>
  </section>

  {svc(1, 'r', 'bg-grid', '01 — WEB TASARIM', 'Modern ve kullanıcı dostu web siteleri.', 'Markanızın dijital yüzünü, ziyaretçinin ilk saniyede güven duyacağı sade ve net bir arayüzle tasarlıyoruz.', ['Kullanıcı deneyimi (UX) odaklı arayüz', 'Tüm ekranlarda mobil uyumlu tasarım', 'Markanıza özel görsel dil'], 'web-cozumleri.html#web-tasarim', 'Web tasarım hizmetini inceleyin →')}

  {svc(2, 'l', 'bg-lines', '02 — WEB GELİŞTİRME', 'Özel, güvenli ve ölçeklenebilir web uygulamaları.', 'Hazır kalıplara sığmayan ihtiyaçlarınız için iş süreçlerinize göre şekillenen yazılımlar geliştiriyoruz.', ['İhtiyaca özel mimari ve yönetim paneli', 'API ve sistem entegrasyonları', 'Büyüdükçe ölçeklenen altyapı'], 'web-cozumleri.html#web-gelistirme', 'Web geliştirme hizmetini inceleyin →')}

  {svc(3, 'r', 'bg-diag', '03 — SEO HİZMETLERİ', 'Görünürlüğünüzü artırıp müşteri kazandırıyoruz.', 'Sitenizi arama motorlarının anladığı, kullanıcıların kolayca bulduğu bir yapıya kavuşturuyoruz.', ['Teknik SEO ve site hızı optimizasyonu', 'Anahtar kelime ve içerik stratejisi', 'Düzenli raporlama ve takip'], 'web-cozumleri.html#seo', 'SEO hizmetini inceleyin →')}

  {svc(4, 'l', 'bg-dots', '04 — E-TİCARET SİTELERİ', 'Satış odaklı ve kullanıcı dostu e-ticaret.', 'Ürün vitrininden ödeme adımına kadar her ekranı, ziyaretçiyi müşteriye dönüştürmek için kurguluyoruz.', ['Güvenli ödeme altyapısı entegrasyonu', 'Kolay ürün, stok ve sipariş yönetimi', 'Kampanya ve indirim kurguları'], 'web-cozumleri.html#e-ticaret', 'E-ticaret hizmetini inceleyin →')}

  <section id="p5" class="pc-sec">
    <div class="bg-layer bg-rows bg-fade" aria-hidden="true"></div>
    <div class="pc-txt r">
      <div class="eyebrow">05 — ÇALIŞMA SÜRECİMİZ</div>
      <h2 class="pc-h2">Fikirden yayına dört adım.</h2>
      <ol class="steps">
        <li><span class="n">01</span><div><b>Planlama</b><span>İhtiyaçları ve hedefleri birlikte netleştiriyoruz.</span></div></li>
        <li><span class="n">02</span><div><b>Tasarım</b><span>Arayüzü ve kullanıcı akışını çiziyoruz.</span></div></li>
        <li><span class="n">03</span><div><b>Geliştirme</b><span>Tasarımı hızlı ve güvenli koda dönüştürüyoruz.</span></div></li>
        <li><span class="n">04</span><div><b>Yayın</b><span>Siteyi canlıya alıyor, 7/24 destekle yanınızda oluyoruz.</span></div></li>
      </ol>
    </div>
  </section>

  <section id="p6" class="pc-sec">
    <div class="bg-layer bg-grid-lg" aria-hidden="true"></div>
    <div class="pc-txt l" style="max-width:540px">
      <div class="eyebrow">06 — İLETİŞİM</div>
      <h2 class="pc-h2 xl">Projenizi birlikte hayata geçirelim.</h2>
      <p class="pc-p">Aklınızdaki projeyi anlatın, size özel teklifimizi hazırlayalım.</p>
      <div class="contact-lines">
        <a href="{TEL_HREF}"><span class="k">tel</span>{TEL}</a>
        <a href="mailto:{MAIL}"><span class="k">mail</span>{MAIL}</a>
      </div>
      <div class="btn-row" style="margin-top:32px"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="{WA}" target="_blank" rel="noopener">WhatsApp'tan yazın</a></div>
      <div class="pc-recent">Son projeler: {recent}</div>
    </div>
  </section>
</div>

<div class="pc-chips" aria-hidden="true">
  {''.join(chips)}
  <div class="pc-drag">{I_DRAG}sürükleyerek döndürün</div>
</div>
<nav class="pc-rail" aria-label="Bölümler">{rail}</nav>
<div class="pc-counter" aria-hidden="true"><span class="accent" data-cur-num>00</span><span>/ 06</span><span class="bar"></span><span style="color:var(--text)" data-cur-name>Giriş</span></div>'''
    doc('index.html', 'CYF Tech — Yazılım ve Dijitalin Güvenilir Noktası',
        'CYF Tech; web tasarım, web geliştirme, SEO ve e-ticaret çözümleriyle işletmenizi dijitalde büyütür. Manisa merkezli yazılım ve dijital çözümler.',
        body, 'home', css=('home.css',), js=('home.js',), overlay=True, progress=True, wa=False, ambient=False, body_class='home')


# ------------------------------------------------------------------ services
SV = {
    'web-tasarim.html': dict(
        n='01', t='Web Tasarım', title='Web Tasarım — CYF Tech',
        desc='Modern, hızlı ve kullanıcı dostu web siteleri. CYF Tech ile markanıza özel, mobil uyumlu ve SEO dostu web tasarımı.',
        h1='Modern ve kullanıcı dostu web siteleri.',
        lead='Profesyonel web tasarım hizmetimizle çevrimiçi varlığınızı güçlendirin. Markanızın dijital yüzünü, ziyaretçinin ilk saniyede güven duyacağı sade ve net bir arayüzle tasarlıyoruz.',
        offer=[('rwd', 'Responsive', 'Mobil, tablet ve masaüstünde kusursuz görünüm.'), ('seo', 'SEO Dostu', 'Arama motorlarının kolayca anladığı yapı.'), ('⚡', 'Yüksek Performans', 'Hızlı açılan, akıcı sayfalar.')],
        steps=[('Keşif ve Analiz', 'Müşterimizin hedeflerini, marka kimliğini ve ihtiyaçlarını detaylıca analiz ediyoruz.'),
               ('Tasarım Planlama', 'Kullanıcı deneyimini merkeze alarak wireframe ve tasarım konseptlerini oluşturuyoruz.'),
               ('Geliştirme ve Kodlama', 'Modern teknolojilerle, tasarımı işlevsel ve hızlı bir web sitesine dönüştürüyoruz.'),
               ('Test ve Optimizasyon', 'Tüm cihazlarda ve tarayıcılarda sorunsuz çalışması için performans testleri yapıyoruz.'),
               ('Yayınlama ve Destek', 'Siteyi yayına alıyor, 7/24 teknik destek ve bakım hizmeti sağlıyoruz.')],
        steps_h='Tasarım sürecimiz'),
    'web-gelistirme.html': dict(
        n='02', t='Web Geliştirme', title='Web Geliştirme — CYF Tech',
        desc='İhtiyacınıza özel, güvenli ve ölçeklenebilir web uygulamaları. Özel yazılım, API entegrasyonları ve sürekli destek.',
        h1='Özel, güvenli ve ölçeklenebilir web uygulamaları.',
        lead='Markanızın dijital gücünü artırmak için modern, ölçeklenebilir ve yüksek performanslı web uygulamaları geliştiriyoruz. İster kurumsal web sitesi, ister özel bir portal ya da e-ticaret altyapısı olsun; sizin için doğru teknolojiyi seçip kusursuz bir yazılım geliştiriyoruz.',
        offer=[('{ }', 'Özel Web Uygulamaları', 'İş süreçlerinize göre şekillenen yazılımlar.'), ('api', 'API ve Sistem Entegrasyonları', 'Kullandığınız sistemlerle konuşan altyapı.'), ('24/7', 'Bakım ve Sürekli Destek', 'Yayından sonra da yanınızdayız.')],
        steps=[('Analiz ve Planlama', 'Projenizin gereksinimlerini, hedeflerini ve kullanıcı ihtiyaçlarını detaylı biçimde analiz ediyoruz.'),
               ('Tasarım ve Prototipleme', 'Kullanıcı dostu arayüzleri oluşturuyor, proje yapısını prototip üzerinden onayınıza sunuyoruz.'),
               ('Kodlama ve Geliştirme', 'En güncel teknolojilerle, yüksek performanslı ve ölçeklenebilir altyapılar geliştiriyoruz.'),
               ('Test ve Optimizasyon', 'Tüm cihazlarda ve tarayıcılarda sorunsuz çalışması için performans testleri yapıyoruz.'),
               ('Yayınlama ve Destek', 'Uygulamayı yayına alıyor, 7/24 teknik destek ve bakım hizmeti sağlıyoruz.')],
        steps_h='Geliştirme sürecimiz'),
    'seo-hizmetleri.html': dict(
        n='03', t='SEO Hizmetleri', title='SEO Hizmetleri — CYF Tech',
        desc='Arama motorlarında görünürlüğünüzü artıran, sürdürülebilir ve sonuç odaklı SEO hizmetleri: teknik SEO, anahtar kelime ve içerik stratejisi.',
        h1='Görünürlüğünüzü artırıp müşteri kazandırıyoruz.',
        lead='Markanızı arama motorlarında üst sıralara taşıyan, sürdürülebilir ve sonuç odaklı SEO çözümleri sunuyoruz. Teknik optimizasyondan içerik stratejisine kadar her adımda görünürlüğünüzü artırıyor; yalnızca trafik değil, gerçek dönüşüm sağlıyoruz.',
        offer=[('tek', 'Teknik SEO Analizi', 'Site yapısı, hız ve taranabilirlik.'), ('key', 'Anahtar Kelime ve Rakip Analizi', 'Doğru aramalarda görünün.'), ('link', 'İçerik ve Backlink Stratejisi', 'Otorite ve güven inşası.')],
        steps=[('Durum Analizi ve Hedef Belirleme', 'Web sitenizin mevcut performansını inceliyor, ulaşmak istediğiniz hedeflere göre yol haritası oluşturuyoruz.'),
               ('Teknik Optimizasyon', 'Site yapısını, URL hiyerarşisini, meta etiketleri ve sayfa hızını optimize ediyoruz.'),
               ('Anahtar Kelime ve İçerik Planı', 'Stratejik anahtar kelimeler belirleyip SEO uyumlu içerik planı oluşturuyoruz.'),
               ('Bağlantı ve Otorite Geliştirme', 'Kaliteli backlink çalışmalarıyla web sitenizin güvenilirliğini ve sıralama gücünü artırıyoruz.'),
               ('Raporlama ve Sürekli İyileştirme', 'Aylık raporlarla ilerlemeyi takip ediyor, sonuçlara göre stratejiyi sürekli optimize ediyoruz.')],
        steps_h='SEO sürecimiz'),
    'e-ticaret-siteleri.html': dict(
        n='04', t='E-Ticaret Siteleri', title='E-Ticaret Siteleri — CYF Tech',
        desc='Satış odaklı, güvenli ödeme altyapılı ve mobil uyumlu e-ticaret siteleri. Sipariş ve stok yönetimiyle dijital mağazanız hazır.',
        h1='Satış odaklı ve kullanıcı dostu e-ticaret.',
        lead='Markanızın çevrimiçi satış gücünü artıran modern e-ticaret çözümleri geliştiriyoruz. Güvenli ödeme sistemleri, mobil uyumluluk ve hızlı altyapıyla dijital mağazanızı yalnızca bir web sitesi değil, güçlü bir satış kanalına dönüştürüyoruz.',
        offer=[('ui', 'Özel E-Ticaret Tasarımı', 'Markanıza özel vitrin ve ürün sayfaları.'), ('ssl', 'Güvenli Ödeme ve Entegrasyonlar', 'Ödeme, kargo ve CRM entegrasyonu.'), ('stk', 'Sipariş ve Stok Yönetimi', 'Kolay ürün, stok ve sipariş takibi.')],
        steps=[('İhtiyaç Analizi ve Strateji', 'İş modelinizi, hedef kitlenizi ve satış hedeflerinizi analiz ederek proje stratejisini oluşturuyoruz.'),
               ('Tasarım ve Kullanıcı Deneyimi (UX/UI)', 'Kullanıcı davranışlarını merkeze alarak etkileyici ve dönüşüm odaklı tasarımlar geliştiriyoruz.'),
               ('Altyapı ve Entegrasyon Geliştirme', 'Ürün yönetimi, ödeme, kargo ve CRM sistemleriyle entegre güçlü bir yazılım altyapısı oluşturuyoruz.'),
               ('Test ve Optimizasyon', 'Tüm cihazlarda hızlı, güvenli ve hatasız çalışması için detaylı testler yapıyoruz.'),
               ('Yayınlama ve Sürekli Destek', 'Projenizi yayına alıyor, performans izleme ve teknik destek hizmetiyle her zaman yanınızda oluyoruz.')],
        steps_h='E-ticaret sürecimiz'),
}


def service(fname):
    s = SV[fname]
    chips = ''.join(f'<div class="chip float"><span class="tag">{tag}</span><div><b>{b}</b><small>{d}</small></div></div>' for tag, b, d in s['offer'])
    chips += '<div class="chip float"><span class="dot"></span><div><b>7/24 destek</b><small>Yayından sonra da yanınızda</small></div></div>'
    extra = '<div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="projelerimiz.html">Projelerimize Göz At</a></div>'
    hero = page_hero(s['t'].upper(), f"// HİZMETLER · {s['n']} — {s['t'].upper()}", s['h1'], s['lead'], extra, f'<div class="chip-stack" aria-label="Öne çıkanlar">{chips}</div>')
    offer = ''.join(f'''<div class="card reveal"><span class="num">0{i+1}</span><h3 class="h3">{b}</h3><p>{d}</p></div>''' for i, (_, b, d) in enumerate(s['offer']))
    steps = ''.join(f'<li><span class="n">0{i+1}</span><div><b>{a}</b><span>{b}</span></div></li>' for i, (a, b) in enumerate(s['steps']))
    others = ''.join(f'<a class="card reveal" href="{h}"><span class="num">0{i+1}</span><h3 class="h3">{t}</h3><p>{d}</p><span class="more">İncele →</span></a>'
                     for i, (h, t, d) in enumerate(SERVICES) if h != fname)
    body = f'''{hero}

<section class="section">
  <div class="bg-layer bg-grid bg-fade" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// NELER SUNUYORUZ</div><h2 class="h2">Neler sunuyoruz?</h2></div></div>
    <div class="cards">{offer}</div>
  </div>
</section>

<section class="section">
  <div class="bg-layer bg-rows bg-fade" aria-hidden="true"></div>
  <div class="wrap split">
    <div class="reveal"><div class="eyebrow">// SÜREÇ</div><h2 class="h2">{s['steps_h'][0].upper() + s['steps_h'][1:]}.</h2><p class="lead" style="margin-top:20px">Her projede aynı net yolu izliyoruz: önce dinliyor, sonra tasarlıyor, geliştiriyor ve yayından sonra da destek veriyoruz.</p></div>
    <ol class="steps reveal">{steps}</ol>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// TAMAMLANAN PROJELER</div><h2 class="h2">Son işlerimiz.</h2></div><a class="link-arrow" href="projelerimiz.html">Tüm projeler →</a></div>
    <div class="cards">
      {project_cards(3)}
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// DİĞER HİZMETLER</div><h2 class="h2">Birlikte daha güçlü.</h2></div></div>
    <div class="cards">{others}</div>
  </div>
</section>

{cta()}'''
    doc(fname, s['title'], s['desc'], body, fname)


# ------------------------------------------------------------------ about
def about():
    team = [('celal.webp', 'Celal Yılmaz'), ('yusuf.webp', 'Yusuf Fırat'), ('fatih.webp', 'Fatih Kayacı')]
    team_html = ''.join(f'<div class="member reveal"><img src="assets/img/hakkimizda/{img}" alt="{n}" loading="lazy"><div><b>{n}</b><span>KURUCU ORTAK</span></div></div>' for img, n in team)
    why = ['Müşterilerimize özel çözümler sunan bir şirketiz.',
           'Rekabetçi fiyatlarla, özenle hazırlanmış kaliteli işler teslim ediyoruz.',
           'Projeye yönelik tanımlanan gereksinimlere göre sabit fiyat teklifleri sunuyoruz.',
           'Alanında uzman ve deneyimli profesyonellerden oluşan bir ekibiz.',
           'Başlangıçtan sona kadar sizinle ilgilenecek özel bir proje yöneticisi atıyoruz.',
           'Ekibimiz 7/24 destek hizmeti sunuyor.']
    why_html = ''.join(f'<div class="card reveal"><span class="num">0{i+1}</span><p style="color:var(--text);font-size:17px">{w}</p></div>' for i, w in enumerate(why))
    stats = [('+5', 'Yıl deneyim'), ('+50', 'Tamamlanan proje'), ('%100', 'Müşteri memnuniyeti'), ('%99', 'Zamanında teslim oranı')]
    stats_html = ''.join(f'<div class="stat"><b>{a}</b><span>{b}</span></div>' for a, b in stats)
    right = '<div class="chip-stack"><div class="chip float"><span class="dot"></span><div><b>Güvenilirlik</b><small>Uzun soluklu iş ortaklığı</small></div></div><div class="chip float"><span class="dot"></span><div><b>Hızlı teslimat</b><small>Planlanan takvimde</small></div></div><div class="chip float"><span class="dot"></span><div><b>Özel çözümler</b><small>İşinize göre şekillenir</small></div></div><div class="chip float"><span class="dot"></span><div><b>7/24 destek</b><small>Yayından sonra da yanınızda</small></div></div></div>'
    body = f'''{page_hero('HAKKIMIZDA', '// CYF TECH · HAKKIMIZDA', 'Dijitalin güvenilir <span class="accent">noktası.</span>', 'CYF Tech, her sektöre özel web ve yazılım çözümleri üreten yenilikçi bir teknoloji firmasıdır.', '<div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="projelerimiz.html">Projelerimiz</a></div>', right)}

<section class="band-light band-tight">
  <div class="wrap"><div class="stats reveal">{stats_html}</div></div>
</section>

<section class="section">
  <div class="bg-layer bg-lines bg-fade" aria-hidden="true"></div>
  <div class="wrap split">
    <div class="reveal"><div class="eyebrow">// MİSYON &amp; VİZYON</div><h2 class="h2">Misyonumuz ve vizyonumuz.</h2></div>
    <div class="reveal">
      <ol class="steps">
        <li><span class="n">M</span><div><b>Misyonumuz</b><span>Her sektörden işletmenin dijital dönüşümünü hızlandırarak verimlilik ve kârlılığı artıran özel yazılım çözümleri geliştirmek.</span></div></li>
        <li><span class="n">V</span><div><b>Vizyonumuz</b><span>Yenilikçi, güvenilir ve müşteri odaklı teknolojilerle küresel ölçekte dijital dönüşümün öncüsü olmak.</span></div></li>
      </ol>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// EKİBİMİZ</div><h2 class="h2">Kurucu ekibimiz.</h2></div></div>
    <div class="team">{team_html}</div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap"><div class="sec-head" style="margin-bottom:0"><div><div class="eyebrow">// BİRLİKTE ÇALIŞTIKLARIMIZ</div><h2 class="h2">Hayata geçirdiğimiz işler.</h2></div><a class="link-arrow" href="referanslar.html">Tüm referanslar →</a></div></div>
  {project_marquee()}
</section>

<section class="section">
  <div class="bg-layer bg-dots bg-fade" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// NEDEN BİZ</div><h2 class="h2">Neden bizi seçmelisiniz?</h2></div></div>
    <div class="cards">{why_html}</div>
  </div>
</section>

{cta()}'''
    doc('hakkimizda.html', 'Hakkımızda — CYF Tech',
        'CYF Tech, her sektöre özel web ve yazılım çözümleri üreten yenilikçi bir teknoloji firmasıdır. Ekibimiz, misyonumuz ve vizyonumuz.',
        body, 'hakkimizda')


# ------------------------------------------------------------------ contact
def contact():
    body = f'''{page_hero('İLETİŞİM', '// CYF TECH · İLETİŞİM', 'Projenizi birlikte <span class="accent">hayata geçirelim.</span>', 'Aklınızdaki projeyi anlatın, size özel teklifimizi hazırlayalım. Telefon, e-posta veya WhatsApp üzerinden de bize hemen ulaşabilirsiniz.')}

<section class="section-tight" style="padding-top:0">
  <div class="wrap split">
    <div class="card reveal" style="padding:36px">
      <h2 class="h3" style="font-size:26px">Bize ulaşın</h2>
      <form class="form" id="contact-form" style="margin-top:12px">
        <div class="field"><label for="name">Ad Soyad</label><input id="name" name="name" autocomplete="name" required></div>
        <div class="field"><label for="mail">E-posta</label><input id="mail" name="mail" type="email" autocomplete="email" required></div>
        <div class="field"><label for="message">Mesaj</label><textarea id="message" name="message" required></textarea></div>
        <button class="btn btn-primary" type="submit" style="justify-self:start">Gönder</button>
        <p class="form-note">Gönder'e bastığınızda mesajınız e-posta uygulamanızda {MAIL} adresine hazır olarak açılır.</p>
      </form>
    </div>
    <div class="reveal">
      <div class="info"><span class="k">Adres</span><div><a href="{MAPS}" target="_blank" rel="noopener">Yarhasanlar Mh. 2300 Sk. No:3 Daire:1</a><small>Şehzadeler / Manisa</small></div></div>
      <div class="info"><span class="k">Telefon</span><div><a href="{TEL_HREF}">+90 (543) 791 10 61</a></div></div>
      <div class="info"><span class="k">E-posta</span><div><a href="mailto:{MAIL}">{MAIL}</a></div></div>
      <div class="info"><span class="k">WhatsApp</span><div><a href="{WA}" target="_blank" rel="noopener">Hemen yazın →</a></div></div>
      <div class="info"><span class="k">Ofisler</span><div>Manisa<small>Merkez</small><div style="margin-top:10px">İstanbul</div><small>Kartal</small></div></div>
    </div>
  </div>
</section>

<section class="band-light band-tight">
  <div class="bg-layer" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// OFİSİMİZ</div><h2 class="h2">Manisa, Şehzadeler.</h2></div><a class="link-arrow" href="{MAPS}" target="_blank" rel="noopener">Yol tarifi al →</a></div>
    <div class="map reveal"><iframe title="CYF Tech ofis konumu" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6234.998530286844!2d27.426501!3d38.614394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b99d0c71cffc89%3A0x4cbce09a63a2e25b!2zQ1lGIFRlY2ggeWF6xLFsxLFt!5e0!3m2!1str!2str!4v1760401938035!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
  </div>
</section>
<script>
document.getElementById('contact-form').addEventListener('submit', function (e) {{
  e.preventDefault();
  var f = e.target;
  var subject = 'Teklif talebi — ' + f.name.value;
  var bodyTxt = f.message.value + '\\n\\n' + f.name.value + ' <' + f.mail.value + '>';
  window.location.href = 'mailto:{MAIL}?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(bodyTxt);
}});
</script>'''
    doc('iletisim.html', 'İletişim — CYF Tech',
        'CYF Tech ile iletişime geçin: 0543 791 10 61 · info@cyftech.com.tr · Yarhasanlar Mh. 2300 Sk. No:3, Şehzadeler / Manisa.',
        body, 'iletisim')


# ------------------------------------------------------------------ projects
def projects():
    body = f'''{page_hero('PROJELER', '// CYF TECH · PROJELER', 'Tamamlanan <span class="accent">projelerimiz.</span>', 'Farklı sektörler için geliştirdiğimiz özelleştirilmiş web ve yazılım projeleri. Her biri, müşterimizin ihtiyacına göre şekillendi.', '<div class="btn-row"><a class="btn btn-primary" href="referanslar.html">CD rafında inceleyin</a><a class="btn" href="iletisim.html">Teklif Al</a></div>')}

{project_marquee()}

<section class="section-tight">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// PROJE DETAYLARI</div><h2 class="h2">Her biri farklı bir ihtiyaç.</h2></div><p class="muted">Kartlara tıklayıp projeyi CD rafında, bilgisayara takarak inceleyebilirsiniz.</p></div>
    <div class="cards c2">
      {project_cards()}
    </div>
  </div>
</section>

{cta()}'''
    doc('projelerimiz.html', 'Projelerimiz — CYF Tech',
        'CYF Tech’in tamamladığı projeler: Hürsat, Softrue Solutions, Sistem KYS ve Eurolab için web tasarım ve yazılım çalışmaları.',
        body, 'projeler')


# ------------------------------------------------------------------ references
def references():
    body = f'''<div class="fl-root" data-fl-root>
  <div class="fl-area" data-fl-area>
    <div class="fl-stage" data-fl-stage>
      <div class="fl-world" data-fl-world>
        <div class="fl-wall" aria-hidden="true"></div>
        <div class="fl-hum" aria-hidden="true"></div>
        <div class="fl-floor" aria-hidden="true"></div>
        <div class="fl-floor-shadow" aria-hidden="true"></div>

        <div class="fl-shelf-board" aria-hidden="true"></div>
        <div class="fl-shelf-edge" aria-hidden="true"></div>
        <div class="fl-bracket l" aria-hidden="true"></div>
        <div class="fl-bracket r" aria-hidden="true"></div>
        <div class="fl-shelf-tag" aria-hidden="true">D:\\REFERANS</div>

        <div class="fl-leg" style="left:110px" aria-hidden="true"></div>
        <div class="fl-leg" style="left:1450px" aria-hidden="true"></div>
        <div class="fl-desk" aria-hidden="true"></div>
        <div class="fl-desk-front" aria-hidden="true"></div>

        <div class="fl-crt-side" aria-hidden="true"></div>
        <div class="fl-crt-neck" aria-hidden="true"></div>
        <div class="fl-crt-foot" aria-hidden="true"></div>
        <div class="fl-crt">
          <div class="fl-bezel"></div>
          <div class="fl-brand" aria-hidden="true">CYF VGA</div>
          <div class="fl-pwr" aria-hidden="true"></div>
          <div class="fl-knob" aria-hidden="true"></div>
          <div class="fl-screen" data-fl-screen>
            <div class="fl-screen-in">
              <div class="fl-idle" data-fl-idle>
                <div class="big">&lt;/&gt;</div>
                <div class="name">CYF TECH</div>
                <div class="wait">D:\\&gt; CD bekleniyor<span class="fl-cur">_</span></div>
                <div class="hint">Raftaki CD'lerden birini seçin</div>
              </div>
              <div class="fl-boot" data-fl-boot data-fl-bootlines hidden></div>
              <div class="fl-show" data-fl-show hidden>
                <div class="fl-show-bar">
                  <div class="fl-show-file"><span data-c-renk></span><b data-c-dosya style="font-weight:400"></b></div>
                  <button class="fl-sbtn" type="button" data-fl-eject>⏏ CD'yi çıkar</button>
                </div>
                <div class="fl-show-body">
                  <div class="fl-show-img"><img data-c-img alt=""></div>
                  <div class="fl-show-info">
                    <div class="fl-show-meta" data-c-meta></div>
                    <h2 class="fl-show-name" data-c-ad></h2>
                    <p class="fl-show-desc" data-c-aciklama></p>
                    <div class="fl-show-tags" data-c-tags></div>
                    <a class="fl-show-visit" data-c-href href="#" target="_blank" rel="noopener" hidden>Siteyi ziyaret et ↗</a>
                  </div>
                </div>
                <div class="fl-show-foot">
                  <button class="fl-sbtn" type="button" data-fl-prev>← Önceki CD</button>
                  <span class="idx" data-c-idx></span>
                  <button class="fl-sbtn" type="button" data-fl-next>Sonraki CD →</button>
                </div>
              </div>
            </div>
            <div class="fl-scan" aria-hidden="true"></div>
            <div class="fl-glass" aria-hidden="true"></div>
          </div>
        </div>

        <div class="fl-kb" aria-hidden="true"></div>
        <div class="fl-kb-front" aria-hidden="true"></div>
        <div class="fl-mouse" aria-hidden="true"></div>

        <div class="fl-tower-side" aria-hidden="true"></div>
        <div class="fl-tower" aria-hidden="true">
          <div class="fl-bay"><div class="fl-bay-gap" data-fl-tray-gap></div><div class="fl-bay-label">CD-ROM</div><div class="fl-bay-led" data-fl-cdled data-fl-led></div><div class="fl-bay-btn"></div></div>
          <div class="fl-floppy"><div class="slot"></div><div class="led"></div><div class="btn"></div></div>
          <div class="fl-turbo">66</div>
          <div class="fl-leds"><div><span style="background:#7CFF6B;box-shadow:0 0 6px #7CFF6B"></span>POWER</div><div><span data-fl-hddled data-fl-led></span>HDD</div></div>
          <div class="fl-reset"></div>
          <div class="fl-model">CYF TECH 486</div>
          <div class="fl-vent"></div>
        </div>
        <div class="fl-cdtray" data-fl-tray aria-hidden="true"><div></div></div>

        <div class="fl-book" data-fl-bookl aria-hidden="true"></div>
        <div class="fl-book" data-fl-bookr aria-hidden="true"></div>

        <div class="fl-shelf" data-fl-shelf></div>

        <div class="fl-disc" data-fl-disc aria-hidden="true">
          <div class="fl-disc-face" data-fl-disc-spin>
            <div class="fl-disc-core" data-fl-disc-core></div>
            <div class="fl-disc-label" data-fl-disc-label></div>
            <div class="fl-disc-hole1"></div>
            <div class="fl-disc-hole2"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="fl-intro" data-fl-intro>
      <div class="eyebrow" style="margin-bottom:16px">// CYF TECH · REFERANSLAR</div>
      <h1>Referanslarımız.</h1>
      <p>Raftaki her CD bir referansımız. Birini seçin, bilgisayara takalım.</p>
    </div>

    <div class="fl-ejectwrap" data-fl-ejectwrap>
      <button class="fl-sbtn" type="button" data-fl-eject>⏏ CD'yi çıkar ve rafa dön</button>
    </div>

    <div class="fl-mobile" data-fl-mobile></div>
  </div>
</div>

<section class="section">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// TÜM REFERANSLAR</div><h2 class="h2">Çeşitli sektörlerden müşterilerimiz.</h2></div><p class="muted">Çeşitli sektörlerden birçok müşteriye güvenilir hizmet sunduk.</p></div>
    <div class="cards c4">
      {project_cards(link='projelerimiz.html')}
    </div>
  </div>
</section>

{cta()}'''
    doc('referanslar.html', 'Referanslar — CYF Tech',
        'CYF Tech referansları: Hürsat, Softrue Solutions, Sistem KYS ve Eurolab. Raftaki CD’lerden birini seçin, projeyi inceleyin.',
        body, 'referanslar', css=('referanslar.css',), js=('referanslar.js',), vt323=True)


# ------------------------------------------------------------------ blog
def blog():
    cards = []
    for p in POSTS:
        inner = f'''<div class="pcard-img"><img src="{p['img']}" alt="" loading="lazy"></div>
        <div class="pcard-body"><div class="pcard-meta">{p['date']}</div><h2 class="h3">{p['title']}</h2><p>{p['ozet']}</p>{'<span class="more" style="color:var(--accent);font-weight:500;margin-top:auto">Devamını oku →</span>' if p['href'] else '<span class="badge" style="align-self:flex-start;margin-top:auto">YAKINDA</span>'}</div>'''
        if p['href']:
            cards.append(f'<a class="pcard reveal" href="{p["href"]}">{inner}</a>')
        else:
            cards.append(f'<div class="pcard reveal" style="opacity:.85">{inner}</div>')
    body = f'''{page_hero('BLOG', '// CYF TECH · BLOG', 'Blog ve <span class="accent">haberler.</span>', 'Teknoloji, yazılım ve sektörel gelişmeler üzerine içerikler; CYF Tech’ten en güncel duyurular ve haberler.')}

<section class="section-tight" style="padding-top:0">
  <div class="wrap">
    <div class="cards c2">
      {''.join(cards)}
    </div>
  </div>
</section>

{cta()}'''
    doc('blog.html', 'Blog — CYF Tech',
        'CYF Tech blog: web tasarım, yazılım, SEO ve dijital pazarlama üzerine içerikler; şirket haberleri ve duyurular.',
        body, 'blog')


def blog_inside():
    others = ''.join(f'<li><span class="d">{p["date"]}</span><b>{p["title"]}</b><span class="badge" style="margin-top:8px">YAKINDA</span></li>' for p in POSTS[1:])
    body = f'''<section class="page-hero" style="padding-bottom:48px">
  {floor()}
  <div class="wrap">
    <div class="crumbs"><a href="index.html">CYF TECH</a><span>/</span><a href="blog.html">BLOG</a><span>/</span><span>HABER</span></div>
    <div class="eyebrow">// HABER · 24 AĞUSTOS 2025</div>
    <h1 class="h1" style="max-width:900px">CYF Tech ÜLKE TV'de.</h1>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap split" style="grid-template-columns:minmax(0,1.6fr) minmax(0,.6fr)">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/ulketv.webp" alt="CYF Tech, Ülke TV Yeni Nesil İşler programında"></div>
      <p>CYF Tech, 24 Ağustos 2025 tarihinde Ülke TV’de yayınlanan Aycan Gül ile Yeni Nesil İşler programına konuk oldu. Programda şirketin kuruluş hikâyesi, inovasyon odaklı projeleri ve Türkiye’de yazılım sektörüne kazandırdığı yenilikçi çözümler ele alındı.</p>
      <p>CYF Tech kurucuları programda yazılım geliştirme süreçlerinden, dijital dönüşüm projelerinden ve yapay zekânın iş dünyasındaki dönüştürücü etkilerinden bahsetti. Ayrıca gençlerin yazılım dünyasına adım atarken dikkat etmeleri gereken noktalar ve kariyer planlaması üzerine tavsiyelerde bulunuldu.</p>
      <p>Program boyunca CYF Tech’in yazılım sektöründe edindiği tecrübeler, müşteri odaklı yaklaşımı ve geleceğin teknolojilerine yönelik vizyonu izleyicilerle paylaşıldı. Yapay zekâ destekli çözümlerden web ve mobil uygulama geliştirme süreçlerine kadar geniş bir yelpazede sunulan hizmetler detaylı olarak anlatıldı.</p>
      <p>Şirket temsilcileri, teknolojinin yalnızca iş süreçlerinde değil, eğitim ve toplumsal gelişim açısından da büyük bir potansiyele sahip olduğunu vurguladı:</p>
      <blockquote>“Yapay zekâ, gençlere yeni fırsatlar sunuyor. Önemli olan bu teknolojiyi doğru anlamak ve üretken şekilde kullanmak.”</blockquote>
      <p>CYF Tech’in Ülke TV’deki bu özel röportajı, hem yazılım sektörüne ilgi duyan gençler hem de dijital dönüşüm yolculuğuna çıkmak isteyen işletmeler için ilham verici bir içerik oldu.</p>
      <a class="link-arrow" href="blog.html">← Tüm yazılar</a>
    </article>
    <aside>
      <div class="eyebrow">// DİĞER YAZILAR</div>
      <ul class="aside-list">{others}</ul>
    </aside>
  </div>
</section>

{cta()}'''
    doc('blog-inside.html', "CYF Tech ÜLKE TV'de — CYF Tech Blog",
        'CYF Tech, Ülke TV’de Aycan Gül ile Yeni Nesil İşler programına konuk oldu: kuruluş hikâyesi, projeler ve yapay zekânın iş dünyasına etkisi.',
        body, 'blog')


home()
about()
contact()
projects()
references()
blog()
blog_inside()
exec(open(os.path.join(os.path.dirname(os.path.abspath(__file__)), 'scrolly_pages.py'), encoding='utf-8').read())
print('ok')
