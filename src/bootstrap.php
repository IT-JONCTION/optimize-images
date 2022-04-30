<?php

if (!class_exists('ItJonction\OptimizeImages\ITJ\ITJItjonctionBootstrap')) {
    require_once __DIR__ . '/ITJ/ItjonctionBootstrap.php';
}

try {
    if (version_compare(PHP_VERSION, '7.2.0', '<')) {
        throw new \ErrorException('PHP Version is lower than 7.2.0. Please upgrade your runtime.');
    }
    return ItJonction\OptimizeImages\ITJ\ItjonctionBootstrap::createApplication();
} catch (Exception $e) {
    printf("%s: %s\n", get_class($e), $e->getMessage());
    if (array_intersect(['-vvv', '-vv', '-v', '--verbose'], $argv)) {
        printf("%s\n", $e->getTraceAsString());
    }
    exit(1);
}
