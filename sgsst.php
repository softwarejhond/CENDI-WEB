<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>SGSST | CENDI</title>
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
            <div class="banner-img" style="background-image: url('img/slides/SST.jpg'); height: 400px; background-size: cover; background-position: center;"></div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-4 text-white">Taller en Formación de auditores internos del sistema de gestión en seguridad y salud en el trabajo (SG-SST) - Decreto 1072 de 2015.</h1>
                </div>
            </div>
        </div>

            <section class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="img/SST1.jpg" class="img-fluid mb-3 rounded" alt="Grupo realizando RCP">
                    <img src="img/SST2.jpg" class="img-fluid mb-3 rounded" alt="Botiquín y pastillas">
                    <img src="img/SST3.jpg" class="img-fluid rounded" alt="Hombre con mochila">
                </div>

                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold text-primary">Taller en Formación de auditores internos del sistema de gestión en seguridad y salud en el trabajo (SG-SST) - Decreto 1072 de 2015.</p>
                    
                    <h2 class="fw-bold text-dark mb-3">Objetivo:</h2>
                    <p class="mb-4">Comprender los conceptos y métodos para planificar y realizar anualmente la auditoría interna al sistema de gestión en seguridad y salud en el trabajo de acuerdo con lo establecido en el Decreto 1072 de 2015 y la Resolución 0312 de 2019.</p>

                    <h2 class="fw-bold text-dark mb-3">Dirigido a:</h2>
                    <p class="mb-4">Lideres del Sistema de seguridad y salud en el trabajo en las empresas, miembros del Copasst, público en general.</p>

                    <ul class="list-unstyled mb-4">
                        <li><span class="fw-bold">Duración:</span> 25 horas</li>
                        <li><span class="fw-bold">Día:</span> sábados</li>
                        <li><span class="fw-bold">Prerrequisito:</span> Ninguno</li>
                        <li><span class="fw-bold">Cupo máximo:</span> 20 personas</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Contenido:</h2>
                    <ul style="list-style-type: none;">
                        <li>Introducción al sistema de gestión en seguridad y salud en el trabajo.</li>
                        <li>Requisitos del sistema de gestión en seguridad y salud en el trabajo.</li>
                        <li>Estándares mínimos del sistema de gestión en seguridad y salud en el trabajo (Resolución 0312/2019).</li>
                        <li>Conceptos asociados al proceso de auditoría.</li>
                        <li>Competencias del auditor.</li>
                        <li>Etapas de la auditoría interna.</li>
                        <li>Técnicas de auditoría.</li>
                        <li>Informe de auditoría interna.</li>
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