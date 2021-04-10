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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '- t[*E:UBUm`$Bv.==@JEw@Tb4yCti.sx6{7RUA>_<zh9-p6ZAq8OTa?Oz4^wfN4' );
define( 'SECURE_AUTH_KEY',  'P6d~!w<K%2=P;Q.b]/{V_V~d^zBLRgKNCE{VlsT^2}^F71L<J2+hjl51ytCD`b~E' );
define( 'LOGGED_IN_KEY',    ',b}0~}]d>B)bw_-oN&bSi|*xSb=}LBb@NqCI`?DdmKq+}r9mv5(^C+ZRIy8)yYHw' );
define( 'NONCE_KEY',        '&}/T#.!Kx[@^U=HN)M-_#z=1/4N*0Xk@F]Ue(=QL6EaU7`$#i.,k_Dv)y~:SFV^v' );
define( 'AUTH_SALT',        '(mR.@(f&N%yPPWxWc8,Diac=D&I_E FKgCVF&!E)@B!cosYuNUc9qo]9u*PP!-2/' );
define( 'SECURE_AUTH_SALT', '_)RA8VWs-P5C{mHP+R_yxp,>-cI];DeA,:~<Y.;1&&Ae&j2`Kf&2C/xip{rq4#k.' );
define( 'LOGGED_IN_SALT',   'Kr,gT<^]WxzehEKK7vD!Dyjptewrn9N$C]E(?YMI{o#+z-!<|%>.JU=z$7KRSR(L' );
define( 'NONCE_SALT',       'B.!&9%MO~-Hv1/*}jm)k|aDp6,:wn0i=_Ry4](vdRuCV<!ZrXRm>qKZWl|+05|^g' );

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
