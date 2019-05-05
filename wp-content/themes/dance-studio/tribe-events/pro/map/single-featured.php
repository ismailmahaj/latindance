<?php
/**
 * Map View Single Featured Event
 * This file contains one featured event in the map
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/map/single-featured.php
 *
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.1.7
 *
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();


?>

<div class="cmsmasters_events_list_event_wrap">
	<div class="cmsmasters_event_date">
		<div class="cmsmasters_event_day_month"><?php echo tribe_get_start_date(null, false, 'd F'); ?></div>
		<div class="cmsmasters_event_year"><?php echo tribe_get_start_date(null, false, 'Y'); ?></div>
	</div>
	
	<div class="cmsmasters_events_list_event_header">
		<!-- Event Image -->
		<?php echo tribe_event_featured_image( null, 'cmsmasters-square-thumb' ) ?>
		<div class="cmsmasters_events_list_event_header_content">
			<!-- Event Title -->
			<?php do_action( 'tribe_events_before_the_event_title' ) ?>
			<div class="cmsmasters_events_list_event_featured"><span>Featured</span></div>
			<h2 class="tribe-events-list-event-title entry-title summary">
				<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
					<?php the_title() ?>
				</a>
			</h2>
			<?php do_action( 'tribe_events_after_the_event_title' ) ?>
			
			<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<div class="tribe-events-venue-details">
				<?php echo implode( ', ', $venue_details) ; ?>
			</div> <!-- .tribe-events-venue-details -->
			<?php endif; ?>
		</div>
	</div>
	
	
	<!-- Event Meta -->
	<?php do_action( 'tribe_events_before_the_meta' ) ?>
	<div class="tribe-events-event-meta vcard">
		<!-- Schedule & Recurrence Details -->
		<div class="updated published time-details">
			<div class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'l'); ?></div>
			<div class="cmsmasters_event_time"><?php echo tribe_get_start_time(); ?> - <?php echo tribe_get_end_time(); ?></div>
		</div>
	</div><!-- .tribe-events-event-meta -->
	<?php do_action( 'tribe_events_after_the_meta' ) ?>

	<!-- Event Cost -->
	<?php if ( tribe_get_cost() != 0 ) : ?> 
		<div class="tribe-events-event-cost">
			<div class="tribe-events-event-cost-inner"><?php echo tribe_get_cost( null, true ); ?></div>
			<div class="tribe-events-event-cost-descr"><?php echo esc_html__('One Ticket', 'dance-studio'); ?></div>
		</div>
	<?php elseif ( tribe_get_cost() == '' ) : ?>
	<?php else: ?>
		<div class="tribe-events-event-cost">
			<div class="tribe-events-event-cost-inner"><?php echo esc_html__('Free', 'dance-studio'); ?></div>
			<div class="tribe-events-event-cost-descr"><?php echo esc_html__('For All', 'dance-studio'); ?></div>
		</div>
	<?php endif; ?>	
	
	<!-- Event Content -->
	<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
		<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><span><?php esc_html_e( 'Read More', 'dance-studio' ) ?></span></a>
	</div><!-- .tribe-events-list-event-description -->
	<?php do_action( 'tribe_events_after_the_content' ) ?>
</div>