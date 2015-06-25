<?php
/*
Template Name: member_search
*/
?>
<?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kanakeyboards.css">
<script>
  jQuery(function(){
    jQuery(".detail_search").click(function(){
    jQuery("html,body").animate({ scrollTop: 1430 }, 'fast');
    return false;
    });
    jQuery(".kana_input").click(function(){
      var kana = jQuery(this).val();
     jQuery(".one_input").val(kana);
    });
    });


  function searchByPrefecture( obj ){
    var prefecture = obj.getAttribute('alt');
    document.getElementById('hidden_prefecture').value = prefecture;
  };
    function searchByPrefecture2( obj ){
    var prefecture = obj.innerHTML;
    document.getElementById('hidden_prefecture').value = prefecture;
  };
   function openkana(){
      keyboard.style.display = "block";
     }
   function closekana(){
      keyboard.style.display = "none";
     }
</script>
<div class="global_container_" id="fk-142">
<div class="group">
<div class="group pankuzu">
      <p class="text"><a href='<?php bloginfo('url'); ?>'>トップページ</a></p>
      <p class="text-4">&gt;</p>
      <p class="text-5">会員検索</p>
     </div>
    <div class="leftbox">
        <h2><img src="/wp-content/themes/fk/images/top/title01.png" alt="会員検索" width="640" height="68" title="会員検索"></h2>
         <section class="section_news">
       <h3>当協会に登録している会員をお探しいただけます</h3>
             <div class="search_map">
                 <section class="search_section">
                     <p>地図から探したい不動産業者の都道府県をお選びください。「詳しく検索」ボタンをクリックすると、詳細な情報で検索できます。</p>
                     <p class="m_top">
           <img class="detail_search" src="/wp-content/themes/fk/images/top/btn01.png" alt="検索する" title="検索する">
         </p>
                 </section>
       <!-- 日本地図 -->
          <img class="m_top" src="/wp-content/themes/fk/images/top/star02.png" alt="" usemap="#localsearch" width="599" height="513">
          <form name="prefecture" method="post" action="<?php bloginfo('url'); ?>/member_search/list">
          <map name="localsearch">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="福岡" coords="108,342,172,380">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="大分" coords="138,381,172,420">  
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="宮崎" coords="138,421,172,460">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="熊本" coords="106,381,135,460">  
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="鹿児島" coords="106,462,172,503">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="佐賀" coords="87,342,107,390">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="長崎" coords="67,342,86,390">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="沖縄" coords="69,462,92,500">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="高知" coords="187,472,240,503">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="徳島" coords="241,472,294,503">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="愛媛" coords="187,440,240,471">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="香川" coords="241,440,294,471">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="山口" coords="187,342,215,425">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="島根" coords="217,342,243,382">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="広島" coords="217,383,243,425">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="鳥取" coords="246,342,274,382">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="岡山" coords="246,383,274,425">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="兵庫" coords="276,342,304,425">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="大阪" coords="305,404,330,460">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="奈良" coords="331,404,355,480">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="滋賀" coords="358,365,379,404">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="京都" coords="306,342,331,342,331,365,356,365,356,404,306,404">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="和歌山" coords="305,460,330,460,330,480,355,480,356,503,305,503">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="福井" coords="331,342,358,342,356,321,381,321,379,365,331,365">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="長野" coords="411,323,448,323,448,404,432,404,432,438,411,438">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="三重" coords="356,404,380,503">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="石川" coords="356,255,380,321">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="富山" coords="382,280,419,321">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="岐阜" coords="381,323,411,439">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="愛知" coords="381,440,420,480">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="静岡" coords="422,440,469,480">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="山梨" coords="432,405,469,439">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="神奈川" coords="470,440,510,465">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="群馬" coords="451,322,488,363">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="栃木" coords="489,322,526,363">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="茨城" coords="528,322,563,380">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="千葉" coords="528,381,563,480">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="埼玉" coords="451,364,526,405">
            <area id="tokyo" onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="東京" coords="471,405,528,405,528,430,510,430,510,438,471,438">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="新潟" coords="421,280,445,280,445,265,471,265,471,321,421,321">
              
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="福島" coords="474,280,563,321">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="宮城" coords="504,237,563,279">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="岩手" coords="504,194,563,235">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="秋田" coords="445,194,503,235">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="rect" alt="青森" coords="445,162,563,193">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="山形" coords="445,235,503,235,503,280,474,280,474,265,445,265">
            <area onclick="searchByPrefecture(this);document.prefecture.submit();" shape="poly" alt="北海道" coords="448,152,486,152,486,130,596,130,596,35,448,35">
          </map>
         <!-- 日本地図 -->
       <div class="search_part">
        <p class="green_b left_three">北海道</p>
        <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">北海道</a></p>
       </div>
                 
        <img class="search_line" class="search_parts32" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">東北</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">青森</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">岩手</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">宮城</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">秋田</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">山形</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">福島</a></p>
        </div>
    
        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">関東</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">茨城</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">栃木</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">群馬</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">埼玉</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">千葉</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">東京</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">神奈川</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">新潟</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">山梨</a></p>
        </div>
       
        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">中部</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">富山</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">石川</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">福井</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">長野</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">岐阜</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">静岡</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">愛知</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">三重</a></p>
        </div>
                 
        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">近畿</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">滋賀</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">京都</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">大阪</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">兵庫</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">奈良</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">和歌山</a></p>
        </div>
       
        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">中国</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">鳥取</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">島根</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">岡山</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">広島</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">山口</a></p>
        </div>
       
        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b left_two">四国</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">徳島</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">香川</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">愛媛</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">高知</a></p>
        </div>

        <img class="search_line" src="/wp-content/themes/fk/images/top/image_23.png" alt="" width="600" height="1">
        <div class="search_part">
         <p class="green_b">九州・沖縄</p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">福岡</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">佐賀</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">長崎</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">熊本</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">大分</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">宮崎</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">鹿児島</a></p>
         <p><a class="n_textlink prefecture_link" onclick="searchByPrefecture2(this);document.prefecture.submit();">沖縄</a></p>
        </div>
        <input id="hidden_prefecture" type="hidden" name="prefecture" value="">
        </form>
    </div>
    </section>
   <section class="section_news member_search">
       <h3>詳しく検索</h3>
       <p class="m_top">詳細な条件を入力して会員を検索する事ができます。検索条件を設定して「検索」ボタンをクリックしてください。<br><span class="size14">※ 全ての項目を入力する必要はありません。</span></p>
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