<?php
/*
Template Name:archive-info
*/
?>
<?php get_header(); ?>
	<div class="global_container_" id="fk-002">
    <div class="group">
     <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">お知らせ</p>
     </div>
    <div id="oshirase_tab_pub" class="leftbox">
      <section class="section_news">
          <img src="/wp-content/themes/fk/images/top/image_104.png" alt="" usemap="#oshirase" width="640" height="52">
          <map name="oshirase">
            <area class="switch_btn_area" shape="rect" alt="" coords="495,10,640,45">
          </map>

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
              'category_name' => '一般向け',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
             ?>
           <div class="parts_news">
           <p class="parts02_news"><span><?php echo get_the_date('Y/n/j'); ?></span>
           <?php $cats= get_the_category();
           foreach($cats as $cat):
            if($cat->cat_name != '一般向け'){if($cat->cat_name != '会員向け'){echo '<span>' .$cat->cat_name. '</span>';}}
          endforeach; ?></p>
            <p class="parts03_news"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </div>
        <div class="line_news"></div>
      <?php endforeach; ?>
       </section>
    </section>
          <?php
          $cat_id = get_category_by_slug("一般向け");
          $cat_id = $cat_id->cat_ID;
          $item_count = get_category($cat_id,false)->count;
          $pages = ceil($item_count / $per_page);
          ?>
      <?php include('pager.php');?>
      <?php my_pager($pages, $paged, get_post_type_archive_link('post'), 2);?>
      </div>
      <div id="oshirase_tab_kai" class="leftbox d_none">
    <section  class="section_news">
          <img src="/wp-content/themes/fk/images/top/image_162.png" alt="" usemap="#oshirase2" width="640" height="52">
          <map name="oshirase2">
            <area class="switch_btn_area" shape="rect" alt="" coords="275,10,475,45">
          </map>
       <section class="section_news02">
              <?php $posts = get_posts( array(
              'posts_per_page'=> get_option('posts_per_page'),
              'offset'        => $offset,
              'category_name' => '会員向け',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
             ?>
           <div class="parts_news">
           <p class="parts02_news"><span><?php echo get_the_date('Y/n/j') ?></span>
           <span><?php $cats= get_the_category();
           foreach($cats as $cat):
            if($cat->cat_name != '一般向け'){
              if($cat->cat_name != '会員向け'){
                echo $cat->cat_name. ' ';}}
          endforeach; ?>
          </span></p>
            <p class="parts03_news">
            <?php if(is_user_logged_in()): ?>
              <a class="n_textlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php else : ?>
            <?php the_title(); ?>
          <?php endif; ?>
            </p>
        </div>
        <div class="line_news"></div>
      <?php endforeach; ?>
       </section>
    </section>
          <?php
          $cat_id = get_category_by_slug("会員向け");
          $cat_id = $cat_id->cat_ID;
          $item_count = get_category($cat_id,false)->count;
          $pages = ceil($item_count / $per_page);
          ?>
      <?php my_pager($pages, $paged, get_post_type_archive_link('post'), 2);?>
</div>
<?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>