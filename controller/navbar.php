<style>
    .navbar .navbar-brand {
        flex-shrink: 0 !important;
    }

    .navbar .navbar-logo {
        width: auto !important;
        height: 84px !important;
        max-height: 84px !important;
        max-width: none !important;
    }

    @media (max-width: 991.98px) {
        .navbar .navbar-logo {
            height: 68px !important;
            max-height: 68px !important;
        }
    }

    @media (max-width: 575.98px) {
        .navbar .navbar-logo {
            height: 56px !important;
            max-height: 56px !important;
        }
    }
</style>

<nav class="navbar navbar-expand-xxl navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
            <?php //include 'components/animations/christmasTree.php'; ?>
               <?php //include 'components/animations/santa.php'; ?>
               
                <img src="img/logo.png" alt="Logo CENDI" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="institucionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Institución
                            <i class="bx bx-chevron-down nav-caret" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="institucionDropdown">
                            <a class="dropdown-item" href="nosotros.php">Corporación CENDI</a>
                            <a class="dropdown-item" href="TramiteActualizacion.php">Información financiera</a>
                            <a class="dropdown-item" href="politicasDeCalidad.php">SGC</a>
                            <a class="dropdown-item" href="trabajeConNosotros.php">Trabaje con nosotros</a>
                            <a class="dropdown-item" href="/DOCS/M_C_Bachiller.pdf" download="Manual de convicencia CENDI 2020 Bachiller">Manual de convivencia Bachillerato</a>
                            <a class="dropdown-item" href="/DOCS/4ManualConvivencia2026.pdf" download="Manual de convicencia CENDI Tecnicos">Manual de convivencia Técnicos</a>
                            <a class="dropdown-item" href="personal.php">Nuestro personal</a>
                            <a class="dropdown-item" href="docentes.php">Nuestros profesores</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programas técnicos
                            <i class="bx bx-chevron-down nav-caret" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu--grid" aria-labelledby="programasDropdown">
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#f08006">PROGRAMAS ADMINISTRATIVOS:</label>
                            <a class="dropdown-item" href="auxiliarContable.php">Técnico Laboral como Auxiliar Contable</a>
                            <a class="dropdown-item" href="auxiliarAdm.php">Técnico Laboral como Auxiliar Administrativo</a>
                            <a class="dropdown-item" href="auxiliarMedico.php">Técnico Laboral en Secretaria(o) Médica (o)</a>
                            <a class="dropdown-item" href="auxiliarSecretariado.php">Técnico Laboral como Secretaria General</a>
                            <a class="dropdown-item" href="auxiliarRecursosHumanos.php">Técnico Laboral Auxiliar en Recursos Humanos</a>
                            <a class="dropdown-item" href="auxiliarServicioCliente.php">Técnico Laboral Auxiliar en Servicio al Cliente y Telemercadeo</a>
                            <a class="dropdown-item" href="auxiliarSistemas.php">Técnico laboral como auxiliar de sistemas informáticos</a>
                            <a class="dropdown-item" href="recepcionHotelera.php">Técnico Laboral en Reservas y Asistencia de Servicios Turísticos</a>
                            <a class="dropdown-item" href="desarrolloSoftware.php">Técnico Laboral en Manejo de Herramientas para Codificación de Software</a>

                            <div class="dropdown-divider"></div>
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#f08006">PROGRAMAS DE SALUD:</label>
                            <a class="dropdown-item" href="auxiliarFarmaceutico.php">Técnico Laboral Auxiliar en Servicios Farmacéuticos</a>
                            <a class="dropdown-item" href="auxiliarSalud.php">Técnico Laboral Auxiliar Administrativo en Salud</a>

                            <div class="dropdown-divider"></div>
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#f08006">PROGRAMA DE CONOCIMIENTOS ACADÉMICOS:</label>
                            <a class="dropdown-item" href="ingles.php">Inglés</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="bachillerato.php">
                            Bachillerato
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="nuevosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nuevos Programas
                            <i class="bx bx-chevron-down nav-caret" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu--grid dropdown-menu-end" aria-labelledby="nuevosDropdown">
                            <label class="dropdown-item disabled fw-bold" style="color:#f08006">PROGRAMAS DE CONOCIMIENTOS ACADÉMICOS EN:</label>
                            
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Principios%20de%20Ciberseguridad">Principios de Ciberseguridad</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Herramientas%20de%20Inteligencia%20Artificial%20(IA)%20para%20Cine">Herramientas de Inteligencia Artificial (IA)</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Principios%20de%20Python">Principios de Python</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Herramientas%20de%20Animación%202D%20y%203D">Herramientas de animación 2D y 3D</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Fundamentos%20de%20AWS">Fundamentos de AWS</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Fundamentos%20Básicos%20de%20Lenguajes%20de%20Programación%20JavaScript">Fundamentos Básicos de Lenguajes de Programación JavaScript</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20de%20Introducción%20a%20Cloud%20Azure">Introducción a Cloud Azure</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Herramientas%20de%20Social%20Media">Herramientas de Social Media</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Fundamentos%20Básicos%20de%20Desarrollo%20y%20Diseño%20UI-UX">Fundamentos Básicos de Desarrollo y Diseño UI-UX</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Conceptos%20de%20Analítica%20y%20Gestión%20de%20Datos">Conceptos de Analítica y Gestión de Datos</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Introducción%20al%20Diseño%202D/3D%20para%20Web%20y%20Aplicaciones">Introducción al Diseño 2D/3D para Web y Aplicaciones</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Conceptos%20Básicos%20para%20la%20Creación%20de%20Avatares%20y%20Escenarios%203D">Conceptos Básicos para la Creación de Avatares y Escenarios 3D</a> 
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20en%20Principios%20de%20Metaverso%20y%20Comercio%20Electrónico">Principios de Metaverso y Comercio Electrónico</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Herramientas%20de%20Producción%20Virtual%20:%20Escenarios%20y%20Cinemática%20en%20Tiempo%20Real">Herramientas de Producción Virtual: Escenarios y Cinemática en Tiempo Real</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Fundamentos%20de%20Chatbots%20con%20IA">Fundamentos de Chatbots con IA</a>
                            <a class="dropdown-item" target="_blank" href="https://wa.me/573122143744?text=Hola!%20Quisiera%20información%20sobre%20el%20programa%20de%20Herramientas%20y%20Tácnicas%20para%20la%20Dirección%20y%20la%20Producción%20del%20Cine%20y%20la%20Televisión">Herramientas y Técnicas para la Dirección y la Producción del Cine y la Televisión</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="seminariosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Seminarios
                            <i class="bx bx-chevron-down nav-caret" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu--grid dropdown-menu--compact dropdown-menu-end" aria-labelledby="seminariosDropdown">
                            <a class="dropdown-item" href="soporteVital.php">Primeros auxilios - soporte vital básico</a>
                            <a class="dropdown-item" href="tics.php">Tic´s</a>
                            <a class="dropdown-item" href="facturacionSalud.php">Faturación en salud</a>
                            <a class="dropdown-item" href="aseoDomestico.php">Técnicas de aseo doméstico</a>
                            <a class="dropdown-item" href="sgsst.php">SG-SST</a>
                            <a class="dropdown-item" href="manejoNomina.php">Manejo de nómina y seguridad social</a>
                            <a class="dropdown-item" href="manejoClientes.php">Manejo de clientes con dificultades, quejas y reclamos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="politicasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Políticas
                            <i class="bx bx-chevron-down nav-caret" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="politicasDropdown">
                            <a class="dropdown-item" href="DOCS/PSPI.pdf" target="_blank">
                                Política de seguridad y privacidad de la información
                            </a>
                            <a class="dropdown-item" href="DOCS/CENDI POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES.pdf" target="_blank">
                                Política de tratamiento de datos personales
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egresados.php">Egresados</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contáctenos</a>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('.dropdown-toggle');
            dropdowns.forEach(function(dropdown) {
                new bootstrap.Dropdown(dropdown);
            });
        });
    </script>