# Site üretici

Sayfalar `tools/build.py` ile üretilir; HTML dosyalarını elle düzenlemeyin, betiği düzenleyip yeniden çalıştırın:

    python tools/build.py .

`build.py` ortak header/footer/CTA ve sayfaları; `scrolly_pages.py` hizmet sayfalarını (Web / Masaüstü / Mobil) üretir.
Her dağıtımda `build.py` içindeki `VER` değerini artırın (tarayıcı önbelleği).

## Diller

Türkçe sayfalar köktedir; İngilizce, Almanca, Arapça, Çince ve Rusça kopyalar `/en/`, `/de/`, `/ar/`, `/zh/`, `/ru/`
klasörlerine `tools/i18n.py` ile üretilir (`build.py` bunu en sonda kendisi çalıştırır). Çeviriler
`tools/i18n/<dil>.json` dosyalarındadır: anahtar Türkçe metin, değer çevirisidir.

Türkçe bir metni değiştirdiğinizde veya yeni metin eklediğinizde:

    python tools/i18n.py extract .    # tools/i18n/strings.json'u yeniler
    python tools/i18n.py check en     # eksik / etiketi bozulmuş çevirileri listeler (de, ar, zh, ru için de)

Eksik çeviriler `<dil>.json`'a eklenmezse o metin o dilde Türkçe kalır (build sayısını yazar).
Arapça sayfalar `dir="rtl"` ile sağdan sola gösterilir. Türkçe sayfalara ilk kez gelen ziyaretçi tarayıcı diline (desteklenmiyorsa İngilizceye) yönlendirilir; menüden dil seçince o tercih saklanır ve yönlendirme ona göre yapılır. Arama motoru botları yönlendirilmez.

## Diğer

- Gece / gündüz teması: `assets/css/theme-light.css` (`<html data-theme="light">`). Ziyaretçi butona basana kadar sistemin açık/koyu ayarını izler; basınca seçimi tarayıcıda saklanır.
- Açılış animasyonu: oturumun ilk sayfasında `BOOT` ekranı (`build.py`, stili `site.css` sonunda) ~4 sn oynar: noktalar `</>` logosunu oluşturur, isim çözülür, logo bir tur döner, sayfa logonun merkezinden açılır; tıklama/tuş ile geçilir, "hareketi azalt" ayarında hiç gösterilmez.
- CD rafı (`referanslar-cd.html`) şimdilik gizli: `build.py` içindeki `SHOW_CD = True` yapılınca bağlantılar geri gelir.
