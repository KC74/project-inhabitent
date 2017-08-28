<?php
/**
 * Template part for displaying single adventure post
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="adventure-wrapper">
        <div class="entry-content">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <span class="post-author">By <?php the_author(); ?></span>
            <p class="product-price"><?php echo CFS()->get( 'adventure_story' ); ?></p>
            <div class="social-buttons">
                <button type="social-btn"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
                <button type="social-btn"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
                <button type="social-btn"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
            </div>
        </div><!-- .entry-content -->
    </div><!-- .adventure-wrapper -->
	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
