import hashlib, json, os, re, sys
OUT = sys.argv[1]
VER = '20261024u'  # bump on every deploy so browsers fetch fresh css/js
SHOW_CD = False  # CD shelf (referanslar-cd.html) is parked: the page still builds, but nothing links to it

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

# Projects / references. Also feeds the CD shelf on referanslar.html (etiket: spine label, dosya: file name on
# the retro screen, renk: case colour). Images are laptop + phone mockups (1400×1000) of the live sites.
# Each project has a row on referanslar.html (#<slug>); referanslar-cd.html#ref-<slug> plays its CD on the shelf page.
def _p(ad, sektor, img, url, aciklama, tags, renk, etiket, dosya):
    return dict(ad=ad, slug=img, sektor=sektor, img=f'assets/img/proje/{img}.webp', url=url, aciklama=aciklama, tags=tags, renk=renk, etiket=etiket, dosya=dosya)


PROJECTS = [
    _p('KA Mühendislik', 'Elektrik-Mekanik Mühendislik', 'ka-muhendislik', 'https://kamuhendislik.com.tr',
       '1971’den bu yana MEP taahhüt, tasarım, işletme-bakım ve dış ticaret alanında çalışan KA Mühendislik için hizmetlerini ve Dalaman Havalimanı, Mercedes Türkiye Genel Müdürlüğü gibi projelerini öne çıkaran, Türkçe ve İngilizce kurumsal web sitesini hayata geçirdik.',
       ['Web Tasarım', 'Web Geliştirme'], '#B8923E', 'KA MÜH.', 'KAMUH.EXE'),
    _p('Zumer Gayrimenkul', 'Gayrimenkul', 'zumer', 'https://zumerkonut.com',
       'İstanbul’da alım-satım, kiralama ve yatırım danışmanlığı yapan Zumer Gayrimenkul için satılık ve kiralık ilanlarını, ekibini, galerisini ve blog yazılarını sunan kurumsal web sitesini geliştirdik.',
       ['Web Tasarım', 'Web Geliştirme'], '#8C6A3F', 'ZUMER', 'ZUMER.EXE'),
    _p('MÜSİAD Gebze', 'İş Dünyası Derneği', 'musiad-gebze', 'https://musiadgebze.org.tr',
       'MÜSİAD Gebze Şubesi için üye firmaları ve ürünlerini, 15 sektörü, faaliyetleri, duyuruları ve kurumsal anlaşmaları bir araya getiren; üyelik ön başvurusu alan bir kurumsal portal geliştirdik.',
       ['Web Tasarım', 'Web Geliştirme'], '#C8A13A', 'MÜSİAD', 'MUSIAD.EXE'),
    _p('Nurella Spa & Masaj', 'Spa ve Masaj', 'nurella', 'https://manisamasaj.com',
       'Manisa’daki Nurella Spa & Massage için 18 masaj çeşidini ayrı sayfalarda anlatan; spa paketlerini, çalışma saatlerini ve telefon / WhatsApp ile hızlı randevuyu öne çıkaran web sitesini tasarladık.',
       ['Web Tasarım'], '#9333EA', 'NURELLA', 'NURELLA.EXE'),
    _p('Softrue Solutions', 'Yazılım', 'softrue', 'https://softrue.com.tr',
       'Gebze Bilişim Vadisi’ndeki Softrue için Sistem KYS, Odak ve İSG yazılımları gibi ürünlerini, bilgi güvenliği politikalarını ve kurumsal kimliğini anlatan web sitesini geliştirdik.',
       ['Web Tasarım', 'Web Geliştirme'], '#E0503A', 'SOFTRUE', 'SOFTRUE.EXE'),
    _p('Sistem KYS', 'KOBİ Yönetim Platformu', 'sistemkys', 'https://sistemkys.com',
       'Proje, CRM, sipariş ve İK modülleriyle KOBİ’lere hitap eden Sistem KYS için platformu, modüllerini ve web / mobil sürümlerini tanıtan Türkçe ve İngilizce web sitesini geliştirdik.',
       ['Web Geliştirme'], '#1F9D6B', 'SİSTEM KYS', 'SISTKYS.EXE'),
    _p('Dost Oyun Merkezi', 'Oyun ve İnternet Kafe', 'teknikdost', 'https://teknikdost.com',
       '2003’ten bu yana hizmet veren Dost Oyun Merkezi için hizmetlerini, çalışma saatlerini ve WhatsApp üzerinden rezervasyonu öne çıkaran web sitesini hazırladık.',
       ['Web Tasarım'], '#DC2626', 'DOST', 'DOST.EXE'),
    _p('Globac', 'Belgelendirme ve Muayene', 'globac', 'https://globac.net',
       'Globac için ISO sistem belgelendirmesi, laboratuvar testleri ve periyodik muayene hizmetlerini sektör sektör anlatan; akreditasyonlarını ve haberlerini sunan kurumsal web sitesini geliştirdik.',
       ['Web Tasarım', 'Web Geliştirme'], '#0EA5E9', 'GLOBAC', 'GLOBAC.EXE'),
    _p('Eurolab', 'Test ve Sertifikasyon', 'eurolab-tr', 'https://eurolab.tr',
       'EUROLAB için test, muayene, sertifikasyon ve güvence hizmetlerini; sektör sayfalarını, teknik kaynaklarını ve sertifikalı ürün dizinlerini sunan kurumsal web sitesini hayata geçirdik.',
       ['Web Tasarım', 'SEO'], '#F2B33D', 'EUROLAB', 'EUROLAB.EXE'),
    _p('Testing Laboratory', 'Test Laboratuvarı', 'testinglaboratory', 'https://testinglaboratory.org',
       'Eurolab’ın 31 sektördeki ürün kalitesi, güvenlik ve uygunluk testlerini anlatan; sertifika sorgulama, haberler ve kariyer sayfaları bulunan İngilizce web sitesini geliştirdik.',
       ['Web Tasarım', 'SEO'], '#16A34A', 'TESTING LAB.', 'TESTLAB.EXE'),
    _p('TestingLab', 'Test ve Denetim', 'testinglab-com', 'https://testinglab.com',
       'Otomotivden gıda güvenliğine test, sertifikasyon ve denetim hizmetlerini sunan; sertifika başvurusu ve akreditasyon sayfaları bulunan TestingLab web sitesini geliştirdik.',
       ['Web Tasarım', 'SEO'], '#0D9488', 'TESTINGLAB', 'TLABCOM.EXE'),
    _p('TestingLab.net', 'Test, Denetim ve Kalibrasyon', 'testinglab-net', 'https://testinglab.net',
       'Test, sertifikasyon, denetim ve kalibrasyon hizmetlerini onlarca alt sayfada anlatan; sertifika doğrulama, haberler ve kariyer bölümleri olan web sitesini hayata geçirdik.',
       ['Web Tasarım', 'SEO'], '#4F46E5', 'TLAB.NET', 'TLABNET.EXE'),
    _p('EU Test Lab', 'Test ve Sürdürülebilirlik', 'eutestlab', 'https://eutestlab.com',
       'Sürdürülebilirlik uzmanlığını öne çıkaran; kimyadan havacılığa, batarya testlerinden yangın güvenliğine 30’u aşkın alanı ayrı sayfalarda sunan web sitesini geliştirdik.',
       ['Web Tasarım', 'SEO'], '#0F766E', 'EUTESTLAB', 'EUTEST.EXE'),
    _p('EU Lab Test', 'Laboratuvar Testleri', 'eulabtest', 'https://eulabtest.com',
       'Gıdadan tıbbi cihazlara, çevreden kalibrasyona laboratuvar test ve belgelendirme hizmetlerini anlatan; sertifika sorgulama ve başvuru adımları olan web sitesini geliştirdik.',
       ['Web Tasarım', 'SEO'], '#7C3AED', 'EULABTEST', 'EULAB.EXE'),
    _p('Kalite.com', 'Uygunluk Değerlendirme', 'kalite', 'https://kalite.com',
       'Belgelendirme, gözetim, muayene ve laboratuvar testlerini Türkçe olarak sunan; askeri, elektronik ve tekstil testlerine ayrı bölümler ayıran uygunluk değerlendirme sitesini geliştirdik.',
       ['Web Tasarım', 'SEO'], '#65A30D', 'KALİTE', 'KALITE.EXE'),
]

