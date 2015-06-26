<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

register_post_type('training', array(
	'label' => '研修情報',
	'description' => '',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array(
		'slug' => '研修情報',
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
		'name' => '研修情報',
		'singular_name' => '研修情報',
		'menu_name' => '研修情報',
		'add_new' => 'Add 研修情報の追加',
		'add_new_item' => 'Add 研修情報の追加',
		'edit' => 'Edit',
		'edit_item' => 'Edit 研修情報の編集',
		'new_item' => 'New 研修情報の追加',
		'view' => 'View 研修情報の追加',
		'view_item' => 'View 研修情報の追加',
		'search_items' => 'Search 研修情報の追加',
		'not_found' => 'No 研修情報の追加 Found',
		'not_found_in_trash' => 'No 研修情報の追加 Found in Trash',
		'parent' => 'Parent 研修情報の追加',
        )
    ));
