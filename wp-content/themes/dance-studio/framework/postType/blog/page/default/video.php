<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Blog Page Default Video Post Format Template
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


$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);

$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);

$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);

?>

<!--_________________________ Start Video Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_default_type'); ?>>
	<div class="cmsmasters_post_cont">
		<?php
		if (!post_password_required()) {
			if ($cmsmasters_post_video_type == 'selfhosted' && !empty($cmsmasters_post_video_links) && sizeof($cmsmasters_post_video_links) > 0) {
				$video_size = cmsmasters_image_thumbnail_list();
				
				
				$attrs = array( 
					'preload'  => 'none', 
					'height'   => $video_size['post-thumbnail']['height'], 
					'width'    => $video_size['post-thumbnail']['width'] 
				);
				
				
				if (has_post_thumbnail()) {
					$video_poster = wp_get_attachment_image_src((int) get_post_thumbnail_id(get_the_ID()), 'cmsmasters-masonry-thumb');
					
					
					$attrs['poster'] = $video_poster[0];
				}
				
				
				foreach ($cmsmasters_post_video_links as $cmsmasters_post_video_link_url) {
					$attrs[substr(strrchr($cmsmasters_post_video_link_url, '.'), 1)] = $cmsmasters_post_video_link_url;
				}
				
				
				echo '<div class="cmsmasters_video_wrap">' . 
					wp_video_shortcode($attrs) . 
				'</div>';
			} elseif ($cmsmasters_post_video_type == 'embedded' && $cmsmasters_post_video_link != '') {
				global $wp_embed;
				
				
				$video_size = cmsmasters_image_thumbnail_list();
				
				
				echo '<div class="cmsmasters_video_wrap">' . 
					do_shortcode($wp_embed->run_shortcode('[embed width="' . $video_size['post-thumbnail']['width'] . '" height="' . $video_size['post-thumbnail']['height'] . '"]' . $cmsmasters_post_video_link . '[/embed]')) . 
				'</div>';
			} elseif (has_post_thumbnail()) {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', true, false, true, false, true, true, false);
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
<!--_________________________ Finish Video Article _________________________ -->

