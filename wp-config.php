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
define('DB_NAME', 'couchwork');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'o(B_#:`,2+yEQ?^30P m8*$Th<L db1pLCJ::Od[Kahx{z?nB?j$z}+m[MuIwDk2');
define('SECURE_AUTH_KEY',  '+`4gQ:l?Ztdn>~9&u_,YnSFVC1AhYlWu15te&% 52^mH97/{Md`Y#bcu^`{0PR2<');
define('LOGGED_IN_KEY',    '[is|cE%~+#V,Xq/cpKfC_(a1<rH=-Uo$=E!xy7O:E:DZlq4f]`/3IQAm@]/UPRY,');
define('NONCE_KEY',        'm(B1@c:;h3*3g.ucl._|`8C><>QYGz5UB-he}2M?+Vs _B|~34v9o3SWO=%nOf4)');
define('AUTH_SALT',        '9:sQ4+I&=:4+G|5CGjT3B?D#mvbFL`YSHXU% aV!.$)W*V`@ O^eYR>z^{ufbKD!');
define('SECURE_AUTH_SALT', 'D,Bs78hoG|s|uJt<?)3Ot7boryh-S/?6c@A-$Cwx--w<re)[u/Z.vQvd-2_J3^!{');
define('LOGGED_IN_SALT',   ')?I/w!Wj}85;Vrmf}%-RJ!j0]>Lx(LZW43R%%M{L((Z i-}[%lj+K2/-6?42z|Wz');
define('NONCE_SALT',       '[V.-2by[/agB5/t@3+M%y&f6g9$@e(+<SD8%Pgyk[jH+mkC#<r=|>1J-I+(h$h[4');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'cw_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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