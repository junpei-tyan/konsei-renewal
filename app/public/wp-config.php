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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ADm`0&7IY.PjB]ka9I@A+[qf0tmhOD(;#3^ETm<Fz_J)8T!D5Zp%r8s~ Z/ 9NvH' );
define( 'SECURE_AUTH_KEY',   '%_?%Tn-s*iiP|QzkwIN3?XNN7)zT=C%Z`;~y_H:L|<Iw:,fWZ-+6dOXt!`wl[gkn' );
define( 'LOGGED_IN_KEY',     ';h75kX,GF9363-0Zc[GXw%_ AZ6.C9%E:.wVwFw}.W8]3m-D$5<b,{v5Z+FtDR8 ' );
define( 'NONCE_KEY',         ')od_/taUj7BCXO?PVeqjy9;4{SHZP[7k@p{@k7|:Qw{IJBUbTL(}tW>n=85G*E!b' );
define( 'AUTH_SALT',         '#lH?h6XvB&hbePZ`(;c+vrC0QM;?lYu}S7_/QAPSBEeM7s/t`AI4m8$b/q%38n?^' );
define( 'SECURE_AUTH_SALT',  's&`IJA38C{F@M$]] K]#YV(lcp`8C.~sckcSp.4Mj7&EmZ6n-lp9z@SDV$}l{T7o' );
define( 'LOGGED_IN_SALT',    'E_0t+~|,zE?2VF0l^,v&LlGP;JA4wS)Z2F2pTD0d{h}yA%/>5<:!I}_6(_t^;_^r' );
define( 'NONCE_SALT',        ')BXQCuH).RuNUSS84<P1e=2anVh?YZkF|@!QdKITG=TM#!: Zh):pT?` 2bNo8vI' );
define( 'WP_CACHE_KEY_SALT', 'e8G$=~CGX~GO?6+>],J54qq].2AlWAc8]D0?He@ZEu.N)<XIKLEh%lGqp2KxyNTP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
// if ( ! defined( 'WP_DEBUG' ) ) {
// 	define( 'WP_DEBUG', false );
// }

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
