<?php 
	/** 
	 * Register the html5 figure-non-responsive code fix. 
	 * (Replace "width" by "max-width" in the <figure> tag)
	*/
	add_filter( 'img_caption_shortcode', 'web_layouts_img_caption_shortcode_filter', 10, 3 );
	function web_layouts_img_caption_shortcode_filter($dummy, $attr, $content) {
	$atts = shortcode_atts( array(
	    'id'      => '',
	    'align'   => 'alignnone',
	    'width'   => '',
	    'caption' => '',
	    'class'   => '',
	), $attr, 'caption' );

	$atts['width'] = (int) $atts['width'];
	if ( $atts['width'] < 1 || empty( $atts['caption'] ) )
	    return $content;

	if ( ! empty( $atts['id'] ) )
	    $atts['id'] = 'id="' . esc_attr( $atts['id'] ) . '" ';

	$class = trim( 'wp-caption ' . $atts['align'] . ' ' . $atts['class'] );

	if ( current_theme_supports( 'html5', 'caption' ) ) {
	    return '<figure ' . $atts['id'] . 'style="max-width: ' . (int) $atts['width'] . 'px;" class="' . esc_attr( $class ) . '">'
	    . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $atts['caption'] . '</figcaption></figure>';
	}

	// Return nothing to allow for default behaviour!!!
	return '';
	}
?>