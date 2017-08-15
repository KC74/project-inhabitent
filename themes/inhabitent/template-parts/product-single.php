<?php
/**
 * Template part for displaying single product posts.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="product-wrapper">
        <div class="product-picture">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>

        </div><!-- .product-picture -->
        <div class="entry-content">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p><?php echo CFS()->get( 'product_price' ); ?></p>
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </div><!-- .product-wrapper -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
