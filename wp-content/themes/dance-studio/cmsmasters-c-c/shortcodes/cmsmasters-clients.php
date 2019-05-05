<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Content Composer Clients Shortcode
 * Created by CMSMasters
 * 
 */
 
 
 
extract(shortcode_atts($new_atts, $atts));
	
	
$unique_id = uniqid('', true);
$unique_id = strtr($unique_id, '.', '_');

$this->clients_atts = array(
	'client_out' => '' 
);


$clients_col = '';

if ($columns == 1) {
	$clients_col = 'clients_one';
} elseif ($columns == 2) {
	$clients_col = 'clients_two';
} elseif ($columns == 3) {
	$clients_col = 'clients_three';
} elseif ($columns == 4) {
	$clients_col = 'clients_four';
} elseif ($columns == 5) {
	$clients_col = 'clients_five';
}


do_shortcode($content);

$out = '<style type="text/css"> ' . "\n" . 
	'#cmsmasters_clients_' . $unique_id . ' .cmsmasters_clients_item { ' . 
		'height:' . $height . 'px; ' .  
		'line-height:' . $height . 'px; ' .  
	'} ' . "\n" . 
	'#cmsmasters_clients_' . $unique_id . ' .cmsmasters_clients_item a { ' . 
		'line-height:' . $height . 'px; ' .  
	'} ' . "\n" . 
'</style>' . "\n";


if ($layout == 'slider') {
	$out .= '<script type="text/javascript">' . 
		'jQuery(document).ready(function () { ' . 
			'jQuery("#cmsmasters_clients_' . $unique_id . '").owlCarousel( { ' . 
				'singleItem : false, ' . 
				'items : ' . $columns . ', ' . 
				'itemsDesktopSmall : [768,2], ' . 
				'itemsTablet: [540,1], ' . 
				'slideSpeed : ' . ($speed * 1000) . ', ' . 
				'paginationSpeed : ' . ($speed * 1000) . ', ' . 
				'autoPlay : ' . (($autoplay != 'true') ? 'false' : 'true') . ', ' . 
				'stopOnHover: true, ' . 
				'pagination : ' . (($slides_control != 'true') ? 'false' : 'true') . ', ' . 
				'navigation : ' . (($arrow_control != 'true') ? 'false' : 'true') . ', ' . 
				'navigationText : 	[ ' . 
					'"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", ' . 
					'"<span class=\"cmsmasters_next_arrow\"><span></span></span>" ' .  
				'] ' . 
			'} );' . 
		'} );' . 
	'</script>' . "\n" . 
	'<div class="cmsmasters_clients_slider_wrap"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<div id="cmsmasters_clients_' . $unique_id . '" class="cmsmasters_clients_slider owl-carousel' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'"' . 
		'>' . "\n" . 
		$this->clients_atts['client_out'] . 
		'</div>' . "\n" . 
	'</div>' . "\n";
} else {
	$out .= '<div class="cmsmasters_clients_grid_wrap"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
	'<div id="cmsmasters_clients_' . $unique_id . '" class="cmsmasters_clients_grid' . ' ' . $clients_col . 
	(($classes != '') ? ' ' . $classes : '') . 
	'">' . "\n" . 
	'<div class="cmsmasters_clients_items slides">' . "\n" . 
		$this->clients_atts['client_out'] . 
	'</div>' . "\n" . 
	'</div>' . "\n" . 
	'</div>' . "\n";
}
	
echo dance_studio_return_content($out);	
