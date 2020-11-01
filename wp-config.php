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
define( 'DB_NAME', 'Merch Design' );

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
define( 'AUTH_KEY',         '{tsdI VF*WH|phzc5FWrYhIh2NQ*^*%#d*miP%D}0n=&3FxuZ}E?v/:=ZAcJQWqh' );
define( 'SECURE_AUTH_KEY',  '7=*I,(`LI+;)?O[1gh3/Na@,zsXM0LvFpko;MGr{+2_!!uQ}N&fIXu|/uo/o/@]K' );
define( 'LOGGED_IN_KEY',    'EF@,~7&1vEYl}V3?2PI@U<{2(fBBhU`e]=B@A0y(-XcPf0U+u,28##[m5XC DtDI' );
define( 'NONCE_KEY',        'K]<W(l?ZE<021A8S{N0[z`!QH=tYLZ#H`tqAdTEZ~+?B@Ieg K8G+ u]1sWtgINW' );
define( 'AUTH_SALT',        'k}1[bqDUMT3*atDQCw6Sm[Vyy52/}qW |kbIS@jNr&k6Z yL2q_b5k0QpFEU}~F&' );
define( 'SECURE_AUTH_SALT', '*Tz~aFnHjpV3++lkoVE#ze3fywm%(v1H$xFR u4G!mP,qMjr+Xsmvm]yBq27@)N/' );
define( 'LOGGED_IN_SALT',   '(5N7ZZ&cm;;0DV|Ky~uu}+?<G~5YJ,!mzs0FGDC/kV!aKGNC<b_H1+`[W4I5* ,U' );
define( 'NONCE_SALT',       'h*h`C(Q$bb,8FS`bt0{*8kp1I-Z1TWt?X-OUduFcrhGW0:x6R<,lX1U ,=W9CRK!' );

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
