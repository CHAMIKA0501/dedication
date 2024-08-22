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
define( 'DB_NAME', 'dedication' );

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
define( 'AUTH_KEY',         'V`K&}f0$TnV3iA:Y4A<aSitgBJ>:.yF1033 ~n2{OZLVkT612jz<G;XYDZbCfhk&' );
define( 'SECURE_AUTH_KEY',  'Ef)OkrD8oBd8x3i}Hymf}z]u!#m^;da0aE3nQY]-][T#Lv=5}2Gi.vdoX,:nzwCv' );
define( 'LOGGED_IN_KEY',    '+9yAG/Nc%89Eqz7}lPvj000y_;(z|+6 [g+vP{5H4}Z[U3NZIKz,-vgekY`e~^2/' );
define( 'NONCE_KEY',        '+&}*FapXkGfCz36f]JHZl3Af[~n$cp;j0LSajP`T+P7ggrEWomF(m:|`Cs,{$x1&' );
define( 'AUTH_SALT',        '+z>7go1;`|Z8yk7;^H`G#F#,n]HY~7uW[5NG]}5;<)~^,8qzfW}^[V~/a9foBG`Q' );
define( 'SECURE_AUTH_SALT', '2lmaM5K@)n3GE[1lCLW&d9<qu78mw;45:JM.;Pwq7dL#x{T& aA?*-(kG)w.G,g4' );
define( 'LOGGED_IN_SALT',   '>[[!CBI^r BsbAn |s^=1ST`wW8Sdba=DVLL%EpbWv5@4er%zSY,>!$t6]KWeR@3' );
define( 'NONCE_SALT',       'X~;M[7ml$&*TYI(ZaH  n4=/P?0!4#Ly|/;MIQ*B(Cd*qg#m=8^RFOE0Es;p*luw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dedication';

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
