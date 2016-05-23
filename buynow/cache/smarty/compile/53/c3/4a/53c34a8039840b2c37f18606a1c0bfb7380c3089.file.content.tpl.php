<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 04:54:43
         compiled from "/home/easy2/public_html/buynow/pradmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1897590194566a5713ca9684-59301225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c34a8039840b2c37f18606a1c0bfb7380c3089' => 
    array (
      0 => '/home/easy2/public_html/buynow/pradmin/themes/default/template/content.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897590194566a5713ca9684-59301225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5713cb5664_73606231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5713cb5664_73606231')) {function content_566a5713cb5664_73606231($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
