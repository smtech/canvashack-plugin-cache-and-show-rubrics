<?php

require_once('common.inc.php');

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

$cache = new \Battis\HiearchicalSimpleCache($sql, $pluginMetadata['PLUGIN_ID']);

if ($cache->setCache($_REQUEST['assignment'], $_REQUEST['rubrics'])) {
	echo $pluginMetadata['RESPONSE_SUCCESS'];
} else {
	echo $pluginMetadata['RESPONSE_FAILURE'];
}

?>