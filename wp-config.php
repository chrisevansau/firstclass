<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db128431_firstclass');

/** MySQL database username */
define('DB_USER', 'db128431_fc');

/** MySQL database password */
define('DB_PASSWORD', 'sonix100');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s128431.gridserver.com');

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
define('AUTH_KEY',         'S}Fp;/w/?rz4IOv+~= taHOt7kgdL(t-1ovH-x+^+Hg-&&H3C?|*|8kc7|LaT6JE');
define('SECURE_AUTH_KEY',  'QV# /w&7X$*~|jvj6W;~LDx@{HRjcqC7392+,6>f/&`:/1R^|_l;Oo~-KB!uHU-T');
define('LOGGED_IN_KEY',    '%5|s1nJe.nn(to`_*Ud:In`]5|o&/RMreD*p%cKF|Zj4aWoC:l)s|,=o236R7T8]');
define('NONCE_KEY',        'N2KC$O ag.9~9}T^y&!qd=ap%:-&./@!0#nGPkw{6$vR7_$?$_kZ!7X)sS:U+t.&');
define('AUTH_SALT',        'C+p?FbbI|`},DNI$s/;j^2f-ZcIs 3SWo{5,lWgsgCZi=C*=P :S{Sd81vy(<J|I');
define('SECURE_AUTH_SALT', 'cI1W,5[:og{Hx&-DH#_SXqDB^QCZ[&5y$osTw9[d$DC=o-ZSE2]?^:TfA/ex_P $');
define('LOGGED_IN_SALT',   '`p^^+8^W|s*1_da*@s9=?x5>(vw->T+`HkfSD]?0(NkCJ:olpAXm?kU/ne6<.cxR');
define('NONCE_SALT',       'k?5Gqc@J66 m{7AO#)(dUe4%~XH #DBTNrjb^FCpk+ZiR[0kB89+. (f a.%!6sR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
