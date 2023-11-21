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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'essada' );

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
define( 'AUTH_KEY',         '>.[QH(K[/R/3MCl[fy1A~y Gzc<&-4*STUPA])ku6|4(IlB5c8g$_gYt$lfbtna|' );
define( 'SECURE_AUTH_KEY',  'qF%|vNK6B>{JaFcaW23 mJv0$KGT!/jUU0g0%]I:*HICs)Q}e,1?d;WT]xj@@`yA' );
define( 'LOGGED_IN_KEY',    'bSaU yjZ|i^KNlR|+zF:sd=sIlk/@Sq,@wRn-r-et>]vZ/Gu>,g+t5^nFvf+qMT#' );
define( 'NONCE_KEY',        'E9kDiBY.Ku|}1eP.b:Ev7s6vkyLa9d[MymM!vNY=irdv_VI|9Llb@[D`PdD{9C9U' );
define( 'AUTH_SALT',        'Fw>Nk3j.NA<Kh;qnE07nY<apB{M$YtE=pTL)V`Kbqi9>;zIe^r`UKLze5U8mZ]KR' );
define( 'SECURE_AUTH_SALT', '[1eJE.IW_Ok^};fk@F7_V8Wf<D*gPQW_e%bc..C#PRPB*5EhR`p`N#>N`krrTT[D' );
define( 'LOGGED_IN_SALT',   'R!7._`v;`kX*:`{0M$)I)NxVld#8C=S7lt6@&d_#3;sxSD4sWS#}{XdUYS[<gQL3' );
define( 'NONCE_SALT',       '&lJ_aE7 }C!PB/<.0L~uu*3J:~3N[8Qyh3AOviT}e#.Fc[{<SR W-omG1B+)>4qC' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
