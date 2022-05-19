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
define( 'DB_USER', 'kirito' );

/** MySQL database password */
define( 'DB_PASSWORD', 'swordartonline' );

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
define( 'AUTH_KEY',         'bh=XMWkJS7@GRfVuT`p.ELjzN(C>Ckj,j/0I*m]O{E[4z%TUD?{3#$5c?{c<P65}' );
define( 'SECURE_AUTH_KEY',  'd;#6GGhnlFEGltdQYq=ZG,|%ef~fzJ@Xy[*X2$Hw?C }?$U}7UDehif/jKeJ2U)/' );
define( 'LOGGED_IN_KEY',    '.!t[V_#WjE<Qk|fE14%nRtk+$;e[Z]MAVBCR:&B]c<g[/_,A$bz8F4?yGvl|q)u.' );
define( 'NONCE_KEY',        '!yL>8N8EyB*EYMFQG|uF~,>5w8a,%*EQIDUPDZ?GB5GL.hCAS*I;rfTklLx;`fli' );
define( 'AUTH_SALT',        'Nz)E@}@,M#8e^jrZwWyxU( Ndmm87-Tpd`t](E7;2#S/R$DQN&0Vg=m_{4]~%xb2' );
define( 'SECURE_AUTH_SALT', 'boHDBz`mIJ%>cS+onhhKWnZvfZz3^mtGLZBrOmq<JU5QFxcSri<8uhyT/<1p]^bj' );
define( 'LOGGED_IN_SALT',   '7dy5;Obs .[5(<iwVZ,|N*:u0L$:W9G|u pq-2n,XQ (]UL1hXN(WP]N.Q*qQ-vO' );
define( 'NONCE_SALT',       '2~HZEMxuF<R;Qcrp8Pcu*P$2YS4(C<a2.eto>&f-6yi.yNrN=3rIct=I|^vpXHnI' );

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
