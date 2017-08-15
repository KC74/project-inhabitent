<?php
/**
 * Template Name: Single Product Page
 *
 * @package Inhabitent_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'template-parts/product', 'single' ); ?>

			<?php endwhile; // End of the loop. ?>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
