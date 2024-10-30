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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Christmas' );

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
define( 'AUTH_KEY',         'd`R9p,=*JU&{&:}4;6!1,5;WBXe=PX^#][vzg)Jo5_*^TG=x~lV~2`- w8CMqc %' );
define( 'SECURE_AUTH_KEY',  '=`Y=>IDw-:>R9@CWf(DCyI@hAHZJhA`cj`6h^-:ox{?G hEe`kTwFe)M3QUz_N}9' );
define( 'LOGGED_IN_KEY',    'Uz7}.(]M?Zg~X%meSVToo,xmT+;&J&o}lYl>$$*lR]KkFvaq?Re@/zXx:]-daDF3' );
define( 'NONCE_KEY',        'hYsX*X)*ihT}>{G/)<u{aA=IDSauYnXx;5RP2T[}5P)mMr6FhfagOOd7B#2)#J/C' );
define( 'AUTH_SALT',        '1|pJ0uDWJsR9df3w D6Pv#Qr=9d{K7=uHz1<0mzd|NNB/(3bp!B3gnWK;Q?&{9P-' );
define( 'SECURE_AUTH_SALT', '/gfN{RS<6h+V~busAG#>y|3xDo!)V=&IwY:|{%JP.ZG<XK0q[Qo!hzd_TNQW{{dZ' );
define( 'LOGGED_IN_SALT',   'xt*aXchd`63{n/D[UiuiFZ7Jxp8FbkzJzoU~XboDfEN_&oPNteXYB4*iaji*f.;F' );
define( 'NONCE_SALT',       'UHj.LbEdT1T@{K[|+pXKp~50CI#qd.!52T:gRzIqEOn}>+Rs3a~LTQ0O!c31|&me' );

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
