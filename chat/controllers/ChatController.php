<?php

class ChatController extends Controller {

    public function __construct(){
        //parent::__construct();
    }
    
    public function index(){
        $dados = ['nome' => ''];
        $chamado = new Chamados();
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);
            
            $chamado->updateStatus($id, '1');
        } else if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $ip = $_SERVER['REMOTE_ADDR'];
            $dataInicio = date('H:i:s');

            $_SESSION['chatwindow'] = $chamado->addChamado($ip, $nome, $dataInicio);

        } else if (!isset($_SESSION['chatwindow']) || empty($_SESSION['chatwindow'])){
            $this->loadTemplate('newchamado', $dados);
            exit;
        }

        if(isset($_SESSION['area']) && $_SESSION['area'] == 'suporte'){
            $dados['nome'] = 'Suporte';
        } else if(isset($_SESSION['area']) && $_SESSION['area'] == 'cliente'){
            $idchamado = $_SESSION['chatwindow'];
            $result = $chamado->getChamado($idchamado);
            $dados['nome'] = $result['nome'];
        }
        
        $this->loadTemplate('chat', $dados);
    }
}
