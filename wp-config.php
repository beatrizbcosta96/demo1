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
define( 'DB_NAME', 'demo1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '71hJ{@OR:iOt*~FBS<FP}Lv`MQrm/$De:~?5}mxBo=JvM@ t1kfJvq_{YUKUNtJv' );
define( 'SECURE_AUTH_KEY',  'TBGgk(sI/+NimCVWBAcdRoH4n =G>2g^:XH[vDsWr<g/R1d|_l@GBM6EA#Hz9A <' );
define( 'LOGGED_IN_KEY',    'M?Ie-c^(,4`#eEX/(fr%145B7=Gm!W7!.m;cK|Fw@5O@?+72`5l8pgx&jr<SVlE`' );
define( 'NONCE_KEY',        '^$wsuPe<g%&5y #qju,/RI)6!%{%p0]A*KC%iw0W@t*GeOO9-;J,QRmx78F$8e&Q' );
define( 'AUTH_SALT',        '-kQnaH5r{hj5o(jk[bQew@X^Va64y{wG1:cuc%;T#rSRn~>{oZ7%H:*Wf.4a~Dgb' );
define( 'SECURE_AUTH_SALT', '+.`bLSc{._=^RaN3EF8wJiF$~y(:BEK).-n+@Q7~~`( 96 !?PmS0 :)2zjjU|vR' );
define( 'LOGGED_IN_SALT',   '*6w|NgR<r.K/z#7lz@{3DkZi+f 20Xw9QuHm#|B_RNXf(ZuUbrg|NoirDsETgy+t' );
define( 'NONCE_SALT',       'tceyqE6uFJse3RiLJ}U.7k>(,2oL^HTR@R29GWy3f<1&AP11S;R[VNG~AHkzCi=[' );

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
