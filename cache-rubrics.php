<?php

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']");

$cache = new Battis\HierarchicalSimpleCache(WHERE_DOES_MYSQL_COME_FROM, PLUGIN_ID);

$cache->setCache($_REQUEST['assignment'], $_REQUEST['rubrics']);

?>