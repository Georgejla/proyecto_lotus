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
define( 'DB_NAME', 'lotus' );

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
define( 'AUTH_KEY',         'bGd/NbHcI*<1WV#||tq)$n>4^FkR:z!t@+3<W+`8>)f7~f5/rl=Gq<d~Nt}f0i{R' );
define( 'SECURE_AUTH_KEY',  'Paq;pIu!!?k)zWLs24!>F&`hs~%oK`E01T87*o+f{Cbi2bW3nl7Glz@:ku~%~MMQ' );
define( 'LOGGED_IN_KEY',    '.eH+dONF01Z.6xOo#7VhiBgH`DDqO<mHe,5B~~P*+6t=$U,^3-;H&zslzn7.oCD_' );
define( 'NONCE_KEY',        'ny9<Q9(-:/)4k98Sl-1TGBu_una+dwJb%-S$1JtF:oF/$<viP/cHQ]]`B/I!$qB ' );
define( 'AUTH_SALT',        'HNFXLpU7vy,A{EB5Bbh9z #W+-5N$ZX?G@0JS*34A}6na> ~lH4-%vAf00(A8}p2' );
define( 'SECURE_AUTH_SALT', 'MZAZRYLuo=mVjn~{6E2ym:az,y=Mi[0e>_)rM.^[Q@:tk}=?YH9]<KtyD9^DHKy&' );
define( 'LOGGED_IN_SALT',   'X^_+fHg{Tq)+H3%G4;0sBky^V$+@tlmH>e~X7`~A)S_8[DT^T$+I{$f!QD9k=bnL' );
define( 'NONCE_SALT',       'aUz|Y MpiA5PdM?xdA$x]mF#`a{zq;pfN!PUY-XO$*tR9r@sdnr6*k}X%!)QeJy<' );

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
