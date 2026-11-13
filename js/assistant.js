(function () {
    'use strict';

    var root = document.getElementById('cendiBot');
    if (!root) return;

    var launcher = document.getElementById('cendiBotLauncher');
    var panel = document.getElementById('cendiBotPanel');
    var closeBtn = document.getElementById('cendiBotClose');
    var messages = document.getElementById('cendiBotMessages');
    var quickBox = document.getElementById('cendiBotQuick');
    var form = document.getElementById('cendiBotForm');
    var input = document.getElementById('cendiBotInput');
    var hello = document.getElementById('cendiBotHello');
    var badge = document.getElementById('cendiBotBadge');

    if (!launcher || !panel || !messages || !form || !input) return;

    var WHATSAPP = 'https://wa.me/573122143744?text=' + encodeURIComponent('Hola, quiero información sobre CENDI');
    var PREINSCRIPCION = 'https://site2.q10.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9';
    var TECNICOS_PREINSCRIPCION = 'https://site3.q10.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936';
    var MAPS = 'https://maps.google.com/?q=Carrera+42+No.49-59,+Medell%C3%ADn,+Colombia';

    var programasTecnicos = [
        ['Auxiliar Contable', 'auxiliarContable.php'],
        ['Auxiliar Administrativo', 'auxiliarAdm.php'],
        ['Secretaria(o) Médica(o)', 'auxiliarMedico.php'],
        ['Secretaria General', 'auxiliarSecretariado.php'],
        ['Auxiliar en Recursos Humanos', 'auxiliarRecursosHumanos.php'],
        ['Servicio al Cliente y Telemercadeo', 'auxiliarServicioCliente.php'],
        ['Auxiliar de Sistemas Informáticos', 'auxiliarSistemas.php'],
        ['Reservas y Asistencia de Servicios Turísticos', 'recepcionHotelera.php'],
        ['Codificación de Software', 'desarrolloSoftware.php'],
        ['Servicios Farmacéuticos', 'auxiliarFarmaceutico.php'],
        ['Auxiliar Administrativo en Salud', 'auxiliarSalud.php']
    ];

    var programLinks = programasTecnicos.map(function (programa) {
        return '<a href="' + programa[1] + '">' + programa[0] + '</a>';
    }).join('<br>');

    var programsAnswer =
        '<strong>Programas técnicos:</strong><br>' + programLinks +
        '<br><br><strong>Bachillerato:</strong><br><a href="bachillerato.php">Bachillerato por ciclos (CLEI 3 al 6)</a>' +
        '<br><br><strong>Inglés:</strong><br><a href="ingles.php">Conocimientos Académicos en Inglés</a>';

    var knowledge = [
        {
            keys: ['admisiones tecnicos', 'admision tecnicos', 'preinscripcion tecnicos', 'preinscripcion tecnico', 'matricula tecnicos', 'matriculas tecnicos', 'inscripcion tecnicos', 'inscripcion tecnico'],
            answer: 'Para <strong>programas técnicos</strong> puedes preinscribirte aquí:<br><br><a href="' + TECNICOS_PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscripción Técnicos</a><br><br>También puedes ver los programas: <a href="index.php#services">Programas técnicos</a>'
        },
        {
            keys: ['admisiones bachillerato', 'admision bachillerato', 'preinscripcion bachillerato', 'matricula bachillerato', 'matriculas bachillerato', 'inscripcion bachillerato', 'validar', '2 anos', 'dos anos', 'bachillerato 2027'],
            answer: 'Para <strong>Bachillerato 2027</strong> puedes validar <strong>2 años en 1</strong> y preinscribirte aquí:<br><br><a href="' + PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscripción Bachillerato</a><br><br>Más información: <a href="bachillerato.php">Bachillerato CENDI</a>'
        },
        {
            keys: ['admision', 'admisiones', 'matricula', 'matriculas', 'preinscripcion', 'preinscribir', 'oferta 2027'],
            answer: 'Tenemos <strong>admisiones abiertas 2027</strong>. Elige el proceso:<br><br><strong>Técnicos:</strong> <a href="' + TECNICOS_PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscríbete</a><br><strong>Bachillerato:</strong> <a href="' + PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscríbete</a>'
        },
        {
            keys: ['programa', 'programas', 'carrera', 'carreras', 'curso', 'cursos', 'lista de programas', 'que programas', 'todos los programas'],
            answer: programsAnswer
        },
        {
            keys: ['horario', 'horarios', 'atencion', 'jornada', 'clases'],
            answer: 'Nuestros horarios de atención son:<br><strong>Lunes a viernes:</strong> 8:00 a.m. a 6:00 p.m.<br><strong>Sábados:</strong> 8:00 a.m. a 1:00 p.m.<br><br>Para horarios de estudio de cada programa, <a href="' + WHATSAPP + '" target="_blank" rel="noopener">consúltanos por WhatsApp</a>.'
        },
        {
            keys: ['ubicacion', 'direccion', 'sede', 'sedes', 'donde', 'llegar', 'medellin', 'candelaria'],
            answer: 'Estamos en <strong>Cra. 42 #49-59, La Candelaria, Medellín</strong>.<br><br><a href="' + MAPS + '" target="_blank" rel="noopener">Ver ubicación en el mapa</a>'
        },
        {
            keys: ['contacto', 'telefono', 'celular', 'whatsapp', 'comunicarme', 'asesor', 'humano', 'persona', 'escribir'],
            answer: 'Puedes contactarnos por:<br><strong>Teléfono:</strong> (604) 444 1808<br><strong>WhatsApp:</strong> 312 214 3744<br><br><a href="' + WHATSAPP + '" target="_blank" rel="noopener">Hablar con un asesor</a>'
        },
        {
            keys: ['requisito', 'requisitos', 'documentos', 'inscripcion', 'matricularme'],
            answer:
                '<strong>Requisitos de matrícula — Bachillerato:</strong><br>' +
                '1. Fotocopia del documento de identidad ampliada al 150%. Si el alumno es menor de edad, adjuntar la cédula del acudiente.<br>' +
                '2. Certificados de estudios originales desde 5° de primaria hasta el último año cursado.<br>' +
                '3. Estar completamente retirado de la plataforma SIMAT del colegio anterior.<br>' +
                '4. Fotocopia de afiliación a EPS o SISBÉN actualizada.<br>' +
                '5. Fotocopia de la última factura de servicios públicos.<br><br>' +
                '<strong>Pasos para matricularte:</strong><br>' +
                '1. Realiza la preinscripción en línea:<br>' +
                '<a href="' + PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscripción Bachillerato</a><br>' +
                '2. Dirígete a la institución con todos los requisitos completos para legalizar la matrícula.<br><br>' +
                '<strong>Programas técnicos:</strong> los requisitos se confirman con el asesor según el programa que elijas.<br>' +
                '<a href="' + TECNICOS_PREINSCRIPCION + '" target="_blank" rel="noopener">Preinscripción Técnicos</a>'
        },
        {
            keys: ['costo', 'costos', 'precio', 'precios', 'valor', 'matricula', 'pago', 'pagos'],
            answer: 'Los costos varían según el programa y la jornada. Para darte el valor exacto, <a href="' + WHATSAPP + '" target="_blank" rel="noopener">escríbenos por WhatsApp</a> y un asesor te ayuda.'
        },
        {
            keys: ['bachillerato', 'clei', 'terminar bachillerato', 'finalizar bachillerato', 'ciclos'],
            answer: 'Puedes <strong>finalizar tu bachillerato por ciclos (CLEI 3 al 6)</strong> y validar 2 años en 1.<br><br>Más información: <a href="bachillerato.php">Bachillerato CENDI</a><br><br>Preinscripción: <a href="' + PREINSCRIPCION + '" target="_blank" rel="noopener">aquí</a>'
        },
        {
            keys: ['ingles', 'english', 'idioma'],
            answer: 'Contamos con <strong>Conocimientos Académicos en Inglés</strong> para diferentes niveles.<br><br>Más información: <a href="ingles.php">Inglés académico</a>'
        },
        {
            keys: ['egresado', 'egresados', 'certificado', 'certificados', 'diploma'],
            answer: 'Encuentra información para egresados y certificaciones aquí: <a href="egresados.php">Egresados CENDI</a>'
        },
        {
            keys: ['trabajo', 'empleo', 'trabajar', 'vacante', 'hoja de vida', 'cv'],
            answer: 'Si quieres trabajar con nosotros, envía tu hoja de vida en: <a href="trabajeConNosotros.php">Trabaje con nosotros</a>'
        },
        {
            keys: ['convenio', 'convenios', 'aliados', 'empresas'],
            answer: 'Contamos con convenios institucionales con clínicas, hospitales, SENA, FENALCO y más. Puedes verlos en la página de inicio: <a href="index.php#convenios">Nuestros convenios</a>'
        },
        {
            keys: ['hola', 'buenas', 'buenos dias', 'buenas tardes', 'buenas noches', 'hey'],
            answer: '¡Hola! Soy CENDI Bot. Puedo ayudarte con admisiones, programas, horarios, ubicación y contacto. ¿Qué necesitas?'
        },
        {
            keys: ['gracias', 'muchas gracias', 'ok', 'perfecto'],
            answer: '¡Con gusto! Si necesitas algo más, aquí estoy. También puedes <a href="' + WHATSAPP + '" target="_blank" rel="noopener">hablar con un asesor</a>.'
        }
    ];

    var quickReplies = [
        { label: 'Admisiones Técnicos', query: 'admisiones tecnicos' },
        { label: 'Admisiones Bachillerato', query: 'admisiones bachillerato' },
        { label: 'Programas', query: 'programas' },
        { label: 'Requisitos', query: 'requisitos' },
        { label: 'Horarios', query: 'horarios' },
        { label: 'Ubicación', query: 'ubicacion' },
        { label: 'WhatsApp', query: 'whatsapp' }
    ];

    var greeted = false;

    function normalize(text) {
        return String(text)
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .trim();
    }

    function escapeHtml(text) {
        return String(text)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function scrollToBottom() {
        messages.scrollTop = messages.scrollHeight;
    }

    function addMessage(role, html) {
        var bubble = document.createElement('div');
        bubble.className = 'cendi-bot__msg cendi-bot__msg--' + role;
        bubble.innerHTML = html;
        messages.appendChild(bubble);
        scrollToBottom();
        return bubble;
    }

    function addTyping() {
        var bubble = document.createElement('div');
        bubble.className = 'cendi-bot__msg cendi-bot__msg--bot cendi-bot__msg--typing';
        bubble.innerHTML = '<span></span><span></span><span></span>';
        messages.appendChild(bubble);
        scrollToBottom();
        return bubble;
    }

    function findAnswer(query) {
        var text = normalize(query);
        var best = null;
        var bestScore = 0;

        knowledge.forEach(function (item) {
            var score = 0;
            item.keys.forEach(function (key) {
                var normalizedKey = normalize(key);
                if (text.indexOf(normalizedKey) !== -1) {
                    score += normalizedKey.length;
                }
            });
            if (score > bestScore) {
                bestScore = score;
                best = item;
            }
        });

        if (best) return best.answer;

        return 'No encontré una respuesta exacta a tu pregunta. Puedes revisar nuestros programas en <a href="index.php#services">esta sección</a> o <a href="' + WHATSAPP + '" target="_blank" rel="noopener">hablar con un asesor por WhatsApp</a>.';
    }

    function respond(query) {
        var typing = addTyping();
        window.setTimeout(function () {
            typing.remove();
            addMessage('bot', findAnswer(query));
        }, 650);
    }

    function sendUserMessage(text) {
        addMessage('user', escapeHtml(text));
        respond(text);
    }

    function renderQuickReplies() {
        if (!quickBox || quickBox.childElementCount) return;

        quickReplies.forEach(function (item) {
            var button = document.createElement('button');
            button.type = 'button';
            button.textContent = item.label;
            button.addEventListener('click', function () {
                sendUserMessage(item.query);
            });
            quickBox.appendChild(button);
        });
    }

    function openBot() {
        root.classList.add('is-open');
        launcher.setAttribute('aria-expanded', 'true');
        panel.setAttribute('aria-hidden', 'false');
        if (hello) hello.classList.remove('is-visible');
        if (badge) badge.style.display = 'none';

        if (!greeted) {
            greeted = true;
            renderQuickReplies();
        }

        window.setTimeout(function () {
            input.focus();
        }, 250);
    }

    function closeBot() {
        root.classList.remove('is-open');
        launcher.setAttribute('aria-expanded', 'false');
        panel.setAttribute('aria-hidden', 'true');
    }

    launcher.addEventListener('click', function () {
        if (root.classList.contains('is-open')) {
            closeBot();
        } else {
            openBot();
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeBot);
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        var text = input.value.trim();
        if (!text) return;
        input.value = '';
        sendUserMessage(text);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && root.classList.contains('is-open')) {
            closeBot();
        }
    });

    if (hello) {
        window.setTimeout(function () {
            if (!root.classList.contains('is-open')) {
                hello.classList.add('is-visible');
            }
        }, 5000);

        window.setTimeout(function () {
            hello.classList.remove('is-visible');
        }, 13000);
    }
})();
