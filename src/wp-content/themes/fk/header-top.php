
<!doctype html>
<html>
 <head>
  <title><?php bloginfo('name');?></title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="description" content="Your site's description should be here">
  <meta name="keywords" content="Your site's keywords should be here">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/fk/css/reset.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/fk/css/top.css">
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
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
  <link rel='stylesheet' id='theme-my-login-css'  href='<?php bloginfo('url'); ?>/wp-content/plugins/theme-my-login/theme-my-login.css?ver=6.3.11' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='<?php bloginfo('url'); ?>/wp-includes/css/dashicons.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='<?php bloginfo('url'); ?>/wp-includes/css/admin-bar.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='theme-my-login-ajax-css'  href='<?php bloginfo('url'); ?>/wp-content/plugins/theme-my-login/modules/ajax/css/ajax.css?ver=4.1.1' type='text/css' media='all' />
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpAjax = {"noPerm":"\u64cd\u4f5c\u3092\u5b9f\u884c\u3059\u308b\u6a29\u9650\u304c\u3042\u308a\u307e\u305b\u3093\u3002","broken":"\u4e0d\u660e\u306a\u30a8\u30e9\u30fc\u304c\u767a\u751f\u3057\u307e\u3057\u305f\u3002"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-includes/js/wp-ajax-response.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/theme-my-login/modules/ajax/js/ajax.js?ver=4.1.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php bloginfo('url'); ?>/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/zennichi-login-system/js/login.js"></script><style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
     <script language="JavaScript">
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
    function execute1(){
      var elem = document.getElementById('oshirase_tab_pub');
      elem.className = 'section group d_none';
      var elem = document.getElementById('oshirase_tab_kai');
      elem.className = 'section group';
    }
    function execute2(){
      var elem = document.getElementById('oshirase_tab_pub');
      elem.className = 'section group';
      var elem = document.getElementById('oshirase_tab_kai');
      elem.className = 'section group d_none';
    }
    </script>
    <?php wp_head(); ?>
 </head>
 <body>
  <div id="wrap" class="global_container_">
   <header>
    <div class="header-div-1"></div>
    <div class="header-div-2 group">
     <h1><a href="<?php bloginfo('url'); ?>" class="header-a-1"><img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/image_161.png" alt="公益社団法人　全日本不動産協会" width="281" height="55"></a></h1>
     <div class="header-div-3">
      <div class="header-div-4 module7 group">
       <img class="header-img-2" src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/arrow_up_5.png" alt="" width="15" height="15">
       <p><a href="#">サイトマップ</a></p>
      </div>
      <div class="header-div-5 group">
       <img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/arrow_up_5.png" alt="" width="15" height="15">
       <p><a href="#">ログインの説明はコチラ</a></p>
      </div>
     </div>
     <a href="#" class="header-a-4"></a>
     <div class="header-div-6">
      <div class="search_header">
       <input type="text" name="in_text" placeholder="" form="auto-generated-form">
       <a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/link.png" alt="" width="17" height="17"></a>
      </div>
         <div class="rabby_count">
             <p class="small">協会加盟会員数</p>
             <p class="count"><?php echo  count(get_users()) - 1; ?></p>
         </div>
     </div>
    </div>
    <div class="header-div-8 group">
     <a href="<?php bloginfo('url'); ?>" class="header-a-6"></a>
     <a href="/about/" class="header-a-7" onMouseover="openMenu(1)" onMouseout="closeMenu()"></a>
     <a href="#" class="header-a-8" onMouseover="openMenu(2)" onMouseout="closeMenu()"></a>
     <a href="#" class="header-a-9" onMouseover="openMenu(3)" onMouseout="closeMenu()"></a>
    </div>
   </header>   <div class="group">
       <!-- onmouse menu ↓-->
    <div class="onmousemenu01" id="onmousemenu01" onMouseover="openMenu(1)" onMouseout="closeMenu()">
        <div class="line01">
            <a href="/about/activity/" class="onm jigyo">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="/about/history/" class="onm enkaku">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="/about/chart/" class="onm soshiki">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="/about/info-ir/" class="onm disclosure">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="/about/report/" class="onm report">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
        </div>
        <div class="line02">
            <a href="/about/privacy_statement/" class="onm privacy">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="/about/guideline/" class="onm guideline">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm chigai">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm rabby">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
        </div>
    </div>
    <div class="onmousemenu02" id="onmousemenu02" onMouseover="openMenu(2)" onMouseout="closeMenu()">
        <div class="line01">
            <a href="/public/knowledge/" class="onm baseknowledge">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm kenshu">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm shikaku">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm compl">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm FAQ">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
        </div>
        <div class="line02">
            <a href="#" class="onm hourei">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm kokuchi">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm sagasu">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm gekkan">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm takken">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
        </div>
    </div>
    <div class="onmousemenu03" id="onmousemenu03" onMouseover="openMenu(3)" onMouseout="closeMenu()">
        <div class="line01">
            <a href="#" class="onm nyukai">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm kaigyou">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
            <a href="#" class="onm chihou">
                <p class="">ダミー文章が入っています。<br>ダミー文章が入っています。</p>
            </a>
        </div>
    </div>
    <!-- onmouse menu ↑-->