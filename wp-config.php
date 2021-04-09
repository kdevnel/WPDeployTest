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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qdl6KfetF14g1PaB2X5jICYGHXyEyEiiZdAFwoOZK0qPJ3h47CuMy2aXA5xZYTRxeIbKXHYmFAwIAsid6hU6Ow==');
define('SECURE_AUTH_KEY',  'sn7JSdhTdHKeWPbEHYwm2R0C6WFvyAuqk6fQVXgj9m0uKvOrfVHQzZadGjhiSiAhg4OuLg8SCtUZawGhQ7Wx0A==');
define('LOGGED_IN_KEY',    'W4HPdKgcBVrvwupoq7VVP50TIYyEW+5bZUfVH8ewc663Ux0sMAiCSawJ0xJ0QFMJZsMi0o9v40FI4jT5PgpEOg==');
define('NONCE_KEY',        'Oqik0XCJgNpA0oThy4AN1YTBdGJAtD65NNq3HnSNOhXPtOJTahcB84oVq1oexDAdQKHLokaukQ60CvxbtE02Qg==');
define('AUTH_SALT',        'z/01J0VL//8G7oV8/tbiA3q2uypJ2x/xA5rIfmqF/idjjnC8OX+OQp9mS5dUZwguEl0j1KA6sfEoIkSCUU2uiw==');
define('SECURE_AUTH_SALT', 'XcKcjfMNoKscugAm52k2t9ADlX9Fd8vYW8q2I8RBJAzuH+6pWq/XE6sHUPH7cPf8pYDYl3aEvWC1J7qcaHHU/g==');
define('LOGGED_IN_SALT',   'EKh2oMFs5Uyi2X5RdxQ0K01wSXv2EjRbQnoelws3B9cNIGzR5ynPyx8A844vcGRx1LOzyhgRuZQ0kamMiwplww==');
define('NONCE_SALT',       'xkahyls3ziGJsMYUOUMPDdF5EmW0dH9pX5wiP0DEfyzmPH92IocsQt34T39yzEc/c9bC+0cMG2ViWNvVw2SpnQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
