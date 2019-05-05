<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.7
 * 
 * Portfolio Grid Video Project Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;
$more = (in_array('more', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$project_thumb_size = (($cmsmasters_pj_layout_mode == 'cmsmasters-project-thumb') ? 'cmsmasters-project-masonry-thumb' : 'cmsmasters-project-thumb');

$project_thumb_high = (($cmsmasters_pj_layout_mode == 'cmsmasters-project-thumb') ? true : false);


$cmsmasters_project_video_type = get_post_meta(get_the_ID(), 'cmsmasters_project_video_type', true);



$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Video Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
	<?php
		if ($more) {
			echo '<div class="cmsmasters_project_img_button_wrap">' .
			
		
			'<div class="cmsmasters_project_button entry-meta">';
			
				cmsmasters_project_more(get_the_ID(), true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
			
			echo '</div>';
		}
			
			
		dance_studio_thumb_rollover(get_the_ID(), $project_thumb_size, $rollover, true, false, false, $cmsmasters_project_video_type, false, false, $project_thumb_high, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
		
		
		if ($more) {
			echo '</div>';
		}
		
		
		if (!$title) {
			echo '<div class="dn">';
				
				dance_studio_project_heading(get_the_ID(), 'h5');
				
			echo '</div>';
		}
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="project_inner">';
				
				($title) ? dance_studio_project_heading(get_the_ID(), 'h5', true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				if ($categories) {
					echo '<div class="cmsmasters_project_cont_info entry-meta">';
						
						dance_studio_get_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
				}
				
				
				$excerpt ? dance_studio_project_exc_cont() : '';
				
				
				
				if ($likes || $comments) {
					echo '<footer class="cmsmasters_project_footer entry-meta">';
						
						($likes) ? cmsmasters_project_like('page') : '';
						
						($comments) ? dance_studio_get_project_comments('page') : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Video Project _________________________ -->

