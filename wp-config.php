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
define('DB_NAME', 'kcpl_minisite');

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
define('AUTH_KEY',         'o$^?;|H/!A[-L/A]X+Q=HYxej|EvCV6GDLb%C2Zp{<5(W3#|*2U@8=>vMiB<;1|M');
define('SECURE_AUTH_KEY',  '9a-erc[g:-XEH7?F.<bA4*hHEHaT|NX$l&]rvr?+sZrQzT{IW4j+HI-cN/LdNet_');
define('LOGGED_IN_KEY',    '}Ym)S_j&7ErG`i1G3GE14{q#P!PghU|ZKO#;_/|Qv9%z^Rd0HXaXKi7Yk1_{idM<');
define('NONCE_KEY',        'Wl!+(6/S(ZDO732?x-riw<3$i]QxLdK82w^Xjpt+Sy.P^^q W*+]]w<0qUReOw[!');
define('AUTH_SALT',        '|jMw)$oR}%1-y)De~a+MCf`&LCQj4yl}wQwu)B3%/r@q^M!iei{~w|1HDr]_(>t>');
define('SECURE_AUTH_SALT', ':PcSetV;}f()0Sg}??iEK(LJX[|j8wtEPMV?}I-Mc>JJU=`;=oLwTHI+OB;#IW#A');
define('LOGGED_IN_SALT',   '/,[Hc-&*kYtX&_4El8+(5y:4B$sMd^DG}7W7Sv8SqkzxO&)y.5-+0V4%g]h(@yCx');
define('NONCE_SALT',       'O<9|@NP;y-Q`+/7_5gg@wU|x9cT]T.X^A`<|5 ;01niz#BJ/Xtn3H8q hUSm)Po%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
