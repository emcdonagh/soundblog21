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
define('DB_NAME', 'soundblog2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<]7h1*TSvki=|;7#^}](`|s>oJhu&iqNR!vFEFYWV]TQzZ:VftSy+l8+<oE?RV*#');
define('SECURE_AUTH_KEY',  ']Zfl-c;S!:aE$ZF2bnJp`j;F{HixCaRHi-87+BJ~yGEX.L[f#n/3zQe] BkF.Z_n');
define('LOGGED_IN_KEY',    ':yNnDpy$-3UAu[^JkU*#Bw<ifRJZq_Lxe3>)FC)(hGpim^k|,FI[}g#PqWoxK>*m');
define('NONCE_KEY',        'x]Us.pH);|!<ZP<)pmne2&/w1v+G*+`+g}H$i$0_/8D$8)98Tcs+-|ORJzk#,7#*');
define('AUTH_SALT',        '3)Aat_EN?B&FT}v$P-P[f/y~9_BN$/,86!k/SUt<mKuthE2+ma9Hs{(r-;9>a b ');
define('SECURE_AUTH_SALT', '!`4ET+qua6R:aq4k<|*BRWeJw3x9W;1:27S/p5BY>LZ7pSPU.ixE?Z7}&bvuM/Tu');
define('LOGGED_IN_SALT',   'wAA$+o9P?%;5J5nS+(|!GFF[`hk-!!ZWj9qJ4/i9iT7z[n!$CR-/l*J5}%EiSK_.');
define('NONCE_SALT',       'rWzUmS7}5+,6O^v+b%Xlh4 (v&h9~OI@V4z%2jwb+j>z! v87%=X=Lg!w,Z%PKpY');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
