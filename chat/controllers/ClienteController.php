<?php

class ClienteController extends Controller {

    public function __construct(){
        //parent::__construct();

        $_SESSION['area'] = 'cliente';
    }
    
    public function index(){
        $dados = [];
    
        
        $this->loadTemplate('cliente', $dados);
    }
}
