<?php

/*
**
** By: Lukasz Brodowski
** http://lukebro.com
** lukebrodowski@gmail.com
** businesslukebro@gmail.com
**
*/
if(file_exists('conf/Config.local.php'))
	require 'conf/Config.local.php';
else
	require 'conf/Config.default.php';

if(DEBUG) {
	error_reporting(-1);
	ini_set('display_errors', 'On');
} else {
	error_reporting(0);
	ini_set('display_errors', 'Off');
}

$PageLoad = microtime(true);

require 'libs/Auth.php';
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Database.php';
require 'libs/Debug.php';
require 'libs/Model.php';
require 'libs/Session.php';
require 'libs/Validate.php';
require 'libs/View.php';

$app = new Bootstrap();

if(DEBUG)
	echo "\n".'<script>console.log(\'This page took: ' . (microtime(true)-$PageLoad) . 's to generate.\')</script>';