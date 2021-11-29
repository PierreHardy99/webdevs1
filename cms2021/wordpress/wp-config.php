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
define( 'AUTH_KEY',         '0J4JwWn:}$+088~ 79!lQGz>%QQ)1rm8U{>0n(e49U2(2 *4T9v+g:IaQh<g mC&' );
define( 'SECURE_AUTH_KEY',  'q K7McARcP]mkpS.F;$CJErcwD&M|Y#t4y`o=^hM:B;zeB9Z~VMTM:XcaxNcsy#s' );
define( 'LOGGED_IN_KEY',    'tg:mvQy{_Clh(a~^sdxx2D_cE(a;hapuy~CA e$Mn--VWxVh1-|.(.=Pkm~M1du7' );
define( 'NONCE_KEY',        't<7|_fNtL<r(-RV}v;qZ7/NoFhR0~B8?So:WE[:TVPc%N:#}]Y==GC|q{z$Wl;tm' );
define( 'AUTH_SALT',        '?Wu{9rC~br#TQJ&D0XS[%~v]t88U 6A5+a/2(m%VL0J..a{^<~^77m^%;8:u5A~E' );
define( 'SECURE_AUTH_SALT', 'jen/>`nQ(lc($6qmeW<}Ab8!x;N%+E~~Fol4<.>g`dQYrAK#>?ghHpOs*Gr~r^U6' );
define( 'LOGGED_IN_SALT',   ' (BHP3~Gp21H-S,+K:MC2rp}qMDM3`! ^5!lz=F.G#.L*;*phd[e_c]D9/2%S]R9' );
define( 'NONCE_SALT',       '?|Av(0*IB_kMJkj# uwEhnOJ*mcq{.no{[q#41jwuP-xXv:#&ZWeRZ9YOpojw5[E' );

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
