$(function () {
  const navSvgs = [
    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24"><path fill="#308efa" d="M168.9 342.6C156.4 330.1 156.4 309.8 168.9 297.3L360.9 105.3C373.4 92.8 393.7 92.8 406.2 105.3C418.7 117.8 418.7 138.1 406.2 150.6L236.8 320L406.1 489.4C418.6 501.9 418.6 522.2 406.1 534.7C393.6 547.2 373.3 547.2 360.8 534.7L168.8 342.7z"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24"><path fill="#308efa" d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>'
  ];

  const projOpts = {
    items: 1,
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 450,
    navText: navSvgs
  };

  const mustOpts = {
    items: 1,
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 450
  };

  const $proj = $(".projeSlider").owlCarousel(projOpts);
  const $must = $(".musteriSlider").owlCarousel(mustOpts);

  function realIndex(e) {
    const owl = e.relatedTarget;
    const count = e.item.count;
    let idx = (e.item.index - (owl._clones.length / 2)) % count;
    if (idx < 0) idx += count;
    return idx;
  }

  let syncing = false;

  $proj.on('changed.owl.carousel', function (e) {
    if (syncing) return;
    syncing = true;
    $must.trigger('to.owl.carousel', [realIndex(e), 300, true]);
    syncing = false;
  });

  $must.on('changed.owl.carousel', function (e) {
    if (syncing) return;
    syncing = true;
    $proj.trigger('to.owl.carousel', [realIndex(e), 300, true]);
    syncing = false;
  });

  function stopBoth() {
    $proj.trigger('stop.owl.autoplay');
    $must.trigger('stop.owl.autoplay');
  }
  function playBoth() {
    $proj.trigger('play.owl.autoplay', [projOpts.autoplayTimeout]);
    $must.trigger('play.owl.autoplay', [mustOpts.autoplayTimeout]);
  }

  $proj.on('drag.owl.carousel', stopBoth);
  $must.on('drag.owl.carousel', stopBoth);
  $proj.on('dragged.owl.carousel', playBoth);
  $must.on('dragged.owl.carousel', playBoth);
});