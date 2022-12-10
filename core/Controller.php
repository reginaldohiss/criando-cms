<?php
class controller {

	private $config;

	public function __construct() {
		$cfg = new Config();
		$this->config = $cfg->getConfig();
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/templates/'.$this->config['site_template'].'.php';
	}

	public function loadTemplateInPainel($viewName, $viewData = array()) {
		include 'views/painel.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadMenu() {
		$m = array();
		$menu = new Menu();		
		$m['menu'] = $menu->getMenu();

		$this->loadView("menu", $m);		
	}

}