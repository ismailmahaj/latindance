<?php 
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version 	1.0.0
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="alignleft">
				<?php echo get_avatar($comment->comment_author_email, 80, get_option('avatar_default')) . "\n"; 
				edit_comment_link(esc_attr__('Edit', 'dance-studio'), '', '');?>
			</div>
			<div class="comment-content">
				<?php 
				comment_reply_link(array_merge($args, array( 
					'depth' => $depth, 
					'max_depth' => $args['max_depth'], 
					'reply_text' => esc_attr__('Reply', 'dance-studio') 
				)));
				
				

				
				echo '<abbr class="published" title="' . get_comment_time('F d, Y') . '">' . 
					get_comment_time('F d, Y') .  
				'</abbr>';
				?>
				<h6 class="fn"><?php echo get_comment_author_link(); ?></h6>
				<div class="cl"></div>
				<?php 
					comment_text();
					
					if ($comment->comment_approved == '0') {
						echo '<p>' . 
							'<em>' . esc_html__('Your comment is awaiting moderation.', 'dance-studio') . '</em>' . 
						'</p>';
					}
				?>
			</div>
			<div class="cl"></div>
        </div>
    <?php 
}

