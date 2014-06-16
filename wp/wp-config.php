<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'draw-2014');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}T 5we$|cwPTzdQY$DDHe}d6n4>{JO(pmsemgOYoy-GWw645dZm,k(VcZqnw`9Zk');
define('SECURE_AUTH_KEY',  ' ;4DJ[RB04d<B0qK@g2} VT?w_/|K>2m[EW928ZE|4g&_SnOTYB,nF.)*jo.pJ3^');
define('LOGGED_IN_KEY',    '/({Org-!g>;KK-]4OReEy7D}t;=XmK^m[2#T-/wlF(.d[oFLGr,qL2iMC)zL-^E^');
define('NONCE_KEY',        '?[a|{tnSyXxScd-DIE3Y0!|?|]~W1~+[sTw;,m[Eo8o*/!nYab+]Yf%e,U7xq=6-');
define('AUTH_SALT',        'Xv8<adp(3glD.;R_sNC;mI7J}rs+8v^dvDIQZi{<r:WW-vfn?zJqBg4IExjg-srt');
define('SECURE_AUTH_SALT', 'n9K)Ab0_11<Pg=yDE[:cF,U}Oe*rOqKjbs7c5WWy9d+(tr5p)(7J.mMzXf}SPGi]');
define('LOGGED_IN_SALT',   'K-{z}4&9U_Y ZW-%U`A|*I~@`(]K),E|5OsG !lyj-)}pmk~XzSxR3+Lj!^q}7?c');
define('NONCE_SALT',       'p(=Bg>t;s^p3@V0$yz:9wS~Y;F]20[p+`Q1I0^n-=A|`>3:OxJ/b0|$f/Q?[E4#s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'isucommdraw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
