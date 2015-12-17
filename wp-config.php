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
define('DB_NAME', 'voat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '64MB');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@QK{} V`zZk:>630O1UK+vuScF-d+/!3cLl@),7*!o&P2r&/amZ[(mRt$2`!Nr&Z');
define('SECURE_AUTH_KEY',  '4H >q3=Qp)x*%!/^VFYy]<nQ-uwuDIhDaa+c-UPWFoAEBju`aMRTG$K#nk@z^Oc{');
define('LOGGED_IN_KEY',    'v;iBMjIu@eferzf?G10ZAlfOUy@71s:.gacD~{[qg!XWm`-(vB#%wgUPVs`BYJqX');
define('NONCE_KEY',        'v#^?3QW%Uijg:fXhb3DD8[E=isG2:Q3c,76mo@4CM|g12|`q+`qSSrW|XKV2OeG>');
define('AUTH_SALT',        'c-A*Ed {Oc5Cn}-zfM9.|!oW}XPN}j#7AzE{Jqr-V<Zb$~XJ;dAPi!pQ` jZ)u^h');
define('SECURE_AUTH_SALT', '.d87EnYZ_ xR&M|*fZ]OpWee;VjK-|UgL6ZVb+rJ+sy)Ou |vv }x0TIvxpv|=Ap');
define('LOGGED_IN_SALT',   'a7,^#b47 pt&fE.)cCtWtOtmeoK&W(]|VLP&`mx3ISEhkLj2)g]DmQOjD<<dMKL-');
define('NONCE_SALT',       'TSy6}%$xc]IJAQ(-nM-d_S)dimTOu@[|PM?9@,6%-(&3JuMMMz!NT.3SMP4$b%=J');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
