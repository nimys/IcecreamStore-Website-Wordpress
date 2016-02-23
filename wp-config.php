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
define('DB_NAME', 'firstproject');

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
define('AUTH_KEY',         'aW6P)h.An-0-<:O!lvtP^,?F5X2em4p2V/TcB7d&j6rQyObXcK{[9[N 2&!Chu3C');
define('SECURE_AUTH_KEY',  'c|W]KKj!Ih|K3}p%^UX<}i+Yw|F5<*[m +0K-Or2pEA,IOt;3kCS,BHwXbkD;o:b');
define('LOGGED_IN_KEY',    'Xwj#Kt&%yF0MrR/0_j{:-[P#EKgBi3%B5uKm^&U#~T5_I0+4f<oX[4?h&<0wJr+G');
define('NONCE_KEY',        'zplr{E/hKp+vd(c)g7d ]hjKR.|ic$P&SGr:[d}B4rl/Fn+B_ric`I-^n9URx15#');
define('AUTH_SALT',        '$Kdwn6-GN@Qxi.d=j6IO+wn?PX1X.U5r-%u%<R.B~=qCVG|m#b3!Z*K[o>$@/-fu');
define('SECURE_AUTH_SALT', 'R%!Rb ,+j<+[)mAIX>_W];88wVI2V(BF{.oO>/CW{BGlZ:CI-}<;fUlr5rp:!M9D');
define('LOGGED_IN_SALT',   '^CFR)CSa`M[A~-i|_mcK1BCOt6.Mu, xiw %qCk=2}vNL#PG&!1a,0Bv^E?/k#3n');
define('NONCE_SALT',       'E/~?25223 dxDd~r?UQ4q|UX+MG<z7ufeIQJ2PR6$tO.>XfEV_C1lU|85Be^80)A');

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
