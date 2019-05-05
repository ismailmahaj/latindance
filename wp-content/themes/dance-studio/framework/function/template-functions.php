<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


 
/* Get Page Container Classes */
function dance_studio_get_page_classes($cmsmasters_option, $classes = false) {
	$browser = new Browser();
	if (
		( $browser->getPlatform() != Browser::PLATFORM_IPHONE ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPOD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPAD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_BLACKBERRY ) && 
		( $browser->getPlatform() != Browser::PLATFORM_ANDROID ) && 
		( $browser->getPlatform() != Browser::PLATFORM_APPLE ) 
	) {
		echo 'csstransition ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_CHROME ) {
		echo 'chrome_only ';
	}

	if (
		( $browser->getBrowser() == Browser::BROWSER_SAFARI ) &&
		( $browser->getBrowser() != Browser::BROWSER_CHROME ) 
	) {
		echo 'safari_only ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_IE ) {
		echo 'ie_only ';
	}

	echo 'cmsmasters_' . $cmsmasters_option['dance-studio' . '_theme_layout'] . ' ';

	if ($cmsmasters_option['dance-studio' . '_fixed_header']) {
		echo 'fixed_header ';
	}
	
	if ($cmsmasters_option['dance-studio' . '_fixed_footer'] && $cmsmasters_option['dance-studio' . '_footer_type'] == 'default') {
		echo 'fixed_footer ';
	}

	if ($cmsmasters_option['dance-studio' . '_header_top_line']) {
		echo 'enable_header_top ';
	}

	if ($cmsmasters_option['dance-studio' . '_header_styles'] != 'default') {
		echo 'enable_header_bottom ';
	}

	if ($cmsmasters_option['dance-studio' . '_header_styles'] == 'r_nav') {
		echo 'enable_header_right ';
	}

	if ($cmsmasters_option['dance-studio' . '_header_styles'] == 'c_nav') {
		echo 'enable_header_centered ';
	}


	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}

	$cmsmasters_header_overlaps = '';

	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_header_overlaps = get_post_meta($cmsmasters_page_id, 'cmsmasters_header_overlaps', true);
	}

	if ($cmsmasters_header_overlaps == '') {
		$cmsmasters_header_overlaps = $cmsmasters_option['dance-studio' . '_header_overlaps'];
	}

	if ($cmsmasters_header_overlaps != 'false') {
		echo 'cmsmasters_heading_under_header ';
	} else {
		echo 'cmsmasters_heading_after_header ';
	}
	
	
	if ($classes && $classes != '') {
		echo esc_attr($classes) . ' ';
	}
}



/* Get Header Top Function */
function dance_studio_header_top($cmsmasters_option) {
	if ($cmsmasters_option['dance-studio' . '_header_top_line']) {
		echo '<div class="header_top" data-height="' . esc_attr($cmsmasters_option['dance-studio' . '_header_top_height']) . '">' . 
			'<div class="header_top_outer">' . 
				'<div class="header_top_inner">';
					
					if (
						$cmsmasters_option['dance-studio' . '_header_top_line_add_cont'] !== 'none' || 
						(
							CMSMASTERS_DONATIONS && 
							isset($cmsmasters_option['dance-studio' . '_header_top_line_donations_but']) && 
							$cmsmasters_option['dance-studio' . '_header_top_line_donations_but'] &&
							isset($cmsmasters_option['dance-studio' . '_header_top_line_donations_but_text']) && 
							$cmsmasters_option['dance-studio' . '_header_top_line_donations_but_text'] != '' 
						)
					) {
						echo '<div class="header_top_right">';
						
						
						if (
							$cmsmasters_option['dance-studio' . '_header_top_line_add_cont'] == 'social' && 
							isset($cmsmasters_option['dance-studio' . '_social_icons'])
						) {
							dance_studio_social_icons();
						} elseif (
							$cmsmasters_option['dance-studio' . '_header_top_line_add_cont'] == 'nav' && 
							has_nav_menu('top_line')
						) {
							echo '<div class="nav_wrap">' . 
								'<a class="responsive_top_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);"></a>' . 
								'<nav>';
							
							
							wp_nav_menu(array( 
								'theme_location' => 	'top_line', 
								'menu_id' => 			'top_line_nav', 
								'menu_class' => 		'top_line_nav'
							));
							
							
							echo '</nav>' . 
							'</div>';
						} elseif (
							$cmsmasters_option['dance-studio' . '_header_top_line_add_cont'] == 'custom' && 
							$cmsmasters_option['dance-studio' . '_header_top_line_short_info'] !== ''
						) {
							echo '<div class="header_top_left">' . 
								'<div class="meta_wrap">' . 
									stripslashes($cmsmasters_option['dance-studio' . '_header_top_line_short_info']) . 
								'</div>' . 
							'</div>';
						}
						
						
						if (
							CMSMASTERS_DONATIONS && 
							isset($cmsmasters_option['dance-studio' . '_header_top_line_donations_but']) && 
							$cmsmasters_option['dance-studio' . '_header_top_line_donations_but'] &&
							isset($cmsmasters_option['dance-studio' . '_header_top_line_donations_but_text']) && 
							$cmsmasters_option['dance-studio' . '_header_top_line_donations_but_text'] != '' 
						) {
							$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
							
							echo '<a href="' . esc_url(get_permalink($cmsmasters_donations_form_page)) . '" class="header_top_donation_but"><span>' . esc_html($cmsmasters_option['dance-studio' . '_header_top_line_donations_but_text']) . '</span></a>';
						}
						
						
						echo '</div>';
					}
					
					
				echo '</div>' . 
			'</div>' . 
			'<div class="header_top_but closed">' . 
				'<span class="cmsmasters-icon-angle-down"></span>' . 
			'</div>' . 
		'</div>';
	}
}



