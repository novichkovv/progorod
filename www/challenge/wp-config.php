<?php




/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chal1000_wpd1');

/** MySQL database username */
define('DB_USER', 'chal1000_wpu1');

/** MySQL database password */
define('DB_PASSWORD', 'ig)$e-!?%}^%');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ',r^Z-w&<c6HZM|sqf8`rz(YbBaUx:-%.ZPBZW+- I=d2,Gri-.G2H(m1!M*a|{!x');
define('SECURE_AUTH_KEY',  '8os>7f1hQFOjavc+CMXH2x{Gh[U2HGXmE7bIU<VzaK%mkn3QNYhcC3<I70YY_Bm0');
define('LOGGED_IN_KEY',    'A3v+2$9MN5|7I1[*&h W:H|p[j-Q3=PrNl]l,58I|PU=hCGr:M}<8L0&KxuBu,|v');
define('NONCE_KEY',        '^nX)K(Khc$lwuI2H4kB)_}4y~=o$|x(RQz_A]{f-|C[1cxGX+1c<sAByU5 qGIot');
define('AUTH_SALT',        '$7-%?@c~:+r^wM-.,dpw6*w2<jhfMHlq##E(I9_zP+(QZse#^&e=n3(OFU_nu9(:');
define('SECURE_AUTH_SALT', 'hAi|bSx|$HQo3Dq)-j/w56v7WW)dXZCG4+sfoDr`3In@wt6nXiB|#C`7`dMkMz:,');
define('LOGGED_IN_SALT',   '4RXSyS4em3:0Y+.hBwj}Ipk[[}|$6v%} D;W+96{J82N+i,|H0Nb3s/Dx{(9oQ5G');
define('NONCE_SALT',       '[g[{vh-Tq<Sv-,_4):u=Nu4qRWDY]mjOSriYC1 kjC@o!$b@XC@O*X*=iVbvj=]C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('MAKOMULTISITE', true);

function is_mako_multisite() {
	if ( defined( 'MAKOMULTISITE' ) )
		return MAKOMULTISITE;
	return false;
}
define ( 'BP_ROOT_BLOG', 1 );

define('BP_DISABLE_ADMIN_BAR', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//define('WP_HOME','http://candoweightloss.com');
//define('WP_SITEURL','http://candoweightloss.com');