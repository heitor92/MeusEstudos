<html>
    <head>
        <meta charset="UTF-8">
        <title>CHAT</title>
        <link rel="stylesheet" href="assets/css/template.css" />
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </head>
    <body>
        <div class="topo">
            <div class="topo1"></div>
            <div class="banner"></div>
        </div>
        <div class="menu">
            <ul>
                <a href="/MeusEstudos/siteInstitucional"><li>HOME</li></a>
                <a href="/MeusEstudos/siteInstitucional/portfolio"><li>PORTFOLIO</li></a>
                <a href="/MeusEstudos/siteInstitucional/sobre"><li>SOBRE</li></a>
                <a href="/MeusEstudos/siteInstitucional/servicos"><li>SERVIÇOS</li></a>
                <a href="/MeusEstudos/siteInstitucional/contato"><li>CONTATO</li></a>
            </ul>
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        
        <div class="rodape"></div>
        
    </body>
</html>
