<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function dance_studio_register_css_styles() {
	if (!is_admin()) {
		global $post, 
			$wp_styles;
		
		
		$cmsmasters_option = dance_studio_get_global_options();
		
		
		wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('theme-design-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('theme-adapt', get_template_directory_uri() . '/css/adaptive.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('theme-retina', get_template_directory_uri() . '/css/retina.css', array(), '1.0.0', 'screen');
		
		
		
		wp_enqueue_style('theme-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-icons-custom', get_template_directory_uri() . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'screen');
		
		wp_register_style('isotope', get_template_directory_uri() . '/css/jquery.isotope.css', array(), '1.5.26', 'screen');
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsmasters_portfolio ') 
		) {
			wp_enqueue_style('isotope');
		}
		
		
		// CMSMASTERS Donations styles
		if (CMSMASTERS_DONATIONS) {
			wp_enqueue_style('theme-cmsmasters-donations-style', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-donations-adaptive', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-adaptive.css', array(), '1.0.0', 'screen');
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-donations-rtl', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// WooCommerce styles
		if (CMSMASTERS_WOOCOMMERCE) {
			wp_enqueue_style('theme-cmsmasters-woo-style', get_template_directory_uri() . '/css/cmsmasters-woo-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-woo-adaptive', get_template_directory_uri() . '/css/cmsmasters-woo-adaptive.css', array(), '1.0.0', 'screen');
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-woo-rtl', get_template_directory_uri() . '/css/cmsmasters-woo-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// Events styles
		if (CMSMASTERS_EVENTS_CALENDAR) {
			wp_enqueue_style('theme-cmsmasters-events-style', get_template_directory_uri() . '/css/cmsmasters-events-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-events-adaptive', get_template_directory_uri() . '/css/cmsmasters-events-adaptive.css', array(), '1.0.0', 'screen');
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-events-rtl', get_template_directory_uri() . '/css/cmsmasters-events-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// Timetable styles
		if (CMSMASTERS_TIMETABLE) {
			wp_dequeue_style('timetable_sf_style');
			
			wp_dequeue_style('timetable_style');
			
			wp_dequeue_style('timetable_event_template');
			
			wp_dequeue_style('timetable_responsive_style');
			
			
			wp_enqueue_style('theme-cmsmasters-timetable-style', get_template_directory_uri() . '/css/cmsmasters-timetable-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-timetable-adaptive', get_template_directory_uri() . '/css/cmsmasters-timetable-adaptive.css', array(), '1.0.0', 'screen');
			
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-timetable-rtl', get_template_directory_uri() . '/css/cmsmasters-timetable-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// iLightBox skins
		$ilightbox_skin = $cmsmasters_option['dance-studio' . '_ilightbox_skin'];
		
		wp_enqueue_style('ilightbox', get_template_directory_uri() . '/css/ilightbox.css', array(), '2.2.0', 'screen');
		
		wp_enqueue_style('ilightbox-skin-' . $ilightbox_skin, get_template_directory_uri() . '/css/ilightbox-skins/' . $ilightbox_skin . '-skin.css', array(), '2.2.0', 'screen');
		
		
		// Fonts and Colors styles
		$upload_dir = wp_upload_dir();
		
		$style_dir = str_replace('\\', '/', $upload_dir['basedir'] . '/cmsmasters_styles');
		
		
		$cmsmasters_styles_dir = get_template_directory_uri() . '/css/styles/';
		
		
		if (is_dir($style_dir) && get_option('cmsmasters_style_exists_' . 'dance-studio')) {
			$cmsmasters_styles_dir = $upload_dir['baseurl'] . '/cmsmasters_styles/';
		}
		
		
		$browser = new Browser();
		
		if (
			($browser->getBrowser() == Browser::BROWSER_IE && $browser->getVersion() > 9) || 
			$browser->getBrowser() != Browser::BROWSER_IE
		) {
			wp_enqueue_style('theme-fonts-schemes', $cmsmasters_styles_dir . 'dance-studio' . '.css', array(), '1.0.0', 'screen');
		}
		
		
		wp_enqueue_style('theme-fonts', $cmsmasters_styles_dir . 'dance-studio' . '_fonts.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-schemes-primary', $cmsmasters_styles_dir . 'dance-studio' . '_colors_primary.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-schemes-secondary', $cmsmasters_styles_dir . 'dance-studio' . '_colors_secondary.css', array(), '1.0.0', 'screen');
		
		
		$wp_styles->add_data('theme-fonts', 'conditional', 'lte IE 9');
		$wp_styles->add_data('theme-schemes-primary', 'conditional', 'lte IE 9');
		$wp_styles->add_data('theme-schemes-secondary', 'conditional', 'lte IE 9');
		
		
		wp_enqueue_style('theme-ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0.0', 'screen');
		
		
		$wp_styles->add_data('theme-ie', 'conditional', 'lt IE 9');
	}
}

add_action('wp_enqueue_scripts', 'dance_studio_register_css_styles');



/* Register JS Scripts */
function register_js_scripts() {
	if (!is_admin()) {
		global $post;
		
		
		$cmsmasters_option = dance_studio_get_global_options();
		
				
		wp_enqueue_script('libs', get_template_directory_uri() . '/js/jsLibraries.min.js', array('jquery'), '1.0.0', false);
		
		wp_enqueue_script('jLibs', get_template_directory_uri() . '/js/jqueryLibraries.min.js', array('jquery'), '1.0.0', true);
		
		wp_localize_script('jLibs', 'cmsmasters_jlibs', array( 
			'button_height' => 	(is_admin_bar_showing() ? 32 : 0) - ($cmsmasters_option['dance-studio' . '_button_font_line_height'] / 2)
		));
		
		wp_enqueue_script('iLightBox', get_template_directory_uri() . '/js/jquery.iLightBox.min.js', array('jquery'), '2.2.0', false);
		
		wp_enqueue_script('cmsmasters-scrollspy', get_template_directory_uri() . '/js/scrollspy.js', array('jquery'), '1.0.0', true);
		
		wp_enqueue_script('script', get_template_directory_uri() . '/js/jquery.script.js', array('jquery'), '1.0.0', true);
		
		$primary_color = $cmsmasters_option['dance-studio' . '_default_link'];
		
		wp_localize_script('script', 'cmsmasters_script', array( 
			'theme_url' => 							get_template_directory_uri(), 
			'site_url' => 							get_site_url() . '/', 
			'ajaxurl' => 							admin_url('admin-ajax.php'), 
			'nonce_ajax_like' => 					wp_create_nonce('cmsmasters_ajax_like-nonce'), 
			'primary_color' => 						$primary_color, 
			'ilightbox_skin' => 					$cmsmasters_option['dance-studio' . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsmasters_option['dance-studio' . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsmasters_option['dance-studio' . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsmasters_option['dance-studio' . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsmasters_option['dance-studio' . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsmasters_option['dance-studio' . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsmasters_option['dance-studio' . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsmasters_option['dance-studio' . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsmasters_option['dance-studio' . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsmasters_option['dance-studio' . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsmasters_option['dance-studio' . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsmasters_option['dance-studio' . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsmasters_option['dance-studio' . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				esc_attr__('Close', 'dance-studio'), 
			'ilightbox_enter_fullscreen_text' => 	esc_attr__('Enter Fullscreen (Shift+Enter)', 'dance-studio'), 
			'ilightbox_exit_fullscreen_text' => 	esc_attr__('Exit Fullscreen (Shift+Enter)', 'dance-studio'), 
			'ilightbox_slideshow_text' => 			esc_attr__('Slideshow', 'dance-studio'), 
			'ilightbox_next_text' => 				esc_attr__('Next', 'dance-studio'), 
			'ilightbox_previous_text' => 			esc_attr__('Previous', 'dance-studio'), 
			'ilightbox_load_image_error' => 		esc_html__('An error occurred when trying to load photo.', 'dance-studio'), 
			'ilightbox_load_contents_error' => 		esc_html__('An error occurred when trying to load contents.', 'dance-studio'), 
			'ilightbox_missing_plugin_error' => 	wp_kses(__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'dance-studio'), array('a' => array('href' => array(), 'target' => array())))
		));
		
		
		wp_enqueue_script('twitter', get_template_directory_uri() . '/js/jquery.tweet.min.js', array('jquery'), '1.3.1', true);
		
		
		wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), '1.5.19', true);
		
		wp_register_script('isotopeMode', get_template_directory_uri() . '/js/jquery.isotope.mode.js', array('jquery', 'isotope'), '1.0.0', true);
		
		wp_localize_script('isotopeMode', 'cmsmasters_isotope_mode', array( 
			'ilightbox_skin' => 					$cmsmasters_option['dance-studio' . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsmasters_option['dance-studio' . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsmasters_option['dance-studio' . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsmasters_option['dance-studio' . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsmasters_option['dance-studio' . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsmasters_option['dance-studio' . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsmasters_option['dance-studio' . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsmasters_option['dance-studio' . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsmasters_option['dance-studio' . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsmasters_option['dance-studio' . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsmasters_option['dance-studio' . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsmasters_option['dance-studio' . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsmasters_option['dance-studio' . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsmasters_option['dance-studio' . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				esc_attr__('Close', 'dance-studio'), 
			'ilightbox_enter_fullscreen_text' => 	esc_attr__('Enter Fullscreen (Shift+Enter)', 'dance-studio'), 
			'ilightbox_exit_fullscreen_text' => 	esc_attr__('Exit Fullscreen (Shift+Enter)', 'dance-studio'), 
			'ilightbox_slideshow_text' => 			esc_attr__('Slideshow', 'dance-studio'), 
			'ilightbox_next_text' => 				esc_attr__('Next', 'dance-studio'), 
			'ilightbox_previous_text' => 			esc_attr__('Previous', 'dance-studio'), 
			'ilightbox_load_image_error' => 		esc_html__('An error occurred when trying to load photo.', 'dance-studio'), 
			'ilightbox_load_contents_error' => 		esc_html__('An error occurred when trying to load contents.', 'dance-studio'), 
			'ilightbox_missing_plugin_error' => 	wp_kses(__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'dance-studio'), array('a' => array('href' => array(), 'target' => array()))) 
		));
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsmasters_portfolio ') 
		) {
			wp_enqueue_script('isotope');
			
			wp_enqueue_script('isotopeMode');
		}
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[/cmsmasters_google_map_markers]') 
		) {
			wp_enqueue_script('gMapAPI', '//maps.googleapis.com/maps/api/js?key=' . $cmsmasters_option['dance-studio' . '_gmap_api_key'], array('jquery'), '1.0.0', true);
			
			wp_enqueue_script('gMap', get_template_directory_uri() . '/js/jquery.gMap.min.js', array('jquery', 'gMapAPI'), '3.2.0', true);
		}
		
		
		// WooCommerce scripts
		if (CMSMASTERS_WOOCOMMERCE) {
			wp_enqueue_script('cmsmasters-woo-script', get_template_directory_uri() . '/js/jquery.cmsmasters-woo-script.js', array('jquery'), '1.0.0', true);
			
			
			$cart_currency_symbol = get_woocommerce_currency_symbol();
			
			$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
			
			$currency_symbol = $cart_currency_symbol;
			
			
			if ($cart_currency_symbol_pos == 'left_space') {
				$currency_symbol = $cart_currency_symbol . ' ';
			} elseif ($cart_currency_symbol_pos == 'right_space') {
				$currency_symbol = ' ' . $cart_currency_symbol;
			}
			
			
			$cmsmasters_image_sizes = dance_studio_get_image_thumbnail_list();
			
			
			wp_localize_script('cmsmasters-woo-script', 'cmsmasters_woo_script', array( 
				'currency_symbol' => 			$currency_symbol, 
				'thumbnail_image_width' => 		$cmsmasters_image_sizes['cmsmasters-small-thumb']['width'], 
				'thumbnail_image_height' => 	$cmsmasters_image_sizes['cmsmasters-small-thumb']['height'] 
			));
		}
	}
	
	// Comment Reply enqueue
	if (is_singular() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'register_js_scripts');


/* Return content */
function dance_studio_return_content($content) {
	return $content;
}


/* Developer Mode */
function dance_studio_developer_mode() {
	if (!is_admin() && CMSMASTERS_DEVELOPER_MODE) {
		wp_enqueue_script('less', get_template_directory_uri() . '/js/less.min.js', array(), '2.0.0', false);
		
		
		wp_dequeue_style('theme-style');
		
		wp_dequeue_style('theme-adapt');
		
		
		echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/style.less" type="text/css" media="screen" />';
		
		echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/adaptive.less" type="text/css" media="screen" />';
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			wp_dequeue_style('theme-cmsmasters-woo-style');
			
			wp_dequeue_style('theme-cmsmasters-woo-adaptive');
			
			echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/cmsmasters-woo-style.less" type="text/css" media="screen" />';
			
			echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/cmsmasters-woo-adaptive.less" type="text/css" media="screen" />';
		}
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			wp_dequeue_style('theme-cmsmasters-events-style');
			
			wp_dequeue_style('theme-cmsmasters-events-adaptive');
			
			echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/cmsmasters-events-style.less" type="text/css" media="screen" />';
			
			echo '<link rel="stylesheet/less" href="' . get_template_directory_uri() . '/css/less/cmsmasters-events-adaptive.less" type="text/css" media="screen" />';
		}
		
		dance_studio_regenerate_styles();
	}
}

add_action('wp_enqueue_scripts', 'dance_studio_developer_mode');


/* Google Fonts Generate Function */
if (!function_exists('dance_studio_theme_google_fonts_generate')) {

	function dance_studio_theme_google_fonts_generate() {
		$cmsmasters_option = dance_studio_get_global_options();
		
		
		global $cmsmasters_google_font_keys;
		
		
		$cmsmasters_google_font_keys = array();
		
		$keys = array();
		
		$fonts = '';
		
		
		foreach (cmsmasters_google_fonts_list() as $key => $value) {
			if ( 
				(isset($cmsmasters_option['dance-studio' . '_content_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_content_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_link_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_link_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_nav_title_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_nav_title_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_nav_dropdown_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_nav_dropdown_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h1_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h1_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h2_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h2_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h3_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h3_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h4_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h4_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h5_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h5_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_h6_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_h6_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_button_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_button_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_small_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_small_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_input_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_input_font_google_font'] && $key != '') || 
				(isset($cmsmasters_option['dance-studio' . '_quote_font_google_font']) && $key == $cmsmasters_option['dance-studio' . '_quote_font_google_font'] && $key != '') 
			) {
				$keys[] = $key;
			}
		}
		
		
		foreach ($keys as $key) {
			$fonts .= $key . '|';
			
			
			$font_array = explode(':', $key);
			
			
			$cmsmasters_google_font_keys[] = str_replace('+', ' ', $font_array[0]);
		}
		
		
		$fonts = str_replace('+', ' ', substr($fonts, 0, -1));
		
		
		cmsmasters_theme_google_font($fonts);
	}
	
}
add_action('wp_enqueue_scripts', 'dance_studio_theme_google_fonts_generate');
add_action('enqueue_block_editor_assets', 'dance_studio_theme_google_fonts_generate');



/* Google Fonts Enqueue Function */
if (!function_exists('cmsmasters_theme_google_font')) {

	function cmsmasters_theme_google_font($fonts, $font_name = '') {
		global $cmsmasters_google_font_keys;
		
		
		if ( 
			$font_name == '' || 
			($font_name != '' && is_array($cmsmasters_google_font_keys) && !in_array($font_name, $cmsmasters_google_font_keys)) 
		) {
			$font_id = ($font_name != '') ? '-' . str_replace(' ', '-', strtolower($font_name)) : '';
			
			$font_url = add_query_arg('family', urlencode($fonts), '//fonts.googleapis.com/css');
			
			
			wp_enqueue_style("cmsmasters-google-fonts{$font_id}", $font_url);
		}
	}

}



/* Google Fonts Font Family Substing Generate Function */
function dance_studio_get_google_font($font) {
	if ($font != '') {
		if (strpos($font, ':')) {
			$google_font_array = explode(':', $font);
			
			
			$google_font = "'" . str_replace('+', ' ', $google_font_array[0]) . "', ";
		} elseif (strpos($font, '&')) {
			$google_font_array = explode('&', $font);
			
			
			$google_font = "'" . str_replace('+', ' ', $google_font_array[0]) . "', ";
		} else {
			$google_font = "'" . str_replace('+', ' ', $font) . "', ";
		}
	} else {
		$google_font = '';
	}
	
	
	return $google_font;
}



/* Register Default Theme Sidebars */
function the_widgets_init() {
    if (!function_exists('register_sidebars')) {
        return;
    }
    
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'dance-studio'), 
            'id' => 'sidebar_default', 
            'description' => esc_html__('Widgets in this area will be shown in all left and right sidebars till you don\'t use custom sidebar.', 'dance-studio'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Bottom Sidebar', 'dance-studio'), 
            'id' => 'sidebar_bottom', 
            'description' => esc_html__('Widgets in this area will be shown at the bottom of middle block below the content and middle sidebar, but above footer.', 'dance-studio'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Archive Sidebar', 'dance-studio'), 
            'id' => 'sidebar_archive', 
            'description' => esc_html__('Widgets in this area will be shown in all left and right sidebars on archives pages.', 'dance-studio'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Search Sidebar', 'dance-studio'), 
            'id' => 'sidebar_search', 
            'description' => esc_html__('Widgets in this area will be shown in left or right sidebar on search page.', 'dance-studio'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
	
	
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if (isset($cmsmasters_option['dance-studio' . '_sidebar']) && sizeof($cmsmasters_option['dance-studio' . '_sidebar']) > 0) {
		foreach ($cmsmasters_option['dance-studio' . '_sidebar'] as $sidebar) {
			register_sidebar(array( 
				'name' => $sidebar, 
				'id' => generateSlug($sidebar, 45), 
				'description' => esc_html__('Custom sidebar created with cmsmasters admin panel.', 'dance-studio'), 
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
				'after_widget' => '</aside>', 
				'before_title' => '<h3 class="widgettitle">', 
				'after_title' => '</h3>' 
			) );
		}
	}
	
	
	if (CMSMASTERS_TIMETABLE) {
		unregister_sidebar('sidebar-event');
	}
	
	if (CMSMASTERS_WOOCOMMERCE) {
		register_sidebar(
			array(
				'name' => esc_html__('Shop Sidebar', 'dance-studio'), 
				'id' => 'shop-sidebar', 
				'description' => esc_html__('Widgets in this area will be shown in left or right sidebar on shop page.', 'dance-studio'), 
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
				'after_widget' => '</aside>', 
				'before_title' => '<h3 class="widgettitle">', 
				'after_title' => '</h3>'
			)
		);
	}
	
	if (CMSMASTERS_EVENTS_CALENDAR) {
		register_sidebar(
			array(
				'name' => esc_html__('Upcoming Events', 'dance-studio'), 
				'id' => 'upcoming-events', 
				'description' => esc_html__('Widgets in this area will be shown in left or right sidebar on shop page.', 'dance-studio'), 
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
				'after_widget' => '</aside>', 
				'before_title' => '<h3 class="widgettitle">', 
				'after_title' => '</h3>'
			)
		);
	}
}

add_action('widgets_init', 'the_widgets_init');



/* Register Theme Navigations */
register_nav_menus(array( 
    'primary' => 	esc_html__('Primary Navigation', 'dance-studio'), 
    'footer' => 	esc_html__('Footer Navigation', 'dance-studio'), 
	'top_line' => 	esc_html__('Top Line Navigation', 'dance-studio') 
));



/* Register Showing Home Page on Default WordPress Pages Menu */
function dance_studio_page_menu_args($args) {
    $args['show_home'] = true;
    
	
    return $args;
}

add_filter('wp_page_menu_args', 'dance_studio_page_menu_args');



/* Register Showing Home Page on Default WordPress Pages Menu */
function cmsmasters_custom_mega_menu_item_output($args) {
	$shcd_args = $args['args'];
	
	$shcd_attrs = $args['attrs'];
	
	$shcd_depth = $args['depth'];
	
	$shcd_item = $args['item'];
	
	$shcd_cols_count = $args['cols_count'];
	
	
	$item_output = '';
	
	
	if (!empty($shcd_item->color)) {
		$item_output .= '<style type="text/css"> ' . 
			'#header #navigation > .menu-item-' . $shcd_item->ID . ':hover > a, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . ' > a:hover, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.current-menu-parent > a, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.current-menu-item > a, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.menu-item-highlight > a { ' . 
				(($shcd_depth > 1 || ($shcd_depth == 1 && $shcd_cols_count == NULL)) ? 'background-' : '') . 'color:' . $shcd_item->color . ';' . 
			' } ';
		
		
		if ( 
			$shcd_depth == 0 || 
			($shcd_depth == 1 && $shcd_cols_count != NULL) 
		) {
			$item_output .= '#navigation > .menu-item-' . $shcd_item->ID . ':hover > a[data-tag]:before, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . ' > a[data-tag]:hover:before, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.current-menu-parent > a[data-tag]:before, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.current-menu-item > a[data-tag]:before, ' . 
			'#header #navigation .menu-item-' . $shcd_item->ID . '.menu-item-highlight > a[data-tag]:before { ' . 
				'background-color:' . $shcd_item->color . ';' . 
			' } ';
		}
		
		
		$item_output .= '</style>';
	}
	
	
	$item_output .= $shcd_args->before . 
		'<a' . $shcd_attrs;
	
	
	if (!empty($shcd_item->tag)) {
		$item_output .= ' data-tag="' . esc_attr($shcd_item->tag) . '"';
	}
	
	
	$item_output .= '>';
	
	
	if ($shcd_depth == 0) {
		$item_output .= '<span class="nav_bg_clr"';
		
		if (!empty($shcd_item->color)) {
			$item_output .= ' style="background-color:' . $shcd_item->color . ';"';
		}
		
		$item_output .= '></span>';
	}
	
	
	$item_output .= $shcd_args->link_before;
	
	
	if ( 
		($shcd_depth <= 1 && empty($shcd_item->hide_text)) || 
		($shcd_depth == 0 && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth == 1 && $shcd_cols_count == NULL && !empty($shcd_item->hide_text)) || 
		($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth > 1) 
	) {
		$item_output .= '<span';
		
		
		if (!empty($shcd_item->icon)) {
			$item_output .= ' class="' . $shcd_item->icon . '"';
		}
		
		
		$item_output .= '>' . 
			apply_filters('the_title', $shcd_item->title, $shcd_item->ID);
		
		
		if ( 
			($shcd_depth == 0 && !empty($shcd_item->subtitle)) || 
			($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->subtitle)) 
		) {
			$item_output .= '<span class="nav_subtitle">' . 
				$shcd_item->subtitle . 
			'</span>';
		}
		
		
		$item_output .= '</span>';
	}
	
	
	$item_output .= $shcd_args->link_after . 
		'</a>' . 
	$shcd_args->after;
	
	
	return $item_output;
}

add_filter('cmsmasters_mega_item_output', 'cmsmasters_custom_mega_menu_item_output');



/* Register wp_nav_menu() Fallback Function */
function dance_studio_fallback_menu($args) {
	echo '<div class="navigation_wrap">' . "\n" . 
		'<ul id="navigation">' . "\n";
	
	
	wp_list_pages(array( 
		'title_li' => '', 
		'link_before' => '<span class="nav_bg_clr"></span><span>', 
		'link_after' => '</span>' 
	));
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\n";
}



/* Register Post Formats, Feed Links, Post Thumbnails and Set Image Sizes*/
if (function_exists('add_theme_support')) {
	add_theme_support('post-formats', array( 
		'image', 
		'gallery', 
		'video', 
		'audio' 
	));
	
	
	function add_post_type_support_project($post) {
		$screen = get_current_screen();
		
		$post_type = $screen->post_type;
		
		
		if ($post_type == 'project') {
			add_theme_support('post-formats', array( 
				'gallery', 
				'video' 
			));
		}
	}
	
	add_action('load-post.php', 'add_post_type_support_project');
	
	add_action('load-post-new.php', 'add_post_type_support_project');
	
	
	
	// Add post-formats to post_type 'project'
	function dance_studio_add_post_formats_to_project() {
		add_post_type_support('project', 'post-formats');
		
		register_taxonomy_for_object_type('post_format', 'project');
	}
	
	add_action('init', 'dance_studio_add_post_formats_to_project', 11);

	
	
	add_theme_support('post-thumbnails');
	
	add_theme_support('title-tag');	
	
	add_theme_support('automatic-feed-links');
	
	
	add_theme_support('html5', array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption' 
	));
	
	
	$thumbnail_list = cmsmasters_image_thumbnail_list();
	
	
	if (!isset($content_width)) {
		$content_width = $thumbnail_list['cmsmasters-full-thumb']['width'];
	}
	
	
	set_post_thumbnail_size($thumbnail_list['post-thumbnail']['width'], $thumbnail_list['post-thumbnail']['height'], $thumbnail_list['post-thumbnail']['crop']);
	
	
	if (function_exists('add_image_size')) {
		foreach ($thumbnail_list as $key => $image_size) {
			if ($key != 'post-thumbnail') {
				add_image_size($key, $image_size['width'], $image_size['height'], (isset($image_size['crop']) ? isset($image_size['crop']) : false));
			}
		}
	}
	
	
	add_filter('image_size_names_choose', 'dance_studio_select_image_size');
}



/* Add Image Thumbnails Size to the List */
function dance_studio_select_image_size($sizes) {
	$thumbnail_list = cmsmasters_image_thumbnail_list();
	
	
	$new_sizes = array();
	
	
	foreach ($thumbnail_list as $key => $image_size) {
		if (isset($image_size['title'])) {
			$new_sizes[$key] = $image_size['title'];
		}
	}
	
	
	$sizes = array_merge($sizes, $new_sizes);
	
	
	return $sizes;
}



/* Register Visual Content Editor CSS Stylesheet */
function dance_studio_add_editor_styles() {
	add_editor_style('framework/admin/inc/css/custom-editor-style.css');
	
	
	add_editor_style('//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext');
}

$cmsmasters_wp_version = get_bloginfo('version');


if (version_compare($cmsmasters_wp_version, '5', '<') && !function_exists('is_gutenberg_page')) {
	add_action('init', 'dance_studio_add_editor_styles');
}



/* Register Removing 'More Text' From Excerpt */
function new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');



/* Register Custom Excerpt Length Function */
class Excerpt {
	var $length = 55;
	
	function __construct($length) {
		$this->length = $length;
		
		add_filter('excerpt_length', array($this, 'new_length'), 999);
	}
	
	public function new_length() {
		return $this->length;
	}
	
	function output() {
		the_excerpt();
	}
	
	function return_out() {
		return get_the_excerpt();
	}
}

function theme_excerpt($length = 55, $show = true) {
	if ($show) {
		$result = new Excerpt($length);
		
		$result->output();
	} else {
		$result = new Excerpt($length);
		
		return $result->return_out();
	}
}



/* Register Post Types in Author & Date Archive */
function dance_studio_post_author_archive($query) {
	if (isset($query) && !is_admin() && ($query->is_author || $query->is_date)) {
		$query->set('post_type', array( 
			'post', 
			'project', 
			'profile', 
			'campaign' 
		));
	}
	
	
	return $query;
}

add_action('pre_get_posts', 'dance_studio_post_author_archive');



/* Check Row p Wrapper */
function dance_studio_rowcheck($content) {
    $content = str_replace('[/cmsmasters_row]</p>', '[/cmsmasters_row]', $content);
    $content = str_replace('<p>[cmsmasters_row', '[cmsmasters_row', $content);
	
	
    return $content;
}



/* Register Removing 'p' Tags that Wrap Divs */
function cmsmasters_divpdel($content) {
	$block = '(address|article|aside|audio|blockquote|canvas|dd|div|dl|fieldset|figcaption|figure|footer|form|h1|h2|h3|h4|h5|h6|header|hgroup|hr|noscript|ol|output|pre|section|table|tfoot|ul|video|style|iframe)';
	
	
	$content = preg_replace('/^<\/p>/', '', $content);
	$content = preg_replace('/<p>$/', '', $content);
	$content = preg_replace('/<\/' . $block . '>(\s*)<\/p>/', '</\1>', $content);
	$content = preg_replace('/<' . $block . '([^>]+)>(\s*)<\/p>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<' . $block . '([^>]+)>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<\/' . $block . '>/', '</\1>', $content);
	$content = preg_replace('/<p><' . $block . '/', '<\1', $content);
	$content = preg_replace('/(<a\shref="[^"]*"\sid="[^"]*"\sclass="button[^"]*"[^>]*>[^<]+<\/a>\s*)<\/p>/', '\1', $content);
	
	
    return $content;
}



/* Generate Slug Function */
function generateSlug($phrase, $maxLength) {
	$result = strtolower($phrase);
	
	
	$result = preg_replace("/[^a-z0-9\s-]/", "", $result);
	$result = trim(preg_replace("/[\s-]+/", " ", $result));
	$result = trim(substr($result, 0, $maxLength));
	$result = preg_replace("/\s/", "-", $result);
	
	
	return $result;
}



/* Add Icons List to Database */
function dance_studio_add_global_icons() {
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$icons = $wp_filesystem->get_contents(get_template_directory() . '/' . CMSMASTERS_ADMIN . '/inc/fonts/config.json');
		
		$icons_custom = $wp_filesystem->get_contents(get_template_directory() . '/' . CMSMASTERS_ADMIN . '/inc/fonts/config-custom.json');
		
		
		$arr = json_decode($icons, true);
		
		$arr_custom = json_decode($icons_custom, true);
		
		
		update_option('cmsmasters_' . 'dance-studio' . '_icons', serialize($arr));
		
		update_option('cmsmasters_' . 'dance-studio' . '_icons_custom', serialize($arr_custom));
	}
}



/* Generate Icons List */
function cmsmasters_composer_icons() {
	$icons = get_option('cmsmasters_' . 'dance-studio' . '_icons');
	
	$icons_custom = get_option('cmsmasters_' . 'dance-studio' . '_icons_custom');
	
	
	$arr = unserialize($icons);
	
	$arr_custom = unserialize($icons_custom);
	
	$new_icons = '';
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_icons() { ' . "\n\t\t" . 
			'return { ' . "\n\t\t\t";
	
	
	if (!empty($arr_custom)) {
		foreach ($arr_custom['glyphs'] as $item) {
			if ($new_icons != $item['src']) {
				if ($new_icons != '') {
					$out = substr($out, 0, -4);
					
					$out .= ' ' . "\n\t\t\t" . '}, ' . "\n\t\t\t";
				}
				
				
				$out .= "'" . $item['src'] . "' : { \n\t";
				
				
				$new_icons = $item['src'];
			}
			
			
			$out .= "\t\t\t'" . $item['css'] . "' : '" . $arr_custom['css_prefix_text'] . $item['css'] . "', \n\t";
		}
	}
	
	
	if (!empty($arr)) {
		foreach ($arr['glyphs'] as $item) {
			if ($new_icons != $item['src']) {
				if ($new_icons != '') {
					$out = substr($out, 0, -4);
					
					$out .= ' ' . "\n\t\t\t" . '}, ' . "\n\t\t\t";
				}
				
				
				$out .= "'" . $item['src'] . "' : { \n\t";
				
				
				$new_icons = $item['src'];
			}
			
			
			$out .= "\t\t\t'" . $item['css'] . "' : '" . $arr['css_prefix_text'] . $item['css'] . "', \n\t";
		}
	}
	
	
	$out = substr($out, 0, -4);
	
	$out .= ' ' . "\n\t\t\t" . '} ' . "\n\t\t" . 
			'}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo dance_studio_return_content($out);
}



/* Generate CSS Rules */
function cmsmasters_color_css($rule, $color) {
	return $rule . ':' . $color . ';';
}



/* Generate RGB from HEX/RGBA Color */
function color2rgb($color) {
	return (preg_match('/^#[a-f0-9]{3}$/i', $color) || preg_match('/^#[a-f0-9]{6}$/i', $color)) ? hex2rgb($color) : rgba2rgb($color);
}



/* Generate RGB Color from HEX */
function hex2rgb($color) {
	$new_color = substr($color, 1);
	
	$color_len = strlen($new_color);
	
	
	$result = '';
	
	
	if ($color_len == 6) {
		$rgb = str_split($new_color, 2);
	} elseif ($color_len == 3) {
		$rgb = str_split($new_color, 1);
	}
	
	
	foreach ($rgb as $number) {
		$result .= hexdec((strlen($number) == 2) ? $number : $number . $number) . ', ';
	}
	
	
	$rgb_color = substr($result, 0, -2);
	
	
	return $rgb_color;
}



/* Generate HEX Color from RGB */
function rgb2hex($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$hex_color = '#' . dechex($r) . dechex($g) . dechex($b);
	
	
	return $hex_color;
}



/* Generate RGB Color from RGBA */
function rgba2rgb($rgba) {
	$newRGBAs = explode(',', $rgba);
	
	$r = trim(substr($newRGBAs[0], 5));
	$g = trim($newRGBAs[1]);
	$b = trim($newRGBAs[2]);
	
	
	$rgb_color = "rgb({$r}, {$g}, {$b})";
	
	
	return $rgb_color;
}



/* Generate HSL Color from RGB */
function rgb2hsl($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$oldR = $r;
	$oldG = $g;
	$oldB = $b;
	
	
	$r /= 255;
	$g /= 255;
	$b /= 255;
	
	
	$max = max($r, $g, $b);
	$min = min($r, $g, $b);
	
	
	$h;
	$s;
	
	
	$l = ($max + $min) / 2;
	$d = $max - $min;
	
	
	if ($d == 0) {
		$h = $s = 0;
	} else {
		$s = $d / (1 - abs(2 * $l - 1));
		
		
		switch ($max) {
		case $r:
			$h = 60 * fmod((($g - $b) / $d), 6);
			
			
			if ($b > $g) {
				$h += 360;
			}
			
			
			break;
		case $g:
			$h = 60 * (($b - $r) / $d + 2);
			
			
			break;
		case $b:
			$h = 60 * (($r - $g) / $d + 4);
			
			
			break;
		}
	}
	
	
	return array(round($h, 2), round($s, 2), round($l, 2));
}



/* Generate RGB Color from HSL */
function hsl2rgb($h, $s, $l) {
	$r;
	$g;
	$b;
	
	
	$c = (1 - abs(2 * $l - 1)) * $s;
	$x = $c * (1 - abs(fmod(($h / 60), 2) - 1));
	$m = $l - ($c / 2);
	
	
	if ($h < 60) {
		$r = $c;
		$g = $x;
		$b = 0;
	} else if ($h < 120) {
		$r = $x;
		$g = $c;
		$b = 0;	
	} else if ($h < 180) {
		$r = 0;
		$g = $c;
		$b = $x;	
	} else if ($h < 240) {
		$r = 0;
		$g = $x;
		$b = $c;
	} else if ($h < 300) {
		$r = $x;
		$g = 0;
		$b = $c;
	} else {
		$r = $c;
		$g = 0;
		$b = $x;
	}
	
	
	$r = ($r + $m) * 255;
	$g = ($g + $m) * 255;
	$b = ($b + $m) * 255;
	
	
	return floor($r) . ', ' . floor($g) . ', ' . floor($b);
}



/* Convert Embedded Video URL Function */
function embedConvert($url) {
	if (str_replace('youtube', '', $url) !== $url) {
		parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
		
		$result = 'http://www.youtube.com/embed/' . $my_array_of_vars['v'] . '?autoplay=1&autohide=1&border=0&egm=0&showinfo=0';
	} elseif (str_replace('vimeo', '', $url) !== $url) {
		$video_id = substr(parse_url($url, PHP_URL_PATH), 1);
		
		$result = 'http://player.vimeo.com/video/' . $video_id . '?autoplay=1';
	} else {
		$result = '';
	}
	
	
	return $result;
}



/* Return of get_template_part() */
function load_template_part($template_name, $part_name = null) {
    ob_start();
	
	
    get_template_part($template_name, $part_name);
	
	
    $out = ob_get_contents();
	
	
    ob_end_clean();
	
	
    return $out;
}



/* Return of get_template_part() File Function */
function return_template_part($post_format = 'standard', $post_layout = 'default', $post_page = 'page', $post_type = 'blog') {
    get_template_part('framework/postType/' . $post_type . '/' . (($post_page) ? $post_page . '/' : '') . (($post_layout) ? $post_layout . '/' : '') . $post_format);
	
	
	$out = $post_type . '_' . (($post_page) ? $post_page . '_' : '') . (($post_layout) ? $post_layout . '_' : '') . $post_format;
	
	
	return $out();
}



/* Regenerate Custom Styles Function */
function dance_studio_regenerate_styles() {
	$custom_css_fonts = dance_studio_theme_fonts();
	
	$custom_css_colors_primary = dance_studio_theme_colors_primary();
	
	$custom_css_colors_secondary = dance_studio_theme_colors_secondary();
	
	
	$custom_css = $custom_css_fonts . $custom_css_colors_primary . $custom_css_colors_secondary;
	
	
	dance_studio_write_styles($custom_css_fonts, 'dance-studio' . '_fonts');
	
	dance_studio_write_styles($custom_css_colors_primary, 'dance-studio' . '_colors_primary');
	
	dance_studio_write_styles($custom_css_colors_secondary, 'dance-studio' . '_colors_secondary');
	
	
	dance_studio_write_styles($custom_css);
}



/* Regenerate Custom Styles Function for plugins */
function cmsmasters_regenerate_styles() {
	dance_studio_regenerate_styles();
}



/* Write Custom Styles to File Function */
function dance_studio_write_styles($styles, $filename = '') {
	$upload_dir = wp_upload_dir();
	
	
	$style_dir = str_replace('\\', '/', $upload_dir['basedir'] . '/cmsmasters_styles');
	
	
	$is_dir = dance_studio_create_folder($style_dir);
	
	
	if ($is_dir === false) {
		update_option('cmsmasters_style_dir_writable_' . 'dance-studio', 'false');
		
		update_option('cmsmasters_style_exists_' . 'dance-studio', 'false');
		
		
		return;
	}
	
	
	$file = trailingslashit($style_dir) . (($filename != '') ? $filename : 'dance-studio') . '.css';
	
	
	$created = dance_studio_create_file($file, $styles);
	
	
	if ($created === true) {
		update_option('cmsmasters_style_dir_writable_' . 'dance-studio', 'true');
		
		update_option('cmsmasters_style_exists_' . 'dance-studio', 'true');
	}
}



/* Create Folder Function */
function dance_studio_create_folder(&$folder, $addindex = true) {
	if (is_dir($folder) && $addindex == false) {
		return true;
	}
	
	
	$created = wp_mkdir_p(trailingslashit($folder));
	
	
	@chmod($folder, 0755);
	
	
	if ($addindex == false) {
		return $created;
	}
	
	
	$index_file = trailingslashit($folder) . 'index.php';
	
	
	if (file_exists($index_file)) {
		return $created;
	}
	
	
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$wp_filesystem->put_contents(
			$index_file,
			"<?php\n// Silence is golden.\n",
			FS_CHMOD_FILE
		);
	}
	
	
	return $created;
}



/* Create File Function */
function dance_studio_create_file($file, $content = '', $verifycontent = true) {
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$created = $wp_filesystem->put_contents(
			$file,
			$content,
			FS_CHMOD_FILE
		);
	}
	
	
	if ($created !== false) {
		$created = true;
	}
	
	
	return $created;
}



/* Twitter Shortcode Function */
function cmsmasters_get_tweets($username, $count) {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	locate_template(CMSMASTERS_CONTENT_COMPOSER_PATH . 'inc/twitter/OAuth.php', true);
	
	
	$excludeReplies = 1;
	$name = $username;
	$numTweets = $count;
	$cacheTime = 1;
	$backupName = 'cmsmasters_' . 'dance-studio' . '_tweets_list_backup';
	
	
	$connection = new TwitterOAuth( 
		(($cmsmasters_option['dance-studio' . '_api_key'] != '') ? $cmsmasters_option['dance-studio' . '_api_key'] : ''), 
		(($cmsmasters_option['dance-studio' . '_api_secret'] != '') ? $cmsmasters_option['dance-studio' . '_api_secret'] : ''), 
		(($cmsmasters_option['dance-studio' . '_access_token'] != '') ? $cmsmasters_option['dance-studio' . '_access_token'] : ''), 
		(($cmsmasters_option['dance-studio' . '_access_token_secret'] != '') ? $cmsmasters_option['dance-studio' . '_access_token_secret'] : '')
	);
	
	
	$totalToFetch = ($excludeReplies) ? max(50, $numTweets * 3) : $numTweets;
	
	
	$fetchedTweets = $connection->get( 
		'https://api.twitter.com/1.1/statuses/user_timeline.json', 
		array( 
			'screen_name' => $name, 
			'count' => $totalToFetch,
			'exclude_replies' => true 
		) 
	);
	
	
	if ($connection->http_code != 200) {
		$tweets = get_option($backupName);
	} else {
		$limitToDisplay = min($numTweets, count($fetchedTweets));
		
		
		for ($i = 0; $i < $limitToDisplay; $i++) {
			$tweet = $fetchedTweets[$i];
			
			$name = $tweet->user->name;
			
			$permalink = 'http://twitter.com/' . $name . '/status/' . $tweet->id_str;
			
			$image = $tweet->user->profile_image_url;
			
			$pattern = '/(http|https):(\S)+/';
			
			$replace = '<a href="${0}" target="_blank" rel="nofollow">${0}</a>';
			
			$text = preg_replace($pattern, $replace, $tweet->text);
			
			$time = $tweet->created_at;
			$time = date_parse($time);
			
			$uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);
			
			
			$tweets[] = array( 
				'text' => $text, 
				'name' => $name, 
				'permalink' => $permalink, 
				'image' => $image, 
				'time' => $uTime 
			);
		}
		
		
		update_option($backupName, $tweets);
	}
	
	
	return $tweets;
}



/* Theme Header Styles & Custom CSS Function */
function dance_studio_theme_header_styles() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$header_top_height = (($cmsmasters_option['dance-studio' . '_header_top_height'] !== '') ? $cmsmasters_option['dance-studio' . '_header_top_height'] : '35');
	
	$header_mid_height = (($cmsmasters_option['dance-studio' . '_header_mid_height'] !== '') ? $cmsmasters_option['dance-studio' . '_header_mid_height'] : '77');
	
	$header_bot_height = (($cmsmasters_option['dance-studio' . '_header_bot_height'] !== '') ? $cmsmasters_option['dance-studio' . '_header_bot_height'] : '50');
	
	
	$out = "
	.header_top,
	.header_top_outer,
	.header_top_inner, 
	.header_top_aligner, 
	.header_top_donation_but {
		height : {$header_top_height}px;
	}
	
	.fixed_header .header_mid,
	.fixed_header .header_mid_outer,
	.fixed_header .header_mid .header_mid_inner,
	.fixed_header .header_mid .header_mid_inner .search_wrap_inner,
	.fixed_header .header_mid .header_mid_inner .header_donation_but_wrap_inner,
	.fixed_header .header_mid .header_mid_inner .slogan_wrap_inner,
	.fixed_header .header_mid .header_mid_inner .social_wrap_inner,
	.fixed_header .header_mid .header_mid_inner nav > div > ul,
	.fixed_header .header_mid .header_mid_inner nav > div > ul > li,
	.fixed_header .header_mid .header_mid_inner .logo,
	.fixed_header .header_mid .header_mid_inner .resp_nav_wrap_inner {
		height : 100%;
	}
	
	.header_mid,
	.header_mid_outer,
	.header_mid .header_mid_inner,
	.header_mid .header_mid_inner .search_wrap_inner,
	.header_mid .header_mid_inner .header_donation_but_wrap_inner,
	.header_mid .header_mid_inner .slogan_wrap_inner,
	.header_mid .header_mid_inner .social_wrap_inner,
	.header_mid .header_mid_inner nav > div > ul,
	.header_mid .header_mid_inner nav > div > ul > li,
	.header_mid .header_mid_inner .logo,
	.header_mid .header_mid_inner .resp_nav_wrap_inner {
		height : {$header_mid_height}px;
	}
	
	.header_bot,
	.header_bot_outer,
	.header_bot .header_bot_inner nav > div > ul,
	.header_bot .header_bot_inner nav > div > ul > li {
		height : {$header_bot_height}px;
	}
	
	#page.cmsmasters_heading_after_header #middle, 
	#page.cmsmasters_heading_under_header #middle .headline .headline_outer {
		padding-top : {$header_mid_height}px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_top #middle, 
	#page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_top_height) . "px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
	#page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_bot_height) . "px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
	#page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_top_height + $header_bot_height) . "px;
	}
	
	.cmsmasters_added_product_info {
		margin-top : " . ($cmsmasters_option['dance-studio' . '_header_mid_height'] - 10) . "px;
	}
	
	.header_mid_scroll .cmsmasters_added_product_info {
		margin-top : " . ((int)($cmsmasters_option['dance-studio' . '_header_mid_height']) / 3 * 2 ) . "px;
	}
	
	.header_mid .header_mid_inner .cmsmasters_dynamic_cart .widget_shopping_cart_content {
		margin-top: -10px;
	}
	
	.header_mid.header_mid_scroll .header_mid_inner .cmsmasters_dynamic_cart .widget_shopping_cart_content {
		margin-top: -5px;
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top,
		.header_top_outer,
		.header_top_inner,
		.header_top_aligner,
		.header_top_donation_but,
		.header_mid_outer,
		.header_mid .header_mid_inner .search_wrap.search_opened,
		.header_mid .header_mid_inner nav > div > ul,
		.header_mid .header_mid_inner nav > div > ul > li,
		.header_bot,
		.header_bot_outer,
		.header_bot .header_bot_inner nav > div > ul,
		.header_bot .header_bot_inner nav > div > ul > li {
			height : auto;
		}
		
		
		.header_mid .header_mid_inner .cmsmasters_dynamic_cart,
		.header_mid .header_mid_inner .logo_wrap .logo,
		.header_mid .header_mid_inner .resp_nav_wrap .resp_nav_wrap_inner,
		.header_mid .header_mid_inner .search_wrap,
		.header_mid_inner .slogan_wrap,
		.header_mid_inner .social_wrap {
			height : {$header_mid_height}px;
		}
		
		.header_mid,
		.header_mid .header_mid_inner {
			height : auto;
		}
		
		#page.cmsmasters_heading_after_header #middle, 
		#page.cmsmasters_heading_under_header #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_top #middle, 
		#page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
		#page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
		#page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
			padding-top : 0 !important;
		}
	}
	
	@media only screen and (max-width: 767px) {
		.header_bot,
		.header_mid .header_mid_inner .search_wrap {
			height : auto;
		}
	}
	
	@media only screen and (max-width: 540px) {
		.header_mid .header_mid_outer .header_mid_inner .resp_nav_wrap {
			height : {$header_mid_height}px;
		}
	}
";
	
	
	if ($cmsmasters_option['dance-studio' . '_logo_type'] == 'text' && $cmsmasters_option['dance-studio' . '_logo_custom_color']) {
		$out .= "
	#header a.logo span.title {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_logo_title_color']) . "
	}
	
	#header a.logo span.title_text {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_logo_subtitle_color']) . "
	}
";
	}
	
	
	if (is_404()) {
		if (
			$cmsmasters_option['dance-studio' . '_error_bg_img_enable'] && 
			$cmsmasters_option['dance-studio' . '_error_bg_image'] != ''
		) {
			$error_bg_image = explode('|', $cmsmasters_option['dance-studio' . '_error_bg_image']);
			
			
			if (is_numeric($error_bg_image[0])) {
				$error_bg_image_url = wp_get_attachment_image_src((int) $error_bg_image[0], 'full');
			}
			
			
			$out .= "
	.error .error_bg {
		background-image : " . (!empty($cmsmasters_option['dance-studio' . '_error_bg_image']) ? 'url(' . ((is_numeric($error_bg_image[0])) ? $error_bg_image_url[0] : $error_bg_image[1]) . ')' : 'none') . ";
		background-position : " . (!empty($cmsmasters_option['dance-studio' . '_error_bg_pos']) ? $cmsmasters_option['dance-studio' . '_error_bg_pos'] : 'top center') . ";
		background-repeat : " . (!empty($cmsmasters_option['dance-studio' . '_error_bg_rep']) ? $cmsmasters_option['dance-studio' . '_error_bg_rep'] : 'repeat') . ";
		background-attachment : " . (!empty($cmsmasters_option['dance-studio' . '_error_bg_att']) ? $cmsmasters_option['dance-studio' . '_error_bg_att'] : 'scroll') . ";
		background-size : " . (!empty($cmsmasters_option['dance-studio' . '_error_bg_size']) ? $cmsmasters_option['dance-studio' . '_error_bg_size'] : 'auto') . ";
	}
";
		}
		
		
		$out .= "
	.error .error_bg {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_error_bg_color']) . "
	}
	
	.error .error_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_error_color']) . "
	}
";
	}
	
	
	if ($cmsmasters_option['dance-studio' . '_custom_css'] != '') {
		$out .= stripslashes($cmsmasters_option['dance-studio' . '_custom_css']);
	}
	
	
	return $out;
}



/* Theme Background Styles Function */
function dance_studio_theme_bg_styles() {
	global $post;
	
	
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = $post->ID;
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}
	
	
	$out = "";
	
	
	if ($cmsmasters_option['dance-studio' . '_theme_layout'] == 'boxed') {
		$cmsmasters_bg_default = 'true';
		
		
		if (
			is_singular() || 
			(CMSMASTERS_WOOCOMMERCE && is_shop())
		) {
			$cmsmasters_bg_default = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_default', true);
		}
		
		
		if ($cmsmasters_bg_default == 'false') {
			$cmsmasters_bg_col = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_col', true);
			$cmsmasters_bg_img_enable = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_img_enable', true);
			$cmsmasters_bg_img_str = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_img', true);
			$cmsmasters_bg_pos = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_pos', true);
			$cmsmasters_bg_rep = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_rep', true);
			$cmsmasters_bg_att = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_att', true);
			$cmsmasters_bg_size = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_size', true);
		} else {
			$cmsmasters_bg_col = $cmsmasters_option['dance-studio' . '_bg_col'];
			$cmsmasters_bg_img_enable = $cmsmasters_option['dance-studio' . '_bg_img_enable'];
			$cmsmasters_bg_img_str = $cmsmasters_option['dance-studio' . '_bg_img'];
			$cmsmasters_bg_pos = $cmsmasters_option['dance-studio' . '_bg_pos'];
			$cmsmasters_bg_rep = $cmsmasters_option['dance-studio' . '_bg_rep'];
			$cmsmasters_bg_att = $cmsmasters_option['dance-studio' . '_bg_att'];
			$cmsmasters_bg_size = $cmsmasters_option['dance-studio' . '_bg_size'];
		}
		
		
		$cmsmasters_bg_img = (!empty($cmsmasters_bg_img_str) ? explode('|', $cmsmasters_bg_img_str) : $cmsmasters_bg_img_str);
		$cmsmasters_bg_img_url = (isset($cmsmasters_bg_img[0]) && is_numeric($cmsmasters_bg_img[0]) ? wp_get_attachment_image_src((int) $cmsmasters_bg_img[0], 'full') : '');
		$cmsmasters_bg_img_src = (is_array($cmsmasters_bg_img) ? 'url(' . ((is_numeric($cmsmasters_bg_img[0])) ? $cmsmasters_bg_img_url[0] : $cmsmasters_bg_img[1]) . ')' : 'none');
		
		
		$out .= "
	body {
		background-color : {$cmsmasters_bg_col};";
		
		if ($cmsmasters_bg_img_enable) {
			$out .= "
		background-image : {$cmsmasters_bg_img_src};
		background-position : {$cmsmasters_bg_pos};
		background-repeat : {$cmsmasters_bg_rep};
		background-attachment : {$cmsmasters_bg_att};
		background-size : {$cmsmasters_bg_size};
		";
		}
		
		$out .= "
	}";
	}
	
	
	return $out;
}



/* Theme Footer Styles */
function cmsmasters_theme_footer_styles() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$footer_height = (($cmsmasters_option['dance-studio' . '_footer_height'] !== '') ? $cmsmasters_option['dance-studio' . '_footer_height'] : '400');
	
	
	$out = "
	#footer.cmsmasters_footer_default .footer_inner {
		min-height:{$footer_height}px;
	}
	
	.fixed_footer #main {
		margin-bottom:{$footer_height}px;
	}
";


	return $out;
}



/* Theme Custom Styles */
function dance_studio_theme_custom_styles() {
	echo '<style type="text/css">' . 
		dance_studio_theme_header_styles() . 
		dance_studio_theme_bg_styles() . 
		cmsmasters_theme_footer_styles() . 
	'</style>';
}

add_action('wp_head', 'dance_studio_theme_custom_styles');



/* Theme Footer Scripts Function */
function dance_studio_theme_footer_scripts() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if ($cmsmasters_option['dance-studio' . '_custom_js'] != '') {
		echo "
<script type=\"text/javascript\">
	" . stripslashes($cmsmasters_option['dance-studio' . '_custom_js']) . "
</script>
";
	}
}

add_action('wp_print_footer_scripts', 'dance_studio_theme_footer_scripts');



/* Theme Page Layout and Scheme Function */
function dance_studio_theme_page_layout_scheme() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}
	
	
	if (
		is_404() || 
		is_attachment() || 
		is_singular('project') || 
		is_singular('profile') || 
		is_singular('donation')
	) {
		$cmsmasters_layout = 'fullwidth';
	} elseif (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_layout = get_post_meta($cmsmasters_page_id, 'cmsmasters_layout', true);
	} elseif (CMSMASTERS_EVENTS_CALENDAR && tribe_is_event_query() && isset($cmsmasters_option['dance-studio' . '_events_layout'])) {
		$cmsmasters_layout = $cmsmasters_option['dance-studio' . '_events_layout'];
	} elseif (is_archive() || is_home()) {
		$cmsmasters_layout = $cmsmasters_option['dance-studio' . '_archives_layout'];
	} elseif (is_search()) {
		$cmsmasters_layout = $cmsmasters_option['dance-studio' . '_search_layout'];
	} else {
		$cmsmasters_layout = $cmsmasters_option['dance-studio' . '_other_layout'];
	}
	
	
	if ($cmsmasters_layout == '') {
		$cmsmasters_layout = $cmsmasters_option['dance-studio' . '_layout'];
	}
	
	
	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_page_scheme = get_post_meta($cmsmasters_page_id, 'cmsmasters_page_scheme', true);
	} else {
		$cmsmasters_page_scheme = 'default';
	}
	
	if (!isset($cmsmasters_page_scheme) || $cmsmasters_page_scheme == '') {
		$cmsmasters_page_scheme = 'default';
	}
	
	
	return array($cmsmasters_layout, $cmsmasters_page_scheme);
}



/* Register Moving 'style' Tags from Shortcodes to Content Start */
function dance_studio_global_shortcodes_styles_move($content) {
	preg_match_all("/(?<!['\"])<style.*?>([^`]*?)<\/style>/", $content, $new_content);
	
	$nostyle_content = preg_replace("/(?<!['\"])<style.*?>([^`]*?)<\/style>/", '', $content);
	
	
	$style_content = '<style type="text/css">';
	
	
	foreach ($new_content[1] as $new_content_part) {
		$style_content .= $new_content_part;
	}
	
	
	$style_content .= '</style>';
	
	
	$style_content = preg_replace('/<p>/', '', $style_content);
	$style_content = preg_replace('/<\/p>/', '', $style_content);
	
	
    $content = $style_content . $nostyle_content;
	
	
    return $content;
}

add_filter('the_content', 'dance_studio_global_shortcodes_styles_move', 11, 2);
add_filter('widget_text_content', 'dance_studio_global_shortcodes_styles_move', 11, 3);


function dance_studio_row_checker($data) {
	$out = dance_studio_rowcheck($data);
	
	return $out;
}

add_filter('the_content', 'dance_studio_row_checker', 10, 2);



/* Project Post Type Registration Rename */
function dance_studio_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'dance-studio'), 
		'singular_name' => 			esc_html__('Project', 'dance-studio'), 
		'menu_name' => 				esc_html__('Projects', 'dance-studio'), 
		'all_items' => 				esc_html__('All Projects', 'dance-studio'), 
		'add_new' => 				esc_html__('Add New', 'dance-studio'), 
		'add_new_item' => 			esc_html__('Add New Project', 'dance-studio'), 
		'edit_item' => 				esc_html__('Edit Project', 'dance-studio'), 
		'new_item' => 				esc_html__('New Project', 'dance-studio'), 
		'view_item' => 				esc_html__('View Project', 'dance-studio'), 
		'search_items' => 			esc_html__('Search Projects', 'dance-studio'), 
		'not_found' => 				esc_html__('No projects found', 'dance-studio'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'dance-studio') 
	);
}

// add_filter('cmsmasters_project_labels_filter', 'dance_studio_project_labels');


function dance_studio_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'dance-studio'), 
		'singular_name' => 			esc_html__('Project Category', 'dance-studio') 
	);
}

// add_filter('cmsmasters_pj_categs_labels_filter', 'dance_studio_pj_categs_labels');


function dance_studio_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'dance-studio'), 
		'singular_name' => 			esc_html__('Project Tag', 'dance-studio') 
	);
}

// add_filter('cmsmasters_pj_tags_labels_filter', 'dance_studio_pj_tags_labels');



/* Profile Post Type Registration Rename */
function dance_studio_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'dance-studio'), 
		'singular_name' => 			esc_html__('Profiles', 'dance-studio'), 
		'menu_name' => 				esc_html__('Profiles', 'dance-studio'), 
		'all_items' => 				esc_html__('All Profiles', 'dance-studio'), 
		'add_new' => 				esc_html__('Add New', 'dance-studio'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'dance-studio'), 
		'edit_item' => 				esc_html__('Edit Profile', 'dance-studio'), 
		'new_item' => 				esc_html__('New Profile', 'dance-studio'), 
		'view_item' => 				esc_html__('View Profile', 'dance-studio'), 
		'search_items' => 			esc_html__('Search Profiles', 'dance-studio'), 
		'not_found' => 				esc_html__('No Profiles found', 'dance-studio'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'dance-studio') 
	);
}

