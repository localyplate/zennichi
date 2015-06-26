<?php
/**
 * @package winter-scenery-of tsugaru strait
 * @version 1.6
 */
/*
Plugin Name: 津軽海峡冬景色
Plugin URI: 
Description: 
Author: Kenta Kawai
Version: 1.0
Author URI: 
*/

function tsugaru_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "上野発の夜行列車おりた時から
青森駅は雪の中
北へ帰る人の群れは誰も無口（むくち）で
海鳴りだけをきいている
私もひとり連絡船に乗り
こごえそうな鴎見つめ
泣いていました
ああ津軽海峡冬景色

ごらんあれが竜飛岬北のはずれと
見知らぬ人が指をさす
息でくもる窓のガラスふいてみたけど
はるかにかすみ見えるだけ
さよならあなた私は帰ります
風の音が胸をゆする
泣けとばかりに
ああ津軽海峡冬景色

さよならあなた私は帰ります
風の音が胸をゆする
泣けとばかりに
ああ津軽海峡冬景色
";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function tsugaru() {
	$chosen = tsugaru_get_lyric();
	echo "<p id='tsugaru'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'tsugaru' );

// We need some CSS to position the paragraph
function tsugaru_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#tsugaru {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'tsugaru_css' );

?>
