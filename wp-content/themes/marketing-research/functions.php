<?php
/**
 * Research functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Research
 */

if ( ! function_exists( 'marketing_reache_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marketing_reache_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Research, use a find and replace
	 * to change 'marketing-reache' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'marketing-reache', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog', 460, 360, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Header Menu', 'marketing-reache' ),
        'footer_menu' => esc_html__( 'Footer Menu', 'marketing-reache' ),
        'sub_menu' => esc_html__( 'Category Menu', 'marketing-reache' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'marketing_reache_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'marketing_reache_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marketing_reache_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marketing_reache_content_width', 640 );
}
add_action( 'after_setup_theme', 'marketing_reache_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marketing_reache_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marketing-reache' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'marketing-reache' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'marketing-reache' ),
		'id'            => 'footer-widgets-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'marketing-reache' ),
		'before_widget' => '<div class="col-md-3 col-sm-4"><div class="footer-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2><p>',
	) );
    
     register_sidebar( array(
		'name'          => esc_html__( 'Header Widgets', 'marketing-reache' ),
		'id'            => 'header-widgets-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'marketing-reache' ),
		'before_widget' => '<div class="header-top"><div class="social-icon col-sm-10">',
		'after_widget'  => '</div>',
		'before_title'  => '<ul>',
		'after_title'   => '</ul>',
	) );
}
add_action( 'widgets_init', 'marketing_reache_widgets_init' );






/*---bootstrap carousel----*/

function bcarousel_default_function(){
		add_theme_support('post-thumbnails');
		
		register_post_type('bcarousel', array(
				'labels'=>array(
					'name'=> 'Slider Option',
					'add_new_iteam'=>'Add Your new slider',
				),
				'public'=> true,
				'menu_icon'=>'dashicons-slides',
				'supports'=>array('title','editor','thumbnail')
		
		));
}

add_action('after_setup_theme','bcarousel_default_function');

/*slider-metabox*/
add_action('add_meta_box','sliderHomelink_meta');
function sliderHomelink_meta(){
	add_meta_box(
		 'link_meta',
		 'Slider Link',
		 'sliderhome_link',
		 'bcarousel', // Post type
		 'normal',
		'high'
	);
}

function sliderhome_link($post){
	$link='<strong>Insert Your slider page link:</strong>';
	$link.='<input type="text">';
	echo $link;
}

/*---bootstrap carousel----*/

function casestudy_carousel_function(){
		add_theme_support('post-thumbnails');
		
    register_post_type('scarousel', array(
				'labels'=>array(
					'name'=> 'Secondary Slider',
					'add_new_iteam'=>'Add Your new slider',
				),
				'public'=> true,
				'menu_icon'=>'dashicons-slides',
				'supports'=>array('title','editor','thumbnail')
		
		));
}

add_action('after_setup_theme','casestudy_carousel_function');




