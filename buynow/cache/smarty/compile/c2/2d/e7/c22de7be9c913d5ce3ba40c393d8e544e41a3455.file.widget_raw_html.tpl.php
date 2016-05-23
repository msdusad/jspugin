<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 07:22:14
         compiled from "/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_raw_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1266491299566a79a60aaa69-38650336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c22de7be9c913d5ce3ba40c393d8e544e41a3455' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_raw_html.tpl',
      1 => 1449815976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1266491299566a79a60aaa69-38650336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'raw_html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a79a60f3310_03044622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a79a60f3310_03044622')) {function content_566a79a60f3310_03044622($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['raw_html']->value)) {?>
<div class="widget-raw-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['raw_html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
