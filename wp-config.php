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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woodsoftDB2mpxg');

/** MySQL database username */
define( 'DB_USER', 'woodsoftDB2mpxg');

/** MySQL database password */
define( 'DB_PASSWORD', 'PPyjgsdaE');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'n7j];Hq.<.2IXm4GCk~!5dw-8Rz}CFZo0JNg[p~]9Op*;9Pds#Ohw-:Wp~u<Pim*I');
define( 'SECURE_AUTH_KEY', 'bu^>!7B4RJcUrko,@4>F8VNRogzs>!|C4RFcVsko3}F7UMQnf$r>^73QJcUrjn,@');
define( 'LOGGED_IN_KEY', 'Pq2DPe;ALbmKalx_1i#;9P*JYkv,Ugv!}csz[Iy>3FUfvFQgr^}Odo-|5K-#5KWlw');
define( 'NONCE_KEY', 'N|OVl#2DTe;APam+LXm#1hx_;9O*]9Lam<3IUfuEQfr${c+<6Iy.EPfEQbYn8NY');
define( 'AUTH_SALT', '<W_9L+#2DT.23EUjv,Fv^FUgrEu.EQfqAMbny4JVgv!Rdo@[Zo>3Fv,0BNc}8');
define( 'SECURE_AUTH_SALT', '#eh;9Pa$<3ITj3EUfrBMq+<Xmy.2Eu.APN@>4JU,4FRgsCfr$}7nz,FU,0FCOd:');
define( 'LOGGED_IN_SALT', 'COtK9S|sCK18oRd:w!R4GsZl_pxH;6mta]2*PXDq+i;A.TeH#:-KW9pxe;5_]aHO~');
define( 'NONCE_SALT', 'j^UAIyfn7,{bIQ^juT6Hxbm6*{bEP+iuA<2fMX.q$4^}YFN@krB>4gNU|rzJ08ov');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
