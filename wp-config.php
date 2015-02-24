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
define('AUTH_KEY',         'qG#7.6a$);8kq|M51zps}{l<akG)3(~5y[fllPsembYT)>>@nCXxE%6zly`oi`hf');
define('SECURE_AUTH_KEY',  'v>`[shA~;I%|rAgB04c|47U38%NDL46e`CA3 v+QP*y6rE%SQJCI]aqtPqwuX%49');
define('LOGGED_IN_KEY',    'Bijzk1zw$-7BHJFw3>hQt0ggng;d.nBW^Z5IMI_n|{^p98+RO7:jf=jaZbTZ]jXr');
define('NONCE_KEY',        ',?A_ sF-d&cu~!IA<gIEZl/*H~B+Ng,-^U4[,D{9z41qVmn`(D+*mU,j[fzQ9YBU');
define('AUTH_SALT',        'C/yp-ikSTMmw~XP=w3t_a0>ieUO%]*ES]8x4c#xtB,>x_aZ_]^`yf8PN;wU2wJP7');
define('SECURE_AUTH_SALT', '{&_@N?sIJpvsaNpZ/vyK_J4,>Q-#slW>vt$OI=*.]<r0NZD5-Fb?6B3^bs!L5uN~');
define('LOGGED_IN_SALT',   '.^)B+#cz:}>=&*6s[xiq/|(WdoPSFNoQM4lu0V9XbqMH`fSLM#O]Kza[/L?2,<M(');
define('NONCE_SALT',       '.N]{[fyruN#QsR|2RA~~QuHlS/!/b%(#}f(t<g;L5~jj2]#FC0zhv/>q2@x+Y<Uv');

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

