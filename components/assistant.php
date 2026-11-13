<!-- Asistente virtual CENDI -->
<style>
    #cendiBot {
        position: fixed !important;
        right: 20px !important;
        left: auto !important;
        bottom: 85px !important;
        z-index: 2147483000 !important;
    }

    @media (max-width: 575.98px) {
        #cendiBot {
            right: 20px !important;
            left: auto !important;
            bottom: 85px !important;
        }
    }
</style>

<div class="cendi-bot" id="cendiBot">
    <button class="cendi-bot__launcher" id="cendiBotLauncher" type="button"
            aria-label="Abrir asistente virtual CENDI"
            aria-expanded="false" aria-controls="cendiBotPanel">
        <span class="cendi-bot__ring" aria-hidden="true"></span>

        <svg class="cendi-bot__mascot" viewBox="0 0 64 64" aria-hidden="true" focusable="false">
            <rect x="30" y="8" width="4" height="8" rx="2" fill="#f08006"/>
            <circle cx="32" cy="7" r="4" fill="#f08006"/>
            <rect x="12" y="17" width="40" height="34" rx="14" fill="#0a2540"/>
            <rect x="17" y="22" width="30" height="22" rx="10" fill="#ffffff"/>
            <circle class="cendi-bot__eye" cx="26" cy="32" r="3.2" fill="#f08006"/>
            <circle class="cendi-bot__eye" cx="38" cy="32" r="3.2" fill="#f08006"/>
            <path d="M27 38 Q32 42 37 38" stroke="#0a2540" stroke-width="2.5"
                  stroke-linecap="round" fill="none"/>
            <rect x="6" y="27" width="6" height="12" rx="3" fill="#0a2540"/>
            <rect x="52" y="27" width="6" height="12" rx="3" fill="#0a2540"/>
            <rect x="20" y="51" width="8" height="5" rx="2.5" fill="#0a2540"/>
            <rect x="36" y="51" width="8" height="5" rx="2.5" fill="#0a2540"/>
        </svg>

        <span class="cendi-bot__hello" id="cendiBotHello">¿Te ayudo?</span>
        <span class="cendi-bot__badge" id="cendiBotBadge" aria-hidden="true">1</span>
    </button>

    <section class="cendi-bot__panel" id="cendiBotPanel" aria-hidden="true"
             aria-label="Asistente virtual CENDI">
        <header class="cendi-bot__header">
            <span class="cendi-bot__avatar" aria-hidden="true">
                <svg viewBox="0 0 64 64" focusable="false">
                    <rect x="12" y="17" width="40" height="34" rx="14" fill="#0a2540"/>
                    <rect x="17" y="22" width="30" height="22" rx="10" fill="#ffffff"/>
                    <circle cx="26" cy="32" r="3.2" fill="#f08006"/>
                    <circle cx="38" cy="32" r="3.2" fill="#f08006"/>
                    <path d="M27 38 Q32 42 37 38" stroke="#0a2540" stroke-width="2.5"
                          stroke-linecap="round" fill="none"/>
                    <circle cx="32" cy="9" r="4" fill="#f08006"/>
                </svg>
            </span>

            <div class="cendi-bot__identity">
                <strong>CENDI Bot</strong>
                <span><i class="cendi-bot__status"></i> En línea</span>
            </div>

            <button class="cendi-bot__close" id="cendiBotClose" type="button"
                    aria-label="Cerrar asistente">
                <i class="bx bx-x"></i>
            </button>
        </header>

        <div class="cendi-bot__messages" id="cendiBotMessages" role="log" aria-live="polite">
            <div class="cendi-bot__welcome" id="cendiBotWelcome">
                <span class="cendi-bot__welcome-avatar" aria-hidden="true">
                    <svg viewBox="0 0 64 64" focusable="false">
                        <rect x="12" y="17" width="40" height="34" rx="14" fill="#0a2540"/>
                        <rect x="17" y="22" width="30" height="22" rx="10" fill="#ffffff"/>
                        <circle cx="26" cy="32" r="3.2" fill="#f08006"/>
                        <circle cx="38" cy="32" r="3.2" fill="#f08006"/>
                        <path d="M27 38 Q32 42 37 38" stroke="#0a2540" stroke-width="2.5"
                              stroke-linecap="round" fill="none"/>
                        <circle cx="32" cy="9" r="4" fill="#f08006"/>
                    </svg>
                </span>
                <strong>Hola, soy CENDI Bot</strong>
                <p>Tu asistente virtual. Puedo ayudarte con admisiones, programas, horarios y más.</p>
            </div>
        </div>

        <div class="cendi-bot__quick" id="cendiBotQuick"></div>

        <form class="cendi-bot__form" id="cendiBotForm">
            <input type="text" id="cendiBotInput" placeholder="Escribe tu pregunta..."
                   autocomplete="off" aria-label="Escribe tu pregunta">
            <button type="submit" aria-label="Enviar mensaje">
                <i class="bx bx-send"></i>
            </button>
        </form>

        <p class="cendi-bot__legal">Asistente automático de CENDI</p>
        <p class="cendi-bot__credit">
            Made by
            <a href="https://agenciaeaglesoftware.com/" target="_blank" rel="noopener" class="cendi-bot__eagle">Eagle Software</a>
        </p>
    </section>
</div>

<script>
    (function () {
        var bot = document.getElementById('cendiBot');
        if (bot && bot.parentNode !== document.body) {
            document.body.appendChild(bot);
        }
    })();
</script>
