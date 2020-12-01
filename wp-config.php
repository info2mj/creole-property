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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creole-property' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`3Yu|*B_ZF!/$n.5!xm}BIcMHgslq3tz4!x#d.Yh(_m)LG8%W?28I]F0pd;`<;(H' );
define( 'SECURE_AUTH_KEY',  'vT!URa0X.j3xI6fJJ[`?ACM+JVm8)vZNdo{ZZQC}v?C_:H!Z^a.Xs;0my?F3:lmd' );
define( 'LOGGED_IN_KEY',    'EV/1&ds:hBV9Y/#0U]R,DZBVTPZg}@8pf3i7 ]irz<P/MS2).Fc,u@E/cD,o7BC ' );
define( 'NONCE_KEY',        '{StCNAGCqgiD+:zmu0_K/P)zVyoUYrN3lFgwy#>$^;`k7#O?pm_dRV3y7_Q?Dem/' );
define( 'AUTH_SALT',        'zA)Pa~vhBjIZHhkN[1mLd)qz`Y-3~jS#bsONxY9ARxA]!-xBe&sui]%e#~,W(4IF' );
define( 'SECURE_AUTH_SALT', 'J17$#r=fj%$U&6x%BDF0YFxB;Ykn]M|7OTA]m?!`w%?,P[&hi|2H1]KKA;a|)O?s' );
define( 'LOGGED_IN_SALT',   '*$+;FxWz6Gp/Rr$}cH}GL^265${2N?s(!TlrJpw~@)6*%%j#HYIn-|R eWHMv)3P' );
define( 'NONCE_SALT',       '~1~ETr`j3};jL?EDg42^e$LWYF&,7U&9f^N{6>Vy)Cwk&W!,dBIT[E59iG,*&[zC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
