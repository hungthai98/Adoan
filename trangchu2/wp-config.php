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
define( 'DB_NAME', 'adoan' );

/** MySQL database username */
define( 'DB_USER', 'adoan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Adoan123' );

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
define( 'AUTH_KEY',         '|dlPYR]o_XPcBp-r=LoR12JN!w(ep0D2;Sq`Iftf ]louh/I96}lMKJ8`AQ+xI32' );
define( 'SECURE_AUTH_KEY',  '2-Q.{{ jtGRBAnJg7uSE^b)xc>oA&a+XrUENfKJRFgf7rPCEKk}@2nM.N@D>Ps^u' );
define( 'LOGGED_IN_KEY',    '89cII7`4yK[HCUxg6,M(@dc|LZ04=9ueWUwSkvU*Ux/sh:}ml[q=82a:_e-sf%qN' );
define( 'NONCE_KEY',        '}]K_FB7?v+q4EB!62,<4},Z_p9b4:.OH8gom,vP2>/wp{|!V<Y#!N^ff7o,1Kh%/' );
define( 'AUTH_SALT',        '(^/9]QKLXzW4{9Un)@Fsb@ph/nUv^F;Ki^O,FazOWBUJ@`amAx0Hjr<K}[eWm<f@' );
define( 'SECURE_AUTH_SALT', '$7]*`@&W]5RDnC$|BNX~LZ~>b4qD:`e*v)k#|@h^%iO{N)#?nL6F6$?+*=R7zvO$' );
define( 'LOGGED_IN_SALT',   'X%fl?*n0PUB5]}KXrBY{cn@_u/}G8 Q;yd>+erTz&~8a*K,rc.8G7[ F+@Z.RW2/' );
define( 'NONCE_SALT',       'Z/~PkRzw~A0,<>FN3d/cI-P:l$H[WyDKMm4ME<*GPz2N%*d<TXg +cdJkg#*,H_>' );

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
