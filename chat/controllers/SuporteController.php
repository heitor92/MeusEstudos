<?php

class SuporteController extends Controller {

    public function __construct(){
        //parent::__construct();

        $_SESSION['area'] = 'suporte';
    }
    
    public function index(){
        $dados = [];
    
        
        $this->loadTemplate('suporte', $dados);
    }
}
