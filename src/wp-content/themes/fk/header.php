<!doctype html>
<html>
 <head>
  <title><?php echo get_the_title(); ?> </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="description" content="Your site's description should be here">
  <meta name="keywords" content="Your site's keywords should be here">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style2.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <!--[if IE 6]>
	<style type="text/css">
		* html .group {
			height: 1%;
		}
	</style>
  <![endif]--> 
  <!--[if IE 7]>
	<style type="text/css">
		*:first-child+html .group {
			min-height: 1px;
		}
	</style>
  <![endif]--> 
  <!--[if lt IE 9]> 
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
  <![endif]--> 
     <?php wp_head(); ?>
     <script language="JavaScript">
    <!--
    $(document).ready(function() {
      var pagetop = $('.pagetop');
        $(window).scroll(function () {
           if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
                }
           });
           pagetop.click(function () {
               $('body, html').animate({ scrollTop: 0 }, 500);
                  return false;
       });
    });     
    function openMenu(n) {            //リストを開く
        closeMenu()            //表示中のリストを閉じる
        if(n == 1) {            //リスト１を開く
            onmousemenu01.style.display = "block";
        }
        if(n == 2) {            //リスト１を開く
            onmousemenu02.style.display = "block";
        }
        if(n == 3) {            //リスト１を開く
            onmousemenu03.style.display = "block";
        }
    }
    function closeMenu() {            //リストを閉じる
        onmousemenu01.style.display = "none";
        onmousemenu02.style.display = "none";
        onmousemenu03.style.display = "none";
    }
    
    // SI追記
     jQuery(function() {
      jQuery('.switch_btn_area').click(function(){
        jQuery('#oshirase_tab_pub').toggleClass('d_none');
        jQuery('#oshirase_tab_kai').toggleClass('d_none');
      });
    });
    //-->
    </script>
 </head>
 <body>