function marketing_reache_scripts() {
	wp_enqueue_style( 'source-sans-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900', array(), '1.0', 'all');
	
	wp_enqueue_style( '-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
	// Theme stylesheet.
	wp_enqueue_style( 'marketing_reache-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'marketing_reache-animate', get_theme_file_uri( '/css/animate.css' ), array(), '1.0', 'all' );
    wp_enqueue_style( 'marketing_reache-linecons', get_theme_file_uri( '/css/linecons.css' ), array(), '1.0', 'all' );
    wp_enqueue_style( 'marketing_reache-strip', get_theme_file_uri( '/inc/strip/css/strip.css' ), array(), '1.0', 'all' );
    wp_enqueue_style( 'marketing_reache-owl', get_theme_file_uri( '/css/owl.carousel.css' ), array(), '1.0', 'all' );
    wp_enqueue_style( 'marketing_reache-responsive', get_theme_file_uri( '/css/responsive.css' ), array(), '1.0', 'all' );

    //Includeing JS Files
	
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), '2.0.3', true );
    
	wp_enqueue_script( 'marketing_reache-counterup', get_template_directory_uri() .'/js/jquery.counterup.min.js', array(), '1.0.0'. true );
    wp_enqueue_script( 'marketing_reache-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true);
    wp_enqueue_script( 'marketing_reache-strip', get_template_directory_uri() . '/inc/strip/js/strip.pkgd.min.js', array(), '20151215', true);
    wp_enqueue_script( 'marketing_reache-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array(), '1.3', true);
    wp_enqueue_script( 'marketing_reache-tweet', get_template_directory_uri() . '/js/jquery.tweet.min.js', array(), '20151215', true);
    wp_enqueue_script( 'marketing_reache-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js' , array(), '20151215', true);
    wp_enqueue_script( 'marketing_reache-isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js' , array(), '20151215', true);
    wp_enqueue_script( 'marketing_reache-parallex', get_template_directory_uri() . '/js/parallax.js' , array(), '1.3.1', true);
    wp_enqueue_script( 'marketing_reache-wow', get_template_directory_uri() . '/js/wow.min.js' , array( 'jquery'), '20151215', false);
    wp_enqueue_script( 'marketing_reache-main', get_template_directory_uri() . '/js/main.js' ,  array(), '20151215', true);
    wp_enqueue_script( 'marketing_scrollNav', get_template_directory_uri() . '/js/jquery.scrollNav.js' ,  array(), '2.6.0', true);
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marketing_reache_scripts' );

/**
 * Enqueue scripts and styles.
 
function marketing_reache_scripts() {
	
	wp_enqueue_style( 'source-sans-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900', array(), '1.0', 'all');
	
	wp_enqueue_style( '-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
	
	wp_enqueue_style( 'marketing_reache-animate', get_stylesheet_uri() . '/css/animate.css' , array(), '1.0', 'all' );

	wp_enqueue_style( 'marketing_reache-linecons', get_stylesheet_uri() . '/css/linecons.css' , array(), '1.0', 'all');
	
	wp_enqueue_style( 'marketing_reache-strip', get_stylesheet_uri() . '/inc/strip/css/strip.css' , array(), '1.0', 'all' );

	wp_enqueue_style( 'marketing_reache-owl', get_stylesheet_uri() . '/css/owl.carousel.css' , array(), '1.0', 'all');
	
	wp_enqueue_style( 'marketing_reache-marketing-reache-style', get_stylesheet_uri() );	
	
	wp_enqueue_style( 'responsive', get_stylesheet_uri() . '/css/responsive.css' , array(), '1.0', 'all');

	
	//Includeing JS Files
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );
	
	wp_enqueue_script( 'waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), '2.0.3', true );
	
	wp_enqueue_script( 'marketing_reache-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'marketing_reache-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );

	wp_enqueue_script( 'marketing_reache-strip', get_template_directory_uri() . '/inc/strip/js/strip.pkgd.min.js', array(), '20151215', true );

	wp_enqueue_script( 'marketing_reache-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array(), '1.3', true );

	wp_enqueue_script( 'marketing_reache-tweet', get_template_directory_uri() . '/js/jquery.tweet.min.js', array(), '20151215', true );

	wp_enqueue_script( 'marketing_reache-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'marketing_reache-isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );
		wp_enqueue_script( 'marketing_reache-parallex', get_template_directory_uri() . '/js/parallax.js', array(), '1.3.1', true );

	wp_enqueue_script( 'marketing_reache-wow', get_template_directory_uri() . '/js/wow.min.js', array( ' jquery'), '20151215', false );

	wp_enqueue_script( 'marketing_reache-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marketing_reache_scripts' );*/


/*function ajax_filter_posts_scripts() {
  // Enqueue script
  wp_register_script('afp_script', get_template_directory_uri() . '/js/ajax-filter-posts.js', false, null, false);
  wp_enqueue_script('afp_script');

  wp_localize_script( 'afp_script', 'afp_vars', array(
        'afp_nonce' => wp_create_nonce( 'afp_nonce' ), // Create nonce which we later will use to verify AJAX request
        'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
      )
  );
}
add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);

// Script for getting posts
function ajax_filter_get_posts( $taxonomy ) {

  // Verify nonce
  if( !isset( $_POST['afp_nonce'] ) || !wp_verify_nonce( $_POST['afp_nonce'], 'afp_nonce' ) )
    die('Permission denied');

  $taxonomy = $_POST['taxonomy'];

  // WP Query
  $args = array(
    'category_name' => $taxonomy,
    'post_type' => 'post',
    'posts_per_page' => 10,
  );
  echo $taxonomy;
  // If taxonomy is not set, remove key from array and get all posts
  if( !$taxonomy ) {
    unset( $args['tag'] );
  }

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>

  <?php endwhile; ?>
  <?php else: ?>
    <h2>No posts found</h2>
  <?php endif;

  die();
}

add_action('wp_ajax_filter_posts', 'ajax_filter_get_posts');
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_get_posts');*/







/**
 * ie elements function.
 */
 if ( ! function_exists( 'theme_ie_elements' ) ) :
 function theme_ie_elements(){
?> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <?php
 }
 add_action('wp_head', 'theme_ie_elements');
 endif;
 
  if ( ! function_exists( 'theme_ie_elements_wow_and_ie_footer' ) ) :
 function theme_ie_elements_wow_and_ie_footer(){
?> 
<!--Activating WOW Animation only for modern browser-->
		<!--[if !IE]><!-->
			<script type="text/javascript">new WOW().init();</script>
		<!--<![endif]-->		
		
		<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
		<!--[if gte IE 9]>
			<script type="text/javascript">new WOW().init();</script>
		<![endif]-->		 
		
		<!--Opacity & Other IE fix for older browser-->
		<!--[if lte IE 8]>
			<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
		<![endif]-->	
 <?php
 }
 add_action('wp_footer', 'theme_ie_elements_wow_and_ie_footer');
 endif;

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Activate Reduxframeworks*/

if(!class_exists("ReduxFrameworkPlugin")){
	require_once(get_template_directory()."/libs/redux-framework/redux-framework.php");
	require_once(get_template_directory()."/inc/them-options.php");
}


/* Activate cmb2*/
/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/libs/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/libs/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/cmb2/init.php';
}

	require_once(get_template_directory()."/inc/them-metabox.php");



if ( ! function_exists( 'theme_template_files' ) ) :

function theme_template_files(){
	
}
add_action('','theme_template_files');

endif;




