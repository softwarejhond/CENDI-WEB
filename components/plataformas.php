<!-- Plataformas educativas -->
<link rel="stylesheet" href="css/plataformas.css?v=1.3">
<section class="platforms-section" id="plataformas">
    <div class="platforms-bg" id="platformsBg" aria-hidden="true"></div>

    <div class="container">
        <div class="intro text-center">
            <h6>Plataformas</h6>
            <h1>Accede a tus plataformas educativas</h1>
            <p class="mx-auto">Ingresa a Q10, Campus Virtual y Escolink desde un solo lugar.</p>
        </div>

        <div class="platforms-grid">
            <a class="platform-item"
               href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
               target="_blank" rel="noopener">
                <span class="platform-circle">
                    <img src="img/icons/LogoQ10_SOlO.svg" alt="Q10 Técnicos" loading="lazy" decoding="async">
                </span>
                <strong>Q10 Técnicos</strong>
                <small>Notas y academia</small>
            </a>

            <a class="platform-item"
               href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
               target="_blank" rel="noopener">
                <span class="platform-circle">
                    <img src="img/icons/LogoQ10_SOlO.svg" alt="Q10 Bachillerato" loading="lazy" decoding="async">
                </span>
                <strong>Q10 Bachillerato</strong>
                <small>Notas y academia</small>
            </a>

            <a class="platform-item"
               href="https://www.campusdigital.cendiacademico.edu.co/login/index.php"
               target="_blank" rel="noopener">
                <span class="platform-circle">
                    <i class="bx bxs-graduation"></i>
                </span>
                <strong>Campus Virtual</strong>
                <small>Aulas virtuales</small>
            </a>

            <a class="platform-item"
               href="https://escolink.cendiacademico.edu.co/login.php"
               target="_blank" rel="noopener">
                <span class="platform-circle">
                    <img src="img/icons/escolink.svg" alt="Escolink" loading="lazy" decoding="async">
                </span>
                <strong>Escolink</strong>
                <small>Gestión escolar</small>
            </a>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.net.min.js" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var bg = document.getElementById('platformsBg');
        var reduceMotion = window.matchMedia &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!bg || reduceMotion || typeof window.VANTA === 'undefined') return;

        try {
            window.VANTA.NET({
                el: '#platformsBg',
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.0,
                minWidth: 200.0,
                scale: 1.0,
                scaleMobile: 1.0,
                color: 0xe67a0e,
                backgroundColor: 0x193365
            });
        } catch (error) {
            // Si el efecto no carga, la sección conserva su fondo azul.
        }
    });
</script>
