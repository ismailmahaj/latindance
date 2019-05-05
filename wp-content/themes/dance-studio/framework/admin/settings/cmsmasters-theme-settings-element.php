<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.0.3
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function dance_studio_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'dance-studio');
	$tabs['icon'] = esc_attr__('Social Icons', 'dance-studio');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'dance-studio');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'dance-studio');
	$tabs['error'] = esc_attr__('404', 'dance-studio');
	$tabs['code'] = esc_attr__('Custom Codes', 'dance-studio');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'dance-studio');
	}
	
	return $tabs;
}


function dance_studio_options_element_sections() {
	$tab = dance_studio_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'dance-studio');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'dance-studio');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'dance-studio');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'dance-studio');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'dance-studio');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'dance-studio');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'dance-studio');
		
		break;
	default:
		$sections = array();
		
		
		break;	
	}
	
	return $sections;	
} 


function dance_studio_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = dance_studio_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'dance-studio' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'dance-studio'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'dance-studio' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'dance-studio'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-linkedin-circled|#|' . esc_attr__('LinkedIn', 'dance-studio') . '|true', 
				'cmsmasters-icon-facebook-circled|#|' . esc_attr__('Facebook', 'dance-studio') . '|true', 
				'cmsmasters-icon-gplus-circled|#|' . esc_attr__('Google', 'dance-studio') . '|true', 
				'cmsmasters-icon-twitter-circled|#|' . esc_attr__('Twitter', 'dance-studio') . '|true', 
				'cmsmasters-icon-skype-circled|#|' . esc_attr__('Skype', 'dance-studio') . '|true' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_attr__('Dark', 'dance-studio') . '|dark', 
				esc_attr__('Light', 'dance-studio') . '|light', 
				esc_attr__('Mac', 'dance-studio') . '|mac', 
				esc_attr__('Metro Black', 'dance-studio') . '|metro-black', 
				esc_attr__('Metro White', 'dance-studio') . '|metro-white', 
				esc_attr__('Parade', 'dance-studio') . '|parade', 
				esc_attr__('Smooth', 'dance-studio') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'dance-studio'), 
			'desc' => esc_html__('Sets path for switching windows', 'dance-studio'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_attr__('Vertical', 'dance-studio') . '|vertical', 
				esc_attr__('Horizontal', 'dance-studio') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'dance-studio'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'dance-studio'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'dance-studio'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'dance-studio'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'dance-studio'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'dance-studio'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'dance-studio'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'dance-studio'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'dance-studio'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'dance-studio'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'dance-studio'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'dance-studio'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_attr__('Center', 'dance-studio') . '|center', 
				esc_attr__('Fit', 'dance-studio') . '|fit', 
				esc_attr__('Fill', 'dance-studio') . '|fill', 
				esc_attr__('Stretch', 'dance-studio') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets buttons be available or not', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'dance-studio'), 
			'desc' => esc_html__('Enable the arrow buttons', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets the fullscreen button', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'dance-studio'), 
			'desc' => esc_html__('Sets the swipe navigation', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'dance-studio' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'dance-studio'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'dance-studio' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_color', 
			'title' => esc_html__('Text Color', 'dance-studio'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'dance-studio'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ea6045' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'dance-studio'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'dance-studio'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_search', 
			'title' => esc_html__('Search Line', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'dance-studio' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'dance-studio'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'dance-studio'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section',  
			'id' => 'dance-studio' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'dance-studio' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'dance-studio' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'dance-studio' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'dance-studio'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

