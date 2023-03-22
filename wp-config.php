<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v*:)n~#vP!PWUEge^U)WPp&J[Ci6gine?^&f%v^pH^S0wA`Ng0sBf2r(fb,H=6lp' );
define( 'SECURE_AUTH_KEY',  '3.+M>>bS<QRaq%3.Qkx.XB|a%MDsmC>cV3(`|L)I:hw3QQr]&?)AQEK6iWD%},xA' );
define( 'LOGGED_IN_KEY',    '(jYh#+2M1po_qHsjK,Q<a3$gx.7^X}ZK:*Z<L3I(v4Zom`-xp2.=Qr450aBbb3F,' );
define( 'NONCE_KEY',        '[WcD<!:[pI6AQ>&0#]r;#IVsZW&%=phGcHrw#bkZ]8 QMS}yE_6^hKMIdr:[gFsz' );
define( 'AUTH_SALT',        '.X|V{ hLW0Gcq`%}{Rk)DJ%6NgZi/&hIhzj[Y#71#iYq6W1M>>/teaC_-@`}`meA' );
define( 'SECURE_AUTH_SALT', 'wpOeNEpZJGeAB).FSu{[V+C[FV<;H`2 tt|`<&LM:]YuP%mc;/MNovjMVd()e3Xg' );
define( 'LOGGED_IN_SALT',   'Z-/H!%hqbu`8R:D3^`p#C[Iw)6VdQ#bFeK`|#~Hi(cM,E88mnbLEvKU@sW|)QOoV' );
define( 'NONCE_SALT',       'z[-,xzUlV[=-qVrmy{H>{c#9QuuLkwwP*F.[}y$=hn7*K=%aROSvXT:oXvHIg`i4' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
