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
define('DB_NAME', 'altran');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T}/+^*{`Swic*t5IrT@!nc4Ewr]a:+6*<6]s>|G%SvPz<9L Pl0Xd%y`/b/@ho`O');
define('SECURE_AUTH_KEY',  '#+LL7,U o*_QI%->oUG~dy0[b&<y<@!O:PRE`sk?$7 B06R<[vJQhS~/mY%%!&6f');
define('LOGGED_IN_KEY',    'FW1=6##0q4Ys[A=nR!oB2[/8%i?KfP>f1EDspAS$:Zb],|N21eoI+I^qDBaha&UQ');
define('NONCE_KEY',        'B jsNB(zybM2;sXEF@R(csxnvE9daVU1J<wpV*55k(G}&<FpU[c,H2:`-!L&@hmP');
define('AUTH_SALT',        'R_]7*eGo3>>[ea3..2kH5 xe[6]Ag<`#)koxbXLzlgb,2+-`ya$%cWg?{1xT3FY9');
define('SECURE_AUTH_SALT', '6pd>wNwPNvn~4~{Q@_dv$T/E-<)A*xmiA0wgDty8hBy^S-+PE:v hFY.2M#@noE+');
define('LOGGED_IN_SALT',   '|]|82{;YcER}9+9;q|-nJCA+9Rt{(Acb@1:n;T$`DVv6!_*5YtG0-])MDsh3}sJl');
define('NONCE_SALT',       '{pSZ`[shv8>, 9L%qMB0KhbzGn_qw-9{T3E&s8)oRxA+JOL<(|N|~9t?{so$Ksj&');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
