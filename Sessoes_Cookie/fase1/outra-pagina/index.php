<?php

/*Acessando o cookie criado */

//var_dump($_COOKIE);

/*
    Acessando a sessão
session_save_path — Obtém e/ou define o caminho para armazenamento da sessão atual.

*/
//var_dump(session_save_path());
session_start();

var_dump($_SESSION);
//var_dump($_SESSION['usuario']);

