<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Manejo de Nómina y Seguridad Social | CENDI</title>
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
            <div class="banner-img" style="background-image: url('img/slides/nomina.jpg'); height: 400px; background-size: cover; background-position: center;"></div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-4 text-white">Manejo de Nómina y Seguridad Social</h1>
                </div>
            </div>
        </div>

            <section class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="img/nomina1.jpg" class="img-fluid mb-3 rounded" alt="Grupo realizando RCP">
                    <img src="img/nomina2.jpg" class="img-fluid mb-3 rounded" alt="Botiquín y pastillas">
                    <img src="img/nomina3.jpg" class="img-fluid rounded" alt="Hombre con mochila">
                </div>

                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold text-primary">Manejo de Nómina y Seguridad Social</p>
                    
                    <h2 class="fw-bold text-dark mb-3">Objetivo:</h2>
                    <p class="mb-4">Analizar los aspectos claves para actualizarse en seguridad social (salud, pensión y riesgos profesionales) y en manejo de nómina, brindando herramientas que permitan liquidar los diferentes conceptos y/o auditarlos.</p>

                    <h2 class="fw-bold text-dark mb-3">Dirigido a:</h2>
                    <p class="mb-4">Lideres de Talento Humano en la empresa, microempresarios, público en general.</p>

                    <ul class="list-unstyled mb-4">
                        <li><span class="fw-bold">Duración:</span> 60 horas</li>
                        <li><span class="fw-bold">Día:</span> sábados</li>
                        <li><span class="fw-bold">Prerrequisito:</span> Ninguno</li>
                        <li><span class="fw-bold">Cupo máximo:</span> 20 personas</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Contenido Manejo de Nómina:</h2>
                    <ul style="list-style-type: none;">
                        <li>Liquidación de nómina periódica.</li>
                        <li>Salario</li>
                        <li>Modalidades de salario.</li>
                        <li>Protección al salario.</li>
                        <li>Auxilio de trasporte.</li>
                        <li>Tiempo suplementario.</li>
                        <li>Dominicales.</li>
                        <li>Recargos.</li>
                        <li>No salariales de pago mensual.</li>
                        <li>Indemnizaciones.</li>
                        <li>Descuentos.</li>
                        <li>Permitidos.</li>
                        <li>Prohibidos.</li>
                        <li>Capacidad de endeudamiento.</li>
                        <li>Viáticos</li>
                        <li>Liquidación de cesantías e intereses a las cesantías.</li>
                        <li>Liquidación de vacaciones.</li>
                        <li>Liquidación de prima.</li>
                        <li>Calzado y vestido de Labor.</li>
                        <li>Proceso disciplinario.</li>
                        <li>Estabilidad reforzada.</li>
                        <li>Suspensión del contrato laboral.</li>
                        <li>Remuneración variable.</li>
                        <li>Liquidación de aportes a la seguridad social.</li>
                        <li>Aportes parafiscales.</li>
                    </ul>

                    <h2 class="fw-bold text-dark mb-3">Seguridad social y parafiscalidad:</h2>
                    <ul style="list-style-type: none;">
                        <li>Ley de Protección al Cesante.</li>
                        <li>Aportes trabajadores dependientes e independientes.</li>
                        <li>Aportes trabajadores de por días.</li>
                        <li>IBC para aportes a seguridad social y parafiscalidad.</li>
                        <li>Auxilios por incapacidad.</li>
                        <li>Pensión familiar.</li>
                    </ul>

                    <!-- <h2 class="fw-bold text-dark mb-3">Costo por persona:</h2>
                    <p class="display-6 text-success fw-bold">$250.000</p> -->
                    
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