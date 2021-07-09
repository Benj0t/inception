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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bemoreau' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lol' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '_vnPD&GjlId=5d;-{.ar}![w{Y+?$7&P+A3UZDV5r/GliAgX2y,CzBTUPia}d)U*');
define('SECURE_AUTH_KEY',  '}|]{)<tD-pbKu;vzb=fUI)oH5zV%hS$|K1a2BL=-uUn@tQN7^&L+a2M==|*)RZ5[');
define('LOGGED_IN_KEY',    'l!-?1vAG={hhp2@/{Qf0KHy?KY!sO@z3f5?wq@gR^5/YfobL7D9`htKP2{1rxC@_');
define('NONCE_KEY',        '#|$V%5^<N$y|^W0XIu;b`unw{+t]T%0fkx3<EzLijdK-6 G^2D6vBz]Ci{QHcS_-');
define('AUTH_SALT',        'Gu,J>Q+1y1O(Q~{Cf:1k81,uRhtF5]--IKq<qU R/Pn$_I;f(K^pQQ6/Gz`dRX42');
define('SECURE_AUTH_SALT', 'MwB1k=QFTw/W%X+V&#;-=*Y)qd)M:<v=?w-r;m0y0{+Q2Ho94nT*(mXL;$fI:53#');
define('LOGGED_IN_SALT',   'y&3?zH2HY+`}.~U5)<p,`!%-PB l*|T#y?y+50 [Wi|yNj(]:a,ja-Dxq5~wlh3J');
define('NONCE_SALT',       'D|YyfoZz -Y-Bt1T *y$+Fxq,T|d:XtlT!V,~|ib-FWIV+H4[Oh[=xs.Y~@f4)%t');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
