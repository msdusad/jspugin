<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:49
         compiled from "/home/easy2/public_html/buynow/themes/ap_office/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1877762484566a5f114856e6-24348692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17d08aedaf818234be58eb5f1a2be99f3851303' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/ap_office/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1449811630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877762484566a5f114856e6-24348692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5f114950a2_19662290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f114950a2_19662290')) {function content_566a5f114950a2_19662290($_smarty_tpl) {?>


<a class="btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
</a><?php }} ?>
