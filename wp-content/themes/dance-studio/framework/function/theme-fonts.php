<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function dance_studio_theme_fonts() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	blockquote footer, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_content_font_google_font']) . $cmsmasters_option['dance-studio' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_post_comments:before, 
	.cmsmastersLike:before, 
	.cmsmasters_post_cont_info, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_content, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_quote_author, 
	.widget_nav_menu ul ul li a, 
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a, 
	#wp-calendar th, 
	#wp-calendar td, 
	.cmsmasters_twitter .published { 
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 1) . "px;
	}

	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a { 
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 2) . "px;
	}
	
	.widget.widget_text .textwidget ul li, 
	.cmsmasters_img .cmsmasters_img_caption,
	.gallery .gallery-item .gallery-caption,
	.cmsmasters_gallery li.cmsmasters_caption figcaption,
	.wp-caption .wp-caption-text {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_wrap_pagination ul li .cmsmasters_theme_icon_slide_prev, 
	.cmsmasters_wrap_pagination ul li .cmsmasters_theme_icon_slide_next {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 3) . "px;
	}
	
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before, 
	.cmsmasters_project_sort_but:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before {
		width:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 2) . "px !important;
	}
	
	.cmsmasters_twitter .published, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li > a {
		font-weight:700; /* static */
	}
	
	.cmsmastersLike:before,
	.cmsmasters_post_comments:before, 
	.contact_widget_name.cmsmasters_theme_icon_person:before, 
	.contact_widget_email.cmsmasters_theme_icon_user_mail:before, 
	.contact_widget_phone.cmsmasters_theme_icon_user_phone:before, 
	.contact_widget_url.cmsmasters_theme_icon_user_website:before, 
	.adress_wrap.cmsmasters_theme_icon_user_address:before, 
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before, 
	.cmsmasters_project_sort_but:before {
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px !important;
	}
	
	.details_item_desc_like,
	.details_item_desc_comments, 
	.post .cmsmasters_post_meta_info, 
	.cmsmasters_twitter .published {
		height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
	}

	/* Finish Content Font */


	/* Start Link Font */
	a, 
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_link_font_google_font']) . $cmsmasters_option['dance-studio' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_link_font_text_decoration'] . ";
	}
	
	@media only screen and (max-width: 1024px) {
		.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
			font-size:" . ((int)$cmsmasters_option['dance-studio' . '_link_font_font_size'] - 2 ) . "px;
		}
	}
	
	.widget_nav_menu ul li a:hover, 
	.widget_nav_menu > div > ul li .current-menu-item > a, 
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a:hover,
	.cmsmasters_single_slider_post_content .related_posts_item_title a {
		font-weight:700; /* static */
	}

	a:hover {
		text-decoration:" . $cmsmasters_option['dance-studio' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	#navigation > li > a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_nav_title_font_google_font']) . $cmsmasters_option['dance-studio' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_nav_title_font_text_transform'] . ";
	}
	
	
	
	#navigation > li > a > span:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-left:" . ceil(((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] ) * 1.4) . "px;
	}
	
	#navigation ul > li.menu-item-icon > a[data-tag]:after {
		padding-left:" . ceil(((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size']+ 0.5) * 1.4) . "px;
	}
	
	body.rtl #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	body.rtl #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-right:" . ceil(((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] + 3) * 1.2) . "px;
		padding-left:0; /* static */
	}
	
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a {
		font-weight:700; /* static */
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation li a {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] - 3) . "px;
			font-weight:400; /* static */
		}
		
		html #page #header nav #navigation > li.menu-item-hide-text > a > span,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span {
			font-size:" . $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['dance-studio' . '_nav_title_font_line_height'] . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
			padding-left:" . ceil(((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] + 3) * 1.2) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	#navigation ul li a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_line_height'] + 1) . "px;
		font-weight:700; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_line_height'] - 1) . "px;
		font-style:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_nav_dropdown_font_text_transform'] . ";
		font-weight:400; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_line_height'] - 5) . "px;
		font-weight:700; /* static */
	}
	
	#navigation ul li > a[data-tag]:after{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_nav_title_font_line_height'] - 9) . "px;
	}
	
	#navigation ul li a span:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] + 4) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation > li.menu-item-hide-text > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span > span.nav_subtitle {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsmasters_option['dance-studio' . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	#header .logo .title,
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins,
	.post.format-aside .cmsmasters_post_cont .cmsmasters_post_content,
	.post.format-status .cmsmasters_post_cont .cmsmasters_post_content, 
	.cmsmasters_search_post .cmsmasters_search_post_title, 
	.cmsmasters_search_post .cmsmasters_search_post_title a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 14) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_subtitle{
		padding-bottom:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] - 26) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] * 1.5) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] * 1.5 - 3) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] / 2 + 1) . "px;
	}
	 
	.cmsmasters_pricing_table .pricing_title {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] / 2 - 1) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item_inner:before, 
	.cmsmasters_profile.horizontal .profile:before {
		width:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size']) . "px;
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] / 2) . "px;
	}
	
	.cmsmasters_profile.vertical .profile:before {
		height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size']) . "px;
		margin-top:-" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] / 2) . "px;
	}
	
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_search_post_number {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h2_font_google_font']) . $cmsmasters_option['dance-studio' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h2_font_text_decoration'] . ";
	}
	
	.post .cmsmasters_post_format_img:before {
		font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
	}
	
	.timeline .cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day,
	.cmsmasters_sitemap_wrap h2 {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h2_font_font_size'] - 4) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
	}
	
	.post .cmsmasters_post_format_img:before {
		line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter {
		font-size:30px; /* static */
		line-height:52px; /* static */
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-size:15px; /* static */
		line-height:52px; /* static */
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_font_size'] + 12) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_counters.counters_type_horizontal .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] + 14) . "px;
	}
	
	.post .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] - (int) $cmsmasters_option['dance-studio' . '_h2_font_font_size']) / 2) . "px;
	}
	
	.post.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.format-status .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img:after {
		width:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
	}
	
	.post.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img {
		height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] / 2) . "px;
	}
	
	.owl-buttons span:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] - 10) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
	}
	
	.owl-buttons span {
		height:" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] - 10) . "px;
	}
	
	.owl-buttons .owl-prev > span,
	.owl-buttons .owl-next > span {
		margin-top:-" . (((int) $cmsmasters_option['dance-studio' . '_h2_font_font_size'] - 4) / 2). "px;
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_year, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_content,
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_content {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h3_font_google_font']) . $cmsmasters_option['dance-studio' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h3_font_text_decoration'] . ";
	}
	
	.post.format-quote .cmsmasters_post_cont .cmsmasters_quote_content, 
	.post.cmsmasters_timeline_type .cmsmasters_post_format_img:before, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_quote_content, 
	.bypostauthor > .comment-body .alignleft:before,
	.share_posts .share_posts_inner a:before {
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
	}
	
	.bottom_inner .widgettitle {
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
		font-weight:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] - 400) . ";
	}
	  
	.post_nav > span span:before {
		font-size:" .((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] - 16) . "px;
		line-height:" .((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] - 8). "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] . ";
	}
	
	.widget .owl-buttons span:before	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_font_size'] + 4) . "px;
	}
		
	.post.format-quote .cmsmasters_post_cont .cmsmasters_quote_content, 
	.post.cmsmasters_timeline_type .cmsmasters_post_format_img:before, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_quote_content,
	.bypostauthor > .comment-body .alignleft:before, 
	.widget .owl-buttons span:before {
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img {
		bottom:-" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] + 11) . "px;
	}
	
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_header .cmsmasters_slider_project_title {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_year{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] - (int) $cmsmasters_option['dance-studio' . '_h3_font_font_size']) / 2) . "px;
	}
	
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsmasters_timeline_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_timeline_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img {
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] / 2) . "px;
	}
	
	.blog.timeline .post .cmsmasters_post_info {
		width:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] + 50) . "px;
		height:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] + 50) . "px;
	}
	
	.blog.timeline .post.cmsmasters_timeline_left .cmsmasters_post_info {
		right:-" . (((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] + 50) / 2) . "px;
	}
	
	.blog.timeline .post.cmsmasters_timeline_right .cmsmasters_post_info {
		left:-" . (((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] + 50) / 2) . "px;
	}
	
	.widget .owl-buttons span {
		width:" . (((int) $cmsmasters_option['dance-studio' . '_h3_font_font_size'] + 4) / 2) . "px;
		height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.post.cmsmasters_masonry_type.format-status .cmsmasters_post_cont .cmsmasters_post_content,
	.post.cmsmasters_puzzle_type.format-status .cmsmasters_post_cont .cmsmasters_post_content,
	.cmsmasters_posts_slider .post.format-status .cmsmasters_post_cont .cmsmasters_post_content, 
	.post.cmsmasters_masonry_type.format-aside .cmsmasters_post_cont .cmsmasters_post_content, 
	.post.cmsmasters_puzzle_type.format-aside .cmsmasters_post_cont .cmsmasters_post_content, 
	.cmsmasters_posts_slider .post.format-aside .cmsmasters_post_cont .cmsmasters_post_content, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h4_font_google_font']) . $cmsmasters_option['dance-studio' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title a, 
	.about_author .about_author_title,
	.post_comments h4,
	.cmsmasters_tabs h4,
	.comment-respond .comment-reply-title,
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_inner:before,
	.masonry .cmsmasters_masonry_type .cmsmasters_post_cont  .cmsmasters_post_title,
	.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a,	
	.masonry .cmsmasters_masonry_type .cmsmasters_post_cont  .cmsmasters_post_title a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_quotes_slider_type_center .quote_content p {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] + 12) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
	}
	
	.cmsmasters_quotes_slider_type_box .quote_content p {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size']) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] + 10) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
	}
	
	.header_top_inner .social_wrap a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size']) . "px;
	}
	
	@media only screen and (max-width: 767px) {
		.cmsmasters_quotes_slider_type_center .quote_content p,
		.cmsmasters_quotes_slider_type_box .quote_content p {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 3) . "px;
			line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] + 6) . "px;
		}
	}
	
	.quote_grid .quote_content p {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] + 2) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_format_img:before, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_format_img:before, 
	.post.cmsmasters_masonry_type.format-quote .cmsmasters_post_cont .cmsmasters_quote_content, 
	.post.cmsmasters_puzzle_type.format-quote .cmsmasters_post_cont .cmsmasters_quote_content, 
	.cmsmasters_posts_slider .post.format-quote .cmsmasters_post_cont .cmsmasters_quote_content {
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
	}
	
	.post.cmsmasters_masonry_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img {
		bottom:-" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] + 11) . "px;
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_title:before, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] - (int) $cmsmasters_option['dance-studio' . '_h4_font_font_size']) / 2) . "px;
	}
	
	.post.cmsmasters_masonry_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_puzzle_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_masonry_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_puzzle_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_masonry_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	.post.cmsmasters_puzzle_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img:after {
		width:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
	}
	
	.post.cmsmasters_masonry_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-status .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_masonry_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img, 
	.post.cmsmasters_puzzle_type.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img {
		height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_line_height'] / 2) . "px;
	}
	
	.cmsmasters_profile.vertical .pl_subtitle, 
	.cmsmasters_profile.horizontal .pl_subtitle {
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	.post.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_author,
	.cmsmasters_quotes h6.quote_title, 
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h5_font_text_decoration'] . ";
	}
	
	.post.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_time {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h5_font_line_height'] + 4) . "px;
	}
	
	.widgettitle,
	.blog .sticky .cmsmasters_post_cont_inner .cmsmasters_post_cont_date_wrap:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h5_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_period,
	.post .owl-buttons span:before,
	.content_slider .owl-buttons span:before {
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
	}
	
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a {
		line-height:26px; /* static */
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button, 
	dl dt, 
	table.shop_attributes th, 
	fieldset legend,
	.cmsmasters_post_read_more, 
	blockquote footer, 
	.cmsmasters_project_button .cmsmasters_project_read_more,
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day_mon, 
	.post.cmsmasters_masonry_type.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_author, 
	.post.cmsmasters_timeline_type.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_author, 
	.post.cmsmasters_puzzle_type.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_author, 
	.cmsmasters_posts_slider .post.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item .cmsmasters_chat_author_time .cmsmasters_chat_author, 
	#cancel-comment-reply-link, 
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label, 
	.header_top_inner .meta_wrap, 
	.header_top_inner .meta_wrap * {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.post.cmsmasters_timeline_type .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_header .cmsmasters_post_subtitle,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.timeline .cmsmasters_post_info .cmsmasters_post_date .cmsmasters_month,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span a, 
	.cmsmasters_profile .profile .pl_content .pl_subtitle 	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day_mon, 
	.cmsmasters_post_footer_info .cmsmasters_post_date .published,
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label,
	.comment-content .published,
	.cmsmasters_single_slider_post_content .cmsmasters_post_date,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_post_date,
	.alignleft .comment-edit-link,
	.widget .tweet_list .tweet_time,
	.comment-content .comment-reply-link	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
	}
	
	.bottom_inner .widget ul li a,
	.comment-content h6,
	.about_author_inner .author > span,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_twitter .cmsmasters_twitter_item_content,
	.cmsmasters_twitter .cmsmasters_twitter_item_content a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_line_height'] + 2) . "px;
		font-weight:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] - 200) .  ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	
	
	table caption, 
	table th, 
	table th a, 
	.cmsmasters_table tr.cmsmasters_table_row_header, 
	.cmsmasters_table tr.cmsmasters_table_row_header td, 
	.cmsmasters_table tr.cmsmasters_table_row_footer, 
	.cmsmasters_table tr.cmsmasters_table_row_footer td {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] .  ";
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.cmsmasters_quote .wrap_quote_title .quote_title,
	.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	.profile .profile_sidebar .profile_details .profile_details_item_title,
	.profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title,
	.project .project_sidebar .project_details .project_details_item_title,
	.project .project_sidebar .project_features .project_features_item .project_features_item_title,
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a,
	.slider_project_inner .cmsmasters_slider_project_title a,
	.portfolio .project_inner .cmsmasters_project_header .cmsmasters_project_title a {
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] .  ";	
	}
	
	.post_nav > span, 
	.post_nav > span a,
	.share_posts .share_posts_title {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_line_height'] - 4) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
	}
	
	.post .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label {
		text-transform:uppercase; /* static */
	}
	
	#cancel-comment-reply-link {
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	
	.post .cmsmasters_slider_post_header .cmsmasters_slider_post_subtitle {
		font-weight:400; /* static */
	}
		
	.header_top_inner .meta_wrap, 
	.header_top_inner .meta_wrap * {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
		font-weight:900; /* static */
		text-transform:uppercase; /* static */
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button,
	.cmsmasters_search_post_cont_info, 
	.cmsmasters_search_post_cont_info a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_button_font_google_font']) . $cmsmasters_option['dance-studio' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['dance-studio' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_posts_slider .cmsmasters_slider_post_header .cmsmasters_slider_post_subtitle,
	.cmsmasters_search_post_cont_info, 
	.cmsmasters_search_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_font_size'] + 8) . "px;
	}
	
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_line_height'] + 4) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['dance-studio' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	form .formError .formErrorContent {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . ";
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_small_font_font_size'] - 2). "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_small_font_line_height'] - 2) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.quote_subtitle,
	.cmsmasters_post_category a,
	.cmsmasters_project_category a,
	.cmsmasters_profile.vertical .profile .pl_subtitle,
	.cmsmasters_profile.horizontal .pl_subtitle {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
	}

	#navigation > li.menu-item-mega > div.menu-item-mega-container ul ul li.menu-item-mega-description span.menu-item-mega-description-container {
		font-size:" . $cmsmasters_option['dance-studio' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_small_font_line_height'] . "px;
	}
	
	.meta_wrap,
	.meta_wrap a,
	.meta_wrap span,
	.header_top_inner nav > div > ul > li a {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_small_font_font_size'] - 2). "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_small_font_line_height'] - 2) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
	}
	
	.cmsmasters_posts_slider .cmsmasters_slider_post_cont_info,
	.cmsmasters_posts_slider .cmsmasters_slider_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_post_cont_info, 
	.cmsmasters_post_cont_info a, 
	.cmsmasters_project_cont_info, 
	.cmsmasters_project_cont_info a, 
	.pj_ddn .cmsmasters_project_category, 
	.pj_ddn .cmsmasters_project_category a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size'] - 1) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['dance-studio' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['dance-studio' . '_small_font_line_height'] . "px !important;
	}
	
	.meta_wrap > div[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > p[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > span[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > a[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > strong[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > div[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > p[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > span[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > a[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > strong[class*=\" cmsmasters-icon-\"]:before, 
	.meta_wrap > div[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > p[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > span[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > a[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > strong[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > div[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > p[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > span[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > a[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > strong[class*=\" cmsmasters_theme_icon_\"]:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size']) . "px;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input[type=text],
	input[type=email],
	input[type=password],
	input[type=number],
	input[type=url],
	input[type=tel],
	input[type=search],
	textarea,
	select,
	option {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_input_font_google_font']) . $cmsmasters_option['dance-studio' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input[type=text], 
	.gform_wrapper input[type=url], 
	.gform_wrapper input[type=email], 
	.gform_wrapper input[type=tel], 
	.gform_wrapper input[type=number], 
	.gform_wrapper input[type=password], 
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['dance-studio' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_quote_font_google_font']) . $cmsmasters_option['dance-studio' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_quote_font_google_font']) . $cmsmasters_option['dance-studio' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['dance-studio' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";

if (CMSMASTERS_DONATIONS) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/

	/* Start Content Font */
	.campaign .cmsmasters_campaign_meta_info {
		height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	#header .header_donation_but .cmsmasters_button, 
	#header .header_top_donation_but {
		font-weight:" . $cmsmasters_option['dance-studio' . '_nav_title_font_font_weight'] . ";
	}
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title, 
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title, 
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 4) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] * 2 + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] * 2 + 4) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] + 4) . "px;
			line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] + 4) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign, 
	.donations.opened-article > .donation .cmsmasters_donation_campaign a, 
	.cmsmasters_donations .donation .cmsmasters_donation_amount_currency {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h3_font_google_font']) . $cmsmasters_option['dance-studio' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h4_font_google_font']) . $cmsmasters_option['dance-studio' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donation_confirm .donation_confirm_info_title, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a, 
	.cmsmasters_donations .donation .cmsmasters_donation_amount_title, 
	.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.related_posts_tabs_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.related_posts_tabs_campaign .cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	#header .header_top_donation_but {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_button_font_google_font']) . $cmsmasters_option['dance-studio' . '_button_font_system_font'] . ";
	}
	
	#header .header_top_donation_but {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_button_font_font_size'] - 2) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.related_posts_tabs_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_subtitle, 
	.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size'] + 1) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}

if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.cart_totals table tr.shipping th, 
	.checkout #order_review .shop_table th, 
	.checkout #order_review .shop_table td, 
	.checkout #order_review .shop_table th *, 
	.checkout #order_review .shop_table td *, 
	.shop_table.order_details th, 
	.shop_table.order_details td, 
	.shop_table.order_details th *, 
	.shop_table.order_details td *, 
	.shop_table.order_details td.product-name, 
	.shop_table.order_details td.product-name * {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_content_font_google_font']) . $cmsmasters_option['dance-studio' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta, 
	.product_list_widget li del .amount {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 1) . "px;
	}
	
	.widget_shopping_cart_content .cart_list li a.remove {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 3) . "px;
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer {
		height:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_line_height'] + 36) . "px;
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a {
		height:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_line_height'] + 12) . "px;
		padding-right:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_line_height'] + 2) . "px;
		max-width:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_line_height'] + 12) . "px;
	}
	
	@media only screen and (max-width: 767px) {
		.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a {
			max-width:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_line_height'] + 12) . "px !important;
		}
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
		.cmsmasters_single_product .cmsmasters_product_right_column .product_title {
			font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h2_font_google_font']) . $cmsmasters_option['dance-studio' . '_h2_font_system_font'] . ";
			font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['dance-studio' . '_h2_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['dance-studio' . '_h2_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['dance-studio' . '_h2_font_text_decoration'] . ";
		}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_single_product .cmsmasters_product_right_column .price, 
	.cart_totals > h2, 
	.shipping_calculator > h2, 
	.shipping_calculator > h2 a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h3_font_google_font']) . $cmsmasters_option['dance-studio' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h3_font_text_decoration'] . ";
	}
	
	
	.cmsmasters_single_product .cmsmasters_woo_tabs h2 {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h3_font_font_size'] - 4 ) . "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h3_font_line_height'] - 4 ) . "px;
	}
	
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h4_font_google_font']) . $cmsmasters_option['dance-studio' . '_h4_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-style:" . $cmsmasters_option['dance-studio' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h4_font_text_decoration'] . ";
	}
	
	.widget_shopping_cart_content .total strong,
	.cmsmasters_single_product .cmsmasters_product_right_column .product_meta .posted_in strong {
		font-weight:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] - 300) . ";
	}
	
	.columns-5.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price,
	.columns-6.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 6) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.shop_table thead th,
	.cmsmasters_products .product .woocommerce-loop-category__title {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h5_font_text_decoration'] . ";
	}
	
	.shop_table td.product-price, 
	.shop_table td.product-subtotal, 
	.widget_shopping_cart_content .cart_list li .quantity, 
	.widget_shopping_cart_content .total strong, 
	.widget_shopping_cart_content .total .amount, 
	.product_list_widget li .amount {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time {
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta h5 {
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h5_font_line_height'] - 4 ) . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	
	.shop_table td.product-subtotal span {
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.woocommerce-info, 
	.woocommerce-info a, 
	.woocommerce-message, 
	.woocommerce-message a, 
	.woocommerce-error, 
	.woocommerce-error a, 
	.cart_totals table tr.cart-subtotal, 
	.cart_totals table tr.order-total, 
	.cart_totals table tr.cart-subtotal th, 
	.cart_totals table tr.order-total th, 
	ul.order_details li > span, 
	.checkout #order_review table tr th.product-name, 
	.checkout #order_review table tr th.product-total, 
	.checkout #order_review table tr.cart-subtotal td, 
	.checkout #order_review table tr.cart-subtotal td *, 
	.checkout #order_review table tr.order-total td, 
	.checkout #order_review table tr.order-total td *, 
	.checkout #order_review table tr.cart-subtotal th, 
	.checkout #order_review table tr.order-total th, 
	.shop_table.order_details thead tr:first-child th, 
	.shop_table.order_details thead tr:first-child td, 
	.shop_table.order_details tfoot tr:first-child th, 
	.shop_table.order_details tfoot tr:first-child td, 
	.shop_table.order_details tfoot tr:first-child td *, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	.shop_table.order_details tfoot tr:last-child td * {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price del, 
	.cmsmasters_single_product .cmsmasters_product_right_column .price del {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_line_height'] + 2) . "px;
	}
	
	
	.onsale {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_line_height'] + 2) . "px;
	}
	
	.out-of-stock {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_line_height'] - 1) . "px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.widget_shopping_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_line_height'] - 1) . "px;
	}

	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button > span .count {
		font-size:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 3) . "px;
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_h6_font_line_height'] - 4) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_header .cmsmasters_product_title, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_header .cmsmasters_product_title a,
	.cmsmasters_products .product .woocommerce-loop-category__title,
	.shop_table td.product-name, 
	.shop_table td.product-name a, 
	.widget_shopping_cart_content .cart_list li a, 
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text, 
	.product_list_widget li > a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_button_font_google_font']) . $cmsmasters_option['dance-studio' . '_button_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['dance-studio' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart_button {
		line-height:" . ((int)$cmsmasters_option['dance-studio' . '_button_font_line_height'] / 2) . "px;
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .cmsmasters_add_to_cart_button, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .added_to_cart {
		font-weight:" . ((int)$cmsmasters_option['dance-studio' . '_button_font_font_weight'] - 300) . ";
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_input_font_google_font']) . $cmsmasters_option['dance-studio' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */

	
	/* Start Small Text Font */
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .description {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_product_cat a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
	}
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_event_date > div, 
	.sidebar .widget .tribe-events-list-widget-events .cmsmasters_event_date > div, 
	.recurringinfo, 
	.recurringinfo *, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details *, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	.widget .vcalendar .cmsmasters_widget_event_info *, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc *, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td * {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_content_font_google_font']) . $cmsmasters_option['dance-studio' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_content_font_font_style'] . ";
	}
	
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details *, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details *, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details *, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	.widget .vcalendar .cmsmasters_widget_event_info *, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc * {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 1) . "px;
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td * {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 2) . "px;
	}
	
	#tribe-events-bar #tribe-bar-views label.button:before {
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first span {
		height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
	}
	
	.tribe_events .cmsmasters_post_meta_info {
		height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
	}
	
	.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_event_date > div,
	.sidebar .widget .tribe-events-list-widget-events .cmsmasters_event_date > div {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	#tribe-events-content .cmsmasters_event_day, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	
	#tribe-events-content .cmsmasters_event_day {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_font_size'] - 4) . "px;
	}
	
	#tribe-events-content .cmsmasters_event_date:before {
		width:" . $cmsmasters_option['dance-studio' . '_h1_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h1_font_line_height'] / 2) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-size:32px; /* static */
		line-height:36px; /* static */
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost, 
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h2_font_google_font']) . $cmsmasters_option['dance-studio' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h2_font_text_decoration'] . ";
	}
	
	.tribe_events .cmsmasters_post_format_img:before {
		font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
	}
	
	.tribe_events .cmsmasters_post_format_img:before {
		line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
	}
	
	.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] - (int) $cmsmasters_option['dance-studio' . '_h2_font_font_size']) / 2) . "px;
	}
	
	.tribe-events-list-widget-events .cmsmasters_event_date:before, 
	.vcalendar .cmsmasters_event_date:before {
		width:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option['dance-studio' . '_h2_font_line_height'] / 2) . "px;
	}
	
	
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	
	
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5:before, 
	#tribe-events-content.tribe-events-list .tribe-events-list-separator-month:before {
		height:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		margin-top:-" . ((int) $cmsmasters_option['dance-studio' . '_h3_font_font_size'] / 2) . "px;
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-single-event-title {
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
	}
	
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	#tribe-events-content.tribe-events-list .tribe-events-list-separator-month,
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h4_font_google_font']) . $cmsmasters_option['dance-studio' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h4_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	#tribe-events-content.tribe-events-single ul.tribe-related-events > li .tribe-related-event-info .tribe-related-events-meta:before,
	.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	.tribe-events-list-widget-events .tribe-events-list-widget-events .duration:before, 
	.widget .vcalendar .cmsmasters_widget_event_info > div:before, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc > div:before, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info .duration:before, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before {
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
	}
	
	#tribe-events-header .tribe-events-page-title,
	.cmsmasters_tt_event .cmsmasters_tt_event_header .cmsmasters_tt_event_subtitle	{
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	.tribe-events-list-widget-events .tribe-events-list-widget-events .duration:before, 
	.widget .vcalendar .cmsmasters_widget_event_info > div:before, 
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc > div:before, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info .duration:before {
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title:before {
		height:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		margin-top:-" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] / 2) . "px;
	}
	
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .entry-title a {
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	
	.tribe-events-sub-nav li a {
		width:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] + 8) . "px;
		height:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] + 8) . "px;
	}
	
	.tribe-events-sub-nav li a:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 6) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	
	#tribe-events-content .cmsmasters_event_month, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title,
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title a,
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_event_date .cmsmasters_event_day_month,
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details .cmsmasters_event_day,
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-cost .tribe-events-event-cost-inner,
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title,
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a,
	.widget .vcalendar .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title,
	.widget .vcalendar .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title a,
	.widget .vcalendar .tribe-events-list-widget-content-wrap .cmsmasters_event_date .cmsmasters_event_day_month,
	.widget .vcalendar .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_event_day,
	.widget .vcalendar .tribe-events-list-widget-events .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title,
	.widget .vcalendar .tribe-events-list-widget-events .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title a,
	.widget .vcalendar .tribe-events-list-widget-events .cmsmasters_event_date .cmsmasters_event_day_month,
	.widget .vcalendar .tribe-events-list-widget-events .tribe-events-event-meta .cmsmasters_event_day,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .tribe-events-single-section-title,
	ul.tribe-related-events > li .tribe-related-event-info .tribe-related-events-title a,
	.widget .vcalendar .tribe-events-list-widget-content-wrap .tribe-events-event-cost .tribe-events-event-cost-inner,
	.widget .vcalendar .tribe-events-list-widget-events .tribe-events-event-cost .tribe-events-event-cost-inner {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
	}
	
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tribe-events-tooltip .entry-title a,  
	.tribe-events-tooltip .tribe-event-title a,
	.tribe-events-list-widget-events .cmsmasters_event_month, 
	.vcalendar .cmsmasters_event_month, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info h2, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info h2 a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h5_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column *, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div,
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .duration:before,
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-venue:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h5_font_font_size'] - 1) . "px;
	}
	
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .entry-title a, 
	.sidebar .widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header .entry-title a, 
	.tribe-events-tooltip .entry-title, 
	.tribe-events-tooltip .tribe-event-title,
	#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a, 
	#tribe-events-footer > a, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt,
	#tribe-events-content .cmsmasters_events_list_event_featured, 
	.widget .cmsmasters_events_list_event_featured, 
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-read-more, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore a, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .tribe-events-read-more, 
	.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-events-page-title,
	.tribe-events-viewmore a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	
	
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label,
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot h5,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column *,
	.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .this-week-no-events-msg,
	.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .entry-title,
	.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .entry-title a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
	}
	
	.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .entry-title a,
	.sidebar .widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header .entry-title a,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event.tribe-event-featured .tribe-events-week-hourly-single > .entry-title a,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-future div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a,  
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:before, 
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-events-sub-nav .tribe-this-week-nav-link a:before,
	.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:before {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] + 1) . "px;
	}
	
	
	.tribe-events-tooltip .description,	
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore a, 
	.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
	}
	
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_line_height'] - 2) . "px;
	}
	
	#tribe-events-content .cmsmasters_events_list_event_featured,
	.widget .cmsmasters_events_list_event_featured {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 2) . "px;
	}
	
	#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-venue-details .tribe-events-address {
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
	}
	
	@media only screen and (max-width: 767px) {
		#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 1) . "px;
		}
	}
	
	@media only screen and (max-width: 540px) {
		#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th {
			font-size:" . ((int) $cmsmasters_option['dance-studio' . '_h6_font_font_size'] - 3) . "px;
		}
	}
	
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek	{
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_small_font_text_transform'] . ";
	}
	
	.tribe-events-tooltip .tribe-events-abbr,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under,
	.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-this-week-widget-header-date {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size'] - 2) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under,
	.tribe-events-list-event-description .tribe-events-read-more {
		font-weight:bold; /* static */
	}	
	
	.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item .cmsmasters_tt_event_hours_item_title,
	.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item .cmsmasters_tt_event_details_item_title {
		font-weight:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_weight'] + 100) . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek {
		text-transform:uppercase; /* static */
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['dance-studio' . '_small_font_line_height'] - 2) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

}


