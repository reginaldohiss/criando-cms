<?php
class paginaController extends controller {

	public function __construct() {
        parent::__construct();
    }

    public function index($url) {
    	$dados = array();

    	$p = new Paginas();
    	$dados = $p->getPagina($url);

    	$this->loadTemplate('pagina', $dados);
    }

}