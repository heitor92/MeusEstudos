<?php

class ChatController extends Controller {

    public function __construct(){
        //parent::__construct();
    }
    
    public function index(){
        $dados = [];
        
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);
            $chamado = new Chamados();
            $chamado->updateStatus($id, '1');
        }
        
        $this->loadTemplate('chat', $dados);
    }
}
