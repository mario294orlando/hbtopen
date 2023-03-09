<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hbtweb' );

/** Database username */
define( 'DB_USER', 'dbadmin' );

/** Database password */
define( 'DB_PASSWORD', 'W@st1ngAway!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'AadkANx#<2~=y!nu:sE yG@~<)F!kp#a5!Ev^=yW_vZ63l0d/JQp)Bg`1]yPI$O*' );
define( 'SECURE_AUTH_KEY',  '8&BSb6ds[>J&P/H;k,d}jevQOyYu7#F^|yESTN4X [&lMP82[Zy3p9Tra^U8V$NR' );
define( 'LOGGED_IN_KEY',    '4VAXXWS6#4p+)3;+>&c9Cl0?#pvh=s1?x@RH+YVor9Ry!Bs,a>;Oa[N@.T|N /p&' );
define( 'NONCE_KEY',        'N?oq%h}%tG*%k8(-&SPPb>F| O5Rrg|& L4B+(]`#><BTP4jyNtbI7.7BZE.!}Ms' );
define( 'AUTH_SALT',        ']@Ae(XBS2;c1kXa&{!zg!Z#jUso-`w!gy]s#~:gZ[Nxy[~UE!Q|2jSY<g4bnFP1/' );
define( 'SECURE_AUTH_SALT', '}smc5t_B[je]Yl`]ec>)n6K_!/4yIki8tJbdpl9F0G!I8VV}UOE8J_T <^qB/4Tu' );
define( 'LOGGED_IN_SALT',   '_}=;OKi_a}/RfN%E8G8OEJ~OC)^}q>iAjrCf*215%#z)(7#XKB1%]pVl1*7kkIL(' );
define( 'NONCE_SALT',       'gEEnL^{ja#J)]-%{Mm7;zg)7a!}w#^@<_lMKhdZ5y-|$)>Y} ei+Kfvj%TR$V}j`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
