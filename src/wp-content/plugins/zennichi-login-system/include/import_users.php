<?php //get_header(); ?>
<?php
$error_msg = "";
$success_msg = "";
$usersdata = array();
if(isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error'])){
    try{
        switch ($_FILES['upfile']['error']) {
            case UPLOAD_ERR_OK:
                // エラー無し
                break;
            case UPLOAD_ERR_NO_FILE:
                // ファイル未選択
                throw new RuntimeException('ファイルが選択されていません。');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                // 許可サイズを超過
                throw new RuntimeException('ファイルが大きすぎます。分割してアップロードしてください。');
            default:
                throw new RuntimeException('未知のエラーです。管理者に確認をお願いします。');
        }
        
        $tmp_name = $_FILES['upfile']['tmp_name'];
        $detect_order = 'ASCII,JIS,UTF-8,CP51932,SJIS-win';
        setlocale(LC_ALL, 'ja_JP.UTF-8');
        $buffer = file_get_contents($tmp_name);
        
        /* 文字コードを変換してファイルを置換 */
        $buffer = file_get_contents($tmp_name);
        if (!$encoding = mb_detect_encoding($buffer, $detect_order, true)) {
            // 文字コードの自動判定に失敗
            unset($buffer);
            throw new RuntimeException('文字コードの自動判定に失敗しました。文字コードを確認してください。');
        }
        file_put_contents($tmp_name, mb_convert_encoding($buffer, 'UTF-8', $encoding));
        unset($buffer);
        
        
        //CSV読み込み
        $row = 1;
        if (($handle = fopen($tmp_name, "r")) !== FALSE) {
            $update_count = 0;
            $insert_count = 0;
            while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                $num = count($data);
                $row++;
                //統一コードの作成　桁合わせ等
                $general_code = str_pad($data[0], 5, '0', STR_PAD_LEFT) . str_pad($data[1], 3, '0', STR_PAD_LEFT);
                //既存データチェックby user_login (統一コード)
                $id = null;
                $user = new WP_User(0, $general_code);
                if(isset($user)){
                    $id = $user->ID;
                    $update_count++;
                }else{
                    $insert_count++;
                }
                //ユーザーデータを作成
                $userdata = array(
                    "ID" => $id,
                    "user_login" => $general_code,
                    "user_pass" => str_replace("-", "", $data[2]),
                    "user_tel" => str_replace("-", "", $data[2]),
                    "user_region" => $data[3],
                    "user_trade_name" => $data[4],
                    "user_license_holder" => $data[5],
                    "user_license_hokkaido" => $data[6],
                    "user_license_number" => $data[7],
                    "user_update_count" => $data[8],
                    "user_zip" => $data[9],
                    "user_addr1" => $data[10],
                    "user_addr2" => $data[11],
                    "user_trade_name_kana" => $data[12],
                    "user_license_pref" => $data[13],
                    "user_branch_code" => $data[14],
                    "user_representative" => $data[15],
                    "user_minor_office" => $data[16],
                );
                array_push($usersdata, $userdata);
                wp_insert_user($userdata);
            }
            fclose($handle);
            $success_msg .= "ユーザー情報CSVデータ".($insert_count+$update_count)."件中";
            if($insert_count > 0){
                $success_msg .= "<p>新規ユーザー".$insert_count."件を追加しました。</p>";
            }
            if($update_count > 0){
                $success_msg .= "<p>既存ユーザー".$update_count."件のデータを更新しました。</p>";
            }
        }
        
    }catch(Exception $e){
        $error_msg .= $e->getMessage();
    }
}
?>
<div>
    <h2>ユーザー情報インポート</h2>
    <div class="error"><?php echo $error_msg ?></div>
    <form enctype="multipart/form-data" method="post" action="">
        CSV File: <input type="file" name="upfile"/><br>
        <input type="submit" value="upload">
    </form>
    <div>
        <pre><?php echo $success_msg ?></pre>
    </div>
</div>
<?php //get_footer() ?>