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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'muhith' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '>V3 !r=u98U3yG8Rgq:]hsiZ`zMHj-jSM0L:n%mWx]:; yF)6,3u5=gt3M&Bz*wv' );
define( 'SECURE_AUTH_KEY',  '2_VoFvF>)le)(lyf_N]H|yY;-q5bY|Q1+b:%rdRb:bS=J-i3VTnWb:THfku|^62L' );
define( 'LOGGED_IN_KEY',    'hDlMPjA_G/hWy{KLLAXw3>f3L4c_C%`Jz`+I9$DvCa6otAZx:k,-mIt7`(c~c?(%' );
define( 'NONCE_KEY',        '6NA+g~FI1h.`y@09rjbxU5 3Zx.2%c=]qHf(Yu14 x=42@eNIU(!#V*rT+ddm~W[' );
define( 'AUTH_SALT',        '`:JsO(g]W];E3]j${}rzHT`VK@tA#A{wXd_2LX}YxWFCf=1Ni]b` Dxx^aw?tTSh' );
define( 'SECURE_AUTH_SALT', 'R[GSAN=W1T4}t6c #joBMnA?!Y1:?WbRl*,RB%u{e0-TWWR@#5Egh>f|&LZ,igf{' );
define( 'LOGGED_IN_SALT',   '>}Y{<`LxvrQ+>E,Zs=M=3BIb,jMHfWQf~,966o;1Z[Ys>=68t9-v.oO]$iqzwT=q' );
define( 'NONCE_SALT',       '%I9gr+o#b;=#)<[wU^Npdd|gMZAR5C-:: McA0A9G_Cg}dz-{-:/H|r-ddutjiQQ' );

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
