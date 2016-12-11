<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

?>
	<section class="post-meta entry-footer" role="complementary">
		<div class="pull-left">
			<?php get_template_part( 'components/post/content', 'date' ); ?>
		</div>
		<div class="pull-right">
			<?php get_template_part( 'components/post/content', 'tags' ); ?>
		</div>
	</section>



	<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
		<div class="entry-content">
			<?php

			// the_excerpt();
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'web_layouts' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'web_layouts' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</article><!-- #post-## -->