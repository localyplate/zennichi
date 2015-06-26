<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

register_post_type('qa', array(
	'label' => 'Q&A',
	'description' => '',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array(
		'slug' => 'qa',
		'with_front' => true,
	),
	'query_var' => true,
	'has_archive' => true,
	'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'comments',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',
		'post-formats',
	),
	'labels' => array (
		'name' => 'Q&A',
		'singular_name' => 'Q&A',
		'menu_name' => 'Q&A',
		'add_new' => 'Add Q&A',
		'add_new_item' => 'Add New Q&A',
		'edit' => 'Edit',
		'edit_item' => 'Edit Q&A',
		'new_item' => 'New Q&A',
		'view' => 'View Q&A',
		'view_item' => 'View Q&A',
		'search_items' => 'Search Q&A',
		'not_found' => 'No Q&A Found',
		'not_found_in_trash' => 'No Q&A Found in Trash',
		'parent' => 'Parent Q&A',
        )
    ));
