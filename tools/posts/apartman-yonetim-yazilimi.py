POST = dict(
    slug='apartman-yonetim-yazilimi',
    kat='Yazılım',
    keyword='apartman yönetim yazılımı',
    title='Apartman Yönetim Yazılımı Seçerken Dikkat Edilmesi Gereken 9 Şey',
    h1='Apartman yönetim yazılımı seçerken dikkat edilmesi gereken 9 şey.',
    crumb='YAZILIM',
    sure='8 dk',
    ozet='Aidat takibinden KVKK’ya, online tahsilattan raporlamaya: apartman ve site yönetim yazılımı seçerken bakmanız gereken kriterleri, Kat Mülkiyeti Kanunu’na uyumu ve kontrol listesini tarafsız bir gözle derledik.',
    desc='Apartman yönetim yazılımı seçerken nelere bakılmalı? Aidat ve gecikme tazminatı, işletme projesi, online tahsilat, KVKK, mobil uygulama ve kontrol listesi.',
    lead='Aidat defteri bir yerde, banka dökümü başka yerde, borç listesi WhatsApp grubunda, arıza talepleri yöneticinin telefonunda. Apartman yönetimi gönüllülük üzerine kurulu bir iş gibi görünür ama işin aslı <b>para, hukuk ve iletişim</b>tir; doğru yazılım bu üçünü tek yerde toplar.',
    intro='''<p>Birkaç daireli bir apartmandan yüzlerce bağımsız bölümlü toplu yapılara kadar, yönetimlerin önündeki sorular aynıdır: Aidatlar zamanında toplanıyor mu, kim ne kadar borçlu, para nereye harcandı, sakinler bilgilendiriliyor mu? Bir <b>apartman yönetim yazılımı</b> bu soruların cevabını herkesin görebileceği şeffaf bir düzene dönüştürür.</p>
      <p>Piyasada çok sayıda site yönetim programı var ve tanıtımları birbirine benziyor. Bu yazıda belirli bir ürünü değil, seçim yaparken bakmanız gereken kriterleri anlatıyoruz: Kat Mülkiyeti Kanunu’na uyum, aidat ve gecikme tazminatı hesabı, online tahsilat, KVKK, mobil erişim, raporlama ve destek. Yazının sonunda yazılımları karşılaştırırken kullanabileceğiniz bir kontrol listesi de bulacaksınız.</p>''',
    sections=[
        ('neden', 'Neden yazılım?', 'Apartman yönetim yazılımı neden gerekli?', '''
      <p>Defter ve Excel ile yönetim, birkaç daireli küçük apartmanlarda bir süre idare eder. Ancak daire sayısı arttıkça, yönetici değiştikçe ve kiracı sirkülasyonu yükseldikçe sorunlar büyür:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Hesap karışıklığı:</b> Hangi ödemenin hangi aya ve hangi gider kalemine ait olduğu belirsizleşir; devir sırasında açıklar ortaya çıkar.</span></li>
        <li>{ic}<span><b>Şeffaflık eksikliği:</b> Sakinler paranın nereye harcandığını göremediğinde güven azalır, toplantılar tartışmaya döner, tahsilat zorlaşır.</span></li>
        <li>{ic}<span><b>Yöneticinin zamanı:</b> Tek tek mesaj atmak, makbuz yazmak, borç hatırlatmak ve arızaları takip etmek gönüllü yöneticiler için ciddi bir yüktür.</span></li>
        <li>{ic}<span><b>Hukuki risk:</b> Gecikme tazminatının yanlış hesaplanması ya da borçluların ortak alanlarda ilan edilmesi, yönetimi hukuki sorunlarla karşı karşıya bırakabilir.</span></li>
      </ul>
      <p>İyi bir yazılım bu yükü azaltırken her kat malikine kendi hesabını görme imkânı vererek yönetime duyulan güveni de artırır.</p>'''),
        ('aidat-ve-borc', 'Aidat ve borç takibi', 'Aidat takibi ve gecikme tazminatı: Kanuna uygun hesap', '''
      <p>Bir site yönetim programının kalbi aidat ve borç takibidir. 634 sayılı Kat Mülkiyeti Kanunu’nun 20. maddesine göre gider ve avans payını zamanında ödemeyen kat maliki, geciktiği günler için <b>aylık yüzde 5</b> gecikme tazminatı öder. Bu oran 2007’deki değişiklikle yüzde 10’dan yüzde 5’e indirilmiştir; hâlâ eski oranla hesap yapan şablonlarla karşılaşabilirsiniz.</p>
      <p>Yazılımı değerlendirirken şunlara bakın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Esnek tahakkuk:</b> Arsa payına göre, eşit ya da yönetim planındaki özel bir dağıtım anahtarına göre aidat tanımlanabiliyor mu? Yakıt, asansör, demirbaş gibi kalemler ayrı ayrı dağıtılabiliyor mu?</span></li>
        <li>{ic}<span><b>Gecikme tazminatı ayarı:</b> Oran, son ödeme günü ve hesaplama yöntemi (aylık ya da gün bazında) yönetim kararına göre ayarlanabiliyor mu? Hesaplamanın nasıl yapıldığı ekstrede açıkça görünüyor mu?</span></li>
        <li>{ic}<span><b>Malik ve kiracı ayrımı:</b> Kanun, kiracıyı da belirli şartlarda gider payından malikle birlikte sorumlu tutar. Yazılım malik ve kiracıyı ayrı tanımlayıp borcu doğru kişiye gösterebilmeli.</span></li>
        <li>{ic}<span><b>Kısmi ödeme ve mahsup:</b> Eksik ödemelerin hangi borca sayılacağı, avans ve iadeler net biçimde kaydedilmeli.</span></li>
        <li>{ic}<span><b>Kişiye özel ekstre:</b> Her daire kendi borç, ödeme ve gecikme geçmişini görebilmeli.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Toplantı öncesi kontrol:</b> Yazılımın demo hesabında kendi apartmanınızdan iki gerçek örnek (geç ödeyen bir daire, kısmi ödeme yapan bir daire) girip sonucun mevcut defterinizle tutup tutmadığına bakın. Hesap mantığını anlamanın en hızlı yolu budur.</div></div>'''),
        ('isletme-projesi', 'İşletme projesi', 'İşletme projesi, karar defteri ve hesap verme', '''
      <p>Kanun, yönetimden yıllık bir <b>işletme projesi</b> hazırlamasını ister. Kat Mülkiyeti Kanunu’nun 37. maddesine göre işletme projesine bildirimden itibaren yedi gün içinde itiraz edilebilir; kesinleşen işletme projesi ve kat malikleri kurulunun işletme giderlerine ilişkin kararları, İcra ve İflas Kanunu’nun 68. maddesinin birinci fıkrasında sayılan belgelerden kabul edilir. Bu da aidat alacağının takibinde işletme projesinin ne kadar önemli olduğunu gösterir.</p>
      <p>Yazılımın bu süreçte sunması gereken kolaylıklar:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Bütçe ve proje hazırlama:</b> Geçmiş yılın gerçekleşen giderlerinden yeni yılın işletme projesini oluşturup daire bazında paylara bölebilmek.</span></li>
        <li>{ic}<span><b>Bütçe–gerçekleşen karşılaştırması:</b> Yıl içinde hangi kalemde ne kadar sapma olduğunu gösteren raporlar.</span></li>
        <li>{ic}<span><b>Kasa ve banka hareketleri:</b> Toplanan paraların, Kanun’un öngördüğü şekilde yönetici sıfatıyla ana gayrimenkul adına açılan hesapta tutulması ve hareketlerin yazılıma işlenmesi.</span></li>
        <li>{ic}<span><b>Belge arşivi:</b> Faturalar, sözleşmeler, toplantı tutanakları ve karar örneklerinin dijital kopyalarının saklanması. Karar defterinin noter onaylı olması gerektiğini unutmayın; yazılım bu defterin yerini değil, düzenini tutar.</span></li>
        <li>{ic}<span><b>Yıl sonu hesap raporu:</b> Kat malikleri kurulunda sunulacak gelir-gider tablosunun tek tıkla alınabilmesi.</span></li>
      </ul>
      <p>1 Eylül 2023’ten bu yana Kat Mülkiyeti Kanunu’ndan doğan uyuşmazlıklarda dava açmadan önce arabulucuya başvurmak zorunlu. Düzenli tutulmuş ekstre ve kayıtlar, hem arabuluculuk hem icra aşamasında yönetimin elini güçlendirir.</p>
      <div class="bi-note">{warn}<div><b>Not:</b> Bu yazıdaki hukuki bilgiler genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Gecikme tazminatı, icra ve arabuluculuk süreçleri için bir avukattan görüş alın.</div></div>'''),
        ('tahsilat', 'Online tahsilat', 'Online aidat ödeme: sanal POS, havale eşleştirme ve hatırlatmalar', '''
      <p>Tahsilatı kolaylaştırmanın en etkili yolu, ödemeyi zahmetsiz hâle getirmektir. Sakinlerin aidatını telefonundan kartla ödeyebilmesi, “bankaya gidip yatırırım” bahanesini ortadan kaldırır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Sanal POS ile kartla ödeme:</b> Ödeme anında borçtan düşülmeli, makbuz otomatik oluşmalı. Komisyon oranlarını ve bu komisyonu kimin üstleneceğini önceden netleştirin.</span></li>
        <li>{ic}<span><b>Havale / EFT eşleştirme:</b> Açıklamasız gelen havaleler yönetimlerin en büyük derdidir. Daireye özel referans kodu ya da banka hareketlerini içe aktarıp eşleştirme özelliği büyük zaman kazandırır.</span></li>
        <li>{ic}<span><b>Otomatik hatırlatma:</b> Son ödeme gününden önce ve sonra SMS, e-posta veya uygulama bildirimiyle kişiye özel hatırlatma.</span></li>
        <li>{ic}<span><b>Ödeme güvenliği:</b> Kart bilgileri yazılımda değil, lisanslı ödeme kuruluşunun altyapısında işlenmeli; 3D Secure desteklenmeli.</span></li>
      </ul>
      <blockquote><div class="bi-q">{quote}</div>Aidat tahsilatında en güçlü hatırlatma, ödemenin iki dokunuşla yapılabilmesidir.</blockquote>'''),
        ('kvkk', 'KVKK ve veri güvenliği', 'KVKK uyumu: borç listesi, kamera ve sakin verileri', '''
      <p>Apartman ve site yönetimleri; ad, telefon, daire numarası, borç bilgisi, araç plakası, kamera görüntüsü gibi pek çok kişisel veri işler. Kişisel Verileri Koruma Kurulu son dönemde bu alanda iki önemli konuya dikkat çekti:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Borç listeleri ortak alanlara asılmamalı:</b> Kurul’un 2026’da duyurduğu karara göre aidat borcu olan sakinlerin bilgilerinin asansör, bina girişi, koridor gibi ortak alanlara asılması, 6698 sayılı Kanun’a aykırı bulundu. Bilgilendirmenin yalnızca ilgili kişilerin erişebildiği kanallarla, örneğin kişiye özel bir uygulama veya kapalı bir kanal üzerinden yapılması öneriliyor.</span></li>
        <li>{ic}<span><b>Güvenlik kamerası kullanımı:</b> Kurum’un apartmanlarda güvenlik kamerası kullanımına ilişkin kamuoyu duyurusu, kamera sisteminin hem KVKK’ya hem Kat Mülkiyeti Kanunu’na uygun kurulması gerektiğini vurguluyor.</span></li>
      </ul>
      <p>Yazılım tarafında aranması gereken güvenceler:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Rol bazlı yetki:</b> Yönetici, denetçi, görevli ve sakin farklı ekranlar ve farklı veriler görmeli. Bir sakin yalnızca kendi borcunu görebilmeli.</span></li>
        <li>{ic}<span><b>Veri konumu ve yedekleme:</b> Verilerin nerede barındırıldığı, ne sıklıkla yedeklendiği ve sözleşme bittiğinde verinin size nasıl teslim edileceği yazılı olmalı.</span></li>
        <li>{ic}<span><b>Aydınlatma metni:</b> Sakinlere verilerinin hangi amaçla işlendiğini anlatan bir aydınlatma metni ve gerekiyorsa açık rıza mekanizması bulunmalı.</span></li>
        <li>{ic}<span><b>İşlem kayıtları:</b> Kimin hangi kaydı ne zaman değiştirdiği izlenebilmeli; bu hem güvenlik hem yönetici devri için önemlidir.</span></li>
      </ul>
      <p>KVKK’ya uygun dijital altyapı hakkında daha fazlası için <a href="kvkk-uyumlu-web-sitesi.html">KVKK uyumlu web sitesi</a> yazımıza göz atabilirsiniz.</p>'''),
        ('iletisim-mobil', 'İletişim ve mobil', 'Sakin iletişimi, destek talepleri ve mobil uygulama', '''
      <p>Yönetimle sakinler arasındaki iletişimin büyük kısmı bugün dağınık mesajlaşma gruplarında yürüyor. Bu gruplarda duyurular kaybolur, kişisel bilgiler herkese açık paylaşılır, arıza bildirimleri takipsiz kalır. Yazılımda şu özelliklere bakın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Duyuru modülü:</b> Su kesintisi, toplantı çağrısı, bakım çalışması gibi duyuruların uygulama bildirimi ve gerekirse SMS ile tüm sakinlere ya da belirli bloklara gönderilmesi.</span></li>
        <li>{ic}<span><b>Destek talepleri:</b> Sakinin fotoğraf ekleyerek arıza bildirebildiği, talebin durumunu (alındı, işlemde, çözüldü) takip edebildiği bir talep sistemi.</span></li>
        <li>{ic}<span><b>Mobil uygulama:</b> Sakinlerin borcunu görmesi, ödeme yapması, duyuruları okuması ve talep açması için iOS ve Android uygulaması. Yalnızca mobil uyumlu bir web sayfası da iş görür, ancak bildirim desteği için uygulama daha etkilidir.</span></li>
        <li>{ic}<span><b>Yönetici ekranı:</b> Yönetici ve muhasebe tarafında, detaylı işlemler için masaüstü veya web paneli. Büyük sitelerde yoğun veri girişi telefondan yapılmaz.</span></li>
      </ul>'''),
        ('karsilastirma', 'Nasıl karşılaştırılır?', 'Site yönetim programlarını karşılaştırma tablosu', '''
      <p>Teklif aldığınız yazılımları aşağıdaki tabloyla yan yana koyabilirsiniz:</p>
      <table>
        <thead><tr><th>Kriter</th><th>Ne sormalı?</th></tr></thead>
        <tbody>
          <tr><td>Aidat ve tahakkuk</td><td>Arsa payı, eşit ve özel dağıtım anahtarları destekleniyor mu?</td></tr>
          <tr><td>Gecikme tazminatı</td><td>Oran ve yöntem ayarlanabiliyor mu, ekstrede gösteriliyor mu?</td></tr>
          <tr><td>Tahsilat</td><td>Sanal POS, havale eşleştirme, otomatik makbuz var mı? Komisyon kimde?</td></tr>
          <tr><td>Raporlama</td><td>İşletme projesi, bütçe–gerçekleşen, yıl sonu hesap raporu alınabiliyor mu?</td></tr>
          <tr><td>KVKK</td><td>Rol bazlı yetki, veri konumu, yedekleme, işlem kaydı nasıl?</td></tr>
          <tr><td>Platformlar</td><td>Web, iOS, Android, masaüstü seçenekleri neler?</td></tr>
          <tr><td>Geçiş</td><td>Mevcut Excel verileri ve açılış bakiyeleri aktarılabiliyor mu?</td></tr>
          <tr><td>Fiyatlandırma</td><td>Daire başına mı, sabit mi? SMS ve POS ücretleri dahil mi?</td></tr>
          <tr><td>Destek</td><td>Telefon, e-posta, eğitim; yönetici değiştiğinde devir desteği var mı?</td></tr>
        </tbody>
      </table>
      <p>Fiyatlandırmada yalnızca aylık ücrete değil, SMS paketleri, sanal POS komisyonları ve ek modül ücretleri dahil yıllık toplam maliyete bakın. Ucuz görünen bir paket, ek kalemlerle birlikte pahalıya gelebilir.</p>'''),
        ('ornek', 'Bir örnek: KATSİS', 'Bir örnek: KATSİS’i nasıl kurguladık?', '''
      <p>Bu kriterlerin bir kısmını kendi ürünümüzü geliştirirken bizzat yaşadık. CYF Tech olarak geliştirdiğimiz <b>KATSİS</b>, apartman ve site yönetimini tek panelde toplamak amacıyla tasarlandı: aidat ve borç takibi, kasa, duyurular, destek talepleri, sanal POS ile online tahsilat ve SMS modülleri bir arada çalışıyor. Yöneticiler için web paneli ve Windows uygulaması, sakinler için iOS ve Android uygulamaları bulunuyor.</p>
      <p>Geliştirme sürecinde gördüğümüz en önemli ders şu oldu: Yönetimlerin asıl ihtiyacı çok sayıda özellik değil, aidat hesabının doğru, tahsilatın kolay ve iletişimin düzenli olması. Ürünü ve diğer işlerimizi <a href="projelerimiz.html">projelerimiz</a> sayfasında inceleyebilirsiniz. Hangi yazılımı seçerseniz seçin, yukarıdaki kontrol listesini kullanmanızı öneririz.</p>'''),
    ],
    check_title='// YAZILIM SEÇMEDEN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Aidat dağıtım anahtarı (arsa payı, eşit, özel) desteklenebiliyor mu?',
        'Gecikme tazminatı oranı ve yöntemi yönetim kararına göre ayarlanabiliyor mu?',
        'Online ödeme, havale eşleştirme ve otomatik makbuz var mı?',
        'Borç bilgileri yalnızca ilgili kişiye mi gösteriliyor?',
        'Veri konumu, yedekleme ve sözleşme sonu veri teslimi yazılı mı?',
        'Mevcut kayıtlar ve açılış bakiyeleri aktarılabiliyor mu?',
        'SMS, POS ve ek modüller dahil yıllık toplam maliyet hesaplandı mı?',
    ],
    faq=[
        ('Apartman aidatı gecikme faizi ne kadar?', '634 sayılı Kat Mülkiyeti Kanunu’nun 20. maddesine göre gider veya avans payını zamanında ödemeyen kat maliki, geciktiği günler için aylık yüzde 5 gecikme tazminatı öder. Hesaplama yöntemi konusunda tereddüt varsa bir hukukçuya danışılması önerilir.'),
        ('Aidat borçlularının listesi asansöre asılabilir mi?', 'Hayır. Kişisel Verileri Koruma Kurulu, aidat borcu olan sakinlerin bilgilerinin asansör, giriş ve koridor gibi ortak alanlarda ilan edilmesini hukuka aykırı buldu. Bilgilendirme, yalnızca ilgili kişilerin erişebildiği kanallarla yapılmalıdır.'),
        ('Küçük bir apartman için yönetim programı gerekli mi?', 'Zorunlu değildir, ancak birkaç daireli apartmanlarda bile online ödeme, kişiye özel borç ekstresi ve duyuru özelliği yöneticinin işini ciddi biçimde kolaylaştırır ve yönetici değişiminde kayıtların kaybolmasını önler.'),
        ('Apartman yönetim yazılımı ücretleri neye göre belirlenir?', 'Genellikle daire veya bağımsız bölüm sayısına, seçilen modüllere ve platformlara göre belirlenir. SMS paketleri ve sanal POS komisyonları çoğu zaman ayrıca ücretlendirilir; karşılaştırmayı yıllık toplam maliyet üzerinden yapmak gerekir.'),
        ('Aidat borcu için dava açmadan önce ne yapılmalı?', '1 Eylül 2023’ten bu yana Kat Mülkiyeti Kanunu’ndan doğan uyuşmazlıklarda dava açmadan önce arabulucuya başvurmak zorunludur. Kesinleşmiş işletme projesine dayanan alacaklar için icra takibi de bir seçenektir; süreç için avukattan destek alınmalıdır.'),
    ],
    outro='''<p>Doğru apartman yönetim yazılımı, yöneticinin yükünü hafifletir, aidat tahsilatını hızlandırır ve en önemlisi yönetime duyulan güveni artırır. Seçim yaparken parlak özellik listelerinden çok aidat hesabının Kanun’a uygunluğuna, tahsilat kolaylığına, KVKK güvencelerine ve geçiş ile destek süreçlerine odaklanın.</p>
      <p>Sitenize ya da yönettiğiniz binalara uygun çözümü konuşmak, KATSİS’i yakından görmek veya kendi yönetim süreçlerinize özel bir yazılım ihtiyacını değerlendirmek isterseniz <a href="iletisim.html">bize ulaşın</a>.</p>''',
    sources=[
        ('634 sayılı Kat Mülkiyeti Kanunu (mevzuat.gov.tr)', 'https://www.mevzuat.gov.tr/mevzuatmetin/1.5.634.pdf'),
        ('KVKK — Apartmanlarda güvenlik kamerası kullanımına dair kamuoyu duyurusu', 'https://www.kvkk.gov.tr/Icerik/8769/apartmanlarda-guvenlik-kamerasi-sistemi-kullaniminda-dikkat-edilecek-hususlara-dair-kamuoyu-duyurusu'),
        ('Borç bilgilerinin ortak yerlere asılması hakkında KVKK duyurusu (Alomaliye)', 'https://www.alomaliye.com/2026/03/31/toplu-yapilarda-apartman-site-sakinlerine-ait-borc-bilgilerinin-ortak-yerlere-asilmasi-hakkinda-kvkk-duyurusu/'),
        ('7445 sayılı Kanun ile getirilen dava şartı arabuluculuk (Adalet Bakanlığı Arabuluculuk Daire Başkanlığı)', 'https://adb.adalet.gov.tr'),
    ],
)
