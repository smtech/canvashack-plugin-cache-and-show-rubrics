<?php

require_once('common.inc.php');

$smarty->setFramed(false);
$smarty->assign('name', (string) $manifest->name);
$smarty->assign('abstract', (string) $manifest->abstract);
$smarty->assign('description', (string) $manifest->description);
$smarty->assign('bookmarklet', "javascript: (function () { var jsCode = document.createElement('script'); jsCode.setAttribute('src', '{$pluginMetadata['PLUGIN_URL']}/bookmarklet.js'); document.body.appendChild(jsCode); }());");

$smarty->display('instructions.tpl');

?>