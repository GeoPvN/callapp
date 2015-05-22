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
define('DB_NAME', 'callapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Gl-1114');

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
define('AUTH_KEY',         ',SeA03#N<NK5lO~ID=.s{!|j{QJ?,XQhFFxk SF_gqTee$g|W_M?)r^*L?5]}$$|');
define('SECURE_AUTH_KEY',  ' <PmW{j=h:#L,vdsk7y+BvvJqYT|dwf7=sgGTNa]u`}Y++)5[:gt*%*TRP-CNb w');
define('LOGGED_IN_KEY',    'o<Euas(m]d{chDA+ri]GZ6V<5<RhTAK;HwVGytY!=q*Ls#t7%yaX8,Ho1~Gj?v!)');
define('NONCE_KEY',        '[fw=O!!N^eu+v:gm2w4Pl-CkyqegXwA@KOV,f7H;_KZ@WfB04h+ms/|t6qWT5[}t');
define('AUTH_SALT',        'v9-GG}wHJwr!(1xo:d~Ht~G$t(|sJI!cJ#LH&|:obT U&vB^a-}CNfPoZn#o|@+%');
define('SECURE_AUTH_SALT', 'E-9uw]aq%GD.qlUXkhCN8@fDq$co]~B2(G1/&OGe.qjab?ZJB|&D#dLf9YZ|lufn');
define('LOGGED_IN_SALT',   'cfq*)V4gI $h!8SC2>-1k:n}^]7T +o*s(T{vdh#r4=W2~G9g6{qY~yX c4YI$JJ');
define('NONCE_SALT',       '@H)D(`^o|(s>0 oZX/2!G<J-Hw,&3pBczNJ|*:Ycf(c8W|ly>%6I^.<D(=GHG.2E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
