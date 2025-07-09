<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bizycorp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'F7/^2@2;R8[ Qh9D#RTB>pipS}e-#/n&g{$`u[Kb|wRZv+G]-Tk3(1y<tG)sjf9e' );
define( 'SECURE_AUTH_KEY',  '<j-`,fR7=bkvfJ^.;n,)qo)A:Oq0Qk[]m6Tud|6Ppd_az[:fp-g{/#{B~~Dd26S|' );
define( 'LOGGED_IN_KEY',    'sLCy&DxXr!nH SbeFdWP!6p:{gxbdcGW|;Lw&ZOj:>r>y?/#N;2&@xr|vv2o;0R;' );
define( 'NONCE_KEY',        'v=h@vewq$zvNZW7V%U!BNX^=_mPI]O{aNyp8%)]x%NZ^!a5nMFUoGX,hmu*OH[oL' );
define( 'AUTH_SALT',        'vPpE0iq}T6XKZwUXi<&g/YXY^C*8of,/?Q)4 pVP^tg?Loq)KrPwD<g)E[HC<g)`' );
define( 'SECURE_AUTH_SALT', 'EcFH7-Y0 aW@M~wb>v3XHgtpq=huJGN4<:W}##EAoVBp3jLU^CeGvzH4RC(@(h-G' );
define( 'LOGGED_IN_SALT',   'Ez>7 GE(yr7b3pKqktu3H3*yH2^}6v1Co]72du+ZZaN ^w@sd>4m/YJ$ysygVw} ' );
define( 'NONCE_SALT',       'tSyra]u;+7{a08ALOJRCpv74Y~aAk_8x{HHw1rl~r^;J}KJ(pCxoTc.(;0amB6a[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
