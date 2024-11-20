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
define( 'AUTH_KEY',          '|n8OGiMo}g$4>GInelY:=[rw_VQ8-~aJVur]Qj]3xn(d#?N0o@}>mD/^[5b(0uHX' );
define( 'SECURE_AUTH_KEY',   's]$&B9+TLrOy3wv7^ygE7Dsi3gs!BWxw8%};Z9d3u%i}J>p1oouRE,acBRKXvta#' );
define( 'LOGGED_IN_KEY',     '6$wnRHCOQ#ti|aSP?Z[QI>2AW%os;3([(IO_!z[1XrKLJFcz|>1Q.+13,l2c+^+i' );
define( 'NONCE_KEY',         'Sk&AO#8@4V(PR/h^KPKsb8r%ySus|zd(qZ7 9?iSi+}27UMrg2~V]C1=bn|I/LTr' );
define( 'AUTH_SALT',         ']FwJ%{Rw5WPhFbd0P+>p98wz8/n,F[+Ee,$Ph 6;kld*D(Rw.)ldPIXRalQ*fg<t' );
define( 'SECURE_AUTH_SALT',  'ucp?eQ@]W3pX]FY=o#ju+^Cs=5w,yT aJn]k0QM)g2rRoybo.aGR*Rh:]4^j4f9]' );
define( 'LOGGED_IN_SALT',    'Il4c:*uk&]+]0 -a{7>eAH2J?A/#uM.!|heC1%bags-7EP/3tBl[lh.tJ_iJ#C6;' );
define( 'NONCE_SALT',        'OVc&h*Gq(wC&E3A/5BIiqh_m;R>76SyO;V4Bq?PHu`2tiOT>32(.|^ bzL%77BBX' );
define( 'WP_CACHE_KEY_SALT', '+d$e/c3!B=Ibx#kmE8;T[5<LY?4OcXar),.^mab6jSE4yH|@4O2}dflKvrfya&XH' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
