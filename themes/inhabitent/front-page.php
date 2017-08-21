<?php
/**
 * The template for blog post index page and fall back for site front page.
 *
 * @package Inhabitent_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="front-page-hero">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-full.svg"/>
            </section>
            <div class="product-shop container">
                <h2>Shop Stuff</h2>
                <div class="product-shop-stuff">
                    <?php 
                        $args = array( 'post_type' => 'product-type' );
                        $terms = get_terms( $args );
                    ?>

                    <?php foreach ($terms as $term): ; ?>
                        <div class="product-block-item">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/inhabitent/assets/images/product-type-icons/<?echo $term->slug?>.svg"/>
                            <p><? echo $term->description; ?></p>
                            <div class="entry-readmore link-button__color-green">
                                <a href="<?php echo get_site_url(); ?>/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"> <?php echo $term->name; ?> Stuff</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- START OF RECENT JOURNAL POSTS -->
            <div class="recent-journals container">
                <h2>Inhabitent Journal</h2>
                <div class="most-recent-journals">
                    <?php /* Start the Loop */ ?>
                        <?php
                            $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
                            $journal_posts = get_posts( $args ); // returns an array of posts
                        ?>
                        <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                            <div class="journal-recent-block-item">
                                <div class="journal-thumbnail-wrapper">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large' ); ?></a>
                                    <?php endif; ?><!-- has_post_thumbnail -->         
                                </div><!-- .journal-thumbnail-wrapper -->
                                <div class="entry-wrapper">
                                    <div class="entry-meta">
                                        <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
                                    </div><!-- .entry-meta -->
                                    
                                    <h3><a class="journal-title" href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
                                    
                                </div><!-- .entry-wrapper -->
                                <div class="entry-readmore link-button">
                                    <a href="<?echo get_post_permalink()?>">Read Entry</a>
                                </div><!-- .entry-readmore -->
                            </div><!-- .journal-recent-block-item -->

                        <?php endforeach; wp_reset_postdata(); ?>
                </div><!-- .most-recent-journals -->
            </div><!-- .container -->


        </main><!-- #main -->
    </div><!-- #primary -->
    
<?php get_footer(); ?>
