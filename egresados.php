<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Egresados | CENDI</title>
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
        <div class="banner-img" style="background-image: url('img/slides/egresados.jpg'); height: 400px; background-size: cover; background-position: center;"></div>

        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold mb-4 text-white">Egresados</h1>
            </div>
        </div>
    </div>

    <section class="container py-5">
        <div class="row">
            
            <div class="col-lg-8">
                <p class="text-uppercase fw-bold text-primary">Egresados</p>
                
                <h2 class="fw-bold text-dark mb-3">¿Qué es Evaluación y Certificación de Competencias Laborales?</h2>
                <p class="mb-4">La Evaluación y Certificación de Competencias Laborales es un proceso gratuito que el 
                    SENA ofrece para reconocer las capacidades de las personas en términos de conocimientos, destrezas y 
                    habilidades (aprendizajes previos) propios de un oficio u ocupación, sin importar donde, cuando y como 
                    las hayan obtenido, con el fin de facilitar la vinculación laboral y empleabilidad. Este proceso es 
                    diferente a la formación profesional que ofrece el SENA. <br><br>

                    Es un proceso voluntario y concertado entre la Entidad pública evaluadora y certificadora de competencias
                    (SENA) y el candidato, en el que se debe demostrar el desempeño en la función laboral que realiza, 
                    teniendo como referente las Normas Sectoriales de Competencia Laboral. <br><br>

                    Si está interesado en participar de este servicio, es necesario revisar la función laboral 
                    (Norma Sectorial de Competencia Laboral) objeto de evaluación y certificación, en concordancia con 
                    la ocupación u oficio que se desempeña. <br> <br>

                    * Te invitamos a certificar tus competencias laborales en el SENA, en el link que encontrarás abajo. *
                </p>    
                 
            </div>
            <div class="col-lg-4 mb-4"> <br><br>
                <img src="img/egresados1.jpg" class="img-fluid mb-5 rounded" alt="Grupo realizando RCP">
            </div>

            <div class="row justify-content-center mt-4">
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSedGtshqX3Nl8rLlcfLecdWnuE3cO3GOYGaAgrmQUeCnNDjXQ/viewform" target="_blank" class="btn btn-primary fw-bold btn-lg" role="button" style="background-color: #FF4D29; border-color: #FF4D29;">
                    <i class="bi bi-file-earmark-text-fill"></i> Encuesta para actualización de <br> información del Egresado
                </a>
                <a href="https://www.sena.edu.co/es-co/Empresarios/Paginas/certifiqueConocimientos.aspx" target="_blank" class="btn btn-success fw-bold btn-lg" role="button" style="background-color: #FF4D29; border-color: #FF4D29;">
                    <i class="bi bi-patch-check-fill"></i> Certifica tus competencias <br>laborales en el SENA
                </a>
            </div>
        </div>        
                <div class="row justify-content-center mt-5 mb-2">
                    <div class="col-12 text-center">
                        <h5 class="fw-bold text-dark">Información de interés para: Egresados de algún nivel de Inglés <br></h5>
                        <div class="mt-3">
                    <i class="bi bi-arrow-down-short fs-2 text-primary mx-1"></i> 
                    <i class="bi bi-arrow-down-short fs-2 text-primary mx-1"></i> 
                    </div> 
                </div> 
        </div>

        <div class="row justify-content-center">
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="https://trabajarporelmundo.org/certificados-de-ingles/#google_vignette" target="_blank" class="btn btn-success fw-bold btn-lg" role="button" style="background-color: #FF4D29; border-color: #FF4D29;">
                    <i class="bi bi-globe"></i> Tipos de Certificados de Inglés
                </a>
                <a href="https://www.britishcouncil.cl/examen/ielts/blog/tipos-certificacion-ielts" target="_blank" class="btn btn-success fw-bold btn-lg" role="button" style="background-color: #FF4D29; border-color: #FF4D29;">
                    <i class="bi bi-mortarboard-fill"></i> Diferentes certificaciones de <br> Inglés y sus diferencias
                </a>
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