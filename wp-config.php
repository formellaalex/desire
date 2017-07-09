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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'haslo');

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
define('AUTH_KEY',         'K7T]g1+f|*U4$>-er ,6BQ3[@D`AYp<Bkwp q^lK}jcl;Or(-*X|K#(O0W-cp8]=');
define('SECURE_AUTH_KEY',  'V|4Dx)?%#+aQ#/WdD#P_9D_cQ#q`u076JMu9-0sK#G7{h7BSR C%zuRMz[Hk}Tj~');
define('LOGGED_IN_KEY',    '~QLKvN}=x1_8MQw-xTseyox[f<T(@;JP;}9h8+GP8hQ5Fyeiz+`XOPR9nT7gDD>w');
define('NONCE_KEY',        't:,mUc K@?j3{V;&!l0-}--2-Not=}XPerI6RUpdD82qUy,D|p-B+ZL0+$W<JZ`^');
define('AUTH_SALT',        'RKJrgi!Kf,y,vVL@MK03Z<Au#dE|%?%|WAudydbSK?YkD2zBb+v)-qX`zC$lWo7K');
define('SECURE_AUTH_SALT', 'ey+m-bi+[q=u+={f_3uIxkrVhDs_.m~mUB9xOrREn?i>t~hU.9Gny$nsza)YV*EH');
define('LOGGED_IN_SALT',   '8H7rB=M+rSC#>jb73SsglL,A^Y!p72cCpR-u[1rm=[3JI_cjQJC#v7H]`{6Z 4A5');
define('NONCE_SALT',       'HcP7 !QVEQ%@X$RF^ %%+m5PY-Z0ueq3JGEwz4I9mJniU1$xU3-8=k<-=jRfdU#7');
define('FS_METHOD', 'direct');

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
