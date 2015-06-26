<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

register_post_type('report', array(
	'label' => '協会活動報告',
	'description' => 'report',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array(
		'slug' => 'report',
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
		'name' => '協会活動報告',
		'singular_name' => '協会活動報告',
		'menu_name' => '協会活動報告',
		'add_new' => '協会活動報告の追加',
		'add_new_item' => '協会活動報告の追加',
		'edit' => '編集',
		'edit_item' => '協会活動報告の編集',
		'new_item' => '協会活動報告の追加',
		'view' => '協会活動報告の表示',
		'view_item' => '協会活動報告の表示',
		'search_items' => '協会活動報告の検索',
		'not_found' => '協会活動報告はありません。',
		'not_found_in_trash' => 'ゴミ箱に協会活動報告はありません。',
		'parent' => '親',
        )
    ));
