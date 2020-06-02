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
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'B8W],<xy:8?T4eiwg>rq9`bBq*Hzp0*+N;vybOMWP+I[ri^Zv=*8TAxCc:W=A//M');
define('SECURE_AUTH_KEY',  'f/8X[Y9Ci4w6m,I{9BLp>+:;7|i6-YHjU>uE|DV|{Z@[sD-^0j|kgk3CPR@M,SIO');
define('LOGGED_IN_KEY',    'Y$JZtlao(sRd)Y4=&OwfV+2>vH-G0ksH~^|Udjmej&OQt>k0*fZ(%B!zbv_dbg{+');
define('NONCE_KEY',        ':zCuR33nq 8oYC$p= .kgR8|{<P&ZxC6=u47| O(-NqJfw7>aQ@%<f)a?Z-`mJ`j');
define('AUTH_SALT',        'UW#ccN?I*ov4}f[kW/C|dl=Uzec(G=xC,=Q5q*+:6L!|<hkH7;t#Z-VqWrp|p(E.');
define('SECURE_AUTH_SALT', 'aoOk4_p@S@Ik+{6S7zfy|*3+A-d#Jc|)5+jHQ`x{g`2^c,sQlC+HZ-L6&6+#2&@M');
define('LOGGED_IN_SALT',   '-MJ15j<V0M|4x_dFq_X8qKGj}|T!h~tOw[bZq2.iitm6-6s-v=;iNu*<Kwfe2Wwn');
define('NONCE_SALT',       '&J*z+eiJ +^J1PEKAzn<09Z%m*lV-0S,9|V}%6I7zP+G/72XT7<eDkdTKj|1r{;l');


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
