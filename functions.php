<?php
/**
 * Web Layouts functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Web_Layouts
 */

 

$GLOBALS['resouces-version'] = '0.4.4';




if ( ! function_exists( 'web_layouts_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function web_layouts_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'web_layouts' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'web_layouts', get_template_directory() . '/languages' );

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

	add_image_size( 'web_layouts-full', 2000, 1325, true );
	add_image_size( 'web_layouts-featured-image', 750, 400, true );
	add_image_size( 'web_layouts-thumbnail', 370, 252, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top Pages Nav', 'web_layouts' ),
		'menu-4' => esc_html__( 'Category Nav', 'web_layouts' )
	) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'web_layouts_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'web_layouts_setup' );








/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function web_layouts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'web_layouts_content_width', 640 );
}
add_action( 'after_setup_theme', 'web_layouts_content_width', 0 );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function web_layouts_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}









function get_image_from_media_library($post_title) {
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => 1000,
        'title' => $post_title,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query( $args );
    $the_attachment = array();
	foreach ( $query_images->posts as $image) {
        $the_attachment[]= $image;
    }

    if(!empty($the_attachment)){
    	$the_attachment = (!empty($the_attachment)) ? $the_attachment[0] : null;
    }  
    
    return $the_attachment;
}







/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function web_layouts_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar single post', 'web_layouts' ),
		'id'            => 'sidebar-singlepost',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar single page', 'web_layouts' ),
		'id'            => 'sidebar-singlepage',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Featured', 'web_layouts' ),
		'id'            => 'sidebar-featured',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );



	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Archives & Tags', 'web_layouts' ),
		'id'            => 'sidebar-archivestags',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'web_layouts' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
}
add_action( 'widgets_init', 'web_layouts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function web_layouts_scripts() { 
	//[Foundation] Used for: "grid system"  
	wp_enqueue_style( 'web_layouts-info-file', get_template_directory_uri() . '/style.css', array(), $GLOBALS['resouces-version'] ); 

	//JavaScript/main ...
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/wl-main-min.js', array('jquery'), $GLOBALS['resouces-version'], true );
	//JavaScript/masonry ...
	wp_enqueue_script( 'masonry.pkgd', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js', array(), $GLOBALS['resouces-version'], true );
	//JavaScript/document ...
	wp_enqueue_script( 'wl-document', get_template_directory_uri() . '/js/wl-document-min.js', array('loadCSS'), $GLOBALS['resouces-version'], true );
	//JavaScript/home-page ...
	if(is_home()){
		wp_enqueue_script( 'page-home', get_template_directory_uri() . '/js/page-home-min.js', array('wl-document'), $GLOBALS['resouces-version'], true );
	} 
	//Script that load stylesheets asynchronously
	wp_enqueue_script( 'loadCSS', get_template_directory_uri() . '/js/loadCSS-min.js', array(), $GLOBALS['resouces-version'], true );
	//Theme stylesheet files to be loaded asynchronously
	wp_enqueue_script( 'theme-stylesheets-by-loadCSS', get_template_directory_uri() . '/js/wl-styles-theme-async-min.js', array('loadCSS'), $GLOBALS['resouces-version'], true );
	//Plugin stylesheet files to be loaded asynchronously
	wp_enqueue_script( 'plugin-stylesheets-by-loadCSS', get_template_directory_uri() . '/js/wl-styles-plugin-async-min.js', array('loadCSS'), $GLOBALS['resouces-version'], true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'web_layouts_scripts' );



/* Render Native wordpress script Asynchronously */
//http://matthewhorne.me/defer-async-wordpress-scripts/
function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array('jquery-core', 'jquery-migrate');
   
   foreach($scripts_to_async as $async_script) { 
      if ($async_script === $handle) {
         return str_replace(' src', ' async="async" src', $tag);
      }
   }
   return $tag;
}
add_filter( 'script_loader_tag', 'add_async_attribute', 10, 2 );



/* Removing "jQuery" migrate from being served */
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}




/**
 * Custom pages options.
 */
require get_template_directory() . '/inc/custom-pages.php';


/**
 * Custom menu options.
 */
require get_template_directory() . '/inc/custom-menu.php';

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

/**
 * Posts filters
 */
require get_template_directory() . '/inc/filters-post.php';

/**
 * Images filters
 */
require get_template_directory() . '/inc/filters-image.php';

/**
 * ...
 */
require get_template_directory() . '/inc/custom-user-social.php';







