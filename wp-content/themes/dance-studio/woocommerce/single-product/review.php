<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.2.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<li itemprop="reviews" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container">

		<?php echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '60' ), '', get_comment_author() ); ?>

		<div class="comment-text">
		<?php
			dance_studio_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full', true, $comment->comment_ID);
			
			
			if ( $comment->comment_approved == '0' ) : 
		?>
				<p class="meta"><em><?php  esc_html_e('Your comment is awaiting approval', 'dance-studio' ); ?></em></p>
		<?php 
			else : 
		?>
				<div class="meta">
					<h5 itemprop="author"><?php comment_author(); ?></h5>
					<?php
						if ( get_option( 'woocommerce_review_rating_verification_label' ) === 'yes' )
							if ( wc_customer_bought_product( $comment->comment_author_email, $comment->user_id, $comment->comment_post_ID ) )
								echo '<em class="verified">(' . esc_html__( 'verified owner', 'dance-studio' ) . ')</em> ';
					?> 
					<time itemprop="datePublished" datetime="<?php echo get_comment_date( 'c' ); ?>">
						<?php echo get_comment_date( get_option( 'date_format' ) ); ?>
					</time>
				</div>

		<?php 
			endif; 
			
			do_action( 'woocommerce_review_before_comment_text', $comment );
		?>
			<div itemprop="description" class="description"><?php comment_text(); ?></div>
			
			<?php 
			do_action( 'woocommerce_review_after_comment_text', $comment );
				
			do_action( 'woocommerce_review_before_comment_meta', $comment );
			?>
		</div>
	</div>
