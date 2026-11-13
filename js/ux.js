(function () {
    'use strict';

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function onReady(fn) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            fn();
        }
    }

    onReady(function () {
        /* ---------- Barra de progreso de lectura ---------- */
        var progress = document.createElement('div');
        progress.className = 'ux-scroll-progress';
        progress.setAttribute('aria-hidden', 'true');
        document.body.appendChild(progress);

        var ticking = false;

        function updateProgress() {
            var doc = document.documentElement;
            var scrollTop = window.pageYOffset || doc.scrollTop || 0;
            var height = doc.scrollHeight - window.innerHeight;
            var percent = height > 0 ? (scrollTop / height) * 100 : 0;
            progress.style.width = Math.min(100, Math.max(0, percent)) + '%';
            ticking = false;
        }

        function requestProgress() {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(updateProgress);
        }

        window.addEventListener('scroll', requestProgress, { passive: true });
        window.addEventListener('resize', requestProgress);
        updateProgress();

        /* ---------- Enlace para saltar al contenido ---------- */
        var firstContent = document.querySelector('main, section');
        if (firstContent) {
            if (!firstContent.id) {
                firstContent.id = 'ux-main-content';
            }

            var skip = document.createElement('a');
            skip.className = 'ux-skip-link';
            skip.href = '#' + firstContent.id;
            skip.textContent = 'Saltar al contenido';
            document.body.insertBefore(skip, document.body.firstChild);
        }

        /* ---------- Scroll suave con offset del navbar ---------- */
        document.addEventListener('click', function (event) {
            var link = event.target.closest('a[href^="#"]');
            if (!link) return;
            if (link.hasAttribute('data-bs-toggle')) return;

            var hash = link.getAttribute('href');
            if (!hash || hash === '#') return;

            var target;
            try {
                target = document.querySelector(hash);
            } catch (error) {
                return;
            }
            if (!target) return;

            event.preventDefault();
            var offset = target.getBoundingClientRect().top + window.pageYOffset - 90;
            window.scrollTo({
                top: offset,
                behavior: reduceMotion ? 'auto' : 'smooth'
            });

            if (history.replaceState) {
                history.replaceState(null, '', hash);
            }
        });

        /* ---------- Efecto 3D tilt ---------- */
        var canTilt = !reduceMotion &&
            window.matchMedia &&
            window.matchMedia('(pointer: fine)').matches;

        if (!canTilt) return;

        var tiltTargets = document.querySelectorAll(
            '.service, .convenio-card, .about-link, .team-carousel .card, .platform-circle'
        );

        var maxTilt = 12;

        tiltTargets.forEach(function (element) {
            element.classList.add('ux-tilt');

            element.addEventListener('mousemove', function (event) {
                var rect = element.getBoundingClientRect();
                var x = (event.clientX - rect.left) / rect.width - 0.5;
                var y = (event.clientY - rect.top) / rect.height - 0.5;

                element.classList.add('ux-tilting');
                element.style.transform =
                    'perspective(900px) rotateX(' + (-y * maxTilt).toFixed(2) + 'deg) ' +
                    'rotateY(' + (x * maxTilt).toFixed(2) + 'deg) ' +
                    'translateY(-8px) scale(1.02)';
            });

            element.addEventListener('mouseleave', function () {
                element.classList.remove('ux-tilting');
                element.style.transform = '';
            });
        });
    });
})();
