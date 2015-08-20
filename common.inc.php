<?php

require_once('../common.inc.php');

if (file_exists('manifest.xml')) {
	$manifest = simplexml_load_string(file_get_contents('manifest.xml'));
}

$pluginMetadata = new Battis\AppMetadata($sql, (string) $manifest->id);

$pluginMetadata['PLUGIN_PATH'] = __DIR__;
$pluginMetadata['PLUGIN_URL'] = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http://' : 'https://') . $_SERVER['SERVER_NAME'] . preg_replace("|^{$_SERVER['DOCUMENT_ROOT']}(.*)$|", '$1', $pluginMetadata['PLUGIN_PATH']);
$pluginMetadata['PLUGIN_ID'] = (string) $manifest->id;

$smarty->addTemplateDir(__DIR__ . '/templates');
	
?>