# Our own products, listed on projelerimiz.html (cards open the live product); not part of the references above
OWN_PROJECTS = [
    _p('KATSİS', 'Apartman ve Site Yönetimi', 'katsis', 'https://katsis.com.tr',
       'Apartman ve site yönetimini tek panelde toplayan KATSİS’i geliştirdik: aidat ve borç takibi, kasa, duyuru, destek talepleri, sanal POS ve SMS modülleri; web paneli, iOS / Android ve Windows uygulamalarıyla.',
       ['Web Geliştirme', 'Mobil Uygulama', 'Masaüstü Uygulama'], '#2563EB', 'KATSİS', 'KATSIS.EXE'),
    _p('RestaurantBill', 'Restoran Yönetimi', 'restaurantbill', 'https://sophram.com',
       'Çok şubeli restoranlar için adisyon ve mutfak ekranı sistemi RestaurantBill’i geliştirdik: garson, mutfak ve kasa ekranları siparişleri anlık olarak paylaşıyor; şube, personel, menü, kasa ve finansal raporlar tek panelden yönetiliyor.',
       ['Web Geliştirme', 'Gerçek Zamanlı'], '#B8923E', 'RESTBILL', 'RESTBILL.EXE'),
]

POSTS = [
    dict(date='24 Ağustos 2025', title="CYF Tech ÜLKE TV'de", img='assets/img/blog/ulketv.webp', href='blog-inside.html', kat='Haber', sure='2 dk',
         ozet='CYF Tech, Ülke TV’de yayınlanan Aycan Gül ile Yeni Nesil İşler programına konuk oldu; kuruluş hikâyemizi, projelerimizi ve yapay zekânın iş dünyasına etkisini konuştuk.'),
    dict(date='22 Mayıs 2025', title='SEO Stratejileri ile Trafik Artırma', img='assets/img/blog/03.png', href=None, kat='SEO',
         ozet='Arama motorlarında görünürlüğü artırmak için teknik SEO, içerik ve bağlantı stratejileri.'),
    dict(date='25 Nisan 2025', title='Web Tasarımında 5 Temel İpucu', img='assets/img/blog/01.jpeg', href=None, kat='Web Tasarım',
         ozet='Ziyaretçinin ilk saniyede güven duyduğu, sade ve hızlı bir web sitesi için temel ilkeler.'),
    dict(date='2 Nisan 2025', title='Dijital Pazarlamada En İyi Uygulamalar', img='assets/img/blog/02.webp', href=None, kat='Dijital Pazarlama',
         ozet='Markanızı dijitalde doğru kitleye ulaştırmak için öne çıkan yöntemler.'),
]

# site languages: Turkish at the root, the others in /<code>/ (built by tools/i18n.py from the Turkish pages)
LANGS = [('tr', 'Türkçe'), ('en', 'English'), ('de', 'Deutsch'), ('ar', 'العربية'), ('zh', '中文'), ('ru', 'Русский')]

I_GLOBE = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>'
I_SUN = '<svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>'
I_MOON = '<svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/></svg>'
I_CHEV = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>'
I_MENU = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>'
I_WA = '<svg width="24" height="24" viewBox="0 0 640 640" fill="currentColor" aria-hidden="true"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>'
I_DOWN = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 4v16M6 14l6 6 6-6"/></svg>'
I_DRAG = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 9l-4 3 4 3M16 9l20 3-4 3M4 12h16"/></svg>'.replace('l20 3', 'l4 3')


# Stroke icons (24×24, currentColor), used across the site. icon(name) returns an inline <svg class="ic">.
# Keep icons outside sentences (at the start or end of a block): tools/i18n.py treats an <svg> as a text boundary.
ICONS = {
    'arrow': '<path d="M5 12h14M13 6l6 6-6 6"/>',
    'back': '<path d="M19 12H5M11 6l-6 6 6 6"/>',
    'external': '<path d="M14 4h6v6M20 4l-9 9M18 14v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5"/>',
    'phone': '<path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2"/>',
    'mail': '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
    'pin': '<path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/>',
    'nav': '<path d="M3 11l18-8-8 18-2-8-8-2z"/>',
    'send': '<path d="M21 3L10 14M21 3l-7 18-4-7-7-4 18-7z"/>',
    'building': '<path d="M4 21V5a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v16M15 9h4a1 1 0 0 1 1 1v11M3 21h18M8 8h3M8 12h3M8 16h3"/>',
    'web': '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 14l-2 2 2 2M16 14l2 2-2 2"/>',
    'desktop': '<rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/>',
    'mobile': '<rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/>',
    'shield': '<path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/>',
    'bolt': '<path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/>',
    'puzzle': '<path d="M10 4a2 2 0 1 1 4 0v1h4a1 1 0 0 1 1 1v4h-1a2 2 0 1 0 0 4h1v4a1 1 0 0 1-1 1h-4v-1a2 2 0 1 0-4 0v1H6a1 1 0 0 1-1-1v-4h1a2 2 0 1 0 0-4H5V6a1 1 0 0 1 1-1h4V4z"/>',
    'headset': '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="3" y="14" width="4" height="6" rx="1.5"/><rect x="17" y="14" width="4" height="6" rx="1.5"/>',
    'layout': '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>',
    'devices': '<rect x="2" y="5" width="14" height="10" rx="1.5"/><path d="M5 19h8"/><rect x="17" y="9" width="5" height="11" rx="1.5"/>',
    'palette': '<path d="M12 3a9 9 0 1 0 0 18c1.1 0 2-.9 2-2 0-1-1-1.6-1-2.6 0-1.1.9-2 2-2h2.4A4.6 4.6 0 0 0 22 10c0-3.9-4.5-7-10-7z"/><circle cx="7.5" cy="11" r="1"/><circle cx="10" cy="7" r="1"/><circle cx="15" cy="7" r="1"/>',
    'layers': '<path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/>',
    'plug': '<path d="M9 2v6M15 2v6M7 8h10v4a5 5 0 0 1-10 0V8zM12 17v5"/>',
    'lock': '<rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/>',
    'trend': '<path d="M3 17l6-6 4 4 8-8"/><path d="M15 7h6v6"/>',
    'sliders': '<path d="M4 6h10M18 6h2M4 12h4M12 12h8M4 18h12"/><circle cx="16" cy="6" r="2"/><circle cx="10" cy="12" r="2"/><circle cx="18" cy="18" r="2"/>',
    'code': '<path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14"/>',
    'gauge': '<path d="M4 18a9 9 0 1 1 16 0"/><path d="M12 14l4-5"/>',
    'search': '<circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/>',
    'chart': '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
    'card': '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M6 15h4"/>',
    'box': '<path d="M21 8l-9-5-9 5 9 5 9-5z"/><path d="M3 8v8l9 5 9-5V8M12 13v8"/>',
    'truck': '<path d="M2 6h12v10H2zM14 10h4l3 3v3h-7"/><circle cx="6" cy="18" r="2"/><circle cx="17" cy="18" r="2"/>',
    'tag': '<path d="M3 12V4a1 1 0 0 1 1-1h8l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1.5"/>',
    'clipboard': '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1M9 10h6M9 14h6M9 18h3"/>',
    'pen': '<path d="M4 20h4L19 9l-4-4L4 16v4z"/><path d="M13 7l4 4"/>',
    'rocket': '<path d="M9 15l-3-3c1-4 4-8 10-9 0 6-4 9-9 10z"/><circle cx="14" cy="9" r="1.5"/><path d="M9 15l1 4 3-2M6 12l-4-1 2-3M5 15c-1 1-1.5 4-1.5 4.5 0 0 3.5-.5 4.5-1.5"/>',
    'whatsapp': '<path d="M4 20l1.3-4A8 8 0 1 1 8 18.7L4 20z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 1c-1-.5-2-1.5-2.5-2.5l1-1-1-2L9 8.5z"/>',
    'file': '<path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8l-5-5z"/><path d="M14 3v5h5M9 13h6M9 17h4"/>',
    'target': '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>',
    'eye': '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
    'users': '<circle cx="9" cy="8" r="3.5"/><path d="M2 20a7 7 0 0 1 14 0M16 4.5a3.5 3.5 0 0 1 0 7M18 13.5a6 6 0 0 1 4 6.5"/>',
    'userc': '<circle cx="10" cy="8" r="4"/><path d="M3 21a7 7 0 0 1 11-5.7M16 19l2 2 4-4"/>',
    'award': '<circle cx="12" cy="9" r="6"/><path d="M8.5 14l-1.5 8 5-3 5 3-1.5-8"/>',
    'coins': '<ellipse cx="9" cy="7" rx="6" ry="3"/><path d="M3 7v5c0 1.7 2.7 3 6 3s6-1.3 6-3V7M9 15v3c0 1.7 2.7 3 6 3s6-1.3 6-3v-5c0-1.7-2.7-3-6-3"/>',
    'calendar': '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/>',
    'clock': '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
    'folder': '<path d="M3 6a1 1 0 0 1 1-1h5l2 2h9a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6z"/><path d="M9 13l2 2 4-4"/>',
    'smile': '<circle cx="12" cy="12" r="9"/><path d="M8 14a5 5 0 0 0 8 0M9 9.5h.01M15 9.5h.01"/>',
    'globe': '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/>',
    'grid': '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
    'flask': '<path d="M9 3h6M10 3v6L4 19a1 1 0 0 0 .9 1.5h14.2A1 1 0 0 0 20 19l-6-10V3"/><path d="M7 15h10"/>',
    'store': '<path d="M3 9l2-5h14l2 5M3 9h18v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9zM5 13v8h14v-8M10 21v-5h4v5"/>',
    'bell': '<path d="M6 16V11a6 6 0 0 1 12 0v5l2 2H4l2-2zM10 21h4"/>',
    'refresh': '<path d="M20 11a8 8 0 0 0-14.5-4.5L4 8M4 4v4h4M4 13a8 8 0 0 0 14.5 4.5L20 16M20 20v-4h-4"/>',
    'hand': '<path d="M8 13V5.5a1.5 1.5 0 0 1 3 0V11M11 10V4.5a1.5 1.5 0 0 1 3 0V11M14 10.5V6a1.5 1.5 0 0 1 3 0v8a7 7 0 0 1-7 7h-1a6 6 0 0 1-5-2.7L2.5 15a1.5 1.5 0 0 1 2.5-1.6L8 16"/>',
    'key': '<circle cx="8" cy="15" r="4"/><path d="M11 12l9-9M17 6l3 3M14 9l2 2"/>',
    'check': '<path d="M5 12l5 5 9-10"/>',
    'news': '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10M7 12h10M7 16h6"/>',
    'quote': '<path d="M9 7H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3M19 7h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a3 3 0 0 1-3 3"/>',
    'tv': '<rect x="3" y="6" width="18" height="13" rx="2"/><path d="M8 2l4 4 4-4"/>',
    'mic': '<rect x="9" y="3" width="6" height="11" rx="3"/><path d="M5 11a7 7 0 0 0 14 0M12 18v3"/>',
    'user': '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
    'share': '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4"/>',
    'linkedin': '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4M12 10v7"/>',
    'x': '<path d="M4 4l16 16M20 4L4 20"/>',
}


