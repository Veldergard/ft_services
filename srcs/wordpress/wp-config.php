<?php
 /**
 * The base configuration for WordPress
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 */
define('AUTH_KEY',         ';+Et=lGmB@XKuL*--CAhoL}@1jAz+%6F;l{au&_p$=k|$4LrZjOG5}(mY{|,=P$f');
define('SECURE_AUTH_KEY',  '1P(-c@~i~f *ctc{Z1LvTBQ@fSZ:p6{t(`8^f/i>ks/)[h} #Ey=?*Dbc|76nK-+');
define('LOGGED_IN_KEY',    'QFEG.]j;F7Pj`(NeanP%a%Agt4~Mgo$Q9|s<=*i8DSR~V&%W|Z$JwBl~0,oB;{),');
define('NONCE_KEY',        '|F,DsJ[!OAjwkGaLM,C+o2hKwQm2TT<hA+A^L ~S<yNJBKi7S.$BG1cor9V<$Wrj');
define('AUTH_SALT',        '>R.? 2c0?#xWp;,]m:p(Troh88~~og8*0}XBIH-S/;6>^f-d |b/?Cl-n|$#7uH+');
define('SECURE_AUTH_SALT', 'm+A}hC+|w~|F*qC UQ~Ct;.2le5$/;a;zS~|E$SXrTQ]!x=-Ie31L^R~*r>p=zzq');
define('LOGGED_IN_SALT',   '>WRmcQ{z[W-FQ aBb=m}LZ+JQ~D>-lm1e0phw-TPY_5COP7:Wl&sjVUc0!~|Me d');
define('NONCE_SALT',       'uLtExNb/)[WBsxO,D7>U7Trs*dCMf}m0HJNvGeGf[_A_.sP$yC$QJ7T+yXQ9Qq|>');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
