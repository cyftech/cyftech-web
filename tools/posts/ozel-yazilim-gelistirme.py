POST = dict(
    slug='ozel-yazilim-gelistirme',
    kat='Yazılım',
    keyword='özel yazılım geliştirme',
    title='Özel Yazılım Geliştirme: Ne Zaman Gerekir, Süreç Nasıl İşler?',
    h1='Özel yazılım geliştirme: ne zaman gerekir, süreç nasıl işler?',
    crumb='YAZILIM',
    sure='8 dk',
    ozet='Hazır programlar işinize yetmiyor mu? Özel yazılım geliştirmenin ne zaman mantıklı olduğunu, adım adım süreci, maliyeti belirleyen kalemleri ve sözleşmede mutlaka olması gerekenleri anlattık.',
    desc='Özel yazılım geliştirme ne zaman gerekir? Hazır yazılımla karşılaştırma, adım adım süreç, maliyet kalemleri, kaynak kod ve sözleşme konularında KOBİ rehberi.',
    lead='Excel dosyaları birbirine bağlanmış, üç farklı hazır program aynı veriyi ayrı ayrı tutuyor, ekip her ay sonunda aynı raporu elle hazırlıyor. Bu tablo size tanıdık geliyorsa, sorun çoğu zaman personelde değil, <b>işinize uymayan yazılımda</b>dır.',
    intro='''<p><b>Özel yazılım geliştirme</b>, bir işletmenin kendi süreçlerine göre tasarlanan ve yalnızca o işletme için yazılan yazılımdır: bir sipariş portalı, saha ekibi için mobil uygulama, üretim takip sistemi ya da birkaç programı tek panelde birleştiren bir yönetim ekranı. Kulağa büyük şirketlere özgü bir lüks gibi gelse de doğru kapsamla başlandığında KOBİ’ler için de en verimli yatırımlardan biri olabilir.</p>
      <p>Bu yazıda özel yazılımın hangi durumlarda gerçekten gerektiğini, hangi durumlarda hazır bir çözümün daha akıllıca olduğunu, bir projenin baştan sona hangi adımlardan geçtiğini, maliyeti neyin belirlediğini ve sözleşmeye mutlaka yazdırmanız gereken maddeleri anlatıyoruz. Kendi ürünlerimizi ve müşteri projelerimizi geliştirirken edindiğimiz deneyimi de yer yer paylaşacağız.</p>''',
    sections=[
        ('ne-zaman', 'Ne zaman gerekir?', 'Özel yazılım ne zaman gerekir? Beş net işaret', '''
      <p>Her işletmenin özel yazılıma ihtiyacı yoktur. Muhasebe, e-Fatura, e-posta, CRM gibi pek çok alanda olgun ve uygun fiyatlı hazır çözümler var; bunları sıfırdan yazmak çoğu zaman para ve zaman israfıdır. Özel yazılımın gündeme gelmesi gereken durumlar ise oldukça belirgindir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Süreciniz rekabet avantajınız.</b> Teklif hazırlama, üretim planlama ya da müşteriye hizmet verme biçiminiz sizi rakiplerden ayırıyorsa, bu süreci hazır bir programın kalıbına sokmak avantajı da kalıba sokar.</span></li>
        <li>{ic}<span><b>Veriler adalara bölünmüş.</b> Satış bir programda, stok başka bir programda, saha ekibi WhatsApp’ta, raporlar Excel’de. Her ay aynı veriyi elle birleştiren biri varsa, otomasyonun geri dönüşü genellikle hızlı olur.</span></li>
        <li>{ic}<span><b>Hazır yazılımı “ama”larla kullanıyorsunuz.</b> “Şu alanı başka amaçla kullanıyoruz”, “bu raporu dışarı alıp düzeltiyoruz” gibi geçici çözümler birikmişse, yazılım işinize değil, işiniz yazılıma uyuyor demektir.</span></li>
        <li>{ic}<span><b>Lisans maliyetleri büyüyor.</b> Kullanıcı başına ödenen abonelikler çalışan sayısıyla birlikte katlanıyorsa, birkaç yıllık toplam maliyet özel bir çözümün yatırımını geçebilir.</span></li>
        <li>{ic}<span><b>Müşteriye ya da bayiye açılan bir ekran gerekiyor.</b> Bayi sipariş portalı, müşteri takip paneli, randevu sistemi gibi markanızla sunulan dijital hizmetler, hazır araçlarla genellikle istediğiniz deneyimi vermez.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Kısa bir test:</b> Ekibinize “Her hafta tekrar eden ve bilgisayarın yapabileceği hangi işi elle yapıyorsunuz?” diye sorun ve harcanan saatleri toplayın. Bu sayı, özel yazılım bütçesini konuşurken en sağlam başlangıç noktanız olur.</div></div>'''),
        ('hazir-mi-ozel-mi', 'Hazır mı, özel mi?', 'Hazır yazılım mı, özel yazılım mı? Karşılaştırma', '''
      <p>Karar çoğu zaman siyah-beyaz değildir. Aşağıdaki tablo iki yaklaşımın tipik farklarını özetliyor:</p>
      <table>
        <thead><tr><th>Kriter</th><th>Hazır yazılım (paket / SaaS)</th><th>Özel yazılım</th></tr></thead>
        <tbody>
          <tr><td>Başlangıç maliyeti</td><td>Düşük; aylık veya yıllık abonelik</td><td>Yüksek; proje bazlı yatırım</td></tr>
          <tr><td>Devreye alma süresi</td><td>Günler, birkaç hafta</td><td>Kapsama göre birkaç ay</td></tr>
          <tr><td>Süreçlere uyum</td><td>Siz yazılıma uyarsınız</td><td>Yazılım size uyar</td></tr>
          <tr><td>Uzun vadeli maliyet</td><td>Kullanıcı ve modül arttıkça büyür</td><td>Bakım ve geliştirme bütçesiyle öngörülebilir</td></tr>
          <tr><td>Mülkiyet ve veri</td><td>Sağlayıcının platformunda</td><td>Sözleşmeye göre sizde</td></tr>
          <tr><td>Entegrasyon</td><td>Sağlayıcının izin verdiği kadar</td><td>İhtiyacınız kadar</td></tr>
        </tbody>
      </table>
      <p>Pratikte en sağlıklı yol çoğu zaman <b>hibrit</b> yaklaşımdır: muhasebe, e-Fatura, e-posta gibi standart işler için hazır çözümleri kullanmak; işinizi farklılaştıran süreci özel yazılımla kurmak ve ikisini entegrasyonla birbirine bağlamak. Web tarafında benzer bir ikilemi <a href="wordpress-mi-ozel-yazilim-mi.html">WordPress mi özel yazılım mı</a> yazımızda ayrıca ele aldık.</p>
      <blockquote><div class="bi-q">{quote}</div>Standart işi hazır araçlara, sizi farklı kılan işi özel yazılıma bırakın.</blockquote>'''),
        ('surec', 'Süreç adım adım', 'Özel yazılım geliştirme süreci adım adım', '''
      <p>İyi yönetilen bir projede sürpriz azdır, çünkü her aşamanın bir çıktısı ve bir onay noktası vardır. Tipik bir süreç şöyle işler:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Keşif ve analiz —</b> Mevcut süreç yerinde dinlenir, kullanıcılarla konuşulur, sorunlar ve hedefler yazıya dökülür. Çıktısı: kapsam dokümanı, kullanıcı rolleri ve öncelikli özellik listesi.</span></li>
        <li>{ic}<span><b>2. MVP kapsamının belirlenmesi —</b> Her şeyi ilk sürüme sığdırmak yerine, işe en çok değer katan çekirdek özellikler seçilir. “Olmazsa olmaz” ile “sonra da olur” ayrımı burada yapılır.</span></li>
        <li>{ic}<span><b>3. UX ve arayüz tasarımı —</b> Ekranlar önce taslak (wireframe), sonra tıklanabilir prototip olarak hazırlanır. Kod yazılmadan önce kullanıcıların prototip üzerinde denemesi, en pahalı hataları en ucuz aşamada yakalar.</span></li>
        <li>{ic}<span><b>4. Mimari ve teknoloji seçimi —</b> Web mi, mobil mi, masaüstü mü; veritabanı, barındırma, güvenlik ve entegrasyonlar netleşir.</span></li>
        <li>{ic}<span><b>5. Sprintlerle geliştirme —</b> İş genellikle iki haftalık dilimlere bölünür. Her sprint sonunda çalışan bir sürüm gösterilir; geri bildirim hemen bir sonraki sprinte yansır.</span></li>
        <li>{ic}<span><b>6. Test ve kabul —</b> Fonksiyonel testler, farklı cihaz ve tarayıcı testleri, yük ve güvenlik kontrolleri yapılır. Son adım, sizin gerçek senaryolarla yaptığınız kabul testidir.</span></li>
        <li>{ic}<span><b>7. Yayın, eğitim ve geçiş —</b> Eski sistemdeki veriler aktarılır, kullanıcılar eğitilir, gerekirse eski ve yeni sistem kısa bir süre paralel çalıştırılır.</span></li>
        <li>{ic}<span><b>8. Bakım ve sürekli geliştirme —</b> Yazılım yayın günü bitmez; güvenlik güncellemeleri, hata düzeltmeleri ve yeni ihtiyaçlar için düzenli bir bakım planı gerekir.</span></li>
      </ul>
      <p>Sürenin yarısından fazlasının kod dışı işlere (analiz, tasarım, test, eğitim) gitmesi şaşırtıcı değildir; aksine sağlıklı bir projenin işaretidir.</p>'''),
        ('teknoloji', 'Web, mobil, masaüstü', 'Web, mobil mi masaüstü mü? Platform seçimi', '''
      <p>Özel yazılımın hangi platformda çalışacağı, kullanım senaryosuna göre belirlenmelidir:</p>
      <h3>Web uygulaması</h3>
      <p>Tarayıcıdan her yerden erişilir, kurulum gerektirmez, güncellemeler tek noktadan yapılır. Panel, portal, CRM benzeri iç sistemler için çoğu zaman ilk tercihtir. Bu alanda yaptığımız işleri <a href="web-cozumleri.html">web çözümleri</a> sayfamızda görebilirsiniz.</p>
      <h3>Mobil uygulama</h3>
      <p>Saha ekipleri, kurye ve servis personeli ya da müşterilerinize sunacağınız bir hizmet varsa mobil uygulama gerekir. Kamera, konum, bildirim gibi telefon özellikleri burada devreye girer. Ayrıntılar için <a href="mobil-uygulamalar.html">mobil uygulama</a> hizmetimize bakabilirsiniz.</p>
      <h3>Masaüstü uygulama</h3>
      <p>Yazarkasa, terazi, barkod okuyucu gibi cihazlarla doğrudan çalışma, internet kesintisinde kesintisiz kullanım ya da yoğun veri işleme gerekiyorsa Windows uygulaması hâlâ güçlü bir seçenektir. Karşılaştırmanın tamamı için <a href="masaustu-mu-web-uygulamasi-mi.html">masaüstü mü web uygulaması mı</a> yazımıza göz atın.</p>
      <p>Birçok projede doğru cevap “hepsi”dir: ortak bir sunucu ve veritabanı üzerinde çalışan web paneli, mobil uygulama ve gerektiğinde masaüstü istemci. Önemli olan, bu yapının baştan planlanmasıdır.</p>'''),
        ('maliyet', 'Maliyeti ne belirler?', 'Özel yazılım maliyeti neye göre belirlenir?', '''
      <p>“Bir yazılım kaça olur?” sorusunun tek bir cevabı yoktur; tıpkı “bir ev kaça olur?” sorusu gibi. Fiyatı belirleyen başlıca kalemler şunlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kapsam ve ekran sayısı:</b> Kaç kullanıcı rolü, kaç ekran, kaç iş akışı var?</span></li>
        <li>{ic}<span><b>Platform sayısı:</b> Yalnızca web mi, yanında iOS / Android ve masaüstü de var mı?</span></li>
        <li>{ic}<span><b>Entegrasyonlar:</b> Muhasebe programı, e-Fatura sağlayıcısı, sanal POS, SMS, kargo, banka gibi dış sistemlerle bağlantılar.</span></li>
        <li>{ic}<span><b>Veri taşıma:</b> Eski sistemden ya da dağınık Excel dosyalarından verinin temizlenip aktarılması.</span></li>
        <li>{ic}<span><b>Güvenlik ve performans gereksinimleri:</b> Kişisel veri işleme, yetkilendirme, kayıt (log) tutma, yüksek eş zamanlı kullanıcı sayısı.</span></li>
        <li>{ic}<span><b>Bakım ve barındırma:</b> Sunucu, yedekleme, izleme ve yıllık bakım bütçesi.</span></li>
      </ul>
      <p>Bütçeyi kontrol altında tutmanın en etkili yolu, işe küçük ama çalışan bir MVP ile başlamak ve sonraki aşamaları gerçek kullanım verisine göre planlamaktır. Tek seferde “her şeyi yapan” bir sistem istemek, hem maliyeti hem riski katlar.</p>
      <div class="bi-note">{tip}<div><b>Destekleri takip edin:</b> KOSGEB ve kalkınma ajansları dönem dönem dijital dönüşüm ve yazılım yatırımlarına yönelik destek çağrıları açabiliyor. Proje bütçenizi çıkarırken güncel çağrıları ve uygunluk şartlarını resmi sitelerden kontrol etmeye değer.</div></div>'''),
        ('sozlesme', 'Sözleşme ve kaynak kod', 'Sözleşmede olması gerekenler: kaynak kod, haklar, bakım', '''
      <p>Özel yazılım projelerinde anlaşmazlıkların çoğu teknik değil, sözleşmeden kaynaklanır. Teklifi imzalamadan önce şu maddeleri netleştirin:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kaynak kod ve fikri haklar:</b> Kaynak kodun size teslim edilip edilmeyeceği, hangi kullanım haklarının devredildiği açıkça yazılmalı. 5846 sayılı Fikir ve Sanat Eserleri Kanunu’na göre mali haklara ilişkin sözleşmelerin yazılı olması ve devredilen hakların ayrı ayrı gösterilmesi gerekir.</span></li>
        <li>{ic}<span><b>Kapsam ve değişiklik yönetimi:</b> Kapsam dokümanı sözleşmenin eki olmalı; proje sırasında gelen yeni taleplerin nasıl fiyatlanacağı ve takvime etkisi baştan belirlenmeli.</span></li>
        <li>{ic}<span><b>Kabul kriterleri:</b> Bir aşamanın “bitti” sayılması için hangi testlerin geçilmesi gerektiği yazılı olmalı.</span></li>
        <li>{ic}<span><b>Ödeme planı:</b> Ödemelerin teslim edilen ve onaylanan aşamalara bağlanması iki taraf için de en adil yöntemdir.</span></li>
        <li>{ic}<span><b>Alan adı, sunucu ve hesaplar:</b> Alan adı, sunucu, uygulama mağazası ve bulut hesaplarının sizin adınıza açılması, ileride firma değiştirmeyi kolaylaştırır.</span></li>
        <li>{ic}<span><b>Garanti ve bakım:</b> Yayın sonrası ücretsiz hata düzeltme süresi, sonrasındaki bakım ücreti ve müdahale süreleri (SLA).</span></li>
        <li>{ic}<span><b>Kişisel veriler:</b> Yazılım kişisel veri işliyorsa, geliştirici ve barındırma firmasının KVKK kapsamındaki rolleri ve veri güvenliği yükümlülükleri tanımlanmalı.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Not:</b> Bu bölüm genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Sözleşmenizi imzalamadan önce bir hukukçuya göstermenizi öneririz.</div></div>'''),
        ('firma-secimi', 'Firma seçimi', 'Doğru yazılım firmasını nasıl seçersiniz?', '''
      <p>En düşük teklif çoğu zaman en pahalı sonuçtur; ama en yüksek teklif de kaliteyi garanti etmez. Firmaları karşılaştırırken şu sorulara cevap arayın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Canlıda çalışan işleri var mı?</b> Ekran görüntüsü değil, gerçekten kullanılan ürünler ve ulaşabileceğiniz referanslar isteyin.</span></li>
        <li>{ic}<span><b>Önce dinliyor mu?</b> İlk görüşmede fiyat vermek yerine sürecinizi anlamaya çalışan firma, doğru kapsamı çıkarma ihtimali en yüksek firmadır.</span></li>
        <li>{ic}<span><b>Güvenliği nasıl ele alıyor?</b> Yetkilendirme, şifreleme, yedekleme ve güncel tehdit listeleri (ör. OWASP Top 10) hakkında net cevap verebilmeli.</span></li>
        <li>{ic}<span><b>Teslim sonrası kim destek verecek?</b> Projeyi yapan ekip ile bakımı yapacak ekip aynı mı, iletişim kanalı ne?</span></li>
        <li>{ic}<span><b>Dokümantasyon veriyor mu?</b> Kurulum, mimari ve kullanıcı dokümanı olmadan teslim edilen yazılım, firmaya bağımlılık yaratır.</span></li>
      </ul>
      <p>Biz de CYF Tech olarak müşteri projelerinin yanında kendi ürünlerimizi geliştiriyoruz: apartman ve site yönetimi için KATSİS ile çok şubeli restoranlar için RestaurantBill, web, mobil ve masaüstü bileşenleri olan, sahada her gün kullanılan sistemler. Bu ürünleri <a href="projelerimiz.html">projelerimiz</a> sayfasında, müşteri işlerimizi ise <a href="referanslar.html">referanslarımızda</a> inceleyebilirsiniz.</p>
      <blockquote><div class="bi-q">{quote}</div>İyi bir yazılım ortağı size ne istediğinizi değil, neye ihtiyacınız olduğunu sorar.</blockquote>'''),
    ],
    check_title='// PROJEYE BAŞLAMADAN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Çözmek istediğiniz sorun ve ölçülebilir hedef yazılı mı?',
        'MVP kapsamı ve sonraki aşamalar ayrıldı mı?',
        'Kullanıcı rolleri ve öncelikli ekranlar belli mi?',
        'Entegre olunacak sistemlerin listesi çıkarıldı mı?',
        'Kaynak kod, haklar ve hesapların mülkiyeti sözleşmede net mi?',
        'Kabul kriterleri ve ödeme planı aşamalara bağlandı mı?',
        'Yayın sonrası bakım, yedekleme ve destek kapsamı tanımlı mı?',
    ],
    faq=[
        ('Özel yazılım geliştirmek ne kadar sürer?', 'Kapsama göre değişir. Tek bir iş akışını otomatikleştiren küçük bir panel birkaç haftada, web paneli ve mobil uygulamadan oluşan orta ölçekli bir sistem genellikle birkaç ayda hayata geçer. Süreyi en çok kısaltan şey net bir kapsam ve hızlı geri bildirimdir.'),
        ('Özel yazılım mı daha pahalı, hazır yazılım mı?', 'Başlangıçta özel yazılım daha pahalıdır. Ancak kullanıcı başına lisans ödenen, ek modüllerle büyüyen hazır çözümlerde birkaç yıllık toplam maliyet özel bir çözümü geçebilir. Karşılaştırmayı en az üç yıllık toplam sahip olma maliyeti üzerinden yapmak gerekir.'),
        ('Kaynak kod bana mı ait olur?', 'Bu tamamen sözleşmeye bağlıdır. Fikir ve Sanat Eserleri Kanunu gereği mali hakların devri yazılı olmalı ve devredilen haklar ayrı ayrı belirtilmelidir. Kaynak kodun teslimini ve kullanım haklarını sözleşmeye açıkça yazdırın.'),
        ('Küçük bir işletme için özel yazılım mantıklı mı?', 'Tekrarlayan işlere ciddi zaman harcanıyorsa ya da hazır yazılımlar sürecinize uymuyorsa evet. Küçük ve odaklı bir MVP ile başlamak, riski ve bütçeyi sınırlı tutar.'),
        ('Yazılım teslim edildikten sonra ne olur?', 'Yazılım düzenli bakım ister: güvenlik güncellemeleri, hata düzeltmeleri, sunucu ve yedekleme takibi, yeni ihtiyaçlar için geliştirmeler. Bu nedenle sözleşmede yayın sonrası destek kapsamı ve ücreti baştan belirlenmelidir.'),
    ],
    outro='''<p>Özel yazılım geliştirme, doğru zamanda ve doğru kapsamla yapıldığında işletmenize yalnızca zaman kazandırmaz; veriye dayalı karar almanızı, büyürken aynı ekip ile daha fazla iş yapmanızı sağlar. Başarının anahtarı, kodu yazmadan önce sorunu netleştirmek, küçük başlayıp gerçek kullanıma göre büyümek ve sözleşmeyi en baştan sağlam kurmaktır.</p>
      <p>Aklınızdaki projenin özel yazılım gerektirip gerektirmediğinden emin değilseniz, birlikte değerlendirelim. Sürecinizi dinleyip size en uygun yolu, gerekiyorsa hazır bir çözümü öneririz: <a href="iletisim.html">bizimle iletişime geçin</a>.</p>''',
    sources=[
        ('5846 sayılı Fikir ve Sanat Eserleri Kanunu (mevzuat.gov.tr)', 'https://www.mevzuat.gov.tr/mevzuatmetin/1.3.5846.pdf'),
        ('OWASP Top 10:2025', 'https://owasp.org/Top10/2025/'),
        ('KOSGEB destek programları', 'https://www.kosgeb.gov.tr'),
        ('Kişisel Verileri Koruma Kurumu', 'https://www.kvkk.gov.tr'),
    ],
)
