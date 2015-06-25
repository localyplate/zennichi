<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

register_post_type('magazine', array(
	'label' => '月刊不動産',
	'description' => 'magazine',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array(
		'slug' => 'magazine',
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
		'name' => '月刊不動産',
		'singular_name' => '月刊不動産',
		'menu_name' => '月刊不動産',
		'add_new' => '月刊不動産の追加',
		'add_new_item' => '月刊不動産の追加',
		'edit' => '編集',
		'edit_item' => '月刊不動産の編集',
		'new_item' => '月刊不動産の追加',
		'view' => '月刊不動産の表示',
		'view_item' => '月刊不動産の表示',
		'search_items' => '月刊不動産の検索',
		'not_found' => '月刊不動産はありません。',
		'not_found_in_trash' => 'ゴミ箱に月刊不動産はありません。',
		'parent' => '親',
        )
    ));
