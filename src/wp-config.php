<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'multi_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bWi&(4B]P2>30}4YejL4eL@6D,nR|LUfa*=@/w,pixRpm90XIX-SzGF?*+b~|UrA');
define('SECURE_AUTH_KEY',  'vYU_10}>m4m>eN+~/>A|)@UFtpH#ZXoA+r|SvdU]a{SiO;UB9&mrkl?hTs+f0rn=');
define('LOGGED_IN_KEY',    'GW%8Y`b,OM=wj-9}*xA( Vlo[7UUO?4*]tRBR0PecR<K~Nfea.*W0<BnxE#&2a/9');
define('NONCE_KEY',        ')X3e+!Dn=OxifMNW]4~njpS<-_+6LC.@ MWyoO+:oN/,UN~[i|R:r[Jj^A0w_xbP');
define('AUTH_SALT',        'meGS{4tZ~y!PaB-!Ws2|NAm~@u,V?GR*,Jamt~*SiUnm@X0PU/}vlu[S`]tLH^ }');
define('SECURE_AUTH_SALT', '8;m61|R0#xp)k&.<hQx-!$7HYKJv6K6|C|cJ84ft^.F#b*_;8J-*3/Lzr.Xk1C[~');
define('LOGGED_IN_SALT',   '2j;C>w_W t^CNOXy8T-rHW0Xl~9|+V<*6r8F|&I>|}GAfuh. ~xg4zA+VvLRf|Jh');
define('NONCE_SALT',       'niW7HV|Ojg?Ej-<8uI]ge-v(b}Z5Kqe!CR;(_MJj0t1I#&y`Zt!*T~46NN&L Gs#');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', FALSE);
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'localhost.zennichi');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
