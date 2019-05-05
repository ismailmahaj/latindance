<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Likes Functions
 * Changed by CMSMasters
 * 
 */


function cmsmasters_like($show = true) {
	$post_ID = get_the_ID();
	
	
	$ip = getenv('REMOTE_ADDR');
	
	$ip_name = str_replace('.', '-', $ip);
	
	
	$likes = (get_post_meta($post_ID, 'cmsmasters_likes', true) != '') ? get_post_meta($post_ID, 'cmsmasters_likes', true) : '0';
	
	
	$ipPost = new WP_Query(array( 
		'post_type' => 		'cmsmastersLike', 
		'post_status' => 	'draft', 
		'post_parent' => 	$post_ID, 
		'name' => 			$ip_name 
	));
	
	
	$ipCheck = $ipPost->posts;
	
	
	if (isset($_COOKIE['like-' . $post_ID]) || count($ipCheck) != 0) {
		$counter = '<a href="#" onclick="return false;" id="cmsmastersLike-' . esc_attr($post_ID) . '" class="cmsmastersLike active cmsmasters_theme_icon_like"><span>' . esc_html($likes) . '</span></a>';
	} else {
		$counter = '<a href="#" onclick="cmsmasters_like(' . esc_attr($post_ID) . '); return false;" id="cmsmastersLike-' . esc_attr($post_ID) . '" class="cmsmastersLike cmsmasters_theme_icon_like"><span>' . esc_html($likes) . '</span></a>';
	}
	
	
	if ($show != true) {
		return $counter;
	} else {
		echo dance_studio_return_content($counter);
	}
}

