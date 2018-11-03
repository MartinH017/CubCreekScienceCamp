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
define('DB_NAME', 'cubcreeksciencecamp');

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
define('AUTH_KEY',         'JZO~hHJO#D*W>2(P+S{0!OSA)@]0s:M?DGaP*-Y8m2 vLd44]+Br3O#E!Hg!pTvm');
define('SECURE_AUTH_KEY',  'xZN^zJMH@/Z~mrg|g1jAWW+Y>~ZVH7[4OJKj54m:nSFvGeW,B7rslTlaPxO6{GSY');
define('LOGGED_IN_KEY',    '<So?@-YQAWDf@P&3}&gd^Kz0J/ W-q+Ir^qy,s4y(}`a-A8EqI/0Q2.z+d9e]6Et');
define('NONCE_KEY',        ' vFu.Qe<+G~P>[1:0T4W~v>3D]9h# 6Qcq[7GOK[Jy)uei;_Pxto.qNs;x33!x$=');
define('AUTH_SALT',        ';OsF<pd~PS(H<`RPX~7zN!l9z+Yy7:4fI%cHRDC=xHK>e-m:pG)Hi_8SUP,MrbEe');
define('SECURE_AUTH_SALT', 'tXbk5`rh#YN[hiACFF{8K#T=ZLohoN6a}8.lr<:oszM:C}b3WUokK20H*m2PXZ,&');
define('LOGGED_IN_SALT',   'B}LqsM*%<!9jO1HDTXjX(9C8C=VrJ>K4g9CLXjisev;9?T%+h1Fdv<&jZ#RRI@dr');
define('NONCE_SALT',       '^|6a$`N}^T|)c{gwBp*}8M|^F:- 0HA:i!JdvITV&;mk|QP)bp>}M2YOnJ}-P]`X');

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
