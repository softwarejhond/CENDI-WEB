<!doctype html>
<html lang="es">

<head>
    <?php include 'controller/head.php'; ?>
    <title>Trabaje con Nosotros | CENDI</title>
    <style>
        .job-section {
            position: relative;
            background: #f7f9fc;
            padding: 80px 0 90px;
            overflow: hidden;
        }

        .job-section .intro {
            max-width: 760px;
            margin: 0 auto 48px;
        }

        .job-visual {
            position: sticky;
            top: 110px;
        }

        .job-img {
            width: 100%;
            display: block;
            border-radius: 26px;
            box-shadow: 0 30px 60px rgba(10, 37, 64, 0.16);
        }

        .job-badge {
            position: absolute;
            left: 20px;
            bottom: 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 0.65rem 1rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(10, 37, 64, 0.1);
            box-shadow: 0 16px 34px rgba(10, 37, 64, 0.16);
            backdrop-filter: blur(10px);
            color: #0a2540;
            font-size: 0.82rem;
            font-weight: 800;
        }

        .job-badge i {
            color: #f08006;
            font-size: 1.1rem;
        }

        .job-form-card {
            background: #fff;
            border: 1px solid rgba(10, 37, 64, 0.08);
            border-radius: 26px;
            padding: 34px;
            box-shadow: 0 24px 60px rgba(10, 37, 64, 0.1);
        }

        .job-form-card .form-group {
            margin-bottom: 18px;
        }

        .job-form-card label {
            display: block;
            margin-bottom: 6px;
            color: #0a2540;
            font-weight: 700;
            font-size: 0.92rem;
        }

        .job-form-card .form-control {
            height: 48px;
            border-radius: 12px;
            border: 1px solid rgba(10, 37, 64, 0.15);
            background: #f8fafc;
        }

        .job-form-card .form-control:focus {
            border-color: #f08006;
            box-shadow: 0 0 0 3px rgba(240, 128, 6, 0.15);
            background: #fff;
        }

        .job-form-card .form-control-file {
            display: block;
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: 1px dashed rgba(240, 128, 6, 0.45);
            background: rgba(240, 128, 6, 0.04);
            cursor: pointer;
        }

        .job-form-card hr {
            margin: 22px 0;
            border-color: rgba(10, 37, 64, 0.08);
        }

        .job-form-card .btn-success {
            background: #f08006;
            border-color: #f08006;
            border-radius: 12px;
            font-weight: 700;
            padding: 0.75rem 1.6rem;
            transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
        }

        .job-form-card .btn-success:hover {
            background: #cc6a00;
            border-color: #cc6a00;
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(240, 128, 6, 0.3);
        }

        .job-form-card .btn-danger {
            border-radius: 12px;
            font-weight: 700;
            padding: 0.75rem 1.4rem;
        }

        .job-form-card .custom-alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: #fff3e6;
            color: #7a4300;
            border: 1px solid rgba(240, 128, 6, 0.3);
            border-radius: 14px;
            padding: 16px;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .job-form-card .custom-alert i {
            color: #f08006;
            margin-top: 2px;
        }

        .job-form-card .upload-area {
            border-radius: 16px;
        }

        .job-form-card .upload-area .text-muted {
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        @media (max-width: 991.98px) {
            .job-section {
                padding: 56px 0 64px;
            }

            .job-visual {
                position: relative;
                top: auto;
                margin-bottom: 28px;
            }

            .job-img {
                border-radius: 20px;
            }

            .job-form-card {
                padding: 24px;
                border-radius: 20px;
            }
        }

        @media (max-width: 575.98px) {
            .job-form-card {
                padding: 18px;
            }

            .job-badge {
                left: 12px;
                bottom: 12px;
                font-size: 0.74rem;
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

    <section class="job-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro text-center">
                        <h6>Nuestro fondo de empleo</h6>
                        <h1 style="color: #092032">Bienvenidos a Trabaje con Nosotros</h1>
                        <p class="mx-auto">"Educando en la responsabilidad, educamos para la libertad"</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-start g-4">
                <div class="col-12 col-lg-5">
                    <div class="job-visual">
                        <img src="img/trabaje.png" alt="Trabaje con nosotros" class="job-img" loading="lazy" decoding="async">
                        <span class="job-badge">
                            <i class="bx bx-briefcase"></i> Únete a nuestro equipo
                        </span>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="job-form-card">
                        <div class="alert custom-alert" role="alert">
                            <i class="fas fa-exclamation-circle"></i>
                            <b>Tenga en cuenta que todos los campos son obligatorios, de no rellenarlos no podrás registrar tu información.</b>
                        </div>

                        <form id="jobApplicationForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Nombre completo:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar nombre aquí" onblur="aMayusculas(this.value,this.id)" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con su nombre.</div>
                            </div>

                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar correo aquí" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con un correo válido.</div>
                            </div>

                            <div class="form-group">
                                <label for="adress">Dirección de residencia:</label>
                                <input type="text" class="form-control" id="adress" name="adress" placeholder="Ingresar dirección aquí" onblur="aMayusculas(this.value,this.id)" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con una dirección válida.</div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Teléfono:</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingresar teléfono aquí" required maxlength="7" minlength="7">
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con un número válido.</div>
                            </div>

                            <div class="form-group">
                                <label for="cellphone">Celular:</label>
                                <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Ingresar celular aquí" required maxlength="10" minlength="10">
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con un número de celular válido.</div>
                            </div>

                            <div class="form-group">
                                <label for="city">Ciudad:</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Ingresar ciudad aquí" onblur="aMayusculas(this.value,this.id)" required maxlength="25">
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con una ciudad válida.</div>
                            </div>

                            <div class="form-group">
                                <label for="employ">Cargo al que aspira:</label>
                                <input type="text" class="form-control" id="employ" name="employ" placeholder="Ingresar cargo aquí" onblur="aMayusculas(this.value,this.id)" required maxlength="35">
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor rellenar el campo con un cargo válido.</div>
                            </div>

                            <hr>

                            <div class="form-group upload-area">
                                <label for="cv">Subir hoja de vida</label>
                                <p class="text-muted">Para subir tu hoja de vida, el archivo debe llevar tu nombre, gracias.</p>
                                <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                            </div>

                            <hr>

                            <div id="formAlert" class="alert" style="display: none;" role="alert"></div>

                            <button type="submit" class="btn btn-success" id="submitBtn">Enviar</button>
                            <button type="button" class="btn btn-danger" onclick="document.getElementById('jobApplicationForm').reset()">Cancelar</button>
                        </form>

                        <script>
                            document.getElementById('jobApplicationForm').addEventListener('submit', function (e) {
                                e.preventDefault();

                                const formData = new FormData(this);
                                const alertDiv = document.getElementById('formAlert');
                                const submitBtn = document.getElementById('submitBtn');

                                submitBtn.disabled = true;
                                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

                                fetch('controller/send_job_application.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        alertDiv.className = 'alert ' + (data.success ? 'alert-success' : 'alert-danger');
                                        alertDiv.textContent = data.message;
                                        alertDiv.style.display = 'block';

                                        if (data.success) {
                                            document.getElementById('jobApplicationForm').reset();
                                        }
                                    })
                                    .catch(error => {
                                        alertDiv.className = 'alert alert-danger';
                                        alertDiv.textContent = 'Error al enviar el formulario. Por favor, intente nuevamente.';
                                        alertDiv.style.display = 'block';
                                    })
                                    .finally(() => {
                                        submitBtn.disabled = false;
                                        submitBtn.innerHTML = 'Enviar';
                                        alertDiv.scrollIntoView({ behavior: 'smooth' });
                                    });
                            });

                            function aMayusculas(texto, id) {
                                const input = document.getElementById(id);
                                input.value = texto.toUpperCase();
                            }
                        </script>
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
