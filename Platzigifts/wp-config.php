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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E1zVgLbd|4$@d=pr3,}PMk#Qh`Uj9z&e>FZV7Z5w4+3-|/*sD}M@D@{af/|w..hy');
	define('SECURE_AUTH_KEY',  'JLAxRfj:J?Vac|l4;,k>f+]L-fZTu;^KC3MP` kz|Cl-Tg-)8%ZZ4d%*=j%3_a]/');
	define('LOGGED_IN_KEY',    '+O#I (.< 3xY6w5GhNW=N.<uLBlhW{*1Xeg/Jfw;*B=B5:Fc,PSoZdja*SnfrwAx');
	define('NONCE_KEY',        'mWN&gX-;p.GJLZub-Lvd=XZJn;EC};x>/m[8O,8O$}V ^0c||.]8yP^4k7K/59-Y');
	define('AUTH_SALT',        '|zv*fshnx;.AMUQnR([p8zNHkept~<yT&3_Ww)>Ug+~%ag -@u< >lJCH}O8n643');
	define('SECURE_AUTH_SALT', 'wgtp~vsMf^W=9A,i9FLOT4dH{0hr8O%%,Ir[ITfp]X,rAG;Wt_|daJ4Z$wD~-@d~');
	define('LOGGED_IN_SALT',   '^@{?SjR-];sfj4Jsg?5d-T( -rP]z87) -ivV`YROK_RNr.j<}u!P.%iC_)Xkm=5');
	define('NONCE_SALT',       'v;9(dk0woJ9|3C,<PNyvd!yu_Pz_EIZXTl@JX|Hy_*a@-bj6D<:=D! ,%||FYU]A');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
