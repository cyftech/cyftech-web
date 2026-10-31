POST = dict(
    slug='kvkk-uyumlu-web-sitesi',
    kat='Güvenlik',
    keyword='KVKK uyumlu web sitesi',
    title='KVKK Uyumlu Web Sitesi: Aydınlatma Metni, Çerez ve Açık Rıza',
    h1='KVKK uyumlu web sitesi: aydınlatma metni, çerez politikası ve açık rıza.',
    crumb='GÜVENLİK',
    sure='9 dk',
    ozet='İletişim formundan çerez bandına, Google Analytics’ten VERBİS’e: bir web sitesini KVKK’ya uygun hâle getirmek için atılması gereken adımları, Kurum’un 2025 çerez rehberi ışığında anlattık.',
    desc='KVKK uyumlu web sitesi için aydınlatma metni, çerez politikası, açık rıza, form tasarımı ve VERBİS adımları; KVKK’nın 2025 çerez rehberine göre kontrol listesi.',
    lead='Sitenizde bir iletişim formu, bir Google Analytics kodu ya da bir WhatsApp butonu varsa, kişisel veri işliyorsunuz demektir. <b>KVKK uyumlu web sitesi</b> artık büyük şirketlere özgü bir lüks değil; küçük bir işletmenin sitesi de aynı kurallara tabi.',
    intro='''<p>Kişisel Verileri Koruma Kurumu, Temmuz 2025’te <b>Çerez Uygulamaları Hakkında Rehber</b>’in güncel sürümünü yayımladı; 2024’te ise 6698 sayılı Kanun’da özel nitelikli veriler ve yurt dışına aktarım konusunda önemli değişiklikler yürürlüğe girdi. Bu yazıda bir web sitesinin KVKK açısından nerelerde risk taşıdığını, aydınlatma metni ile açık rızanın farkını, doğru bir çerez bandının nasıl görünmesi gerektiğini ve teknik tarafta neleri düzeltmeniz gerektiğini adım adım anlatıyoruz.</p>
      <div class="bi-note">{warn}<div><b>Önemli not:</b> Bu yazı genel bilgilendirme amaçlıdır, hukuki danışmanlık değildir. Sitenizin veri işleme süreçleri için bir KVKK uzmanı veya avukatla çalışmanızı öneririz.</div></div>''',
    sections=[
        ('kapsam', 'Sitenizde hangi veri var?', 'Web sitesi hangi kişisel verileri işler?', '''
      <p>KVKK’ya uyumun ilk adımı, sitenizin hangi noktalarda veri topladığını dürüstçe listelemektir. Çoğu işletme yalnızca iletişim formunu düşünür; oysa kişisel veri sandığınızdan çok daha fazla yerde işlenir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>Formlar:</b> iletişim, teklif, randevu, iş başvurusu, bülten aboneliği. Ad, e-posta, telefon, hatta CV gibi kapsamlı veriler.</span></li>
        <li>{ic}<span><b>Çerezler ve izleme kodları:</b> Google Analytics, Meta pikseli, Google Ads dönüşüm etiketi, ısı haritası araçları. Bunlar çevrim içi tanımlayıcılar ve davranış verisi toplar.</span></li>
        <li>{ic}<span><b>Sunucu kayıtları:</b> IP adresi, tarayıcı bilgisi, erişim zamanı. 5651 sayılı Kanun kapsamında tutulan trafik kayıtları da bu gruptadır.</span></li>
        <li>{ic}<span><b>Üçüncü taraf eklentiler:</b> gömülü YouTube videosu, Google Haritalar, canlı destek ve WhatsApp widget’ları, sosyal medya paylaşım butonları.</span></li>
        <li>{ic}<span><b>Üyelik ve e-ticaret:</b> hesap bilgileri, adres, sipariş geçmişi. Ödeme kartı verisi ise genellikle doğrudan ödeme kuruluşunda işlenir.</span></li>
      </ul>
      <p>Bu listeyi çıkardığınızda, her veri için üç soruyu yanıtlayın: <b>Neden</b> topluyorum, <b>hangi hukuki sebebe</b> dayanıyorum ve <b>ne kadar süre</b> saklıyorum? Bu cevaplar, birazdan anlatacağımız aydınlatma metninin ve çerez politikasının iskeletini oluşturur.</p>
      <div class="bi-note">{tip}<div><b>Kısa ipucu:</b> Kullanmadığınız bir veri alanını formdan kaldırmak, en ucuz KVKK önlemidir. Teklif formunda TC kimlik numarası ya da doğum tarihi sormanın çoğu zaman hiçbir gerekçesi yoktur; veri minimizasyonu Kanun’un temel ilkelerinden biridir.</div></div>'''),
        ('aydinlatma', 'Aydınlatma ve açık rıza', 'Aydınlatma metni ile açık rıza aynı şey değil', '''
      <p>Web sitelerinde en sık rastlanan hata, aydınlatma metni ile açık rızanın tek bir onay kutusunda birleştirilmesidir. “KVKK metnini okudum ve kabul ediyorum” ifadesi iki ayrı yükümlülüğü karıştırır.</p>
      <h3>Aydınlatma metni: her durumda zorunlu</h3>
      <p>Kanun’un 10. maddesine göre veri toplarken kişiyi bilgilendirmeniz gerekir: veri sorumlusunun kimliği, işleme amaçları, verilerin kimlere ve hangi amaçla aktarılabileceği, toplama yöntemi ile hukuki sebebi ve kişinin 11. maddedeki hakları. Aydınlatma bir <b>bilgilendirmedir</b>; kişiden onay istemez. Bu yüzden “okudum, kabul ediyorum” kutusu yerine formun hemen altında, açıkça görünen bir bağlantı yeterlidir.</p>
      <h3>Açık rıza: yalnızca başka sebep yoksa</h3>
      <p>Açık rıza belirli bir konuya ilişkin, bilgilendirmeye dayanan ve özgür iradeyle verilen onaydır. Veri sorumlusu önce sözleşmenin kurulması, hukuki yükümlülük veya meşru menfaat gibi diğer işleme şartlarından birinin uygun olup olmadığına bakmalı; hiçbiri yoksa açık rızaya başvurmalıdır. Örneğin teklif formuna yazan birine dönüş yapmak için açık rıza gerekmez; ama aynı kişiye kampanya e-postası göndermek için ayrı bir onay gerekir.</p>
      <table>
        <thead><tr><th>Durum</th><th>Aydınlatma</th><th>Açık rıza</th></tr></thead>
        <tbody>
          <tr><td>İletişim formuna yanıt vermek</td><td>Gerekli</td><td>Genellikle gerekmez</td></tr>
          <tr><td>Bülten ve kampanya e-postası</td><td>Gerekli</td><td>Ayrı onay gerekli (İYS kaydı ile birlikte)</td></tr>
          <tr><td>Zorunlu (oturum, sepet, güvenlik) çerezleri</td><td>Gerekli</td><td>Gerekmez</td></tr>
          <tr><td>Reklam ve yeniden pazarlama çerezleri</td><td>Gerekli</td><td>Gerekli</td></tr>
          <tr><td>İş başvurusunda sağlık bilgisi gibi özel nitelikli veri</td><td>Gerekli</td><td>Duruma göre; 2024 değişikliğiyle şartlar genişledi</td></tr>
        </tbody>
      </table>
      <p>Açık rıza hizmetin ön şartı yapılamaz. Bülten onayı vermeyen birinin iletişim formunu gönderememesi, rızayı özgür olmaktan çıkarır. Onay kutuları da varsayılan olarak <b>boş</b> gelmelidir.</p>'''),
        ('cerez', 'Çerez bandı ve politikası', 'KVKK çerez rehberine göre doğru çerez bandı', '''
      <p>KVKK’nın Temmuz 2025 tarihli <b>Çerez Uygulamaları Hakkında Rehber</b>’i, web sitesi sahipleri için en somut yol haritasıdır. Rehberin temel mesajı şudur: her çerez açık rıza gerektirmez, ama rıza gerektiren çerezler kullanıcı onay vermeden <b>çalışmamalıdır</b>.</p>
      <h3>Hangi çerezler rıza olmadan kullanılabilir?</h3>
      <p>Rehber, oturum ve form girdisi çerezleri, kimlik doğrulama, kullanıcı merkezli güvenlik, yük dengeleme, dil gibi arayüz tercihleri ve sepet çerezleri gibi örnekleri açık rıza dışındaki işleme şartları kapsamında değerlendiriyor. Birinci taraf analitik çerezlerin de, yalnızca sitenin işleyişini ölçmekle sınırlı kalması, IP maskeleme gibi önlemlerle verinin azaltılması ve farklı siteler arasında çapraz takip yapılmaması koşuluyla bu kapsamda düşünülebileceğini belirtiyor. Reklam, yeniden pazarlama ve üçüncü taraf takip çerezleri ise açık rıza gerektirir.</p>
      <h3>İyi bir çerez yönetim paneli nasıl olmalı?</h3>
      <ul class="bi-list">
        <li>{ic}<span><b>Eşit butonlar:</b> Rehber, siteye girildiğinde açılan panelde “Kabul et”, “Reddet” ve “Tercihler” butonlarının renk, büyüklük ve punto açısından eşit sunulmasını iyi uygulama örneği olarak gösteriyor. Reddetmeyi gri ve küçük bir bağlantıya gömmek bu ilkeye aykırıdır.</span></li>
        <li>{ic}<span><b>Varsayılan kapalı:</b> Açık rızaya dayanan çerez kategorileri tercihler ekranında ilk anda pasif gelmeli.</span></li>
        <li>{ic}<span><b>Önce rıza, sonra kod:</b> Reklam pikselleri ve takip etiketleri kullanıcı onay verene kadar yüklenmemeli. Sadece bant göstermek, arka planda her şeyi çalıştırırken uyum sağlamaz.</span></li>
        <li>{ic}<span><b>Geri alınabilir rıza:</b> Kullanıcı tercihini sonradan kolayca değiştirebilmeli; rehber, sayfanın köşesinde duran küçük bir ikon veya bandı iyi örnek olarak anıyor.</span></li>
        <li>{ic}<span><b>Çerez duvarı yok:</b> Siteye girişi tüm çerezlerin kabulüne bağlayan “çerez duvarı” uygulamaları özgür iradeyi sakatlayabilir ve geçerli rıza sayılmayabilir.</span></li>
        <li>{ic}<span><b>Rıza yorgunluğu:</b> Her ziyarette yeniden sormak yerine tercihin, çerezin ömrüyle orantılı aralıklarla hatırlatılması öneriliyor.</span></li>
      </ul>
      <p>Çerez politikası ise panelden bağlantı verilen ayrı bir sayfadır: kullanılan çerezlerin listesi, amacı, süresi, birinci mi üçüncü taraf mı olduğu ve nasıl yönetileceği burada yer alır. Rehber ayrıca “siteyi kullanarak çerezleri kabul etmiş sayılırsınız” türü ifadelerin geçerli rıza oluşturmayacağını vurguluyor.</p>
      <blockquote><div class="bi-q">{quote}</div>Çerez bandı bir dekor değil, bir anahtardır: kullanıcı “evet” demeden kapı açılmamalı.</blockquote>'''),
        ('formlar', 'Formlar ve e-posta', 'İletişim formu, bülten ve ticari ileti izinleri', '''
      <p>Formlar KVKK uyumlu web sitesi tasarımında en görünür kısımdır ve doğru kurgulandığında kullanıcı deneyimini bozmaz. Önerdiğimiz yapı şu şekildedir:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>1. Adım —</b> Formun hemen altına “Kişisel verileriniz, Aydınlatma Metni kapsamında işlenmektedir.” gibi kısa bir cümle ve metne bağlantı koyun. Onay kutusu zorunlu değildir.</span></li>
        <li>{ic}<span><b>2. Adım —</b> Pazarlama izni gerekiyorsa ayrı, boş gelen ve isteğe bağlı bir kutu ekleyin. Formun gönderilmesi bu kutuya bağlı olmasın.</span></li>
        <li>{ic}<span><b>3. Adım —</b> Ticari elektronik ileti göndermek istiyorsanız 6563 sayılı Kanun ve İleti Yönetim Sistemi (İYS) yükümlülüklerini de unutmayın; alınan onayların İYS’ye kaydedilmesi gerekir.</span></li>
        <li>{ic}<span><b>4. Adım —</b> Form verilerinin nereye gittiğini belirleyin: e-posta kutusu, CRM, Google Sheets ya da yurt dışında barındırılan bir form aracı. Bu, aşağıda anlatacağımız yurt dışı aktarım konusunu doğrudan ilgilendirir.</span></li>
        <li>{ic}<span><b>5. Adım —</b> Saklama süresi belirleyin. İki yıl önce gelen ve teklife dönüşmemiş form kayıtlarını süresiz tutmanın bir gerekçesi yoksa periyodik olarak silin veya anonimleştirin.</span></li>
      </ul>
      <p>Kişilerin KVKK 11. maddesindeki haklarını kullanabilmesi için bir başvuru yöntemi de sunmalısınız. Başvurular en geç 30 gün içinde yanıtlanmalıdır; sitede bir başvuru formu veya açık bir e-posta adresi bu süreci kolaylaştırır.</p>'''),
        ('yurtdisi', 'Yurt dışı aktarım', '2024 değişiklikleri: yurt dışı aktarım ve yabancı servisler', '''
      <p>7499 sayılı Kanun’la yapılan ve 1 Haziran 2024’te yürürlüğe giren değişiklikler, web siteleri için özellikle <b>yurt dışına veri aktarımı</b> konusunda önemlidir. Yurt dışında barındırılan bir hosting, e-posta servisi, analitik aracı, form servisi veya CRM kullanıyorsanız, verileriniz yurt dışına aktarılıyor olabilir.</p>
      <p>Yeni düzende aktarım; bir işleme şartının bulunması ve hakkında yeterlilik kararı verilmiş bir ülkeye aktarım ya da Kurum’un ilan ettiği <b>standart sözleşme</b> gibi uygun güvencelerden birinin sağlanması ile yapılabiliyor. Standart sözleşmenin imzalanmasından itibaren beş iş günü içinde Kurum’a bildirilmesi gerekiyor. Eski düzende kullanılan açık rıza ile aktarım seçeneği ise geçiş süreci olan 1 Eylül 2024’ten sonra tek başına dayanak olmaktan çıktı; arızi aktarımlar için açık rıza dar bir istisna olarak kaldı.</p>
      <div class="bi-note">{tip}<div><b>Pratik öneri:</b> Sitenizde kullandığınız tüm üçüncü taraf servislerin (hosting, e-posta, analitik, form, canlı destek) bir listesini çıkarın ve her biri için verinin hangi ülkede işlendiğini not edin. Mümkünse Türkiye’de barındırılan altyapı tercih etmek uyum yükünü azaltır.</div></div>
      <p>Aynı değişiklikle özel nitelikli verilerin işlenme şartları da genişletildi. İş başvurusu formunda sağlık bilgisi isteyen veya bir klinik için randevu formu tasarlayan siteler bu konuyu ayrıca değerlendirmelidir; çünkü özel nitelikli verilerde Kurul’un belirlediği ek güvenlik önlemleri de geçerlidir.</p>'''),
        ('teknik', 'Teknik önlemler', 'KVKK için teknik ve idari güvenlik önlemleri', '''
      <p>KVKK’nın 12. maddesi, veri sorumlusuna verilerin hukuka aykırı erişime karşı korunması için uygun teknik ve idari tedbirleri alma yükümlülüğü yükler. Web sitesi açısından bunun karşılığı somut ve ölçülebilir adımlardır:</p>
      <ul class="bi-list">
        <li>{ic}<span><b>HTTPS her sayfada:</b> Geçerli bir SSL sertifikası ve HTTP’den HTTPS’e kalıcı yönlendirme. Ayrıntılar için <a href="web-sitesi-guvenligi.html">web sitesi güvenliği ve SSL rehberimize</a> göz atabilirsiniz.</span></li>
        <li>{ic}<span><b>Güncel yazılım:</b> CMS, eklenti ve kütüphanelerin düzenli güncellenmesi; kullanılmayan eklentilerin kaldırılması.</span></li>
        <li>{ic}<span><b>Yetki yönetimi:</b> Yönetim paneline güçlü parola ve iki adımlı doğrulama; form kayıtlarına yalnızca gereken kişilerin erişmesi.</span></li>
        <li>{ic}<span><b>Yedekleme ve kayıt:</b> Düzenli, şifreli yedekler ve panel erişimlerinin loglanması.</span></li>
        <li>{ic}<span><b>Veri ihlali planı:</b> Bir sızıntı fark edildiğinde Kurul’a en kısa sürede ve en geç 72 saat içinde bildirim yapılması gerekir. Kimin ne yapacağını önceden yazmak, kriz anında zaman kazandırır.</span></li>
      </ul>
      <p>Bu önlemler yalnızca KVKK için değil, sitenizin itibarı ve arama görünürlüğü için de önemlidir. Güvenliği ihlal edilmiş bir site hem müşteri güvenini hem de Google sıralamasını kaybedebilir.</p>'''),
        ('verbis', 'VERBİS ve cezalar', 'VERBİS kaydı gerekir mi, cezalar ne kadar?', '''
      <p>VERBİS (Veri Sorumluları Sicil Bilgi Sistemi), her işletme için zorunlu değildir. Kurul kararlarına göre, ana faaliyeti özel nitelikli veri işleme olmayan ve yıllık çalışan sayısı 50’den, yıllık mali bilanço toplamı 100 milyon TL’den az olan veri sorumluları kayıttan muaftır. Kurum’un 1 Ekim 2025 tarihli duyurusuyla, ana faaliyeti özel nitelikli veri işleme olsa bile yıllık çalışan sayısı 10’dan ve mali bilançosu 10 milyon TL’den az olanlar da istisna kapsamına alındı.</p>
      <div class="bi-note">{warn}<div><b>Dikkat:</b> VERBİS istisnası yalnızca kayıt yükümlülüğünü kaldırır. Aydınlatma, veri güvenliği ve başvurulara yanıt verme yükümlülükleri her işletme için geçerlidir; küçük bir şirketin sitesi de bu kurallara uymak zorundadır.</div></div>
      <p>İdari para cezaları her yıl yeniden değerleme oranıyla güncellenir ve Kurum güncel tabloyu sitesinde yayımlar. 2026 yılı için aydınlatma yükümlülüğüne aykırılıkta alt sınır yaklaşık 85 bin TL, üst sınır yaklaşık 1,7 milyon TL düzeyindedir; veri güvenliği ve VERBİS ihlallerinde üst sınır 17 milyon TL’yi aşar. Rakamların kesin hâli için Kurum’un resmî tablosuna bakmanızı öneririz.</p>'''),
    ],
    check_title='// KVKK UYUM KONTROL LİSTESİ',
    checks=[
        'Sitedeki tüm veri toplama noktaları listelendi mi?',
        'Her formun altında aydınlatma metni bağlantısı var mı?',
        'Pazarlama onayı ayrı, isteğe bağlı ve boş gelen bir kutu mu?',
        'Çerez panelinde Kabul et / Reddet / Tercihler eşit görünüyor mu?',
        'Reklam ve takip kodları rıza alınmadan yüklenmiyor mu?',
        'Yurt dışındaki servisler ve aktarım dayanağı belirlendi mi?',
        'Başvuru kanalı ve veri ihlali müdahale planı hazır mı?',
    ],
    faq=[
        ('Küçük bir işletmenin web sitesi için KVKK zorunlu mu?', 'Evet. KVKK, kişisel veri işleyen tüm gerçek ve tüzel kişiler için geçerlidir. Küçük işletmeler VERBİS kaydından muaf olabilir, ancak aydınlatma, veri güvenliği ve ilgili kişi başvurularına yanıt verme yükümlülükleri devam eder.'),
        ('İletişim formu için açık rıza almak gerekir mi?', 'Genellikle hayır. Talebe dönüş yapmak için veri işlemek çoğu zaman sözleşmenin kurulmasına hazırlık veya meşru menfaat kapsamında değerlendirilir; aydınlatma metni yeterlidir. Pazarlama amaçlı iletişim içinse ayrı ve isteğe bağlı bir onay gerekir.'),
        ('Google Analytics kullanmak için çerez onayı gerekir mi?', 'KVKK’nın çerez rehberi, yalnızca sitenin işleyişini ölçmeye yönelik, verisi azaltılmış ve çapraz takip yapmayan birinci taraf analitiği açık rıza dışındaki şartlar kapsamında değerlendirebiliyor. Reklam özellikleri, yeniden pazarlama veya üçüncü taraf takip içeren kurulumlarda ise açık rıza alınması gerekir.'),
        ('Çerez bandında Reddet butonu olmak zorunda mı?', 'Kurum’un 2025 rehberi, Kabul et, Reddet ve Tercihler butonlarının eşit büyüklük, renk ve puntoda sunulmasını iyi uygulama örneği olarak gösteriyor. Reddetmenin kabul etmek kadar kolay olması, rızanın özgür iradeye dayandığını göstermenin en güvenli yoludur.'),
        ('KVKK aydınlatma metni hazır şablondan kopyalanabilir mi?', 'Önerilmez. Aydınlatma metni, sizin gerçekte hangi veriyi hangi amaçla ve hangi servislerle işlediğinizi anlatmalıdır. Başka bir şirketin metnini kopyalamak, gerçeği yansıtmayan ve yanıltıcı bir bilgilendirmeye yol açabilir.'),
    ],
    outro='''<p>KVKK uyumlu bir web sitesi, uzun hukuk metinleriyle dolu bir site değil; ne topladığını bilen, gereksizini toplamayan, kullanıcıya gerçek bir seçim sunan ve verileri güvenle saklayan bir sitedir. Bu yaklaşım, ziyaretçinin güvenini de artırır. Hukuki metinlerin içeriği için bir uzmanla çalışmanızı öneririz; çerez paneli, form akışları, etiketlerin rızaya göre yüklenmesi ve sunucu güvenliği gibi teknik tarafta ise <a href="web-cozumleri.html">web çözümlerimizle</a> yanınızdayız. Yeni bir site planlıyorsanız <a href="kurumsal-web-sitesi-rehberi.html">kurumsal web sitesi rehberimize</a> de göz atabilir, mevcut sitenizin teknik KVKK kontrolü için <a href="iletisim.html">bizimle iletişime geçebilirsiniz</a>.</p>''',
    sources=[
        ('KVKK — Çerez Uygulamaları Hakkında Rehber (Temmuz 2025)', 'https://kvkk.gov.tr/Icerik/7353/Cerez-Uygulamalari-Hakkinda-Rehber'),
        ('KVKK — VERBİS istisnası kamuoyu duyurusu (1 Ekim 2025)', 'https://kvkk.gov.tr/Icerik/8388/KAMUOYU-DUYURUSU'),
        ('KVKK — 2026 idari para cezası tutarları', 'https://www.kvkk.gov.tr/Icerik/8145/6698-sayili-kisisel-verilerin-korunmasi-kanunu-kapsaminda-idari-para-cezasi-tutarlari'),
        ('KVKK — Standart sözleşmelere ilişkin kamuoyu duyurusu', 'https://www.kvkk.gov.tr/Icerik/8170/Yurt-Disina-Kisisel-Veri-Aktariminda-Kullanilacak-Standart-Sozlesmelerde-Dikkat-Edilmesi-Gereken-Hususlara-Iliskin-Kamuoyu-Duyurusu'),
        ('Mevzuat — 6698 sayılı Kişisel Verilerin Korunması Kanunu', 'https://www.mevzuat.gov.tr/mevzuatmetin/1.5.6698.pdf'),
    ],
)
