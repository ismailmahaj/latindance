<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Standard Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = dance_studio_get_global_options();

$cmsmasters_project_project_options = get_post_meta(get_the_ID(), 'cmsmasters_project_project_options', true);

if ($cmsmasters_project_project_options == 'custom') {
	$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

	$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);
} else {
	$cmsmasters_project_title = $cmsmasters_option['dance-studio' . '_portfolio_project_title'] ? 'true' : 'false';
	
	$cmsmasters_project_sharing_box = $cmsmasters_option['dance-studio' . '_portfolio_project_share_box'] ? 'true' : 'false';
}

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$project_details = '';

if (
	$cmsmasters_option['dance-studio' . '_portfolio_project_like'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_date'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_cat'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_comment'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_author'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_tag'] || 
	$cmsmasters_option['dance-studio' . '_portfolio_project_link'] || 
	(
		!empty($cmsmasters_project_features[0][0]) && 
		!empty($cmsmasters_project_features[0][1])
	) || (
		!empty($cmsmasters_project_features[1][0]) && 
		!empty($cmsmasters_project_features[1][1])
	)
) {
	$project_details = 'true';
}


$project_sidebar = '';

if (
	$project_details == 'true' || 
	(
		!empty($cmsmasters_project_features_one[0][0]) && 
		!empty($cmsmasters_project_features_one[0][1])
	) || (
		!empty($cmsmasters_project_features_one[1][0]) && 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[0][0]) && 
		!empty($cmsmasters_project_features_two[0][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) && 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[0][0]) && 
		!empty($cmsmasters_project_features_three[0][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) && 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}


$uniqid = uniqid();

?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	if ($cmsmasters_project_title == 'true') {
		echo '<header class="cmsmasters_project_header entry-header">';
			dance_studio_project_title_nolink(get_the_ID(), 'h1');
		echo '</header>';
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		if (!post_password_required()) {
			if (sizeof($cmsmasters_project_images) > 1) {
		?>
				<script type="text/javascript">
					jQuery(document).ready(function () {
						jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
							singleItem : 		true, 
							transitionStyle : 	false, 
							rewindNav : 		true, 
							slideSpeed : 		200, 
							paginationSpeed : 	800, 
							rewindSpeed : 		1000, 
							autoPlay : 			false, 
							stopOnHover : 		false, 
							pagination : 		true, 
							navigation : 		true, 
							autoHeight : 		true, 
							navigationText : 	[ 
								'<span class=\"cmsmasters_prev_arrow\"><span></span></span>',
								'<span class=\"cmsmasters_next_arrow\"><span></span></span>' 
							] 
						} );
					} );
				</script>
				<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider">
				<?php 
					foreach ($cmsmasters_project_images as $cmsmasters_project_image) {
						$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_project_image, '|', true));
						
						
						echo '<div>' . 
							'<figure>' . 
								wp_get_attachment_image(strstr($cmsmasters_project_image, '|', true), 'cmsmasters-masonry-thumb', false, array( 
									'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
									'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</div>';
					}
				?>
				</div>
			<?php 
			} elseif (sizeof($cmsmasters_project_images) == 1 && $cmsmasters_project_images[0] != '') {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, $cmsmasters_project_images[0]);
			} elseif (has_post_thumbnail()) {
				dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
			}
		}
		
		
		echo '<div class="cmsmasters_project_content entry-content">' . "\n";
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'dance-studio') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => ' <span> ', 
				'link_after' => ' </span> ' 
			));
			
			
			echo '<div class="cl"></div>' . 
		'</div>' . 
	'</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				echo '<div class="project_details entry-meta">' . 
					'<h4 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h4>';
					
					
					cmsmasters_project_like('post');
					
					dance_studio_get_project_date('post');
					
					dance_studio_get_project_category(get_the_ID(), 'pj-categs', 'post');
					
					dance_studio_get_project_comments('post');
					
					dance_studio_get_project_author('post');
					
					dance_studio_get_project_tags(get_the_ID(), 'pj-tags', 'post');
					
					dance_studio_get_project_features('details', $cmsmasters_project_features, false, 'h4', true);
					
					dance_studio_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
					
				echo '</div>';
			}
			
			
			dance_studio_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h4', true);
			
			dance_studio_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h4', true);
			
			dance_studio_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h4', true);
			
			
			if ($cmsmasters_project_sharing_box == 'true') {
				dance_studio_sharing_box(esc_html__('Like this project?', 'dance-studio'), 'h4');
			}
			
		echo '</div>';
	}
?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

