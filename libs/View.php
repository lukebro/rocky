<?php

class View
{
	public $_title, $_name, $_name_array, $_page, $_js, $_css, $_default_css, $_default_js, $_jquery, $_fonts, $_bootstrap, $_pdf, $_reset;
	public function __construct()
	{
		$this->_title = '';
		$this->_reset = true; // reset css margin/padding 
		$this->_default_css = true; //display default_css by default
		$this->_default_js = false; // display default_js by default
		$this->_fonts = false; //display default_css by default
		$this->_jquery = false;   // false by default
		$this->_bootstrap = false; // false by default
	}

	public function render($name, $container = true, $include = true)
	{
		$this->_name = $name;
		$this->_name_array = explode('/', $name);
		$this->_page = $this->_name_array[0];
		
		if($include && $container)
		{
			require VIEWS . '/' . DEFAULT_HEADER . '.php';
			require VIEWS . '/' . DEFAULT_CONTAINER_TOP . '.php';
			require VIEWS . '/' . $this->_name . '.php';
			require VIEWS . '/' . DEFAULT_CONTAINER_BOTTOM . '.php';
			require VIEWS . '/' . DEFAULT_FOOTER . '.php';
		} else if($include) {
			require VIEWS . '/' . DEFAULT_HEADER . '.php';
			require VIEWS . '/' . $this->_name . '.php';
			require VIEWS . '/' . DEFAULT_FOOTER . '.php';
		} else {
			require VIEWS . '/' . $this->_name . '.php';
		}
	}

	public function js($files)
	{
		$this->_js = explode('|', $files);
	}

	public function css($files)
	{
		$this->_css = explode('|', $files);
	}
}