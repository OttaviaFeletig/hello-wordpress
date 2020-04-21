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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test' );

/** MySQL database username */
define( 'DB_USER', 'ottavia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Otta.feletig.13' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'h}=UPSigMK*0%8wtfmFE&[52;$~bzuyCg y_3eP)0&`y:#Hww#Iw%swnPaM,Hu@%' );
define( 'SECURE_AUTH_KEY',  '}3}JKO,9c4i {E I[ttwg.UQwymis3K ss_8C<w]UL9XL;zgRC0qTK9&2N%5khYA' );
define( 'LOGGED_IN_KEY',    '>~ow%SS-[Z{C^[7g91 }FC2J]t`:$o)$$I3V?stNDKnLWs3<DxFL~3^bP!a{LT$h' );
define( 'NONCE_KEY',        'Zy3QXi:[i0xq^(!n4}XcK|FLNm,pEWbGW3.PrM>N@hIJK:}a82*VX2W![#4}pF~+' );
define( 'AUTH_SALT',        'x$YcaGg+*{>VuW+&Mv+n&;, owi2;.=wh67ZzQw*[HIpJ<onNBFS<s(6[HlQiiW4' );
define( 'SECURE_AUTH_SALT', 'exx!ZT#3:/<EoFl?M[N&Rhbn!aHdN5f,tCDUe0!e,m)EnPkgx`EaqY6euZ?a0|^O' );
define( 'LOGGED_IN_SALT',   'Lwp&U!!4n:u!fT[`!2g9;6b+{nc-E|v 4]<%B36@T&|2*r:xp[Ty4fgWz-%i/M3^' );
define( 'NONCE_SALT',       '=ST D@ {yiukhQVqrP!9.r~XGbw=iBu.aC&Yu^eY+#}P?Sb6EVE,[FgJ:PF%2Ag$' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
