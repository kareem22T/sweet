<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sweet');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&w-gBYFQXWwr.Pcarr/Q(CjJ)Cmv_a.FaT*3jG]TIK9;}K)0~/eaZaEhLOLpt,`:');
define('SECURE_AUTH_KEY',  'Nqx1KSO#NYJ.I:D,7!qPJv*K,;b~r@^Bo&5wD>ai!NU0(O$N7ZEmX:Jp|4`5Y8dH');
define('LOGGED_IN_KEY',    '4nfGP1Hl];0$wn`]KI407Q)>o[6RIS/:sef|eOf8W&p~BMGLoHBcj)BtY,M)vM~t');
define('NONCE_KEY',        '_#iFr_L61d`5z)%p95y}O72;f&.L^drY.!;gACs+52vV}d;7<0$H&8cQdY/opyn?');
define('AUTH_SALT',        '1fwqVQ(X!`+o3haM=>wkhk*2kJ3p;f=&Q6yy?Lbsg5Dm^VJ[2][O3VF5V;]D/z4)');
define('SECURE_AUTH_SALT', 'zQ,l*u&g}8SNws`x$Pdd_wQZEMG9!/6Rybq0t/Rm>t,mOor4vC(0n5Bhktwy,T8u');
define('LOGGED_IN_SALT',   'u_!aWg.WuBxfa>&@^TUSMQ#HV.S!Ttp|y!88tym$R62S~~oQiam?jBG}@=pv%]$H');
define('NONCE_SALT',       '48;I Y7AOQGVcb#AL}r[xogyC,n6X.i{k69 CFF3;6WtyOj%kV8^CD!tr/|&~P|h');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
// define('WP_DEBUG', true);
// define('WP_DEBUG_DISPLAY', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';