<?php
//Add hook to admin menu
if( is_admin()){
	add_action('admin_menu', 'smpi_plugin_menu');
//Add menu settings to plugin page		
function smpi_plugin_menu() {
		if ( function_exists('add_plugins_page') )
		add_plugins_page( 'Social Media Panel for Images', 'Social Media Panel for Images', 8, __FILE__, 'smpi_add_soc_button');
		//add_action( 'admin_init', 'smpi_register_settings' );
}
//show form plugins settings
function smpi_add_soc_button(){ ?>
	<div class = "wrap">
		<p><b>Add social buttons?</b></p>
		<form name="soc_buttons" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page=smpi/smpi_plugin_admin_menu.php';?>">
			<p><input type="checkbox" name="twitter" value="1" <?php if( get_option('twitter') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/twitter-32.png' width='18' height='18' title='share to twiiter'>&nbsp;&nbsp;<b>Twitter</b><Br>
			<input type="checkbox" name="facebook" value="1" <?php if( get_option('facebook') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/facebook-32.png' width='18' height='18' title='share to facebook'>&nbsp;&nbsp;<b>Facebook</b><Br>
			<input type="checkbox" name="google" value="1" <?php if( get_option('google') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/g-plus-32.png' width='18' height='18' title='share to google-plusone'>&nbsp;&nbsp;<b>Google+</b><Br>
			<input type="checkbox" name="livejournal" value="1" <?php if( get_option('livejournal') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/livejournal-32.png' width='18' height='18' title='share to livejournal'>&nbsp;&nbsp;<b>Livejournal</b><Br>
			<input type="checkbox" name="youtube" value="1" <?php if( get_option('youtube') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/youtube-32.png' width='18' height='18' title='share to youtube'>&nbsp;&nbsp;<b>Youtube</b><Br>
			<input type="checkbox" name="vkontakte" value="1" <?php	if(	get_option('vkontakte') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/vkontakte-32.png' width='18' height='18' title='share to vkontakte'>&nbsp;&nbsp;<b>Vkontakte</b><Br>
			<input type="checkbox" name="LinkedIn" value="1" <?php	if(	get_option('LinkedIn') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/LinkedIn.png' width='18' height='18' title='share to linkedin'>&nbsp;&nbsp;<b>LinkedIn</b><Br>
			<input type="checkbox" name="PicasaWebAlbums" value="1" <?php	if(	get_option('PicasaWebAlbums') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/picasa.jpg' width='18' height='18' title='share to picasa'>&nbsp;&nbsp;<b>Picasa Web Albums</b><Br>
			<input type="checkbox" name="Flickr" value="1" <?php	if(	get_option('Flickr') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/flickr.png' width='18' height='18' title='share to Flickr'>&nbsp;&nbsp;<b>Flickr</b><Br>
			<input type="checkbox" name="Pinterest" value="1" <?php	if(	get_option('Pinterest') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/pinterest.png' width='18' height='18' title='share to Pinterest'>&nbsp;&nbsp;<b>Pinterest</b><Br>
			<input type="checkbox" name="DeviantArt" value="1" <?php	if(	get_option(' DeviantArt') == 1) echo"checked"; ?> >&nbsp;<img src='../wp-content/plugins/social-media-panel-for-images/images/deviant.png' width='18' height='18' title='share to  DeviantArt'>&nbsp;&nbsp;<b> DeviantArt</b><Br>
			<input type="hidden" name="hsb">
			<p><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"></p>
			</form>
<?php if( $_GET['updated'] == true)
			echo "<p><b>Settings updated</b></p>";
}
}
?>