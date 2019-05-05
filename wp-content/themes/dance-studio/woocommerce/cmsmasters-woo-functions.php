<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.2.0
 * 
 * Website WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function dance_studio_woocommerce_cart_dropdown() {
	global $woocommerce;
	
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
	
	
	$cart_currency_symbol = get_woocommerce_currency_symbol();
	
	$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
	
	$cart_currency = $cart_currency_symbol;
	
	
	if ($cart_currency_symbol_pos == 'left_space') {
		$cart_currency = $cart_currency_symbol . ' ';
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_currency = ' ' . $cart_currency_symbol;
	}
	
	
	$cart_price = str_replace($cart_currency, '', $cart_subtotal);
	
	
	$cart_subtotal_html = '';
	
	
	if ($cart_currency_symbol_pos == 'left') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . ' </span>' . $cart_price;
	} elseif ($cart_currency_symbol_pos == 'right') {
		$cart_subtotal_html .= $cart_price . '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	} elseif ($cart_currency_symbol_pos == 'left_space') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . ' </span> ' . $cart_price;
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_subtotal_html .= $cart_price . ' <span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	}
	
	
	echo '<div class="cmsmasters_dynamic_cart">' .  
		'<a href="' . esc_url(wc_get_cart_url()) . '" class="cmsmasters_dynamic_cart_button">' . 
			'<span class="cmsmasters_theme_icon_custom_basket">' . 
				'<span class="count">' . $cart_count . '</span>' . 
			'</span>' . 
		'</a>' . 
		'<div class="widget_shopping_cart_content"></div>' . 
	'</div>';
}


/* Add to Cart Button */
function dance_studio_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if ( 
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock() 
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple cmsmasters_theme_icon_custom_basket ajax_add_to_cart" title="' . esc_attr__('Add to Cart', 'dance-studio') . '">' . 
			'<span>' . esc_html__('Add to Cart', 'dance-studio') . '</span>' . 
		'</a>' ;
	}
}


/* Rating */
function dance_studio_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemprop = $in_review ? 'reviewRating' : 'aggregateRating';
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemprop=\"{$itemprop}\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_attr__('Rated %s out of 5', 'dance-studio'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'dance-studio') . "</span>
</div>
";
	
	
	if ($show) {
		echo dance_studio_return_content($out);
	} else {
		return $out;
	}
}


function dance_studio_woocommerce_demo_store($html, $notice) {
	return '<div class="woocommerce-store-notice demo_store">' . 
		'<a href="#" class="cmsmasters_theme_icon_cancel woocommerce-store-notice__dismiss-link"></a>' . 
		'<p>' . wp_kses_post($notice) . '</p>' . 
	'</div>';
}

add_filter('woocommerce_demo_store', 'dance_studio_woocommerce_demo_store', 10, 2);


function dance_studio_woocommerce_support() {
    add_theme_support('woocommerce', array( 
		'thumbnail_image_width' => 540, 
		'single_image_width' => 600 
	));
}

add_action('after_setup_theme', 'dance_studio_woocommerce_support');


add_filter('woocommerce_enqueue_styles', '__return_false');



/* WooCommerce Dynamic cart count update after ajax */
function woocommerce_header_add_to_cart_count( $dynamic_count ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span class="count"><?php echo dance_studio_return_content($woocommerce->cart->cart_contents_count); ?></span>
	<?php
	
	$dynamic_count['.cmsmasters_dynamic_cart .count'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_count');