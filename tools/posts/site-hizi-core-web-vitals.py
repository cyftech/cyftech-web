POST = dict(
    slug='site-hizi-core-web-vitals',
    kat='SEO',
    keyword='core web vitals',
    title='Core Web Vitals ve Site Hızı: LCP, INP, CLS Rehberi (2026)',
    h1='Core Web Vitals ve site hızı: LCP, INP ve CLS rehberi.',
    crumb='SEO',
    sure='10 dk',
    ozet='LCP, INP ve CLS ne anlama gelir, iyi eşikler nedir, nasıl ölçülür ve nasıl iyileştirilir? Site hızını artırmak için Core Web Vitals’ı sade bir dille anlatıyoruz.',
    desc='Core Web Vitals nedir? LCP, INP ve CLS eşikleri, PageSpeed Insights ve Search Console ile ölçüm ve site hızını artırmak için uygulanabilir adımlar.',
    lead='Ziyaretçi sitenize geldi, ama sayfa açılmadı, butona bastı ama tepki gelmedi, okumaya başladı ve metin aşağı kaydı. Bu üç küçük hayal kırıklığının her birinin Google’da bir adı var: <b>Core Web Vitals</b>. Site hızını ölçmenin ve iyileştirmenin en net yolu da bu üç metrikten geçiyor.',
    intro='''<p>Bu yazıda Core Web Vitals’ın ne olduğunu, LCP, INP ve CLS metriklerinin güncel “iyi” eşiklerini, bu değerleri hangi araçlarla ve nasıl doğru ölçeceğinizi ve her biri için en çok fark yaratan iyileştirmeleri anlatıyoruz.</p>
      <p>Teknik ekibiniz olmasa bile yazının sonunda sitenizin durumunu kendiniz kontrol edebilecek ve ajansınıza ya da yazılımcınıza doğru soruları sorabileceksiniz.</p>''',
    sections=[
        ('neden', 'Neden önemli?', 'Site hızı neden hem müşteri hem SEO meselesi?', '''
      <p>Yavaş bir site önce kullanıcıyı kaybettirir. Mobil bağlantıda birkaç saniye boş ekrana bakan ziyaretçi, aramaya geri dönüp bir sonraki sonuca tıklar. Bu, reklamla getirdiğiniz trafikte doğrudan para kaybı demektir.</p>
      <p>Google tarafında ise Core Web Vitals, “sayfa deneyimi” kapsamında sıralama sistemlerinin dikkate aldığı sinyaller arasında yer alıyor. Google Search Central bunu açıkça ifade ediyor; ancak aynı belgede, içeriğin alaka düzeyinin hâlâ çok daha belirleyici olduğu da vurgulanıyor. Yani hızlı ama içeriği zayıf bir sayfa üst sıralara çıkmaz; benzer kalitede iki sayfa arasında ise deneyim fark yaratabilir.</p>
      <blockquote><div class="bi-q">{quote}</div>Hız tek başına sizi birinci yapmaz, ama yavaşlık sizi kolayca geride bırakır.</blockquote>'''),
        ('metrikler', 'LCP, INP ve CLS', 'Core Web Vitals metrikleri ve 2026 eşik değerleri', '''
      <p>Core Web Vitals üç metrikten oluşur. Her biri kullanıcı deneyiminin farklı bir yönünü ölçer: yükleme, etkileşim ve görsel kararlılık.</p>
      <table>
        <thead><tr><th>Metrik</th><th>Neyi ölçer?</th><th>İyi</th><th>İyileştirilmeli</th><th>Zayıf</th></tr></thead>
        <tbody>
          <tr><td><b>LCP</b> (Largest Contentful Paint)</td><td>Sayfadaki en büyük görsel ya da metin bloğunun ekranda belirme süresi</td><td>≤ 2,5 sn</td><td>2,5–4 sn</td><td>&gt; 4 sn</td></tr>
          <tr><td><b>INP</b> (Interaction to Next Paint)</td><td>Tıklama, dokunma ve tuş vuruşlarına sayfanın görsel tepki verme süresi</td><td>≤ 200 ms</td><td>200–500 ms</td><td>&gt; 500 ms</td></tr>
          <tr><td><b>CLS</b> (Cumulative Layout Shift)</td><td>Sayfa açılırken ve kullanılırken öğelerin beklenmedik kayması</td><td>≤ 0,1</td><td>0,1–0,25</td><td>&gt; 0,25</td></tr>
        </tbody>
      </table>
      <p>Önemli bir ayrıntı: Google bu değerleri <b>gerçek kullanıcıların 75. yüzdelik dilimine</b> göre değerlendirir. Yani ziyaretlerin en az yüzde 75’i “iyi” eşiğin içinde kalmalıdır. Bir sayfanın Core Web Vitals’ı geçmesi için üç metriğin de iyi olması gerekir; biri zayıfsa ortalama alınmaz.</p>
      <div class="bi-note">{tip}<div><b>FID’yi hâlâ görüyorsanız:</b> INP, Mart 2024’te etkileşim metriği olarak FID’nin (First Input Delay) yerini aldı. FID yalnızca ilk etkileşimin gecikmesine bakarken INP sayfadaki tüm etkileşimleri hesaba katar, bu yüzden daha zorlayıcıdır. Eski raporlarda FID’ye göre “iyi” görünen siteler INP’de takılabiliyor.</div></div>'''),
        ('olcum', 'Nasıl ölçülür?', 'Core Web Vitals nasıl ölçülür: saha verisi ve laboratuvar verisi', '''
      <p>Ölçümde en sık yapılan hata, tek bir PageSpeed puanına bakıp karar vermektir. İki tür veri vardır ve ikisi farklı şey söyler:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Saha verisi (field data):</b> Chrome kullanıcılarının gerçek deneyimlerinden toplanan Chrome UX Report (CrUX) verisidir. Google’ın sıralamada dikkate aldığı veri budur ve son 28 günün ortalamasını yansıtır.</span></li>
        <li>{ic}<span><b>Laboratuvar verisi (lab data):</b> Lighthouse’un tek bir simüle cihaz ve bağlantıda yaptığı testtir. Sorunları teşhis etmek için idealdir, ancak gerçek kullanıcı deneyimini birebir göstermez. INP’yi doğrudan ölçemez; yerine Total Blocking Time (TBT) değerine bakılır.</span></li>
      </ul>
      <h3>Hangi aracı ne için kullanmalı?</h3>
      <ul class="bi-list">
        <li>{ic}<span><b>PageSpeed Insights:</b> Tek bir adres için hem saha hem laboratuvar verisini birlikte gösterir. Üstteki “gerçek kullanıcı deneyimi” bölümünü esas alın.</span></li>
        <li>{ic}<span><b>Search Console — Core Web Vitals raporu:</b> Tüm sitenizi benzer sayfa gruplarına ayırarak mobil ve masaüstü için hangi URL’lerin zayıf olduğunu gösterir.</span></li>
        <li>{ic}<span><b>Chrome DevTools (Performance paneli):</b> Yavaş etkileşimlerin ve kaymaların nedenini satır satır bulmak için geliştiricilerin aracıdır.</span></li>
        <li>{ic}<span><b>web-vitals kütüphanesi:</b> Kendi analitik aracınıza gerçek kullanıcı ölçümü göndermek için Google’ın küçük JavaScript kütüphanesidir.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Trafiği az olan yeni sitelerde CrUX verisi bulunmayabilir. Bu durumda laboratuvar verisiyle ilerleyin, ama mutlaka orta segment bir Android telefonda ve mobil bağlantıda da elle test edin.</div></div>'''),
        ('lcp', 'LCP iyileştirme', 'LCP nasıl iyileştirilir: ana içeriği daha hızlı gösterin', '''
      <p>Çoğu kurumsal sitede LCP öğesi, sayfanın üst kısmındaki büyük görsel (hero) ya da ana başlıktır. LCP süresi dört parçadan oluşur: sunucunun ilk yanıtı (TTFB), kaynağın keşfedilmesi, kaynağın indirilmesi ve ekrana çizilmesi. İyileştirme de bu sırayla yapılır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Sunucu yanıtını hızlandırın:</b> web.dev, TTFB için 0,8 saniye ve altını iyi kabul ediyor. Sayfa önbelleği, kaliteli barındırma ve CDN bu süreyi belirgin şekilde düşürür.</span></li>
        <li>{ic}<span><b>LCP görselini erken keşfettirin:</b> Görseli CSS arka planı veya JavaScript ile değil, HTML içinde doğrudan verin; fetchpriority="high" ile önceliklendirin.</span></li>
        <li>{ic}<span><b>Üst kısımdaki görsele lazy loading uygulamayın:</b> Tembel yükleme ekranın altındaki görseller içindir; ana görselde LCP’yi geciktirir.</span></li>
        <li>{ic}<span><b>Görseli küçültün:</b> WebP veya AVIF biçimi, doğru boyut ve srcset ile mobilde gereksiz büyük dosya indirilmesini önleyin.</span></li>
        <li>{ic}<span><b>Render’ı engelleyen kaynakları azaltın:</b> Kritik CSS’i öne alın, kullanılmayan CSS ve senkron yüklenen betikleri temizleyin, yazı tiplerinde font-display: swap kullanın.</span></li>
      </ul>
      <p>Barındırma tarafındaki kararların hıza etkisini <a href="alan-adi-ve-hosting-secimi.html">alan adı ve hosting seçimi</a> yazımızda ayrıca ele aldık.</p>'''),
        ('inp', 'INP iyileştirme', 'INP nasıl iyileştirilir: tıklamalara anında tepki verin', '''
      <p>INP sorunu genellikle tarayıcının ana iş parçacığının (main thread) JavaScript ile meşgul olmasından kaynaklanır. Kullanıcı menüye dokunur, ama tarayıcı o anda bir analitik betiğini ya da büyük bir slider kodunu çalıştırdığı için tepki gecikir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Uzun görevleri bölün:</b> 50 ms’yi aşan JavaScript görevlerini parçalara ayırın; kullanıcıya görsel geri bildirimi önce verin, ağır işi sonra yapın.</span></li>
        <li>{ic}<span><b>Üçüncü taraf betikleri gözden geçirin:</b> Sohbet balonları, ısı haritası araçları, birden fazla reklam ve analitik etiketi INP’nin en yaygın suçlularıdır. Gerçekten kullandıklarınızı bırakın, diğerlerini geciktirerek yükleyin.</span></li>
        <li>{ic}<span><b>DOM’u küçük tutun:</b> Binlerce öğe içeren sayfalarda her etkileşim sonrası yeniden çizim pahalılaşır.</span></li>
        <li>{ic}<span><b>Eklenti ve tema yükünü azaltın:</b> Hazır temaların her sayfada yüklediği kullanılmayan kodlar, özellikle düşük donanımlı telefonlarda etkileşimi yavaşlatır.</span></li>
      </ul>
      <p>Bu noktada altyapı seçimi belirleyici olur. Eklentiyle büyüyen bir site ile ihtiyaca göre yazılmış hafif bir site arasındaki farkı <a href="wordpress-mi-ozel-yazilim-mi.html">WordPress mi özel yazılım mı</a> yazımızda karşılaştırdık.</p>'''),
        ('cls', 'CLS iyileştirme', 'CLS nasıl iyileştirilir: sayfanın kaymasını önleyin', '''
      <p>Okuduğunuz satırın aniden aşağı kayması ya da tam tıklayacakken butonun yer değiştirmesi, CLS’nin ölçtüğü şeydir. Neyse ki çözümleri genellikle basittir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Görsellere ve videolara boyut verin:</b> width ve height öznitelikleri ya da CSS aspect-ratio ile tarayıcı yeri önceden ayırır.</span></li>
        <li>{ic}<span><b>Reklam, banner ve gömülü içeriklere sabit alan ayırın:</b> Sonradan yüklenen çerez bildirimi veya kampanya şeridi içeriği itmesin; üstte kaplama (overlay) olarak açılsın.</span></li>
        <li>{ic}<span><b>Yazı tipi değişimini yumuşatın:</b> Web fontunu önceden yükleyin ve yedek fontun ölçülerini ona yakın tutun.</span></li>
        <li>{ic}<span><b>Animasyonlarda transform kullanın:</b> top, left, height gibi düzeni etkileyen özellikler yerine transform ve opacity ile animasyon yapın.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Hızlı kontrol:</b> Sitenizi telefonda yavaş bağlantıyla açın ve ilk üç saniyede ekrana dikkatle bakın. Gözünüzle gördüğünüz her zıplama CLS puanınıza yansır.</div></div>'''),
        ('platform', 'Site türüne göre sorunlar', 'Site türüne göre en sık görülen hız sorunları', '''
      <p>Her site aynı nedenle yavaşlamaz. Projelerde karşılaştığımız tabloyu site türüne göre özetlersek:</p>
      <table>
        <thead><tr><th>Site türü</th><th>En sık sorun</th><th>İlk bakılacak yer</th></tr></thead>
        <tbody>
          <tr><td>Hazır temalı kurumsal site</td><td>Ağır tema, çok sayıda eklenti, büyük slider görselleri</td><td>Kullanılmayan eklentiler, ana görselin boyutu, sayfa önbelleği</td></tr>
          <tr><td>E-ticaret sitesi</td><td>Ürün görselleri, filtreler, çok sayıda takip ve pazarlama etiketi</td><td>Kategori sayfası LCP’si, üçüncü taraf betikler, sepet etkileşimlerinin INP’si</td></tr>
          <tr><td>Tek sayfa uygulaması (React, Vue vb.)</td><td>Büyük JavaScript paketleri, içeriğin tarayıcıda geç oluşması</td><td>Sunucu tarafı render veya ön render, kod bölme</td></tr>
          <tr><td>Haber ve blog sitesi</td><td>Reklam alanlarının sonradan yüklenip içeriği kaydırması</td><td>Reklam yuvaları için ayrılmış sabit alanlar, CLS</td></tr>
        </tbody>
      </table>
      <p>Bu tablo bir başlangıç noktasıdır; kesin teşhis her zaman ölçümle yapılır. Yine de sorunun büyük ihtimalle nerede olduğunu bilmek, geliştiriciyle konuşurken zaman kazandırır. Örneğin bir e-ticaret sitesinde ürün detay sayfası hızlı olduğu halde kategori sayfası yavaşsa, sorun çoğu zaman listelenen onlarca görselin aynı anda ve tam boyutta indirilmesidir.</p>
      <p>Mobil uygulama gibi hissettiren, hızlı ve hafif bir deneyim hedefliyorsanız, bunu tasarım aşamasında konuşmak gerekir. Sayfaya sonradan eklenen her “küçük” özellik, hız bütçesinden pay alır.</p>'''),
        ('plan', 'İyileştirme planı', 'Site hızını artırmak için adım adım plan', '''
      <p>Her şeyi aynı anda düzeltmeye çalışmak yerine, etkisi en büyük olandan başlayın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım —</b> Search Console’da Core Web Vitals raporunu açın, mobilde “zayıf” olan sayfa gruplarını listeleyin.</span></li>
        <li>{ic}<span><b>2. Adım —</b> Her gruptan örnek bir adresi PageSpeed Insights’ta test edin, hangi metriğin takıldığını not edin.</span></li>
        <li>{ic}<span><b>3. Adım —</b> Önce şablon düzeyindeki sorunları çözün: aynı şablonu kullanan yüzlerce sayfa tek düzeltmeyle iyileşir.</span></li>
        <li>{ic}<span><b>4. Adım —</b> Görseller, önbellek ve CDN gibi hızlı kazanımları uygulayın; ardından JavaScript ve üçüncü taraf betiklere geçin.</span></li>
        <li>{ic}<span><b>5. Adım —</b> Search Console’da “düzeltmeyi doğrula” deyin ve saha verisinin 28 gün içinde güncellenmesini bekleyin.</span></li>
      </ul>
      <p>Hız, bir kerelik bir proje değil, sürekli korunması gereken bir bütçedir. Yeni bir eklenti, büyük bir görsel ya da ek bir takip kodu kazanımları birkaç hafta içinde geri alabilir. Bu yüzden her yeni özellik eklenmeden önce “bu, sayfayı ne kadar yavaşlatır?” sorusunu sorun. Hızın arama görünürlüğündeki yerini daha geniş çerçevede görmek isterseniz <a href="teknik-seo-kontrol-listesi.html">teknik SEO kontrol listemize</a> de göz atabilirsiniz.</p>'''),
    ],
    check_title='// HIZ KONTROL LİSTESİ',
    checks=[
        'Mobilde LCP 2,5 saniyenin altında mı?',
        'INP 200 ms’nin altında, gereksiz üçüncü taraf betikler temizlendi mi?',
        'CLS 0,1’in altında, tüm görsellerde boyut tanımlı mı?',
        'Ana görsel lazy loading olmadan ve öncelikli yükleniyor mu?',
        'Görseller WebP/AVIF ve doğru boyutta mı?',
        'Sayfa önbelleği, sıkıştırma ve CDN etkin mi?',
        'Search Console Core Web Vitals raporu düzenli izleniyor mu?',
    ],
    faq=[
        ('Core Web Vitals nedir?', 'Core Web Vitals, Google’ın gerçek kullanıcı deneyimini ölçmek için belirlediği üç metriktir: yükleme hızı için LCP, etkileşime tepki için INP ve görsel kararlılık için CLS. Bu metrikler Google’ın sayfa deneyimi değerlendirmesinde kullanılır.'),
        ('İyi bir LCP değeri kaç saniyedir?', 'Google’a göre LCP 2,5 saniye veya altındaysa iyi, 4 saniyenin üzerindeyse zayıf kabul edilir. Değerlendirme, gerçek kullanıcı ziyaretlerinin 75. yüzdelik dilimine göre yapılır.'),
        ('INP neden FID’nin yerini aldı?', 'FID yalnızca sayfadaki ilk etkileşimin gecikmesini ölçüyordu ve çoğu site bu testi kolayca geçiyordu. INP ise sayfadaki tüm etkileşimleri izleyip en yavaşlarından birini raporlar; bu yüzden kullanıcının gerçek deneyimini daha iyi yansıtır. Değişiklik Mart 2024’te yürürlüğe girdi.'),
        ('PageSpeed puanı 100 olmazsa SEO’m kötü mü olur?', 'Hayır. Lighthouse puanı bir laboratuvar testidir ve doğrudan sıralama sinyali değildir. Önemli olan, gerçek kullanıcı verisinde LCP, INP ve CLS değerlerinin iyi eşikler içinde olmasıdır. 85 puanlı ama saha verisi iyi olan bir sayfa, 100 puanlı bir test sonucundan daha anlamlıdır.'),
        ('Core Web Vitals düzeltmeleri ne zaman yansır?', 'Saha verisi son 28 günün kullanıcı deneyimine dayandığı için düzeltmelerin raporlara tam yansıması yaklaşık dört hafta sürer. Laboratuvar testlerinde ise iyileşmeyi hemen görebilirsiniz.'),
    ],
    outro='''<p>Core Web Vitals, sitenizin ziyaretçiye nasıl hissettirdiğini üç sayıya indirger: ana içerik 2,5 saniyede görünsün, her tıklama 200 milisaniyede tepki bulsun, sayfa 0,1’in altında kaysın. Bu hedefler çoğu zaman pahalı bir yeniden yapım değil, doğru teşhis ve disiplinli küçük düzeltmeler gerektirir.</p>
      <p>CYF Tech olarak geliştirdiğimiz <a href="web-cozumleri.html">web sitelerini ve web yazılımlarını</a> en baştan hız bütçesiyle tasarlıyor, mevcut sitelerde de Core Web Vitals analizi ve iyileştirmesi yapıyoruz. Sitenizin neden yavaş olduğunu birlikte bulmak isterseniz <a href="iletisim.html">bize ulaşın</a>.</p>''',
    sources=[
        ('web.dev — Web Vitals', 'https://web.dev/articles/vitals'),
        ('web.dev — How the Core Web Vitals metrics thresholds were defined', 'https://web.dev/articles/defining-core-web-vitals-thresholds'),
        ('web.dev — Largest Contentful Paint (LCP)', 'https://web.dev/articles/lcp'),
        ('web.dev — Interaction to Next Paint (INP)', 'https://web.dev/articles/inp'),
        ('web.dev — Cumulative Layout Shift (CLS)', 'https://web.dev/articles/cls'),
        ('web.dev — Time to First Byte (TTFB)', 'https://web.dev/articles/ttfb'),
        ('Google Search Central — Understanding Core Web Vitals and Google search results', 'https://developers.google.com/search/docs/appearance/core-web-vitals'),
        ('Google Search Central — Understanding page experience', 'https://developers.google.com/search/docs/appearance/page-experience'),
    ],
)
