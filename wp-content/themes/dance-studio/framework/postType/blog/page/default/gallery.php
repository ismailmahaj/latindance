<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Blog Page Default Gallery Post Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_default_type'); ?>>
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
							autoHeight : 		true,
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
			if ($date) {
				echo '<div class="cmsmasters_post_cont_date_wrap">';
					echo '<div class="cmsmasters_post_cont_date entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
						
						$date ? cmsmasters_post_date_mod('page', 'default') : '';
						
					echo '</div>';
				echo '</div>';
			}
			echo '<div class="cmsmasters_post_content_wrap">';
				dance_studio_post_heading(get_the_ID(), 'h2');
						
				dance_studio_post_exc_cont();
				
				
				if ($more) {
					echo '<footer class="cmsmasters_post_footer entry-meta">';
						
						$more ? dance_studio_post_more(get_the_ID()) : '';
						
					echo '</footer>';
				} elseif (!$more && theme_excerpt(20, false) != '') {
					echo '<div class="pb_10"></div>';
				}
				
				if ($author || $categories || $tags || $likes || $comments) {
					echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
						
						if ($comments || $likes) {
							echo '<div class="cmsmasters_post_meta_info">';
								
								$likes ? dance_studio_get_post_like('page') : '';
								
								$comments ? dance_studio_get_post_comments('page') : '';
								
								
							echo '</div>';
						}
						
						
						$author ? dance_studio_get_post_author('page') : '';
						
						$categories ? dance_studio_get_post_category(get_the_ID(), 'category', 'page') : '';
						
						$tags ? dance_studio_get_post_tags('page') : '';
						
					echo '</div>';
				}
			echo '</div>';	
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

