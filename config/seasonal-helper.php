<?php

if (!function_exists('cendi_seasonal_config')) {
    function cendi_seasonal_config(): array
    {
        static $config = null;

        if ($config === null) {
            $path = __DIR__ . '/seasonal.php';
            $loaded = is_file($path) ? require $path : [];
            $config = is_array($loaded) ? $loaded : [];
        }

        return $config;
    }
}

if (!function_exists('cendi_seasonal_preview_value')) {
    function cendi_seasonal_preview_value(array $config)
    {
        $param = isset($config['preview_param']) ? $config['preview_param'] : 'navidad';

        if (!isset($_GET[$param]) || !is_string($_GET[$param])) {
            return null;
        }

        $value = strtolower(trim($_GET[$param]));

        if (in_array($value, ['1', 'true', 'on', 'si', 'sí'], true)) {
            return true;
        }

        if (in_array($value, ['0', 'false', 'off', 'no'], true)) {
            return false;
        }

        return null;
    }
}

if (!function_exists('cendi_seasonal_is_active')) {
    function cendi_seasonal_is_active(array $config, $now = null): bool
    {
        if (empty($config['enabled'])) {
            return false;
        }

        if (!isset(
            $config['start']['month'],
            $config['start']['day'],
            $config['end']['month'],
            $config['end']['day']
        )) {
            return false;
        }

        $timezone = new DateTimeZone(isset($config['timezone']) ? $config['timezone'] : 'America/Bogota');

        if (!$now instanceof DateTimeImmutable) {
            $now = new DateTimeImmutable('now', $timezone);
        }

        $year = (int) $now->format('Y');

        $start = $now
            ->setDate($year, (int) $config['start']['month'], (int) $config['start']['day'])
            ->setTime(0, 0, 0);
        $end = $now
            ->setDate($year, (int) $config['end']['month'], (int) $config['end']['day'])
            ->setTime(23, 59, 59);

        if ($end < $start) {
            if ($now < $start) {
                $start = $start->modify('-1 year');
            } else {
                $end = $end->modify('+1 year');
            }
        }

        return $now >= $start && $now <= $end;
    }
}

if (!function_exists('cendi_seasonal_should_show')) {
    function cendi_seasonal_should_show(array $config): bool
    {
        $preview = cendi_seasonal_preview_value($config);

        if ($preview === true) {
            return true;
        }

        if ($preview === false) {
            return false;
        }

        return cendi_seasonal_is_active($config);
    }
}
