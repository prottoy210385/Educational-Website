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
define( 'DB_NAME', 'education' );

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
define( 'AUTH_KEY',         'j0k{DemC 9en<M+6X`({Q0h5lT-<=<<XLd6r %rfJLh6P#VS9b]StJFkR&-xNW_1' );
define( 'SECURE_AUTH_KEY',  '+@FULQZNl}XVL&bf!m/g&@$YLL1VNpM!Q#/.sp?PG?=u3H w~]VaWu?hvwM(-[Lf' );
define( 'LOGGED_IN_KEY',    'ZKT*-^y|]hXDT):P:O@_{?I`;GO1en:@;_Wd0X!5tyRLXibmpiP2w:,*s[O>~#kL' );
define( 'NONCE_KEY',        'COAA,<:xzc`b!mEtIF%|,l3S~:C (eV5sf>ZI]`Fxs54gRh2=rP:OQJV,[0z5Ye{' );
define( 'AUTH_SALT',        'rFO&{{[uxhCn8e{Df[@Ty=@SL`h&{hP:PprIt?>^>d|l30Qe%2[jC<c){[F{pB52' );
define( 'SECURE_AUTH_SALT', '%&weJuP?K;.U/A%(bNM`Pq{cEYj5~eAw1bHH=}J1f()5GRQ2t{e5h$@h+.OUIEhG' );
define( 'LOGGED_IN_SALT',   'qJRh>>ZjC!7kXkyd -L&QDgy6_lLf~k,xx!@33-Lr9Pj//>zMmeG MkB><QW5Yl:' );
define( 'NONCE_SALT',       ' `cYaegzGZLdBb;NQ {5qwT@1)lo[+`/A=Mrj=>fvRpyIf%R*EWAhl?u{<Qj|tP;' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
