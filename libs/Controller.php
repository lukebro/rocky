<?php

class Controller
{
	protected $_view, $_model, $_controller_name;
	
	function __construct($controller)
	{
		$this->_controller_name = strtolower(get_class($controller));
		$this->_view = new View();
		$this->_model = array();
	}

	function loadModel($name)
	{
		$path = 'models/' . $name . '_model.php';

		if(file_exists($path))
		{
			require $path;
			$class = $name . '_model';
			$this->_model[$name] = new $class;

			return true;
		}
		else
		{
			return false;
		}
	}

	function notFound($title = "404 Error")
	{
			$this->_view->_title = $title;
			$this->_view->error = $this->_controller_name;
			$this->_view->render('error/404');
			exit;
	}
}