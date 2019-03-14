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
define( 'AUTH_KEY',         'fVyJ7Z5.(_(arUjuIilBdc;srKFZou Fc%lq 1zZ>Ek1P&;[x3D}GA>4/tat?{|o' );
define( 'SECURE_AUTH_KEY',  '_F.ffo{m6m8mP{%p8wc*w7=,w!8|V^z~UhUx]Wul/*dGn8j.jcv5[Bes26twhkRh' );
define( 'LOGGED_IN_KEY',    'FTW*G6[I=r$SgiD}P^0)6^1yJW%&*_pumwh?]Is*bY$^~+zC(,U6aR[Ky633qHaM' );
define( 'NONCE_KEY',        'QmQAhE):toX8T6&<mH O,j=}kr]^)A$,XcF,UfN.nt^o!JC6p4]US2jDP=i)+,Ft' );
define( 'AUTH_SALT',        'TI^T^0?-3w~`k3%VY}ktD^l<brY;RwF}@8&4amp,B1+0c#=;*dB?[C0[pHz$(-[|' );
define( 'SECURE_AUTH_SALT', '0vzx.5@m`2nHZn38C2]5!:2-N,anPqxa s%[BLf_=&oqm,NWV FLz}3/lCugzn6B' );
define( 'LOGGED_IN_SALT',   'r%>).~X*76ZJO8qvZ3*5Lf }K|MnM$KT#v,Pex_rJ]=1fRreW!n^O!j5)0U~~xZ*' );
define( 'NONCE_SALT',       'W%v&.t*@za)r3D8cnrAPCu 9;|i];TKe,mWSSRDYuMnDusutCD[^[Z1>rN_/|J8:' );

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
