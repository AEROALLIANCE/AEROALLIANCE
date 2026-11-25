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
define( 'DB_NAME', 'aeroalliance' );

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
define( 'AUTH_KEY',         '=<=rC*X.nwp|Ua/WPJ:se!6!UDD.?zQ*V_0-b#<?%3x}ByVjN>-V!uKGj;dIjM)2' );
define( 'SECURE_AUTH_KEY',  'ik&cLp$&4[.P$%^i YW0NMji>&}.z1Zy,/W$`Gf};gt YOr@zeLC+SZo^/_dh+6?' );
define( 'LOGGED_IN_KEY',    '&a9qfnS_q;Q>af$kow8Q>{<YpC0X3jn)=) |:kcUN)@q<[DsVTC^9sOg<S5yG}4p' );
define( 'NONCE_KEY',        '.jh.u.&.<|.qr}B,J]HP?7Sc_0MN)C1&hsop+mc*v$]^CB,@=^UZQ95c_2+xmvNO' );
define( 'AUTH_SALT',        '=$JirOjzt UI3Jz7_M=A/N}O@a=#H#,B[N+Ksmre%[FIY$!:Q6aYt6Gu(1vME a&' );
define( 'SECURE_AUTH_SALT', '(+lJ1Y,^p$bQ.;Uc7LpQSQ#[d@r(NIbpuCZX`kjab4V$>vL%HKVrB/;Dg21p~Mx7' );
define( 'LOGGED_IN_SALT',   ']cr@?1tr3($MKh(rk~#[$B:BiSuaR>H%4 M3DyA2,Y8fSV6Ti=QR$**AF)2+2tYS' );
define( 'NONCE_SALT',       'mhY{^otI_RpNiKj}BV:`6oSUokguM5z*]s^O^}ncVv3j,6[<&NS>?@$ZFg&,&_Qy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aa_';

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
