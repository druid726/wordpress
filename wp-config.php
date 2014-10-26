<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pdoneill_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|t}|QeT+W8@w<RtRV#e:;*k~@O0EA$a;6Ys$5lt]b1J6r{R_YnqCYU~j-CO4s4c-');
define('SECURE_AUTH_KEY',  '=Gr=m~+Jd3mC`J@URqbrq|c4(`2N2@)@Y+obyBQ9-3tyU?XRG+M.{s|jmst12N0<');
define('LOGGED_IN_KEY',    'J(xEL4(i{Z,`E!^|n;|<Z!XBH)+)A#J0=%.kxA:wLp||GI*F_g:75N(zBrDt^gfi');
define('NONCE_KEY',        '1Qw*iwPmp^=xmsGqg%CZY@KZ]pTM3z{5fzF39Fljx_xOh9]}U*`f-R}yz~>g8OMK');
define('AUTH_SALT',        ',!o8k,CUEMAyifoPl1%jK^aER:+|9^X4gwVK?@<9.-Z=+41?my!|us^m~}&-%L6V');
define('SECURE_AUTH_SALT', '?_Z-G:dZd~3d7dx|Hgn2B6e+iu+4S2]_NETFb.-po H#cA[E|C:ve*OE[9+F>bwF');
define('LOGGED_IN_SALT',   '4#mo#dASj(lDB_R*DO]}la801MC|{CmR--^R+<reU:oX@*|1C+^4EA67ufL95%RG');
define('NONCE_SALT',       'jD.b)lz]f$.1Mp|/gn)L-:F}oa4H-B3M*UZHD!!0|iwmjNMD`STG-Rdg@3]70zbC');

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
// define( 'WP_DEBUG_DISPLAY', false );
// define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
