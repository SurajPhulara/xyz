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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z3 +:E+rg n`8#T^`ndDc$/)|P#j&-:QjPaR.lFZ:*^h%G-^ *n6<iSUY{oTYPbb' );
define( 'SECURE_AUTH_KEY',   '!_x*ahrgSZG]u-~+/X=xy&=atQ^V9t5bf_HoP<0,Hq4?hyjBoOViW%J1xK[]/:OU' );
define( 'LOGGED_IN_KEY',     '$MU$<:0d>Oz(3Im~?&[(m*%A$i6$KffK_C?aVv=-cvKI)$)WF*Zz>sVH1AZsthXi' );
define( 'NONCE_KEY',         'r)Tzg=FU~`#FuG49PX.#@ewJK(8iwcTYA!+Dv|::DSvk=oOpW?{>wePZSFNA_n_^' );
define( 'AUTH_SALT',         '4&co~kH>G+_PQ^wZ9&{Ax7>yqkL@dCb~VP4~uVV+1jKFDW@|)0t$_Pi0dBA Od.L' );
define( 'SECURE_AUTH_SALT',  '#`b2DFRt0kbv!NC:4r>t1=KEdl{zC{yU37FwOXvhWks|[pfri>>,q=*#uPw[lnR-' );
define( 'LOGGED_IN_SALT',    'pdmTEsko_ 0{]t~X7](B`mn>yyU]8j`p)as):K#8!P$0_UAe:bNw&:[#T<_NIwwg' );
define( 'NONCE_SALT',        '6dK?F60]S PN(zb-}:nW3L:cA#/{VsK=L~4i8UB.D>I]Zmj)x_zL}1IZQ&#GXS5q' );
define( 'WP_CACHE_KEY_SALT', 'P_oAdn%.yR1zBck3ZG>!NP{/JYzCpl*=0}GlkvHK$Gh4cX@-49l~R{FV;H.6yx;l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
