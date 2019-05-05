<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @return string
 *
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.2.0
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();

$venue_details = tribe_get_venue_details();
$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="hfeed vcalendar">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			?>
			<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
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
			</li>
		<?php
		endforeach;
		?>
	</ol><!-- .hfeed -->

	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'View All %s', 'dance-studio' ), $events_label_plural ); ?></a>
	</p>

<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'dance-studio' ), strtolower( $events_label_plural ) ); ?></p>
<?php
endif;
