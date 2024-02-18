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
define( 'AUTH_KEY',          'E&f|fl]_N8?Dq=).?pWh$T/>n80}#!aCt2QZ-^KA~?),%XtCS`UJE4&J.=4Ut7}+' );
define( 'SECURE_AUTH_KEY',   'jHgKsX|;D<4)0,y6ek:$q*Wl(L7e?zPaYoa{Y+iAViAgk{f)X&71SrA?AI;q(i3+' );
define( 'LOGGED_IN_KEY',     '|]B&Z_?z8@S*0%Paeyh!yOAg94QJww1lLh%P/ER,/rk,d:bE5*&E7Z=)4!jEM]f}' );
define( 'NONCE_KEY',         'Czo-va}gM|It fQCocv(x6cvi@b#M>@Cq%{q G5S~Mt*DKj>mv]fB-}h|E}Ph<<9' );
define( 'AUTH_SALT',         'E$o(E;}fv(8WfcG7h3r`z6or?oRj#,dg9=Gvd>>(Fh>;mPfTgQ;-PTzkVp,R>hCB' );
define( 'SECURE_AUTH_SALT',  'dDiy:5Qi)[?E$pkv3Wmh>KdxnA!5:[T:cR~NF==u(9(|HVQx5BY(4fWrt36*Cie4' );
define( 'LOGGED_IN_SALT',    ' 1f[`vl;psU&xFa/l7e%YL8gnh#<N<Wh0R;5+`q7Uv@,.yqp(A-?tmoFkL8y:MOu' );
define( 'NONCE_SALT',        'W/^[/m/=8*>k]<D,K[qTKr6sPpQ-xqVxDmaTzRFs/Z-,&N:=R(g8nd=vkj @ooQn' );
define( 'WP_CACHE_KEY_SALT', '3O]1WE&e@s]YfKM91[Y.g!o.-.b&DV8~/@&$|LIj<;0os3*.+[69E={tKi+nn})c' );


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
