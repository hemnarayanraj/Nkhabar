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
define( 'DB_NAME', 'news' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql@443' );

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
define( 'AUTH_KEY',         'U:BkuBscdQ~pD*Vz!(UAYr;xDEL4&iiCcXBF&%$+~>WD)wVaB=R1d9Z_!LiG>$D;' );
define( 'SECURE_AUTH_KEY',  'pU(5}(?i`GN!<0,E?k9yUovh-f~1`VF$SSLR,k+(i4-/8UR/3@t _RbG|~Gnsnq1' );
define( 'LOGGED_IN_KEY',    'YboZ7BtJMf(:Ap} MoeYtw/!X{*XCnZ3FjP~SQZSv3smK,R/wdPg3g^ZY w<k>(}' );
define( 'NONCE_KEY',        'Zk:C5u(&(:9PT,epW9HK3i8+P<&u_)[{WC>I3:h8dK-mj>jg$nw1<TlJg|3{Z@ng' );
define( 'AUTH_SALT',        '?VJ^{k#SJ8qubXjg<u3M3G{D_/[|6I8bAes6-=>9xaC+EbM?VlV3uG_s>-NeRWX0' );
define( 'SECURE_AUTH_SALT', 'h(B.#,vYc*%a4e@b9&)4?!);{.MEU>|8Vz}`1#puR^3y@~H5I0>C4<gl*I%I=EZa' );
define( 'LOGGED_IN_SALT',   ';1gN0dxE2:[_m,R$k+l<@GjODWIa4%/U{+&9P>3r0*LFA TX& 2mEx}Kk%guAZfG' );
define( 'NONCE_SALT',       'tl6jY(K?1fgN%GkAm ^Kg~N@_;+uWRc/@[s`9F>qZRk[a<pilg.emEl|%)pc2HP]' );

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
