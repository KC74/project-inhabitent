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
