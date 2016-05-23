<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 07:22:14
         compiled from "/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_fullslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877295470566a79a60f8157-18066839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b2b17a37b4db960ca85bc5a1b92b9ade3bf898' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_fullslider.tpl',
      1 => 1449815976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877295470566a79a60f8157-18066839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'iso_code' => 0,
    'img_height' => 0,
    'img_width' => 0,
    't_image' => 0,
    'slide' => 0,
    'pathimg' => 0,
    't_thumb' => 0,
    't_link' => 0,
    't_title' => 0,
    't_description' => 0,
    'transitionSpeed' => 0,
    'interval' => 0,
    'displayProgressBar' => 0,
    'displayThumbnailNumbers' => 0,
    'displayThumbnailBackground' => 0,
    'thumb_width' => 0,
    'thumb_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a79a61ff182_50672752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a79a61ff182_50672752')) {function content_566a79a61ff182_50672752($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['slides']->value) {?>	
<?php $_smarty_tpl->tpl_vars["t_image"] = new Smarty_variable("image_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_thumb"] = new Smarty_variable("thum_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_title"] = new Smarty_variable("title_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_link"] = new Smarty_variable("link_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_description"] = new Smarty_variable("description_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<div class="container">
    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12">
		<div style="clear:both"></div>
		<div class="lof-fullslider-wrapper" style="height:<?php echo intval($_smarty_tpl->tpl_vars['img_height']->value);?>
px;width:<?php echo intval($_smarty_tpl->tpl_vars['img_width']->value);?>
px;">
			<div class="fullslider-hero-holder" style="height:<?php echo intval($_smarty_tpl->tpl_vars['img_height']->value);?>
px"></div>
			<div class="arrow-button">
				<a onclick="return false" id="btn_rt" class="lof-nextButton"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a>
				<a onclick="return false" id="btn_lt" class="lof-prevButton"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a>
			</div>
			<div class="lof-carousel-holder">
				<div id="lof-fullslider-inner" class="lof-fullslider-inner">
					
					<ul>
						<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value])) {?>
							<li style="width:<?php echo intval($_smarty_tpl->tpl_vars['img_width']->value);?>
px;height:<?php echo intval($_smarty_tpl->tpl_vars['img_height']->value);?>
px;">
								<!-- Image -->
								<?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value]) {?>
									<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pathimg']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value], ENT_QUOTES, 'UTF-8', true);?>
" 
										 data-thumb="<?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_thumb']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pathimg']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_thumb']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
										 <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value])) {?>onclick="window.open('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value], ENT_QUOTES, 'UTF-8', true);?>
','_blank');"<?php }?> 
										 alt="" style="width:<?php echo intval($_smarty_tpl->tpl_vars['img_width']->value);?>
px;height:<?php echo intval($_smarty_tpl->tpl_vars['img_height']->value);?>
px" class="img-responsive">
								<?php }?>
								<div>
									  <div class="carousel-caption">
										<?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value]) {?><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value], ENT_QUOTES, 'UTF-8', true);?>
</h3><?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value]) {?><p><?php echo $_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value];?>
</p><?php }?>		
									  </div>
								</div>
							</li>
							<?php }?>
						<?php } ?>
					</ul>
					
				</div>
			</div>
		</div>
		<div style="clear:both"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
   jQuery(function(){
		jQuery('#lof-fullslider-inner').fullSliderCarousel({
			transitionSpeed : <?php echo htmlspecialchars((($tmp = @rtrim($_smarty_tpl->tpl_vars['transitionSpeed']->value))===null||$tmp==='' ? '800' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
,	// speed to next each slide
			displayTime : <?php echo htmlspecialchars((($tmp = @rtrim($_smarty_tpl->tpl_vars['interval']->value))===null||$tmp==='' ? '4000' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
,				// time to show slide
			textholderHeight : .9,
			displayProgressBar : <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['displayProgressBar']->value)===null||$tmp==='' ? '1' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
,		// 1 show Progress Bar
			displayThumbnails: 1,
			displayThumbnailNumbers: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['displayThumbnailNumbers']->value)===null||$tmp==='' ? '1' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
,	// show number slide
			displayThumbnailBackground: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['displayThumbnailBackground']->value)===null||$tmp==='' ? '1' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
1,
			moduleId: '',
			showCaptions: 1,
			autoPlay : <?php if ($_smarty_tpl->tpl_vars['interval']->value>0) {?>1<?php } else { ?>0<?php }?>,					// 1 turn on timer
			thumbnailWidth: '<?php echo htmlspecialchars((($tmp = @rtrim($_smarty_tpl->tpl_vars['thumb_width']->value))===null||$tmp==='' ? '20' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
px',
			thumbnailHeight: '<?php echo htmlspecialchars((($tmp = @rtrim($_smarty_tpl->tpl_vars['thumb_height']->value))===null||$tmp==='' ? '20' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
px',
			thumbnailFontSize: '.7em'									// font number
		});
	});
</script>
<?php }?>  

<?php }} ?>
