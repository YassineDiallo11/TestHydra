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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hydra5w5' );

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
define( 'AUTH_KEY',         'JK;Vv`rl+r@ _#vwMXc11-_qTOi|jZ5A%DU&LO1}1qqF-Tggw3|^(eGM+!6n^a1V' );
define( 'SECURE_AUTH_KEY',  '.PDgo~Z3,C46|Ew]4^_U06;ho%5<GU5?y-7n8jR&xSyq (uw0!PwrRMG*7(Ba:&K' );
define( 'LOGGED_IN_KEY',    '$9U=~?8EVrJIt!H?q8wVXBF,nhIYZ2D]Xe@O3pp]Oqv.nDy|Vbl}&TrO610ZhG6A' );
define( 'NONCE_KEY',        'B0>L<2dae7kb><7^AwE6QW|TJuDNTu]E;bumEk`#E053gh;96xJv_kHUi3ev<LN^' );
define( 'AUTH_SALT',        'P-fQYyj2,Gz*_l$LvEe&i5}p&!dPH6K#nPj+asgg[Dfaeovm%`!%vn3@q0usB$.I' );
define( 'SECURE_AUTH_SALT', '[]9I3lU@ljlx`&P;{#mfw70$c8@J9p8m5m8Tf2tFH-@NC>#c#*OBb7kwJ<57:b`<' );
define( 'LOGGED_IN_SALT',   '-_@OQ.@7Asd6qc(kOymNLG:[X,?Tjhpz&|/WYdv1Cuv$yjd/:lb>vV8o@;}~Cbs+' );
define( 'NONCE_SALT',       '(P&!wmWEX*k.!NpVxFUo{j8,!&b5/mrrGWCz@D;On6Q@41Bx*s0SU#]A5K +sX?J' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
