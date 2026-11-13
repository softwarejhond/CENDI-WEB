    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // Base path dinámico: si el sitio está en un subdirectorio, esto ajusta las rutas a assets
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    // Normaliza para href: '' -> '/', ' /subdir' -> '/subdir/'
    $base_for_href = ($base === '') ? '/' : $base . '/';

    $page = basename($_SERVER['PHP_SELF'], '.php');
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'cendiacademico.edu.co';
    $siteRoot = $scheme . '://' . $host . rtrim($base_for_href, '/');
    $canonical = ($page === 'index') ? $siteRoot . '/' : $siteRoot . '/' . $page;

    $metaMap = [
        'index' => [
            'title' => 'CENDI | Educación Técnica y Bachillerato en Medellín',
            'desc'  => 'Corporación CENDI: formación técnica laboral, bachillerato por ciclos y programas académicos en Medellín. Valida 2 años en 1 y preinscríbete para 2027.'
        ],
        'bachillerato' => [
            'title' => 'Bachillerato por Ciclos 2027 | CENDI Medellín',
            'desc'  => 'Finaliza tu bachillerato por ciclos CLEI 3 al 6 en Medellín. Valida 2 años en 1, con doble titulación técnica y formación presencial. Preinscríbete.'
        ],
        'nosotros' => [
            'title' => 'Corporación CENDI | Quiénes Somos',
            'desc'  => 'Conoce la Corporación CENDI, nuestra historia, misión y compromiso con la educación técnica y el bachillerato en Medellín.'
        ],
        'docentes' => [
            'title' => 'Nuestros Profesores | CENDI',
            'desc'  => 'Conoce al equipo docente de CENDI, profesionales que acompañan la formación técnica y académica de nuestros estudiantes.'
        ],
        'personal' => [
            'title' => 'Nuestro Personal | CENDI',
            'desc'  => 'Conoce al personal administrativo y académico de la Corporación CENDI en Medellín.'
        ],
        'egresados' => [
            'title' => 'Egresados y Certificaciones | CENDI',
            'desc'  => 'Información para egresados CENDI: certificaciones, trámites y oportunidades para continuar creciendo profesionalmente.'
        ],
        'ingles' => [
            'title' => 'Inglés Académico | CENDI Medellín',
            'desc'  => 'Programa de conocimientos académicos en inglés en Medellín. Mejora tu nivel y amplía tus oportunidades laborales con CENDI.'
        ],
        'auxiliarContable' => [
            'title' => 'Técnico Laboral en Auxiliar Contable | CENDI',
            'desc'  => 'Fórmate como Auxiliar Contable en Medellín. Programa técnico laboral con formación en contabilidad y finanzas.'
        ],
        'auxiliarAdm' => [
            'title' => 'Técnico Laboral en Auxiliar Administrativo | CENDI',
            'desc'  => 'Estudia Auxiliar Administrativo en Medellín. Formación técnica en gestión y procesos administrativos.'
        ],
        'auxiliarMedico' => [
            'title' => 'Técnico Laboral en Secretaria(o) Médica(o) | CENDI',
            'desc'  => 'Fórmate como Secretaria(o) Médica(o) en Medellín. Gestión administrativa en entornos de salud.'
        ],
        'auxiliarSecretariado' => [
            'title' => 'Técnico Laboral en Secretaria General | CENDI',
            'desc'  => 'Programa técnico laboral en Secretaria General en Medellín. Gestión documental y administrativa.'
        ],
        'auxiliarRecursosHumanos' => [
            'title' => 'Técnico Laboral en Recursos Humanos | CENDI',
            'desc'  => 'Fórmate en Recursos Humanos en Medellín. Gestión del talento humano y procesos organizacionales.'
        ],
        'auxiliarServicioCliente' => [
            'title' => 'Técnico Laboral en Servicio al Cliente | CENDI',
            'desc'  => 'Programa técnico en Servicio al Cliente y Telemercadeo en Medellín. Atención y experiencia del cliente.'
        ],
        'auxiliarSistemas' => [
            'title' => 'Técnico Laboral en Sistemas Informáticos | CENDI',
            'desc'  => 'Estudia Auxiliar de Sistemas Informáticos en Medellín. Soporte y mantenimiento tecnológico.'
        ],
        'recepcionHotelera' => [
            'title' => 'Técnico Laboral en Servicios Turísticos | CENDI',
            'desc'  => 'Fórmate en Reservas y Asistencia de Servicios Turísticos en Medellín. Atención hotelera y turismo.'
        ],
        'desarrolloSoftware' => [
            'title' => 'Técnico Laboral en Codificación de Software | CENDI',
            'desc'  => 'Programa técnico en Codificación de Software en Medellín. Aprende programación y desarrollo de soluciones.'
        ],
        'auxiliarFarmaceutico' => [
            'title' => 'Técnico Laboral en Servicios Farmacéuticos | CENDI',
            'desc'  => 'Fórmate como Auxiliar en Servicios Farmacéuticos en Medellín. Manejo y dispensación de medicamentos.'
        ],
        'auxiliarSalud' => [
            'title' => 'Técnico Laboral en Administración en Salud | CENDI',
            'desc'  => 'Programa técnico en Auxiliar Administrativo en Salud en Medellín. Gestión de procesos en el sector salud.'
        ],
        'trabajeConNosotros' => [
            'title' => 'Trabaje con Nosotros | CENDI',
            'desc'  => 'Envía tu hoja de vida y forma parte del equipo de la Corporación CENDI en Medellín.'
        ],
        'TramiteActualizacion' => [
            'title' => 'Información Financiera y Legal | CENDI',
            'desc'  => 'Consulta los documentos legales, financieros y de actualización de la Corporación CENDI.'
        ],
        'politicasDeCalidad' => [
            'title' => 'Políticas de Calidad y SGC | CENDI',
            'desc'  => 'Conoce las políticas de calidad y el sistema de gestión de la Corporación CENDI.'
        ],
        'convenios' => [
            'title' => 'Convenios Institucionales | CENDI',
            'desc'  => 'Conoce los convenios y aliados institucionales de la Corporación CENDI en Medellín.'
        ]
    ];

    $courseMap = [
        'bachillerato' => 'Bachillerato por Ciclos',
        'ingles' => 'Conocimientos Académicos en Inglés',
        'auxiliarContable' => 'Técnico Laboral como Auxiliar Contable',
        'auxiliarAdm' => 'Técnico Laboral como Auxiliar Administrativo',
        'auxiliarMedico' => 'Técnico Laboral en Secretaria(o) Médica(o)',
        'auxiliarSecretariado' => 'Técnico Laboral como Secretaria General',
        'auxiliarRecursosHumanos' => 'Técnico Laboral en Recursos Humanos',
        'auxiliarServicioCliente' => 'Técnico Laboral en Servicio al Cliente y Telemercadeo',
        'auxiliarSistemas' => 'Técnico Laboral en Sistemas Informáticos',
        'recepcionHotelera' => 'Técnico Laboral en Reservas y Asistencia de Servicios Turísticos',
        'desarrolloSoftware' => 'Técnico Laboral en Codificación de Software',
        'auxiliarFarmaceutico' => 'Técnico Laboral en Servicios Farmacéuticos',
        'auxiliarSalud' => 'Técnico Laboral en Administración en Salud'
    ];

    $pageMeta = isset($metaMap[$page]) ? $metaMap[$page] : [
        'title' => 'CENDI | Formación Técnica y Bachillerato en Medellín',
        'desc'  => 'Corporación CENDI: educación técnica laboral, bachillerato por ciclos y programas académicos en Medellín.'
    ];

    $pageTitle = $pageMeta['title'];
    $pageDesc = $pageMeta['desc'];
    ?>

    <!-- Establece <base> para resolver rutas relativas correctamente cuando el sitio
        se despliega en un subdirectorio -->
    <base href="<?php echo $base_for_href; ?>">

    <link rel="icon" type="image/x-icon" href="<?php echo $base_for_href; ?>img/logo.png">

    <!-- SEO -->
    <meta name="description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="CENDI, educación técnica Medellín, bachillerato por ciclos, técnico laboral, auxiliar contable, auxiliar administrativo, preinscripción 2027">
    <meta name="author" content="Corporación CENDI">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0a2540">
    <link rel="canonical" href="<?php echo $canonical; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Corporación CENDI">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:image" content="<?php echo $siteRoot; ?>/img/bg_banner2.jpg">
    <meta property="og:image:width" content="2000">
    <meta property="og:image:height" content="1335">
    <meta property="og:locale" content="es_CO">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo $siteRoot; ?>/img/bg_banner2.jpg">

    <!-- Preconexiones -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/bootstrap.min.css?v=1.1">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/owl.carousel.min.css?v=1.1">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/owl.theme.default.min.css?v=1.1">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/style.css?v=1.3">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/university.css?v=3.6">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/hero.css?v=4.8">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/assistant.css?v=1.9">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/floating-button.css?v=1.6">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/ux.css?v=1.2">
   <!-- Font Awesome para íconos de accesibilidad -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/accessibility.css?v=1.0">

    <script>
        // Ruta base disponible para scripts que necesiten construir URLs dinámicamente
        window.BASE_PATH = '<?php echo $base_for_href; ?>';
    </script>
    <script src="<?php echo $base_for_href; ?>js/university.js?v=1.5" defer></script>
    <script src="<?php echo $base_for_href; ?>js/assistant.js?v=1.6" defer></script>
    <script src="<?php echo $base_for_href; ?>js/ux.js?v=1.2" defer></script>

    <!-- Datos estructurados -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Corporación CENDI",
        "url": "<?php echo $siteRoot; ?>/",
        "logo": "<?php echo $siteRoot; ?>/img/logo.png",
        "description": "Corporación CENDI: educación técnica laboral, bachillerato por ciclos y programas académicos en Medellín.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Carrera 42 No.49-59",
            "addressLocality": "Medellín",
            "addressRegion": "Antioquia",
            "addressCountry": "CO"
        },
        "telephone": "+57 604 444 1808",
        "sameAs": [
            "https://www.facebook.com/InstitutoCENDI/",
            "https://www.instagram.com/cendi.medellin/",
            "https://www.tiktok.com/@corporacion.cendi"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Corporación CENDI",
        "url": "<?php echo $siteRoot; ?>/",
        "inLanguage": "es-CO"
    }
    </script>

    <?php if (isset($courseMap[$page])): ?>
    <?php
    $courseData = [
        '@context' => 'https://schema.org',
        '@type' => 'Course',
        'name' => $courseMap[$page],
        'description' => $pageDesc,
        'provider' => [
            '@type' => 'EducationalOrganization',
            'name' => 'Corporación CENDI',
            'sameAs' => $siteRoot . '/'
        ]
    ];
    ?>
    <script type="application/ld+json">
    <?php echo json_encode($courseData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
    </script>
    <?php endif; ?>

    	<!-- Start of HubSpot Embed Code  chat-->
	<!--<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/21270719.js"></script> -->
	<!-- End of HubSpot Embed Code chat -->
