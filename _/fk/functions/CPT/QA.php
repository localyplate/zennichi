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
		'add_new' => 'Q&Aの追加',
		'add_new_item' => 'Q&Aの追加',
		'edit' => '編集',
		'edit_item' => 'Q&Aの編集',
		'new_item' => 'Q&Aの追加',
		'view' => 'Q&Aの表示',
		'view_item' => 'Q&Aの表示',
		'search_items' => 'Q&Aの検索',
		'not_found' => 'Q&Aはありません。',
		'not_found_in_trash' => 'ゴミ箱にQ&Aはありません。',
		'parent' => '親',
        )
    ));
register_taxonomy(
    'qa-cat', 
    'qa', 
    array(
        'hierarchical' => true, 
        'update_count_callback' => '_update_post_term_count',
        'label' => 'Q&Aのカテゴリー',
        'singular_label' => 'Q&Aのカテゴリー',
        'public' => true,
        'show_ui' => true,
        'sort' => true
    )
);