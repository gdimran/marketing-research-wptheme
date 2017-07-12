<?php
/*
Plugin Name: Cdp WP Toolkit
plugin Description: A toolkit plugin only for theme customization.
version: 1.0
*/

if ( ! function_exists( 'theme_custome_posts' ) ) :

function theme_custome_posts(){
	/*register_post_type(
		'event', array(
			'public'=> true,
			'label'=> 'Events',
			'labels'=> array(
					'name'=> 'Events',
					'singular_name'=> 'Event',
					'add_new'=> 'Add new event',
			),
			'supports'=> array('title','editor', 'thumbnail', 'excerpt', 'custom-fields')
		)
	);
    */
    register_post_type(
		'blog', array(
			'public'=> true,
			'label'=> 'Blogs',
			'labels'=> array(
					'name'=> 'Blog',
					'singular_name'=> 'Blog',
					'add_new'=> 'Add new blog',
			),
            'menu_icon'=>'dashicons-rss',
			'supports'=> array('title','editor', 'thumbnail', 'excerpt', 'custom-fields')
		)
	);
}

add_action('init','theme_custome_posts');

function theme_custome_posts_taxonomy(){
	register_taxonomy(
		'blog_cat',// The name of the taxonomy. Name should be in slug from.
        'blog', //post type name
        array(
			'hierarchical'=> true,
			'label'      => 'Blog Category',// Display name.
			'query_var'      => true,
            'show_admin_column'      => true,
            'rewrite'=> array(
					'slug'=> 'blog-category',
					'singular_name'=> 'Event', // This controls the base slug that will display each iteam
					'with_front'=> true,
			)
		)
	);
    
   
}

add_action('init','theme_custome_posts_taxonomy');



endif;



?>