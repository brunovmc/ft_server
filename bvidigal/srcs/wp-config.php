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
define( 'DB_NAME', 'wordpress' );

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
define('AUTH_KEY',         'uUxv[^^[KVJnv^54i*@gF0kUzTD!cIn<~sK@&~ScN$MM?^zg^P4Np`~UhHr>!G+k');
define('SECURE_AUTH_KEY',  '!A`yv78A7P]{ascTe:bd^.Iu^` 1V%?<SJB)+D@e<:i&6sh}|fZ^-v9wHHT9ORX ');
define('LOGGED_IN_KEY',    'voc-hbKtCBE]z=I9W-ra`*M2NjN=1Z.,X}a&od#A}nm_a:S@ &$Yw@cn!GI`Yrvd');
define('NONCE_KEY',        'ANbh~cN|)_+N[CIoFidGfXlAAt6d+sF!%A~C?>)Br-i 44|o5vFVXJT6tQE{7#BH');
define('AUTH_SALT',        'DCfa^G.~;>M4H~d#X]1Jn<wnMQxn7^xo|O{A-L9w)D )2Pv3}jl+->@ 2TPM3w^b');
define('SECURE_AUTH_SALT', '=pt<BHu,[TEZ#JRC-K]-9vY;[*R Po=};EBxBx7c8*WsGz6},8/Lyzi/Cl|&b7a+');
define('LOGGED_IN_SALT',   '7S#]%ps%5S|b si_P+q7m^7G-XHtrneqx]`Y);WOz|x.0,iF!%a1b`Xx}c@SAPbQ');
define('NONCE_SALT',       'Xgw^jcd1)mm>/XZTE ?;&c^oheAD8t>:5SG*c:+aefpEki|8is Yn)nVF-v>[vz%');


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
