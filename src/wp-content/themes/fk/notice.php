<?php
/*
Template Name: notice
*/
?>
<?php get_header(); ?>
<div class="global_container_" id="fk-140">
<div class="group">
<div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/public">一般のお客様へ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">通達・告知</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/notice/title01.png" alt="通達・告知" width="640" height="68" title="通達・告知"></h2>
   <section class="section_news">
       <p class="m_top">こちらのページでは、各機関からの通達をご案内してまいります。<br>
安心して業務を進めていただくためにも、定期的な情報のご確認をよろしくお願いいたします。</p>
       <section class="section_news02">
       <?php 
              $paged = get_query_var('page');
              $per_page = $posts_per_page;
              $offset = 0;
               
              $paged = get_query_var('page');
              if(empty($paged)){
                  $paged = 1;
              }
               
              if($paged > 1){
                  $offset = intval(($paged - 1)) * $per_page;
              }
                $posts = get_posts(array(
              'posts_per_page'=> get_option('posts_per_page'),
              'offset'        => $offset,
              'category_name' => 'notice',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
              ?>
       <div class="parts_news">
           <p class="parts02_news"><span><?php echo get_the_date('Y/n/j'); ?></span>
 <!--          <?php
            $days = 10; //Newを表示させたい期間の日数
            $today = date_i18n('U');
            $entry = get_the_time('U');
            $kiji = date('U',($today - $entry)) / 86400 ;
            if( $days > $kiji ){
            echo '<img src="/wp-content/themes/fk/images/topics/ico_new.png" alt="NEW">';
            }?>--></p>
           <p class="parts03_news"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><span class="size14">＜発信：全日本不動産協会＞</span></p>
       </div>
       <div class="line_news"></div>
       <?php endforeach; ?>
       </section>
    </section>
     <?php
          $cat_id = get_category_by_slug("notice");
          $cat_id = $cat_id->cat_ID;
          $item_count = get_category($cat_id,false)->count;
          $pages = ceil($item_count / $per_page);
          ?>
      <?php include('pager.php');?>
      <?php my_pager($pages, $paged, get_post_type_archive_link('post'), 2);?>
    </div>
    <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>