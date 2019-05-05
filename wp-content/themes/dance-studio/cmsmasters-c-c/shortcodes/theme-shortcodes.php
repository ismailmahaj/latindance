<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Content Composer Theme Shortcodes
 * Created by CMSMasters
 * 
 */


$cmsmasters_add = 'add_';

$cmsmasters_add_shcd = $cmsmasters_add . 'shortcode';

/**
 * Menu
 */
function cmsmasters_instagram_feed($atts, $content = null) {
    $new_atts = apply_filters('cmsmasters_instagram_feed_atts_filter', array( 
		'id' => 			''
    ) );
	
	
	$shortcode_name = 'instagram-feed';
	
	$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
	
	
	if (locate_template($shortcode_path)) {
		$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$out .= do_shortcode('[instagram-feed id="' . $id . '"]');
	
	
	return $out;
}

$cmsmasters_add_shcd('cmsmasters_instagram_feed', 'cmsmasters_instagram_feed');

