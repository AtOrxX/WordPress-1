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
<<<<<<< HEAD
define( 'AUTH_KEY',         '(|q#Ev^%rQ1zuq1D7$>HiM+v}_CU7@`vVJkL]r%j}+(+,=T-K*(C/yB><vKiZPhm' );
define( 'SECURE_AUTH_KEY',  'z*usoL^$oK8_<iPRJ+xP( !g<.lXnj4VKW{ oyW^Y{zqUOAU@1L*yS<3s&cRww-z' );
define( 'LOGGED_IN_KEY',    'E_`tc]1ugCzw$[&tq!-fKR.i.qw?uFk2kKy^@:q%`S=z W:.8Y*0I%Bw@Ww[0,[y' );
define( 'NONCE_KEY',        'uVJrys*lY(>S?pxlxfxm+f2~Fe(I+aLk}e; MVlNPjGW@zb31jF|wd*aV7t>H?x$' );
define( 'AUTH_SALT',        'WTD?T|-3EJxU<7f<#l^:YKu5~mXXN14<0:O5b$|Q>D0.XkO(We4AIz`b$,]n,]=:' );
define( 'SECURE_AUTH_SALT', '}l|thVk5Y_(fSB]n!huxh<=C)BdTtvXqg]~>O0}Peew31drA5NzTt9!kqAV|KN.K' );
define( 'LOGGED_IN_SALT',   '/rk]1QShYde=`@[AL=^u^@!dr_$vI+;nZU_<?Le{kR[f|ZPM5q00-O)z`K7A^a=G' );
define( 'NONCE_SALT',       ':]zjpE `%4;EIT2QN@(^H>0R|5DGyyJ)o3Mqk<vj$<Hsndx66Co&PFbO26Izs)9B' );
=======
define( 'AUTH_KEY',         'm9%R8xE+>`#g~huZhh?!B5,dXF])M(_<aW<GkvxY?BBv(^3py] 9D2OGyCO0n4*@' );
define( 'SECURE_AUTH_KEY',  '/J7D+[_F[tU5+A}w3D,7`8(a!/]Y.<1$iI315`c%OP*;aHdd%`~L.tuppCH>KQvB' );
define( 'LOGGED_IN_KEY',    'wFa<nHvoq`yWST{cM{&*vrCwE)?]t&]uXTF2loZh[rD.$-8zx>r#J,A,??6[.k$6' );
define( 'NONCE_KEY',        'v@`Wgx=I?yPJSP^HM >U%XsI2?74P8TCcHrt:7m&a$`ob~&DUvRB74;Xz.C`?}T(' );
define( 'AUTH_SALT',        '2?K&8_CZ&K#h_g>?wi;IuZIh/l2kM~@!*tl]@/,K|sNH.vZInuJC728([CM4.2ue' );
define( 'SECURE_AUTH_SALT', 'vYqIG1oRLr5-C?t@|^_C:^d*SbjH!c;Ee$|4|O*YO,FOXK@7d)JNEY({Se6zm~WI' );
define( 'LOGGED_IN_SALT',   '@,wzk:SuX8+lBEgy-P}&Ybl4V0ao6Mv!W`@X741.}}qeS}<p#fmfG#Doy9}|hPS0' );
define( 'NONCE_SALT',       'mP&!H/O>^D?DI1 H!PwoJ/fPuK5fZfSN1g3k?V8pxWQA-OF.h7;co*:^(1iKP_RP' );
>>>>>>> f2b76f98617d97d262ac3e5f5f03bb737ac3c202

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
<<<<<<< HEAD
$table_prefix = 'wp_csl';
=======
$table_prefix = 'wp_bdd';
>>>>>>> f2b76f98617d97d262ac3e5f5f03bb737ac3c202

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
