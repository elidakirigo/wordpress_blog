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
define( 'DB_NAME', 'sexual_blog' );

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
define( 'AUTH_KEY',         ' {6z%-dQ1Xj;O1q**Y]L]Q/t+RhF.|@zK1lg}bk%ys*sQN%7:aJ-&w$v/mHCz!C%' );
define( 'SECURE_AUTH_KEY',  ';q*&WUg}9nnX_w?)DRzX(B7oaMYb1:4~r01)USTqBc5>=wROC_RJ_4 ^cpq^Hr0k' );
define( 'LOGGED_IN_KEY',    '.PRuR:E66loqmO3%f4fAg|e<i9hJ.S[N;q),d^n/YcuNVPZ^O<29iR,dPHY3z{V0' );
define( 'NONCE_KEY',        'Q4[0>vi+ )!X]}1;JhJ@l(AD9:j6-`<h>xI0AtP|-p6n~PC Q]g#HY1e|`-pk_>X' );
define( 'AUTH_SALT',        'Kb`4^B*RYrKl *?W+N,~6/%}2;Jb4]Sb::l)x2;N5Vgv0nU82l BZF`9mv.k_-%#' );
define( 'SECURE_AUTH_SALT', '|z4?gvwHhR[-`w)^V1ki<Dk5(dY%O@EPF:Rr!f9_#4raWw+[B5B+GTr6zb#[n=1T' );
define( 'LOGGED_IN_SALT',   '*ek,CU)ED{e8_[vYZP!u)>9:5Ymvr[;bUYwxF/8ouTu]..-3lVq}+Bx{qJYw1XaZ' );
define( 'NONCE_SALT',       'q~2kuzw2$[^G&!4zf1ZEFJ#EeLa~!~)C4zPQJaMa25C@SCo|PolW+.fTpRxAG|CQ' );

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
