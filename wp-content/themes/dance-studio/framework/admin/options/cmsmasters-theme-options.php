<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Post, Page, Project, Profile, Product, Donation & Donations Campaign Options
 * Created by CMSMasters
 * 
 */


locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-general.php', true);
locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-post.php', true);
locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-page.php', true);
locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-other.php', true);


if (class_exists('Cmsmasters_Projects')) {
	locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-project.php', true);
}


if (class_exists('Cmsmasters_Profiles')) {
	locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-profile.php', true);
}


if (CMSMASTERS_DONATIONS) {
	locate_template('cmsmasters-donations/admin/cmsmasters-theme-options-campaign.php', true);
	locate_template('cmsmasters-donations/admin/cmsmasters-theme-options-donation.php', true);
}


if (CMSMASTERS_TIMETABLE) {
	locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-tt-event.php', true);
}


locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options-product.php', true);


if (!function_exists('get_custom_all_meta_fields')) {
function get_custom_all_meta_fields() {
	$custom_meta_fields = get_custom_general_meta_fields();
	
	$cmsmasters_timetable_events_slug = get_option('timetable_events_settings');
	$cmsmasters_timetable_events_slug = (isset($cmsmasters_timetable_events_slug['slug']) && $cmsmasters_timetable_events_slug['slug'] != '' ? $cmsmasters_timetable_events_slug['slug'] : 'events');
	
	
	if ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'page') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'page') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'page') 
	) {
		$custom_new_meta_fields = array();
		
		
		foreach ($custom_meta_fields as $custom_meta_field) {
			if ( 
				$custom_meta_field['id'] == 'cmsmasters_heading' && 
				$custom_meta_field['type'] != 'tab_start' && 
				$custom_meta_field['type'] != 'tab_finish' 
			) {
				$custom_meta_field['std'] = 'default';
			}
			
			
			$custom_new_meta_fields[] = $custom_meta_field;
		}
		
		$custom_page_meta_fields = get_custom_page_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_page_meta_fields, $custom_new_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
	) {
		$custom_project_meta_fields = get_custom_project_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_project_meta_fields, $custom_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'profile') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'profile') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'profile') 
	) {
		$custom_profile_meta_fields = get_custom_profile_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_profile_meta_fields, $custom_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'product') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'product') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'product') 
	) {
		$custom_product_meta_fields = get_custom_product_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_product_meta_fields, $custom_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'campaign') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'campaign') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'campaign') 
	) {
		$custom_campaign_meta_fields = get_custom_campaign_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_campaign_meta_fields, $custom_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == 'donation') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'donation') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'donation') 
	) {
		$custom_donation_meta_fields = get_custom_donation_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_donation_meta_fields, $custom_meta_fields);
	} elseif ( 
		(isset($_GET['post_type']) && $_GET['post_type'] == $cmsmasters_timetable_events_slug) || 
		(isset($_POST['post_type']) && $_POST['post_type'] == $cmsmasters_timetable_events_slug) || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == $cmsmasters_timetable_events_slug) 
	) {
		$custom_tt_event_meta_fields = get_custom_tt_event_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_tt_event_meta_fields, $custom_meta_fields);
	} elseif ( 
		(!isset($_GET['action']) && !isset($_GET['post_type'])) || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'post') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'post') 
	) {
		$custom_post_meta_fields = get_custom_post_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_post_meta_fields, $custom_meta_fields);
	} else {
		$custom_other_meta_fields = get_custom_other_meta_fields();
		
		$custom_all_meta_fields = array_merge($custom_other_meta_fields, $custom_meta_fields);
	}
	
	
	return apply_filters('get_custom_all_meta_fields_filter', $custom_all_meta_fields);
}
}