// add_filter('cmsmasters_profile_labels_filter', 'dance_studio_profile_labels');


function dance_studio_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'dance-studio'), 
		'singular_name' => 			esc_html__('Profile Category', 'dance-studio') 
	);
}

// add_filter('cmsmasters_pl_categs_labels_filter', 'dance_studio_pl_categs_labels');



/* Cmsmasters Ajax like callback */
function cmsmasters_ajax_like_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_like-nonce') ){
		$post_ID = intval( $_POST['id'] );
		
		$ip = getenv('REMOTE_ADDR');
		
		$ip_name = str_replace('.', '-', $ip);
		
		
		if ($post_ID != '') {
			$likes = (get_post_meta($post_ID, 'cmsmasters_likes', true) != '') ? get_post_meta($post_ID, 'cmsmasters_likes', true) : '0';
			
			
			$ipPost = new WP_Query(array( 
				'post_type' => 		'cmsmastersLike', 
				'post_status' => 	'draft', 
				'post_parent' => 	$post_ID, 
				'name' => 			$ip_name 
			));
			
			
			$ipCheck = $ipPost->posts;
			
			
			if (isset($_COOKIE['like-' . $post_ID]) || count($ipCheck) != 0) {
				echo esc_html($likes);
			} else {
				$plusLike = $likes + 1;
				
				
				update_post_meta($post_ID, 'cmsmasters_likes', $plusLike);
				
				
				setcookie('like-' . $post_ID, time(), time() + 31536000, '/');
				
				
				wp_insert_post(array( 
					'post_type' => 		'cmsmastersLike', 
					'post_status' => 	'draft', 
					'post_parent' => 	$post_ID, 
					'post_name' => 		$ip_name, 
					'post_title' => 	$ip 
				));
				
				
				echo esc_html($plusLike);
			}
		}
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_like', 'cmsmasters_ajax_like_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_like', 'cmsmasters_ajax_like_callback');



