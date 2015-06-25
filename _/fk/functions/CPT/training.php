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
		'slug' => 'training',
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
		'add_new' => '研修情報の追加',
		'add_new_item' => '研修情報の追加',
		'edit' => '編集',
		'edit_item' => '研修情報の編集',
		'new_item' => '研修情報の追加',
		'view' => '研修情報の表示',
		'view_item' => '研修情報の表示',
		'search_items' => '研修情報の検索',
		'not_found' => '研修情報はありません。',
		'not_found_in_trash' => 'ゴミ箱に研修情報はありません。',
		'parent' => '親',
        )
    ));
