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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbcoqcdeahpuju' );

/** Database username */
define( 'DB_USER', 'ufipsvkr9houv' );

/** Database password */
define( 'DB_PASSWORD', 'cl1xt73uhukg' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' U{WzTYe9XVpfQI|<|E4cg`Nset.-^Orz$CQ_;zU)Bsm|(}WG?znor(8_ *) xLv' );
define( 'SECURE_AUTH_KEY',   'KlmYnoUDNNizvR:_Ir+W/%ht:[31pNu!p@knt/LlknpIF7L.CHy|Fx:Ai5SbGL+d' );
define( 'LOGGED_IN_KEY',     '2yNBx7s,An>shPv<* z|%* FXjyx/TaD4E^s6w$+t&9x);H)?4HA|o<|Ht Rq+1Y' );
define( 'NONCE_KEY',         ':[0lpNN^w /2j!qm~.!BzkX<9P2YP[:[WQw!!sY@3[`<:Qj[z2vWfeJ1z.;h)&2k' );
define( 'AUTH_SALT',         '=Q^U}Tex.tGsUGpU|%h/hlhY~j*./~[{*nCQDAC@1iUt!0j#c/Gjw[!^JiTWZ3*:' );
define( 'SECURE_AUTH_SALT',  'oij[jAYRo]3A.Oo!tG]G!sA#,aT-Z(~qEjXb_-2NHOQT9U(ZT~3pR^d3mu5EFm+;' );
define( 'LOGGED_IN_SALT',    'hDy&Oxb8zP2n#`%(x2]QS~,sK{TbA~1H}m#pxs2.Cy!?%T@C*NqYl&6H,1x{T!O8' );
define( 'NONCE_SALT',        '8u_=I)a18Y}%?HL*49}ro*R.e6.zG;<xhp2au=/<8DRSF[y=c]uxf1jS)w1u:T>H' );
define( 'WP_CACHE_KEY_SALT', 'EfCx w5a 9.}GF~_lkMEG-mr=WrrOEn<2C1u7x{bU[eh{x]aT/!AJukm&vc!AWmU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hxx_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
