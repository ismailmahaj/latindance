<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Template Functions for Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * Posts Slider Functions
 */

/* Get Posts Slider Heading Function */
function dance_studio_slider_post_heading($cmsmasters_id, $type = 'post', $tag = 'h1', $show = true, $link_redirect = false, $link_url = false) { 
	$out = '';
	
	if ($type == 'post') {
		if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
			$out = '<header class="cmsmasters_slider_post_header entry-header">' . 
				'<' . esc_html($tag) . ' class="cmsmasters_slider_post_title entry-title">' . 
					'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
				'</' . esc_html($tag) . '>' . 
			'</header>';
		}
	} elseif ($type == 'project') {
		$out = '<header class="cmsmasters_slider_project_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_slider_project_title entry-title">' . 
				'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Content/Excerpt Function */
function dance_studio_slider_post_exc_cont($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_post_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	} elseif ($type == 'project') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_project_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Check Posts Slider Content/Excerpt Not Empty Function */
function dance_studio_slider_post_check_exc_cont($type = 'post') {
	$exc = dance_studio_slider_post_exc_cont($type, false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Posts Slider Date Function */
function dance_studio_get_slider_post_date($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsmasters_post_date">' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) .
			'</abbr>' . 
		'</span>';
		
		if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
			$out = '<a href="' . esc_url(get_permalink()) . '">' . $out . '</a>';
		}
	} elseif ($type == 'project') {
		$out = '<abbr class="published cmsmasters_slider_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) .
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) .
		'</abbr>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Author Function */
function dance_studio_get_slider_post_author($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsmasters_slider_post_user_name">' . 
			esc_html__('By', 'dance-studio') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'dance-studio') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<span class="cmsmasters_slider_project_user_name">' . 
			esc_html__('By', 'dance-studio') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'dance-studio') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Category Function */
function dance_studio_get_slider_post_category($cmsmasters_id, $taxonomy, $type = 'post', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($type == 'post') {
			$out = '<span class="cmsmasters_slider_post_category">' . 
				esc_html__('In ', 'dance-studio') . 
				dance_studio_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($type == 'project') {
			$out = '<span class="cmsmasters_slider_project_category">' . 
				dance_studio_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Like Function */
function dance_studio_slider_post_like($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmasters_like(false);
	} elseif ($type == 'project') {
		$out = cmsmasters_like(false);
	}
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Slider Comments Function */
function dance_studio_get_slider_post_comments($type = 'post', $show = true) {
	if (comments_open()) {
		if ($type == 'post') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dance-studio') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($type == 'project') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'dance-studio') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		}
		
		
		if ($show) {
			echo dance_studio_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Posts Slider More Button/Link Function */
function dance_studio_slider_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_attr__('Read more', 'dance-studio');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}

