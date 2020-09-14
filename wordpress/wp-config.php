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
define( 'DB_NAME', 'T24_04_WMXZ' );

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
define( 'AUTH_KEY',         '04ZxjXC,-%DrR(hJP4_x<ur); @98XR^O|55.{) 7oR%7$S5~|8#5m!KWF3qkUp]' );
define( 'SECURE_AUTH_KEY',  ']zdm%llLZ@0.B6<!_$Lym3JytrU=N9)Va6@76clNj8?*nVTi*STE.OBosuFK=8#-' );
define( 'LOGGED_IN_KEY',    'U*{]]9AV7.3DF7Pdb[eFAxnHE,}mey,_Oe#2N_>ams6]@Go.wYoArVM?q-|C0U79' );
define( 'NONCE_KEY',        '!D|hhes_/^#.BW#(,qK lHn#eF.3ONSO=@@F_[qo.Z=r@x%P8k+?sFwtG/:sm&q}' );
define( 'AUTH_SALT',        'Qdiw<}`1mVV+3<syMQiui`(Y|&;!A?aUMxx.OVd$;mPhVau9+nCK[12t7(k7Z-B-' );
define( 'SECURE_AUTH_SALT', 'HT2R(6[vKS?qUx*8.nlT,Uw+qrKAG,qeSCU.n}W-xi?.QPlyStY(5b.hnP-F[5fr' );
define( 'LOGGED_IN_SALT',   '|0S!a7?<4O,SqNl@Oe_o/>$quWW[qLi+b_&Tt}E%ul;~71l/FBs5eL2kwy(>F5/Z' );
define( 'NONCE_SALT',       'h3K8VBt~ 1 2_w;kr#6MGam]I8^+v)2tjT@iu/?33f#@!V>:>3aus@u*_XUq_0@7' );

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