/* Get Header Middle Function */
function dance_studio_header_mid($cmsmasters_option) {
	echo '<div class="header_mid" data-height="' . esc_attr($cmsmasters_option['dance-studio' . '_header_mid_height']) . '">' . 
		'<div class="header_mid_outer">' . 
			'<div class="header_mid_inner">' . 
				'<div class="logo_wrap">';
					
					dance_studio_logo();
					
				echo '</div>';
			
			
			if (
				CMSMASTERS_WOOCOMMERCE
			) {
				dance_studio_woocommerce_cart_dropdown(); 
			}
			
			
			if ($cmsmasters_option['dance-studio' . '_header_styles'] != 'default' && 
				$cmsmasters_option['dance-studio' . '_header_styles'] != 'c_nav'
			) {
				if (
					$cmsmasters_option['dance-studio' . '_header_add_cont'] == 'cust_html' && 
					$cmsmasters_option['dance-studio' . '_header_add_cont_cust_html'] !== ''
				) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								stripslashes($cmsmasters_option['dance-studio' . '_header_add_cont_cust_html']) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				} elseif (
					$cmsmasters_option['dance-studio' . '_header_add_cont'] == 'social' && 
					isset($cmsmasters_option['dance-studio' . '_social_icons'])
				) {
					dance_studio_social_icons();
				}
			}
			
			if ($cmsmasters_option['dance-studio' . '_header_styles'] != 'default') {
				if (
					$cmsmasters_option['dance-studio' . '_header_search'] && 
					$cmsmasters_option['dance-studio' . '_header_styles'] != 'c_nav'
				) {
					echo '<div class="search_wrap">' . 
						'<div class="search_wrap_inner">' .
							'<div class="search_wrap_inner_left">';
							
								get_search_form();
							
							echo '</div>' . 
						'</div>'.
					'</div>';
				}
			}
			
			if (
				$cmsmasters_option['dance-studio' . '_header_styles'] == 'default'
			) { 
				echo '<div class="resp_nav_wrap">' .
					'<div class="resp_nav_wrap_inner">' .
						'<div class="resp_nav_content">' .
							'<a class="responsive_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);"></a>' .
						'</div>' .
					'</div>' .
				'</div>';
				if (
					$cmsmasters_option['dance-studio' . '_header_search'] && 
					$cmsmasters_option['dance-studio' . '_header_styles'] != 'c_nav'
				) {
					echo '<div class="search_wrap">' . 
						'<div class="search_wrap_inner">' .
							'<div class="search_wrap_inner_left">';
							
								get_search_form();
							
							echo '</div>' . 
						'</div>'.
					'</div>';
				}
				
				echo '<!-- _________________________ Start Navigation _________________________ -->' .
				'<nav role="navigation">';
					echo "\t";
					
					$nav_args = array( 
						'theme_location' => 	'primary', 
						'menu_id' => 			'navigation', 
						'menu_class' => 		'navigation', 
						'link_before' => 		'<span>', 
						'link_after' => 		'</span>', 
						'fallback_cb' => 		'dance_studio_fallback_menu' 
					);
					
					
					if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
						$nav_args['link_before'] = '';
						$nav_args['link_after'] = '';
						$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
					}
					
					wp_nav_menu($nav_args);
					
					
					echo "\r";
					echo '<div class="cl"></div>'.
				'</nav>' .
				'<!-- _________________________ Finish Navigation _________________________ -->';
			}
			
			echo '</div>' . 
		'</div>' . 
	'</div>';
}



/* Get Header Bottom Function */
function dance_studio_header_bot($cmsmasters_option) {
	if ($cmsmasters_option['dance-studio' . '_header_styles'] != 'default') {
		echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['dance-studio' . '_header_bot_height']) . '">' . 
			'<div class="header_bot_outer">' . 
				'<div class="header_bot_inner">' . 
					'<div class="resp_nav_wrap">' . 
						'<div class="resp_nav_wrap_inner">' . 
							'<div class="resp_nav_content">' . 
								'<a class="responsive_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);"></a>' . 
							'</div>' . 
						'</div>' . 
					'</div>' . 
					'<!-- _________________________ Start Navigation _________________________ -->' . 
						'<nav role="navigation">';
							echo "\t";
							
							$nav_args = array( 
								'theme_location' => 	'primary', 
								'menu_id' => 			'navigation', 
								'menu_class' => 		'navigation', 
								'link_before' => 		'<span>', 
								'link_after' => 		'</span>', 
								'fallback_cb' => 		'dance_studio_fallback_menu' 
							);
							
							
							if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
								$nav_args['link_before'] = '';
								$nav_args['link_after'] = '';
								$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
							}
						
							wp_nav_menu($nav_args);
						
						
							echo "\r";
							echo '<div class="cl"></div>' .
						'</nav>';
					'<!-- _________________________ Finish Navigation _________________________ -->' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
}


 
/* Get Logo Function */
function dance_studio_logo() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$header_mid_height = (($cmsmasters_option['dance-studio' . '_header_mid_height'] !== '') ? $cmsmasters_option['dance-studio' . '_header_mid_height'] : '95');
	
	
	if ($cmsmasters_option['dance-studio' . '_logo_type'] == 'text') {
		if ($cmsmasters_option['dance-studio' . '_logo_title'] != '') {
			$blog_title = stripslashes($cmsmasters_option['dance-studio' . '_logo_title']);
		} else {
			$blog_title = (get_bloginfo('name')) ? get_bloginfo('name') : 'Dance Studio';
		}
		
		
		if ($cmsmasters_option['dance-studio' . '_logo_subtitle'] != '') {
			$blog_descr = stripslashes($cmsmasters_option['dance-studio' . '_logo_subtitle']);
		} else {
			$blog_descr = (get_bloginfo('description')) ? get_bloginfo('description') : esc_html__('Default Logo Subtitle', 'dance-studio');
		}
		
		
		echo '<a href="' . esc_url(home_url()) . '" title="' . esc_attr($blog_title) . '" class="logo">' . "\n\t" . 
			'<span class="logo_aligner"></span>' . 
			'<span class="logo_text_wrap">' . 
				'<span class="title">' . esc_html($blog_title) . '</span>' . "\n" . 
				($cmsmasters_option['dance-studio' . '_logo_subtitle'] ? '<span class="title_text">' . esc_html($blog_descr) . '</span>' : '') . 
			'</span>' . 
		'</a>';
	} else {
		if ($cmsmasters_option['dance-studio' . '_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url()) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . get_template_directory_uri() . '/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="178" height="30" />' . "\r" . 
			'</a>' . "\n";
			
			
			$logo_def_style_width = (int) ($header_mid_height * (178 / 30));
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_def_style_width}px;
	}
</style>
";
			
			
			echo "
<style type=\"text/css\">
	.header_mid_inner a.logo .logo_retina {
		max-width : 178px;
	}
</style>
";
		} else {
			$logo_img = explode('|', $cmsmasters_option['dance-studio' . '_logo_url']);
			
			
			if (is_numeric($logo_img[0])) {
				$logo_img_url = wp_get_attachment_image_src((int) $logo_img[0], 'full');
			}
			
			
			$logo_img_width = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[1] : '178');
			
			$logo_img_height = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[2] : '70');
			
			
			if ($logo_img_height >= $header_mid_height) {
				$logo_style_width = (int) ($header_mid_height * ($logo_img_width / $logo_img_height));
			} else {
				$logo_style_width = $logo_img_width;
			}
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_style_width}px;
	}
