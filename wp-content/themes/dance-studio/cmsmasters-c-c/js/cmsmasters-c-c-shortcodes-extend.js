/**
 * @package 	WordPress
 * @subpackage 	Dance Studio
 * @version		1.0.8
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */



/**
 * Heading Extend
 */

var heading_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_heading.fields) {
	if (id === 'font_weight') {
		heading_new_fields['tablet_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.heading_tablet_check, 
			descr : 	'', 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			} 
		};
		heading_new_fields['tablet_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_font_size, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		heading_new_fields['tablet_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_line_height, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_heading.fields = heading_new_fields;



/**
 * Posts Slider
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') { // Delete Field
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') { // Delete Field Attribute
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];  
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'blog_metadata') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'];  
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
	else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;


/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'layout_mode') {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = quotes_new_fields;



/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'metadata_grid') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;



/**
 * Theme Shortcodes
 */
 
var cmsmastersShortcodes_new_shortcode = {};


for (var id in cmsmastersShortcodes) {
	if (id === 'cmsmasters_notice') {
		/* Menu */
		cmsmastersShortcodes_new_shortcode['instagram-feed'] = { 
			title : 	composer_shortcodes_extend.instagram_feed_title, 
			icon : 		'admin-icon-image', 
			pair : 		false, 
			content : 	false, 
			visual : 	false, 
			multiple : 	false, 
			def : 		'',  
			fields : { 
				// id
				id : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.id_instagram_feed_title, 
					descr : 	composer_shortcodes_extend.id_instagram_feed_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	} else {
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	}
}


cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;



/**
 * Timetable Extend
 */

if (cmsmasters_composer_timetable() === 'true') {
	var timetable_new_fields = {};


	for (var id in cmsmastersShortcodes.cmsmasters_timetable.fields) {
		if (id === 'box_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hover_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hover_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hours_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hours_hover_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_hover_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row1_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row1_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row2_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row2_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else {
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		}
	}


	cmsmastersShortcodes.cmsmasters_timetable.fields = timetable_new_fields;
}
