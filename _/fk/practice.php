<?php
/*
Template Name: practice
*/
?>
<?php get_header(); ?>
<div class="global_container_" id="fk-178">
<div class="group">
<div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">開業・当会入会をご検討の方へ</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/practice/title01.png" alt="開業・当会入会をご検討の方へ" width="640" height="68" title="開業・当会入会をご検討の方へ"></h2>
   <section class="section_news">
       <p class="m_top">これはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミー</p>
       <div class="h4">
            <h4>お知らせ</h4>
            <div></div>
        </div>
       <section class="section_news02">
       <?php 
                $posts = get_posts(array(
              'posts_per_page'=> 3,
              'category_name' => 'practice',
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
       <div class="parts12_news">
        <img src="/wp-content/themes/fk/images/top/arrow_up_6.png" alt="" width="15" height="15">
        <p><a class="n_textlink" href="/practice/info/">お知らせ一覧へ</a></p>
       </div>
    </section>

    <section class="section knowredge">
        <h3>入会のご案内</h3>
        <p>これはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミー</p>
        <p class="btn_link">
              <a href="#"><img src="/wp-content/themes/fk/images/practice/info/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/practice/info/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/practice/info/btn01.png'" alt="詳細ページへ" title="詳細ページへ"></a>
         </p>
    </section>
        
    <section class="section knowredge">
        <h3>開業をお考えの方へ</h3>
        <p>これはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミーこれはダミー</p>
        <p class="btn_link">
              <a href="#"><img src="/wp-content/themes/fk/images/practice/info/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/practice/info/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/practice/info/btn01.png'" alt="詳細ページへ" title="詳細ページへ"></a>
         </p>
    </section>
    </div>
    <?php get_sidebar(); ?>
    </div>
    <?php get_footer();?>