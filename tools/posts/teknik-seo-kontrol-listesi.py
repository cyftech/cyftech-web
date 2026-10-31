POST = dict(
    slug='teknik-seo-kontrol-listesi',
    kat='SEO',
    keyword='teknik SEO',
    title='Teknik SEO Kontrol Listesi 2026: Sitenizi Denetlemek İçin 30 Madde',
    h1='Teknik SEO kontrol listesi 2026: sitenizi denetlemek için 30 madde.',
    crumb='SEO',
    sure='8 dk',
    ozet='İçeriğiniz iyi ama Google sayfalarınızı görmüyorsa sorun büyük ihtimalle tekniktir. Tarama, dizine ekleme, hız, yapılandırılmış veri ve yapay zekâ tarayıcıları için madde madde denetim listesi.',
    desc='Teknik SEO kontrol listesi: robots.txt, site haritası, canonical, Core Web Vitals, mobil dizin, hreflang ve yapılandırılmış veri için 30 maddelik 2026 rehberi.',
    lead='En iyi yazılmış hizmet sayfası bile, Google onu tarayamıyor ya da dizine ekleyemiyorsa arama sonuçlarında yoktur. <b>Teknik SEO</b>, içeriğinizle Google arasındaki yolu temizleme işidir ve çoğu sorun birkaç dakikalık bir kontrolle bulunabilir.',
    intro='''<p>Bu yazıyı bir denetim listesi olarak hazırladık. Maddeleri Google’ın arama sürecindeki sıraya göre grupladık: önce tarama, sonra dizine ekleme, sonra sayfa deneyimi ve zengin sonuçlar. Her grubun sonunda hangi araçla kontrol edeceğinizi de yazdık. Kaynak olarak birincil olarak Google Search Central belgelerini kullandık.</p>
      <p>SEO’nun teknik dışındaki ayaklarını merak ediyorsanız <a href="seo-nedir.html">SEO nedir</a> yazımız genel çerçeveyi veriyor. Burada doğrudan sitenin altyapısına iniyoruz.</p>''',
    sections=[
        ('arac-kutusu', 'Araç kutusu', 'Teknik SEO denetimine başlamadan önce: ücretsiz araçlar', '''
      <p>Teknik SEO denetimi için pahalı yazılımlara gerek yok. Başlangıçta şu ücretsiz araçlar işin büyük kısmını görür:</p>
      <table>
        <thead><tr><th>Araç</th><th>Ne için?</th></tr></thead>
        <tbody>
          <tr><td><b>Google Search Console</b></td><td>Dizine ekleme durumu, URL denetimi, site haritası, Core Web Vitals ve manuel işlem bildirimleri</td></tr>
          <tr><td><b>PageSpeed Insights</b></td><td>Gerçek kullanıcı verisiyle (CrUX) ve laboratuvar testiyle hız ölçümü</td></tr>
          <tr><td><b>Zengin Sonuç Testi</b></td><td>Yapılandırılmış verinin hatasız olup olmadığı ve zengin sonuca uygunluğu</td></tr>
          <tr><td><b>Tarayıcı geliştirici araçları</b></td><td>Sayfanın kaynak kodu, yönlendirmeler, HTTP durum kodları, meta etiketler</td></tr>
          <tr><td><b>Bir site tarayıcısı</b></td><td>Tüm siteyi tarayıp kırık bağlantı, yinelenen başlık ve yönlendirme zinciri bulmak (birçoğunun ücretsiz sürümü küçük siteler için yeterli)</td></tr>
        </tbody>
      </table>
      <div class="bi-note">{tip}<div><b>Başlangıç noktası:</b> Search Console’daki “Sayfa dizine ekleme” raporu, sitenizin teknik sağlığının özetidir. Hangi sayfaların neden dizinde olmadığını tek ekranda gösterir.</div></div>'''),
        ('tarama', 'Tarama', 'Tarama: Google sitenize ulaşabiliyor mu?', '''
      <p>Googlebot’un sayfalarınıza erişebilmesi her şeyin ön koşuludur. Kontrol edin:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. robots.txt doğru mu?</b> alanadiniz.com/robots.txt adresini açın. Yayına alınırken geliştirme ortamından kalan bir “Disallow: /” satırı, tüm siteyi taramaya kapatır. Şaşırtıcı derecede sık görülen bir hatadır.</span></li>
        <li>{ic}<span><b>2. robots.txt’yi gizleme aracı olarak kullanmıyor musunuz?</b> Google’a göre robots.txt taramayı yönetir, sayfayı arama sonuçlarından gizlemez. Engellenen bir sayfa başka sitelerden bağlantı alıyorsa içeriği olmadan da dizinde görünebilir. Gizlemek için noindex kullanılır.</span></li>
        <li>{ic}<span><b>3. CSS ve JavaScript dosyaları açık mı?</b> Google sayfayı bir tarayıcı gibi işler; stil ve betik dosyalarını engellerseniz sayfayı doğru göremez.</span></li>
        <li>{ic}<span><b>4. Sunucu ve CDN Googlebot’u engellemiyor mu?</b> Güvenlik duvarı veya bot koruması ayarları, Googlebot’u yanlışlıkla saldırgan sanabilir. Google’ın yapay zekâ özellikleri belgesi de taramanın yalnızca robots.txt’de değil, CDN ve barındırma altyapısında da açık olmasını öneriyor.</span></li>
        <li>{ic}<span><b>5. Önemli sayfalar iç bağlantıyla erişilebilir mi?</b> Hiçbir sayfadan bağlantı almayan “yetim” sayfalar zor keşfedilir. Bağlantılar düz bir a etiketi ve href ile verilmeli; yalnızca JavaScript tıklama olayıyla çalışan bağlantıları Google takip edemeyebilir.</span></li>
        <li>{ic}<span><b>6. Sunucu hataları (5xx) yok mu?</b> Sürekli hata veren bir sunucu, Google’ın tarama hızını düşürmesine yol açar. Search Console’daki tarama istatistikleri raporuna bakın.</span></li>
      </ul>'''),
        ('dizin', 'Dizine ekleme', 'Dizine ekleme: doğru sayfalar dizinde mi?', '''
      <p>Taranan her sayfanın dizine girmesi gerekmez; teşekkür sayfaları, filtre kombinasyonları, sepet ve yönetim paneli dizinde olmamalı. Önemli olan, <b>doğru</b> sayfaların dizinde olmasıdır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>7. Önemli sayfalarda yanlışlıkla noindex yok mu?</b> Yayın öncesi “arama motorlarından gizle” seçeneği açık unutulabilir. URL Denetimi aracıyla ana sayfalarınızı tek tek kontrol edin.</span></li>
        <li>{ic}<span><b>8. Her içerik tek bir adreste mi?</b> http ve https, www’lu ve www’suz, sonunda eğik çizgi olan ve olmayan adresler aynı sayfayı gösteriyorsa, tümü 301 ile tek bir sürüme yönlendirilmeli.</span></li>
        <li>{ic}<span><b>9. Canonical etiketleri doğru mu?</b> Her sayfa kendini (ya da tercih edilen asıl sürümü) canonical olarak göstermeli. Google, canonical etiketinin, iç bağlantıların ve site haritasının aynı adresi işaret etmesini ister; çelişen sinyaller Google’ın kendi seçimini yapmasına yol açar.</span></li>
        <li>{ic}<span><b>10. Site haritası temiz mi?</b> Site haritası yalnızca dizine girmesini istediğiniz, 200 kodu dönen, canonical adresleri içermeli. Tek bir dosya en fazla 50.000 URL veya sıkıştırılmamış 50 MB olabilir; büyük sitelerde site haritası dizini kullanılır.</span></li>
        <li>{ic}<span><b>11. lastmod tarihleri gerçek mi?</b> Google, lastmod değerini yalnızca doğruysa kullanır ve önemli bir güncellemeyi yansıtmasını ister. priority ve changefreq alanları ise Google tarafından yok sayılır.</span></li>
        <li>{ic}<span><b>12. Site haritası Search Console’a gönderildi ve robots.txt’de belirtildi mi?</b></span></li>
        <li>{ic}<span><b>13. İnce ve yinelenen sayfalar kontrol altında mı?</b> Neredeyse aynı metinli onlarca sayfa, tarama bütçesini boşa harcar ve kalite sinyalini düşürür. Birleştirin, geliştirin ya da noindex verin.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> Site taşıma veya yeniden tasarım sırasında eski adresleri yeni adreslere 301 ile tek tek yönlendirmemek, yıllarca biriken görünürlüğü birkaç haftada kaybettirebilir. Taşımadan önce eski URL listesini mutlaka çıkarın.</div></div>'''),
        ('url-https', 'Adres yapısı ve HTTPS', 'Adres yapısı, HTTPS ve hata sayfaları', '''
      <ul class="bi-list">
        <li>{ic}<span><b>14. Adresler okunaklı mı?</b> “/hizmetler/kurumsal-web-sitesi” gibi anlamlı, kısa ve küçük harfli adresler; “/page.php?id=482&amp;cat=7” gibi parametreli adreslerden hem kullanıcı hem Google için daha anlaşılırdır. Türkçe karakter yerine sade Latin harfleri kullanmak, paylaşımda bozulmayı önler.</span></li>
        <li>{ic}<span><b>15. Tüm site HTTPS mi?</b> Geçerli bir SSL sertifikası ve karışık içerik (https sayfada http görsel veya betik) uyarısı olmaması gerekir. HTTPS, Google’ın sayfa deneyimi değerlendirmesinin parçasıdır.</span></li>
        <li>{ic}<span><b>16. Silinen sayfalar doğru kodu dönüyor mu?</b> Kalıcı olarak kaldırılan sayfa 404 veya 410 dönmeli; yerine benzer bir sayfa varsa 301 ile oraya yönlendirilmeli. Var olmayan sayfaların “200 OK” ile boş içerik göstermesi (soft 404) Google’ı yanıltır.</span></li>
        <li>{ic}<span><b>17. Yönlendirme zincirleri yok mu?</b> A’dan B’ye, B’den C’ye giden zincirleri doğrudan A’dan C’ye kısaltın.</span></li>
        <li>{ic}<span><b>18. Kullanıcı dostu bir 404 sayfanız var mı?</b> Arama kutusu ve ana kategorilere bağlantı içeren bir 404 sayfası, kaybolan ziyaretçiyi sitede tutar.</span></li>
      </ul>'''),
        ('mobil-hiz', 'Mobil ve hız', 'Mobil öncelikli dizin ve Core Web Vitals', '''
      <p>Google, mobil öncelikli dizine geçişi 2024’te tamamladı. Yani sitenizi değerlendirirken esas olarak <b>mobil sürümü</b> tarar ve dizine ekler. Masaüstünde olup mobilde gizlenen metinler, Google için de büyük ölçüde yok hükmündedir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>19. Mobil ve masaüstü aynı içeriği sunuyor mu?</b> Başlıklar, metinler, görseller, yapılandırılmış veri ve meta etiketler her iki sürümde de aynı olmalı.</span></li>
        <li>{ic}<span><b>20. Görünüm alanı (viewport) etiketi var mı, yazılar büyütmeden okunuyor mu, butonlar parmakla rahat tıklanıyor mu?</b></span></li>
        <li>{ic}<span><b>21. Core Web Vitals eşikleri geçiliyor mu?</b> web.dev’e göre iyi bir deneyim için ziyaretlerin yüzde 75’inde LCP 2,5 saniye, INP 200 milisaniye, CLS 0,1 veya altında olmalı. INP, 2024’te FID’in yerini aldı.</span></li>
        <li>{ic}<span><b>22. Görseller optimize mi?</b> WebP veya AVIF biçimi, gösterildiği boyutta dosya, ekran dışındaki görsellerde geç yükleme ve her görselde genişlik-yükseklik değerleri.</span></li>
      </ul>
      <p>Hız konusu başlı başına bir uzmanlık alanı; LCP, INP ve CLS’yi nasıl iyileştireceğinizi <a href="site-hizi-core-web-vitals.html">site hızı ve Core Web Vitals rehberimizde</a> ayrıntılı anlatıyoruz.</p>'''),
        ('js-render', 'JavaScript siteler', 'JavaScript ile çalışan sitelerde teknik SEO', '''
      <p>React, Vue veya Angular gibi çerçevelerle yapılan ve içeriği tarayıcıda oluşturan siteler, Google tarafından işlenebilir; ancak bu ek bir adım ve ek risk demektir. Google’ın JavaScript SEO belgesi, sayfaların önce tarandığını, ardından işlenmek (render) için sıraya alındığını anlatır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>23. Ana içerik ilk HTML’de var mı?</b> Sunucu tarafında oluşturma (SSR) veya önceden oluşturma (statik HTML), başlık, metin ve bağlantıların JavaScript beklenmeden görünmesini sağlar. Bu yalnızca Google için değil, birçok yapay zekâ tarayıcısı için de önemlidir; bunların bir kısmı JavaScript çalıştırmaz.</span></li>
        <li>{ic}<span><b>24. Her görünümün kendi adresi var mı?</b> Tek sayfalık uygulamalarda içerik değiştiğinde adres de değişmeli; “#” sonrası parçalarla yönetilen içerik ayrı sayfa olarak dizine eklenmez.</span></li>
        <li>{ic}<span><b>25. URL Denetimi’nde “taranan sayfa” görünümü içeriği eksiksiz gösteriyor mu?</b></span></li>
      </ul>
      <p>Özel yazılımla geliştirdiğimiz sitelerde bu kararları baştan veriyoruz; <a href="web-cozumleri.html">web çözümlerimiz</a> sayfasında yaklaşımımızı görebilirsiniz.</p>'''),
        ('yapilandirilmis-veri', 'Yapılandırılmış veri', 'Yapılandırılmış veri ve çok dilli siteler', '''
      <ul class="bi-list">
        <li>{ic}<span><b>26. Uygun schema türleri ekli mi?</b> Organization, LocalBusiness, Product, Article, BreadcrumbList gibi işaretlemeler Google’ın sayfayı anlamasına yardım eder ve zengin sonuçlara uygunluk sağlar. İşaretleme, sayfada görünen içerikle birebir aynı olmalı.</span></li>
        <li>{ic}<span><b>27. Zengin Sonuç Testi’nde hata yok mu?</b> Ayrıca beklentiyi doğru kurun: Google 2023’ten bu yana SSS zengin sonuçlarını yalnızca bilinen, yetkili kamu ve sağlık sitelerinde gösteriyor. İşaretleme yine de anlam sinyali olarak zarar vermez ama her sitede görsel bir kazanç getirmez.</span></li>
        <li>{ic}<span><b>28. Çok dilli sitede hreflang doğru mu?</b> Türkçe, İngilizce, Almanca gibi dil sürümleriniz varsa her sayfa, diğer dillerdeki karşılıklarını ve kendisini hreflang ile göstermeli; bağlantılar karşılıklı olmalı. Dil sürümlerini otomatik IP yönlendirmesiyle zorlamak yerine kullanıcıya dil seçtirmek Google’ın önerisidir.</span></li>
      </ul>
      <blockquote><div class="bi-q">{quote}</div>Teknik SEO sıralamayı tek başına yükseltmez; ama teknik bir hata, en iyi içeriği bile görünmez yapabilir.</blockquote>'''),
        ('yapay-zeka-tarayici', 'Yapay zekâ tarayıcıları', 'Yapay zekâ özellikleri ve tarayıcılar için teknik ayarlar', '''
      <p>2026’da teknik SEO listesine yeni bir başlık eklendi: yapay zekâ. Google’ın “Yapay zekâ özellikleri ve web siteniz” belgesi, AI Overviews ve AI Modu için özel bir teknik gereklilik olmadığını, sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olmasının yeterli olduğunu söyler. Yeni bir yapay zekâ dosyası ya da özel işaretleme gerekmez. Yine de bilmeniz gereken kontroller var:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>29. Snippet kontrolleri bilinçli mi kullanılıyor?</b> nosnippet, data-nosnippet ve max-snippet etiketleri, içeriğinizin arama sonuçlarında ve yapay zekâ özetlerinde ne kadar gösterileceğini sınırlar. Yanlışlıkla eklenmiş bir nosnippet, sayfanızın özetlerde kaynak olma şansını ortadan kaldırır.</span></li>
        <li>{ic}<span><b>30. Yapay zekâ tarayıcıları için politikanız net mi?</b> Google-Extended belirteci, içeriğinizin Gemini gibi modellerin eğitiminde ve bazı başka Google sistemlerinde kullanımını sınırlamanızı sağlar; Google Arama’daki görünürlüğü etkilemez. Diğer şirketlerin yapay zekâ tarayıcıları da robots.txt’de kendi adlarıyla ayrı ayrı yönetilebilir. Engellemek ya da izin vermek bir iş kararıdır; önemli olan bunu bilerek yapmaktır.</span></li>
      </ul>
      <p>Search Console’da yapay zekâ özelliklerinden gelen trafik, “Web” arama türündeki performans raporuna dahildir. Teknik sorunları çözdükten sonra ölçümü buradan izleyebilirsiniz.</p>'''),
    ],
    check_title='// YAYINA ALMADAN ÖNCE HIZLI TEKNİK KONTROL',
    checks=[
        'robots.txt’de siteyi kapatan bir “Disallow: /” satırı yok',
        'Önemli sayfalarda noindex yok, canonical kendini gösteriyor',
        'http ve www’suz sürümler tek adrese 301 ile yönleniyor',
        'Site haritası gönderildi, yalnızca 200 dönen adresleri içeriyor',
        'Mobil sürüm masaüstüyle aynı içeriği sunuyor',
        'Core Web Vitals mobilde “iyi” seviyesinde',
        'Eski adresler yeni adreslere tek tek yönlendirildi',
        'Yapılandırılmış veri Zengin Sonuç Testi’nden hatasız geçiyor',
    ],
    faq=[
        ('Teknik SEO nedir?', 'Teknik SEO, arama motorlarının bir web sitesini sorunsuz tarayabilmesi, anlayabilmesi ve dizine ekleyebilmesi için altyapıda yapılan çalışmalardır. robots.txt, site haritası, canonical etiketleri, yönlendirmeler, HTTPS, mobil uyum, sayfa hızı ve yapılandırılmış veri bu kapsamdadır.'),
        ('Teknik SEO denetimi ne sıklıkla yapılmalı?', 'Küçük ve az değişen sitelerde birkaç ayda bir genel kontrol ve Search Console uyarılarının düzenli takibi yeterlidir. Site taşıma, yeniden tasarım, alan adı değişikliği veya büyük bir yazılım güncellemesinden önce ve hemen sonra ise mutlaka ayrıntılı denetim yapılmalıdır.'),
        ('Sayfam neden Google’da çıkmıyor?', 'En sık sebepler sayfanın noindex etiketi taşıması, robots.txt ile engellenmesi, hiçbir sayfadan bağlantı almaması, yinelenen içerik nedeniyle başka bir adresin canonical seçilmesi veya henüz taranmamış olmasıdır. Search Console’daki URL Denetimi aracı sebebi büyük ölçüde gösterir.'),
        ('robots.txt ile noindex arasındaki fark nedir?', 'robots.txt Google’ın bir sayfayı taramasını engeller ama sayfa başka yerlerden bağlantı alıyorsa içeriği olmadan dizinde görünebilir. noindex ise sayfanın taranmasına izin verir ve arama sonuçlarında gösterilmemesini söyler. Bir sayfayı sonuçlardan çıkarmak için noindex kullanılmalı ve sayfa robots.txt ile engellenmemelidir.'),
        ('Yapay zekâ aramaları için llms.txt gibi özel bir dosya gerekli mi?', 'Google’ın resmi belgesine göre AI Overviews ve AI Modu’nda görünmek için yeni bir yapay zekâ dosyası veya özel işaretleme gerekmez. Sayfanın dizine eklenmiş ve snippet ile gösterilmeye uygun olması yeterlidir. Diğer yapay zekâ hizmetlerinin bu tür dosyaları nasıl kullandığı ise değişkendir.'),
    ],
    outro='''<p>Teknik SEO’nun güzel yanı, sorunların çoğunun ölçülebilir ve düzeltilebilir olmasıdır. Bu listeyi yılda birkaç kez ve her büyük değişiklikten önce uygulamak, görünürlüğünüzü sessizce eriten hataları erkenden yakalamanızı sağlar. Teknik zemin sağlamlaştıktan sonra emeğinizi içeriğe ve yerel görünürlüğe ayırabilirsiniz; işletmeniz bölgesel çalışıyorsa sıradaki adım <a href="yerel-seo-google-isletme-profili.html">yerel SEO ve Google İşletme Profili</a> olmalı.</p>
      <p>CYF Tech olarak geliştirdiğimiz sitelerde bu maddeleri yayından önce tek tek kontrol ediyoruz. Mevcut sitenizin teknik denetimini yaptırmak ya da bir site taşımasını görünürlük kaybetmeden planlamak isterseniz <a href="iletisim.html">bize ulaşın</a>.</p>''',
    sources=[
        ('Google Search Central — robots.txt’ye giriş', 'https://developers.google.com/search/docs/crawling-indexing/robots/intro?hl=tr'),
        ('Google Search Central — Yinelenen URL’leri birleştirme (canonical)', 'https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls?hl=tr'),
        ('Google Search Central — Site haritası oluşturma ve gönderme', 'https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap?hl=tr'),
        ('Google Search Central — Mobil öncelikli dizine ekleme', 'https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing?hl=tr'),
        ('Google Search Central — JavaScript SEO temelleri', 'https://developers.google.com/search/docs/crawling-indexing/javascript/javascript-seo-basics?hl=tr'),
        ('Google Search Central — Yerelleştirilmiş sürümler (hreflang)', 'https://developers.google.com/search/docs/specialty/international/localized-versions?hl=tr'),
        ('Google Search Central — Yapılandırılmış veriye giriş', 'https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data?hl=tr'),
        ('Google Search Central — AI features and your website', 'https://developers.google.com/search/docs/appearance/ai-features'),
        ('Google Search Central Blog — HowTo ve SSS zengin sonuçlarındaki değişiklikler (2023)', 'https://developers.google.com/search/blog/2023/08/howto-faq-changes'),
        ('web.dev — Web Vitals', 'https://web.dev/articles/vitals'),
    ],
)
