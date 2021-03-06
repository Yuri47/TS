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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v6gA1VSoF0JoIMJDG/qgxgHP23V1M7uawdIeY+b9rNkvmJgVuY9R3LM4vHkX3JL7urY8xqUE5AubXGvhsQuGxw==');
define('SECURE_AUTH_KEY',  '9XaGh1fF3J8+O0zrkycjxDMpyWEsiyDQXfv1kD4dCdmWzZad84dckp1adoGlHqp0akBp2/HdNOv3NpPSs79MBQ==');
define('LOGGED_IN_KEY',    'CNP/IQPMZ0h3Em52xtX3CaB5QNHcaHPY5+7+srmL7Inbex0DtYuPUcs7BwF9cwsrmhSI2IC347+TDRqV8ALudw==');
define('NONCE_KEY',        'dyAgHP4BzKzcoWfehGlFxVM32KVTSXBO7yqFGpCjgAWCAl7ZD0vNB0+8aQQrpKOqFPcdGzSONdyIR7G2C8yAeg==');
define('AUTH_SALT',        'CtAAX4bSgBV0vSGs47NK76VAleI+IAWAAUXYla7IaWqyUis+0tzBzWLvOGt5MZ/lnzzpYxM0IA0KbWzgegvE7g==');
define('SECURE_AUTH_SALT', 'OL5Z0p0/6tL0cwi/Q0EXLTSpZUkJV0mGL8fwSHQfcaReofISCKSH4nHfBKMRsu7zCskVX+wtHBdh9k0g129MoA==');
define('LOGGED_IN_SALT',   '+dFOfWTNK/ik7adX1543B/jDLAvIcm2vrRz6u0Yer1uqt3PsDrJmrkPKAtusIodKdJH36kRcVl72F0XrG0+0aA==');
define('NONCE_SALT',       'R/LnZrGcXIjMadfc023tBEKYEEdTq/GHDN7/lLpTIEhkUjLNy5ko6WMvAYtUV9VCbbm25pR/cDLyHRnot1wtMA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
