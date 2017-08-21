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
        <div class="entry-content entry-content__p-product">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class="product-price"><?php echo CFS()->get( 'product_price' ); ?></p>
            <?php the_content(); ?>
            <div class="social-buttons">
                <button type="social-btn"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
                <button type="social-btn"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
                <button type="social-btn"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
            </div>
        </div><!-- .entry-content -->
    </div><!-- .product-wrapper -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
