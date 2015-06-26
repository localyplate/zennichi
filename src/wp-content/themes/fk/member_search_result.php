<?php
/*
Template Name: member_search_list
*/
?>
<?php session_start(); ?>
<?php get_header(); ?>

<script>
  jQuery(function(){
    jQuery(".kana_input").click(function(){
      var kana = jQuery(this).val();
     jQuery(".one_input").val(kana);
    });
    });

   function openkana(){
      keyboard.style.display = "block";
     }
   function closekana(){
      keyboard.style.display = "none";
     }
</script>
<div class="global_container_" id="fk-143">
<div class="group">
    <div class="group pankuzu">
      <p class="text"><a href="<?php bloginfo('url'); ?>">トップページ</a></p>
      <p class="text-2">&gt;</p>
      <p class="text-3"><a href="<?php bloginfo('url'); echo '/member_search/' ?>">会員検索</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">会員検索結果</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/top/title01.png" alt="会員検索" width="640" height="68" title="会員検索"></h2>
         <section class="section_news">
         <?php
        if (isset($_POST['prefecture'])){
            $_SESSION['prefecture'] = $_POST['prefecture'];
        } elseif (!isset($_SESSION['prefecture'])){
            $_SESSION['prefecture'] = "";
        }
        if (isset($_POST['city'])){
            $_SESSION['city'] = $_POST['city'];
        } elseif (!isset($_SESSION['city'])){
            $_SESSION['city'] = "";
        }
        if (isset($_POST['location'])){
            $_SESSION['location'] = $_POST['location'];
        } elseif (!isset($_SESSION['location'])){
            $_SESSION['location'] = "";
        }
        if (isset($_POST['shogo'])){
            $_SESSION['shogo'] = $_POST['shogo'];
        } elseif (!isset($_SESSION['shogo'])){
            $_SESSION['shogo'] = "";
        }
        if (isset($_POST['shogo_kana'])){
            $_SESSION['shogo_kana'] = $_POST['shogo_kana'];
        } elseif (!isset($_SESSION['shogo_kana'])){
            $_SESSION['shogo_kana'] = "";
        }
        if (isset($_POST['number'])){
            $_SESSION['number'] = $_POST['number'];
        } elseif (!isset($_SESSION['number'])){
            $_SESSION['number'] = "";
        }
        if (isset($_POST['affiliation'])){
            $_SESSION['affiliation'] = $_POST['affiliation'];
        } elseif (!isset($_SESSION['affiliation'])){
            $_SESSION['affiliation'] = "";
        }

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

         $_SESSION['shogo_kana'] = mb_convert_kana($_SESSION['shogo_kana'], "kh");

         $args_count = array(
            'meta_query' => array(
                'relation' => 'AND',
            array('key' => 'user_office_pref',
                'value' => $_SESSION['prefecture'],
                'compare' => 'LIKE'),
            array('key' => 'user_addr1',
                'value' => $_SESSION['city'],
                'compare' => 'LIKE'),
            array('key' => 'user_addr1',
                  'value' => $_SESSION['location'],
                 'compare' => 'LIKE'),
            array('key' => 'user_trade_name',
                 'value' => $_SESSION['shogo'],
                 'compare' => 'LIKE'),
            array('key' => 'user_trade_name_kana',
                 'value' => $_SESSION['shogo_kana'],
                 'compare' => 'LIKE'),
            array('key' => 'user_license_number',
                 'value' => $_SESSION['number'],
                 'compare' => 'LIKE'),
            array('key' => 'user_region',
                'value' => $_SESSION['affiliation'],
                'compare' => 'LIKE'),
            )
            );
         $args = array(
            'number' => $per_page,
            'offset' => $offset,
            'meta_query' => array(
                'relation' => 'AND',
            array('key' => 'user_office_pref',
                'value' => $_SESSION['prefecture'],
                'compare' => 'LIKE'),
            array('key' => 'user_addr1',
                'value' => $_SESSION['city'],
                'compare' => 'LIKE'),
            array('key' => 'user_addr1',
                  'value' => $_SESSION['location'],
                 'compare' => 'LIKE'),
            array('key' => 'user_trade_name',
                 'value' => $_SESSION['shogo'],
                 'compare' => 'LIKE'),
            array('key' => 'user_trade_name_kana',
                 'value' => $_SESSION['shogo_kana'],
                 'compare' => 'LIKE'),
            array('key' => 'user_license_number',
                 'value' => $_SESSION['number'],
                 'compare' => 'LIKE'),
            array('key' => 'user_region',
                'value' => $_SESSION['affiliation'],
                'compare' => 'LIKE'),
            )
            );
         $users_count = get_users($args_count);
         $users = get_users($args);

         $kana01 = "0";
         $users_kana = array();
        ?>
       <h3>検索結果</h3>
             <table class="search_table">
                 <thead>
                     <tr>
                        <th class="w120">免許番号</th>
                        <th class="w185">商号／代表者</th>
                        <th>所在地</th>
                     </tr>
                 </thead>
                 <tbody>
               <?php foreach($users as $user) :?>
                     <tr>
                         <td class="w120">
                             <p><?php echo $user->user_nicename; ?></p>
                             <p>(<?php echo $user->user_license_holder_det; ?>)</p>
                             <p><?php echo $user->user_license_number; ?></p>
                         </td>
                         <td class="w185">
                             <p class="company"><?php echo $user->user_trade_name; ?></p>
                             <p>代表者： <?php echo $user->user_representative; ?></p>
                         </td>
                         <td>
                             <p>〒<?php echo $user->user_zip; ?></p>
                             <p><?php echo $user->user_addr1 .$user->user_addr2; ?></p>
                             <p>TEL： <?php echo $user->user_tel; ?></p>
                         </td>
                     </tr><?php endforeach; ?>
               </tbody>
             </table> 
          <?php
          $item_count = count($users_count);
          $pages = ceil($item_count / $per_page);
          ?>
        <?php if($item_count == 0): ?>
        <p>条件に一致する会員はいません。</p>
        <?php else : ?>
      <?php include('pager.php');?>
      <?php my_pager($pages, $paged,get_permalink(), 2);?>
    <?php endif; ?>
        </section>
   <section class="section_news">
       <p class="m_top">詳細な条件を入力して会員を検索する事ができます。検索条件を設定して「検索」ボタンをクリックしてください。<br /><span class="size14">※ 全ての項目を入力する必要はありません。</span></p>
       <form method='post' id='searchform' action='<?php bloginfo('url'); ?>/member_search/list'>
       <table class="l-table table_faq m_top ">
            <tbody>
                <tr>
                    <th class="w175"><span>所在地の都道府県</span></th>
                    <td>
                        <select class="search_area01" name="prefecture">
                            <option value="">指定なし</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                       </select>
                    </td>
                </tr>
                <tr>
                    <th class="w175"><span>所在地の市区町村</span></th>
                    <td>
                        <select class="search_area02" name="city">
                            <option value="">都道府県を選択してください</option>
                            <option value="">指定なし</option>
                       </select>
                    </td>
                </tr>
                <tr>
                    <th class="w175"><span>所在地（フリー入力）</span></th>
                    <td>
                        <input class="" type="text" name="location" value="" placeholder="">（全角で入力してください）<br>※ 都道府県を除いて入力してください。
                    </td>
                </tr>
                <tr>
                    <th class="w175"><span>商号（漢字）</span></th>
                    <td>
                        <input class="" type="text" name="shogo" placeholder="">（全角で入力してください）<br>※ 株式会社、有限会社等は除いてください。
                    </td>
                </tr>
                <tr>
                    <th class="w175"><span>商号<br>（先頭カタカナ１文字）</span></th>
                    <td>
                        <input class="one_input" type="text" name="shogo_kana" placeholder="" value=""><span>
                        <img id="showkeyboard"  onclick="openkana()" class="search_btn" src="/wp-content/themes/fk/images/law_faq/btn05.png" alt="五十音表から入力">
                        （全角で入力してください）</span><br>※ 苗字と名前は続けて入力してください。
                    </td>
                </tr>
                <tr>
                    <th class="w175"><span>免許番号</span></th>
                    <td>
                        <select class="" name="">
                           <option value="">指定なし</option>
                           <option value="">その他</option>
                       </select>
                        　<input class="two_input" type="text" name="number" placeholder="" ><span>（半角数字で入力してください）</span>
                    </td>
                </tr>
               <tr>
                    <th class="w175"><span>所属本部・支部</span></th>
                    <td>
                        <select class="search_area02" name="affiliation">
                            <option value="">指定なし</option>
                           <option value="">都道府県を選択してください</option>
                       </select>
                    </td>
                </tr>
            </tbody>
        </table>
       <p class="btn_link m_top">
        <input type='submit' name='submit' id='searchsubmit' value='' />
         </p>
       </form>
        <div class="keyboard">
            <?php include('kana_keyboard.php'); ?>
        </div>
       </section>
</div>
<?php get_sidebar(); ?>
   </div>
<?php get_footer(); ?>