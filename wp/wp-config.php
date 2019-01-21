<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'worpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'worpress');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'worpress');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
 
define('AUTH_KEY',         '[h#9&m?_^qhfFa%[x[>sCvqcmJ@C*%5+]d<Y] [e@{]Vs&Z93}zE-MBwrDt;adjL'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY',  'U`DFZ%IUj#lb VX{_U)&+rNkDz8I6r!U(yVu6/Idd7ezsL#?a7@:i!8,8eM1 PLL'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY',    '$x!|Q$IuDQg/y6QuXxUFA00yYFZQc|$cxV:Sosg43i||Bz^|Znc1oF=&?Gu)SL/~'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY',        'y:+?0vB|qmb#P>2>Yw3xK(Yn+C4t!^d|2 rnsj9u0x;}uAM5QO%bA}:{_aRFr@+4'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT',        'yoXV~<~*+o!k./ea<!2oqWUE?rDHXZ.0gWe4-<{zzRMBe8+}Bsg<39nvUQ(3h<du'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', ':_`GQBP* [c1ra]{~}/++W1R-g,/bhWbMV8OldW>m(B+]T=|SfD-i8$izv0,$4$T'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT',   '99wLiA-nf&=uT0j7|c&Bf-?=lNQv}*Xi_61TDwpgwHJT:1gM.KGL:nuPuUP|#bF2'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT',       '%kiU+nj?89fm|anN3+#t?}@J3gfPnxM4P6VN-:ns(jKVuaEII!I@v;d,|2yts>59'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

