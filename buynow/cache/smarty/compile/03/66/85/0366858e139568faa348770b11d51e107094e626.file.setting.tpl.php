<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:49
         compiled from "/home/easy2/public_html/buynow/themes/ap_office/layout/setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903901670566a5f11428326-16167430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0366858e139568faa348770b11d51e107094e626' => 
    array (
      0 => '/home/easy2/public_html/buynow/themes/ap_office/layout/setting.tpl',
      1 => 1449811630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903901670566a5f11428326-16167430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTING_PRODUCT_COLUMN' => 0,
    'LISTING_PRODUCT_MOBILE' => 0,
    'LISTING_PRODUCT_TABLET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5f11480a73_31393651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f11480a73_31393651')) {function content_566a5f11480a73_31393651($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"];?><?php $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"] = new Smarty_variable("grid", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_GRIG_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_GRIG_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = new Smarty_variable("4", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"];?><?php $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_WISHLIST"] = clone $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_WISHLIST"] = clone $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"];?><?php $_smarty_tpl->tpl_vars["ENABLE_COLOR"] = new Smarty_variable("0", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_COLOR"] = clone $_smarty_tpl->tpl_vars["ENABLE_COLOR"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_COLOR"] = clone $_smarty_tpl->tpl_vars["ENABLE_COLOR"];?><?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value=="5") {?>
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." col-md-2-4", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php }?><?php }} ?>
