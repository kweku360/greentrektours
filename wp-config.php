<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'greentrekdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'theProfit');

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
define('AUTH_KEY',         ' N:b0cn2KZIaTAvG}jd^3W]`F.^Ju}NoakhC-@Be_7J#OO5{Cr+RbJy.mw@71O}1');
define('SECURE_AUTH_KEY',  '$|67%pQaWnLCU9U`;k9n9ixr{4:4H?!]dgRZRupP|DR7l%dl6S5t|qMb}vJF)r&$');
define('LOGGED_IN_KEY',    'a(.!-1!pXdB2wtMC5Zk;&:2u!)ul7^WtI`yU<|HNV_zk5wh~>FKu6=}St3/d9a@&');
define('NONCE_KEY',        '^l /FYQxO.kJ]UJV.-F2?.d!&w_Y?Kq`(w$7s1Y#1Us2m;xq5Xeo>sgW}EzDJ`@B');
define('AUTH_SALT',        '[<lD+pV3WI9,TrjL2/-,{V2$E_e9E?Pw_B 2R=Zm?qsUz;e6/mpsnb.A#URRcYoq');
define('SECURE_AUTH_SALT', 'd7!T`.@@%,V$E4b/eel5~l}GM}9LlNrBVYgXi%+Xh2wFzI]R`KlMSxf2Zh:Q[~]1');
define('LOGGED_IN_SALT',   '#;`/<nIwq4Tnj#+/9((H($ ~H0dL=$&mLCX43yVb1,S$!?p`K#p4~&$I<-+Vv+>J');
define('NONCE_SALT',       'uM4>G(8;2Mgq]fu1VhCjvD2PZ~&19pb<A>6m6752e7oe;1}EZ8R]_YU>pMEmpLa.');

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
