<?php
	/**
	 * Reference:
	 * ----------
	 * https://developer.wordpress.org/reference/functions/the_excerpt/
	 */



	/**
	 * Filter the except length to 20 characters.
	 *
	 * @param int $length Excerpt length.
	 * @return int (Maybe) modified excerpt length.
	 */
	function wpdocs_custom_excerpt_length( $length ) {
	    return 30;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



	/**
	 * Filter the excerpt "[...]" string.
	 *
	 * @param string $more "Read more" excerpt string.
	 * @return string (Maybe) modified "read more" excerpt string.
	 */
	function wpdocs_excerpt_more( $more ) {
		$title = esc_html__( 'Continue reading', 'web_layouts' );
		return ' <a href="'.get_the_permalink().'" rel="nofollow" title="'.$title.'">[...]</a>';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>