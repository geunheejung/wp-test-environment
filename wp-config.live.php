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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1a7efe66f3');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
                                                                                                       1,1           Top
/** MySQL database password */
define('DB_PASSWORD', '1a7efe66f3');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', '0161525ebd4c3b56cff543611ca0f9b5036fbd62f7cc1977622f7a137dbf9a18');
define('SECURE_AUTH_KEY', 'e5e5d7ddd8629e6ba2d456682feddd040ee8545d85e1166476fb8bff5a2f6d3f');
define('LOGGED_IN_KEY', '6d9c734883e94e3dcf0df23ac68c9ecaefc4b929833e442327c1f4bbf24693a9');
define('NONCE_KEY', '7550a911813d7097fcbfad8426b8e977ea87b8e3ffe8ff97a435f4f00c05b67a');
define('AUTH_SALT', '82eb689aba4838b11f9270fc020bf3e83f65c9191d7ec5632fca3e5e3cdac8d9');
define('SECURE_AUTH_SALT', '7b59dd5c645296259eea2735437d5de6bc187e9a40266664098d23de4f0b74bd');
define('LOGGED_IN_SALT', '4f4f2791435d367b308b2d8d61cd22e4712686299eca521f2fe2a60d5e38a1ed');
define('NONCE_SALT', '32ab77efe3f589cc1a34791dff6b55b97fecb30dec2ce0e299de6232f6c30b0f');

define('WP_DEBUG', false);
?>