</style>
";
			
			
			echo '<a href="' . esc_url(home_url()) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsmasters_option['dance-studio' . '_logo_url_retina'] != '') {
				$logo_img_retina = explode('|', $cmsmasters_option['dance-studio' . '_logo_url_retina']);
			
				if (is_numeric($logo_img_retina[0])) {
					$logo_img_retina_url = wp_get_attachment_image_src((int) $logo_img_retina[0], 'full');
				}
				
				$logo_img_retina_width = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[1] / 2) : '178');
				
				$logo_img_retina_height = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[2] / 2) : '30');
				
				
				echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		max-width : {$logo_img_retina_width}px;
	}
</style>
";
				
				
				echo '<img class="logo_retina" src="' . 
				((is_numeric($logo_img_retina[0])) ? esc_url($logo_img_retina_url[0]) : esc_url($logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . $logo_img_retina_width . 
				'" height="' . $logo_img_retina_height . 
				'" />' . "\r";
			} else {
				echo '<img class="logo_retina" src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
	}
}



/* Get Footer Logo Function */
function dance_studio_footer_logo() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	if (
		$cmsmasters_option['dance-studio' . '_footer_type'] == 'default' && 
		$cmsmasters_option['dance-studio' . '_footer_logo']
	) {
	
		if ($cmsmasters_option['dance-studio' . '_footer_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url()) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="footer_logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="178" height="30" />' . "\r" . 
			'</a>' . "\n";
			
			
			echo "
	<style type=\"text/css\">
	.footer_inner .logo .footer_logo_retina {
		width : 178px;
	}
	</style>
	";
		} else {
			$footer_logo_img = explode('|', $cmsmasters_option['dance-studio' . '_footer_logo_url']);
			
			
			if (is_numeric($footer_logo_img[0])) {
				$footer_logo_img_url = wp_get_attachment_image_src((int) $footer_logo_img[0], 'full');
			}
			
			
			echo '<a href="' . esc_url(home_url()) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsmasters_option['dance-studio' . '_footer_logo_url_retina'] != '') {
				$footer_logo_img_retina = explode('|', $cmsmasters_option['dance-studio' . '_footer_logo_url_retina']);
			
				if (is_numeric($footer_logo_img_retina[0])) {
					$footer_logo_img_retina_url = wp_get_attachment_image_src((int) $footer_logo_img_retina[0], 'full');
				}
				
				$footer_logo_img_retina_width = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[1] / 2) : '178');
				
				$footer_logo_img_retina_height = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[2] / 2) : '30');
				
				
				echo '<img class="footer_logo_retina" src="' . 
				((is_numeric($footer_logo_img_retina[0])) ? esc_url($footer_logo_img_retina_url[0]) : esc_url($footer_logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . $footer_logo_img_retina_width . 
				'" height="' . $footer_logo_img_retina_height . 
				'" />' . "\r";
			} else {
				echo '<img class="footer_logo_retina" src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
		
	}
}



/* Get Footer Custom HTML Function */
function dance_studio_get_footer_custom_html($cmsmasters_option) {
	if (
		(
			$cmsmasters_option['dance-studio' . '_footer_type'] == 'default' && 
			$cmsmasters_option['dance-studio' . '_footer_html'] !== ''
		)
	) {
		echo '<div class="footer_custom_html">' . 
			do_shortcode(stripslashes($cmsmasters_option['dance-studio' . '_footer_html'])) . 
		'</div>';
	}
}



function dance_studio_get_footer_custom_html_small($cmsmasters_option) {
	if (
		(
			$cmsmasters_option['dance-studio' . '_footer_type'] == 'small' && 
			$cmsmasters_option['dance-studio' . '_footer_html'] !== ''
		)
	) {
		echo '<div class="footer_custom_html">' . 
			do_shortcode(stripslashes($cmsmasters_option['dance-studio' . '_footer_html'])) . 
		'</div>';
	}
}



/* Get Footer Navigation Function */
function dance_studio_get_footer_nav($cmsmasters_option) {
	if (
		has_nav_menu('footer') && 
		(
			(
				$cmsmasters_option['dance-studio' . '_footer_type'] == 'default' && 
				$cmsmasters_option['dance-studio' . '_footer_nav']
			) || (
				$cmsmasters_option['dance-studio' . '_footer_type'] == 'small' && 
				$cmsmasters_option['dance-studio' . '_footer_additional_content'] == 'nav'
			)
		)
	) {
		echo '<nav>';
			
			
			wp_nav_menu(array( 
				'theme_location' => 'footer', 
				'menu_id' => 'footer_nav', 
				'menu_class' => 'footer_nav' 
			));
		
		
			echo '</nav>';
	}
}



