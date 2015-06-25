<?php

// オートフォーマット関連の無効化
add_action('init', function() {
	remove_filter('the_title', 'wptexturize');
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	remove_filter('the_title', 'wpautop');
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_editor_content', 'wp_richedit_pre');
});

// オートフォーマット関連の無効化 TinyMCE
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = true;
	return $init;
});

//add custom field
function post_init() {
	// CPT
	include_once(dirname(__FILE__) .'/functions/CPT/QA.php');
	include_once(dirname(__FILE__) .'/functions/CPT/training.php');
	include_once(dirname(__FILE__) .'/functions/CPT/magazine.php');
	include_once(dirname(__FILE__) .'/functions/CPT/regionreport.php');
	include_once(dirname(__FILE__) .'/functions/CPT/report.php');
	//flush_rewrite_rules(false);

	// ACF
	include_once(dirname(__FILE__) .'/functions/ACF/QA.php');
	include_once(dirname(__FILE__) .'/functions/ACF/training.php');
	include_once(dirname(__FILE__) .'/functions/ACF/magazine.php');
	include_once(dirname(__FILE__) .'/functions/ACF/regionreport.php');
	include_once(dirname(__FILE__) .'/functions/ACF/report.php');
	include_once(dirname(__FILE__) .'/functions/ACF/post.php');
}
add_action('init', 'post_init');

add_action( 'user_profile_update_errors', 'remove_empty_email_error' );

function remove_empty_email_error( $arg ) {
	$empty_email = $arg->errors;
    if ( !empty($arg->errors['empty_email']) ){
    	unset($empty_email['empty_email']);
    	$arg->errors = $empty_email;
    };
}
function mb_wordwrap($string, $width=75, $break="\n", $cut = false) {
    if (!$cut) {
        $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.',}\b#U';
    } else {
        $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.'}#';
    }
    $string_length = mb_strlen($string,'UTF-8');
    $cut_length = ceil($string_length / $width);
    $i = 1;
    $return = '';
    while ($i < $cut_length) {
        preg_match($regexp, $string,$matches);
        $new_string = $matches[0];
        $return .= $new_string.$break;
        $string = substr($string, strlen($new_string));
        $i++;
    }
    return $return.$string;
}
?>