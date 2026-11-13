<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Técnicas de Aseo Doméstico | CENDI</title>
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
            <div class="banner-img" style="background-image: url('img/slides/aseo.jpg'); height: 400px; background-size: cover; background-position: center;"></div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-4 text-white">Técnicas de Aseo Doméstico</h1>
                </div>
            </div>
        </div>

            <section class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="img/aseo1.jpg" class="img-fluid mb-3 rounded" alt="Grupo realizando RCP">
                    <img src="img/aseo3.jpg" class="img-fluid mb-3 rounded" alt="Botiquín y pastillas">
                    <img src="img/aseo2.jpg" class="img-fluid rounded" alt="Hombre con mochila">
                </div>

                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold text-primary">Técnicas de Aseo Doméstico</p>
                    
                    <h2 class="fw-bold text-dark mb-3">Objetivo:</h2>
                    <p class="mb-4">Brindar herramientas para el desempeño de las diferentes labores domésticas enmarcadas en el trabajo seguro en el hogar.</p>

                    <h2 class="fw-bold text-dark mb-3">Dirigido a:</h2>
                    <p class="mb-4">Empleadas domésticas.</p>

                    <ul class="list-unstyled mb-4">
                        <li><span class="fw-bold">Duración:</span> 20 horas</li>
                        <li><span class="fw-bold">Día:</span> sábados</li>
                        <li><span class="fw-bold">Prerrequisitos:</span></li>
                        <ul style="list-style-type: none;">
                            <li>Autodiagnóstico de conocimientos previos</li>
                            <li>Técnicas de Limpieza y aseo</li>
                            <li>Segregación de residuos</li>
                            <li>Trabajo seguro en el hogar</li>
                            <li>Manejo de químicos en el hogar “Detergentes, medicamentos etc”</li>
                        </ul>
                        <li><span class="fw-bold">Cupo máximo:</span> 20 personas</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Materiales: 1 Kit por persona:</h2>
                    <ul style="list-style-type: none;">
                        <li>Guantes industriales</li>
                        <li>Mascarillas</li>
                        <li>Gafas de Seguridad</li>
                        <li>Jeringa 5 cc</li>
                        <li>Jeringa 10 cc</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Kit de demostración:</h2>
                    <ul style="list-style-type: none;">
                        <li>Desengrasantes</li>
                        <li>Hipoclorito de sodio doméstico</li>
                        <li>Plumilla limpia vidrios</li>
                        <li>Limpia vidrios</li>
                        <li>Detergente en polvo</li>
                        <li>Esponjillas</li>
                        <li>Paños limpiadores</li>
                        <li>Limpia juntas</li>
                        <li>Ambientadores Tema</li>
                    </ul>

                    <!-- <h2 class="fw-bold text-dark mb-3">Costo por persona:</h2>
                    <p class="display-6 text-success fw-bold">$75.000</p> -->
                    
                    <ul class="list-unstyled">
                        <li><span class="text-success fw-bold">*</span> El costo no incluye el kit*</li>
                        <li><span class="text-danger fw-bold">*</span>El costo incluye el certificado de asistencia*</li>
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