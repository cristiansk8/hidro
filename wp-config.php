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
define('DB_NAME', 'rotularc_h1dro');

/** MySQL database username */
define('DB_USER', 'rotularc_h1dro');

/** MySQL database password */
define('DB_PASSWORD', '.L%@y4Dtcp~G');

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
define('AUTH_KEY',         'spNS> Q|VaFlvhDxyA*#fQ>iH>5AmWOGSx.c#@l#0*JX Zj_G`3@vx.<=B_Jp]Q`');
define('SECURE_AUTH_KEY',  '`2E)^1t9iXR@-IG`s=6E}qpQVxh8#M`lBS,M(C{<9BJe+ofl=qq.6y2K[DMZ(7?c');
define('LOGGED_IN_KEY',    'FLW9%kJ1z]1M]V6RQ44ZQC+X:(GFvYsz)[a0g@fhK^B  9y+{vRA8dbUC6utt8L}');
define('NONCE_KEY',        'L)R,?F$b`yAYaLt;Ozy7)2z!%`{A.o9O9/kkh)/#rn<wV}?byT<`~5VE+]$RwFz0');
define('AUTH_SALT',        'vXz[R](eU g:ZvYQV9s^ls/]T,UFRW7I&e.GLw.b]H98&fk8b2IAAc%^A@U7KoxV');
define('SECURE_AUTH_SALT', '%dA}h9nR0oFu0yZlc;-||DD{jZ(@n|DO`!ecz4_04Sks%(gi=R*8.dqyr#O&A8py');
define('LOGGED_IN_SALT',   '23+QaS37dL94StGcxU;]icu<`vQ~yAdPQajS@E-(<bL^1Y+wF]Jw1,xoa:0T1w0O');
define('NONCE_SALT',       '{M{.A)a,skk7* d_6kV^m*C)nY[4eWDw]QmIMF~/X2X7s%*qsV/9n^$]*BNS8d7^');

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
