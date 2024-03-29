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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'wordpress');

// /** Database username */
// define('DB_USER', 'wordpress');

// /** Database password */
// define('DB_PASSWORD', 'f5fdc3e3d115f90fa322f80340884675beaed544cd110a57');

// /** Database hostname */
// define('DB_HOST', 'localhost');

define('DB_NAME', 'kodai');

/** Database username */
define('DB_USER', 'kodai');

/** Database password */
define('DB_PASSWORD', 'tZqsls7URjNC0aF');

/** Database hostname */
define('DB_HOST', 'localhost');



/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

ini_set('upload_max_filesize', '128M');
ini_set('post_max_size', '128M');
ini_set('memory_limit', '256M');
ini_set('max_execution_time', '300');
ini_set('max_input_time', '300');
define('FS_METHOD', 'direct');




// define('FTP_HOST', '64.23.180.61');
// define('FTP_USER', 'akil');
// // define('FTP_PUBKEY', '/path/to/your/public/key');
// // define('FTP_PRIKEY', '/path/to/your/private/key');
// define('FTP_PUBKEY_PASS', 'tZqsls7URjNC0aF');

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
define('AUTH_KEY',         'c)mRTJj}/U{[3uIt.f2Wq:{acOFW4W 5D`Q&sN]~Ry#RfG7>>I])rZW+wbe({UB8');
define('SECURE_AUTH_KEY',  't|&H<KP;=R3sYrC,D;W^ASzaLm/d^tDKWg~{(nMu#=sY?[j:Oo,yBqWyF2M19g*H');
define('LOGGED_IN_KEY',    '-k!qs`Sjk8mQ9]/nmnuH}UD#f$VM}2-0ha{`K{0^$Z+0mV0T~0D|>[}Xq6dZ)plE');
define('NONCE_KEY',        '(SwevECE dL7~/K:[6{?O(-qW1xCz(Z7$]4ljp)&xW7G:* yKO:!SN&q CsWDJc@');
define('AUTH_SALT',        '>,>gap~C}K1wO-CPWVp&* q%(JVzz,iN~@V$_l~VYahjz+RrGM]r##5SVF@PAaRu');
define('SECURE_AUTH_SALT', 'tlwHQt#()-!s89k25QU611pf;I;?[f]mL4yM73&np.X4WGBVXLR*tK%dsqU5MQv0');
define('LOGGED_IN_SALT',   'v6Q{gQgd9#u6CS`Ohyb/k%6~7O{ao-^3Sly|XzXBJg+vNwSB5-_1JlHIazP8bk56');
define('NONCE_SALT',       'v_9o)M|wpSRE-=-.-HgPE%>hc>}o?6$s,_G,*#m,7L(WVWiYRXqu~|JF%^4~Ftx$');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
