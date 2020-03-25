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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '/nlqHV se1[*T{n5&Kw>%{Ea<9Bb.fp9u{Yxd9w|.P-e~uO|>!l8*Z,dv(mt|vDd' );
define( 'SECURE_AUTH_KEY',  'du}$WQ1` fomB&/!t(^qnS-ypuE>hWj,atOl=%4;Mn9-cHEm(0RY?)u>ftlil:OT' );
define( 'LOGGED_IN_KEY',    'aU})P}_{9Cs0,21dASqS86|2TTxFa1}3EgV@T*r +Y507/@aI>5&b04j@j[3BU;_' );
define( 'NONCE_KEY',        '(@yyFP.yQs<9^K1[c>g.qXkoDrB y&{tgI|J--o-]v2@snzHLZL*<Vf`1z|zXLen' );
define( 'AUTH_SALT',        '.X)x^51er]aVJue4<#:JQ#:kqRvbjR:7L]#(G!/`9j_Vzn}K{dvy@t@`~gA-*vcB' );
define( 'SECURE_AUTH_SALT', '91[P<8M5PiqmfYfx,D1hBg!n[95r@tkd0:$<D,.YhZ&&Z};Jr:=0W{Rj>cykcXZh' );
define( 'LOGGED_IN_SALT',   'tV8~01U&qx(k9V&D`<nB@xwFbWvCEoI10}gGyK4qAZF(k%0 S_^vGV$m/m^JhvZ>' );
define( 'NONCE_SALT',       '6mwgSRL|6(ALExR$c)SVtC:2: R^< J8w0 |[2N]dzHtH8BZp;j2yLPCZ]PP5??G' );

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

