<?php
/**
 * The template for blog post index page and fall back for site front page.
 *
 * @package Inhabitent_Starter_Theme
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
		
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <div class="most-recent-journals">
                <?php /* Start the Loop */ ?>
                    <?php
                        $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
                        $product_posts = get_posts( $args ); // returns an array of posts
                    ?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                        <div class="journal-recent-block-item">
                            <div class="journal-thumbnail-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<? echo get_post_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                                <?php endif; ?>    
                            </div>
                            <div class="entry-meta">
                                <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
                            </div><!-- .entry-meta -->
                            <?php the_title(); ?>
                        </div><!-- .journal-recent-block-item -->
                            

                <?php endforeach; wp_reset_postdata(); ?>
            </div><!-- .most-recent-journals -->


        </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
