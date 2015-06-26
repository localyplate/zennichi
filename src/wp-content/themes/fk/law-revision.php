<?php
/*
Template Name: law-revision
*/
?>

<?php get_header(); ?>
<div class="global_container_" id="fk-138">
<div class="group">
     <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/public">一般のお客様へ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">法令改正情報</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/law_revision/title01.png" alt="法令改正情報" width="640" height="68" title="法令改正情報"></h2>
   <section class="section_news">
       <p>こちらのページでは、法令改正に関係する情報をご案内します。<br>
既に施行された法令だけでなく、これから改正される法令に関しても先取りしてお伝えします。</p>
          <h3>法令改正情報一覧</h3>
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
              'category_name' => 'law_revision',
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'post',
              'post_status'   => 'publish'
             ));
             foreach($posts as $post) : 
              ?>
       <div class="parts_news">
           <p class="parts02_news"><span><?php echo get_the_date('Y/n/j'); ?></span></p>
            <p class="parts03_news"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
       </div>
       <div class="line_news"></div>
     <?php endforeach; ?>
       </section>
    </section>
     <?php
          $cat_id = get_category_by_slug("law_revision");
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