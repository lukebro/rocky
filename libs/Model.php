<?php

class Model
{
	protected $_db;
	
	function __construct()
	{
		$this->_db = new Database();
	}
}