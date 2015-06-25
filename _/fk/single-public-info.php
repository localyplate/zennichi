<?php get_header(); ?>
<div class="global_container_" id="fk-018">
<div class="group">
<div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="#">一般のお客様へ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/public/info">お知らせ一覧</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">お知らせ詳細</p>
     </div>
    <div class="leftbox">
<h2><img src="/wp-content/themes/fk/images/knowledge/title01.png" alt="一般のお客様へ" width="640" height="68" title="一般のお客様へ"></h2>
    <section class="section knowredge">
    <?php if(have_posts()): while(have_posts()): the_post();?>
    <?php $file = get_field('field_post_file');
          $file_url = $file['url'];
          $file_title = $file['title'];
          ?>
        <h3><?php the_title(); ?><span><?php $terms = get_the_terms($post->ID,'source'); foreach($terms as $term){echo $term->name;}; ?></span></h3>
      <p><?php the_content(); ?>
          <p class="ico_link">
             <img class="ico_pdf" src="/wp-content/themes/fk/images/info-ir/ico_pdf.png">
              <a href="<?php echo $file_url; ?>" class="n_textlink"><?php echo $file_title; ?></a>
         </p>
        </p>
      <?php endwhile; endif; ?>
     </section>

    <p class="btn_link">
              <a href="<?php bloginfo('url'); ?>/public/info"><img src="/wp-content/themes/fk/images/topics/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/topics/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/topics/btn01.png'" alt="一覧に戻る" title="一覧に戻る"></a>
         </p>

    <div class="pdfGuide">
        <p>
            <img class="ico_pdf" src="/wp-content/themes/fk/images/info-ir/ico_pdf.png">
            <span>PDFファイルについて</span>
         </p>
        <p class="indent">1. PDFは、Adobe Systems社によって開発された、電子文書のためのフォーマットです。</p>
        <p class="indent">2. PDFファイルの閲覧には、Adobe Reader が必要です。<br />Adobe Readerをお持ちでない方は、下記のリンクからダウンロード（無料）してください。</p>
        <p class="indent">3. Adobe Reader 及び Adobe Reader ロゴは、Adobe Systems Incorporated<br />（アドビ システムズ 社）の商標です。</p>
        <p>
            <a href="#" class="n_imglink"><img class="ico_pdf" src="/wp-content/themes/fk/images/info-ir/ico_adobe.png"></a>
            <a href="#" class="n_textlink">Adobe Reader ダウンロード</a>
         </p>
    </div>
</div>
<?php get_sidebar(); ?>
</div>
   <?php //get_sidebar();?>
   <?php get_footer(); ?>