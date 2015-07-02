<?php

/*
 * write down here to export excel data
 * /generate-excel/にアクセスするとエクセルファイルがダウンロードできる。
 */

/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel-develop/Classes/PHPExcel.php';

/** Include PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/PHPExcel-develop/Classes/PHPExcel/IOFactory.php';

/* replace user_meta_data */
require_once dirname(__FILE__) . '/lib/Template.php';

function ct_get_user_meta_data($user_id = 1) {
    $data = array();
    
    $license_pref = get_user_meta($user_id, 'user_license_pref');
    if(empty($license_pref[0])){
       $license_pref = 0;
    }else{
       $license_pref = intval(@$license_pref[0]);
    }
    
    $license_holder = get_user_meta($user_id, 'user_license_holder');
    if(empty($license_holder[0])){
        $data['aaa'] = "免許情報";
    }else{
        $license_holder = getLicenseHolder(@$license_holder[0], $license_pref);
        $data['aaa'] = $license_holder;
    }

    $license_holder_det = get_user_meta($user_id, 'user_license_holder_det');
    $data['bbb'] = @$license_holder_det[0];
    //$data['bbb'] = "カッコ";

    $license_number = get_user_meta($user_id, 'user_license_number');
    $data['ccc'] = @$license_number[0];

//    $license_hokkaido = get_user_meta($user_id, 'user_license_hokkaido');
//    $license_pref = get_user_meta($user_id, 'user_license_pref');

    $license_year = get_user_meta($user_id, 'user_license_year');
    $data['ddd'] = @$license_year[0];

    $license_month = get_user_meta($user_id, 'user_license_month');
    $data['eee'] = @$license_month[0];
    
    $license_day = get_user_meta($user_id, 'user_license_day');
    $data['fff'] = @$license_day[0];
    
    $trade_name = get_user_meta($user_id, 'user_trade_name');
    if(empty($trade_name[0])){
        $data['ggg'] = "商号";
    }else{
        $data['ggg'] = @$trade_name[0];
    }

//    $license_day = get_user_meta($user_id, 'user_license_day');
//    $trade_name = get_user_meta($user_id, 'user_trade_name');
//    $trade_name_kana = get_user_meta($user_id, 'user_trade_name_kana');

    $office_pref = get_user_meta($user_id, 'user_office_pref');
    if(empty($office_pref[0])){
        $data['hhh'] = "所在地";
    }else{
        $office_pref = intval(@$office_pref[0]);
        $data['hhh'] = getRegionText($office_pref);
    }

//    $zip = get_user_meta($user_id, 'user_zip');

    $addr1 = get_user_meta($user_id, 'user_addr1');
    $addr2 = get_user_meta($user_id, 'user_addr2');
    $data['iii'] = @$addr1[0] . @$addr2[0];  // addr1+addr2

    $tel = get_user_meta($user_id, 'user_tel');
    $data['jjj'] = @$tel[0];

//    $minor_office = get_user_meta($user_id, 'user_minor_office');
//    $region = get_user_meta($user_id, 'user_region');
//    $branch_code = get_user_meta($user_id, 'user_branch_code');

    $representative_title = get_user_meta($user_id, 'user_representative_title');
    if(empty($representative_title[0])){
        $data['kkk'] = "代表者敬称";
    }else{
        $data['kkk'] = @$representative_title[0];
    }

    $representative = get_user_meta($user_id, 'user_representative');
    if(empty($representative[0])){
        $data['lll'] = "代表者氏名";
    }else{
        $data['lll'] = @$representative[0];
    }

    $takuchi_pref = get_user_meta($user_id, 'user_takuchi_pref');
    if(empty($takuchi_pref[0])){
        $data['mmm'] = "宅建登録都道府県";
    }else{
        $takuchi_pref = intval(@$takuchi_pref[0]);
        $data['mmm'] = getRegionText($takuchi_pref);
    }

    $takuchi_number = get_user_meta($user_id, 'user_takuchi_number');
    $data['nnn'] = @$takuchi_number[0];

    $takuchi_name = get_user_meta($user_id, 'user_takuchi_name');
    $data['ooo'] = @$takuchi_name[0];

    $takuchi_office_pref = get_user_meta($user_id, 'user_takuchi_office_pref');
    if (@$office_pref[0] != @$takuchi_office_pref[0]) {
        $takuchi_office_pref = intval(@$takuchi_office_pref[0]);
        $data['ppp'] = getRegionText($takuchi_office_pref);
    } else {
        $data['ppp'] = '';
    }

    $takuchi_addr = get_user_meta($user_id, 'user_takuchi_office_addr');
    if ((@$addr1[0] . @$addr2[0]) != @$takuchi_addr[0]) {
        $data['qqq'] = @$takuchi_addr[0];
    } else {
        $data['qqq'] = '';
    }

    $takuchi_tel = get_user_meta($user_id, 'user_takuchi_office_tel');
    if (@$tel[0] != @$takuchi_tel[0]) {
        $data['rrr'] = @$takuchi_tel[0];
    } else {
        $data['rrr'] = '';
    }
    
    
    //所属地方本部名
    $region = get_user_meta($user_id, 'user_region');
    $region = intval(@$region[0]);
    $data['sss'] = getRegionText($region);

    $data['ttt'] = getRegionOfficeAddr($region);
    $data['ttt'] = getRegionOfficeAddr($region);

    return $data;
}

