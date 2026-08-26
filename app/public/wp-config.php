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
define( 'AUTH_KEY',          'xmBB/)IaZy!)^mc>aCzLQb$)+],/!|Y^ &$;>ih wpe=/(tC3F3&]>w})[D{MG#/' );
define( 'SECURE_AUTH_KEY',   'R^OYlxb,6I<P<#;{rJ~X2yyFMqbuP?h9Oi-FSs>Q-{tOvHu3D@p4=iQ;u:];kcvV' );
define( 'LOGGED_IN_KEY',     '&]q`To*X4`uh !t*y]` =5q0[YBILfZeYiQx<esid41vg1+Jime|MIW:cuq&jT9*' );
define( 'NONCE_KEY',         'YEy|0U<n)KSSAg:lq{6uGN;iXMyN7a(E&@/?vd`[[$jE4#BT ToY{t((O<!k(xP`' );
define( 'AUTH_SALT',         '7G}MCMuoQxVN$VBtQpJ]N<) 8mmx2Fy$#X -s>T6h3(.I~#0O2VY$;-Gs+Ayw22T' );
define( 'SECURE_AUTH_SALT',  'O-xM|Xxy)eLcvEg5%%w1[,zK *]f:L_pg<~veQBa&2k!{E-Mo6lVaYwI{=$=s&`+' );
define( 'LOGGED_IN_SALT',    'ArFLsHNq cUk;{5WIi<9HYpQR|zVGVt9iogTTy|q4qd-/AC?<#25LDB*i7#BW7-4' );
define( 'NONCE_SALT',        'mn&O-gi_YYLPrtXc+hWc,G5o<lX?AT^b+]U!YeE:>[`TG<ep?XIQM&T`o4ZJ4AHJ' );
define( 'WP_CACHE_KEY_SALT', ' (h* ak<u}(`C$0]nu:{O:%^It(mD6WZ8uVc}#L]JzlrOg(%C@ibc}fu=nHR!tZ2' );


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
