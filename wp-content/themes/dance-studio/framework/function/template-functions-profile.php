<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Template Functions for Profiles & Profile
 * Created by CMSMasters
 * 
 */


/* Get Profiles Heading Function */
function dance_studio_profile_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsmasters_profile_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Profiles Heading Without Link Function */
function dance_studio_profile_title_nolink($cmsmasters_id, $tag = 'h1', $sub_title = false, $tag_sub = 'h5', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
		esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($sub_title) {
		$out .= '<' . $tag_sub . ' class="cmsmasters_profile_subtitle">' . 
			esc_html($sub_title) . 
		'</' . esc_html($tag) . '>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Profiles Content/Excerpt Function */
function dance_studio_profile_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_profile_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(100, false)) . 
	'</div>' . "\n");
	
	
	if (theme_excerpt(100, false) != '') {
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}

function cmsmasters_profile_exc_cont_small($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_profile_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(15, false)) . 
	'</div>' . "\n");
	
	
	if (theme_excerpt(15, false) != '') {
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}





/* Get Profiles Category Function */
function dance_studio_get_profile_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_profile_category">' . 
				dance_studio_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = dance_studio_get_global_options();
			
			
			if ($cmsmasters_option['dance-studio' . '_profile_post_cat']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Categories', 'dance-studio') . ':' . '</div>' . 
					'<div class="profile_details_item_desc">' . 
						'<span class="cmsmasters_profile_category">' . 
							dance_studio_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Like Function */
function cmsmasters_profile_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmasters_like(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = dance_studio_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['dance-studio' . '_profile_post_like']) {
			$out = '<div class="profile_details_item">' . 
				'<div class="profile_details_item_title">' . esc_html__('Like', 'dance-studio') . ':' . '</div>' . 
				'<div class="profile_details_item_desc details_item_desc_like">' . 
					cmsmasters_like(false) . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Get Profiles Comments Function */
function dance_studio_get_profile_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsmasters_profile_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dance-studio') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = dance_studio_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['dance-studio' . '_profile_post_comment']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Comments', 'dance-studio') . ':' . '</div>' . 
					'<div class="profile_details_item_desc details_item_desc_comments">' . 
						'<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dance-studio') . ' ' . esc_attr(get_the_title()) . '">' . 
							'<span>' . esc_html(get_comments_number()) . '</span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
			}
		}
		
		
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Profiles Features Function */
function dance_studio_get_profile_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		(
			!empty($features[0][0]) && 
			!empty($features[0][1])
		) || (
			!empty($features[1][0]) && 
			!empty($features[1][1])
		)
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="profile_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="profile_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			if ($feature[0] != '' && $feature[1] != '') {
				$feature_lists = explode("\n", $feature[1]);
				
				$out .= '<div class="profile_' . esc_attr($features_position) . '_item">' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_desc">';
				
						foreach ($feature_lists as $feature_list) {
							$out .= trim($feature_list);
						}
				
					$out .= '</div>' . 
				'</div>';
			}
		}
		
		
		if ($features_position == 'features') {
			$out .= '</div>';
		}
		
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Profiles Social Icons Function */
function dance_studio_profile_social_icons($social_icons, $title_box = false, $tag = 'h2', $show = true) {
	if ($social_icons != '') {
		$out = '<div class="profile_social_icons">';
			if ($title_box) {
				$out .= '<' . esc_html($tag) . ' class="profile_social_icons_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
			}
			
			$out .= '<ul class="profile_social_icons_list">';
			
				foreach($social_icons as $social_icon) {
					$social_icon_item = explode('|', $social_icon);
					
					$social_icon_icon = trim($social_icon_item[0]);
					$social_icon_link = trim($social_icon_item[1]);
					$social_icon_title = trim($social_icon_item[2]);
					$social_icon_target = trim($social_icon_item[3]);
					
					$out .= '<li>' . 
						'<a href="' . esc_url($social_icon_link) . '" class="' . esc_attr($social_icon_icon) . '" title="' . esc_attr($social_icon_title) . '"' . (($social_icon_target == 'true') ? ' target="_blank"' : '') . '></a>' . 
					'</li>';
				}
			
			$out .= '</ul>' . 
		'</div>';
		
		
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}

