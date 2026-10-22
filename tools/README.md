# Site üretici

Sayfalar `tools/build.py` ile üretilir; HTML dosyalarını elle düzenlemeyin, betiği düzenleyip yeniden çalıştırın:

    python tools/build.py .

`build.py` ortak header/footer/CTA ve sayfaları; `scrolly_pages.py` hizmet sayfalarını (Web / Masaüstü / Mobil) üretir.
Her dağıtımda `build.py` içindeki `VER` değerini artırın (tarayıcı önbelleği).
