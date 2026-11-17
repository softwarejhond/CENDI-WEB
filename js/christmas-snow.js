(function () {
    'use strict';

    var canvas = document.getElementById('cendi-christmas-snow');

    if (!canvas) {
        return;
    }

    function parseJSON(value, fallback) {
        try {
            var parsed = JSON.parse(value);
            return parsed || fallback;
        } catch (error) {
            return fallback;
        }
    }

    function createHat() {
        if (canvas.getAttribute('data-hat') !== '1') {
            return;
        }

        var brand = document.querySelector('.navbar-brand');

        if (!brand || brand.querySelector('.cendi-santa-hat')) {
            return;
        }

        var hat = document.createElement('span');
        hat.className = 'cendi-santa-hat';
        hat.setAttribute('aria-hidden', 'true');
        hat.innerHTML = '<svg viewBox="0 0 64 48" xmlns="http://www.w3.org/2000/svg" focusable="false"><path d="M8 36C10 20 22 6 40 4c6-1 10 2 10 8 0 8-8 16-16 24Z" fill="#d62828"/><path d="M6 34c16-6 38-6 54 2 2 1 2 5 0 6-16-8-38-8-54 0-2-1-2-5 0-8Z" fill="#fff" stroke="#e2e8f0" stroke-width="1.5"/><circle cx="48" cy="7" r="8" fill="#fff" stroke="#e2e8f0" stroke-width="1.5"/></svg>';
        brand.appendChild(hat);
    }

    createHat();

    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    var ctx = canvas.getContext('2d');

    if (!ctx) {
        return;
    }

    var symbols = parseJSON(canvas.getAttribute('data-symbols'), ['❄', '❅', '❆', '✦', '✧']);
    var colors = parseJSON(canvas.getAttribute('data-colors'), ['#ffffff', '#e0f2fe', '#bfdbfe', '#dbeafe']);
    var density = parseJSON(canvas.getAttribute('data-density'), { mobile: 24, tablet: 40, desktop: 60 });

    if (!Array.isArray(symbols) || !symbols.length) {
        symbols = ['❄', '❅', '❆', '✦', '✧'];
    }

    if (!Array.isArray(colors) || !colors.length) {
        colors = ['#ffffff', '#e0f2fe', '#bfdbfe', '#dbeafe'];
    }

    if (!density || typeof density !== 'object') {
        density = { mobile: 24, tablet: 40, desktop: 60 };
    }

    var particles = [];
    var width = 0;
    var height = 0;
    var running = false;
    var lastTime = 0;
    var frameId = null;
    var resizeTimer = null;

    function rand(min, max) {
        return Math.random() * (max - min) + min;
    }

    function pick(list) {
        return list[Math.floor(Math.random() * list.length)];
    }

    function getCount() {
        if (width < 576) {
            return density.mobile || 24;
        }

        if (width < 992) {
            return density.tablet || 40;
        }

        return density.desktop || 60;
    }

    function makeParticle(spread) {
        var size = rand(12, 28);

        return {
            x: rand(0, width),
            y: spread ? rand(-height, height) : rand(-height * 0.2, -10),
            size: size,
            speedY: rand(18, 55) / 60,
            speedX: rand(-0.25, 0.25),
            angle: rand(0, Math.PI * 2),
            spin: rand(-0.01, 0.01),
            glyph: pick(symbols),
            color: pick(colors),
            alpha: rand(0.55, 1),
            sway: rand(0, Math.PI * 2),
            swaySpeed: rand(0.005, 0.015)
        };
    }

    function initParticles() {
        particles = [];
        var count = getCount();

        for (var i = 0; i < count; i += 1) {
            particles.push(makeParticle(true));
        }
    }

    function resize() {
        var ratio = Math.min(window.devicePixelRatio || 1, 2);
        width = window.innerWidth;
        height = window.innerHeight;

        canvas.width = Math.floor(width * ratio);
        canvas.height = Math.floor(height * ratio);
        canvas.style.width = width + 'px';
        canvas.style.height = height + 'px';

        ctx.setTransform(ratio, 0, 0, ratio, 0, 0);
        initParticles();
    }

    function draw(particle) {
        ctx.save();
        ctx.translate(particle.x, particle.y);
        ctx.rotate(particle.angle);
        ctx.globalAlpha = particle.alpha;
        ctx.fillStyle = particle.color;
        ctx.font = particle.size + 'px serif';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.shadowColor = 'rgba(59, 130, 246, 0.65)';
        ctx.shadowBlur = 6;
        ctx.fillText(particle.glyph, 0, 0);
        ctx.restore();
    }

    function step(now) {
        if (!running) {
            return;
        }

        var delta = Math.min(48, now - lastTime || 16);
        var scale = delta / 16.6667;
        lastTime = now;

        ctx.clearRect(0, 0, width, height);

        for (var i = 0; i < particles.length; i += 1) {
            var particle = particles[i];

            particle.sway += particle.swaySpeed * scale;
            particle.angle += particle.spin * scale;
            particle.x += (particle.speedX + Math.sin(particle.sway) * 0.35) * scale;
            particle.y += particle.speedY * scale;

            draw(particle);

            if (particle.y - particle.size > height || particle.x < -60 || particle.x > width + 60) {
                particles[i] = makeParticle(false);
            }
        }

        frameId = window.requestAnimationFrame(step);
    }

    function start() {
        if (running || !particles.length) {
            return;
        }

        running = true;
        lastTime = window.performance.now();
        frameId = window.requestAnimationFrame(step);
    }

    function stop() {
        running = false;

        if (frameId !== null) {
            window.cancelAnimationFrame(frameId);
            frameId = null;
        }

        ctx.clearRect(0, 0, width, height);
    }

    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            stop();
        } else {
            start();
        }
    });

    window.addEventListener('resize', function () {
        window.clearTimeout(resizeTimer);
        resizeTimer = window.setTimeout(function () {
            resize();

            if (!document.hidden) {
                start();
            }
        }, 150);
    });

    resize();
    running = true;
    lastTime = window.performance.now();
    step(lastTime);
})();
