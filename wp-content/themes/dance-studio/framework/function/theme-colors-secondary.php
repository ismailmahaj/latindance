<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function dance_studio_theme_colors_secondary() {
	$cmsmasters_option = dance_studio_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		if (CMSMASTERS_DONATIONS) {
			$custom_css .= "
/***************** Start {$title} CMSMASTERS Donations Color Scheme Rules ******************/

	/* Start Header Donation Button Colors */
	#header .header_donation_but .cmsmasters_button {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
	}
	
	#header .header_donation_but .cmsmasters_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_link']) . "
	}
	
	#header .header_top_donation_but {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_border']) . "
	}
	
	#header .header_top_donation_but:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_border']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
	}
	/* Finish Header Donation Button Colors */
	
	
	/* Start Main Content Font Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number, 
	{$rule}.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo > span, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_amount_currency, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a:hover, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_amount_currency, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_wrap_heading {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:hover:after {
		background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . ", 0.85);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_campaigns .owl-buttons {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_campaigns .owl-buttons span:hover,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item_title, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_amount_title, 
	{$rule}.opened-article > .campaign .cmsmasters_campaign_cont_info > span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_info, 
	{$rule}.donation_confirm .donation_confirm_info, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap, 
	{$rule}.cmsmasters_featured_campaign .campaign, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations .donation .img_placeholder, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_wrap_img .img_placeholder, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .img_placeholder {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer, 
	{$rule}.campaign .cmsmasters_campaign_cont_info {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMASTERS Donations Color Scheme Rules ******************/


