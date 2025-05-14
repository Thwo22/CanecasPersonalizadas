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
define( 'DB_NAME', 'canecas_personalizadas' );

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
define( 'AUTH_KEY',         'oL5WIHVlf2%|@qa{(W4->?W^9=]10M:8$HT#vecYq,,dd]ubqyO<C7_R1Y>F(BBh' );
define( 'SECURE_AUTH_KEY',  'feK9(o7*#DQIR|mK4zs&m0$Jak]=%=WPCtGw<dx})1sm>/Xh_)RD!;#V/5OHyDjq' );
define( 'LOGGED_IN_KEY',    '%*ahQE~U?6(*K9nNB!CdU{IDvBKX;R|!_`uqeM7iCa;_f6u1(tzGm?<:m>aFcacO' );
define( 'NONCE_KEY',        'D!wwpGhct+V*vZi40,iVc@L>{S_OOKyl}118LH_(*wU3j 4PT}^B8o4Wo@d-T6&E' );
define( 'AUTH_SALT',        'HiSWZ&5F,P5NO_7VN95^ZR~Je8_QNI@[GpU*0:jfDpA&]d!+[l>n@ED8oxZ#K2@X' );
define( 'SECURE_AUTH_SALT', 'O:S{l:D$Sth.DaF>+j>a_BV$zU=W28VJWTMZfBBW.:N?vK-;4o_mh.j6N3%n x8g' );
define( 'LOGGED_IN_SALT',   '.BO)I0Zg&: =!6#B%[qJMlp^@.OD`EAfycnt6?vo*1@Cr>DdLXR_k^JK5R0W.c|U' );
define( 'NONCE_SALT',       'EV6t bE)P !%2X (:#x2]e`1TcUQzG%Ld ]iQx$LXJ~(C6:J:Hbd&BXT#Q@{WX!n' );

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
