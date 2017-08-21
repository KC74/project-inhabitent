<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
		<div class="social-buttons">
			<button type="social-btn"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
			<button type="social-btn"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
			<button type="social-btn"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
