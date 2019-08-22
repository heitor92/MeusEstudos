<?php

$nome = trim($_POST['nome']); // trim() -> Retira espaço no ínicio e final de uma string
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']); // strip_tags() -> Retira as tags HTML e PHP de uma string

//var_dump($interesses);

if(empty($nome)){ // empty() -> Verificar se está vazio; Retorna true com "", 0,false, array()
    echo 'Informe o nome!<br>';
}

if(is_null($interesses)){
    echo 'Selecione pelo menos um item de interesse!<br>';
}

echo $mensagem;

