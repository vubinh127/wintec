<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wintech-course' );

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
define( 'AUTH_KEY',         's5+Imdj>SJ{*eDp[Y&%*RvdH]|:4jB !j5fV@,ZLUc:@e1xVUb-`!$rtLX.&(zY@' );
define( 'SECURE_AUTH_KEY',  '[og%6)E);h&^Lw!h+:0w7Yj @X_qBsv<0(Fdc]h2rpzm3DsPL#Z_@Y$ e.7N^y`j' );
define( 'LOGGED_IN_KEY',    'TDY!nhu)i^y`|@ClI}27UCfskI-IO<8Bh*BKH:n6?{Fb4m7RGdLot/h[B9G+BcQ}' );
define( 'NONCE_KEY',        'mzHa}2jCdxMeB{!<g6UEAMJp4*Y$]|!7q3sod&BON[M1DigUT%/!rh4OfG6[})8m' );
define( 'AUTH_SALT',        'D=>4j~=boiGIhn60C:<xEw>9(7`#|=FX6>Q%Uy+wB9O.p*e_cM#|7+%d_p!>cmaM' );
define( 'SECURE_AUTH_SALT', '9au:WVXtYrj!{%xKlu!,BD>%PX-x5*/GN-=b4J=H?m^vCH|Dq`8N9EAo~s9!uP ^' );
define( 'LOGGED_IN_SALT',   ';ba/4Lw%xMJ*Xo.m~,+d OV5Y,CLGNb (U4kNg7PlTX*i58!L{m.v{{=H3+`LQx!' );
define( 'NONCE_SALT',       'P.i|)G&fq:PU=H?Hwwz|oD,E#2wx]Ag9KpPwSs<l!EdGG/X]fhAqK5DAdI*JkWB,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
