<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:47
         compiled from "/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254828852566a5f0f695cc9-47499747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37c61202beb3043a50cae5a2f04c2b2e1a83229' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1449811631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254828852566a5f0f695cc9-47499747',
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
  'unifunc' => 'content_566a5f0f6ad410_23822815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f0f6ad410_23822815')) {function content_566a5f0f6ad410_23822815($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
