# Scroll-story service pages (Web / Masaüstü / Mobil). exec()'d at the end of build.py.

CURSOR = '<svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 2l16 10-7 1.5L9.5 21z" fill="#E6EDF3" stroke="#040814" stroke-width="1.5" stroke-linejoin="round"/></svg>'
DOT = '<span class="dot"></span>'
def TAG(t): return f'<span class="tag">{t}</span>'


def chip(lead, b, small, delay=None):
    style = f' style="animation-delay:{delay}"' if delay else ''
    return f'<div class="chip float"{style}>{lead}<div><b>{b}</b><small>{small}</small></div></div>'


def demo_card(demo, t, d, i):
    return f'''
      <div class="card reveal">
        {demo}
        <span class="num">0{i+1}</span><h3 class="h3">{t}</h3><p>{d}</p>
      </div>'''


def scrolly_page(fname, meta, label0, hint, steps, stage, below, css):
    """meta: n, t, title, desc, h1, lead · steps: [(name, h2, p, [items], state)] · below: html after the story."""
    step_html = ''
    for i, (nm, h2, p, items, state) in enumerate(steps, 1):
        lis = ''.join(f'<li>{x}</li>' for x in items)
        extra = ('<div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="' + WA + '" target="_blank" rel="noopener">WhatsApp\'tan yazın</a></div>') if i == len(steps) else ''
        step_html += f'''
      <div class="wt-step" data-name="{nm}" data-state="{state}">
        <div class="eyebrow">0{i} — {nm.upper()}</div>
        <h2>{h2}</h2>
        <p>{p}</p>
        <ul class="arrow-list">{lis}</ul>{extra}
      </div>'''
    others = ''.join(f'<a class="card reveal" href="{h}"><span class="num">0{i+1}</span><h3 class="h3">{t}</h3><p>{d}</p><span class="more">İncele →</span></a>'
                     for i, (h, t, d) in enumerate(SERVICES) if h != fname)
    second = meta.get('second', ('projelerimiz.html', 'Projelerimize Göz At'))
    body = f'''<section class="wt" aria-label="{meta['t']} süreci">
  <div class="wt-bg" aria-hidden="true"><div class="floor"><div><div></div></div></div><div class="grid {meta.get('grid', 'sq')}"></div></div>

  <div class="wt-steps">
    <div class="wt-step on" data-name="{label0}" data-state="">
      <div class="crumbs"><a href="index.html">CYF TECH</a><span>/</span><span>HİZMETLER</span><span>/</span><span>{meta['t'].upper()}</span></div>
      <div class="eyebrow">// HİZMETLER · {meta['n']} — {meta['t'].upper()}</div>
      <h1 class="h1">{meta['h1']}</h1>
      <p class="lead">{meta['lead']}</p>
      <div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a><a class="btn" href="{second[0]}">{second[1]}</a></div>
      <div class="wt-hint">{I_DOWN}{hint}</div>
    </div>{step_html}
  </div>

  <div class="wt-stage" data-wt-stage aria-hidden="true">
    <div class="wt-label"><b data-wt-num>00</b><span>/ 0{len(steps)}</span><i></i><span data-wt-name>{label0}</span></div>
    <div class="wt-fit" data-wt-fit>
      <div class="wt-rig" data-wt-rig>
{stage}
      </div>
    </div>
  </div>
</section>

{below}

<section class="section-tight">
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">// DİĞER HİZMETLER</div><h2 class="h2">Birlikte daha güçlü.</h2></div></div>
    <div class="cards c2">{others}</div>
  </div>
</section>

{cta()}'''
    doc(fname, meta['title'], meta['desc'], body, fname, css=('scrolly.css', css), js=('scrolly.js',))


def offers_section(head, sub, offers, eyebrow='// NELER SUNUYORUZ'):
    return f'''<section class="section">
  <div class="bg-layer bg-dots bg-fade" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head"><div><div class="eyebrow">{eyebrow}</div><h2 class="h2">{head}</h2></div><p class="muted">{sub}</p></div>
    <div class="bento">{''.join(demo_card(d, t, x, i) for i, (d, t, x) in enumerate(offers))}
    </div>
  </div>
</section>'''


