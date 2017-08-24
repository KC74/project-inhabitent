<?php
/**
 * Template Name: Single Adventure
 *
 * @package Inhabitent_Starter_Theme
 */
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'template-parts/adventure', 'single' ); ?>

			<?php endwhile; // End of the loop. ?>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
