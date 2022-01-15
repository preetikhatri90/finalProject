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
define( 'DB_NAME', 'finalProject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y)3JUM2]H;W6jFu>kM*8^n-55&P?i^ExHaWlg25`UZW)Pn~vh#x4pn_y377|9T]K' );
define( 'SECURE_AUTH_KEY',  'w`]W5O^`Q[u;&6jZI4HNXcpdzNC5;(})wQl[q/~<+9PjU-$y_~V7p{cfbNqF/d ]' );
define( 'LOGGED_IN_KEY',    'i|^EZNw%j[GSd(%,%kN%,N5]C;1$5Bz`{]9R1}?<*eijno$xs^{<Wh$AjdUEF,j5' );
define( 'NONCE_KEY',        'mN,m,*R!8^`t9k4;Z]vVVy*eA%-g[W~(=D9Un-RC?B>QrTk{5e]D++=P|}gVXl{I' );
define( 'AUTH_SALT',        'i<}RIQG+#G=5F6Thym:~5Qdt)Nl,rOTS?:6eP(HV|h@6`xl/U[w3G1<)-%7F@mnN' );
define( 'SECURE_AUTH_SALT', 'G` xU;+M1}+ioW1:IJ|3oj-#E.t}2FmcF{Rc0yi54#gX99*<tlq%E6Tc1fD1~mU2' );
define( 'LOGGED_IN_SALT',   'dPOZgR+Md8T57=O},xe0??)yrr3>=!#xwgH{CyR@V*<m1o{<N[EywPn.*xi>rFH5' );
define( 'NONCE_SALT',       '+4;wt4djQ5Ie/mn@D^62+ Qr{>r,PA4PDH7tLOu!/mN{qaE!cH<EbncyWPPT&3d6' );

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
