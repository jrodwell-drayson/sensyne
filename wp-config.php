<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Default to local dev
define('DB_NAME', 'wp_drayson_sensyne');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

// Force `BASE URLS`
define('WP_HOME','http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cNWHRohm?gsk%Mc9/HKoyq8_+]M^I|4IY$WKc_9m07VGW#WniC!TM;~nT@Gf@L(7');
define('SECURE_AUTH_KEY',  '95Lta#ULc 4cI;S:ak>Thn&fYY!a<|+oee{ntMhji+N&s7Tne(y(P+X8+f3*99{u');
define('LOGGED_IN_KEY',    'i*+z6jYTUZje7|!30 ;-O!-^ YR!$.~r)Z>-)*[^o`Y|&?:|ySE,z C3~A1-V[ U');
define('NONCE_KEY',        'Ds!2M*aFZ1y{Rs|GPkb[=8FuBx;6lGS*/-XHM7s*V{C9qwXO5;$LT`IUfBX&(@uE');
define('AUTH_SALT',        'glTCe)ki7pw<G>ly7H,xM:=}+xQeZ$c_08S(s%P%sTek:xgqb#:O1F:RPdXXQ_0E');
define('SECURE_AUTH_SALT', 'Dg1_Z)w]Hv--Xo=N$Ux6]hJ[4wizHb^>KRnGV?GXb^mCw2v2aiK!m-6HkSu]O`Ch');
define('LOGGED_IN_SALT',   'LQC-1i77PP!x^JbR7f`Q,|M1gA_6dkK#:]-z?hl8rQKqRrw-YosT,5SH)*_@?{z|');
define('NONCE_SALT',       '0+AGd H4$LR:%d#eiYWYI,.WA_tg```8Sqc^ V-f~|cr6-YH^;[M#dSp5xh{LsLp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
