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
define( 'DB_NAME', 'svarnavi_wp963' );

/** Database username */
define( 'DB_USER', 'svarnavi_wp963' );

/** Database password */
define( 'DB_PASSWORD', 'RS0@]7pw2v' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'woa7qoe0g5qxzdunijzwt2yqe14tgyswlchhsqk7o9kk9ke3ol6sgwyelevm4twb' );
define( 'SECURE_AUTH_KEY',  '61ippbzt0z2jswdsfzhtklt3v4wna3tfor1a1r79fnxekm6tmucewekkqdupnzop' );
define( 'LOGGED_IN_KEY',    'wxz6wbgjg9il5rgabpxblz0kgbmkapuutcgf3ahb3qzjzd2qvkltiqh0pbdr3xhj' );
define( 'NONCE_KEY',        'lc15xfp1plhk2mqgafzhtzrjzqq30ewsiflviuidswqtgqlvivxb1dsvm2jzcmbn' );
define( 'AUTH_SALT',        'qg2kvggtqmpb3gdv0i8n0ow6qbjt0yy9c1chvz3qnn5spivairs2c0oxfjvcjkff' );
define( 'SECURE_AUTH_SALT', '8iijhahl9lvkvpbovxbh6eu0fvnx1t0esrzayx6lkxyb1gwaigt4f3ns0dmzlvy5' );
define( 'LOGGED_IN_SALT',   'maesrls9vwpthprjdwgenuhjvxp6zgpr09ipd4yigs8hr28v6o7aqrwkeiypomgm' );
define( 'NONCE_SALT',       'lbljtlmdtca1qwluhi6c0bibzybln02enr5yyujrksfgbluingp1lltajuaol3nb' );

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