# ================================================================== WEB
WEB_SVCS = [
    dict(id='web-tasarim', t='Web Tasarım', h='Modern ve kullanıcı dostu web siteleri.',
         lead='Profesyonel web tasarım hizmetimizle çevrimiçi varlığınızı güçlendirin. Markanızın dijital yüzünü, ziyaretçinin ilk saniyede güven duyacağı sade ve net bir arayüzle tasarlıyoruz.',
         flow=['Keşif ve Analiz', 'Tasarım Planlama', 'Geliştirme ve Kodlama', 'Test ve Optimizasyon', 'Yayınlama ve Destek'],
         offers=[
             ('<div class="demo demo-resp" aria-hidden="true"><div class="dev"><i></i><i></i><i></i><i></i></div></div>', 'Responsive', 'Mobil, tablet ve masaüstünde kusursuz görünüm. Ekran küçüldükçe içerik kendini yeniden düzenler.'),
             ('''<div class="demo demo-seo" aria-hidden="true"><div class="q">web tasarım manisa</div><div class="rs"><div class="r o" style="--y0:0px;--y1:31px">rakip-site.com</div><div class="r o" style="--y0:31px;--y1:62px">baska-firma.com</div><div class="r o" style="--y0:62px;--y1:93px">ornek-ajans.com</div><div class="r me"><b>↑</b> markaniz.com.tr</div></div></div>''', 'SEO Dostu', 'Arama motorlarının kolayca anladığı yapı; doğru aramalarda üst sıralarda görünmenin temeli.'),
             ('''<div class="demo demo-perf" aria-hidden="true"><div class="ring"><svg viewBox="0 0 110 110"><circle class="bg" cx="55" cy="55" r="45"/><circle class="fg" cx="55" cy="55" r="45"/></svg><span>hız</span></div><ul><li>Optimize görseller</li><li>Hafif kod</li><li>Hızlı açılış</li></ul></div>''', 'Yüksek Performans', 'Hızlı açılan, akıcı sayfalar. Ziyaretçi beklemez, siteniz de bekletmez.'),
         ]),
    dict(id='web-gelistirme', t='Web Geliştirme', h='Özel, güvenli ve ölçeklenebilir web uygulamaları.',
         lead='Markanızın dijital gücünü artırmak için modern, ölçeklenebilir ve yüksek performanslı web uygulamaları geliştiriyoruz. İster kurumsal web sitesi, ister özel bir portal ya da e-ticaret altyapısı olsun; sizin için doğru teknolojiyi seçip kusursuz bir yazılım geliştiriyoruz.',
         flow=['Analiz ve Planlama', 'Tasarım ve Prototipleme', 'Kodlama ve Geliştirme', 'Test ve Optimizasyon', 'Yayınlama ve Destek'],
         offers=[
             ('<div class="demo demo-api" aria-hidden="true"><div class="rq">GET /api/siparisler</div><div class="rs">200 OK · 24ms</div><div class="rs">[ {"durum": "kargoda"}, … ]</div></div>', 'Özel Web Uygulamaları', 'Hazır kalıplara sığmayan ihtiyaçlarınız için iş süreçlerinize göre şekillenen yazılımlar.'),
             ('''<div class="demo demo-int" aria-hidden="true"><svg viewBox="0 0 300 200" preserveAspectRatio="none"><path d="M60 40 L150 100"/><path d="M240 40 L150 100"/><path d="M60 160 L150 100"/><path d="M240 160 L150 100"/></svg><span class="sat" style="left:10%;top:12%">ödeme</span><span class="sat" style="right:10%;top:12%">kargo</span><span class="sat" style="left:12%;bottom:12%">ERP</span><span class="sat" style="right:12%;bottom:12%">CRM</span><div class="hub">{ }</div></div>''', 'API ve Sistem Entegrasyonları', 'Kullandığınız ödeme, kargo, ERP ve CRM sistemleriyle konuşan bir altyapı.'),
             ('<div class="demo demo-care" aria-hidden="true"><div class="row"><span>sistem durumu</span><b>● çalışıyor</b></div><div class="bars">' + ''.join(f'<i style="--i:{i}"></i>' for i in range(24)) + '</div><div class="row"><span>son yedek</span><b>bugün</b></div></div>', 'Bakım ve Sürekli Destek', 'Yayından sonra da güncelleme, yedekleme ve izlemeyle yanınızdayız.'),
         ]),
    dict(id='e-ticaret', t='E-Ticaret Siteleri', h='Satış odaklı ve kullanıcı dostu e-ticaret.',
         lead='Markanızın çevrimiçi satış gücünü artıran modern e-ticaret çözümleri geliştiriyoruz. Güvenli ödeme sistemleri, mobil uyumluluk ve hızlı altyapıyla dijital mağazanızı yalnızca bir web sitesi değil, güçlü bir satış kanalına dönüştürüyoruz.',
         flow=['İhtiyaç Analizi ve Strateji', 'Tasarım ve UX/UI', 'Altyapı ve Entegrasyon', 'Test ve Optimizasyon', 'Yayınlama ve Sürekli Destek'],
         offers=[
             ('<div class="demo demo-shop" aria-hidden="true">' + ''.join(f'<i style="--i:{i}"></i>' for i in range(6)) + '</div>', 'Özel E-Ticaret Tasarımı', 'Markanıza özel vitrin, ürün ve kategori sayfaları; ziyaretçiyi müşteriye dönüştürmek için kurgulanır.'),
             ('<div class="demo demo-pay" aria-hidden="true"><div class="cc"><span>KART</span><b>•••• •••• •••• 4242</b></div><div class="ok">● 3D Secure doğrulandı</div><div class="ok" style="animation-delay:.4s">● Ödeme alındı</div></div>', 'Güvenli Ödeme ve Entegrasyonlar', 'Güvenli ödeme altyapısı; kargo, muhasebe ve CRM sistemleriyle tam entegrasyon.'),
             ('<div class="demo demo-order" aria-hidden="true"><div class="steps3"><span style="--i:0">hazırlanıyor</span><span style="--i:1">kargoda</span><span style="--i:2">teslim</span></div><div class="stock">stok<span><i></i></span></div></div>', 'Sipariş ve Stok Yönetimi', 'Siparişlerinizi, stoklarınızı ve kargo süreçlerinizi tek panelden kolayca yönetin.'),
         ]),
    dict(id='seo', t='SEO Hizmetleri', h='Görünürlüğünüzü artırıp müşteri kazandırıyoruz.',
         lead='Markanızı arama motorlarında üst sıralara taşıyan, sürdürülebilir ve sonuç odaklı SEO çözümleri sunuyoruz. Teknik optimizasyondan içerik stratejisine kadar her adımda görünürlüğünüzü artırıyor; yalnızca trafik değil, gerçek dönüşüm sağlıyoruz.',
         flow=['Durum Analizi ve Hedef Belirleme', 'Teknik Optimizasyon', 'Anahtar Kelime ve İçerik Planı', 'Bağlantı ve Otorite Geliştirme', 'Raporlama ve Sürekli İyileştirme'],
         offers=[
             ('<div class="demo demo-audit" aria-hidden="true">' + ''.join(f'<div><i style="--i:{i}"></i>{t}</div>' for i, t in enumerate(['Sayfa hızı', 'Meta etiketleri', 'Mobil uyum', 'Site haritası'])) + '</div>', 'Teknik SEO Analizi', 'Site yapısını, hızı ve taranabilirliği inceleyip sorunları tek tek gideriyoruz.'),
             ('<div class="demo demo-kw" aria-hidden="true">' + ''.join(f'<div>{k}<span><i style="--w:{w};--i:{i}"></i></span></div>' for i, (k, w) in enumerate([('web tasarım manisa', '92%'), ('kurumsal web sitesi', '78%'), ('e-ticaret sitesi', '70%'), ('seo hizmeti', '64%')])) + '</div>', 'Anahtar Kelime ve Rakip Analizi', 'Hedef kitlenizin gerçekten aradığı kelimeleri ve rakiplerinizin durumunu ortaya koyuyoruz.'),
             ('<div class="demo demo-links" aria-hidden="true"><svg viewBox="0 0 300 200">' + ''.join(f'<line x1="{x}" y1="{y}" x2="150" y2="100" style="--i:{i}"/>' for i, (x, y) in enumerate([(50, 40), (250, 50), (40, 150), (260, 160), (150, 25)])) + ''.join(f'<circle cx="{x}" cy="{y}" r="8"/>' for x, y in [(50, 40), (250, 50), (40, 150), (260, 160), (150, 25)]) + '<circle class="me" cx="150" cy="100" r="13"/></svg></div>', 'İçerik ve Backlink Stratejisi', 'Kaliteli içerik ve güvenilir bağlantılarla sitenizin otoritesini adım adım büyütüyoruz.'),
         ]),
]


