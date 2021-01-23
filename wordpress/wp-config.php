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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '!x*xJ4_<EQ=IGYvVzGQ<,=&3*w)767r4]a7e)|Nqkv(2=bq^oSb+&DSI=XQ}* 9q' );
define( 'SECURE_AUTH_KEY',  'UEc~2WKz($PViyyk])JW{+o*&ZU+GG1.st@824AczTw__*dI!ETZ|vbAx$@@(F&C' );
define( 'LOGGED_IN_KEY',    '*`EL:PGI4&I=0f4<7WA/su`sV@<#r(%>}A27lAj3}MZbi<tSpsN5ggV)Hgdw*M_o' );
define( 'NONCE_KEY',        'swSZ@:;jJein^UDX/m j<IKQznRaUD2!<g1-];0^t~9?PMf?ib9c2hAQKo|+rk4I' );
define( 'AUTH_SALT',        'WgjKtrI6Gk] `+:ALBKVRfzZ{?$/7SM/dE*30c27Gp<a!VU!mIp=27g8K_*6}e`K' );
define( 'SECURE_AUTH_SALT', '0mc!QDrJv~O>xM%N~g#V`M%R6kWS38f(2O>wW|iF!rX$*l$Pw*r(TO[M.[fc.x 4' );
define( 'LOGGED_IN_SALT',   'g7.d9{:r od|y$#%<.t,K5 V4YhpZ~SftdzxH(ucqH|M^ALAILoU1>-(RAoA>/%n' );
define( 'NONCE_SALT',       '4h!(/6PH^x??k$[4}nW7@5yJg/[z0`KIdnJIY^%vE<B+{a_z6I.U+4*{B{![(ou:' );

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
