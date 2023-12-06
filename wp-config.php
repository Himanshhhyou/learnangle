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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learnangle' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '`dH62rvE/}ly_jRUwU*SjYRjQk1%x0sJ,5OLKO=NOPm`#3F[/y}fdUVTtfaD&sI9' );
define( 'SECURE_AUTH_KEY',  'VLNALsAM(pMb3Yc^Sb6]72Te^+34fvyN14_,g~0Qg4KF].!OohxG@SaHnVa,SdAI' );
define( 'LOGGED_IN_KEY',    'Ql{hMtb0~:<xhB2{=Ax{3R)MNt&9[N~,N1% $wFT%;3/uC;U9805`a1DpUoTdkmY' );
define( 'NONCE_KEY',        'g+PBnx{ynh/%enW{f.Q+([)&>-L@%},27F@#KUl^,1Ka{AxmAY.;L8R{M__TBF+(' );
define( 'AUTH_SALT',        'D^Co*|r6XmuOVpB#NUpZAC;4%XX+wbo8CLaw>;s]%vd#cfMkij%Rtx4lBKqfWnwh' );
define( 'SECURE_AUTH_SALT', 'rp0Hy7we$d2XW8|Fs8$))[e16,F-n4#!%)t>>-~7(PNve}9S=-$X(Tf9Gj[8_%D ' );
define( 'LOGGED_IN_SALT',   'YX-qFF{h+T(6Gt#GR;h|BxS|8|VIc01NgdgP0UO}4_G[Gz>.k//KVn}e~[guQ]f ' );
define( 'NONCE_SALT',       'EAnQ@<}T9[NqNBh[.ykneH]@}F3l]OiAhl#}NpB/$:wVf;-]9B~{T]~H`@/>1:]Q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
