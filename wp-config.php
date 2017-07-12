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
define('DB_NAME', '4thhurdledb');

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
define('AUTH_KEY',         't2L|2TJ5L8s/nC7$T_W(wVADo8@eMy*3cJ*QwJ@ARiC*@%>:>dD?b[M2qMO#=Qj[');
define('SECURE_AUTH_KEY',  ';~Y&[cE1u0=6:GzE{N**|J:~r:M7iYyz)d{j>ig&%um6y|UCnrF&l*^/9KTo>;dr');
define('LOGGED_IN_KEY',    '&h}Xz@<1;~tI_XEu&v#;wfS1v(v^Wc`9yVq7tD-4[ls2<a+v9V<0GJJT(JRAxq|w');
define('NONCE_KEY',        ')/oQ|WSDDwiZEz58S_[$fe`s,WdS=w**2b<k-Y,wT|.M`Ge#G /nOeZ91x7eiOzh');
define('AUTH_SALT',        ':&Aw.$A8~yJ-?01:b47bJ.}2Am4e6S5UZowN!#72$9@maF>KokzNzQDQ,VFU5l_D');
define('SECURE_AUTH_SALT', '|W>24s]?{:)(KW;H1Xn@+c)RCx6d642bo5 Gqa&6tcP|8>qh(=&!;?Pn(3kj0geP');
define('LOGGED_IN_SALT',   '22]?*b.|Y.<#! gxDKUZWZQfcaD$pl;3/lF)]30guQSf9B4nL(.Ro30Y:wfO@KcT');
define('NONCE_SALT',       '.7PWIVp>!kff0&a Xu[%S*n1QKfOso+yL!$65ziI4,8r+8I-TY?2>S*fcmin8ZUU');

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
define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
