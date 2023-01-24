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
define('DB_NAME', 'cc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'PLNec21n5%');

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
define('AUTH_KEY',         'e+SZ0a@PUy;Czv2^XieFPIH1 y4a(Tkh+f)+ct{|xVZ]*8<C.5X@#~J[J>(_-%l;');
define('SECURE_AUTH_KEY',  '}#qiyoJdyz/{:-+j*+D! l||sn=8}M+U$R+esm.).|&-WYQ-`)OBf5Y sT~Td^A<');
define('LOGGED_IN_KEY',    '1{V4aWBzBXt|aJQ}$+CcN`Bm!m3lG[,:g$n_Rf4s0vC8<: tZW nA3jj:hJ2P5$.');
define('NONCE_KEY',        'G_HxacZwB7LXT%.gGdzG||4uE]%zOk]V~BMA1x4vuBJds!nwBMr! phF]{|G--L!');
define('AUTH_SALT',        '/-W?^^W#]_zxm)WE%[T&N?&vFXQG @:yEc=&;tS+7Hw6=lD/GUL5|Xq=#%%-t3Tg');
define('SECURE_AUTH_SALT', 'cXdx)+11FI#JZ*BB*#oDM%Jl^h]f;_d,6V:~K)w!jQLAe[|g<%VgfJSy:15{Hv2%');
define('LOGGED_IN_SALT',   '>Y_|EJ4ZreSuW9/40HrYKbY6MsKh(n[e{eElsP!|2zM-+nBz-G+PF6[$lXBd$(3P');
define('NONCE_SALT',       '.u9awzgp0%sJ/vu<n^HF}2S8I)]?Fez=76-{J*xm{r|&BN+,6sh4>kNWGzZR/LR%');

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
define('WP_DEBUG', true);

define('WP_ALLOW_MULTISITE', true);

define('SUNRISE', 'on'); // Add this line here:

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'ciudadanocientifico.org');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
