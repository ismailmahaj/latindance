<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function dance_studio_options_general_tabs() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'dance-studio');
	
	if ($cmsmasters_option['dance-studio' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'dance-studio');
	}
	
	$tabs['header'] = esc_attr__('Header', 'dance-studio');
	$tabs['content'] = esc_attr__('Content', 'dance-studio');
	$tabs['footer'] = esc_attr__('Footer', 'dance-studio');
	
	return $tabs;
}


function dance_studio_options_general_sections() {
	$tab = dance_studio_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'dance-studio');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'dance-studio');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'dance-studio');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'dance-studio');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'dance-studio');
		
		break;
	default:
		$sections = array();
		
		
		break;	
	}
	
	return $sections;
} 


function dance_studio_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = dance_studio_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_attr__('Liquid', 'dance-studio') . '|liquid', 
				esc_attr__('Boxed', 'dance-studio') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_attr__('Image', 'dance-studio') . '|image', 
				esc_attr__('Text', 'dance-studio') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'dance-studio'), 
			'desc' => esc_html__('Choose your website logo image.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'dance-studio'), 
			'desc' => esc_html__('Choose logo image for retina displays.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Dance Studio'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'dance-studio'), 
			'desc' => esc_html__('enable', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'dance-studio'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'dance-studio' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'dance-studio'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_col', 
			'title' => esc_html__('Background Color', 'dance-studio'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_img', 
			'title' => esc_html__('Background Image', 'dance-studio'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'dance-studio') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'dance-studio') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'dance-studio') . '|repeat-y', 
				esc_attr__('Repeat', 'dance-studio') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_attr__('Top Left', 'dance-studio') . '|top left', 
				esc_attr__('Top Center', 'dance-studio') . '|top center', 
				esc_attr__('Top Right', 'dance-studio') . '|top right', 
				esc_attr__('Center Left', 'dance-studio') . '|center left', 
				esc_attr__('Center Center', 'dance-studio') . '|center center', 
				esc_attr__('Center Right', 'dance-studio') . '|center right', 
				esc_attr__('Bottom Left', 'dance-studio') . '|bottom left', 
				esc_attr__('Bottom Center', 'dance-studio') . '|bottom center', 
				esc_attr__('Bottom Right', 'dance-studio') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'dance-studio') . '|scroll', 
				esc_attr__('Fixed', 'dance-studio') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'dance-studio' . '_bg_size', 
			'title' => esc_html__('Background Size', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_attr__('Auto', 'dance-studio') . '|auto', 
				esc_attr__('Cover', 'dance-studio') . '|cover', 
				esc_attr__('Contain', 'dance-studio') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'dance-studio'), 
			'desc' => esc_html__('enable', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'dance-studio'), 
			'desc' => esc_html__('enable', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'dance-studio'), 
			'desc' => esc_html__('pixels', 'dance-studio'), 
			'type' => 'number', 
			'std' => '35', 
			'min' => '30' 
		);
		
		if (CMSMASTERS_DONATIONS) {
			$options[] = array( 
				'section' => 'header_section', 
				'id' => 'dance-studio' . '_header_top_line_donations_but', 
				'title' => esc_html__('Top Donations Button', 'dance-studio'), 
				'desc' => esc_html__('show', 'dance-studio'), 
				'type' => 'checkbox', 
				'std' => 0 
			);
			
			$options[] = array( 
				'section' => 'header_section', 
				'id' => 'dance-studio' . '_header_top_line_donations_but_text', 
				'title' => esc_html__('Top Donations Button Text', 'dance-studio'), 
				'desc' => '', 
				'type' => 'text', 
				'std' => esc_html__('Donate Now!', 'dance-studio'), 
				'class' => 'nohtml' 
			);
		}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_attr__('None', 'dance-studio') . '|none', 
				esc_attr__('Top Line Social Icons', 'dance-studio') . '|social', 
				esc_attr__('Top Line Navigation', 'dance-studio') . '|nav',  
				esc_attr__('Top Short Info', 'dance-studio') . '|custom' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'dance-studio'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dance-studio') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_attr__('Default Style', 'dance-studio') . '|default', 
				esc_attr__('Compact Style Left Navigation', 'dance-studio') . '|l_nav', 
				esc_attr__('Compact Style Right Navigation', 'dance-studio') . '|r_nav', 
				esc_attr__('Compact Style Center Navigation', 'dance-studio') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'dance-studio'), 
			'desc' => esc_html__('pixels', 'dance-studio'), 
			'type' => 'number', 
			'std' => '77', 
			'min' => '50' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'dance-studio'), 
			'desc' => esc_html__('pixels', 'dance-studio'), 
			'type' => 'number', 
			'std' => '50', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_search', 
			'title' => esc_html__('Header Search', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
	if (CMSMASTERS_DONATIONS) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_donations_but', 
			'title' => esc_html__('Header Donations Button', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_donations_but_text', 
			'title' => esc_html__('Header Donations Button Text', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate Now!', 'dance-studio'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				esc_attr__('None', 'dance-studio') . '|none', 
				esc_attr__('Header Social Icons', 'dance-studio') . '|social', 
				esc_attr__('Header Custom HTML', 'dance-studio') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'dance-studio' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'dance-studio'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dance-studio') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'dance-studio'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'center', 
			'choices' => array( 
				esc_attr__('Left', 'dance-studio') . '|left', 
				esc_attr__('Right', 'dance-studio') . '|right', 
				esc_attr__('Center', 'dance-studio') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'dance-studio'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'dance-studio') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'dance-studio') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'dance-studio') . '|repeat-y', 
				esc_attr__('Repeat', 'dance-studio') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'dance-studio') . '|scroll', 
				esc_attr__('Fixed', 'dance-studio') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_attr__('Auto', 'dance-studio') . '|auto', 
				esc_attr__('Cover', 'dance-studio') . '|cover', 
				esc_attr__('Contain', 'dance-studio') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'dance-studio'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'dance-studio'), 
			'desc' => esc_html__('pixels', 'dance-studio'), 
			'type' => 'number', 
			'std' => '160', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_attr__('Default', 'dance-studio') . '|default', 
				esc_attr__('Small', 'dance-studio') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_attr__('None', 'dance-studio') . '|none', 
				esc_attr__('Footer Navigation', 'dance-studio') . '|nav', 
				esc_attr__('Social Icons', 'dance-studio') . '|social'
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_fixed_footer', 
			'title' => esc_html__('Fixed Footer', 'dance-studio'), 
			'desc' => esc_html__('enable', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_height', 
			'title' => esc_html__('Footer Height', 'dance-studio'), 
			'desc' => esc_html__('pixels', 'dance-studio'), 
			'type' => 'number', 
			'std' => '400', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'dance-studio'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'dance-studio'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'dance-studio'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'dance-studio') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'dance-studio' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => 'Dance Studio'. ' &copy; 2019 | ' . esc_html__('All Rights Reserved', 'dance-studio'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

