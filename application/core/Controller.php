<?php

namespace application\core;
use application\lib\Config;

abstract class Controller {
	
	public $route;
	public $view;
	public $model;
	public $url;

	public function __construct($params) {
		$this->route = $params;
		$this->view = new View($this->route);
		$this->model = $this->loadModel($this->route["controller"]);
		$this->url = Config::$appConfig["root_url"] . "/" . Config::$appConfig["root_folder"];
	}

	public function loadModel($name) {
		$path = 'application\models\\'.ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
	}
}