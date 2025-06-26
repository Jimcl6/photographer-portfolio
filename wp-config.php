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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'B*P  Tu](HIB|[V&ZNWnqb5z9dE~*CVk~;QgiekaP|!R{~t62u>26iviW<k$k4v$' );
define( 'SECURE_AUTH_KEY',  'gIe}nri1y<5mygJh :u.szW017H;ZsIe$pa]i5H%6ZpL%2>(-E%HaWQNhzDLeK8z' );
define( 'LOGGED_IN_KEY',    'i!p<nnAS7,roLZa9>)oEM<<Et&kv88w<fm)lG43T:K %&1K+<Cre6%{woG]+{79;' );
define( 'NONCE_KEY',        '<EJr;DaE~6aY}/q}3 k6hJuo;5bnD,J,<vC<}}wprN?|Rkf#gJzFi2?7DFV+33i<' );
define( 'AUTH_SALT',        'G6D?Vc?DdYuP6n7ynmuDMIT[B*+te8ZL.k{)LDjF$UI=x.4D+9RYyBbE?~S1m+U{' );
define( 'SECURE_AUTH_SALT', '/3xNa+4{yVLFN`/N7DF99ePG9j~^/1S505r#C7X0D[{?aVUoc|A34HTLMGchioR:' );
define( 'LOGGED_IN_SALT',   '>q/cqRCRZxJ_+iNJo>MKF2*|j|i}j*8^=j:)#/{K/7?#ojr};D<`]P.K~S1r!!r[' );
define( 'NONCE_SALT',       '-J/P3TqK~cJz~T1!PCA9vR,uEQinq?y%^:f~-2f>!-$(XgC_x4E=ZTEra%x;.Cg#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
