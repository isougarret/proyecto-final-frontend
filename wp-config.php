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
define('DB_NAME', 'proyectofinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'T]o@2*@B-,AXv$?cANB?5y#}=?&~}r]z3EIM|SUcah]5xvwi~P yhySRot{0nd2M');
define('SECURE_AUTH_KEY',  'z8;mt$?K/Zz3oCjNIs:XwEtgBu-_aQhi(303#wX#LJPH^hF_/TCJ .t*%t>I_m,c');
define('LOGGED_IN_KEY',    '=>vYmky=x6:=&K!&PBJ3L~Ti|BeW{;ED6cjzMq!Xglm!7#1+9}2v_t9)h(rt:b5.');
define('NONCE_KEY',        'wrb{BKUbp<qGIs&k;dfN^$pUB@VD;G>8-+0,=/iX%du[}9nSW!Ex~XOQPUpSFaG.');
define('AUTH_SALT',        '-Qsov$a2Hqv.V+anb-S0tU20Aqwmuki,Rlc60$1us;Lyi!kQ)>o;?$*-oXImHh_4');
define('SECURE_AUTH_SALT', '50^|1)IHV_U^y)Mr8Jf1D%|ODdhl6VG8n2?gK{N^vx`[)? |~6o8*SU5T|]4+_z0');
define('LOGGED_IN_SALT',   'N&6! nFSS,,+7|~q`>.]q~n}SP<Q7,i`A.Z>N9VsuE#Bxe<4V.,?dc)$P1=g*/)k');
define('NONCE_SALT',       '1j#a{x[hd^Dd>Uj1=VyUu.%0f<aj`A/9(-Cimv)]tNGc7$ );e(5g&{N!Xhn]xng');

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
