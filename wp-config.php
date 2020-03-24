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
define( 'DB_NAME', 'loft_turistik' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'xP.S`)wIB>l1n%M4Xc$ioSc64)na80LT2oe4,&G(:@MN1]wj_(rwr[`lzqtb=?3Q' );
define( 'SECURE_AUTH_KEY',  '7o9#HZkN+YS8mn~*hTyEIz,uW#-/&G~miY`J~3u`-7A$VS=Pn~9RPf5JOa+8lB|_' );
define( 'LOGGED_IN_KEY',    'jU:Ugse00pNr@`t9zgZk5{8RB}QBHXoD8t_=RC}jN:D=$k+KnVBfXqJV}A<B?j>.' );
define( 'NONCE_KEY',        '$EP&hBBJ*u{7x&.sm;LgInQ_~%pW)X$e$hMS)`DKd*Z[O~UphxB me4USfOA5ZGI' );
define( 'AUTH_SALT',        ';QCL9;Iz1:(+u?mhkT%oC*RxG~rL^% 4eD5H^OHE;<hV*X1xK4Ky-U$zB!mdMqeZ' );
define( 'SECURE_AUTH_SALT', 'HJ]C8]>Q^&F1>&/Sm29-cH=FGH_1Xl Oxx*tSwKTbaeg(PlyF,?W%M~%BUMf+a/g' );
define( 'LOGGED_IN_SALT',   '1*n=!Js$dCTW-a`]%RS>Caq~`0#-7]:-6+G*{UgvJKy[j,#e5yA|%W~BJUmzXR}2' );
define( 'NONCE_SALT',       '@Sv^}f$z`ghh9gj^l(/=CFcWcWi{H,]%-<-9Vv;7hO!(U?;Xl,cG4/?0c@g32!^j' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
