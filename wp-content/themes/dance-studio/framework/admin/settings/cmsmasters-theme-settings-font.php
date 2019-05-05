<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.3
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function dance_studio_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'dance-studio');
	$tabs['link'] = esc_attr__('Links', 'dance-studio');
	$tabs['nav'] = esc_attr__('Navigation', 'dance-studio');
	$tabs['heading'] = esc_attr__('Heading', 'dance-studio');
	$tabs['other'] = esc_attr__('Other', 'dance-studio');
	
	return $tabs;
}


function dance_studio_options_font_sections() {
	$tab = dance_studio_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'dance-studio');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'dance-studio');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'dance-studio');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'dance-studio');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'dance-studio');
		
		break;
	default:
		$sections = array();
		
		
		break;	
	}
	
	return $sections;
} 


function dance_studio_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = dance_studio_get_the_tab();
	}
	
	
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'dance-studio' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'dance-studio' . '_link_font', 
			'title' => esc_html__('Links Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'dance-studio' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'none', 
			'choices' => dance_studio_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'dance-studio' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'dance-studio' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'40', 
				'line_height' => 		'53', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'36', 
				'line_height' => 		'42', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'24', 
				'line_height' => 		'30', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'dance-studio' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'dance-studio' . '_button_font', 
			'title' => esc_html__('Button Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'dance-studio' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Lato', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'dance-studio' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'dance-studio' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'dance-studio'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'16', 
				'line_height' => 		'30', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

