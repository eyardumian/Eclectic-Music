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
 /** I ADDED THIS */
define( 'CUSTOM_TAGS', true );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Insecure');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         'mSUCN5;RIR/p$X-U|nt~6r`Ie)Kqb^Qy:8=_P)T&k@BY8FxPneP]f!d__/#~OR#C');
define('SECURE_AUTH_KEY',  '}`w+vfs,Km?821@-p{JyG]%nUw9F/L4UqRs+9kNp=4iPM</Z4inin(1o{-*gy&h$');
define('LOGGED_IN_KEY',    'Mo aC&-q C4@4;m|@d~AX-%ph?<nIfjH7||S{ssqq(Zd>r^,|2f!5`YJl:Q8[)?J');
define('NONCE_KEY',        'm+fR*|MOAgNO?%<M*3I&[?-v)@caXNdg+8MR+,|(:$C=HD@$%FwI!)+|GJA``ZL$');
define('AUTH_SALT',        's6&r%TI&s]p{OKVAZ(zC96:z{)U;-i&qg9pjVR4,~]!GTkpI4H)oT,`jR/UD2{kX');
define('SECURE_AUTH_SALT', '. /,zO#rP*EEP)/P#VaW+tyjc[s}j3v^`2 ..m?v3l#=1.3+{@tvzuH$!+)aLy-:');
define('LOGGED_IN_SALT',   'EE:PF.e)Mte]|Ak~&S.Mbv_d|6gj3s7Bc({tCQ=m]kL2-l4*d#0o=L~G^CR>iqN,');
define('NONCE_SALT',       'nhOP`MO7&X~@HwJ+YGg|n`23A #+D_1]{fR||e=Y c.+`3.>lZQ+L.ky%c+T/MFb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '23ymq_';

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
