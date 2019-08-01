<?php
class PortfolioController extends Controller {
    
    public function index(){
        $dados = [];
        
        $portfolio = new Portfolio();
        $dados['portfolio'] = $portfolio->getTrabalhos();
        
        $this->loadTemplate('portfolio', $dados);
    }
}
