<?php

	/* ========================================================================================================================

	Custom Post Types

	======================================================================================================================== */

	add_action( 'init', 'ns_register_customposts', 0 );
	function ns_register_customposts() {

		register_post_type('services',
			array(	'label' => 'services',
			'description' => 'services',
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
			'supports' => array('title','page-attributes'),
			'menu_position' => 28,
			// 'taxonomies' => array('category'),
			'labels' => array (
			'name' => 'Service Times',
			'singular_name' => 'Service Time',
			'menu_name' => 'Service Times',
			'add_new' => 'Add Service Time',
			'add_new_review' => 'Add New Service Time',
			'edit' => 'Edit',
			'edit_review' => 'Edit Service Time',
			'new_review' => 'New Service Time',
			'view' => 'View Service Time',
			'view_review' => 'View Service Time',
			'search_reviews' => 'Search Service Time',
			'not_found' => 'No Service Time Found',
			'not_found_in_trash' => 'No Service Time Found in Trash',
			'parent' => 'Parent Service Time',
		),) );
	}

	/* ========================================================================================================================

	Custom Meta Boxes

	======================================================================================================================== */

	include_once 'metaboxes/setup.php';

	include_once 'metaboxes/times-spec.php';
