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
define('DB_NAME', 'gr000257_redbio');

/** MySQL database username */
define('DB_USER', 'gr000257_redbio');

/** MySQL database password */
define('DB_PASSWORD', 'ZE52penime');

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
define('AUTH_KEY',         'pzzGhGyTvHhHd1^c5uZ~LOJNcU=H0g@oP]BU[XAQK?h!c4$:ij!~cKTkgk)-h/Kg');
define('SECURE_AUTH_KEY',  'Nr9cU|T-Yx|bH0ZqQd8I+Yr7JG75i>LRblsf-jw>V}X<enH$!u@qFX; UU~Idb:D');
define('LOGGED_IN_KEY',    'K#SoEeI?d/Ul#YoQBtekVZZokT5oe!;,fK2uR]]r],UzuJ9`=0<lt>0t$Y?;-.<<');
define('NONCE_KEY',        '>nH@Ve=~+]A4|g=#iNs_fFOXxR&8+FH_k[Z+m+cG!0|! `<avyzZbKvF,1 ehMX+');
define('AUTH_SALT',        '@Bs>w~,-T+]eGU?I5~Rext2$cLtA)9 YQ!Os+{TvM8b+mLlLOvWeFnC,`h5bF}+9');
define('SECURE_AUTH_SALT', 'vtj,-C5=:Cp;qExKQH-ZXxCgd&F{^?PG:uV}lG6KoYL?]Of- xT#+6E?#[FR+)6I');
define('LOGGED_IN_SALT',   'JnZG;(96O57*O5ubTHHr3ePGFHLj-_%Ahu@Vpv ,u`z:^oK}x--,% lUd>cjO1mS');
define('NONCE_SALT',       '.K7QO@-vvrq6HR15|g0^W{fH)l1X Npn_bZN*+]^(7v@;H4(54vDksPPS,NI9B!:');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rbi_';


define('WP_DEBUG', false);

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


