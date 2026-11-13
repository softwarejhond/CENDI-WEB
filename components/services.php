<?php
    // Array de servicios técnicos
    // Número de WhatsApp de la institución
    $whatsappNumber = '573122143744';
    
    // Función para generar URL de WhatsApp con mensaje
    function generarUrlWhatsapp($titulo, $categoria) {
        global $whatsappNumber;
        $mensaje = "¡Hola! \n\n";
        $mensaje .= "*SOLICITUD DE INFORMACIÓN*\n\n";
        $mensaje .= "*" . $titulo . "*\n";
        $mensaje .= "Categoría: " . $categoria . "\n\n";
        $mensaje .= "Me gustaría conocer:\n";
        $mensaje .= "Requisitos de inscripción\n";
        $mensaje .= "Horarios disponibles\n";
        $mensaje .= "Inversión y formas de pago\n";
        $mensaje .= "Fecha de inicio\n";
        $mensaje .= "Proceso de matrícula\n\n";
        
        return $mensaje;
    }

    $servicios = [
        [
            'icono' => 'fa-solid fa-calculator',
            'titulo' => 'Técnico Laboral como Auxiliar Contable',
            'categoria' => 'Técnico Laboral',
            'descripcion' => 'Programa Q10: formación para Auxiliar contable. Consulta duración, horarios y requisitos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar contable', 'Técnico Laboral')
        ],
        [
            'icono' => 'fa-solid fa-briefcase',
            'titulo' => 'Técnico Laboral como Auxiliar Administrativo',
            'categoria' => 'Administración',
            'descripcion' => 'Formación en procesos administrativos, atención y gestión básica.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar Administrativo', 'Administración')
        ],
        [
            'icono' => 'fa-solid fa-hospital',
            'titulo' => 'Técnico Laboral en Secretaria(o) Médica (o)',
            'categoria' => 'Salud',
            'descripcion' => 'Formación orientada a la gestión administrativa en entornos de salud y atención al paciente.',
            'url' => generarUrlWhatsapp('Técnico Laboral en Secretaria(o) Médica (o)', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-file-signature',
            'titulo' => 'Técnico Laboral como Secretaria General',
            'categoria' => 'Salud',
            'descripcion' => 'Capacitación para funciones de secretaria general en entidades públicas y privadas.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Secretaria General', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-users',
            'titulo' => 'Técnico Laboral como Auxiliar en Recursos Humanos',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en gestión de talento humano y procedimientos de recursos humanos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar en Recursos Humanos', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-pills',
            'titulo' => 'Técnico Laboral Auxiliar en Servicios Farmacéuticos',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en dispensación y gestión de servicios farmacéuticos.',
            'url' => generarUrlWhatsapp('Técnico Laboral Auxiliar en Servicios Farmacéuticos', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-notes-medical',
            'titulo' => 'Técnico Laboral Auxiliar Administrativo en Salud',
            'categoria' => 'Salud',
            'descripcion' => 'Formación administrativa especializada en el sector salud.',
            'url' => generarUrlWhatsapp('Técnico Laboral Auxiliar Administrativo en Salud', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-headset',
            'titulo' => 'Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en atención al cliente, ventas y telemercadeo.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-desktop',
            'titulo' => 'Técnico Laboral como Auxiliar de Sistemas Informáticos',
            'categoria' => 'Sistemas',
            'descripcion' => 'Formación en soporte, instalación y mantenimiento de sistemas informáticos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar de Sistemas Informáticos', 'Sistemas')
        ],
        [
            'icono' => 'fa-solid fa-hotel',
            'titulo' => 'Técnico Laboral en Reservas y Asistencia de Servicios Turísticos',
            'categoria' => 'Recepcionista',
            'descripcion' => 'Formación en reserva y asistencia de servicios turísticos.',
            'url' => generarUrlWhatsapp('Técnico Laboral por Competencias en Reservas y Asistencia de Servicios Turísticos.', 'Recepcionista')
        ],
        [
            'icono' => 'fa-solid fa-code',
            'titulo' => 'Técnico Laboral en Manejo de Herramientas para Codificación de Software',
            'categoria' => 'Software',
            'descripcion' => 'Formación en fundamentos de programación y asistencia en proyectos de software.',
            'url' => generarUrlWhatsapp('Técnico Laboral por Competencias en Manejo de Herramientas para Codificación de Software', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-language',
            'titulo' => 'Conocimientos Académicos en inglés',
            'categoria' => 'Inglés',
            'descripcion' => 'Cursos y niveles académicos en inglés para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en inglés', 'Inglés')
        ],
        [
            'icono' => 'fa-solid fa-building-shield',
            'titulo' => 'Conocimientos Académicos en Principios de Ciberseguridad',
            'categoria' => 'Ciberseguridad',
            'descripcion' => 'Cursos y niveles académicos en principios de ciberseguridad para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Principios de Ciberseguridad', 'Ciberseguridad')
        ],
        [
            'icono' => 'fa-solid fa-film',
            'titulo' => 'Programa Conocimientos Académicos en Herramientas de Inteligencia Artificial (IA)',
            'categoria' => 'Inteligencia Artificial',
            'descripcion' => 'Cursos y niveles académicos en herramientas de inteligencia artificial.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Herramientas de Inteligencia Artificial (IA)', 'Inteligencia Artificial')
        ],
        [
            'icono' => 'fa-brands fa-python',
            'titulo' => 'Programa Conocimientos Académicos en Principios de Python',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en principios de Python para diferentes necesidades formativas',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Principios de Python', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-image',
            'titulo' => 'Programa Conocimientos Académicos en Herramientas de animación 2D y 3D',
            'categoria' => 'Diseño',
            'descripcion' => 'Cursos y niveles académicos en herramientas de animación 2D y 3D para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Herramientas de animación 2D y 3D', 'Diseño')
        ],
        [
            'icono' => 'fa-brands fa-aws',
            'titulo' => 'Programa Conocimientos Académicos en Fundamentos de AWS',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en fundamentos de AWS para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Fundamentos de AWS', 'Software')
        ],
        [
            'icono' => 'fab fa-js',
            'titulo' => 'Programa Conocimientos Académicos en Fundamentos Básicos de Lenguajes de Programación JavaScript',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en fundamentos de JavaScript para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Fundamentos Básicos de Lenguajes de Programación JavaScript.', 'Software')
        ],
        [
            'icono' => 'fa fa-cloud',
            'titulo' => 'Programa Conocimientos Académicos en Introducción a Cloud Azure',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en introducción a Cloud Azure para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Introducción a Cloud Azure', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-hashtag',
            'titulo' => 'Programa Conocimientos Académicos en Herramientas de Social Media',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en herramientas de social media para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Herramientas de Social Media', 'Software')
        ],
        [
            'icono' => 'fa fa-user',
            'titulo' => 'Programa Conocimientos Académicos en Fundamentos Básicos de Desarrollo y Diseño UI-UX',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en fundamentos de UI-UX para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Fundamentos Básicos de Desarrollo y Diseño UI-UX', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-arrow-down-up-lock',
            'titulo' => 'Conceptos de Analítica y Gestión de Datos',
            'categoria' => 'Software',
            'descripcion' => 'Cursos y niveles académicos en fundamentos en Conceptos de Analítica y Gestión de Datos',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Conceptos de Analítica y Gestión de Datos', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-brain',
            'titulo' => 'Programa Conocimientos Académicos en Introducción al Diseño 2D/3D para Web y Aplicaciones',
            'categoria' => 'Diseño',
            'descripcion' => 'Cursos y niveles académicos en fundamentos en introducción al diseño 2D/3D para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Introducción al Diseño 2D/3D para Web y Aplicaciones', 'Diseño')
        ],
        [
            'icono' => 'fa-solid fa-chalkboard-user',
            'titulo' => 'Programa Conocimientos Académicos en Conceptos Básicos para la Creación de Avatares y Escenarios en 3D',
            'categoria' => 'Diseño',
            'descripcion' => 'Cursos y niveles académicos en conceptos básicos para la creación de avatares y escenarios en 3D para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Conceptos Básicos para la Creación de Avatares y Escenarios en 3D', 'Diseño')
        ],
        [
            'icono' => 'fa-brands fa-meta',
            'titulo' => 'Programa Conocimientos Académicos en Principios de Metaverso y Comercio Electrónico',
            'categoria' => 'Comercio',
            'descripcion' => 'Formación en conocimientos académicos en principios de metaverso y comercio electrónico',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Principios de Metaverso y Comercio Electrónico', 'Comercio')
        ],
        [
            'icono' => 'fa-solid fa-globe',
            'titulo' => 'Programa Conocimientos Académicos en Herramientas de Producción Virtual:  Escenarios y Cinemática en Tiempo Real',
            'categoria' => 'Diseño',
            'descripcion' => 'Formación en conocimientos académicos en herramientas de producción virtual para la creación de escenarios y cinemática en tiempo real',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en herramietas de producción virtual', 'Diseño')
        ],
        [
            'icono' => 'fa-solid fa-robot', 
            'titulo' => 'Programa Conocimientos Académicos en Fundamentos de Chatbots con IA',
            'categoria' => 'Inteligencia artificial',
            'descripcion' => 'Formación en conocimientos académicos en fundamentos de chatbots con IA',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en Fundamentos de Chatbots con IA.', 'Inteligencia artificial')
        ],
        [
            'icono' => 'fa-solid fa-tv',
            'titulo' => 'Programa Conocimientos Académicos en Herramientas y Técnicas para la Dirección y la Producción del Cine y la Televisión',
            'categoria' => 'Diseño',
            'descripcion' => 'Formación en conocimientos académicos en herramientas y técnicas para la dirección y la producción del cine y la televisión',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en herramietas y técnicas para la dirección y la producción del cine y la televisión', 'Diseño')
        ]


    ];
