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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '4uCTffVn44HJAq9bTBkhCuGrfvrDv906Zslsyvov7/Hobk8jPKDsKdhW491IGNQhcFl0djU6SzF3Ump5jmfw1Q==');
define('SECURE_AUTH_KEY',  'qeyk0ZpZ5PqxHOYjAuxwbDXIRz5nsCDW5CjfYCsEB6UhKCxeFlVYBG4ZyetTogIKBPFCTyg/UfcUEPHoXWNXOg==');
define('LOGGED_IN_KEY',    'fsxeQlf5kHgcOkdx8L0QBzmxyAiUmhNzGjwsGmlDXIONmwmdC1QIoZGtmoQVBrQmfLbIrplB/BjTXE3tL5PsTg==');
define('NONCE_KEY',        '5xHJiwoA7WEgAU85W7TubeqUZE8DvtLlGHgkseV4TGbKWivmYuT61x09AZLZAVB9/0d3Asq+zx0xsIjB0RNxGQ==');
define('AUTH_SALT',        'rotiuDL52UYusdki3Z+sSiSSlUE19Yn+dXvAz7+vMjN7uI+l8KrN2fkLa1+t66cAOJkX0ffwpZZHjmzspcJKKw==');
define('SECURE_AUTH_SALT', 'Qcsymxj95bFFsa6B8QZj5c7QOU9NdeGexIxguNe2M2NgzAt9uFoWk+7mW9nnbQAJEsltmVE2LMNMoz8kg9PV4w==');
define('LOGGED_IN_SALT',   'P1s4Y5kl0EQBXLPrJZlft8CIqZZ3XXIaUjTdhgZvRlaXGhLYhFlF1m7ewBu4Jcq+4yacUxR5lk3/gBRNmaKVdA==');
define('NONCE_SALT',       'MzLPTCmn+OBqc+Qr4HOTz86RS5M8uS7LlD74ycQYb0XRkSOpTNqaU4Ey1pGJrkbXnri6QQ6JG9HAUtkZo0a3EA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
