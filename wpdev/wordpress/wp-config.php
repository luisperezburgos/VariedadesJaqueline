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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'variedadesjaqueline');

/** MySQL database username */
define('DB_USER', 'variedadesjq');

/** MySQL database password */
define('DB_PASSWORD', 'uVJKfMTK');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YVPr(|0sXRH]dY`1f>}eLI82+C:TyHwMB [ELMmpcM{lf#=,KK7b+/+dGB&vex{z');
define('SECURE_AUTH_KEY',  '{D};+rH$ C||~s!eq?4%8H+.v5e:$.eOAB4MS>N{pK;!8%+CrYXFDB79ieB@4{ks');
define('LOGGED_IN_KEY',    ' cWn3!SFypN8VSB1{pPZ:%&6V.${?ZvPXG$R(+G6pFNOG)@g/@}rkZl&:a{<%AdT');
define('NONCE_KEY',        '3[ru/wpB<iK0)|42}}+.bi=1MD)FA1e%ib.Dz|!+ sB4A;p/}2~3}VE3wa[zD_sU');
define('AUTH_SALT',        ':+-4C[%<{n%Q)DX}c(,.|u:SbP7?<1laFPAgl~awK!gD2-I;|~vs0l|diZNK6YRc');
define('SECURE_AUTH_SALT', 'r=KPG7hc?p?+S>ptRFoma0p_=$M8x>T3_VnRO-)~H3)-k+c+v`2K8sc)%*TuMa .');
define('LOGGED_IN_SALT',   'QQP<Qb|1rUqZP~s]we;R%WdP~|p@C2t)@ycWxu_bb%vORspTnv?-&$;+@1YBwU@e');
define('NONCE_SALT',       '.:_Wa{)H+3g7pj9G9><WTzG]pr[n(-Bu5E?^yknJmv5 -<f*W^kzo}|<B(Ty^2:`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
