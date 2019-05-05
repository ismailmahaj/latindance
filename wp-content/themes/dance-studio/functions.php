<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('dance_studio_system_fonts_list')) {
	function dance_studio_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('dance_studio_get_google_fonts_list')) {
	function dance_studio_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'dance-studio'), 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900' => 'Roboto', 
			'Roboto+Slab:300,300italic,400,400italic' => 'Roboto Slab',
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('dance_studio_text_transform_list')) {
	function dance_studio_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'dance-studio'), 
			'uppercase' => esc_html__('uppercase', 'dance-studio'), 
			'lowercase' => esc_html__('lowercase', 'dance-studio'), 
			'capitalize' => esc_html__('capitalize', 'dance-studio'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('dance_studio_text_decoration_list')) {
	function dance_studio_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'dance-studio'), 
			'underline' => esc_html__('underline', 'dance-studio'), 
			'overline' => esc_html__('overline', 'dance-studio'), 
			'line-through' => esc_html__('line-through', 'dance-studio'), 
		);

		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('dance_studio_custom_color_schemes_list')) {
	function dance_studio_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'dance-studio'), 
			'second' => esc_html__('Custom 2', 'dance-studio'), 
			'third' => esc_html__('Custom 3', 'dance-studio')
		);
		
		
		return $list;
	}
}



/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (class_exists('Cmsmasters_Content_Composer')) {
	define('CMSMASTERS_CONTENT_COMPOSER', true);
} else {
	define('CMSMASTERS_CONTENT_COMPOSER', false);
}

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', false);
} else {
	define('CMSMASTERS_DONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', true);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', true);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}

// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('dance_studio_get_image_thumbnail_list')) {
	function dance_studio_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		50, 
				'height' => 	50, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'dance-studio') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	325, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'dance-studio') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		400, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'dance-studio') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'dance-studio') 
			), 
			'post-thumbnail' => array( 
				'width' => 		560, 
				'height' => 	350, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'dance-studio') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999,
				'title' => 		esc_attr__('Masonry', 'dance-studio') 
			),
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	535, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'dance-studio') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		800, 
				'height' => 	470, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'dance-studio') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'dance-studio') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		560, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'dance-studio') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('dance_studio_all_color_schemes_list')) {
	function dance_studio_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'dance-studio'), 
			'header' => 		esc_html__('Header', 'dance-studio'), 
			'header_top' => 	esc_html__('Header Top', 'dance-studio'), 
			'header_bottom' => 	esc_html__('Header Bottom', 'dance-studio'), 
			'footer' => 		esc_html__('Footer', 'dance-studio') 
		);
		
		
		$out = array_merge($list, dance_studio_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('dance_studio_color_schemes_defaults')) {
	function dance_studio_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#909090', 
				'link' => 		'#ea6045', 
				'hover' => 		'#bfbfbf', 
				'heading' => 	'#1c222f', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fafafa', 
				'border' => 	'#e9e9e9', 
				'custom' => 	'#ffffff' 
			), 
			'header' => array( // Header color scheme
				'color' => 				'#909090', 
				'link' => 				'#2f3440', 
				'hover' => 				'#ffffff', 
				'subtitle' => 			'#a1a1a1', 
				'bg' => 				'#ffffff', 
				'bg_scroll' => 			'#ffffff', 
				'hover_bg' => 			'#ea6045', 
				'border' => 			'#e5e5e5', 
				'dropdown_link' => 		'#888888', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_subtitle' => 	'#5f5f5f', 
				'dropdown_bg' => 		'#1c222f', 
				'dropdown_hover_bg' => 	'#ea6045', 
				'dropdown_border' => 	'rgba(255,255,255,0)' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#cacaca', 
				'link' => 				'rgba(28,34,47,0.6)', 
				'hover' => 				'#1c222f', 
				'bg' => 				'#ffffff', 
				'border' => 			'rgba(255,255,255,0)', 
				'dropdown_link' => 		'#73757b', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_bg' => 		'#1c222f', 
				'dropdown_border' => 	'rgba(255,255,255,0)' 
			), 
			'header_bottom' => array( // Header Bottom color scheme
				'color' => 				'#909090', 
				'link' => 				'#2f3440', 
				'hover' => 				'#ffffff',
				'subtitle' => 			'#a1a1a1', 
				'bg' => 				'#ffffff', 
				'bg_scroll' => 			'#ffffff', 
				'hover_bg' => 			'#ea6045', 
				'border' => 			'#e5e5e5', 
				'dropdown_link' => 		'#888888', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_subtitle' => 	'#5f5f5f', 
				'dropdown_bg' => 		'#1c222f', 
				'dropdown_hover_bg' => 	'#ea6045',
				'dropdown_border' => 	'rgba(255,255,255,0)' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#6a6d74', 
				'link' => 		'#868991', 
				'hover' => 		'rgba(255,255,255,0.2)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#1c222f', 
				'alternate' => 	'#ea6045', 
				'border' => 	'#333333', 
				'custom' => 	'#ffffff' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#909090', 
				'link' => 		'#ea6045', 
				'hover' => 		'#bfbfbf', 
				'heading' => 	'#1c222f', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fafafa', 
				'border' => 	'#e9e9e9', 
				'custom' => 	'#ea6045'  
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#f7f7f7', 
				'link' => 		'#ea6045', 
				'hover' => 		'#c0c0c0', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ededed', 
				'border' => 	'rgba(255,255,255,0.25)', 
				'custom' => 	'#fcfcfc' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#3d3d3d', 
				'alternate' => 	'#3d3d3d', 
				'border' => 	'#ffffff', 
				'custom' => 	'#fcfcfc' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', 'framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', 'cmsmasters-c-c');
define('CMSMASTERS_DEMO_FILES_PATH', get_template_directory() . '/framework/admin/inc/demo-content/');



// Load Framework Parts
locate_template(CMSMASTERS_CLASS . '/Browser.php', true);

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_ADMIN_INC . '/demo-content-importer.php');
}

