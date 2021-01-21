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
define('DB_NAME', 'wp_sntestbdd');

/** MySQL database username REMOTE*/
//define('DB_USER', 'id14312982_root');

/** MySQL database password REMOTE */
//define('DB_PASSWORD', '8&uQ6Q*1Z7!*auU<');

/** MySQL database username LOCAL*/
define('DB_USER', 'root');

/** MySQL database password LOCAL */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/*define('DB_NAME', 'db1147826_snintegrity');*/

/** MySQL database username */
/*define('DB_USER', 'u1147826_snint');*/

/** MySQL database password */
/*define('DB_PASSWORD', '4MhSLi9g');*/

/** MySQL hostname */
/*define('DB_HOST', 'mysql687.cp.iinethosting.net.au');*/

/** Database Charset to use in creating database tables. */
/*define('DB_CHARSET', 'utf8mb4');*/

/** The Database Collate type. Don't change this if in doubt. */
/*define('DB_COLLATE', '');*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+bt5@wdp(k/T]SN2G%x?+a3}+BW0#S4%@bDtA;0JP>Y1-*D,l>zk{PTRuh@zt|eu');
define('SECURE_AUTH_KEY',  '1?|M=!$78GKf+k^H3A(Knz0w/vp0]Q<yD@XN,Z8ER/vjD5R-{-x:Js>X==r i!5J');
define('LOGGED_IN_KEY',    'k?FFQq%:gc(+?=u/K|~RC5/)R>v~N@t}_^d,y{li^NPvJ:l!ti,KWxwaWo3N/z;v');
define('NONCE_KEY',        'O5im4A8.eU;~Tk M BlPYz{$RA&>5bRGR^N6BT)X&@ok!7ZbY31h8,Pmifx*%cZW');
define('AUTH_SALT',        'OAkRt_d<F]rRZB-7LNQ0bTW?hz` j,0j]ht79HX[5 s8c< /fYNkK/i5#E[)yp#P');
define('SECURE_AUTH_SALT', '{NspE2NANa[mr?dIgP&K3wa&)Z#F{$s!~B2C0SED0X*QI)@%p*(!>OL2LVe0[|(S');
define('LOGGED_IN_SALT',   'n&zFX*+X&4-R*N1KtJ)(!pW&LhgS5D}m6.+zbOf84Z < D -/}*YESHncB#UUz_Y');
define('NONCE_SALT',       '!5`QTiXF)X]b4Q  !!6G~E&w|[zlOk)(:4_m,&aK^5RDaR<QKX}uZ(r]U{URdz.a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/*
define( 'WP_CONTENT_DIR', dirname(__FILE__) . 'http://localhost/snintegrity/blog/' );
define( 'WP_CONTENT_URL', 'http://localhost/snintegrity/blog/wp-content/' );
*/

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');