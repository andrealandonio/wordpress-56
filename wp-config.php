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

// Database settings
define('DB_NAME', 'wordpress_56');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
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
define( 'AUTH_KEY',         'r{@t n>OFCD&0o{Hi7.FhYH@5%A9_uRAK]}i{@f73;tkADIIT*Nm}|YXK A}(`9E' );
define( 'SECURE_AUTH_KEY',  '9Ho;[1Q%Bt3b+oZ-5^nIQi8^l[Woup</@oEKf(UwcBvZ_}ZosG;1)7Hf*+!0s=*c' );
define( 'LOGGED_IN_KEY',    'A/y-H/ui>=<27=s/L$m{{U%E}>$NhO^ecZ}`01 `kBbnVnk5z{=]Tb<)Y|qMI ae' );
define( 'NONCE_KEY',        '$8?;Z^V3}>_<94t)V=D@Lks[4H|ao~q9)iK:9cMI30k?crYdJDv&WNo9p|Dr=FqZ' );
define( 'AUTH_SALT',        '93?< iXP^xP.|WMpkR1Jq2RU_|:2x]M>|fi OB?al!#z%_xy`3w> 7w%dTt1o-M$' );
define( 'SECURE_AUTH_SALT', '7| h(W%o`o;?bAp7$G9v_sM-pMh8Isk|Df[cb0Wcz6,x&I@`(qwg<#X*h(75Q#fj' );
define( 'LOGGED_IN_SALT',   'B(6kAkO(cdD0_0kaglWos*R$Da2eHiuneNZOST-yT a=>ogIKmI!k0{<+Ts5t,R#' );
define( 'NONCE_SALT',       '|77rQ+jHz~f}@YK#~tKmGZ7cD<43e1(2_xZlftwa.4/@vzyoYzIu;-0/5M3RKIh=' );

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
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress56.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) define( 'ABSPATH', __DIR__ . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
