<?php
/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.2.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */



if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'dance-studio') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h4>';
		
		
		comments_number(esc_attr__('No Comments', 'dance-studio'), esc_attr__('Comment', 'dance-studio') . ' (1)', esc_attr__('Comments', 'dance-studio') . ' (%)');
		
		
		echo '</h4>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'dance-studio'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'dance-studio') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'dance-studio'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'dance-studio') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="45"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
			'<label for="author" class="under_form">' . esc_html__('Name', 'dance-studio') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="45"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
			'<label for="email" class="under_form">' . esc_html__('Email', 'dance-studio') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . "\n" . 
		'</p>' . "\n", 
		'cookies' => '<p class="comment-form-cookies-consent">' . "\n" . 
			'<input type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes"' . (empty($commenter['comment_author_email']) ? '' : ' checked="checked"') . ' />' . "\n" . 
			'<label for="wp-comment-cookies-consent">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'dance-studio') . '</label>' . "\n" . 
		'</p>' . "\n" 
	);
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' .  
									'<textarea name="comment" id="comment" cols="60" rows="4"></textarea>' . 
									'<label for="comment" class="under_form">' . esc_html__('Message', 'dance-studio') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . "\n" .
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'dance-studio') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'dance-studio') . 
									'</a> ' 
									. esc_html__('to post a comment', 'dance-studio') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'dance-studio') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'dance-studio') . '">' . 
										esc_html__('Log out?', 'dance-studio') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'',
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply','dance-studio'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'dance-studio'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'dance-studio'), 
		'label_submit' => 			esc_attr__('Send Message', 'dance-studio') 
	));
}

