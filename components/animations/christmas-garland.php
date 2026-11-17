<?php

require_once __DIR__ . '/../../config/seasonal-helper.php';

if (!cendi_seasonal_should_show(cendi_seasonal_config())) {
    return;
}

$variant = isset($garlandVariant) && in_array($garlandVariant, ['navbar', 'footer'], true)
    ? $garlandVariant
    : 'navbar';

$bulbColors = ['#ef4444', '#facc15', '#22c55e', '#f97316'];
$bulbCount = 18;
$points = [];
$bulbs = [];

for ($i = 0; $i < $bulbCount; $i++) {
    $t = $i / ($bulbCount - 1);
    $x = $t * 100;
    $y = 8 + 24 * abs(sin($t * M_PI * 3));

    $points[] = round($x * 12, 1) . ',' . round($y, 1);
    $bulbs[] = [
        'left' => round($x, 2),
        'top' => round(($y * 44 / 60) + 4, 1),
        'color' => $bulbColors[$i % count($bulbColors)],
        'delay' => round(-$i * 0.16, 2),
    ];
}
?>
<div class="cendi-garland cendi-garland--<?php echo $variant; ?>" aria-hidden="true">
    <svg class="cendi-garland__svg" viewBox="0 0 1200 60" preserveAspectRatio="none" focusable="false">
        <polyline class="cendi-garland__pine" points="<?php echo implode(' ', $points); ?>"></polyline>
        <polyline class="cendi-garland__pine-highlight" points="<?php echo implode(' ', $points); ?>"></polyline>
    </svg>
    <?php foreach ($bulbs as $bulb): ?>
        <span class="cendi-garland__bulb" style="left: <?php echo $bulb['left']; ?>%; top: <?php echo $bulb['top']; ?>px; --bulb: <?php echo $bulb['color']; ?>; --delay: <?php echo $bulb['delay']; ?>s;"></span>
    <?php endforeach; ?>
</div>
