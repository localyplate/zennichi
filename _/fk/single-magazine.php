<?php get_header(); ?>
<script>
  function selectYear( obj ){
    var year = obj.getAttribute('title');
    document.getElementById('hidden_year').value = year;
  };
</script>
<div class="global_container_" id="fk-176">
<div class="group">
    <div class="group pankuzu">
        <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
        <p class="text-2">&gt;</p>
        <p class="text-3"><a href="<?php bloginfo('url'); ?>/public/">一般のお客様へ</a></p>
        <p class="text-2">&gt;</p>
        <p class="text-3"><a href="<?php bloginfo('url'); ?>/magazine-latest/">月刊不動産</a></p>
        <p class="text-2">&gt;</p>
        <form name="year" method="post" action="<?php bloginfo('url'); ?>/magazine-latest/backnumber/">
        <p class="text-3 backnumber_year_select" >
            <a onclick="selectYear(this);document.year.submit();" title="<?php $year = substr(get_the_title($post->ID),0,4); echo $year; ?>"><?php echo $year; ?>年バックナンバー</a>
            <input id="hidden_year" type="hidden" name="year" value="">
        </p>
        </form>
        <p class="text-4">&gt;</p>
        <p class="text-5"><?php the_title(); ?></p>
    </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/magazine/title01.png" alt="月刊不動産" width="640" height="68" title="月刊不動産"></h2>
        <section class="section knowredge">
            <h3><?php the_title(); ?></h3>
            <div class="clearfix">
                <div>
                    <img src="<?php $image = get_field('image'); echo $image['url']; ?>" alt="月刊不動産" title="月刊不動産">
                    <a href="<?php $file = get_field('file'); echo $file['url']; ?>"><img class="magazine_pdf" src="/wp-content/themes/fk/images/magazine/ico_magazine01.png" alt="PDFファイルでの閲覧はこちら" title="PDFファイルでの閲覧はこちら"></a>
                    <a href="#"><img src="/wp-content/themes/fk/images/magazine/ico_magazine02.png" alt="eBookReaderでの閲覧はこちら" title="eBookReaderでの閲覧はこちら"></a>
                </div>
                <p><?php the_field('heading'); ?></p>
            </div>
     </section>

    <p class="btn_link">
        <a href="/magazine-latest/backnumber/"><img src="/wp-content/themes/fk/images/topics/btn01.png" onmouseover="this.src='/wp-content/themes/fk/images/topics/btn01_on.png'" onmouseout="this.src='/wp-content/themes/fk/images/topics/btn01.png'" alt="一覧に戻る" title="一覧に戻る"></a>
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