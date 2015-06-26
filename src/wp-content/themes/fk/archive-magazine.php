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
   <?php
   $args = array(
              'posts_per_page'=> 12,
              'orderby'       => 'meta_value_num',
              'order'         => 'DESC',
              'post_type'     => 'magazine',
              'post_status'   => 'publish',
              'meta_key'      => 'number'
             );
        $posts = get_posts($args);
        foreach($posts as $post) {
          $number_year = get_field('number');
          $years[] = substr($number_year,0,4);
        }
        $years = array_unique($years);
   ?>
       <table class="l-table table_faq m_top ">
            <tbody>
                <tr>
                    <th class="w140"><span>検索年度</span></th>
                    <td>
                    <form method="post" action="" style="display:inline">
                    <?php
                    if(!isset($_POST['year'])){$_POST['year'] = "";};
                    $year = ($_POST['year'] != "") ? $_POST['year'] : max($years);
                    ?>
                        <select  name="year" onChange="this.form.submit()">
                        <?php foreach($years as $year_exist) : ?>
                           <option value="<?php echo $year_exist; ?>" <?php $select = ($year == $year_exist) ? ' selected' : ''; echo $select;?>><?php echo $year_exist; ?>年度</option>
                        <?php endforeach; ?>
                       </select>
                    </form>
                       <span>のバックナンバーを表示する</span>
                    </td>
                </tr>
            </tbody>
        </table>
       <section class="section_news02">
       <?php
        foreach($posts as $post) :
          $number = get_field('number');
          if($year == substr($number,0,4)) :
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