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
define( 'DB_NAME', 'wp_landing' );

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
define( 'AUTH_KEY',         ':w.8c:cP{E{`mOok]/bFg1hl!e4-ek Nf($*+**&s(T7 S3#Hz:tYFlL,.w)9r/b' );
define( 'SECURE_AUTH_KEY',  '~9:#+;63i<gdK%pEcJf(Z0&(-*$?l?GJRv{tQ0/1 6;A8!Z.;zj2WBrR)eF;P)v:' );
define( 'LOGGED_IN_KEY',    ')]Q@QMlkb?T+.c0[lI ?J#:g[C|T*BU5Y-b;3Z<S>h5Q=+vq0xPOOKDxdaQDC9v$' );
define( 'NONCE_KEY',        'Eg|;Ubh:x?DOs`eP$Lqc)F|K|>4d*)IUOfMqPqMF:c2/BI,&N7BzJhq4Ob}G<u8#' );
define( 'AUTH_SALT',        'JV|[eg{V<TqFUEnPGswE:o(&han0~L7`g})p@*,p979^ECf#h:!GE8&amF`//-P(' );
define( 'SECURE_AUTH_SALT', 'l|TOFaK(0Z~w?-.a2GQqGN$foiFw#(}HJHz.:qQ14#Wh?|:rwz8<?/qOeeuRsO^`' );
define( 'LOGGED_IN_SALT',   'xLB:;V(5C+z[tWRC.7ts1^:n@1ZHaLNIE/Eg*UrrPD)xLP|K=nxPNee?3T.>ELLI' );
define( 'NONCE_SALT',       '=Jpk_M7NmoP5P*09Ic{_!v([8?t*aw+$98%WyQe~4iivsts/Q[I%XwPeSb?zs)%l' );

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
