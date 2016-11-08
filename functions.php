<?php

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo');

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-thumbnails' );


function codex_book_init() {
	$labels = array(
		'name'               => 'Books',
		'singular_name'      => 'Book',
		'menu_name'          => 'Books',
		'name_admin_bar'     => 'Book',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Book',
		'new_item'           => 'New Book',
		'edit_item'          => 'Edit Book',
		'view_item'          => 'View Book',
		'all_items'          => 'All Books',
		'search_items'       => 'Search Books',
		'parent_item_colon'  => 'Parent Books:',
		'not_found'          => 'No books found.',
		'not_found_in_trash' => 'No books found in Trash.'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Description.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 2,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'revisions', 'custom-fields','page-attributes' )
		);

	register_post_type( 'book', $args );
}

add_action( 'init', 'codex_book_init' );

function my_taxonomies_book() {
  $labels = array(
    'name'              => 'Ebook Categories',
    'singular_name'     => 'Ebook Category',
    'search_items'      => 'Search Ebook Categories',
    'all_items'         => 'All Ebook Categories',
    'parent_item'       => 'Parent Ebook Category',
    'parent_item_colon' => 'Parent Ebook Category:',
    'edit_item'         => 'Edit Ebook Category', 
    'update_item'       => 'Update Ebook Category',
    'add_new_item'      => 'Add New Ebook Category',
    'new_item_name'     => 'New Ebook Category',
    'menu_name'         => 'Ebook Categories'
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'book_category', 'book', $args );
}
add_action( 'init', 'my_taxonomies_book', 0 );

add_filter('pre_get_posts','get_custom_post_type');
function get_custom_post_type($query) {
  if (is_home() && $query->is_main_query ())
    $query->set ('post_type', array ('post','book'));
    return $query;
}
	
$new_query = new WP_Query( 'post_type=book' );

function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', get_bloginfo('template_url') . '/functions/my-script.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
}
function my_admin_styles() {
wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}