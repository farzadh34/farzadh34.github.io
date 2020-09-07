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
define( 'DB_NAME', 'hotlaunchit_db' );

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
define( 'AUTH_KEY',         'X`b!WFOUIC^r6!:D>|!jKE]}Trj.pD}+?h.!+H^6X>ty@_@zhXWP5Ww41It6cr+j' );
define( 'SECURE_AUTH_KEY',  'c! i|JnLBBMW35,[#Ky&bK~1 z@c?Y>m7|kclqL<8rc5RFxM:Y$JUyOAR{*5^Hhx' );
define( 'LOGGED_IN_KEY',    '/hPom0vt_Jz/|}`%T:JMS_[O4|G>=`;5S0pLDInv9SFN5&a@ZdQP^^GyOL;[XP+b' );
define( 'NONCE_KEY',        'r=c|ZFbL$32wb7mXur)YEiAMqt!p$m$Ub:qbbh32H5wCeM1f+|=gai}q:hVzP86o' );
define( 'AUTH_SALT',        '06a ZhZ C/Vc@I[O<)AYz=57<AUpy_uoTJ)}C[sNk :&p6xl0G:M!8QzcR*)J3/(' );
define( 'SECURE_AUTH_SALT', '|?,!98._?TPhNTM}-ZFa*jqeSTfmRD-:hM0adUU+HN.Ja(TteH[_uSUYc&cl /5#' );
define( 'LOGGED_IN_SALT',   'E&<81|oi_}&uL?fA2nJ[4V(Lz2.DRq2Od%:/&+hcD,zlKZy.LJA3e7:wR{_7*Lb.' );
define( 'NONCE_SALT',       'Kt4OoI8@QM@]K}g|l&P%Nw2=GYh=q)haYJV8i:1Wp;j45]A5DRL.lafL,CO?tu9y' );

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
