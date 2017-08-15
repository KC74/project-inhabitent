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
          <a href="<? echo get_post_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        <?php endif; ?>
        <!-- <div class="entry-header__container"> -->
        <?php the_title(); echo CFS()->get( 'product_price' );?>
    </header><!-- .entry-header -->
</article><!-- #post-## -->