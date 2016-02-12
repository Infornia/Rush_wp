<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_database');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mickel33');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-h&?W2~8EM;3@*SFx)#f+YrY@@|]B_7p<K/b!%-TkBa5PfT,R4-2Z&v|~5?=1C$<');
define('SECURE_AUTH_KEY',  'rw`A)T(Qn!R}cIfvck/||tlmx}?PozyD{y(7KOIQhhQj5nzkLOL_gHub6|aGCc+H');
define('LOGGED_IN_KEY',    ')~--5Z`h-D+h++Ns/^vAD-_r*sh h(4d1kkHMkIm:iTbo6||>.cdntQql5/5d;Eq');
define('NONCE_KEY',        ']D~gz-uc^[Gr4j75Yud !xf_5TmI<>n-%aV+/QY57J6,fc_IYnIkd<<ttwWgA+R?');
define('AUTH_SALT',        '[VmqjKv^~K@uOY%Kwo~y#O-+;6Xq!wb2#+fh+s@*lbHY)]w9Qe~@^?+Z7+Owk_o_');
define('SECURE_AUTH_SALT', '8pZ>_fze!4j&=wEE/$Y-x41p`m?^V-wcFb5h$*NQ^@yD|ko!Avsex^k(Iar^c)E0');
define('LOGGED_IN_SALT',   'C+)sW9TSnpeS(XB5?!]2ZRn3|N>SW:FYVTRx0HT-n]4J{-BPi<=f}<O/7t<$lovl');
define('NONCE_SALT',       'Qkh7Tvy`N{]O1nnq<gcwG:&jd.#P6x#vQ/tl8WHA8lZ3y[@> XZ-++KnM:Ug}|Cy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
