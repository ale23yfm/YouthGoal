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
define( 'AUTH_KEY',          'G/LBp2i9nG8KXu/V4:k,Z0fVlaaa4y=6?!8<^:`.X(%=<:=FXr.C1A)%`OWoFtN ' );
define( 'SECURE_AUTH_KEY',   '[)=f2@Mb Hj>uVHlJGS7IE4=8Q` o3/jlrOvZD%,CvB-DE2ViEd4N4YcE|A,9$3x' );
define( 'LOGGED_IN_KEY',     '!Ui)BBaa 3p`-,rs>WZJjdF&Cu,VS8S]9*|++RGnbBPG/y 2B(|-~+x:@bJXPY=4' );
define( 'NONCE_KEY',         'L7wgZ8K}9GYd=$f@wEA{l<{paQwbtg8(Daf/Ipox1ueMfmI4!A2p+{C6Eucvmjx7' );
define( 'AUTH_SALT',         'MJ]*{]J?5B k&qTmzF?BmFP]q.no**#=yoA$ONc-u-8g6 wJ5(Ue=EIg{5vhT:bp' );
define( 'SECURE_AUTH_SALT',  ':5yYv|Q2:^C+Rv4.cc6)_dnos9z$Z,R /),~8-V#8EDBA^PlhY<>1xr;GG>uKmcs' );
define( 'LOGGED_IN_SALT',    '{52tVAw,/rY#W^6xgoX4~cN&2pSLLKaV^BNQB|T,xm`0DDnVL M DoyE2b7ic(9^' );
define( 'NONCE_SALT',        '$4=2>)!Y3U`R[M4}MLomG[^S>IGn0Z_dj5an$y]!WVGFl&gs8Hp;5/})`3_J`Dt_' );
define( 'WP_CACHE_KEY_SALT', 'DD_$a9H`c{Z<g06E8@`51q1dGF_~KngjYD!(UUM|>w$fr,zK5@9WnL01Kv{xG^(-' );


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
