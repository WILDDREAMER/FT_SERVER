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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hG)QforTW2^XxYv:emY4zNfksaIjqI$R?]mol{isD?1.^$G$&26U+=; T+h6lEhH' );
define( 'SECURE_AUTH_KEY',  ';?E$l?%=>lvRH4n)8?TI`XbGKi svD~_nG}3dD,B%ib$^Y2;uJWRdb{B-rv7sB`A' );
define( 'LOGGED_IN_KEY',    ']:o-+yy{GXo~R@zT}TYgotP)Mb95B_co4Nq)2o[*=7eonA~$N*Rg?-/e 6(K|`pV' );
define( 'NONCE_KEY',        'NC %&T]?L|w@i0kMv>8EmGv]|tAMrOD9W$wNdL)lS-P/<2c>Y2_@{dE5a8aY+@8A' );
define( 'AUTH_SALT',        '1TpSifGg1BN%z/g.[g#~rh BRQJ^?8UrUWZ]#R +{xGoyCN#o)]sv9:9FqAT?}UP' );
define( 'SECURE_AUTH_SALT', '9^qa[b?MJ9{AmdYP,7Ur]%c(5{s=xf[h;Yuy@(vJ;oVat+6vllSWaOYBSpL(iz4a' );
define( 'LOGGED_IN_SALT',   'r_.M#K9ejPo=r&.Qrau@7GT,74K:TuIhCrxE/,y`yk,,@}g0sV8#1qKLKgvaVtJ3' );
define( 'NONCE_SALT',       '+<9ni6WVd2TDALfe4,Uw@canAcPQ%=8VsBWlXhe)$_5kIn7mevDa 5XZd*ZE*43s' );

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
