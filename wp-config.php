<?php

define( 'BWPS_FILECHECK', true );

/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'designsa_fyH9gkU');

/** MySQL database username */
define('DB_USER', 'designsa_fyH9gkU');

/** MySQL database password */
define('DB_PASSWORD', 'g9k4w1SPtm');

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
define('AUTH_KEY',         'rjkk86ehy3wktq2uaxa7gg4foyerg5feghdkuhihkfjwr14v07q9mf6dgylrs1xe');
define('SECURE_AUTH_KEY',  'kw84oqz8vqkiwct4gtdye1cqzo98rpmhtryusqza123xoazxlcmqcfxrqqvlj0hc');
define('LOGGED_IN_KEY',    'kx9e7tkjifgucavrshgfle3s8juqghsicq1u1yp7rcoqnqlhhafjtbvqjnppcdeo');
define('NONCE_KEY',        'xmqalxth0mvrghp2ulsmdehgbvbanewiyniy9jffpako6uyb6i11xcl2phiejmqn');
define('AUTH_SALT',        '60y1ffjyfpnfp7og7jwhc84jjydjxoycyorzo5f1slshythdtmhodby6erl46hgo');
define('SECURE_AUTH_SALT', 'cv9judzgxe2c6hr5sv8rhsm1q7f6xtzlsxp6jateg7yx44quukdsb3e58repoug0');
define('LOGGED_IN_SALT',   'vz5jqnoxf4foxopuypesfvbq9jig35t48btsfmcyketwag9tylzjcfey9vqxpnh7');
define('NONCE_SALT',       'cwgorzzneuzwcuyafur8vochrlq6wbyj2cjv1ypvqtldvcnqmwaebgxyaovwmp0k');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'G5r0OiwZ_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress.  A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define ('WPLANG', 'es_ES');

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
