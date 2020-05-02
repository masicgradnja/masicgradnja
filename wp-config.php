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
define( 'DB_NAME', 'masicgradnja_db' );

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
define( 'AUTH_KEY',         'CB.4vV}!>;<&,M#v>gW_,/P5Vb>=,z|m:5hOX2*qw_&Iax,ZB3fX5sQ.9*JlvKMZ' );
define( 'SECURE_AUTH_KEY',  'AHKDzGLt;=$eI>E;WIbSuAf`EC)z^E@,{YZMvt<Z)Hhi-oXXug!e+!OH.|O<F.P{' );
define( 'LOGGED_IN_KEY',    'C2Y6Qr%k>NEq7(QMjf/vNsss$=S0O&K3yNLYYRJf54MbfxL&IJAbaXx~z=-pwcLf' );
define( 'NONCE_KEY',        '}_700*VTY-O`McZ/(x033OysX[?q+]#4n[*u~94}FC4;Gc.W?^0dG^`nd1qMi#y}' );
define( 'AUTH_SALT',        '64hy^*-Uj-s0DhjGzQTb3>14AdBhX8ueqlP?IfFx/kGv]gX|]pLXcVl*||.jB#~C' );
define( 'SECURE_AUTH_SALT', 'vm}9N+oD4/-dY6Pd/wN9[peY/XH-!R#nc-mulMdCF]ecA|&=FSr+<qS=J=&57l4<' );
define( 'LOGGED_IN_SALT',   '!l-em+Je_afqRqQtk(7Lp$]f&f|;>KkhgJ;`+<3J)QLvFM0$.5Q^vsq,@3CDorYz' );
define( 'NONCE_SALT',       'bBe~H0d%P6xU+*<bSe 0y>*r26O{ DUeUQ&qy@u/zQl?mf<@6tT#Q-X:Y>QiL&G3' );

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
