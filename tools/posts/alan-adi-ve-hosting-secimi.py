POST = dict(
    slug='alan-adi-ve-hosting-secimi',
    kat='Web Tasarım',
    keyword='alan adı ve hosting seçimi',
    title='Alan Adı ve Hosting Seçimi: .com.tr, TRABİS ve Sunucu Rehberi',
    h1='Alan adı ve hosting seçimi: .com.tr, TRABİS ve sunucu rehberi.',
    crumb='WEB TASARIM',
    sure='9 dk',
    ozet='.com mu .com.tr mi, TRABİS nedir, alan adı kimin adına kayıtlı olmalı, hangi hosting türü size uygun? Web sitenizin temelini doğru atmak için pratik rehber.',
    desc='Alan adı ve hosting seçimi rehberi: .com.tr ve TRABİS süreci, alan adı mülkiyeti, paylaşımlı hosting, VPS ve bulut karşılaştırması, doğru sunucu kriterleri.',
    lead='Bir web sitesinin adresi ve evi, çoğu firmanın en az düşündüğü ama sorun çıktığında en çok canını yakan iki kalemdir. Yanlış <b>alan adı ve hosting seçimi</b>; yavaş açılan sayfalara, e-postaların gitmemesine, hatta yıllardır kullandığınız adresin başkasının eline geçmesine yol açabilir.',
    intro='''<p>Bu rehberde alan adı ile hosting arasındaki farkı, iyi bir alan adının nasıl seçildiğini, .com.tr alan adlarının TRABİS üzerinden nasıl alındığını, alan adınızı neden kendi adınıza kaydettirmeniz gerektiğini ve paylaşımlı hosting, VPS, bulut gibi seçenekler arasında nasıl karar vereceğinizi anlatıyoruz.</p>
      <p>Kurumsal web sitesi projelerine başlarken müşterilerimize ilk sorduğumuz sorulardan biri “alan adınız kimin adına kayıtlı?” sorusudur. Cevabın ne kadar sık “bilmiyoruz” olduğunu görünce bu yazının gerekli olduğuna karar verdik.</p>''',
    sections=[
        ('fark', 'Alan adı mı hosting mi?', 'Alan adı ve hosting arasındaki fark', '''
      <p>En basit benzetmeyle alan adı sitenizin <b>adresi</b>, hosting ise sitenizin dosyalarının durduğu <b>bina</b>dır. Ziyaretçi tarayıcıya firmaniz.com.tr yazdığında DNS kayıtları bu adresin hangi sunucuya yönlendiğini söyler ve site o sunucudan yüklenir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Alan adı (domain):</b> Yıllık olarak kiralanır, bir kayıt kuruluşu (registrar) üzerinden alınır. Sitenin yanı sıra kurumsal e-posta adreslerinizin de temelidir.</span></li>
        <li>{ic}<span><b>Hosting (barındırma):</b> Sitenin dosyalarının, veritabanının ve çoğu zaman e-postaların çalıştığı sunucu hizmetidir. Aylık veya yıllık ödenir.</span></li>
        <li>{ic}<span><b>DNS:</b> Alan adını hosting’e, e-posta sunucusuna ve diğer hizmetlere bağlayan kayıtlar bütünüdür. Alan adını ve hosting’i farklı firmalardan almak tamamen mümkündür.</span></li>
      </ul>
      <p>Alan adı ile hosting’in aynı firmada olması kolaylık sağlar, ama zorunlu değildir. Hatta bazı durumlarda ayrı tutmak, hosting firmasını değiştirmek istediğinizde işinizi kolaylaştırır.</p>'''),
        ('secim', 'İyi alan adı seçmek', 'İyi bir alan adı nasıl seçilir?', '''
      <p>Alan adı yıllarca kartvizitinizde, araçlarınızda, faturalarınızda ve e-posta imzanızda yer alacak. Bu yüzden şu ilkeleri göz önünde bulundurun:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kısa ve söylenebilir olsun:</b> Telefonda harf harf kodlamak zorunda kalmadığınız bir ad seçin.</span></li>
        <li>{ic}<span><b>Türkçe karakter kullanmayın:</b> ç, ğ, ı, ö, ş, ü içeren alan adları teknik olarak mümkün olsa da e-posta ve paylaşımda sorun çıkarır. “ı” ve “i” karışıklığına özellikle dikkat edin.</span></li>
        <li>{ic}<span><b>Tire ve rakamdan kaçının:</b> Sözlü aktarımda kaybolur, akılda kalmaz.</span></li>
        <li>{ic}<span><b>Marka adınızı esas alın:</b> Anahtar kelime doldurulmuş alan adları (ör. en-ucuz-mobilya-istanbul) artık SEO avantajı sağlamaz, güven de vermez.</span></li>
        <li>{ic}<span><b>Yakın varyasyonları da düşünün:</b> Hem .com.tr hem .com uzantısını almak, markanızı taklitlere ve yanlış yazımlara karşı korur.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Marka kontrolü:</b> Alan adını almadan önce Türk Patent ve Marka Kurumu’nun sorgulama ekranından benzer bir tescilli marka olup olmadığına bakın. Başkasının markasını içeren bir alan adı, ileride uyuşmazlık konusu olabilir.</div></div>'''),
        ('comtr', '.com.tr ve TRABİS', '.com mu .com.tr mi? TRABİS ile .tr alan adı alma süreci', '''
      <p>“.tr” uzantılı alan adlarının yönetimi, Bilgi Teknolojileri ve İletişim Kurumu (BTK) bünyesindeki <b>TRABİS</b> (.tr Ağ Bilgi Sistemi) ile yürütülür. 14 Eylül 2022’de faaliyete geçen TRABİS ile birlikte en önemli değişiklik şu oldu: <b>.com.tr, .net.tr ve .org.tr</b> gibi uzantılar artık belge gerekmeden, “ilk gelen alır” esasıyla tahsis ediliyor. Eskiden marka tescil belgesi ya da ticaret sicili istenen .com.tr, bugün .com kadar kolay alınabiliyor.</p>
      <p>Başvurular doğrudan TRABİS’e değil, BTK tarafından yetkilendirilmiş <b>kayıt kuruluşları</b> üzerinden yapılır. Güncel kayıt kuruluşu listesi trabis.gov.tr adresinde yayımlanır. .av.tr, .edu.tr, .gov.tr, .bel.tr gibi belirli kurum ve meslek gruplarına ayrılmış uzantılar için ise hâlâ belge istenir. Kamuya yansıyan verilere göre 2025 sonu itibarıyla aktif .tr alan adı sayısı 1,3 milyon civarına ulaştı.</p>
      <table>
        <thead><tr><th>Uzantı</th><th>Kimler için uygun?</th><th>Not</th></tr></thead>
        <tbody>
          <tr><td>.com.tr</td><td>Türkiye pazarına hitap eden şirketler</td><td>Yerel güven algısı güçlü; belgesiz alınabiliyor</td></tr>
          <tr><td>.com</td><td>Uluslararası satış veya yurt dışı hedefi olan markalar</td><td>Kısa ve kolay adların çoğu çoktan alınmış</td></tr>
          <tr><td>.tr</td><td>Kısa, akılda kalıcı adres isteyenler</td><td>Doğrudan .tr tahsisi de mümkün; kurallar için kayıt kuruluşuna danışın</td></tr>
          <tr><td>.net, .org, yeni uzantılar</td><td>Özel amaçlı projeler, kampanyalar</td><td>Ana kurumsal adres olarak genellikle ikinci tercih</td></tr>
        </tbody>
      </table>
      <p>Arama motorları açısından .com.tr, Türkiye’yi hedeflediğinizi doğal olarak gösterir. .com kullanıyorsanız bu sinyali dil, içerik ve Search Console ayarlarıyla verirsiniz. Kısacası iki seçenek de SEO için sorun değildir; asıl soru markanızın hangi pazara konuştuğudur.</p>'''),
        ('mulkiyet', 'Mülkiyet ve yenileme', 'Alan adı mülkiyeti ve yenileme: en sık yapılan hata', '''
      <p>Alan adının hukuki sahibi, kayıt sırasında “kayıt sahibi” olarak yazılan kişi veya şirkettir. Ajansın ya da çalışan bir personelin bireysel hesabıyla alınan alan adları, ilişki bozulduğunda veya o kişi işten ayrıldığında ciddi sorun yaratır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kayıt sahibi şirketiniz olsun:</b> Ajansınız işlemleri yürütse bile alan adı sizin unvanınıza kayıtlı olmalı.</span></li>
        <li>{ic}<span><b>Panel erişimi sizde de bulunsun:</b> Kayıt kuruluşundaki hesabın şifresi ve iletişim e-postası şirketin kalıcı bir adresine bağlı olmalı.</span></li>
        <li>{ic}<span><b>Otomatik yenilemeyi açın ve süreyi uzatın:</b> Alan adını birkaç yıllığına yenilemek, unutma riskini azaltır.</span></li>
        <li>{ic}<span><b>Hatırlatma e-postalarını kaçırmayın:</b> Mevzuata göre kayıt kuruluşu, süre bitmeden önce alan adı sahibini uyarmakla yükümlüdür; ama bu uyarı artık kullanılmayan bir e-posta adresine gidiyorsa işe yaramaz.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Süresi dolan alan adı önce askıya alınır, belirli bir bekleme süresinin sonunda yeniden tahsise açılır. Bu süreçte siteniz ve e-postalarınız çalışmaz. Bilinen bir marka adresinin boşa düşmesi, başkalarının onu kapması için fırsat yaratır.</div></div>'''),
        ('hosting', 'Hosting türleri', 'Hosting türleri: paylaşımlı, VPS, bulut ve yönetilen sunucu', '''
      <p>Hosting fiyatları birkaç yüz liradan binlerce liraya kadar uzanır; fark genellikle ayrılan kaynakta, performansta ve sorumluluğun kimde olduğunda yatar.</p>
      <table>
        <thead><tr><th>Tür</th><th>Uygun olduğu durum</th><th>Artıları</th><th>Sınırları</th></tr></thead>
        <tbody>
          <tr><td>Paylaşımlı hosting</td><td>Az trafikli tanıtım siteleri</td><td>Ucuz, kurulumu kolay, panel hazır</td><td>Kaynaklar diğer sitelerle paylaşılır; komşu site yavaşlarsa siz de etkilenirsiniz</td></tr>
          <tr><td>VPS / sanal sunucu</td><td>Orta trafikli siteler, e-ticaret, özel yazılımlar</td><td>Ayrılmış kaynak, tam kontrol</td><td>Güncelleme ve güvenlik yönetimi teknik bilgi ister</td></tr>
          <tr><td>Bulut sunucu</td><td>Trafiği dalgalı, büyüyen projeler</td><td>Kaynağı ihtiyaca göre artırıp azaltma, yüksek erişilebilirlik</td><td>Maliyet doğru planlanmazsa artabilir</td></tr>
          <tr><td>Yönetilen hosting</td><td>Teknik ekibi olmayan işletmeler</td><td>Bakım, yedek ve güvenlik sağlayıcıda</td><td>Aylık ücret daha yüksek</td></tr>
        </tbody>
      </table>
      <p>Tanıtım amaçlı bir kurumsal site için kaliteli bir paylaşımlı veya yönetilen hosting çoğu zaman yeterlidir. Kullanıcı girişi, ödeme ya da yoğun veritabanı işlemi olan sistemlerde ise VPS veya bulut sunucu gerekir. Örneğin <a href="projelerimiz.html">KATSİS</a> gibi bir site yönetim yazılımında yük, sakinlerin aidat ödediği ay başı günlerinde belirgin şekilde artar; böyle sistemlerde kaynağı ihtiyaca göre büyütebilen bir altyapı belirleyici olur.</p>'''),
        ('kriter', 'Hosting kriterleri', 'Hosting seçerken bakmanız gereken 8 kriter', '''
      <p>“Sınırsız disk, sınırsız trafik” gibi pazarlama ifadeleri yerine şu somut kriterlere bakın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Performans:</b> SSD/NVMe disk, yeterli işlemci ve bellek, güncel PHP veya Node.js sürümleri. Sunucu yanıt süresi sitenizin hızını doğrudan belirler (bkz. <a href="site-hizi-core-web-vitals.html">site hızı ve Core Web Vitals</a>).</span></li>
        <li>{ic}<span><b>2. Sunucu konumu:</b> Ziyaretçileriniz Türkiye’deyse Türkiye’ye yakın bir veri merkezi ya da CDN gecikmeyi azaltır.</span></li>
        <li>{ic}<span><b>3. Kişisel veriler:</b> Sunucu yurt dışındaysa bu, KVKK açısından kişisel verilerin yurt dışına aktarılması anlamına gelebilir; aydınlatma metninizde ve sözleşmelerinizde bu durumu ele alın.</span></li>
        <li>{ic}<span><b>4. Otomatik yedekleme:</b> Günlük yedek alınıyor mu, kaç gün saklanıyor, geri yükleme ücretli mi?</span></li>
        <li>{ic}<span><b>5. Ücretsiz SSL:</b> Let’s Encrypt gibi otomatik yenilenen sertifika desteği bugün temel bir beklentidir.</span></li>
        <li>{ic}<span><b>6. Çalışma süresi taahhüdü:</b> Yüzde 99,9 gibi bir erişilebilirlik taahhüdü ve kesinti halinde ne olacağı sözleşmede yazmalı.</span></li>
        <li>{ic}<span><b>7. Destek:</b> Türkçe, 7/24 ve gerçekten teknik bilgiye sahip bir destek ekibi; sorun gece çıktığında fark yaratır.</span></li>
        <li>{ic}<span><b>8. Taşınabilirlik:</b> Dosyalarınızı ve veritabanınızı istediğiniz zaman tam olarak indirebilmeli, başka sağlayıcıya geçebilmelisiniz.</span></li>
      </ul>
      <p>Güvenlik tarafında sunucunun güncel tutulması, güvenlik duvarı ve kötü amaçlı yazılım taraması da önemlidir. Bu konuları <a href="web-sitesi-guvenligi.html">web sitesi güvenliği ve SSL</a> yazımızda ayrıntılı anlattık.</p>'''),
        ('tasima', 'Hosting değiştirmek', 'Hosting değiştirmek veya siteyi taşımak: kesintisiz geçiş', '''
      <p>Mevcut hosting’iniz yavaşsa, destek alamıyorsanız ya da siteniz büyüdüyse taşınmak gerekebilir. Doğru planlanan bir taşıma, ziyaretçilerin fark etmeyeceği kadar sorunsuz geçer:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım —</b> Mevcut sitenin dosyalarının ve veritabanının tam yedeğini alın; e-posta hesaplarınızı da listeleyin.</span></li>
        <li>{ic}<span><b>2. Adım —</b> Yeni sunucuda siteyi kurun ve DNS’i değiştirmeden önce geçici bir adres üzerinden test edin.</span></li>
        <li>{ic}<span><b>3. Adım —</b> Taşımadan bir gün önce DNS kayıtlarının TTL süresini kısaltın; böylece değişiklik daha hızlı yayılır.</span></li>
        <li>{ic}<span><b>4. Adım —</b> DNS’i yeni sunucuya yönlendirin, SSL sertifikasının oluştuğunu ve formların, e-postaların çalıştığını kontrol edin.</span></li>
        <li>{ic}<span><b>5. Adım —</b> Eski hosting’i birkaç gün daha açık tutun; tüm trafiğin yeni sunucuya geçtiğinden emin olmadan kapatmayın.</span></li>
      </ul>
      <p>Adres yapısını da değiştiriyorsanız eski URL’lerden yenilerine kalıcı (301) yönlendirme yapmayı unutmayın. Aksi halde yıllardır kazanılmış arama sıralamaları kısa sürede kaybolabilir.</p>'''),
        ('eposta', 'Kurumsal e-posta', 'Kurumsal e-posta ve DNS ayarlarını unutmayın', '''
      <p>Alan adınızla birlikte gelen en değerli hizmetlerden biri ad@firmaniz.com.tr biçimindeki kurumsal e-postadır. E-postayı hosting paketinin içinden mi, yoksa ayrı bir kurumsal e-posta hizmetinden mi alacağınıza kullanıcı sayınıza ve depolama ihtiyacınıza göre karar verin.</p>
      <p>Hangi yolu seçerseniz seçin, e-postalarınızın spam klasörüne düşmemesi için DNS’te <b>SPF, DKIM ve DMARC</b> kayıtlarının doğru tanımlanması gerekir. Büyük e-posta sağlayıcıları, toplu gönderim yapan alan adlarından bu kimlik doğrulama kayıtlarını artık zorunlu olarak istiyor. Bu kayıtlar eksikse en önemli teklif e-postanız bile müşterinin gelen kutusuna ulaşmayabilir.</p>
      <blockquote><div class="bi-q">{quote}</div>Alan adı sizin dijital tapunuzdur; tapuyu başkasının adına bırakmazsınız.</blockquote>'''),
    ],
    check_title='// ALAN ADI VE HOSTING KONTROL LİSTESİ',
    checks=[
        'Alan adı şirketinizin unvanına kayıtlı mı?',
        'Kayıt kuruluşu paneline şirketiniz erişebiliyor mu?',
        'Otomatik yenileme açık, iletişim e-postası güncel mi?',
        'Hosting’de günlük yedek ve ücretsiz SSL var mı?',
        'Sunucu konumu ve KVKK durumu değerlendirildi mi?',
        'SPF, DKIM ve DMARC kayıtları tanımlı mı?',
        'Dosya ve veritabanını tam olarak indirebiliyor musunuz?',
    ],
    faq=[
        ('.com.tr alan adı almak için belge gerekiyor mu?', 'Hayır. TRABİS’in 2022’de faaliyete geçmesiyle .com.tr, .net.tr ve .org.tr alan adları belge gerekmeden, ilk başvurana tahsis edilmeye başlandı. .av.tr, .edu.tr veya .gov.tr gibi belirli kurumlara ayrılmış uzantılarda ise hâlâ belge istenir.'),
        ('Alan adı ve hosting aynı firmadan mı alınmalı?', 'Zorunlu değildir. Aynı firmadan almak yönetimi kolaylaştırır; ayrı firmalardan almak ise hosting değiştirirken alan adınızı riske atmamanızı sağlar. Önemli olan alan adının sizin adınıza kayıtlı ve panelin sizin kontrolünüzde olmasıdır.'),
        ('Alan adının süresi dolarsa ne olur?', 'Süresi dolan alan adı önce askıya alınır ve site ile e-postalar çalışmaz. Belirli bir ek süre içinde yenilenmezse silinir ve yeniden tahsise açılır; bu noktada başka biri tarafından alınabilir. Otomatik yenileme ve güncel iletişim e-postası bu riski ortadan kaldırır.'),
        ('Kurumsal bir site için hangi hosting yeterli?', 'Tanıtım amaçlı, aylık birkaç bin ziyaret alan bir kurumsal site için kaliteli bir paylaşımlı veya yönetilen hosting genellikle yeterlidir. E-ticaret, üyelik sistemi veya özel yazılım içeren projelerde VPS ya da bulut sunucu tercih edilmelidir.'),
        ('.com mu .com.tr mi SEO için daha iyi?', 'İkisi de SEO için uygundur. .com.tr, Türkiye’yi hedeflediğinizi otomatik olarak gösterir; .com ile aynı sinyali dil, içerik ve Search Console ayarlarıyla verebilirsiniz. Seçimi hedef pazarınıza ve markanızın akılda kalıcılığına göre yapın.'),
    ],
    outro='''<p>Doğru alan adı ve hosting seçimi; kısa ve markanızı taşıyan bir adres, şirketinize kayıtlı bir mülkiyet, otomatik yenileme ve ihtiyacınıza uygun, yedekli, hızlı bir sunucu demektir. Bu kararlar bir kez doğru verildiğinde yıllarca düşünmeniz gerekmez.</p>
      <p>Web sitesi projelerimizde alan adı ve barındırma kurulumunu, DNS ve e-posta ayarlarını da üstleniyoruz; tüm hakların sizde kalacağı şekilde. Sıfırdan bir site düşünüyorsanız önce <a href="kurumsal-web-sitesi-rehberi.html">kurumsal web sitesi rehberimize</a> göz atabilir, mevcut altyapınızı birlikte gözden geçirmek için <a href="iletisim.html">bizimle iletişime geçebilirsiniz</a>.</p>''',
    sources=[
        ('TRABİS — .tr Ağ Bilgi Sistemi', 'https://www.trabis.gov.tr/'),
        ('BTK — TRABİS’in hayata geçirilmesi haberi', 'https://btk.gov.tr/en/news/bakan-yardimcisi-sayan-trabis-in-hayata-gecirilmesinin-ulkemiz-adina-onemli-bir-adim'),
        ('TRT Haber — İnternette .tr alan adı sayısı 1,3 milyona ulaştı', 'https://www.trthaber.com/haber/bilim-teknoloji/internette-tr-alan-adi-sayisi-13-milyona-ulasti-944042.html'),
        ('İnternet Alan Adları Yönetmeliği (Lexpera)', 'https://www.lexpera.com.tr/mevzuat/yonetmelikler/internet-alan-adlari-yonetmeligi'),
        ('KVKK — Kişisel Verileri Koruma Kurumu', 'https://www.kvkk.gov.tr/'),
        ('Google Search Central — Managing multi-regional and multilingual sites', 'https://developers.google.com/search/docs/specialty/international/managing-multi-regional-sites'),
        ('Google — Email sender guidelines', 'https://support.google.com/a/answer/81126'),
    ],
)
