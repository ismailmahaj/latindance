<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Posts Slider Video Post Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;

?>

<!--_________________________ Start Video Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_slider_post_cont">
	<?php
		echo '<div class="cmsmasters_slider_post_cont_wrap">';
			
			if (!post_password_required()) {
				echo '<div class="thumb_wrap">';
					
					dance_studio_thumb_rollover(get_the_ID(), 'post-thumbnail', true, true, false, false, false, false, false, false);
					
				echo '</div>';
			}
			
			if ($categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$categories ? dance_studio_get_post_category(get_the_ID(), 'category', 'page') : '';
					
				echo '</div>';
			}
			
			
			dance_studio_slider_post_heading(get_the_ID(), 'post', 'h4');
			
			
			$excerpt ? dance_studio_slider_post_exc_cont('post') : '';
			
			
			if ($date ||  $likes || $comments) {
				echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
					
					if ($likes || $comments) {
						echo '<div class="cmsmasters_slider_post_meta_info">';
							
							$comments ? dance_studio_get_slider_post_comments('post') : '';
							
							$likes ? dance_studio_slider_post_like('post') : '';
							
						echo '</div>';
					}
					
					$date ? dance_studio_get_slider_post_date('post') : '';
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Video Article _________________________ -->

