<?php
/**
 * fisioforma functions and definitions
 *
 * @package fisioforma
 */

// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/metabox' ) );
define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/metabox' ) );
// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';
require_once RWMB_DIR . 'meta-box-columns.php';
require_once RWMB_DIR . 'meta-box-include-exclude.php';
// Include the meta box definition (the file where you define meta boxes, see `demo/demo.php`)
include 'metabox/metaboxes.php';

add_filter('show_admin_bar', '__return_false');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'fisioforma_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fisioforma_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fisioforma, use a find and replace
	 * to change 'fisioforma' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fisioforma', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fisioforma' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fisioforma_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fisioforma_setup
add_action( 'after_setup_theme', 'fisioforma_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fisioforma_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fisioforma' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'fisioforma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fisioforma_scripts() {
	wp_enqueue_style( 'fisioforma-style', get_stylesheet_uri() );

	wp_enqueue_script( 'fisioforma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'fisioforma-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fisioforma_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

add_theme_support( 'post-thumbnails' ); 

add_image_size( 'list-img', 294, 220, true ); // (cropped)

/* Tratamentos */

add_action( 'init', 'register_cpt_tratamentos' );

function register_cpt_tratamentos() {

    $labels = array( 
        'name' => _x( 'Tratamentos', 'tratamentos' ),
        'singular_name' => _x( 'tratamento', 'tratamentos' ),
        'add_new' => _x( 'Adicionar Tratamento', 'tratamentos' ),
        'add_new_item' => _x( 'Adicionar Novo Tratamento', 'tratamentos' ),
        'edit_item' => _x( 'Editar Tratamento', 'tratamentos' ),
        'new_item' => _x( 'Novo Tratamento', 'tratamentos' ),
        'view_item' => _x( 'Ver Tratamento', 'tratamentos' ),
        'search_items' => _x( 'Procurar Tratamentos', 'tratamentos' ),
        'not_found' => _x( 'Nenhum Tratamento Encontrado', 'tratamentos' ),
        'not_found_in_trash' => _x( 'Nenhum Tratamento Encontrado', 'tratamentos' ),
        'parent_item_colon' => _x( 'Tratamentos', 'tratamentos' ),
        'menu_name' => _x( 'Tratamentos', 'tratamentos' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'tratamentos', $args );
}

add_action( 'init', 'register_cpt_unidades' );

function register_cpt_unidades() {
    $labels = array( 
        'name' => _x( 'Unidades', 'unidades' ),
        'singular_name' => _x( 'Unidades', 'unidades' ),
        'add_new' => _x( 'Adicionar Nova Unidade', 'unidades' ),
        'add_new_item' => _x( 'Adicionar Nova Unidade', 'unidades' ),
        'edit_item' => _x( 'Editar Unidade', 'unidades' ),
        'new_item' => _x( 'Nova Unidade', 'unidades' ),
        'view_item' => _x( 'Ver Unidade', 'unidades' ),
        'search_items' => _x( 'Procurar Unidades', 'unidades' ),
        'not_found' => _x( 'Nenhuma Unidade Encontrada', 'unidades' ),
        'not_found_in_trash' => _x( 'Nenhuma Unidade Encontrada', 'unidades' ),
        'parent_item_colon' => _x( 'Unidades', 'unidades' ),
        'menu_name' => _x( 'Unidades', 'unidades' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'thumbnail' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'unidades', $args );
}

add_action( 'init', 'register_cpt_cosmeticos' );

function register_cpt_cosmeticos() {
    $labels = array( 
        'name' => _x( 'Cosméticos', 'cosmeticos' ),
        'singular_name' => _x( 'Cosméticos', 'cosmeticos' ),
        'add_new' => _x( 'Adicionar Novo', 'cosmeticos' ),
        'add_new_item' => _x( 'Adicionar Novo Cosmético', 'cosmeticos' ),
        'edit_item' => _x( 'Editar Cosmético', 'cosmeticos' ),
        'new_item' => _x( 'Novo Cosmético', 'cosmeticos' ),
        'view_item' => _x( 'Ver Item', 'cosmeticos' ),
        'search_items' => _x( 'Procurar Itens', 'cosmeticos' ),
        'not_found' => _x( 'Nenhum Item Encontrado', 'cosmeticos' ),
        'not_found_in_trash' => _x( 'Nenhum Item Encontrado', 'cosmeticos' ),
        'parent_item_colon' => _x( 'Cosméticos', 'cosmeticos' ),
        'menu_name' => _x( 'Cosméticos', 'cosmeticos' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'cosmeticos', $args );
}

add_action( 'init', 'register_cpt_depoimentos' );

function register_cpt_depoimentos() {
    $labels = array( 
        'name' => _x( 'Depoimentos', 'depoimentos' ),
        'singular_name' => _x( 'Depoimentos', 'depoimentos' ),
        'add_new' => _x( 'Adicionar Novo', 'depoimentos' ),
        'add_new_item' => _x( 'Adicionar Novo Depoimento', 'depoimentos' ),
        'edit_item' => _x( 'Editar Depoimento', 'depoimentos' ),
        'new_item' => _x( 'Novo Depoimento', 'depoimentos' ),
        'view_item' => _x( 'Ver Depoimento', 'depoimentos' ),
        'search_items' => _x( 'Procurar Depoimentos', 'depoimentos' ),
        'not_found' => _x( 'Nenhum depoimentos encontrado', 'depoimentos' ),
        'not_found_in_trash' => _x( 'Nenhum depoimentos encontrado', 'depoimentos' ),
        'parent_item_colon' => _x( 'Depoimentos:', 'depoimentos' ),
        'menu_name' => _x( 'Depoimentos', 'depoimentos' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'depoimentos', $args );
}

add_action( 'init', 'register_cpt_loja' );

function register_cpt_loja() {
    $labels = array( 
        'name' => _x( 'Loja', 'loja' ),
        'singular_name' => _x( 'Loja', 'loja' ),
        'add_new' => _x( 'Adicionar Novo Produto', 'loja' ),
        'add_new_item' => _x( 'Adicionar Novo Produto', 'loja' ),
        'edit_item' => _x( 'Editar Produto', 'loja' ),
        'new_item' => _x( 'Novo Produto', 'loja' ),
        'view_item' => _x( 'Ver Produto', 'loja' ),
        'search_items' => _x( 'Pesquisar', 'loja' ),
        'not_found' => _x( 'Nenhum produto encontrado', 'loja' ),
        'not_found_in_trash' => _x( 'Nenhum produto encontrado', 'loja' ),
        'parent_item_colon' => _x( 'Parent Loja:', 'loja' ),
        'menu_name' => _x( 'Loja', 'loja' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'thumbnail' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'loja', $args );
}

add_action('init', 'remove_editor_init');

function remove_editor_init() {
    // if post not set, just return 
    // fix when post not set, throws PHP's undefined index warning
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    } else {
        return;
    }
    $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
    if ($template_file == 'template-franquias.php') {
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'revisions');
    }
    if ($template_file == 'template-contato.php') {
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'revisions');
        remove_post_type_support('page', 'thumbnail');
    }
    if ($template_file == 'template-home.php') {
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'revisions');
        remove_post_type_support('page', 'thumbnail');
    }
}
the_time( get_option( 'date_format' ) );