function dance_studio_admin_enqueue_scripts($hook) {
	if ( 
		($hook == 'post.php') || 
		($hook == 'post-new.php') 
	) {
		
		
		wp_enqueue_style('wp-jquery-ui-dialog');
		
		
		
		wp_enqueue_style('cmsmasters_theme_options_css', get_template_directory_uri() . '/framework/admin/options/css/cmsmasters-theme-options.css', array(), '1.0.0', 'screen');
		
		
		if (is_rtl()) {
			wp_enqueue_style('cmsmasters_theme_options_css_rtl', get_template_directory_uri() . '/framework/admin/options/css/cmsmasters-theme-options-rtl.css', array(), '1.0.0', 'screen');
		}
		
		
		wp_enqueue_script('cmsmasters_theme_options_js', get_template_directory_uri() . '/framework/admin/options/js/cmsmasters-theme-options.js', array('jquery'), '1.0.0', true);
		
		wp_localize_script('cmsmasters_theme_options_js', 'cmsmasters_options', array( 
			'create_gallery' => 	esc_attr__('Create Gallery', 'dance-studio'), 
			'select_format' => 		esc_attr__('Please select the format.', 'dance-studio'), 
			'link_exists' => 		esc_html__('Link with this format already exists.', 'dance-studio'), 
			'want_remove' => 		esc_html__('Do you really want to remove this item?', 'dance-studio'), 
			'remove' => 			esc_attr__('Remove', 'dance-studio'), 
			'find' => 				esc_attr__('Find icons', 'dance-studio'), 
			'remove_icon' => 		esc_html__('Do you really want to remove this social icon?', 'dance-studio') 
		));
		
		wp_enqueue_script('cmsmasters_theme_options_js_hide', get_template_directory_uri() . '/framework/admin/options/js/cmsmasters-theme-options-toggle.js', array('jquery'), '1.0.0', true);

	}
}

add_action('admin_enqueue_scripts', 'dance_studio_admin_enqueue_scripts');


