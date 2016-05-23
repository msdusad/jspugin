<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 06:46:44
         compiled from "/home/easy2/public_html/buynow/modules/leotempcp/views/templates/admin/leotempcp_widgets/widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324292819566a62e6616338-01754035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911c06534c1a72ccf701dbaaf4f92a0891a641b2' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leotempcp/views/templates/admin/leotempcp_widgets/widget.tpl',
      1 => 1449815976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324292819566a62e6616338-01754035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a62e669f159_37751916',
  'variables' => 
  array (
    'widget_selected' => 0,
    'form' => 0,
    'action' => 0,
    'is_using_managewidget' => 0,
    'types' => 0,
    'text' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a62e669f159_37751916')) {function content_566a62e669f159_37751916($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['widget_selected']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	 <script type="text/javascript">
		$('#widget_type').change( function(){
			location.href = '<?php echo html_entity_decode(htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true));?>
&wtype='+$(this).val();
		} );
	</script>	
 <?php } else { ?>
 <div class="col-lg-12" style="padding:20px;">
		 <?php if ($_smarty_tpl->tpl_vars['is_using_managewidget']->value) {?>
		<div class="col-lg-5">
		<h3><?php echo smartyTranslate(array('s'=>'Only for Module leomanagewidgets','mod'=>'leotempcp'),$_smarty_tpl);?>
</h3> 
			<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for']=='manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode(htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true));?>
&wtype=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php } ?> 
		</div>
		<?php }?>
		<div class="col-lg-6 col-lg-offset-1">
		<h3><?php echo smartyTranslate(array('s'=>'For all module (leomanagewidget,leomenubootstrap, leomenusidebar)','mod'=>'leotempcp'),$_smarty_tpl);?>
</h3> 
			<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for']!='manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode(htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true));?>
&wtype=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php } ?> 
		</div>
</div>		
<?php }?>
<?php }} ?>
