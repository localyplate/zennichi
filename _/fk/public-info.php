<?php
/*
Template Name:archive-public-info
*/
?>
<?php get_header(); ?>
	<div class="global_container_" id="fk-017">
    <div class="group">
      <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/public">一般のお客様へ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">お知らせ一覧</p>
     </div>
    <div class="leftbox">
    <h2><img src="/wp-content/themes/fk/images/knowledge/title01.png" alt="一般のお客様へ" width="640" height="68" title="一般のお客様へ"></h2>
      <section class="section_news">
      <h3>お知らせ一覧</h3>
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

              $cat_id_01 = get_category_by_slug('一般向け');
              $cat_id_02 = get_category_by_slug('お知らせ');
              $cat_id_01 = $cat_id_01->cat_ID;
              $cat_id_02 = $cat_id_02->cat_ID;

                $posts = get_posts(array(
              'posts_per_page'=> get_option('posts_per_page'),
              'offset'        => $offset,
              'category__and' =>  array($cat_id_01,$cat_id_02),
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
             ?>
           <div class="parts_news">
           <p class="parts02_news"><span><?php echo get_the_date('Y/n/j');?></span>
            <p class="parts03_news"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </div>
        <div class="line_news"></div>
      <?php endforeach; ?>
       </section>
    </section>
          <?php
          $posts = get_posts(array(
              'category__and' =>  array($cat_id_01,$cat_id_02),
              'post_status'   => 'publish'
             ));
          $item_count = count($posts);
          $pages = ceil($item_count / $per_page);
          ?>
      <?php include('pager.php');?>
      <?php my_pager($pages, $paged, get_post_type_archive_link('post'), 2);?>
      </div>
<?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>