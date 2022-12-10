<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->config['site_title']; ?></title>
        <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/exemplo.css" />
    </head>
    <body>
        <div class="menu">

        </div>
    	<div class="topo">

    	</div>    	
    	<div class="container">
		<?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    	</div>
    	<div class="rodape">

    	</div>
    </body>
</html>
