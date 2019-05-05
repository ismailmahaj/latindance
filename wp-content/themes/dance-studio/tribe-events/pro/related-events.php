<?php
/**
 * Related Events Template
 * The template for displaying related events on the single event page.
 *
 * You can recreate an ENTIRELY new related events view by doing a template override, and placing
 * a related-events.php file in a tribe-events/pro/ directory within your theme directory, which
 * will override the /views/related-events.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters
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

$posts = tribe_get_related_posts();

if ( is_array( $posts ) && ! empty( $posts ) ) : ?>

<h2 class="tribe-events-related-events-title"><?php printf( esc_html__( 'Related %s', 'dance-studio' ), tribe_get_event_label_plural() ); ?></h2>

<ul class="tribe-related-events tribe-clearfix hfeed vcalendar clearfix">
	<?php foreach ( $posts as $post ) : ?>
	<li>
		<div class="tribe-related-events-thumbnail">
			<a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="url" rel="bookmark">
			<?php echo (has_post_thumbnail($post->ID)) ? dance_studio_thumb_rollover($post->ID, 'cmsmasters-event-thumb', true, true, false, false, false, false, false, true) : '<span class="cmsmasters_events_img_placeholder cmsmasters_theme_icon_date"></span>';  ?></a>
		</div>
		<div class="tribe-related-event-info">
			<h3 class="tribe-related-events-title summary"><a href="<?php echo esc_url(tribe_get_event_link( $post )); ?>" class="url" rel="bookmark"><?php echo esc_html(get_the_title( $post->ID )); ?></a></h3>
			<?php if ( $post->post_type == Tribe__Events__Main::POSTTYPE ) { ?>
				<div class="tribe-related-events-meta cmsmasters_theme_icon_time">
					<?php
						if ( $post->post_type == Tribe__Events__Main::POSTTYPE ) {
							echo tribe_events_event_schedule_details( $post );
						}
					?>
				</div>
			<?php } ?>
		</div>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>