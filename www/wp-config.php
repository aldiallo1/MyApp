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
define('DB_NAME', 'login_bafing-itech_com');

/** MySQL database username */
define('DB_USER', 'login.bafing-itech.com');

/** MySQL database password */
define('DB_PASSWORD', 'FcO1j5.D');

/** MySQL hostname */
define('DB_HOST', 'sql19.pipni.cz');

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
define('AUTH_KEY',         '5<K%B@&T3*dL(LZPpa}`3;g~u&|I1;N].o#irN?L77,58vgZky<dLf|+3,P-X1]x');
define('SECURE_AUTH_KEY',  'BUUlR=&o#h^7xFE89FEJjM=39X}^I+2yY6tZm9bBGe{(fD8)^1Uha4(F/u80?lM/');
define('LOGGED_IN_KEY',    '8vJ?cUSKvtaVJ0heDfmi0NU*KCC}m!qT5?ry(nfF{Hxrnl5FlA/B<3A~ns/!K_z)');
define('NONCE_KEY',        '!aFP6h9yc=F1u9d8InuYRY9M&[^o+{k! k!`/=rPGwxdv5DDdRA)p2<pupkZ8C?5');
define('AUTH_SALT',        'sGvhcp?iy)ED+{,gP@amlz*kc?Q5U7KA{wYFn}1=!/R%pPWR7T8E>wT PZK)06t9');
define('SECURE_AUTH_SALT', '70kKX7rE-4Jfn(bAEiMDugg@Jpbvs!)T+E4n*-!UG[$k&&sF[%7RHJt lFvFc*zP');
define('LOGGED_IN_SALT',   '(*A7aOk3lP5&-x5]H.ycg1{& mPwsqPGJ=E~VCTJ2r)GkJ=K=L^x{K+Z).k0u,gq');
define('NONCE_SALT',       'hnrPgsND&2uZ$Hd<q*YPpXNpYx5&dT=/qrC[4*nOgT?.3WbsJ<<7-*qw5:oJ*E-[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gs_';

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

define('FS_METHOD','direct');
