{extends file="page.tpl"}
{block name="content"}

<div class="container">
	<div class="page-header">
		<h1>{$name} <small>CanvasHack</small></h1>
	</div>
</div>

<div class="container">
	<p>{$abstract}</p>

	<div>Install this bookmarklet by dragging it to your bookmarks bar: <h3 style="display: inline-block;"><span class="label label-primary"><a href="{$bookmarklet}">Cache Rubric</a></span></h3></div>

	<p>{$description}</p>
</div>

{/block}