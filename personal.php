<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Nuestro Personal | CENDI</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- TOP NAV -->
    <?php include 'controller/topnav.php'; ?>
    <!-- BOTTOM NAV -->
    <?php include 'controller/navbar.php'; ?>
    <?php include 'controller/floating-button.php'; ?>

    <section class="bg-light" id="docentes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Nuestro personal</h6>
                        <h1 style="color: #092032">Conoce nuestro personal administrativo y operativo</h1>
                        <p class="mx-auto">Contamos con un equipo administrativo y operativo altamente calificado y comprometido con la excelencia educativa</p>
                    </div>
                </div>
                <div class="row">
    <?php
    for ($i = 1; $i <= 16; $i++) {        
        // Omitir las fotos 9, 11, 12 y 16
        if (in_array($i, [9, 11, 12, 16])) {
            continue;
        }

        $duration = 1000 + (($i - 1) % 4) * 500;
        echo '<div class="col-lg-3 about-text">
            <div class="card" style="width: 100%" data-aos="zoom-in" data-aos-duration="' . $duration . '" data-aos-delay="300" data-aos-once="false">
                <img src="./img/member/' . $i . '.png" class="card-img-top" alt="Docente CENDI ' . $i . '" >
            </div>' . ($i % 4 == 0 ? '<br>' : '') . '
        </div>';
    }
    ?>
</div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
<?php include 'controller/footer.php'; ?>
</footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <?php include 'components/modals/contact.php'; ?>
    <?php include 'components/accessibility-tools.php'; ?>
    <script src="js/accessibility.js"></script>
</body>
</html>