function getLicenseHolder($number, $pref){
    if($number < 2){
        return "国土交通大臣";
    }else{
        return getRegionText($pref)."知事";
    }
}

//ここは後でどうにかしておけよ！！
function getRegionOfficeAddr($region_number){
    $region_number--;
    $address = array(
        '札幌市中央区南4条西 6-11-2 全日ビル 2階',
        '青森市古川 1-21-11 須藤ビル 1階',
        ' 盛岡市八幡町 1-9 表参道 101号',
        '仙台市青葉区上杉1-4-1 中野プラザビル 4階',
        '秋田市東通 3-11-5 コンホート94広面 1階',
        '山形市松波 1-15-7 ',
        '郡山市南 1-45 ',
        '茨城県水戸市笠原町978-25 茨城県開発公社ビル4階',
        '栃木県宇都宮市中央1-5-11 セントラルビル 3階',
        '群馬県前橋市新前橋町19-2 全日群馬会館',
        '埼玉県さいたま市浦和区高砂3-10-4 全日埼玉会館',
        '千葉市中央区市場町 4-6 全日千葉会館',
        '千代田区平河町 1-8-13 全日東京会館',
        '横浜市西区北幸1-11-15 横浜STビル6階',
        '甲府市徳行 3-13-25 岩下ビル 2階',
        '新潟市中央区東出来島 7-15 ',
        '富山市堤町通り 2-1-25 全日富山会館',
        '金沢市増泉 1-19-34 サンプラザノアビル 3階',
        '福井県福井市大手 3-7-1 福井県繊協ビル3階',
        '松本市大字島立 620-8 全日長野会館',
        '岐阜市加納上本町 3丁目23番地 全日岐阜会館',
        '静岡市駿河区南町 14-1 水の森ビル 8階',
        '愛知県名古屋市中区栄5-27-14 朝日生命名古屋栄ビル 4階',
        '四日市市西新地 10-16 第2富士ビル 5階',
        '大津市梅林 1-3-25 第1森田ビル 8階',
        '京都市中京区柳馬場通三条下ル槌屋町 98-2 全日京都会館',
        '大阪市中央区谷町 1-3-26 全日大阪会館',
        '神戸市中央区中山手通 4-22-4 全日兵庫会館',
        '奈良県奈良市杉ケ町 32-2 大谷第5ビル 5階',
        '和歌山市太田2-6-12-102',
        '鳥取市川端 5-211',
        '松江市東朝日町 218-1 ラヴィナスアテンコート 102',
        '岡山市北区本町 4-18 コア本町 3階',
        '広島市中区富士見町 11-4 全日広島会館',
        '山口市小郡黄金町11-31',
        '徳島市中昭和町2-75 間(はざま)ビル1F',
        '香川県高松市木太町802番',
        '愛媛県松山市小坂 2-6-34 全日愛媛会館',
        '高知市堺町 1-21 JTB高知ビル 4階',
        '福岡県福岡市博多区博多駅前2-20-1 大博多ビル2階',
        '佐賀市神野東 4-7-24 江頭ビル 2階',
        '長崎市樺島町 7-1 丸善ビル 2階',
        '熊本市中央区水前寺6-43-13 全日熊本県本部会館',
        '大分市新町 19-1 全日会館',
        '宮崎市宮田町 11-24 黒木ビル1F',
        '鹿児島市鴨池 1-12-35 全日会館ビル 3階',
        '沖縄県那覇市久茂地3-1-1 日本生命那覇ビル9F'
    );
    return $address[$region_number];
}

