<?php
//If form send processing of data in function input_soc_buttons()
if ( isset($_POST['hsb'])) {
	smpi_input_soc_buttons();
}
//processing of POST data and update settings which checked as value 1 another 0
function smpi_input_soc_buttons() {
	global $twitter_button,$facebook_button,$google_button,$livejournal_button,$linkedIn_button,$picasa_button,$flickr_button,$pinterest_button,$deviant_button;
	if( $_POST['twitter']) {
		$twitter_button = 1;}
	else {$twitter_button = 0;}
		update_option('twitter', $twitter_button);
		
	if( $_POST['facebook']) {
		$facebook_button = 1;}
	else {$facebook_button = 0;}
		update_option('facebook', $facebook_button);
		
	if( $_POST['google']) {
		$google_button = 1;}
	else $google_button = 0;
		update_option('google', $google_button);
		
	if( $_POST['livejournal']) {
		$livejournal_button = 1;}
	else $livejournal_button = 0;
		update_option('livejournal', $livejournal_button);
		
	if( $_POST['youtube']) { 
		$youtube_button = 1;}
	else $youtube_button = 0;
		update_option('youtube', $youtube_button);
		
	if( $_POST['vkontakte']) {
		$vkontakte_button = 1;}
	else $vkontakte_button = 0;
		update_option('vkontakte', $vkontakte_button);
	
	if( $_POST['LinkedIn']) {
		$linkedIn_button = 1;}
	else {$linkedIn_button = 0;}
		update_option('LinkedIn', $linkedIn_button);
	
	if( $_POST['PicasaWebAlbums']) {
		$picasa_button = 1;}
	else {$picasa_button = 0;}
		update_option('PicasaWebAlbums', $picasa_button);
	
	if( $_POST['Flickr']) {
		$flickr_button = 1;}
	else {$flickr_button = 0;}
		update_option('Flickr', $flickr_button);
	
	if( $_POST['Pinterest']) {
		$pinterest_button = 1;}
	else {$pinterest_button = 0;}
		update_option('Pinterest', $pinterest_button);
	
	if( $_POST['DeviantArt']) {
		$deviant_button = 1;}
	else {$deviant_button = 0;}
		update_option('DeviantArt', $deviant_button);
//we countermarch on a page plugin admin menu		
	header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/plugins.php?page=social-media-panel-for-images/smpi_plugin_admin_menu.php&updated=true");
	exit;
}
?>