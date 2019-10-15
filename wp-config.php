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
define( 'DB_NAME', 'wpdev' );

/** MySQL database username */
define( 'DB_USER', 'wpdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZdxkESe6dL9rFHSP' );

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
define( 'AUTH_KEY',         'ITog3BvhWZhb(Fqq;-Z~;UZh4r^.#g#0-)1+P} 2_;(~M.s8Rvjqe9:[Ak%$%9!G' );
define( 'SECURE_AUTH_KEY',  'S&C& bQWi29*e;;S7]sU]@y.Q-@.HsQ?CMt*p}/p4Qs(FLP&eG2jqk)hlm|$QQ;C' );
define( 'LOGGED_IN_KEY',    '8#.+y^2+WgT@aE&,$?fD2me)fnn3B^#RE1$f(`f~=|c9+G8zurQo52n&ya9(3zg|' );
define( 'NONCE_KEY',        'Dxtg@kSLOXyB]+V<eeR}NTJ{ui.Vk`nr+rTQ/`cAFw1}J)f/(DDmNM{fpe+/l_ =' );
define( 'AUTH_SALT',        '[$2V|2-Gx<ITE(STB7A{q3tRU]?!.m3Q4tEe@8t/%^&{YWD{3DXLMFmUmwefQMM&' );
define( 'SECURE_AUTH_SALT', '63[u(%ej8[F]G-%}WZOs,i1:Dn7VSkbiz&xR8~l6$(PC H!,|`IT6D.Fn}!4AF5r' );
define( 'LOGGED_IN_SALT',   '7Y*aT0Xh<0~vGvN<]jfod@PVD9nx@G3n@V|R6ZX(w-kut3gViNgbPv 64DQagwHu' );
define( 'NONCE_SALT',       '~59B*eaw_N5:ZJ42_u`&rvXyw-P3 AgR?t@BK~r%QNC1v|W_gX>vNc4/:ewww;R|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'curso_wpdev';

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
