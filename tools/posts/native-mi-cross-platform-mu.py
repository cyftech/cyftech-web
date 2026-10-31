POST = dict(
    slug='native-mi-cross-platform-mu',
    kat='Mobil Uygulama',
    keyword='native mi cross platform mu',
    title='Native mi Cross-Platform mu? Flutter ve React Native Karşılaştırması',
    h1='Native mi cross-platform mu? Flutter ve React Native karşılaştırması.',
    crumb='MOBİL UYGULAMA',
    sure='8 dk',
    ozet='Swift ve Kotlin ile iki ayrı uygulama mı, Flutter veya React Native ile tek kod tabanı mı? Performans, maliyet, ekip ve bakım açısından doğru kararı vermenize yardımcı olacak bir karşılaştırma.',
    desc='Native mi cross-platform mu? Flutter, React Native ve Kotlin Multiplatform’u performans, maliyet, bakım ve ekip açısından karşılaştırdık; hangi proje için hangisi?',
    lead='Mobil uygulama projesine başlayan herkes er geç aynı soruyla karşılaşır: <b>native mi cross-platform mu</b>? Bu tercih yalnızca bir teknoloji seçimi değil; bütçeyi, takvimi, ekibi ve uygulamanın önümüzdeki beş yılını belirleyen bir iş kararıdır.',
    intro='''<p>Birkaç yıl öncesine kadar cevap daha basitti: performans istiyorsanız native, hızlı ve ucuz istiyorsanız cross-platform. Bugün Flutter ve React Native olgunlaştı, Kotlin Multiplatform ise iOS tarafında da kararlı sürüme ulaştı. Bu yazıda yaklaşımları sade bir dille açıklıyor, Flutter ile React Native’i karşılaştırıyor ve hangi projede hangisinin mantıklı olduğunu örneklerle anlatıyoruz.</p>''',
    sections=[
        ('kavramlar', 'Native ve cross-platform', 'Native ve cross-platform uygulama ne demek?', '''
      <p><b>Native uygulama</b>, her işletim sistemi için o platformun kendi diliyle ve araçlarıyla ayrı ayrı yazılan uygulamadır: iOS için Swift ve SwiftUI, Android için Kotlin ve Jetpack Compose. Sonuçta iki ayrı kod tabanı, çoğu zaman iki ayrı ekip olur.</p>
      <p><b>Cross-platform uygulama</b> ise tek bir kod tabanından hem iOS hem Android sürümü üretir. Bugün öne çıkan seçenekler şunlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Flutter:</b> Google’ın geliştirdiği, Dart dilini kullanan çatı. Arayüzü kendi çizim motoruyla oluşturur; bu sayede her cihazda piksel piksel aynı görünüm elde edilir.</span></li>
        <li>{ic}<span><b>React Native:</b> Meta’nın geliştirdiği, JavaScript / TypeScript ve React kullanan çatı. Platformun yerel arayüz bileşenlerini kullanır. 0.76 sürümüyle birlikte “Yeni Mimari” varsayılan hâle geldi ve JavaScript ile yerel kod arasındaki eski köprü yapısının darboğazları büyük ölçüde giderildi.</span></li>
        <li>{ic}<span><b>Kotlin Multiplatform:</b> JetBrains’in çözümü. İş mantığını Kotlin ile paylaşıp arayüzü isteğe göre native ya da Compose Multiplatform ile yazmaya imkân verir. Compose Multiplatform’un iOS desteği Mayıs 2025’te kararlı sürüme ulaştı.</span></li>
      </ul>
      <p>Bir de <b>PWA</b> (progresif web uygulaması) seçeneği var: tarayıcıda çalışan, ana ekrana eklenebilen web uygulaması. Mağaza zorunluluğu olmayan basit ihtiyaçlar için iyi bir başlangıç olabilir, ancak bildirim ve cihaz özelliklerinde, özellikle iOS’ta, kısıtları vardır.</p>'''),
        ('karsilastirma', 'Karşılaştırma tablosu', 'Native vs cross-platform: 7 kriterde karşılaştırma', '''
      <p>Kararı kolaylaştırmak için iki yaklaşımı iş açısından en önemli kriterlerde yan yana koyduk:</p>
      <table>
        <thead><tr><th>Kriter</th><th>Native (Swift + Kotlin)</th><th>Cross-platform (Flutter / React Native)</th></tr></thead>
        <tbody>
          <tr><td>Geliştirme maliyeti</td><td>Yüksek; iki ayrı kod tabanı</td><td>Daha düşük; çoğu kod iki platformda ortak</td></tr>
          <tr><td>Pazara çıkış süresi</td><td>Daha uzun</td><td>Daha kısa; iki platform aynı anda yayınlanır</td></tr>
          <tr><td>Performans</td><td>En iyi; özellikle grafik ve donanım yoğun işlerde</td><td>İş uygulamalarının büyük çoğunluğu için fark edilmeyecek düzeyde</td></tr>
          <tr><td>Yeni platform özelliklerine erişim</td><td>İlk gün</td><td>Genellikle eklenti veya yerel kod köprüsüyle, bazen gecikmeli</td></tr>
          <tr><td>Görünüm ve his</td><td>Platformun doğal tasarım dili</td><td>Flutter’da tutarlı marka görünümü; React Native’de yerel bileşenler</td></tr>
          <tr><td>Bakım</td><td>Her özellik iki kez güncellenir</td><td>Tek yerde güncelleme; çatı sürümlerini takip etmek gerekir</td></tr>
          <tr><td>Ekip</td><td>iOS ve Android uzmanları ayrı ayrı</td><td>Tek ekip; yine de yerel tarafı bilen biri gerekli</td></tr>
        </tbody>
      </table>
      <p>Tablodan görüleceği üzere cross-platform çoğu kriterde iş açısından avantajlıdır; native’in öne geçtiği yer ise performansın ve platforma özgü özelliklerin ürünün kalbinde olduğu projelerdir.</p>'''),
        ('flutter-rn', 'Flutter mı React Native mi', 'Flutter mı React Native mi? Farkları ve seçim kriterleri', '''
      <p>Cross-platform’a karar verdiyseniz ikinci soru gelir. İki çatı da olgun, geniş topluluğa sahip ve büyük şirketlerin üretim uygulamalarında kullanılıyor. Seçimi belirleyen asıl etkenler şunlardır:</p>
      <h3>Flutter öne çıkar, eğer…</h3>
      <ul class="bi-list">
        <li>{ic}<span>Markaya özel, animasyonlu ve her cihazda birebir aynı görünen bir arayüz istiyorsanız.</span></li>
        <li>{ic}<span>Aynı kodla mobilin yanında web ve masaüstü (Windows, macOS, Linux) hedefleri de düşünüyorsanız.</span></li>
        <li>{ic}<span>Düşük donanımlı Android cihazlarda da akıcı çalışan, öngörülebilir bir performans önemliyse.</span></li>
      </ul>
      <h3>React Native öne çıkar, eğer…</h3>
      <ul class="bi-list">
        <li>{ic}<span>Ekibiniz veya mevcut web projeniz zaten React ve TypeScript kullanıyorsa; bilgi ve kod paylaşımı kolaylaşır.</span></li>
        <li>{ic}<span>Uygulamanın her platformda o platformun kendi bileşenleriyle görünmesini istiyorsanız.</span></li>
        <li>{ic}<span>JavaScript ekosistemindeki geniş kütüphane havuzundan yararlanmak, geliştirici bulmayı kolaylaştırmak istiyorsanız.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Kısa ipucu:</b> “Hangisi daha hızlı?” tartışmalarına takılmayın. Bağımsız ölçümlerde iki çatı arasındaki fark, kötü yazılmış bir liste ekranı veya optimize edilmemiş görsellerin yarattığı farktan çoğu zaman küçüktür. Ekibin deneyimi, seçilen çatıdan daha belirleyicidir.</div></div>'''),
        ('native-ne-zaman', 'Native ne zaman şart?', 'Native geliştirme hangi projelerde gerçekten gerekli?', '''
      <p>Cross-platform her işi görür mü? Hayır. Aşağıdaki durumlarda native geliştirme ya da en azından önemli bir native katman gerekir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Yoğun grafik ve gerçek zamanlı işlem:</b> oyunlar, artırılmış gerçeklik, gelişmiş kamera ve video düzenleme.</span></li>
        <li>{ic}<span><b>Derin donanım entegrasyonu:</b> özel Bluetooth cihazları, tıbbi sensörler, düşük seviyeli ses işleme, sürekli arka plan çalışması.</span></li>
        <li>{ic}<span><b>Platform özelliklerine ilk gün erişim:</b> widget’lar, saat uygulamaları, Apple’ın veya Google’ın yeni duyurduğu API’ler ürününüzün merkezindeyse.</span></li>
        <li>{ic}<span><b>Çok büyük ölçek:</b> milyonlarca kullanıcısı olan, her milisaniyenin ve uygulama boyutunun önemli olduğu ürünler.</span></li>
      </ul>
      <p>Bu durumlar dışında kalan e-ticaret, rezervasyon, saha ekipleri, müşteri sadakati, kurumsal iç uygulamalar ve yönetim panelleri gibi projelerin büyük çoğunluğu cross-platform ile rahatlıkla geliştirilebilir. Üstelik cross-platform uygulamalarda gerektiğinde belirli bir ekranı veya özelliği native kodla yazmak da mümkündür; seçim siyah ya da beyaz değildir.</p>
      <blockquote><div class="bi-q">{quote}</div>Doğru teknoloji, en popüler olan değil; ürününüzün en kritik özelliğini en az riskle hayata geçiren teknolojidir.</blockquote>'''),
        ('maliyet', 'Maliyet ve bakım', 'Maliyet, bakım ve uzun vadeli riskler', '''
      <p>Teknoloji kararı ilk yatırımdan çok <b>toplam sahip olma maliyetini</b> etkiler. Native’de her yeni özellik iki kez yazılır, iki kez test edilir; hata düzeltmeleri de öyle. Cross-platform’da ortak kod oranı arttıkça bu yük azalır.</p>
      <p>Öte yandan cross-platform’un kendine özgü riskleri vardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Çatı güncellemeleri:</b> Flutter veya React Native’in büyük sürüm geçişleri ve üçüncü taraf eklentilerin bu sürümlere uyumu düzenli emek ister.</span></li>
        <li>{ic}<span><b>Eklenti bağımlılığı:</b> Bakımı bırakılmış bir eklenti, kritik bir özelliği kilitleyebilir. Eklenti seçerken güncellenme sıklığına ve topluluğa bakmak gerekir.</span></li>
        <li>{ic}<span><b>Uygulama boyutu:</b> Cross-platform uygulamalar, çatı motorunu da içerdikleri için native muadillerinden biraz daha büyük olabilir.</span></li>
      </ul>
      <p>Bütçe tarafını ayrıntılı merak ediyorsanız <a href="mobil-uygulama-gelistirme-maliyeti.html">mobil uygulama geliştirme maliyeti yazımızda</a> fiyatı belirleyen kalemleri tek tek açtık.</p>'''),
        ('senaryolar', 'Örnek senaryolar', 'Dört örnek proje: hangi teknoloji neden seçilir?', '''
      <p>Soyut kriterler yerine somut örneklerle düşünmek kararı kolaylaştırır. Sık karşılaştığımız dört proje tipini ve bizim değerlendirmemizi aşağıda bulabilirsiniz:</p>
      <h3>Restoran sipariş ve sadakat uygulaması</h3>
      <p>Menü, sepet, online ödeme, kampanya bildirimi ve puan sistemi. Donanım ihtiyacı neredeyse yok, iki platformda aynı anda çıkmak ve markaya özel bir görünüm önemli. Burada Flutter veya React Native ile tek kod tabanı açık ara en verimli seçimdir.</p>
      <h3>Saha ekibi uygulaması</h3>
      <p>Teknisyenler iş emirlerini görüyor, fotoğraf çekiyor, barkod okutuyor, bazen internetin olmadığı bodrum katlarda çalışıyor. Çevrimdışı veri saklama ve eşitleme kritik. Cross-platform bu ihtiyacı karşılar; ancak çevrimdışı mimariyi baştan doğru kurmak, teknoloji seçiminden daha önemlidir.</p>
      <h3>Özel bir Bluetooth cihazıyla konuşan sağlık uygulaması</h3>
      <p>Uygulamanın kalbi, cihazla sürekli ve güvenilir veri alışverişi; arka planda çalışması da gerekiyor. Burada native geliştirme ya da en azından cihaz iletişimini native modüllerle yazan hibrit bir yapı daha güvenli bir tercihtir. Sağlık verisi işlendiği için KVKK tarafındaki özel nitelikli veri kuralları da ayrıca planlanmalıdır.</p>
      <h3>Kurumsal iç kullanım uygulaması</h3>
      <p>Çalışanların izin talebi, onay akışı ve duyuruları takip ettiği bir uygulama. Kullanıcı sayısı belli, mağaza görünürlüğü önemsiz. Bütçe kısıtlıysa bir PWA ile başlamak, ihtiyaç büyüdüğünde cross-platform bir uygulamaya geçmek mantıklı olabilir. Böyle durumlarda <a href="masaustu-mu-web-uygulamasi-mi.html">masaüstü mü web uygulaması mı</a> sorusu da gündeme gelir.</p>'''),
        ('karar', 'Karar rehberi', '5 soruda doğru mobil teknoloji kararı', '''
      <p>Kararı kendi projeniz için vermek üzere aşağıdaki soruları sırayla yanıtlayın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Soru —</b> Uygulamanın kalbinde yoğun grafik, gerçek zamanlı medya veya özel donanım var mı? Evetse native’e ciddi olarak bakın.</span></li>
        <li>{ic}<span><b>2. Soru —</b> İki platformda aynı anda ve sınırlı bütçeyle mi çıkmanız gerekiyor? Evetse cross-platform öne geçer.</span></li>
        <li>{ic}<span><b>3. Soru —</b> Mevcut ekibiniz veya web projeniz hangi teknolojiyi kullanıyor? React tabanlıysa React Native, sıfırdan başlıyorsanız Flutter güçlü bir aday.</span></li>
        <li>{ic}<span><b>4. Soru —</b> Aynı ürünü web ve masaüstünde de sunacak mısınız? Flutter tek kodla daha fazla hedefi kapsar; ortak bir backend ise her durumda şarttır.</span></li>
        <li>{ic}<span><b>5. Soru —</b> Uygulamanın en az üç yıl bakımını kim yapacak? Seçilen teknolojide geliştirici bulabilecek misiniz?</span></li>
      </ul>
      <p>Kendi ürünlerimizde de bu soruları sorduk. Örneğin apartman ve site yönetim yazılımımız KATSİS’in web paneli, iOS / Android uygulamaları ve Windows uygulaması aynı altyapıya bağlı. Arayüzü her platformdaki kullanıcının ihtiyacına göre kurgulayıp veriyi tek merkezde toplamak, bakım yükünü önemli ölçüde azalttı. Ayrıntılar için <a href="projelerimiz.html">projelerimize</a> göz atabilirsiniz.</p>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Teknoloji kararını ajansın en iyi bildiği araca göre değil, ürününüzün ihtiyacına göre verin. Teklif aldığınız firmaya “neden bu teknolojiyi öneriyorsunuz, alternatifi ne olurdu?” diye sorun; iyi bir ekip bu soruya somut gerekçelerle cevap verir.</div></div>'''),
    ],
    check_title='// TEKNOLOJİ SEÇMEDEN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Uygulamanın en kritik özelliği yazılı olarak belirlendi mi?',
        'Donanım ve performans gereksinimleri netleşti mi?',
        'İki platform aynı anda mı yayınlanacak?',
        'Mevcut ekip ve web altyapısı hangi teknolojiyi kullanıyor?',
        'Seçilen teknolojide uzun vadeli geliştirici bulunabilir mi?',
        'Kullanılacak eklentilerin bakım durumu kontrol edildi mi?',
    ],
    faq=[
        ('Cross-platform uygulamalar native kadar hızlı mı?', 'İş uygulamalarının büyük çoğunluğunda kullanıcı farkı hissetmez. Flutter kendi çizim motoruyla, React Native ise yeni mimarisiyle akıcı bir deneyim sunar. Yoğun grafik, oyun veya gerçek zamanlı medya işleme gibi durumlarda ise native hâlâ avantajlıdır.'),
        ('Flutter mı daha iyi, React Native mi?', 'Tek bir doğru yoktur. Markaya özel, her cihazda aynı görünen arayüz ve mobilin yanında masaüstü hedefleri için Flutter; React ve TypeScript bilen bir ekip veya mevcut React web projesi varsa React Native genellikle daha mantıklıdır.'),
        ('Cross-platform ile geliştirilen uygulama App Store ve Google Play’de yayınlanabilir mi?', 'Evet. Flutter ve React Native ile geliştirilen uygulamalar, native uygulamalar gibi derlenir ve her iki mağazada da aynı kurallarla yayınlanır. Kullanıcı açısından uygulamanın hangi teknolojiyle yazıldığı görünmez.'),
        ('Cross-platform ile başlayıp sonra native’e geçmek mümkün mü?', 'Mümkündür ama bu genellikle uygulamanın yeniden yazılması demektir. Bunun yerine cross-platform uygulamanın içinde ihtiyaç duyulan belirli ekranları veya modülleri native kodla yazmak çoğu zaman daha ekonomik bir yoldur.'),
        ('Mobil uygulama ile web sitesi aynı altyapıyı kullanabilir mi?', 'Evet ve çoğu zaman kullanmalıdır. Hangi mobil teknoloji seçilirse seçilsin, uygulama ile web sitesi veya yönetim paneli aynı API ve veritabanına bağlanabilir. React Native kullanılıyorsa, React tabanlı bir web projesiyle iş mantığının bir kısmı da paylaşılabilir. Bu yaklaşım bakım maliyetini düşürür ve verilerin tek merkezde tutarlı kalmasını sağlar.'),
        ('Kotlin Multiplatform nedir, ne zaman tercih edilir?', 'Kotlin Multiplatform, iş mantığını iOS ve Android arasında paylaşırken arayüzü native veya Compose Multiplatform ile yazmaya imkân veren bir yaklaşımdır. Güçlü bir Android ekibi olan ve native his kaybetmeden kod paylaşmak isteyen projeler için uygundur.'),
    ],
    outro='''<p>Native mi cross-platform mu sorusunun evrensel bir cevabı yok, ama doğru soruları sorduğunuzda cevap genellikle netleşir. Çoğu işletme uygulaması için Flutter veya React Native ile tek kod tabanı, hem bütçe hem takvim açısından en verimli yoldur; performansın ve donanımın ürünün kalbinde olduğu projelerde ise native yatırım karşılığını verir. Projeniz için hangi yaklaşımın uygun olduğunu birlikte değerlendirmek isterseniz <a href="mobil-uygulamalar.html">mobil uygulama hizmetlerimize</a> göz atabilir ya da <a href="iletisim.html">bizimle iletişime geçebilirsiniz</a>.</p>''',
    sources=[
        ('React Native — 0.76 ve Yeni Mimari duyurusu', 'https://reactnative.dev/blog/2024/10/23/release-0.76-new-architecture'),
        ('JetBrains — Compose Multiplatform 1.8.0: iOS desteği kararlı', 'https://blog.jetbrains.com/kotlin/2025/05/compose-multiplatform-1-8-0-released-compose-multiplatform-for-ios-is-stable-and-production-ready/'),
        ('Flutter — Resmî dokümantasyon', 'https://docs.flutter.dev/'),
        ('Android Developers — Jetpack Compose', 'https://developer.android.com/compose'),
        ('Apple Developer — SwiftUI', 'https://developer.apple.com/swiftui/'),
        ('web.dev — Progressive Web Apps', 'https://web.dev/explore/progressive-web-apps'),
    ],
)
