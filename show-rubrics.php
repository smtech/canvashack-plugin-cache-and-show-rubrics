<?php

require_once('../common.inc.php');

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']");

$cache = new \Battis\HierarchicalSimpleCache($sql, PLUGIN_ID);

$rubrics = $cache->getCache($_REQUEST['assignment']);

if (!empty($rubrics)) {
	echo $rubrics;
}
exit;
	
?>