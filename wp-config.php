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
define( 'DB_NAME', 'bareaz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'c!U5Tc5(hafSiaOI>3!2-k[^jD/%#FZ1qH`ClT29<=6^O$W/8 s|bkRn!kr1c X0' );
define( 'SECURE_AUTH_KEY',  'i}(VOW[fE2co&g!<y&XlBvo6[M}eLO)3q)+y0)Fv.:n&T,.$8RB9H5;{(Sd[o3cd' );
define( 'LOGGED_IN_KEY',    'KR1o KzD(0k5bgfaH4jw@FxeDhx)cS ,m&[f#ncKzMAf1b3gWE|]Be9HSuw3!oE]' );
define( 'NONCE_KEY',        'J+f0~JDIA8;6T}lhB&a~#!&%_[.@m<o.CG)x5uk~El]4G6*x8Z>!kp`Ab1t(@:[y' );
define( 'AUTH_SALT',        'xQuQY=Ku8Oj0IIz+>f%0:6#Sz)){2f?.6K~YmL8 K*/Kf5NrLVV({Q%N;:23cKjF' );
define( 'SECURE_AUTH_SALT', 'E 5A)q=Htj7`!vNE(PoP;n+uB]*=sIeV~F#M#^fRcpw^|gqBq=SvjqXrG;,/x[@M' );
define( 'LOGGED_IN_SALT',   '%PCG6_g(yqAG;O@r+]E7g-:+#v2g4t?EtK_lv^fDMJC.9q yy+E~A>-+Z&-:]-}.' );
define( 'NONCE_SALT',       'g[O9Wfcr>:Y}i$ADd6UDCltQi^-6T!VR!tX|KWSANO,MF2_JgoqK6Xw`)i!,B;JP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
