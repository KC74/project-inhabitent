<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function inhabitent_cpt_product() {

        $slug = 'product';
        $name = 'Products';
        $singular_name = 'Product';
        $menu_position = 5;
        $description = 'Custom product post type';
        $menu_icon = 'dashicons-cart';
    
        $labels = array(
            'name'                  => $name,
            'singular_name'         => $singular_name,
            'menu_name'             => $name,
            'name_admin_bar'        => $singular_name,
            'archives'              => 'Product Archives',
            'attributes'            => 'Product Attributes',
            'parent_item_colon'     => 'Parent ' . $singular_name .':',
            'all_items'             => 'All ' . $name,
            'add_new_item'          => 'Add New ' . $singular_name,
            'add_new'               => 'Add New',
            'new_item'              => 'New ' . $singular_name,
            'edit_item'             => 'Edit ' . $singular_name,
            'update_item'           => 'Update ' . $singular_name,
            'view_item'             => 'View ' . $singular_name,
            'view_items'            => 'View'. $name,
            'search_items'          => 'Search ' . $singular_name,
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into ' . $singular_name,
            'uploaded_to_this_item' => 'Uploaded to this ' . $singular_name,
            'items_list'            => $name . 'list',
            'items_list_navigation' => $name . 'list navigation',
            'filter_items_list'     => 'Filter ' . $name . ' list',
        );
        $args = array(
            'label'                 => $name,
            'description'           => 'Custom ' . $slug . ' post type',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => $menu_position,
            'menu_icon'             => $menu_icon,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
        );
        register_post_type( $slug, $args );

        // CLEAR PERMALINKS
        flush_rewrite_rules();
    
    }
    add_action( 'init', 'inhabitent_cpt_product', 0 );