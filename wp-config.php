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
define('DB_NAME', 'wordpress351');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nihaoma');

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
define('AUTH_KEY',         '_#DGstSI|I_v_q& .I@fjkuKaVidn@)SHr?]k&]+.Xytg(jWJ69a&>8Kr2to([:8');
define('SECURE_AUTH_KEY',  '<wxwjCp4:H~8;ZB580,#dU(SR}9Nf+`=-tpGp|>/nJ=5G-rH@#+q}y?qV)/P~X.]');
define('LOGGED_IN_KEY',    'W_HVV[`5-s OiOg3+R5+??BsCH5E3=r?<7/|Wb0w~O9b@D=3!^@4t/,iuv0Yu7og');
define('NONCE_KEY',        'w;&Yuw7b mc8v-coS@ql1yKO!a>PsA+g5*YjnNU/e~-C[(WAQm(=]4rZ7 @R3-H[');
define('AUTH_SALT',        'DPQX|3v8s~L(Q6chq`F`@ 2Q&cey[v?#X_3%#Rbi=f].35uoDjWTc=]ZQipTaesK');
define('SECURE_AUTH_SALT', 'dTC_^s~;o:h8%Q<N.II s0a7S5.|4=@U*Ys+ywbtJ>R`J&H3J6lS5[pzLb=rd-&j');
define('LOGGED_IN_SALT',   '$XD)Iu~T|dh>I1B{;*|^+>{kbMvhzBmQ~_GD@K|kY<l!HFp4cbUDK8(-rhQ-])21');
define('NONCE_SALT',       'GTCci6^l-a3=dyTsa(FZ&-*wa1_2JN}CtQ~$A-TD$-?7*1I;!7qh90J%of:,|!Ef');

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