def web():
    meta = dict(n='01', t='Web Çözümleri', grid='sq', title='Web Çözümleri — Web Tasarım, Yazılım, E-Ticaret ve SEO | CYF Tech',
                desc='CYF Tech web çözümleri: web tasarım, özel web yazılımı, e-ticaret siteleri ve SEO hizmetleri tek çatı altında. Tasarımdan yayına uçtan uca.',
                h1='Web’de ihtiyacınız olan her şey, tek çatı altında.',
                lead='Web tasarımdan özel yazılıma, e-ticaretten SEO’ya kadar markanızın web’deki bütün ihtiyaçlarını tek ekip olarak, uçtan uca üstleniyoruz.')
    steps = [
        ('Web Tasarım', 'Modern ve kullanıcı dostu web siteleri.', 'Markanızın dijital yüzünü, ziyaretçinin ilk saniyede güven duyacağı sade ve net bir arayüzle tasarlıyoruz.', ['Tüm ekranlarda mobil uyumlu', 'Arama motorlarına uygun yapı', 'Hızlı açılan sayfalar'], 'is-brief is-wire is-styled is-tasarim is-draw'),
        ('Web Geliştirme', 'Özel, güvenli ve ölçeklenebilir yazılım.', 'Hazır kalıplara sığmayan ihtiyaçlarınız için iş süreçlerinize göre şekillenen web uygulamaları geliştiriyoruz.', ['Özel web uygulamaları ve yönetim panelleri', 'API ve sistem entegrasyonları', 'Bakım ve sürekli destek'], 'is-wire'),
        ('E-Ticaret', 'Satışa hazır mağazalar.', 'Ürün vitrininden ödeme adımına kadar her ekranı, ziyaretçiyi müşteriye dönüştürmek için kurguluyoruz.', ['Güvenli ödeme altyapısı', 'Sipariş, stok ve kargo yönetimi', 'Kampanya ve indirim kurguları'], 'is-wire is-buy'),
        ('SEO', 'Aramalarda üst sıralara.', 'Sitenizi arama motorlarının anladığı, kullanıcıların kolayca bulduğu bir yapıya kavuşturuyor; sıralamanızı adım adım yükseltiyoruz.', ['Teknik SEO ve site hızı', 'Anahtar kelime ve içerik stratejisi', 'Düzenli raporlama ve takip'], 'is-wire is-seo'),
        ('Yayın ve Destek', 'Yayındayız. Ve yanınızdayız.', 'Siteyi yayına alıyor, her ekranda sorunsuz çalıştığından emin oluyor ve 7/24 teknik destekle yanınızda kalıyoruz.', ['Alan adı ve SSL kurulumu', 'Bakım ve güncellemeler', '7/24 teknik destek'], 'is-wire is-styled is-live is-resp'),
    ]
    mountains = '<svg viewBox="0 0 200 80" preserveAspectRatio="none" aria-hidden="true"><path d="M0 80 L45 30 L80 60 L120 18 L200 80 Z" fill="#38BDF8" opacity=".55"/><path d="M0 80 L60 50 L100 70 L150 40 L200 80 Z" fill="#0EA5E9" opacity=".7"/><circle cx="160" cy="16" r="8" fill="#E6EDF3" opacity=".8"/></svg>'
    prods = [('#1E3A5F', '<circle cx="20" cy="20" r="14" fill="#38BDF8" opacity=".8"/>'),
             ('#3A2A4F', '<rect x="8" y="6" width="24" height="30" rx="6" fill="#C084FC" opacity=".8"/>'),
             ('#1F3D33', '<path d="M6 34 L20 6 L34 34 Z" fill="#4ADE80" opacity=".8"/>'),
             ('#4A3520', '<rect x="6" y="12" width="28" height="18" rx="9" fill="#F2B33D" opacity=".85"/>')]
    prod_html = ''.join(f'<div class="ec-p pop" style="--i:{3+i}"><div class="ec-img" style="background:{bg}"><svg width="40" height="40" viewBox="0 0 40 40" aria-hidden="true">{shape}</svg></div><i class="ec-nm"></i><i class="ec-pr"></i><div class="ec-add">Sepete ekle</div></div>' for i, (bg, shape) in enumerate(prods))
    cart = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 4h2l2.4 11h11.2L21 8H6.2"/><circle cx="9" cy="19" r="1.4"/><circle cx="18" cy="19" r="1.4"/></svg>'
    search = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg>'
    comps = ['rakip-ajans.com', 'dijital-firma.com', 'ornek-site.com.tr', 'baska-ajans.net', 'web-hizmet.com']
    comp_html = ''.join(f'<div class="se-r" style="--c:{c}"><span class="u">{u}</span><i class="tt"></i><i class="d"></i></div>' for c, u in enumerate(comps))
    stage = f'''        <div class="wt-browser">
          <div class="wt-bar">
            <div class="wt-dots"><i></i><i></i><i></i></div>
            <div class="wt-url"><span class="draft">taslak — markaniz.com.tr</span><span class="lock">●</span><span class="live">https://markaniz.com.tr</span></div>
            <div class="wt-badge">YAYINDA</div>
          </div>
          <div class="wt-vp">
            <div class="wt-empty"><b>+</b>Boş sayfa — her şey bir fikirle başlar</div>
            <div class="sx-layer wb-page" data-on="1 5"><div class="wt-page">
              <div class="wt-nav"><i class="b wt-logo" style="--d:0"></i><span class="wt-links"><i class="b" style="--d:1"></i><i class="b" style="--d:2"></i><i class="b" style="--d:3"></i></span><i class="b wt-nbtn" style="--d:4"></i></div>
              <div class="wt-hero">
                <div class="wt-txt"><i class="b wt-t1" style="--d:5"></i><i class="b wt-t2" style="--d:6"></i><i class="b wt-p1" style="--d:7"></i><i class="b wt-p2" style="--d:8"></i><i class="b wt-cta" style="--d:9"></i></div>
                <div class="b wt-img" style="--d:10">{mountains}</div>
              </div>
              <div class="wt-cards"><i class="b wt-card" style="--d:11"></i><i class="b wt-card" style="--d:12"></i><i class="b wt-card" style="--d:13"></i></div>
            </div></div>
            <div class="sx-layer" data-on="2"><div class="wg-arch">
              <svg viewBox="0 0 560 342" aria-hidden="true">
                <path class="wg-link" style="--i:0" d="M150 92 C210 92 220 171 262 171"/>
                <path class="wg-link" style="--i:1" d="M150 252 C210 252 220 171 262 171"/>
                <path class="wg-link" style="--i:2" d="M330 171 C370 171 380 92 418 92"/>
                <path class="wg-link" style="--i:3" d="M330 171 C370 171 380 252 418 252"/>
                <path class="wg-flow" d="M150 92 C210 92 220 171 262 171"/>
                <path class="wg-flow rev" d="M150 252 C210 252 220 171 262 171"/>
                <path class="wg-flow" d="M330 171 C370 171 380 92 418 92"/>
                <path class="wg-flow rev" d="M330 171 C370 171 380 252 418 252"/>
              </svg>
              <div class="wg-node" style="--i:0;left:30px;top:70px"><span class="tag">ui</span><div>Web arayüzü<small>tarayıcı</small></div></div>
              <div class="wg-node" style="--i:1;left:30px;top:230px"><span class="tag">app</span><div>Yönetim paneli<small>sizin ekibiniz</small></div></div>
              <div class="wg-node core" style="--i:2;left:240px;top:146px"><span class="tag">{{ }}</span><div>API<small>iş kuralları</small></div></div>
              <div class="wg-node" style="--i:3;left:410px;top:70px"><span class="tag">db</span><div>Veritabanı<small>güvenli kayıt</small></div></div>
              <div class="wg-node" style="--i:4;left:380px;top:230px"><span class="tag">↔</span><div>Entegrasyonlar<small>ödeme · kargo · ERP</small></div></div>
            </div></div>
            <div class="sx-layer" data-on="3">
              <div class="ec-store">
                <div class="ec-head pop" style="--i:0"><i class="ec-logo"></i><i class="ec-search"></i><span class="ec-cart">{cart}<b class="ec-count">1</b></span></div>
                <div class="ec-pills pop" style="--i:1"><i></i><i></i><i></i><i></i></div>
                <div class="ec-grid">{prod_html}</div>
              </div>
              <div class="ec-drawer">
                <h5>Sepetiniz · 1 ürün</h5>
                <div class="ec-line"><i></i><span><b></b><em></em></span></div>
                <div class="ec-pay"><span>Ödeme</span><b>3D Secure ✓</b></div>
                <div class="ec-done"><span>Siparişi tamamla</span><span>Sipariş alındı ✓</span></div>
              </div>
            </div>
            <div class="sx-layer wb-serp" data-on="4">
              <div class="wb-q">{search}web tasarım manisa</div>
              <div class="se-list">
                {comp_html}
                <div class="se-r me"><span class="u">markaniz.com.tr</span><span class="tt">Markanız — Web Tasarım Manisa</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="wt-ov wt-brief1"><div class="chip float"><div><b>Renk paleti</b><div class="wt-swatches" style="margin-top:6px"><i style="background:#38BDF8"></i><i style="background:#0B1B33"></i><i style="background:#E6EDF3"></i><i style="background:#F2B33D"></i></div></div></div></div>
        <div class="wt-ov wt-brief2">{chip('<span class="wt-aa">Aa</span>', 'Tipografi', 'Okunaklı ve karakterli', '-1.2s')}</div>
        <div class="wt-ov wb-o-l" data-on="2">{chip(TAG('ssl'), 'Güvenli altyapı', 'Şifreli bağlantı ve yetki')}</div>
        <div class="wt-ov wb-o-br" data-on="2">{chip(TAG('↗'), 'Ölçeklenebilir', 'Büyüdükçe genişler', '-1.4s')}</div>
        <div class="wt-ov wb-o-l" data-on="3">{chip(TAG('✓'), 'Güvenli ödeme', '3D Secure ile korunur')}</div>
        <div class="wt-ov wb-rank sx-panel" data-on="4"><span class="n"></span><div><b>Sıralamanız</b><small>"web tasarım manisa"</small></div></div>
        <div class="wt-ov wb-o-br" data-on="4">{chip(TAG('↑'), 'Organik trafik', 'Yükselişte', '-1.4s')}</div>
        <div class="wt-devices"><span>Masaüstü</span><span>Tablet</span><span>Mobil</span></div>
        <div class="wt-ov wt-live1">{chip(TAG('ssl'), 'Güvenli bağlantı', 'SSL ile korunur')}</div>
        <div class="wt-ov wt-live2">{chip(DOT, '7/24 destek', 'Yayından sonra da yanınızda', '-1.5s')}</div>
        <div class="wt-cursor">{CURSOR}<span>CYF</span></div>
        <div class="ec-fly"></div>
        <div class="ec-cursor">{CURSOR}</div>'''

    blocks = ''
    for k, s in enumerate(WEB_SVCS):
        flow = ''.join(f'<span><b>0{i+1}</b>{f}</span>' for i, f in enumerate(s['flow']))
        cards = ''.join(f'''<div class="card reveal">{d}<div><h3 class="h3">{t}</h3><p style="margin-top:8px">{x}</p></div></div>''' for d, t, x in s['offers'])
        blocks += f'''
<section class="svc-block" id="{s['id']}">
  <div class="wrap split">
    <div class="reveal" data-num="">
      <div class="eyebrow">// 0{k+1} — {s['t'].upper()}</div>
      <h2 class="h2">{s['h']}</h2>
      <p class="lead" style="margin-top:20px">{s['lead']}</p>
      <div class="svc-flow" aria-label="Süreç">{flow}</div>
      <div class="btn-row"><a class="btn btn-primary" href="iletisim.html">Teklif Al</a></div>
    </div>
    <div class="svc-cards">{cards}</div>
  </div>
</section>'''
    below = f'''<section class="section-tight" style="padding-bottom:0">
  <div class="wrap"><div class="sec-head" style="margin-bottom:0"><div><div class="eyebrow">// WEB HİZMETLERİMİZ</div><h2 class="h2">Dört hizmet, tek ekip.</h2></div><p class="muted">Her biri tek başına da alınabilir; birlikte olduklarında siteniz tasarımdan sıralamaya kadar uyum içinde çalışır.</p></div></div>
</section>
{blocks}

<section class="section" style="padding-bottom:0">
  <div class="wrap">
    <div class="sec-head" style="margin-bottom:0"><div><div class="eyebrow">// TAMAMLANAN PROJELER</div><h2 class="h2">Son işlerimiz.</h2></div><a class="link-arrow" href="referanslar.html">Tüm referanslar →</a></div>
  </div>
  {project_marquee()}
</section>'''
    scrolly_page('web-cozumleri.html', meta, 'Boş sayfa', 'Kaydırın — tasarımdan yayına bir web projesini izleyin', steps, stage, below, 'web-cozumleri.css')


