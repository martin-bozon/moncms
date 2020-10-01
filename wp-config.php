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
define( 'DB_NAME', 'moncms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
  define('AUTH_KEY',         '&~rUo.zw{PWlN?9D7dPM >f+:S`fWk&(uH1|A_>]5#{T`<,aZ{U^:eq<mLm/)!zH');
  define('SECURE_AUTH_KEY',  '.-(Z`M_T^h]QPP$FnoP_q1AbjF3vI[er|@{XFf6ZP;fOoy8arJ7<a|A4vKU`t@ix');
  define('LOGGED_IN_KEY',    'm]ZNqOP?4y=;ahao+J:xjY7*GX^-3{!:%N3VW{J_Nb0_@!|Td2fn-$ED!~`n1K-I');
  define('NONCE_KEY',        '3$:i,W=TH53}!/6`+}.2i1R@e^D@5n]/s+Z?W00gD:~zhP[oVnV+?y[2-ik_fR_<');
  define('AUTH_SALT',        'UpYV5V:T_Yh%VhQ(7LQ6.4LDN}5FS h7+=X.BE?T@jX;w:t#o?*GH+hl4gCswt+D');
  define('SECURE_AUTH_SALT', '`2}>V3iV)e+yt|:wVmJO|ncKJZzBd=(WafQs`eJF`$<7RRV>|NitrUvsaH1=pQr(');
  define('LOGGED_IN_SALT',   '_*|d:]nI38ugYrM3^HlP]tzS9+jObqc1Xy<!1,zIBa@nntPOPR-c+svK7d<e[bHa');
  define('NONCE_SALT',       '}~t|pbyNZOSp(qp7*8IzOA.)83x=Eu<$xP4zVJz%cNw*aZ=07kO{Vs{(_|!4p:o`');
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
