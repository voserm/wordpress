<?php

$args = array(
	'default-color' => 'FFFFFF',
);

add_theme_support( 'custom-background', $args );

add_theme_support( 'post-thumbnails' );

function portfolio_item_init() {
	$args = array(
		'label' => 'Portfolio Items',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'portfolio-items'),
		'query_var' => true,
		'menu_icon' => 'dashicons-welcome-add-page',
		'supports' => array(
			'title',
			'editor',
			'custom-fields',
			'thumbnail',
			'author',)
	);
	register_post_type( 'portfolio-item', $args );
}
add_action( 'init', 'portfolio_item_init' );
