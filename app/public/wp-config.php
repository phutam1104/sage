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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:10030' );

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
define( 'AUTH_KEY',          '|TVikXW|v*H]S&0IFILd&U/Ch9wo|=u8-3!9A,KShb_~n/;QeD@!}>U3DKnqhvN>' );
define( 'SECURE_AUTH_KEY',   '%eMmjCC-kOjb!o]5lsb+ ArNqCpjWTo}BsmohlWSWdMoaXN=(k3Tq^(JVp)D[&M5' );
define( 'LOGGED_IN_KEY',     'Of^f<WK<;lfyR(Pjksl_lDtf(#KTK%.7*mxF.Ttn)k7hE=>(U~/Q1*F? .-MyZf|' );
define( 'NONCE_KEY',         '!|/dw?05{4%[#xcdP^+]`K3}DKEUg`&:xE0iaJoP#gxk86Djj?_~ryHp*TSlcnM>' );
define( 'AUTH_SALT',         ']LW@%Ir%tb(}3!PQN_9h!3h`hA>$*WjH?n8I:D:UAHQ1&u=To!u]WHM(ctdG?{15' );
define( 'SECURE_AUTH_SALT',  '=+@~H/DDv=C[.)tNc*N`1ox)a7/Z5S%Zo%Z2Gr0;ijz/Sp_v$F~+yuZS?ikp(h^t' );
define( 'LOGGED_IN_SALT',    '0?9(A3>00_!M;}F4m9m%Q>:8< mMqW}Dq;<UdwUp>7NPI,w+aQ9BJzklaXBe*k1V' );
define( 'NONCE_SALT',        'mUx0+TU[^g6@}m8YafVi:q>G`ONG$}&{2F]4zTVkivAuJV,Jv2Ga}X-k75P`@nfH' );
define( 'WP_CACHE_KEY_SALT', 'KG=u?5G{A(rEwbJ1t;7#fA/}emgjJ$CeWc2xgJB-;RD_z+jKD1ysVwFST21h_q R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
