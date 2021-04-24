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
define( 'DB_NAME', 'ado88863_csdl' );

/** MySQL database username */
define( 'DB_USER', 'ado88863_csdl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lk1Qq51!' );

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
define( 'AUTH_KEY',         'fi>|Q[+{J&gw6BM[uHIR*8NAcXRaY`{G]#HnD702Dz(-x04U{S~A340Qiuh;eh59' );
define( 'SECURE_AUTH_KEY',  '&(*Lb[mul)h!+.1vQCL_cM[|&Fx%;WfPvV=|cZ2(+z3N/B,086I<8>D]2rWe@I#[' );
define( 'LOGGED_IN_KEY',    '_ )g;L4GwVggUGbqBTc1Z7MHX`*`&cDe(fWTV?TUozg:L&Xs?yy2N$}xRPV.#WuK' );
define( 'NONCE_KEY',        'cuyB* 1a/ tXe6c={7>ocY-)imm])ph:H[:_],TlDGWQq ?zUoQf#p@Wukqn`/tj' );
define( 'AUTH_SALT',        'X@d*4zh40D9M?9mR<Bp}zh,x/)oql@mTOj#09XFjghee`d+k`Hm8+C2E-d}vJk~v' );
define( 'SECURE_AUTH_SALT', '-_rVCJz~0VBXN5pBN*sF1}i@(u-P@JbD)$,p(AU@Vg ;0,RS3}[1}<-R:9Ar@06+' );
define( 'LOGGED_IN_SALT',   ';Gw?E[& qC)$z%<A~)2{_pvuE&kROqr0ogy&R|Q!`K:<ea^L:CvJSeNrx17F$lpi' );
define( 'NONCE_SALT',       'cLr/ (BxGtAC%(kGf=z[xctiSQ[}y*7Y(^Ld${yB(PMQ;^}fX.s]palAXC./?/B`' );

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
