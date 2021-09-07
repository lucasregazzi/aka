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
define( 'DB_NAME', 'lauramccoy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'rR{#>zx9yILTl*e%tAwyCmV,af2zoS=|S!x=4A*m*I@uPvA Ho@$FuvwBRxwF6$o' );
define( 'SECURE_AUTH_KEY',  'a-z%/(/W))9xr_NUQP![pKl C07A^,OrUjMVTL<9[m<VX_^Ie;8gS3?W=ai6{fkD' );
define( 'LOGGED_IN_KEY',    'rx[Ij%yyM?:ffQ/pOjjj!v?zvzMdN?]-<t-AF<pj8to#V};.I5/6zy16|hp:=nq)' );
define( 'NONCE_KEY',        '5f|C@B6r(UWrJ2o98D}cNK@xiUd?r@+m0!?3yXl=:`tiy <eYZOm.8RwM`4L%q{~' );
define( 'AUTH_SALT',        'F3 b?N!pBX,<nhnv0-8{c@@]Mw`JI(j7j0-DVZMTRmxF:QP@F>h 1wu*Q({j&3ko' );
define( 'SECURE_AUTH_SALT', 'Lo(eP< QGgN?Ac5q.@W%Vq^&ahh/BqcX?n`Z2Z{9+C+@+/KQ);;jq8J8axd1B-KL' );
define( 'LOGGED_IN_SALT',   '%!*XYSoxK`JLI(9y_lmrd_LXr(^{ORYU6R#YJG,y:MGh<mrC=oDL!*ry3t$tg}|q' );
define( 'NONCE_SALT',       '`5 K8S#g!%,%i yhLTUIDB]R_EK8lPo,Uo1Y[}O8TGSua]&Lu/Fg;!wRuD=.%Ol$' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
