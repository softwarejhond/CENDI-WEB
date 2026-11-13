<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Corporación CENDI | Docentes</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
     <!-- TOP NAV -->
    <?php include 'controller/topnav.php'; ?>
    <!-- BOTTOM NAV -->
    <?php include 'controller/navbar.php'; ?>
    <?php include 'controller/floating-button.php'; ?>


    <section class="bg-light" id="about">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Nuestros académicos</h6>
                    <h1 style="color: #092032">Conoce nuestros docentes</h1>
                    <p class="mx-auto">
                        Contamos con un equipo docente altamente calificado y comprometido con la excelencia educativa
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            for ($i = 1; $i <= 28; $i++) {
                $duration = 1000 + (($i - 1) % 4) * 500;
                echo '<div class="col-lg-3 about-text">
                    <div class="card" style="width:100%" data-aos="zoom-in" data-aos-duration="' . $duration . '" data-aos-delay="300">
                        <img src="./img/teachers/' . $i . '.png" class="card-img-top" alt="Docente CENDI ' . $i . '">
                    </div>
                </div>';
            }
            ?>
        </div>

    </div>
</section>

    <footer>
        <?php include 'controller/footer.php'; ?>
    </footer>

    <style>
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .about-section {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .section-title h3 {
            color: #092032;
            margin-bottom: 40px;
        }

        .about-text {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .col-lg-3 {
                padding: 0 10px;
            }
        }
    </style>
    <?php include 'components/modals/contact.php'; ?>
    <?php include 'components/accessibility-tools.php'; ?>
    <script src="js/accessibility.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>