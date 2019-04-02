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
define( 'DB_NAME', 'vek18' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'GFO|`vH Qw?@0g~nAuQ]uG!iA<Muh_h7n[!>I.`4&yzm_Zi<yy~9/Kwcusv?X7=N' );
define( 'SECURE_AUTH_KEY',  'E1?MMQ=a&oUtCO%A4]1^_6X]l?O&?hxUj7f/11a!*Ie!L,Im1m62|=X/oaLAAxA8' );
define( 'LOGGED_IN_KEY',    'n*64t:Y9VLAEae-C;^1df*{]`S.&b#~#d,8wq={Or|{+({z>GzliC>1cTlAVw|T&' );
define( 'NONCE_KEY',        '?(S,2mHZ/K`A~0hV(tS#JmQaQW&}$!C~0%4=!v+0,d*}QD)%o@e)A0-* R C8%ml' );
define( 'AUTH_SALT',        ')98(j}~th!X]]MPRaM&6w+4p1=bD[`TJkE^AE`5[1-O-F)mBBG>qu/X=7Xqpz!g}' );
define( 'SECURE_AUTH_SALT', 'h/:e[Rx}}OO/{/qSKEy|I-eWJJPNa]SevrP~FcXG<;n>@q)h&_>[wKPQ#ZK5IdHY' );
define( 'LOGGED_IN_SALT',   'Azg5A/Q=q?IGsOl:m*.7Zg!<j)9kOqVIoUb!snE;PByb>0k,rW6@Xy/$~-{5EK#Q' );
define( 'NONCE_SALT',       'HxNij^tdC6r@`o?-%i(UtvLX~qWjh!@4%S/Iz~KlUK?;)4@Cs)78jQewa{kh:#r*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'v18_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
