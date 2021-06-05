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
define( 'DB_NAME', 'college_db' );

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
define( 'AUTH_KEY',         '*<bfhu^okj-?mAOmuGfS 5B0rrUB_mc+T{kCvjwETrQ=1Km8-|,<<AL^f]{PxeBq' );
define( 'SECURE_AUTH_KEY',  '34exIz^~8%-5?OIRg,L_Cx{@6!>340NR[$vF!1`[I|sgd PB4p:$x+j|db}~k];e' );
define( 'LOGGED_IN_KEY',    'CLHngq8vsk.C05G<=GoSUf$C5c[?8c{W@;F01S?xxnh>Xa-%HntE4Tu9NE[OyWUp' );
define( 'NONCE_KEY',        'D]n59j1wqMz)lsEob#Vzp9-3 X8(H3V72]V+W~_ru62A_.]*`*`Seg,]h}:/byEM' );
define( 'AUTH_SALT',        'a6$e{ov?rg+21K}&l[P`Q==$Kz*XT%.a](/.!^BW36/>B?q,5ZLT,(o:Hd=cfvrQ' );
define( 'SECURE_AUTH_SALT', 'e/6a~E)!*L ,U6&1Us/{mq]h=8)w,hCQ3cZ`Y/3p8vO=pO`3gQY@`97x6UQv4c]{' );
define( 'LOGGED_IN_SALT',   'w<2D6LlRk/SPt>dZ@AUKebx8WnCfEc-x1nc[3VC`*[}C*8FY8881@)INvHb4qeb_' );
define( 'NONCE_SALT',       'X`+*r%QJBcY9ZlV$>%j/Wev$hHyCr.?U<iU g55lXH_)z7N3}E|@|WQ{oFDBnD`V' );

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
