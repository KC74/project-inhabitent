<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


/**
 * Change the default Wordpress logo to Inhabitents
 *
 * @return void
 */
function inhabitent_header_logo()
{
    echo '
		<style>                                                                   
			#login h1 a { 
				background: url('.get_stylesheet_directory_uri() .'/assets/images/logos/inhabitent-logo-text-dark.svg) !important;
				background-repeat: no-repeat; !important;
				background-size: 300px 53px !important;
				width: 300px !important;
				height: 53px !important;
			}                           
		</style>';
}
add_action('login_head', 'inhabitent_header_logo');

/**
 * Change the default logo url to home page instead
 */
function inhabitent_the_url()
{
    return get_home_url();
}
add_filter( 'login_headerurl', 'inhabitent_the_url' );

/**
 * Change login title
 */
function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title');

/**
 * Make hero image customizable through CFS field or featured image.
 */
function inhabitent_dynamic_css() {
	if ( ! is_page_template( 'page-templates/about.php' ) ) {
		return;
	}
	
	$image = CFS()->get( 'about_header_image' );
	if ( ! $image ) {
		return;
	}
	$hero_css = ".page-template-about .entry-header {
		background:
			linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
			url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		width: 100%;
		height: 100vh;
	}";
	wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

/**
 * Function that limits the amount of posts per page in the archives
 *
 * @param [type] $query
 * @return void
 */
function inhabitent_limit_archive_posts($query){
	if ($query->is_archive) {
		$query->set('posts_per_page', 20);
    }
    return $query;
}
add_filter('pre_get_posts', 'inhabitent_limit_archive_posts');


/**
 * Shop Stuff
 */
add_filter( 'get_the_archive_title', function ( $title ) {
	
		return $title = 'Shop Stuff';
	
});

/**
 * Filter the except length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function inhabitent_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'inhabitent_custom_excerpt_length', 999 );

