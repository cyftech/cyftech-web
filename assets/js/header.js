document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.navBtn, .hamburgerBtn'); // hamburger de eklendi
    let currentlyOpenDropdown = null;
    let currentlyOpenButton = null;

    buttons.forEach((btn) => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();

            const dropdown = this.nextElementSibling; // Butonun hemen yanındaki dropdown

            // Eğer bu butonun dropdownu yoksa (ANA SAYFA gibi), tümünü kapatıp çık
            if (!dropdown || !dropdown.classList.contains('dropdownContent')) {
                document.querySelectorAll('.dropdownContent').forEach(div => div.classList.remove('active'));
                buttons.forEach(b => b.classList.remove('active'));
                currentlyOpenDropdown = null;
                currentlyOpenButton = null;
                return;
            }

            // Aynı dropdown açıksa kapat
            if (currentlyOpenDropdown === dropdown) {
                dropdown.classList.remove('active');
                btn.classList.remove('active');
                currentlyOpenDropdown = null;
                currentlyOpenButton = null;
            } else {
                // Öncekileri kapat
                document.querySelectorAll('.dropdownContent').forEach(div => div.classList.remove('active'));
                buttons.forEach(b => b.classList.remove('active'));

                // Yeni dropdownu aç
                dropdown.classList.add('active');
                btn.classList.add('active');
                currentlyOpenDropdown = dropdown;
                currentlyOpenButton = btn;
            }
        });
    });

    // Sayfa dışında tıklanınca hepsini kapat
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdownContent') && !e.target.closest('.navBtn') && !e.target.closest('.hamburgerBtn')) {
            document.querySelectorAll('.dropdownContent').forEach(div => div.classList.remove('active'));
            buttons.forEach(btn => btn.classList.remove('active'));
            currentlyOpenDropdown = null;
            currentlyOpenButton = null;
        }
    });
});

// Scroll header

function checkScroll() {
  const header = document.querySelector(".scrollHeader");
  const main = document.querySelector("main");
  const dropdownContent = document.querySelector(".dropdownContent");

  if (window.scrollY > 0) {
    header.classList.add("scrolled");
    main.classList.add("scrolled");
    dropdownContent.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
    main.classList.remove("scrolled");
    dropdownContent.classList.remove("scrolled");
  }
}

window.addEventListener("scroll", checkScroll);

// Sayfa yüklendiğinde kontrol et
window.addEventListener("load", checkScroll);