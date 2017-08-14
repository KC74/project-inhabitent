<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
// function inhabitent_tax_product_type() {

//         $slug = 'product';
//         $name = 'Product Types';
//         $singular_name = 'Product Type';
    
//         $labels = array(
//             'name'                       => $name,
//             'singular_name'              => $singular_name,
//             'menu_name'                  => $name,
//             'all_items'                  => 'All ' . $name,
//             'parent_item'                => 'Parent ' . $singular_name,
//             'parent_item_colon'          => 'Parent ' . $singular_name . ':',
//             'new_item_name'              => 'New ' . $singular_name . ' Name',
//             'add_new_item'               => 'Add New ' . $singular_name,
//             'edit_item'                  => 'Edit ' . $singular_name,
//             'update_item'                => 'Update ' . $singular_name,
//             'view_item'                  => 'View ' . $singular_name,
//             'separate_items_with_commas' => 'Separate ' . $names . ' with commas',
//             'add_or_remove_items'        => 'Add or remove ' . $name,
//             'choose_from_most_used'      => 'Choose from the most used',
//             'popular_items'              => 'Popular ' . $name,
//             'search_items'               => 'Search ' . $name,
//             'not_found'                  => 'Not Found',
//             'no_terms'                   => 'No ' . $name,
//             'items_list'                 => $name . ' list',
//             'items_list_navigation'      => $name . ' list navigation',
//         );
//         $args = array(
//             'labels'                     => $labels,
//             'hierarchical'               => true,
//             'public'                     => true,
//             'show_ui'                    => true,
//             'show_admin_column'          => true,
//             'show_in_nav_menus'          => true,
//             'show_tagcloud'              => true,
//             'show_in_rest'               => true,
//         );
//         register_taxonomy( $slug, array( $slug ), $args );
    
//     }
//     add_action( 'init', 'inhabitent_tax_product_type', 0 );

// Register Custom Taxonomy
function inhabitent_tax_product_type() {
    
        $labels = array(
            'name'                       => 'Product Types',
            'singular_name'              => 'Product Type',
            'menu_name'                  => 'Product Types',
            'all_items'                  => 'All Product Types',
            'parent_item'                => 'Parent Product Type',
            'parent_item_colon'          => 'Parent Product Type:',
            'new_item_name'              => 'New Product Type Name',
            'add_new_item'               => 'Add New Product Type',
            'edit_item'                  => 'Edit Product Type',
            'update_item'                => 'Update Product Type',
            'view_item'                  => 'View Product Type',
            'separate_items_with_commas' => 'Separate Product Types with commas',
            'add_or_remove_items'        => 'Add or remove Product Types',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'Popular Product Types',
            'search_items'               => 'Search Product Types',
            'not_found'                  => 'Not Found',
            'no_terms'                   => 'No Product Types',
            'items_list'                 => 'Product Types list',
            'items_list_navigation'      => 'Product Types list navigation',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'product', array( 'product' ), $args );
    
    }
    add_action( 'init', 'inhabitent_tax_product_type', 0 );