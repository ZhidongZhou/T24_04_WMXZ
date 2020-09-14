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
define( 'AUTH_KEY',         '|#/f)dnUSBkDmaKN0nk~2Co2hOK!gT91fF0+R51_Y1pm&08=z/9~UvPRkN [lZL5' );
define( 'SECURE_AUTH_KEY',  '|VA[IZu>RNo<su^^|CV{P9?QEV1fM86bs&CR?ICN5|&l(:tx;b0=j)w]ktpXsZKM' );
define( 'LOGGED_IN_KEY',    'dqh`BC3>c1E5eybGYZE!%3Cx/8d9uN~~d#A+xgcW=AxT0@a4FMh.R*qY:]rM:Wpu' );
define( 'NONCE_KEY',        '+^g2q(;^e}LT!<r,#}x,ZFo@0qpIWoB/$VtGioh9F$m&&;%g* Hpz3NiyYnLzoKa' );
define( 'AUTH_SALT',        'jzU-^&0B^;[aWhN^K;c9?A.x>Q<rQoA;$W+I ]kKf_52TFJX?/;^ +|,SI@,J`wz' );
define( 'SECURE_AUTH_SALT', 'CX&P?$[Y_*Cm;T+-.{rTn.+g(@JU(>dIQm89Dl58*n8vd(l?,)W<XMlXAwvWU4[(' );
define( 'LOGGED_IN_SALT',   '<ps@1$..^0R(-;^~~0FRrvOX?H2KIw$[Na&%bInZdVOysQ4rwsf9p77zzJ_%)12t' );
define( 'NONCE_SALT',       'xXoqPos`kA=zS(+[N<@u{PwGPhT#^Q<6Z`m5fmu]FT+r]!mr=Mgd:R<fAp[&!#Al' );

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
