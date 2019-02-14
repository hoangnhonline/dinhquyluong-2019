<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dinhquyluon_b5d7' );

/** MySQL database username */
define( 'DB_USER', 'dinhquyluob5d7' );

/** MySQL database password */
define( 'DB_PASSWORD', '42973b28623be21a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//* Authentication Unique Keys and Salts.

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W4Pn1|8{,1^~NM6=}H-#JX[+p}J~UcItQ^*J7Wf4)jOIQ(}<Y]N 5/zfo6yBAwa{');
define('SECURE_AUTH_KEY',  ':|Gql)n+l&-223p +X+c+Imw2N&vLg_4%1(mg@,|GQ*8<X;:vSFJN-=WD6,y^tSA');
define('LOGGED_IN_KEY',    '!;P9zrn_>m1|n^@t)M,|wol]@fB4|a2`%!Rum[ATC9<X+&!Ytwg2r)B+p^,]TTj+');
define('NONCE_KEY',        'se_D[$|x3|rUaNbeYz*a&uMQ HM>*C3L[<1ol=W|J|_2xldZ~rXkJXv=8z&&iD+2');
define('AUTH_SALT',        'HR&P4(H1^~+1SSkT]X&6cwJ!s$Y+yfHly-_ikn}Vf&H*n1S+cVZAH7.-cC#/w267');
define('SECURE_AUTH_SALT', 'b#w>wgvSU.]D!R)Pc68uvCaffzrLqt{y~eNK6vy1H5DiR^X.c9JcRU)7$~K+C=;c');
define('LOGGED_IN_SALT',   'mdBKuSRUTsk&|l:S}OC5dH@(-<R!n!O#f_h:EcgY*gk|T^hKZ|U3u~,XZ+nsE0l{');
define('NONCE_SALT',       '3HKGg:!=7t$s;<F/>Wgd.656PO6S%pXfm71Hoev+7+i^fN+tZ]{ymn;].+Wn{e*%');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_b5d7880_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