def icon(name, size=18, cls=''):
    return (f'<svg class="ic{" " + cls if cls else ""}" width="{size}" height="{size}" viewBox="0 0 24 24" fill="none" stroke="currentColor" '
            f'stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{ICONS[name]}</svg>')


SERVICE_ICON = {'web-cozumleri.html': 'web', 'masaustu-uygulamalar.html': 'desktop', 'mobil-uygulamalar.html': 'mobile'}
# info chips are matched to an icon by their (Turkish) title
CHIP_ICON = {
    'Güvenilirlik': 'shield', 'Hızlı teslimat': 'bolt', 'Özel çözümler': 'puzzle', '7/24 destek': 'headset',
    'UI / UX': 'layout', 'Responsive': 'devices', 'Marka kimliği': 'palette', 'Prototip': 'layers',
    'API': 'plug', 'Güvenlik': 'lock', 'Ölçeklenebilir': 'trend', 'Yönetim paneli': 'sliders',
    'Teknik SEO': 'code', 'Site hızı': 'gauge', 'Anahtar kelime': 'search', 'Raporlama': 'chart',
    'Ödeme': 'card', 'Ürün yönetimi': 'box', 'Sipariş takibi': 'truck', 'Kampanyalar': 'tag',
    'Planlama': 'clipboard', 'Tasarım': 'pen', 'Geliştirme': 'code', 'Yayın': 'rocket',
    'Telefon': 'phone', 'E-posta': 'mail', 'WhatsApp': 'whatsapp', 'Teklif': 'file',
    'Güvenli altyapı': 'lock', 'Güvenli ödeme': 'card', 'Organik trafik': 'trend', 'Güvenli bağlantı': 'lock',
    'Güncelleme yüklendi': 'refresh', 'Darboğazlar': 'gauge', 'Kullanıcı rolleri': 'users', 'Kısayollar': 'key',
    'Tek elle kullanım': 'hand', 'Tek kod tabanı': 'code', 'Farklı ekranlar': 'devices', 'Anlık bildirim': 'bell',
    'Güncellemeler': 'refresh',
}
KAT_ICON = {'Haber': 'news', 'SEO': 'search', 'Web Tasarım': 'pen', 'Dijital Pazarlama': 'chart'}


def cur(active, key):
    return ' aria-current="page"' if active == key else ''


def lang_switch(fname):
    """Language menu. hrefs are written for the Turkish root; tools/i18n.py rebases them inside /<code>/."""
    other = fname if fname != 'referanslar-cd.html' else 'referanslar.html'  # the parked CD shelf is Turkish only
    items = ''.join(f'<a href="{fname if c == "tr" else f"{c}/{other}"}" hreflang="{c}" lang="{c}" data-lang="{c}"><b>{c.upper()}</b><span>{n}</span></a>' for c, n in LANGS)
    return f'''<div class="lang-dd" translate="no">
      <button type="button" class="icon-btn lang-btn" aria-haspopup="true" aria-expanded="false" aria-label="Dil seçin">{I_GLOBE}<span data-lang-cur>TR</span></button>
      <div class="lang-menu">{items}</div>
    </div>'''


def header(active, overlay=False, progress=False, fname='index.html'):
    dd = ''.join(
        f'<a href="{h}"{cur(active, h)}>{icon(SERVICE_ICON[h], 20, "dd-ic")}<span class="num">0{i+1}</span><span><b>{t}</b><small>{d}</small></span></a>'
        for i, (h, t, d) in enumerate(SERVICES))
    mserv = ''.join(f'<a href="{h}"{cur(active, h)}>{icon(SERVICE_ICON[h])}{t}</a>' for h, t, _ in SERVICES)
    is_serv = active in [s[0] for s in SERVICES]
    return f'''<header class="site-head{' overlay' if overlay else ''}">
  <a class="logo" href="index.html" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
    {lang_switch(fname)}
    <button type="button" class="icon-btn theme-btn" aria-label="Gece / gündüz teması" title="Gece / gündüz teması">{I_SUN}{I_MOON}</button>
    <a class="btn btn-primary btn-sm" href="iletisim.html">Teklif Al</a>
    <button class="menu-btn" type="button" aria-label="Menüyü aç" data-label-open="Menüyü aç" data-label-close="Menüyü kapat" aria-expanded="false" aria-controls="mnav">{I_MENU}</button>
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
    serv = ''.join(f'<li><a href="{h}">{icon(SERVICE_ICON[h], 16)}{t}</a></li>' for h, t, _ in SERVICES)
    return f'''<footer class="site-foot">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="index.html" aria-label="CYF Tech ana sayfa" translate="no"><span class="logo-word">cyf<span>tech</span></span></a>
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
        <ul><li><a href="{TEL_HREF}">{icon('phone', 16)}{TEL}</a></li><li><a href="mailto:{MAIL}">{icon('mail', 16)}{MAIL}</a></li><li><a href="{WA}" target="_blank" rel="noopener">{icon('whatsapp', 16)}WhatsApp</a></li><li><a href="{MAPS}" target="_blank" rel="noopener">{icon('pin', 16)}Şehzadeler / Manisa</a></li></ul>
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


