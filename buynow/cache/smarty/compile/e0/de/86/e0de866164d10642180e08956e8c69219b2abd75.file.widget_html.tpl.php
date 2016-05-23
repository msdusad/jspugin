<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:46
         compiled from "/home/easy2/public_html/buynow/themes/ap_office/modules/leomanagewidgets/views/widgets/displaybottom/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448867230566a5f0eded124-79397533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0de866164d10642180e08956e8c69219b2abd75' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/ap_office/modules/leomanagewidgets/views/widgets/displaybottom/widget_html.tpl',
      1 => 1449811630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448867230566a5f0eded124-79397533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5f0ee00c88_91530451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f0ee00c88_91530451')) {function content_566a5f0ee00c88_91530451($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4>
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