/* Get Footer Social Icons Function */
function dance_studio_get_footer_social_icons($cmsmasters_option) {
	if (
		isset($cmsmasters_option['dance-studio' . '_social_icons']) && 
		(
			(
				$cmsmasters_option['dance-studio' . '_footer_type'] == 'default' && 
				$cmsmasters_option['dance-studio' . '_footer_social']
			) || (
				$cmsmasters_option['dance-studio' . '_footer_type'] == 'small' && 
				$cmsmasters_option['dance-studio' . '_footer_additional_content'] == 'social'
			)
		)
	) {
		dance_studio_social_icons();
	}
}




/* Get Page Heading Function */
function dance_studio_page_heading() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}
	
	
	$cmsmasters_heading = '';
	
	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_heading = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading', true);
	}
	
	
	if (
		$cmsmasters_heading != '' && 
		(
			is_singular() || 
			(CMSMASTERS_WOOCOMMERCE && is_shop())
		)
	) {
		$cmsmasters_heading_block_disabled = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_block_disabled', true);
		$cmsmasters_header_overlaps = get_post_meta($cmsmasters_page_id, 'cmsmasters_header_overlaps', true);
			
		$cmsmasters_heading_height = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_height', true);
		$cmsmasters_heading_alignment = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_alignment', true);
		$cmsmasters_heading_scheme = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_scheme', true);
		$cmsmasters_heading_bg_color = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_color', true);
		$cmsmasters_heading_bg_img_enable = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_img_enable', true);
		$cmsmasters_heading_bg_img = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_img', true);
		$cmsmasters_heading_bg_rep = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_rep', true);
		$cmsmasters_heading_bg_att = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_att', true);
		$cmsmasters_heading_bg_size = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_size', true);
		
		$cmsmasters_heading_title = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_title', true);
		$cmsmasters_heading_subtitle = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_subtitle', true);
		$cmsmasters_heading_icon = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_icon', true);
		
		$cmsmasters_breadcrumbs = get_post_meta($cmsmasters_page_id, 'cmsmasters_breadcrumbs', true);
	} else {
		$cmsmasters_heading = 'default';
		$cmsmasters_heading_block_disabled = 'false';
		$cmsmasters_header_overlaps = $cmsmasters_option['dance-studio' . '_header_overlaps'] ? 'true' : 'false';
		
		$cmsmasters_heading_height = $cmsmasters_option['dance-studio' . '_heading_height'];
		$cmsmasters_heading_alignment = $cmsmasters_option['dance-studio' . '_heading_alignment'];
		$cmsmasters_heading_scheme = $cmsmasters_option['dance-studio' . '_heading_scheme'];
		$cmsmasters_heading_bg_color = $cmsmasters_option['dance-studio' . '_heading_bg_color'];
		$cmsmasters_heading_bg_img_enable = $cmsmasters_option['dance-studio' . '_heading_bg_image_enable'] ? 'true' : 'false';
		$cmsmasters_heading_bg_img = $cmsmasters_option['dance-studio' . '_heading_bg_image'];
		$cmsmasters_heading_bg_rep = $cmsmasters_option['dance-studio' . '_heading_bg_repeat'];
		$cmsmasters_heading_bg_att = $cmsmasters_option['dance-studio' . '_heading_bg_attachment'];
		$cmsmasters_heading_bg_size = $cmsmasters_option['dance-studio' . '_heading_bg_size'];
		
		$cmsmasters_breadcrumbs = $cmsmasters_option['dance-studio' . '_breadcrumbs'] ? 'true' : 'false';
	}
	
	
	list($cmsmasters_layout) = dance_studio_theme_page_layout_scheme();
	
	
	if (
		$cmsmasters_heading_block_disabled == 'true' && 
		$cmsmasters_layout == 'fullwidth' && 
		$cmsmasters_header_overlaps == 'true' 
	) {
		echo "";
	} else {
		if ($cmsmasters_heading == 'disabled') {
			echo "<div class=\"headline\">
				<div class=\"headline_outer cmsmasters_headline_disabled\"></div>
			</div>";
		} elseif ($cmsmasters_heading != 'disabled') {
			$options_img = explode('|', $cmsmasters_heading_bg_img);
			
			
			if (is_numeric($options_img[0])) {
				$options_img_url = wp_get_attachment_image_src((int) $options_img[0], 'full');
			}
			
			
			echo "<style type=\"text/css\">";
			
			
			if ($cmsmasters_heading_bg_img_enable == 'true' && $cmsmasters_heading_bg_img != '') {
				echo ".headline_outer {
					background-image:url(" . ((is_numeric($options_img[0])) ? esc_url($options_img_url[0]) : esc_url($options_img[0])) . ");
					background-repeat:{$cmsmasters_heading_bg_rep};
					background-attachment:{$cmsmasters_heading_bg_att};
					background-size:{$cmsmasters_heading_bg_size};
				}";
			}
			
			
			echo ".headline_color {
					background-color:{$cmsmasters_heading_bg_color};
				}
				.headline_aligner, 
				.cmsmasters_breadcrumbs_aligner {
					min-height:{$cmsmasters_heading_height}px;
				}
			</style>
			<div class=\"headline cmsmasters_color_scheme_{$cmsmasters_heading_scheme}\">
				<div class=\"headline_outer" . ($cmsmasters_heading == 'disabled' ? ' cmsmasters_headline_disabled' : '') . "\">
					<div class=\"headline_color\"></div>
					<div class=\"headline_inner align_{$cmsmasters_heading_alignment}\">
						<div class=\"headline_aligner\"></div>" . 
						'<div class="headline_text' . (($cmsmasters_heading == 'custom') ? (($cmsmasters_heading_icon != '') ? ' headline_icon ' . $cmsmasters_heading_icon : '') . (($cmsmasters_heading_subtitle != '') ? ' headline_subtitle' : '') : '') . '">';
			
			
			if ($cmsmasters_heading == 'custom') {
				if ($cmsmasters_heading_title != '') {
					echo '<h1 class="entry-title">' . esc_html($cmsmasters_heading_title) . '</h1>';
				}
				
				if ($cmsmasters_heading_subtitle != '') {
					echo '<h4 class="entry-subtitle">' . esc_html($cmsmasters_heading_subtitle) . '</h4>';
				}
			} elseif (CMSMASTERS_WOOCOMMERCE && is_woocommerce()) {
				echo '<h1 class="entry-title">';
				
					esc_html(woocommerce_page_title());
					
				echo '</h1>';
			} elseif (is_archive() || is_search()) {
				echo '<h1 class="entry-title">';
				
				
				if (is_search()) {
					global $wp_query;
					
					
					if (!empty($wp_query->found_posts)) {
						echo sprintf(esc_html(_n('1 search result for: %2$s', '%1$d search results for: %2$s', $wp_query->found_posts, 'dance-studio')), $wp_query->found_posts, get_search_query());
					} else {
						echo sprintf(esc_html__('0 search results for: %s', 'dance-studio'), get_search_query());
					}
				} elseif (is_archive()) {
					if (is_author()) {
						if (get_the_author_meta('first_name') != '' || get_the_author_meta('last_name') != '') {
							echo sprintf(esc_html__('Author: %1$s (%2$s %3$s)', 'dance-studio'), '<span class="vcard">' . get_the_author() . '</span>', get_the_author_meta('first_name'), get_the_author_meta('last_name'));
						} else {
							echo sprintf(esc_html__('Author: %s', 'dance-studio'), '<span class="vcard">' . get_the_author() . '</span>');
						}
					} elseif (CMSMASTERS_EVENTS_CALENDAR && 
					(
						tribe_is_list_view() || 
						tribe_is_month() || 
						tribe_is_day() || 
						(function_exists('tribe_is_past') && tribe_is_past()) || 
						(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
						(function_exists('tribe_is_week') && tribe_is_week()) || 
						(function_exists('tribe_is_map') && tribe_is_map()) || 
						(function_exists('tribe_is_photo') && tribe_is_photo()) 
					)) {
						echo 'Events';
					}
					else {
						echo get_the_archive_title();
					}
				}
				
				
				echo '</h1>';
			} elseif ($cmsmasters_heading == 'default') {
				echo the_title('<h1 class="entry-title">', '</h1>', false);
			}
			
			
			echo '</div>';
			
			
			if ( 
				!is_front_page() && 
				$cmsmasters_breadcrumbs == 'true' && 
				!(
					CMSMASTERS_EVENTS_CALENDAR && 
					(
						tribe_is_list_view() || 
						tribe_is_month() || 
						tribe_is_day() || 
						(function_exists('tribe_is_past') && tribe_is_past()) || 
						(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
						(function_exists('tribe_is_week') && tribe_is_week()) || 
						(function_exists('tribe_is_map') && tribe_is_map()) || 
						(function_exists('tribe_is_photo') && tribe_is_photo()) 
					)
				)
			) {
				echo '<div class="cmsmasters_breadcrumbs">' . 
					'<div class="cmsmasters_breadcrumbs_aligner"></div>' . 
					'<div class="cmsmasters_breadcrumbs_inner">';
				
				
				if (CMSMASTERS_WOOCOMMERCE && is_woocommerce()) {
					woocommerce_breadcrumb();
				} elseif (function_exists('yoast_breadcrumb')) {
					$yoast_enable = get_option('wpseo_internallinks');
					
					
					if ($yoast_enable['breadcrumbs-enable']) {
						yoast_breadcrumb();
					} else {
						breadcrumbs();
					}
				} else {
					breadcrumbs();
				}
				
				
				echo '</div>' . 
				'</div>';
			}
			
			
			echo "</div>
				</div>
			</div>";
		}
	}
}



