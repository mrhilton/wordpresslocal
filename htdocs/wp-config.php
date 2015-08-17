<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '07d0789528');

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
define('AUTH_KEY',         '6dfa46451766797c3d4324eadadd6e1542ac7579c4033b9e198cd3f75ccd8e77');
define('SECURE_AUTH_KEY',  '5b26d57010249e32581b4076666555251b328d55d465a364c8d1faaa18f65a97');
define('LOGGED_IN_KEY',    '89c20f43e41a1584ce5e9ddebd7e9352f2972a45662950e8f11066988d571b8c');
define('NONCE_KEY',        'a7e85ab9b2ab61d3fcdcc81653b30a2e1f0e7e0a2a9931729f19a0650d804ed3');
define('AUTH_SALT',        'ff0fcdc4b28a7ba2099a8a02c2fae387ec1bfda264229be8d2b84543210af183');
define('SECURE_AUTH_SALT', 'eed3fc0604ac3315258f9472f0396aff3f5fb62ff4d9085c3299114d2c13f11f');
define('LOGGED_IN_SALT',   'fc70e6ff06284c0256019d01c4263b1741a41ed22c6a648c3eddc93ad9be9407');
define('NONCE_SALT',       'cbbb5e59c414654f4e0d92bf0283acb2519f05fbddb7e3810a845d5d23d0788b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
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

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:/xampp/apps/wordpress/tmp');