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
define( 'DB_NAME', 'lifehelp' );

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
define( 'AUTH_KEY',         '`I7x>_531dqVZC6Cm=^1CR(S,UbB_hOdup* 2G3Rmx6-c!_FS$i{b(f(m*l!U>$%' );
define( 'SECURE_AUTH_KEY',  'czt`&e?z:va||[-cyq`.M72BNi*G}uU3%s[q=bjc+i+3ljn0m/1RdCfc[4jXN0Hk' );
define( 'LOGGED_IN_KEY',    '[e+i^d@v8L;VY2Auz2({_6g7(-!Vqws(5^$#HEQ-2X E#3|*V[hFy>(Q^b*f|A2)' );
define( 'NONCE_KEY',        'L!rYW !het8t]j<v?Q8mDwW*PV+yKS>XE)&+S5q,#ilVj_Rb{3 5Da]-fQ@bLa?=' );
define( 'AUTH_SALT',        'm?^(0P`S3U|N8utX*^53t-WiUf{.=V.J9W2vMcQcHS=@a$DZWv K=<_f({e#t=,9' );
define( 'SECURE_AUTH_SALT', 'u m_JXx$/e702:EP6kt69asLdCnvb`q?y!@)l*Gaktsn{HStkgb/#@j52+~[48 h' );
define( 'LOGGED_IN_SALT',   'u*+2E`f)k(}pX Y6$,OLIZeBzl?);LclU&SLxBlmifPY2?PdqGEHKzu.5ds.!ON ' );
define( 'NONCE_SALT',       'N6bUEtE6J;;v8z?Z*OaB;%V f[bpd649O)pY&+OupEb<@H`TMZj8{(dK%$e CaAM' );

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
