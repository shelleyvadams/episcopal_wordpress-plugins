<?php

	/* ========================================================================================================================

	Custom Post Types

	======================================================================================================================== */

	add_action( 'init', 'ns_register_customposts', 0 );
	function ns_register_customposts() {

		register_post_type('people',
			array(	'label' => 'people',
			'description' => 'people',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'capability_type' => 'page',
			'hierarchical' => true,
			'query_var' => true,
			'has_archive' => false,
			'rewrite' => true,
			'exclude_from_search' => true,
			'supports' => array('title','page-attributes','thumbnail'),
			'menu_position' => 28,
			// 'taxonomies' => array('category'),
			'labels' => array (
			'name' => 'Parish Leaders',
			'singular_name' => 'Person',
			'menu_name' => 'Parish Leaders',
			'add_new' => 'Add Person',
			'add_new_review' => 'Add New Person',
			'edit' => 'Edit',
			'edit_review' => 'Edit Person',
			'new_review' => 'New Person',
			'view' => 'View Person',
			'view_review' => 'View Person',
			'search_reviews' => 'Search Person',
			'not_found' => 'No Person Found',
			'not_found_in_trash' => 'No Person Found in Trash',
			'parent' => 'Parent Person',
		),) );

	}

	/* ========================================================================================================================

	Custom Meta Boxes

	======================================================================================================================== */

	include_once 'metaboxes/setup.php';

	include_once 'metaboxes/bio-spec.php';

	include_once 'metaboxes/map-spec.php';
