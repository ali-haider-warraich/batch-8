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
define( 'DB_NAME', 'batch 8' );

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
define( 'AUTH_KEY',         's?g%o$8ejd]aw0{Z^;2P|5aD(dGb>q~hz)j|L[Zl%rR7#ZoB-n4O![]3sj6;(@h|' );
define( 'SECURE_AUTH_KEY',  'B_zh|%Nz5Rnd_6e)29L_2K,`)A.J}d ^xa>b,:7i=w$|Y@e~,lJQ~kt!nEuTP0-)' );
define( 'LOGGED_IN_KEY',    'PinR=X_K}diV@i59fW+Y_zL).u+J/ MCpU/[5,ppz&S<d+s]8Zis?aBc68q8*N:J' );
define( 'NONCE_KEY',        '<qvZQuht c@]K.3X}fhPK/}qH/[._-A#?aHT=+/d0qo?K, #]vG)2qRUg36Kys{v' );
define( 'AUTH_SALT',        '0q [|hU<|O5Fq$2>.+qwb!BTrh1WMc`Z@hFg-GIsWW <#J`_b|UQs1J@vTmo-UaJ' );
define( 'SECURE_AUTH_SALT', '<GuXU>iRFx@z-Fqz.u4ZEuEg(LB( ?ov[,(.eok0t66cU@C4B)0F@VvO=sp#uz#W' );
define( 'LOGGED_IN_SALT',   'Hwi-]S7-gY|XeX9$#9A#F8@X<@=l<CEppkWJA!qplmEeQS[8c;Px]lHM+#/Y]w^4' );
define( 'NONCE_SALT',       'h62fCyoO4dT!f YH>DX.Oj&qe+>bkxyv>Q7iz?lyP;.Zo|Fo&`;xG}|HOFmt!A)z' );

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
