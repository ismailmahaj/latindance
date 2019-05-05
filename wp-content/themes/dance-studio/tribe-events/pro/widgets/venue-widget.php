<?php
/**
 * Events Pro Venue Widget
 * This is the template for the output of the venue widget. 
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/widgets/venue-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	Dance Studio
 * @cmsmasters_version 	1.2.0
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();

?>

<div class="tribe-venue-widget-wrapper">
	<div class="tribe-venue-widget-venue">
		<?php if (has_post_thumbnail($venue_ID)) { ?>
			<div class="tribe-venue-widget-thumbnail">
				<?php echo get_the_post_thumbnail($venue_ID, 'cmsmasters-event-thumb' ); ?>
			</div>
		<?php } ?>
		<div class="tribe-venue-widget-venue-name cmsmasters_theme_icon_user_address">
			<?php echo tribe_get_venue_link($venue_ID); ?>
		</div>
		<div class="tribe-venue-widget-address">
			<?php echo tribe_get_full_address( $venue_ID, true ) ?>
		</div>
	</div>

	<?php if ( 0 === $events->post_count ): ?>
		<?php printf( esc_html__( 'No upcoming %s.', 'dance-studio' ),  strtolower( $events_label_plural ) ); ?>
	<?php else: ?>
	<?php do_action( 'tribe_events_venue_widget_before_the_list' ); ?>
	<ul class="tribe-venue-widget-list hfeed vcalendar">
		<?php while ( $events->have_posts() ): ?>
			<?php $events->the_post(); ?>
			<li class="<?php tribe_events_event_classes() ?>">
				<h5 class="entry-title summary">
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php echo get_the_title( get_the_ID() ) ?></a>
				</h5>
				<div class="cmsmasters_widget_event_info">
					<div class="cmsmasters_widget_event_info_date cmsmasters_theme_icon_time">
						<?php echo tribe_events_event_schedule_details() ?>
					</div>
					<div class="cmsmasters_widget_event_info_cost cmsmasters_theme_icon_money">
						<?php if ( tribe_get_cost( get_the_ID() ) != '' ): ?>
							<span class="tribe-events-event-cost">
								<?php echo tribe_get_cost( get_the_ID(), true ); ?>
							</span>
						<?php endif; ?>
					</div>
				</div>
			</li>
	<?php endwhile;	?>
	</ul>
	<?php do_action( 'tribe_events_venue_widget_after_the_list' ); ?>
	<?php endif; ?>
	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_venue_link( $venue_ID, false ) ); ?>"><?php printf( esc_html__( ' + %s more %s', 'dance-studio' ), $events_label_plural, tribe_get_venue_label_singular() ); ?></a>
	</p>
</div>