?>

<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Nuestros Programas</h6>
                    <h1>Formación Técnica</h1>
                    <p class="mx-auto">Conoce nuestros programas técnicos y consulta por más información. Haz clic en "VER MÁS" para conocer detalles y opciones de contacto.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
                <?php
                // Sección normal
                $inicioNuevos = array_search('Conocimientos Académicos en Principios de Ciberseguridad', array_column($servicios, 'titulo'));
                $finNuevos = array_search('Programa Conocimientos Académicos en Herramientas y Técnicas para la Dirección y la Producción del Cine y la Televisión', array_column($servicios, 'titulo'));

                // Mostrar servicios antes de la sección nueva
                for ($i = 0; $i < $inicioNuevos; $i++) {
                    $servicio = $servicios[$i];
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <span class="service__tag"><?php echo $servicio['categoria']; ?></span>
                            <i class="<?php echo $servicio['icono']; ?>"></i>
                            <h5><?php echo $servicio['titulo']; ?></h5>
                            <p>¡Consulta por más información ahora!</p>
                            <button class="btn btn-brand btn-service" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#serviceModal" 
                                    data-title="<?php echo $servicio['titulo']; ?>" 
                                    data-category="<?php echo $servicio['categoria']; ?>" 
                                    data-desc="<?php echo $servicio['descripcion']; ?>"
                                    data-url="<?php echo $servicio['url']; ?>">
                                VER MÁS
                            </button>
                        </div>
                    </div>
                <?php }

                // Sección Programas Nuevos
                ?>
                <div class="col-12">
                    <div class="service service--heading">
                        <h3>Nuevos Programas de Conocimientos Académicos</h3>
                        <p>Conoce nuestros programas acádemicos y consulta por más información. Haz clic en "VER MÁS" para conocer detalles y opciones de contacto.</p>
                    </div>
                </div>
                <?php
                for ($i = $inicioNuevos; $i <= $finNuevos; $i++) {
                    $servicio = $servicios[$i];
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <span class="service__tag"><?php echo $servicio['categoria']; ?></span>
                            <i class="<?php echo $servicio['icono']; ?>"></i>
                            <h5><?php echo $servicio['titulo']; ?></h5>
                            <p>¡Consulta por más información ahora!</p>
                            <button class="btn btn-brand btn-service" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#serviceModal" 
                                    data-title="<?php echo $servicio['titulo']; ?>" 
                                    data-category="<?php echo $servicio['categoria']; ?>" 
                                    data-desc="<?php echo $servicio['descripcion']; ?>"
                                    data-url="<?php echo $servicio['url']; ?>">
                                VER MÁS
                            </button>
                        </div>
                    </div>
                <?php }

                // Mostrar servicios después de la sección nueva
                for ($i = $finNuevos + 1; $i < count($servicios); $i++) {
                    $servicio = $servicios[$i];
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <span class="service__tag"><?php echo $servicio['categoria']; ?></span>
                            <i class="<?php echo $servicio['icono']; ?>"></i>
                            <h5><?php echo $servicio['titulo']; ?></h5>
                            <p>¡Consulta por más información ahora!</p>
                            <button class="btn btn-brand btn-service" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#serviceModal" 
                                    data-title="<?php echo $servicio['titulo']; ?>" 
                                    data-category="<?php echo $servicio['categoria']; ?>" 
                                    data-desc="<?php echo $servicio['descripcion']; ?>"
                                    data-url="<?php echo $servicio['url']; ?>">
                                VER MÁS
                            </button>
                        </div>
                    </div>
                <?php }
                ?>
        </div>

        <!-- Modal dinámico para VER MÁS -->
        <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Servicio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-1"><strong>Categoría:</strong> <span id="serviceCategory"></span></p>
                        <p id="serviceDescription" class="mb-4" style="color: #f08006;"></p>
                        
                        <form id="infoForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="nombreCompleto" class="form-label" style="color: #f08006;">Nombre Completo *</label>
                                <input type="text" class="form-control text-center" id="nombreCompleto" placeholder="Nombre completo" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su nombre completo
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label" style="color: #f08006;">Teléfono *</label>
                                <input type="tel" class="form-control text-center" id="telefono" required
                                    pattern="[0-9]{10}" placeholder="3010000000"
                                    title="Por favor ingrese un número de teléfono válido de 10 dígitos">
                                <div class="invalid-feedback">
                                    Por favor ingrese un número de teléfono válido
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-center" style="color: #f08006;">Correo Electrónico *</label>
                                <input type="email" class="form-control text-center" id="email" placeholder="correo@ejemplo.com" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un correo electrónico válido
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-brand" id="btnSolicitarInfo">
                            <i class="fa-brands fa-whatsapp"></i> Solicitar información
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    // Script que llena el modal con datos del servicio seleccionado
    // Variable para almacenar la información del programa seleccionado
    let programaSeleccionado = null;

    document.querySelectorAll('.btn-service').forEach(function(btn){
        btn.addEventListener('click', function(){
            var title = this.getAttribute('data-title') || '';
            var category = this.getAttribute('data-category') || '';
            var desc = this.getAttribute('data-desc') || '';
            
            document.getElementById('serviceModalLabel').textContent = title;
            document.getElementById('serviceCategory').textContent = category;
            document.getElementById('serviceDescription').textContent = desc;
            
            // Guardar información del programa seleccionado
            programaSeleccionado = {
                titulo: title,
                categoria: category
            };

            // Limpiar el formulario
            document.getElementById('infoForm').reset();
        });
    });

    // Manejar el envío del formulario
    document.getElementById('btnSolicitarInfo').addEventListener('click', function() {
        const form = document.getElementById('infoForm');
        
        // Validar el formulario
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }

        // Recoger datos del formulario
        const nombre = document.getElementById('nombreCompleto').value;
        const telefono = document.getElementById('telefono').value;
        const email = document.getElementById('email').value;

        // Construir mensaje para WhatsApp
        let mensaje = "¡Hola!\n\n";
        mensaje += "*SOLICITUD DE INFORMACIÓN*\n\n";
        mensaje += "*Datos del interesado:*\n";
        mensaje += "- Nombre: " + nombre + "\n";
        mensaje += "- Teléfono: " + telefono + "\n";
        mensaje += "- Email: " + email + "\n\n";
        mensaje += "*" + programaSeleccionado.titulo + "*\n";
        mensaje += "Categoría: " + programaSeleccionado.categoria + "\n\n";
        mensaje += "Me gustaría conocer:\n";
        mensaje += "• Requisitos de inscripción\n";
        mensaje += "• Horarios disponibles\n";
        mensaje += "• Inversión y formas de pago\n";
        mensaje += "• Fecha de inicio\n";
        mensaje += "• Proceso de matrícula\n\n";
        mensaje += "¡Gracias por la información!";

        // Generar URL de WhatsApp y abrir en nueva pestaña
        const whatsappUrl = `https://wa.me/573122143744?text=${encodeURIComponent(mensaje)}`;
        window.open(whatsappUrl, '_blank');

        // Cerrar el modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('serviceModal'));
        modal.hide();
    });

    // Mueve el modal al body para evitar que quede atrapado en el
    // contexto de apilamiento/overflow de la sección de servicios.
    var modalElement = document.getElementById('serviceModal');
    if (modalElement && modalElement.parentNode !== document.body) {
        document.body.appendChild(modalElement);
    }
</script>