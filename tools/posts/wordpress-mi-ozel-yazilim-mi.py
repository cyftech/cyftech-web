POST = dict(
    slug='wordpress-mi-ozel-yazilim-mi',
    kat='Yazılım',
    keyword='WordPress mi özel yazılım mı',
    title='WordPress mi Özel Yazılım mı? Doğru Altyapıyı Seçme Rehberi',
    h1='WordPress mi özel yazılım mı? Doğru altyapıyı seçme rehberi.',
    crumb='YAZILIM',
    sure='10 dk',
    ozet='Hazır altyapı hızlı ve ekonomik, özel yazılım esnek ve size ait. WordPress ile özel yazılımı maliyet, güvenlik, hız ve büyüme açısından karşılaştırıp hangisinin size uygun olduğunu anlattık.',
    desc='WordPress mi özel yazılım mı? Hazır altyapı ile özel web yazılımını maliyet, güvenlik, performans ve ölçeklenebilirlik açısından karşılaştırın, doğru kararı verin.',
    lead='Web sitesi projelerinde ilk büyük yol ayrımı tasarım değil, altyapıdır: <b>WordPress gibi hazır bir sistem mi, yoksa size özel yazılmış bir yazılım mı?</b> Yanlış seçim, ya gereksiz yere pahalı bir proje ya da iki yıl sonra baştan yapılması gereken bir site demektir.',
    intro='''<p>İnternette bu sorunun cevabı genellikle taraflı verilir: WordPress uzmanları her şeyin WordPress ile yapılabileceğini, yazılım firmaları da hazır sistemlerin yetersiz olduğunu söyler. Gerçek ise işinizin ne gerektirdiğine bağlıdır.</p>
      <p>Bu rehberde hazır altyapı seçeneklerini, WordPress’in güçlü ve zayıf yanlarını, özel yazılımın ne zaman gerçekten gerekli olduğunu ve kararı verirken kullanabileceğiniz basit bir yöntemi anlatıyoruz. Biz iki yolu da uygulayan bir ekip olarak, hangisinin hangi durumda daha mantıklı olduğunu kendi projelerimizden örneklerle aktarıyoruz.</p>''',
    sections=[
        ('secenekler', 'Hangi seçenekler var?', 'Hazır altyapı ve özel yazılım: seçenekleri tanıyalım', '''
      <p>“Hazır altyapı” tek bir şey değildir. Karar vermeden önce masadaki seçenekleri ayırmak gerekir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Açık kaynak içerik yönetim sistemleri (CMS):</b> WordPress en yaygın örnektir. Yazılım ücretsizdir; tema, eklenti, barındırma ve geliştirme emeği için ödeme yaparsınız. Kendi sunucunuzda çalışır, kodu size aittir.</span></li>
        <li>{ic}<span><b>Kiralık site kurucular (SaaS):</b> Sürükle-bırak editörlü, aylık abonelikle çalışan platformlar. Hızlı başlarsınız ama altyapı sağlayıcıya aittir; aboneliği bıraktığınızda siteniz de gider.</span></li>
        <li>{ic}<span><b>Hazır e-ticaret paketleri:</b> Türkiye’de yaygın kiralık e-ticaret altyapıları; sanal POS, kargo ve pazaryeri entegrasyonlarıyla gelir, kapsamı paketle sınırlıdır.</span></li>
        <li>{ic}<span><b>Özel yazılım:</b> İşinizin kurallarına göre sıfırdan ya da bir framework üzerine geliştirilen sistem. Ne gerekiyorsa o vardır; fazlası yoktur.</span></li>
      </ul>
      <p>Bu yazıda karşılaştırmayı en sık sorulan ikili üzerinden, yani WordPress ile özel yazılım arasında yapacağız; ancak söylediklerimizin çoğu diğer hazır sistemler için de geçerlidir.</p>'''),
        ('wordpress-guclu', 'WordPress’in güçlü yanları', 'WordPress’in güçlü olduğu durumlar', '''
      <p>WordPress’in yaygınlığı tesadüf değil. W3Techs verilerine göre Ekim 2026 itibarıyla dünyadaki tüm web sitelerinin yaklaşık yüzde 39,5’i, içerik yönetim sistemi bilinen sitelerin ise yaklaşık yüzde 58’i WordPress kullanıyor. Bu yaygınlığın size sağladığı avantajlar şunlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Hızlı başlangıç:</b> Kurumsal tanıtım siteleri ve bloglar için temel ihtiyaçlar hazırdır; proje süresi kısalır.</span></li>
        <li>{ic}<span><b>Kolay içerik yönetimi:</b> Ekibiniz teknik bilgi olmadan sayfa, haber ve blog yazısı ekleyebilir.</span></li>
        <li>{ic}<span><b>Geniş eklenti ekosistemi:</b> Form, çok dil, SEO, galeri gibi yaygın ihtiyaçlar için hazır çözümler vardır.</span></li>
        <li>{ic}<span><b>Geliştirici bulmak kolay:</b> Ajansınızı değiştirdiğinizde siteyi devralacak birini bulmak görece kolaydır.</span></li>
      </ul>
      <p>Kısacası amacınız içerik yayınlamak, kurumsal kimliğinizi göstermek ve teklif toplamaksa, iyi kurulmuş bir WordPress sitesi çoğu KOBİ için fazlasıyla yeterlidir.</p>
      <p>Tipik örnekler: bir hukuk bürosunun tanıtım sitesi, bir mimarlık ofisinin proje portfolyosu, düzenli makale yayınlayan bir klinik ya da birkaç dilde ürün kataloğu gösteren bir üretici. Bu projelerde ziyaretçi içerik okur ve iletişime geçer; sistemin arka planda karmaşık bir iş yapması gerekmez. Burada önemli olan, temayı hafif tutmak, eklenti sayısını gerçekten gerekli olanlarla sınırlamak ve güncellemeleri düzenli yapmaktır.</p>'''),
        ('wordpress-sinirlar', 'WordPress’in sınırları', 'WordPress’in zayıf yanları: eklenti, güvenlik ve performans', '''
      <p>WordPress’in en büyük gücü olan eklenti ekosistemi, aynı zamanda en büyük riskidir. Her eklenti farklı bir geliştiriciden gelir, farklı bir güncelleme takvimine sahiptir ve sitenize ek kod yükler.</p>
      <p>Güvenlik firması Patchstack’in 2026 raporuna göre WordPress ekosisteminde 2025 yılında 11.334 yeni güvenlik açığı kaydedildi; bu açıkların yaklaşık yüzde 91’i eklentilerde, yüzde 9’u temalarda bulundu, WordPress çekirdeğinde ise yalnızca birkaç düşük öncelikli açık raporlandı. Aynı rapora göre açıkların yüzde 46’sı kamuya duyurulduğunda henüz bir yamaya sahip değildi.</p>
      <div class="bi-note">{warn}<div><b>Ne anlama geliyor?</b> Sorun WordPress’in kendisi değil, kontrolsüz eklenti kullanımı ve güncellenmeyen sitelerdir. 30 eklentili, bakımı yapılmayan bir WordPress sitesi ciddi bir risk taşır; az eklentili ve düzenli güncellenen bir site ise oldukça güvenlidir.</div></div>
      <p>Diğer sınırlar:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Performans:</b> Ağır sayfa oluşturucular ve çok amaçlı temalar, sayfaya kullanılmayan yüzlerce kilobayt kod ekleyebilir. Bu da Core Web Vitals skorlarını düşürür.</span></li>
        <li>{ic}<span><b>Karmaşık iş kuralları:</b> Rol bazlı yetkiler, onay akışları, özel fiyatlandırma ya da ERP entegrasyonu eklentilerle “yamalandığında” sistem kırılganlaşır.</span></li>
        <li>{ic}<span><b>Güncelleme bağımlılığı:</b> Bir eklentinin güncellemesi diğerini bozabilir; düzenli bakım şarttır.</span></li>
      </ul>'''),
        ('ozel-yazilim', 'Özel yazılım ne zaman?', 'Özel yazılım ne zaman gerçekten gerekli?', '''
      <p>Özel yazılım, “daha prestijli” olduğu için değil, işinizin hazır bir sistemin kalıbına sığmadığı durumlarda anlamlıdır. Şu işaretlerden birkaçını görüyorsanız özel yazılımı ciddi biçimde düşünmelisiniz:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Site aslında bir uygulama:</b> Kullanıcılar giriş yapıyor, kayıt oluşturuyor, işlem yapıyor, raporlara bakıyor.</span></li>
        <li>{ic}<span><b>Kendine özgü iş süreçleriniz var:</b> Teklif hesaplama, rezervasyon kuralları, bayi bazlı fiyat ya da çok adımlı onay akışları.</span></li>
        <li>{ic}<span><b>Yoğun entegrasyon gerekiyor:</b> ERP, muhasebe, e-Fatura, sanal POS, SMS ve kargo sistemleriyle sürekli veri alışverişi.</span></li>
        <li>{ic}<span><b>Aynı veri birden çok kanalda kullanılacak:</b> Web paneli, mobil uygulama ve masaüstü uygulaması tek bir sunucudan beslenecek.</span></li>
        <li>{ic}<span><b>Ürünün kendisi yazılım:</b> Abonelikle satacağınız bir platform kuruyorsunuz.</span></li>
      </ul>
      <p>Kendi ürünümüz KATSİS buna iyi bir örnektir: apartman ve site yönetiminde aidat ve borç takibi, kasa, duyuru, destek talepleri, sanal POS ve SMS aynı sistemde; web, iOS, Android ve Windows uygulamaları tek bir altyapıdan çalışıyor. Bunu bir CMS’in üzerine eklentilerle kurmak mümkün olmazdı. Bu tür projeleri <a href="projelerimiz.html">projelerimiz</a> sayfasında inceleyebilirsiniz.</p>
      <p>Özel yazılımın süreci, kapsam çıkarma ve aşamalı geliştirme yöntemlerini <a href="ozel-yazilim-gelistirme.html">özel yazılım geliştirme</a> yazımızda ayrıntılı anlattık.</p>'''),
        ('karsilastirma', 'Yan yana karşılaştırma', 'WordPress ve özel yazılım karşılaştırma tablosu', '''
      <table>
        <thead><tr><th>Kriter</th><th>WordPress (hazır altyapı)</th><th>Özel yazılım</th></tr></thead>
        <tbody>
          <tr><td>Başlangıç maliyeti</td><td>Düşük – orta</td><td>Orta – yüksek</td></tr>
          <tr><td>Yayına çıkış süresi</td><td>Birkaç hafta</td><td>Kapsama göre birkaç ay</td></tr>
          <tr><td>İçerik yönetimi</td><td>Hazır ve kolay</td><td>İhtiyaca göre tasarlanır</td></tr>
          <tr><td>Esneklik</td><td>Tema ve eklentilerle sınırlı</td><td>İş kurallarınıza birebir uyar</td></tr>
          <tr><td>Performans</td><td>İyi kurulumda iyi, ağır temalarda zayıf</td><td>Yalnızca gereken kod yüklenir</td></tr>
          <tr><td>Güvenlik</td><td>Eklenti sayısı ve bakımla doğrudan ilişkili</td><td>Saldırı yüzeyi küçük; güvenlik ekibin disiplinine bağlı</td></tr>
          <tr><td>Entegrasyon</td><td>Hazır eklenti varsa kolay, yoksa zor</td><td>Baştan tasarlanır</td></tr>
          <tr><td>Bakım</td><td>Sık güncelleme gerekir</td><td>Daha seyrek ama uzman ister</td></tr>
          <tr><td>Bağımlılık</td><td>Eklenti geliştiricilerine</td><td>Yazılımı geliştiren ekibe</td></tr>
        </tbody>
      </table>
      <p>Tabloda “kazanan” yok; her satır sizin önceliğinize göre ağırlık kazanır. Hızlı yayına çıkmak birinci önceliğinizse sol sütun, uzun vadeli esneklik ve entegrasyon birinci önceliğinizse sağ sütun öne çıkar.</p>'''),
        ('toplam-maliyet', 'Toplam sahip olma maliyeti', 'Maliyeti doğru hesaplamak: toplam sahip olma maliyeti', '''
      <p>Altyapı kararında en sık yapılan hata, yalnızca kurulum bedelini karşılaştırmaktır. Doğru karşılaştırma üç yıllık toplam maliyete bakar:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kurulum:</b> Tasarım, geliştirme, içerik girişi.</span></li>
        <li>{ic}<span><b>Lisanslar:</b> Premium tema ve eklentilerin yıllık yenilemeleri (çoğu döviz bazlıdır).</span></li>
        <li>{ic}<span><b>Bakım:</b> Güncellemeler, yedekleme, güvenlik takibi, hata düzeltmeleri.</span></li>
        <li>{ic}<span><b>Geçici çözümler:</b> Hazır sistemin yapamadığı işler için harcanan manuel emek ya da ek eklentiler.</span></li>
        <li>{ic}<span><b>Yeniden yapım riski:</b> Büyüdüğünüzde sistemi baştan kurmak zorunda kalırsanız ödeyeceğiniz bedel.</span></li>
      </ul>
      <p>Basit bir kurumsal site için WordPress üç yılın sonunda da genellikle daha ekonomiktir. Ancak sitenizde her gün manuel olarak yapılan işler varsa, özel yazılımın otomasyonla geri kazandırdığı zaman kısa sürede farkı kapatabilir. Fiyat kalemlerinin genel resmini <a href="web-sitesi-fiyatlari.html">web sitesi fiyatları</a> yazımızda bulabilirsiniz.</p>
      <blockquote><div class="bi-q">{quote}</div>En ucuz altyapı, iki yıl sonra baştan kurmak zorunda kalmadığınız altyapıdır.</blockquote>'''),
        ('yanilgilar', 'Yaygın yanılgılar', 'Altyapı seçiminde sık duyulan 4 yanılgı', '''
      <p>Teklif görüşmelerinde sık karşılaştığımız bazı inanışlar, kararı yanlış yöne çekebiliyor. En yaygın dördünü kısaca düzeltelim:</p>
      <h3>“WordPress ücretsiz, o halde site de ucuz olur.”</h3>
      <p>Yazılımın lisansı ücretsizdir ama sitenin tasarımı, kurulumu, içerik girişi, premium eklentiler, barındırma ve bakımı ücretlidir. Ücretsiz olan yalnızca başlangıç noktasıdır; iyi kurulmuş bir WordPress sitesi de profesyonel emek ister.</p>
      <h3>“Özel yazılım her zaman daha hızlıdır.”</h3>
      <p>Özel yazılım hızlı olma potansiyeline sahiptir çünkü yalnızca gereken kodu yükler. Ancak optimize edilmemiş görseller, kötü yazılmış veritabanı sorguları ya da zayıf bir sunucu, özel yazılımı da yavaşlatır. Hız, altyapının adından çok uygulamanın kalitesine bağlıdır.</p>
      <h3>“Özel yazılımda içeriği kendim güncelleyemem.”</h3>
      <p>İyi bir özel yazılım projesi, içerik ekibi için kullanımı kolay bir yönetim paneliyle birlikte gelir. Panelde neyin düzenlenebileceği projenin başında konuşulmalı ve kapsama yazılmalıdır.</p>
      <h3>“Hazır sistem seçersem ileride büyüyemem.”</h3>
      <p>Büyümek her zaman baştan yapmak anlamına gelmez. Doğru kurulmuş bir hazır altyapı, ihtiyaç doğduğunda özel bir modül ya da ayrı bir uygulama ile genişletilebilir. Önemli olan, başlangıçta bu genişlemeyi engelleyecek kısa yollara sapmamaktır.</p>'''),
        ('karar', 'Karar nasıl verilir?', 'Karar vermek için 5 adımlı yöntem', '''
      <p>Toplantılarda müşterilerimizle birlikte uyguladığımız basit yöntem şudur:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım —</b> Sitenin ziyaretçiye ve ekibinize yaptıracağı işleri madde madde yazın.</span></li>
        <li>{ic}<span><b>2. Adım —</b> Her maddeyi “içerik göstermek” ya da “işlem yapmak” olarak işaretleyin.</span></li>
        <li>{ic}<span><b>3. Adım —</b> Bağlanması gereken dış sistemleri (ERP, muhasebe, ödeme, kargo) listeleyin.</span></li>
        <li>{ic}<span><b>4. Adım —</b> İki yıl sonra sitenin ne yapıyor olmasını beklediğinizi yazın.</span></li>
        <li>{ic}<span><b>5. Adım —</b> Maddelerin çoğu “içerik göstermek” ise hazır altyapı; “işlem yapmak” ve entegrasyon ağırlıktaysa özel yazılım.</span></li>
      </ul>
      <p>Arada kalan projeler için hibrit bir yol da mümkündür: Kurumsal sayfalar ve blog bir CMS ile yönetilirken müşteri paneli, teklif motoru ya da bayi portalı ayrı bir özel uygulama olarak geliştirilir. Böylece içerik ekibi rahat çalışır, kritik iş süreçleri de sağlam bir altyapıda durur.</p>
      <div class="bi-note">{tip}<div><b>Kısa ipucu:</b> Hangi yolu seçerseniz seçin, kaynak kodun, alan adının ve sunucu erişiminin sizde olduğunu sözleşmeye yazdırın. Altyapı ne olursa olsun, sahiplik sizde olmalı.</div></div>'''),
    ],
    check_title='// ALTYAPI SEÇMEDEN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Sitenin yapacağı işler madde madde yazıldı mı?',
        'Entegre edilecek sistemler belli mi?',
        'İki yıllık büyüme planı konuşuldu mu?',
        'Kullanılacak eklenti ve lisanslar listelendi mi?',
        'Bakım ve güncelleme sorumlusu belli mi?',
        'Kaynak kod ve erişimlerin mülkiyeti sözleşmede mi?',
    ],
    faq=[
        ('WordPress güvenli mi?', 'WordPress çekirdeği düzenli güncellenen ve oldukça güvenli bir yazılımdır. Güvenlik açıklarının büyük çoğunluğu eklenti ve temalardan kaynaklanır. Az sayıda, güvenilir eklenti kullanılan ve düzenli bakımı yapılan bir WordPress sitesi güvenli şekilde işletilebilir.'),
        ('Özel yazılım web sitesi daha mı pahalı?', 'Başlangıç maliyeti genellikle daha yüksektir. Ancak lisans yenilemeleri, eklenti bağımlılığı ve manuel iş yükü hesaba katıldığında, karmaşık iş süreçleri olan projelerde özel yazılım üç-beş yıllık toplam maliyette daha ekonomik olabilir.'),
        ('WordPress SEO için yeterli mi?', 'Evet, doğru kurulduğunda WordPress SEO açısından yeterlidir. Sıralamayı altyapının adından çok içerik kalitesi, site hızı, teknik yapı ve kullanıcı deneyimi belirler. Özel yazılımda da aynı teknik SEO kurallarının baştan uygulanması gerekir.'),
        ('WordPress sitesi sonradan özel yazılıma taşınabilir mi?', 'Taşınabilir. İçerikler, görseller ve adres yapısı yeni sisteme aktarılır, değişen adresler için 301 yönlendirmesi yapılır. Planlı yapılan bir geçişte arama motoru görünürlüğü korunabilir.'),
        ('E-ticaret için WordPress mi, hazır paket mi, özel yazılım mı?', 'Az ürünlü, standart satış yapan bir mağaza için hazır paketler ya da WordPress tabanlı çözümler hızlı bir başlangıçtır. Bayi fiyatlandırması, ERP entegrasyonu veya kendine özgü sipariş akışı varsa özel yazılım daha sağlıklı sonuç verir.'),
    ],
    outro='''<p>WordPress mi özel yazılım mı sorusunun doğru cevabı, sitenizin içerik mi göstereceği yoksa iş mi yapacağıyla başlar. Tanıtım ve içerik odaklı projelerde iyi kurulmuş bir hazır altyapı hızlı ve ekonomiktir; iş süreçleri, entegrasyonlar ve çok kanallı kullanım varsa özel yazılım uzun vadede daha sağlam bir temel sunar.</p>
      <p>Projeniz için hangi yolun daha mantıklı olduğundan emin değilseniz, ihtiyaç listenizle birlikte <a href="iletisim.html">bizimle iletişime geçin</a>. Hem hazır altyapı hem özel yazılım geliştiren bir ekip olarak size tarafsız bir yol haritası çıkaralım; hizmet kapsamımızı <a href="web-cozumleri.html">web çözümleri</a> sayfasında da görebilirsiniz.</p>''',
    sources=[
        ('W3Techs — Usage statistics and market share of WordPress', 'https://w3techs.com/technologies/details/cm-wordpress'),
        ('Patchstack — State of WordPress Security in 2026', 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'),
        ('WordPress.org — Requirements', 'https://wordpress.org/about/requirements/'),
        ('web.dev — Core Web Vitals', 'https://web.dev/articles/vitals'),
        ('Google Search Central — Site taşıma ve URL değişiklikleri', 'https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes'),
    ],
)
