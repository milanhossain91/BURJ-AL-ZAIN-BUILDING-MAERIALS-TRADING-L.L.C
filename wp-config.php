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
define( 'DB_NAME', 'alzain' );

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
define( 'AUTH_KEY',         'i;;6A*/6D!lq|jbSBZifMy=u99-H!tiY(+U~5}so}q@T6:{>|5}vI~wu[Xe&$.wo' );
define( 'SECURE_AUTH_KEY',  '[WaY#S?+-Kp0#>}R1K1rYvAG.{kY:4Oz]m,`9VSZtC;f?XYxHdt}@Tyb.{Tr;ZoW' );
define( 'LOGGED_IN_KEY',    'do`FSU67u5SD{~rAhIUZ)vmO%+ManwAOrJ>rqcA&(2N)=`I<rDFaclxd?^8G/^>k' );
define( 'NONCE_KEY',        'N.YGTux:uB-A ]*Pr^;J<[07Z-_+c+)TJ,c{p.N(+qdbL%K/zD#%clc%|li+G/X?' );
define( 'AUTH_SALT',        ')P D9NFhF2Il:}#p]-BK_470{ru mW{hU091~kb#A/.?`..fTCe5c{c~cp@KPfvN' );
define( 'SECURE_AUTH_SALT', '^HD[;SRGjNlL~^x~mc:8Cpi,Q};t9vx|CAWOktE`TMsX:2kw5/dpr_Nf|i!20h]w' );
define( 'LOGGED_IN_SALT',   'F(5?sI$^eE4x@Z88a)Lgg~=akm8~ r%^@rtm/s`OFO3O)#e,(!omnPc12lk!]P k' );
define( 'NONCE_SALT',       'c[=PXEer~MD`qPz9h5RsJT[utIJ!av07:|ju{^ULMkS>v<Nz4HmQ 2A9|BiJcUgd' );

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
