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
define( 'DB_NAME', 'Bumdes' );

/** Database username */
define( 'DB_USER', 'Bumdes' );

/** Database password */
define( 'DB_PASSWORD', 'Dav-Evi-950' );

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
define( 'AUTH_KEY',         ']$&B?fdN3Q[M6usgN{sRou*)rC@D}34f%D$Ik%<CW#@kJq>Y7pozY#OqzC@MBJWG' );
define( 'SECURE_AUTH_KEY',  'z=[PX,RfjZ-Awc1|7Q4%g+C%0@5Id{G_+HQv|jCfPOGQli]+jOnJ%Br4F9Br|7?f' );
define( 'LOGGED_IN_KEY',    'HYp}$G>/`qwh?dI_Kg:PRU$AejjjZYGTOLAK%y$%czIFDFr*ze#LRh]><[|s~ZlG' );
define( 'NONCE_KEY',        'vj,9=)HgRy(LLA`buw=$lf9Il&=AJBk~le8PX}(K3/#t^!4X1Dy,dT4SjE+Ce!-<' );
define( 'AUTH_SALT',        'W)r!p~?/t|A}sHSMOt4.v|._0 U@AZ+M-J@CAYJ%-~8?{DBfRRq8o@+kie8BH%%j' );
define( 'SECURE_AUTH_SALT', '&?X&pz$AS]_Oyx<V{1<QAmAvU!kJamDpXeIP<j-~/cHRjr`Q@5CBctyYY8%dZ)S[' );
define( 'LOGGED_IN_SALT',   '*xBr~xiN9MsfR*As]H/%)r{<#B%<x/OUh&r=N>hKE&HtvA {^>c,`STO^_5JJBF/' );
define( 'NONCE_SALT',       '4W.9{=Z=h)0D|l<w+UNfv6C[{35g@7H7!^M W;-L[Vwc?(/]c2yKOaPz]~V<py7)' );

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
