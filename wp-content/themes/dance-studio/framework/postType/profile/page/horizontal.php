<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.0
 * 
 * Profiles Page Horizontal Profile Format Template
 * Created by CMSMasters
 * 
 */



$columns_num = '';
	
if ($profile_columns == 1) {
	$columns_num = 'one_first';
} elseif ($profile_columns == 2) {
	$columns_num = 'one_half';
} elseif ($profile_columns == 3) {
	$columns_num = 'one_third';
} elseif ($profile_columns == 4) {
	$columns_num = 'one_fourth';
} 


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>

<!--_________________________ Start Horizontal Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class($columns_num); ?>>
	<?php 
	if (has_post_thumbnail()) {
		echo '<div class="pl_img">' . "\n" . 
			'<figure>' . "\n" . 
				'<a href="' . esc_url(get_permalink()) . '">' . 
					get_the_post_thumbnail(get_the_ID(), 'cmsmasters-square-thumb', array( 
						'alt' => cmsmasters_title(get_the_ID(), false), 
						'title' => cmsmasters_title(get_the_ID(), false) 
					)) . 
				'</a>' . 
			'</figure>' . "\n" . 
		'</div>' . "\n";
	}
	else {
		echo '<div class="pl_img"><a href="' . esc_url(get_permalink()) . '"><div class="pl_noimg cmsmasters_theme_icon_person"></div></a></div>' . "\n";
	}
	
	
	echo '<div class="pl_content">' . "\n" . 
		'<h3 class="entry-title">' . "\n" . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . "\n" . 
		'</h3>' . "\n";
	
	
	if ($cmsmasters_profile_subtitle != '') {
		echo '<h5 class="pl_subtitle">' . esc_html($cmsmasters_profile_subtitle) . '</h5>' . "\n";
	}
	
	
	if ($cmsmasters_profile_social != '') {
		echo '<div class="pl_social">' . "\n" . 
			'<ul class="pl_social_list">' . "\n";
		
		
		foreach ($cmsmasters_profile_social as $social_icons) {
			$social_icon = explode('|', str_replace(' ', '', $social_icons));
			
			
			echo '<li>' . "\n\t" . 
				'<a href="' . esc_url($social_icon[1]) . '" class="' . $social_icon[0] . '" title="' . esc_attr($social_icon[2]) . '"' . (($social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
			'</li>' . "\n";
		}
		
		
		echo '</ul>' . "\n" . 
		'</div>' . "\n";
	}
	
	
	echo '<div class="entry-content">' . "\n" . 
		cmsmasters_profile_exc_cont_small() . 
	'</div>' . "\n";
	?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Horizontal Profile _________________________ -->

