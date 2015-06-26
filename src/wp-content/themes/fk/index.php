<?php get_template_part('header-top'); ?>
    <img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/image_147.png" alt="不動産取引の際は 安心の信頼の全日本不動産協会 会員のお店をご利用下さい" width="800" height="187" title="不動産取引の際は 安心の信頼の全日本不動産協会 会員のお店をご利用下さい">
    <div class="group">
     <div id="top">
      <div class="no-space-between-inline-blocks">
       <a href="#kensyujoho"><img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/image_105.png" alt="" width="190" height="47"></a>
       <a href="#new_faq"><img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/image_106.png" alt="" width="190" height="47"></a>
       <a href="#local_search"><img src="<?php bloginfo('url'); ?>/wp-content/themes/fk/images/top/image_107.png" alt="" width="190" height="47"></a>
      </div>
          <section id="oshirase_tab_pub" class="section group">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/image_104.png" alt="" usemap="#oshirase" width="640" height="52">
          <map name="oshirase">
            <area onclick="execute1()" shape="rect" alt="" coords="495,10,640,45">
          </map>
            <?php $posts = get_posts( array(
              'posts_per_page' => 3,
              'category_name' => '一般向け',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
             ?>
       <div class="parts01 group">
            <div class="news_right">
           <p class="parts02"><span><?php echo get_the_date('Y/n/j'); ?></span>
           <?php $cats= get_the_category();
           foreach($cats as $cat):
            if($cat->cat_name != '一般向け'){if($cat->cat_name != '会員向け'){echo '<span class="category_terms">' .$cat->cat_name. '</span>';}}
          endforeach;
           ?>
           <!--<img src="<?php echo get_template_directory_uri(); ?>/images/top/image_83.png" alt="" width="111" height="20"></p>-->
            <p class="parts03"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></p>
           </div>
       </div>
       <div class="parts04"></div>
       <?php endforeach; ?>
         <div class="parts12 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/arrow_up_6.png" alt="" width="15" height="15">
        <p><a href="<?php home_url(); ?>/public/info/">お知らせ一覧へ</a></p>
       </div>
       </section>
       <section id="oshirase_tab_kai" class="section group d_none">
       <img src="<?php echo get_template_directory_uri(); ?>/images/top/image_162.png" alt="" usemap="#oshirase2" width="640" height="52">
          <map name="oshirase2">
            <area onclick="execute2()" shape="rect" alt="" coords="275,10,475,45">
          </map>
            <?php $posts = get_posts( array(
              'posts_per_page' => 3,
              'category_name' => '会員向け',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
             ?>
       <div class="parts01 group">
            <div class="news_right">
           <p class="parts02"><span><?php echo get_the_date('Y/n/j'); ?></span>
           <?php $cats= get_the_category();;
           foreach($cats as $cat):
            if($cat->cat_name != '一般向け'){if($cat->cat_name != '会員向け'){echo '<span class="category_terms">' .$cat->cat_name. '</span> ';}}
          endforeach;
           ?>
           <!--<img src="<?php echo get_template_directory_uri(); ?>/images/top/image_83.png" alt="" width="111" height="20"></p>-->
            <p class="parts03">
            <?php if(is_user_logged_in()){
              $link = get_permalink();
            } else {
              $link = '#';
            }
            ?>
            <a href='<?php echo $link?>'><?php the_title( ); ?></a></p>
           </div>
       </div>
       <div class="parts04"></div>
       <?php endforeach; ?>
      <div class="parts12 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/arrow_up_6.png" alt="" width="15" height="15">
        <p><a href="/kaiin/info/">お知らせ一覧へ</a></p>
       </div>
      </section>
      <section class="section-2 group" id="kensyujoho">
       <img src="<?php echo get_template_directory_uri(); ?>/images/top/44.png" alt="" width="640" height="52">
       <?php
          $posts = get_posts(array(
              'posts_per_page' => 3,
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'training',
              'post_status'   => 'publish'
           ));
          foreach($posts as $post):
       ?>
       <div class="module0 module0-0 group">
       <span class="training_region_name"><?php echo the_field('field_training_region'); ?><br/>から</span>
       <!--<img class="news_left" src="<?php echo get_template_directory_uri(); ?>/images/top/news_ico.png" alt="" width="72" height="72">-->
        <p class="module1-p1"><span><?php echo get_the_date('Y/n/j'); ?></span></p>
        <p class="module1-p2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
       </div>
       <div class="parts13"></div>
   		<?php endforeach; ?>
       <div class="parts15 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/arrow_up_5.png" alt="" width="15" height="15">
        <p><a href="<?php echo get_post_type_archive_link('training'); ?>">研修情報一覧へ</a></p>
       </div>
      </section>
      <section class="section-3 group" id="new_faq">
          <img class="faq_tab1" src="<?php echo get_template_directory_uri(); ?>/images/top/46.png" alt="" width="640" height="52">
           <?php
          $posts = get_posts(array(
              'posts_per_page' => 4,
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'QA',
              'post_status'   => 'publish'
           ));
          foreach($posts as $post):
       ?>
        <div class="parts16 group">
        <p class="parts17"><span><?php echo get_the_date('Y/n/j'); ?></span><?php $terms = get_the_terms($post->ID,'qa-cat'); foreach($terms as $term){echo '<span class="category_terms">' .$term->name .'</span>';}; ?></span></p>
        <p class="parts18"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
       </div>
       <div class="parts19"></div>
   		<?php endforeach; ?>
       <div class="parts27 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/arrow_up_4.png" alt="" width="15" height="15">
        <p><a href="<?php echo get_post_type_archive_link('qa'); ?>">Q&amp;A一覧へ</a></p>
       </div>
      </section>
      <section class="section-4 group" id="local_search">
       <!-- 日本地図 -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/star.jpg" alt="" usemap="#localsearch" width="599" height="513">
          <map name="localsearch">
            <area href="#" shape="rect" alt="福岡" coords="108,342,172,380">
            <area href="#" shape="rect" alt="大分" coords="138,381,172,420">  
            <area href="#" shape="rect" alt="宮崎" coords="138,421,172,460">
            <area href="#" shape="rect" alt="熊本" coords="106,381,135,460">  
            <area href="#" shape="rect" alt="鹿児島" coords="106,462,172,503">
            <area href="#" shape="rect" alt="佐賀" coords="87,342,107,390">
            <area href="#" shape="rect" alt="長崎" coords="67,342,86,390">
            <area href="#" shape="rect" alt="沖縄" coords="69,462,92,500">
              
            <area href="#" shape="rect" alt="高知" coords="187,472,240,503">
            <area href="#" shape="rect" alt="徳島" coords="241,472,294,503">
            <area href="#" shape="rect" alt="愛媛" coords="187,440,240,471">
            <area href="#" shape="rect" alt="香川" coords="241,440,294,471">
              
            <area href="#" shape="rect" alt="山口" coords="187,342,215,425">
            <area href="#" shape="rect" alt="島根" coords="217,342,243,382">
            <area href="#" shape="rect" alt="広島" coords="217,383,243,425">
            <area href="#" shape="rect" alt="鳥取" coords="246,342,274,382">
            <area href="#" shape="rect" alt="岡山" coords="246,383,274,425">
              
            <area href="#" shape="rect" alt="兵庫" coords="276,342,304,425">
            <area href="#" shape="rect" alt="大阪" coords="305,404,330,460">
            <area href="#" shape="rect" alt="奈良" coords="331,404,355,480">
            <area href="#" shape="rect" alt="滋賀" coords="358,365,379,404">
            <area href="#" shape="poly" alt="京都" coords="306,342,331,342,331,365,356,365,356,404,306,404">
            <area href="#" shape="poly" alt="和歌山" coords="305,460,330,460,330,480,355,480,356,503,305,503">
              
            <area href="#" shape="poly" alt="福井" coords="331,342,358,342,356,321,381,321,379,365,331,365">
            <area href="#" shape="poly" alt="長野" coords="411,323,448,323,448,404,432,404,432,438,411,438">
            <area href="#" shape="rect" alt="三重" coords="356,404,380,503">
            <area href="#" shape="rect" alt="石川" coords="356,255,380,321">
            <area href="#" shape="rect" alt="富山" coords="382,280,419,321">
            <area href="#" shape="rect" alt="岐阜" coords="381,323,411,439">
            <area href="#" shape="rect" alt="愛知" coords="381,440,420,480">
            <area href="#" shape="rect" alt="静岡" coords="422,440,469,480">
            <area href="#" shape="rect" alt="山梨" coords="432,405,469,439">
              
            <area href="#" shape="rect" alt="神奈川" coords="470,440,510,465">
            <area href="#" shape="rect" alt="群馬" coords="451,322,488,363">
            <area href="#" shape="rect" alt="栃木" coords="489,322,526,363">
            <area href="#" shape="rect" alt="茨城" coords="528,322,563,380">
            <area href="#" shape="rect" alt="千葉" coords="528,381,563,480">
            <area href="#" shape="rect" alt="埼玉" coords="451,364,526,405">
            <area href="#" shape="poly" alt="東京" coords="471,405,528,405,528,430,510,430,510,438,471,438">
            <area href="#" shape="poly" alt="新潟" coords="421,280,445,280,445,265,471,265,471,321,421,321">
              
            <area href="#" shape="rect" alt="福島" coords="474,280,563,321">
            <area href="#" shape="rect" alt="宮城" coords="504,237,563,279">
            <area href="#" shape="rect" alt="岩手" coords="504,194,563,235">
            <area href="#" shape="rect" alt="秋田" coords="445,194,503,235">
            <area href="#" shape="rect" alt="青森" coords="445,162,563,193">
            <area href="#" shape="poly" alt="山形" coords="445,235,503,235,503,280,474,280,474,265,445,265">
            <area href="#" shape="poly" alt="北海道" coords="448,152,486,152,486,130,596,130,596,35,448,35">
          </map>
         <!-- 日本地図 -->
       <div class="parts28 group">
        <p class="parts29">北海道</p>
        <p class="parts30"><a href="#">北海道</a></p>
       </div>
       <div class="parts31 module2 group">
        <img class="parts32" src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="parts33 group">
         <p class="parts34 module2-p1">東北</p>
         <p class="parts35 module2-p2"><a href="#">青森</a></p>
         <p class="parts36"><a href="#">岩手</a></p>
         <p class="parts37"><a href="#">宮城</a></p>
         <p class="parts38"><a href="#">秋田</a></p>
         <p class="parts39"><a href="#">山形</a></p>
         <p class="parts40"><a href="#">福島</a></p>
        </div>
       </div>
       <div class="module1 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="group">
         <p class="module3-p1 diff0-3">関東</p>
         <p class="module3-p2"><a href="#">茨城</a></p>
         <p class="module3-p3 diff0-5"><a href="#">栃木</a></p>
         <p class="module3-p4 diff0-6"><a href="#">群馬</a></p>
         <p class="module3-p5"><a href="#">埼玉</a></p>
         <p class="module3-p6"><a href="#">千葉</a></p>
         <p class="module3-p7"><a href="#">東京</a></p>
         <p class="module3-p8"><a href="#">神奈川</a></p>
         <p class="parts41"><a href="#">新潟</a></p>
         <p class="parts42"><a href="#">山梨</a></p>
        </div>
       </div>
       <div class="module1 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="group">
         <p class="module3-p1 diff1-3">中部</p>
         <p class="module3-p2"><a href="#">富山</a></p>
         <p class="module3-p3 diff1-5"><a href="#">石川</a></p>
         <p class="module3-p4 diff1-6"><a href="#">福井</a></p>
         <p class="module3-p5"><a href="#">長野</a></p>
         <p class="module3-p6"><a href="#">岐阜</a></p>
         <p class="module3-p7"><a href="#">静岡</a></p>
         <p class="module3-p8"><a href="#">愛知</a></p>
         <p class="parts43"><a href="#">三重</a></p>
        </div>
       </div>
       <div class="parts44 group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="parts45 group">
         <p class="parts46">近畿</p>
         <p class="parts47"><a href="#">滋賀</a></p>
         <p class="parts48"><a href="#">京都</a></p>
         <p class="parts49"><a href="#">大阪</a></p>
         <p class="parts50"><a href="#">兵庫</a></p>
         <p class="parts51"><a href="#">奈良</a></p>
         <p class="parts52"><a href="#">和歌山</a></p>
        </div>
       </div>
       <div class="module2 module2-0 group">
        <img class="diff0-1" src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="diff0-2 group">
         <p class="module2-p1 diff0-3">中国</p>
         <p class="module2-p2 diff0-4"><a href="#">鳥取</a></p>
         <p class="parts53"><a href="#">島根</a></p>
         <p class="parts54"><a href="#">岡山</a></p>
         <p class="parts55"><a href="#">広島</a></p>
         <p class="parts56"><a href="#">山口</a></p>
        </div>
       </div>
       <div class="module2 module2-1 group">
        <img class="diff1-1" src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="diff1-2 group">
         <p class="module2-p1 diff1-3">四国</p>
         <p class="module2-p2 diff1-4"><a href="#">徳島</a></p>
         <p class="parts57"><a href="#">香川</a></p>
         <p class="parts58"><a href="#">愛媛</a></p>
         <p class="parts59"><a href="#">高知</a></p>
        </div>
       </div>
       <div class="module2 module2-3 group">
        <img class="diff3-1" src="<?php echo get_template_directory_uri(); ?>/images/top/image_23.png" alt="" width="600" height="1">
        <div class="diff3-2 group">
         <p class="module2-p1 diff3-3">九州・沖縄</p>
         <p class="module2-p2 diff3-4"><a href="#">福岡</a></p>
         <p class="parts60"><a href="#">佐賀</a></p>
         <p class="parts61"><a href="#">長崎</a></p>
         <p class="parts62"><a href="#">熊本</a></p>
         <p class="parts63"><a href="#">大分</a></p>
         <p class="parts64"><a href="#">宮崎</a></p>
         <p class="parts65"><a href="#">鹿児島</a></p>
         <p class="module2-p2 diff4-4"><a href="#">沖縄</a></p>
        </div>
       </div>
      </section>
      <a class="search_kaiin" href="/member_search/"><img src="<?php echo get_template_directory_uri(); ?>/images/top/image_13.png" alt="" width="640" height="70"></a>
     </div><!-- top -->
<?php get_template_part('sidebar-top'); ?>
<?php get_template_part('footer-top'); ?>