# ================================================================== MASAÜSTÜ
def masaustu():
    meta = dict(n='02', t='Masaüstü Uygulamalar', grid='lines', title='Masaüstü Uygulamalar — Windows, macOS ve Linux | CYF Tech',
                desc='CYF Tech masaüstü yazılım geliştirme: işinize özel, çevrimdışı da çalışan, yazıcı ve barkod okuyucu gibi cihazlarla entegre Windows, macOS ve Linux uygulamaları.',
                h1='İşinize özel masaüstü yazılımlar.',
                lead='Ofisinizde, mağazanızda ya da üretim alanınızda her gün kullanacağınız; hızlı, güvenli ve internet kesildiğinde bile çalışmaya devam eden masaüstü uygulamalar geliştiriyoruz.',
                second=('#neler', 'Neler yapıyoruz?'))
    steps = [
        ('Analiz ve Süreç Haritası', 'Önce işinizin akışını çıkarıyoruz.', 'Siparişten faturaya, depodan rapora kadar iş süreçlerinizi birlikte haritalıyor; yazılımın tam olarak neyi kolaylaştıracağını netleştiriyoruz.', ['İş akışı ve kullanıcı rolleri', 'Mevcut sistem ve cihaz envanteri', 'Önceliklendirilmiş yol haritası'], 'is-flow'),
        ('Arayüz Tasarımı', 'Her gün kullanılacak kadar sade.', 'Ekibinizin saatlerce kullanacağı ekranları; hızlı veri girişi, okunaklı tablolar ve klavye kısayollarıyla tasarlıyoruz.', ['Hızlı veri girişi', 'Okunaklı tablolar ve raporlar', 'Klavye kısayolları'], 'is-open'),
        ('Geliştirme ve Entegrasyon', 'Cihazlarınızla ve sunucunuzla konuşur.', 'Yazıcı, barkod okuyucu ve diğer cihazlarınızla çalışan; internet kesildiğinde yerel olarak kayıt tutup bağlantı gelince sunucuyla eşitlenen bir yapı kuruyoruz.', ['Yazıcı ve barkod okuyucu entegrasyonu', 'Çevrimdışı çalışma ve otomatik eşitleme', 'Mevcut sistemlerinizle entegrasyon'], 'is-open is-sync'),
        ('Test ve Kurulum', 'Windows, macOS ve Linux.', 'Uygulamayı kullandığınız işletim sistemlerinde test ediyor, tek tıkla kurulan bir kurulum paketi hazırlıyoruz.', ['Çoklu platform testleri', 'Kolay kurulum paketi', 'Veri aktarımı ve ekip eğitimi'], 'is-open is-plat'),
        ('Güncelleme ve Destek', 'Kendini güncel tutan yazılım.', 'Yeni özellikler ve iyileştirmeler otomatik güncellemelerle ekibinize ulaşır; sorun olduğunda 7/24 destekle yanınızdayız.', ['Otomatik güncellemeler', 'Uzaktan destek', '7/24 teknik destek'], 'is-open is-live'),
    ]
    rows = [('ok', 'Tamam'), ('wait', 'Bekliyor'), ('ok', 'Tamam'), ('ok', 'Tamam'), ('wait', 'Bekliyor'), ('ok', 'Tamam')]
    row_html = '<div class="ms-row h pop" style="--i:2"><i></i><i></i><i></i><i></i></div>' + ''.join(f'<div class="ms-row pop" style="--i:{3+i}"><i></i><i></i><i></i><b class="{c}">{t}</b></div>' for i, (c, t) in enumerate(rows))
    flow = ['Sipariş', 'Depo', 'Fatura', 'Rapor']
    flow_sub = ['müşteriden', 'hazırlık', 'muhasebe', 'yönetim']
    flow_html = ''.join((f'<em style="--i:{i}">→</em>' if i else '') + f'<span style="--i:{i}">{f}<small>{s}</small></span>' for i, (f, s) in enumerate(zip(flow, flow_sub)))
    devs = [('prn', 'Yazıcı', 'fiş ve etiket', -50, 90), ('bar', 'Barkod okuyucu', 'hızlı ürün girişi', -50, 300), ('srv', 'Sunucu', 'otomatik eşitleme', 510, 60), ('erp', 'Mevcut sistemler', 'muhasebe · ERP', 490, 330)]
    dev_chips = ''.join(f'<div class="chip" style="--i:{i};left:{x}px;top:{y}px"><span class="tag">{tg}</span><div><b>{t}</b><small>{s}</small></div></div>' for i, (tg, t, s, x, y) in enumerate(devs))
    dev_paths = ''.join(f'<path d="M{a} {b} L{c} {d}"/>' for a, b, c, d in [(80, 115, 140, 160), (80, 325, 140, 290), (510, 85, 470, 150), (490, 355, 460, 300)])
    stage = f'''        <div class="ms-desk">
          <div class="ms-empty">masaüstünüz — yazılımınız burada çalışacak</div>
          <div class="ms-flow">{flow_html}</div>
          <div class="ms-win">
            <div class="ms-title"><span class="ms-mac"><i></i><i></i><i></i></span><span class="nm">Stok ve Sipariş — masaüstü</span><span class="ms-winctl">─ ☐ ✕</span></div>
            <div class="ms-app">
              <div class="ms-side"><i class="pop" style="--i:0"></i><i class="pop on" style="--i:1"></i><i class="pop" style="--i:1"></i><i class="pop" style="--i:2"></i><i class="pop" style="--i:2"></i></div>
              <div class="ms-main">
                <div class="ms-tools pop" style="--i:1"><span>+ Yeni</span><span>Yazdır</span><span>Dışa aktar</span><span class="s"></span></div>
                <div class="ms-table">{row_html}</div>
              </div>
            </div>
            <div class="ms-status"><span class="on">çevrimiçi · eşitlendi</span><span class="off">çevrimdışı · yerel kayıt</span></div>
          </div>
          <div class="ms-toast">{chip(TAG('✓'), 'Güncelleme yüklendi', 'Yeni özellikler hazır')}</div>
          <div class="ms-bar"><i></i><i></i><i class="app"></i><i></i><i></i><span class="ms-clock">09:41</span></div>
        </div>
        <div class="ms-dev" data-on="3"><svg viewBox="0 0 640 520" aria-hidden="true">{dev_paths}</svg>{dev_chips}</div>
        <div class="ms-plats"><span>Windows</span><span>macOS</span><span>Linux</span></div>
        <div class="wt-ov ms-install sx-panel" data-on="4"><h4>KURULUM</h4><b>Kurulum sihirbazı</b><div class="bar"><i></i></div><small>✓ kurulum tamamlandı</small></div>
        <div class="wt-ov ms-o-l" data-on="1">{chip(DOT, 'Darboğazlar', 'Zaman kaybettiren adımlar')}</div>
        <div class="wt-ov ms-o-r" data-on="1">{chip(DOT, 'Kullanıcı rolleri', 'Kim neyi yapabilir?', '-1.4s')}</div>
        <div class="wt-ov ms-o-r" data-on="2">{chip(TAG('⌘'), 'Kısayollar', 'Fareye gerek kalmadan', '-1.4s')}</div>
        <div class="wt-ov ms-o-b" data-on="5">{chip(DOT, '7/24 destek', 'Uzaktan bağlantıyla hızlı çözüm')}</div>'''
    offers = [
        ('<div class="demo demo-mswin" aria-hidden="true"><div class="w"><div class="t"></div>' + ''.join(f'<div class="r" style="--i:{i}"></div>' for i in range(5)) + '</div></div>',
         'Özel Masaüstü Yazılımlar', 'Stok, sipariş, üretim takibi, ön muhasebe ya da randevu yönetimi; işinize birebir uyan yazılım.'),
        ('<div class="demo demo-dev" aria-hidden="true"><svg viewBox="0 0 300 200" preserveAspectRatio="none"><path d="M60 45 L150 100"/><path d="M240 45 L150 100"/><path d="M60 155 L150 100"/><path d="M240 155 L150 100"/></svg><span class="sat" style="left:8%;top:14%">yazıcı</span><span class="sat" style="right:8%;top:14%">barkod</span><span class="sat" style="left:8%;bottom:14%">kasa</span><span class="sat" style="right:8%;bottom:14%">sunucu</span><div class="hub">uygulama</div></div>',
         'Donanım ve Sistem Entegrasyonu', 'Yazıcı, barkod okuyucu ve diğer cihazlarınızla; muhasebe ve ERP sistemlerinizle birlikte çalışır.'),
        ('<div class="demo demo-sync" aria-hidden="true"><div class="box">yerel<br>kayıt</div><div class="lane"><i></i><i></i></div><div class="box">sunucu</div></div>',
         'Çevrimdışı Çalışma ve Eşitleme', 'İnternet kesilse de iş durmaz; bağlantı geldiğinde veriler otomatik olarak eşitlenir.'),
    ]
    below = '<div id="neler"></div>' + offers_section('Masaüstünde neler yapıyoruz?', 'Windows, macOS ve Linux için; işletmenizin her gün kullandığı araçları geliştiriyoruz.', offers)
    scrolly_page('masaustu-uygulamalar.html', meta, 'Boş masaüstü', 'Kaydırın — bir masaüstü yazılımın kuruluşunu izleyin', steps, stage, below, 'masaustu-uygulamalar.css')


