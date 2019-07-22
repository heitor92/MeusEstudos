<?php

class ChatController extends Controller {

    public function __construct(){
        //parent::__construct();
    }
    
    public function index(){
        $dados = [];
    
        
        $this->loadTemplate('chat', $dados);
    }
}
