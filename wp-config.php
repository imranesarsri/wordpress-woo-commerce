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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-woo-commerce' );

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
define( 'AUTH_KEY',         'OM#Dsv}H`H*CFm(9_<_>FPFM-866$f+CJ47`!<{!i2f$G,7}thT~to^TKh1/|+x5' );
define( 'SECURE_AUTH_KEY',  '1%_m1V<ZPo;{9|D(Dg}M}_4LUg7iUnJfz,}foX7i#B4q,t7%^0hv7s=cr#,]Qp}3' );
define( 'LOGGED_IN_KEY',    ':|hpJ/jLrsIrvyeD=pm!w/>OR9G!b-w/+XLp9GoG2cMp;V?AtYvXQ^Xq_raL`rgx' );
define( 'NONCE_KEY',        ',EEBck-Ek:rTh1WU?g< S$hCKk37bOdGAkZC hWgBds.y`HP/c)+>`tt;acUHNcb' );
define( 'AUTH_SALT',        ';2>=i.NJu!P[Zf(CpT{k) _u_W_- Nrl!yD@g:#R rRW@SGfuc!bat%!,w>5mBE,' );
define( 'SECURE_AUTH_SALT', '_mXH5{+>b0Xy|8 SYM :87cBJ6PozI `O62.Q_`2.@lZk%q=`qp8-/`4YKE`;ET5' );
define( 'LOGGED_IN_SALT',   '@qwxMB)gM02&fsN;B$24cM<%k#MXf}?_Jf,j0!0?sKW_9I[/0t~SV>WC*@rxh*xB' );
define( 'NONCE_SALT',       'gv0#jcsf$TH$Z7mcMze^.g!ES.U&hVW8k%wkp-ejRt<8g`bq]Za/ piFqv1?C^*,' );

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
