<style>
    #convenios {
        padding-top: 80px;
        padding-bottom: 90px;
    }

    .convenios-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 18px;
        margin-top: 42px;
    }

    .convenio-card {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 124px;
        padding: 20px;
        background: #fff;
        border: 1px solid var(--uni-line, rgba(10, 37, 64, 0.09));
        border-radius: 18px;
        box-shadow: 0 8px 24px rgba(10, 37, 64, 0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .convenio-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(10, 37, 64, 0.14);
        border-color: rgba(240, 128, 6, 0.35);
    }

    .convenio-card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        display: block;
        filter: grayscale(100%);
        opacity: 0.85;
        transition: filter 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
    }

    .convenio-card:hover img {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
    }

    @media (max-width: 1199.98px) {
        .convenios-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }

    @media (max-width: 991.98px) {
        .convenios-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .convenio-card {
            height: 110px;
            padding: 16px;
        }
    }

    @media (max-width: 575.98px) {
        .convenios-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 30px;
        }

        .convenio-card {
            height: 96px;
            padding: 14px;
        }
    }
</style>

<section id="convenios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro text-center">
                    <h6>Nuestros Aliados</h6>
                    <h1>Conoce nuestros convenios institucionales</h1>
                </div>
            </div>
        </div>

        <div class="convenios-grid">
            <?php
                $convenios = array(
                    "img/icons/clinica.png", "img/icons/coe.png", "img/icons/domina.png",
                    "img/icons/dropopular.png", "img/icons/fenalco.png", "img/icons/hospital.png",
                    "img/icons/logo-sena.png", "img/icons/lineaVital.png", "img/icons/Mega.png",
                    "img/icons/Min.png", "img/icons/pasteur.jpg", "img/icons/sanignacio.png",
                    "img/icons/Secedu.png",
                );

                foreach ($convenios as $convenio) {
                    echo '<div class="convenio-card"><img src="' . $convenio . '" alt="Convenio institucional CENDI" loading="lazy"></div>';
                }
            ?>
        </div>
    </div>
</section>
