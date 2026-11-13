<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Técnico Laboral en Auxiliar en Servicios Farmacéuticos | CENDI</title>
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
    <div class="position-relative overflow-hidden mb-4">
        <div class="banner-img" style="background-image: url('img/slides/farmacia.jpg'); height: 400px; background-size: cover; background-position: center;"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
            <div class="text-center text-white">
                <h6 class="text-white">Programa Técnico Laboral</h6>
                <h1 class="display-4 fw-bold mb-4 text-white">Técnico Laboral en Auxiliar en Servicios Farmacéuticos</h1>
                <h5 style="text-align: center; color: white;">Lic. de Funcionamiento N° 05293 de Junio 25 de 2009<br>
                            Lic. de Funcionamiento N° 201750021377 de Diciembre 19 de 2017 Resolución de la Secretaria de Educación: <br>N° 03382 del 13 marzo de 2014, Renovación 201950091777 del 20 de Septiembre de 2019</h5>

            </div>
        </div>
    </div>

    <section class="bg-light" id="auxiliar-contable ">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active rounded mb-2" id="list-home-list" data-bs-toggle="list" href="#egreso" role="tab" aria-controls="egreso" style="background-color: #F08006; border: none; color: white;">
                                            <i class="fas fa-user-graduate me-2"></i>PERFIL DE EGRESO
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-profile-list" data-bs-toggle="list" href="#plan" role="tab" aria-controls="plan">
                                            <i class="fas fa-book me-2"></i>PLAN DE ESTUDIO
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-messages-list" data-bs-toggle="list" href="#duracion" role="tab" aria-controls="duracion">
                                            <i class="fas fa-clock me-2"></i>DURACIÓN
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-basicos-list" data-bs-toggle="list" href="#basicos" role="tab" aria-controls="basicos">
                                            <i class="fas fa-layer-group me-2"></i>MÓDULOS BÁSICOS
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-especificos-list" data-bs-toggle="list" href="#especificos" role="tab" aria-controls="especificos">
                                            <i class="fas fa-layer-group me-2"></i>MÓDULOS ESPECÍFICOS
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-transversal-list" data-bs-toggle="list" href="#transversal" role="tab" aria-controls="transversal">
                                            <i class="fas fa-tasks me-2"></i>MÓDULOS TRANSVERSALES
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="tab-content bg-white p-4 rounded shadow-sm" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="egreso" role="tabpanel" aria-labelledby="list-home-list">
                                            <h3 class="text-primary mb-4">Perfil de Egreso</h3>
                                            <p class="mb-4">Ocupaciones en las que el egresado puede desempeñarse:</p>
                                            <ul class="list-unstyled">
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Auxiliar de farmacia</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Auxiliar de droguería</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Instituciones prestadoras de salud pública y privada</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Comercio</li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="list-profile-list">
                                            <h3 class="text-primary mb-4">Plan de Estudio</h3>
                                            <p class="text-justify">
                                                El programa Técnico Laboral en Servicios Farmacéuticos, cuenta con un total de 1.600 horas, distribuidas en tres niveles de formación:
                                            </p>
                                            <ul class="list-unstyled">
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>40% teórico (640 horas)</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>60% prácticas (960 horas)</li>
                                            </ul>
                                            <p>Las horas prácticas serán de cumplimiento en las instituciones en que se tengan convenio.</p>
                                        </div>
                                        <div class="tab-pane fade" id="duracion" role="tabpanel" aria-labelledby="list-messages-list">
                                            <h3 class="text-primary mb-4">Duración del Programa</h3>
                                            <div class="alert alert-primary" role="alert">
                                                <i class="fas fa-calendar-alt me-2"></i>
                                                <strong>3 NIVELES</strong>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="basicos" role="tabpanel" aria-labelledby="list-basicos-list">
                                            <h3 class="text-primary mb-4">Módulos Básicos</h3>
                                            <ul class="list-unstyled">
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Ética y valores</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="especificos" role="tabpanel" aria-labelledby="list-especificos-list">
                                            <h3 class="text-primary mb-4">Módulos Específicos</h3>
                                            <ul class="list-unstyled">
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Administrar medicamentos y elementos</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Control de infección</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Recibir y despachar medicamentos</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Dispensación de medicamentos y elementos</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Atención de primer respondiente</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Negociación de productos y servicios</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Asesorías de Practica</li>
                                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Práctica Externa</li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="transversal" role="tabpanel" aria-labelledby="list-transversal-list">
                                            <h3 class="text-primary mb-4">Módulos Transversales</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Técnicas de Estudio</li>
                                                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Inducción a la Institución Educativa y Valores</li>
                                                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Salud Ocupacional</li>
                                                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Atender y Orientar al Usuario</li>
                                                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Tecnología de la Información y la Comunicación (TICS)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h4 class="card-title" style="color: #092032">Certificado Otorgado</h4>
                        <h5 class="card-subtitle mb-3 text-primary">TÉCNICO LABORAL POR COMPETENCIAS EN AUXILIAR EN SERVICIOS FARMACÉUTICOS.</h5>
                        <div class="alert alert-light ">
                            <strong>NO CONDUCE A TITULO PROFESIONAL</strong>
                        </div>

                        <p class="mb-2">Certificación CELAC en Norma Técnica Colombiana NTC 5663 y NTC 5555</p>
                        <p class="mb-2">Resolución SENA para contrato de Aprendizaje</p>
                        <p class="mb-2">Sujeto a cambios según políticas institucionales y normatividad legal vigente</p>
                        <p class="mb-4">Supervisada por Secretaría de Educación de Medellín</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4">
                        <img src="img/icons/logo-sena.png" alt="logo sena" class="img-fluid" style="height: 80px; width: auto;">
                        <img src="img/icons/mejores.png" alt="mejores" class="img-fluid" style="height: 80px; width: auto;">
                        <img src="img/logosCelac/celac-farmaceutico.png" alt="celac" class="img-fluid" style="height: 100px; width: auto;">
                    </div>
                </div>
            </div>
        </div>
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