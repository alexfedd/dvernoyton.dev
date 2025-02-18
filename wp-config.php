<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dvernoyton' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?<BKN]uN##g+?.CF#sO?-a/J>}gD !)+%rx^T43zyCNwhu y>xAHl;q<0)$jH1ST' );
define( 'SECURE_AUTH_KEY',  'QOelE; O;8R8_c{).hu#Gz@)%tSI;V<~v1ajc{VF;`;&_[8MQEE3JbH-7Uw?{uK:' );
define( 'LOGGED_IN_KEY',    'Qp%a=>%l/<`l14q)&N</oPbIZ5#^,_%h8BViPnERz7=kOPltPCB|[Tr-jtM+CRnW' );
define( 'NONCE_KEY',        ']b%*>%-o|tK4Gz+uif-T?xkBqtf#o]A,d3? #AU5GutlkYyxl!f~9iLw0Q[@PNQX' );
define( 'AUTH_SALT',        '^:h<N~{kum496p<iskfw`r`Kqa-G^Bo3K0,)l:w{8]FK2~]1CBhV#1zUnDMLm+iF' );
define( 'SECURE_AUTH_SALT', '._quIQal,hcpmk9PqVu%ntZ-J6ry5I4/5Y.y$~AP-|H&.qXO*&0#]{=VeZ(ekz^=' );
define( 'LOGGED_IN_SALT',   'cs2zZr:{bL(wr5DGwc?*G1lta+(2}bvc*MS0Rm~+WJDV7$~f<)B=Z<](;tzcN(H=' );
define( 'NONCE_SALT',       '39Z2GFZ_xERRf4wyi^o|++-ie3kp7h 4Ij]:hz(h?U;E*ojr:_9!1U$2~>xT,I!K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
