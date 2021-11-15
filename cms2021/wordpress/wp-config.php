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
define( 'AUTH_KEY',         '6Rk1<t:/8,.<-S2X{^V)_:co0o5YNOk3M3~5ap{~>}.H15-?j%Qs6m>1&*[4d5S9' );
define( 'SECURE_AUTH_KEY',  '.xc^b$9}3!gQ&8*lITyT,q=W#=pnvz_|k6oe*Ozdt(mJHTn/ |x6hB8-g|KTc{!,' );
define( 'LOGGED_IN_KEY',    'Z3y;Fw/>-^0ywupo@EV$`6_m8+)^L*Xo:Ojt^0/,nV|L}oCDDtrz}qfP WzG7ijv' );
define( 'NONCE_KEY',        'P1H+-ZhW2B?VuQON|q%Am1^W/[b67z&(9B=`%|MR{w{NG7V|M]gQnAA#)R~R;}w?' );
define( 'AUTH_SALT',        '%,`bQ:-.Z7=l($vrHa/M%j<F=@V*Z_IMa;P:f_N [XZAiw*E_;j-3W52LM67cl.(' );
define( 'SECURE_AUTH_SALT', 'Xo0@;{Q?,4xf!_qvos`iL1PO(cR(UC7UxcfkN^nu~C3M:%0q7-YgMAw{KN(j>bNT' );
define( 'LOGGED_IN_SALT',   'k-Snuqeq15kF[reV_R=_{pRv]7hz1T_yN60b{aH Bo(4Cpb)=AGlrI<&Uv9#uiIB' );
define( 'NONCE_SALT',       'H|NCLJ5if&!%[=H&Sack&CAfY8]28kuZNNX;lwJb1l?Bpy*CQx3p#0ZAS)ha3$d7' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