locate_template(CMSMASTERS_ADMIN_INC . '/config-functions.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-functions.php', true);

locate_template(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php', true);

locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php', true);

locate_template(CMSMASTERS_ADMIN_INC . '/admin-scripts.php', true);

locate_template(CMSMASTERS_ADMIN_INC . '/plugin-activator.php', true);

locate_template(CMSMASTERS_CLASS . '/widgets.php', true);

locate_template(CMSMASTERS_FUNCTION . '/breadcrumbs.php', true);

locate_template(CMSMASTERS_FUNCTION . '/likes.php', true);

locate_template(CMSMASTERS_FUNCTION . '/pagination.php', true);

locate_template(CMSMASTERS_FUNCTION . '/single-comment.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-fonts.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-colors-primary.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-post.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-project.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-profile.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-widgets.php', true);

$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-module-functions.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	locate_template(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php', true);
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS) {
	locate_template('cmsmasters-donations/function/template-functions-donation.php', true);
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	locate_template('woocommerce/cmsmasters-woo-functions.php', true);
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	locate_template('tribe-events/cmsmasters-events-functions.php', true);
}




// Load Theme Local File
if (!function_exists('dance_studio_load_theme_textdomain')) {
	function dance_studio_load_theme_textdomain() {
		$locale = get_locale();
		
		
		load_theme_textdomain('dance-studio', get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages');
		
		
		$locale_file = get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages/' . $locale . '.php';
		
		
		if (is_readable($locale_file)) {
			require_once($locale_file);
		}
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'dance_studio_load_theme_textdomain')) {
	add_action('after_setup_theme', 'dance_studio_load_theme_textdomain');
}





// Framework Activation & Data Import
if (!function_exists('dance_studio_theme_activation')) {
	function dance_studio_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'dance-studio') {
			add_option('cmsmasters_active_theme', 'dance-studio', '', 'yes');
			
			
			dance_studio_add_global_options();
			
			
			dance_studio_add_global_icons();
		}
	}
}

