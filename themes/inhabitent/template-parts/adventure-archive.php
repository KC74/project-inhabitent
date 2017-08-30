<?php
/**
 * Template part for displaying adventures archives.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<div class="adventure-wrapper">
    <img src="<?php echo CFS()->get( 'adventure_header' ); ?>"/>
    <a href="<?php echo get_post_permalink() ?>">
        <h2 class="adventure-title"><?php the_title(); ?></h2>
        <div class="adventure-readmore link-button">Read More</div><!-- .entry-readmore -->
    </a>
</div>
