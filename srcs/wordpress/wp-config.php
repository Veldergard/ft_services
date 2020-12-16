<?php
define('DB_NAME',     'wordpress');
define('DB_USER',     'mysql');
define('DB_PASSWORD', 'mysql');
define('DB_HOST',     'mysql-svc');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

define('AUTH_KEY',         'tl_ovIq8B(X2p.]!A|cG]Yhf78^JW%]R:,1rp!$I.qE`4[wI([$d-1hlA KT$PP@');
define('SECURE_AUTH_KEY',  ')+n?7(C{p2rLDv.VU=|5`[A7 .PfkYiaNvz82L;Lkx;<O`?v~vW#5`^|*#Q+u8TY');
define('LOGGED_IN_KEY',    '!MC-xu[.Yev<?)V?m<Yuj(NLLIpV1,*RLXeY]gA_c|34muJOof!$,y--I#T[sD^`');
define('NONCE_KEY',        '|#(*)t-TwUgV--$)Gm!*D%h{db^NW}6H-Ei7qq{n`f6GFQPj^gaD-=*u[%;[Q]pV');
define('AUTH_SALT',        'tP*FiSwZ=G`?0D,RtX`xJC:wAUns&,KvcyD6k vetP8CXFbm1R$v:17dx&SR fR.');
define('SECURE_AUTH_SALT', '@@f3-wH/2*fqOWmd.DbQGJJ7[1dn.;mw)o^-|6w_aW3Xi`lv=JvvB%|, ,a0,,oT');
define('LOGGED_IN_SALT',   'd0abP9%[b]Am_:$;rx$|-#cT4C )=6{C+serG>h^tR]5LE_Jdad;LpDUs,hP+zB!');
define('NONCE_SALT',       'jNBf1c$gNyZ~k?(k|-LA=+L39DB4l`<`%fBL|_ATY%s3Verr-DB+^@/3*4:QHUKg');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
