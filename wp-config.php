<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'i1258610_wp1');

/** MySQL database username */
define('DB_USER', 'i1258610_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'O)i@2w3X~J31~*7');

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
define('AUTH_KEY',         'Dz7q1EEpG1uQPqAU5XgmCKv01EBKOcVEHhVXlq8SWRSk2XUkavYJJKAmcabLH1O3');
define('SECURE_AUTH_KEY',  'Lpk59WWTZrivy0k2FEiSEIyVaV4bZuZt8765c4bOq7sESE5j0e383iWLd2c3nqHS');
define('LOGGED_IN_KEY',    'GOxA2XKT0gg6xiJeMFhu7goEoTocly68Tzt8fpLYfGyrXHkxa6p47fJXB6DZYBct');
define('NONCE_KEY',        'Ulfx2yH4zUEKXnfmLEOw0waW99xSmvVDF6qqG1lyl9kRg7Z0T9cI5vCOFxxLdna1');
define('AUTH_SALT',        'S9zq75ldgK6cXml0tcKO7OQN6EnlxbEiFpGSzQCNFYdJzzy970Ux8clcbCytANSF');
define('SECURE_AUTH_SALT', 'XRWWqML7NPkcgonbO8140bvrj5npYThXIlxlKULQbVKRn2LnwtbTyc1LWDXxHfWs');
define('LOGGED_IN_SALT',   'rijOz6Q1gFB5RpocqZGKPjd39B9mb2NOqqvJhPkEurq3xduwdrM4pRgPwITcLEYF');
define('NONCE_SALT',       'MZAZ8VT3VxCY0CGiNluOTmGhLNppfdvS0G8glClqo6uFqdsJMChK88E5Wujcv6Np');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
