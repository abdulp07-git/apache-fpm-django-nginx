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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'abc123#rt' );

/** Database hostname */
#define( 'DB_HOST', '172.17.0.4' );
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'JV}E?c,=k L;._2f15Bj=FxZYa=q]0IKRS*bXiqu=V>[d0[x[il}}x=7j3P0YsaK' );
define( 'SECURE_AUTH_KEY',  '+UDl+B3JworBA(Umhu.mmR1xAX&_kQ83d*]os].lJ5H:f[CD1;%W3rAD<<Q8rpD)' );
define( 'LOGGED_IN_KEY',    '.WFc]0XOc#9&SiVBHzt{KbK~3)22?@tzA%Rw1@a0_,c#$_6$gtDYS%UZm?`Iw6uq' );
define( 'NONCE_KEY',        '$/TIje,v1REIJIIhj6svc~M}B3m%_qh`A@4iO#.XhGN<M!oNS=YBF~DA:lt&ZfAD' );
define( 'AUTH_SALT',        'Vcv%+YjZ)Vi{CL,t(dR[u@S@y#1Vs%RbMS|f9VMu1~yUtI5OW&0zcC8%rAaQZpKv' );
define( 'SECURE_AUTH_SALT', '%Gg`4BEE.6uONilTYG@mu_~/v@R+.zPxphhW:CYc0j>2f?_<eu]H,i3Uw05!ob6[' );
define( 'LOGGED_IN_SALT',   'umr}n4e8Mh_Z[.0^paKD?`;ICr:4B?`fUVy]rfd h~Wgh!II)d$ CxdK#mlI1iM2' );
define( 'NONCE_SALT',       '9lnmoWX~TL+$<UFHgv[U5fOYsvb}/v]TM2$;D*#8_Mh*e{WRRw=4_ZF~$/lZ0bmM' );

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

