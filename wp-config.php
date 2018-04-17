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
define('DB_NAME', 'restaurantDB');

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
define('AUTH_KEY',         '[J]-NN&M@ 0.p(o@h_9YzBdPg{aEY{;R-i_z:N oXG*QN+)maO-(ESv<uX^xzx@L');
define('SECURE_AUTH_KEY',  '!.QF0+lb@ocvr=sGk8OQdgRPm_Ja)Uah)rS2 Hh,|,2;.F{!WD!tB5AvifZ%L><Z');
define('LOGGED_IN_KEY',    'K6~f0}P*-}8O3]9u&1Vv{%6-y#k q&7k /s8^p,e fp]$>:KmoFag+y|/.^8t^]O');
define('NONCE_KEY',        'Tu-F?c^iVr&FL#<u,<QJieXOZR!X}1$olGd+syvN-See*~n2VD)d]7U%kTLCMDo-');
define('AUTH_SALT',        '-c#A[QX2>32RZgO)&(C34oiY*c~DEfxz4f0R!RWqf=c9wdl08oNm/~)-xi)QQ(MN');
define('SECURE_AUTH_SALT', 'E6x?zKE}.2o?xo8;r{%22[JELW/rG&[@/8WUjUTt>dhAvks)$(.@gU$.hK{KAk5F');
define('LOGGED_IN_SALT',   '&l-}:zTZ1$H8Tw4.:W!2TY,[xizEX.l&Fg:3I}qtLt#m~e!*6SA@jG$=_uB=MQ{S');
define('NONCE_SALT',       '.<LN5h?WA-)!E:*L7/^O?@cS@<8iBWgUV ;FV+R~6%ug7eS4pu/:T6^_f!}@N[5}');

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
