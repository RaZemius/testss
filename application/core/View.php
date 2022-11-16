<?php

namespace application\core;
use application\lib\Config;

class View
{
	public $route;
	public $path;
	public $layout = 'default';

	public function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route['action'];
	}

	public function render($title, $vars = [], $layout = "default", $page = "")
	{
		extract($vars);
		$pagePath = empty($page) ? $this->path : $page;
		$path = 'application/views/' . $pagePath . '.php';
		if (file_exists($path)) {
			$url = Config::$appConfig["root_url"] . "/" . Config::$appConfig["root_folder"];
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/' . $layout . '.php';
		}
	}

	public function redirect($url)
	{
		Header("Location: " . $url);
	}

	public static function errorCode($code)
	{
		$path = 'application/views/errors/' . $code . '.php';
		if (file_exists($path)) {
			require $path;
		}
	}

	public function message($status, $message)
	{
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url)
	{
		exit(json_encode(['url' => $url]));
	}
}
