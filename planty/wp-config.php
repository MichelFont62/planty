<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd9ndft~nGOI%l(P~JAFmIV$Zs6sIP*u/,m4QKRS*]#r4)c_qAH!t)a)(J}-Z*#or' );
define( 'SECURE_AUTH_KEY',  '2$&4Jxr39<$.;A@r{N,_0y,,m;,gdP^sQHVl.!wRbHZSiSm;B#`7 LZE]%D)`E*6' );
define( 'LOGGED_IN_KEY',    '*)n4q?3t)Olwk)L _Jy B/!aV{XR[05RpV85zQ54I#hJ+8bNu4i02Lt12lY[[#S_' );
define( 'NONCE_KEY',        'O|9mVb?Ky)S<qf2<;q5 K[E,Au#pXvg+ebbpx(U/=).UTZqgBOMip[Tm1q^$yT(W' );
define( 'AUTH_SALT',        '{+mDs)+e-EN?kQx3ziesw()rpjcePOA%pV1>j<=(yiKjpv)t30=q_H%4A|=aV90p' );
define( 'SECURE_AUTH_SALT', '70]-+DX&sbXPlRu]8%4>]bi+RmjtQiF&4TXy.Az6OL=fpyC!(=3KCPjKU<NvT0At' );
define( 'LOGGED_IN_SALT',   '9-(7_>W9W6o[ qoL;T0|`_{QSyDa~oB1OI(LJ{!<|%=B3JV!Ngl}[Hm{#,L|SiQK' );
define( 'NONCE_SALT',       '-y_M6[P>MVr?g.<@4#kwV|]dWTL]hKkYRzbsp^+,vlD@zG/7[}^Yl233% %mLd5!' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_MEMORY_LIMIT','512M');
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
