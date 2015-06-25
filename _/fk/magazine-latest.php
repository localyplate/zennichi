<?php
/*
Template Name: magazine-latest
*/
?>
<?php get_header(); ?>
<div class="global_container_" id="fk-174">
<div class="group">
    <div class="group pankuzu">
        <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
        <p class="text-2">&gt;</p>
        <p class="text-3"><a href="<?php bloginfo('url'); ?>/public/">一般のお客様へ</a></p>
        <p class="text-4">&gt;</p>
        <p class="text-5">月刊不動産</p>
    </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/magazine/title01.png" alt="月刊不動産" width="640" height="68" title="月刊不動産"></h2>
        <section class="section knowredge">
            <p>当協会では、会報誌「月刊不動産」を発行し、宅地建物取引業法などの法令改正や、税制問題、行政庁の通達、業界動向など不動産業界のニュースを、詳しい解説やデータとともに、いち早くお知らせしています。</p>
            <h3>最新号</h3>
            <?php
            $args = array(
              'posts_per_page'=> 1,
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'magazine',
              'post_status'   => 'publish'
             );
            $posts = get_posts($args);

            foreach($posts as $post) :
            ?>
            <div class="clearfix">
                <div>
                    <img src="<?php $image = get_field('image'); echo $image['url']; ?>" alt="月刊不動産" title="月刊不動産">
                    <a href="<?php $file = get_field('file'); echo $file['url']; ?>"><img class="magazine_pdf" src="/wp-content/themes/fk/images/magazine/ico_magazine01.png" alt="PDFファイルでの閲覧はこちら" title="PDFファイルでの閲覧はこちら"></a>
                    <a href="#"><img src="/wp-content/themes/fk/images/magazine/ico_magazine02.png" alt="eBookReaderでの閲覧はこちら" title="eBookReaderでの閲覧はこちら"></a>
                </div>
                <p><?php the_field('heading'); ?></p>
            </div>
        <?php endforeach; ?>
     </section>

    <p class="btn_link">
        <a href="/magazine-latest/backnumber/"><img src="/wp-content/themes/fk/images/magazine/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/magazine/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/magazine/btn01.png'" alt="バックナンバーはコチラ" title="バックナンバーはコチラ"></a>
    </p>

    <div class="pdfGuide">
        <p>
            <img class="ico_pdf" src="/wp-content/themes/fk/images/info-ir/ico_pdf.png">
            <span>PDFファイルについて</span>
         </p>
        <p class="indent">1. PDFは、Adobe Systems社によって開発された、電子文書のためのフォーマットです。</p>
        <p class="indent">2. PDFファイルの閲覧には、Adobe Reader が必要です。<br>Adobe Readerをお持ちでない方は、下記のリンクからダウンロード（無料）してください。</p>
        <p class="indent">3. Adobe Reader 及び Adobe Reader ロゴは、Adobe Systems Incorporated<br>（アドビ システムズ 社）の商標です。</p>
        <p>
            <a href="#" class="n_imglink"><img class="ico_pdf" src="/wp-content/themes/fk/images/info-ir/ico_adobe.png"></a>
            <a href="#" class="n_textlink">Adobe Reader ダウンロード</a>
         </p>
    </div>
    </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>