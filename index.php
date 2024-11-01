<?php
/*
Plugin Name: Social Media Panel for Images
Plugin URI: https://wordpress.org/plugins/social-media-panel-for-images/
Description: Add social icons to images on your site.
Version:  1.1
Author: GRT TEAM
Author URI: http://grt-team.com
*/

//included files to form plugin settings menu and processing POST data of form
include "smpi_plugin_admin_menu.php";
include "smpi_input_soc_buttons.php";
//add hook to header info and show socbuttons panel on images of posts
add_action('wp_head','smpiIncludes');
add_filter('the_content','smpi_add_soc_panel',20);
//delete plugins settings from database when plugin uninstall
register_uninstall_hook ("uninstall.php", "smpi_plugin_deactivate");
//included css and js files
function smpiIncludes() {
	wp_enqueue_script('jquery');
	wp_register_script('jquery.min.js',WP_PLUGIN_URL . '/social-media-panel-for-images/js/jquery.min.js' );
    wp_enqueue_script('jquery.min.js');
	wp_register_script('smpiScript',WP_PLUGIN_URL . '/social-media-panel-for-images/js/smpiScript.js' );
    wp_enqueue_script('smpiScript');
	wp_register_style('smpiStyle', WP_PLUGIN_URL . '/social-media-panel-for-images/css/smpiStyle.css');
    wp_enqueue_style('smpiStyle');
};
//panel of socbuttons to images
function smpi_add_soc_panel($content){
	if( is_single($post)):
	global $post;
	$soc_panel = "<div class='soc_panel_wrapper'><div class='soc_panel'>";
	if( get_option('twitter') == 1)
	$soc_panel .= "<div class='twitter'><a rel='nofollow' target='_blank' href='https://twitter.com/share' class='twitter-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/twitter-32.png' width='22' height='22' title='share to twitter'></a></div>";
	if( get_option('google') == 1)
	$soc_panel .= "<div class='g-plus' data-action='share'><a rel='nofollow' target='_blank' href='http://www.plus.google.com/sharer.php?url=<?php the_permalink(); ?>'>
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/g-plus-32.png' width='22' height='22' title='share to google-plusone'></a></div>";
	if( get_option('facebook') == 1)
	$soc_panel .= "<div class='facebook'><a rel='nofollow' target='_blank' href='http://www.facebook.com/sharer.php?url=<?php the_permalink(); ?>'>
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/facebook-32.png' width='22' height='22' title='share to facebook'></a></div>";
	if( get_option('livejournal') == 1)
	$soc_panel .= "<div class='livejournal'><noindex><a href='https://livejournal.com/sharer.php?url=<?php the_permalink(); ?>' rel='nofollow' target='_blank'>
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/livejournal-32.png' width='22' height='22' title='share to livejournal'></a></noindex></div>";
	if( get_option('youtube') == 1)
	$soc_panel .= "<div class='youtube'><noindex><a href='https://youtu.be/sharer.php?url=<?php the_permalink(); ?>' rel='nofollow' target='_blank'>
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/youtube-32.png' width='22' height='22' title='share to youtube'></a></noindex></div>";
	if( get_option('vkontakte') == 1)
	$soc_panel .= "<div class='vkontakte'><noindex><a href='http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>' target='_blank' rel='nofollow'>
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/vkontakte-32.png' width='22' height='22' title='share to vkontakte'></a></noindex></div>";
	if( get_option('LinkedIn') == 1)
	$soc_panel .= "<div class='LinkedIn'><a rel='nofollow' target='_blank' href='https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>' class='LinkedIn-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/LinkedIn.png' width='22' height='22' title='share to LinkedIn'></a></div>";
	if( get_option('PicasaWebAlbums') == 1)
	$soc_panel .= "<div class='PicasaWebAlbums'><a rel='nofollow' target='_blank' href='http://picasa.google.com/share?url=<?php the_permalink(); ?>' class='PicasaWebAlbums-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/picasa.jpg' width='22' height='22' title='share to PicasaWebAlbums'></a></div>";
	if( get_option('Flickr') == 1)
	$soc_panel .= "<div class='Flickr'><a rel='nofollow' target='_blank' href='https://flickr.com/share?url=<?php the_permalink(); ?>' class='Flickr-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/flickr.png' width='22' height='22' title='share to Flickr'></a></div>";
	if( get_option('Pinterest') == 1)
	$soc_panel .= "<div class='Pinterest'><a rel='nofollow' target='_blank' href='https://pinterest.com/share?url=<?php the_permalink(); ?>' class='Pinterest-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/pinterest.png' width='22' height='22' title='share to Pinterest'></a></div>";
	if( get_option('DeviantArt') == 1)
	$soc_panel .= "<div class='DeviantArt'><a rel='nofollow' target='_blank' href='https://DeviantArt.com/share?url=<?php the_permalink(); ?>' class='DeviantArt-share-button' >
					<img src='http://".($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']))."/wp-content/plugins/social-media-panel-for-images/images/deviant.png' width='22' height='22' title='share to DeviantArt'></a></div>";
	$soc_panel .= "</div>";
 //add end div tag after post_image;
	$soc_length = strlen($soc_panel);
	$curr_pos = strpos($content,"<img");
	while($curr_pos !== FALSE){
			$content = substr_replace($content,$soc_panel,$curr_pos,0);
			$img_end_pos = strpos($content,"/>",$curr_pos+$soc_length);
			$content = substr_replace($content,"</div>",$img_end_pos+2,0);
			if(($curr_pos + $soc_length)>strlen($content)) break;
			$curr_pos = strpos($content, "<img", $curr_pos + $soc_length + 15 );	
				$i++;
		}
	return $content;
	else :
	return $content;
	ENDIF;
};
?>