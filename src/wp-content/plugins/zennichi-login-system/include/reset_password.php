<?php
global $wp_query;
get_header();
$user = NULL;
$error_msg = "";
if(!empty($_POST)){
    if($_POST['user_login'] != ''){
        $user = new WP_User($_POST['user_login']);
    }else{
        $error_msg .= "<p>統一コードが入力されていません</p>";
    }
    if($_POST['user_tel'] == ''){
        $error_msg .= "<p>電話番号が入力されていません</p>";
    }
    if(isset($user) && $error_msg == ""){
        if($user->user_tel == $_POST['user_tel']){
            $user->user_pass = $user->user_tel;
            wp_update_user($user);
            echo "パスワードを初期化しました";
        }else{
            $error_msg = "電話番号が一致しません";
        }
    }
}
?>
<div class="login" id="">
    <h2>パスワードリセットフォーム</h2>
    <div class="error"><?php echo $error_msg ?></div>
    <form name="resetpasswordform" id="lostpasswordform" action="" method="POST">
        <p>
            <label for="user_login">統一コード - 枝番号</label>
            <input type="text" id="first" size="5">-<input type="text" id="second" size="3">
            <input type="text" name="user_login" id="user_login" class="input" value="" size="20" />
        </p>
        <p>
        <label for="user_tel">電話番号</label>
        <input type="text" name="user_tel" id="user_tel" value=""/>
        </p>

        <p class="submit">
            <input type="submit" id="zennichi-submit" name="submit"/>
        </p>
    </form>
</div>
<?php get_footer() ?>
