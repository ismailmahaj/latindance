<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.1.3
 * 
 * Blog Post Video Post Format Template
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

$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);

$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);

$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);

?>

<!--_________________________ Start Video Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
<!--_________________________ Finish Video Article _________________________ -->

