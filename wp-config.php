<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpressup' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Lcl7tm< /r` q`_vVCG3lc;-LX@r@aO9q`}_(,OKZj(|!X*{fqeQo_>jK_%FM7!J' );
define( 'SECURE_AUTH_KEY',  'KW>U~s,m684M!}G_vl=&g8NeYEp/Z71tBvJP1Vs,cp`+FMHF[0SCKIj(qP;@UG^&' );
define( 'LOGGED_IN_KEY',    'WhHw|M`M6!EV0Ro9#?*b:/V8_~8nqu?przX]P&p1}pk=(:Z4q:$lu/,2&,4cthmB' );
define( 'NONCE_KEY',        'D_1#( kHUk,LUG}R;+[+)9!0X_UyYJDQq!HzBt%p`FPk#^%Mq`d<ml|6e}$S?I w' );
define( 'AUTH_SALT',        'xj7Ojig0EDzW?l<eO jJy$+9Uoj&GYzbxsSZfL^1zN_O4j.m5}>HyS{{ef1xnL?;' );
define( 'SECURE_AUTH_SALT', 'FV{8J,sd8:VusiA_(Hi5GIH=yc-*#:)fbav+x.h~1EA|[<T/d(Q<Fgvi.~s+111#' );
define( 'LOGGED_IN_SALT',   'dvbxF%OWXs@N)8;q*}Yi(Rv:}/X%Hf`[jzY)&o@@cWAzd4w,M=$-yXE 80W>pS(i' );
define( 'NONCE_SALT',       '#6<!A?|5ub=Mt}4[bhL+OO>Ox;^3nMkO@M?D0%89L+cku)yt xvY1Q-rK(Y!cy)[' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
