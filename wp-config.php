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
define( 'DB_NAME', 'exampledb' );

/** MySQL database username */
define( 'DB_USER', 'exampleuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'examplepass' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Gskkmq_r0E>Tw]5<T>C5#2O,..;.69>%krGggX%E$Wy13_*`;YF..rd:$dwNkk){' );
define( 'SECURE_AUTH_KEY',  '@9R{(p5xb^ WG@m) 3^X-25OA]Ji[2y+Hu=tD[:(1G=V}G}ZYlst)U](pRLO(g*m' );
define( 'LOGGED_IN_KEY',    'd(:D:5;(>~gjG+ZG3x9jh R_uf@>-E---jK-!_)fG2ySgB|v,|3+>#_%RWqQpJk8' );
define( 'NONCE_KEY',        '(WYClS1]{@JCE@,%#wXsHaF(`QN~>`0:X5Bw?Q[uTV|u_Sx+y9?uWHB7{D56V$.!' );
define( 'AUTH_SALT',        '<go6)(^^Z*A4&eC|cy&qS/M*L%pj0}IzVSy(EK|RHGop-+`= GuI.FBoHo!~-@c$' );
define( 'SECURE_AUTH_SALT', '8hZc)Zs^!$fQDM|,q)3HW|$hvb,Wc()^4IUY8= =h|_;IF};gmw8dIqn -|QmRUP' );
define( 'LOGGED_IN_SALT',   'Y7EPi_~g/>*4N4TB,tH_4U -72G|=GJ^P01g([NBuQ5NVLResFZ<Z$]^7t+EL:Ca' );
define( 'NONCE_SALT',       'Il U}K359{dGWkJ5{dMAUaBk+@lX4#phe/9;RU~`PJ.(Y,-W}D?/<_oZ?WH)d`uq' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
