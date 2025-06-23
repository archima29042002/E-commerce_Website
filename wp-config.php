<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Lg]ZL_ku%HZ2WX4] 77^(h35oi>Tec>E_3DD1_`bYa3=&!G#~3ylG6L<ep,]aRx5' );
define( 'SECURE_AUTH_KEY',  '*P:Ua~.+-09Xq).Mp`Y[|a0N&?EZ8a)`?LJWOAGIPb45s!~dGd<%>Dro0RNp^N/|' );
define( 'LOGGED_IN_KEY',    '-_X1sWdSPS}cH>a;q/3Adx*5pB[W5+wxzVpo ,<mm_>Q?h3~ZuT1]rQABum@*uSO' );
define( 'NONCE_KEY',        '8)Xi+dxwB1>HQHIuzP?;L#&5JV*5PpJh@ae#M3/E`iOEG%.#4{3,}bRsWDr^L~_p' );
define( 'AUTH_SALT',        'K}CoRX}$}&RLY.0b:J)kfrHB4R+@O:Cs07#Yu@tH:ZH{Sq`jC)&hg9{Pk5UM7q|,' );
define( 'SECURE_AUTH_SALT', 'RI1,+U?nJ1~N0{<j4AO8W~)Hb1m!$eq@!6S)VPz5t?Yf;$}wXQ/FFkpRbUM@/V@2' );
define( 'LOGGED_IN_SALT',   'Rxxm|U._flBPkQ`Svv`T ob?U?Ybu_+vV-ob0.@?7?:?opcSkyfBG<h8^,KE*<ab' );
define( 'NONCE_SALT',       '?,/g+`4JGh1G` 38lE5r$I_;U,AaB@dlxR%!8G[ufz4g>KSCwt?NjG~Vkt7R`=7[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
