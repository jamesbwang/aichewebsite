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
define('DB_NAME', 'aiche_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'jcqK>#+fLw,>b>+9mx1rK,c}rJ7Z(uY+@J/j?nz{OByF6n{Y1(`-`CmTmFXfQwPP');
define('SECURE_AUTH_KEY',  '[u^l9UhjhxlUhc>U/*|{$C,6l=.F<q$2|@R$}!y^?Rf:4|M1%v<M!scpe0)/PT=x');
define('LOGGED_IN_KEY',    '5=0^LpFmV@a|iyHcpLi~ EU1l--fTsOQq!Ymr32nM%Q: 3js]hm&?xUzc=d{?u2%');
define('NONCE_KEY',        '?YpKl& Vzv_Rq4H?h(p[y}iB%6._2#[S!y3:,(+s]wBQ{NV2`!2zwF~*xrp=Zaz9');
define('AUTH_SALT',        '4PDZD(^$a{U9CCcHT6[ikaa]jEpYPh/D,Q0TOLQ-(b#8a%i[UK!QvmH-AJvF5sx/');
define('SECURE_AUTH_SALT', 'eY,s-IXENGS<,n6h@)+1LVSxD^f@=}5vHCG1?/2I*e8VRO.L)P )w]<on+tY+q!>');
define('LOGGED_IN_SALT',   '+>;7q,rKPPSIKVGCL6mf%?-xA0UFF>rc [<zKyHLg63o5cx KU46Bs9?6Bm6o?#W');
define('NONCE_SALT',       '{n54ir+]>yq3@{L1XUMlCOh}F{)sz}pFv!~(&amtKC`5G;pvNGYn>44#> 58]$<@');

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
