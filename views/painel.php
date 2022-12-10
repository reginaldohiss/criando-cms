<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/painel.css" />
    </head>
    <body>
    	<div class="menu">
            <ul>
                <a href="<?php echo BASE; ?>painel"><li>Páginas</li></a>
                <a href="<?php echo BASE; ?>painel/menus"><li>Menus</li></a>
                <a href="<?php echo BASE; ?>painel/config"><li>Configurações</li></a>
                <a href="<?php echo BASE; ?>painel/logout"><li>Sair</li></a>
            </ul>
        </div>
    	<div class="container">
		<?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    	</div>
    </body>
</html>
