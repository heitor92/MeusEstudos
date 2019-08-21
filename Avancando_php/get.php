<?php

//echo $_GET['planeta'];
//echo '<br>';
//echo $_GET['cor'];

//?planeta=Marte&cor=azul = Query String

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false){
    echo $planeta;
} else {
    echo "Planeta não informado!";
}

//echo '<br>';

//$cor = $_GET['cor'] ?? "Cor não informada!";

//echo $cor;

//coalesce (??) do PHP 7
//o PHP entende que eu vou testar essa variavel com esse índice se ele existe ou não.
//No exemplo acima ele vai verificar se $_GET['cor'] foi definido se sim ele vai atribuir na variavel $cor.
