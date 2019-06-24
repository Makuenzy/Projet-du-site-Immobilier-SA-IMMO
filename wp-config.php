<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'makenzyimmobilier' );


/** MySQL database username */
define( 'DB_USER', 'makenzy' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Makenzy89' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sWQd?<XZrghQ/u-y3Tk]rVawH]u&D{=I)K:j:WJN%m aEznNzXlOamK^;Y&`n>/U' );
define( 'SECURE_AUTH_KEY',  'lM?f2RPwzQsn}bb{U`a+GR};?LGwfyhwX:`%RX3ISYyqLUv>uGH?DO;>WYAg4-sG' );
define( 'LOGGED_IN_KEY',    'i0+BdtMs!@+a?g:bHHL5Qv:rVQB<kXOZEIJ3<)`uLAB)p[WGd%*0t^&(wrJ),^P7' );
define( 'NONCE_KEY',        'CgW/^.VK0mCuz9~.Pk2o(_{.8`VjI[ Z#LC=vkOk3at+#/AZ8 P6>=L$LA!>.)P]' );
define( 'AUTH_SALT',        'x<8./KKwi4Y%G2_IV[:{FsM6wq`c4R-D#|L7q]vvxfbo>]#=@|h3)5F-Z<iKeda ' );
define( 'SECURE_AUTH_SALT', 'eA?#RZv>?H`>b;4$]lnOfgaZS6?+$6q4<i6BnL`0$U=b_vY]M![Bi8!6tyG!OEoM' );
define( 'LOGGED_IN_SALT',   'S<L5Pto q3!zQI*CBK|#&q<L]<BmEIL/WnAOc5d^|<<Yd0D+^XaIge<E6o`*SDDQ' );
define( 'NONCE_SALT',       'q46Y@~CY>%y6=SY{1,9[(3%b+2e5TW;Z9}}mh+b|mVmN=h:$2ny_:onS%Fd3PYMx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