/* Cmsmasters Ajax Import Settings callback */
function cmsmasters_ajax_import_settings_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_import_settings-nonce') ){
		if (isset($_POST['settings'])) {
			$cmsmasters_php_ver = phpversion();
			
			
			if (version_compare($cmsmasters_php_ver, '5.4.0', '<')) {
				$settings = json_decode(pack("H*", $_POST['settings']), true);
			} else {
				$settings = json_decode(hex2bin($_POST['settings']), true);
			}
			
			
			foreach ($settings as $name => $value) {
				update_option($name, $value);
			}
			
			
			dance_studio_regenerate_styles();
		}
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_import_settings', 'cmsmasters_ajax_import_settings_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_import_settings', 'cmsmasters_ajax_import_settings_callback');



/* Cmsmasters Ajax Export Settings callback */
function cmsmasters_ajax_export_settings_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_export_settings-nonce') ){
		
		$cmsmasters_global_settings = array( 
			'cmsmasters_options_' . 'dance-studio' . '_general', 
			'cmsmasters_options_' . 'dance-studio' . '_bg', 
			'cmsmasters_options_' . 'dance-studio' . '_header', 
			'cmsmasters_options_' . 'dance-studio' . '_content', 
			'cmsmasters_options_' . 'dance-studio' . '_footer', 
			'cmsmasters_options_' . 'dance-studio' . '_font_content', 
			'cmsmasters_options_' . 'dance-studio' . '_font_link', 
			'cmsmasters_options_' . 'dance-studio' . '_font_nav', 
			'cmsmasters_options_' . 'dance-studio' . '_font_heading', 
			'cmsmasters_options_' . 'dance-studio' . '_font_other', 
			'cmsmasters_options_' . 'dance-studio' . '_element_sidebar', 
			'cmsmasters_options_' . 'dance-studio' . '_element_icon', 
			'cmsmasters_options_' . 'dance-studio' . '_element_lightbox', 
			'cmsmasters_options_' . 'dance-studio' . '_element_sitemap', 
			'cmsmasters_options_' . 'dance-studio' . '_element_error', 
			'cmsmasters_options_' . 'dance-studio' . '_element_code', 
			'cmsmasters_options_' . 'dance-studio' . '_element_recaptcha', 
			'cmsmasters_options_' . 'dance-studio' . '_single_post', 
			'cmsmasters_options_' . 'dance-studio' . '_single_project', 
			'cmsmasters_options_' . 'dance-studio' . '_single_profile'
		);

		$wp_global_settings = array( 
			'thumbnail_size_w', 
			'thumbnail_size_h', 
			'medium_size_w', 
			'medium_size_h', 
			'large_size_w', 
			'large_size_h', 
			'theme_mods_' . 'dance-studio', 
			'sidebars_widgets', 
			'widget_custom-advertisement', 
			'widget_akismet_widget', 
			'widget_archives', 
			'widget_calendar', 
			'widget_categories', 
			'widget_custom-contact-form', 
			'widget_custom-contact-info', 
			'widget_nav_menu', 
			'widget_custom-divider', 
			'widget_custom-video', 
			'widget_custom-facebook', 
			'widget_custom-flickr', 
			'widget_custom-html5-audio', 
			'widget_custom-html5-video', 
			'widget_custom-latest-projects', 
			'widget_layerslider_widget', 
			'widget_meta', 
			'widget_pages', 
			'widget_custom-popular-projects', 
			'widget_custom-posts-tabs', 
			'widget_custom-recent-comments', 
			'widget_custom-recent-posts', 
			'widget_rev-slider-widget', 
			'widget_rss', 
			'widget_search', 
			'widget_tag_cloud', 
			'widget_text', 
			'widget_custom-twitter', 
			'widget_icl_lang_sel_widget' 
		);


		$cmsmasters_global_colors = array();


		foreach (dance_studio_all_color_schemes_list() as $key => $value) {
			$cmsmasters_global_colors[] = 'cmsmasters_options_' . 'dance-studio' . '_color_' . $key;
		}


		$options = array_merge($cmsmasters_global_settings, $cmsmasters_global_colors, $wp_global_settings);


		$settings = array();


		foreach ($options as $option) {
			if (get_option($option)) {
				$settings[$option] = get_option($option);
			}
		}


		$result = bin2hex(json_encode($settings));


		dance_studio_return_content($result);
		
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_export_settings', 'cmsmasters_ajax_export_settings_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_export_settings', 'cmsmasters_ajax_export_settings_callback');

