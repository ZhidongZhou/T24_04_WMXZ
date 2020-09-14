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
define( 'DB_NAME', 'admin' );

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
define( 'AUTH_KEY',         'UDr%<iGZ`tq%dcgVA!/t.sa59DIc-S%u(xtQfLGcQCu$0;xZtpaUW[/gB>OY/|p6' );
define( 'SECURE_AUTH_KEY',  '=29K=i)z|a7jLGHGkdlhk^rIBgNJ=Aa)!-Cc]5U(Bh~0WXsbHJmP>tc$_wO/ Ltc' );
define( 'LOGGED_IN_KEY',    '%58~RB]m1szS.&xaq%wi0dU_Yw`B11.lHWl{/6I/yz dF1`=?jq{?Le.V.<iBrQa' );
define( 'NONCE_KEY',        '`)<G]REH-EPBfn( )M#Q4?KhAKVq,C^-m6iF3wu-zJ:X3vVQLNzC+S&r%{v@Hq:~' );
define( 'AUTH_SALT',        'Jd$2]}+My?$JDsB><Uqu~EafDZ)`J{.]}[tI-_-?du`fZumUi(I3$utzn}vW5!ZG' );
define( 'SECURE_AUTH_SALT', 'H&-eB~3CBc%dRi]<2GNVK3r8xb8sB7SqXmbw(wk%u8et2Tka:qCR5[=<1F6T|K>n' );
define( 'LOGGED_IN_SALT',   'jSX n<Z8y?tOAaArixtrQx`(P?zC8im$Xji1Iy.b4z#Hh_dHf(NjV i%$Ww3+ 0o' );
define( 'NONCE_SALT',       'O;{V,|sMue@OyXKJ)pnFVqD^[0s[-f3FkLGqxZloG/Cs{-0NR)#&sz=0]9p|a Ic' );

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
