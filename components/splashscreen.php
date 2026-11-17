<?php

require_once __DIR__ . '/../config/seasonal-helper.php';

$config = cendi_seasonal_config();
$isChristmas = cendi_seasonal_should_show($config);
$splashClass = $isChristmas ? 'splash-christmas' : '';
$logoSrc = $isChristmas ? 'img/icons/welcomeCendiNavidad.png' : 'img/icons/welcomeCendi.png';
$snowSymbols = isset($config['symbols']) && is_array($config['symbols']) && $config['symbols']
    ? $config['symbols']
    : ['❄', '❅', '❆', '✦', '✧'];
$snowSymbolCount = count($snowSymbols);
?>
<div id="splashscreen" class="<?php echo $splashClass; ?>" aria-hidden="true">
    <div class="splash-bg-layer splash-bg-layer-1"></div>
    <div class="splash-bg-layer splash-bg-layer-2"></div>
    <div class="splash-bg-layer splash-bg-layer-3"></div>
    <?php if ($isChristmas): ?>
        <div class="splash-snow" aria-hidden="true">
            <?php for ($i = 0; $i < 18; $i++): ?>
                <?php
                $left = 4 + (($i * 37) % 92);
                $duration = 7 + ($i % 6);
                $delay = -1 * ($i * 0.7);
                $size = 14 + (($i % 4) * 4);
                $drift = (($i % 2 === 0) ? 1 : -1) * (14 + (($i % 5) * 8));
                ?>
                <span style="left: <?php echo $left; ?>%; font-size: <?php echo $size; ?>px; animation-duration: <?php echo $duration; ?>s; animation-delay: <?php echo $delay; ?>s; --drift: <?php echo $drift; ?>px;"><?php echo $snowSymbols[$i % $snowSymbolCount]; ?></span>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
    <div class="splash-logo-wrap">
        <img src="<?php echo $logoSrc; ?>" alt="Bienvenido a CENDI" class="splash-logo">
    </div>
</div>
