<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Content Composer Twitter Stripe Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$out = '';


$unique_id = uniqid('', true);
$unique_id = strtr($unique_id, '.', '_');


if ($user != '') {
	$out .= '<div class="cmsmasters_twitter_wrap">' . 
		'<div>' . 
			'<script type="text/javascript">' . 
				'jQuery(document).ready(function () { ' . 
					'jQuery("#cmsmasters_twitter_' . $unique_id . '").owlCarousel( { ' . 
						'singleItem : true, ' . 
						'transitionStyle: "fade", ' . 
						'stopOnHover: true, ' . 
						'autoHeight : true, ' . 
						'pagination: false, ' . 
						(($control == 'true') ? 'navigation : true, ' : '') . 
						(($autoplay != 'false') ? 'autoPlay : false, ' : 'autoPlay : ' . ($speed * 1000) . ',') . 
						'navigationText : 	[ ' . 
							'"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", ' . 
							'"<span class=\"cmsmasters_next_arrow\"><span></span></span>" ' . 
						'] ' . 
					'} );' . 
				'} );' . 
			'</script>' . 
		'</div>' . "\n" . 
		'<div class="cmsmasters_theme_icon_user_twitter twr_icon"></div>' . "\n" . 
		'<div id="cmsmasters_twitter_' . $unique_id . '" class="owl-carousel cmsmasters_twitter' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
		'>' . "\n";
		
			$tweets = cmsmasters_get_tweets($user, $count);
			
			if ($tweets != '') {
				foreach ($tweets as $t) {
					$out .= '<div class="cmsmasters_twitter_item">' . "\n" . 
						(($date == 'true') ? '<abbr class="published">' . human_time_diff( $t['time'], current_time('timestamp') ) . ' ' . esc_html__('ago', 'dance-studio') . '</abbr>' : '') . 
						'<span class="cmsmasters_twitter_item_content">' . "\n" . $t['text'] . '</span>' . "\n" . 
					'</div>' . "\n";
				}
			} else {
				echo '<div class="cmsmasters_notice cmsmasters_notice_error cmsmasters_theme_icon_cancel">' . "\n" . 
					'<div class="notice_content">' . "\n" . 
						'<p>' . esc_html__('Please add your Twitter API keys', 'dance-studio') . ', ' . '<a target="_blank" href="http://docs.cmsmasters.net/admin2/twitter-functionality/">' . esc_html__('read more how', 'dance-studio') . '</a></p>' . "\n" . 
					'</div>' . "\n" . 
				'</div>' . "\n";
			}
		
		$out .= '</div>' . 
	'</div>';
}

echo dance_studio_return_content($out);
