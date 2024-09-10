<?php
define( 'WP_CACHE', true );

















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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'redcbltt_wp792' );

/** Database username */
define( 'DB_USER', 'redcbltt_wp792' );

/** Database password */
define( 'DB_PASSWORD', '-!1(1nHWS@pau2l.' );

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
define( 'AUTH_KEY',         'nx1eleycoqfbygajojaqlwiqiv4geqtak0bei7oaoozvtyxeev24xzuolit1btjc' );
define( 'SECURE_AUTH_KEY',  'cshyqh8blko5ospeaua6jabbabbhrdgat1lza2bqqxlqepyzubpbtitg1azauq4j' );
define( 'LOGGED_IN_KEY',    'nlihhvllqczktaufc8jugddohsla2hsx80aga40zimsbkxrubs7ii2ff0u7lnqgn' );
define( 'NONCE_KEY',        'lxvgknxlaml9hslx2ficof1lsrowzc6lgqvr7g0lp3nuij2k0p6io4vchxwuc6l8' );
define( 'AUTH_SALT',        'vo5e04nyslmv1zuzohrib6ftiki6opesfey5qxjoyx2xnrccygdjpdkoauisaeif' );
define( 'SECURE_AUTH_SALT', 'hkgq77ejit2p11w14ssysyckl2dnhkxtsqef6gnfced2np8ynnripmiwvremhoxb' );
define( 'LOGGED_IN_SALT',   '4cae3wkf3ml6aihd7mtqowfuhnbc5kxfwwc8niq3errdlhdayz6rlladr0gywe6v' );
define( 'NONCE_SALT',       'foctdkzihnuzjj20fzluujsvk4onhwupmd0aa5uwutliluofmcfthexchb54ohzu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdm_';

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
