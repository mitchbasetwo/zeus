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
define('DB_NAME', 'TEST_zeus');

/** MySQL database username */
define('DB_USER', 'zeus');

/** MySQL database password */
define('DB_PASSWORD', 'Z3-u5');

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
define('AUTH_KEY',         'c/)yI%s~fkJJ`lV@C~AU(1aZ,%#<H1kH?x(.v(51!,n^V i6w&0CMFb*+j(+=`b1');
define('SECURE_AUTH_KEY',  '7/=ACn2cT`6ksg]71x;62XN=KFFEHN`CKu,((_hnRY]xtqjg5;BqfoT45nPtckI3');
define('LOGGED_IN_KEY',    '9x XF5#8j[*Uqt4No?%Z!Cu-ewNI@Din~pX8)QWw3mw?TZ(Dy?#=2f{R 4N#+;wI');
define('NONCE_KEY',        'rOexW2>k6<B#L3diR|v~,|bJwP6xz)~_wUFLmu{5B#U_,fc70Z^t>SgD^X<a{Y+e');
define('AUTH_SALT',        'TeP}emK[bxm$v+zE]rn-f+(nSqvDVKL*Mo)3>XqCDD`*|v2qi*o&|C?F[2(YH9!j');
define('SECURE_AUTH_SALT', 'k`)Sa>O?|We9;<-h1f.d|UeP=HH}||8j_QQ,<{8~Lw>#u:3L@ky:DIc9$|>i+2U}');
define('LOGGED_IN_SALT',   'fA3X#s*aT>,RKz}`uK]l,z H-U&5-xm?;&_9m~AhvZ`?q}|<`JhH@zPiGc-QHGpe');
define('NONCE_SALT',       'YvU_tK&lq^b_t8&8+SylSU6-[w>iEuK7I*{HbCS^p4tm; Nw!v@7(@^iB6Q0o-)^');

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
