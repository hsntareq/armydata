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
define('DB_NAME', 'wp_armydata');

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
define('AUTH_KEY',         '(AgCSWDp^QU~Wr^%,gi(Is[@,o^@*)_fz_z#~-~SN4F=gVX?5AES93]u~p2vu+)k');
define('SECURE_AUTH_KEY',  '(|lPrj+:iQoY9fn8_`6eZL*L&1V}(oq;v ~>.6Pp&Q<[hfQv0Hsq]6Pixg/(L?+n');
define('LOGGED_IN_KEY',    'e?z`K3=<ba42b;zho7D^+~)!2~-iIUg$@5*fO;vkqd3^aIlcU:H3dbji_MH!xRWz');
define('NONCE_KEY',        'QV0g(ML%;9S>LMZQ#?34o_5u-l=#jzEeUpec52bQ_tW/|P@TfMGHyM:Fv=zZcTV2');
define('AUTH_SALT',        'E9y_Ov6?4?Ig~z_Ix*AJ KSbFk=#V`aIF{M2wQ<@=d/&JR5E$D-P1L(pwS+fM#L>');
define('SECURE_AUTH_SALT', '*nQ!Z]T5vcp4UzPwdy%^rWOE_{L!ib~3]|Hc (N([g5n1675=H.#Yjk`88f6^wuF');
define('LOGGED_IN_SALT',   'GfI<Y_=x`cwZZbTk+ABcLY||CD4-HF8A!gt3lb-]{<!ZN6})2X1}K^z^t$+2Ya!(');
define('NONCE_SALT',       'z[s)M${a!J:dmPyMrd,Oh.TR%$[^ [))EDP+-pSA]V56W]c5o_QW8c:OvUy_/&^g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arm_';

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
