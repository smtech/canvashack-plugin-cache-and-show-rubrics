/*jslint
    browser, devel, white, maxlen: 80
*/
/*global
    window, document, parent
*/

function cacheRubric(url) {
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
	http.send(params);
}

function showRubric(url) {
	"use strict";
	var http = new XMLHttpRequest();
	var assignment = document.location.href;
	var params = 'assignment=' + encodeURIComponent(assignment);
	http.open('POST', url, true);
	http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.onreadystatechange = function() {
		if(http.readyState === 4 && http.status === 200) {
			rubrics = document.createElement('div');
			footer = document.getElementById('module_sequence_footer');
			footer.parentNode.insertBefore(rubrics, footer);
			document.getElementById('content').removeClass('padless');
			rubrics.outerHTML = http.responseText;
			rubrics.style.display = 'block';
			}
		}
	};
	http.send(params);
}