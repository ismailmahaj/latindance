<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.2
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.2.0
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}
?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<?php echo dance_studio_return_content( $product->get_image() ); ?>
		<span class="product-title"><?php echo wp_kses_post( $product->get_name() );; ?></span>
	</a>

	<?php dance_studio_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full'); ?>

	<?php echo dance_studio_return_content( $product->get_price_html() ); ?>

	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>
