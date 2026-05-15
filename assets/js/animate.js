const els = document.querySelectorAll(
  ".animate-top, .animate-bottom, .animate-left, .animate-right, .animate-fade"
);

const io = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    const el = entry.target;
    if (entry.isIntersecting) {
      el.classList.add("animated");
    } else {
      // Çıkışta gecikmeyi sıfırla (isteğe bağlı sağlamlaştırma)
      el.classList.remove("animated");
      el.style.setProperty('--enter-delay', '0s');
      requestAnimationFrame(() => el.style.removeProperty('--enter-delay'));
    }
  });
}, { threshold: 0.2 });

els.forEach(el => io.observe(el));
