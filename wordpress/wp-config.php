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
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E+,A:0rqr1}L@EQp#Gt^epaVyJ7<H5bkWm+M,i5yw4X6fivpF2k7O)LXg@4Uo/>T' );
define( 'SECURE_AUTH_KEY',  '&7Flb4[h[_}A.rp#69ycA,J#<.Z]b_:e{WE|knQ#T>sJ ]=ItuxfLK&B@yLAp[{.' );
define( 'LOGGED_IN_KEY',    'O~}L gWy!w1g-EnaWBzD/>CabseYpV^`qcK|=ddz6dbO1P1t%2sxr-2jmlR1{?Rb' );
define( 'NONCE_KEY',        '`g6_m#;TG>{)Iq4gmrjk6%0EINTKHM^n/~2IHOwRn9dHkBgr9Bbbcm:gfX,oXT<R' );
define( 'AUTH_SALT',        'hBF!6k^l4@({-Z|YsBN)&:MRjpho72}SNdD/80zCHk51_70,8jj;&1*~!o%.byoL' );
define( 'SECURE_AUTH_SALT', 'q.RDl$g(*X0/cH^^%zyGq3,me0JmNaoY;tab8l`0A;1/`c(0qwJ#<DjTzn_p2S{j' );
define( 'LOGGED_IN_SALT',   '~,A$Yy+CS0dR1$E4`%~K=!jmIz50?i&@|.}TtR0DGgX/;X^f:,)<*v4lW>Y:GxEp' );
define( 'NONCE_SALT',       'z0ItH)|]97Pr|p}%8SA$0qd[j#@sGW^XKa)FNWCx5z`KUXANq]&Fb)% g*n6nH#&' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
