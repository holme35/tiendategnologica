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
define( 'DB_NAME', 'wordexpress_bd' );

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
define( 'AUTH_KEY',         ':Wa836{4>?~4T^;P7wd=AnB]t)(0!c.^=GyFyTUA*l1t)v8+XjMmtw!LsTofv%AI' );
define( 'SECURE_AUTH_KEY',  'TMBd,Gv*]Wtg=>#nIK2MU>%|j_?VYV+[G7e99CnO;G*N@^{VS]&? !9_ZyvQuS+I' );
define( 'LOGGED_IN_KEY',    '}-^zsBVIR J;{_x$r|Pd*rBZ9@lT!yC#;NQ}VFi>D|)riBfh8/Wi2$q=bl+**b,y' );
define( 'NONCE_KEY',        '`oxsA=+fpDC`9bPv^68Yf#rJT9VB;XZY~EZ6`=tm-LJ|kZ^_HCIZ#gnLsXP}P:Z2' );
define( 'AUTH_SALT',        '1Ku(mF9.Sn9OmK5i<9g|(Y.Xtzn70?uom~5x29C!#aRW/^ RITp#NwId{oZUOK3v' );
define( 'SECURE_AUTH_SALT', 'Y8BXPYdK+?Rn{==.$;u@iYDizh_M!{x#UIqf<R#2NIwt`txt2gltq&r%KR>NEOI|' );
define( 'LOGGED_IN_SALT',   '2<@O$Y=(d8}zK?K#Y u^MK_B$wTTdYQt_>le.vobqbE>8Oil:T_6f>T=x,9<@($v' );
define( 'NONCE_SALT',       '4l4$1Hzm3ck05i.fY8/K;:[~DNWIMhDA^u%yPYn-Fq8O4L[PTa_M(]5l2<%>tJ^,' );

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
