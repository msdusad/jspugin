<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:34:46
         compiled from "/home/easy2/public_html/buynow/pradmin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:621850295566a6076569460-25640006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da5a400dbdfad5dfe21465e6055795b0d334943' => 
    array (
      0 => '/home/easy2/public_html/buynow/pradmin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '621850295566a6076569460-25640006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a60765a4ae8_01104806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a60765a4ae8_01104806')) {function content_566a60765a4ae8_01104806($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