# icons added to recurring controls after a page is assembled (buttons, contact lines)
SWAPS = [
    ('>Teklif Al</a>', '>Teklif Al' + icon('arrow', 16, 'ic-dir') + '</a>'),
    ('rel="noopener">WhatsApp\'tan yazın</a>', 'rel="noopener">' + icon('whatsapp', 17) + 'WhatsApp\'tan yazın</a>'),
    ('<span class="k">tel</span>', icon('phone', 16) + '<span class="k">tel</span>'),
    ('<span class="k">mail</span>', icon('mail', 16) + '<span class="k">mail</span>'),
    ('<span class="k">adres</span>', icon('pin', 16) + '<span class="k">adres</span>'),
    ('>Gönder</button>', '>Gönder' + icon('send', 16) + '</button>'),
    ('rel="noopener">Yol tarifi al</a>', 'rel="noopener">' + icon('nav', 16) + 'Yol tarifi al</a>'),
    ('>Arayın</a>', '>' + icon('phone', 16) + 'Arayın</a>'),
]


def iconize(html):
    for a, b in SWAPS:
        html = html.replace(a, b)
    return html


def doc(fname, title, desc, body, active, css=(), js=(), overlay=False, progress=False, vt323=False, wa=True, ambient=True, body_class=''):
    fonts = 'family=JetBrains+Mono:wght@400;500;700&amp;family=Space+Grotesk:wght@400;500;600;700' + ('&amp;family=VT323' if vt323 else '') + '&amp;display=swap'
    css_tags = ''.join(f'\n<link rel="stylesheet" href="assets/css/{c}?v={VER}">' for c in ('site.css',) + tuple(css) + ('theme-light.css',))
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
<script>try{{var t=localStorage.getItem('cyf-theme')||(matchMedia('(prefers-color-scheme: light)').matches?'light':'dark');document.documentElement.setAttribute('data-theme',t);if(!sessionStorage.getItem('cyf-intro')&&!matchMedia('(prefers-reduced-motion: reduce)').matches)document.documentElement.classList.add('intro')}}catch(e){{}}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?{fonts}">{css_tags}{js_tags}
</head>
<body{body_attr}>
{BOOT}
<a class="sr-only" href="#icerik">İçeriğe geç</a>
{header(active, overlay, progress, fname)}
<main id="icerik">
{body}
</main>
{footer()}{fab}
</body>
</html>
'''
    with open(os.path.join(OUT, fname), 'w', encoding='utf-8', newline='\n') as f:
        f.write(iconize(html))


# first page of a session: boot screen (html.intro is set in the head). Points fly in from 3D and assemble the </>
# mark inside an orbit ring, the name decodes, the mark holds and spins one full turn, then the points burst toward
# the camera while a hole opens on the page.
# The canvas is driven by the inline script below; the rest is CSS, so the screen still ends on its own without JS.
BOOT = r'''<div class="boot" aria-hidden="true" translate="no">
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
})();</script>'''


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


def ref_link(p):
    return f"referanslar.html#{p['slug']}"


def cd_link(p):
    return f"referanslar-cd.html#ref-{p['slug']}"


def cd_button():
    return '<a class="btn" href="referanslar-cd.html">CD rafında gezin</a>' if SHOW_CD else ''


def project_cards(limit=None, link=ref_link, items=PROJECTS):
    out = []
    for p in items[:limit]:
        tags = ''.join(f'<span>{t}</span>' for t in p['tags'])
        href = link(p)
        ext = ' target="_blank" rel="noopener"' if href.startswith('http') else ''
        out.append(f'''<a class="pcard reveal" href="{href}"{ext}>
        <div class="pcard-img"><img src="{p['img']}" alt="{p['ad']} web sitesi ekran görüntüsü" loading="lazy"></div>
        <div class="pcard-body"><div class="pcard-meta">{p['sektor']}</div><h3 class="h3">{p['ad']}</h3><p>{p['aciklama']}</p><div class="tags">{tags}</div></div>
      </a>''')
    return '\n      '.join(out)


def project_marquee():
    """Full-bleed, tilted, self-scrolling strip of the real project mockups (two copies for a seamless loop)."""
    items = ''.join(f'''<a class="mq-item" href="{ref_link(p)}"><img src="{p['img']}" alt="{p['ad']} web sitesi ekran görüntüsü" loading="lazy"><div class="mq-cap"><b>{p['ad']}</b><span>{p['sektor']}</span></div></a>''' for p in PROJECTS)
    return f'''<div class="marquee" aria-label="Tamamlanan projeler">
  <div class="mq-tilt"><div class="marquee-track"><div class="mq-set">{items}</div><div class="mq-set" aria-hidden="true">{items}</div></div></div>
</div>'''


def cta(title='Projenizi birlikte hayata geçirelim.', text='Aklınızdaki projeyi anlatın, size özel teklifimizi hazırlayalım.', dark=False):
    # dark: a glowing card in the page accent instead of the light band (service pages)
    return f'''<section class="{'section cta-dark' if dark else 'band-light'}">
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
        lead = icon(CHIP_ICON.get(b, 'check'))
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

    recent = ' · '.join(f'<a href="referanslar.html">{p["ad"]}</a>' for p in PROJECTS[:5])
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
        <li><span class="n">{icon('clipboard', 20)}<small>01</small></span><div><b>Planlama</b><span>İhtiyaçları ve hedefleri birlikte netleştiriyoruz.</span></div></li>
        <li><span class="n">{icon('pen', 20)}<small>02</small></span><div><b>Tasarım</b><span>Arayüzü ve kullanıcı akışını çiziyoruz.</span></div></li>
        <li><span class="n">{icon('code', 20)}<small>03</small></span><div><b>Geliştirme</b><span>Tasarımı hızlı ve güvenli koda dönüştürüyoruz.</span></div></li>
        <li><span class="n">{icon('rocket', 20)}<small>04</small></span><div><b>Yayın</b><span>Siteyi canlıya alıyor, 7/24 destekle yanınızda oluyoruz.</span></div></li>
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
    <div class="sec-head"><div><div class="eyebrow">// TAMAMLANAN PROJELER</div><h2 class="h2">Son işlerimiz.</h2></div><a class="link-arrow" href="referanslar.html">Tüm referanslar →</a></div>
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
    team_html = ''.join(f'<div class="member reveal"><img src="assets/img/hakkimizda/{img}?v={VER}" alt="{n}" loading="lazy"><div><b>{n}</b><span>KURUCU ORTAK</span></div></div>' for img, n in team)
    why = ['Müşterilerimize özel çözümler sunan bir şirketiz.',
           'Rekabetçi fiyatlarla, özenle hazırlanmış kaliteli işler teslim ediyoruz.',
           'Projeye yönelik tanımlanan gereksinimlere göre sabit fiyat teklifleri sunuyoruz.',
           'Alanında uzman ve deneyimli profesyonellerden oluşan bir ekibiz.',
           'Başlangıçtan sona kadar sizinle ilgilenecek özel bir proje yöneticisi atıyoruz.',
           'Ekibimiz 7/24 destek hizmeti sunuyor.']
    why_icons = ['users', 'coins', 'file', 'award', 'userc', 'headset']
    why_html = ''.join(f'<div class="card reveal"><div class="card-icon">{icon(why_icons[i], 22)}</div><span class="num">0{i+1}</span><p style="color:var(--text);font-size:17px">{w}</p></div>' for i, w in enumerate(why))
    stats = [('calendar', '3', 'Yıl deneyim'), ('folder', '20+', 'Tamamlanan proje'), ('smile', '%100', 'Müşteri memnuniyeti'), ('clock', '%99', 'Zamanında teslim oranı')]
    stats_html = ''.join(f'<div class="stat">{icon(ic, 26)}<b>{a}</b><span>{b}</span></div>' for ic, a, b in stats)
    # hero stage: the </> mark inside a glowing ring, the four values orbiting it
    values = [('Güvenilirlik', 'Uzun soluklu iş ortaklığı'), ('Hızlı teslimat', 'Planlanan takvimde'),
              ('Özel çözümler', 'İşinize göre şekillenir'), ('7/24 destek', 'Yayından sonra da yanınızda')]
    chips = ''.join(f'<div class="chip float ab-chip ab-chip{i}">{icon(CHIP_ICON[t])}<div><b>{t}</b><small>{d}</small></div></div>' for i, (t, d) in enumerate(values))
    right = f'''<div class="ab-stage">
        <div class="ab-orbit" aria-hidden="true"><i></i><i></i></div>
        <div class="ab-ring" aria-hidden="true"><span class="ab-logo">&lt;/&gt;</span></div>
        {chips}
      </div>'''
    manifest = f'<ul class="ab-manifest"><li>{icon("users")}<b>3</b> kurucu ortak</li><li>{icon("folder")}<b>20+</b> tamamlanan proje</li><li>{icon("pin")}<b>Manisa</b> merkezli</li></ul>'
    body = f'''{page_hero('HAKKIMIZDA', '// CYF TECH · HAKKIMIZDA', 'Dijitalin güvenilir <span class="accent">noktası.</span>', 'CYF Tech, her sektöre özel web ve yazılım çözümleri üreten yenilikçi bir teknoloji firmasıdır. Ekibimiz, fikrinizi ilk görüşmeden yayına kadar birlikte taşır.', '<div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="projelerimiz.html">Projelerimiz</a></div>' + manifest, right)}

<section class="ab-stats">
  <div class="wrap"><div class="stats reveal">{stats_html}</div></div>
</section>

<section class="section">
  <div class="bg-layer bg-lines bg-fade" aria-hidden="true"></div>
  <div class="wrap split">
    <div class="reveal"><div class="eyebrow">// MİSYON &amp; VİZYON</div><h2 class="h2">Misyonumuz ve vizyonumuz.</h2></div>
    <div class="reveal">
      <ol class="steps">
        <li><span class="n">{icon('target', 22)}</span><div><b>Misyonumuz</b><span>Her sektörden işletmenin dijital dönüşümünü hızlandırarak verimlilik ve kârlılığı artıran özel yazılım çözümleri geliştirmek.</span></div></li>
        <li><span class="n">{icon('eye', 22)}</span><div><b>Vizyonumuz</b><span>Yenilikçi, güvenilir ve müşteri odaklı teknolojilerle küresel ölçekte dijital dönüşümün öncüsü olmak.</span></div></li>
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

{cta(dark=True)}'''
    doc('hakkimizda.html', 'Hakkımızda — CYF Tech',
        'CYF Tech, her sektöre özel web ve yazılım çözümleri üreten yenilikçi bir teknoloji firmasıdır. Ekibimiz, misyonumuz ve vizyonumuz.',
        body, 'hakkimizda', css=('hakkimizda.css',))


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
      <div class="info">{icon('pin', 20)}<span class="k">Adres</span><div><a href="{MAPS}" target="_blank" rel="noopener">Yarhasanlar Mh. 2300 Sk. No:3 Daire:1</a><small>Şehzadeler / Manisa</small></div></div>
      <div class="info">{icon('phone', 20)}<span class="k">Telefon</span><div><a href="{TEL_HREF}">+90 (543) 791 10 61</a></div></div>
      <div class="info">{icon('mail', 20)}<span class="k">E-posta</span><div><a href="mailto:{MAIL}">{MAIL}</a></div></div>
      <div class="info">{icon('whatsapp', 20)}<span class="k">WhatsApp</span><div><a href="{WA}" target="_blank" rel="noopener">Hemen yazın →</a></div></div>
      <div class="info">{icon('building', 20)}<span class="k">Ofisler</span><div>Manisa<small>Merkez</small><div style="margin-top:10px">İstanbul</div><small>Kartal</small></div></div>
    </div>
  </div>
