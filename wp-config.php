<?php
define('WP_CACHE', false); // Added by WP Rocket
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// Instalador Automatico - Obtem os dados do config_instalador.php //
include(dirname(__FILE__) . '/config_instalador.php');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', DB_NOME);


/** Usuário do banco de dados MySQL */
define('DB_USER', DB_USUARIO);


/** Senha do banco de dados MySQL */
define('DB_PASSWORD', DB_SENHA);


/** Nome do host do MySQL */
define('DB_HOST', DB_SERVIDOR);


/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$i+0T.EhGLsm7_#GO<u#KwI%*yk.7Z_V)R*wwbZ!Fmx8^ApFz(*QGnY%}2q`@+<E');

define('SECURE_AUTH_KEY',  'R JGsWic;e_p/q&:k6*dH.>-JEt:BN!:=>*zu%eq|mqURroa!1S2vRpb}Yus3/Io');

define('LOGGED_IN_KEY',    'Uh?CQ-dRq</:uBCsw7AC24RBRX% nyi/!`|AU89hxwjOt?.5N>@2Ie~^+9/gTS;A');

define('NONCE_KEY',        'QS<?k^A[ADc7_.;p%*%M]WzJ.~z:yR#*SMOIVb N@Ueire`Od!>779[($DCe%Qcx');

define('AUTH_SALT',        '9-T4_lB:B|Ge$@/AKlW?LK/(F H2$K!$Q.w^y:vOpayn/G:bADUH0tX3_I(HYhA7');

define('SECURE_AUTH_SALT', 'O&Xz`.t%iaM,f{EPhYiya@Ksh8;@Nsf=Wy=d/xv^%!++OcKhmreUY;T)T W%,$UX');

define('LOGGED_IN_SALT',   'j uaulG<`>wps+ba)35lDFn0^k/!`J,!b; P>Eev$wn /%9SE>On>|eA}p5{Q% ]');

define('NONCE_SALT',       'cT}=aer0IhR%`W#K8,&nV$Dmar5EqaZ_$Kyp*!5%<7@$h%3i4vE<cEL+a7{YrcH{');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = PREFIXO.'__';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
define('CONCATENATE_SCRIPTS', false); 
require_once(ABSPATH . 'wp-settings.php');

/** Funções extras para o microthemer */
require_once(ABSPATH . 'wp-content/themes/astra-child/functions/my-functions.php');
