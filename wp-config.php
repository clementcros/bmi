<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bmi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':ieQyfFCGzT  %8EGU4C7HAiZtRMz9cwM5xo.iQoQmFQ;x5$U2[d rXd8zB#-2_R');
define('SECURE_AUTH_KEY',  '?@b<WRA2}&D%>p3.,HD!}}7+kDz?r=gGf~O)5A-[#s8 $T>&RAE5zGQ!HW3ZZe,(');
define('LOGGED_IN_KEY',    'lT5QWZueLI*`}q1;&0m@0!fy`K7)AsE]dL4M/?<RyA&m:,W8heD9i&WNfRwk43I$');
define('NONCE_KEY',        'ObCt,0w?93$0^=0Cy<.TlgM?<auS(x>V_MVpcQ9oYm.rF]st<rd:>=/55.mug4{x');
define('AUTH_SALT',        'A=]?z!d<Bu}/Gl{MMAK}`9(?_mY>^Hd[* ,y::2j^K:=wdW>e[p?21N}J/?`P(U1');
define('SECURE_AUTH_SALT', 'a!>  G.x[>xj&RC3zo-o`n:u5n?BV9Ez($mzB3vL-U[7m]mSOz!Hve~HO1zn5~*5');
define('LOGGED_IN_SALT',   '#(5-WT3Hp`O#KZ>4Gmlh^}l)e</Dl+n@i[J]l4]YH0VWz7QGlTo+EDEi4dW9InC3');
define('NONCE_SALT',       '.VG Ku=2pC:w$|`.YG5@l:/Mhez$7#}6 @iy(jhzg!7kbP{%^.SjF&F,@#vd/|ll');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');