if (CMSMASTERS_TIMETABLE) {

	$custom_css .= "
/***************** Start Timetable Font Styles ******************/

	/* Start Content Font */
	table.tt_timetable .event, 
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header, 
	table.tt_timetable .event .hours, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_content_font_google_font']) . $cmsmasters_option['dance-studio' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_content_font_font_style'] . ";
	}
	
	table.tt_timetable .event, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] - 1) . "px;
	}
	
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header {
		font-size:" . ((int) $cmsmasters_option['dance-studio' . '_content_font_font_size'] + 1) . "px;
	}
	
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header, 
	table.tt_timetable .event .hours {
		font-weight:bold;
	}
	/* Finish Content Font */


	/* Start Link Font */
	.link_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_link_font_google_font']) . $cmsmasters_option['dance-studio' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start H1 Font */
	.h1_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h1_font_google_font']) . $cmsmasters_option['dance-studio' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	.h2_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h2_font_google_font']) . $cmsmasters_option['dance-studio' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	.event_layout_4 table.tt_timetable .event .hours {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h3_font_google_font']) . $cmsmasters_option['dance-studio' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h3_font_text_decoration'] . ";
	}
	
	.event_layout_4 table.tt_timetable .event .hours {
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	.tt_timetable.small .tt_items_list li .event_header {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h4_font_google_font']) . $cmsmasters_option['dance-studio' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	.tt_tabs_navigation li a {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h5_font_google_font']) . $cmsmasters_option['dance-studio' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h5_font_line_height'] . "px;
		font-style:" . $cmsmasters_option['dance-studio' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	.h6_font,
	table.tt_timetable th {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_h6_font_google_font']) . $cmsmasters_option['dance-studio' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['dance-studio' . '_h6_font_text_decoration'] . ";
	}
	
	table.tt_timetable th {
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
	}	
	/* Finish H6 Font */


	/* Start Button Font */
	.tt_booking .tt_booking_message > div .tt_btn,
	.tabs_box_navigation .tabs_box_navigation_selected {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_button_font_google_font']) . $cmsmasters_option['dance-studio' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_button_font_text_transform'] . ";
	}
	
	.tabs_box_navigation .tabs_box_navigation_selected {
		line-height:20px;
		text-transform:uppercase;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	.small_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_small_font_google_font']) . $cmsmasters_option['dance-studio' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['dance-studio' . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	.input_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_input_font_google_font']) . $cmsmasters_option['dance-studio' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.blockquote_font {
		font-family:" . dance_studio_get_google_font($cmsmasters_option['dance-studio' . '_quote_font_google_font']) . $cmsmasters_option['dance-studio' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['dance-studio' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['dance-studio' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['dance-studio' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['dance-studio' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */
	

/***************** Finish Timetable Font Styles ******************/


";

}
	
	return apply_filters('dance_studio_theme_font_filter', $custom_css);
}

