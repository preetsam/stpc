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
define('DB_NAME', 'myrel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'FBZxVF_dPP>PkDXu$^H^Gb_1mw+3eUFIq]^VIr:FMkd~!he01]}gu3YMJ#Y?-b1i');
define('SECURE_AUTH_KEY',  'D1 C%2dU<B:WG0 Wzj83?U.G6mUh=cwE)B{H#2-Fp1X<YUo3kG(y7`a;`!8m4%2E');
define('LOGGED_IN_KEY',    'FYVV/{da3F!QX9Z`4fhn, t$~||yXq`aEs cc-ElVr:e#e{%iA+7-4;B|A~YJw`E');
define('NONCE_KEY',        'c9I_egd_#{%?DX-srX.;0{x%IYplV1qGV)zZN8lvc:Xp&-:5|[| .N.ni+:;}0~J');
define('AUTH_SALT',        'OFNw%+eGu[TKyH?RCHI oul[?9h:LQb-^~(T`1IS|qM?%J@i`26(pY%A{cQ}Au+W');
define('SECURE_AUTH_SALT', 'r2v54k6#!;PTMmnVUL/~bSrW.P}lt6BYWchn>b15MROPBx!>{)6t=Xy8Tj5^c1IY');
define('LOGGED_IN_SALT',   'Ye_][=MH6/.Yj1jzVw.L5L$nO.`1*S3:baho  qr%O/eG3]?MRfHIf6F=VATt5kB');
define('NONCE_SALT',       'DHZi=?K2h[PDh:?^3B0*|F0A-(q5@_6LMXc_`C^>)S)wc$a4?7==v%T)h6HH/5Q^');

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
