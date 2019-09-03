<?php

//session_start();
require __DIR__ . '/session.php';
/* 
session_destroy — Destrói todos os dados registrados em uma sessão
https://www.php.net/manual/en/function.session-destroy.php

*/
session_destroy();
/**
 * https://www.php.net/manual/pt_BR/function.header.php
 */
header('location: index.php');