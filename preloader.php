/*preloader*/
add_action('et_after_main_content','dp_preloader');

function dp_preloader(){
 ?>
 
 <div class="dp_preloader">
	<div class="dp_loader_icon">&nbsp;</div>
 </div>
 <style>
.dp_preloader{position:fixed;height:100%;width:100%;background-color:#4a4a4a;z-index:999999;overflow:hidden !important; left:0;top:0;bottom:0;right:0;}
.dp_preloader .dp_loader_icon{position:absolute;left:50%;top:50%;background-image:url(<?php echo get_stylesheet_directory_uri();?>/assets/img/loader.gif); width:160px;height:24px;background-repeat:no-repeat;background-position:center;-webkit-background-size:cover;margin:0px 0 0 -65px;}
</style>

<?php }


/*preloader js*/
add_action('wp_footer','dp_preloader_css');
function dp_preloader_css(){ ?>
<script>
	jQuery(window).load(function(){
				jQuery(".dp_preloader").fadeOut();
			});
</script>
<?php }