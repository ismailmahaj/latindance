<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Portfolio Puzzle Gallery Project Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = in_array('title', $cmsmasters_project_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsmasters_project_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_project_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_project_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_project_metadata) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$cmsmasters_project_size = get_post_meta(get_the_ID(), 'cmsmasters_project_size', true);

if (!$cmsmasters_project_size) {
    $cmsmasters_project_size = 'one_x_one';
}


$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Gallery Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class($cmsmasters_project_size); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
	<?php 
		dance_studio_thumb_rollover(get_the_ID(),  'full', false, $rollover, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);

		
		
		if (!$title) {
			echo '<div class="dn">';
				
				dance_studio_project_heading(get_the_ID(), 'h5');
				
			echo '</div>';
		}
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="project_inner">';
				
				($title) ? dance_studio_project_heading(get_the_ID(), 'h5', true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				
				if ($likes || $comments || $categories) {
					echo '<footer class="cmsmasters_project_footer entry-meta">';
					
						if ($categories) {
							echo '<div class="cmsmasters_project_cont_info entry-meta">';
								
								dance_studio_get_project_category(get_the_ID(), 'pj-categs', 'page');
								
							echo '</div>';
						}
						
						
						if ($likes || $comments) {
							echo '<div class="cmsmasters_project_meta">';
							
								($likes) ? cmsmasters_project_like('page') : '';
							
								($comments) ? dance_studio_get_project_comments('page') : '';
								
							echo '</div>';
						}
						
					echo '</footer>';
				}
				
				($excerpt && dance_studio_project_check_exc_cont()) ? dance_studio_project_exc_cont() : '';
				
				
			echo '</div>';
		}
		
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Gallery Project _________________________ -->

