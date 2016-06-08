<?php require_once('common.inc.php') ?>

"use strict";

var smtech_canvashack_cache_and_show_rubrics = {

<?php
	$js = file_get_contents('cache-and-show-rubrics.js');
	
	/* strip comments */
	$js = preg_replace('%/\*[^\*]*\*/%', '', $js);
	
	/* turn functions into a list */
	$js = preg_replace('/(})(\s*function)/im', '$1,$2', $js);
	
	/* standalone functions to member functions */
	$js = preg_replace('/(function)\s+(\w+)/i', '$2: $1', $js);
	
	echo $js;
?>
	alert('Your rubric has been cached to be shown to your students!');
};

smtech_canvashack_cache_and_show_rubrics.cacheRubric('<?= $pluginMetadata['PLUGIN_URL'] ?>/cache-rubrics.php');