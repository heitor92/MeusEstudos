<?php

//Classe Padrão do Sistema, ou seja, a Que contém os requisitos básicos para o sistema funcionar
class Core{
//Declaração de Variáveis
//private $currentController;
//private $currentAction;
//Identificando o Que o Usuário Acessou
    public function run(){
        //substr — Retorna uma parte de uma string - Sintaxe: string = substr($string , $start, $length)
        //$url = substr($_SERVER['PHP_SELF'], 10);
			
        $url = explode("index.php", $_SERVER['PHP_SELF']);
        //end — Faz o ponteiro interno de um array apontar para o seu último elemento
        $url = end($url);
        $params = array();
        //a função empty Determina se a variável é vazia.
	if(!empty($url)) {
            //explode — Divide uma string em strings
            $url = explode('/', $url);
            //array_shift — Retira o primeiro elemento de um array
            array_shift($url);
            $currentController = ucfirst($url[0]).'Controller';
            array_shift($url);
            //isset — Informa se a variável foi iniciada
            if(isset($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            } else{
		$currentAction = 'index';
            }
            if(count($url) > 0){
                $params = $url;
            }
	} else {
            $currentController = 'HomeController';
            $currentAction = 'index';
	}
            //Chamar o método Controller. Nesse caso não necessita instanciar, o controle só vai herdar os controles
            require_once 'core/Controller.php';
            $c = new $currentController();
            //$c->$currentAction();
            call_user_func_array(array($c,$currentAction), $params);
    }
}