</section>

<section class="section-tight ct-loc">
  <div class="bg-layer bg-grid bg-fade" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// OFİSİMİZ</div><h2 class="h2">Manisa, Şehzadeler.</h2></div><p class="muted">Ofisimize uğramadan önce bizi aramanız yeterli; yol tarifi için haritayı kullanabilirsiniz.</p></div>
    <div class="ct-box reveal">
      <div class="ct-panel">
        <div class="ct-pin"><span class="ct-ping" aria-hidden="true"></span><b>CYF Tech</b><small>Merkez ofis</small></div>
        <div class="ct-addr">Yarhasanlar Mh. 2300 Sk.<br>No:3 Daire:1<br><span>Şehzadeler / Manisa</span></div>
        <dl class="ct-meta">
          <div><dt>Enlem</dt><dd>38.6144° K</dd></div>
          <div><dt>Boylam</dt><dd>27.4265° D</dd></div>
          <div><dt>Ofisler</dt><dd>Manisa · İstanbul (Kartal)</dd></div>
        </dl>
        <div class="ct-actions"><a class="btn btn-primary btn-sm" href="{MAPS}" target="_blank" rel="noopener">Yol tarifi al</a><a class="btn btn-sm" href="{TEL_HREF}">Arayın</a></div>
      </div>
      <div class="ct-map">
        <iframe title="CYF Tech ofis konumu" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6234.998530286844!2d27.426501!3d38.614394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b99d0c71cffc89%3A0x4cbce09a63a2e25b!2zQ1lGIFRlY2ggeWF6xLFsxLFt!5e0!3m2!1str!2str!4v1760401938035!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        <span class="ct-tag" aria-hidden="true">38.6144, 27.4265</span>
      </div>
    </div>
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
        body, 'iletisim', css=('iletisim.css',))


# ------------------------------------------------------------------ projects
# projelerimiz.html: an index of our products on top, then one detailed section per product (#<slug>).
# Feature / role lists come from the products themselves (KATSİS panels and modules, RestaurantBill roles and screens).
PROJECT_DETAILS = {
    'katsis': dict(
        c='#3B82F6',
        tagline='Yöneticiyi, sakini ve personeli aynı sistemde buluşturan site yönetim platformu.',
        platforms=[('web', 'Web paneli'), ('mobile', 'iOS ve Android'), ('desktop', 'Windows uygulaması')],
        features=[
            ('coins', 'Aidat ve borç takibi', 'Aidatları, borçları ve tahsilatları daire daire izleyin; geciken ödemeleri anında görün.'),
            ('card', 'Online ödeme', 'Sakinler borçlarını sanal POS ile kartla ya da havaleyle ödesin.'),
            ('chart', 'Kasa ve gelir-gider', 'Kasalar, gelir-gider kayıtları ve bilanço tek ekranda; gider dökümü sakinlerle paylaşılır.'),
            ('bell', 'Duyuru, anket ve bildirim', 'Duyuruları SMS ve anlık bildirimle iletin, anketlerle sakinlerin görüşünü alın.'),
            ('headset', 'Destek talepleri', 'Sakinlerin arıza ve isteklerini kayıt altına alın, her talebin durumunu takip edin.'),
            ('refresh', 'Periyodik bakım ve demirbaş', 'Asansör, jeneratör gibi bakımları planlayın; demirbaşları kayıt altında tutun.'),
            ('file', 'Karar defteri ve işletme projesi', 'Yönetim kararlarını ve yıllık işletme projesini dijitalde saklayın, sakinlerle paylaşın.'),
            ('users', 'Personel ve görevler', 'Personele görev atayın; telefon rehberi ve bakım listeleriyle sahada destekleyin.'),
        ],
        roles_h='Üç ayrı panel, tek sistem.',
        roles=[
            ('building', 'Yönetici paneli', 'Sitenin, binaların ve dairelerin finansını ve işleyişini yönetir.'),
            ('user', 'Sakin paneli', 'Borçlarını görür ve online öder; duyuru, anket ve taleplerini takip eder.'),
            ('clipboard', 'Personel paneli', 'Görevlerini, bakım listelerini ve duyuruları sahadan takip eder.'),
        ],
        gallery=[],
        tech=['PHP 8.2', 'MariaDB', 'Redis', 'RabbitMQ', 'Docker', 'Firebase'],
    ),
    'restaurantbill': dict(
        c='#D4A64A',
        tagline='Garsonu, mutfağı ve kasayı anlık olarak senkronize eden restoran yönetim sistemi.',
        platforms=[('web', 'Web uygulaması'), ('devices', 'Tablet ve telefon uyumlu'), ('bolt', 'Gerçek zamanlı')],
        features=[
            ('grid', 'Masa ve sipariş yönetimi', 'Garsonlar masaları bölgelere göre görür, siparişi birkaç dokunuşla mutfağa iletir.'),
            ('bolt', 'Anlık senkronizasyon', 'Sipariş ve durum değişiklikleri garson, mutfak ve kasa ekranlarına aynı anda yansır.'),
            ('tv', 'Mutfak ekranı', 'Bekleyen, hazırlanan ve hazır siparişler mutfakta sütunlar halinde takip edilir.'),
            ('card', 'Kasa ve ödeme', 'Kasa oturumları, kasalar arası transfer ve kör sayımla güvenli hesap kapanışı.'),
            ('building', 'Çoklu şube', 'Tek şirket altında birden çok şube; her şubenin kendi personeli, menüsü ve kasası.'),
            ('lock', 'Rol bazlı yetki', 'İşletme sahibi, yönetici, garson, kasiyer ve mutfak için ayrı ekranlar ve yetkiler.'),
            ('chart', 'Finansal raporlar', 'Şube bazında satış ve kasa raporlarıyla işletmenin nabzını tutun.'),
            ('shield', 'Denetim kaydı', 'Sipariş, ödeme ve personel işlemlerinin tamamı kayıt altında.'),
        ],
        roles_h='Her rol için ayrı ekran.',
        roles=[
            ('userc', 'İşletme sahibi', 'Şubeleri, yöneticileri, marka ayarlarını ve raporları yönetir.'),
            ('sliders', 'Yönetici', 'Menüyü, masaları ve personeli şube bazında düzenler.'),
            ('clipboard', 'Garson', 'Masaları ve siparişleri yönetir.'),
            ('tv', 'Mutfak', 'Siparişleri hazırlar, hazır olanları bildirir.'),
            ('card', 'Kasiyer', 'Ödemeleri alır, kasayı yönetir.'),
        ],
        gallery=[('garson', 'Garson ekranı'), ('mutfak', 'Mutfak ekranı'), ('kasa', 'Kasa ekranı'), ('sahip', 'İşletme sahibi paneli'), ('yonetici', 'Yönetici paneli')],
        tech=['.NET 9', 'React 19', 'TypeScript', 'PostgreSQL', 'SignalR', 'Docker'],
    ),
}


