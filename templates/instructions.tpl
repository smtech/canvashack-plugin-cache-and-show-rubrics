{extends file="page.tpl"}
{block name="content"}

<div class="container">
	<div class="page-header">
		<h1>{$name} <small>CanvasHack</small></h1>
	</div>
</div>

<div class="container">
	<p>{$abstract}</p>

	<div>Install this bookmarklet by dragging it to your bookmarks bar: <span class="label label-default bookmarklet"><a href="{$bookmarklet}">Cache Rubric</a></span></div>

	<p>{$description}</p>
</div>

{/block}