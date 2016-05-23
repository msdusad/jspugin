<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 06:11:42
         compiled from "/home/easy2/public_html/buynow/modules/welcome/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:427534157566a691e8299d9-07617487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '884969fe7e28ea9ef6269341d1c656d969428dd1' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/welcome/welcome.tpl',
      1 => 1449811881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427534157566a691e8299d9-07617487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage_logo_wel' => 0,
    'welcome' => 0,
    'image_path_wel' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a691e8735e2_09250572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a691e8735e2_09250572')) {function content_566a691e8735e2_09250572($_smarty_tpl) {?>

<!-- Module welcome -->
<div id="welcome_block_center" class="welcome_block">
<div class="container">
<div class="sixteen columns">

	<?php if ($_smarty_tpl->tpl_vars['homepage_logo_wel']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['welcome']->value->body_home_logo_link;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path_wel']->value);?>
" /></a> <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph) {?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph);?>
</div><?php }?>
	
	
</div>
</div>
</div>
<!-- /Module welcome -->
<?php }} ?>
