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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1d53c7ebda1da3730a280e04c16528e7a55d491e12a80be0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WHu#9]&N&ffIb`|ax;`z1~ZpFI[RN_B99f]Zm9I2%Mo0$E(9(>:E8]|RJGvd#Gmw');
define('SECURE_AUTH_KEY',  '5F]{k,ZwUUQc5MH /1 i?:6:]$iAr?ytIKG=mno}?1zD<d ;z9mE3,B:zY~$~N-8');
define('LOGGED_IN_KEY',    '%5p{`KjHg5OQ{Uhrvye,2Bjoe^jk,_bAqJ;lEzUovUAmMiwz.aL+;YI`e@4|4;TA');
define('NONCE_KEY',        'Ro|Q7@[CWJ7|0.$niZbM ~Bx!COA-<hYV!BgkIW#;!lf*0aeDIZJ(!X/mgf(5jRQ');
define('AUTH_SALT',        'wVc{uh[Fp#e_v}F$R<=f0)out}TD,)=w]A;vV2DgBUW{G}>[06OsRy4qYLSQx$O*');
define('SECURE_AUTH_SALT', '#`@RXMumC|2N~.2)$awx{yb:8^V.`Ij|t?gW*=bh`!)lqQWo]2,4nReZWOq7^~7^');
define('LOGGED_IN_SALT',   '@m|GMW68`;OT{/7jQK>c?w>jQ/qRuc:<s%%~kcT|vV)0moW^98TWp^R&<IlAj|MB');
define('NONCE_SALT',       'waeK6;!EP1CFg[y*~9pjbr<5}OG8ZZ6Vq|qn3_L2-./q85*)#pbq^zG#QN}+egHS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
