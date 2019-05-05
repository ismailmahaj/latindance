<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.3
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function dance_studio_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'dance-studio');
	$tabs['export'] = esc_attr__('Export', 'dance-studio');
	
	
	return $tabs;
}


function dance_studio_options_demo_sections() {
	$tab = dance_studio_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'dance-studio');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'dance-studio');
		
		
		break;
	default:
		$sections = array();
		
		
		break;	
	}
	
	
	return $sections;
} 


function dance_studio_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = dance_studio_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'dance-studio' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'dance-studio'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'dance-studio'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'dance-studio' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'dance-studio'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'dance-studio'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'dance-studio'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

