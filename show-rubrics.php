<?php

require_once(__DIR__ .'/common.inc.php');

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']");

$cache = new Battis\HiearchicalSimpleCache($sql, PLUGIN_ID);

$rubrics = $cache->getCache($_REQUEST['assignment']);

if (!empty($rubrics)) {
	echo $rubrics;
}
exit;
	
?>