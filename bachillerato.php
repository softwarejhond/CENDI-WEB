<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Finaliza tu Bachillerato | CENDI</title>
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

        .fas.text-primary, .fa-solid.text-primary {
            color: #f08006 !important;
        }

        .banner-img {
            transition: transform 0.3s ease-in-out;
        }

        .banner-img:hover {
            transform: scale(1.02);
        }

        .table-schedule th {
            background-color: #092032;
            color: white;
            text-align: center;
        }

        .table-schedule td {
            text-align: center;
            vertical-align: middle;
            font-size: 0.95rem;
        }

        .badge-orange {
            background-color: #F08006;
            color: white;
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
    <?php include 'controller/topnav.php'; ?>
    <?php include 'controller/navbar.php'; ?>
    <?php include 'controller/floating-button.php'; ?>

    <div class="position-relative overflow-hidden mb-4">
        <div class="banner-img" style="background-image: url('img/slides/bachillerato.png'); height: 400px; background-size: cover; background-position: center;"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(9, 32, 50, 0.75);">
            <div class="text-center text-white p-3">
                <span class="badge badge-orange mb-3 px-3 py-2 text-uppercase fw-bold">Cobertura Educativa</span>
                <h1 class="display-4 fw-bold mb-3 text-white">Finaliza tu Bachillerato</h1>
                <h5 class="fw-normal text-white max-w-75 mx-auto">
                    Educación gratuita 100% presencial por ciclos (CLEI 3 al 6) para jóvenes en extraedad y adultos.<br>
                    <small class="fs-6 opacity-75">En convenio con la Secretaría de Educación del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín.</small>
                </h5>
            </div>
        </div>
    </div>

    <section class="bg-light py-4" id="bachillerato-info">
        <div class="container">
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm text-center bg-white">
                        <div class="card-body p-4">
                            <h2 class="text-primary fw-bold display-6 m-0">¡2 GRADOS EN UN (1) AÑO!</h2>
                            <p class="lead text-muted fw-semibold m-0 mt-1">Sin costos de matrícula ni mensualidades • Cupos limitados</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="list-group shadow-sm" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active rounded mb-2" id="list-pasos-list" data-bs-toggle="list" href="#pasos" role="tab" aria-controls="pasos" style="background-color: #F08006; border: none; color: white;">
                            <i class="fas fa-clipboard-list me-2"></i>PASOS ANTES DE MATRICULARSE
                        </a>
                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-requisitos-list" data-bs-toggle="list" href="#requisitos" role="tab" aria-controls="requisitos">
                            <i class="fas fa-folder-open me-2"></i>REQUISITOS OBLIGATORIOS
                        </a>
                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-horarios-list" data-bs-toggle="list" href="#horarios" role="tab" aria-controls="horarios">
                            <i class="fas fa-calendar-alt me-2"></i>HORARIOS DE ESTUDIO
                        </a>
                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-edades-list" data-bs-toggle="list" href="#edades" role="tab" aria-controls="edades">
                            <i class="fas fa-user-clock me-2"></i>EDADES MÍNIMAS POR CICLO
                        </a>
                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-titulacion-list" data-bs-toggle="list" href="#titulacion" role="tab" aria-controls="titulacion">
                            <i class="fas fa-user-graduate me-2"></i>DOBLE TITULACIÓN TÉCNICA
                        </a>
                        <a class="list-group-item list-group-item-action rounded mb-2" id="list-atencion-list" data-bs-toggle="list" href="#atencion" role="tab" aria-controls="atencion">
                            <i class="fas fa-clock me-2"></i>HORARIOS DE ATENCIÓN Y SEDES
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="tab-content bg-white p-4 rounded shadow-sm" id="nav-tabContent" style="min-height: 380px;">
                        
                        <div class="tab-pane fade show active" id="pasos" role="tabpanel" aria-labelledby="list-pasos-list">
                            <h3 class="text-primary mb-4">Pasos a realizar antes de matricularse</h3>
                            
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="py-2 text-dark">
                                    <span class="fw-bold me-1">1.</span> Realizar una preinscripción con todos tus datos en la página web: <br>
                                    <a href="https://corporacioncendi.q10academico.com/Preinscripcion" target="_blank" class="fw-bold text-decoration-none text-primary text-break">corporacioncendi.q10academico.com/Preinscripcion</a>
                                </li>
                                <li class="py-2 text-dark">
                                    <span class="fw-bold me-1">2.</span> Dirigirse a la Institución con todos los requisitos completos para legalizar formalmente su matrícula.
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="list-requisitos-list">
                            <h3 class="text-primary mb-4">Requisitos de Matrícula</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Fotocopia del documento de identidad ampliada al 150%. <br><small class="text-muted ms-4">(Si el alumno es menor de edad, adjuntar fotocopia de la cédula del acudiente).</small></li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Certificado(s) de estudios originales desde el grado 5° de primaria hasta el último año cursado.</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Estar completamente retirado de la plataforma SIMAT (colegio anterior).</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Fotocopia de afiliación a EPS o SISBÉN actualizada.</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Fotocopia de la última factura de Servicios Públicos.</li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="horarios" role="tabpanel" aria-labelledby="list-horarios-list">
                            <h3 class="text-primary mb-4">Horarios de Estudio Disponibles</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-schedule align-middle">
                                    <thead>
                                        <tr>
                                            <th>LUNES</th>
                                            <th>LUNES, MARTES Y JUEVES</th>
                                            <th>MARTES Y JUEVES</th>
                                            <th>SÁBADO</th>
                                            <th>DOMINGO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>7:00 a.m.<br>a<br>5:00 p.m.</td>
                                            <td>6:00 p.m.<br>a<br>9:30 p.m.</td>
                                            <td>6:30 a.m. a 11:30 a.m.<br><span class="badge bg-secondary my-1">ó</span><br>12:00 m. a 5:00 p.m.</td>
                                            <td>6:00 a.m.<br>a<br>4:00 p.m.</td>
                                            <td>7:00 a.m.<br>a<br>5:00 p.m.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="edades" role="tabpanel" aria-labelledby="list-edades-list">
                            <h3 class="text-primary mb-4">Edades Mínimas Requeridas <small class="text-muted fs-6">(Años Cumplidos)</small></h3>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="p-3 border rounded bg-light text-center">
                                        <strong class="d-block text-dark">CLEI III</strong>
                                        <small class="text-muted d-block mb-2">(6° y 7° – Básica Secundaria)</small>
                                        <span class="badge bg-danger fs-6">15 / 16 años</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3 border rounded bg-light text-center">
                                        <strong class="d-block text-dark">CLEI IV</strong>
                                        <small class="text-muted d-block mb-2">(8° y 9° – Básica Secundaria)</small>
                                        <span class="badge bg-danger fs-6">16 / 17 años</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3 border rounded bg-light text-center">
                                        <strong class="d-block text-dark">CLEI V</strong>
                                        <small class="text-muted d-block mb-2">(10° – Media Académica)</small>
                                        <span class="badge bg-danger fs-6">18 años</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3 border rounded bg-light text-center">
                                        <strong class="d-block text-dark">CLEI VI</strong>
                                        <small class="text-muted d-block mb-2">(11° – Media Académica)</small>
                                        <span class="badge bg-danger fs-6">18 años</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="titulacion" role="tabpanel" aria-labelledby="list-titulacion-list">
                            <h3 class="text-primary mb-2">Doble Titulación Técnica</h3>
                            <div class="alert alert-warning py-2 mb-3">
                                <strong>¡SIN COSTO ALGUNO!</strong> Al cursar el CLEI 4 (Grado 8° o 9°) obtienes este beneficio eligiendo un programa:
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Administrativo en Salud</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Auxiliar Administrativo</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Inglés</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Manejo de Herramientas para Codificación de Software</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Servicios Farmacéuticos</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Auxiliar Contable</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Reservas y Asistencia de Servicios Turísticos</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Secretariado Médico</li>
                                        <li class="mb-2"><i class="fas fa-angle-right text-primary me-2"></i>Recurso Humano</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="atencion" role="tabpanel" aria-labelledby="list-atencion-list">
                            <h3 class="text-primary mb-3">Horarios de Atención</h3>
                            <div class="row small g-2 mb-3">
                                <div class="col-6 border-bottom pb-1"><strong>Lunes:</strong> 8:00 a.m. a 6:00 p.m.</div>
                                <div class="col-6 border-bottom pb-1"><strong>Martes y Jueves:</strong> 8:00 a.m. a 6:30 p.m.</div>
                                <div class="col-6 border-bottom pb-1"><strong>Miércoles y Viernes:</strong> 8:00 a.m. a 5:00 p.m.</div>
                                <div class="col-6 border-bottom pb-1"><strong>Sábados:</strong> 8:00 a.m. a 12:00 m.</div>
                            </div>
                            <h4 class="fs-6 fw-bold text-dark mb-2">Información de Contacto</h4>
                            <p class="mb-1 small"><strong>Sede Principal:</strong> Carrera 42 (Córdoba) #49-59</p>
                            <p class="mb-1 small"><strong>Teléfono:</strong> (604) 444 1808 Ext. 105</p>
                            <p class="mb-1 small"><strong>email:</strong> mercadeo@cendiacademico.edu.co</p>
                            <p class="mb-0 small text-muted"><strong>Sedes Alternas:</strong> Castilla / Santa Elena / La Volcana / San Cristóbal / Horacio Muñoz (Belén)</p>
                            <h4 class="fs-6 fw-bold text-dark mb-3 mt-4">Síguenos en nuestras Redes</h4>
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <a href="https://www.facebook.com/instituto.cendi" target="_blank" class="text-decoration-none text-secondary d-flex align-items-center btn-social">
                                        <i class="fab fa-facebook fs-5 me-1" style="color: #3b5998 !important;"></i> @Instituto.cendi
                                    </a>
                                    
                                    <a href="https://www.instagram.com/cendi.medellin" target="_blank" class="text-decoration-none text-secondary d-flex align-items-center btn-social">
                                        <i class="fab fa-instagram fs-5 me-1" style="color: #e1306c !important;"></i> @cendi.medellin
                                    </a>
                                    
                                    <a href="https://www.tiktok.com/@corporacion.cendi" target="_blank" class="text-decoration-none text-secondary d-flex align-items-center btn-social">
                                        <i class="fab fa-tiktok text-dark fs-5 me-1"></i> @corporacion.cendi
                                    </a>
                                    
                                    <a href="https://wa.me/573122143744" target="_blank" class="text-decoration-none text-secondary d-flex align-items-center btn-social">
                                        <i class="fab fa-whatsapp text-success fs-5 me-1"></i> 312 214 3744
                                    </a>                                 
                                </div>
                        </div>                        
                    </div>
                </div>
            </div>

        </div>
    </section>

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