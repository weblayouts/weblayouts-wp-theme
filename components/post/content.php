<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('medium-6 columns'); ?> >
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php 
				$access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
			?>
			<a href="<?php the_permalink(); ?>" title="<?php echo $access_title; ?>">
				<?php the_post_thumbnail( 'web_layouts-thumbnail' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			} 
		?>
	</header>
	<div class="entry-content">
		<?php

		the_excerpt();
			// the_content( sprintf(
			// 	/* translators: %s: Name of current post. */
			// 	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'web_layouts' ), array( 'span' => array( 'class' => array() ) ) ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'web_layouts' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div>
	<footer class="entry-footer">
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part( 'components/post/content', 'meta' ); ?>
		<?php
		endif; ?>
		<?php get_template_part( 'components/post/content', 'footer' ); ?>
	</footer>
</article><!-- #post-## -->