<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
register_field_group(array (
	'id' => 'acf_qa',
	'title' => '',
	'fields' => array (
                array (
			'key' => 'field_qa_author_name',
			'label' => '',
			'name' => 'label',
			'type' => 'text',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
			'instructions' => '',
		),
                array (
			'key' => 'field_qa_author_company',
			'label' => '',
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
			'key' => 'field_qa_question',
			'label' => '',
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
			'key' => 'field_qa_answer',
			'label' => '',
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
			'key' => 'field_qa_magazine_number',
			'label' => '',
			'name' => 'label',
			'type' => 'text',
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
				'value' => 'qa',
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

