<?php

require_once('common.inc.php');

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

$cache = new \Battis\HierarchicalSimpleCache($sql, $pluginMetadata['PLUGIN_ID']);
$cache->setLifetime(\Battis\HierarchicalSimpleCache::IMMORTAL_LIFETIME);

if ($cache->setCache($_REQUEST['assignment'], $_REQUEST['rubrics'])) {
	echo $pluginMetadata['RESPONSE_SUCCESS'];
} else {
	echo $pluginMetadata['RESPONSE_FAILURE'];
}

?>