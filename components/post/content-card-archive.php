<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card card--row large-12 columns'); ?> >
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="card__thumbnail card--row__thumbnail">
			<?php 
				$access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
			?>
			<a href="<?php the_permalink(); ?>" title="<?php echo $access_title; ?>">
				<?php the_post_thumbnail( 'web_layouts-thumbnail' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<article class="card--row__data-content"> 
		<div class="card__content card--row__content entry-content"> 
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="card__title card--row__title entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="card__title card--row__title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				} 
			?> 
			<?php 
				the_excerpt();
			?>
		</div>
		<footer class="card__footer card--row__footer entry-footer">
			<?php if ( 'post' === get_post_type() ) : ?>
			<?php get_template_part( 'components/post/content', 'meta' ); ?>
			<?php
			endif; ?>
			<?php get_template_part( 'components/post/content', 'footer' ); ?>
		</footer> 
	</article>
</article><!-- #post-## -->