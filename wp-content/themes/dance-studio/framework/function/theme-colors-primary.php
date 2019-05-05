<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function dance_studio_theme_colors_primary() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer .headline_text .entry-subtitle," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=submit],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsmastersLike,
	{$rule}.cmsmasters_post_comments,
	{$rule}.subpage_nav > a,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmastersLike, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmastersLike:hover, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_comments, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_comments:hover, 
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_profile.vertical .profile .pl_img .pl_noimg, 
	{$rule}.cmsmasters_search_post .cmsmasters_post_cont_info,
	{$rule}.post.cmsmasters_search_post .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_search_post .cmsmasters_post_footer_info,
	{$rule}.post.cmsmasters_search_post .cmsmasters_post_footer_info,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.sidebar .widget_custom_contact_info_entries span, 
	{$rule}.sidebar .widget_custom_contact_info_entries a, 
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_meta_info a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h6," : '') . "
	" . (($scheme != 'default') ? "{$rule}.widget ul li a," : '') . "
	" . (($scheme != 'default') ? "{$rule}.widget.widget_text .textwidget ul li," : '') . "
	{$rule}.owl-buttons .owl-prev span,
	{$rule}.owl-buttons .owl-next span,
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content:hover a,
	{$rule}.color_2,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"checkbox\"] + label:after, 
	{$rule}.cmsmasters_post_format_img,
	{$rule}.owl-buttons span:hover,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont a, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmastersLike:hover:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmastersLike.active:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_comments:hover:before, 
	{$rule}.post_nav > span > a:hover + .cmsmasters_theme_icon_slide_next:before,
	{$rule}.post_nav > span > a:hover + .cmsmasters_theme_icon_slide_prev:before,
	{$rule}.cmsmasters_dropcap.type1, 
	{$rule}.tweet_time:before,
	{$rule}blockquote:before,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmastersLike:hover:before,
	{$rule}.cmsmastersLike.active:before,
	{$rule}.cmsmastersLike.active > span,
	{$rule}.cmsmasters_post_comments:hover:before, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}.post_nav a:hover,
	{$rule}.cmsmasters_project_filter_list .button:hover, 
	{$rule}.cmsmasters_post_filter_list .button:hover, 
	{$rule}.cmsmasters_post_filter_list .current .button, 
	{$rule}.img_placeholder_small:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_coins, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button,
	{$rule}.pl_subtitle, 
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_theme_icon_user_twitter:before,
	{$rule}.cmsmasters_profile.vertical .profile .pl_img:hover .pl_noimg,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a:hover,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_read_more, 
	{$rule}#wp-calendar tbody #today,
	{$rule}.bypostauthor > .comment-body .alignleft:before, 
	{$rule}.share_posts .share_posts_inner a:hover:before,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover, 
	{$rule}.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner .quote_content > p:before,
	{$rule}.quote_grid .quote_content:before,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .wrap_quote_title .quote_title,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:not(.current_tab) a:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap:hover .cmsmasters_toggle_title > a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title > a,
	{$rule}.blog .sticky .cmsmasters_post_cont_inner .cmsmasters_post_cont_date_wrap:before,
	{$rule}.blog.columns.puzzle .post figure:hover + .puzzle_post_content_wrapper .cmsmasters_post_title, 
	{$rule}.blog.columns.puzzle .post figure:hover + .dn + .puzzle_post_content_wrapper .cmsmasters_post_title,
	{$rule}.blog.columns.puzzle .tribe_events figure:hover + .puzzle_post_content_wrapper .cmsmasters_post_title, 
	{$rule}.blog.columns.puzzle .post figure:hover + .puzzle_post_content_wrapper .cmsmasters_post_title a, 
	{$rule}.blog.columns.puzzle .post figure:hover + .dn + .puzzle_post_content_wrapper .cmsmasters_post_title a, 
	{$rule}.blog.columns.puzzle .tribe_events figure:hover + .puzzle_post_content_wrapper .cmsmasters_post_title a, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.pl_social_list li a:hover,
	{$rule}.widget_text .textwidget ul li a:before,
	{$rule}.widget_categories li.current-cat a,
	{$rule}.sidebar .widget_custom_contact_info_entries > span:before, 
	{$rule}.sidebar .widget_custom_contact_info_entries > div:before, 
	{$rule}.sidebar .widget_custom_contact_info_entries a:hover, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button,  
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_meta_info a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	
	" . (($scheme == 'default') ? "mark," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.post.format-status .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	{$rule}.post.format-quote .cmsmasters_post_cont .cmsmasters_post_format_img:after, 
	{$rule}.blog.columns.puzzle .post.format-aside .preloader, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover > .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_post_read_more, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"radio\"] + label:after,
	{$rule}.comment-respond .comment-form > p.form-submit,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:after,
	{$rule}.owl-page:hover, 
	{$rule}.owl-page.active,
	{$rule}.subpage_nav > span,
	{$rule}.subpage_nav > a:hover,
	{$rule}.cmsmasters_quotes_slider_type_center .owl-controls .owl-pagination .owl-page:hover,  
	{$rule}.cmsmasters_quotes_slider_type_center .owl-controls .owl-pagination .owl-page.active,  
	{$rule}.owl-buttons .owl-prev:hover,
	{$rule}.owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_owl_slider .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_owl_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-prev:hover, 
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_quotes .owl-page:hover,
	{$rule}.cmsmasters_quotes .owl-page.active,
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_title:before, 
	{$rule}.post.format-aside .cmsmasters_post_cont, 
	{$rule}.cmsmasters_dropcap.type2, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover:before, 
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a:before,
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:hover:before, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_button,  
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner:before, 
	{$rule}.cmsmasters_profile .profile .pl_img figure a:after, 
	{$rule}.cmsmasters_profile .profile .pl_img .pl_noimg:after, 
	{$rule}.cmsmasters_profile .profile:before, 
	{$rule}.portfolio.puzzle .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link,
	{$rule}.portfolio .cmsmasters_project_button,
	{$rule}.cmsmasters_project_filter_list .current .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.button,
	{$rule}button,
	{$rule}.cmsmasters_button, 
	{$rule}input[type=submit],
	{$rule}input[type=button]{
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider_type_box .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_quotes_slider_type_box .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item > a,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}.cmsmasters_owl_slider .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_owl_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-prev:hover, 
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_project_filter_list .button, 
	{$rule}.cmsmasters_post_filter_list .button,  
	{$rule}.cmsmasters_post_filter_list .button:hover,  
	{$rule}.cmsmasters_post_filter_list .current .button {
		background-color:transparent; /* static */
	}
	
	
	{$rule}input[type=text]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}input[type=search]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}	
	
	/* Finish Primary Color */
	
	
	/* Start Secondary Color */
	
	/* Finish Secondary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover," : '') . "
	{$rule}.tweet_time,
	{$rule}.cmsmasters_toggles .cmsmasters_toggles_filter > a.current_filter,
	{$rule}.search_bar_wrap button:before, 
	{$rule}.widget ul li a:hover,
	{$rule}.widget .owl-buttons,
	{$rule}.cmsmasters_clients_slider .owl-buttons,
	{$rule}.cmsmasters_twitter .owl-buttons,
	{$rule}.cmsmasters_quotes .owl-buttons,
	{$rule}.cmsmasters_posts_slider .owl-buttons,
	{$rule}.post .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_archive_item_info,
	{$rule}.post .cmsmasters_post_footer_info,
	{$rule}.post .cmsmasters_post_header .cmsmasters_post_subtitle,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer, 
	{$rule}.social_wrap a,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont a:hover, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_footer_info, 
	{$rule}.blog.timeline .post .cmsmasters_post_info,
	{$rule}.widget_custom_popular_projects_entries .pj_ddn .cmsmasters_project_category:before, 
	{$rule}.widget_custom_latest_projects_entries .pj_ddn .cmsmasters_project_category:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.share_posts .share_posts_inner a:before,
	{$rule}.comment-content abbr,
	{$rule}.pl_social_list li a,	
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label,
	{$rule}.cmsmasters-form-builder form .form_info.cmsmasters_input.area_opened label,
	{$rule}.comment-respond .comment-form > p.area_opened .under_form {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	
	{$rule}.blog.columns.puzzle .post .preloader,
	{$rule}.cmsmasters_profile .profile .pl_img .pl_noimg {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	
	{$rule}.post_nav span,
	{$rule}.cmsmasters_notice .notice_close {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	" . (($scheme != 'default') ? "{$rule}.headline_outer h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer h6," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h2," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h3," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h4," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h5," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h6," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme == 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.widget .owl-buttons span:hover,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.post.format-aside .cmsmasters_post_cont a:hover, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_meta_info a:hover:before, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_meta_info a.cmsmastersLike.active:before, 
	{$rule}.post.format-status .cmsmasters_post_cont .cmsmasters_post_content, 
	{$rule}.post.format-chat .cmsmasters_post_cont .cmsmasters_chat_author_time .cmsmasters_chat_author, 
	{$rule}.profile .profile_sidebar .profile_details .profile_details_item_title,
	{$rule}.profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title,
	{$rule}.project .project_sidebar .project_details .project_details_item_title,
	{$rule}.project .project_sidebar .project_features .project_features_item .project_features_item_title,
	{$rule}.blog .cmsmasters_post_cont_inner .cmsmasters_post_cont_date_wrap .cmsmasters_post_cont_date .cmsmasters_post_date .published .cmsmasters_day_mon,
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .puzzle_post_content_wrap a:before, 
	{$rule}.blog.columns.puzzle .post.format-aside .cmsmasters_post_cont .cmsmasters_post_content, 
	{$rule}.post_nav a,
	{$rule}.post_nav span:before,
	{$rule}.timeline .cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day,
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content figure a,
	{$rule}blockquote footer,
	{$rule}blockquote,
	{$rule}.quote_content p,
	{$rule}table caption,
	{$rule}.cmsmasters_project_filter_list .button, 
	{$rule}.cmsmasters_post_filter_list .button, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_footer,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.wrap_quote_title .quote_title,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_twitter .cmsmasters_twitter_item_content,
	{$rule}.project .cmsmasters_project_cont_info, 
	{$rule}.cmsmasters_img_wrap .img_placeholder:before, 
	{$rule}.cmsmasters_img_rollover_wrap .img_placeholder:before, 
	{$rule}#wp-calendar caption,
	{$rule}#wp-calendar thead th,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_period,
	{$rule}#header .logo, 
	{$rule}.cmsmasters_img_caption,
	{$rule}.cmsmasters_text ul li,
	{$rule}.textwidget ul li,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs > li a:before,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_search_post_number, 
	{$rule}.comment-respond .comment-form > p.form-submit:hover,
	{$rule}.cmsmasters_post_read_more:hover, 
	{$rule}.portfolio .cmsmasters_project_button:hover,
	{$rule}.blog.columns.puzzle .post.format-status .preloader, 
	{$rule}.blog.columns.puzzle .post .preloader:after, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_button:hover,
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.button:hover,
	{$rule}.current > .button,
	{$rule}.button.current,
	{$rule}button:hover,
	{$rule}.cmsmasters_button:hover, 
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.owl-buttons .owl-prev,
	{$rule}.owl-buttons .owl-next {
		background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . ", 0.2);
	}
	
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer h6," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a h6," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h1," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h2," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h3," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h4," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h5," : '') . "
	" . (($scheme == 'default') ? "{$rule}.headline_outer a:hover h6," : '') . "
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}mark,
	{$rule}a.button,
	{$rule}.subpage_nav > span,
	{$rule}.subpage_nav > a:hover,
	{$rule}input[type=submit],
	{$rule}input[type=submit].button,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_post_read_more, 
	{$rule}.cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_search_post_number, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list *, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_coins, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_period, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_button,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover .cmsmasters_image_link, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link, 
	{$rule}.cmsmasters_profile.vertical .profile .pl_img figure a:before,
	{$rule}.cmsmasters_profile.horizontal .profile .pl_img figure a:before,
	{$rule}.cmsmasters_profile .profile .pl_img .pl_noimg:before, 
	{$rule}.cmsmasters_content_slider .owl-buttons .owl-prev span,
	{$rule}.cmsmasters_content_slider .owl-buttons .owl-next span,
	{$rule}.post .owl-buttons .owl-prev span,
	{$rule}.post .owl-buttons .owl-next span,
	{$rule}.project .owl-buttons .owl-prev span,
	{$rule}.project .owl-buttons .owl-next span,
	{$rule}.owl-buttons .owl-prev:hover span,
	{$rule}.owl-buttons .owl-next:hover span,
	{$rule}.portfolio .cmsmasters_project_button .cmsmasters_project_read_more,
	{$rule}.cmsmasters_project_filter_list .current .button {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=tel],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}.footer_bg,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content figure a,
	{$rule}.search_bar_wrap,
	{$rule}.search_bar_wrap input[type=text],
	{$rule}.search_bar_wrap input[type=text]:focus,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.owl-page,
	{$rule}.cmsmasters_quotes .owl-page,
	{$rule}.cmsmasters_posts_slider .owl-controls .owl-buttons .owl-prev,
	{$rule}.cmsmasters_posts_slider .owl-controls .owl-buttons .owl-next,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-prev,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-next,
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-prev, 
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons .owl-next,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-next,
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons .owl-prev,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a,
	{$rule}.portfolio.puzzle .project_inner,
	{$rule}.blog.timeline .post .cmsmasters_post_info, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner .quote_content:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	
	{$rule}.cmsmasters_button,
	{$rule}.cmsmasters_button:hover,
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button,
	{$rule}.button,
	{$rule}.button:hover,
	{$rule}input[type=submit],
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button],
	{$rule}input[type=button]:hover,
	{$rule}button,
	{$rule}button:hover,
	{$rule}.current > .button,
	{$rule}.button.current, 
	{$rule}.owl-buttons,
	{$rule}.social_wrap a:hover,
	{$rule}.post.format-aside .cmsmasters_post_cont, 
	{$rule}.post.format-aside .cmsmasters_post_cont a, 
	{$rule}.post.format-aside .cmsmasters_post_cont a:before, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_meta_info a:hover, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_footer_info, 
	{$rule}.post.format-aside .cmsmasters_post_cont .cmsmasters_post_format_img:before, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.blog.columns.puzzle .post .preloader:before, 
	{$rule}.cmsmasters_dropcap.type2   {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}input[type=text]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}input[type=search]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	{$rule}.bottom_inner .widgettitle:before,  
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_img_rollover_wrap .img_placeholder,
	{$rule}fieldset,
	{$rule}fieldset legend {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner:after, 
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmastersLike:before, 
	{$rule}.cmsmasters_post_comments:before, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.bottom_inner input[type=search]:focus,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_divider,
	{$rule}.post.format-chat .cmsmasters_post_cont .cmsmasters_chat .cmsmasters_chat_item:before,
	{$rule}.blog.timeline:before, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before,
	{$rule}.post.cmsmasters_timeline_type:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container:before,
	{$rule}.cmsmasters_quotes_slider_type_center .owl-controls .owl-pagination .owl-page,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a:after,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.content_wrap .sidebar:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}input[type=text],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=search],
	{$rule}input[type=tel],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.search_bar_wrap,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.img_placeholder_small,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder,
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-prev,
	{$rule}.widget_custom_projects_entries_slides .owl-controls .owl-buttons .owl-next,
	{$rule}.widget_custom_popular_projects_entries .pj_ddn .cmsmasters_project_category, 
	{$rule}.widget_custom_latest_projects_entries .pj_ddn .cmsmasters_project_category,
	{$rule}.widget_custom_popular_projects_entries .pj_ddn, 
	{$rule}.widget_custom_latest_projects_entries .pj_ddn,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.cmsmasters-form-builder form .form_info.cmsmasters_select .form_field_wrap,
	{$rule}table td, 
	{$rule}table th, 
	{$rule}.widget ul li,
	{$rule}.bottom_inner .widget ul li,
	{$rule}.footer_inner,
	{$rule}.cmsmasters_table tr,
	{$rule}.post .cmsmasters_post_cont_info, 
	{$rule}.post .cmsmasters_post_footer_info, 
	{$rule}.cmsmasters_archive_item_info,
	{$rule}.post_nav,
	{$rule}.post_comments .commentlist .comment-body,
	{$rule}.about_author .about_author_inner,
	{$rule}.blog.timeline .post .cmsmasters_post_info, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_inner,
	{$rule}.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_inner,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap,
	{$rule}.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner .quote_content,
	{$rule}.cmsmasters_quotes_slider_type_box .owl-pagination .owl-page,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page,
	{$rule}.quote_grid .quotes_list .cmsmasters_quote,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item, 
	{$rule}.cmsmasters_profile .profile,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_search .post.cmsmasters_search_post .cmsmasters_post_cont_info	{
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	
	{$rule}.post.format-aside .cmsmasters_post_cont_info, 
	{$rule}.post.format-aside .cmsmasters_post_footer_info {
		border-top-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}hr,
	{$rule}.cmsmasters_divider,
	{$rule}.opened-article .post, 
	{$rule}.post .cmsmasters_post_cont_info, 
	{$rule}.post_nav,
	{$rule}.sidebar .widget,
	{$rule}.portfolio.opened-article .project .cmsmasters_project_header, 
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header, 
	{$rule}.cmsmasters_widget_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.post.format-aside .cmsmasters_post_cont_info {
		border-bottom-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner .quote_content:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Custom Color */
	
	/* Finish Custom Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}html body .cmsmasters_color_scheme_footer ::selection,
	{$rule}html .header_top ::selection {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}

	
	
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .thumb_wrap .cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_inner .owl-wrapper-outer .owl-wrapper .owl-item .cmsmasters_single_slider_post .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover:hover,
	{$rule}.portfolio.perfect .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover, 
	{$rule}.portfolio.masonry .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover {
		border-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ", 0.5);
	}
		
	{$rule}.cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover .cmsmasters_open_link,
	{$rule}.cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover .cmsmasters_image_link, 
	{$rule}.portfolio.puzzle .project .project_outer:hover figure .cmsmasters_img_rollover {
		background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . ", 0.7);
	}
	
	{$rule}.cmsmasters_notice .notice_close:hover {
		color:#dd0000;
	}
	";
	
	
	if ($scheme == 'default') {
		$custom_css .= "
		#slide_top {
			background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . ", 0.5);
			border-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ", 0.15);
		}
		";
	}
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('dance_studio_theme_colors_primary_filter', $custom_css);
}

