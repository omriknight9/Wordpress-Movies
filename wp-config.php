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
define('DB_NAME', 'my_movies');

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
define('AUTH_KEY',         'Tb@u(7pP;mExS`Iom-N6}Rk#:NJm3[W*9)!NbS|9Z`ugSJ3jk>{@-;)5,Yz~;Tgw');
define('SECURE_AUTH_KEY',  '#Q5A0U@SQ*1Ra1jNB22)nKncZ5KgB$ZBO>M@EU^|3(D9Z*V4El==)D+euCU{U<Wy');
define('LOGGED_IN_KEY',    'p,iw{sq;U4U`XD(r~waRHy<dShXE&1}F-$}pbr.gDW{Z.N}8Fy$_G#pyUX/~:{?6');
define('NONCE_KEY',        'zD)$!6$1 ,F_(W{W4p]7oT+|6m%`<BcjM`[BcDpUN8kBmusks(hr7Z@9lL.Br_%`');
define('AUTH_SALT',        'dbJ`dHDe+G7n7]sS(3xDQ2|iCr`$KP8r{2I2f$RVi)ev({J_:E`SWrO{ 0i8.k{4');
define('SECURE_AUTH_SALT', 'cuKNnBabXWmxL;wV^b83F(vJ;{f:wvk&j2[e20{J(Q,,U7?eV|bjFyQUS@xro/2o');
define('LOGGED_IN_SALT',   '(W&vW7Dd4.%Ub<<xIEIzQ|^-Kf<MP3/PnbdH9w9!=y`3}Z#,:k%>D5uJ3J:rc)9(');
define('NONCE_SALT',       'f[G5*_E,=k_BdR>IYl5[f7SL8IgL]+vUgVW.5pf1]JP:,X94u7tXv8CRX~I)w/r#');

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
