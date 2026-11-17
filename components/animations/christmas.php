<?php

require_once __DIR__ . '/../../config/seasonal-helper.php';

$config = cendi_seasonal_config();

if (!cendi_seasonal_should_show($config)) {
    return;
}

$symbols = isset($config['symbols']) ? $config['symbols'] : ['❄', '❅', '❆', '✦', '✧'];
$colors = isset($config['colors']) ? $config['colors'] : ['#ffffff', '#e0f2fe', '#bfdbfe', '#93c5fd'];
$density = isset($config['density']) ? $config['density'] : ['mobile' => 24, 'tablet' => 40, 'desktop' => 60];
$showHat = !empty($config['navbar_hat']) ? '1' : '0';
$basePath = isset($base_for_href) ? $base_for_href : '';
$jsonFlags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT;
?>

<style>
    .navbar-brand {
        position: relative;
        overflow: visible;
    }

    #cendi-christmas-snow {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 999;
    }

    .cendi-santa-hat {
        position: absolute;
        top: -12px;
        right: -16px;
        width: 42px;
        height: 33px;
        pointer-events: none;
        z-index: 2;
        filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.22));
        transform: rotate(8deg);
        transform-origin: 80% 90%;
    }

    .cendi-santa-hat svg {
        display: block;
        width: 100%;
        height: 100%;
    }

    @media (max-width: 991.98px) {
        .cendi-santa-hat {
            top: -8px;
            right: -12px;
            width: 32px;
            height: 26px;
        }
    }

    @media (max-width: 575.98px) {
        .cendi-santa-hat {
            top: -6px;
            right: -9px;
            width: 26px;
            height: 21px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #cendi-christmas-snow {
            display: none;
        }

        .cendi-santa-hat {
            transform: none;
        }
    }
</style>

<canvas
    id="cendi-christmas-snow"
    aria-hidden="true"
    data-symbols="<?php echo htmlspecialchars(json_encode($symbols, $jsonFlags), ENT_QUOTES, 'UTF-8'); ?>"
    data-colors="<?php echo htmlspecialchars(json_encode($colors, $jsonFlags), ENT_QUOTES, 'UTF-8'); ?>"
    data-density="<?php echo htmlspecialchars(json_encode($density, $jsonFlags), ENT_QUOTES, 'UTF-8'); ?>"
    data-hat="<?php echo $showHat; ?>"
></canvas>

<script src="<?php echo htmlspecialchars($basePath . 'js/christmas-snow.js?v=1.1', ENT_QUOTES, 'UTF-8'); ?>" defer></script>
