<?php

//session_start();
require __DIR__ . '/session.php';
/* 
    filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra
    https://www.php.net/manual/en/function.filter-input.php
*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['user'] = [
        'email' => filter_input(INPUT_POST, 'email')
    ];
/**
 * https://www.php.net/manual/pt_BR/function.header.php
 */
    header('location: index.php');
    exit;
}


?>

<h1>Login</h1>

<form action="" method="post">
    <input type="text" name="email">
    <input type="submit" value="enviar">
</form>