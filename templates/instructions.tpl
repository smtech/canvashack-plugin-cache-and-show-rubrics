{extends file="page.tpl"}
{block name="content"}

<div class="container">
	<div class="jumbotron">
		<h1>{$name}</h1>
		<p>{$abstract}</p>
	</div>
</div>

<div id="description" class="container">{$description}</div>

<div class="container">
	<p>Install this bookmarklet by dragging it to your bookmarks bar:</p>
	<h3><span class="label label-primary"><a href="{$bookmarklet}">Cache Rubric</a></span></h3>
</div>

{/block}