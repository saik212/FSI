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
define('DB_NAME', 'fsidb');

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
define('AUTH_KEY',         'g/B#q@Fp1KOip`Z>mS~tIcANUdIS=3?-JssMvB1FXIZHVMe]T&@RvsMo95Eq5X52');
define('SECURE_AUTH_KEY',  'e1H/?vBS=~zOK`^5MvIG,>1>,6-c<M>B`:FOzaR]-4KFCJ$xox_xe#*K.S!s:XqE');
define('LOGGED_IN_KEY',    'GX4rDd5Bh8+pRI7xXj2Wcdr8ea(:z(>^9]&RQQth7{VKdO:q8FJE:}gw[6N%W:>f');
define('NONCE_KEY',        ',j]?)hx%UIz>y;Fg+K*coJgmNseHUu/,^.9?)vz_yKuQ_/0mBN0E:R/l`ryPE4KE');
define('AUTH_SALT',        '!|R[F z1F[i/I{a~FA$7UBMz4gi[gS,O9g2OYp,xt&vdW~/qy@<i6N07N_NiZR;=');
define('SECURE_AUTH_SALT', 'VfeU(vlL(TO}+>AQt7!!,zWa9O^bjdvg-mt5}|xO6.%{iJ:p!Z0hlb0CD)f0XhdK');
define('LOGGED_IN_SALT',   '2g63BODf+;fQvRVoJ.lR|rB*K~u0aktRfSt}ICOMqEE-ubyA90b:0W*Z5>,9YEz_');
define('NONCE_SALT',       'bFRQuH[i~c [~3X}(ruAe[]6}+7n[xUx)rLdq)vOrxP6]NcBLf}^hppG<@s>4 >0');

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
