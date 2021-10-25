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
define( 'DB_NAME', 'mpl_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.ac^tf}i+glf1_%>~BEe/}(-11u((gh:vO_2c}G:~b`xiggDJbo+ausqWajiJi_(' );
define( 'SECURE_AUTH_KEY',  '(8N6TnDr9; gJxI%;-#mHPSL&bXjSSO1]8`2OXEJnb{Ci!y;ATenAl7=Z+?Dy/p~' );
define( 'LOGGED_IN_KEY',    'TtmHlQ-h<TYW%Qn%!%9aYmL(qzzU@wl%7m@)vm=qvy)AxB(G!6JSa)?#&Og6I<T/' );
define( 'NONCE_KEY',        'W72%gMDuEg#,tUEE ,47zh},;*GwW`QUPjsItT+2.4PL`{[6 BfM]N0g}uCMfs52' );
define( 'AUTH_SALT',        'iJWXU(K8ostmyfHAWAubzb?k5iJM0w/ig@*2=!m_Ci*U>a+|8cXP+~,TB[@nsw]j' );
define( 'SECURE_AUTH_SALT', 'WvP~bKC^-s[T:|_EHgk%gYn(rqZUs5=xdVN:C@P~ZU[yr8Y^CdM??W{[?CIb& {<' );
define( 'LOGGED_IN_SALT',   '$AUYYv10~(Ri*ndmO#Fn45%QpgSpw=yqJ[0xH*K.eyj}R^h6RBC&Ngrb9p*XsCET' );
define( 'NONCE_SALT',       'bV1c%N}oQ+#Qp|KhUoM=uxSAL)3=v<^p)Yx] JM3TE>#<vN`Gx-fAv4xS]D>@mTD' );

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
