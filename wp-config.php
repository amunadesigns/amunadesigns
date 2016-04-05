<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amuna_local');

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
define('AUTH_KEY',         'j5n.P3yKNB/m}RL+<P50_Qd_L6c-[O_(Ukf@PX0wfH5c]!G4aGZL<453Z?9y_v-x');
define('SECURE_AUTH_KEY',  'hVCDcTm}2#]y*w;Jx&jaPmMQch35?0:L$T)msRk>n1/jmt`5q(|nswGXQ;LZk3[y');
define('LOGGED_IN_KEY',    'Hz}L!Ya69#:7}-z+s0Lt9L>da&HtW+;$94] g=X/%-tA+yK/FLNwy+`mhJX~|_D;');
define('NONCE_KEY',        'F+r3O^LQ}/eA%+.$BY1%~v-+=eiWiLjRx+s=m!0j)OU)4%ADAA[2+J3$RgfHC6#x');
define('AUTH_SALT',        'r7*~4?I0}Hi<e8DD,Y;XomIrCR`A[8ib2293K%`v|GWV,D/q+ga*89J|m$Kz0+7e');
define('SECURE_AUTH_SALT', 'Ya!+noBs;`q)Lycya|VmG7wb:wp-n,5m@Eej[[0Ej{8p|jFMwO!)^D(*lV(e#^+p');
define('LOGGED_IN_SALT',   'kK,nxN>3LTG#[f99&znK=H=~|bu2/J7OO_MjK>fgZs3da`.W>B=&-*IW)[D/*1V.');
define('NONCE_SALT',       'YaIO|15Qw<?|fgMoMJ)gSKta?3re>*w^0o+@(nPHf&32<z8-yO1]G-Nx$6o^v7{a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
