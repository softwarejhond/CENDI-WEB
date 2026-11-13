<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Taller en: Seminario en manejo de clientes con dificultades, quejas y reclamos. | CENDI</title>
        <style>
        .text-primary {
            color: #f08006 !important;
        }

        .list-group-item:hover {
            background-color: #ffecd9;
            color: #f08006;
            transition: all 0.3s ease;
        }

        .list-group-item.active {
            background-color: #f08006 !important;
            border-color: #f08006 !important;
            color: white !important;
        }

        .fas.text-primary {
            color: #f08006 !important;
        }

        .banner-img {
            transition: transform 0.3s ease-in-out;
        }

        .banner-img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 768px) {
            .banner-img {
                height: 300px !important;
            }

            .display-4 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- TOP NAV -->
    <?php include 'controller/topnav.php'; ?>
    <!-- BOTTOM NAV -->
    <?php include 'controller/navbar.php'; ?>
    <!-- FLOATING BUTTON -->
    <?php include 'controller/floating-button.php'; ?>

    <!-- BANNER -->
        <section>
                    <div class="position-relative overflow-hidden mb-4">
            <div class="banner-img" style="background-image: url('img/slides/clientes.jpg'); height: 400px; background-size: cover; background-position: center;"></div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-4 text-white">Seminario en Manejo de Clientes con Dificultades, Quejas y Reclamos</h1>
                </div>
            </div>
        </div>

            <section class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="img/clientes2.jpg" class="img-fluid mb-3 rounded" alt="Grupo realizando RCP">
                    <img src="img/clientes1.jpg" class="img-fluid mb-3 rounded" alt="Botiquín y pastillas">
                    <img src="img/clientes3.jpg" class="img-fluid rounded" alt="Hombre con mochila">
                </div>

                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold text-primary">Seminario en Manejo de Clientes con Dificultades, Quejas y Reclamos</p>
                    
                    <h2 class="fw-bold text-dark mb-3">Objetivo:</h2>
                    <p class="mb-4">Activar mecanismos para prevenir clientes difíciles. Estimular el desarrollo de las competencias individuales en cada uno de los participantes en técnicas avanzadas y herramientas para trabajar con clientes difíciles y en dificultades. Concientizar a los participantes sobre la importancia de las quejas y reclamos para el fortalecimiento de los aspectos a mejorar dentro de la empresa.</p>

                    <h2 class="fw-bold text-dark mb-3">Dirigido a:</h2>
                    <p class="mb-4">Estudiantes segundo nivel todos los programas (Obligatorio) Líderes de Talento Humano en la empresa, microempresarios, público en general.</p>

                    <ul class="list-unstyled mb-4">
                        <li><span class="fw-bold">Duración:</span> 30 horas</li>
                        <li><span class="fw-bold">Día:</span> sábados</li>
                        <li><span class="fw-bold">Prerrequisito:</span> Ninguno</li>
                        <li><span class="fw-bold">Cupo máximo:</span> 20 personas</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Contenido:</h2>
                    <ul style="list-style-type: none;">
                        <li>Comunicación asertiva y efectiva, comportamiento pasivo, asertivo y agresivo.</li>
                        <li>Elementos para desarrollar la asertividad.</li>
                        <li>Conozca los 8 pasos para manejar un cliente difícil.</li>
                        <li>Tipos de clientes difíciles y su manejo adecuado.</li>
                        <li>Cualidades del servicio, hábitos para prestar un servicio excelente, elementos básicos del servicio al cliente.</li>
                        <li>Las quejas un gran momento de contacto con el cliente.</li>
                        <li>Instrumento para evaluar el nivel de usos de los recursos disponible en la vida personal (RDVP).</li>
                        <li>Clínicas de servicio, juegos de roles.</li>
                        <li>Taller de psicoterapia grupal para fortalecer la autoestima.</li>

                    </ul>

                    <!-- <h2 class="fw-bold text-dark mb-3">Costo por persona:</h2>
                    <p class="display-6 text-success fw-bold">$150.000</p> -->
                    
                    <ul class="list-unstyled">
                        <li><span class="text-success fw-bold">*</span> El costo incluye el certificado de asistencia*</li>
                    </ul>

                </div>
            </div>
            </section>
        </section>

    <!-- FOOTER -->
    <footer>
        <?php include 'controller/footer.php'; ?>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>


    <?php include 'components/modals/contact.php'; ?>
    <?php include 'components/accessibility-tools.php'; ?>
    <script src="js/accessibility.js"></script>
</body>

</html>