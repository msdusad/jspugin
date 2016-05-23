<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 10:10:39
         compiled from "/home/easy2/public_html/buynow/modules/htmlbox/html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871154653566aa11fcf0973-22094195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d2a9d49c1c25f231ee180a1b4dcd9f9ba2d931' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/htmlbox/html.tpl',
      1 => 1434546528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871154653566aa11fcf0973-22094195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlbox_ssl' => 0,
    'is_https_htmlbox' => 0,
    'page_name' => 0,
    'htmlbox_home' => 0,
    'htmlboxbody' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566aa11fd53746_38730598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566aa11fd53746_38730598')) {function content_566aa11fd53746_38730598($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['htmlbox_ssl']->value==1) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_https_htmlbox']->value==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
            <?php if ($_smarty_tpl->tpl_vars['htmlbox_home']->value==1) {?>
                
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['htmlboxbody']->value;?>

            <?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['htmlboxbody']->value;?>

        <?php }?>
    <?php }?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
        <?php if ($_smarty_tpl->tpl_vars['htmlbox_home']->value==1) {?>
                
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['htmlboxbody']->value;?>

        <?php }?>
     <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['htmlboxbody']->value;?>

     <?php }?>
<?php }?><?php }} ?>