function getRegionText($region_number){
    $region_number--;
    $regions = array(
        '北海道',
        '青森県',
        '岩手県',
        '宮城県',
        '秋田県',
        '山形県',
        '福島県',
        '茨城県',
        '栃木県',
        '群馬県',
        '埼玉県',
        '千葉県',
        '東京都',
        '神奈川県',
        '山梨県',
        '新潟県',
        '富山県',
        '長野県',
        '石川県',
        '福井県',
        '岐阜県',
        '静岡県',
        '愛知県',
        '三重県',
        '滋賀県',
        '京都府',
        '大阪府',
        '兵庫県',
        '奈良県',
        '和歌山県',
        '鳥取県',
        '島根県',
        '岡山県',
        '広島県',
        '山口県',
        '徳島県',
        '香川県',
        '愛媛県',
        '高知県',
        '福岡県',
        '佐賀県',
        '長崎県',
        '熊本県',
        '大分県',
        '宮崎県',
        '鹿児島県',
        '沖縄県',
    );
    return $regions[$region_number];
}

function getRegionOfficeText($region_number){
    $region_number--;
    $regions = array(
        '北海道本部',
        '青森県本部',
        '岩手県本部',
        '宮城県本部',
        '秋田県本部',
        '山形県本部',
        '福島県本部',
        '茨城県本部',
        '栃木県本部',
        '群馬県本部',
        '埼玉県本部',
        '千葉県本部',
        '東京都本部',
        '神奈川県本部',
        '山梨県本部',
        '新潟県本部',
        '富山県本部',
        '長野県本部',
        '石川県本部',
        '福井県本部',
        '岐阜県本部',
        '静岡県本部',
        '愛知県本部',
        '三重県本部',
        '滋賀県本部',
        '京都府本部',
        '大阪府本部',
        '兵庫県本部',
        '奈良県本部',
        '和歌山県本部',
        '鳥取県本部',
        '島根県本部',
        '岡山県本部',
        '広島県本部',
        '山口県本部',
        '徳島県本部',
        '香川県本部',
        '愛媛県本部',
        '高知県本部',
        '福岡県本部',
        '佐賀県本部',
        '長崎県本部',
        '熊本県本部',
        '大分県本部',
        '宮崎県本部',
        '鹿児島県本部',
        '沖縄県本部',
    );
    return $regions[$region_number];
}
/*
function generate_data($template_id = '', $user_id = 0) {

    if (!isset($template_id) && $template_id == '') {
        return;
    }

    $template = dirname(__FILE__) . "/../tmp/" . $template_id . ".xlsx";

    if (!file_exists($template)) {
        return;
    }
    //$reader = PHPExcel_IOFactory::createReader('Excel2007');
    //$objPHPExcel = $reader->load($template);
    $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
    $cacheSettings = array( 'memoryCacheSize' => '32MB');
    PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
    $objPHPExcel = PHPExcel_IOFactory::load($template);

    if ($user_id == 0) {
        $user_id = get_current_user_id();
    }
    $data = ct_get_user_meta_data($user_id);
    
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

        $worksheetTitle = $worksheet->getTitle();
        $highestRow = $worksheet->getHighestRow(); // e.g. 10
        $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

        for ($row = 1; $row <= $highestRow; ++$row) {
            for ($col = 0; $col < $highestColumnIndex; ++$col) {

                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $val = $cell->getValue();

                $cell_name = $cell->getColumn() . $cell->getRow();
                if ($val != NULL) {
                    $val = new Template($val, $data);
                    $val->pattern = '%s';
                    $worksheet->setCellValue($cell_name, $val);
//                    $objPHPExcel->getActiveSheet()->setCellValue($cell_name, $value);
                }
            }
        }
    }

    return $objPHPExcel;
}
*/