";
		}
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */ 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price del, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .price del, 
	{$rule}#order_review .shop_table td.product-name, 
	{$rule}#order_review .shop_table td.product-name *, 
	{$rule}.shop_table.order_details td.product-name, 
	{$rule}.shop_table.order_details td.product-name *, 
	{$rule}.widget_shopping_cart_content .cart_list li .quantity,
	{$rule}.widget_shopping_cart_content .cart_list li .quantity .amount,  
	{$rule}.product_list_widget li del .amount, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	
	
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.widget_shopping_cart_content .cart_list li a.remove:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover,
	{$rule}.cmsmasters_dynamic_cart:hover .cmsmasters_dynamic_cart_button > span,
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover > span,
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .cmsmasters_add_to_cart_button, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .added_to_cart, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .price, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap .cmsmasters_star, 
	{$rule}.cmsmasters_products .product .woocommerce-loop-category__title .count, 
	{$rule}.required, 
	{$rule}.shop_table .product-name a:hover, 
	{$rule}.shop_table td.product-subtotal, 
	{$rule}.cart_totals table tr.cart-subtotal td, 
	{$rule}.cart_totals table tr.order-total td, 
	{$rule}#order_review .shop_table tr.order-total th, 
	{$rule}#order_review .shop_table tr.order-total td, 
	{$rule}.shop_table.order_details td.product-name a:hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.widget_shopping_cart_content .cart_list li a:hover, 
	{$rule}.widget_shopping_cart_content .total .amount, 
	{$rule}.widget .product_list_widget li > a:hover, 
	{$rule}.product_list_widget li .amount, 
	{$rule}.widget_product_categories li.current-cat a, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.onsale, 
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button > span .count, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button:hover,
	{$rule}.widget_shopping_cart_content .buttons .button, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button,
	{$rule}.shop_table td.actions .button,
	{$rule}.shop_table td.actions .button[name=update_cart],  
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range, 
	{$rule}.woocommerce-store-notice {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove {
		background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . ", 0.8);
	}
	
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a,
	{$rule}.widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.out-of-stock,
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .price,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.shop_table td.product-name, 
	{$rule}.shop_table td.product-name a, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.quantity .text, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover span,
	{$rule}.cart_totals table tr.cart-subtotal th, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}#order_review .shop_table tr.cart-subtotal th, 
	{$rule}#order_review .shop_table tr.cart-subtotal td, 
	{$rule}dl.customer_details dt, 
	{$rule}ul.order_details li > span, 
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}#order_review #payment .payment_methods label, 
	{$rule}.widget_shopping_cart_content .cart_list li a, 
	{$rule}.widget_shopping_cart_content .total strong, 
	{$rule}.cmsmasters_added_product_info .cmsmasters_added_product_info_text, 
	{$rule}.product_list_widget li > a, 
	{$rule}.woocommerce-error li {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a.cmsmasters_details_button:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.widget_shopping_cart_content .buttons .button:hover, 
	{$rule}.shop_table thead tr th,  
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_images .cmsmasters_product_thumbs .cmsmasters_product_thumb:before,
	{$rule}.shop_table td.actions .button[name=update_cart]:hover,
	{$rule}.shop_table td.actions .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.onsale, 
	{$rule}.out-of-stock,
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button > span .count,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total .amount,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove,
	{$rule}.woocommerce-store-notice, 
	{$rule}.woocommerce-store-notice p a, 
	{$rule}.woocommerce-store-notice p a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.woocommerce-ordering select:focus,
	{$rule}.quantity .text, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}ul.order_details li, 
	{$rule}.shop_table tr th, 
	{$rule}.shop_table tr td, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover,
	{$rule}.cart_totals table tr th, 
	{$rule}.cart_totals table tr td, 
	{$rule}.shop_table td.actions, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.checkout #order_review #payment, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.select2-container .select2-selection--single, 
	{$rule}.cmsmasters_products .product .woocommerce-loop-category__title .count, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#order_review #payment .payment_methods .payment_box:after,
	{$rule}.cmsmasters_added_product_info:after  {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.shop_table thead tr th, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.product .cmsmasters_product_right_column .buttons_added .minus, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .plus, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .text, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .minus:hover, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .plus:hover, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.woocommerce-error,
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_star_rating .cmsmasters_star, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes td, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container, 
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-ordering, 
	{$rule}#order_review #payment .payment_methods .payment_box,
	{$rule}#order_review #payment,
	{$rule}.shop_table,
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table, 
	{$rule}.cart_totals table tr th, 
	{$rule}.cart_totals table tr td, 
	{$rule}ul.order_details, 
	{$rule}ul.order_details li, 
	{$rule}ul.order_details li > span, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.widget_shopping_cart_content .cart_list li, 
	{$rule}.product_list_widget li, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.shop_table.cart .cart_item,
	{$rule}.select2-dropdown,
	{$rule}.select2-container .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	
	{$rule}#order_review #payment .payment_methods .payment_box:before,
	{$rule}.cmsmasters_added_product_info:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}


		if (CMSMASTERS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_event_date > div, 
	{$rule}.sidebar .widget .tribe-events-list-widget-events .cmsmasters_event_date > div, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}.recurringinfo, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header a,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header a,
	{$rule}.widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	{$rule}.widget .cmsmasters_widget_event_info .cmsmasters_widget_event_info_date, 
	{$rule}.widget .cmsmasters_widget_event_info .cmsmasters_widget_event_info_cost, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events * {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_event_time:before, 
	{$rule}.sidebar .widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .entry-title a:hover,
	{$rule}.sidebar .widget .tribe-events-list-widget-events .cmsmasters_event_time:before, 
	{$rule}.sidebar .widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header .entry-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-grid-content-wrap .tribe-week-event.tribe-event-featured .tribe-events-week-hourly-single .entry-title a,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .cmsmasters_event_date .cmsmasters_event_day,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:hover, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a:hover, 
	{$rule}#tribe-events-content.tribe-events-single ul.tribe-related-events > li .tribe-related-event-info .tribe-related-events-meta:before,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-future div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a, 
	{$rule}#tribe-events-footer > a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header a:hover,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_event_date .cmsmasters_event_day_month,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header a,
	{$rule}.widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header a,
	{$rule}.recurringinfo a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li:hover,
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-active,  
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a:hover, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,  
	{$rule}.widget .entry-title a:hover, 
	{$rule}.widget .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a:hover, 
	{$rule}.widget .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a, 
	{$rule}.widget .cmsmasters_widget_event_info .cmsmasters_widget_event_info_date:before, 
	{$rule}.widget .cmsmasters_widget_event_info .cmsmasters_widget_event_info_cost:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop  .tribe-mini-calendar-event .list-info, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop  .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:hover,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .duration:before,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-venue:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}div.datepicker table tr td.active.active, 
	{$rule}div.datepicker table tr td.active.disabled, 
	{$rule}div.datepicker table tr td.active.disabled.active, 
	{$rule}div.datepicker table tr td.active.disabled.disabled, 
	{$rule}div.datepicker table tr td.active.disabled:active, 
	{$rule}div.datepicker table tr td.active.disabled:hover, 
	{$rule}div.datepicker table tr td.active.disabled:hover.active, 
	{$rule}div.datepicker table tr td.active.disabled:hover.disabled, 
	{$rule}div.datepicker table tr td.active.disabled:hover:active, 
	{$rule}div.datepicker table tr td.active.disabled:hover:hover, 
	{$rule}div.datepicker table tr td.active.disabled:hover[disabled], 
	{$rule}div.datepicker table tr td.active.disabled[disabled], 
	{$rule}div.datepicker table tr td.active:active, 
	{$rule}div.datepicker table tr td.active:hover, 
	{$rule}div.datepicker table tr td.active:hover.active, 
	{$rule}div.datepicker table tr td.active:hover.disabled, 
	{$rule}div.datepicker table tr td.active:hover:active, 
	{$rule}div.datepicker table tr td.active:hover:hover, 
	{$rule}div.datepicker table tr td.active:hover[disabled], 
	{$rule}div.datepicker table tr td.active[disabled],
	{$rule}div.datepicker table tr td span.active.active, 
	{$rule}div.datepicker table tr td span.active.disabled, 
	{$rule}div.datepicker table tr td span.active.disabled.active, 
	{$rule}div.datepicker table tr td span.active.disabled.disabled, 
	{$rule}div.datepicker table tr td span.active.disabled:active, 
	{$rule}div.datepicker table tr td span.active.disabled:hover, 
	{$rule}div.datepicker table tr td span.active.disabled:hover.active, 
	{$rule}div.datepicker table tr td span.active.disabled:hover.disabled, 
	{$rule}div.datepicker table tr td span.active.disabled:hover:active, 
	{$rule}div.datepicker table tr td span.active.disabled:hover:hover, 
	{$rule}div.datepicker table tr td span.active.disabled:hover[disabled], 
	{$rule}div.datepicker table tr td span.active.disabled[disabled], 
	{$rule}div.datepicker table tr td span.active:active, 
	{$rule}div.datepicker table tr td span.active:hover, 
	{$rule}div.datepicker table tr td span.active:hover.active, 
	{$rule}div.datepicker table tr td span.active:hover.disabled, 
	{$rule}div.datepicker table tr td span.active:hover:active, 
	{$rule}div.datepicker table tr td span.active:hover:hover, 
	{$rule}div.datepicker table tr td span.active:hover[disabled], 
	{$rule}div.datepicker table tr td span.active[disabled],
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-content .cmsmasters_event_date:before, 
	{$rule}.tribe-events-list-widget-events .cmsmasters_event_date:before, 
	{$rule}.vcalendar .cmsmasters_event_date:before, 
	{$rule}.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5:before,  
	{$rule}.tribe-bar-views-open label.button,
	{$rule}.tribe-events-sub-nav li a:hover, 
	{$rule}#tribe-events-content .cmsmasters_events_list_event_featured, 
	{$rule}.widget .cmsmasters_events_list_event_featured, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more:hover, 
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-list-event-description .tribe-events-read-more:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tribe-events-sub-nav li a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth:hover * {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
		}
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.recurringinfo a, 
	{$rule}.tribe-events-tooltip .tribe-events-abbr,
	{$rule}.tribe-events-tooltip .tribe-events-event-body .duration, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-past div .tribe-mini-calendar-no-event,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot h5 {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
		}
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .tribe-events-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .tribe-events-address address .adr span:first-child, 
	{$rule}#tribe-events-content .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}.tribe-events-list-widget-events .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}.vcalendar .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details .recurringinfo a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-events .duration:before, 
	{$rule}.widget .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .cmsmasters_widget_event_venue_info_loc > div:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .tribe-events-event-cost, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-events .tribe-events-event-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li, 
	{$rule}#tribe-events-footer > a,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title a,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .cmsmasters_event_date .cmsmasters_event_year,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details .cmsmasters_event_day,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-cost .tribe-events-event-cost-inner,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-cost .tribe-events-event-cost-descr,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title a,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_event_date .cmsmasters_event_day_month,
	{$rule}.widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_event_day, 
	{$rule}.widget .tribe-events-list-widget-content-wrap .tribe-events-event-cost .tribe-events-event-cost-inner,	
	{$rule}.widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title,
	{$rule}.widget .tribe-events-list-widget-events .cmsmasters_events_list_event_header .cmsmasters_events_list_event_header_content .entry-title a,
	{$rule}.widget .tribe-events-list-widget-events .cmsmasters_event_date .cmsmasters_event_day_month,
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-event-meta .cmsmasters_event_day, 
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-event-cost .tribe-events-event-cost-inner,	
	{$rule}.tribe-events-tooltip .entry-title,
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details .author, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-notices, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover:before, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-week-event.tribe-event-featured .tribe-events-week-hourly-single .entry-title a:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon, 
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info .duration:before, 
	{$rule}.widget .entry-title, 
	{$rule}.widget .entry-title a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a, 
	{$rule}.widget .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .this-week-no-events-msg {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	{$rule}.widget .tribe-events-list-widget-content-wrap .tribe-events-list-event-description .tribe-events-read-more,
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-list-event-description .tribe-events-read-more,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth * {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
		}
	
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"] {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
		}
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.button,
	{$rule}input[type=submit].tribe-events-button,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-future div[id*=\"tribe-events-event-\"].tribe-event-featured .tribe-events-month-event-title a:hover, 
	{$rule}.tribe-events-sub-nav li a:hover, 
	{$rule}#tribe-events-content .cmsmasters_events_list_event_featured, 
	{$rule}.widget .cmsmasters_events_list_event_featured, 
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more, 
	{$rule}.widget .tribe-events-list-widget-content-wrap .tribe-events-list-event-description .tribe-events-read-more, 
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-list-event-description .tribe-events-read-more, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot h5,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today:hover *,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-events-sub-nav .tribe-this-week-nav-link a:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	 
	{$rule}.tribe-events-tooltip, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap, 
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-active, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-othermonth, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present div .tribe-mini-calendar-day-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today div .tribe-mini-calendar-day-link:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:before, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:after, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-calendar .tribe-events-tooltip:after,
	{$rule}.tribe-grid-allday .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:after {
		border-bottom-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:after {
		border-right-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:after {
		border-left-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active *, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present * {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event:hover > div:first-child a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"], 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"] a {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
		}
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth,
	{$rule}.tribe_events .cmsmasters_post_cont, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}.tribe-events-notices, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-today, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.bd_font_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:before,
	{$rule}#tribe-events-content.tribe-events-list .cmsmasters_events_list_event_wrap > div:after,
	{$rule}.widget .tribe-events-list-widget-content-wrap > div:after,
	{$rule}.widget .tribe-events-list-widget-events > div:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-tooltip, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-list,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-scroller, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .cmsmasters_event_date,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item,
	{$rule}#tribe-events-content.tribe-events-single ul.tribe-related-events > li .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover,
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile, 
	{$rule}.widget, 
	{$rule}.type-tribe_events,
	{$rule}.tribe-events-list-separator-month,
	{$rule}.tribe-events-sub-nav li a,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info, 
	{$rule}.tribe_events .cmsmasters_post_footer_info,
	{$rule}.tribe-events-calendar .tribe-events-tooltip:before,
	{$rule}.tribe-grid-allday .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-wrapper .tribe-this-week-widget-day {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:before {
		border-bottom-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:before {
		border-right-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:before {
		border-left-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	
	/* Finish Borders Color */

/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}
	
	
	if (CMSMASTERS_TIMETABLE) {
			$custom_css .= "
/***************** Start {$title} Timetable Color Scheme Rules ******************/

	/* Start Main Content Font Color */ 
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li a:hover, 
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li.selected a, 
	{$rule}#main .cmsmasters_timetable_shortcode .tt_tabs_navigation li:hover a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tt_tabs_navigation li:before,
	{$rule}.tt_booking .tt_booking_message > div .tt_btn,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover,
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.hover_color,
	{$rule}.tt_timetable.small .tt_items_list li .event_hour_booking:hover,
	{$rule}.tt_tabs .tt_timetable.small ul.tt_items_list li .event_hour_booking.unavailable {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	/* Start Headings Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	{$rule}.tt_timetable.small ul.tt_items_list li .event_hour_booking,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:before,
	{$rule}#main .cmsmasters_timetable_shortcode .tt_tabs_navigation li a,
	{$rule}#main .cmsmasters_timetable_shortcode .tt_tabs_navigation li.ui-tabs-active a,
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item .cmsmasters_tt_event_hours_item_title, 
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li a, 
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item .cmsmasters_tt_event_details_item_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tt_booking .tt_booking_message > div .tt_btn:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#all-events .tt_timetable .event_container:hover .unavailable {
		color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_' . $scheme . '_heading']) . ", 0.2);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.bg_color,
	{$rule}.tt_booking .tt_booking_message > div .tt_btn,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover:before,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover,
	{$rule}.cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected label,
	{$rule}.cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tt_booking,
	{$rule}table.tt_timetable td,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	{$rule}.tt_tabs_navigation li.ui-tabs-active a,
	{$rule}.tt_tabs_navigation li.ui-state-hover a,
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected .sub-menu,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */ 
	{$rule}table.tt_timetable td.tt_hours_column {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */ 
	
	{$rule}.tt_tabs_navigation:before,
	{$rule}.tt_tabs_navigation li > a:before,
	{$rule}.tt_tabs_navigation li > a:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tt_booking,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item,
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item,
	{$rule}#main .cmsmasters_timetable_shortcode .tabs_box_navigation .tabs_box_navigation_selected .sub-menu,
	{$rule}table.tt_timetable .event_container,
	{$rule}table.tt_timetable .tt_single_event,
	{$rule}.tt_timetable.small .tt_items_list li,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} Timetable Color Scheme Rules ******************/


";
		}
		
	}
	
	
	
	$custom_css .= "
/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	.header_mid,
	.header_mid_inner .search_wrap.search_opened .search_bar_wrap button:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_color']) . "
	}
	
	@media only screen and (max-width: 767px) {
		.enable_header_bottom .search_bar_wrap form p.search_field input[type=search],
		.enable_header_bottom .search_wrap p.search_field input::-webkit-input-placeholder {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_color']) . "
		}
	}	
	/* Finish Header Content Color */
	
	
	/* Start Header Primary Color */
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_link']) . "
	}
	
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_link']) . "
	}
	
	.header_mid #navigation ul li > a[data-tag]:after {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_link']) . "
	}
	/* Finish Header Primary Color */
	
	
	/* Start Header Rollover Color */
	.header_mid a:hover,
	.header_mid #navigation > li > a:hover,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current_page_item > a,
	.header_mid #navigation > li.menu-item-highlight > a,
	.header_mid #navigation > li.current-menu-parent > a,
	.header_mid #navigation > li.current-menu-ancestor > a,
	.header_mid #navigation > li > a:hover > span:before,
	.header_mid #navigation > li > a:hover > span:after,
	.header_mid #navigation > li.current-menu-item > a > span:after,
	.header_mid #navigation > li.current_page_item > a > span:after,
	.header_mid #navigation > li.menu-item-highlight > a > span:after,
	.header_mid #navigation > li.current-menu-parent > a > span:after,
	.header_mid #navigation > li.current-menu-ancestor > a > span:after,
	.header_mid #navigation > li > ul li.current-menu-ancestor > a > span:after,
	.header_mid #navigation ul  li > a:hover > span:before,
	.header_mid #navigation div ul li > a:hover > span:before,
	.header_mid #navigation > li.current-menu-item > a > span:before,
	.header_mid #navigation > li.current_page_item > a > span:before,
	.header_mid #navigation > li.menu-item-highlight > a > span:before,
	.header_mid #navigation > li.current-menu-parent > a > span:before, 
	.header_mid #navigation > li.current-menu-ancestor > a > span:before, 
	.header_mid #navigation > li > ul li.current-menu-ancestor > a > span:before,
	.header_mid #navigation > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.current-menu-item > a > span > span.nav_subtitle,
	.header_mid #navigation > li.current_page_item > a > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle,
	.header_mid #navigation > li.current-menu-ancestor > a > span > span.nav_subtitle,
	.header_mid #navigation > li.current-menu-parent > a > span > span.nav_subtitle,
	.header_mid .search_wrap.search_opened p.search_field input[type=search], 
	.header_mid .search_wrap.search_opened p.search_button button:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
	}
	
	.search_wrap p.search_field input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
	}
	
	@media only screen and (max-width: 767px) {
		.search_bar_wrap form p.search_field input[type=search],
		.search_wrap .search_bar_wrap button:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
		}
	}
	
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:hover > a,
		.header_mid #navigation > li:hover > a > span:before,
		.header_mid #navigation > li:hover > a > span:after,
		.header_mid #navigation > li:hover > a > span > span.nav_subtitle,
		.header_mid #navigation > li > a[data-tag]:hover:after	{
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
		}
	}
	
	
	
	/* Finish Header Rollover Color */
	
	
	/* Start Header Subtitle Color */
	
	.header_mid #navigation > li > a > span > span.nav_subtitle,
	.header_mid .responsive_nav:hover,
	.header_mid .responsive_nav.active,
	.header_mid_inner .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_subtitle']) . "
	}
	
	/* Finish Header Subtitle Color */
	
	
	/* Start Header Background Color */
	
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=number]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid .search_wrap.search_opened .search_bar_wrap, 
	.header_mid .search_wrap .search_bar_wrap input[type=text],
	.header_mid .search_wrap .search_bar_wrap input[type=text]:focus,
	.header_mid textarea:focus {                                                        
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bg']) . "
	}
	
	.header_mid_outer,
	.header_mid .button:hover,
	.header_mid #navigation > li > a[data-tag]:after,
	.search_wrap .search_bar_wrap {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.search_wrap:before,
		.header_mid .header_mid_outer .header_mid_inner nav:before { 
			background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bg']) . ", 0.25);
		}
	}	
	@media only screen and (max-width: 767px) {
		.enable_header_bottom #header .search_wrap .search_bar_wrap {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bg']) . "
		}
	}
	/* Finish Header Background Color */
	
	
	/* Start Header Background Color on Scroll */
	
	/*.header_mid.header_mid_scroll input[type=search]:focus,*/
	.header_mid.header_mid_scroll input[type=text]:focus,
	.header_mid.header_mid_scroll input[type=number]:focus,
	.header_mid.header_mid_scroll input[type=email]:focus,
	.header_mid.header_mid_scroll input[type=password]:focus,
	.header_mid.header_mid_scroll .search_wrap.search_opened .search_bar_wrap, 
	.header_mid.header_mid_scroll .header_mid_inner .search_wrap .search_bar_wrap,
	.header_mid.header_mid_scroll .search_wrap .search_bar_wrap input[type=text],
	.header_mid.header_mid_scroll .search_wrap .search_bar_wrap input[type=text]:focus,
	.header_mid.header_mid_scroll textarea:focus,
	.header_mid.header_mid_scroll .header_mid_outer	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bg_scroll']) . "
	}
	/* Finish Header Background Color on Scroll */
	
	
	/* Start Header Rollover Background Color */
	
	.header_mid .button,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current_page_item > a,
	.header_mid #navigation > li.menu-item-highlight > a,
	.header_mid #navigation > li.current-menu-parent > a,
	.header_mid #navigation > li.current-menu-ancestor > a,
	.header_mid #navigation > li:hover > a > span.nav_bg_clr:before, 
	.header_mid #navigation > li:hover > a > span.nav_bg_clr:after, 
	.header_mid #navigation > li.current-menu-item > a > span.nav_bg_clr:before,
	.header_mid #navigation > li.current-menu-item > a > span.nav_bg_clr:after,
	.header_mid #navigation > li.current_page_item > a > span.nav_bg_clr:before,
	.header_mid #navigation > li.current_page_item > a > span.nav_bg_clr:after,
	.header_mid #navigation > li.menu-item-highlight > a > span.nav_bg_clr:before,
	.header_mid #navigation > li.menu-item-highlight > a > span.nav_bg_clr:after,
	.header_mid #navigation > li.current-menu-parent > a > span.nav_bg_clr:before,
	.header_mid #navigation > li.current-menu-parent > a > span.nav_bg_clr:after,
	.header_mid #navigation > li.current-menu-ancestor > a > span.nav_bg_clr:before,
	.header_mid #navigation > li.current-menu-ancestor > a > span.nav_bg_clr:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_hover_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_hover_bg']) . "
		}
	}
	
	.header_mid .button:hover, 
	.header_mid #navigation > li > a[data-tag]:after {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_hover_bg']) . "
	}
	
	
	
	/* Finish Header Rollover Background Color */
	
	
	/* Start Header Borders Color */
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .header_mid_outer .header_mid_inner .resp_nav_wrap {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_border']) . "
	}
	
	.header_mid hr,
	.header_mid .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_header_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid .header_mid_inner #navigation li a,
		.header_mid .header_mid_inner #navigation ul li a { 
			border-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_border']) . ", 0.1);
		}
		
		.header_mid .header_mid_inner #navigation li a .cmsmasters-resp-nav-toggle:before {
			color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_border']) . ", 0.4);
		}
	}
	@media only screen and (max-width: 1024px) {
		.enable_header_bottom #header .search_wrap {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_border']) . "
		}
	}	
	/* Finish Header Borders Color */
	
	
	/* Start Header Dropdown Link Color */
	.header_mid #navigation ul li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_link']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_link']) . "
		}
	}
	/* Finish Header Dropdown Link Color */
	
	
	/* Start Header Dropdown Rollover Color */
	
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li > a:hover[data-tag]:after,
	.header_mid #navigation ul li.current-menu-item > a > span,
	.header_mid #navigation ul li.current_page_item > a > span,
	.header_mid #navigation ul li.current-menu-item > a[data-tag]:after,
	.header_mid #navigation ul li.current_page_item > a[data-tag]:after,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li:hover > a,
		.header_mid #navigation > li.menu-item-mega > ul > li > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
		.header_mid #navigation ul li > a:hover,
		.header_mid #navigation > li li.menu-item-highlight > a:hover,
		.header_mid #navigation ul li:hover > a > span:before,
		.header_mid #navigation  li.current_page_item > a > span:before,
		.header_mid #navigation  li.current_menu_item > a > span:before,
		.header_mid #navigation > li > a[data-tag]:hover:after,
		.header_mid #navigation ul li:hover > a[data-tag]:after,
		.header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:after,
		.header_mid #navigation > li > ul li.current-menu-ancestor > a[data-tag]:after,
		.header_mid #navigation > li.menu-item-mega li > a:hover,
		.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a,
		.header_mid #navigation > li > ul li.current-menu-ancestor > a	{
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover']) . "
		}
	}
	
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:hover:before,
		.header_mid #navigation > li.current-menu-item > a[data-tag]:after,
		.header_mid #navigation > li.current_page_item > a[data-tag]:after,
		.header_mid #navigation > li.menu-item-highlight > a[data-tag]:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover']) . "
		}
		
		
		.header_mid #navigation > li > a:hover,
		.header_mid .header_mid_inner #navigation ul li > a:hover,
		.header_mid .header_mid_inner #navigation div ul li > a:hover {
			background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_dropdown_hover']) . ", 0.03);
		}
		
		
	
		.header_mid .header_mid_inner #navigation li > a:hover .cmsmasters-resp-nav-toggle:before,
		.header_mid .header_mid_inner #navigation li.current-menu-ancestor > a,
		.header_mid .header_mid_inner #navigation li.current_page_item > a,
		.header_mid .header_mid_inner #navigation li.current-menu-ancestor > a .cmsmasters-resp-nav-toggle:before,
		.header_mid .header_mid_inner #navigation li.current_page_item > a .cmsmasters-resp-nav-toggle:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover']) . "
		}
	}
	
	/* Finish Header Dropdown Rollover Color */
	
	
	
	/* Start Header Dropdown Subtitle Color */
	
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_subtitle']) . "
		}
	}
	
	/* Finish Header Dropdown Subtitle Color */
	
	
	/* Start Header Dropdown Background Color */
	
	
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . "
	}
	
	.search_bar_wrap button:before, 
	.header_mid .responsive_nav,
	.header_mid .button {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . "
	}
	
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . "
		}
		
		.header_mid #navigation > li > a[data-tag]:after {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . "
		}
		
	}
	
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega li > a:hover {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . "
		}
	}
	/* Finish Header Dropdown Background Color */
	
	
	/* Start Header Dropdown Rollover Background Color */
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation ul li.menu-item-highlight > a, 
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a,
	.header_mid #navigation > li > ul li.current-menu-ancestor > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li > a:hover,
		.header_mid #navigation > li.menu-item-mega li li:hover > a,
		.header_mid #navigation > li.menu-item-mega li li > a:hover,
		.header_mid #navigation > li > a[data-tag]:hover:after,
		.header_mid #navigation ul li > a:hover,
		.header_mid #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
		}
	}	
	
	@media only screen and (max-width: 1024px) {
		.header_mid .header_mid_inner #navigation ul li.current-menu-ancestor > a,
		.header_mid #navigation > li.menu-item-highlight > a,
		.header_mid #navigation > li.current-menu-parent > a,
		.header_mid #navigation > li.current-menu-ancestor > a,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li > a > span.nav_bg_clr,
		.header_mid #navigation > li.menu-item-highlight > a > span.nav_bg_clr, 
		.header_mid .header_mid_inner #navigation ul li.current-menu-item > a,
		.header_mid .header_mid_inner #navigation ul li.current_page_item > a,
		.header_mid .header_mid_inner #navigation ul li.menu-item-highlight > a,
		.header_mid #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
		}
	}
	
	@media only screen and (max-width: 767px) {
		#header .search_wrap .search_bar_wrap {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
		}
	}
	
	
	.search_bar_wrap form p.search_field input[type=search]::-moz-selection {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_hover']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
	}
	
	
	.search_wrap.search_opened {
		background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . ", 0.95);
	}
	
	.header_mid #navigation > li > a > span:before,
	.header_mid #navigation ul > li > a > span:before,
	.header_mid #navigation div ul > li > a > span:before,
	.header_mid_inner .social_wrap a:hover	{
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_dropdown_hover_bg']) . "
	}
	
	/* Finish Header Dropdown Rollover Background Color */
	
	
	/* Start Header Dropdown Borders Color */
	
	
	.header_mid #navigation ul li a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_header_dropdown_border']) . "
	}
	/* Finish Header Dropdown Borders Color */
	
	
	/* Start Header Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bg']) . "
	}
	";
	
	
	if ($cmsmasters_option['dance-studio' . '_header_dropdown_shadow']) {
	$custom_css .= "
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot, 
	.header_bot .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a,
	.header_bot h1 a:hover,
	.header_bot h2 a:hover,
	.header_bot h3 a:hover,
	.header_bot h4 a:hover,
	.header_bot h5 a:hover,
	.header_bot h6 a:hover,
	.header_bot .color_2,
	.header_bot h1,
	.header_bot h2,
	.header_bot h3,
	.header_bot h4,
	.header_bot h5,
	.header_bot h6,
	.header_bot h1 a,
	.header_bot h2 a,
	.header_bot h3 a,
	.header_bot h4 a,
	.header_bot h5 a,
	.header_bot h6 a,
	.header_bot #navigation > li > a,
	.header_bot .social_wrap a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_link']) . "
	}
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_bottom_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	
	.header_bot a:hover,
	.header_bot #navigation > li > a:hover,
	.header_bot #navigation > li.current-menu-item > a,
	.header_bot #navigation > li.current_page_item > a,
	.header_bot #navigation > li.menu-item-highlight > a,
	.header_bot #navigation > li.current-menu-parent > a,
	.header_bot #navigation > li.current-menu-ancestor > a,
	.header_bot #navigation > li > a:hover > span:before,
	.header_bot #navigation > li > a:hover > span:after,
	.header_bot #navigation > li.current-menu-item > a > span:after,
	.header_bot #navigation > li.current_page_item > a > span:after,
	.header_bot #navigation > li.menu-item-highlight > a > span:after,
	.header_bot #navigation > li.current-menu-parent > a > span:after,
	.header_bot #navigation > li.current-menu-ancestor > a > span:after,
	.header_bot #navigation > li > ul li.current-menu-ancestor > a > span:after,
	.header_bot #navigation ul  li > a:hover > span:before,
	.header_bot #navigation div ul li > a:hover > span:before,
	.header_bot #navigation > li.current-menu-item > a > span:before,
	.header_bot #navigation > li.current_page_item > a > span:before,
	.header_bot #navigation > li.menu-item-highlight > a > span:before,
	.header_bot #navigation > li.current-menu-parent > a > span:before, 
	.header_bot #navigation > li.current-menu-ancestor > a > span:before, 
	.header_bot #navigation > li > ul li.current-menu-ancestor > a > span:before,
	.header_bot #navigation > li.current-menu-ancestor > div ul li > a > span:before,
	.header_bot #navigation > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation > li.current-menu-item > a > span > span.nav_subtitle,
	.header_bot #navigation > li.current_page_item > a > span > span.nav_subtitle,
	.header_bot #navigation > li.menu-item-highlight > a > span > span.nav_subtitle,
	.header_bot #navigation > li.current-menu-ancestor > a > span > span.nav_subtitle,
	.header_bot #navigation > li.current-menu-parent > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:hover > a,
		.header_bot #navigation > li:hover > a > span:before,
		.header_bot #navigation > li:hover > a > span:after,
		.header_bot #navigation > li:hover > a > span > span.nav_subtitle,
		.header_bot #navigation > li > a[data-tag]:hover:after {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_hover']) . "
		}
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Subtitle Color */
	
	.header_bot .responsive_nav:hover,
	.header_bot .responsive_nav.active,
	.header_bot #navigation > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_subtitle']) . "
	}
	
	/* Finish Header Bottom Subtitle Color */
	
	
	/* Start Header Bottom Background Color */
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=number]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus,
	.header_bot_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_bg']) . "
	}
	
	.header_bot a:hover,
	.header_bot .button {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_bg']) . "
	}
	
	.header_bot .button:hover,
	.header_bot #navigation > li > a[data-tag]:after,
	.header_bot #navigation > li.current-menu-item > a[data-tag]:after,
	.header_bot #navigation > li.menu-item-highlight > a[data-tag]:after{
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_bg']) . "
	}
	
	
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	
	.header_bot.header_bot_scroll input[type=text]:focus,
	.header_bot.header_bot_scroll input[type=number]:focus,
	.header_bot.header_bot_scroll input[type=email]:focus,
	.header_bot.header_bot_scroll input[type=password]:focus,
	.header_bot.header_bot_scroll input[type=search]:focus,
	.header_bot.header_bot_scroll textarea:focus,
	.header_bot.header_bot_scroll .header_bot_outer,
	.header_bot.header_bot_scroll .button:hover,
	.header_bot.header_bot_scroll #navigation > li > a[data-tag]:after,
	.header_bot.header_bot_scroll #navigation > li.current-menu-item > a[data-tag]:after,
	.header_bot.header_bot_scroll #navigation > li.menu-item-highlight > a[data-tag]:after  {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_bg_scroll']) . "
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Rollover Background Color */
	
	.header_bot #navigation > li.current-menu-item > a,
	.header_bot #navigation > li.current_page_item > a,
	.header_bot #navigation > li.menu-item-highlight > a,
	.header_bot #navigation > li.current-menu-parent > a,
	.header_bot #navigation > li.current-menu-ancestor > a,
	.header_bot #navigation > li:hover > a > span.nav_bg_clr:before, 
	.header_bot #navigation > li:hover > a > span.nav_bg_clr:after, 
	.header_bot #navigation > li.current-menu-item > a > span.nav_bg_clr:before,
	.header_bot #navigation > li.current-menu-item > a > span.nav_bg_clr:after,
	.header_bot #navigation > li.current_page_item > a > span.nav_bg_clr:before,
	.header_bot #navigation > li.current_page_item > a > span.nav_bg_clr:after,
	.header_bot #navigation > li.menu-item-highlight > a > span.nav_bg_clr:before,
	.header_bot #navigation > li.menu-item-highlight > a > span.nav_bg_clr:after,
	.header_bot #navigation > li.current-menu-parent > a > span.nav_bg_clr:before,
	.header_bot #navigation > li.current-menu-parent > a > span.nav_bg_clr:after,
	.header_bot #navigation > li.current-menu-ancestor > a > span.nav_bg_clr:before,
	.header_bot #navigation > li.current-menu-ancestor > a > span.nav_bg_clr:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_hover_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_hover_bg']) . "
		}
	}
	
	.header_bot #navigation > li > a[data-tag]:after {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_hover_bg']) . "
	}
	
	
	.header_bot hr,
	.header_bot .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_header_bottom_hover_bg']) . "
	}
	
	/* Finish Header Bottom Rollover Background Color */
	
	
	/* Start Header Borders Color */
	
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=seach],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot_outer	{
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_bottom_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot .header_bot_inner #navigation li a,
		.header_bot .header_bot_inner #navigation ul li a { 
			border-top-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_border']) . ", 0.1);
		}
		
		.header_bot .header_bot_inner #navigation li a .cmsmasters-resp-nav-toggle:before {
			color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_border']) . ", 0.4);
		}
	}
	
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Dropdown Link Color */
	.header_bot #navigation ul li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_link']) . "
		}
	}
	
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_link']) . "
		}
	}
	/* Finish Header Bottom Dropdown Link Color */
	
	
	/* Start Header Bottom Dropdown Rollover Color */
	.header_bot #navigation ul li > a:hover,
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current_page_item > a,
	.header_bot #navigation ul li.menu-item-depth-subitem:hover > a[data-tag]:after,
	.header_bot #navigation > li li.menu-item-highlight > a,
	.header_bot #navigation > li li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > ul > li > a,
	.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_bot #navigation > li > a:hover > span:before,
	.header_bot #navigation ul > li > a:hover > span:before,
	.header_bot #navigation div ul > li:hover > a > span:before,
	.header_bot #navigation > li.current-menu-item > a > span:before,
	.header_bot #navigation > li.current_page_item > a > span:before,
	.header_bot #navigation > li.menu-item-highlight > a > span:before,
	.header_bot #navigation > li.current-menu-parent > a > span:before, 
	.header_bot #navigation > li.current-menu-ancestor > a > span:before, 
	.header_bot #navigation > li.menu-item-highlight > ul > li > a > span:before,
	.header_bot #navigation > li.current-menu-parent > ul > li > a > span:before,
	.header_bot #navigation > li.menu-item-mega > div ul li.current_page_item > a > span:before,
	.header_bot #navigation > li.menu-item-mega > div ul li > a:hover > span:before,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a,
		.header_bot #navigation > li.menu-item-highlight > a,
		.header_bot #navigation > li > a:hover > span > span.nav_subtitle,
		.header_bot #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.menu-item-highlight > a > span > span.nav_subtitle,
		.header_bot .header_bot_inner #navigation li > a:hover .cmsmasters-resp-nav-toggle:before,
		.header_bot .header_bot_inner #navigation li.current-menu-ancestor > a,
		.header_bot .header_bot_inner #navigation li.current_page_item > a,
		.header_bot .header_bot_inner #navigation li.current-menu-ancestor > a .cmsmasters-resp-nav-toggle:before,
		.header_bot .header_bot_inner #navigation li.current_page_item > a .cmsmasters-resp-nav-toggle:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
		}
		
		.header_bot #navigation li > a:hover,
		.header_bot .header_bot_inner #navigation  ul li > a:hover {
			background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . ", 0.03);
		}
	}
	
		
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=search],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation ul li:hover > a,
		.header_bot #navigation > li.menu-item-mega > ul > li > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
		.header_bot #navigation ul li > a:hover,
		.header_bot #navigation > li li.menu-item-highlight > a:hover,
		.header_bot #navigation ul li:hover > a > span:before,
		.header_bot #navigation  li.current_page_item > a > span:before,
		.header_bot #navigation  li.current_menu_item > a > span:before,
		.header_bot #navigation > li > a[data-tag]:hover:after,
		.header_bot #navigation ul li:hover > a[data-tag]:after,
		.header_bot #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:after,
		.header_bot #navigation > li > ul li.current-menu-ancestor > a[data-tag]:after,
		.header_bot #navigation > li.menu-item-mega li > a:hover,
		.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a,
		.header_bot #navigation > li > ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:after,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:after,
	.header_bot #navigation > li.menu-item-mega li li.menu-item-depth-subitem:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.menu-item-depth-subitem.current-menu-item > a[data-tag]:after, 
	.header_bot #navigation > li.menu-item-mega li li.menu-item-depth-subitem.menu-item-highlight > a[data-tag]:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:hover:before,
		.header_bot #navigation > li.current-menu-item > a[data-tag]:after,
		.header_bot #navigation > li.current_page_item > a[data-tag]:after,
		.header_bot #navigation > li.menu-item-highlight > a[data-tag]:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
		}
		
		
		.header_bot #navigation > li > a:hover,
		.header_bot .header_bot_inner #navigation ul li > a:hover,
		.header_bot .header_bot_inner #navigation div ul li > a:hover {
			background-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . ", 0.03);
		}
		
		
	
		.header_bot .header_bot_inner #navigation li > a:hover .cmsmasters-resp-nav-toggle:before,
		.header_bot .header_bot_inner #navigation li.current-menu-ancestor > a,
		.header_bot .header_bot_inner #navigation li.current_page_item > a,
		.header_bot .header_bot_inner #navigation li.current-menu-ancestor > a .cmsmasters-resp-nav-toggle:before,
		.header_bot .header_bot_inner #navigation li.current_page_item > a .cmsmasters-resp-nav-toggle:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	/* Finish Header Bottom Dropdown Rollover Color */
	
	
	/* Start Header Bottom Dropdown Subtitle Color */
	
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation ul li > a[data-tag]:after,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:after {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	
	/* Finish Header Bottom Dropdown Subtitle Color */
	
	
	/* Start Header Bottom Dropdown Background Color */
	
	
	
	.header_bot .responsive_nav {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega li > a:hover {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container 	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . "
	}
	/* Finish Header Bottom Dropdown Background Color */
	
	
	/* Start Header Bottom Dropdown Rollover Background Color */
	
	.header_bot #navigation > li > a > span:before,
	.header_bot #navigation ul > li > a > span:before,
	.header_bot #navigation div ul > li > a > span:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover_bg']) . "
	}
	
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current_page_item > a,
	.header_bot #navigation ul li.menu-item-highlight > a, 
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega li.menu-item-highlight > a,
	.header_bot #navigation > li > ul li.current-menu-ancestor > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation ul li > a:hover,
		.header_bot #navigation > li.menu-item-mega li li:hover > a,
		.header_bot #navigation > li.menu-item-mega li li > a:hover,
		.header_bot #navigation > li > a[data-tag]:hover:after,
		.header_bot #navigation ul li > a:hover,
		.header_bot #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover_bg']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot .header_bot_inner #navigation ul li.current-menu-ancestor > a,
		.header_bot #navigation > li.menu-item-highlight > a,
		.header_bot #navigation > li.current-menu-parent > a,
		.header_bot #navigation > li.current-menu-ancestor > a,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a,
		.header_bot #navigation > li > a > span.nav_bg_clr,
		.header_bot #navigation > li.menu-item-highlight > a > span.nav_bg_clr, 
		.header_bot .header_bot_inner #navigation ul li.current-menu-item > a,
		.header_bot .header_bot_inner #navigation ul li.current_page_item > a,
		.header_bot .header_bot_inner #navigation ul li.menu-item-highlight > a,
		.header_bot #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_hover_bg']) . "
		}
	}

	/* Finish Header Bottom Dropdown Rollover Background Color */
	
	
	/* Start Header Bottom Dropdown Borders Color */
	
	.header_bot #navigation ul li a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_border']) . "
	}
	/* Finish Header Bottom Dropdown Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_bottom_bg']) . "
	}
	";
	
	
	if ($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_shadow']) {
	$custom_css .= "
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 5px 15px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_inner .meta_wrap, 
	.header_top_inner .meta_wrap a,
	.header_top_inner .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top #top_line_nav > li > a,  
	.header_top a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .color_2,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.responsive_top_nav {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_link']) . "
	}
	
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_top_link']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_link']) . "
	}
	
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.responsive_top_nav:hover,
	.responsive_top_nav.active, 
	.header_top a:hover,
	.header_top .button,
	.header_top_inner .meta_wrap a:hover, 
	.header_top_inner .social_wrap a:hover, 
	.header_top #top_line_nav > li > a:hover,
	.header_top #top_line_nav > li.current-menu-item > a,
	.header_top #top_line_nav > li.current_page_item > a, 
	.header_top #top_line_nav  li.current-menu-ancestor > a{
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
	}
	
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav > li > a:hover {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .header_top_inner #top_line_nav > li > a:hover,
		.header_top .header_top_inner #top_line_nav > li.current-menu-item > a,
		.header_top .header_top_inner #top_line_nav > li.current_page_item > a,
		.header_top .header_top_inner #top_line_nav ul li > a:hover,
		.header_top .header_top_inner #top_line_nav ul li.current-menu-item > a,
		.header_top .header_top_inner #top_line_nav ul li.current_page_item > a,
		.header_top .header_top_but.opened > span {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
		}
	}
	
	.header_top_but .cmsmasters_top_arrow_pixel:before, 
	.header_top_but .cmsmasters_top_arrow_pixel:after, 
	.header_top_but .cmsmasters_top_arrow_pixel span:before, 
	.header_top_but .cmsmasters_top_arrow_pixel span:after, 
	.header_top_but .cmsmasters_bot_arrow_pixel:before, 
	.header_top_but .cmsmasters_bot_arrow_pixel:after, 
	.header_top_but .cmsmasters_bot_arrow_pixel span:before, 
	.header_top_but .cmsmasters_bot_arrow_pixel span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_top_hover']) . "
	}
	
	.header_top .header_top_outer .header_top_inner .header_top_right,
	.header_top .header_top_outer .header_top_inner .header_top_left,
	.header_top .header_top_inner #top_line_nav  li > a { 
		border-color:rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_top_hover']) . ", 0.1);
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	
	.header_top #top_line_nav > li > a > span.cmsmasters_count {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_bg']) . "
	}
	
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_bg']) . "
	}
	
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_top_border']) . "
	}
	
	.header_top hr,
	.header_top .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['dance-studio' . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Dropdown Link Color */
	.header_top #top_line_nav ul li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Dropdown Link Color */
	
	
	/* Start Header Top Dropdown Rollover Color */
	.header_top #top_line_nav ul li > a:hover,
	.header_top #top_line_nav ul li.current-menu-item > a,
	.header_top #top_line_nav ul li.current_page_item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul li > a:hover {
			" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_hover']) . "
		}
	}
	/* Finish Header Top Dropdown Rollover Color */
	
	
	/* Start Header Top Dropdown Background Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Dropdown Background Color */
	
	
	/* Start Header Top Dropdown Border Color */
	.responsive_top_nav {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_border']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav li,
		.header_top #top_line_nav li a, 
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_border']) . "
		}
	}
	
	.header_top #top_line_nav ul li a {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['dance-studio' . '_header_top_dropdown_border']) . "
	}
	/* Finish Header Top Dropdown Border Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_bg']) . "
	}
	
	.header_top::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['dance-studio' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['dance-studio' . '_header_top_bg']) . "
	}
	";
	
	
	if ($cmsmasters_option['dance-studio' . '_header_top_dropdown_shadow']) {
	$custom_css .= "
	.header_top_inner nav > div > ul > li ul {
		-webkit-box-shadow:0 0 2px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 0 2px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 0 2px 0 rgba(" . color2rgb($cmsmasters_option['dance-studio' . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option['dance-studio' . '_header_top_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/

";
	
	
	return apply_filters('dance_studio_theme_colors_secondary_filter', $custom_css);
}

