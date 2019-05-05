<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Blog Page Timeline Standard Post Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsmasters_post_metadata) || is_home())) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_timeline_type'); ?>>
	<div class="cmsmasters_post_info entry-meta">
		<?php $date ? dance_studio_get_post_date('page', 'timeline') : ''; ?>
	</div>
	<div class="cmsmasters_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			dance_studio_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
		}
		
		
		echo '<div class="cmsmasters_post_cont_inner">';
		
			if ($author || $categories || $tags) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
					
					$author ? dance_studio_get_post_author('page') : '';
					
					$categories ? dance_studio_get_post_category(get_the_ID(), 'category', 'page') : '';
					
					$tags ? dance_studio_get_post_tags('page') : '';
					
				echo '</div>';
			}
			
			
			dance_studio_post_heading(get_the_ID(), 'h4');
			
			dance_studio_post_exc_cont_small();
			
			
			if ($more || $likes || $comments) {
				echo '<footer class="cmsmasters_post_footer entry-meta">' . 
					'<div class="cmsmasters_post_footer_info">';
					
					if ($comments || $likes) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							$likes ? dance_studio_get_post_like('page') : '';
							
							$comments ? dance_studio_get_post_comments('page') : '';
							
						echo '</div>';
					}
					
					
					$more ? dance_studio_post_more(get_the_ID()) : '';
					
				echo '</div>' . 
				'</footer>';
			}
		echo '</div>';	
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