/* Get Social Icons Function */
function dance_studio_social_icons() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	echo '<div class="social_wrap">' . "\n" . 
		'<div class="social_wrap_inner">' . "\n" . 
			'<ul>' . "\n";
	
	
	foreach ($cmsmasters_option['dance-studio' . '_social_icons'] as $cmsmasters_social_icons) {
		$cmsmasters_social_icon = explode('|', $cmsmasters_social_icons);
		
		if (
			(isset($cmsmasters_social_icon[4]) && trim($cmsmasters_social_icon[4]) != '') ||
			(isset($cmsmasters_social_icon[5]) && trim($cmsmasters_social_icon[5]) != '')
		) {
			$social_icon_color = ' cmsmasters_social_icon_color';
		} else {
			$social_icon_color = '';
		}
		
		
		echo '<li>' . "\n\t" . 
			'<a href="' . esc_url($cmsmasters_social_icon[1]) . '" class="' . $cmsmasters_social_icon[0] . '" title="' . esc_attr($cmsmasters_social_icon[2]) . '"' . (($cmsmasters_social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
		'</li>' . "\n";
	}
	
	
	echo '</ul>' . "\r" . 
		'</div>' . "\r" . 
	'</div>' . "\r";
}



/* Get Posts Thumbnail Function */
function dance_studio_thumb($cmsmasters_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false, $unique = false, $link_icon = false, $placeholder_icon = 'cmsmasters_theme_icon_image') {
	$args = array( 
		'class' => (($fullwidth) ? 'full-width' : ''), 
		'alt' => cmsmasters_title($cmsmasters_id, false), 
		'title' => cmsmasters_title($cmsmasters_id, false) 
	);
	
	
	$link_href = ($attachment) ? wp_get_attachment_image_src(strstr($attachment, '|', true), 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsmasters_id), 'full');
	
	
	if (!$unique) {
		$unique_id = uniqid();
	} else {
		$unique_id = $unique;
	}
	
	
	$out = '<figure class="cmsmasters_img_wrap">' . 
		'<a href="' . (($link) ? get_permalink() : $link_href[0]) . '"' . 
		' title="' . cmsmasters_title($cmsmasters_id, false) . '"' . 
		(($group) ? ' rel="ilightbox[' . $group . '_' . $unique_id . ']"' : '') . 
		' class="cmsmasters_img_link' . 
		(($preload) ? ' preloader' . (($highImg) ? ' highImg' : '') : '') . 
		($link_icon ? ' ' . $link_icon : '') . 
		'">';
	
	
	if ($attachment) {
		$out .= wp_get_attachment_image(strstr($attachment, '|', true), (($type) ? $type : 'full'), false, $args);
	} elseif (has_post_thumbnail($cmsmasters_id)) {
		$out .= get_the_post_thumbnail($cmsmasters_id, (($type) ? $type : 'full'), $args);
	} else {
		$out .= '<span class="img_placeholder ' . $placeholder_icon . '"></span>';
	}
	
	
	$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Thumbnail With Rollover Function */
function dance_studio_thumb_rollover($cmsmasters_id, $type = 'cmsmasters-project-thumb', $rollover = true, $open_link = true, $group = false, $attachment_images = false, $attachment_video_type = false, $attachment_video_link = false, $attachment_video_links = false, $highImg = false, $show = true, $link_redirect = false, $link_url = false, $placeholder_icon = 'cmsmasters_theme_icon_image') {
	$cmsmasters_title = cmsmasters_title($cmsmasters_id, false);

	$args = array( 
		'class' => 'full-width', 
		'alt' => $cmsmasters_title, 
		'title' => $cmsmasters_title 
	);
	
	$unique_id = uniqid();
	
	
	$out = '<figure class="cmsmasters_img_rollover_wrap preloader' . (($highImg) ? ' highImg' : '') . '">';
	
	
	if (has_post_thumbnail($cmsmasters_id)) {
		$out .= get_the_post_thumbnail($cmsmasters_id, (($type) ? $type : 'full'), $args);
		
		$cmsmasters_image_link = wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsmasters_id), 'full');
	} elseif ($attachment_images && $attachment_images[0] != '' && sizeof($attachment_images) > 0) {
		$out .= wp_get_attachment_image(strstr($attachment_images[0], '|', true), (($type) ? $type : 'full'), false, $args);
		
		$cmsmasters_image_link = wp_get_attachment_image_src(strstr($attachment_images[0], '|', true), 'full');
	} else {
		$out .= '<span class="img_placeholder ' . $placeholder_icon . '"></span>';
		
		$cmsmasters_image_link = '';
	}
	
	
	$is_video_selfhosted = false;
	
	
	if (
		$attachment_video_type == 'selfhosted' && 
		!empty($attachment_video_links) && 
		sizeof($attachment_video_links) > 0
	) {
		$is_video_selfhosted = true;
		
		
		$shv_out = 'href="' . esc_url($attachment_video_links[0]) . '"';
		
		
		$shvl_out = '';
		
		
		unset($attachment_video_links[0]);
		
		
		foreach($attachment_video_links as $attachment_video_link_url) {
			$video_format = substr(strrchr($attachment_video_link_url, '.'), 1);
			
			$shvl_out .= $video_format . ":'{$attachment_video_link_url}', ";
		}
		
		
		$shv_out .= ' data-options="' . 
			'html5video: {' . 
				substr($shvl_out, 0, -2) . 
			'}' . 
		'"';
	}
	
	
	if ($rollover) {
		$out .= '<div class="cmsmasters_img_rollover">';
		
		if (
			$group && 
			(
				(
					$attachment_video_type == 'embedded' && 
					$attachment_video_link != ''
				) || 
				$is_video_selfhosted || 
				$cmsmasters_image_link != ''
			)
		) {
			$out .= '<a ' . ($is_video_selfhosted ? $shv_out : 'href="' . ((!$attachment_video_link) ? esc_url($cmsmasters_image_link[0]) : $attachment_video_link) . '"') . ' rel="ilightbox[' . esc_attr($cmsmasters_id) . '_' . esc_attr($unique_id) . ']" title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_image_link"><span class="cmsmasters_theme_icon_link_pj"></span></a>';
		}
		
		
		if ($open_link) {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? $link_url : get_permalink($cmsmasters_id)) . '" title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_open_link"><span class="cmsmasters_theme_icon_link_pj"></span></a>';
		}
		
		$out .= '</div>';
	} elseif ($open_link) {
		$out .= '<div class="cmsmasters_img_rollover">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? $link_url : get_permalink($cmsmasters_id)) . '" title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_open_post_link"></a>' . 
		'</div>';
	}
	
	
	$out .= '</figure>';
	
	
	if ($group && $attachment_images && sizeof($attachment_images) > 1) {
		if (!has_post_thumbnail($cmsmasters_id)) {
			unset($attachment_images[0]);
		}
		
		$out .= '<div class="dn">';
		
		foreach ($attachment_images as $attachment_image) {
			$attachment_image_link = wp_get_attachment_image_src(strstr($attachment_image, '|', true), 'full');
			
			$out .= '<figure>' . 
				'<a href="' . esc_url($attachment_image_link[0]) . '" rel="ilightbox[' . $cmsmasters_id . '_' . $unique_id . ']" title="' . esc_attr($cmsmasters_title) . '" class="preloader highImg">' . 
					wp_get_attachment_image(strstr($attachment_image, '|', true), 'full', false, $args) . 
				'</a>' . 
			'</figure>';
		}
		
		$out .= '</div>';
	}
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Small Thumbnail Function */
function dance_studio_thumb_small($cmsmasters_id, $type = 'post', $w = 100, $h = 100, $show = true) {
	$out = '<figure class="alignleft">' . 
		'<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title($cmsmasters_id, false) . '">';

		$args = array( 
			'alt' => cmsmasters_title($cmsmasters_id, false), 
			'title' => cmsmasters_title($cmsmasters_id, false), 
			'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
		);
		
		
		if (has_post_thumbnail()) {
			$out .= get_the_post_thumbnail($cmsmasters_id, 'cmsmasters-square-thumb', $args);
		} elseif ($type == 'post') { // Post type - post
			if (get_post_format() == 'audio') {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_audio"></span>';
			} elseif (get_post_format() == 'gallery') {
				$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsmasters_id, 'cmsmasters_post_images', true))));
				
				$cmsmasters_post_image = $cmsmasters_post_images[0];
				
				if (isset($cmsmasters_post_image) && $cmsmasters_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_gallery"></span>';
				}
			} elseif (get_post_format() == 'image') {
				$cmsmasters_post_image = get_post_meta($cmsmasters_id, 'cmsmasters_post_image_link', true);
				
				if (isset($cmsmasters_post_image) && $cmsmasters_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_image"></span>';
				}
			} elseif (get_post_format() == 'video') {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_video"></span>';
			} else {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_std"></span>';
			}
		} elseif ($type == 'project') { // Post type - project
			if (get_post_format() == 'gallery' || get_post_format() == 'standard') {
				$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsmasters_id, 'cmsmasters_project_images', true))));
				
				$cmsmasters_project_image = $cmsmasters_project_images[0];
				
				if (isset($cmsmasters_project_image) && $cmsmasters_project_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_project_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_gallery"></span>';
				}
			} else {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_video"></span>';
			}
		} elseif ($type == 'profile') { // Post type - profile
			$out .= '<span class="img_placeholder cmsmasters_theme_icon_person"></span>';
		}
		
		$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}



