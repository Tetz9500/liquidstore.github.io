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
define( 'DB_NAME', 'liquidstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'M:9UtnQe0{nn~>FbKMj PxJHC]^_TF&{/1z6R36b)7?3{D-cP7-6}Tyoixq9Gz,R' );
define( 'SECURE_AUTH_KEY',  'kl97KwJ0b{a6|Qi+Jit&{S7X4Wntep.%|y&lo212nJs4(/FIz@ ocM2fMXN@PMhP' );
define( 'LOGGED_IN_KEY',    '413DzKhw>[;7J68|FA_BlY<lHFy, ?dq%l Vku`xU&i4XaL;ByGXR/fm5Q=6=5u)' );
define( 'NONCE_KEY',        'MP:}*<Z{lJ@[HrY!hfi+i:@qBdqX{ov)N.{[3tN4y50x0 tPCvfd}g{Pki=M5bjR' );
define( 'AUTH_SALT',        'O.hZVV0QXm[Wql[{ey^Yt~xFFIkZwd>[H*1Nb/VulO4lBUVj^>^IT-LSX1)M#ZYq' );
define( 'SECURE_AUTH_SALT', ',[-O](E)5},E)3eizblIsV<j`x>T4.5F/#=](xML!4lRvkZWEpq.jvewsUpN},HK' );
define( 'LOGGED_IN_SALT',   '^Qe4&PI]2*hC_X;P,E*IDVT=#RPz7)30;[Yp(Sm4=tUNO&9=m![K7W pn5e$T8OD' );
define( 'NONCE_SALT',       '3| iR@J9@ /j.<^W.h_6xFb!&aTT,k)P{t!1V1111R8wt~L|Ba-ZepTRHY_@Re6c' );

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
