// CYF Tech — shared scroll story for service pages.
// Each .wt-step declares the classes it puts on the stage (data-state="is-a is-b");
// any stage element with data-on="2 3" gets .show while one of those steps is active.
(function () {
  var stage = document.querySelector('[data-wt-stage]');
  var fit = document.querySelector('[data-wt-fit]');
  var rig = document.querySelector('[data-wt-rig]');
  var steps = Array.prototype.slice.call(document.querySelectorAll('.wt-step'));
  var num = document.querySelector('[data-wt-num]');
  var name = document.querySelector('[data-wt-name]');
  if (!stage || !rig || !steps.length) return;

  var states = steps.map(function (s) { return (s.getAttribute('data-state') || '').split(/\s+/).filter(Boolean); });
  var all = [];
  states.forEach(function (list) { list.forEach(function (c) { if (all.indexOf(c) === -1) all.push(c); }); });
  var parts = Array.prototype.slice.call(stage.querySelectorAll('[data-on]')).map(function (el) {
    return { el: el, on: el.getAttribute('data-on').split(/\s+/).map(Number) };
  });
  var current = -1;

  function setStep(i) {
    if (i === current) return;
    current = i;
    all.forEach(function (c) { stage.classList.toggle(c, states[i].indexOf(c) !== -1); });
    stage.setAttribute('data-step', i);
    parts.forEach(function (p) { p.el.classList.toggle('show', p.on.indexOf(i) !== -1); });
    steps.forEach(function (s, k) { s.classList.toggle('on', k === i); });
    if (num) num.textContent = '0' + i;
    if (name) name.textContent = steps[i].getAttribute('data-name');
  }

  function update() {
    var mid = window.innerHeight * (window.innerWidth <= 960 ? 0.72 : 0.5);
    var best = 0;
    for (var k = 0; k < steps.length; k++) {
      if (steps[k].getBoundingClientRect().top <= mid) best = k;
    }
    setStep(best);
  }

  // scale the 640×520 rig into whatever room the stage has
  function resize() {
    var w = stage.clientWidth, h = stage.clientHeight - 40;
    var k = Math.min(1, w / 640, h / 520);
    rig.style.transform = 'scale(' + k.toFixed(4) + ')';
    fit.style.width = (640 * k) + 'px';
    fit.style.height = (520 * k) + 'px';
    update();
  }

  var ticking = false;
  window.addEventListener('scroll', function () {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () { ticking = false; update(); });
  }, { passive: true });
  window.addEventListener('resize', resize);
  resize();
})();
