<?php
/**
 * Single Event Template for Widgets
 *
 * This template is used to render single events for both the calendar and advanced
 * list widgets, facilitating a common appearance for each as standard.
 *
 * You can override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/widgets/modules/single-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.2.0
 *
 */

$mini_cal_event_atts = tribe_events_get_widget_event_atts();

$postDate = tribe_events_get_widget_event_post_date();

$organizer_ids = tribe_get_organizer_ids();
$multiple_organizers = count( $organizer_ids ) > 1;
?>
<div class="tribe-mini-calendar-event event-<?php echo esc_attr($mini_cal_event_atts['current_post']); ?> <?php echo esc_attr( $mini_cal_event_atts['class']); ?>">
	<div class="tribe-events-list-widget-content-wrap">
		<div class="cmsmasters_event_date">
			<div class="cmsmasters_event_day_month"><?php echo tribe_get_start_date(null, false, 'd F'); ?></div>
			<div class="cmsmasters_event_year"><?php echo tribe_get_start_date(null, false, 'Y'); ?></div>
		</div>
		<div class="cmsmasters_events_list_event_header">
		
			<?php echo tribe_event_featured_image( null, 'cmsmasters-square-thumb' ) ?>
			
			<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
			<div class="cmsmasters_events_list_event_header_content">
				<div class="cmsmasters_events_list_event_featured"><span>Featured</span></div>
				<h3 class="entry-title summary">
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h3>

				<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>

				<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>
				
				<div class="vcard adr location cmsmasters_widget_event_venue_info_loc">
				<?php 
					if ( 
						( isset( $venue ) && $venue && tribe_get_venue() != '' ) || 
						( isset( $address ) && $address && tribe_get_address() != '' ) || 
						( isset( $city ) && $city && tribe_get_city() != '' ) || 
						( isset( $region ) && $region && tribe_get_region() != '' ) || 
						( isset( $zip ) && $zip && tribe_get_zip() != '' ) || 
						( isset( $country ) && $country && tribe_get_country() != '' ) 
					) {
				?>
					<div class="cmsmasters_widget_event_venue_info">
						<?php if ( isset( $venue ) && $venue && tribe_get_venue() != '' ) : ?>
							<span class="tribe-events-venue"><?php echo tribe_get_venue_link(); ?></span>
						<?php endif ?>

						<?php if ( isset( $address ) && $address && tribe_get_address() != '' ) : ?>
							<span class="tribe-street-address"><?php echo tribe_get_address(); ?></span>
						<?php endif ?>

						<?php if ( isset( $city ) && $city && tribe_get_city() != '' ) : ?>
							<span class="tribe-events-locality"><?php echo tribe_get_city(); ?></span>
						<?php endif ?>

						<?php if ( isset( $region ) && $region && tribe_get_region() != '' ) : ?>
							<span class="tribe-events-region"><?php echo tribe_get_region(); ?></span>
						<?php	endif ?>

						<?php if ( isset( $zip ) && $zip && tribe_get_zip() != '' ) : ?>
							<span class="tribe-events-postal-code"><?php echo tribe_get_zip(); ?></span>
						<?php endif ?>

						<?php if ( isset( $country ) && $country && tribe_get_country() != '' ) : ?>
							<span class="tribe-country-name"><?php echo tribe_get_country(); ?></span>
						<?php endif ?>
					</div>
				<?php } ?>
				
				<?php 
					if ( 
						( isset( $organizer ) && $organizer && ! empty( $organizer_ids ) ) ||  
						( isset( $phone ) && $phone && tribe_get_phone() != '' ) 
					) {
				?>
					<div class="cmsmasters_widget_event_venue_loc">
						<?php if ( isset( $organizer ) && $organizer && ! empty( $organizer_ids ) ): ?>
							<span class="tribe-events-organizer">
								<?php 
								$organizer_links = array();
								foreach ( $organizer_ids as $organizer_id ) {
									if ( ! $organizer_id ) {
										continue;
									}

									$organizer_links[] = tribe_get_organizer_link( $organizer_id, true );
								}// end foreach

								$and = _x( 'and', 'list separator for final two elements', 'dance-studio' );
								if ( 1 == count( $organizer_links ) ) {
									echo dance_studio_return_content($organizer_links[0]);
								}// end if
								elseif ( 2 == count( $organizer_links ) ) {
									echo dance_studio_return_content($organizer_links[0] . ' ' . esc_html( $and ) . ' ' . $organizer_links[1]);
								}// end elseif
								else {
									$last_organizer = array_pop( $organizer_links );

									echo implode( ', ', $organizer_links );
									echo esc_html( ', ' . $and . ' ' );
									echo dance_studio_return_content($last_organizer);
								}// end else
								?>
							</span>

						<?php endif ?>

						<?php if ( isset( $phone ) && $phone && tribe_get_phone() != '' ) { ?>
							<span class="tribe-events-tel"><?php echo tribe_get_phone(); ?></span>
						<?php } ?>
					</div>
				<?php } ?>
				</div>
			</div>	
		</div>
		<div class="cmsmasters_widget_event_info">
			<div class="duration">
				<div class="updated published time-details">
					<div class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'l'); ?></div>
					<div class="cmsmasters_event_time"><?php echo tribe_get_start_time(); ?> - <?php echo tribe_get_end_time(); ?></div>
				</div>
			</div>
		</div>
		
		<?php if ( isset( $cost ) && $cost && tribe_get_cost() != '' ) { ?>
			<div class="tribe-events-event-cost">
				<div class="tribe-events-event-cost-inner"><?php echo tribe_get_cost( null, true ); ?></div>
				<div class="tribe-events-event-cost-descr"><?php echo esc_html__('One Ticket', 'dance-studio'); ?></div>
			</div>
		<?php } else if (tribe_get_cost() == '' ) { ?>
		<?php } else { ?>
			<div class="tribe-events-event-cost">
				<div class="tribe-events-event-cost-inner"><?php echo esc_html__('Free', 'dance-studio'); ?></div>
				<div class="tribe-events-event-cost-descr"><?php echo esc_html__('For All', 'dance-studio'); ?></div>
			</div>
		<?php } ?>
		
		<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><span><?php esc_html_e( 'Read More', 'dance-studio' ) ?></span></a>
		</div>
		<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
	</div>
</div>

