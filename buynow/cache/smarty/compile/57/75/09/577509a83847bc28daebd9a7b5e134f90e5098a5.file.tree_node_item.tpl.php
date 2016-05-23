<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 04:41:55
         compiled from "/home/easy2/public_html/buynow/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953965948566a541342e984-36273213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577509a83847bc28daebd9a7b5e134f90e5098a5' => 
    array (
      0 => '/home/easy2/public_html/buynow/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953965948566a541342e984-36273213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5413433015_34243429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5413433015_34243429')) {function content_566a5413433015_34243429($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
