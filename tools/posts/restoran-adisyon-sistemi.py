POST = dict(
    slug='restoran-adisyon-sistemi',
    kat='Yazılım',
    keyword='restoran adisyon sistemi',
    title='Restoran Adisyon Sistemi Seçimi: POS ve Adisyon Programı Rehberi',
    h1='Restoran adisyon sistemi seçimi: POS ve adisyon programı rehberi.',
    crumb='YAZILIM',
    sure='8 dk',
    ozet='Garson ekranından mutfak ekranına, yazarkasa entegrasyonundan e-Adisyon’a, çok şubeli raporlamadan kuver yasağına: restoran adisyon ve POS sistemi seçerken bakmanız gerekenleri tarafsız bir rehberde topladık.',
    desc='Restoran adisyon sistemi seçerken nelere dikkat edilmeli? Mutfak ekranı, ÖKC entegrasyonu, e-Adisyon, stok ve reçete, çok şube yönetimi ve kontrol listesi.',
    lead='Cuma akşamı, salon dolu. Garson siparişi kâğıda yazıp mutfağa koşuyor, mutfak okunmayan bir fişi tahmin ediyor, kasada hesap tutmuyor. Bir restoranda kaybolan para çoğu zaman pahalı malzemede değil, <b>sipariş ile kasa arasındaki boşluklarda</b>dır.',
    intro='''<p>Bir <b>restoran adisyon sistemi</b>, siparişin masada alındığı andan hesabın kapandığı ana kadar her adımı kayıt altına alan yazılım ve donanım bütünüdür: garson ekranı ya da el terminali, mutfak ekranı veya yazıcısı, kasa ve yazarkasa bağlantısı, menü, stok ve raporlar. Doğru kurulduğunda servis hızlanır, hatalı siparişler azalır ve işletme sahibi gün sonunda neyin ne kadar sattığını rakamla görür.</p>
      <p>Piyasada çok sayıda adisyon programı var ve hepsi benzer vaatlerle geliyor. Bu yazıda belirli bir markayı değil, seçim yaparken bakmanız gereken kriterleri anlatıyoruz: temel modüller, mutfak ekranı, ÖKC ve e-belge uyumu, Türkiye’deki güncel menü ve fiyat kuralları, stok ve reçete yönetimi, çok şubeli yapı, donanım ve maliyet. Sonda karşılaştırma yaparken kullanabileceğiniz bir kontrol listesi bulacaksınız.</p>''',
    sections=[
        ('temel-moduller', 'Temel modüller', 'Bir restoran adisyon sisteminde olması gereken modüller', '''
      <p>İşletmenizin büyüklüğü ve konsepti ne olursa olsun, iyi bir adisyon programında şu temel parçalar bulunmalı:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Masa ve sipariş yönetimi:</b> Salon planı, masa birleştirme ve taşıma, kişi sayısı, sipariş notları (“soğansız”, “az pişmiş”) ve ürün varyasyonları.</span></li>
        <li>{ic}<span><b>Garson ekranı:</b> Tablet, telefon veya el terminalinden sipariş alma; siparişin anında mutfağa ve kasaya düşmesi.</span></li>
        <li>{ic}<span><b>Mutfak ve bar ekranı:</b> Siparişlerin hazırlanacağı istasyona göre ayrılması, sıraya konması ve “hazır” bilgisinin garsona dönmesi.</span></li>
        <li>{ic}<span><b>Kasa ve ödeme:</b> Hesap bölme, kısmi ödeme, indirim ve ikram yetkileri, nakit, kart ve yemek kartı gibi farklı ödeme tipleri.</span></li>
        <li>{ic}<span><b>Menü yönetimi:</b> Ürün, kategori, fiyat ve saatlik menülerin (kahvaltı, öğle, happy hour) tek yerden yönetilmesi.</span></li>
        <li>{ic}<span><b>Raporlar:</b> Gün sonu, ürün bazlı satış, personel performansı, iptal ve ikram raporları.</span></li>
      </ul>
      <h3>Paket servis ve entegrasyonlar</h3>
      <p>Paket servis yapıyorsanız telefon siparişi, müşteri adres kaydı ve kurye takibi de bu listeye eklenir. Online yemek sipariş platformlarından gelen siparişlerin ayrı bir tabletten elle yeniden girilmesi, yoğun saatlerde hata ve gecikmenin en sık nedenlerinden biridir; bu siparişlerin doğrudan adisyon sistemine ve mutfak ekranına düşmesi büyük fark yaratır. Benzer şekilde yemek kartlarıyla ödeme alıyorsanız, bu ödemelerin kasa raporlarında ayrı bir ödeme tipi olarak görünmesi gün sonu mutabakatını kolaylaştırır.</p>
      <p>Seçim yaparken bugün kullandığınız platformların ve muhasebe programınızın listesini çıkarın ve her biri için “entegrasyon hazır mı, ek ücretli mi, yoksa geliştirme mi gerekiyor?” sorusunu ayrı ayrı sorun.</p>'''),
        ('mutfak-ekrani', 'Mutfak ekranı', 'Mutfak ekranı (KDS) ve anlık senkronizasyon', '''
      <p>Kâğıt fişten mutfak ekranına geçiş, adisyon sistemlerinde en hızlı fark edilen iyileştirmelerden biridir. Mutfak ekranı (Kitchen Display System, KDS) siparişleri istasyonlara göre ayırır, bekleme süresini gösterir ve hangi masanın siparişinin geciktiğini herkesin görmesini sağlar.</p>
      <p>Değerlendirirken şu sorulara cevap arayın:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Gerçek zamanlı mı?</b> Garsonun girdiği sipariş, yaptığı değişiklik ya da iptal mutfak ve kasa ekranına saniyeler içinde yansımalı. Gecikmeli senkronizasyon, “bu iptal edilmişti” tartışmalarının ana kaynağıdır.</span></li>
        <li>{ic}<span><b>İstasyon ayrımı var mı?</b> Sıcak mutfak, soğuk mutfak, bar ve tatlı istasyonları yalnızca kendi kalemlerini görebilmeli.</span></li>
        <li>{ic}<span><b>Hazırlık süreleri ölçülüyor mu?</b> Ürün bazında ortalama hazırlık süresi raporu, yoğun saatlerdeki darboğazları ortaya çıkarır.</span></li>
        <li>{ic}<span><b>İnternet kesilirse ne olur?</b> Sistemin yerel ağda çalışmaya devam edip edemediğini, bağlantı geri geldiğinde verilerin nasıl eşitlendiğini mutlaka sorun.</span></li>
      </ul>
      <blockquote><div class="bi-q">{quote}</div>Mutfak ekranı yalnızca kâğıdı kaldırmaz; mutfakla salon arasındaki tartışmayı da kaldırır.</blockquote>'''),
        ('okc-ve-ebelge', 'ÖKC ve e-belge uyumu', 'Yazarkasa (ÖKC) entegrasyonu, e-Fatura ve e-Adisyon', '''
      <p>Türkiye’de bir adisyon sistemini seçerken mali mevzuat uyumu, özellik listesinden daha önemlidir. Bakılması gereken üç başlık var:</p>
      <h3>Yeni nesil ödeme kaydedici cihaz (ÖKC) entegrasyonu</h3>
      <p>Perakende satışlarda yeni nesil ÖKC kullanımı Gelir İdaresi Başkanlığı (GİB) düzenlemeleriyle belirlenir; mevzuat bu cihazları bilgisayar bağlantılı ve EFT-POS özellikli olanlar şeklinde gruplandırır. Adisyon programının, kullandığınız ya da kullanacağınız ÖKC marka ve modeliyle entegre çalışıp çalışmadığını, yani hesabın kasaya tekrar elle girilmeden fişe dönüşüp dönüşmediğini kontrol edin. Çift giriş hem zaman kaybıdır hem de kayıt dışı satış riskini artırır.</p>
      <h3>e-Fatura ve e-Arşiv Fatura</h3>
      <p>Kurumsal müşterilere fatura kesiyorsanız ya da e-Fatura mükellefiyseniz, adisyon sisteminin e-Fatura ve e-Arşiv sağlayıcınızla entegre olması hesap kapanışını hızlandırır.</p>
      <h3>e-Adisyon</h3>
      <p>e-Adisyon, masada servis yapılan yeme-içme işletmelerinde adisyonun elektronik ortamda düzenlenmesini öngören bir e-belge uygulamasıdır. GİB, belirlediği mükelleflere en az üç ay süre tanıyarak e-Adisyon’a geçiş zorunluluğu getirebilir; zorunluluk getirilmeyen işletmeler için uygulama isteğe bağlıdır. Bu nedenle seçeceğiniz sistemin e-Adisyon’a geçişi destekleyip desteklemediğini veya yol haritasında olup olmadığını sormakta fayda var.</p>
      <div class="bi-note">{warn}<div><b>Not:</b> Mali mevzuat sık değişir ve kapsam işletmeden işletmeye farklılık gösterir. Bu bölüm genel bilgilendirme amaçlıdır, mali veya hukuki danışmanlık değildir; güncel yükümlülükleriniz için mali müşavirinize danışın ve GİB duyurularını takip edin.</div></div>'''),
        ('menu-kurallari', 'Menü ve fiyat kuralları', 'Menü, fiyat listesi ve kuver yasağı: 2026 kuralları', '''
      <p>Ticaret Bakanlığı’nın Fiyat Etiketi Yönetmeliği’nde son yıllarda yaptığı değişiklikler, adisyon sisteminizdeki menü ve fiyat ayarlarını doğrudan etkiliyor:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Giriş ve masada fiyat listesi:</b> 2024 başından itibaren restoran ve kafelerin fiyat listelerini işletme girişinde ve masalarda bulundurması gerekiyor. 2025’teki değişiklikle karekodlu dijital menü de sunulabiliyor; ancak bu, basılı fiyat listesi yükümlülüğünü ortadan kaldırmıyor.</span></li>
        <li>{ic}<span><b>Servis, masa ve kuver ücreti yasağı:</b> 30 Ocak 2026’da yürürlüğe giren değişiklikle tüketiciden zorunlu servis ücreti, masa ücreti veya kuver ücreti alınamıyor; istenmeden masaya getirilen ürünler ücretlendirilemiyor. Bahşiş ise yalnızca isteğe bağlı olabilir.</span></li>
      </ul>
      <p>Adisyon sisteminiz bu kurallara uyumlu olmalı: otomatik servis bedeli ekleyen ayarlar kapatılabilmeli, menü fiyatları tek merkezden güncellendiğinde dijital menüye, garson ekranına ve basılacak fiyat listesine aynı anda yansımalı. Fiyatı bir ekranda güncelleyip diğerinde unutmak, tüketici şikâyetlerine ve idari yaptırımlara yol açabilir.</p>
      <div class="bi-note">{tip}<div><b>Pratik öneri:</b> Fiyat değişikliklerini sistemde ileri tarihli olarak tanımlayabilen bir programla, zam günü sabahı bütün ekranlar ve menüler aynı anda güncellenir.</div></div>'''),
        ('stok-recete', 'Stok ve reçete', 'Stok, reçete ve maliyet takibi', '''
      <p>Restoran kârlılığı satıştan çok maliyetle ilgilidir. Adisyon sistemi satışları kayıt altına alıyorsa, bir adım ötesi her satışın stoktan neyi düştüğünü bilmektir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Reçete tanımı:</b> Her menü ürünü için gramajlı reçete; ürün satıldıkça malzemelerin stoktan otomatik düşmesi.</span></li>
        <li>{ic}<span><b>Porsiyon maliyeti:</b> Malzeme fiyatı değiştiğinde ürün maliyetinin ve kâr marjının otomatik güncellenmesi. Enflasyonist dönemlerde fiyatlamayı doğru yapmanın en sağlam yolu budur.</span></li>
        <li>{ic}<span><b>Fire ve sayım:</b> Fire kayıtları ile dönemsel sayım sonuçlarının teorik stokla karşılaştırılması; kaçak ve israfın görünür hâle gelmesi.</span></li>
        <li>{ic}<span><b>Kritik stok uyarısı:</b> Yoğun bir hafta sonundan önce eksik malzemelerin listelenmesi.</span></li>
      </ul>
      <p>Her işletmenin ilk günden tam stok modülüne ihtiyacı yoktur; ancak seçtiğiniz sistemin büyüdüğünüzde bu modülleri sunabilmesi, ileride yazılım değiştirme zahmetinden kurtarır.</p>'''),
        ('cok-sube', 'Çok şubeli yönetim', 'Çok şubeli restoranlar için merkezi yönetim', '''
      <p>İkinci şubeyi açtığınızda yazılımdan beklentiniz değişir. Her şubenin ayrı bir program kullandığı, raporların e-postayla toplandığı bir yapı kısa sürede yönetilemez hâle gelir. Çok şubeli işletmeler için aranması gerekenler:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Merkezi menü ve fiyat:</b> Menünün merkezden yönetilmesi, gerekirse şubeye özel fiyat ve ürün tanımlanabilmesi.</span></li>
        <li>{ic}<span><b>Şube karşılaştırmalı raporlar:</b> Ciro, ürün karması, ortalama hesap tutarı ve iptal oranlarının şubeler arasında yan yana görülmesi.</span></li>
        <li>{ic}<span><b>Personel ve yetki yönetimi:</b> Hangi personelin hangi şubede hangi yetkiyle (indirim, ikram, iptal) çalıştığının tek panelden yönetilmesi.</span></li>
        <li>{ic}<span><b>Kasa ve finans takibi:</b> Şube kasalarının, gün sonu kapanışlarının ve finansal raporların merkezden izlenmesi.</span></li>
        <li>{ic}<span><b>Bulut tabanlı erişim:</b> İşletme sahibinin şubeye gitmeden, telefonundan anlık satışları görebilmesi.</span></li>
      </ul>'''),
        ('donanim-maliyet', 'Donanım ve maliyet', 'Donanım, kurulum ve adisyon programı fiyatları', '''
      <p>Adisyon sisteminin maliyeti yalnızca yazılım lisansından oluşmaz. Teklifleri karşılaştırırken şu kalemleri ayrı ayrı görün:</p>
      <table>
        <thead><tr><th>Kalem</th><th>Neye dikkat etmeli?</th></tr></thead>
        <tbody>
          <tr><td>Yazılım</td><td>Aylık/yıllık abonelik mi, tek seferlik lisans mı? Şube, cihaz veya kullanıcı başına mı ücretlendiriliyor?</td></tr>
          <tr><td>Donanım</td><td>Kasa bilgisayarı, garson tableti veya el terminali, mutfak ekranı, fiş ve mutfak yazıcıları. Mevcut cihazlarınız kullanılabiliyor mu?</td></tr>
          <tr><td>ÖKC ve ödeme</td><td>Yeni nesil yazarkasa ve banka POS entegrasyonu için ek ücret var mı?</td></tr>
          <tr><td>Entegrasyonlar</td><td>e-Fatura sağlayıcısı, online sipariş platformları, yemek kartları ve muhasebe entegrasyonları dahil mi?</td></tr>
          <tr><td>Kurulum ve eğitim</td><td>Menü girişi, salon planı, personel eğitimi kim tarafından yapılıyor?</td></tr>
          <tr><td>Destek</td><td>Akşam ve hafta sonu, yani en yoğun saatlerde destek alınabiliyor mu?</td></tr>
        </tbody>
      </table>
      <p>Restoranlarda en kritik saatler, yazılım firmalarının mesai saatleri dışında kalır. Cuma akşamı sistem durduğunda telefonu açan biri yoksa, ucuz yazılım çok pahalıya gelir. Teklifte destek saatlerini ve müdahale sürelerini yazılı olarak isteyin.</p>
      <div class="bi-note">{tip}<div><b>Deneme süresini akıllıca kullanın:</b> Demoyu boş bir ofiste değil, mümkünse yoğun bir serviste deneyin. Garsonların sistemi ne kadar sürede öğrendiği, sizin için en gerçekçi ölçüttür.</div></div>'''),
        ('ornek', 'Bir örnek: RestaurantBill', 'Bir örnek: RestaurantBill’i nasıl kurguladık?', '''
      <p>Yukarıdaki kriterlerin bir kısmını kendi ürünümüzü geliştirirken yakından tecrübe ettik. CYF Tech olarak geliştirdiğimiz <b>RestaurantBill</b>, çok şubeli restoranlar için tasarlanmış bir adisyon ve mutfak ekranı sistemi. Garson, mutfak ve kasa ekranları siparişleri anlık olarak paylaşıyor; şube, personel, menü, kasa ve finansal raporlar tek panelden yönetiliyor.</p>
      <p>Bu süreçte öğrendiğimiz en önemli şey, restoran yazılımının ofiste değil salonda test edilmesi gerektiği oldu: bir özelliğin değeri, yoğun serviste garsonun onu kaç saniyede kullanabildiğiyle ölçülüyor. Ürünü <a href="projelerimiz.html">projelerimiz</a> sayfasında inceleyebilirsiniz. Hangi sistemi seçerseniz seçin, aşağıdaki kontrol listesini teklifleri karşılaştırırken kullanmanızı öneririz. Restoranınızın web sitesini de yenilemeyi düşünüyorsanız <a href="web-cozumleri.html">web çözümlerimize</a> göz atabilirsiniz.</p>'''),
    ],
    check_title='// ADİSYON SİSTEMİ SEÇMEDEN ÖNCE KONTROL LİSTESİ',
    checks=[
        'Garson, mutfak ve kasa ekranları gerçek zamanlı senkron mu?',
        'İnternet kesildiğinde sistem çalışmaya devam ediyor mu?',
        'Kullandığınız ÖKC ve e-Fatura sağlayıcısıyla entegrasyon var mı?',
        'Menü ve fiyat değişiklikleri tüm ekranlara aynı anda yansıyor mu?',
        'Otomatik servis veya kuver bedeli ekleyen ayarlar kapatılabiliyor mu?',
        'Stok, reçete ve çok şube modülleri ihtiyaç olduğunda eklenebiliyor mu?',
        'Akşam ve hafta sonu destek saatleri yazılı olarak taahhüt ediliyor mu?',
    ],
    faq=[
        ('Adisyon programı ile POS sistemi arasındaki fark nedir?', 'Adisyon programı siparişlerin alınmasını, mutfağa iletilmesini ve masaların hesabını yönetir. POS ise ödemenin alındığı kasa ve kart cihazı tarafıdır. Günümüzde çoğu restoran yazılımı ikisini birleştirir ve yeni nesil yazarkasa ile entegre çalışır.'),
        ('e-Adisyon her restoran için zorunlu mu?', 'Hayır. GİB, belirlediği mükelleflere en az üç ay süre tanıyarak e-Adisyon zorunluluğu getirebilir; zorunluluk getirilmeyen işletmeler için uygulama isteğe bağlıdır. İşletmenizin durumunu mali müşavirinizle ve GİB duyurularıyla kontrol edin.'),
        ('Restoranlar kuver veya servis ücreti alabilir mi?', 'Hayır. 30 Ocak 2026’da yürürlüğe giren Fiyat Etiketi Yönetmeliği değişikliğiyle zorunlu servis, masa ve kuver ücreti alınması yasaklandı. Müşteri yalnızca sipariş ettiği ürünlerin bedelini öder; bahşiş isteğe bağlıdır.'),
        ('Adisyon sistemi internet olmadan çalışır mı?', 'Sisteme göre değişir. Bazı çözümler yerel ağda çalışmaya devam edip bağlantı geldiğinde verileri eşitler, bazıları ise tamamen internete bağlıdır. Seçim yapmadan önce kesinti senaryosunu mutlaka sorun.'),
        ('Küçük bir kafe için adisyon sistemi gerekli mi?', 'Az masalı bir kafede bile hesap hatalarını azaltmak, ürün bazlı satışları görmek ve yazarkasa ile çift girişten kurtulmak için basit bir adisyon sistemi fayda sağlar. İşletme büyüdükçe mutfak ekranı ve stok modülleri eklenebilir.'),
    ],
    outro='''<p>Doğru restoran adisyon sistemi, servisinizi hızlandırır, sipariş ve hesap hatalarını azaltır, maliyetlerinizi görünür kılar ve mali mevzuata uyumu kolaylaştırır. Seçim yaparken parlak demolardan çok gerçek zamanlı senkronizasyona, ÖKC ve e-belge uyumuna, güncel menü kurallarına, büyüme ihtimalinize ve yoğun saatlerdeki desteğe odaklanın.</p>
      <p>İşletmenize uygun adisyon kurgusunu konuşmak, RestaurantBill’i yakından görmek ya da kendi iş akışınıza özel bir çözüm değerlendirmek isterseniz <a href="iletisim.html">bizimle iletişime geçin</a>.</p>''',
    sources=[
        ('Ticaret Bakanlığı — Fiyat Etiketi Yönetmeliği’nde değişiklik (30 Ocak 2026)', 'https://ticaret.gov.tr/haberler/ticaret-bakanligi-tarafindan-fiyat-etiketi-yonetmeliginde-degisiklik-yapildi'),
        ('GİB — Yeni Nesil Ödeme Kaydedici Cihazlar', 'https://ynokc.gib.gov.tr'),
        ('GİB — e-Belge uygulamaları (e-Fatura, e-Arşiv, e-Adisyon)', 'https://ebelge.gib.gov.tr'),
        ('Sovos — E-Adisyon kılavuzu', 'https://sovos.com/tr/blog/kdv/e-adisyon-donemi-basliyor-beklenen-kilavuz-yayimlandi/'),
    ],
)
