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

    public function sendMessage(){
        if (isset($_POST['msg']) && !empty($_POST['msg'])) {
            $msg = addslashes($_POST['msg']);
            $idChamado = $_SESSION['chatwindow'];
            if($_SESSION['area'] == 'suporte'){
                $origem = 0;
            } else {
                $origem = 1;
            }

            $mensagem = new Mensagens();
            $mensagem->sendMessage($idChamado, $origem, $msg);


        }
    }

}
