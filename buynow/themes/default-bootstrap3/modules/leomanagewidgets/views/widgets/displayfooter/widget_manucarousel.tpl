{if $manufacturers}
 <div id="manufacture-carousel" class="widget-manufacture block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading}
	</h4>
	{/if}
	<div class="block_content">
		<div class="carousel slide" id="manucarousel">
			{if count($manufacturers)>$itemsperpage}	 
				<a class="carousel-control left" href="#manucarousel" data-slide="prev"></a>
				<a class="carousel-control right" href="#manucarousel" data-slide="next"></a>
			{/if}
			<div class="carousel-inner">
				{$mmanufacturers=array_chunk($manufacturers,$itemsperpage)}
				{foreach from=$mmanufacturers item=manufacturers name=mypLoop}
					<div class="item {if $smarty.foreach.mypLoop.first}active{/if}">
						{foreach from=$manufacturers item=manufacturer name=manufacturers}
							{if $manufacturer@iteration%$columnspage==1&&$columnspage>1}
								<div class="row">
							{/if}
							<div class="logo-manu {if $columnspage == 5}col-md-2-4 col-lg-2-4{else}col-md-{$scolumn}{/if} col-xs-12">
								<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{l s='view products' mod='leomanagewidgets'}">
								<img src="{$manufacturer.image|escape:'htmlall':'UTF-8'}" alt="{$manufacturer.name|truncate:60:'...'|escape:'html':'UTF-8'}" title="{$manufacturer.name|truncate:60:'...'|escape:'html':'UTF-8'}"> </a>
							</div>
							{if ($manufacturer@iteration%$columnspage==0||$smarty.foreach.manufacturers.last)&&$columnspage>1}
								</div>
							{/if}
						{/foreach}
					</div>
				{/foreach}
			</div>
		</div>
	</div>
</div>
{/if}

<script type="text/javascript">
$(document).ready(function() {
	$('#manufacture-carousel').carousel({
		pause: 'hover',
		interval: {$interval}
	});
});
</script>