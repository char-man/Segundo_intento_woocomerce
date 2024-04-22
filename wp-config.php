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
define( 'DB_NAME', 'prueba_2' );

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
define( 'AUTH_KEY',         '-o<rW@#/YJ@v!VxR8MB-LU(5,iKmP1:BY|h?i>.KBuILayu&G2Q1Syn28dbQ:>vl' );
define( 'SECURE_AUTH_KEY',  'B?DYx.zcq7@/(ahE)3.KZ:(ef&!`W*af4%%b}pB++c,6sX+X-.F&|Ck25+9AJ[S?' );
define( 'LOGGED_IN_KEY',    'oZAK-=#K1C*ceRqh-{bkZ oWG8Q>0]LQt}N%n?3*{;1v/R#F2wr.w!_|4P4fEN[q' );
define( 'NONCE_KEY',        'f3eF;wFHMee=JTERl Yq:CK_V?qmiH$K*x/1iV~a5Rv/uv42h5v,H#O>2Va/#l;q' );
define( 'AUTH_SALT',        '-8:<wT=Ii?n3RzSs0q%6{3@2$U=/;Cuzsmu(l+vK$yEOQ8EWNp|<a][GPGF|pp8j' );
define( 'SECURE_AUTH_SALT', 'gOX%b6pRq{?Gt&O7eT3b1;NZ-gr<den_`yw/t!%PQQS8-nHy]ATsf;HxFUy~YQ*H' );
define( 'LOGGED_IN_SALT',   '~w|?T&v&#6eu-8(zY>gKdpdbb_|`Ll;Td!2^eL&Kgk{F}^AeCGz|!p#|ZTsH1bLl' );
define( 'NONCE_SALT',       'ge5b$ytZoSZJR94Z@ED:5g-wA8Ha+zc^|(Wgxhz/J|j-qoGJ`)iaj6uaQo^_@Ovf' );

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
