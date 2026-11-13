    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Equipo</h6>
                        <h1>Conoce nuestro personal Cendi</h1>
                        <p class="mx-auto">Juntos convertimos talento en impacto: cada persona suma, cada idea
                            importa y cada esfuerzo construye el futuro que soñamos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <!-- carousel items generated from PHP array to reduce repetition -->
                        <?php
                        $members = range(1,16);
                        foreach ($members as $num): ?>
                            <div class="item">
                                <div class="card">
                                    <img src="img/member/<?php echo $num; ?>.png" class="card-img-top" alt="Personal CENDI" loading="lazy" decoding="async">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    if (typeof $ !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined'){
                        $('.team-carousel').owlCarousel({
                            loop:true,
                            autoplay:true,
                            autoplayTimeout:2000,
                            autoplayHoverPause:true,
                            margin:20,
                            nav:true,
                            dots:false,
                            navText:['<i class="bx bx-left-arrow-alt"></i>','<i class="bx bx-right-arrow-alt"></i>'],
                            responsive:{
                                0:{items:1},
                                576:{items:2},
                                768:{items:3},
                                992:{items:4}
                            }
                        });
                    }
                });
            </script>
        </div>
    </section>