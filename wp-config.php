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
define( 'DB_NAME', 'IntranetCSL' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F n)wEYLapQpMr>OE|hDi#fj|J2b2O7;KwuK(+8m^GXf3~M%U##7}TY3c FED1xp' );
define( 'SECURE_AUTH_KEY',  '5UfF>{rx/.=*|,5oh79Me-!)0.a1Ib3p5qfg<Qe^s%G;ZiFnEq`(6J.^Lq_Lx]t@' );
define( 'LOGGED_IN_KEY',    'z?oG6VIkVS1)/qzofq>G=>kPTyFj#aUSra4ge,C(TOxj;de0d+P/LgitF^hIUO/7' );
define( 'NONCE_KEY',        'Nf<V3?Om7ZfK=i<s0bREM`7i9.#/WQDA)@)hffX2g.UgF[^k9s{}k7]2k}&30e2T' );
define( 'AUTH_SALT',        '$QJRFrw7B!OG)Cbp_Fv7F>85<~)VM-oL-t@`U_~V;0*#5<bq}9NEXomESi^yG>C)' );
define( 'SECURE_AUTH_SALT', 'k<yRtf&MpG7wzfP-6t3y!8vnhvy#H+-l-<zYw}vev_HoO]7BY{[=GYG`Hov+~Me#' );
define( 'LOGGED_IN_SALT',   '4HeNiR`RQPzN22{@2|fh5vxRj_8w^a.og(=O$QKcSc^BW<-9tDdKz-DN*Np>8:i/' );
define( 'NONCE_SALT',       'hZ_:MvF7b+|J0R8R|)0F(jN:dzp>.(/k$pvG4z#HAmD2T:KI9 e5$oKIIB$M 6A<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_csl';

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
