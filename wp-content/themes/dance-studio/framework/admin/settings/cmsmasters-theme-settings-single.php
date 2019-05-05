<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function dance_studio_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'dance-studio');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'dance-studio');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'dance-studio');
	}
	
	if (CMSMASTERS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'dance-studio');
	}
	
	if (CMSMASTERS_TIMETABLE) {
		$tabs['tt_event'] = esc_attr__('Timetable Event', 'dance-studio');
	}
	
	return $tabs;
}


function dance_studio_options_single_sections() {
	$tab = dance_studio_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'dance-studio');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'dance-studio');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'dance-studio');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'dance-studio');
		
		
		break;
	case 'tt_event':
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'dance-studio');
		
		
		break;
	default:
		$sections = array();
		
		
		break;	
	}
	
	
	return $sections;
} 


function dance_studio_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = dance_studio_get_the_tab();
	}
	
	
	$options = array();
	$defaults = cmsmasters_theme_settings_single_defaults();
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_attr__('Show Related Posts', 'dance-studio') . '|related', 
				esc_attr__('Show Popular Posts', 'dance-studio') . '|popular', 
				esc_attr__('Show Recent Posts', 'dance-studio') . '|recent', 
				esc_attr__('Hide More Posts Box', 'dance-studio') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'dance-studio'), 
			'desc' => esc_html__('posts', 'dance-studio'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['dance-studio' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'dance-studio'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'dance-studio'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['dance-studio' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'dance-studio' . '_blog_post_r_p_l_number', 
			'title' => esc_html__('Related, Popular & Latest Posts Boxes Items Number', 'dance-studio'), 
			'desc' => esc_html__('posts', 'dance-studio'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'dance-studio'), 
			'desc' => esc_html__('Enter a project details block title', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'dance-studio'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				esc_html__('Show Related Post', 'dance-studio') . '|related', 
				esc_html__('Show Popular Post', 'dance-studio') . '|popular', 
				esc_html__('Show Recent Post', 'dance-studio') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'dance-studio'), 
			'desc' => esc_html__('projects', 'dance-studio'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['dance-studio' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'dance-studio'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'dance-studio'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['dance-studio' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_r_p_l_number', 
			'title' => esc_html__('Related, Popular & Latest Projects Boxes Items Number', 'dance-studio'), 
			'desc' => esc_html__('projects', 'dance-studio'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'dance-studio' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'dance-studio'), 
			'desc' => esc_html__('Enter a profile details block title', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'dance-studio' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'dance-studio'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'dance-studio') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'dance-studio'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				esc_attr__('Show Related Tab', 'dance-studio') . '|related', 
				esc_attr__('Show Popular Tab', 'dance-studio') . '|popular', 
				esc_attr__('Show Recent Tab', 'dance-studio') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_r_p_l_number', 
			'title' => esc_html__('Related, Popular & Latest Campaigns Boxes Items Number', 'dance-studio'), 
			'desc' => esc_html__('campaigns', 'dance-studio'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'dance-studio' . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'dance-studio'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	case 'tt_event':
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'dance-studio' . '_tt_event_hours', 
			'title' => esc_html__('Event Hours', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'dance-studio' . '_tt_event_hours_title', 
			'title' => esc_html__('Event Hours Title', 'dance-studio'), 
			'desc' => esc_html__('Enter a event hours block title', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'dance-studio' . '_tt_event_details_title', 
			'title' => esc_html__('Event Details Title', 'dance-studio'), 
			'desc' => esc_html__('Enter a event details block title', 'dance-studio'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'dance-studio' . '_tt_event_cat', 
			'title' => esc_html__('Event Categories', 'dance-studio'), 
			'desc' => esc_html__('show', 'dance-studio'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		
		break;	
	}
	
	
	return $options;
}

