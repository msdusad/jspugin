<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:48
         compiled from "/home/easy2/public_html/buynow/themes/ap_office/modules/leomanagewidgets/views/widgets/displayhome/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645492156566a5f106471f7-42890179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9852edf782b06d7802fb65ec5dd2700b8c7a32c' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/ap_office/modules/leomanagewidgets/views/widgets/displayhome/widget_html.tpl',
      1 => 1449811630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645492156566a5f106471f7-42890179',
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
  'unifunc' => 'content_566a5f1065f9e8_37641990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f1065f9e8_37641990')) {function content_566a5f1065f9e8_37641990($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
