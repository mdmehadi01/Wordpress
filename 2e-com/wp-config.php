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
define( 'DB_NAME', '2e-com' );

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
define( 'AUTH_KEY',         '=)iRV[VH1j3%|l};KjyauY}n3_|RwV5CL#,+bPJj(g$sMOg-<pGBEg:2PE>(HEBW' );
define( 'SECURE_AUTH_KEY',  '!m2Ol+SsND&1Cy6rF 5cPM?[^=@G<aaCOD&)H1(4I[qWzD8R7)+V/NK5:&d8t^bM' );
define( 'LOGGED_IN_KEY',    '%k?${>FOjVOa_OPg}i1P,4l&J=KAsG$N2jWZ>b,DR@GigI?l%LB{pVKI0m}eu3`Y' );
define( 'NONCE_KEY',        'L!|fzr97)LQpiJXMGh^fp1;@e4t`<n5=FCvJ>B!nTTz#n0C-o`:Vk7%gkz0x3(L/' );
define( 'AUTH_SALT',        'nv[K[hU-Q^cZ.A})znrK`gVOQ9gn(zgNf+?[U<a+4|PYiyW8XT#<.EXjcovqOl!Y' );
define( 'SECURE_AUTH_SALT', '$*dtZn_`P0`7Gn9C?yCn8d=aV-cPV!9FEVPzQJvfX}h0)1an#|u,*&}V!H,RT!d]' );
define( 'LOGGED_IN_SALT',   '&[a6r-=/JkuaQB$HZT?{[b1/V0,aupAy<m*,XqnXb>?[`/{DGnG/o,GqA?W)9p47' );
define( 'NONCE_SALT',       ',S||O8Y|d L`{G5JZDN+??awYhX62<4|^39-6HHP$:J-<r#HHGd0F,lT~%H2[_`p' );

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
