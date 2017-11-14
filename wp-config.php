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
define('AUTH_KEY',         'qwyjbFJt/3MMJM038HTGXmg6Rg2qkq55mL/RpMfShpL75Fg51X07qh0iPxWxi/qFoR2K9/9KxhqiWVy6H2lQcQ==');
define('SECURE_AUTH_KEY',  'IJIZ8tOLu1SHeY7k6IIVSIBK5aRhFS1iSPN5avHzrgi3ISzd9fx9PQyFcyP98qK7y5agRYV8ZEud0qDAEH9CUQ==');
define('LOGGED_IN_KEY',    'I83L74WBMRKFU4sPoa9WgqX/PtyjPyhxkNKa7BGWcilTLg3bK7KPqn0Z4iAvGIEZJ2Y5rTeih+bqPYyJUOYjzw==');
define('NONCE_KEY',        '0VtUi01ALJ5r7zyYzRZpwqAuK+YRqetX6phv5Pxhypu9WbU5FMzvrTqGPANQKOlZmKvq3vr8mJk8gqk/6ZVQ3g==');
define('AUTH_SALT',        'WvVOH/RKW1CLCvDNngRA8s8FwEDl/TxXBwsDwpt6Edali/MsXu8NSs5Mb0FIFULEBQMrRC7kKIS2w8TTMeVaNg==');
define('SECURE_AUTH_SALT', 'gbDdL9kcI4kByI81gqjvaghosh8RXgjkrXwpUIFHEphxCz04nQKMPVPc0FPcXYYW0b/famjKPkNXBycfFta6fw==');
define('LOGGED_IN_SALT',   'LChSPRyeq8n8lU5Czbsd024JWQUIKHvXCX2PswyIUCBzwQE787fH7ObRj2b5ZVooSm1dc9JOKp8aqNVTUB1VyQ==');
define('NONCE_SALT',       '3MAV2rk8zl0EbockLPrC8XsMCovZOkd5ikuW1Ysx1j0E2tp0SbzimDbYwusgz4/daEDDJDkL4hO8WSJQ8wktvg==');

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
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
