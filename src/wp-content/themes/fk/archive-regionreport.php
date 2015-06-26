<?php get_header(); ?>
<div class="global_container_" id="fk-247">
<div class="group">
 <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="#">地方本部の動き</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">一覧</p>
     </div>
    <div class="leftbox">
     <h2><img src="/wp-content/themes/fk/images/chihou_report/title01.png" alt="地方本部の動き" width="640" height="68" title="地方本部の動き"></h2>        
        <h3><?php echo date_i18n('Y年n月'); ?>の活動状況</h3>
        <?php  
        $year = date_i18n('Y');
        $month = date_i18n('n'); 
        $args = array(
              'posts_per_page'=> 4,
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'regionreport',
              'post_status'   => 'publish'
             );
        $posts = get_posts($args);

        foreach($posts as $post) : ?>
        <?php $post_month = get_the_date('n'); if ($month == $post_month) : ?>
    <section class="section knowredge">
        <div class="h4">
            <h4><?php echo get_field('label'); ?>　（<?php echo get_the_date('Y.n.j'); ?> 更新）</h4>
            <div></div>
        </div>
        <p>
        <img class="f-right regionreport_thumbnail" src="<?php $image = get_field('images'); echo $image[0]['image']['url']; ?>" >
        <span class="orange"><?php the_title();?></span><br>
        <?php the_field('abstract'); ?>
        </p>
<!--        <p>
            <img class="f-right" src="/wp-content/themes/fk/images/chihou_report/img04.png" alt="「全日長野青年部」">
            <span class="orange">「全日長野青年部」が発足</span><br>
            長野県本部では、1月29日（木）、若手経営者や幹部による交流を深めることや、お互いの経験や情報を学びあうことを目的として「全日長野青年部」を発足し、スターティングフォーラム（設立総会・記念講演・グループトーキング）を開催致しました。
        </p>
-->        <p class="ico_link">
            <img class="ico_pdf" src="/wp-content/themes/fk/images/about/arrow_up.png">
            <a href="<?php the_permalink(); ?>" class="n_textlink">続きはこちらから</a>
        </p>
     </section>
 <?php else : break; endif;?>
 <?php endforeach; ?>
  <h3>過去の活動状況</h3>
 <?php  
    $args = array(
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'regionreport',
              'post_status'   => 'publish'
             );
        $posts = get_posts($args);

        $month;
        ?>
        <?php while($month >= 1) :?>
    <section class="section knowredge">
        <div class="chihou_archive">
            <p class="green"><?php echo $year; ?>年<?php echo $month; ?>月</p>
            <?php foreach($posts as $post) : $post_month = get_the_date('n'); if ($month == $post_month) : ?>
            <p class="icon02"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php echo get_field('label')?>：<?php the_title(); ?></a></p>
        <?php else : break; ?>
        <?php endif; 
        endforeach; ?>
        </div>
     </section>
    <?php $month--; endwhile; ?>

        <?php 
        while($year >= 2012) :  ?>
         <div class="h4">
            <h4><?php echo $year; ?>年</h4>
            <div></div>
        </div>
        <?php    $month = 12;
            while($month >= 1) :?>
    <section class="section knowredge">
        <div class="chihou_archive">
            <p class="green"><?php echo $year; ?>年<?php echo $month; ?>月</p>
            <?php foreach($posts as $post) :  $post_year = get_the_date('Y'); $post_month = get_the_date('n'); if ($month == $post_month && $year == $post_year) : ?>
            <p class="icon02"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php echo get_field('label')?>：<?php the_title(); ?></a></p>
        <?php else : break; ?>
        <?php endif; 
        endforeach; ?>
        </div>
     </section>
    <?php $month--; endwhile; ?>
<?php  $year--; endwhile; ?>

    <p class="btn_link btn_merit">
        <a href="#"><img src="/wp-content/themes/fk/images/compliance/compliance1/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/compliance/compliance1/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/compliance/compliance1/btn01.png'" alt="戻る" title="戻る"></a>
    </p>
    </div>
    <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>