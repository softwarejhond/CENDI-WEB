document.addEventListener('DOMContentLoaded', function () {
    const splash = document.getElementById('splashscreen');
    if (!splash) return;

    const previousOverflow = document.body.style.overflow;
    document.body.style.overflow = 'hidden';

    window.setTimeout(function () {
        splash.classList.add('splash-hide');
        document.body.style.overflow = previousOverflow;

        window.setTimeout(function () {
            splash.remove();
            document.dispatchEvent(new CustomEvent('splash:finished'));
        }, 650);
    }, 4000);
});