/* Get Title Function */
function cmsmasters_title($cmsmasters_id, $show = true) { 
	$cmsmasters_heading = get_post_meta($cmsmasters_id, 'cmsmasters_heading', true);
	
	$cmsmasters_heading_title = get_post_meta($cmsmasters_id, 'cmsmasters_heading_title', true);
	
	$out = '';
	
	if ($cmsmasters_heading == 'custom' && $cmsmasters_heading_title != '') {
		$out .= esc_attr($cmsmasters_heading_title);
	} else {
		$out .= esc_attr(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id));
	} 
    
	
    if ($show) {
        echo wp_kses_post($out);
    } else {
        return wp_kses_post($out);
    }
}



/* Get Heading Function */
function cmsmasters_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<header class="entry-header">' . 
		'<' . esc_html($tag) . ' class="entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}





/****************************** Blog, Portfolio, Profiles Single Functions ******************************/

/* Get Previous & Next Post Links Function */
function dance_studio_prev_next_posts() {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
		
		previous_post_link('<span class="cmsmasters_prev_post">%link<span class="cmsmasters_theme_icon_slide_' . (!is_rtl() ? 'prev' : 'next') . '"></span></span>');
		
		
		next_post_link('<span class="cmsmasters_next_post">%link<span class="cmsmasters_theme_icon_slide_' . (!is_rtl() ? 'next' : 'prev') . '"></span></span>');
		
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
if (!function_exists('dance_studio_sharing_box')) {

function dance_studio_sharing_box($title_box = false, $tag = 'h3') {
	$page_link = urlencode(get_permalink());
	
	$social_title = cmsmasters_title(get_the_ID(), false);
	
	$website_name = get_bloginfo('name');
	
	
	if (has_post_thumbnail() && get_post_format() != '' || get_post_type() != 'post' ) {
		$post_img_id = get_post_thumbnail_id();
		
		$post_img_url = wp_get_attachment_url($post_img_id);
		
		$pinterest_img = urlencode($post_img_url);
	} else {
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', do_shortcode(get_the_content()), $img_matches);



		
		
		if (!empty($img_matches[1][0])) {
			$first_img = $img_matches[1][0];
		} else {



			$first_img = get_template_directory_uri() . '/img/logo.png';
		}
		
		
		$pinterest_img = urlencode($first_img);
	}
	
	
	echo "<aside class=\"share_posts\">
		" . ($title_box ? "<{$tag} class=\"share_posts_title\">{$title_box}</{$tag}>" : "") . "
		<div class=\"share_posts_inner\">
			<a class=\"cmsmasters-icon-facebook-circled\" href=\"https://www.facebook.com/sharer/sharer.php?display=popup&u={$page_link}\">" . "</a>
			<a class=\"cmsmasters-icon-gplus-circled\" href=\"https://plus.google.com/share?url={$page_link}\">" . "</a>
			<a class=\"cmsmasters-icon-twitter-circled\" href=\"https://twitter.com/intent/tweet?text=" . urlencode(html_entity_decode(sprintf(esc_attr__("Check out '%s' on %s website", 'dance-studio'), $social_title, $website_name), ENT_QUOTES, 'UTF-8')) . "&url={$page_link}\">" . "</a>
			<a class=\"cmsmasters-icon-pinterest-circled-1\" href=\"https://pinterest.com/pin/create/button/?url={$page_link}&media={$pinterest_img}&description={$social_title}\">" . "</a>
		</div>
	</aside>
";
}

}

