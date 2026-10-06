<?php
/**
 * Haven theme setup.
 *
 * @package Haven
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HAVEN_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function haven_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'haven' ),
			'footer'  => esc_html__( 'Footer', 'haven' ),
		)
	);

	load_theme_textdomain( 'haven', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'haven_setup' );

/**
 * Footer widget area.
 */
function haven_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'haven' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'haven' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'haven_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function haven_enqueue_assets() {
	wp_enqueue_style( 'haven-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap', array(), HAVEN_VERSION );
	wp_enqueue_style( 'haven-style', get_stylesheet_uri(), array( 'haven-fonts' ), HAVEN_VERSION );
	wp_enqueue_script( 'haven-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), HAVEN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'haven_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function haven_enqueue_editor_assets() {
	wp_enqueue_style( 'haven-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), HAVEN_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'haven_enqueue_editor_assets' );

/**
 * Register the Haven pattern category.
 */
function haven_register_pattern_category() {
	register_block_pattern_category(
		'haven',
		array( 'label' => esc_html__( 'Haven', 'haven' ) )
	);
}
add_action( 'init', 'haven_register_pattern_category' );

/**
 * Custom block styles.
 */
function haven_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'gold-outline', 'label' => esc_html__( 'Gold Outline', 'haven' ) ) );
	register_block_style( 'core/group', array( 'name' => 'property-card', 'label' => esc_html__( 'Property Card', 'haven' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'haven' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'gold-rule', 'label' => esc_html__( 'Gold Rule', 'haven' ) ) );
}
add_action( 'init', 'haven_register_block_styles' );

/**
 * Custom excerpt length.
 */
function haven_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'haven_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function haven_icon( $name ) {
	$icons = array(
		'bed'   => '<path d="M3 18v-6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6"/><path d="M3 18h18M5 10V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4"/>',
		'bath'  => '<path d="M4 12h16v2a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5v-2z"/><path d="M6 19l-1 2M18 19l1 2M7 12V5a2 2 0 0 1 4 0"/>',
		'area'  => '<rect x="4" y="4" width="16" height="16" rx="2"/><path d="M4 12h16M12 4v16"/>',
		'phone' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'  => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'   => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
