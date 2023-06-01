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
define('DB_NAME', 'raphael-malet_wordpress_6');

/** MySQL database username */
define('DB_USER', 'wordpress_93');

/** MySQL database password */
define('DB_PASSWORD', '9j0R6sUoD_');

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
define('AUTH_KEY',         '^*s11WvXwa7KdUhl&6en*xPjmlm9PUVcMTvlo&bZ#&fW!aKBZfRUZ2xwHe!VDKj2');
define('SECURE_AUTH_KEY',  'ETQUQE629CpwruzoJyGVNX34gWIJLnQGOPDci#F7FM%iPAC1KJQv%D^!Cr36MIaq');
define('LOGGED_IN_KEY',    'SXedPh9okXhkVkWe1HqKQjjRd0cdoSohFNg^V@!N2Kk!8TX*(9#vr3^rygina@XJ');
define('NONCE_KEY',        'IXwL@ZGTJtDD9LsBQL0#GQ8Iue#Lal1^sLR@Us6T2Djh(3LLrQd*TBYOyavRgEwK');
define('AUTH_SALT',        'sxh9)E2%2#opqG!3FbGW0l4mbBsqtTItXs(nU3t%U%!1XATxL98wPsuGTE*#fED3');
define('SECURE_AUTH_SALT', '9bX7%8%(c#r@uedPgb8xckXV(ek^oM4ut(6Re03PnhE1hu*aae!&YhQ37cEK7H*v');
define('LOGGED_IN_SALT',   'n2%hpX@J!*!h6i47d#T2DzY)CIyuBTG&3mt0kEMxSWROerknW@uVat%SKfse7RwE');
define('NONCE_SALT',       '(o4T1j%V%OaGG!1A*hMQ)Y#mqUXz#vNamQ3nQjERa2aKA)(1vc9zUCsQikN8yATW');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tC8Xw9U44_';

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
