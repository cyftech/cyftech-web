POST = dict(
    slug='masaustu-mu-web-uygulamasi-mi',
    kat='Yazılım',
    keyword='masaüstü uygulama mı web uygulaması mı',
    title='Masaüstü Uygulama mı Web Uygulaması mı? Doğru Seçim İçin Rehber',
    h1='Masaüstü uygulama mı web uygulaması mı? Doğru seçim için rehber.',
    crumb='YAZILIM',
    sure='8 dk',
    ozet='Kurulumlu bir Windows programı mı, tarayıcıdan açılan bir web uygulaması mı? Çevrimdışı çalışma, donanım erişimi, güvenlik, maliyet ve güncelleme açısından iki yaklaşımı karşılaştırdık.',
    desc='Masaüstü uygulama mı web uygulaması mı? Çevrimdışı çalışma, donanım erişimi, güvenlik, maliyet ve bakım açısından karşılaştırma ve işletmeler için karar rehberi.',
    lead='İşletmeniz için özel bir yazılım yaptıracaksınız ve ilk soru masada: <b>masaüstü uygulama mı web uygulaması mı</b>? Kasadaki bilgisayara kurulan bir program mı, yoksa her yerden tarayıcıyla açılan bir sistem mi? Yanlış seçim, yıllarca sürecek bir verimsizlik demektir.',
    intro='''<p>Bulut ve tarayıcı teknolojileri geliştikçe web uygulamaları pek çok alanda masaüstü programların yerini aldı. Yine de barkod okuyucu, fiş yazıcısı, büyük dosyalar veya internetsiz çalışma gibi ihtiyaçlarda masaüstü uygulamalar hâlâ güçlü. Üstelik bugün tek bir yaklaşımı seçmek zorunda da değilsiniz.</p>
      <p>Bu yazıda iki yaklaşımı iş açısından karşılaştırıyor, aradaki hibrit seçenekleri (PWA, Electron, Tauri) açıklıyor ve kendi ürünümüz KATSİS’te neden web, mobil ve Windows’u birlikte kullandığımızı anlatıyoruz.</p>''',
    sections=[
        ('tanimlar', 'İki yaklaşım', 'Masaüstü uygulama ve web uygulaması arasındaki fark', '''
      <p><b>Masaüstü uygulama</b>, kullanıcının bilgisayarına kurulan ve doğrudan işletim sistemi üzerinde çalışan yazılımdır. Türkiye’de masaüstü bilgisayarların büyük çoğunluğu Windows kullandığı için (Statcounter’a göre 2026’da yaklaşık %85), işletmelerde “masaüstü uygulama” çoğu zaman “Windows programı” anlamına gelir. Veri yerel bilgisayarda, ofis içindeki bir sunucuda veya bulutta tutulabilir.</p>
      <p><b>Web uygulaması</b> ise bir sunucuda çalışır ve kullanıcı ona tarayıcı üzerinden erişir. Kurulum gerekmez; bir adres ve kullanıcı adı yeterlidir. Muhasebe programlarının bulut sürümleri, CRM sistemleri ve online yönetim panelleri tipik web uygulamalarıdır.</p>
      <p>Arada bir de web sitesi ile web uygulaması arasındaki fark vardır: web sitesi çoğunlukla bilgi verir, web uygulaması ise kullanıcının giriş yaptığı, veri oluşturduğu ve iş yaptığı bir sistemdir. Bu yazı ikincisini konu alıyor.</p>
      <p>Seçimi yaparken yalnızca bugünkü ihtiyaca değil, üç beş yıl sonrasına da bakmak gerekir. Bugün tek ofiste beş kişinin kullandığı bir program, yarın üç şubede elli kişinin ve sahadaki ekiplerin kullandığı bir sisteme dönüşebilir. İlk mimari kararı bu büyümeyi kaldıracak şekilde vermek, ileride baştan yazma maliyetinden kurtarır.</p>'''),
        ('karsilastirma', 'Karşılaştırma tablosu', 'Masaüstü vs web uygulaması: 8 kriterde karşılaştırma', '''
      <table>
        <thead><tr><th>Kriter</th><th>Masaüstü uygulama</th><th>Web uygulaması</th></tr></thead>
        <tbody>
          <tr><td>Kurulum</td><td>Her bilgisayara ayrı kurulum</td><td>Yok; tarayıcı yeterli</td></tr>
          <tr><td>Erişim</td><td>Kurulu olduğu cihazdan</td><td>İnternet olan her yerden, her cihazdan</td></tr>
          <tr><td>Çevrimdışı çalışma</td><td>Doğal olarak güçlü</td><td>Sınırlı; PWA ile kısmen mümkün</td></tr>
          <tr><td>Donanım erişimi</td><td>Yazıcı, terazi, kart okuyucu, seri port vb. tam erişim</td><td>Tarayıcının izin verdiği kadar</td></tr>
          <tr><td>Performans</td><td>Yerel kaynakları doğrudan kullanır</td><td>Sunucuya ve bağlantıya bağlı</td></tr>
          <tr><td>Güncelleme</td><td>Her cihazda güncelleme dağıtımı gerekir</td><td>Sunucuda bir kez; herkes anında yeni sürümde</td></tr>
          <tr><td>Veri ve yedekleme</td><td>Yerel veride yedek sorumluluğu kullanıcıda</td><td>Merkezî; yedekleme sunucu tarafında</td></tr>
          <tr><td>Platform</td><td>Genellikle tek işletim sistemi</td><td>Windows, macOS, tablet, telefon fark etmez</td></tr>
        </tbody>
      </table>
      <p>Tablo genel eğilimi gösteriyor: erişilebilirlik, çok kullanıcı ve kolay bakım öncelikliyse web; donanım, çevrimdışı çalışma ve ağır yerel işlem öncelikliyse masaüstü öne çıkar.</p>'''),
        ('web-ne-zaman', 'Web ne zaman doğru?', 'Web uygulaması hangi durumlarda doğru tercih?', '''
      <p>Günümüzde yeni bir iş yazılımı için varsayılan başlangıç noktası çoğu zaman web uygulamasıdır. Şu durumlarda web açık ara avantajlıdır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Birden fazla lokasyon veya uzaktan çalışma:</b> şubeler, saha ekipleri, evden çalışan personel aynı veriye anlık erişmeli.</span></li>
        <li>{ic}<span><b>Müşteri veya bayi erişimi:</b> dışarıdan kullanıcıların sisteme girmesi gerekiyorsa, onlara program kurdurmak gerçekçi değildir.</span></li>
        <li>{ic}<span><b>Sık güncellenen iş kuralları:</b> fiyat, kampanya veya süreç değişikliklerinin herkese aynı anda yansıması gerekiyorsa.</span></li>
        <li>{ic}<span><b>Karışık cihaz parkı:</b> kimi çalışan Windows, kimi Mac, kimi tablet kullanıyorsa.</span></li>
        <li>{ic}<span><b>Merkezî raporlama:</b> yönetimin tüm şubelerin verisini tek ekranda görmek istemesi.</span></li>
      </ul>
      <p>Web uygulamasının zayıf noktası internet bağlantısıdır. Bağlantı kesildiğinde iş durabilir; bu yüzden kritik süreçlerde çevrimdışı senaryoyu baştan düşünmek gerekir. Bir diğer konu güvenliktir: internete açık bir sistemin HTTPS, güçlü kimlik doğrulama, yetkilendirme ve düzenli güncellemelerle korunması şarttır. Ayrıntılar için <a href="web-sitesi-guvenligi.html">web sitesi güvenliği rehberimize</a> bakabilirsiniz.</p>'''),
        ('masaustu-ne-zaman', 'Masaüstü ne zaman şart?', 'Masaüstü uygulama hangi durumlarda hâlâ en iyi seçenek?', '''
      <p>Bulut çağında masaüstü yazılım modası geçmiş bir kavram değil. Aşağıdaki durumlarda masaüstü uygulama ya da en azından bir masaüstü bileşeni hâlâ en doğru çözümdür:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Yoğun donanım entegrasyonu:</b> fiş ve etiket yazıcıları, elektronik teraziler, barkod okuyucular, para çekmeceleri, seri port veya USB ile konuşan endüstriyel cihazlar.</span></li>
        <li>{ic}<span><b>Kesintisiz çalışma zorunluluğu:</b> kasa, üretim hattı veya depo gibi internet kesildiğinde işin durmaması gereken yerler.</span></li>
        <li>{ic}<span><b>Ağır yerel işlem:</b> büyük görsel, video, CAD dosyaları veya yüksek hacimli veri işleme.</span></li>
        <li>{ic}<span><b>Hassas ve yerel kalması gereken veri:</b> verinin kurum ağından çıkmaması gereken, internete kapalı ortamlar.</span></li>
        <li>{ic}<span><b>Yoğun klavye kullanımı:</b> gün boyu hızlı veri girişi yapan operatörler için kısayol odaklı, anında tepki veren arayüzler.</span></li>
      </ul>
      <p>Windows için masaüstü yazılım geliştirmede .NET tabanlı WPF ve WinUI gibi teknolojiler olgun ve uzun ömürlüdür. <a href="masaustu-uygulamalar.html">Masaüstü uygulama hizmetimizde</a> bu teknolojilerle donanım entegrasyonu gerektiren projeler geliştiriyoruz.</p>
      <div class="bi-note">{tip}<div><b>Kısa ipucu:</b> Tarayıcıların donanım erişimi her yıl gelişiyor; bazı tarayıcılar seri port veya USB cihazlarla konuşmaya izin veren API’ler sunuyor. Ancak bu destek tarayıcıdan tarayıcıya değişir. Kritik bir donanım entegrasyonunu tamamen tarayıcıya bırakmadan önce hedef cihazlarda mutlaka test edin.</div></div>'''),
        ('hibrit', 'Hibrit seçenekler', 'Arada kalanlar: PWA, Electron ve Tauri', '''
      <p>Masaüstü ile web arasındaki çizgi giderek inceliyor. Üç hibrit yaklaşım özellikle öne çıkıyor:</p>
      <h3>PWA (Progresif Web Uygulaması)</h3>
      <p>Web uygulamasının bilgisayara veya telefona “yüklenebilir” hâlidir. Kendi penceresinde açılır, masaüstünde simgesi olur, bazı verileri önbelleğe alarak sınırlı çevrimdışı çalışabilir, dosya açıp kaydetme gibi yetenekler kazanabilir. Ek maliyeti düşüktür; ancak donanım erişimi yine tarayıcının sınırlarındadır.</p>
      <h3>Electron</h3>
      <p>Web teknolojileriyle (HTML, CSS, JavaScript) yazılan uygulamayı, içinde tarayıcı motoru taşıyan bir masaüstü programına dönüştürür. Pek çok popüler masaüstü uygulama bu yaklaşımı kullanır. Web kodunun büyük kısmı yeniden kullanılabilir ve işletim sistemine tam erişim mümkündür; dezavantajı, uygulama boyutunun ve bellek kullanımının görece yüksek olmasıdır.</p>
      <h3>Tauri</h3>
      <p>Electron’a benzer bir yaklaşım; ancak tarayıcı motorunu paketlemek yerine işletim sisteminin kendi web görünümünü kullanır ve arka uçta Rust çalışır. Sonuç genellikle çok daha küçük ve hafif uygulamalardır. Ekosistemi Electron kadar geniş olmasa da hızla büyüyor.</p>
      <blockquote><div class="bi-q">{quote}</div>Soru artık “web mi masaüstü mü” değil; hangi kullanıcıya, hangi ekranda, hangi deneyimi sunacağınızdır.</blockquote>'''),
        ('katsis', 'KATSİS örneği', 'Gerçek bir örnek: KATSİS’te web, mobil ve Windows birlikte', '''
      <p>Kendi ürünümüz KATSİS, bu sorunun “ikisi de” olabileceğini gösteren iyi bir örnek. KATSİS bir apartman ve site yönetim yazılımı: aidat ve borç takibi, kasa, duyurular, destek talepleri, sanal POS ve SMS modüllerini bir araya getiriyor. Farklı kullanıcıların ihtiyaçları birbirinden çok farklı olduğu için tek bir arayüz yeterli değildi:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Web paneli:</b> yöneticilerin her yerden, kurulum yapmadan sisteme erişebilmesi ve raporlara ulaşabilmesi için.</span></li>
        <li>{ic}<span><b>iOS ve Android uygulamaları:</b> sakinlerin duyuruları takip etmesi, borcunu görmesi ve talep oluşturması için; yani en sık kullanılan işlemlerin cepte olması için.</span></li>
        <li>{ic}<span><b>Windows uygulaması:</b> masa başında yoğun işlem yapan kullanıcılar için, masaüstünün hızından ve rahatlığından yararlanan bir deneyim.</span></li>
      </ul>
      <p>Bu yapının anahtarı, üç arayüzün de <b>aynı altyapıya ve aynı veriye</b> bağlı olmasıdır. Web panelinde girilen bir tahsilat, aynı anda mobil uygulamada ve Windows uygulamasında görünür. İş kuralları tek bir merkezde yaşadığı için, yeni bir özellik eklendiğinde mantık bir kez yazılır; arayüzler yalnızca bu mantığı kendi ekranlarına uyarlar. KATSİS ve diğer ürünlerimizin ayrıntıları için <a href="projelerimiz.html">projelerimiz sayfasına</a> göz atabilirsiniz.</p>
      <p>Mobil tarafta hangi teknolojiyi seçeceğinizi düşünüyorsanız <a href="native-mi-cross-platform-mu.html">native mi cross-platform mu yazımız</a> da bu kararın devamı niteliğinde.</p>'''),
        ('karar', 'Karar rehberi', 'Masaüstü mü web mi? 6 soruluk karar rehberi', '''
      <p>Kendi projeniz için şu soruları yanıtlayın. “Evet” cevaplarının hangi tarafta yoğunlaştığı size yönü gösterecektir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Soru —</b> Kullanıcılar farklı lokasyonlardan veya şirket dışından erişecek mi? Evetse web.</span></li>
        <li>{ic}<span><b>2. Soru —</b> İnternet kesildiğinde işin durması kabul edilemez mi? Evetse masaüstü veya çevrimdışı destekli hibrit.</span></li>
        <li>{ic}<span><b>3. Soru —</b> Yazıcı, terazi, okuyucu gibi cihazlarla sürekli iletişim gerekiyor mu? Evetse masaüstü ya da web + küçük bir masaüstü yardımcı servis.</span></li>
        <li>{ic}<span><b>4. Soru —</b> Kullanıcılar farklı işletim sistemleri ve cihazlar mı kullanıyor? Evetse web.</span></li>
        <li>{ic}<span><b>5. Soru —</b> İş kuralları sık değişiyor ve herkesin anında güncel sürümü kullanması gerekiyor mu? Evetse web.</span></li>
        <li>{ic}<span><b>6. Soru —</b> Verinin kurum ağından çıkmaması mı gerekiyor? Evetse yerel sunuculu masaüstü veya şirket içi barındırılan web uygulaması.</span></li>
      </ul>
      <p>Pek çok işletmede doğru cevap, merkezde bir web uygulaması ve özel ihtiyaçlar için ona bağlanan masaüstü veya mobil uygulamalardır. Böyle bir sistemi sıfırdan tasarlıyorsanız <a href="ozel-yazilim-gelistirme.html">özel yazılım geliştirme yazımızda</a> sürecin nasıl işlediğini anlattık.</p>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Mevcut bir masaüstü programı web’e taşımak, yalnızca ekranları tarayıcıya aktarmak değildir. Yetkilendirme, eşzamanlı kullanım, veri taşıma ve güvenlik baştan tasarlanmalıdır; aksi hâlde eski programın sorunları yeni sisteme de taşınır.</div></div>'''),
    ],
    check_title='// KARAR VERMEDEN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Kullanıcı grupları ve kullandıkları cihazlar listelendi mi?',
        'Çevrimdışı çalışma ihtiyacı netleşti mi?',
        'Entegre edilecek donanımlar belirlendi mi?',
        'Verinin nerede barındırılacağına karar verildi mi?',
        'Güncelleme ve dağıtım süreci planlandı mı?',
        'İleride mobil veya web eklenme ihtimali değerlendirildi mi?',
    ],
    faq=[
        ('Web uygulaması internet olmadan çalışır mı?', 'Klasik bir web uygulaması internet bağlantısı gerektirir. PWA olarak geliştirilen web uygulamaları ise bazı verileri önbelleğe alarak sınırlı çevrimdışı çalışabilir ve bağlantı geldiğinde verileri eşitleyebilir. Tam ve uzun süreli çevrimdışı çalışma gerekiyorsa masaüstü uygulama daha güvenli bir seçenektir.'),
        ('Masaüstü uygulama mı daha güvenli, web uygulaması mı?', 'Hiçbiri kendiliğinden daha güvenli değildir. Web uygulamaları internete açık olduğu için güçlü kimlik doğrulama ve düzenli güncelleme ister; masaüstü uygulamalarda ise yerel verinin yedeklenmesi, cihaz kaybı ve güncellenmeyen kurulumlar risk oluşturur. Güvenlik, mimariye ve bakıma bağlıdır.'),
        ('Masaüstü programımı web uygulamasına dönüştürebilir miyim?', 'Evet, ancak bu genellikle yeniden geliştirme anlamına gelir. İş kuralları ve veri yapısı korunabilir, arayüz ve altyapı ise web için yeniden tasarlanır. Geçiş sürecinde iki sistemi bir süre paralel çalıştırmak ve verileri dikkatle taşımak önemlidir.'),
        ('Web uygulaması geliştirmek masaüstüne göre daha mı ucuz?', 'Birden fazla platformu ve çok kullanıcıyı hedefliyorsanız toplam maliyet genellikle web’de daha düşüktür, çünkü tek kod tabanı tüm cihazlarda çalışır ve güncelleme dağıtımı gerekmez. Tek bir işletim sisteminde, donanım yoğun bir iş için ise masaüstü uygulama daha ekonomik olabilir.'),
        ('Web uygulaması kendi sunucumuzda çalışabilir mi?', 'Evet. Web uygulaması bulut sunucuda barındırılabileceği gibi şirketinizin kendi sunucusunda, yalnızca iç ağdan erişilecek şekilde de çalıştırılabilir. Bu model, verinin kurum dışına çıkmaması gereken durumlarda web’in kurulum ve güncelleme kolaylığını korurken veriyi de şirket içinde tutar.'),
        ('Electron ile yapılan uygulama masaüstü uygulaması sayılır mı?', 'Evet. Electron uygulamaları bilgisayara kurulan ve işletim sistemine erişebilen gerçek masaüstü uygulamalarıdır; arayüzleri ise web teknolojileriyle yazılır. Bu sayede web uygulamasıyla kod paylaşmak kolaylaşır, ancak boyut ve bellek kullanımı native uygulamalara göre daha yüksektir.'),
    ],
    outro='''<p>Masaüstü uygulama mı web uygulaması mı sorusunun cevabı, kullanıcılarınızın nerede, hangi cihazla ve hangi koşullarda çalıştığında saklıdır. Erişilebilirlik ve kolay bakım için web, donanım ve kesintisiz çalışma için masaüstü öne çıkar; çoğu zaman en güçlü çözüm, ortak bir altyapı üzerinde ikisini birlikte kullanmaktır. KATSİS’te bu yaklaşımı kendi ürünümüzde uyguladık. Projeniz için doğru mimariyi birlikte belirlemek isterseniz <a href="web-cozumleri.html">web yazılım</a> ve <a href="masaustu-uygulamalar.html">masaüstü uygulama</a> hizmetlerimize göz atabilir ya da doğrudan <a href="iletisim.html">bizimle iletişime geçebilirsiniz</a>.</p>''',
    sources=[
        ('Statcounter — Türkiye masaüstü işletim sistemi payları', 'https://gs.statcounter.com/os-market-share/desktop/turkey'),
        ('web.dev — Progressive Web Apps', 'https://web.dev/explore/progressive-web-apps'),
        ('MDN — Web Serial API', 'https://developer.mozilla.org/en-US/docs/Web/API/Web_Serial_API'),
        ('Microsoft Learn — Windows uygulama geliştirme (WinUI / Windows App SDK)', 'https://learn.microsoft.com/windows/apps/'),
        ('Electron — Resmî dokümantasyon', 'https://www.electronjs.org/docs/latest/'),
        ('Tauri — Resmî dokümantasyon', 'https://v2.tauri.app/'),
    ],
)
