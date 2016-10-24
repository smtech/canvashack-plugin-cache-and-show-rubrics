<?php

require_once __DIR__ . '/common.inc.php';

?>
var canvashack = {
	cacheRubric: function(url) {
		"use strict";
		var http = new XMLHttpRequest();
		var rubrics = document.getElementById('rubrics');
		var assignment = document.location.href;
		var params =
			'assignment=' + encodeURIComponent(assignment) + '&' +
			'rubrics=' + encodeURIComponent(rubrics.outerHTML);
		http.open('POST', url, true);
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http.setRequestHeader("Content-length", params.length);
		http.setRequestHeader("Connection", "close");
		http.onreadystatechange = function() {
			if (http.readyState === 4 && http.status === 200) {
				if (http.responseText == 'success') {
					alert('Your rubric has been cached.');
				} else {
					alert('There was a problem caching your rubric.');
				}
			}
		};
		http.send(params);
	},

	showRubric: function(url) {
		"use strict";
		var assignment = document.location.href;
		if (!/.*\/courses\/\d+\/assignments\/\d+$/.test(assignment)) {
			return;
		}

		function displayCache() {
			if (http.readyState === 4 && http.status === 200 && http.responseText.length > 0) {
				var rubrics = document.createElement('div');
                /*
                 * assumes we only want to append cached rubrics to
                 * assignments that are turned in via LTI tool (since those
                 * are the assignments where you can't already see the
                 * rubric)
                 */
				var tool = $('.tool_content_wrapper')[0];
                if (tool !== undefined) {
                    tool.parentNode.insertBefore(rubrics, tool);
    				rubrics.outerHTML = http.responseText;
    				rubrics.style.display = 'block';
                }
			}
		}

		var url = '<?= $pluginMetadata['PLUGIN_URL'] ?>/show-rubrics.php';
		var http = new XMLHttpRequest();
		var params = 'assignment=' + encodeURIComponent(assignment);
		http.open('POST', url);
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http.addEventListener('load', displayCache);
		http.send(params);
	}
};
