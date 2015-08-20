<?php

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']");

$cache = new Battis\HierarchicalSimpleCache(WHERE_DOES_MYSQL_COME_FROM, PLUGIN_ID);

$rubrics = $cache->getCache($_REQUEST['assignment']);

echo $rubrics;
	
?>