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
define( 'DB_NAME', 'Fashion_DB' );

/** Database username */
define( 'DB_USER', 'Fashion' );

/** Database password */
define( 'DB_PASSWORD', 'fashion@321' );

/** Database hostname */
define( 'DB_HOST', 'mysql.youngstorage.in:3306' );

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
define( 'AUTH_KEY',         'ou9WO<SIcn,0ie|^5AmLrw,AwJ:*9WIim#Yy<^`H4@`Vf <sCap[>/&XdJ=!qetv' );
define( 'SECURE_AUTH_KEY',  'Z/h2o+erZ9^^kBb+~%yL-I-w}`Kip?$.Ja@dX_@AnafS)^,kYna(O~>6A4K+cOtZ' );
define( 'LOGGED_IN_KEY',    '38]~6d3aLaxIpEn+0#m71.;^F2Ra1zv-?l2t[>r}%M/1bz2SL!U2m@6gb>;OY$$d' );
define( 'NONCE_KEY',        '-=clXFBJu<1FaZ0W04aZ@n@Qg`6sI%JRpUak4=3pm4r~1:kKY-BUqjSs%f@_jR_Y' );
define( 'AUTH_SALT',        '.zZv=g`PS2Z*h.=,IAd`IN2K!uEVNi3Q?Y{h@V_2[Dxw`cu<I>e~p$teGz$-8fW8' );
define( 'SECURE_AUTH_SALT', 'EY mM,]WhuY ZFB_k$U*ca)r+l8^_<cHXTA>-{MJjc,8(:#{&cyJm,h~wuA8Ay,J' );
define( 'LOGGED_IN_SALT',   'dnvNOF39KZe/D:gs3B(MvZKxSA+;+4;xv,E;hjf[#r;l0&lmtjBYz3h%TN(WG9Vr' );
define( 'NONCE_SALT',       'zjQFwjX?)jKQb4FwTW4`]tVig<fm3x26cZtpamK91o4t$F~l[UW>7p1%oJwN%s!$' );

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
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
$_SERVER['HTTPS']='on';

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


  