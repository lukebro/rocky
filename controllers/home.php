<?php 

class Home extends Controller
{
	
	function __construct()
	{
		parent::__construct($this);
	}

	function index()
	{
		$this->_view->_title = 'Home';
		$this->_view->render($this->_controller_name . '/index');

	}

}
