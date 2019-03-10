<?php
/**
 * balakIT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package balakIT
 */

if ( ! function_exists( 'balakit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function balakit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on balakIT, use a find and replace
		 * to change 'balakit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'balakit', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'balakit' ),
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
		add_theme_support( 'custom-background', apply_filters( 'balakit_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'balakit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function balakit_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'balakit_content_width', 640 );
}
add_action( 'after_setup_theme', 'balakit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function balakit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'balakit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'balakit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'balakit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function balakit_scripts() {
	//wp_deregister_script( 'jquery' );
	// wp_register_script( 'jquery', get_template_directory_uri() . '/assets/libs/jQuery/jquery.min.js', array(), '20151215', true );
	// wp_register_script( 'jquery', get_template_directory_uri() . '/assets/libs/jQuery/jquery-1.10.2.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery', true );
	
	wp_enqueue_style( 'balakit-style', get_stylesheet_uri() );
	wp_enqueue_script( 'balakit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'balakit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Custom styles and scripts for this template balakIT */
	wp_enqueue_style( 'balakit-reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/libs/fancybox/dist/jquery.fancybox.min.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.css' );
	wp_enqueue_style( 'slick-teme-css', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick-theme.css' );
	wp_enqueue_style( 'default-css', get_template_directory_uri() . '/assets/css/main.css' );


	wp_enqueue_script( 'particle-js', get_template_directory_uri() . '/assets/libs/particles.js-master/particles.min.js', array(), '20151215', true );
	wp_enqueue_script( 'particle-app', get_template_directory_uri() . '/assets/libs/particles.js-master/demo/js/app.js', array(), '20151215', true );
	wp_enqueue_script( 'maskinput', get_template_directory_uri() . '/assets/libs/maskedinput/dist/jquery.maskedinput.min.js', array(), '20151215', true );
	wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/assets/libs/typed.js/lib/typed.min.js', array(), '20151215', true );
	wp_enqueue_script( 'scroll-js', get_template_directory_uri() . '/assets/libs/page-scroll-to-id/js/minified/jquery.malihu.PageScroll2id.min.js', array(), '20151215', true );
	wp_enqueue_script( 'count', get_template_directory_uri() . '/assets/libs/countTo/jquery.spincrement.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/libs/fancybox/dist/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'default-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '20151215', true );
	
}
add_action( 'wp_enqueue_scripts', 'balakit_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


