<?php
/**
 * @package 	WordPress
 * @subpackage	Dance Studio
 * @version		1.2.0
 * 
 * Timetable Event Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = dance_studio_get_global_options();


$cmsmasters_tt_event_hours = get_post_meta(get_the_ID(), 'cmsmasters_tt_event_hours', true);
$cmsmasters_tt_event_hours_title = get_post_meta(get_the_ID(), 'cmsmasters_tt_event_hours_title', true);

$cmsmasters_tt_event_details_title = get_post_meta(get_the_ID(), 'cmsmasters_tt_event_details_title', true);
$cmsmasters_tt_event_details = get_post_meta(get_the_ID(), 'cmsmasters_tt_event_details', true);

$cmsmasters_tt_event_cat = $cmsmasters_option['dance-studio' . '_tt_event_cat'];

$cmsmasters_tt_subtitle = get_post_meta(get_the_ID(), 'timetable_subtitle', true);

?>
<!--_________________________ Start Content _________________________ -->

<div class="middle_content entry" role="main">
<?php 
if (have_posts()) : the_post();
	$event_hours_out = '';
	
	if ($cmsmasters_tt_event_hours == 'true') {
		global $wpdb;
		
		
		$query = $wpdb->prepare("SELECT * FROM {$wpdb->prefix}event_hours AS t1 LEFT JOIN {$wpdb->posts} AS t2 ON t1.weekday_id=t2.ID WHERE t1.event_id=%d ORDER BY t2.menu_order, t1.start, t1.end", get_the_ID());
		
		$event_hours = $wpdb->get_results($query);
		
		$event_hours_count = count($event_hours);
		
		
		if ($event_hours_count) {
			$weekdays_arr = array();
			
			$event_hours_out .= '<div class="cmsmasters_tt_event_hours">';
			
			
			if ($cmsmasters_tt_event_hours_title != '') {
				$event_hours_out .= '<h4 class="cmsmasters_tt_event_hours_title">' . esc_html($cmsmasters_tt_event_hours_title) . '</h4>';
			}
			
			
			for ($i = 0; $i < $event_hours_count; $i++) {
				$weekdays_arr[$event_hours[$i]->weekday_id][] = array(
					'start' => $event_hours[$i]->start, 
					'end' => $event_hours[$i]->end
				);
			}
			
			
			foreach ($weekdays_arr as $weekday_id => $weekday_hours) {
				$current_day = get_post($weekday_id);
				
				$event_hours_out .= '<div class="cmsmasters_tt_event_hours_item">' . 
					'<div class="cmsmasters_tt_event_hours_item_title">' . esc_html($current_day->post_title) . '</div>' . 
					'<div class="cmsmasters_tt_event_hours_item_values">';
						
						
						foreach ($weekday_hours as $weekday_hour) {
							$event_hours_out .= '<span class="cmsmasters_tt_event_hours_item_value">' . 
								esc_html(date('H:i', strtotime($weekday_hour['start']))) . 
								' - ' . 
								esc_html(date('H:i', strtotime($weekday_hour['end']))) . 
							'</span>';
						}
						
						
					$event_hours_out .= '</div>' . 
				'</div>';
			}
			
			
			$event_hours_out .= '</div>';
		}
	}
	
	
	$event_details = 'false';

	if (
		$cmsmasters_tt_event_cat || 
		(
			!empty($cmsmasters_tt_event_details[1][0]) && 
			!empty($cmsmasters_tt_event_details[1][1])
		)
	) {
		$event_details = 'true';
	}
	
	
	$event_sidebar = 'false';
	
	if (
		$event_hours_out != '' || 
		$event_details == 'true'
	) {
		$event_sidebar = 'true';
	}
	
?>
	<div class="cmsmasters_tt_single_event opened-article">
		<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_tt_event'); ?>>
			<?php 
			if ($cmsmasters_tt_subtitle != '') {
				echo '<header class="cmsmasters_tt_event_header entry-header">' . 
					'<h4 class="cmsmasters_tt_event_subtitle entry-title">' . esc_html($cmsmasters_tt_subtitle) . '</h4>' . 
				'</header>';
			}
			
			
			echo '<div class="cmsmasters_tt_event_content_wrap' . ($event_sidebar == 'true' ? ' with_sidebar' : '') . '">';
			
				if (has_post_thumbnail()) {
					dance_studio_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, false, true, true, false, true, false);
				}
				
				echo '<div class="cmsmasters_tt_event_content entry-content">';
					the_content();
					
					echo '<div class="cl"></div>' . 
				'</div>' . 
			'</div>';
			
			
			if ($event_sidebar == 'true') {
				echo '<div class="cmsmasters_tt_event_sidebar">';
				
					if ($event_hours_out != '') {
						echo dance_studio_return_content($event_hours_out);
					}
					
					
					if ($event_details == 'true') {
						echo '<div class="cmsmasters_tt_event_details">';
							
							
							if ($cmsmasters_tt_event_details_title != '') {
								echo '<h4 class="cmsmasters_tt_event_details_title">' . esc_html($cmsmasters_tt_event_details_title) . '</h4>';
							}
							
							
							if (
								!empty($cmsmasters_tt_event_details[1][0]) && 
								!empty($cmsmasters_tt_event_details[1][1])
							) {
								foreach ($cmsmasters_tt_event_details as $detail) {
									if ($detail[0] != '' && $detail[1] != '') {
										$detail_lists = explode("\n", $detail[1]);
										
										echo '<div class="cmsmasters_tt_event_details_item">' . 
											'<div class="cmsmasters_tt_event_details_item_title">' . esc_html($detail[0]) . '</div>' . 
											'<div class="cmsmasters_tt_event_details_item_desc">';
										
												foreach ($detail_lists as $detail_list) {
													echo esc_html(trim($detail_list));
												}
										
											echo '</div>' . 
										'</div>';
									}
								}
							}
							
							
							if ($cmsmasters_tt_event_cat && get_the_terms(get_the_ID(), 'events_category')) {
								echo '<div class="cmsmasters_tt_event_details_item">' . 
									'<div class="cmsmasters_tt_event_details_item_title">' . esc_html__('Categories', 'dance-studio') . '</div>' . 
									'<div class="cmsmasters_tt_event_details_item_desc">' . 
										'<span class="cmsmasters_tt_event_category">' . 
											get_the_term_list(get_the_ID(), 'events_category', '', ', ', '') . 
										'</span>' . 
									'</div>' . 
								'</div>';
							}
							
							
						echo '</div>';
					}
					
				echo '</div>';
			}
			?>
			<div class="cl"></div>
		</article>
	</div>
<?php
endif;
?>
</div>
<!-- _________________________ Finish Content _________________________ -->
<?php

get_footer();

