POST = dict(
    slug='mobil-uygulama-gelistirme-maliyeti',
    kat='Mobil Uygulama',
    keyword='mobil uygulama geliştirme maliyeti',
    title='Mobil Uygulama Geliştirme Maliyeti 2026: Fiyatı Belirleyen 8 Kalem',
    h1='Mobil uygulama geliştirme maliyeti 2026: fiyatı belirleyen 8 kalem.',
    crumb='MOBİL UYGULAMA',
    sure='8 dk',
    ozet='Bir mobil uygulamanın fiyatı neden 250 bin TL de olabilir, 3 milyon TL de? Kapsam, platform, backend, tasarım, mağaza ücretleri ve bakım kalemlerini tek tek açıkladık.',
    desc='Mobil uygulama geliştirme maliyeti 2026’da neye bağlı? Platform, özellikler, backend, App Store ve Google Play ücretleri, bakım giderleri ve bütçe ipuçları.',
    lead='“Bir uygulama yaptırmak ne kadar tutar?” sorusu, “bir ev yaptırmak ne kadar tutar?” sorusuna benzer: cevap metrekareye, malzemeye ve kaç kat olacağına bağlıdır. <b>Mobil uygulama geliştirme maliyeti</b> de birkaç temel karardan doğar ve bu kararları önceden bilmek bütçenizi korur.',
    intro='''<p>Bu yazıda bir mobil uygulamanın fiyatını oluşturan kalemleri tek tek açıyoruz: kapsam ve özellikler, iOS ve Android platform tercihi, arka uç (backend), tasarım, entegrasyonlar, test, mağaza ücretleri ve yayın sonrası bakım. Sonunda kabaca maliyet aralıklarını ve bütçeyi akıllıca kullanmak için önerilerimizi bulacaksınız.</p>
      <p>Bir not: Aşağıdaki TL tutarları, 2026 Türkiye koşullarında yaklaşık ve yol gösterici aralıklardır; kesin fiyat ancak özellik listesi netleştiğinde verilebilir.</p>''',
    sections=[
        ('kapsam', 'Kapsam ve özellikler', 'Maliyetin ana belirleyicisi: kapsam ve özellik listesi', '''
      <p>Bir uygulamanın fiyatını en çok etkileyen şey, ekran sayısından çok <b>iş kurallarının karmaşıklığıdır</b>. Beş ekranlı bir uygulama, arkasında anlık senkronizasyon, ödeme ve rol bazlı yetkilendirme varsa, yirmi ekranlı basit bir katalog uygulamasından daha pahalı olabilir.</p>
      <p>Bütçeyi büyüten tipik özellikler şunlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kullanıcı hesabı ve roller:</b> giriş, şifre sıfırlama, sosyal giriş, farklı yetkilere sahip kullanıcı tipleri.</span></li>
        <li>{ic}<span><b>Ödeme:</b> uygulama içi satın alma, abonelik veya sanal POS entegrasyonu.</span></li>
        <li>{ic}<span><b>Anlık özellikler:</b> mesajlaşma, canlı konum, anlık bildirim, çok cihaz arasında eşzamanlı veri.</span></li>
        <li>{ic}<span><b>Donanım kullanımı:</b> kamera, QR/barkod okuma, Bluetooth, NFC, arka planda konum.</span></li>
        <li>{ic}<span><b>Çevrimdışı çalışma:</b> internet yokken veri girip bağlantı gelince eşitlemek.</span></li>
        <li>{ic}<span><b>Yönetim paneli:</b> içeriği, kullanıcıları ve raporları yönetmek için web tabanlı bir panel.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Kısa ipucu:</b> Teklif istemeden önce özellikleri “olmazsa olmaz”, “olsa iyi olur” ve “sonra” diye üç sütuna ayırın. İlk sürümü yalnızca birinci sütunla çıkarmak (MVP), maliyeti ciddi ölçüde düşürür ve gerçek kullanıcı geri bildirimini erken getirir.</div></div>'''),
        ('platform', 'iOS, Android ya da ikisi', 'Platform seçimi: iOS, Android veya ikisi birden', '''
      <p>Türkiye’de mobil kullanıcıların yaklaşık dörtte üçü Android, dörtte biri iOS kullanıyor (Statcounter, 2026). Ancak kitlenize göre bu oran değişir; örneğin bazı premium hizmetlerde iOS kullanıcılarının payı ve harcama eğilimi daha yüksektir. Çoğu işletme için doğru cevap iki platformda birden yayında olmaktır.</p>
      <p>Burada maliyeti belirleyen asıl karar teknolojidir:</p>
      <table>
        <thead><tr><th>Yaklaşım</th><th>Maliyete etkisi</th><th>Ne zaman mantıklı?</th></tr></thead>
        <tbody>
          <tr><td>Native (Swift + Kotlin)</td><td>İki ayrı kod tabanı; en yüksek maliyet</td><td>Yoğun donanım kullanımı, en üst düzey performans</td></tr>
          <tr><td>Cross-platform (Flutter, React Native)</td><td>Tek kod tabanı; genellikle belirgin tasarruf</td><td>İş uygulamaları, e-ticaret, rezervasyon, çoğu KOBİ projesi</td></tr>
          <tr><td>PWA (web tabanlı uygulama)</td><td>En düşük maliyet; mağaza ve bazı cihaz özellikleri kısıtlı</td><td>Basit, içerik ağırlıklı ihtiyaçlar</td></tr>
        </tbody>
      </table>
      <p>Bu kararın ayrıntılarını <a href="native-mi-cross-platform-mu.html">native mi cross-platform mu yazımızda</a> karşılaştırdık.</p>'''),
        ('backend', 'Backend ve panel', 'Görünmeyen maliyet: backend, API ve yönetim paneli', '''
      <p>Uygulama müşterilerin gördüğü yüzdür; asıl iş çoğu zaman arka planda döner. Kullanıcı verilerini saklayan veritabanı, uygulamayla konuşan API, bildirim altyapısı ve işletmenin kullanacağı yönetim paneli, toplam bütçenin önemli bir kısmını oluşturabilir.</p>
      <p>Burada iki yol vardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Hazır servisler (BaaS):</b> Firebase gibi platformlar kimlik doğrulama, veritabanı ve bildirim gibi hazır yapı taşları sunar. Başlangıçta hızlı ve ucuzdur, ancak kullanıcı sayısı arttıkça aylık maliyet yükselebilir ve verilerin yurt dışında işlenmesi KVKK açısından ayrıca değerlendirilmelidir.</span></li>
        <li>{ic}<span><b>Özel backend:</b> İş kurallarınıza özel, kendi sunucunuzda çalışan bir altyapı. İlk yatırım daha yüksektir; ancak kontrol, ölçeklenme ve mevcut sistemlerinizle (ERP, muhasebe, CRM) entegrasyon kolaylaşır.</span></li>
      </ul>
      <p>Mevcut bir web siteniz veya yazılımınız varsa, aynı backend’i hem web hem mobil için kullanmak toplam maliyeti düşürür. Kendi ürünümüz KATSİS’te web paneli, iOS / Android ve Windows uygulamaları aynı altyapıyı paylaşır; bu sayede bir özellik bir kez yazılıp her yerde kullanılabilir. Ayrıntılar <a href="projelerimiz.html">projelerimiz sayfasında</a>.</p>'''),
        ('tasarim', 'Tasarım ve test', 'UI/UX tasarımı, test ve kalite güvencesi', '''
      <p>İyi bir mobil uygulama tasarımı yalnızca güzel ekranlar değildir: kullanıcı akışları, boş durumlar, hata mesajları, farklı ekran boyutları ve erişilebilirlik de tasarımın parçasıdır. Hazır bir arayüz kiti kullanmak maliyeti düşürür; markaya özel animasyonlu bir tasarım ise artırır.</p>
      <p>Test kalemi çoğu teklifte göz ardı edilir, oysa uygulamanın mağazada düşük puan alıp almayacağını belirler. Farklı Android üreticileri, eski iOS sürümleri, zayıf internet bağlantısı ve yarıda kalan ödeme senaryoları test edilmelidir. Teklif alırken test sürecinin nasıl yürütüleceğini ve kaç cihazda deneneceğini mutlaka sorun.</p>
      <h3>Fiyatın içinde kimin emeği var?</h3>
      <p>Bir mobil uygulama projesinde genellikle bir proje yöneticisi, bir UI/UX tasarımcısı, bir veya iki mobil geliştirici, bir backend geliştirici ve test uzmanı çalışır. Teklifteki rakam, kabaca bu ekibin projeye ayıracağı toplam saatin karşılığıdır. Bu yüzden “şu uygulamanın aynısı” istemek tek başına fiyat vermeye yetmez; asıl soru, o uygulamanın hangi parçalarının sizin için gerçekten gerekli olduğudur. Freelancer ile çalışmak saat ücretini düşürebilir, ancak tasarım, backend ve test gibi uzmanlıkların tek kişide toplanması proje riskini artırır.</p>
      <blockquote><div class="bi-q">{quote}</div>En pahalı uygulama, yayına çıktıktan sonra baştan yazılmak zorunda kalan uygulamadır.</blockquote>'''),
        ('magaza', 'Mağaza ücretleri', 'App Store ve Google Play ücretleri ve komisyonlar', '''
      <p>Geliştirme maliyetinin dışında, uygulamayı mağazalarda yayınlamanın da resmi ücretleri vardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Apple Developer Program:</b> üyelik yılı başına 99 ABD doları (bölgeye göre yerel para biriminde gösterilir). Şirket adına hesap açmak için D-U-N-S numarası gerekir.</span></li>
        <li>{ic}<span><b>Google Play Console:</b> tek seferlik 25 ABD doları kayıt ücreti. 13 Kasım 2023’ten sonra açılan kişisel geliştirici hesaplarında, yayına almadan önce en az 12 test kullanıcısıyla 14 gün kesintisiz kapalı test yapma şartı vardır; kurumsal hesap açmak bu adımı ortadan kaldırır.</span></li>
        <li>{ic}<span><b>Komisyonlar:</b> Uygulama içinde dijital içerik veya abonelik satıyorsanız mağazalar komisyon alır. Apple’ın Small Business Program’ı ve Google Play, yıllık 1 milyon doların altındaki gelirlerde %15 oranı uygular; üzerindeki gelirde standart oran %30’dur. Fiziksel ürün ve hizmet satışlarında (örneğin e-ticaret, yemek siparişi) bu komisyon uygulanmaz.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Geliştirici hesaplarını mutlaka kendi şirketiniz adına açtırın. Ajansın hesabında yayınlanan bir uygulamayı sonradan devralmak zaman alır ve bazen kullanıcı yorumlarınızı kaybetmenize neden olur.</div></div>'''),
        ('bakim', 'Bakım giderleri', 'Yayın sonrası: bakım, sunucu ve güncelleme maliyeti', '''
      <p>Uygulama yayına çıktığında bütçe bitmez. Apple ve Google her yıl yeni işletim sistemi sürümleri çıkarır, mağaza kuralları ve minimum SDK gereksinimleri değişir. Güncellenmeyen bir uygulama birkaç yıl içinde çökmeye başlayabilir ya da mağazadan kaldırılabilir.</p>
      <p>Yıllık bütçede şu kalemleri planlayın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Sunucu ve servisler:</b> hosting, veritabanı, bildirim, SMS ve e-posta servisleri, harita API’leri.</span></li>
        <li>{ic}<span><b>Teknik bakım:</b> işletim sistemi uyumluluğu, kütüphane güncellemeleri, güvenlik yamaları, hata düzeltmeleri.</span></li>
        <li>{ic}<span><b>Yeni özellikler:</b> kullanıcı geri bildirimine göre geliştirmeler.</span></li>
        <li>{ic}<span><b>Mağaza yenilemeleri:</b> Apple’ın yıllık üyelik ücreti.</span></li>
      </ul>
      <p>Sektörde yaygın bir pratik kural, yıllık bakım için ilk geliştirme bedelinin yaklaşık %15–20’si kadar bütçe ayırmaktır. Bu oran uygulamanın karmaşıklığına ve ne kadar hızlı yeni özellik eklemek istediğinize göre değişir.</p>'''),
        ('fiyat', 'Yaklaşık fiyat aralıkları', 'Mobil uygulama fiyatları: 2026 için yaklaşık aralıklar', '''
      <p>Aşağıdaki aralıklar, iki platformda cross-platform geliştirme, temel bir yönetim paneli ve yayın desteği varsayımıyla verilmiştir. Yaklaşık, 2026 itibarıyla Türkiye koşullarına göredir ve ekibin deneyimi, tasarım düzeyi ve entegrasyonlara göre değişir.</p>
      <table>
        <thead><tr><th>Uygulama tipi</th><th>Örnek</th><th>Yaklaşık bütçe</th><th>Süre</th></tr></thead>
        <tbody>
          <tr><td>Basit / MVP</td><td>Katalog, randevu talebi, bilgi uygulaması</td><td>250 bin – 600 bin TL</td><td>2–3 ay</td></tr>
          <tr><td>Orta</td><td>Üyelik, ödeme, bildirim, panel ve raporlar</td><td>600 bin – 1,5 milyon TL</td><td>3–6 ay</td></tr>
          <tr><td>Karmaşık</td><td>Anlık senkron, çok rollü yapı, ERP entegrasyonu, pazaryeri</td><td>1,5 milyon TL ve üzeri</td><td>6 ay ve üzeri</td></tr>
        </tbody>
      </table>
      <p>Çok düşük teklifler genellikle hazır şablonların az değiştirilmiş hâlidir; backend, test ve kaynak kod teslimi gibi kalemler teklifte yer almıyor olabilir. Teklifleri karşılaştırırken toplam rakamdan çok kapsamın aynı olup olmadığına bakın. Web sitesi bütçesi için de benzer bir döküm arıyorsanız <a href="web-sitesi-fiyatlari.html">web sitesi fiyatları yazımıza</a> göz atabilirsiniz.</p>'''),
        ('tasarruf', 'Bütçeyi doğru kullanmak', 'Mobil uygulama maliyetini düşürmenin 6 akıllı yolu', '''
      <p>Maliyeti düşürmek, kaliteden ödün vermek anlamına gelmek zorunda değil. Bütçenin büyük kısmı belirsizlikten ve sonradan değişen kararlardan kaybolur. Projelerde gördüğümüz en etkili tasarruf yöntemleri şunlar:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. MVP ile başlayın:</b> Uygulamanın tek bir ana işi en iyi şekilde yapmasını sağlayın. Gerçek kullanıcı verisi gelmeden yapılan özelliklerin önemli bir kısmı hiç kullanılmaz.</span></li>
        <li>{ic}<span><b>2. Tek kod tabanı tercih edin:</b> Ürününüz yoğun donanım kullanımı gerektirmiyorsa cross-platform geliştirme iki platformu tek ekiple çıkarmanızı sağlar.</span></li>
        <li>{ic}<span><b>3. Mevcut altyapıyı yeniden kullanın:</b> Web sitenizin veya iç yazılımınızın API’si varsa, mobil uygulamayı aynı altyapıya bağlamak sıfırdan backend yazmaktan çok daha ucuzdur.</span></li>
        <li>{ic}<span><b>4. Kapsamı yazılı hâle getirin:</b> Ekran listesi, kullanıcı rolleri ve örnek akışlar içeren birkaç sayfalık bir doküman, hem teklifleri karşılaştırılabilir kılar hem de proje ortasındaki “bu da olsun” taleplerini azaltır.</span></li>
        <li>{ic}<span><b>5. Hazır servisleri akıllıca seçin:</b> Harita, ödeme, SMS ve bildirim gibi işler için olgun servisler kullanmak geliştirme süresini kısaltır; ancak kullanıcı sayısı arttığında oluşacak aylık maliyeti de baştan hesaplayın.</span></li>
        <li>{ic}<span><b>6. Aşamalı ödeme ve teslim planı yapın:</b> Tasarım, ilk test sürümü, mağaza yayını gibi kilometre taşlarına bağlı ödemeler, ilerlemeyi görmenizi ve gerektiğinde yön değiştirmenizi kolaylaştırır.</span></li>
      </ul>
      <p>Son olarak, teklifte <b>kaynak kodun ve fikri hakların</b> kime ait olacağını mutlaka yazdırın. Kaynak kodu size teslim edilmeyen bir uygulama, ileride başka bir ekiple geliştirmek istediğinizde sıfırdan yazılmak zorunda kalabilir ve bu, bütçenin en büyük gizli riskidir.</p>'''),
    ],
    check_title='// TEKLİF ALMADAN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Özellikler “olmazsa olmaz / sonra” diye ayrıldı mı?',
        'Hedef platformlar ve teknoloji (native / cross-platform) belli mi?',
        'Backend ve yönetim paneli teklife dahil mi?',
        'Test süreci ve kapsamı yazılı mı?',
        'Geliştirici hesapları şirket adına mı açılacak?',
        'Kaynak kod ve fikri haklar kime ait olacak?',
        'Yayın sonrası bakım ve sunucu maliyetleri planlandı mı?',
    ],
    faq=[
        ('Bir mobil uygulama yaptırmak ne kadar sürer?', 'Basit bir MVP genellikle 2–3 ayda, ödeme ve panel içeren orta ölçekli bir uygulama 3–6 ayda tamamlanır. Karmaşık entegrasyonlar ve çok rollü yapılar bu süreyi uzatır. İçeriklerin ve onay süreçlerinin zamanında ilerlemesi de takvimi doğrudan etkiler.'),
        ('App Store ve Google Play’de uygulama yayınlamak ücretli mi?', 'Evet. Apple Developer Program üyelik yılı başına 99 ABD dolarıdır. Google Play Console için ise tek seferlik 25 ABD doları kayıt ücreti ödenir. Uygulama içinde dijital içerik satışı varsa ayrıca komisyon uygulanır.'),
        ('Hem iOS hem Android uygulama yaptırmak iki kat mı pahalı?', 'Native geliştirmede iki ayrı kod tabanı yazıldığı için maliyet ikiye yaklaşabilir. Flutter veya React Native gibi cross-platform teknolojilerde tek kod tabanı kullanıldığından, iki platform genellikle tek platformun iki katından belirgin şekilde daha düşük maliyetle çıkar.'),
        ('Uygulamanın yıllık bakım maliyeti ne kadardır?', 'Sektörde yaygın pratik kural, ilk geliştirme bedelinin yaklaşık yüzde 15–20’sinin yıllık bakım ve küçük geliştirmeler için ayrılmasıdır. Buna sunucu, SMS ve bildirim gibi servislerin aylık ücretleri ile Apple’ın yıllık üyelik bedeli eklenir.'),
        ('Ücretsiz uygulama yapma araçları işe yarar mı?', 'Kodsuz araçlar fikir doğrulamak veya basit iç kullanım uygulamaları için işe yarayabilir. Ancak özel iş kuralları, entegrasyonlar, performans ve ölçeklenme gerektiğinde sınırlara hızla ulaşılır ve platforma bağımlılık oluşur.'),
    ],
    outro='''<p>Mobil uygulama geliştirme maliyeti tek bir rakam değil, verdiğiniz kararların toplamıdır: neyi ilk sürüme alacağınız, hangi teknolojiyi seçeceğiniz, backend’i nasıl kuracağınız ve yayından sonra uygulamaya nasıl bakacağınız. Bu kararları baştan netleştirmek, hem bütçe sürprizlerini önler hem de uygulamanın gerçekten kullanılmasını sağlar. CYF Tech olarak iOS ve Android için <a href="mobil-uygulamalar.html">mobil uygulama geliştirme hizmetimizde</a> önce kapsamı sizinle birlikte netleştiriyor, ardından şeffaf bir teklif sunuyoruz. Fikrinizi konuşmak için <a href="iletisim.html">bize yazın</a>.</p>''',
    sources=[
        ('Apple — Developer Program kayıt ve ücret', 'https://developer.apple.com/programs/enroll/'),
        ('Apple — App Store Small Business Program', 'https://developer.apple.com/app-store/small-business-program/'),
        ('Google Play Console Yardım — Geliştirici hesabı kaydı', 'https://support.google.com/googleplay/android-developer/answer/6112435?hl=tr'),
        ('Google Play Console Yardım — Kişisel hesaplar için test şartları', 'https://support.google.com/googleplay/android-developer/answer/14151465?hl=tr'),
        ('Google Play Console Yardım — Hizmet ücretleri', 'https://support.google.com/googleplay/android-developer/answer/112622?hl=tr'),
        ('Statcounter — Türkiye mobil işletim sistemi payları', 'https://gs.statcounter.com/os-market-share/mobile/turkey'),
    ],
)
