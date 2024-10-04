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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'fQM2xKdky/(.d6o1UV&F1?]|[N95O*D~&?A})&8%3I@Hj_xW.K]S1x*qp`C}:gTj' );
define( 'SECURE_AUTH_KEY',  'r?%ooxx7Lgx,8d{r%t[ql_a*1AadIzU7gou0-)nrBDgv{$<c`DvouwZa<!HJda{@' );
define( 'LOGGED_IN_KEY',    '{!v?Av86Eo>^`]s6}1d#{20pQtB.>XeVf|ShbkX-vdI-C>:e>{V+:aD~)o!1mr8N' );
define( 'NONCE_KEY',        ' KBM}38NZjwtHy!h3 Zp:*`d}3b4MKh,]zLa]8| ;>G.OR>+3bz-6OB:r^ViTHB ' );
define( 'AUTH_SALT',        '4X{mV_Z*Ob*6G1ICQ23pGdp5^))D(g6Jw!4k0@JnQrh~q-JDD/-;L7}8L3YVPW1*' );
define( 'SECURE_AUTH_SALT', '=tSE[W=tk2@?XTVk(G![-d;h<iLj?6Pp2vye-lT=yeF3/&9rXIRtAP=`/lQb-{>O' );
define( 'LOGGED_IN_SALT',   '2.!ucqcxBgfcc~Ki}Dsxnztf6d1/I9nH`akm%e8lDx<|n;s32L1fQia)n|6|)SB ' );
define( 'NONCE_SALT',       'kNb3[J5Y12{*sO8e! !g~yl9D:h$#*,IA)~8XyC3Ltd9!ECE&xj<Z}V7PH*a_<cI' );

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
