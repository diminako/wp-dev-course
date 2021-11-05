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
define('AUTH_KEY',         'hQFGEcb4YM6i3tnYmKkoZb3wNjX8r7qr54wGcMa4zsKUWwoYxpLexnnKCNqlWpAVEetcbZHbrsYePN+wsqdg3w==');
define('SECURE_AUTH_KEY',  'ga5urQQKn2HBUpProRGt/Xro1OJyc215E29Rj3upYXkzIEWtxQggATqvhyxgZhgnu1B2BeIW9VXJwYxdDR1D+w==');
define('LOGGED_IN_KEY',    'wTFHr/Hi2C0iPBgZRXheiP0SzOyvdzaEGl0OHJkXVYTd/39Y0MMneURsLB5yCVf1cODPBr8NQyG6LrnW9j04nA==');
define('NONCE_KEY',        'Z0iO+EDWKBC0cERAyRzaCLASFWiU3rYn+68QnJBny99G2qqUmHMrjwiJFHcZ+DVkZukcfcZLyiEXVJocXwHQ6w==');
define('AUTH_SALT',        'RbD/oSg1NY2K5AwQVLnUvnZ2MmzZ0EvrSe+y5qmiy432d4xBAahMNBHOEPG691c1JSy0xPSVdzVLd3bo3mAnUg==');
define('SECURE_AUTH_SALT', 'oaiTtKr4nrQfHLIcmzytfwFSl5n5Mtf4wcqS/HEDjKVAcP4N00dLXRtjoMUVR81/2lzQMA248rsxhf8VE7zylw==');
define('LOGGED_IN_SALT',   'f39Zt21xX3WyoSrhNhzIVQ3kfyVCyyIsrPIGnS2g4w//vgVWWbAuZPIWlPaxvJ8A7zJ2s9hv63xDbVR05MlKKg==');
define('NONCE_SALT',       'fylNy2lFEYGAftQAExcXHsVKFjQ/GyeISf7CzIASiSKFQgW5QWknxS+ZhZBXYyoIw6PqVMmmYtN1nu/9ytVgGA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
