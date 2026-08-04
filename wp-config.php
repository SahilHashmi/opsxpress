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
define( 'DB_NAME', 'opsxpress' );

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
define( 'AUTH_KEY',         'QVz#f8kL-P9m3n@xJ7tY2wR5sU*oE4pA6iD1hG&bC0zK!vN8eM%yX3jF9lW7qS' );
define( 'SECURE_AUTH_KEY',  'mN5vB8xC1zK4lW7qS3jF9yX0eM2hG6iD1pA4oE8rU5sY7tJ3wR6nP9m@kL#fQ!' );
define( 'LOGGED_IN_KEY',    'oE8rU5sY7tJ3wR6nP9m@kL#fQ!VzF2xC1zK4lW7qS3jF9yX0eM2hG6iD1pA4iB' );
define( 'NONCE_KEY',        'pA6iD1hG&bC0zK!vN8eM%yX3jF9lW7qS2uT5rY8sU&nE4mP7oI0hJ3kL6fQ9zV' );
define( 'AUTH_SALT',        'wR6nP9m@kL#fQ!VzF2xC1zK4lW7qS3jF9yX0eM2hG6iD1pA4oE8rU5sY7tJ3bN' );
define( 'SECURE_AUTH_SALT', 'xJ7tY2wR5sU*oE4pA6iD1hG&bC0zK!vN8eM%yX3jF9lW7qS5rT8yU1iO4pL6hJ' );
define( 'LOGGED_IN_SALT',   'yX3jF9lW7qS2uT5rY8sU&nE4mP7oI0hJ3kL6fQ9zV1xC4bN8mK5lP2wR7tJ0qS' );
define( 'NONCE_SALT',       'zK4lW7qS3jF9yX0eM2hG6iD1pA4oE8rU5sY7tJ3wR6nP9m@kL#fQ!VzF2xC1bN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
