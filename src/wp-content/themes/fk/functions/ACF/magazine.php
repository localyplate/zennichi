<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
register_field_group(array (
	'id' => 'acf_magazine',
	'title' => '月刊不動産',
	'fields' => array (
                array (
			'key' => 'field_magazine_subtitle',
			'label' => 'サブタイトル',
			'name' => 'label',
			'type' => 'text',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'formatting' => 'html',
			'instructions' => '',
		),
                array (
			'key' => 'field_magazine_date',
			'label' => '号数',
			'name' => 'number',
			'type' => 'number',
			'required' => 0,
			'default_value' => '',
			'prepend' => '半角で年月を入力して下さい',
         	'min' => '200912',
         	'max' => '210012',
			'placeholder' => '201504',
			'formatting' => 'html',
			'instructions' => '',
		),
                array (
			'key' => 'field_magazine_heading',
			'label' => '目次',
			'name' => 'heading',
			'type' => 'wysiwyg',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'formatting' => 'html',
			'instructions' => '',
		),
                array (
			'key' => 'field_magazine_image',
			'label' => '表紙画像',
			'name' => 'image',
			'type' => 'image',
			'required' => 0,
			'save_format' => 'object',
			'preview_size' => 'full',
			'library' => 'all',
			'instructions' => '',
		),
                array (
			'key' => 'field_magazine_file',
			'label' => 'PDFファイル',
			'name' => 'file',
			'type' => 'file',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'formatting' => 'html',
			'instructions' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'magazine',
				'order_no' => 0,
				'group_no' => 0,
			),
		),
	),
	'options' => array (
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
                        //0 => 'the_content',
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'custom_fields',
			4 => 'discussion',
			5 => 'comments',
			6 => 'revisions',
			7 => 'slug',
			8 => 'author',
			9 => 'format',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
	),
	'menu_order' => 0,
));

