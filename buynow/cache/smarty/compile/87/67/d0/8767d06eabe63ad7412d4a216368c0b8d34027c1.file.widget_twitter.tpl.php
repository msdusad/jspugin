<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 05:28:50
         compiled from "/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757932793566a5f12b560d2-84548435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8767d06eabe63ad7412d4a216368c0b8d34027c1' => 
    array (
      0 => '/home/easy2/public_html/buynow/modules/leomanagewidgets/views/widgets/widget_twitter.tpl',
      1 => 1449811631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757932793566a5f12b560d2-84548435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'widget_heading' => 0,
    'twidget_id' => 0,
    'theme' => 0,
    'link_color' => 0,
    'width' => 0,
    'height' => 0,
    'chrome' => 0,
    'border_color' => 0,
    'iso_code' => 0,
    'count' => 0,
    'show_replies' => 0,
    'js' => 0,
    'show_scrollbar' => 0,
    'text_color' => 0,
    'mail_color' => 0,
    'name_color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a5f12bf5244_90624321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a5f12bf5244_90624321')) {function content_566a5f12bf5244_90624321($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
<div class="widget-twitter block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<div id="leo-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twidget_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="leo-twitter">
			<a class="twitter-timeline" data-dnt="true"  data-theme="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-link-color="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_color']->value, ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
px" height="<?php echo intval($_smarty_tpl->tpl_vars['height']->value);?>
px" data-chrome="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chrome']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-border-color="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['border_color']->value, ENT_QUOTES, 'UTF-8', true);?>
" lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-tweet-limit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-show-replies="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_replies']->value, ENT_QUOTES, 'UTF-8', true);?>
" href="https://twitter.com/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true);?>
"  data-widget-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twidget_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"  >Tweets by @<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php echo $_smarty_tpl->tpl_vars['js']->value;?>

		</div>	
	</div>
</div>
<?php }?> 
<script type="text/javascript">

// Customize twitter feed
var hideTwitterAttempts = 0;
function hideTwitterBoxElements() {
 setTimeout( function() {
  if ( $('[id*=leo-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twidget_id']->value, ENT_QUOTES, 'UTF-8', true);?>
]').length ) {
   $('#leo-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twidget_id']->value, ENT_QUOTES, 'UTF-8', true);?>
 iframe').each( function(){
    var ibody = $(this).contents().find( 'body' );
	var show_scroll =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_scrollbar']->value, ENT_QUOTES, 'UTF-8', true);?>
; 
	var height =  <?php echo intval($_smarty_tpl->tpl_vars['height']->value);?>
+'px'; 
    if ( ibody.find( '.timeline .stream .h-feed li.tweet' ).length ) {
		ibody.find( '.e-entry-title' ).css( 'color', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_color']->value, ENT_QUOTES, 'UTF-8', true);?>
' );
		ibody.find( '.header .p-nickname' ).css( 'color', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_color']->value, ENT_QUOTES, 'UTF-8', true);?>
' );
		ibody.find( '.p-name' ).css( 'color', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_color']->value, ENT_QUOTES, 'UTF-8', true);?>
' );
		if(show_scroll == 1){
			ibody.find( '.timeline .stream' ).css( 'max-height', height );
			ibody.find( '.timeline .stream' ).css( 'overflow-y', 'auto' );	
			ibody.find( '.timeline .twitter-timeline' ).css( 'height', 'inherit !important' );	
		}
    } else {
     $(this).hide();
    }
   });
  }
  hideTwitterAttempts++;
  if ( hideTwitterAttempts < 3 ) {
   hideTwitterBoxElements();
  }
 }, 1500);
}
// somewhere in your code after html page load
hideTwitterBoxElements();

</script>
<?php }} ?>
