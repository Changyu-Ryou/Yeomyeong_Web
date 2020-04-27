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
define('DB_NAME', 'yeomyeon_WPLN0');

/** MySQL database username */
define('DB_USER', 'yeomyeon_WPLN0');

/** MySQL database password */
define('DB_PASSWORD', 'E8JwRQTKFSVAHePbp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '58a93e72721f141b41c0c379f0409d75f9de61f67188c1ba7ea5d8a3ed81d0ea');
define('SECURE_AUTH_KEY', '2cb9679248c0951eb00ada27b77ef696e2033fc7babc5b9c3bbbdfefc8ec36ce');
define('LOGGED_IN_KEY', '2d65bb302cc6c3983ac1f21cf6dfa51a42c116bfe9d6c6e5a81717a7064212d3');
define('NONCE_KEY', '54327c8ba97a3ea77016f184fbe73ac6e0b1fa1c1779ebbdef5ffc2c0b12331f');
define('AUTH_SALT', '596ebcfd388d13ca034b574301ac29c63583122fb6300eccddf949dbfa08220e');
define('SECURE_AUTH_SALT', '58d9344073f4e836e542b0667265b0cbeb2a21623b6ded2cf8190c90cf60ec7d');
define('LOGGED_IN_SALT', 'c467d0b1dbb7111ca953749d06685b7edbb90b2090a0e8b92f9bf36ef90a0172');
define('NONCE_SALT', 'a929ae7f8a657c976d875dfe785f90e4161467d9a9b12e8ddbae6ba537634279');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_LN0_';

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


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
