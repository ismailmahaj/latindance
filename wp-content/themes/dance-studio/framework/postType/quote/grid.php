<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.7
 * 
 * Quotes Grid Format Template
 * Created by CMSMasters
 * 
 */


?>

<!--_________________________ Start Grid Article _________________________ -->

<article class="cmsmasters_quote_inner">
	<div class="quote_content_wrap">
	<?php
		echo cmsmasters_divpdel('<div class="quote_content">' . "\n" . 
			do_shortcode(wpautop($quote_content)) . 
		'</div>' . "\n");
		
		echo '<div class="quote_info_wrap">';
		
			
			
		
			echo '<div class="wrap_quote_title">';
			
				if ($quote_name != '') {
					echo '<h6 class="quote_title">' . esc_html($quote_name) . '</h6>' . "\n";
				}
				
				
				if ($quote_subtitle != '') {
					echo '<span class="quote_subtitle">' . esc_html($quote_subtitle) . '</span>' . "\n";
				}
				
				
				if ($quote_subtitle != '' && ($quote_link != '' || $quote_website != '')) {
					echo ' - ';
				}
			
			
			
				if ($quote_link != '' && $quote_website != '') {
					echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_website) . '</a>' . "\n";
				} elseif ($quote_link == '' && $quote_website != '') {
					echo '<span class="quote_site">' . esc_html($quote_website) . '</span>' . "\n";
				} elseif ($quote_link != '' && $quote_website == '') {
					echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_link) . '</a>' . "\n";
				}
			
			echo '</div>';
		
			if ($quote_image != '') {
				echo '<figure class="quote_image">' . "\n" . 
					wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-small-thumb') . 
				'</figure>' . "\n";
			}
				
		echo '</div>';	
	?>
	</div>
</article>
<!--_________________________ Finish Grid Article _________________________ -->

