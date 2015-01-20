<?php

class Error extends Controller
{
	
	function __construct()
	{
		parent::__construct($this);
	}

	function cantFind($url = null)
	{
		$this->_view->error = strtolower($url[0]);
		$this->_view->_title = '404 Error';
		$this->_view->render($this->_controller_name . '/404');
	}

	function index()
	{
		$this->_view->_title = 'Error';
		$this->_view->render($this->_controller_name . '/index');
	}
}
