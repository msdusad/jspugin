{*
	************************
		Creat by leo themes
	*************************
*}
{if !isset($callFromModule) || $callFromModule==0}
{include file="$tpl_dir./layout/setting.tpl"}
{/if}
<div class="product-container text-center product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image ImageWrapper">
		   <div class="leo-more-info" data-idproduct="{$product.id_product}"></div>
			<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
				<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
				<span class="product-additional" data-idproduct="{$product.id_product}"></span>
			</a>
			
			<div class="Buttons StyleC">
				{if isset($quick_view) && $quick_view}
					<a class="quick-view WhiteRounded" href="{$product.link|escape:'html':'UTF-8'}" data-link="{$product.link|escape:'html':'UTF-8'}" title="{l s='Quick view'}" >
						<i class="fa fa-arrows"></i>
					</a>
				{/if}
				{if $ENABLE_WISHLIST}				
					{hook h='displayProductListFunctionalButtons' product=$product}				
				{/if}
				
				{if isset($comparator_max_item) && $comparator_max_item}				
					<a class="add_to_compare compare WhiteRounded" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product}" title="{l s='Add to compare'}" >
						<i class="fa fa-align-center"></i> 
					</a>										
				{/if}
			</div>			
			{if isset($product.new) && $product.new == 1}				
				<span class="label-new label-info label">{l s='New'}</span>				
			{/if}
			{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
				<span class="label-sale label-warning label">{l s='Sale!'}</span>
			{/if}
				
			<div class="flags-avilab">
				<div class="product-flags pull-left">
					{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
						{if isset($product.online_only) && $product.online_only}
							<span class="online_only label label-warning">{l s='Online only'}</span>
						{/if}
					{/if}
					{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
						{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
							<span class="discount label label-danger">{l s='Reduced price!'}</span>
						{/if}
				</div>

				{if (!$PS_CATALOG_MODE && $PS_STOCK_MANAGEMENT && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					{if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}
						<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability pull-right">
							{if ($product.allow_oosp || $product.quantity > 0)}
								<span class="{if $product.quantity <= 0 && !$product.allow_oosp}out-of-stock{else}available-now{/if}">
									<link itemprop="availability" href="http://schema.org/InStock" />
									{if $product.quantity <= 0}{if $product.allow_oosp}{if isset($product.available_later) && $product.available_later}{$product.available_later}
									{else}<span class="label label-success">{l s='In Stock'}</span>{/if}
									{else}<span class="label label-danger">{l s='Out of stock'}</span>{/if}
									{else}{if isset($product.available_now) && $product.available_now}<span class="label label-success">{$product.available_now}</span>
									{else}<span class="label label-success">{l s='In Stock'}</span>{/if}{/if}
								</span>
							{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}
								<span class="available-dif">
									<link itemprop="availability" href="http://schema.org/LimitedAvailability" />
									<span class="label label-warning">{l s='Available with different options'}</span>
								</span>
							{else}
								<span class="out-of-stock">
									<link itemprop="availability" href="http://schema.org/OutOfStock" /><span class="label label-danger">{l s='Out of stock'}</span>
								</span>
							{/if}
						</div>
					{/if}
				{/if}
			</div>
				
		</div>
		{if isset($product.is_virtual) && !$product.is_virtual}{hook h="displayProductDeliveryTime" product=$product}{/if}
		{hook h="displayProductPriceBlock" product=$product type="weight"}
	</div>
	<div class="right-block">
		<div class="product-meta">
			<h5 itemprop="name" class="name">
				{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
				<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
					{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
				</a>
			</h5>

			<div class="product-desc" itemprop="description">
				{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
			</div>

			{if isset($product.color_list) && $ENABLE_COLOR}
				<div class="color-list-container">{$product.color_list} </div>
			{/if}

			<div class="price-review">
				{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					<div class="content_price pull-left">
						<div class="contentprice">
							{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
						{hook h="displayProductPriceBlock" product=$product type='before_price'}
						<span class="price product-price">
									{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
								</span>
								{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
									{hook h="displayProductPriceBlock" product=$product type="old_price"}
									<span class="old-price product-price">
										{displayWtPrice p=$product.price_without_reduction}
									</span>
							{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
									{if $product.specific_prices.reduction_type == 'percentage'}
										<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
									{/if}
								{/if}
								{hook h="displayProductPriceBlock" product=$product type="price"}
								{hook h="displayProductPriceBlock" product=$product type="unit_price"}
						{hook h="displayProductPriceBlock" product=$product type='after_price'}
							{/if}
						</div>
					</div>
				{/if}

				{if $page_name != "product"}
				{hook h='displayProductListReviews' product=$product}
				{/if}
			</div>

		</div>
		{if $page_name !='product'}
				<div class="functional-buttons clearfix">				
					<div class="cart">
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.customizable != 2 && !$PS_CATALOG_MODE}
							{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
								{capture}add=1&amp;id_product={$product.id_product|intval}{if isset($product.id_product_attribute) && $product.id_product_attribute}&amp;ipa={$product.id_product_attribute|intval}{/if}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
								<a class="button ajax_add_to_cart_button btn" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product-attribute="{$product.id_product_attribute|intval}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
										<i class="fa fa-shopping-cart"></i>
										<span>{l s='Add to cart'}</span>
									</a>
							{else}
								<div class="btn btn-default disabled" title="{l s='Out of stock'}">
									<i class="fa fa-shopping-cart"></i>
									<span>{l s='Out of stock'}</span>
								</div>
							{/if}
						{/if}
					</div> 
				</div>
			{/if}
	</div>
</div>
<!-- .product-container> -->

