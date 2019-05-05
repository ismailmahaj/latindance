<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Blog Page Masonry Image Post Format Template
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


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_masonry_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
		<?php 
		if (!post_password_required()) {
			if ($cmsmasters_post_image_link != '') {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_image_link);
			} elseif (has_post_thumbnail()) {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}
		
		echo '<div class="cmsmasters_post_cont_inner">';
		
			if ($author || $categories || $tags) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
					
					$author ? dance_studio_get_post_author('page') : '';
					
					$categories ? dance_studio_get_post_category(get_the_ID(), 'category', 'page') : '';
					
					$tags ? dance_studio_get_post_tags('page') : '';
					
				echo '</div>';
			}
			
			dance_studio_post_heading(get_the_ID(), 'h4');
			
			
			dance_studio_post_exc_cont_small();
			
			
			if ($more || $date || $likes || $comments) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					$more ? dance_studio_post_more(get_the_ID()) : '';
					
					if ($date || $comments || $likes) {
						echo '<div class="cmsmasters_post_footer_info' . ((!$more) ? ' no_mt' : '') . '">';
						
							echo '<div class="cmsmasters_post_meta_info">';
								
								$likes ? dance_studio_get_post_like('page') : '';
								
								$comments ? dance_studio_get_post_comments('page') : '';
								
							echo '</div>';
							
							$date ? dance_studio_get_post_date('page', 'default') : '';
							
						echo '</div>' ;
					}	
					
				echo '</footer>';
			}
			
		echo '</div>';	
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

