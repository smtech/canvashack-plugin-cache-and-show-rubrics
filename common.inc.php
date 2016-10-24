<?php

require_once __DIR__ . '/../common.inc.php';

use Battis\AppMetadata;

if (file_exists(__DIR__ . '/manifest.xml')) {
    $manifest = simplexml_load_string(file_get_contents(__DIR__ . '/manifest.xml'));
}

$pluginMetadata = new AppMetadata($sql, (string) $manifest->id);

if (php_sapi_name() != 'cli') {
    $smarty->addTemplateDir(__DIR__ . '/templates', (string) $manifest->id);
}
