<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.3
 * 
 * Single Profile Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = dance_studio_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" role="main">' . "\n\t";


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	get_template_part('framework/postType/profile/post/standard');

	
	if ($cmsmasters_option['dance-studio' . '_profile_post_nav_box']) {
		dance_studio_prev_next_posts();
	}
	
	
	if ($cmsmasters_profile_sharing_box == 'true') {
		dance_studio_sharing_box(esc_html__('Share this profile?', 'dance-studio'), 'h3');
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

