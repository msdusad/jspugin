<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:00:51
         compiled from "/home/easy2/public_html/buynow/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577598723566a5883dce3c5-44316793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '224e08b907f5b5b3d6a1c0e1b99ef144647aa52c' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/blockfacebook/blockfacebook.tpl',
      1 => 1448586600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577598723566a5883dce3c5-44316793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5883e0f0d7_70500290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5883e0f0d7_70500290')) {function content_566a5883e0f0d7_70500290($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
