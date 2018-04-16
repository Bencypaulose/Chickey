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
define('DB_NAME', 'cazablaz_chickeyadmin');

/** MySQL database username */
define('DB_USER', 'cazablaz_chickey');

/** MySQL database password */
define('DB_PASSWORD', 'U^S)x8~;Gy+z');

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
define('AUTH_KEY',         'z^p==fFX^2orK=).dO?.&?~kF^*^Wn4dRK5T{>2!imZGKVH#/#HS^IL;$Qc%/jL1');
define('SECURE_AUTH_KEY',  '$t?O^y:EEP-s|Ok+&=z)gf}!+Q?<VKGBl&W+uS^Ud6YKGr;GTg_i$T[bS0<f^%,;');
define('LOGGED_IN_KEY',    'f}v2Q^i^|qrpU+|,L`DQB%kAhJc57B;!vg%wn$x.fI8ZplKl2?dMo:vh<v00=7eZ');
define('NONCE_KEY',        '$Cg;pPU50TxsX|a2r~<-6{XnxbXZ~5{HF%-owt5m:NOTnT%;8Q2CrgA#)F%J:4/9');
define('AUTH_SALT',        '$=[G,}%aya73{Xj;g^h|K1B)k*k+/{fRmj7QR}eJ;X=gJT]=#_cBaqc+4Ik|yMjr');
define('SECURE_AUTH_SALT', '18N^alHr?^l%WnY1O1y0eb5&305N$xCV5Zt_OaP90n:/DkFbX%i&c)?jeHcaGNg ');
define('LOGGED_IN_SALT',   '[JT>u]EosN,&v48Mt<`w%);M*zqMG|?!`LFbP5w4U[MAn>}r7)lnXHpur1DzOGv~');
define('NONCE_SALT',       'LPpu7!9lsM,]$<shhxr&W]bFK{?QF,{;VLW(w=;ms8?:rnv&5:kk<|3ZFTAc-kZL');

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
define('JWT_AUTH_SECRET_KEY', '@dhhd*hHH8844JJJaaskaOOo@#$%^^NBFDFHnbgFFJJH');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
