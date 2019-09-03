<?php
/**
 * session_set_cookie_params — Define os parâmetros do cookie de sessão
 * - Tempo de vida do cookie de sessão, definido em segundos. 
 * - Caminho no domínio onde o cookie vai funcionar. Use uma única barra ('/') para que funcione em todos os caminhos do domínio.
 * - Domínio do cookie, por exemplo 'www.php.net'. Para tornar os cookies visíveis em todos os subdomínios, o domínio deve ser prefixado com um ponto, como '.php.net'. 
 * - Se TRUE, o cookie só será enviado em conexões seguras.
 * - Se TRUE, então o PHP tentará enviar a flag httponly ao definir o cookie de sessão. 
 * https://www.php.net/manual/pt_BR/function.session-set-cookie-params.php
 */

 /**
  * Para alteração no manipulador de sessão:
  * https://www.php.net/manual/pt_BR/session.configuration.php#ini.session.save-handler  
  */

/**
 * ini_set — Define o valor de uma opção de configuração
 * https://www.php.net/manual/pt_BR/function.ini-set.php
 */
ini_set('session.save_handler', 'files');// o manipulador
ini_set('session.save_path', __DIR__ .'/sessions');// o caminho completo do sqlite

session_set_cookie_params(60*60, '/', 'localhost', false, true);

session_start();