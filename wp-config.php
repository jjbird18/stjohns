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
define('DB_NAME', 'stjohns');

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
define('AUTH_KEY',         '3QIr4q n%v|9jH`]t;qsqsl!;khUo+[vfW;Cg2vdUq3(ab3cA?]k!~B;*id!@&:N');
define('SECURE_AUTH_KEY',  'I7n0P4Di6@g~[;.06Lr=g]8_hNaU)5gW=1VS)WOXMxxK]~fHVyS{k._p5`ui}fo$');
define('LOGGED_IN_KEY',    'cm5/6q|mrgmy^YoiF68GC@Ag~_4O5q$|N{V!qF6kMw8a, WIZn[lPi%?^Dq&e_7g');
define('NONCE_KEY',        '^bt0~IRZ6rZtI:2af$,&ur0d.WA,f](=r)A*UozW;`,;Ea=qpNGB|ZM0XC/S54j;');
define('AUTH_SALT',        ']Yj(f+f(Ys/_W(ZZyJQ$@_>JCuM|YLtaIa49MADOT9h<{L 1b=6|<r8^6j[4-u:H');
define('SECURE_AUTH_SALT', 'Zc>LiRP(;l&*5wBxYJX<sO( (>9rH&L>%{]!|c3[T5vM/^XxYvDoBwY!W3+SC/*)');
define('LOGGED_IN_SALT',   '}q/U:(fH]xm<a1DjI RL<@N{Cl$=fZ<SH*U{Itr6<REG#Y~)ub+R+YxawxG8LUnz');
define('NONCE_SALT',       '*wSg4>(!t/&+$6n>@1{6_Cv$^Urm2SO~M+dO|&(fumnZ0$uZ]is.pV-]GQWr2!C(');

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
