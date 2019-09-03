<?php
/*
    a função setcookie - Envia um cookie.
    Vamos passar 3 parâmetros o primeiro vai ser o nome do cookie, o segundo
    vai ser o valor desse cookie(O valor é guardado no computador do cliente)
    e o terceiro vai ser o tempo que o cookie vai expirar(Esse valor é um timestamp Unix).

    Alternativas para utilizar no terceiro parâmetro:
    - time() — Retorna o timestamp Unix atual
    - mktime — Obtém um timestamp Unix de uma data
    
*/
//setcookie('meunome', 'heitor de souza', time() + 3600);// em 1 hora expira


/*session_start() — Inicia uma nova sessão ou resume uma sessão existente
session_save_path() — Obtém e/ou define o caminho para armazenamento da sessão atual.
*/
//session_save_path(__DIR__ . '/sessions'); //está definindo um caminho para salva as sessões.

session_start();

$_SESSION['meunome'] = 'Heitor';
$_SESSION['id-user'] = '12';
$_SESSION['ulttimo-acesso'] = '23-08-2019';

/*
$_SESSION['usuario'] = [
    'name' => 'Heitor',
    'idade' => 32,
    'ativo' => true,
    'rate' => 4.3
];
*/
//unset — Destrói a variável especificada
//unset($_SESSION['usuario']);


