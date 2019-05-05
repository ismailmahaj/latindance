<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.1.8
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>
<li <?php wc_product_class(); ?>>
	<div class="product_outer">
	<?php 
		woocommerce_show_product_loop_sale_flash();
		
		$availability = $product->get_availability();

		if (esc_attr($availability['class']) == 'out-of-stock') {
			echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
		}
	?>
		<article class="product_inner">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
			
			do_action( 'woocommerce_before_shop_loop_item' );
			?>
			<figure class="cmsmasters_product_img">
				<a href="<?php the_permalink(); ?>">
					<?php woocommerce_template_loop_product_thumbnail(); ?>
				</a>
			</figure>
			<?php 
			if (get_the_terms($product->get_id(), 'product_cat')) {
				echo '<div class="entry-meta cmsmasters_product_cat">' . 
					dance_studio_get_the_category_list($product->get_id(), 'product_cat', ' / ') . 
				'</div>';
			}
			
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			
			do_action( 'woocommerce_before_shop_loop_item_title' );
			
			
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
			
			do_action( 'woocommerce_shop_loop_item_title' );
			?>
			<header class="entry-header cmsmasters_product_header">
				<h5 class="entry-title cmsmasters_product_title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
			</header>
			<div class="cmsmasters_product_info">
			<?php
				dance_studio_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
				
				if ( 
					$product->is_purchasable() && 
					$product->is_in_stock() 
				) {
					echo '<div class="product_price_switcher_holder">' ; 
					dance_studio_woocommerce_add_to_cart_button();
					
					woocommerce_template_loop_price();
					echo '</div>';
				}	
				
				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
				remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
				
				do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			</div>
			<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
			
			do_action( 'woocommerce_after_shop_loop_item' );
			?>
		</article>
	</div>
</li>