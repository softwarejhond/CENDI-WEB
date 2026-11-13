(function () {
    'use strict';

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduceMotion) return;

    var supportsObserver = 'IntersectionObserver' in window;
    if (!supportsObserver) return;

    /* ---------- Aparición al hacer scroll ---------- */
    var revealSelectors = [
        '.intro',
        '.service',
        '.about-visual',
        '.about-copy',
        '.team-member',
        '#milestone .col-lg-2',
        '.project',
        '.review',
        '.blog-post',
        '.maps-section .map-wrapper',
        '.maps-section .location-buttons',
        '#team .card',
        '#convenios .intro',
        '.convenios-grid',
        '.bach-promo__card',
        'footer .col-lg-3'
    ];

    var revealNodes = document.querySelectorAll(revealSelectors.join(','));

    var revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -8% 0px'
    });

    revealNodes.forEach(function (el) {
        var siblings = el.parentElement ? el.parentElement.children : [];
        var position = Array.prototype.indexOf.call(siblings, el);
        var delay = Math.min(position, 5) * 0.08;

        el.classList.add('reveal');
        el.style.setProperty('--reveal-delay', delay + 's');
        revealObserver.observe(el);
    });

    /* ---------- Contadores animados ---------- */
    function animateCounter(el) {
        var target = parseFloat(el.getAttribute('data-count'));
        if (isNaN(target)) return;

        var suffix = el.getAttribute('data-suffix') || '';
        var useFormat = el.getAttribute('data-format') === 'true';
        var duration = 1600;
        var startTime = null;

        function tick(now) {
            if (startTime === null) startTime = now;
            var progress = Math.min((now - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var value = Math.round(target * eased);

            el.textContent = (useFormat ? value.toLocaleString('es-CO') : value) + suffix;

            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        }

        requestAnimationFrame(tick);
    }

    var counters = document.querySelectorAll('[data-count]');

    if (counters.length) {
        var counterObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.4 });

        counters.forEach(function (counter) {
            counterObserver.observe(counter);
        });
    }

    /* ---------- Parallax de fondos de sección ---------- */
    var parallaxSections = document.querySelectorAll('#milestone, #services');

    if (parallaxSections.length) {
        var parallaxTicking = false;

        function updateSectionParallax() {
            var viewport = window.innerHeight || document.documentElement.clientHeight;

            parallaxSections.forEach(function (section) {
                var rect = section.getBoundingClientRect();

                if (rect.bottom < -120 || rect.top > viewport + 120) return;

                var progress = (rect.top + rect.height / 2 - viewport / 2) / viewport;
                section.style.setProperty('--parallax-y', (progress * -120).toFixed(1) + 'px');
            });

            parallaxTicking = false;
        }

        function requestParallax() {
            if (parallaxTicking) return;
            parallaxTicking = true;
            requestAnimationFrame(updateSectionParallax);
        }

        window.addEventListener('scroll', requestParallax, { passive: true });
        window.addEventListener('resize', requestParallax);
        updateSectionParallax();
    }
})();