def project_section(i, p):
    d = PROJECT_DETAILS[p['slug']]
    host = p['url'].split('//', 1)[-1].rstrip('/')
    plats = ''.join(f'<li>{icon(ic, 16)}<span>{t}</span></li>' for ic, t in d['platforms'])
    feats = ''.join(f'<div class="pj-feat reveal"><div class="card-icon">{icon(ic, 22)}</div><h4>{t}</h4><p>{x}</p></div>' for ic, t, x in d['features'])
    roles = ''.join(f'<div class="pj-role">{icon(ic, 20)}<div><b>{t}</b><span>{x}</span></div></div>' for ic, t, x in d['roles'])
    gallery = ''
    if d['gallery']:
        shots = ''.join(f'<figure class="pj-shot"><img src="assets/img/proje/{p["slug"]}/{f}.webp" alt="{p["ad"]} — {cap}" loading="lazy"><figcaption>{cap}</figcaption></figure>'
                        for f, cap in d['gallery'])
        gallery = f'''
    <div class="pj-block">
      <div class="eyebrow">// EKRANLAR</div>
      <div class="pj-gallery">{shots}</div>
    </div>'''
    tech = ''.join(f'<span>{t}</span>' for t in d['tech'])
    return f'''<section class="pj tone{' pj-alt' if i % 2 else ''}" id="{p['slug']}" style="--c:{d['c']};--accent:{d['c']}">
  <div class="wrap">
    <div class="pj-head">
      <div class="pj-intro reveal">
        <div class="pj-num">0{i + 1}</div>
        <div class="eyebrow">// {p['sektor']}</div>
        <h2 class="h2">{p['ad']}</h2>
        <p class="lead pj-tagline">{d['tagline']}</p>
        <p class="pj-desc">{p['aciklama']}</p>
        <ul class="pj-plats">{plats}</ul>
        <div class="btn-row"><a class="btn btn-primary" href="{p['url']}" target="_blank" rel="noopener">{host}{icon('external', 16, 'ic-dir')}</a><a class="btn" href="iletisim.html">Benzerini isteyin</a></div>
      </div>
      <div class="pj-visual reveal"><img src="{p['img']}" alt="{p['ad']} web sitesi ekran görüntüsü" loading="lazy"></div>
    </div>

    <div class="pj-block">
      <div class="eyebrow">// ÖNE ÇIKAN ÖZELLİKLER</div>
      <div class="pj-feats">{feats}</div>
    </div>

    <div class="pj-block pj-split">
      <div><div class="eyebrow">// KİMLER KULLANIYOR</div><h3 class="h3 pj-roles-h">{d['roles_h']}</h3></div>
      <div class="pj-roles">{roles}</div>
    </div>{gallery}

    <div class="pj-tech"><div class="pj-tech-l">{icon('code', 16)}Teknolojiler</div><div translate="no">{tech}</div></div>
  </div>
</section>'''


def projects():
    tiles = ''.join(f'''<a class="pj-tile reveal" href="#{p['slug']}" style="--c:{PROJECT_DETAILS[p['slug']]['c']}">
        <div class="pj-tile-img"><img src="{p['img']}" alt="" loading="lazy"></div>
        <div class="pj-tile-body"><span class="pj-tile-num">0{i + 1}</span><div class="pj-tile-meta">{p['sektor']}</div><h3 class="h3">{p['ad']}</h3><p>{PROJECT_DETAILS[p['slug']]['tagline']}</p><div class="pj-tile-go">Projeyi incele{icon('arrow', 16, 'ic-dir')}</div></div>
      </a>''' for i, p in enumerate(OWN_PROJECTS))
    subnav = ''.join(f'<a href="#{p["slug"]}" style="--c:{PROJECT_DETAILS[p["slug"]]["c"]}"><i></i>{p["ad"]}</a>' for p in OWN_PROJECTS)
    sections = '\n\n'.join(project_section(i, p) for i, p in enumerate(OWN_PROJECTS))
    body = f'''{page_hero('PROJELER', '// CYF TECH · PROJELER', 'Kendi <span class="accent">projelerimiz.</span>', 'Fikirden yayına kendimiz tasarlayıp geliştirdiğimiz, bugün gerçek kullanıcılara hizmet veren ürünlerimiz.', '<div class="btn-row"><a class="btn btn-primary" href="referanslar.html">Referanslarımız</a>' + cd_button() + '<a class="btn" href="iletisim.html">Teklif Al</a></div>')}

<section class="section-tight" style="padding-top:0">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// ÜRÜNLERİMİZ</div><h2 class="h2">Kendi ürünlerimiz.</h2></div><p class="muted">Bir ürüne tıklayın, ayrıntılı tanıtımına geçin.</p></div>
    <div class="pj-tiles">
      {tiles}
    </div>
  </div>
</section>

<nav class="pj-subnav" aria-label="Projeler" translate="no"><div class="wrap">{subnav}</div></nav>

{sections}

{cta(dark=True)}'''
    doc('projelerimiz.html', 'Projelerimiz — CYF Tech',
        'CYF Tech’in kendi ürünleri: apartman ve site yönetim platformu KATSİS ve restoran adisyon ve mutfak ekranı sistemi RestaurantBill.',
        body, 'projeler', css=('projeler.css',))


# ------------------------------------------------------------------ references
def references():
    # CD shelf data for referanslar.js
    refs = json.dumps([dict(ad=p['ad'], slug=p['slug'], etiket=p['etiket'], dosya=p['dosya'], renk=p['renk'], sektor=p['sektor'], gorsel=p['img'],
                            aciklama=p['aciklama'], hizmetler=p['tags'], url=p['url']) for p in PROJECTS], ensure_ascii=False).replace('</', r'<\/')
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
      {project_cards(link=cd_link)}
    </div>
  </div>
</section>
<script>window.CYF_REFS = {refs};</script>

