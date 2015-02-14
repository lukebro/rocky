<?php
/* 
*	Directory Definitions
*/
define('CONTROLLERS', 'controllers'); // Controllers Directory
define('LIBRARIES', 'libs'); // Libraries Directory
define('MODELS', 'models'); // Models Directory
define('VIEWS', 'views'); // Views Directory
define('ASSETS', 'assets'); // Assets Directory (Must contain directories fonts, images, js, styles, xml.)
define('CONF', 'conf'); // Configuration Directory (Used for configuration files.)
define('EXTRAS', 'extras'); // All 3rd Party Libraries


/*
*	Default Controller/View/Model
*/
define('DEFAULT_CONTROLLER', 'home');

/*
*	File Definitions
*/
define('DEFAULT_CSS', 'default.css'); // ASSETS/styles
define('DEFAULT_FONTS', 'fonts.css'); // ASSETS/styles
define('DEFAULT_JS', 'default.js'); // ASSETS/js
define('DEFAULT_HEADER', 'header'); //VIEWS/*.php
define('DEFAULT_FOOTER', 'footer'); //VIEWS/*.php
define('DEFAULT_CONTAINER_TOP', 'container_top'); //VIEWS/*.php
define('DEFAULT_CONTAINER_BOTTOM', 'container_bottom'); //VIEWS/*.php

/*
*	Database Definitions
*/
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'admin');
define('DB_NAME', 'db');

/*
*	Other Definitions
*/
date_default_timezone_set('America/New_York');
define('FS', '/'); 	
define('DEBUG', false);
define('ROOT', 'http://' . $_SERVER['SERVER_NAME']);
define('PROJECT_NAME', 'Rocky');
define('RESULTS_PER_PAGE', 25);

/*
*	Menu Definitions
*/
$GLOBALS['menu'] = array(
	// 
);