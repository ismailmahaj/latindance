<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


get_template_part('framework/class/class-tgm-plugin-activation');


if (!function_exists('dance_studio_register_theme_plugins')) {

function dance_studio_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'dance-studio'),  
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.7.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'dance-studio'),  
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'dance-studio'),  
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.4.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		),
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'dance-studio'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 		
		array( 
			'name'					=> esc_html__('Timetable', 'dance-studio'),  
			'slug'					=> 'timetable', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/timetable.zip', 
			'required'				=> false, 
			'version'				=> '5.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'dance-studio'),  
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.7.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'dance-studio'),  
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.8.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		),  
		array( 
			'name'					=> esc_html__('Envato Market', 'dance-studio'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		),
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'dance-studio'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'dance-studio'),  
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'dance-studio'),  
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'dance-studio'),  
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('PayPal Donations', 'dance-studio'),  
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'dance-studio'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Instagram Feed', 'dance-studio'),  
			'slug' 					=> 'instagram-feed', 
			'required'				=> false 
		)  
	);
	
	
	$config = array( 
		'id' => 			'dance-studio', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'dance-studio'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'dance-studio'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'dance-studio') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'dance_studio_register_theme_plugins');