{cta()}'''
    doc('referanslar-cd.html', 'CD Rafı — Referanslar | CYF Tech',
        'CYF Tech referansları: KA Mühendislik, Zumer Gayrimenkul, MÜSİAD Gebze, Softrue, Eurolab ve daha fazlası. Raftaki CD’lerden birini seçin, projeyi inceleyin.',
        body, 'referanslar', css=('referanslar.css',), js=('referanslar.js',), vt323=True)


# referanslar.html groups the projects by field; every project is listed exactly once
REF_GROUPS = [
    ('yazilim', 'Yazılım ve SaaS', 'Kendi ürünlerini dijitale taşıyan yazılım firmaları ve platformlar.', ['sistemkys', 'softrue']),
    ('kurumsal', 'Kurumsal ve Mühendislik', 'Köklü firmalar ve iş dünyası kuruluşları için kurumsal siteler ve portallar.', ['ka-muhendislik', 'musiad-gebze']),
    ('test', 'Test, Muayene ve Belgelendirme', 'Eurolab ve Globac için çok sayfalı, sektör sektör ayrışan hizmet siteleri.', ['eurolab-tr', 'testinglaboratory', 'testinglab-com', 'testinglab-net', 'eutestlab', 'eulabtest', 'kalite', 'globac']),
    ('yerel', 'Gayrimenkul ve Yerel İşletmeler', 'Müşterisine telefon ve WhatsApp kadar yakın olması gereken işletmeler.', ['zumer', 'nurella', 'teknikdost']),
]


def references_list():
    by_slug = {p['slug']: p for p in PROJECTS}
    assert sorted(s for g in REF_GROUPS for s in g[3]) == sorted(by_slug), 'REF_GROUPS must list every project once'
    host = lambda u: u.split('//', 1)[-1].rstrip('/')
    n_tags = len({t for p in PROJECTS for t in p['tags']})

    chips = ''.join(f'<div class="chip float" style="animation-delay:-{i * 1.1:.1f}s"><span class="tag">{len(s):02d}</span><div><b>{t}</b><small>{", ".join(by_slug[x]["ad"] for x in s[:2])}{" ve diğerleri" if len(s) > 2 else ""}</small></div></div>'
                    for i, (_, t, _, s) in enumerate(REF_GROUPS))
    stats = [('globe', f'{len(PROJECTS)}', 'Yayındaki referans'), ('layers', f'{len(REF_GROUPS)}', 'Farklı sektör grubu'), ('grid', f'{n_tags}', 'Hizmet türü'), ('headset', '7/24', 'Yayından sonra destek')]
    stats_html = ''.join(f'<div class="stat">{icon(ic, 26)}<b>{a}</b><span>{b}</span></div>' for ic, a, b in stats)
    filters = '<button type="button" class="rf-chip on" data-rf="all">Tümü <b>' + str(len(PROJECTS)) + '</b></button>' + ''.join(
        f'<button type="button" class="rf-chip" data-rf="{k}">{t} <b>{len(s)}</b></button>' for k, t, _, s in REF_GROUPS)

    n = 0
    groups = ''
    for k, t, d, slugs in REF_GROUPS:
        rows = ''
        for s in slugs:
            p = by_slug[s]
            n += 1
            tags = ''.join(f'<span>{x}</span>' for x in p['tags'])
            rows += f'''
      <article class="rf-row reveal" id="{s}" style="--c:{p['renk']}">
        <span class="rf-num">{n:02d}</span>
        <a class="rf-img" href="{p['url']}" target="_blank" rel="noopener" tabindex="-1" aria-hidden="true"><img src="{p['img']}" alt="" loading="lazy"></a>
        <div class="rf-body">
          <div class="rf-meta"><i></i>{p['sektor']}</div>
          <h3 class="h3">{p['ad']}</h3>
          <p>{p['aciklama']}</p>
          <div class="tags">{tags}</div>
        </div>
        <div class="rf-links">
          <a class="rf-visit" href="{p['url']}" target="_blank" rel="noopener">{host(p['url'])} {icon('external', 14, 'ic-dir')}</a>
          {f'<a class="rf-cd" href="{cd_link(p)}">CD rafında incele →</a>' if SHOW_CD else ''}
        </div>
      </article>'''
        groups += f'''
    <div class="rf-group" data-rf-group="{k}">
      <div class="rf-ghead"><h2 class="h3">{icon({'yazilim': 'code', 'kurumsal': 'building', 'test': 'flask', 'yerel': 'store'}[k], 22)}{t}</h2><p>{d}</p><span class="badge">{len(slugs):02d} PROJE</span></div>{rows}
    </div>'''

    body = f'''{page_hero('REFERANSLAR', '// CYF TECH · REFERANSLAR', 'Bize güvenen <span class="accent">markalar.</span>',
                    'Mühendislikten test laboratuvarlarına, yazılım ürünlerinden yerel işletmelere; farklı sektörlerden markaların dijital yüzünü birlikte kurduk. Her referans canlı, her biri ziyaret edilebilir.',
                    '<div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a>' + cd_button() + '</div>',
                    f'<div class="chip-stack rf-chips">{chips}</div>')}

<section class="section-tight" style="padding-top:0">
  <div class="wrap"><div class="stats reveal">{stats_html}</div></div>
</section>

<section class="section-tight rf-list">
  <div class="bg-layer bg-rows bg-fade" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// TÜM REFERANSLAR</div><h2 class="h2">Sektör sektör işlerimiz.</h2></div><p class="muted">Bir sektör seçin ya da hepsine göz atın. Görsele ya da adrese tıklayarak siteyi canlı olarak açabilirsiniz.</p></div>
    <div class="rf-filter" role="group" aria-label="Sektöre göre süz">{filters}</div>
{groups}
  </div>
</section>
<script>
(function () {{
  var chips = document.querySelectorAll('.rf-chip'), groups = document.querySelectorAll('[data-rf-group]');
  function pick(k) {{
    chips.forEach(function (c) {{ var on = c.getAttribute('data-rf') === k; c.classList.toggle('on', on); c.setAttribute('aria-pressed', on); }});
    groups.forEach(function (g) {{ g.hidden = k !== 'all' && g.getAttribute('data-rf-group') !== k; }});
  }}
  chips.forEach(function (c) {{ c.addEventListener('click', function () {{ pick(c.getAttribute('data-rf')); }}); }});
  // arriving from a project card (#slug): make sure its group is visible
  if (location.hash && document.getElementById(location.hash.slice(1))) pick('all');
}})();
</script>

{cta(dark=True)}'''
    doc('referanslar.html', 'Referanslar — CYF Tech',
        'CYF Tech referansları: KA Mühendislik, Zumer Gayrimenkul, MÜSİAD Gebze, Softrue, Sistem KYS, Eurolab ve daha fazlası. Sektörlere göre tüm projelerimiz.',
        body, 'referanslar', css=('referans-listesi.css',))


# ------------------------------------------------------------------ blog
AYLAR = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık']


def post_date(p):
    """'24 Ağustos 2025' -> ('24', 'Ağu', '2025', '2025-08-24')"""
    g, a, y = p['date'].split()
    return g, a[:3], y, f'{y}-{AYLAR.index(a) + 1:02d}-{int(g):02d}'


def post_hash(p):
    return hashlib.sha1(p['title'].encode('utf-8')).hexdigest()[:7]


def blog():
    """Blog as a commit log: a terminal listing every post, the latest published post as a feature, then a timeline."""
    live = [p for p in POSTS if p['href']]
    feat = live[0]
    log = ''.join(
        f'''<li style="--i:{i}"><span class="bl-h">{post_hash(p)}</span> <span class="bl-d">{post_date(p)[3]}</span> <span class="bl-k">{p['kat'].lower()}:</span> {p['title']}{'' if p['href'] else ' <span class="bl-draft">(taslak)</span>'}</li>'''
        for i, p in enumerate(POSTS))
    term = f'''<div class="bl-term" aria-hidden="true">
        <div class="bl-bar"><i></i><i></i><i></i><span>~/cyftech/blog</span></div>
        <div class="bl-screen"><p><span class="bl-p">$</span> git log --oneline</p><ul>{log}</ul><p style="--i:{len(POSTS)}"><span class="bl-p">$</span> <span class="bl-caret"></span></p></div>
      </div>'''
    _, _, _, iso = post_date(feat)
    featured = f'''<a class="bl-feat reveal" href="{feat['href']}">
      <div class="bl-feat-img"><img src="{feat['img']}" alt="" loading="lazy"></div>
      <div class="bl-feat-body">
        <span class="bl-flag">ÖNE ÇIKAN</span>
        <div class="bl-meta"><b>{feat['kat']}</b><span>·</span><time datetime="{iso}">{feat['date']}</time><span>·</span>{feat['sure']} okuma</div>
        <h2 class="h2">{feat['title']}</h2>
        <p>{feat['ozet']}</p>
        <span class="link-arrow">Yazıyı oku →</span>
      </div>
    </a>'''
    rows = []
    for p in POSTS:
        g, a, y, iso = post_date(p)
        meta = f"<span>·</span>{p['sure']} okuma" if p['href'] else '<span class="badge">TASLAK · YAKINDA</span>'
        more = '<span class="bl-more">Devamını oku →</span>' if p['href'] else ''
        inner = f'''<time class="bl-date" datetime="{iso}"><b>{g}</b><span>{a} {y}</span></time>
        <div class="bl-node" aria-hidden="true">{icon(KAT_ICON[p['kat']], 15)}</div>
        <div class="bl-body">
          <div class="bl-meta"><span class="bl-h">{post_hash(p)}</span><b>{p['kat']}</b>{meta}</div>
          <h3 class="h3">{p['title']}</h3>
          <p>{p['ozet']}</p>{more}
        </div>
        <div class="bl-thumb"><img src="{p['img']}" alt="" loading="lazy"></div>'''
        if p['href']:
            rows.append(f'<a class="bl-row reveal" href="{p["href"]}">{inner}</a>')
        else:
            rows.append(f'<div class="bl-row is-draft reveal">{inner}</div>')

    body = f'''{page_hero('BLOG', '// CYF TECH · BLOG', 'Blog ve <span class="accent">haberler.</span>', 'Teknoloji, yazılım ve sektörel gelişmeler üzerine içerikler; CYF Tech’ten en güncel duyurular ve haberler.', right=term)}

