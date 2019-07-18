<?php
class SobreController extends Controller {
    
    public function index(){
        $dados = [];
       
        
        $this->loadTemplate('sobre', $dados);
    }
}
