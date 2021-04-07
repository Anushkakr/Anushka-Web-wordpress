<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'testsite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!qk)=YvyXqD6JPJhq&az|@O#wd+w4ms~~g2qTO{7kz8-VY`:Fvd7Klyz+ 5*mdb>' );
define( 'SECURE_AUTH_KEY',  '%y;XBxMiKo~; 0qdME+?.Wz!|C)@@qtfI]k[xWRK.|skD8->(7?uH{ +pHJ-R6+s' );
define( 'LOGGED_IN_KEY',    '5Sq1j}(`@nzn9[9vaxkq&5m/4L`xM;H22N?8J==ph5+G:bf{Ixz3O;Ec&w[)Kxp?' );
define( 'NONCE_KEY',        '3Vbd2U=Ft;ez5l`Ddn1FL _*a4PgAMy$IH6z,[WV#.Bd:i6e@Q<a[3-[= JK3GJx' );
define( 'AUTH_SALT',        'cXI _VM]ee}&CEZm)R#FsO{|rE;yF(4]nSMUygM;6/Lwk;*BcB[#W90>w/Ll-Xjp' );
define( 'SECURE_AUTH_SALT', '`Qe>jo3m%<>U@5$k>CBB]+nGdSv%{:QPo99L:0O+*tuIZmu7.fj;1xNj?E_*_%rK' );
define( 'LOGGED_IN_SALT',   'qv(A+wt9l~Y(PoLf:foI9>1@2)b#BPbZ#weQ1mBRt+)<m^--k?*_hl!$c}}+ze&w' );
define( 'NONCE_SALT',       'i^CjPHytksCO*pWtS*OT1XYU>6O2W!~$ e3}n6uI<0(Mw9A?B+9%,#G_|]HdwC/@' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