add_action('after_switch_theme', 'dance_studio_theme_activation');

// Framework Deactivation
if (!function_exists('dance_studio_theme_deactivation')) {
	function dance_studio_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'dance_studio_theme_deactivation')) {
	add_action('switch_theme', 'dance_studio_theme_deactivation');
}


// Plugin Activation Regenerate Styles
if (!function_exists('dance_studio_plugin_activation')) {
	function dance_studio_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'dance_studio_plugin_activation', 10, 2);


if (!function_exists('dance_studio_plugin_activation_regenerate')) {
	function dance_studio_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			dance_studio_regenerate_styles();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'dance_studio_plugin_activation_regenerate');



if (!function_exists('cmsmasters_theme_settings_single_defaults')) {

function cmsmasters_theme_settings_single_defaults() {
	$settings = array( 
		'post' => array( 
			'dance-studio' . '_blog_post_layout' => 		'r_sidebar', 
			'dance-studio' . '_blog_post_title' => 		1, 
			'dance-studio' . '_blog_post_date' => 			1, 
			'dance-studio' . '_blog_post_cat' => 			1, 
			'dance-studio' . '_blog_post_author' => 		1, 
			'dance-studio' . '_blog_post_comment' => 		1, 
			'dance-studio' . '_blog_post_tag' => 			1, 
			'dance-studio' . '_blog_post_like' => 			1, 
			'dance-studio' . '_blog_post_nav_box' => 		1, 
			'dance-studio' . '_blog_post_share_box' => 	1, 
			'dance-studio' . '_blog_post_author_box' => 	1, 
			'dance-studio' . '_blog_more_posts_box' => 	'related', 
			'dance-studio' . '_blog_more_posts_count' => 	'6', 
			'dance-studio' . '_blog_more_posts_pause' => 	'3' 
		), 
		'project' => array( 
			'dance-studio' . '_portfolio_project_title' => 			1, 
			'dance-studio' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'dance-studio'), 
			'dance-studio' . '_portfolio_project_date' => 				1, 
			'dance-studio' . '_portfolio_project_cat' => 				1, 
			'dance-studio' . '_portfolio_project_author' => 			1, 
			'dance-studio' . '_portfolio_project_comment' => 			0, 
			'dance-studio' . '_portfolio_project_tag' => 				0, 
			'dance-studio' . '_portfolio_project_like' => 				1, 
			'dance-studio' . '_portfolio_project_link' => 				0, 
			'dance-studio' . '_portfolio_project_share_box' => 		1, 
			'dance-studio' . '_portfolio_project_nav_box' => 			1, 
			'dance-studio' . '_portfolio_project_author_box' => 		1, 
			'dance-studio' . '_portfolio_more_projects_box' => 		'related',
			'dance-studio' . '_portfolio_more_projects_count' => 		'6', 
			'dance-studio' . '_portfolio_more_projects_pause' => 		'3', 
			'dance-studio' . '_portfolio_project_slug' => 				'project' 
		), 
		'profile' => array( 
			'dance-studio' . '_profile_post_title' => 			1, 
			'dance-studio' . '_profile_post_details_title' => 	esc_html__('Profile details', 'dance-studio'), 
			'dance-studio' . '_profile_post_cat' => 			1, 
			'dance-studio' . '_profile_post_comment' => 		1, 
			'dance-studio' . '_profile_post_like' => 			1, 
			'dance-studio' . '_profile_post_nav_box' => 		1, 
			'dance-studio' . '_profile_post_share_box' => 		1, 
			'dance-studio' . '_profile_post_slug' => 			'profile' 
		) 
	);
	
	
	return $settings;
}

}


function dance_studio_run_reinit_import_options($post_id, $key, $value) {
	if (get_post_type($post_id) == 'post' && !get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_meta_fields = get_custom_general_meta_fields();
		$custom_post_meta_fields = get_custom_post_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_post_meta_fields, $custom_meta_fields);
		
		
		foreach ($custom_all_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}


	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'dance_studio_run_reinit_import_options', 10, 3);
