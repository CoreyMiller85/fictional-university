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
define( 'DB_NAME', 'fictional-university' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '_PoPd+.kjfn/Po-A<Qh#rqIew]s64Td|t#v]9D.9Xyw}UZ0!~<UF9^N=+qTfmr2o' );
define( 'SECURE_AUTH_KEY',   'R$FDCDci5{<)YT%bq[D=Xo_sgoK0,yW>Fa(h:Te^SqIM.n[|_<j{vGZB]z5}&JuO' );
define( 'LOGGED_IN_KEY',     '+QMyz~X$@S;t=mBRD%fJE_=$qAq_HAV 624PU*b@J|]<VI0@G@FR[Z;7rLIC2Aip' );
define( 'NONCE_KEY',         '1&IArjQ:@#ALmTlf3_8_9B8}??#7.PF@$.rPT+?5VOk0g9au%`5VQ1u&LEYx|Ew#' );
define( 'AUTH_SALT',         '<)tX*Mz.w:*!uiJ8Z[ol_qyYRjN1]d#.^lD!,/)}H2lSVw4$z$j!MP_]1f*Fh)La' );
define( 'SECURE_AUTH_SALT',  '}aL=B:c6|?)!+q)(og+$Fn3=1?XO0>(-v9RGKmU>z!x/,BX3Dn8R@~2^:U2tqg)Z' );
define( 'LOGGED_IN_SALT',    '*ROy,?}KrwTs9mGEsqxz*lM%D<TTH}SYtNy`|7lR4~:<?S~_<I I@r}eyDPlH_6X' );
define( 'NONCE_SALT',        '_ZW:le`r?/pdY~U&,t&$wdiYzjy?WLoKrIqZeyLCOhd2L^~OCRwX`9Tz1@Pv$|Tv' );
define( 'WP_CACHE_KEY_SALT', 'Ox*>f*]&ZH}_C1;;O)7<qugn&FSK.CNts(``jC&;xXP~p>2q2c/(o8;$m*F9*y#G' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
