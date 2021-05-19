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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resourcefulideas_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'V9;ft ]^N<n,1c3+=j@G)H!1&WR=)mFDe.%1;?bLN8{(K ~)rr@qo%=o7]TY>4CE' );
define( 'SECURE_AUTH_KEY',  'n<X[}]]B09KOME#BQfL_M|lfp@;u0Q|Ss^1912$*>?&Z&E]AtS`oh8&9nPTNKp[c' );
define( 'LOGGED_IN_KEY',    'Qj_gnb=[Qj@P;TUm3E3$<Jex.7]C+aU<T+D8yWRDfIT-c4[P9~u3)0jwR&KFkUR3' );
define( 'NONCE_KEY',        'l:_qjS#TqB7PP0UCsr9sPxh50^7Lr<e$`BZj/pM#^@7Ve`3mMd&`iCBd-buH^?k|' );
define( 'AUTH_SALT',        'r0&HWnG WxUHDZ@Xiq+@9u&pyVr:{-c/yp,3XklV1nHH`^>Gy+y!pRV!}]W4s5`X' );
define( 'SECURE_AUTH_SALT', '}=K7K[fQ<q>*Br${~R-uJi`.OU`[&zA9htU{w}!}F?oT61sz>4^6-v1fE49lS_9Y' );
define( 'LOGGED_IN_SALT',   'zYY+w;Qb<;E/K}A/@<)H9x;>+>AUtys;@X(|3Xe}n>e~.pJs36Plk8zVM/TNRO#K' );
define( 'NONCE_SALT',       'pWg%Z5OIV/1o&uZ;oO`-xJj+<`Z TcpnBSR+GQEkx%_EZcrQ%Q UJIbOGXHlc o{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
