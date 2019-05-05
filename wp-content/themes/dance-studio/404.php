<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.0.7
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = dance_studio_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('404', 'dance-studio'); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
	<div class="error">
		<?php 
			echo '<h2 class="error_subtitle">' . esc_html__("We're sorry, but the page you were looking for doesn't exist.", 'dance-studio') . '</h2>';
			
			
			if ($cmsmasters_option['dance-studio' . '_error_search']) { 
				get_search_form(); 
			}
			
			
			if ($cmsmasters_option['dance-studio' . '_error_sitemap_button'] && $cmsmasters_option['dance-studio' . '_error_sitemap_link'] != '') {
				echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['dance-studio' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'dance-studio') . '</a></div>';
			}
		?>
	</div>
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

