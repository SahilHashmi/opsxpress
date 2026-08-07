<?php
/**
 * OpsXpress theme setup.
 *
 * @package OpsXpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OPSXPRESS_VERSION', '2.0.1' );

function opsxpress_setup() {
	load_theme_textdomain( 'opsxpress', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'opsxpress' ),
			'footer'  => __( 'Footer Navigation', 'opsxpress' ),
		)
	);
	add_theme_support( 'menus' );
	add_editor_style( array( 'assets/css/main.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', 'opsxpress_setup' );

function opsxpress_assets() {
	wp_enqueue_style( 'opsxpress-main', get_theme_file_uri( 'assets/css/main.css' ), array(), OPSXPRESS_VERSION );
	wp_enqueue_script( 'opsxpress-main', get_theme_file_uri( 'assets/js/main.js' ), array(), OPSXPRESS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'opsxpress_assets' );

/**
 * Flag that JavaScript is available so scroll-reveal elements can start hidden
 * on the front end while staying visible in the editor and without JS.
 */
function opsxpress_js_flag() {
	echo "<script>document.documentElement.classList.add('js');</script>\n";
}
add_action( 'wp_head', 'opsxpress_js_flag', 1 );

function opsxpress_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'opsxpress_hero',
		array(
			'title'       => __( 'Homepage Hero', 'opsxpress' ),
			'description' => __( 'Update the homepage headline, description, and buttons.', 'opsxpress' ),
			'priority'    => 30,
		)
	);
	$wp_customize->add_setting(
		'opsxpress_navbar_logo',
		array(
			'default'           => get_theme_file_uri( 'assets/logo/Company logo navbar-B8ZEAKe_.svg' ),
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'opsxpress_navbar_logo',
			array(
				'label'   => __( 'Navbar logo', 'opsxpress' ),
				'section' => 'title_tagline',
			)
		)
	);

	$fields = array(
		'opsxpress_hero_title' => array(
			'label'   => __( 'Headline — first line', 'opsxpress' ),
                        'default' => 'Run infrastructure without',
			'type'    => 'text',
		),
		'opsxpress_hero_accent' => array(
			'label'   => __( 'Headline — second line', 'opsxpress' ),
                        'default' => 'downtime, blind spots,',
			'type'    => 'text',
		),
		'opsxpress_hero_third_line' => array(
			'label'   => __( 'Headline — third line', 'opsxpress' ),
                        'default' => 'or midnight chaos.',
			'type'    => 'text',
		),
		'opsxpress_hero_description' => array(
			'label'   => __( 'Description', 'opsxpress' ),
                        'default' => 'OpsXpress helps modern businesses run critical infrastructure with managed operations, always-on NOC/SOC coverage, DevOps automation, and incident response that keeps systems fast, secure, and available.',
			'type'    => 'textarea',
		),
		'opsxpress_primary_cta_label' => array(
			'label'   => __( 'Primary button label', 'opsxpress' ),
                        'default' => 'Schedule a strategy call',
			'type'    => 'text',
		),
		'opsxpress_primary_cta_url' => array(
			'label'    => __( 'Primary button URL', 'opsxpress' ),
                        'default'  => home_url( '/contact/' ),
			'type'     => 'url',
			'sanitize' => 'esc_url_raw',
		),
		'opsxpress_secondary_cta_label' => array(
			'label'   => __( 'Secondary button label', 'opsxpress' ),
                        'default' => 'See our service stack',
			'type'    => 'text',
		),
		'opsxpress_secondary_cta_url' => array(
			'label'    => __( 'Secondary button URL', 'opsxpress' ),
                        'default'  => home_url( '/services/' ),
			'type'     => 'url',
			'sanitize' => 'esc_url_raw',
		),
	);

	foreach ( $fields as $id => $field ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $field['default'],
				'sanitize_callback' => isset( $field['sanitize'] ) ? $field['sanitize'] : 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $field['label'],
				'section' => 'opsxpress_hero',
				'type'    => $field['type'],
			)
		);
	}
}
add_action( 'customize_register', 'opsxpress_customize_register' );

/**
 * Register dynamic header/footer blocks so the Site Editor can render them
 * while the existing PHP markup and CSS remain untouched.
 */
function opsxpress_register_dynamic_blocks() {
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'opsxpress-blocks',
		get_theme_file_uri( 'assets/js/blocks.js' ),
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-i18n', 'wp-server-side-render' ),
		OPSXPRESS_VERSION,
		true
	);

	$supports = array(
		'html'            => false,
		'reusable'        => false,
		'multiple'        => false,
		'customClassName' => false,
	);

	register_block_type(
		'opsxpress/header',
		array(
			'api_version'     => 3,
			'title'           => __( 'OpsXpress Header', 'opsxpress' ),
                        'description'     => __( 'Site header with the logo and primary navigation.', 'opsxpress' ),
			'category'        => 'theme',
			'icon'            => 'align-center',
			'supports'        => $supports,
			'editor_script'   => 'opsxpress-blocks',
			'render_callback' => 'opsxpress_render_header_block',
		)
	);

	register_block_type(
		'opsxpress/footer',
		array(
			'api_version'     => 3,
			'title'           => __( 'OpsXpress Footer', 'opsxpress' ),
			'description'     => __( 'CTA cards plus the video background footer.', 'opsxpress' ),
			'category'        => 'theme',
			'icon'            => 'align-wide',
			'supports'        => $supports,
			'editor_script'   => 'opsxpress-blocks',
			'render_callback' => 'opsxpress_render_footer_block',
		)
	);

	register_block_type(
		'opsxpress/hero',
		array(
			'api_version'     => 3,
			'title'           => __( 'OpsXpress Hero', 'opsxpress' ),
			'description'     => __( 'Animated three line hero headline.', 'opsxpress' ),
			'category'        => 'theme',
			'icon'            => 'cover-image',
			'supports'        => $supports,
			'editor_script'   => 'opsxpress-blocks',
			'attributes'      => array(
				'titleLineOne'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'titleLineTwo'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'titleLineThree' => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => 'opsxpress_render_hero_block',
		)
	);
}
add_action( 'init', 'opsxpress_register_dynamic_blocks', 5 );

/**
 * Render the header block using the original PHP header markup.
 */
function opsxpress_render_header_block() {
	ob_start();
	get_template_part( 'template-parts/dynamic', 'header' );
	return ob_get_clean();
}

/**
 * Render the footer block using the original PHP footer markup.
 */
function opsxpress_render_footer_block() {
	ob_start();
	get_template_part( 'template-parts/dynamic', 'footer' );
	return ob_get_clean();
}

/**
 * Render the hero block using the original PHP hero markup.
 *
 * @param array $attributes Block attributes.
 */
function opsxpress_render_hero_block( $attributes = array() ) {
	ob_start();
	get_template_part( 'template-parts/dynamic', 'hero', array( 'attributes' => (array) $attributes ) );
	return ob_get_clean();
}
