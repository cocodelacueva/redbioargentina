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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'redbioargentina');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pr4/>G4d05nFnX`=Tl[8-R>DAu~n;ByG?DFTIuDm8+}|hZdb}TB^%+,%$t:xXy2`');
define('SECURE_AUTH_KEY',  'cL]@---hjvru-k06}dMsGZ@|uG<)T>yun+6KHfm{?++ 4,Sm;Dp9AfpuT;spPBv1');
define('LOGGED_IN_KEY',    '|V/7kaDC@WKF#00aYvGaeyIDuGWzJ )V7u!f|/B LnUfpyvuc` 2XNEycrwRcCVj');
define('NONCE_KEY',        'O4UIL@R97d.4,wd(7SI_*1()1fC1l-8zn{`@!2+>=+-Zf!Jjex].3kJoK3%,6Eb_');
define('AUTH_SALT',        '=m>XWX&bl3pzM r|IW5;2UML{ `T#$c[K+hfjKe~d&v`4.H38#,< 6Wu[avLq>If');
define('SECURE_AUTH_SALT', '-k=7,+n*0X%@!kd|o..GKR^110?-29Il^R:~TWG>PZe/%UY!X_PuqZE88@F5li#o');
define('LOGGED_IN_SALT',   '#-V|k.4z|jWfM|` VxxY_F<e3Zlv$seYkYeR}|5?!sOGuookt|%>MxW=:HEWAWv?');
define('NONCE_SALT',       'z`4bubClgENu}Ru-iz-66eK_DbL_g&inBg;np2X|a+CkB1K *ugQ;Rs0<hLT/Am~');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rbi_';


define('WP_DEBUG', true);

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );

/**
 * Custom content directory.
 * 
 * Use a content directory different from the usual wp-content, so it becomes
 * easier to update WordPress versions.
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/contenido' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/contenido' );

//desactiva el editor por defecto
define( 'DISALLOW_FILE_EDIT', true);

//quita o enumera la cantidad de revisiones guardadas, en vez de false se puede poner un número
define( 'WP_POST_REVISIONS', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


