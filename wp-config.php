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
define('DB_NAME', 'wp_cloudtechservices');

/** MySQL database username */
define('DB_USER', 'cloudtech_wp');

/** MySQL database password */
define('DB_PASSWORD', 'cloudtech@wp');

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
define('AUTH_KEY',         '(1(3EVM,TRlOS3biHp~hKn1gR!H9F-Hb ;L0!pWV#H3s1E9pcq$ZhC?W<l?ITAY+');
define('SECURE_AUTH_KEY',  ']@~~G!33a/nQK@>8qM?:&2D^ST^fd_3Wp5qRTu!R_*gVi{^L?=xX!R3{+A$4z?3c');
define('LOGGED_IN_KEY',    '_!<AO){u*=%BgdJU^dDr~6:Ha(}F.~i|s(@y+Z~h?4t*?j}zPj`V9k!kNWnSsG`p');
define('NONCE_KEY',        '3^gH}X,+XN7o+{WzEp+||)q dH`0H._vYKGSzU&~EOhT9E`Rp{<qq-;p^vd0.2Sh');
define('AUTH_SALT',        ')sp~5b7]!k&&k.e~<Ot[S0Yn!R3!d1L=lHlEHt;_;K5%Z9pgFUPvGe,`>Pt5w||)');
define('SECURE_AUTH_SALT', '<5CUWd1aHNa9V;u1L0Gnp !u&^w9#cl|y*nR_2vcPhv3k+:IMP]@-w}*V?DA1ZF|');
define('LOGGED_IN_SALT',   '^*:j!@ q`Q}rhVF`NkdeAE#eYED{m,#r/r]mzzd^t!KDdQ;}[S7;/7w$j,<Il q*');
define('NONCE_SALT',       'g| e&nXcXn%{%.^&_G+VtxdZb9jSl^id`A/hA9]mgUo^v~+_#pUz:VEejI-I0+dX');

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
