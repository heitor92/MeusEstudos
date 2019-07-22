<?php

class AjaxController extends Controller {

    public function __construct(){
        //parent::__construct();
    }
    
    public function index(){
        $dados = [];



    }

    public function getChamado(){
        $dados = [];
        
        $chamados = new Chamados();
        $dados['chamados'] = $chamados->getChamados();

        echo json_encode($dados);
    }

}
