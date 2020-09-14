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
define( 'DB_NAME', 'wmxz' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '_4da%]Sw7+e`TL-2]7D,ugHtKXvp:NNo1h)x+3DB9?w-}Khf)pO&0nL9PcJj/~{N' );
define( 'SECURE_AUTH_KEY',  '{+(#)70IH0z)@>10mBDq}2liT1k.ABILzz.G]A8U,u{kBzWfqh!kG1t_jI*,o=q6' );
define( 'LOGGED_IN_KEY',    '84Cr(8zYTyF1Tx~4^4nygSvouFbbnmZH [;ttF?xkA#>f52Jf}, v]~{1ix]6UuU' );
define( 'NONCE_KEY',        '@Xpi;Fkyq5r9,:x3*S#Ub0TOE-S8VMjgAohH> YNF)%BzOo m:lQX0gF0JCq2gF`' );
define( 'AUTH_SALT',        'q)HaMF>VyU7<t+?f%@%s,+AzdpQxraU3;==g1(kf5->*J O6&<kaI#DjP=L}2<W%' );
define( 'SECURE_AUTH_SALT', 'A{yQFuK+nq.jw#U(/NV)c;xDL?qF%}?ASD1xg<!/&?S+Uru~d#.NY>Ms;atbpI&d' );
define( 'LOGGED_IN_SALT',   'Dy,@kwm&8vc]eoE>7)n1|wxEWSHj7AB`&] R?XxJ2erAKE~n2`6Qpra1]!8lU0kj' );
define( 'NONCE_SALT',       'vN5-wg0~pNMe`K>mU=vq{!=+jfk~TO{+^)F1$,yH7{SUW$H*8r~L?q<)5 +u[w%I' );

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
