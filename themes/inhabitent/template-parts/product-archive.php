<?php
/**
 * Template part for displaying product archives.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="product-thumbnail-wrapper">
          <a href="<? echo get_post_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        </div>
        <?php endif; ?>
        <!-- <div class="entry-header__container"> -->
        <div class="product-info">
            <h2 class="product-title"><?php the_title(); ?></h2>
            <span class="product-price"><?php echo CFS()->get( 'product_price' ); ?></span>
            <span class="product-info-separator">...........................................................................................</span>
        </div>
    </header><!-- .entry-header -->
</article><!-- #post-## -->