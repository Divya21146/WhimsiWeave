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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'whimsiweave' );

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
define( 'AUTH_KEY',         's!9Y-t>JO%?Z~gP8?lGox2~m.7ci(N?%H@~KvfxHaAi=?<FQm}(o3,h4kqhHo0?r' );
define( 'SECURE_AUTH_KEY',  ';U?Ll.`X_uY*1k]WO_@5t4e+*ir6&Az/Gq;4t@%T=rQH#]DcY*nrPP)J2i|n~15d' );
define( 'LOGGED_IN_KEY',    'Ta>7@9ds*JTiY)jM}`xSK(I*wefprPxOckXS=[BVX/E5W^4d/q<JiVW*awBs-<o[' );
define( 'NONCE_KEY',        'vZ2mPcA6j3h%j)*J=RN<T57zA;5zSnI/EKIJ@+Y8};7l4+-[^3-eV[zqYT0J=dra' );
define( 'AUTH_SALT',        'FRDrG(?c#nsVSMl,NaEqTNe/>DY3A7~J}e!M3s(sB3Z.:_XKMm:[6hcc+:dt<.{%' );
define( 'SECURE_AUTH_SALT', 'OcbSXL=^mL--u$txHC>G:F&DM?KKqlNNul,1TP?.yU|qCO4c#P98;2I!qH~5wsgf' );
define( 'LOGGED_IN_SALT',   'YXD%:+0]4g~vpdKf#(&#:I1V{(M3p@|e~/vOxGtWaR)8?!dl05A7Zr^>xoSRUv0?' );
define( 'NONCE_SALT',       'O]wCApITObJNT+:cvvas;vhG>G/ggaQbpveQoGSojM%0?D@anN^+o<G0Cw7j[9?m' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
