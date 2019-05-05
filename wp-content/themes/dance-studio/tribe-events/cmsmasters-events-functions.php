<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Website Events Functions
 * Created by CMSMasters
 * 
 */


/* Replace Styles */
function replace_tribe_events_calendar_stylesheet() {
	wp_deregister_style('tribe-events-calendar-style');
	wp_deregister_style('tribe-events-full-calendar-style');
	wp_deregister_style('tribe-events-admin-menu');
	
	wp_enqueue_style('tribe-events-bootstrap-datepicker-css');
}

add_action('wp_enqueue_scripts', 'replace_tribe_events_calendar_stylesheet', 100);


/* Replace Pro Styles */
function replace_tribe_events_calendar_pro_stylesheet() {
	wp_deregister_style('tribe-events-calendar-pro-style');
	wp_deregister_style('tribe-events-full-pro-calendar-style');
	wp_deregister_style('widget-calendar-pro-style');
}

add_action('wp_enqueue_scripts', 'replace_tribe_events_calendar_pro_stylesheet', 100);


/* Replace Widget Styles */
function replace_tribe_events_calendar_widget_stylesheet() {
	$styleUrl = '';
	
	
	return $styleUrl;
}

add_filter('tribe_events_pro_widget_calendar_stylesheet_url', 'replace_tribe_events_calendar_widget_stylesheet');


/* Replace Responsive Styles */
function customize_tribe_events_breakpoint() {
    return 749;
}

add_filter('tribe_events_mobile_breakpoint', 'customize_tribe_events_breakpoint');



