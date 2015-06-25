<?php
/*
Template Name: magazine-backnumber
*/
?>
<?php get_header(); ?>
<div class="global_container_" id="fk-175">
<div class="group">
     <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/public/">一般のお客様へ</a></p>
        <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); ?>/magazine-latest/">月刊不動産</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">バックナンバー</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/magazine/title01.png" alt="月刊不動産" width="640" height="68" title="月刊不動産"></h2>
   <section class="section_news">
       <table class="l-table table_faq m_top ">
            <tbody>
                <tr>
                    <th class="w140"><span>検索年度</span></th>
                    <td>
                    <form method="post" action="">
                    <?php
                    if(!isset($_POST['year'])){$_POST['year'] = "";}
                    $year = ($_POST['year'] != "") ? $_POST['year'] : date_i18n('Y');
                    ?>
                        <select class="" name="year" onChange="this.form.submit()">
                           <option value="2015" <?php $select = ($year == '2015') ? ' selected' : ''; echo $select;?>>2015年度</option>
                           <option value="2014" <?php $select = ($year == '2014') ? ' selected' : ''; echo $select;?>>2014年度</option>
                           <option value="2013" <?php $select = ($year == '2013') ? ' selected' : ''; echo $select;?>>2013年度</option>
                           <option value="2012" <?php $select = ($year == '2012') ? ' selected' : ''; echo $select;?>>2012年度</option>
                           <option value="2011" <?php $select = ($year == '2011') ? ' selected' : ''; echo $select;?>>2011年度</option>
                           <option value="2010" <?php $select = ($year == '2010') ? ' selected' : ''; echo $select;?>>2010年度</option>
                       </select>
                    </form>
                       <span>のバックナンバーを表示する</span>
                    </td>
                </tr>
            </tbody>
        </table>
       <section class="section_news02">
       <?php
       $args = array(
              'posts_per_page'=> 12,
              'orderby'       => 'post_date',
              'order'         => 'DESC',
              'post_type'     => 'magazine',
              'post_status'   => 'publish'
             );
        $posts = get_posts($args);

        foreach($posts as $post) :
          $title = get_the_title($post->ID);
          if($year == substr($title,0,4)) :
        ?>
       <div class="parts_news">
           <p class="parts02_news"><span><?php the_title(); ?></span></p>
            <p class="parts03_news"><a class="n_textlink" href="<?php the_permalink(); ?>"><?php echo the_field('label'); ?></a></p>
       </div>
       <div class="line_news"></div>
     <?php endif; endforeach; ?>
       </section>
    </section>
    </div>
    <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>