/* Get More Posts Slider Function */
if (!function_exists('dance_studio_related')) {

function dance_studio_related($tag = 'h3', $box_type = false, $tgsarray = null, $items_number = 3, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post_not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

		$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


		$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));
		
		
		echo "
<aside class=\"cmsmasters_single_slider" . (($type == 'post') ? ' cmsmasters_single_slider_post' : '') . "\">";
	
	if ($r_query->have_posts()) {
		echo "
		<script type=\"text/javascript\">
			jQuery(document).ready(function () { 
				var container = jQuery('.cmsmasters_single_slider_wrap'), 
					containerWidth = container.width(), 
					contentWrap = container.closest('.content_wrap'), 
					firstPost = container.find('.cmsmasters_single_slider_post'), 
					postMinWidth = Number(firstPost.css('minWidth').replace('px', '')), 
					postThreeColumns = (postMinWidth * 4) - 1, 
					postTwoColumns = (postMinWidth * 3) - 1, 
					postOneColumns = (postMinWidth * 2) - 1, 
					itemsNumber = 2;
				
				
				if (contentWrap.hasClass('fullwidth')) {
					itemsNumber = 4;
				} else if (contentWrap.hasClass('r_sidebar') || contentWrap.hasClass('l_sidebar')) {
					itemsNumber = 3;
				}
				
				
				jQuery('.cmsmasters_single_slider_wrap').owlCarousel( {
					items : 				itemsNumber,  
					transitionStyle : 		false, 
					rewindNav : 			true, 
					slideSpeed : 			200, 
					paginationSpeed : 		800, 
					rewindSpeed : 			1000, 
					stopOnHover : 			true, 
					autoHeight : 			true, 
					addClassActive : 		true, 
					responsiveBaseWidth : 	'.cmsmasters_single_slider_wrap', 
					pagination : 			false, 
					navigation : 			false, 
					navigationText : [ 
						'', 
						'' 
					] 
				} );
			} );	
		</script>
		";
	}
	
	
	echo "<{$tag}>";
		
		
		if ($type == 'post') {
			if ($box_type == 'related'){
				esc_attr_e('Related posts', 'dance-studio');
			}
			elseif ($box_type == 'popular') {
				esc_attr_e('Popular posts', 'dance-studio');
			}
			else  {
				esc_attr_e('Recent posts', 'dance-studio');
			}
		} elseif ($type == 'campaign') {
			esc_attr_e('More campaigns', 'dance-studio');
		} else {
			if ($box_type == 'related') {			
				esc_attr_e('Related Projects', 'dance-studio');
			} elseif ($box_type == 'popular') {
				esc_attr_e('Popular Projects', 'dance-studio');
			} elseif ($box_type == 'recent') {
				esc_attr_e('Latest Projects', 'dance-studio');
			}
		}
		
		
		echo "</{$tag}>
	<div class=\"cmsmasters_single_slider_inner\">
		<div class=\"cmsmasters_single_slider_wrap\">";
		
		
		if ($r_query->have_posts()) :
			while ($r_query->have_posts()) : $r_query->the_post();
				echo "
			<div class=\"cmsmasters_single_slider_post\">
				<div class=\"cmsmasters_single_slider_post_content\">";
				
				
				dance_studio_thumb_rollover(get_the_ID(), 'post-thumbnail', true, true, false, $cmsmasters_project_images, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
				
				
				if ($type == 'campaign') {
					echo "
					<div class=\"related_posts_campaign_wrap\">";
				}
				
				
				dance_studio_get_post_category($type, 'related');
				
				
				echo "
						<h5 class=\"related_posts_item_title\">" . 
							"<a href=\"" . esc_url(get_permalink()) . "\" title=\"" . cmsmasters_title(get_the_ID(), false) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>" . 
						"</h5>";
				
				dance_studio_get_post_date();
				if ($type == 'campaign') {
					$target = get_the_campaign_target(get_the_ID(), true);
					
					$funds = get_the_funds(get_the_ID());
					
					
					$progress = ($target != 0 ? floor((100 / $target) * $funds) : 0);
					
					$togo_number = $target - $funds;
					
					
					echo "
						<span class=\"related_posts_campaign_togo\">" . 
							esc_html__('Target:', 'dance-studio') . 
							" <span>" . cmsmasters_donations_currency($target) . "</span>" . 
							"</span>
						<div class=\"cmsmasters_campaign_donated\">
							" . do_shortcode("[cmsmasters_stats count=\"1\"][cmsmasters_stat progress=\"{$progress}\" subtitle=\"" . sprintf(esc_attr__('%s to go', 'dance-studio'), cmsmasters_donations_currency($togo_number)) . "\"]" . esc_html__('Donated', 'dance-studio') . "[/cmsmasters_stat][/cmsmasters_stats]") . "
						</div>
					</div>
				";
				}
				
				
				echo "</div>
			</div>";
			endwhile;
		else :
			echo "
			<h5>";
			
			
			if ($type == 'post') {
				esc_html_e('No related posts found', 'dance-studio');
			} elseif ($type == 'campaign') {
				esc_html_e('No related campaigns found', 'dance-studio');
			} else {
				esc_html_e('No related projects found', 'dance-studio');
			}
			
			
			echo "</h5>";
		endif;
		
		
		wp_reset_postdata();
		
		
		echo "
		</div>
	</div>
</aside>
";
	}
}

}



