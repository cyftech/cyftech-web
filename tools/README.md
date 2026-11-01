# Site üretici

Sayfalar `tools/build.py` ile üretilir; HTML dosyalarını elle düzenlemeyin, betiği düzenleyip yeniden çalıştırın:

    python tools/build.py .

`build.py` ortak header/footer/CTA ve sayfaları; `scrolly_pages.py` hizmet sayfalarını (Web / Masaüstü / Mobil) üretir.
Her dağıtımda `build.py` içindeki `VER` değerini artırın (tarayıcı önbelleği).

## Klasör düzeni, PHP ve uzantısız adresler

    .htaccess  robots.txt  sitemap.xml   (build üretir)
    assets/                              css, js, img, fonts
    pages/<dil>/<sayfa>.php              tr, en, de, ar, zh, ru — ana sayfalar
    pages/<dil>/blog/<yazı>.php          blog yazıları
    tools/                               build betikleri, çeviriler, yazı verileri (sunucuda kapalı)

`pages/` tamamen build çıktısıdır, elle düzenlemeyin. Build'in son adımı `tools/cleanurls.py` sayfaları oraya taşır,
bağlantılardaki uzantıları kaldırır ve `.htaccess`'i yazar. Ziyaretçinin gördüğü adresler klasörden bağımsızdır:
`/hakkimizda` → `pages/tr/hakkimizda.php`, `/en/seo-nedir` → `pages/en/blog/seo-nedir.php`. Eski `.html` / `.php` adresleri
ve eski hizmet sayfaları (`/web-tasarim` vb., listesi `cleanurls.py` içinde `MOVED`) 301 ile yönlenir; `/pages/...` doğrudan açılmaz.
Sunucuda Apache + `mod_rewrite` + PHP gerekir (GitHub Pages PHP çalıştırmaz). Yerelde test:

    docker run --rm -p 8766:80 -v "$PWD:/var/www/html:ro" php:8.3-apache bash -c "a2enmod rewrite && sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf && apache2-foreground"

Kaynakta (build.py, yazı dosyaları) bağlantılar hâlâ `sayfa.html` diye yazılır; dönüşüm bunu kendisi yapar.

## Diller

Türkçe sayfalar kök adreslerdedir; İngilizce, Almanca, Arapça, Çince ve Rusça kopyalar `/en/`, `/de/`, `/ar/`, `/zh/`, `/ru/`
adreslerine (dosyalar `pages/<dil>/`) `tools/i18n.py` ile üretilir (`build.py` bunu en sonda kendisi çalıştırır). Çeviriler
`tools/i18n/<dil>.json` dosyalarındadır: anahtar Türkçe metin, değer çevirisidir.

Türkçe bir metni değiştirdiğinizde veya yeni metin eklediğinizde:

    python tools/i18n.py extract .    # tools/i18n/strings.json'u yeniler
    python tools/i18n.py check en     # eksik / etiketi bozulmuş çevirileri listeler (de, ar, zh, ru için de)

Eksik çeviriler `<dil>.json`'a eklenmezse o metin o dilde Türkçe kalır (build sayısını yazar).
Arapça sayfalar `dir="rtl"` ile sağdan sola gösterilir. Türkçe sayfalara ilk kez gelen ziyaretçi tarayıcı diline (desteklenmiyorsa İngilizceye) yönlendirilir; menüden dil seçince o tercih saklanır ve yönlendirme ona göre yapılır. Arama motoru botları yönlendirilmez.

## Blog yazıları

Uzun rehber yazıları veri olarak tutulur: `tools/posts/<slug>.py` dosyasında tek bir `POST = dict(...)` (alanlar ve HTML
kuralları `tools/posts/_check.py` içinde). Yeni yazı için dosyayı ekleyin, `python tools/posts/_check.py tools/posts/<slug>.py`
ile doğrulayın, sıralamayı `build.py` içindeki `POST_ORDER`'a ekleyin ve build alın. Sayfa (`<slug>.php`), kapak görseli
(`assets/img/blog/<slug>.svg`), blog listesi, içindekiler, SSS ve yapılandırılmış veri (BlogPosting, FAQPage,
BreadcrumbList) otomatik üretilir; `i18n.py` yazıyı sayfa listesine kendisi ekler. Ardından çevirileri ekleyin (yukarıda).

Her build `sitemap.xml` (tüm diller, hreflang ile) ve `robots.txt` dosyalarını da yeniden yazar; her sayfada canonical bağlantı vardır.

## Diğer

- Gece / gündüz teması: `assets/css/theme-light.css` (`<html data-theme="light">`). Ziyaretçi butona basana kadar sistemin açık/koyu ayarını izler; basınca seçimi tarayıcıda saklanır.
- Açılış animasyonu: oturumun ilk sayfasında `BOOT` ekranı (`build.py`, stili `site.css` sonunda) ~4 sn oynar: noktalar `</>` logosunu oluşturur, isim çözülür, logo bir tur döner, sayfa logonun merkezinden açılır; tıklama/tuş ile geçilir, "hareketi azalt" ayarında hiç gösterilmez.
- CD rafı (`/referanslar-cd`) şimdilik gizli: `build.py` içindeki `SHOW_CD = True` yapılınca bağlantılar geri gelir.
