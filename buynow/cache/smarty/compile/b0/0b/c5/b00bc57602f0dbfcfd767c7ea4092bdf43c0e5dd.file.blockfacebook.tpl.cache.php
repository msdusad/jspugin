<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:06:50
         compiled from "/home/easy2/public_html/buynow/themes/default-bootstrap/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497756462566a59ea9ffdf7-41570018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00bc57602f0dbfcfd767c7ea4092bdf43c0e5dd' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/default-bootstrap/modules/blockfacebook/blockfacebook.tpl',
      1 => 1449854740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497756462566a59ea9ffdf7-41570018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a59eaa406d1_26229082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a59eaa406d1_26229082')) {function content_566a59eaa406d1_26229082($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
