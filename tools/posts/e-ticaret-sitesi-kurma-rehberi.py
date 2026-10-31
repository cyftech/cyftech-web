POST = dict(
    slug='e-ticaret-sitesi-kurma-rehberi',
    kat='E-Ticaret',
    keyword='e-ticaret sitesi kurma',
    title='E-Ticaret Sitesi Kurma Rehberi 2026: Adım Adım Yol Haritası',
    h1='E-ticaret sitesi kurma rehberi 2026: adım adım yol haritası.',
    crumb='E-TİCARET',
    sure='10 dk',
    ozet='Şirket kuruluşundan ETBİS kaydına, sanal POS’tan mesafeli satış sözleşmesine ve kargoya kadar Türkiye’de e-ticaret sitesi kurmanın tüm adımları tek rehberde.',
    desc='E-ticaret sitesi kurma rehberi: şirket ve vergi, altyapı seçimi, sanal POS, ETBİS kaydı, mesafeli satış sözleşmesi, kargo ve SEO adımları (2026).',
    lead='Ürününüz hazır, fiyatınız rekabetçi, ama “internetten satışa nasıl başlarım?” sorusu bir türlü netleşmiyor mu? <b>E-ticaret sitesi kurma</b> süreci; birkaç güzel ürün fotoğrafından çok daha fazlası: vergi, ödeme altyapısı, yasal metinler ve teslimat bir bütün olarak doğru kurulmalı.',
    intro='''<p>Bu rehberde Türkiye’de kendi online mağazanızı açmak için izlemeniz gereken adımları sırasıyla anlatıyoruz: şirket ve vergi altyapısı, altyapı (platform) seçimi, sanal POS ve ödeme kuruluşları, ETBİS kaydı ve mesafeli satış mevzuatı, kargo ve iade süreçleri, son olarak da ilk siparişleri getirecek ürün sayfaları ve SEO.</p>
      <p>CYF Tech olarak hem hazır altyapılar üzerinde hem de sıfırdan yazdığımız e-ticaret projelerinde en sık gördüğümüz hataları da her bölümün içine not olarak ekledik. Amaç, siteyi yayına aldıktan sonra “bunu baştan bilseydik” dememeniz.</p>''',
    sections=[
        ('sirket', 'Şirket ve vergi', 'E-ticarete başlamadan önce şirket ve vergi altyapısı', '''
      <p>Kendi siteniz üzerinden düzenli satış yapacaksanız ticari bir kimliğe ihtiyacınız var. Sanal POS başvurusu, kargo anlaşması ve ETBİS kaydı gibi adımların hepsi bir vergi numarası ister. Bu yüzden ilk iş, faaliyetinize uygun şirket türünü seçmektir.</p>
      <table>
        <thead><tr><th>Seçenek</th><th>Kimler için uygun?</th><th>Dikkat edilecekler</th></tr></thead>
        <tbody>
          <tr><td>Şahıs şirketi</td><td>Yeni başlayan, düşük-orta ciro bekleyen girişimciler</td><td>Kuruluşu hızlı ve ucuz; sorumluluk kişisel malvarlığına uzanır</td></tr>
          <tr><td>Limited şirket</td><td>Ortaklı yapılar, büyüme ve yatırım planı olanlar</td><td>Kuruluş ve muhasebe maliyeti daha yüksek; sorumluluk şirketle sınırlı</td></tr>
          <tr><td>Esnaf muafiyeti</td><td>Evde üretilen ürünleri sınırlı ölçekte satanlar</td><td>Kapsamı ve tutar sınırları dar; uygun olup olmadığınızı mali müşavirinize sorun</td></tr>
        </tbody>
      </table>
      <p>Vergi mükellefiyeti açıldıktan sonra fatura düzeni de konuşulmalı. İnternetten satış yapan işletmeler belirli ciro eşiklerini aştığında e-Arşiv ve e-Fatura uygulamasına geçmek zorunda kalıyor; eşikler Gelir İdaresi tarafından zaman zaman güncellendiği için güncel durumu muhasebecinizle teyit edin. E-ticaret altyapınızın bir e-fatura entegratörüyle konuşabilmesi, sipariş başına elle fatura kesme yükünü baştan ortadan kaldırır.</p>
      <div class="bi-note">{tip}<div><b>Pratik öneri:</b> Mali müşavirinizle ilk görüşmeye tahmini aylık sipariş sayınızı, ortalama sepet tutarınızı ve yurt dışına satış yapıp yapmayacağınızı yazıp gidin. Şirket türü ve fatura düzeni bu üç rakama göre şekillenir.</div></div>'''),
        ('altyapi', 'Altyapı seçimi', 'E-ticaret altyapısı: hazır paket mi, açık kaynak mı, özel yazılım mı?', '''
      <p>E-ticaret sitesi kurmanın en kritik teknik kararı altyapıdır. Türkiye’de üç ana yol var ve her birinin maliyet, esneklik ve bağımlılık dengesi farklı:</p>
      <table>
        <thead><tr><th>Yol</th><th>Artıları</th><th>Eksileri</th></tr></thead>
        <tbody>
          <tr><td>Hazır e-ticaret paketi (kiralık)</td><td>Hızlı açılış, sanal POS ve kargo entegrasyonları hazır, teknik bakım sağlayıcıda</td><td>Aylık/yıllık kira, tasarım ve özellikte sınırlar, platforma bağımlılık</td></tr>
          <tr><td>Açık kaynak (WooCommerce vb.)</td><td>Lisans maliyeti düşük, geniş eklenti ekosistemi</td><td>Güncelleme, güvenlik ve hız sizin sorumluluğunuzda; eklenti yığını yavaşlatır</td></tr>
          <tr><td>Özel yazılım</td><td>İş akışınıza birebir uyum, ERP/stok/B2B entegrasyonları, tam mülkiyet</td><td>İlk yatırım ve geliştirme süresi daha yüksek</td></tr>
        </tbody>
      </table>
      <p>Az sayıda ürünle pazarı test eden bir marka için hazır paket mantıklı bir başlangıç olabilir. Bayi fiyatlandırması, çok depolu stok, özel kampanya kuralları ya da muhasebe ve üretim sistemleriyle entegrasyon gerekiyorsa, hazır paketin sınırlarına çok çabuk dayanırsınız. Bu kararın ayrıntılarını <a href="wordpress-mi-ozel-yazilim-mi.html">hazır altyapı mı, özel yazılım mı</a> yazımızda karşılaştırdık.</p>
      <h3>Hangi yolu seçerseniz seçin, mutlaka sorun</h3>
      <ul class="bi-list">
        <li>{ic}<span>Ürün, müşteri ve sipariş verilerimi <b>dışa aktarabiliyor muyum</b>? Platform değiştirirsem ne olur?</span></li>
        <li>{ic}<span>Alan adı kimin adına kayıtlı ve <b>yönetim paneline</b> kim erişiyor?</span></li>
        <li>{ic}<span>Kullanmak istediğim sanal POS, kargo firması ve e-fatura entegratörü <b>destekleniyor mu</b>?</span></li>
        <li>{ic}<span>Site mobilde ne kadar hızlı açılıyor? Örnek bir mağazanın PageSpeed sonucunu görebilir miyim?</span></li>
      </ul>'''),
        ('odeme', 'Sanal POS ve ödeme', 'Sanal POS ve ödeme kuruluşu seçimi', '''
      <p>Kartla ödeme almak için iki seçeneğiniz var: doğrudan bir bankadan <b>sanal POS</b> almak ya da Türkiye Cumhuriyet Merkez Bankası (TCMB) tarafından lisanslanmış bir <b>ödeme kuruluşu</b> üzerinden tahsilat yapmak. Ödeme kuruluşları 6493 sayılı Kanun kapsamında faaliyet gösterir ve izinli kuruluşların güncel listesi TCMB’nin sitesinde yayımlanır.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Banka sanal POS’u:</b> Komisyon oranı genellikle pazarlığa açıktır, ancak başvuru için şirketin belli bir geçmişi ve cirosu istenebilir. Birden çok bankayla çalışmak taksit seçeneklerini artırır.</span></li>
        <li>{ic}<span><b>Ödeme kuruluşu:</b> Başvuru ve entegrasyon daha hızlıdır, tüm banka kartlarına taksit tek entegrasyonla gelir. Karşılığında komisyon biraz daha yüksek olabilir ve paranın hesabınıza geçme süresi (valör) sözleşmeye göre değişir.</span></li>
      </ul>
      <p>Teklifleri karşılaştırırken yalnızca komisyon oranına bakmayın. Valör süresi, taksitli satışlarda vade farkını kimin üstlendiği, iade ve itiraz (chargeback) süreçleri, kayıtlı kart (tek tıkla ödeme) desteği ve yıllık sabit ücretler toplam maliyeti belirler.</p>
      <div class="bi-note">{warn}<div><b>Güvenlik notu:</b> Kart bilgilerini kendi sunucunuzda asla saklamayın. 3D Secure doğrulamasını açık tutun ve kart verisinin doğrudan ödeme sağlayıcısının sayfasında ya da güvenli ödeme formunda işlendiği bir entegrasyon tercih edin. Böylece PCI DSS yükünün büyük kısmı ödeme sağlayıcısında kalır. Ayrıntılar için <a href="web-sitesi-guvenligi.html">web sitesi güvenliği</a> rehberimize göz atın.</div></div>
      <p>Havale/EFT, kapıda ödeme ve dijital cüzdanlar da dönüşümü artırabilir; ancak kapıda ödeme iade ve sahte sipariş riskini yükselttiği için kargo firmasının ücret politikasıyla birlikte değerlendirilmelidir.</p>'''),
        ('yasal', 'Yasal yükümlülükler', 'ETBİS kaydı, mesafeli satış sözleşmesi ve diğer yasal yükümlülükler', '''
      <p>Türkiye’de e-ticaret, 6563 sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun ve 6502 sayılı Tüketicinin Korunması Hakkında Kanun’a bağlı yönetmeliklerle düzenlenir. Kendi siteniz üzerinden satış yapıyorsanız şu başlıklar zorunludur:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. ETBİS kaydı —</b> Ticaret Bakanlığı’nın Elektronik Ticaret Bilgi Sistemi’ne (eticaret.gov.tr) e-Devlet ile giriş yapılarak, faaliyete başlamadan önce kayıt olunur. Bilgilerde değişiklik olduğunda 30 gün içinde güncelleme yapılır. Kayıt sonrası verilen doğrulama kodu/QR kod sitenin alt kısmında yayımlanır. Bakanlığın açıklamasına göre yalnızca yurt içindeki pazaryerleri üzerinden satış yapanların ayrıca kayıt yükümlülüğü yoktur.</span></li>
        <li>{ic}<span><b>2. Ön bilgilendirme formu ve mesafeli satış sözleşmesi —</b> Mesafeli Sözleşmeler Yönetmeliği’ne göre tüketici, siparişi onaylamadan önce satıcı bilgileri, ürünün temel nitelikleri, vergiler dahil toplam fiyat, teslimat ve cayma hakkı konusunda bilgilendirilmeli; bu onay ödeme adımında açıkça alınmalıdır.</span></li>
        <li>{ic}<span><b>3. Cayma hakkı ve iade —</b> Tüketici, kural olarak malı teslim aldığı tarihten itibaren 14 gün içinde gerekçe göstermeden cayabilir. Satıcı, cayma bildirimini aldığı tarihten itibaren 14 gün içinde tahsil ettiği tüm ödemeleri iade etmekle yükümlüdür. Kişiye özel üretilen ya da hızlı bozulan ürünler gibi istisnalar yönetmelikte sayılmıştır.</span></li>
        <li>{ic}<span><b>4. KVKK metinleri —</b> Aydınlatma metni, gerektiğinde açık rıza metni ve çerez politikası. Üyelik, sipariş ve pazarlama izinleri ayrı ayrı ele alınmalıdır (bkz. <a href="kvkk-uyumlu-web-sitesi.html">KVKK uyumlu web sitesi</a>).</span></li>
        <li>{ic}<span><b>5. Ticari elektronik ileti onayı —</b> Kampanya e-postası ve SMS göndermek için alıcının onayı alınmalı ve onaylar İleti Yönetim Sistemi’ne (İYS) kaydedilmelidir.</span></li>
        <li>{ic}<span><b>6. Künye bilgileri —</b> Unvan, adres, vergi numarası, MERSİS numarası (varsa), iletişim bilgileri ve tüketici şikâyetleri için başvuru yolları sitede kolay bulunur biçimde yer almalıdır.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>Önemli:</b> Bu bölüm genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Mevzuat zaman zaman değişir; sözleşme metinlerinizi bir avukata ya da e-ticaret hukukunda deneyimli bir danışmana kontrol ettirin ve kaynak listesindeki resmi sayfaları takip edin.</div></div>'''),
        ('kargo', 'Kargo ve iade', 'Kargo, stok ve iade süreçlerini baştan kurgulayın', '''
      <p>Müşteri deneyiminin yarısı sipariş verildikten sonra yaşanır. Hızlı ve şeffaf bir teslimat, tekrar eden alışverişin en güçlü nedenlerinden biridir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Kargo anlaşması:</b> Birden fazla firmadan desi bazlı fiyat alın. Entegrasyon sayesinde gönderi barkodu ve takip numarası otomatik oluşsun, müşteriye SMS/e-posta ile gitsin.</span></li>
        <li>{ic}<span><b>Ücretsiz kargo eşiği:</b> Ortalama sepet tutarınızın biraz üzerinde bir eşik belirlemek, sepet büyütmenin en basit yollarından biridir.</span></li>
        <li>{ic}<span><b>Stok senkronu:</b> Hem mağazada hem sitede hem pazaryerinde satış yapıyorsanız stok tek kaynaktan yönetilmeli; aksi halde olmayan ürünü satıp iptal etmek zorunda kalırsınız.</span></li>
        <li>{ic}<span><b>İade akışı:</b> Müşteri iade talebini hesabından başlatabilmeli, iade kargo kodu otomatik üretilmeli. Yasal 14 günlük iade süresini kaçırmamak için iade süreçlerini panelden izleyin.</span></li>
      </ul>
      <p>Paketleme de markanın bir parçasıdır: sağlam ama abartısız ambalaj, fatura ve kısa bir teşekkür notu, iade oranını ve olumsuz yorumları azaltır.</p>'''),
        ('urun-seo', 'Ürün sayfaları ve SEO', 'Satış yapan ürün sayfaları ve e-ticaret SEO’su', '''
      <p>Bir e-ticaret sitesinde trafiği ve satışı getiren asıl sayfalar ürün ve kategori sayfalarıdır. Ziyaretçi ürünü elleyemediği için, sayfanın bu eksikliği kapatması gerekir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Özgün ürün açıklaması:</b> Üreticinin metnini kopyalamak yerine kullanım senaryosunu, ölçüleri, malzemeyi ve bakım bilgisini kendi cümlelerinizle yazın.</span></li>
        <li>{ic}<span><b>Gerçek ve çok açılı fotoğraflar:</b> Beyaz fon ürün görselinin yanında kullanım fotoğrafı ve mümkünse kısa video ekleyin; görselleri WebP/AVIF biçiminde sıkıştırın.</span></li>
        <li>{ic}<span><b>Fiyat, stok ve teslim süresi:</b> “Yarın kargoda” gibi net bir teslimat bilgisi sepete ekleme oranını artırır.</span></li>
        <li>{ic}<span><b>Yapılandırılmış veri:</b> Product, Offer ve Review şemaları sayesinde fiyat ve puan bilgisi arama sonuçlarında görünebilir.</span></li>
        <li>{ic}<span><b>Hız:</b> Özellikle mobilde yavaş açılan ürün sayfaları hem sıralamada hem dönüşümde kaybettirir. Ölçüm ve iyileştirme adımları için <a href="site-hizi-core-web-vitals.html">site hızı ve Core Web Vitals</a> yazımıza bakabilirsiniz.</span></li>
      </ul>
      <p>Kategori sayfalarına da kısa bir giriş metni yazın, filtre sayfalarının arama motorlarında binlerce kopya sayfa üretmesini kanonik etiketlerle engelleyin. Ödeme adımını mümkün olduğunca kısa tutun: üye olmadan alışveriş seçeneği, otomatik adres tamamlama ve tek sayfada ödeme, sepeti terk etme oranını belirgin şekilde düşürür.</p>
      <blockquote><div class="bi-q">{quote}</div>E-ticarette en iyi ürün sayfası, müşterinin aklına gelecek soruyu o sormadan cevaplayan sayfadır.</blockquote>'''),
        ('yayin', 'Yayın ve büyüme', 'Yayından sonra: trafik, ölçüm ve pazaryeri dengesi', '''
      <p>Site yayına girdiği gün satış gelmeye başlamaz; trafiği sizin getirmeniz gerekir. İlk aylarda genellikle şu karışım iyi sonuç verir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Google Alışveriş ve arama reklamları</b> ile hızlı test, aynı anda <b>SEO</b> ile uzun vadeli organik trafik</span></li>
        <li>{ic}<span>Sosyal medyada ürün kullanım içerikleri ve mevcut müşterilere e-posta kampanyaları</span></li>
        <li>{ic}<span><b>Pazaryerleri</b> ile bilinirlik kazanırken, tekrar eden müşteriyi kendi sitenize yönlendirmek</span></li>
      </ul>
      <p>Pazaryerleri hızlı satış sağlar ama yüksek komisyon alır ve müşteri ilişkisinin sahibi siz olmazsınız. Kendi siteniz ise marka değeri, müşteri verisi ve kâr marjı demektir. Sağlıklı strateji çoğu zaman ikisini birlikte yürütmektir.</p>
      <p>Ölçmediğinizi geliştiremezsiniz: Google Analytics 4’te e-ticaret olaylarını (ürün görüntüleme, sepete ekleme, ödeme başlatma, satın alma) kurun, Search Console’u bağlayın ve her ay en çok terk edilen adımı iyileştirmeye odaklanın.</p>'''),
    ],
    check_title='// YAYINA ALMADAN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Vergi kaydı açıldı, e-Arşiv/e-Fatura düzeni belirlendi mi?',
        'ETBİS kaydı yapıldı, doğrulama kodu sitenin altında mı?',
        'Ön bilgilendirme formu ve mesafeli satış sözleşmesi ödeme adımında onaylatılıyor mu?',
        'KVKK aydınlatma metni, çerez politikası ve İYS onay akışı hazır mı?',
        'Sanal POS 3D Secure ile test edildi, iade senaryosu denendi mi?',
        'Kargo entegrasyonu, takip SMS’i ve iade kodu çalışıyor mu?',
        'Ürün sayfaları mobilde hızlı açılıyor, yapılandırılmış veri ekli mi?',
    ],
    faq=[
        ('E-ticaret sitesi kurmak için şirket gerekli mi?', 'Düzenli ve sürekli satış yapacaksanız evet. Sanal POS başvurusu, kargo anlaşması ve ETBİS kaydı için vergi mükellefiyeti gerekir. Evde üretilen ürünleri sınırlı ölçekte satanlar için esnaf muafiyeti seçeneği bulunur, ancak uygunluğunuzu mali müşavirinize danışın.'),
        ('ETBİS kaydı zorunlu mu, ücretli mi?', 'Kendi web sitesi veya mobil uygulaması üzerinden satış yapan işletmeler için ETBİS kaydı zorunludur ve faaliyete başlamadan önce yapılmalıdır. Kayıt eticaret.gov.tr üzerinden e-Devlet ile ücretsiz yapılır. Yalnızca yurt içi pazaryerlerinde satış yapanların ayrıca kayıt yükümlülüğü bulunmaz.'),
        ('Sanal POS mu ödeme kuruluşu mu daha avantajlı?', 'Yeni başlayan işletmeler için ödeme kuruluşları hızlı başvuru ve tek entegrasyonla tüm kartlara taksit avantajı sunar. Ciro büyüdükçe bankalarla doğrudan sanal POS anlaşması yapmak komisyon açısından avantajlı hale gelebilir. Karar verirken komisyonun yanında valör süresi ve sabit ücretleri de karşılaştırın.'),
        ('E-ticaret sitesinde cayma hakkı kaç gündür?', 'Mesafeli Sözleşmeler Yönetmeliği’ne göre tüketici kural olarak malı teslim aldığı tarihten itibaren 14 gün içinde gerekçe göstermeden cayabilir. Satıcı da cayma bildiriminden itibaren 14 gün içinde ödemeyi iade etmelidir. Kişiye özel üretilen ürünler gibi istisnalar yönetmelikte sayılmıştır.'),
        ('E-ticaret sitesi kurmak ne kadar sürer?', 'Hazır bir altyapıyla, içerik ve ürünler hazırsa birkaç hafta içinde yayına çıkmak mümkündür. Özel tasarım veya entegrasyon gerektiren projelerde süre genellikle birkaç ayı bulur. Süreyi en çok uzatan kalem genellikle ürün içerikleri ve sanal POS onay süreçleridir.'),
    ],
    outro='''<p>E-ticaret sitesi kurmak; doğru şirket yapısı, ihtiyaca uygun altyapı, güvenli ödeme, eksiksiz yasal metinler ve sorunsuz bir teslimat zincirinin aynı anda kurulmasıdır. Bu parçalardan biri eksik kaldığında satış ya hiç başlamaz ya da ilk iade talebinde sorun çıkar.</p>
      <p>CYF Tech olarak hazır altyapıların yetmediği noktada ihtiyacınıza özel <a href="web-cozumleri.html">e-ticaret ve web yazılımı</a> geliştiriyor, ödeme ve kargo entegrasyonlarını uçtan uca kuruyoruz. Projenizi konuşmak isterseniz <a href="iletisim.html">bize yazın</a>; mevcut durumunuzu birlikte değerlendirelim.</p>''',
    sources=[
        ('Ticaret Bakanlığı — Elektronik Ticaret Bilgi Sistemi (ETBİS)', 'https://ticaret.gov.tr/ic-ticaret/elektronik-ticaret/elektronik-ticaret-bilgi-sistemi-etbis'),
        ('Ticaret Bakanlığı — Elektronik ticaret sıkça sorulan sorular', 'https://ticaret.gov.tr/ic-ticaret/sikca-sorulan-sorular/elektronik-ticaret'),
        ('Ticaret Bakanlığı — İnternet ve telefonla yapılan satışlara yeni standartlar', 'https://ticaret.gov.tr/haberler/internet-ve-telefon-vasitasiyla-yapilan-satislara-yeni-standartlar-geldi'),
        ('Mesafeli Sözleşmeler Yönetmeliği (güncel metin, Lexpera)', 'https://www.lexpera.com.tr/mevzuat/yonetmelikler/mesafeli-sozlesmeler-yonetmeligi'),
        ('TCMB — Ödeme hizmetleri: elektronik para kuruluşları', 'https://www.tcmb.gov.tr/wps/wcm/connect/TR/TCMB+TR/Main+Menu/Temel+Faaliyetler/Odeme+Hizmetleri/Elektronik+Para+Kuruluslari'),
        ('İleti Yönetim Sistemi (İYS)', 'https://iys.org.tr/'),
    ],
)
