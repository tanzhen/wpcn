<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wpcn');

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
define('AUTH_KEY',         '*g,[zf1$Z( _:S,2r:]jIJJ_a@8a(dY.</|ba=-NHCfe,s+%EOK-Bn41oP@e8E4R');
define('SECURE_AUTH_KEY',  '&ANKh336_[5!3YYi*3W8_Cy)& 0*[+PN0,KG|f3MrG^__ph>AYr6-?`pSoZN7Ga/');
define('LOGGED_IN_KEY',    'X<Z7e0vkLZ<t#y/cL187)f-ScLs9H4c|&!L~qkW9Q{AYke-Y#*~$}fi0c8[$|R9^');
define('NONCE_KEY',        'h<-~++!,tXB0;|0V3hi{GND}v86%TA-~rYDTydsxzZ9Zy5:f-0~R8p+@n#FfP^.^');
define('AUTH_SALT',        'F*==mS~;4i+~v/<4/ZR?DBy[/+AaD]s+9]4xL!^k4iD~$opcMaXU!%8@W [~4e(P');
define('SECURE_AUTH_SALT', '0CH_v;0|EjAYde{Sk&guRAGSXyn$DDO3k 1]ysDpRF#]lnOJL+/t]eo@K2:&3x:-');
define('LOGGED_IN_SALT',   'z|sy-RbTon>p/R7/x-zEP{S-sZ_*7dr;+to506cOzbx!G?Y x%=>$)F-<=h,+heR');
define('NONCE_SALT',       'S1SZ K]T>n-#S8W*iEUFM|Ry4n-Fp 7mOwD+_KDpSi;*d._>Ey-(&k@hQ&wU;vE.');

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
