<section class="team-section spad" id="agreements">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestros convenios</h3>

            </div>
            <div class="row" style="text-align: center;">
                <div class="col-12">
                    <div class="owl-theme owl-carousel agreements-carousel">
                        <style>
                            .agreement-item {
                                height: 120px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                padding: 10px;
                            }
                            .agreement-item img {
                                max-height: 100%;
                                max-width: 100%;
                                width: auto !important;
                                height: auto;
                                object-fit: contain;
                            }
                        </style>
                        <?php
                        $convenios = [
                            ['file'=>'celac-adm.png','alt'=>'celac'],
                            ['file'=>'logo-sena.png','alt'=>'sena'],
                            ['file'=>'Min.png','alt'=>'min'],
                            ['file'=>'Secedu.png','alt'=>'secedu'],
                            ['file'=>'Q10.png','alt'=>'q10'],
                            ['file'=>'Mega.png','alt'=>'mega'],
                            ['file'=>'mejores.png','alt'=>'mejores'],
                            ['file'=>'lineaVital.png','alt'=>'Droguería Linea Vital'],
                            ['file'=>'domina.png','alt'=>'Domina'],
                            ['file'=>'clinica.png','alt'=>'Fundación Clinica del Norte'],
                            ['file'=>'dropopular.png','alt'=>'DROPOPULAR'],
                            ['file'=>'coe.png','alt'=>'Coe'],
                            ['file'=>'belleza.png','alt'=>'Has Belleza'],
                            ['file'=>'sanigancio.png','alt'=>'Colegio San Ignacio'],
                            ['file'=>'fenalco.png','alt'=>'Fenalco'],
                            ['file'=>'pasteur.jpg','alt'=>'Pasteur'],
                            ['file'=>'hospital.png','alt'=>'Hospital']
                        ];

                        foreach ($convenios as $c): ?>
                            <div class="item">
                                <div class="agreement-item">
                                    <img src="img/agreements/<?php echo $c['file']; ?>" alt="<?php echo htmlspecialchars($c['alt'], ENT_QUOTES); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function(){
                if (typeof $ !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined'){
                    $('.agreements-carousel').owlCarousel({
                        loop:true,
                        autoplay:true,
                        autoplayTimeout:2000,
                        autoplayHoverPause:true,
                        margin:20,
                        nav:true,
                        dots:false,
                        responsive:{
                            0:{items:2},
                            576:{items:3},
                            768:{items:4},
                            992:{items:5}
                        },
                        navText:['<i class="bx bx-left-arrow-alt"></i>','<i class="bx bx-right-arrow-alt"></i>']
                    });
                }
            });
        </script>
    </section>