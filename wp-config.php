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
define( 'DB_NAME', 'ProjetSurGithub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'production34' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZFo8hUHPUA2UY2wpvKnsYJKEDrg1EuwACS7S0pXEiM6Ja6T3Z9PBwDSIj2fhBMmT' );
define( 'SECURE_AUTH_KEY',  'QhuHZton7Fv70KOhPuvdl2gdI4lS29NHIo7WCuUidQYFGc7kpdYaaHaE5sqY54qn' );
define( 'LOGGED_IN_KEY',    'ghOi91hYyAtYxqPpRyTOF6xNsKuE3VJE36fNxpbf8TzBmA2XIo363GOCpQVBVd65' );
define( 'NONCE_KEY',        'cyA3ESFWRZJmeAAw789jl9d5RD9FjYmdXzEUNmw93FuGIeYu1atCwttgF0mSMWUO' );
define( 'AUTH_SALT',        'Kqca0HU8fwQFm918lPrdWFGsCeohE5kg0K9kX6Jr2AQbo0rq4VSDdwVZP7aXl8t9' );
define( 'SECURE_AUTH_SALT', 'gsteeRi6ypzoHtd608bJojy1cIRjxXCBUrqfJTKCZ0F8Fk3eaQDb2cFmKDmfeAEO' );
define( 'LOGGED_IN_SALT',   'Pk6nJFxgWWGHO2DGoPuDZQ2oWk8VS4AF7DTFTCXVY62CmfvadB4cIf76UAakOLd9' );
define( 'NONCE_SALT',       'yaKVCnQHDp0AySt2lY8LtB2VHK41Wmz5LJBbq1kXY0uyxMfOSsl6TsGWx9H9vh6d' );

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
