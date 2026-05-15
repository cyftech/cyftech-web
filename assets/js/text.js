// </> Text Resizing Script

function resizeText() {
    const box = document.querySelector('.main-box');
    const text = document.querySelector('.gradient-text');
    let fontSize = 10;
    text.style.fontSize = fontSize + "px";
    while (text.scrollWidth < box.clientWidth && fontSize < 500) {
        fontSize++;
        text.style.fontSize = fontSize + "px";
    }
    text.style.fontSize = (fontSize - 1) + "px";
}
window.addEventListener('resize', resizeText);
window.addEventListener('load', resizeText);