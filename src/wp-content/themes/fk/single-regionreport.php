<?php get_header(); ?>
<div class="global_container_" id="fk-249">
<div class="group">
 <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="#">地方本部の動き</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-3"><a href="<?php echo get_post_type_archive_link('regionreport');?>">一覧</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5"><?php the_title(); ?></p>
     </div>
    <div class="leftbox">
     <h2><img src="/wp-content/themes/fk/images/chihou_report/title01.png" alt="地方本部の動き" width="640" height="68" title="地方本部の動き"></h2>
     <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <section class="section knowredge">
        <h3><?php the_title(); ?></h3>
      <?php echo get_field('body'); ?> 
      </section>
    <section class="section knowredge photo">
    <?php foreach(get_field('images') as $image) : ?>
        <div class="photo_part">
            <img class="photo_regionreport" src="<?php echo $image['image']['url']; ?>">
            <p class="size14">▲<?php echo mb_wordwrap($image['caption'],20,'<br>',true); ?></p>
        </div>
      <?php endforeach; ?>
    </section>
       <?php endwhile; endif; ?>
         <p class="btn_link btn_merit">
              <a href="<?php echo get_post_type_archive_link('regionreport'); ?>"><img src="/wp-content/themes/fk/images/compliance/compliance1/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/compliance/compliance1/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/compliance/compliance1/btn01.png'" alt="戻る" title="戻る"></a>
         </p>
  </div>
  <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>