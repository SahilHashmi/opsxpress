<?php
require_once __DIR__ . '/../../../wp-load.php';
$templates = array( 'front-page', 'page', 'page-about', 'page-contact', 'single', 'archive', '404', 'search', 'index' );
foreach ( $templates as $slug ) {
    $template = get_block_template( get_stylesheet() . '//' . $slug, 'wp_template' );
    if ( $template && ! is_wp_error( $template ) ) {
        echo "$slug: OK\n";
    } else {
        echo "$slug: MISSING OR ERROR\n";
    }
}
$parts = array( 'header', 'footer' );
foreach ( $parts as $slug ) {
    $part = get_block_template( get_stylesheet() . '//' . $slug, 'wp_template_part' );
    if ( $part && ! is_wp_error( $part ) ) {
        echo "part $slug: OK\n";
    } else {
        echo "part $slug: MISSING OR ERROR\n";
    }
}
