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
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <!-- <div class="entry-header__container"> -->
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header><!-- .entry-header -->
</article><!-- #post-## -->