function show_cmsmasters_meta_box() {
	global $post;
	
	$custom_all_meta_fields = get_custom_all_meta_fields();
	
	
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';
	
	foreach ($custom_all_meta_fields as $field) {
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		if (isset($field['std']) && $meta === '') {
			$meta = $field['std'];
		}
		
		if (!isset($field['hide'])) {
			$field['hide'] = 'false';
		}
		
		if ( 
			$field['type'] != 'tabs' && 
			$field['type'] != 'tab_start' && 
			$field['type'] != 'tab_finish' && 
			$field['type'] != 'content_start' && 
			$field['type'] != 'content_finish' 
		) {
			echo '<tr class="cmsmasters_tr_' . $field['type'] . '"' . (($field['hide'] == 'true') ? ' style="display:none;"' : '') . '>' . 
				'<th>' . 
					'<label for="' . $field['id'] . '">' . $field['label'] . '</label>' . '</th>' . 
				'<td>';
		}
		
		switch ($field['type']) {
		case 'tab_start':
			echo '<div id="' . $field['id'] . '" class="nav-tab-content' . (($field['std'] === 'true') ? ' nav-tab-content-active' : '') . '">' . 
				'<table class="form-table">';
			
			break;
		case 'tab_finish':
			echo '</table>' . 
			'</div>';
			
			break;
		case 'content_start':
			echo '<table id="' . $field['id'] . '" class="form-table' . (($field['box'] === 'true') ? ' cmsmasters_box' : '') . '"' . (($field['hide'] === 'true') ? ' style="display:none;"' : '') . '>';
			
			break;
		case 'content_finish':
			echo '</table>';
			
			break;
		case 'tabs':
			echo '<h2 class="nav-tab-wrapper" id="' . $field['id'] . '">';
			
			foreach ($field['options'] as $option) {
				echo '<a href="#' . $option['value'] . '" class="nav-tab' . (($field['std'] === $option['value']) ? ' nav-tab-active' : '') . '">' . $option['label'] . '</a>';
			}
			
			echo '</h2>';
			
			break;
		case 'text':
			echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" />' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'textcode':
			echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . esc_attr(stripslashes($meta)) . '" size="30" />' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'text_long':
			echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="60" />' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'number':
			echo '<input ' . ((isset($field['size']) && $field['size'] != '') ? ' class="long_size"' : '') . 'type="number" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="' . ((isset($field['size']) && $field['size'] != '') ? $field['size'] : '5') . '"' . (($field['min'] != '') ? ' min="' . $field['min'] . '"' : '') . (($field['max'] != '') ? ' max="' . $field['max'] . '"' : '') . (($field['step'] != '') ? ' step="' . $field['step'] . '"' : '') . ' />' .
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'range':
			echo '<input type="range" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30"' . (($field['min'] != '') ? ' min="' . $field['min'] . '"' : '') . (($field['max'] != '') ? ' max="' . $field['max'] . '"' : '') . (($field['step'] != '') ? ' step="' . $field['step'] . '"' : '') . ' />' . 
			'<input type="text" name="' . $field['id'] . '_number" id="' . $field['id'] . '_number" value="' . $meta . '" size="5" readonly="readonly" />' . 
			'<span class="description">' . $field['desc'] . '</span>' . 
			'<script type="text/javascript"> ' . 
				'jQuery(document).ready(function () { ' . 
					'(function ($) { ' . 
						"$('#" . $field['id'] . "').bind('change', function () { " . 
							"$('#" . $field['id'] . "_number').val($(this).val()); " . 
						'} ); ' . 
					'} )(jQuery); ' . 
				'} ); ' . 
			'</script>';
			
			break;
		case 'textarea':
			echo '<textarea name="' . $field['id'] . '" id="' . $field['id'] . '" cols="50" rows="4">' . $meta . '</textarea>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'checkbox':
			echo '<label for="' . $field['id'] . '">' . 
				'<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" value="true"' . (($meta === 'false') ? '' : ' checked="checked"') . ' /> ' . 
				$field['desc'] . 
			'</label>';
			
			break;
		case 'radio':
			foreach ($field['options'] as $option) {
				echo '<label for="' . $field['id'] . '_' . $option['value'] . '">' . 
					'<input type="radio" name="' . $field['id'] . '" id="' . $field['id'] . '_' . $option['value'] . '" value="' . $option['value'] . '"' . (($meta === $option['value']) ? ' checked="checked"' : '') . ' /> ' . 
					$option['label'] . 
				'</label>' . 
				'<br />';
			}
			
			echo '<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'radio_img':
			echo '<table>' . 
				'<tr>';
			
			$i = 0;
			
			foreach ($field['options'] as $option) {
				if ($i > 2) {
					echo '</tr><tr>';
					
					$i = 0;
				}
				
				echo '<td>' . 
					'<label for="' . $field['id'] . '_' . $option['value'] . '">' . 
						'<img src="' . esc_url($option['img']) . '" alt="' . esc_attr($option['label']) . '" />' . 
						'<br />' . 
						'<input type="radio" name="' . $field['id'] . '" id="' . $field['id'] . '_' . $option['value'] . '" value="' . $option['value'] . '"' . (($meta === $option['value']) ? ' checked="checked"' : '') . ' />' . 
						$option['label'] . 
					'</label>' . 
				'</td>';
				
				$i++;
			}
			
			echo '</tr>' . 
			'</table>' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'radio_img_pj':
			echo '<table>' . 
				'<tr>';
			
			$i = 0;
			
			foreach ($field['options'] as $option) {
				if ($i > 2) {
					echo '</tr><tr>';
					
					$i = 0;
				}
				
				echo '<td>' . 
					'<label for="' . $field['id'] . '_' . $option['value'] . '">' . 
						'<img src="' . esc_url($option['img']) . '" alt="' . esc_attr($option['label']) . '" />' . 
						'<br />' . 
						'<input type="radio" name="' . $field['id'] . '" id="' . $field['id'] . '_' . $option['value'] . '" value="' . $option['value'] . '" data-size="' . $option['size'] . '"' . (($meta === $option['value']) ? ' checked="checked"' : '') . ' />' . 
						$option['label'] . 
					'</label>' . 
				'</td>';
				
				if ($meta === $option['value']) {
					$pj_size = $option['size'];
				}
				
				$i++;
			}
			
			echo '</tr>' . 
			'</table>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '<strong class="pj_size">' . $pj_size . '</strong></span>';
			
			break;
		case 'checkbox_group':
			$i = 0;
			
			foreach ($field['options'] as $option) {
				echo '<input type="checkbox" value="' . $option['value'] . '" name="' . $field['id'] . '[' . $i . ']" id="' . $field['id'] . '_' . $option['value'] . '"' . (($meta && in_array($option['value'], $meta)) ? ' checked="checked"' : '') . ' /> ' . 
				'<label for="' . $field['id'] . '_' . $option['value'] . '">' . $option['label'] . '</label>' . 
				'<br />';
				
				$i++;
			}
			
			echo '<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'select':
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
			
			foreach ($field['options'] as $option) {
				echo '<option value="' . $option['value'] . '"' . (((string) $meta === (string) $option['value']) ? ' selected="selected"' : '') . '>' . $option['label'] . '</option>';
			}
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'select_sidebar':
			global $wp_registered_sidebars;
			
			
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">' . 
				'<option value="">' . esc_html__('Default Sidebar', 'dance-studio') . '</option>';
			
			
			foreach ($wp_registered_sidebars as $wp_registered_sidebar) {
				echo '<option value="' . $wp_registered_sidebar['id'] . '"' . (($meta != '' && $meta == $wp_registered_sidebar['id']) ? ' selected="selected"' : '') . '>' . $wp_registered_sidebar['name'] . '</option>';
			}
			
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			
			break;
		case 'select_scheme':
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
			
			
			foreach (cmsmasters_color_schemes_list() as $key => $value) {
				echo '<option value="' . $key . '"' . (($meta == $key) ? ' selected="selected"' : '') . '>' . $value . '</option>';
			}
			
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			
			break;
		case 'select_slider':
			$sliderManager = new cmsmastersSliderManager();
			
			$sliders = $sliderManager->getSliders();
			
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">' . 
				'<option value="">' . esc_html__('Select Slider', 'dance-studio') . '</option>';
			
			if (!empty($sliders)) {
				foreach ($sliders as $slider) {
					echo '<option value="' . $slider['id'] . '"' . (($meta !== '' && (int) $meta === $slider['id']) ? ' selected="selected"' : '') . '>' . $slider['name'] . '</option>';
				}
			}
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'select_post_categ':
			$categories = get_categories();
			
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">' . 
				'<option value="">' . esc_html__('Select Blog Category', 'dance-studio') . '</option>';
			
			foreach ($categories as $category) {
				echo '<option value="' . $category->cat_ID . '"' . (($meta !== '' && (int) $meta === $category->cat_ID) ? ' selected="selected"' : '') . '>' . $category->cat_name . '</option>';
			}
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'select_project_cat':
			$categories = get_terms('pj-categs', array( 
				'orderby' => 'name', 
				'hide_empty' => 0 
			));
			
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">' . 
				'<option value="">' . esc_html__('Select Project Category', 'dance-studio') . '</option>';
			
			if (is_array($categories) && !empty($categories)) {
				foreach ($categories as $category) {
					echo '<option value="' . $category->slug . '"' . (($meta !== '' && $meta === $category->slug) ? ' selected="selected"' : '') . '>' . $category->name . '</option>';
				}
			}
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'select_pl_categ':
			$pl_categs = get_terms('pl-categs', array( 
				'hide_empty' => 0 
			));
			
			echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">' . 
				'<option value="">' . esc_html__('Select Profile Category', 'dance-studio') . '</option>';
			
			if (is_array($pl_categs) && !empty($pl_categs)) {
				foreach ($pl_categs as $pl_categ) {
					echo '<option value="' . $pl_categ->slug . '"' . (($meta !== '' && $meta === $pl_categ->slug) ? ' selected="selected"' : '') . '>' . $pl_categ->name . '</option>';
				}
			}
			
			echo '</select>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'image':
			$image_array = explode('|', $field['std']);
			
			
			$meta_array = explode('|', $meta);
			
			
			$image = (isset($image_array[1]) && $image_array[1] != '') ? $image_array[1] : '';
			
			
			if ( 
				$meta != $field['std'] && 
				isset($meta_array[1]) && 
				$meta_array[1] != '' 
			) {
				$image = $meta_array[1];
			}
			
			
			echo '<div class="cmsmasters_upload_parent cmsmasters_select_parent">' . 
				'<input type="button" id="cmsmasters_upload_' . $field['id'] . '_button" class="cmsmasters_upload_button button button-large" value="' . esc_attr__('Choose Image', 'dance-studio') . '" data-title="' . esc_attr__('Choose Image', 'dance-studio') . '" data-button="' . esc_attr__('Insert Image', 'dance-studio') . '" data-id="cmsmasters-media-select-frame-' . $field['id'] . '" data-classes="media-frame cmsmasters-media-select-frame' . ((!isset($field['description'])) ? ' cmsmasters-frame-no-description' : '') . ((!isset($field['caption'])) ? ' cmsmasters-frame-no-caption' : '') . ((!isset($field['align'])) ? ' cmsmasters-frame-no-align' : '') . ((!isset($field['link'])) ? ' cmsmasters-frame-no-link' : '') . ((!isset($field['size'])) ? ' cmsmasters-frame-no-size' : '') . '" data-library="image" data-type="' . $field['frame'] . '"' . (($field['frame'] === 'post') ? ' data-state="insert"' : '') . ' data-multiple="' . $field['multiple'] . '" />' . 
				'<div class="cmsmasters_upload"' . (($image != '') ? ' style="display:block;"' : '') . '>' . 
					'<img src="' . (($image != '') ? $image : '') . '" class="cmsmasters_preview_image" />' . 
					'<a href="#" class="cmsmasters_upload_cancel admin-icon-remove" title="' . esc_attr__('Remove', 'dance-studio') . '"></a>' . 
				'</div>' . 
				'<input type="hidden" id="' . $field['id'] . '" name="' . $field['id'] . '" class="cmsmasters_upload_image" value="' . $meta . '" />' . 
			'</div>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'color':
			echo '<input type="text" id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . $meta . '" class="my-color-field" data-default-color="' . $field['std'] . '" />' . 
			'<script type="text/javascript"> ' . 
				'jQuery(document).ready(function () { ' . 
					'(function ($) { ' . 
						"$('#" . $field['id'] . "').wpColorPicker( { " . 
							"palettes : ['" . implode("','", cmsmasters_color_picker_palettes()) . "'] " . 
						'} ); ' . 
					'} )(jQuery); ' . 
				'} ); ' . 
			'</script>';
			
			break;
		case 'rgba':
			echo '<input type="text" id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . $meta . '" class="my-color-field cmsmasters-rgba" data-default-color="' . $field['std'] . '" data-alpha="true" data-reset-alpha="true" />' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>' . 
			'<script type="text/javascript"> ' . 
				'jQuery(document).ready(function () { ' . 
					'(function ($) { ' . 
						"$('#" . $field['id'] . "').wpColorPicker( { " . 
							"palettes : ['" . implode("','", cmsmasters_color_picker_palettes()) . "'] " . 
						'} ); ' . 
					'} )(jQuery); ' . 
				'} ); ' . 
			'</script>';
			
			
			break;
		case 'icon':
			echo '<div class="icon_management">' . 
				'<p>' . 
					'<input class="icon_upload_image all-options" type="hidden" id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . $meta . '" />' . 
					'<span id="' . $field['id'] . '_icon" data-class="cmsmasters_new_icon_img"' . (($meta != '') ? ' class="' . $meta . '" style="display:block;"' : '') . '></span>' . 
					'<input id="' . $field['id'] . '_button" class="cmsmasters_icon_choose_button button" type="button" value="' . esc_attr__('Choose icon', 'dance-studio') . '" />' . 
					'<a href="#" class="cmsmasters_remove_icon admin-icon-remove" title="' . esc_attr__('Remove icon', 'dance-studio') . '"' . (($meta != '') ? ' style="display:inline-block;"' : '') . '></a>' . 
				'</p>' . 
			'</div>' . 
			(($field['desc'] != '') ? '<br />' . '<span class="description">' . $field['desc'] . '</span>': '');
			
			
			break;
		case 'social':
			echo (($field['desc'] != '') ? '<span class="description">' . $field['desc'] . '</span>' . '<br />' . '<br />': '') . 
			'<div class="icon_management">' . 
				'<p>' . 
					'<input class="icon_upload_image all-options" type="hidden" id="' . $field['id'] . '" value="" />' . 
					'<span id="' . $field['id'] . '_icon" data-class="cmsmasters_new_icon_img"></span>' . 
					'<input id="' . $field['id'] . '_button" class="cmsmasters_icon_choose_button button" type="button" value="' . esc_attr__('Choose icon', 'dance-studio') . '" />' . 
					'<a href="#" class="cmsmasters_remove_icon admin-icon-remove" title="' . esc_attr__('Cancel changes', 'dance-studio') . '"></a>' . 
				'</p>' . 
				'<div class="icon_choose_container icon_choose_social"></div>' . 
				'<span class="cl"><br /></span>' . 
				'<span class="icon_upload_link" style="display:none;">' . 
					'<label for="new_icon_link">' . 
						'<input class="all-options" type="text" id="new_icon_link" /> ' . 
						esc_html__('Icon link', 'dance-studio') . 
					'</label>' . 
					'<label for="new_icon_title">' . 
						'<input class="all-options" type="text" id="new_icon_title" /> ' . 
						esc_html__('Icon title', 'dance-studio') . 
					'</label>' . 
					'<label for="new_icon_target">' . 
						'<input type="checkbox" id="new_icon_target" value="true" /> ' . 
						esc_html__('Open link in a new tab/window?', 'dance-studio') . 
					'</label>' . 
				'</span>' . 
				'<span class="cl"></span>' . 
				'<input class="button button-primary" type="button" id="add_icon" value="' . esc_attr__('Add Icon', 'dance-studio') . '" />' . 
				'<input class="button button-primary" type="button" id="edit_icon" value="' . esc_attr__('Save Icon', 'dance-studio') . '" />' . 
				'<ul>';
			
			
			$i = 0;
			
			
			if (isset($meta) && is_array($meta)) {
				foreach($meta as $icon) {
					$i++;
					
					
					$icon_attrs = explode('|', $icon);
					
					
					echo '<li>' . 
						'<div class="' . $icon_attrs[0] . '">' . 
							'<input type="hidden" id="' . $field['id'] . '_' . $i . '" name="' . $field['id'] . '[' . $i . ']" value="' . $icon . '" />' . 
						'</div>' . 
						'<a href="#" class="icon_del admin-icon-remove" title="' . esc_attr__('Remove', 'dance-studio') . '"></a> ' . 
						'<span class="icon_move admin-icon-move"></span> ' . 
					'</li>';
				}
			}
			
			
			echo '</ul>' . 
				'<input id="custom_icons_number" type="hidden" name="' . $field['id'] . '_number" value="' . $i . '" />' . 
			'</div>';
			
			
			break;
		case 'repeatable':
			echo '<ul id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
			
			$i = 0;
			
			if ($meta) {
				foreach ($meta as $row) {
					if ($row !== '') {
						echo '<li>' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . ']" id="' . $field['id'] . '[' . $i . ']" value="' . $row . '" size="30" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					} else if ($i === 0) {
						echo '<li style="display:none;">' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . ']" id="' . $field['id'] . '[' . $i . ']" value="" size="30" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					}
					
					$i++;
				}
			} else {
				echo '<li style="display:none;">' . 
					'<span class="sort hndle admin-icon-move"></span>' . 
					'<input type="text" name="' . $field['id'] . '[' . $i . ']" id="' . $field['id'] . '[' . $i . ']" value="" size="30" />' . 
					'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'<a class="repeatable-add admin-icon-add button" href="#"></a>' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'repeatable_link':
			$post_items = get_posts(array( 
				'post_type'	=> 'post', 
				'posts_per_page' => -1 
			));
			
			$page_items = get_posts(array( 
				'post_type'	=> 'page', 
				'posts_per_page' => -1 
			));
			
			$project_items = get_posts(array( 
				'post_type'	=> 'project', 
				'posts_per_page' => -1 
			));
			
			echo '<div class="ovh">' . 
				'<div class="fl"><strong>' . esc_html__('Title', 'dance-studio') . '</strong></div>' . 
				'<div class="fl"><strong>' . esc_html__('Link', 'dance-studio') . '</strong></div>' . 
			'</div>' . 
			'<ul id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
			
			$i = 0;
			
			if ($meta !== '') {
				foreach ($meta as $row) {
					if ($row[0] !== '' && $row[1] !== '') {
						echo '<li>' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="' . $row[0] . '" size="10" class="cmsmasters_name" />' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="' . $row[1] . '" size="25" class="cmsmasters_link" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					} else if ($i === 0) {
						echo '<li style="display:none;">' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="10" class="cmsmasters_name" />' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="" size="25" class="cmsmasters_link" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					}
					
					$i++;
				}
			} else {
				echo '<li style="display:none;">' . 
					'<span class="sort hndle admin-icon-move"></span>' . 
					'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="10" class="cmsmasters_name" />' . 
					'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="" size="25" class="cmsmasters_link" />' . 
					'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'<select name="' . $field['id'] . '-select" id="' . $field['id'] . '-select">' . 
				'<optgroup label="' . esc_attr__('Blank Field', 'dance-studio') . '">' . 
					'<option value="">' . esc_html__('Select Link', 'dance-studio') . '</option>' . 
				'</optgroup>' . 
				'<optgroup label="' . esc_attr__('Posts', 'dance-studio') . '">';
			
			foreach ($post_items as $post_item) {
				echo '<option value="' . get_permalink($post_item->ID) . '">' . $post_item->post_title . '</option>';
			}
			
			echo '</optgroup>' . 
				'<optgroup label="' . esc_attr__('Pages', 'dance-studio') . '">';
			
			foreach ($page_items as $page_item) {
				echo '<option value="' . get_permalink($page_item->ID) . '">' . $page_item->post_title . '</option>';
			}
			
			echo '</optgroup>' . 
				'<optgroup label="' . esc_attr__('Projects', 'dance-studio') . '">';
			
			foreach ($project_items as $project_item) {
				echo '<option value="' . esc_attr(get_permalink($project_item->ID)) . '">' . esc_html($project_item->post_title) . '</option>';
			}
			
			echo '</optgroup>' . 
			'</select> &nbsp; ' . 
			'<a class="repeatable-link-add admin-icon-add button" href="#"></a>' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'repeatable_multiple':
			echo '<div class="ovh">' . 
				'<div class="fl"><strong>' . esc_html__('Title', 'dance-studio') . '</strong></div>' . 
				'<div class="fl"><strong>' . esc_html__('Values', 'dance-studio') . '</strong></div>' . 
			'</div>' . 
			'<ul id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
			
			$i = 0;
			
			if ($meta !== '') {
				foreach ($meta as $row) {
					if ($row[0] !== '' && $row[1] !== '') {
						echo '<li>' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="' . $row[0] . '" size="10" class="cmsmasters_name" />' . 
							'<textarea name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" cols="25" rows="2" class="cmsmasters_val">' . $row[1] . '</textarea>' . 
							'<a class="repeatable-copy admin-icon-copy button" href="#"></a>' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					} else if ($i === 0) {
						echo '<li style="display:none;">' . 
							'<span class="sort hndle admin-icon-move"></span>' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="10" class="cmsmasters_name" />' . 
							'<textarea name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" cols="25" rows="2" class="cmsmasters_val"></textarea>' . 
							'<a class="repeatable-copy admin-icon-copy button" href="#"></a>' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					}
					
					$i++;
				}
			} else {
				echo '<li style="display:none;">' . 
					'<span class="sort hndle admin-icon-move"></span>' . 
					'<input type="text" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="10" class="cmsmasters_name" />' . 
					'<textarea name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" cols="25" rows="2" class="cmsmasters_val"></textarea>' . 
					'<a class="repeatable-copy admin-icon-copy button" href="#"></a>' . 
					'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'<a class="repeatable-multiple-add admin-icon-add button" href="#"></a>' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'repeatable_media':
			echo '<select name="' . $field['id'] . '-select" id="' . $field['id'] . '-select">' . 
				'<option value="">' . esc_html__('Select Format', 'dance-studio') . ' &nbsp;</option>';
			
			foreach ($field['media'] as $key => $value) {
				echo '<option value="' . $key . '">' . $value . '</option>';
			}
			
			echo '</select> &nbsp; ' . 
			'<a class="repeatable-media-add admin-icon-add button" href="#"></a>' . 
			'<br />' . 
			'<ul id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
			
			$i = 0;
			
			if ($meta !== '') {
				foreach ($meta as $row) {
					if ($row[1] !== '') {
						echo '<li>' . 
							'<input type="text" readonly="readonly" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="' . $row[0] . '" size="5" class="cmsmasters_format" />' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="' . $row[1] . '" size="30" class="cmsmasters_link" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					} else if ($i === 0) {
						echo '<li style="display:none;">' . 
							'<input type="text" readonly="readonly" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="5" class="cmsmasters_format" />' . 
							'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="" size="30" class="cmsmasters_link" />' . 
							'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
						'</li>';
					}
					
					$i++;
				}
			} else {
				echo '<li style="display:none;">' . 
					'<input type="text" readonly="readonly" name="' . $field['id'] . '[' . $i . '][0]" id="' . $field['id'] . '[' . $i . '][0]" value="" size="5" class="cmsmasters_format" />' . 
					'<input type="text" name="' . $field['id'] . '[' . $i . '][1]" id="' . $field['id'] . '[' . $i . '][1]" value="" size="30" class="cmsmasters_link" />' . 
					'<a class="repeatable-remove admin-icon-remove button" href="#"></a>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			break;
		case 'images_list':
			if ($meta != '') {
				$ids = array();
				
				
				$meta_array = explode(',', $meta);
				
				
				foreach ($meta_array as $meta_val) {
					$ids[] = explode('|', $meta_val);
				}
			}
			
			
			echo '<div class="cmsmasters_upload_parent cmsmasters_gallery_parent">' . 
				'<input type="button" id="cmsmasters_gallery_' . $field['id'] . '_button" class="cmsmasters_upload_button button button-large" value="' . (($meta != '') ? esc_attr__('Edit Gallery', 'dance-studio') : esc_attr__('Create Gallery', 'dance-studio')) . '" data-title="' . esc_attr__('Create/Edit Gallery', 'dance-studio') . '" data-button="' . esc_attr__('Insert Gallery', 'dance-studio') . '" data-id="cmsmasters-media-select-frame-' . $field['id'] . '" data-classes="media-frame cmsmasters-media-gallery-frame' . ((!isset($field['description'])) ? ' cmsmasters-frame-no-description' : '') . ((!isset($field['caption'])) ? ' cmsmasters-frame-no-caption' : '') . ((!isset($field['align'])) ? ' cmsmasters-frame-no-align' : '') . ((!isset($field['link'])) ? ' cmsmasters-frame-no-link' : '') . ((!isset($field['size'])) ? ' cmsmasters-frame-no-size' : '') . '" data-library="image" data-type="' . $field['frame'] . '"' . (($field['frame'] == 'post') ? ' data-state="' . (($meta != '') ? 'gallery-edit' : 'gallery-library') . '"' : '') . ' data-multiple="' . $field['multiple'] . '"' . (($meta != '') ? ' data-editing="true"' : '') . ' />' . 
				'<ul class="cmsmasters_gallery">';
			
			
			if ($meta != '') {
				foreach ($ids as $id) {
					if (isset($id[0]) && isset($id[1])) {
						echo '<li class="cmsmasters_gallery_item">' . 
							'<img src="' . esc_url($id[1]) . '" data-id="' . $id[0] . '" class="cmsmasters_gallery_image" />' . 
							'<a href="#" class="cmsmasters_gallery_cancel admin-icon-remove" title="' . esc_attr__('Remove', 'dance-studio') . '"></a>' . 
						'</li>';
					}
				}
			}
			
			
			echo '</ul>' . 
			'<input type="hidden" id="' . $field['id'] . '" name="' . $field['id'] . '" class="cmsmasters_gallery_images" value="' . $meta . '" />' . 
			'</div>' . 
			'<br />' . 
			'<span class="description">' . $field['desc'] . '</span>';
			
			
			break;
		}
		
		if ( 
			$field['type'] != 'tabs' && 
			$field['type'] != 'tab_start' && 
			$field['type'] != 'tab_finish' && 
			$field['type'] != 'content_start' && 
			$field['type'] != 'content_finish' 
		) {
			echo '</td>' . 
			'</tr>';
		}
	}
}



function save_custom_meta($post_id) {
    $custom_all_meta_fields = get_custom_all_meta_fields();
	
	if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	
	if ($_POST['post_type'] == 'page') {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($custom_all_meta_fields as $field) {
		if ( 
			$field['type'] != 'tabs' && 
			$field['type'] != 'tab_start' && 
			$field['type'] != 'tab_finish' && 
			$field['type'] != 'content_start' && 
			$field['type'] != 'content_finish' 
		) {
			$old = get_post_meta($post_id, $field['id'], true);
			
			if (isset($_POST[$field['id']])) {
				$new = $_POST[$field['id']];
			} else {
				$new = '';
			}
			
			if ($field['type'] == 'checkbox' && $new === '') {
				$new = 'false';
			}
			
			if (isset($new) && $new !== $old) {
				update_post_meta($post_id, $field['id'], $new);
			} elseif (isset($old) && $new === '') {
				delete_post_meta($post_id, $field['id'], $old);
			}
		}
	}
}

add_action('save_post', 'save_custom_meta');


function add_custom_cmsmasters_meta_box() {
    $args = array(
	   'public' => true 
	);
	
	$screens = get_post_types($args);
	
	
	foreach ($screens as $screen) {	
		add_meta_box( 
			'cmsmasters_custom_meta_box', 
			esc_attr__('Theme Options', 'dance-studio'), 
			'show_cmsmasters_meta_box', 
			$screen, 
			'normal', 
			'high' 
		);
	}
}

add_action('add_meta_boxes', 'add_custom_cmsmasters_meta_box');

