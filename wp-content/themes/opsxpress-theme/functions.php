<?php
/**
 * OpsXpress theme setup.
 *
 * @package OpsXpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OPSXPRESS_VERSION', '1.6.0' );

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
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'opsxpress_setup' );

function opsxpress_assets() {
	wp_enqueue_style( 'opsxpress-main', get_theme_file_uri( 'assets/css/main.css' ), array(), OPSXPRESS_VERSION );
	wp_enqueue_script( 'opsxpress-main', get_theme_file_uri( 'assets/js/main.js' ), array(), OPSXPRESS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'opsxpress_assets' );

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
			'default' => 'Infrastructure that never sleeps.',
			'type'    => 'text',
		),
		'opsxpress_hero_accent' => array(
			'label'   => __( 'Headline — second line', 'opsxpress' ),
			'default' => 'Continuous monitoring, rapid resolution,',
			'type'    => 'text',
		),
		'opsxpress_hero_third_line' => array(
			'label'   => __( 'Headline — third line', 'opsxpress' ),
			'default' => 'built for performance.',
			'type'    => 'text',
		),
		'opsxpress_hero_description' => array(
			'label'   => __( 'Description', 'opsxpress' ),
			'default' => 'We monitor & optimize infrastructure, applications, and databases 24/7, resolving issues proactively to safeguard uptime, performance, security, compliance, and efficiency.',
			'type'    => 'textarea',
		),
		'opsxpress_primary_cta_label' => array(
			'label'   => __( 'Primary button label', 'opsxpress' ),
			'default' => 'See How OpsXpress Works',
			'type'    => 'text',
		),
		'opsxpress_primary_cta_url' => array(
			'label'    => __( 'Primary button URL', 'opsxpress' ),
			'default'  => '#services',
			'type'     => 'url',
			'sanitize' => 'esc_url_raw',
		),
		'opsxpress_secondary_cta_label' => array(
			'label'   => __( 'Secondary button label', 'opsxpress' ),
			'default' => 'Get Free Ops Assessment',
			'type'    => 'text',
		),
		'opsxpress_secondary_cta_url' => array(
			'label'    => __( 'Secondary button URL', 'opsxpress' ),
			'default'  => '#contact',
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
