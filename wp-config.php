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
define( 'DB_NAME', 'MonSite_db' );

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
define( 'AUTH_KEY',         '!D,q:U>KAL<#3FQ6Nc;X?l9%f.`P#hY8Je)vD{u)K_9wtk0I T9(6gnzm]5I,r$s' );
define( 'SECURE_AUTH_KEY',  ' yrKAq@e7mtDu03r<*,c#@#)>@v 9*#=[|QZiDlsCw@3g$v3)IK#I)Z)S~!Y^5+y' );
define( 'LOGGED_IN_KEY',    'c4`JF9JjK?9/xlgx,WtQXd6;<=Q+12g*2UxIE}@p{9C_81Ag]<cA<j^?6)qNn^;E' );
define( 'NONCE_KEY',        ']m2fev$QIq1z@ww5p0C?eIG!(A&v8z%oY3&?pL^Xy%<|?`rgxvFkr*#Q*ssoKXNq' );
define( 'AUTH_SALT',        'f|+XR 5] :R}2Q[ibtt6om`KnU6hW`>-lQ#i7EUM||<n#Dmt]&Z6gVf5}=;$oPcX' );
define( 'SECURE_AUTH_SALT', 'OQ~!03ItxsCplX8ZFaF5@x&1z[LFVo$rVAG~}5m#1EI(*_X bgu*7b<MvI^h_1Xp' );
define( 'LOGGED_IN_SALT',   'iP4b.PlQw1v)OE<q$$g.bRK_DW,:9`I~^notFXiR5:pmgZ|GcGC?2)Mif29REM-r' );
define( 'NONCE_SALT',       'SZ&!PTMHd#x l@O9[Q.`{:;KgWPCI+Y=NY1O=u[S-snNdS)[r5bd1&j;Hj&()3((' );

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
