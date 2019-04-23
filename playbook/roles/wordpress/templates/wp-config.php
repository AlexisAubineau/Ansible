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
define( 'DB_NAME', 'db_name_here' );

/** MySQL database username */
define( 'DB_USER', 'db_username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db_password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'wp_ip_here' );

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
define('AUTH_KEY',         '/|8EiN eqPWq]!d t%F=UG);vuF2aEi|xtf-*:~sKK{|Wc3-Adhu|O!`>^`sHqi2');
define('SECURE_AUTH_KEY',  '_c6z@<<+`qV%JzLyZjPA|x48h6C}|u6-n_fJe)|C1s4;/MH4|cN)i&ySjIfnHn`N');
define('LOGGED_IN_KEY',    'Vp1XJf2s!i,g{c00FWQKd [UukG!B|t&dNuQHOeKv&7e$#7 XO<9P*n~;=N}Zc^C');
define('NONCE_KEY',        'jeU.;qp$AzQJdB1|p+kpZj(+%-!f$Y!mv&ugzkx}%h|tmI5HXmKC_CmLB_`~+iN=');
define('AUTH_SALT',        'Q;-e=:KvmH/.V`JYL*aa@<=82Q_<lU1*a*8,JdgOGrl|d?w-W%0L-v6?vJyYXoKj');
define('SECURE_AUTH_SALT', 'b8L/c0SNfnl<6=7L@5}=P7`TnCYB&$@$pa,[O-D2e+[sb~c;/#8|I1>8vO~IG{}L');
define('LOGGED_IN_SALT',   'oU*W&s4jrT#-<;|#+bseb^n8c?vnb/lW4nz>]a8:x@Y/[pDj[nb,:j>W?$@4P|uo');
define('NONCE_SALT',       '|vcERWxCW5Lh/iUubMTX[/yyug}|g#}^NUM<n)<C!B&ck^;3<ir+H:Jn7`._ N}-');

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
