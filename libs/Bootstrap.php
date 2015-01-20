<?php

class Bootstrap
{
	function __construct()
	{
		Session::init();

		$url = isset($_GET['url']) ? $_GET['url'] : DEFAULT_CONTROLLER;
		$url = explode('/', rtrim($url, '/'));

		$file = CONTROLLERS . FS . $url[0] . '.php'; 

		if(!file_exists($file))
		{
			require CONTROLLERS . FS . 'error.php';
			$controller = new Error();

			$controller->cantFind($url);

			return false;
		}

		require $file;
		$controller = new $url[0];
		

		$url[1] = isset($url[1]) ? $url[1] : 'index';
		$url[2] = isset($url[2]) ? $url[2] : null;
		$url[3] = isset($url[3]) ? $url[3] : null;

		if(method_exists($url[0], $url[1]))
			$controller->{$url[1]}($url[2], $url[3]);
		else
			$controller->index($url[1]);
	}
}