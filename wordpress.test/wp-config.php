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
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '+t5Q2D[}lS0}<)[*m3[Y3.>8-IA]a;e-rvC?-N){<vM+2h!/5CU}K9_xo|:2>4ot' );
define( 'SECURE_AUTH_KEY',  'Gegl=.oaLgH{&z9%iLhA5`Bh7G [4hw:2a2N. y(n,#Cvm@Ml_V1<d7bwp{1V2[N' );
define( 'LOGGED_IN_KEY',    '*5 4T3q.bmg3WTwAs>Tb?GTXcnkS;aMHz2dtxCh>{0]OKqsEM$5 -#9pcW5wY`.G' );
define( 'NONCE_KEY',        'y4%q%9I(Ai.-eBnj6~K$#U-QKtj@vz3_Zy5*z9@!^051Xa%UPzDt;c&?-S@xSuJT' );
define( 'AUTH_SALT',        '8._*4XiGE7y{yp%1Dm_rzJ>-giu[`]Y4vV]kL]x3%{4xXp,o.Q/C2%h~DkHeR+fO' );
define( 'SECURE_AUTH_SALT', '8i9iyPy%uA5f^X/p=i/:`WFk(#pDEgm&BZ}oD#JU`?moi]#LEsiF(BU!1b?_a1xU' );
define( 'LOGGED_IN_SALT',   'VY>99+ELAj0_,=KO% w~PcqD)^:+7|JBlS `r)c<+V*ol3yv0%/Ye:L-{fcAd..+' );
define( 'NONCE_SALT',       '=jsMnK=dS~ZWly.0r7?R7teA@n)3?~M27z-_En{=,f6CD1Ij>- }Ma[+;96*W1N~' );

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
