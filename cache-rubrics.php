<?php

require_once('../common.inc.php');

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']");

$cache = new \Battis\HierarchicalSimpleCache($sql, $pluginMetadata['PLUGIN_ID']);

$cache->setCache($_REQUEST['assignment'], $_REQUEST['rubrics']);

?>