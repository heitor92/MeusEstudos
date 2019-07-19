<?php
class ServicosController extends Controller {
    
    public function index(){
        $dados = [];
       
        
        $this->loadTemplate('servicos', $dados);
    }
}
