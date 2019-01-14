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
define('AUTH_KEY',         'qTZVyZIoFSeOujIgJ3O3nbeflN0pLMaEzFUxtNbuefrmdfpSjcTlJwD6zCeIUItB46QuilUatHolAYTLsRcwSw==');
define('SECURE_AUTH_KEY',  'Vzximvsouv0D64nBS/YS1u2h5vFJakalXn49AKaU3up3JvqupI363ar/5NVq85UK0AFNRO/hx8guYChOYOfE5A==');
define('LOGGED_IN_KEY',    'bHw6SvcFeuH5PW9egjPUYlTDcEfgIGQFq43AxBZ28wqnxk7aYZVTRXVTqYIA8Fo0sTkINQQi9CoHI6Ryr1dFKA==');
define('NONCE_KEY',        'bUVPNfa0fPguf59lTYaSVHu02A0jwGYUENrg+N2yP6+TuxTa9cAUncirJ9qzt1HtnGPHCsBqjpcqrjnEfauwvA==');
define('AUTH_SALT',        '3o2IEfA79mDQ4wTbk3B+YmTAmWiczHExa0jv4zIYS4i/X2AZ8XSya1xIlHeamMi3Jf5UKrk0WYHwr0gKFzS0hg==');
define('SECURE_AUTH_SALT', '7Ev8jG2PdFj+baEWGz3KcvgGh9AlZ2rJFVJgPuXvYYwY6zbgyxHC4b2hXT2k8JfD+qnUoV+FITMIzt+uPk/dGA==');
define('LOGGED_IN_SALT',   'HZK3ZTXv2Ftd41uq7hol59Yv7d7Xns35ZZCNKbWwLLosrBHILFbIRWkBpvC6mup8xEF0P6mT+ZZA84mW9GCoVg==');
define('NONCE_SALT',       'UWhaPmUixj96Olb8jydSe/7v9lqylVL1t6ZoM1k/XCZBzozVvQL+Dn59ChZ6u5ZzUHTJ7jWlc6dH+7E+WF/bUw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
