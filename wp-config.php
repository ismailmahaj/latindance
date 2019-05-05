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
define('DB_NAME', 'evolution');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'v L`XD7_Q08+b/zQ=yM:CvpU6>xqHouohJs(P9[2T((+fkL|fk9/5|FC60:a;/jW');
define('SECURE_AUTH_KEY',  '&.g{XvMS^2hg9z18*3Q29/:C6$V1$IF[9,BM4%F*u<u^v@,{~s `_in450z?5+SL');
define('LOGGED_IN_KEY',    ']G7qnhO#u07i {dj&El{[?z{}2?>dEe8kj~xe4]/#-)mOP7[|!bh9l^ >bq^^uMP');
define('NONCE_KEY',        '`BSE,3WXbS6-z.MOumz=<Tushp3_q(P;5)naKI>l&ze*+B<QM3}5mlKHjkZ_pCB8');
define('AUTH_SALT',        'K ]27uo5W.Zo,QK]&XK&d&.F{4OP 6H6p[O2Yrt->|0euX8%{rZ?]w/K@^,6L.f9');
define('SECURE_AUTH_SALT', ' &ZNY|x7DJd_b,?m- 14Tdq<&gHUG&#DtpM0<I5[%@/x~5lX/xAG/[ZrgkH>s2 q');
define('LOGGED_IN_SALT',   'xH[U!ozF{pKOpFZY;#*,SD;Nls<M~PG zIP)@gl{bh%I/J@<X>fG}6/necpsjwp1');
define('NONCE_SALT',       'S1W>9Z{?y%4+jto]x>1?~A@8Yrr727p?|qo+<r$bC=#p=$lB.t2zw^ZiC)C+X3*4');

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
