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
define( 'DB_NAME', 'kirito' );

/** MySQL database username */
define( 'DB_USER', 'kiritosao' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kirizawakazuto' );

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
define( 'AUTH_KEY',         '+k55d~N_d>ObZ>S73IQIKx6~VCo!#/84X5t8eqfI|VGhlKy0C78t0NH._^Ae#/#j' );
define( 'SECURE_AUTH_KEY',  ' ^nluO~:j_k+8d>bZq6$5$Lw+J%R#wYPCGQF@GjyEh#L?O~UnWA^KwG^v!g,=ff3' );
define( 'LOGGED_IN_KEY',    'X#dS52$fB6bc<XH-Wb[jACs^eh]0#8JPiZ@]f2Ob{U8;7$pyLES2`X3;>haVb-{v' );
define( 'NONCE_KEY',        '9KSBH0HuD{1I#C/G9-L4A&X*a;-$&]FxDmwZBK#KT#m<?VFK~uK77^0r<)[K>rk<' );
define( 'AUTH_SALT',        'dtm$P6 VKo<H0B|zZA$f6IB-P $-u2FXFKwPz:@374H<OJw8cJ+D>K}YfvucT$(a' );
define( 'SECURE_AUTH_SALT', 'w{s5x ;Ifwpk#@OuyUGu(UK2lI3Wj849w+!`1}KP%-9XrLw<=83%xLnO3]~9(e2d' );
define( 'LOGGED_IN_SALT',   'e C};~a`y&AL[g[qSr0dr(P3q8KNFzEmVVd7bz,;Uek5L7[@*RYY]d(-bDQX);Gw' );
define( 'NONCE_SALT',       ']=.BEO|GE$>N39Y-f3hkyrYxu/(}l_EqT-DO$7XicQg-s$o:1[V]^C=*:5aMLRoE' );

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
