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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb_dhammikaj' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y2.0s@K{?W&O/s5X;.pCH*.On2~Q=#jHjdoP]SRW^SuX6ix|TyF%h8=|d$Ks_w8+' );
define( 'SECURE_AUTH_KEY',  'cxsf8y)P~}MVU];Z<A~d&#~6Wt&QoJTz[>.}=a{bCw;(N?&(g|MC=vSKD6CPI$;$' );
define( 'LOGGED_IN_KEY',    '4V{[9(e12bNM*a(C*#|t_#28:3b~u:I3).o#3(!m]Ps6jgQ<)W?c{MFJcHB;mj=J' );
define( 'NONCE_KEY',        'DIBwpS1?^RynIoU:YKFT|fc=Xx~J[j^(qPO98M @/3n)C|bt^!HzX~q:ELGZ;7=I' );
define( 'AUTH_SALT',        '30RQfVJ&I@s;BA%@+9;A2Z=U=N[9+:Y8J]n6<# .}k0W2!~Pyi2]w]L(*]arf,`B' );
define( 'SECURE_AUTH_SALT', '7pbR&%},s?6U$c_fT5{^%qpy4N}R3bg<6b=.rjkbA_O:6cEOaaopw6+YT$2mc2(T' );
define( 'LOGGED_IN_SALT',   '.j@>)B8`c pOtp88V(Sm1{-ZnYvR<vluC4lX2Llel0LveFSI*s-;gl(Ir%Z1O!5<' );
define( 'NONCE_SALT',       'c+!zl91UE;{Q::W&ZcWZ[?_o0Ckfxsx~uyv~RhEh/nS2;Kks_DRncyatRiT>E;%L' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
