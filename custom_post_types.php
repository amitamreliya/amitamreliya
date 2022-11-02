<?php
if ( ! function_exists('pe_child_vactures') ) {

    // Register Custom Post Type
    function pe_child_vactures() {
    
        $labels = array(
            'name'                  => _x( 'Vactures', 'Post Type General Name', 'pe-maatwerk' ),
            'singular_name'         => _x( 'Vacture', 'Post Type Singular Name', 'pe-maatwerk' ),
            'menu_name'             => __( 'Vactures', 'pe-maatwerk' ),
            'name_admin_bar'        => __( 'Vacture', 'pe-maatwerk' ),
            'archives'              => __( 'Vacture Archives', 'pe-maatwerk' ),
            'attributes'            => __( 'Vacture Attributes', 'pe-maatwerk' ),
            'parent_item_colon'     => __( 'Parent Vacture:', 'pe-maatwerk' ),
            'all_items'             => __( 'All Vactures', 'pe-maatwerk' ),
            'add_new_item'          => __( 'Add New Vacture', 'pe-maatwerk' ),
            'add_new'               => __( 'Add New', 'pe-maatwerk' ),
            'new_item'              => __( 'New Vacture', 'pe-maatwerk' ),
            'edit_item'             => __( 'Edit Vacture', 'pe-maatwerk' ),
            'update_item'           => __( 'Update Vacture', 'pe-maatwerk' ),
            'view_item'             => __( 'View Vacture', 'pe-maatwerk' ),
            'view_items'            => __( 'View Vacture', 'pe-maatwerk' ),
            'search_items'          => __( 'Search Vacture', 'pe-maatwerk' ),
            'not_found'             => __( 'Not found', 'pe-maatwerk' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'pe-maatwerk' ),
            'featured_image'        => __( 'Featured Image', 'pe-maatwerk' ),
            'set_featured_image'    => __( 'Set featured image', 'pe-maatwerk' ),
            'remove_featured_image' => __( 'Remove featured image', 'pe-maatwerk' ),
            'use_featured_image'    => __( 'Use as featured image', 'pe-maatwerk' ),
            'insert_into_item'      => __( 'Insert into item', 'pe-maatwerk' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'pe-maatwerk' ),
            'items_list'            => __( 'Items list', 'pe-maatwerk' ),
            'items_list_navigation' => __( 'Items list navigation', 'pe-maatwerk' ),
            'filter_items_list'     => __( 'Filter items list', 'pe-maatwerk' ),
        );
        $args = array(
            'label'                 => __( 'Vacture', 'pe-maatwerk' ),
            'description'           => __( 'Post Type Description', 'pe-maatwerk' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'vacture', $args );
    
    }
    add_action( 'init', 'pe_child_vactures', 0 );
    
    }