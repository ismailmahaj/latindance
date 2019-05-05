<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.1.3
 * 
 * Single Project Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = dance_studio_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_project_options = get_post_meta(get_the_ID(), 'cmsmasters_project_project_options', true);

if ($cmsmasters_project_project_options == 'custom') {
	$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

	$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

	$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);
} else {
	$cmsmasters_project_sharing_box = $cmsmasters_option['dance-studio' . '_portfolio_project_share_box'] ? 'true' : 'false';

	$cmsmasters_project_author_box = $cmsmasters_option['dance-studio' . '_portfolio_project_author_box'] ? 'true' : 'false';

	$cmsmasters_project_more_posts = $cmsmasters_option['dance-studio' . '_portfolio_more_projects_box'];
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" role="main">' . "\n\t";


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/portfolio/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/portfolio/post/standard');
	}
	
	
	if ($cmsmasters_option['dance-studio' . '_portfolio_project_nav_box']) {
		dance_studio_prev_next_posts();
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		dance_studio_author_box(esc_html__('About author', 'dance-studio'), 'h5');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		dance_studio_related( 
			'h4', 
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option['dance-studio' . '_portfolio_more_projects_count'], 
			$cmsmasters_option['dance-studio' . '_portfolio_more_projects_pause'], 
			'project', 
			'pj-tags' 
		);
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

