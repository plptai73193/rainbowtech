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
define( 'DB_NAME', 'rainbowtech' );

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
define( 'AUTH_KEY',         '[tlp2oGP14VVH`Rdhg#i]wB9 wPJM~fbXZ.qX$p>43J1B5/=YZ|=78+^#(I~eKW!' );
define( 'SECURE_AUTH_KEY',  'fUX5Q#dIfa#YG!UiF_ICYL+i/;!wRk.5G{-&xbJ&hMcxNtbk?cU^`(_us[chw*LV' );
define( 'LOGGED_IN_KEY',    ':@AneLe|i)$&0`v/iv[2-{dATNdokwpqSw!=D=Cak{uU/B`8UKhUdjbrU/T[o@T}' );
define( 'NONCE_KEY',        'nI3!TX5{O9kzDWZ9_YTQ,$dGC56p!]u+Dr7+2b}8 0il.P-;C+nG-G{N;fWy1u<@' );
define( 'AUTH_SALT',        'v},i,X>WPny~:bR6T:{xaZ!@;-:.,0t%8#K7u99+um@yYhEZ@*T17nQ,Z)UA2FYc' );
define( 'SECURE_AUTH_SALT', 'H7hoQ&JhomzOgdtH~l<|zb%Fq/]MeVzm{!- #-2jJ(J[:G.O<o;z{so%x##9Mbrf' );
define( 'LOGGED_IN_SALT',   'bSMK[Zbo$a|Xo3,EH9D(7Nc*<j3$U7ukn0H`{[~{pKfh2x97}BK6`oeTm;A1/KL?' );
define( 'NONCE_SALT',       '9rFkyMh>/}=gUlT `lU@jOiqA@tI# p~,;AH280],)Y!SP q]w#e(=roSP7,!H^O' );

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
