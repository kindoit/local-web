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
define( 'DB_NAME', 'curc0l' );

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
define( 'AUTH_KEY',         '. !!O59>IvHDGf[Gudq3U3KDZ$nA!2JpK8((WUY:>Dp<Kj@D`A?i?fJu)Kla@<UI' );
define( 'SECURE_AUTH_KEY',  ';`+{Q_iJVR43|X >ME*c|bg0FHaU&36v`Y}[mn3@+&MpLl8k4w.^4TygV/@R8|D&' );
define( 'LOGGED_IN_KEY',    'P?AMD/@90d)@HO[dB~)gvRADk;FO:a+b%:h7z%]?(7F7+SOqJmI>[2b}}M2Dar&n' );
define( 'NONCE_KEY',        '|sMeB~`QCoXbw9HwJY8>U;AwoVMalF{:XfXbCzSweGM:f5K7l%e@K7P#U],K#0f?' );
define( 'AUTH_SALT',        '`jen|{8iE/{-ss~sw4D2VDm>gg% S$Ib7j,CeNT4VhgX6L`/H17}x%-%+q#3pp;d' );
define( 'SECURE_AUTH_SALT', '0RJY@.Qlo*aN=YlA5I:VD3NtuX8sp<92Nf?*JKP<V).%v_lg4;.UzKOW|dCtq)TB' );
define( 'LOGGED_IN_SALT',   'J:HhvZ`dj10vB,}cqrkf<!c0}+$zyvW{`k+&}0Pcch8Fl$18:|Cr&~c9JPD9N.og' );
define( 'NONCE_SALT',       'EqoXSL&D<e0GM52Myk-f :?0HNh-O.RSLL=s0Q]5_~baFY>R%rQR,9W}+6+PrRu#' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
