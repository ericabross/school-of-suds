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
define( 'DB_NAME', 'school-of-suds-storefront' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k_dZV:g[v>7jm 8FYEZ[Gp9b&fjnSFc24>qE@+3DPGR;@%jXU#>hHE a<w`:??SD' );
define( 'SECURE_AUTH_KEY',  'zKKOGa%7x H`0OD6ZYLlwe(Vj1aG#jPIF1M,-kn%MrMTQnTk0*3wb^T6rj&ia9wj' );
define( 'LOGGED_IN_KEY',    't2J::e5AV>nVjmVFag-^]MDzg2oUbDWBQpYkSc>Am-$]}*;<zLla@>sh7Z3G0wF)' );
define( 'NONCE_KEY',        'vv75XqU;3b3=AzlA.gEe7)/zG=Z1(ouf6m-_x^RERl<<.HHD.H` jL.SwLp/E4N}' );
define( 'AUTH_SALT',        '_XeN6IgvjSY<oxib[g}IXl*jn$!1aoHh,v@NZ7:!gy@@=o4c?j#tuh2~Tjqh>-+5' );
define( 'SECURE_AUTH_SALT', 'Y/1nj&O)s}x!pEaT^%1FSPi<qX;Js}3EkMz/|wvQTlR:ww=_9+sb9}&i@!s|W9*_' );
define( 'LOGGED_IN_SALT',   ']!y?fen7K=lcDE9?2[*MnNg,Z9gNwCmX-7!Nw~dZ$aM;t=CGnN,N%0cn(Ht =/%2' );
define( 'NONCE_SALT',       'e6C/#DpyNuIn4xw9 qDpG328i[&6ULUdE_$G! 1>w1G37(@Yj:8~62C2BI##|b$`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
