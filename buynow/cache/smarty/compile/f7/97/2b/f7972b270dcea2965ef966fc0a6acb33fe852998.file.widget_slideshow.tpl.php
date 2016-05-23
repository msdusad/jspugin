<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:48
         compiled from "/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:897893114566a5f1052aef6-26612946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7972b270dcea2965ef966fc0a6acb33fe852998' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_slideshow.tpl',
      1 => 1449811631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '897893114566a5f1052aef6-26612946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'iso_code' => 0,
    't_image' => 0,
    'slide' => 0,
    't_link' => 0,
    't_title' => 0,
    'pathimg' => 0,
    'img_width' => 0,
    'img_height' => 0,
    't_description' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5f1063f8d4_91584749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f1063f8d4_91584749')) {function content_566a5f1063f8d4_91584749($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['slides']->value) {?>  
<?php $_smarty_tpl->tpl_vars["t_image"] = new Smarty_variable("image_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_thumb"] = new Smarty_variable("thum_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_title"] = new Smarty_variable("title_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_link"] = new Smarty_variable("link_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["t_description"] = new Smarty_variable("description_".((string)$_smarty_tpl->tpl_vars['iso_code']->value), null, 0);?>

    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
                <div id="carousel-example-generic">
                    <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['index']++;
?>
              <li data-target="#carousel-example-generic" data-slide-to="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['item']['index'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item']['first']) {?>class="active"<?php }?>></li>
              <?php } ?>  
            </ol>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
              <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slides']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slides']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slides']['index']++;
?>
                <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slides']['first']) {?>active<?php }?> " data-slide-number="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['slides']['index'], ENT_QUOTES, 'UTF-8', true);?>
">
                  <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value]) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value]) {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value], ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php }?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pathimg']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_image']->value], ENT_QUOTES, 'UTF-8', true);?>
" alt="" style="width:<?php echo intval($_smarty_tpl->tpl_vars['img_width']->value);?>
px;height:<?php echo intval($_smarty_tpl->tpl_vars['img_height']->value);?>
px" class="img-responsive">
                    <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value]) {?>
                    </a>
                    <?php }?>
                  <?php }?> 
                    <div class="carousel-caption">
                    <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value]) {?>
                      <h3>
                        <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value]) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php }?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_title']->value], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_link']->value]) {?>
                        </a>
                        <?php }?>
                      </h3>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value])&&$_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value]) {?><p><?php echo $_smarty_tpl->tpl_vars['slide']->value[$_smarty_tpl->tpl_vars['t_description']->value];?>
</p><?php }?>   
                    </div>
                </div>
              <?php } ?>
                        </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
                    </div>
                </div>
          <!-- Controls -->

        </div>
   
    <!--/main slider carousel-->
</div>

<?php }?>  
<script type="text/javascript">

$('#myCarousel').carousel({
    interval: <?php echo intval($_smarty_tpl->tpl_vars['interval']->value);?>

});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

</script><?php }} ?>
