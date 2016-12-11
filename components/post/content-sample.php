<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-sample post-sample-column'); // large-4 columns ?> >
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="post-thumbnail">

		<?php get_template_part( 'components/post/content', 'category' ); ?>



			<?php 
				$access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
			?>
			<a href="<?php the_permalink(); ?>" title="<?php echo $access_title; ?>" tabindex="-1">
				<?php the_post_thumbnail( 'web_layouts-thumbnail' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				} 
			?>
		</header>
		<?php 
			the_excerpt();
		?>
		<footer class="entry-footer">
			<ul class="list-unstyled list-inline">
				<li style="margin-right: 10px;">
					<?php get_template_part( 'components/post/content', 'date' ); ?>
				</li>
				<li>
					<i class="fa fa-eye" aria-hidden="true"></i>
					<?php 
						//Reusing function "popular Posts (by Webline)"
						if ( function_exists( 'wli_popular_posts_get_post_views' ) ) :
							$post_views = wli_popular_posts_get_post_views(get_the_ID());
							echo $post_views;
						endif;
					?> 
				</li>
			</ul> 
		</footer>
	</div> 
</article><!-- #post-## -->