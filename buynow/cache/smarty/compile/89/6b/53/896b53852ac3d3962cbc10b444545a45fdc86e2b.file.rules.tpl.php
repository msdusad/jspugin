<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 04:42:03
         compiled from "/home/easy2/public_html/buynow/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510860602566a541b5427d3-46440861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896b53852ac3d3962cbc10b444545a45fdc86e2b' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510860602566a541b5427d3-46440861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a541b55e2f6_16599723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a541b55e2f6_16599723')) {function content_566a541b55e2f6_16599723($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/easy2/public_html/buynow/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
