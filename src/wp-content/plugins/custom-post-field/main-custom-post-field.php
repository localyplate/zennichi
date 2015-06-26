<?php 
	/*
	Plugin Name: Custom Post Field for Zennichi
	Plugin URI: https://
	Description: for Zennichi PP
	Version: 1.0.0
	Author: Nguyen Hoang Vu
	Author URI: https://www.facebook.com/nguyen.h.vu.79/
	*/

	$tb_postype = $wpdb->prefix . 'post_type';
	function plugin_install() {
	    global $wpdb;
	    global $tb_postype;

	    $charset_collate = $wpdb->get_charset_collate();
	    $rt = $wpdb->get_var("show tables like '$tb_postype");
	    if ($rt != $tb_postype) {
	        $sql = "CREATE TABLE " . $tb_postype . " (
	            `id` int(10) NOT NULL AUTO_INCREMENT,
				`type_name` varchar(40) NOT NULL,
				UNIQUE KEY id (id)
	            ) $charset_collate;";

	        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	        dbDelta($sql);

	    }
	}
	
	register_activation_hook(__FILE__, 'plugin_install');
	add_action('plugins_loaded', 'plugin_install');

	//Add menu plugin
	function cpf_main_menu() {
	   add_menu_page( 'Custom field', 'Custom field', "read", 'cpf_main_pages', 'cpf_menu_options' , 128 );
	}

	function cpf_menu_options() {
		require_once 'inc/cpf-point-list.php';
	}
	add_action('admin_menu', 'cpf_main_menu');

	//get all type list
	function cpf_get_list_type(){
		global $wpdb;

		$sql=$wpdb->get_results("select * from wp_post_type", ARRAY_A);

		return $sql;
	}

	function cpf_add(){
		require_once 'inc/cpf-point-add.php';
	}

	function cpt_add_type(){
		add_menu_page( 'Add type', 'Add type', "read", 'cpt_add_type', 'cpf_add' , 129 );
	}
	add_action('admin_menu', 'cpt_add_type');

	function add_type_point(){
		if(!empty($_POST)){
			global $wpdb;
			$format = array(
                '%s',
                '%s'
            );
			$sql = $wpdb->insert('wp_post_type',array('id'=>'','type_name'=>$_POST['point_name']),$format);
			if($sql){
				echo 'Add new type point successful';
			}
		}
	}
	add_action('process_add_point', 'add_type_point');
?>