function generate_excel($template_id = '', $user_id = 0) {
    set_time_limit(180);
    if (!isset($template_id) && $template_id == '') {
        return;
    }

    //$template = dirname(__FILE__) . "/../tmp/" . $template_id . ".xlsx";
    $template = dirname(__FILE__) . "/../tmp/" . $template_id;
    //$template = "http://".$_SERVER["SERVER_NAME"]."/wp-content/themes/fk/contract/".$template_id;

    /* read template */
    if (!file_exists($template)) {
        return;
    }

    $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
    $cacheSettings = array( 'memoryCacheSize' => '512MB');
    PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
    
    $objPHPExcel = PHPExcel_IOFactory::load($template);
    
    /* get user_meta_data */
    if ($user_id == 0) {
        $user_id = get_current_user_id();
    }
    $data = ct_get_user_meta_data($user_id);
    
    
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

        $worksheetTitle = $worksheet->getTitle();
        //$highestRow = $worksheet->getHighestRow(); // e.g. 10
        //$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
        //$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        //上の３行は問題の原因となるコード。メモリを大量に使うので処理できなかった。
        
        //以下２行対策コード
        $highestRow = 60;
        $highestColumnIndex = 30;

        for ($row = 1; $row <= $highestRow; ++$row) {
            for ($col = 0; $col < $highestColumnIndex; ++$col) {

                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $val = $cell->getValue();

                $cell_name = $cell->getColumn() . $cell->getRow();
                if ($val != NULL) {
                    $val = new Template($val, $data);
                    $val->pattern = '%s';
                    $worksheet->setCellValue($cell_name, $val);
//                    $objPHPExcel->getActiveSheet()->setCellValue($cell_name, $value);
                }
            }
        }
        unset($worksheet);
        $worksheet = null;
    }

//     Rename worksheet
//    $objPHPExcel->getActiveSheet()->setTitle('Simple');
//     Set active sheet index to the first sheet, so Excel opens this as the first sheet
//    $objPHPExcel->setActiveSheetIndex(0);

    $xlsName = $template_id;
    //$xlsName = "generate.xls";

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=UTF-8');
    header('Content-Disposition: attachment;filename="' . $xlsName . '"');
    header("Cache-Control: max-age=0");
    header("Pragma: public");
    header("Expires: 0");

    //$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2005');
//    $objWriter->save(dirname(__FILE__) . '/tmp/' . $xlsName);

        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//    $objWriter->setOffice2003Compatibility(true);

    $objWriter->save('php://output');
    exit();
}

function my_test() {

    $data = array('aaa' => 'le duong khang', 'bbb' => 'Q7');
    $val = 'Fullname aaa <br>Address bbb<br>Phone !!phone!!<br>Email ccc';

    $val = new Template($val, $data);
    $val->pattern = '%s';
    $val->clean = true;
    $val->clean_pattern = array('/ccc/');
    
    return $val;
}
