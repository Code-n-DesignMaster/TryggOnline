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
define( 'DB_NAME', 'tryggonline_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ss+S#|9}>8DV29xGn:4K?1IIPy@a~L7HLd8vPF@d}A&I8I%m%*:!2n!d<|[E+_1s' );
define( 'SECURE_AUTH_KEY',  'gx(Pa]VmC*vn}0S2~+8N#zj;Di;Z<Ck@5LVyloQEq7_sBiS0o:G!G%dw]+B+<!1O' );
define( 'LOGGED_IN_KEY',    'QEX>vb;wzz5Hy&tm=/6$++4Y]P%%2mo|+akBr&bMaV/2M-#VHj`gt9aS4k`T].2r' );
define( 'NONCE_KEY',        ',`cMR&#0)C;V96wpQS2.}50~Y=h3r&7-P,@[mQNp49E`NpDtiAEQ2Oe.~&I89vd[' );
define( 'AUTH_SALT',        '-?0=)V><8zlSI^*dz9bY[z=*C;W&kLF_:}AY204KcXGh)<VlGA9~J*T^frXm;Dfe' );
define( 'SECURE_AUTH_SALT', '|8K-C~}1i?E>cgY4{n7E-H>~7wst-;Dow&-}*C7h#f*!:)_*_=P/`o9aBi|lt/F!' );
define( 'LOGGED_IN_SALT',   'o)71)rmoI+tzbu>~P_K6hdItkcn<?pU $b`K>l5&6ajP,F*$!Lu&IgG*t5J[u9*?' );
define( 'NONCE_SALT',       '&HOE/yzk(M_~(9nK!qI;iAge,L:;FTV;cl<6&lZNz5d$ke/YC>hrVa58ozxrFJq]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'trg_';

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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

