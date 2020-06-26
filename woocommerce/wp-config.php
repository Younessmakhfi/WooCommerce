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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_abada' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3zx7Y&,u4G:W{*pX;aGU 8fu;kyhj(+aaBO7EKhrItc|yTu8U-0xb|:0$v^F63n=' );
define( 'SECURE_AUTH_KEY',  '[H!Q,7$c]hnu+x^o5SUFAXqsqbkmn!YlakDD70rrpp^=/6E5AoK!nW9AE?>Gmx$g' );
define( 'LOGGED_IN_KEY',    'NXH#;&Zz<VEVnhQ-B[q9[(i%q1wd:hr%>(90z**:9BI#Lp1#dNU0^6|TvY*?i;7w' );
define( 'NONCE_KEY',        'C*Db9Z~&6(Xg[-Z7aldJ!A%j<;B|pK[Y:n(2fOhR|Lv&>U3&<57=%1&2cr[kMR)>' );
define( 'AUTH_SALT',        'O4S~FKy))Se]2if1Jfh.-UtPc(q_voV97]Ao4>#O+Zh7X.#^nbJj.Q4?kCLt|jTs' );
define( 'SECURE_AUTH_SALT', '6Yqc`A:qfqy/7wCB427o_@ ]/}>-0 -By}P3n3J?< r7Yhz58q{C/2s+9AGolQiO' );
define( 'LOGGED_IN_SALT',   ' em)?9R^,bQHQN):^}3>QD6PnTr}%s(j,.|NeJ]GV$U!Qb.Pf|4occB$B;:E)yn;' );
define( 'NONCE_SALT',       '/: l]G4z}Cuk||nUCIq-MBZ-K3k,H<$s0q$~0b`_Wlf>fG@npZ4c7K^<Y!20bPbE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
