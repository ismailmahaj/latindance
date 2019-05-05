<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = dance_studio_get_google_fonts_list();
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#000000', 
			'#ffffff', 
			'#d43c18', 
			'#5173a6', 
			'#959595', 
			'#c0c0c0', 
			'#f4f4f4', 
			'#e1e1e1' 
		);
		
		
		return $palettes;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = dance_studio_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = dance_studio_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['header_top']);
		
		unset($list['header_bottom']);
		
		
		$out = array_merge($list, dance_studio_custom_color_schemes_list());
		
		
		return $out;
	}
}

