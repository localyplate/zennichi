<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
register_field_group(array (
	'id' => 'acf_regionreport',
	'title' => '地方本部の動き',
	'fields' => array (
                array (
			'key' => 'field_regionreport_name',
			'label' => '県本部名',
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
			'key' => 'field_regionreport_abstract',
			'label' => '概要',
			'name' => 'abstract',
			'type' => 'textarea',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'formatting' => 'br',
			'instructions' => '一覧用',
		),
                array (
			'key' => 'field_regionreport_body',
			'label' => '本文',
			'name' => 'body',
			'type' => 'wysiwyg',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'formatting' => 'html',
			'instructions' => '',
		),
                array(
            'key' => 'field_regionreport_images',
			'label' => '添付写真',
			'name' => 'images',
			'type' => 'repeater',
			'sub_fields' => array(
		                array (
					'key' => 'field_regionreport_image',
					'label' => '写真',
					'name' => 'image',
					'type' => 'image',
					'required' => 0,
					'save_format' => 'object',
					'preview_size' => 'full',
					'library' => 'all',
					'instructions' => '',
					),
		                array (
					'key' => 'field_regionreport_caption',
					'label' => '注釈',
					'name' => 'caption',
					'type' => 'text',
					'required' => 0,
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'formatting' => 'html',
					'instructions' => '',
				)
       ),
			'row_min' => '',
            'row_limit' => '',
            'button_label' => '添付写真追加',
            'instructions' => '',
	),

	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'regionreport',
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

