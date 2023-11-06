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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'EG5~bB+.5HdNJmVm,i`9Ew`;MyFT6B%)`2epI-*o?1T~Z.81x2|)cjLUFI9beih:' );
define( 'SECURE_AUTH_KEY',  '[ha&@g6)d{AMN0>T9x$P;9}-0$`<YO62;B,Z^P{oOQ>>{!SZ,:O5*?VB_u%*Of.|' );
define( 'LOGGED_IN_KEY',    'qy}t3*nr4878)mxqHrBzNWDO~3fl0ne;|<_kCZyqdM92T0YICH4p9D*7,:],Wck@' );
define( 'NONCE_KEY',        'sSF$+2.ZsyP;d8Z<K?mlCYKb<Kx<s_=C)}DFyk*G6ui|9We;!~&jGQU&M<3)S2Zk' );
define( 'AUTH_SALT',        'KDkHMX@9KPyD0n$3v^.zVF!fei< A@mrwhOoz$Lp.}.)M6$`$$FJ#/+FQj!LQ]8/' );
define( 'SECURE_AUTH_SALT', '`jxzuN~i?*[cOD$f.XW$hY/DYuqc1O:!I):akRd-v;zI9Z!{_4&,jVd_Yvj6x,n:' );
define( 'LOGGED_IN_SALT',   '~+Iy/h?,_&:2)lPy;V?+f#(vjcW9lFq,ap9W*ET7BY~:VpnEd!wx[I{fBd(7ZxAr' );
define( 'NONCE_SALT',       '#Ap{Sg~>d3z~eVDUSVT1oC-42GaN@Zxv?pHm@AalYpx6M!?Xu+CVqDP@@?-A]}j@' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
