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
define('AUTH_KEY',         'ZteB0z0y225MKvW88TbeTeGyAiDEtwbv08qKfEzZMFA8JPTIFdOTbmh97av1TfX54fZ11uG21szBCKpHoc5mow==');
define('SECURE_AUTH_KEY',  'F5trdf5jOJrY/3qbL/8JD6KIA7+BHSMXT5KtPJXfewaRRqRjaLL+NqXL2Py6bO6L2P8arHNqJJBLVh1Mr87TZg==');
define('LOGGED_IN_KEY',    'fimKdiIwR+077BZeP6wuyM3b7bejTH5v80v8BZEE/CVI+qjTbI14QtW5sntioSyBV2K1MohkJ5M0H4mvJPvgKA==');
define('NONCE_KEY',        'mSkGUot4gYPjDmwSoe3LsXUFdqBkeugUK8tIkfkHw66nRH+5eIrNJnxqxtszPQvOCIee0ujB81nu4HKNSowi2A==');
define('AUTH_SALT',        '/KPKsZXaBX2ieL2mboPpxB8CkEWx4Dy/QaImYl9dpRb9lfJliZSaht2OEb2iqqoIPCJLax2brDMDMT4xUr33tA==');
define('SECURE_AUTH_SALT', 'mfajuT4kOuiGdsnH71qFgjRAoNDDrOeQsoUADQAknpSURyIZBuU7HPzJiDR7IYZdy6zoeshgEMQimYluLyogtQ==');
define('LOGGED_IN_SALT',   'APUBLq8qOLR06wtMuqbnDvwrgLvw8kQYZmP2y1L2vfauhgCUTFZ8se3i7ZxDG0Ce9ALK0Im8g8/M+jLOzlSEvQ==');
define('NONCE_SALT',       'hpJcebjG1jIW89ROFgDfQJFwpzpnOEVP62Q2SMQAZeg9765gAzb9vEBU0rEOJPYin/c5VJX+HaBvAuYVyLeo2Q==');

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
