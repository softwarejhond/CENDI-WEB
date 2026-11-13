<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Inglés| CENDI</title>
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
        <div class="banner-img" style="background-image: url('img/slides/ingles.png'); height: 400px; background-size: cover; background-position: center;"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.7);">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold mb-4 text-white">Conocimientos Académicos en Inglés</h1>
                <h5 style="text-align: center; color: white;">Lic. de Funcionamiento N° 05293 de Junio 25 de 2009<br>
                Lic. de Funcionamiento N° 201750021377 de Diciembre 19 de 2017 Resolución de la Secretaria de Educación: <br>N°202550033460 DE 16/05/2025</h5>
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
                                        <a class="list-group-item list-group-item-action active rounded mb-2" id="list-home-list" data-bs-toggle="list" href="#ingreso" role="tab" aria-controls="ingreso" style="background-color: #F08006; border: none; color: white;">
                                            <i class="fas fa-book me-2"></i>PERFIL DE INGRESO
                                        </a>
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-egreso-list" data-bs-toggle="list" href="#egreso" role="tab" aria-controls="egreso">
                                            <i class="fas fa-book me-2"></i>PERFIL DE EGRESO
                                        </a> 
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-profile-list" data-bs-toggle="list" href="#plan" role="tab" aria-controls="plan">
                                            <i class="fas fa-book me-2"></i>PLAN DE ESTUDIO
                                        </a>                                                                            
                                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-certificado-list" data-bs-toggle="list" href="#certificado" role="tab" aria-controls="certificado">
                                            <i class="fas fa-tasks me-2"></i>CERTIFICADO A OTORGAR
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="tab-content bg-white p-4 rounded shadow-sm" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="ingreso" role="tabpanel" aria-labelledby="list-home-list">
                                            <h3 class="text-primary mb-4">Perfil de Ingreso</h3>
                                            <p class="mb-4">Requisitos de Ingreso:</p>
                                            <p class="mb-1">Educación: 9º grado </p>
                                            <p class="mb-1">Edad: 16 años</p>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Nivel</th>
                                                    <th scope="col">Prerrequisito</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">A1</th>
                                                    <td>Leer y escribir</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">A2</th>
                                                    <td>A1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">B1</th>
                                                    <td>A1-A2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">B2</th>
                                                    <td>A1-A2-B1</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                                    <br/>
                                                    <h4 class="text-center">Presentar Prueba Diagnóstica no excluyente.</h4>
                                        </div>
                                        <div class="tab-pane fade" id="egreso" role="tabpanel" aria-labelledby="list-egreso-list">
                                            <h3 class="text-primary mb-4">Perfil de Egreso</h3>
                                            <p class="mb-4">Ocupación en las que el egresado puede desempeñarse:</p>
                                            <p class="mb-4">Dominación del Programa: Conocimientos Académicos en inglés. <br>Examen de admisión – competencia lectora y razonamiento lógico (no excluyente).</p>
                                            
                                                <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Nivel</th>
                                                    <th scope="col">Prerrequisito</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">A1</th>
                                                    <td>Edad, escolaridad, examen de admisión.</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">A2</th>
                                                    <td>A1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">B1</th>
                                                    <td>A1-A2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">B2</th>
                                                    <td>A1-A2-B1</td>
                                                    </tr>
                                                </tbody>
                                                </table>

                                                <br>

                                                <p>
                                                El “Marco común europeo de referencia para las lenguas: aprendizaje, enseñanza, evolución” 
                                                contempla las competencias que el educando debe adquirir una vez terminado el nivel propuesto, 
                                                es así que se pretende: 
                                                </p> <br>                                            

                                                <table class="table">
                                                <thead>
                                                    <tr>                            
                                                    <th colspan="2" class="text-center">COMPETENCIAS GENERALES POR NIVEL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td class=" align-middle text-center" style="width: 10%;"><b>B2<br>AVANZADO </b></td>
                                                    <td>
                                                        <p>Es capaz de entender las ideas principales de <strong>textos complejos</strong> que traten de temas tanto concretos como abstractos, incluso si son de carácter técnico siempre que estén dentro de su campo de especialización.</p>
                                                        <p>Puede <strong>relacionarse con hablantes nativos con un grado suficiente de fluidez y naturalidad</strong> de modo que la comunicación se realice sin esfuerzo por parte de ninguno de los interlocutores.</p>
                                                        <p>Puede <strong>producir textos claros y detallados sobre temas diversos</strong>, así como defender un punto de vista sobre temas generales indicando los pros y los contras de las distintas opciones.</p>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td class="align-middle text-center" style="width: 10%;"><b>B1<br>INTERMEDIO</b></td>
                                                    <td>
                                                        <p>Es capaz de comprender los puntos principales de <strong>textos claros y en lengua estándar</strong> si tratan sobre cuestiones que le son conocidas, ya sea en situaciones de trabajo, de estudio o de ocio.</p>
                                                        <p>Sabe <strong>desenvolverse en la mayor parte de las situaciones</strong> que pueden surgir durante un viaje por zonas donde se utiliza la lengua.</p>
                                                        <p>Es capaz de producir <strong>textos sencillos y coherentes sobre temas que le son familiares</strong> o en los que tiene un interés personal.</p>
                                                        <p>Puede <strong>describir experiencias, acontecimientos, deseos y aspiraciones</strong>, así como justificar brevemente sus opiniones o explicar sus planes.</p>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                                <br />

                                                <table class="table">
                                                <tbody>
                                                    <tr>
                                                    <td rowspan="4" class="align-middle text-center vertical-text">
                                                        USUARIO BASICO
                                                    </td>
                                                    <td rowspan="2" class="align-middle text-center">
                                                        <b>A2</b><br><b>BASICO</b>
                                                    </td>
                                                    <td>
                                                        <b>Es capaz de comprender frases y expresiones de uso frecuente relacionadas con áreas de experiencia</b> que le son especialmente relevantes (información básica sobre sí mismo y su familia, compras, lugares de interés, ocupaciones, etc.).
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                        <b>Sabe comunicarse a la hora de llevar a cabo tareas simples y cotidianas</b> que no requieran más que intercambios sencillos y directos de información sobre cuestiones que le son conocidas o habituales.
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td rowspan="2" class="align-middle text-center">
                                                        <b>A1</b><br><b>PRINCIPIANTE</b>
                                                    </td>
                                                    <td>
                                                        <b>Es capaz de comprender y utilizar expresiones cotidianas de uso muy frecuente,</b> así como frases sencillas destinadas a satisfacer necesidades de tipo inmediato.
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                        <b>Puede presentarse a sí mismo y a otros, pedir y dar información personal</b> básica sobre su domicilio, sus pertenencias y las personas que conoce.
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <b>Puede relacionarse de forma elemental</b> siempre que su interlocutor hable despacio y con claridad y esté dispuesto a cooperar.
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table> <br> <br>
                                        </div>
                                        <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="list-profile-list">
                                            <h3 class="text-primary mb-4">Plan de Estudio</h3>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">NIVELES</th>
                                                        <th scope="col">DURACIÓN - HORAS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <th scope="row">INGLES NIVEL A1</th>
                                                        <td>90 HORAS</td>

                                                        </tr>
                                                        <tr>
                                                        <th scope="row">INGLES NIVEL A2</th>
                                                        <td>110 HORAS</td>

                                                        </tr>
                                                        <tr>
                                                        <th scope="row">INGLES NIVEL B1</th>
                                                        <td>175 HORAS</td>

                                                        </tr>
                                                        <tr>
                                                        <th scope="row">INGLES NIVEL B2</th>
                                                        <td>200 HORAS</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                        </div>
                                        <div class="tab-pane fade" id="certificado" role="tabpanel" aria-labelledby="list-certificado-list">
                                            <h3 class="text-primary mb-4">Certificado a Otorgar</h3>
                                            <br />
                                                <ul class="about-list">
                                                <i class="fa fa-check-square-o" style="color: red"></i>
                                                <table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" colspan="2" class="text-center">CERTIFICADO DE APTITUD OCUPACIONAL POR OTORGAR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="col">Conocimientos Académicos en inglés<br>
                                                        NIVEL A2<br>
                                                        <td>(A quien cumpla con las 90 horas del nivel A1 y las 110 horas del nivel A2, total de 200 horas acumuladas)</td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Conocimientos Académicos en inglés<br>
                                                        NIVEL B1<br>
                                                        <td>(A quien cumpla con las 90 horas del nivel A1, las 110 horas del nivel A2 y las 175 horas del nivel B1, total de 375 horas acumuladas)</td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Conocimientos Académicos en inglés<br>
                                                        NIVEL B2<br>
                                                        <td>(A quien cumpla con las 90 horas del nivel A1, las 110 horas del nivel A2, las 175 horas del nivel B1 y las 200 horas del nivel B2;, total de 575 horas acumuladas)</td>
                                                        </th>
                                                    </tr>

                                                    </tbody>
                                                </table>
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
                        <div class="alert alert-light ">
                            <strong>NO CONDUCE A TITULO PROFESIONAL</strong>
                        </div>
                        <p class="mb-2">Sujeto a cambios según políticas institucionales y normatividad legal vigente</p>
                        <p class="mb-4">Supervisada por Secretaría de Educación de Medellín</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4">
                        <img src="img/logosCelac/celac-ingles.png" alt="mejores" class="img-fluid" style="height: 80px; width: auto;">
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
    <?php include 'components/modals/anuncios.php'; ?>

    <?php include 'components/modals/contact.php'; ?>
    <?php include 'components/accessibility-tools.php'; ?>
    <script src="js/accessibility.js"></script>
</body>

</html>