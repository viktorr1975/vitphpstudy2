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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '5f81f9de9f');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2835f3fddf436479e8dc21b4216c969f11c2eea555e880e9f84b300a230133e2');
define('SECURE_AUTH_KEY',  '558205c2fafb84e0acca098b6f1dc228ba3a5f3de5f345b211f1375cac0cdfea');
define('LOGGED_IN_KEY',    '88af83468c2d65b39f0a9562292a152083dbc3d7cc35829f16b33ad7a8afd3f2');
define('NONCE_KEY',        '69ce12f5964a7c4598fb0773be28d2f24326a05065283290aa30f6d51b655bc7');
define('AUTH_SALT',        'c01ff5312b4d00f13f13794ce7a7a64bbba9ff32debc220410bf96c8567ab8c8');
define('SECURE_AUTH_SALT', '2d19c4cc5638007e0200327d63027469b27cca551d2fa722ccab4514dcd75cb1');
define('LOGGED_IN_SALT',   '9190c54fdb08f31f8969b3662c585da17d4e40778246a955cd671549be74840b');
define('NONCE_SALT',       '7512c1c23e2204a43cde5b9d5fb64f3909de4caa87f6d4c62aaa0cdfd998126b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

/*
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
*/
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/*define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');*/

define('FS_METHOD', 'direct');
