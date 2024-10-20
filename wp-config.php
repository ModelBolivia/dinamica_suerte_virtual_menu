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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'suerte_virtual_menu' );

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
define( 'AUTH_KEY',         '? 00?5d$4p3/assM6<03fg<h$.rJd^wu} yTnzC;Q+Y44{b7cKFG-+Z[rQ(>EJ8F' );
define( 'SECURE_AUTH_KEY',  'DB-R&IK.bhPr+*1LpS;NBpyvMpLsJ{T:&6[ECCb~okjqeI KHw`:;:Ue1fl$  q}' );
define( 'LOGGED_IN_KEY',    '(Y!s$zL%KTL=T^QtD:a;24E]]G% 4GnMsv,)uCU|+FpFGpIq?W},&O?@:OiVEDu]' );
define( 'NONCE_KEY',        '?er9QQ9^_Z(]Q`U?)@5d9toox`V{FDk|%D%4c;Ul[Tb/u[{d@,6S+q|D2UT?,&a#' );
define( 'AUTH_SALT',        '4jVlauVe|d]G]$C}a2XGYjf=%0K&YG30tc3@KNcL},3iyJ.}Fnrt&R@|BjnBrmSx' );
define( 'SECURE_AUTH_SALT', '&lm)+`YP#Viod|{+Vu<EQK^O9%b(AI&>t3Y6ZDwe^[m%(x+!W}o{@&E/ooR3IKgw' );
define( 'LOGGED_IN_SALT',   'Sz8dnd-j^gt(B9HxB]#CN72~o.0hv}%2cWmHQC,LYpIExtcaUTHB,g(`=EPXJ7S2' );
define( 'NONCE_SALT',       'kPD3:fO[IPVl8ihC%.Tg<<RckSqO?79AXbRl`3qQQDm5%?~mLe+TyPly1{HisPeY' );

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
