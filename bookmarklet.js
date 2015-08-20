<?php require_once('common.inc.php') ?>

var smtech_canvashack_cache_and_show_rubrics = {

<?php require_once('cache-and-show-rubrics.js'); ?>
	
}

smtech_canvashack_cache_and_show_rubrics.cacheRubric('<?= $pluginMetadata['PLUGIN_URL'] ?>/cache-rubric.php');