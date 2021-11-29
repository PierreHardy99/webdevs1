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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '}N4<q]G^%{|2UCoDzg4bs>w]3WxnuGMVkC-dsK!BKj7~?2{koE+7b&L?G`GfW4/G' );
define( 'SECURE_AUTH_KEY',  '}Nx$i<|8(! QLQ5;sCFfe?`#ufeTbQ08hB-2#7{3MCF%zaw0xRb3llYbzpWiS+Y?' );
define( 'LOGGED_IN_KEY',    'jHHn&%;Zemq <o`:B()84*|/Bc5<MUR18$6C~StSF1QYau-qxcS)lmG*B@e:XV(q' );
define( 'NONCE_KEY',        '#C8#2.7$7<H{Y.=V5/2Cv;mDNWW}gN>H!}nHmq3{&Z>D=lv289( U~N^ N]9&8TX' );
define( 'AUTH_SALT',        '*7UxRs9OF_|5U:(jqGMY[nv(}.7qlSI`=AX@-$-ea{. V8[,V hOE<NhX#P5,TO[' );
define( 'SECURE_AUTH_SALT', 'H]qYgor4y&`%0=L3bzDA,D}lOqT%`=^aQ8]w1]$pe!a<9q;Ye J(;o=Ph*&. #|m' );
define( 'LOGGED_IN_SALT',   ']*//jpMy6;LPkX%VPXLlp^}ZL~.Q!sP%]Upd1{uR3y!g.0cXa-(9t4?`uxO5?_J3' );
define( 'NONCE_SALT',       'szBS1Y,d/ef;<s2.WB3VGja<k}U*R!O1g^sx#c|(2f+<8efUG^#`f_1|E ._A}[v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
