<?php

/*
  Plugin Name: 全日本不動産　ユーザーログインシステム
  Plugin URI: http://www.plate.co.jp
  Description: これは全日本不動産におけるユーザーログインシステムを実現するプラグインです
  Version: 0.1
  Author: 株式会社プレート　システムインテグレーション事業　エンジニア　川井健太
  Author URI: http://www.plate.co.jp
  License: zennichi-login
 */

/*  Copyright 2015 PLATE k-kawai@plate.co.jp */

class zennnichi_login_system {

    public function __construct() {
        register_activation_hook(__FILE__, array($this, 'activate_rewrite_rules'));
        add_action('init', array($this, 'add_rewrite_rules'));
        add_action('template_redirect', array($this, 'reset_password_redirect'));
        add_action('template_redirect', array($this, 'import_redirect'));
        add_action('template_redirect', array($this, 'generate_excel_redirect'));
        add_filter('user_contactmethods', array($this, 'my_user_meta'), 10, 1);
        add_action('user_register', array($this, 'tml_user_register'));
        add_action('wp_head', array($this, 'include_js'));
        add_action('wp', array($this, 'check_default_password'));
        add_action('parse_request', array($this, 'my_generate_excel'));
    }

    //ユーザープロフィールの項目の追加と削除
    public function my_user_meta($contactmethods) {
        //不要な項目の削除
        unset($contactmethods['aim']);
        unset($contactmethods['jabber']);
        unset($contactmethods['yim']);

        //項目の追加
        //免許情報
        $contactmethods['user_license_holder'] = '免許権者';
        $contactmethods['user_license_holder_det'] = '()内';
        $contactmethods['user_license_number'] = '免許番号';
        $contactmethods['user_license_hokkaido'] = '北海道免許詳細';
        $contactmethods['user_license_pref'] = '免許都道府県';
        //免許年月日
        $contactmethods['user_license_year'] = '年（平成）';
        $contactmethods['user_license_month'] = '月';
        $contactmethods['user_license_day'] = '日';

        //不動産会社情報
        $contactmethods['user_trade_name'] = '商号';
        $contactmethods['user_trade_name_kana'] = '商号カナ';
        $contactmethods['user_office_pref'] = '都道府県';
        $contactmethods['user_zip'] = '郵便番号';
        $contactmethods['user_addr1'] = '所在地（区町村名）';
        $contactmethods['user_addr2'] = 'ビル名以降';
        $contactmethods['user_tel'] = '電話番号';
        $contactmethods['user_minor_office'] = '従たる事業所名';
        $contactmethods['user_region'] = '地方本部';
        $contactmethods['user_branch_code'] = '支部コード';
        //代表者
        $contactmethods['user_representative_title'] = '敬称';
        $contactmethods['user_representative'] = '代表者氏名';

        //宅地建物取引士情報
        $contactmethods['user_takuchi_pref'] = '登録都道府県';
        $contactmethods['user_takuchi_number'] = '番号';
        $contactmethods['user_takuchi_name'] = '氏名';
        $contactmethods['user_takuchi_office_pref'] = '都道府県';
        $contactmethods['user_takuchi_addr'] = '住所';
        $contactmethods['user_takuchi_tel'] = '電話番号';
        //$contactmethods['user_update_count'] = '更新回数';

        return $contactmethods;
    }

