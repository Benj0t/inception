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
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'j5ufPOh66pUP9unf' );

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
define( 'AUTH_KEY',         'i-kPD};Y1pP}9I!,qLp{EW`aCpZ>YQ88v.WXD,~^@CU 9qxw?~E?-!~iKe`B=3eF' );
define( 'SECURE_AUTH_KEY',  'fkXVVXrrK&<qZK4|(R.XGKU}l/,5RF*=nt,u[ScqX}VnV:s-X]M9q_1kb,gJa4U[' );
define( 'LOGGED_IN_KEY',    'nA]JKns>f:aYJS6]>xkwI[h*{RmG%$W?;X3cNr0g:zbb@GYYd87yA~V%-KMsf0xd' );
define( 'NONCE_KEY',        'ndp7W/I5f3i;d);YQjNp0$B,F)r._iF?LYfm~K^7hp)UwjM~$l,Yu>s@PL]OZtT?' );
define( 'AUTH_SALT',        'OVk1*a7[[G>.TQUyT);=d$ammv&7We/[u=@3eN5wklg}DY8FvSJ}n=-m^AEe*4p-' );
define( 'SECURE_AUTH_SALT', 'ba|iA;a*AnDhv+@b=;k$0Zkt6ri;2@45V}dgX`$A~gm%yVm%lO^d&.fIcX(5Rn}{' );
define( 'LOGGED_IN_SALT',   '!vfI1*.TX+BO)p?a@mxWFFLba6X3(@ uhe}}y=vD%|!/!IbG@m0A$r#YigOz9hk5' );
define( 'NONCE_SALT',       ' fS&z OgOT2FW@ <@p+2CA|4elb[g$(aD68bY-(iF/Yg{b!V!w0kzWa~86f]Id=3' );
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