/* Get About Author Box Function */
function dance_studio_author_box($title_box = false, $tag = 'h3', $author_tag = 'h4') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="about_author_avatar">' . 
			get_avatar($user_email, 130, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="about_author_cont">';
		
		
		if ($out != '') {
			echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
		}
		
		
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		
		
		if ($user_url) {
			echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'dance-studio') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}




/* Get Posts Author Avatar Function */
function dance_studio_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}


/* Get Category List */
function dance_studio_get_the_category_list($cmsmasters_id, $taxonomy, $sep = '', $before = '', $after = '') {
	$terms = get_the_terms($cmsmasters_id, $taxonomy);
	
	
	if (is_wp_error($terms)) {
		return $terms;
	}
	
	
	if (empty($terms)) {
		return false;
	}
	
	
	$links = array();
	
	
	foreach ($terms as $term) {
		$link = get_term_link($term, $taxonomy);
		
		
		if (is_wp_error($link)) {
			return $link;
		}
		
		
		$links[] = '<a href="' . esc_url($link) . '" class="cmsmasters_cat_color cmsmasters_cat_' . esc_attr($term->term_id) . '" rel="category tag">' . esc_html($term->name) . '</a>';
	}
	
	
    $term_links = apply_filters("term_links-$taxonomy", $links);
	
	
	return $before . implode($sep, $term_links) . $after;
}



/* Get Pingbacks & Trackbacks Function */
if (!function_exists('dance_studio_get_post_pings')) {

function dance_studio_get_post_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (pings_open($id) && sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'dance-studio') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

}
