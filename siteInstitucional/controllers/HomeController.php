<?php

class HomeController extends Controller {
    
    public function index(){
        $dados = [];
        
        $portfolio = new Portfolio();
        $dados['portfolio'] = $portfolio->getTrabalhos(8);
        
        $this->loadTemplate('home', $dados);
    }
}
