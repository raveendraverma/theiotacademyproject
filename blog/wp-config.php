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

define( 'DB_NAME', 'u733794648_theiotblogwp' );



/** Database username */

define( 'DB_USER', 'u733794648_iotbloguserr' );



/** Database password */

define( 'DB_PASSWORD', 'iotBlogwordprs@#123' );



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

define('AUTH_KEY',         'dcs*:P_eK_Dx|&]v:toB|-9?=n=uM;+,Pz| =<E#?ZMK6UEGhQ&7-]kC+v%!WyFB');

define('SECURE_AUTH_KEY',  'J{uQR9j-T3OzPA^+hl1S2!)l-1y3;(Tiv#-fY4G2zg_&-Y+M MVvuIqdOL]!vzd)');

define('LOGGED_IN_KEY',    '5H-UX:pJ:by:m;>ZZa3h<72oCKGdgm_mxbGWkPf-RVU}y&~!N8Hu#Vv2.Qi!YF1F');

define('NONCE_KEY',        '(e#)|;h@-+vc37?]U.$+.~tLk-1}waUR(l&{V(_)+6F|PD+AoTv{LNsR-r-2|Mrx');

define('AUTH_SALT',        ')H/+B],[E_7MzysT7o2;W-P4@3lz:3 g(nPY#zf=2QpL42jMAT]c(:CAC{8mEA|E');

define('SECURE_AUTH_SALT', '1swrhIT7N1)QLw(tE*Gw@}@.tNY1< O[L+d1(nH6.UrnzGToKh/=VX h_8}2b!8A');

define('LOGGED_IN_SALT',   'a98aj])&Qcb(._fGRSx{,)YIzk1GgR7aK<=J-BoGpyc}Ajf6WGVp2h|fHaFx#l+a');

define('NONCE_SALT',       '+Zs5I+_B.-tf{:nOZ7yXUgv/aJQB+Sprb8kZD(2x1+tReL[Ka/l{<f)H=nZD(|3f');



/**#@-*/



/**

* WordPress database table prefix.

*

* You can have multiple installations in one database if you give each

* a unique prefix. Only numbers, letters, and underscores please!

*/

define( 'DISALLOW_FILE_EDIT', false ); // Added by Defender
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

