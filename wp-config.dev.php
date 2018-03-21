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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':@xqu4a89Pr<>j`Fy`&])%$/BLnL%/b1)(!dKStUiQ?<4?R2,EA7DUW|7Hov3`Hq');
define('SECURE_AUTH_KEY',  '9cs$:h{Lf&?[WQPD.c)1#JPuY)w8*U1ROjN;W:Es6H?h,4Fhn-,dy2U1runsGYBU');
define('LOGGED_IN_KEY',    'Nw`LnEv=!w6)@_& @qQ#v3DKiw(hr;CNL!EhP_a$Z#7RR6m~gDgRNNVvdG$1g_-@');
define('NONCE_KEY',        'aEXS&kLiid%f38U6k<suG8Ea1TTZo0*$#>q;&L11O0f@R+Dw9aWYXAFMO;G)BitL');
define('AUTH_SALT',        'zb1gNi%NN>7A2`8fXRp|2UMSV=;NeLmZPs&CH {f}tEs#k8W%lp|z4-%Y6S$@&L>');
define('SECURE_AUTH_SALT', 'l1,gcZ^l>G%PA9oHLE`GHC98_5`$8~(Zm#|=0XE>6*oLE!L{%-o|FgtM4HoKxs(h');
define('LOGGED_IN_SALT',   'Gw>)>Ucqm{MP[`nUr8PjzH=?!Gj8y.o/v6J>S1@|RRVCy; sl+MWt1;H$D3`sAdG');
define('NONCE_SALT',       'jGzDn>+^Sns0pak7N,uv^&T(1[KAY*!wa+UN`kV%o3JAG.~&d38D]::>[V~oo{CJ');
// Turn on WP_DEBUG
define('WP_DEBUG', true);
?>