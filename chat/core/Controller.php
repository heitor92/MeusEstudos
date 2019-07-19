<?php

class Controller {
    
    //Método para Chamar uma View
    public function loadView($viewName, $viewData = []) {
        //extract — Importa variáveis para a tabela de símbolos a partir de um array
	extract($viewData);
	//A declaração include inclui e avalia o arquivo informado.
	include 'views/' .$viewName .'.php';
    }
    public function loadTemplate($viewName, $viewData = []) {
    //A declaração include inclui e avalia o arquivo informado.
	include 'views/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData = []){
	//extract — Importa variáveis para a tabela de símbolos a partir de um array
	extract($viewData);
        //A declaração include inclui e avalia o arquivo informado.
	include 'views/' .$viewName .'.php';
    }
}
