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
define( 'AUTH_KEY',         'J]}O-U|0Q;fjRPifczIA=#ydGo.8sGZiW^w;hl]1}cz7&o[m%L+-~kY0e??NQUi!' );
define( 'SECURE_AUTH_KEY',  '2SX[w:!_Lz=CPnvLvNio&.OgLV0I~9FRhAH-DJwo}{*}.RLxHKDiAyUk8^-bTU;J' );
define( 'LOGGED_IN_KEY',    'wwx5A.M7>dJPUX4Gp]CiNVNM/pT<1/Rv[4mF;8rn|Is%/{4GU7Ya;DeH,U{UVpb$' );
define( 'NONCE_KEY',        'P$wKpG#?03j867>TH@$d!P_#>:hscX@f.HO_#wo>$~)#~]3,g%@Xye)9.M:j219[' );
define( 'AUTH_SALT',        'M]=[-)J&!W<0[kR vB);cz*}4qFPnWmgbgb?agW)~88Ie=^P)3lA.j-^}wNM2$Kr' );
define( 'SECURE_AUTH_SALT', 'QM/WiDO20[p]qp-=dI)K<3!5rz`t-Waz9C*&Uj2E]%jq&5^c.?j`,$[9.Gy2>,kj' );
define( 'LOGGED_IN_SALT',   'zJlt{#RLyL;$I%(]B`.hGeJo|0KhSYWg67!67(S!nK@hvo0?LF^.<,iya`F /k& ' );
define( 'NONCE_SALT',       'Lpc |$ !j7;PaLZ3=OSQQ(ha-3]9AhJhwdhC&5hh.)_VrG?ed@Kw-9Z*hdK*1T,9' );

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
