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
define('DB_NAME', 'wp_projektas1');

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
define('AUTH_KEY',         '/_5mUe/_!.A7{ [:.Pxr(k((HP;x+njU},k`%e.7Fm`?NE?6(KZ5bH/x[_+Whwp[');
define('SECURE_AUTH_KEY',  '5<8aZodd#-{hjf|9DsbBJ ;!^9BcMx!Bel-j1gB;k50yeL?`,|:N8w$kc}^aG&Tk');
define('LOGGED_IN_KEY',    '*z>+`<_CDKFs$q=X%?aVUO(|iJ%:k,xl^],$c+zS>TQl3TBr^*_!2%`P33oHJskO');
define('NONCE_KEY',        '  wubFg`qGtV(rHJG/bB=ean?FxL<|rVC~4w9QMr]wb7+$c/+:Sq61~c]mYHi/4$');
define('AUTH_SALT',        '%1Nb*{IVwd`JcGVz0-n?8^Mru!hXR8G6X/?|5OF |k*Ky8>y;<Ed[hmtAm>#t+C>');
define('SECURE_AUTH_SALT', '/uN(,H0p<yjYj.Jt=XTd-d@RZ-wvv!ccdQc48pGzd}U,-yjNkIvNTbjEQ6TDFrcU');
define('LOGGED_IN_SALT',   '8pw3{$`&l;}_uTh$2@NKS)~{N/=7L9tmKGF$( HH.fz`m?`N2YIVTz6. C{#62KD');
define('NONCE_SALT',       'DbsTgE*>a*+q+=AGM99=E8Nn5kgOI$>=!TiD#)I-8=WVvkL1<u#`+z~XSm|-4T6q');

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
