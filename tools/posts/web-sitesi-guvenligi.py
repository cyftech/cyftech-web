POST = dict(
    slug='web-sitesi-guvenligi',
    kat='Güvenlik',
    keyword='web sitesi güvenliği',
    title='Web Sitesi Güvenliği ve SSL: KOBİ’ler İçin 2026 Rehberi',
    h1='Web sitesi güvenliği ve SSL: KOBİ’ler için 2026 rehberi.',
    crumb='GÜVENLİK',
    sure='10 dk',
    ozet='SSL sertifikası yeterli mi? Güncellemeler, güçlü erişim, yedekleme, güvenlik duvarı ve OWASP Top 10 ile web sitenizi korumanın pratik yolları ve kısalan SSL süreleri.',
    desc='Web sitesi güvenliği rehberi: SSL sertifikası türleri ve 2026’da kısalan süreler, güncelleme, 2FA, yedekleme, WAF, OWASP Top 10 ve KVKK veri ihlali bildirimi.',
    lead='“Bizim küçük bir şirketiz, kim bizim siteyle uğraşacak?” Bu cümleyi çok duyuyoruz. Oysa saldırıların büyük kısmı belirli bir firmayı değil, açığı olan herhangi bir siteyi hedefleyen otomatik araçlarla yapılıyor. <b>Web sitesi güvenliği</b>, büyüklüğünüzden bağımsız olarak hepinizin meselesi.',
    intro='''<p>Bu rehberde bir web sitesinin neden hedef olduğunu, SSL sertifikasının ne işe yaradığını ve 2026 itibarıyla kısalan sertifika sürelerinin sizi nasıl etkilediğini, güncelleme, erişim, yedekleme ve güvenlik duvarı gibi temel önlemleri, yazılım geliştirirken dikkate alınması gereken OWASP Top 10 risklerini ve bir saldırı yaşandığında ne yapmanız gerektiğini anlatıyoruz.</p>
      <p>Amaç sizi bir güvenlik uzmanına dönüştürmek değil; ajansınıza, hosting firmanıza ya da yazılım ekibinize doğru soruları sorabilmeniz ve en sık yapılan hataları önlemeniz.</p>''',
    sections=[
        ('tehdit', 'Neden hedef olursunuz?', 'Küçük bir site neden saldırıya uğrar?', '''
      <p>Saldırganlar için sitenizin kendisi kadar, kullandığı kaynaklar da değerlidir. Ele geçirilen bir site şunlar için kullanılabilir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Spam ve oltalama:</b> Sunucunuz üzerinden binlerce sahte e-posta gönderilir, alan adınız kara listelere girer.</span></li>
        <li>{ic}<span><b>SEO spam’i:</b> Sitenize gizli sayfalar ve bağlantılar eklenir; Google sitenizi “ele geçirilmiş” olarak işaretleyebilir.</span></li>
        <li>{ic}<span><b>Veri hırsızlığı:</b> İletişim formları, üye bilgileri ve sipariş kayıtları çalınır; bu da KVKK kapsamında bir veri ihlali demektir.</span></li>
        <li>{ic}<span><b>Fidye ve kötü amaçlı yazılım:</b> Dosyalar şifrelenir ya da ziyaretçilere zararlı yazılım dağıtılır.</span></li>
      </ul>
      <p>İşin bir de görünmeyen maliyeti var: ele geçirilen bir siteyi temizlemek, yeniden güven kazanmak, arama sıralamalarını geri almak ve müşterilere açıklama yapmak çoğu zaman önlem almanın maliyetinden çok daha yüksektir. Üstelik e-posta alan adınız kara listeye girdiğinde, normal teklif ve fatura e-postalarınız bile müşterilerinize ulaşmamaya başlar.</p>
      <p>Bu saldırıların çoğu bilinen ve yaması çoktan yayımlanmış açıkları tarar. Yani güvenliğin büyük kısmı, karmaşık teknolojilerden çok düzenli bakım ve disiplinle sağlanır.</p>
      <blockquote><div class="bi-q">{quote}</div>Saldırgan sizi seçmez; kapısı açık bırakılmış siteyi bulur.</blockquote>'''),
        ('ssl', 'SSL ve HTTPS', 'SSL sertifikası nedir, hangi türü seçmelisiniz?', '''
      <p>SSL (bugünkü teknik adıyla TLS) sertifikası, ziyaretçinin tarayıcısı ile sunucunuz arasındaki trafiği şifreler ve adres çubuğundaki <b>https</b> ile kilit simgesini sağlar. Form ile gönderilen bir telefon numarası ya da şifre, SSL olmadan ağdaki biri tarafından okunabilir. Tarayıcılar SSL olmayan sayfaları “güvenli değil” diye işaretliyor; Google da HTTPS’yi sayfa deneyimi değerlendirmesinin bir parçası olarak görüyor.</p>
      <table>
        <thead><tr><th>Tür</th><th>Neyi doğrular?</th><th>Kimler için?</th></tr></thead>
        <tbody>
          <tr><td>DV (Alan adı doğrulamalı)</td><td>Yalnızca alan adının kontrolünün sizde olduğunu</td><td>Kurumsal siteler, bloglar; Let’s Encrypt gibi ücretsiz seçenekler bu türdendir</td></tr>
          <tr><td>OV (Kurum doğrulamalı)</td><td>Alan adına ek olarak şirketin varlığını</td><td>Kurumsal kimliğini sertifikada göstermek isteyen işletmeler</td></tr>
          <tr><td>EV (Genişletilmiş doğrulama)</td><td>Kapsamlı şirket doğrulaması</td><td>Bazı finans ve kurumsal yapılar; tarayıcılar artık ayrı bir yeşil çubuk göstermiyor</td></tr>
        </tbody>
      </table>
      <p>Şifreleme gücü açısından üç tür arasında fark yoktur. Fark, sertifikanın arkasındaki kimlik doğrulamasındadır. Çoğu KOBİ sitesi ve e-ticaret sitesi için doğru yapılandırılmış ve otomatik yenilenen bir DV sertifikası yeterlidir.</p>
      <div class="bi-note">{warn}<div><b>Kilit simgesi “güvenli site” demek değildir:</b> SSL yalnızca bağlantıyı şifreler. Sitenin yazılımındaki açıkları, zayıf şifreleri ya da güncellenmemiş eklentileri kapatmaz. Oltalama sitelerinin çoğunda da geçerli bir SSL sertifikası bulunur.</div></div>'''),
        ('sure', 'Kısalan SSL süreleri', '2026’da SSL sertifika süreleri kısalıyor: ne yapmalısınız?', '''
      <p>Tarayıcı üreticileri ve sertifika otoritelerinin oluşturduğu CA/Browser Forum, Nisan 2025’te kabul ettiği SC-081 kararıyla genel SSL/TLS sertifikalarının azami geçerlilik süresini aşamalı olarak kısaltma kararı aldı:</p>
      <table>
        <thead><tr><th>Tarih</th><th>Azami sertifika süresi</th></tr></thead>
        <tbody>
          <tr><td>15 Mart 2026’dan itibaren</td><td>200 gün</td></tr>
          <tr><td>15 Mart 2027’den itibaren</td><td>100 gün</td></tr>
          <tr><td>15 Mart 2029’dan itibaren</td><td>47 gün</td></tr>
        </tbody>
      </table>
      <p>Pratikte bu, “yılda bir kez sertifika satın alıp elle yükleme” döneminin bittiği anlamına geliyor. 200 günlük dönem zaten yürürlükte; 2029’a gelindiğinde sertifikaların yılda yedi-sekiz kez yenilenmesi gerekecek.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Otomatik yenilemeye geçin:</b> ACME protokolünü destekleyen bir sağlayıcı (ör. Let’s Encrypt) veya hosting panelindeki otomatik SSL özelliğini kullanın.</span></li>
        <li>{ic}<span><b>Sertifika takibi yapın:</b> Süresi dolmak üzere olan sertifikalar için uyarı veren bir izleme aracı kurun.</span></li>
        <li>{ic}<span><b>Elle yüklenen sertifikaları listeleyin:</b> Ücretli OV/EV sertifika kullanıyorsanız sağlayıcınızın otomasyon seçeneklerini şimdiden sorun.</span></li>
        <li>{ic}<span><b>HSTS’yi açın:</b> Tarayıcıya sitenize her zaman HTTPS ile bağlanmasını söyleyen HSTS başlığı, şifresiz bağlantıya düşürme saldırılarını engeller.</span></li>
      </ul>'''),
        ('temel', 'Temel önlemler', 'Web sitesi güvenliğinin 5 temel önlemi', '''
      <p>Teknik olarak en basit görünen önlemler, en çok saldırıyı durduranlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Güncel yazılım —</b> İçerik yönetim sistemi, tema, eklentiler, sunucu yazılımı ve kullanılan kütüphaneler düzenli güncellenmeli. Kullanılmayan eklentileri devre dışı bırakmak yetmez, tamamen kaldırın.</span></li>
        <li>{ic}<span><b>2. Güçlü erişim —</b> Yönetim paneli, hosting paneli, FTP ve veritabanı için benzersiz ve uzun şifreler, bir şifre yöneticisi ve mümkün olan her yerde iki adımlı doğrulama (2FA) kullanın.</span></li>
        <li>{ic}<span><b>3. En az yetki —</b> Her kullanıcıya yalnızca ihtiyaç duyduğu yetkiyi verin. İşten ayrılan personelin ve projesi biten ajansların hesaplarını hemen kapatın.</span></li>
        <li>{ic}<span><b>4. Düzenli yedek —</b> 3-2-1 kuralını uygulayın: en az üç kopya, iki farklı ortam, bir kopya sunucudan bağımsız bir yerde. Yedeğin geri yüklenebildiğini yılda birkaç kez test edin.</span></li>
        <li>{ic}<span><b>5. İzleme —</b> Site erişilebilirliği, dosya değişiklikleri ve başarısız giriş denemeleri için uyarı alın. Google Search Console’un “Güvenlik sorunları” raporunu düzenli kontrol edin.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>En hızlı kazanım:</b> Bugün yönetim panelinize iki adımlı doğrulama ekleyin ve son altı ayda giriş yapmamış tüm kullanıcı hesaplarını kapatın. Bu iki adım, en yaygın saldırı yolu olan çalınmış veya tahmin edilmiş şifreleri büyük ölçüde etkisiz hale getirir.</div></div>'''),
        ('waf', 'WAF ve başlıklar', 'Güvenlik duvarı (WAF), DDoS koruması ve güvenlik başlıkları', '''
      <p>Temel önlemlerin üzerine eklenecek ikinci katman, kötü niyetli trafiği sitenize ulaşmadan durdurmaktır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Web uygulama güvenlik duvarı (WAF):</b> SQL enjeksiyonu, kaba kuvvet giriş denemeleri ve bilinen saldırı kalıplarını filtreler. CDN hizmetlerinin çoğu bunu temel paketlerinde sunar.</span></li>
        <li>{ic}<span><b>DDoS koruması:</b> Siteyi aşırı istekle çökertme girişimlerine karşı CDN veya hosting düzeyinde koruma, özellikle kampanya dönemlerinde önem kazanır.</span></li>
        <li>{ic}<span><b>Giriş sınırlama ve CAPTCHA:</b> Yönetim paneli ve formlarda deneme sayısını sınırlamak, botların işini zorlaştırır.</span></li>
        <li>{ic}<span><b>Güvenlik başlıkları:</b> Content-Security-Policy, X-Frame-Options (veya CSP frame-ancestors), X-Content-Type-Options ve Referrer-Policy gibi HTTP başlıkları; tarayıcıya hangi kaynaklara güvenmesi gerektiğini söyler ve birçok saldırı türünü baştan engeller.</span></li>
      </ul>
      <p>CDN ve önbellekleme aynı zamanda sitenizi hızlandırır; güvenlik ve performans burada aynı yatırımla iyileşir. Hız tarafını <a href="site-hizi-core-web-vitals.html">site hızı ve Core Web Vitals</a> yazımızda ele aldık.</p>'''),
        ('owasp', 'OWASP Top 10', 'Özel yazılımda güvenlik: OWASP Top 10:2025', '''
      <p>Sitenizde üyelik, ödeme, rezervasyon ya da müşteri paneli gibi özel geliştirilmiş bölümler varsa, güvenlik büyük ölçüde kodun nasıl yazıldığına bağlıdır. Bu alanda dünya genelinde referans alınan liste, OWASP’ın web uygulamalarındaki en kritik riskleri sıraladığı <b>OWASP Top 10</b>’dur. 2021’den bu yana ilk kez güncellenen 2025 sürümünde öne çıkan başlıklar şunlar:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Bozuk erişim kontrolü:</b> Bir kullanıcının adres çubuğunda numara değiştirerek başkasının faturasını görebilmesi gibi hatalar. Listenin hâlâ birinci sırasında.</span></li>
        <li>{ic}<span><b>Güvenlik yanlış yapılandırması:</b> Açık bırakılan yönetim ekranları, varsayılan şifreler, ayrıntılı hata mesajları. 2025 listesinde ikinci sıraya yükseldi.</span></li>
        <li>{ic}<span><b>Yazılım tedarik zinciri hataları:</b> Yeni eklenen bu kategori; projede kullanılan üçüncü taraf paketlerin, eklentilerin ve derleme araçlarının güvenliğini kapsıyor.</span></li>
        <li>{ic}<span><b>Kriptografik hatalar ve enjeksiyon:</b> Şifrelerin düz metin saklanması ya da kullanıcı girdisinin doğrulanmadan veritabanı sorgusuna eklenmesi.</span></li>
        <li>{ic}<span><b>İstisnai durumların yanlış ele alınması:</b> Yine yeni bir kategori; hata anında sistemin güvensiz bir duruma düşmesini anlatıyor.</span></li>
      </ul>
      <p>Yazılım ekibinizle çalışırken bu listeyi bir kontrol aracı olarak kullanın: hangi riske karşı hangi önlemin alındığını sorun. Kritik projelerde yayından önce bağımsız bir sızma testi (penetrasyon testi) yaptırmak da iyi bir pratiktir. Kendi ürünlerimiz KATSİS ve RestaurantBill gibi ödeme ve kişisel veri işleyen sistemlerde rol bazlı yetkilendirme, şifrelenmiş bağlantılar ve kayıt (log) tutma bu yüzden tasarımın ilk gününden itibaren yer alıyor. Bu ürünler hakkında daha fazlası için <a href="projelerimiz.html">projelerimiz</a> sayfasına bakabilirsiniz.</p>'''),
        ('ihlal', 'Saldırı olursa', 'Siteniz hacklendiğinde ne yapmalısınız?', '''
      <p>En iyi önlemlere rağmen bir olayla karşılaşabilirsiniz. Panikle yapılan müdahaleler çoğu zaman izleri siler ve sorunu büyütür. Sakin bir sıra izleyin:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım —</b> Siteyi bakım moduna alın veya geçici olarak erişime kapatın; ziyaretçilerin zarar görmesini önleyin.</span></li>
        <li>{ic}<span><b>2. Adım —</b> Tüm şifreleri (panel, hosting, FTP, veritabanı, e-posta) değiştirin ve oturumları sonlandırın.</span></li>
        <li>{ic}<span><b>3. Adım —</b> Sunucu kayıtlarını ve değişen dosyaları inceleyerek saldırının nereden geldiğini bulun; açığı kapatmadan yedekten dönmek, saldırının tekrarlanmasına yol açar.</span></li>
        <li>{ic}<span><b>4. Adım —</b> Temiz bir yedekten geri dönün, tüm yazılımları güncelleyin ve Search Console’dan inceleme isteyin.</span></li>
        <li>{ic}<span><b>5. Adım —</b> Kişisel veriler etkilendiyse durumu hukuki açıdan değerlendirin. KVKK, veri sorumlularının ihlali öğrendikten sonra en kısa sürede ve Kurul kararına göre en geç 72 saat içinde Kişisel Verileri Koruma Kurulu’na bildirmesini; ilgili kişilere de makul süre içinde bilgi vermesini öngörüyor.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Önemli:</b> KVKK ile ilgili bu bilgiler genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Veri ihlali yaşadığınızda bir hukukçuyla birlikte hareket edin. Web sitenizdeki aydınlatma metni ve çerez süreçleri için <a href="kvkk-uyumlu-web-sitesi.html">KVKK uyumlu web sitesi</a> yazımızı okuyabilirsiniz.</div></div>
      <p>Ulusal Siber Olaylara Müdahale Merkezi (USOM), Türkiye’de siber tehditlerle ilgili uyarılar yayımlar ve olay bildirimlerini kabul eder. Kurumunuzu ilgilendiren duyuruları takip etmek iyi bir alışkanlıktır.</p>'''),
    ],
    check_title='// GÜVENLİK KONTROL LİSTESİ',
    checks=[
        'Tüm sayfalar HTTPS ile açılıyor, SSL otomatik yenileniyor mu?',
        'İçerik yönetim sistemi, tema ve eklentiler güncel mi?',
        'Yönetim panelinde iki adımlı doğrulama açık mı?',
        'Eski kullanıcı ve ajans hesapları kapatıldı mı?',
        'Yedekler sunucu dışında tutuluyor ve geri yükleme test edildi mi?',
        'WAF/CDN ve güvenlik başlıkları etkin mi?',
        'Bir ihlal anında kimin ne yapacağı yazılı mı?',
    ],
    faq=[
        ('SSL sertifikası web sitesini tamamen güvenli yapar mı?', 'Hayır. SSL, ziyaretçi ile sunucu arasındaki veri trafiğini şifreler; ancak yazılım açıklarını, zayıf şifreleri veya güncellenmemiş eklentileri kapatmaz. Güvenlik için SSL’in yanında düzenli güncelleme, güçlü erişim kontrolü ve yedekleme gerekir.'),
        ('Ücretsiz SSL sertifikası yeterli mi?', 'Çoğu kurumsal site ve e-ticaret sitesi için evet. Let’s Encrypt gibi ücretsiz DV sertifikalar, ücretli sertifikalarla aynı şifreleme gücünü sunar. Ücretli OV ve EV sertifikalar ek kurum doğrulaması sağlar, ancak bağlantıyı daha güvenli yapmaz.'),
        ('SSL sertifikası ne kadar süre geçerli?', 'CA/Browser Forum kararına göre 15 Mart 2026’dan itibaren yeni sertifikaların azami geçerlilik süresi 200 gündür. Bu süre 15 Mart 2027’de 100 güne, 15 Mart 2029’da 47 güne inecek. Bu nedenle otomatik yenileme artık zorunlu hale geliyor.'),
        ('Web sitemin hacklendiğini nasıl anlarım?', 'Sitede tanımadığınız sayfalar veya bağlantılar görmek, Google arama sonuçlarında yabancı dilde başlıklar çıkması, ziyaretçilerin başka sitelere yönlendirilmesi, Search Console’da güvenlik uyarısı ve hosting firmasından gelen spam bildirimleri en yaygın belirtilerdir.'),
        ('Web sitesi güvenliği için ne kadar sıklıkla güncelleme yapılmalı?', 'Güvenlik güncellemeleri yayımlandığında en kısa sürede uygulanmalıdır. Genel bir kural olarak sitenizi en az ayda bir kontrol edin, kritik güvenlik yamalarını ise beklemeden yükleyin. Güncellemeden önce yedek almayı unutmayın.'),
    ],
    outro='''<p>Web sitesi güvenliği tek seferlik bir kurulum değil, sürekli bir alışkanlıktır: otomatik yenilenen SSL, güncel yazılım, iki adımlı doğrulama, sunucu dışında tutulan yedekler ve güvenlik duvarı. Bu temel katmanlar, otomatik saldırıların büyük bölümünü daha kapıda durdurur.</p>
      <p>CYF Tech olarak <a href="web-cozumleri.html">web sitelerini ve özel web yazılımlarını</a> güvenliği baştan düşünerek geliştiriyor, yayın sonrasında da bakım ve güncelleme desteği veriyoruz. Mevcut sitenizin güvenlik durumunu birlikte gözden geçirmek isterseniz <a href="iletisim.html">bize yazın</a>.</p>''',
    sources=[
        ('OWASP Top 10:2025', 'https://owasp.org/Top10/2025/0x00_2025-Introduction/'),
        ('DigiCert — TLS/SSL certificate validity changes', 'https://www.digicert.com/faq/tls-ssl-certificate-validity'),
        ('CA/Browser Forum — Ballot SC-081v3', 'https://cabforum.org/2025/04/11/ballot-sc081v3-introduce-schedule-of-reducing-validity-and-data-reuse-periods/'),
        ('Let’s Encrypt — How it works', 'https://letsencrypt.org/how-it-works/'),
        ('Google Search Central — Secure your site with HTTPS', 'https://developers.google.com/search/docs/crawling-indexing/https'),
        ('Google Search Central — Hacked sites', 'https://developers.google.com/search/docs/monitor-debug/security/hacked'),
        ('KVKK — Kişisel veri ihlallerinin bildirimi', 'https://www.kvkk.gov.tr/'),
        ('USOM — Ulusal Siber Olaylara Müdahale Merkezi', 'https://www.usom.gov.tr/'),
    ],
)
