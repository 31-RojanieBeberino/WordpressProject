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
define( 'DB_NAME', 'clonejero' );

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
define( 'AUTH_KEY',         '?Uk>p4~vk 4;7> >6{RUJ&]k[teCwK|x}!3^_m>a2FBKA!:v gadc,IIhl(#c%AN' );
define( 'SECURE_AUTH_KEY',  'C{>55P.)L6K+y@4Hmizq-9[,Y</kHCq}LHc(Hrya}(m&O5s^HN&=l*_b~KV<b!XB' );
define( 'LOGGED_IN_KEY',    'zV(.K=?/r*d]wpEboNS?Q9XA;z9hM9?dHA%R!pZNKFN*gvbJY@V{3+BmR`;_v$=I' );
define( 'NONCE_KEY',        't#EU/NR6ctsyovk5`dN$.M0e4G+!t$3%wQ*u:LJ[<2w=9[mWYb*J:pr$0lSIH@J^' );
define( 'AUTH_SALT',        '2vhvDX/F$MOdpyXtL1iS$a4d8BwSbDiPWyk;Sm+|C2WXV WT1@$>vAN4<YOp^*,1' );
define( 'SECURE_AUTH_SALT', 'tGyvmu#.$0Tb(=wu=cE]*Pm.Sbym?0 P4_l->m(%?SC{ss*i)CK,o0>c:EEdu9{R' );
define( 'LOGGED_IN_SALT',   'q4-Yl_i/-Nu?tas5&s=s6juKJcO3V(uoTI!TK,`z7WuP_.zZx.6,WMAHc}8OZq&t' );
define( 'NONCE_SALT',       'kO;;@X9K7RktN6$:.SdNY;tli0[{HKD-s^6)BJU,b><O|W<U9=;B4#UB&1.[}FS,' );

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
