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
define('DB_NAME', 'majesticawning');

/** MySQL database username */
define('DB_USER', 'majesticawning');

/** MySQL database password */
define('DB_PASSWORD', 'FZCBHmqB2u8bt!');

/** MySQL hostname */
define('DB_HOST', 'majesticawning.db.11896704.hostedresource.com');

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
define('AUTH_KEY',         'fjd&C`#@D _s<p*ZbXIK;S>x13JNZwA70yJ*q_iqpr0@0&|6J(yK3h{n&-e|L7(l');
define('SECURE_AUTH_KEY',  'PrZJ>b42#jPsC,i1#Ye[zjj9Q0uN-P;2V<MnmOeN}){s1}zX;G6TGMaXnu(-,~ ,');
define('LOGGED_IN_KEY',    'z]7mBx&>l]UKQv6xh*WCENj7>1=@fZb`/W3$oU~8%wtN5R!@EVmtH8U4Dc7U*S?I');
define('NONCE_KEY',        'e6K,t7#Ruk9%i>iah>_sGpvS6|2GL+MWPK$C<rP{h@II`;fDm|lw+=%+(+nc!jro');
define('AUTH_SALT',        '^HGa#@m+uvt%YWpWWJ^@8`[)@42,)-b!hjz|&Kt{FlBRBFOhmF2P=L9}Q5,tLz5;');
define('SECURE_AUTH_SALT', 'u=@$goa?tV&XMpejq;t@`_621;R{ 51`ZmjW<b{~x59`X3V)I>~ORg^l+1[+m=8H');
define('LOGGED_IN_SALT',   'hy/5o+`&V=ac>Qj*,p>MtS{1C6)e1DzpM-hjawbudZV$3qJMT:ck?Yy^x1Wo94H4');
define('NONCE_SALT',       '=]AYv%PUfGZ8h5IS_%/kG= )m7B]7$>QBmyOS3J&_ZKwX+I9/mw^jz d6uR}X3n+');

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
