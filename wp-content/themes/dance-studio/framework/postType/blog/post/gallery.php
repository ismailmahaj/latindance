<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Blog Post Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = dance_studio_get_global_options();

$cmsmasters_post_post_options = get_post_meta(get_the_ID(), 'cmsmasters_post_post_options', true);

if ($cmsmasters_post_post_options == 'custom') {
	$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);
	
	$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);
} else {
	$cmsmasters_post_title = $cmsmasters_option['dance-studio' . '_blog_post_title'] ? 'true' : 'false';
	
	$cmsmasters_post_sharing_box = $cmsmasters_option['dance-studio' . '_blog_post_share_box'] ? 'true' : 'false';
}

$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));

$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_post_cont">
	<?php 
		if (!post_password_required()) {
			if (sizeof($cmsmasters_post_images) > 1) {
		?>
				<script type="text/javascript">
					jQuery(document).ready(function () {
						jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
							singleItem : 		true, 
							transitionStyle : 	false, 
							rewindNav : 		true, 
							slideSpeed : 		200, 
							paginationSpeed : 	800, 
							rewindSpeed : 		1000, 
							autoPlay : 			false, 
							stopOnHover : 		false, 
							pagination : 		true, 
							navigation : 		true, 
							navigationText : 	[ 
								'<span class=\"cmsmasters_prev_arrow\"><span></span></span>',
								'<span class=\"cmsmasters_next_arrow\"><span></span></span>' 
							]  
						} );
					} );
				</script>
				<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider">
				<?php 
					foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
						$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
						
						
						echo '<div>' . 
							'<figure>' . 
								wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-masonry-thumb', false, array( 
									'class' => 	'full-width', 
									'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
									'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</div>';
					}
				?>
				</div>
			<?php 
			} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
			} elseif (has_post_thumbnail()) {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}
		
		
		echo '<div class="cmsmasters_post_cont_inner">';
			if ($cmsmasters_option['dance-studio' . '_blog_post_date']) {
				echo '<div class="cmsmasters_post_cont_date_wrap">';
					echo '<div class="cmsmasters_post_cont_date entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
						
						cmsmasters_post_date_mod('post');
						
					echo '</div>';
				echo '</div>';
			}
			echo '<div class="cmsmasters_post_content_wrap">';
			if ($cmsmasters_post_title == 'true') {
				dance_studio_post_title_nolink(get_the_ID(), 'h2');
			}
		
			if (get_the_content() != '') {
				echo '<div class="cmsmasters_post_content entry-content">';
					
					the_content();
					
					
					wp_link_pages(array( 
						'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'dance-studio') . ':</strong>', 
						'after' => '</div>', 
						'link_before' => ' <span> ', 
						'link_after' => ' </span> ' 
					));
					
				echo '<div class="cl"></div>' . 
				'</div>';
			}
			
			
		
			if ( 
				$cmsmasters_option['dance-studio' . '_blog_post_author'] || 
				$cmsmasters_option['dance-studio' . '_blog_post_cat'] || 
				$cmsmasters_option['dance-studio' . '_blog_post_tag'] || 
				$cmsmasters_option['dance-studio' . '_blog_post_like'] || 
				$cmsmasters_option['dance-studio' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
					
					if ( 
						$cmsmasters_option['dance-studio' . '_blog_post_like'] || 
						$cmsmasters_option['dance-studio' . '_blog_post_comment'] 
					) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							dance_studio_get_post_like('post');
							
							dance_studio_get_post_comments('post');
							
						echo '</div>';
					}
					
					
					dance_studio_get_post_author('post');
					
					dance_studio_get_post_category(get_the_ID(), 'category', 'page');
					
					dance_studio_get_post_tags('post');
					
				echo '</div>';
			}
			
			if ($cmsmasters_post_sharing_box == 'true') {
				dance_studio_sharing_box(esc_html__('Share this post?', 'dance-studio'), 'h6');
			}
			
		echo '</div>';	
	echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

