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
define('DB_NAME', 'wp_diabetes_portal');

/** MySQL database username */
define('DB_USER', 'wp_dportal');

/** MySQL database password */
define('DB_PASSWORD', 'kCpmyOE98LYs4ezujQHtDv6JeK1sa5');

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
define('AUTH_KEY',         '3_<|B?/7xOR=}tJ^ZHYEsu4H~yjsf,3cP26z@@<.EBS-~-3Fuq*Wn,t6iyERp`$|');
define('SECURE_AUTH_KEY',  '+#CaxG-sH3wrEe;pf^a$v6;+0 ({a14C64B1*a;ck{6TdY<$GaN8P?l>LSyC#UR4');
define('LOGGED_IN_KEY',    'fB1YK5#7,iq#-Ow!l+#l|H{4/M?]|_Vh/Au^X2V-f1XwHN23^9V&vEnfJ^l%N +o');
define('NONCE_KEY',        'uSvYZ&yu8|%+$xv[zZO&#|@tAkbPvQr)<bS0^[|:1#S=3i P+#2-_p*nY/e^QaWB');
define('AUTH_SALT',        '.q|4+3hB&teW,m)L||ULKEr[HFsip1Hkoz--l(5sj?> [NVku=5Y25*uo @.(|r*');
define('SECURE_AUTH_SALT', '9r46jNSgAhK],i6O%mT|9l hsBxp,f^Muh5}yx)<O+5+g4L~}X5|cm/D9L!8Z)Vx');
define('LOGGED_IN_SALT',   'oY+}?R(8XSsiY9?+pz=<9Zo!f1jf.X>-P|m+u3[?%}}8%C~uUXxm|E5<7^my70H%');
define('NONCE_SALT',       'EsYLI4q,-KWYE8.68[rOx[>31[nq/2,.ofr)+aD%sG0V*vUX$b[as~#B4_.j##pM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_diabetes_';

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
