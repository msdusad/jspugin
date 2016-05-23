<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 04:42:01
         compiled from "/home/easy2/public_html/buynow/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1949334553566a54190ee2b0-33661734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db343ef367ca4444c97b07755e794404d79bbcd5' => 
    array (
      0 => '/home/easy2/public_html/buynow/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949334553566a54190ee2b0-33661734',
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
  'unifunc' => 'content_566a54190f6f49_70534354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a54190f6f49_70534354')) {function content_566a54190f6f49_70534354($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
