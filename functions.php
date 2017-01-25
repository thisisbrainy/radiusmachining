<?php

// add
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_action('init', 'create_post_type_slider');

// register
register_nav_menu('primary_navigation', 'Primary Navigation');
register_nav_menu('secondary_navigation', 'Secondary Navigation');

pll_register_string('txt1', 'RADIUS Machining OÜ', false);
pll_register_string('txt2', 'Meie tegevusaladeks on CNC treimis-, freesimis-, keevitustööde ja laserlõikuse allhange. Meie kodulehelt leiate täpsemat infot erinevate võimaluste kohta. Täpsustavad küsimused või päringud saatke:
			radius[at]radius.ee või +372 503 2310', false);
pll_register_string('txt3', 'Loovälja tee 5, 75401 Kiili, Harjumaa, ESTONIA', false);

// slider post type
function create_post_type_slider() {

	register_post_type(
		'slider',
		array(
			'labels' => array(
				'name' => 'Slides',
				'singular_name' => 'Slide'
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array(
				'title',
				'thumbnail'
			)
		)
	);

}
