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
define( 'DB_NAME', 'wp_project_h2023' );

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
define( 'AUTH_KEY',         'lXO;W`6THOq90V)V(j(vbut(3aMHXFaY+a.FTo 2rZ)1%j<xi5.}7*X<+0vlsXSP' );
define( 'SECURE_AUTH_KEY',  'zAeXrb/|tKMBV%QIXo!7oUMA&2d39*!;0)rVuC6ow^?v#TdlQ1xe`F1~3:DT8I,.' );
define( 'LOGGED_IN_KEY',    'lywzGO&24Y-aQ%u329!ZZp=Y,fr`$PXzoVy4/@Zz>WP69P3R?i#L@U}pzt=wOr!B' );
define( 'NONCE_KEY',        'VN5:thL:FL>J@p$,YT=+8i0>kJ}e-Te@(B~i0S3srNGC>H-9t.~4i(bEaq4Zf[;V' );
define( 'AUTH_SALT',        'dWDm{i$Di#KI!4^TxhKn_S]a*+WIRTI/#0:=U|f(~W1e-nG+nNu_zheQd(QBBJUO' );
define( 'SECURE_AUTH_SALT', 'Ih>00qOl_TP5+[j.=wQMJtK3Wv=2G;]yE-`/8zb*FT{pl6iMDAkj`8:,@&*sY6..' );
define( 'LOGGED_IN_SALT',   ' h$dK=!qgj4=`^n^3:Qp2r:_2w~(aA]LXh2yZw` FgJb5)xQ;3W[.oXpsZjTBIl<' );
define( 'NONCE_SALT',       'coUTrm:yz=*.@jK/i^|@_`i`Rw5}f8FX1+yh,DyX2UbC{+W#+z`waFp,$$`wM/oI' );

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
define('FS_METHOD', 'direct');

