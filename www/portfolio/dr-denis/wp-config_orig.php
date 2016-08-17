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
define('DB_NAME', 'meddb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ruth');

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
define('AUTH_KEY',         'tbG*M]N,fh2+~tMwxJG`?|j8KjPj*Y!.Ay@[66O<km]j^.I./8bh](u=)1^U& J)');
define('SECURE_AUTH_KEY',  'oF+h1NE+0iJ=U,=Sop:I$xkgx{TsFgPQ;>htA9+uo1$hHHa&^$RWs;KB-&hURfj}');
define('LOGGED_IN_KEY',    'IQBe:7xuLLZ`33isA$Np}x&)Pa<PMBJU(}u^:/=iZmZ^ (:]HVXGR`$g_-s3?!si');
define('NONCE_KEY',        't%g~A>vR_Y8P-NZlZ+}u=5b@x3P?}v[Ye2`xl@7v{t.17^>+)tUpZ($4AO/gU(.Z');
define('AUTH_SALT',        '2te?gZW BD{Ih7J19%7O$6*bU6O33b P12:vdDlyI|R*cqTn($9dHq7xYpS_UcUn');
define('SECURE_AUTH_SALT', 'daK[RGjU{mjb H}QEb9ei0P87VX@xu;1`Up`p{T$ 4*{B<<)I2d~|x1rl2k?m9O,');
define('LOGGED_IN_SALT',   'OY}MQ0p^&^)n/>9]eRR+lgc,(_-M(B:L}[VWNLZ]sj9Jh(8<0erzR>:3Ywpa:0*-');
define('NONCE_SALT',       '<<w5BdOP?G:2flbq[|~<+#fkkN&;RSp1r}*Re#xw1YS2ExcIn>J~f-_C?*52&d5d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'med_';

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
define('FS_METHOD', 'direct');
