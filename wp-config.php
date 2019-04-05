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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#6@+apt>?Y>j6wpRiYIaK%N8a{Ofds,wt ULM-H2Rv5yiQK|Ml=?HU&Z0Q>#RjEn');
define('SECURE_AUTH_KEY',  '|FYHBPa!^r1lh msh^,25SC,gYCLSrxpjkyVa%y<cUIt:8xhQ%yZ$X[ZZq.<S;0/');
define('LOGGED_IN_KEY',    '#Q`9U?>#23a=ngfOiO@5i7crnqL^$[|c#;v[xWT*v,/]>lH?8:oR+2e&T@iPMP|g');
define('NONCE_KEY',        'U06LPui*-k+!pM+FcNT^_cH[ ]G(CP2:./:a0DK)+xGZ6x_ $6U*rU,.i{!{B1,u');
define('AUTH_SALT',        'izG6#g:x2MhRWE/AC{=SxJA_J+Yve0DnU~R=G>3vo#tOE/lSH$E5[ImP11%D;Hi]');
define('SECURE_AUTH_SALT', '=p$^B+[0-:<<p#+:NB$XxA^o[a .9bV,Kb<]^YR9F^t]$n]@o6;ptPTaK;[s!mM5');
define('LOGGED_IN_SALT',   'D1, $Ctc8g_a09LyB>jB9(N{kYP:,U&tLErO&6F&7bj!@#UMPXVsYCvfn%QQJ57^');
define('NONCE_SALT',       'vrH7 Uhq03{h#EM86*U[8qOmm&}.Jm4bN?({oOB#76qjQC U?g9d*Cl>DBvr{cFj');

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
