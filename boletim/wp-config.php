<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'spsp14');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'spsp14');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'S7s7master*10*');

/** nome do host do MySQL */
define('DB_HOST', 'mysql05.spsp1.hospedagemdesites.ws');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R#a2SmwV=E*XBuX_l/JbkMlLJ0wF|h(BD7qQ>^-J.!~EO;1ZH}~qpB^@-IDoIV`a');
define('SECURE_AUTH_KEY',  '+Nhhc5w02M,,J&KD4_hke[Llzo,]-ML#|Mc;%JmNkm-p 7l|:y~)9OSsU>@OM$$x');
define('LOGGED_IN_KEY',    '@}<!rEE{[jgw8qS$1f+I]JlNYRo jrjlvtLP$/!3-[w=ZFE46^;R^M;0-;+U/V#V');
define('NONCE_KEY',        'k,H.}Z6DbU+dAvN37(iA$~W-tO9+c/G8+!wb@=*L(4R,.nd@LBeG7}9CJ-RGtc<6');
define('AUTH_SALT',        'g&oIh?=|;O?U{ge6bHTN(^ly[b*~;|)B|!6:!15&+)&>BLlJrR9b]KYtOsxoOKfB');
define('SECURE_AUTH_SALT', 'A?-jKHn:zr<JNdq<3(t$N%IhK.%42|]1.|0o*2FM/}hx*@OwtMA[l-/MZT4{z:_H');
define('LOGGED_IN_SALT',   'f&H]u$+uUS79YKigkB;ee|3FDH#J=d-&1k:KjtPM$DMGl#p?QT/*`AsR4O9pit 8');
define('NONCE_SALT',       'l< E@Amk)i$E#+Hjm9RK&;at%Ql;Yf*zK)4YWAD=XQ++#B*fRHGd/Y?w=5m4-kF+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_LANG', 'pt_BR');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