    //ユーザープロフィール項目の登録時の保存
    public function tml_user_register($user_id) {
        if (!empty($_POST['user_tel']))
            update_user_meta($user_id, 'user_tel', $_POST['user_tel']);
        if (!empty($_POST['user_region']))
            update_user_meta($user_id, 'user_region', $_POST['user_region']);
        if (!empty($_POST['user_trade_name']))
            update_user_meta($user_id, 'user_trade_name', $_POST['user_trade_name']);
        if (!empty($_POST['user_license_holder']))
            update_user_meta($user_id, 'user_license_holder', $_POST['user_license_holder']);
        if (!empty($_POST['user_license_hokkaido']))
            update_user_meta($user_id, 'user_license_hokkaido', $_POST['user_license_hokkaido']);
        if (!empty($_POST['user_license_number']))
            update_user_meta($user_id, 'user_license_number', $_POST['user_license_number']);
        //if ( !empty($_POST['user_update_count'])) update_user_meta( $user_id, 'user_update_count', $_POST['user_update_count']);
        if (!empty($_POST['user_zip']))
            update_user_meta($user_id, 'user_zip', $_POST['user_zip']);
        if (!empty($_POST['user_addr1']))
            update_user_meta($user_id, 'user_addr1', $_POST['user_addr1']);
        if (!empty($_POST['user_addr2']))
            update_user_meta($user_id, 'user_addr2', $_POST['user_addr2']);
        if (!empty($_POST['user_trade_name_kana']))
            update_user_meta($user_id, 'user_trade_name_kana', $_POST['user_trade_name_kana']);
        if (!empty($_POST['user_user_license_pref']))
            update_user_meta($user_id, 'user_license_pref', $_POST['user_license_pref']);
        if (!empty($_POST['user_branch_code']))
            update_user_meta($user_id, 'user_branch_code', $_POST['user_branch_code']);
        if (!empty($_POST['user_representative']))
            update_user_meta($user_id, 'user_representative', $_POST['user_representative']);
        if (!empty($_POST['user_minor_office']))
            update_user_meta($user_id, 'user_minor_office', $_POST['user_minor_office']);

        if (!empty($_POST['user_license_year']))
            update_user_meta($user_id, 'user_license_year', $_POST['user_license_year']);
        if (!empty($_POST['user_license_month']))
            update_user_meta($user_id, 'user_license_month', $_POST['user_license_month']);
        if (!empty($_POST['user_license_day']))
            update_user_meta($user_id, 'user_license_day', $_POST['user_license_day']);

        if (!empty($_POST['user_representative_title']))
            update_user_meta($user_id, 'user_representative_title', $_POST['user_representative_title']);
        if (!empty($_POST['user_takuchi_pref']))
            update_user_meta($user_id, 'user_takuchi_pref', $_POST['user_takuchi_pref']);
        if (!empty($_POST['user_takuchi_number']))
            update_user_meta($user_id, 'user_takuchi_number', $_POST['user_takuchi_number']);
        if (!empty($_POST['user_takuchi_name']))
            update_user_meta($user_id, 'user_takuchi_name', $_POST['user_takuchi_name']);

        //2015/6/11 k-kawai updated
        if (!empty($_POST['user_takuchi_pref']))
            update_user_meta($user_id, 'user_takuchi_office_pref', $_POST['user_takuchi_office_pref']);
        if (!empty($_POST['user_takuchi_addr']))
            update_user_meta($user_id, 'user_takuchi_addr', $_POST['user_takuchi_addr']);
        if (!empty($_POST['user_takuchi_tel']))
            update_user_meta($user_id, 'user_takuchi_tel', $_POST['user_takuchi_tel']);

        if (!empty($_POST['user_office_pref']))
            update_user_meta($user_id, 'user_office_pref', $_POST['user_office_pref']);
        //
        if (!empty($_POST['user_license_holder_det']))
            update_user_meta($user_id, 'user_license_holder_det', $_POST['user_license_holder_det']);
    }

    //javascriptの読み込み
    public function include_js() {
        echo '<script type="text/javascript" src="' . plugins_url() . '/zennichi-login-system/js/login.js"></script>';
        echo '<script type="text/javascript" src="' . plugins_url() . '/zennichi-login-system/js/generate.js"></script>';
    }

    //リダイレクト除外リスト
    public function redirect_exclusion() {
        if ($_SERVER['REQUEST_URI'] == '/your-profile/')
            return false;
        if ($_SERVER['REQUEST_URI'] == '/login/')
            return false;
        if ($_SERVER['REQUEST_URI'] == '/logout/')
            return false;
        if ($_SERVER['REQUEST_URI'] == '/resetpass/')
            return false;
        if ($_SERVER['REQUEST_URI'] == '/reset-password/')
            return false;
        if ($_SERVER['REQUEST_URI'] == '/')
            return false;
        return true;
    }

    //wp_head()実行時にパスワードが電話番号かを確認
    public function check_default_password() {
        global $current_user;
        if ($this->redirect_exclusion() && isset($current_user) && wp_check_password($current_user->user_tel, $current_user->user_pass)) {
            wp_redirect("your-profile");
        }
    }

    public function activate_rewrite_rules() {
        add_rewrite_endpoint('reset-password', 'EP_ROOT');
        add_rewrite_endpoint('import-users', 'EP_ROOT');
        add_rewrite_endpoint('generate-excel', 'EP_ROOT');
        flush_rewrite_rules();
    }

    public function add_rewrite_rules() {
        add_rewrite_endpoint('reset-password', 'EP_ROOT');
        add_rewrite_endpoint('import-users', 'EP_ROOT');
        add_rewrite_endpoint('generate-excel', 'EP_ROOT');
    }

    //パスワードリセットページへのリダイレクト
    public function reset_password_redirect() {
        global $wp_query;
        if (isset($wp_query->query['pagename'])) {
            if ($wp_query->query['pagename'] == "reset-password") {
                header("Content-Type: text/html; charset=UTF-8");
                require 'include/reset_password.php';
                exit();
            }
        }
    }

    //ユーザー情報インポートへのリダイレクト
    public function import_redirect() {
        global $wp_query;
        if (isset($wp_query->query['pagename'])) {
            if ($wp_query->query['pagename'] == "import-users") {
                header("Content-Type: text/html; charset=UTF-8");
                require 'include/import_users.php';
                exit();
            }
        }
    }

    //EXCELエクスポートへのリダイレクト
    public function my_generate_excel($wp) {
        /*
        if (!is_user_logged_in()) {
            wp_redirect(home_url('/wp-login.php'));
            exit();
        }
        */
        if (isset($wp->query_vars['pagename'])) {
            if ($wp->query_vars['pagename'] == "generate-excel") {

                $uri = $_SERVER['REQUEST_URI'];
                $parse = parse_url($uri);
                $query = explode('=', $parse['query']);

                if (isset($parse['query'])) {
                    if ($query[0] == 'id' && isset($query[1])) {
                        //
                        //$template_id = (string) $query[1];
                        $template_id = $query[1];
                        require_once 'include/generate_excel.php';
                        generate_excel_3($template_id, 10);
                        //
                        exit();
                    }
                }

            }
        }
    }
}



new zennnichi_login_system();