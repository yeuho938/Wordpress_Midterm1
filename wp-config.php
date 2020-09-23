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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[+Wqu=<kr?lB-E(z&+a4+9T|U?.r&@-sFiWU}9 Junpl!J~U[blAB%Y*-*ea6`w-' );
define( 'SECURE_AUTH_KEY',  'YC-?Uz=#U >;SchfV)}UWA~!Q2sINI$9tZO.Bx.lTWx;Ny*%Prx#.tBCCsMH=Kzd' );
define( 'LOGGED_IN_KEY',    '9!1!:+(vUK:5o0AOd67jG?K/=u>l,><ngxxOStH-cX6WdU^j4p,43e6}jo47as~|' );
define( 'NONCE_KEY',        '%>N49(xY{{c(qdfu7gb7Y!VV-]oKg)<eB=~L0pqZ:]i!`w)(6nmntOh/K..s>97V' );
define( 'AUTH_SALT',        '=]7{3B`>)O0T_b}%/^T?wZ]KIBnMa&[5,0WSf1w&qzB:^j#2K!`ez`Fv8rB|O6a4' );
define( 'SECURE_AUTH_SALT', 'Akz&%Ufwa~@Ve7V6iD2S$:Ednb)YUjr7*YJj -N9Z(fE}pG(thkq`5tAEMmX|Lt.' );
define( 'LOGGED_IN_SALT',   '>[s2XTY[uP2bW6MV?x&$>EuOU,{V;W}]Yb~2r_pnQ70!3g}6G*:/+Upg_i-IFWW$' );
define( 'NONCE_SALT',       'JfShwzRgcy5L*9a^,=Wm/_MOQ#{SiW]NJKk#l&%|IC9Q5?#&3}kgYP=9!*00G$i^' );

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
