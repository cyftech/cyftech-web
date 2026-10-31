POST = dict(
    slug='donusum-odakli-web-tasarim',
    kat='Web Tasarım',
    keyword='dönüşüm odaklı web tasarım',
    title='Dönüşüm Odaklı Web Tasarım: Ziyaretçiyi Müşteriye Çeviren İlkeler',
    h1='Dönüşüm odaklı web tasarım: ziyaretçiyi müşteriye çeviren ilkeler.',
    crumb='WEB TASARIM',
    sure='10 dk',
    ozet='Güzel görünen her site satış getirmez. Dönüşüm odaklı web tasarımın temel ilkelerini; ilk ekran, CTA, form, güven, hız ve ölçümle ilgili uygulanabilir önerilerle anlattık.',
    desc='Dönüşüm odaklı web tasarım nedir? İlk ekran, CTA, form tasarımı, güven unsurları, hız ve A/B testiyle ziyaretçiyi müşteriye çeviren UX ilkelerini öğrenin.',
    lead='Sitenize her ay yüzlerce kişi geliyor ama telefon çalmıyor, form dolmuyor mu? Sorun çoğu zaman trafik değil, tasarımdır. <b>Dönüşüm odaklı web tasarım</b>, ziyaretçinin sitede ne yapmasını istediğinizi merkeze alır ve her öğeyi o eyleme hizmet edecek şekilde kurar.',
    intro='''<p>Estetik önemlidir; ama bir web sitesinin işi beğenilmek değil, sonuç üretmektir. Teklif talebi, satın alma, randevu, abonelik ya da bir telefon araması: hangisi sizin için değerliyse tasarımın her kararı ona göre verilmelidir.</p>
      <p>Bu yazıda dönüşümün ne olduğunu ve nasıl ölçüldüğünü, ardından kullanıcı deneyimi (UX) araştırmalarına dayanan ve bizim projelerimizde de uyguladığımız temel ilkeleri anlatıyoruz. Her ilkenin sonunda kendi sitenizde hemen kontrol edebileceğiniz somut öneriler bulacaksınız.</p>''',
    sections=[
        ('donusum-nedir', 'Dönüşüm nedir?', 'Dönüşüm nedir, dönüşüm oranı nasıl hesaplanır?', '''
      <p>Dönüşüm, ziyaretçinin sitede sizin için değerli bir eylemi tamamlamasıdır. Dönüşüm oranı ise bu eylemi yapan ziyaretçi sayısının toplam ziyaretçi sayısına bölünmesiyle bulunur. Ayda 2.000 ziyaretçi alan ve 40 teklif talebi toplayan bir sitenin dönüşüm oranı yüzde 2’dir.</p>
      <p>Dönüşümleri ikiye ayırmak faydalıdır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Makro dönüşüm:</b> Asıl hedef. Satın alma, teklif formu, randevu, telefon araması.</span></li>
        <li>{ic}<span><b>Mikro dönüşüm:</b> Hedefe giden adımlar. Katalog indirme, bültene kayıt, fiyat sayfasını görüntüleme, WhatsApp butonuna tıklama.</span></li>
      </ul>
      <p>“İyi dönüşüm oranı kaçtır?” sorusunun tek bir cevabı yoktur; sektör, trafik kaynağı, ürün fiyatı ve hedef eyleme göre büyük farklar görülür. En sağlıklı kıyas, kendi sitenizin geçen ayki ve geçen yılki değeridir. Önce ölçün, sonra iyileştirin.</p>'''),
        ('ilk-ekran', 'İlk ekran ve değer önerisi', 'İlk ekran: birkaç saniyede “neden siz?” sorusunu yanıtlayın', '''
      <p>Ziyaretçi sayfayı açtığında kaydırmadan gördüğü alan, kalıp kalmayacağına karar verdiği yerdir. Bu alanda üç sorunun cevabı net olmalıdır: <b>Ne yapıyorsunuz, kimin için yapıyorsunuz ve ziyaretçi şimdi ne yapmalı?</b></p>
      <ul class="bi-list">
        <li>{ic}<span><b>Fayda anlatan başlık:</b> “Geleceğin çözümleri” gibi genel sloganlar yerine “Apartman aidatlarını tek panelden takip edin” gibi somut bir vaat.</span></li>
        <li>{ic}<span><b>Destekleyici alt başlık:</b> Vaadi bir cümleyle somutlaştırın: kime, nasıl, ne kadar sürede.</span></li>
        <li>{ic}<span><b>Tek bir ana buton:</b> Ziyaretçinin atması gereken ilk adım.</span></li>
        <li>{ic}<span><b>Gerçek görsel:</b> Ürününüzün ekranı, ekibiniz ya da yaptığınız iş. Stok fotoğraflar güven değil şüphe uyandırır.</span></li>
      </ul>
      <div class="bi-note">{tip}<div><b>Beş saniye testi:</b> Sitenizi tanımayan birine ana sayfayı beş saniye gösterip kapatın. Ardından “Bu firma ne yapıyor, senden ne istiyor?” diye sorun. Cevap veremiyorsa ilk ekranı yeniden yazmanın zamanı gelmiştir.</div></div>'''),
        ('cta', 'Eylem çağrısı (CTA)', 'Eylem çağrısı (CTA) tasarımı: tek hedef, net metin', '''
      <p>Eylem çağrısı butonları dönüşüm odaklı tasarımın kalbidir. Her sayfanın bir ana hedefi olmalı ve sayfadaki görsel hiyerarşi o hedefe işaret etmelidir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Fiil ile başlayan, sonucu anlatan metin:</b> “Gönder” yerine “Ücretsiz teklif alın”, “Tıklayın” yerine “Demo randevusu oluşturun”.</span></li>
        <li>{ic}<span><b>Kontrast:</b> Ana buton, sayfadaki diğer öğelerden renk ve boyutla ayrışmalı. İkincil eylemler daha sade görünmeli.</span></li>
        <li>{ic}<span><b>Doğru yer:</b> İlk ekranda bir kez, uzun sayfalarda ilgili bölümlerin sonunda tekrar. Mobilde başparmağın ulaştığı alanda.</span></li>
        <li>{ic}<span><b>Az seçenek:</b> Aynı alanda beş farklı buton, ziyaretçiyi karar vermekten alıkoyar. Seçenekler azaldıkça karar kolaylaşır.</span></li>
      </ul>
      <p>Butonun hemen altına kaygıyı azaltan kısa bir not eklemek de işe yarar: “Ücretsizdir, 24 saat içinde dönüş yapıyoruz” ya da “Kredi kartı gerekmez” gibi.</p>'''),
        ('hiyerarsi', 'Taranabilir içerik', 'Görsel hiyerarşi ve taranabilir içerik', '''
      <p>İnsanlar web sayfalarını okumaz, tarar. Nielsen Norman Group’un göz izleme araştırmaları, kullanıcıların metin ağırlıklı sayfalarda büyük ölçüde “F” şeklinde bir tarama deseni izlediğini ve bu desenin masaüstünde de mobilde de geçerliliğini koruduğunu gösteriyor. Bu desenin dışında kalan bilgiler büyük ölçüde gözden kaçar. Sağdan sola okunan dillerde, örneğin Arapçada, desen tersine döner.</p>
      <p>Bu davranışa göre tasarlamanın yolları:</p>
      <ul class="bi-list">
        <li>{ic}<span>Her bölümü açıklayıcı bir ara başlıkla başlatın; başlıkları okuyan kişi sayfanın özetini almalı.</span></li>
        <li>{ic}<span>Paragrafları kısa tutun, önemli bilgiyi cümlenin başına koyun ve anahtar ifadeleri kalın yazın.</span></li>
        <li>{ic}<span>Uzun açıklamalar yerine madde işaretli listeler, karşılaştırma tabloları ve ikonlu kartlar kullanın.</span></li>
        <li>{ic}<span>Beyaz alandan korkmayın; sıkışık bir sayfa ne kadar bilgi içerirse içersin okunmaz.</span></li>
      </ul>
      <blockquote><div class="bi-q">{quote}</div>Ziyaretçi aradığını bulmak için düşünmek zorunda kalıyorsa, tasarım işini yapmıyor demektir.</blockquote>'''),
        ('formlar', 'Form tasarımı', 'Form tasarımı: her alan bir engel', '''
      <p>Formlar dönüşümün gerçekleştiği yerdir ve en çok kaybın yaşandığı yer de genellikle burasıdır. Baymard Institute’un e-ticaret ödeme süreci araştırması, ortalama bir ödeme akışında varsayılan olarak 14,88 form alanı gösterildiğini, oysa ideal bir akışın 7–8 alanla tamamlanabileceğini ortaya koyuyor. Aynı ilke teklif ve iletişim formları için de geçerlidir: sorduğunuz her ek soru, formu yarıda bırakmak için bir gerekçedir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Yalnızca gerekeni sorun:</b> İlk temasta ad, telefon veya e-posta ve kısa bir mesaj çoğu zaman yeterlidir. Ayrıntıyı görüşmede alırsınız.</span></li>
        <li>{ic}<span><b>Etiketleri alanın üstüne yazın:</b> Yalnızca kutunun içindeki silik yazıya güvenmeyin; yazmaya başlayınca kaybolur.</span></li>
        <li>{ic}<span><b>Doğru klavyeyi açın:</b> Telefon alanında rakam klavyesi, e-posta alanında @ işaretli klavye mobilde ciddi fark yaratır.</span></li>
        <li>{ic}<span><b>Hataları anında ve nazikçe gösterin:</b> Form gönderildikten sonra tüm alanları silen bir hata mesajı, ziyaretçiyi kalıcı olarak kaybettirir.</span></li>
        <li>{ic}<span><b>Teşekkür sayfası kullanın:</b> Hem ziyaretçiye ne olacağını anlatır hem de dönüşümü ölçmeyi kolaylaştırır.</span></li>
      </ul>
      <div class="bi-note">{warn}<div><b>KVKK hatırlatması:</b> Formda kişisel veri topluyorsanız aydınlatma metnine bağlantı vermeniz, pazarlama iletişimi için ayrı ve önceden işaretlenmemiş bir onay kutusu kullanmanız gerekir. Bu not hukuki danışmanlık değildir; ayrıntılar için <a href="kvkk-uyumlu-web-sitesi.html">KVKK uyumlu web sitesi</a> yazımıza ve bir hukukçuya başvurun.</div></div>'''),
        ('guven', 'Güven ve sosyal kanıt', 'Güven unsurları ve sosyal kanıt', '''
      <p>Ziyaretçi sizi tanımıyorsa, karar vermeden önce kanıt arar. Baymard’ın aynı araştırmasında kullanıcıların yaklaşık beşte biri, siteye kart bilgisini emanet edecek kadar güvenmedikleri için alışverişi yarıda bıraktığını söylüyor. Güven, tasarımın bir süsü değil, dönüşümün ön koşuludur.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Gerçek referanslar:</b> Müşteri logoları, isim ve fotoğrafla desteklenmiş yorumlar, tamamlanmış proje örnekleri.</span></li>
        <li>{ic}<span><b>Somut rakamlar:</b> Kaç yıldır faaliyettesiniz, kaç projeyi tamamladınız? Doğrulanabilir olanları yazın.</span></li>
        <li>{ic}<span><b>Şeffaf iletişim bilgileri:</b> Açık adres, sabit telefon, harita ve çalışma saatleri.</span></li>
        <li>{ic}<span><b>Teknik güven işaretleri:</b> HTTPS, güncel bir tasarım ve hatasız çalışan sayfalar. Kırık bir bağlantı bile güveni sarsar.</span></li>
      </ul>
      <p>Referansları ayrı bir sayfada saklamak yerine karar anına yakın yerleştirin: fiyat bilgisinin ya da teklif butonunun yanında bir müşteri yorumu, “Hakkımızda” sayfasının en altında kalan bir logodan çok daha etkilidir.</p>'''),
        ('surtunme', 'Sürtünmeyi azaltın', 'Sürtünmeyi azaltın: ziyaretçiyi yoran küçük engeller', '''
      <p>Dönüşümü öldüren şey çoğu zaman tek bir büyük hata değil, üst üste binen küçük engellerdir. Baymard’ın listesindeki terk nedenlerine bakınca tablo netleşir: beklenmedik ek maliyetler, zorunlu üyelik, uzun ve karmaşık süreçler, site hataları. Bunların hiçbiri tasarım ekibinin kontrolü dışında değildir.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Sade menü:</b> Ana menüde beş-yedi öğe çoğu site için yeterlidir. Menü öğelerine iç jargon değil, müşterinin aradığı kelimeleri yazın.</span></li>
        <li>{ic}<span><b>Saygılı açılır pencereler:</b> Sayfa açılır açılmaz ekranı kaplayan bülten pencereleri, ziyaretçiyi içeriği görmeden kaçırır. Gerekiyorsa sayfanın sonuna doğru ve kolayca kapatılabilir biçimde gösterin.</span></li>
        <li>{ic}<span><b>Şeffaf fiyat ve koşullar:</b> Kargo, kurulum ya da ek ücretleri son adımda değil, en baştan gösterin. Sürpriz maliyet, en sık terk nedenidir.</span></li>
        <li>{ic}<span><b>Üyeliği zorunlu tutmayın:</b> E-ticarette misafir olarak satın alma seçeneği sunun; üyeliği işlemden sonra önerin.</span></li>
        <li>{ic}<span><b>Alternatif iletişim yolları:</b> Formu doldurmak istemeyen ziyaretçi için telefon ve WhatsApp seçeneği görünür olsun.</span></li>
      </ul>
      <p>Kendi sitenizde bir müşteri gibi baştan sona bir işlem yapın: ürün seçin, form doldurun, telefonda deneyin. Sizi bir saniye bile duraksatan her nokta, ziyaretçilerinizin bir kısmını kaybettiğiniz yerdir.</p>'''),
        ('hiz-mobil', 'Hız ve mobil deneyim', 'Hız ve mobil deneyim: görünmeyen dönüşüm katili', '''
      <p>Yavaş açılan bir sayfa, ziyaretçinin tasarımınızı görmesine bile fırsat vermez. Google, sayfa deneyimini Core Web Vitals adı verilen üç metrikle ölçer ve web.dev’de iyi deneyim için şu eşikleri önerir:</p>
      <table>
        <thead><tr><th>Metrik</th><th>Neyi ölçer?</th><th>İyi kabul edilen değer</th></tr></thead>
        <tbody>
          <tr><td>LCP (Largest Contentful Paint)</td><td>Ana içeriğin yüklenme süresi</td><td>2,5 saniye veya altı</td></tr>
          <tr><td>INP (Interaction to Next Paint)</td><td>Tıklamalara verilen tepki hızı</td><td>200 milisaniye veya altı</td></tr>
          <tr><td>CLS (Cumulative Layout Shift)</td><td>Sayfa yüklenirken öğelerin kayması</td><td>0,1 veya altı</td></tr>
        </tbody>
      </table>
      <p>Bunlar yalnızca SEO metrikleri değildir; doğrudan dönüşümü etkiler. Butona basmak üzereyken kayan bir sayfa ya da tepki vermeyen bir form, ziyaretçinin vazgeçmesi için yeterlidir. Hız optimizasyonunun ayrıntılarını <a href="site-hizi-core-web-vitals.html">site hızı ve Core Web Vitals</a> yazımızda anlattık.</p>
      <p>Mobilde ayrıca telefon numarasının tek dokunuşla aranabilmesi, butonların parmakla rahat basılacak büyüklükte olması ve açılır pencerelerin ekranı kapatmaması gerekir.</p>'''),
        ('olcum-test', 'Ölç, test et, iyileştir', 'Ölçüm ve A/B testi: tahmin değil veri', '''
      <p>Dönüşüm odaklı tasarım bir kerelik bir iş değil, sürekli bir döngüdür. “Bence bu renk daha iyi” tartışmaları yerine verinin konuşmasına izin verin.</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım — Hedefleri tanımlayın:</b> Google Analytics 4’te form gönderimi, telefon tıklaması ve WhatsApp tıklamasını önemli etkinlik olarak işaretleyin.</span></li>
        <li>{ic}<span><b>2. Adım — Sızıntıyı bulun:</b> Ziyaretçilerin en çok hangi sayfada çıktığına, formun hangi alanında vazgeçtiğine bakın.</span></li>
        <li>{ic}<span><b>3. Adım — Davranışı izleyin:</b> Isı haritaları ve oturum kayıtları, ziyaretçinin nereye tıkladığını ve nerede takıldığını gösterir.</span></li>
        <li>{ic}<span><b>4. Adım — Tek değişkeni test edin:</b> Başlığı, buton metnini ya da form uzunluğunu A/B testiyle karşılaştırın. Aynı anda her şeyi değiştirirseniz neyin işe yaradığını bilemezsiniz.</span></li>
        <li>{ic}<span><b>5. Adım — Yeterli veri bekleyin:</b> Düşük trafikli sitelerde birkaç günlük sonuç yanıltıcıdır; kararı anlamlı bir örneklemle verin.</span></li>
      </ul>
      <p>Reklam trafiği alan sayfalar için bu ilkelerin özel bir uygulamasını <a href="landing-page-rehberi.html">landing page rehberimizde</a> bulabilirsiniz.</p>'''),
    ],
    check_title='// DÖNÜŞÜM İÇİN HIZLI KONTROL LİSTESİ',
    checks=[
        'Her sayfanın tek bir ana hedefi var mı?',
        'İlk ekran ne yaptığınızı ve kime hitap ettiğinizi söylüyor mu?',
        'Ana buton metni sonucu anlatıyor mu?',
        'Formda yalnızca gerçekten gerekli alanlar mı var?',
        'Referans ve yorumlar karar anına yakın mı?',
        'LCP, INP ve CLS değerleri iyi aralıkta mı?',
        'Form ve telefon tıklamaları analitikte ölçülüyor mu?',
    ],
    faq=[
        ('Dönüşüm odaklı web tasarım nedir?', 'Ziyaretçinin sitede belirli bir eylemi, örneğin teklif istemeyi, satın almayı ya da aramayı tamamlamasını kolaylaştırmayı amaçlayan tasarım yaklaşımıdır. Sayfa düzeni, metinler, butonlar, formlar ve hız bu hedefe göre kurgulanır ve sonuçlar veriyle ölçülerek sürekli iyileştirilir.'),
        ('İyi bir dönüşüm oranı kaçtır?', 'Evrensel bir doğru değer yoktur. Sektör, ürün fiyatı, trafik kaynağı ve hedef eyleme göre oranlar büyük farklılık gösterir. En sağlıklı karşılaştırma, kendi sitenizin önceki dönemlerdeki performansıdır.'),
        ('Web sitemin dönüşüm oranını nasıl artırırım?', 'Önce hedeflerinizi analitikte ölçmeye başlayın. Ardından ilk ekranı netleştirin, tek ve açık bir eylem çağrısı kullanın, formları kısaltın, güven unsurlarını görünür kılın ve sayfa hızını iyileştirin. Değişiklikleri tek tek test ederek hangisinin işe yaradığını görün.'),
        ('UX ile dönüşüm oranı arasındaki ilişki nedir?', 'Kullanıcı deneyimi, ziyaretçinin aradığını ne kadar kolay bulduğunu ve işlemi ne kadar zahmetsiz tamamladığını belirler. Kafa karıştıran menüler, uzun formlar ve yavaş sayfalar sürtünme yaratır; sürtünme azaldıkça dönüşüm genellikle artar.'),
        ('A/B testi küçük siteler için anlamlı mı?', 'Trafiği düşük sitelerde istatistiksel olarak anlamlı sonuç almak uzun sürer. Bu durumda önce bilinen iyi uygulamaları hayata geçirmek, kullanıcı görüşmeleri ve oturum kayıtlarıyla sorunları bulmak daha verimlidir; A/B testini trafik arttıkça devreye alabilirsiniz.'),
    ],
    outro='''<p>Dönüşüm odaklı web tasarım; net bir ilk ekran, tek bir hedefe işaret eden eylem çağrıları, kısa formlar, görünür güven unsurları ve hızlı sayfalarla başlar, ölçüm ve testle olgunlaşır. Güzel bir site ile iş getiren bir site arasındaki fark çoğu zaman bu küçük ama bilinçli kararlarda saklıdır.</p>
      <p>Mevcut sitenizin nerede ziyaretçi kaybettiğini birlikte incelemek ya da yeni sitenizi baştan dönüşüm odaklı kurgulamak isterseniz <a href="iletisim.html">bize yazın</a>. Tasarım ve geliştirme hizmetlerimizin ayrıntıları <a href="web-cozumleri.html">web çözümleri</a> sayfamızda.</p>''',
    sources=[
        ('Nielsen Norman Group — F-Shaped Pattern of Reading on the Web', 'https://www.nngroup.com/articles/f-shaped-pattern-reading-web-content/'),
        ('Baymard Institute — Cart Abandonment Rate Statistics', 'https://baymard.com/lists/cart-abandonment-rate'),
        ('web.dev — Web Vitals', 'https://web.dev/articles/vitals'),
        ('Google Analytics Yardım — Önemli etkinlikler', 'https://support.google.com/analytics/answer/13965727'),
        ('KVKK — Kişisel Verileri Koruma Kurumu', 'https://www.kvkk.gov.tr/'),
    ],
)