<section class="section-tight" style="padding-top:0">
  <div class="wrap">
    {featured}
  </div>
</section>

<section class="section-tight">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// TÜM YAZILAR</div><h2 class="h2">Yayın akışı.</h2></div><p class="muted">{len(live)} yazı yayında, {len(POSTS) - len(live)} yazı hazırlanıyor. Yeni içerikler akışın en üstüne eklenir.</p></div>
    <div class="bl-log">
      {''.join(rows)}
    </div>
  </div>
</section>

{cta(dark=True)}'''
    doc('blog.html', 'Blog — CYF Tech',
        'CYF Tech blog: web tasarım, yazılım, SEO ve dijital pazarlama üzerine içerikler; şirket haberleri ve duyurular.',
        body, 'blog', css=('blog.css',))




def blog_inside():
    post = POSTS[0]
    _, _, _, iso = post_date(post)
    others = ''.join(f'''<li><span class="bi-oic">{icon(KAT_ICON[p['kat']], 18)}</span><div><span class="d">{p['date']}</span><b>{p['title']}</b><span class="badge">YAKINDA</span></div></li>'''
                     for p in POSTS[1:])
    facts = ''.join(f'<li>{icon(i, 18)}<div><span>{k}</span><b>{v}</b></div></li>' for i, k, v in [
        ('tv', 'Kanal', 'Ülke TV'), ('mic', 'Program', 'Yeni Nesil İşler'), ('user', 'Sunucu', 'Aycan Gül'), ('calendar', 'Yayın tarihi', post['date'])])
    share = ''.join(f'<a class="bi-share-btn" data-share="{k}" href="#" target="_blank" rel="noopener" aria-label="{n}" title="{n}">{ic}</a>' for k, n, ic in [
        ('wa', 'WhatsApp ile paylaş', I_WA.replace('width="24" height="24"', 'width="18" height="18"')), ('li', 'LinkedIn’de paylaş', icon('linkedin', 18)),
        ('x', 'X’te paylaş', icon('x', 18)), ('mail', 'E-posta ile gönder', icon('mail', 18))])
    body = f'''<section class="page-hero" style="padding-bottom:48px">
  {floor()}
  <div class="wrap">
    <div class="crumbs"><a href="index.html">CYF TECH</a><span>/</span><a href="blog.html">BLOG</a><span>/</span><span>HABER</span></div>
    <h1 class="h1" style="max-width:900px">CYF Tech ÜLKE TV'de.</h1>
    <div class="bi-meta"><div class="bi-tag">{icon('tag')}{post['kat']}</div><div>{icon('calendar')}<time datetime="{iso}">{post['date']}</time></div><div>{icon('clock')}{post['sure']} okuma</div></div>
  </div>
</section>

<section class="section-tight" style="padding-top:0">
  <div class="wrap bi-grid">
    <article class="article">
      <div class="article-img"><img src="assets/img/blog/ulketv.webp" alt="CYF Tech, Ülke TV Yeni Nesil İşler programında"></div>
      <p>CYF Tech, 24 Ağustos 2025 tarihinde Ülke TV’de yayınlanan Aycan Gül ile Yeni Nesil İşler programına konuk oldu. Programda şirketin kuruluş hikâyesi, inovasyon odaklı projeleri ve Türkiye’de yazılım sektörüne kazandırdığı yenilikçi çözümler ele alındı.</p>
      <p>CYF Tech kurucuları programda yazılım geliştirme süreçlerinden, dijital dönüşüm projelerinden ve yapay zekânın iş dünyasındaki dönüştürücü etkilerinden bahsetti. Ayrıca gençlerin yazılım dünyasına adım atarken dikkat etmeleri gereken noktalar ve kariyer planlaması üzerine tavsiyelerde bulunuldu.</p>
      <p>Program boyunca CYF Tech’in yazılım sektöründe edindiği tecrübeler, müşteri odaklı yaklaşımı ve geleceğin teknolojilerine yönelik vizyonu izleyicilerle paylaşıldı. Yapay zekâ destekli çözümlerden web ve mobil uygulama geliştirme süreçlerine kadar geniş bir yelpazede sunulan hizmetler detaylı olarak anlatıldı.</p>
      <p>Şirket temsilcileri, teknolojinin yalnızca iş süreçlerinde değil, eğitim ve toplumsal gelişim açısından da büyük bir potansiyele sahip olduğunu vurguladı:</p>
      <blockquote><div class="bi-q">{icon('quote', 22)}</div>“Yapay zekâ, gençlere yeni fırsatlar sunuyor. Önemli olan bu teknolojiyi doğru anlamak ve üretken şekilde kullanmak.”</blockquote>
      <p>CYF Tech’in Ülke TV’deki bu özel röportajı, hem yazılım sektörüne ilgi duyan gençler hem de dijital dönüşüm yolculuğuna çıkmak isteyen işletmeler için ilham verici bir içerik oldu.</p>
      <div class="bi-foot">
        <a class="bi-back" href="blog.html">{icon('back')}Tüm yazılar</a>
        <div class="bi-share"><div class="bi-share-l">{icon('share')}Paylaş</div>{share}</div>
      </div>
    </article>
    <aside class="bi-aside">
      <div class="bi-box">
        <div class="eyebrow">// PROGRAM BİLGİLERİ</div>
        <ul class="bi-facts">{facts}</ul>
      </div>
      <div class="bi-box">
        <div class="eyebrow">// DİĞER YAZILAR</div>
        <ul class="bi-others">{others}</ul>
      </div>
      <a class="bi-box bi-cta" href="iletisim.html"><b>Projenizi konuşalım.</b><span>Aklınızdaki fikri anlatın, size özel teklifimizi hazırlayalım.</span><div class="bi-go">Teklif Al{icon('arrow')}</div></a>
    </aside>
  </div>
</section>

{cta(dark=True)}'''
    doc('blog-inside.html', "CYF Tech ÜLKE TV'de — CYF Tech Blog",
        'CYF Tech, Ülke TV’de Aycan Gül ile Yeni Nesil İşler programına konuk oldu: kuruluş hikâyesi, projeler ve yapay zekânın iş dünyasına etkisi.',
        body, 'blog', css=('blog.css',))


home()
about()
contact()
projects()
references()
references_list()
blog()
blog_inside()
exec(open(os.path.join(os.path.dirname(os.path.abspath(__file__)), 'scrolly_pages.py'), encoding='utf-8').read())
# translated copies in /en/, /de/, ... from tools/i18n/<code>.json
sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)))
import i18n
i18n.build(OUT)
print('ok')
