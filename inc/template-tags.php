<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Web_Layouts
 */

if ( ! function_exists( 'web_layouts_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function web_layouts_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>'; //<time class="updated" datetime="%3$s">%4$s</time>
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

			 
	$access_dateintro = esc_html__( 'Article posted on : '.esc_html( get_the_date() ), 'web_layouts' ); 
	$posted_on = sprintf(
		// esc_html_x( 'Posted on %s', 'post date', 'web_layouts' ),
		esc_html_x( '%s', 'post date', 'web_layouts' ), 
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'.$access_dateintro.'">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( '%s', 'post author', 'web_layouts' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	$info_author = '<span class="byline"><i class="fa fa-user" aria-hidden="true"></i> ' . $byline . '</span>';
	$info_date = '<span class="posted-on"><i class="fa fa-clock-o" aria-hidden="true"></i> ' . $posted_on . '</span>';


	echo $info_author.' '.$info_date; // WPCS: XSS OK.

 
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		$cat_comm = '<i class="fa fa-comments" aria-hidden="true"></i>';
		echo '<span class="comments-link">' .$cat_comm. ' ';
		comments_popup_link( esc_html__( 'Leave a comment', 'web_layouts' ), esc_html__( '1 Comment', 'web_layouts' ), esc_html__( '% Comments', 'web_layouts' ) );
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'web_layouts_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function web_layouts_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'web_layouts' ) );
		if ( $categories_list && web_layouts_categorized_blog() ) {
			$cat_icon = '<i class="fa fa-flag" aria-hidden="true"></i>';
			printf( '<span class="cat-links">'. $cat_icon .' ' . esc_html__( ' %1$s', 'web_layouts' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'web_layouts' ) );
		if ( $tags_list ) {
			$tag_icon = '<i class="fa fa-tags" aria-hidden="true"></i>';
			printf( '<span class="tags-links">' . $tag_icon . ' '.esc_html__( '%1$s', 'web_layouts' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	// if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	// 	$cat_comm = '<i class="fa fa-comments" aria-hidden="true"></i>';
	// 	echo '<span class="comments-link">' .$cat_comm. ' ';
	// 	comments_popup_link( esc_html__( 'Leave a comment', 'web_layouts' ), esc_html__( '1 Comment', 'web_layouts' ), esc_html__( '% Comments', 'web_layouts' ) );
	// 	echo '</span>';
	// }

	// echo '<h1>...' .comments_open().'</h1>';
	// echo '<h1>...' .get_comments_number().'</h1>';


	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'web_layouts' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;





/**
 * Prints HTML with meta information for "tags only".
 */
function web_layouts_entry_tags() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) { 
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'web_layouts' ) );
		if ( $tags_list ) {
			$tag_icon = '<i class="fa fa-tags" aria-hidden="true"></i>';
			printf( '<span class="tags-links">' . $tag_icon . ' '.esc_html__( '%1$s', 'web_layouts' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	} 
}

/**
 * Prints HTML with meta information for the current "post-date/time" only.
 */
function web_layouts_posted_date() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>'; //<time class="updated" datetime="%3$s">%4$s</time>
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
		 
	$access_dateintro = esc_html__( 'Article posted on : '.esc_html( get_the_date() ), 'web_layouts' ); 
	$posted_on = sprintf(
		// esc_html_x( 'Posted on %s', 'post date', 'web_layouts' ),
		esc_html_x( '%s', 'post date', 'web_layouts' ),  $time_string
		// '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'.$access_dateintro.'">' . $time_string . '</a>'
	);
	//<i class="fa fa-calendar" aria-hidden="true"></i>
	echo '<span class="posted-on"> ' . $posted_on . '</span>';
}





if ( ! function_exists( 'web_layouts_entry_category' ) ) :
/**
 * Prints HTML with meta information for categories only.
 */
function web_layouts_entry_category() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'web_layouts' ) );
		$categories_list = str_replace(' rel=', ' class="round alert label label-big text-uppercase" rel=', $categories_list);
		if ( $categories_list && web_layouts_categorized_blog() ) {  
			printf( '<span class="cat-links">'. esc_html__( '%1$s', 'web_layouts' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		} 
	}
 
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'web_layouts' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;





/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function web_layouts_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'web_layouts_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'web_layouts_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so web_layouts_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so web_layouts_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in web_layouts_categorized_blog.
 */
function web_layouts_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'web_layouts_categories' );
}
add_action( 'edit_category', 'web_layouts_category_transient_flusher' );
add_action( 'save_post',     'web_layouts_category_transient_flusher' );
