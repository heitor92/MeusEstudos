<?php

class ChatController extends Controller {

    public function __construct(){
        //parent::__construct();

        $_SESSION['area'] = 'cliente';
    }
    
    public function index(){
        $dados = [];
    
        
        $this->loadTemplate('chat', $dados);
    }
}
