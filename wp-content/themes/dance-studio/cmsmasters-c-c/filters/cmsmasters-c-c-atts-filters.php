<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.0.7
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'quotes_field_slider_type_title' => 	esc_attr__('Slider Type', 'dance-studio'), 
			'quotes_field_slider_type_descr' => 	esc_attr__('Choose your quotes slider style type', 'dance-studio'), 
			'quotes_field_type_choice_box' => 		esc_attr__('Boxed', 'dance-studio'), 
			'quotes_field_type_choice_center' => 	esc_attr__('Centered', 'dance-studio'),

			/* Special Heading Shortcode */	
			'heading_tablet_check' => 				esc_attr__('Font size for small tablet', 'dance-studio'),
			'heading_tablet_font_size' => 			esc_attr__('Tablet font size', 'dance-studio'),
			'heading_tablet_line_height' => 		esc_attr__('Tablet line height', 'dance-studio'), 
			
			/* Instagram shortcode */
			'instagram_feed_title' => 							esc_attr__('Instagram Feed', 'dance-studio'), 
			'id_instagram_feed_title' => 						esc_attr__('User Id', 'dance-studio'), 
			'id_instagram_feed_descr' => 						esc_attr__('There may be several ids', 'dance-studio'), 
			
			/* Timetable Default Colors */
			'box_bg_color' => 					$cmsmasters_option['dance-studio' . '_default' . '_bg'], 
			'box_hover_bg_color' => 			$cmsmasters_option['dance-studio' . '_default' . '_link'], 
			'box_txt_color' => 					$cmsmasters_option['dance-studio' . '_default' . '_color'], 
			'box_hover_txt_color' => 			$cmsmasters_option['dance-studio' . '_default' . '_alternate'], 
			'box_hours_txt_color' => 			$cmsmasters_option['dance-studio' . '_default' . '_link'], 
			'box_hours_hover_txt_color' => 		$cmsmasters_option['dance-studio' . '_default' . '_bg'], 
			'row1_bg_color' => 					$cmsmasters_option['dance-studio' . '_default' . '_alternate'], 
			'row1_txt_color' => 				$cmsmasters_option['dance-studio' . '_default' . '_color'], 
			'row2_bg_color' => 					$cmsmasters_option['dance-studio' . '_default' . '_bg'], 
			'row2_txt_color' => 				$cmsmasters_option['dance-studio' . '_default' . '_color'] 	
		));
	}
	
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}



/**
* Special Heading
*/
add_filter('cmsmasters_custom_heading_atts_filter', 'cmsmasters_custom_heading_atts');

function cmsmasters_custom_heading_atts() {
	return array( 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'tablet_check' =>  			'', 
		'tablet_font_size' => 		'', 
		'tablet_line_height' => 	'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}

