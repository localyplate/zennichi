<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

register_post_type('regionreport', array(
	'label' => '地方本部の動き',
	'description' => 'regionreport',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array(
		'slug' => 'regionreport',
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
		'name' => '地方本部の動き',
		'singular_name' => '地方本部の動き',
		'menu_name' => '地方本部の動き',
		'add_new' => '地方本部の動きの追加',
		'add_new_item' => '地方本部の動きの追加',
		'edit' => '編集',
		'edit_item' => '地方本部の動きの編集',
		'new_item' => '地方本部の動きの追加',
		'view' => '地方本部の動きの表示',
		'view_item' => '地方本部の動きの表示',
		'search_items' => '地方本部の動きの検索',
		'not_found' => '地方本部の動きはありません。',
		'not_found_in_trash' => 'ゴミ箱に地方本部の動きはありません。',
		'parent' => '親',
        )
    ));
