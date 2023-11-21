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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$Cil5NrZ</o4W!%]hF,:!AbVOR}$W`!p3?>EryZ:-3Nc+}t2P#{=-VHPl3T1d<-r' );
define( 'SECURE_AUTH_KEY',  'izA+_N6So7po^C~[{U20$,F#`/f+mhrNV _SkRHWy/81Y0C-=0S&q()0[wdUVeL|' );
define( 'LOGGED_IN_KEY',    'Y<=)4dm.EI%gQ)W, <UH/Rcu-a49tR7.L6azJunBz+IRZ2oCVZ$y2=sw0&^|EG&H' );
define( 'NONCE_KEY',        'ETkVo&~wf7f}<*VK]oIof8]z150~_sEf@^pyvK[iE[kYn<E0Ue^CEh-Bf)g7Iw_O' );
define( 'AUTH_SALT',        'zsjNUzYw8mOFs2[I|a11LfIejs,DBm+bkcjmZQm!K9dufbQZ{[M|lAgP.#*D/lS4' );
define( 'SECURE_AUTH_SALT', 'h_^NWSqtRd/+$Ml^AN^;6@,NTodNFjiDbR-h8MJ$JVa5-B&G7} /uRiMIS^E%<)(' );
define( 'LOGGED_IN_SALT',   'Ox<{X,K`WB-^LGjb.<tkd>q &e*T:~^>(e^o2c9&F*^6^1X7ohKj@v3bN],%F<T/' );
define( 'NONCE_SALT',       'R{VFs|XmoI:l~gwca1;])T+I~;s1Q*kvc[tlCBU_h3fWX/m<poO3d`G[r|v9QM^y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
