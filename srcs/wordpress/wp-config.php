<?php
 /**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
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
define( 'DB_HOST', 'mysql-svc:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';+Et=lGmB@XKuL*--CAhoL}@1jAz+%6F;l{au&_p$=k|$4LrZjOG5}(mY{|,=P$f');
define('SECURE_AUTH_KEY',  '1P(-c@~i~f *ctc{Z1LvTBQ@fSZ:p6{t(`8^f/i>ks/)[h} #Ey=?*Dbc|76nK-+');
define('LOGGED_IN_KEY',    'QFEG.]j;F7Pj`(NeanP%a%Agt4~Mgo$Q9|s<=*i8DSR~V&%W|Z$JwBl~0,oB;{),');
define('NONCE_KEY',        '|F,DsJ[!OAjwkGaLM,C+o2hKwQm2TT<hA+A^L ~S<yNJBKi7S.$BG1cor9V<$Wrj');
define('AUTH_SALT',        '>R.? 2c0?#xWp;,]m:p(Troh88~~og8*0}XBIH-S/;6>^f-d |b/?Cl-n|$#7uH+');
define('SECURE_AUTH_SALT', 'm+A}hC+|w~|F*qC UQ~Ct;.2le5$/;a;zS~|E$SXrTQ]!x=-Ie31L^R~*r>p=zzq');
define('LOGGED_IN_SALT',   '>WRmcQ{z[W-FQ aBb=m}LZ+JQ~D>-lm1e0phw-TPY_5COP7:Wl&sjVUc0!~|Me d');
define('NONCE_SALT',       'uLtExNb/)[WBsxO,D7>U7Trs*dCMf}m0HJNvGeGf[_A_.sP$yC$QJ7T+yXQ9Qq|>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
