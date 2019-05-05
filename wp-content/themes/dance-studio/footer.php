<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.1.8
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = dance_studio_get_global_options();

?>


		</div>
	</div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
<?php 

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" role="contentinfo" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['dance-studio' . '_footer_scheme'] . ($cmsmasters_option['dance-studio' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small');
?>">
	<div class="footer_bg">
		<div class="footer_inner">
			<?php 
				dance_studio_footer_logo($cmsmasters_option);
				
				
				dance_studio_get_footer_custom_html($cmsmasters_option);
				
				
				dance_studio_get_footer_nav($cmsmasters_option);
				
				
				dance_studio_get_footer_social_icons($cmsmasters_option);
			?>
				<span class="footer_copyright copyright">
					<?php 
					if (function_exists('the_privacy_policy_link')) {
						the_privacy_policy_link('', ' / ');
					}
					
					echo esc_html(stripslashes($cmsmasters_option['dance-studio' . '_footer_copyright']));
					?>
				</span>
			<?php dance_studio_get_footer_custom_html_small($cmsmasters_option);	?>
		</div>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
