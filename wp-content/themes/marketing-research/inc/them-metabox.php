<?php
/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/libs/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/libs/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/cmb2/init.php';
}



add_action( 'cmb2_init', 'theme_meta_box' );

function theme_meta_box() {
	$prefix = '_theme_metabox_';

	$theme_meta_box= new_cmb2_box( array(
		'id'           => 'theme_blog_metabox',
		'title'        => esc_html__( 'Blog Metabox', 'cmb2' ),
		'object_types' => array( 'blog' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
		) // Specific post IDs to display this metabox
	 );


	$theme_meta_box->add_field( array(
		'name' => esc_html__( 'Blog Description', 'cmb2' ),
		'desc' => esc_html__( 'Blog short description here.', 'cmb2' ),
		'id'   => $prefix . 'blog_details',
		'type' => 'textarea',
	) );
    
    $theme_meta_box->add_field( array(
		'name' => esc_html__( 'Blog link', 'cmb2' ),
		'desc' => esc_html__( 'Blog link here.', 'cmb2' ),
		'id'   => $prefix . 'blog_link',
		'type' => 'text',
	) );
	
	
	
	$theme_meta_box= new_cmb2_box( array(
		'id'           => 'theme_sliderLink_metabox',
		'title'        => esc_html__( 'Slider Link Metabox', 'cmb2' ),
		'object_types' => array( 'bcarousel' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
		) // Specific post IDs to display this metabox
	 );

    
    $theme_meta_box->add_field( array(
		'name' => esc_html__( 'Slider link', 'cmb2' ),
		'desc' => esc_html__( 'Slider link here.', 'cmb2' ),
		'id'   => $prefix . 'slider_link',
		'type' => 'text',
	) );
	
	$theme_meta_box= new_cmb2_box( array(
		'id'           => 'theme_sliderLink2_metabox',
		'title'        => esc_html__( 'Slider Link Metabox', 'cmb2' ),
		'object_types' => array( 'bcarousel' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
		) // Specific post IDs to display this metabox
	 );

    
    $theme_meta_box->add_field( array(
		'name' => esc_html__( 'Slider link', 'cmb2' ),
		'desc' => esc_html__( 'Slider link here.', 'cmb2' ),
		'id'   => $prefix . 'slider_link2',
		'type' => 'text',
	) );
}
