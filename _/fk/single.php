<?php
$post = $wp_query->post;
if( is_user_logged_in() && get_post_type( $post ) == 'post'){
  include(TEMPLATEPATH.'/single-public-info.php');
};
