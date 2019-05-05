<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.3
 * 
 * Timetable Event Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_tt_event_meta_fields')) {
function get_custom_tt_event_meta_fields() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['dance-studio' . '_bottom_sidebar']) && $cmsmasters_option['dance-studio' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['dance-studio' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['dance-studio' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['dance-studio' . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsmasters_global_bg = (isset($cmsmasters_option['dance-studio' . '_theme_layout']) && $cmsmasters_option['dance-studio' . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsmasters_global_tt_event_hours = (isset($cmsmasters_option['dance-studio' . '_tt_event_hours']) && $cmsmasters_option['dance-studio' . '_tt_event_hours'] !== '') ? (($cmsmasters_option['dance-studio' . '_tt_event_hours'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_tt_event_hours_title = (isset($cmsmasters_option['dance-studio' . '_tt_event_hours_title']) && $cmsmasters_option['dance-studio' . '_tt_event_hours_title'] !== '') ? $cmsmasters_option['dance-studio' . '_tt_event_hours_title'] : '';
	
	$cmsmasters_global_tt_event_details_title = (isset($cmsmasters_option['dance-studio' . '_tt_event_details_title']) && $cmsmasters_option['dance-studio' . '_tt_event_details_title'] !== '') ? $cmsmasters_option['dance-studio' . '_tt_event_details_title'] : '';
	
	
	$cmsmasters_option_name = 'cmsmasters_tt_event_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsmasters_tt_event'] = array( 
		'label' => esc_html__('Event', 'dance-studio'), 
		'value'	=> 'cmsmasters_tt_event' 
	);
	
	
	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'dance-studio'), 
		'value'	=> 'cmsmasters_layout' 
	);
	
	
	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'dance-studio'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}
	
	
	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'dance-studio'),
		'value'	=> 'cmsmasters_heading' 
	);
	
	
	$custom_tt_event_meta_fields = array( 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_tt_event', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_tt_event', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Event Hours', 'dance-studio'), 
			'desc'	=> esc_html__('show', 'dance-studio'), 
			'id'	=> $cmsmasters_option_name . 'hours', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_tt_event_hours 
		), 
		array( 
			'label'	=> esc_html__('Event Hours Title', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'hours_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_tt_event_hours_title 
		), 
		array( 
			'label'	=> esc_html__('Event Details Title', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'details_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_tt_event_details_title 
		), 
		array( 
			'label'	=> esc_html__('Event Details', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'details', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsmasters_tt_event', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Page Color Scheme', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> esc_html__('Bottom Sidebar', 'dance-studio'), 
			'desc'	=> esc_html__('Show', 'dance-studio'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'dance-studio'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_tt_event_meta_fields;
}
}