# ================================================================== MOBİL
def mobil():
    meta = dict(n='03', t='Mobil Uygulamalar', grid='dots', title='Mobil Uygulamalar — iOS ve Android | CYF Tech',
                desc='CYF Tech mobil uygulama geliştirme: iOS ve Android için hızlı, kullanıcı dostu ve güvenli uygulamalar; tasarımdan mağazada yayına uçtan uca.',
                h1='İşletmeniz, müşterinizin cebinde.',
                lead='Müşterilerinize ve ekibinize her an ulaşan; hızlı, kullanıcı dostu ve güvenli iOS ve Android uygulamalarını tasarlıyor, geliştiriyor ve mağazalarda yayınlıyoruz.',
                second=('#neler', 'Neler yapıyoruz?'))
    steps = [
        ('Fikir ve Planlama', 'Önce kullanıcının yolunu çiziyoruz.', 'Uygulamanın kimin için, hangi işi çözeceğini netleştiriyor; ekranlar arasındaki kullanıcı akışını birlikte planlıyoruz.', ['Hedef kullanıcı ve ihtiyaç analizi', 'Ekran akışı ve özellik listesi', 'Yol haritası ve sürüm planı'], ''),
        ('Arayüz Tasarımı', 'Parmak ucunda kolaylık.', 'Tek elle rahat kullanılan, okunaklı ve markanızı yansıtan mobil arayüzler tasarlıyoruz.', ['Mobil öncelikli UI/UX', 'Markanıza özel görsel dil', 'Tıklanabilir prototip'], ''),
        ('Geliştirme', 'Tek kod, iki platform.', 'iOS ve Android için uygulamanızı tek kod tabanıyla geliştiriyor; sunucu, ödeme ve diğer sistemlerinizle entegre ediyoruz.', ['iOS ve Android birlikte', 'API ve sistem entegrasyonu', 'Güvenli oturum ve veri'], 'is-dual'),
        ('Test', 'Gerçek cihazlarda, gerçek senaryolar.', 'Farklı ekran boyutlarında dokunma, kaydırma ve bildirim senaryolarını tek tek test ediyoruz.', ['Farklı cihaz ve ekran testleri', 'Anlık bildirim testleri', 'Performans ve pil kullanımı'], 'is-test'),
        ('Mağazada Yayın ve Destek', 'Mağazada, cebinizde.', 'Uygulamanızı App Store ve Google Play’de yayına alıyor; güncellemeler ve teknik destekle yanınızda kalıyoruz.', ['Mağaza başvurusu ve yayın', 'Düzenli güncellemeler', '7/24 teknik destek'], 'is-live'),
    ]

    def ui():
        cards = ''.join(f'<div class="mb-card" style="background:{bg}"><i></i><b></b></div>' for bg in ['linear-gradient(135deg,#0EA5E9,#1E3A8A)', 'linear-gradient(135deg,#8B5CF6,#312E81)', 'linear-gradient(135deg,#10B981,#064E3B)'])
        items = ''.join(f'<div class="mb-item pop" style="--i:{4+i}"><em style="background:{c}"></em><span><i></i><b></b></span><span class="mb-ripple"></span></div>' for i, c in enumerate(['#123152', '#2B2250', '#12362C']))
        return f'''<div class="mb-ui">
              <div class="mb-hi pop" style="--i:0"><span><i></i><b></b></span><em></em></div>
              <div class="mb-car pop" style="--i:1"><div class="mb-car-track">{cards}</div></div>
              <div class="mb-dots pop" style="--i:2"><i></i><i></i><i></i></div>
              <div class="mb-list">{items}</div>
              <div class="mb-tabs pop" style="--i:7"><i></i><i></i><i></i><i></i></div>
            </div>'''

    home_icons = ''.join('<i class="me"></i>' if i == 9 else '<i></i>' for i in range(16))
    flow = [('Karşılama', 30, 40), ('Giriş', 30, 290), ('Ana sayfa', 520, 40), ('Profil', 520, 290)]
    flow_html = ''.join(f'<div class="scr" style="--i:{i};left:{x}px;top:{y}px"><i class="big"></i><i></i><i style="width:60%"></i><i></i><b>{t}</b></div>' for i, (t, x, y) in enumerate(flow))
    flow_paths = '<path d="M116 115 C160 115 170 130 205 140"/><path d="M116 365 C160 365 170 350 205 340"/><path d="M435 140 C470 130 480 115 520 115"/><path d="M435 340 C470 350 480 365 520 365"/>'
    stage = f'''        <div class="mb-flow" data-on="1"><svg viewBox="0 0 640 520" aria-hidden="true">{flow_paths}</svg>{flow_html}</div>
        <div class="mb-phone b"><div class="mb-screen"><div class="mb-notch"></div><div class="sx-layer show">{ui()}</div></div></div>
        <div class="mb-phone a"><div class="mb-screen"><div class="mb-notch"></div>
          <div class="sx-layer mb-idea" data-on="0"><i>+</i>Fikriniz burada başlıyor</div>
          <div class="sx-layer" data-on="1"><div class="mb-wire"><i style="height:24px;width:60%"></i><i style="height:110px"></i><i style="height:40px"></i><i style="height:40px"></i><i style="height:40px"></i></div></div>
          <div class="sx-layer" data-on="2 3 4">{ui()}<div class="mb-push"><em></em><div><b>Siparişiniz kargoya verildi</b><small>Takip etmek için dokunun</small></div></div></div>
          <div class="sx-layer" data-on="5"><div class="mb-home">{home_icons}</div></div>
        </div></div>
        <div class="mb-os"><b>iOS</b> &nbsp;·&nbsp; tek kod tabanı &nbsp;·&nbsp; <b>Android</b></div>
        <div class="wt-ov mb-o-l" data-on="2">{chip(DOT, 'Tek elle kullanım', 'Başparmak dostu yerleşim')}</div>
        <div class="wt-ov mb-o-r" data-on="2">{chip('<span class="wt-aa">Aa</span>', 'Markanıza özel', 'Renk, ikon, tipografi', '-1.4s')}</div>
        <div class="wt-ov mb-o-c" data-on="3">{chip(TAG('{ }'), 'Tek kod tabanı', 'Daha hızlı, daha ekonomik')}</div>
        <div class="wt-ov mb-o-l" data-on="4">{chip(TAG('rwd'), 'Farklı ekranlar', 'Küçükten büyüğe tüm cihazlar')}</div>
        <div class="wt-ov mb-o-r" data-on="4">{chip(TAG('!'), 'Anlık bildirim', 'Doğru anda doğru mesaj', '-1.4s')}</div>
        <div class="wt-ov mb-store sx-panel" data-on="5"><h4>UYGULAMA MAĞAZALARI</h4><div class="row"><span class="ic"></span><div><b>Uygulamanız</b><small>App Store · Google Play</small></div></div><div class="mb-get"><span class="y">Yükle</span><span class="p"><i></i><em>İndiriliyor…</em></span><span class="o">Aç</span></div></div>
        <div class="wt-ov mb-o-r2" data-on="5">{chip(DOT, 'Güncellemeler', 'Düzenli bakım ve destek', '-1.4s')}</div>'''
    offers = [
        ('<div class="demo demo-twin" aria-hidden="true"><i></i><span>iOS · Android</span><i></i></div>',
         'iOS ve Android Uygulamalar', 'Tek kod tabanıyla iki platformda birden; hızlı, akıcı ve markanıza özel uygulamalar.'),
        ('<div class="demo demo-push" aria-hidden="true">' + ''.join(f'<div style="--i:{i}"><em></em>{t}</div>' for i, t in enumerate(['Yeni kampanya başladı', 'Randevunuz yarın 10:00’da', 'Siparişiniz yolda'])) + '</div>',
         'Bildirim ve Etkileşim', 'Anlık bildirimler, kampanyalar ve hatırlatmalarla kullanıcılarınızla bağınızı güçlü tutun.'),
        ('<div class="demo demo-ver" aria-hidden="true">' + ''.join(f'<div style="--i:{i}"><span>sürüm {v}</span><b>{t}</b></div>' for i, (v, t) in enumerate([('1.0', 'yayında'), ('1.1', 'yeni özellik'), ('1.2', 'iyileştirme'), ('1.3', 'güncelleme')])) + '</div>',
         'Mağaza Yayını ve Bakım', 'Mağaza başvurusundan düzenli güncellemelere kadar uygulamanızın tüm yaşam döngüsünü yönetiyoruz.'),
    ]
    below = '<div id="neler"></div>' + offers_section('Mobilde neler yapıyoruz?', 'Müşterilerinize ve ekibinize özel; tasarımdan mağazaya uçtan uca mobil uygulamalar.', offers)
    scrolly_page('mobil-uygulamalar.html', meta, 'Fikir', 'Kaydırın — bir uygulamanın cebe yolculuğunu izleyin', steps, stage, below, 'mobil-uygulamalar.css')


# ================================================================== old service URLs → new sections
def redirect(old, target, title):
    html = f'''<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>{title} — CYF Tech</title>
<meta name="robots" content="noindex">
<link rel="canonical" href="https://cyftech.com.tr/{target.split('#')[0]}">
<meta http-equiv="refresh" content="0; url={target}">
<script>location.replace('{target}');</script>
</head>
<body style="background:#040814;color:#E6EDF3;font-family:system-ui,sans-serif">
<p>{title} sayfası taşındı: <a href="{target}" style="color:#38BDF8">{target}</a></p>
</body>
</html>
'''
    with open(os.path.join(OUT, old), 'w', encoding='utf-8', newline='\n') as f:
        f.write(html)


web()
masaustu()
mobil()
for old, anchor, title in [('web-tasarim.html', 'web-tasarim', 'Web Tasarım'), ('web-gelistirme.html', 'web-gelistirme', 'Web Geliştirme'),
                           ('seo-hizmetleri.html', 'seo', 'SEO Hizmetleri'), ('e-ticaret-siteleri.html', 'e-ticaret', 'E-Ticaret Siteleri')]:
    redirect(old, f'web-cozumleri.html#{anchor}', title)
