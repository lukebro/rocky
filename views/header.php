<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $this->_title . ' - ' . PROJECT_NAME ?></title>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
	<?php
	if($this->_reset)
    	echo '<link rel="stylesheet" type="text/css" href="'. ROOT . FS . ASSETS . FS .'styles' . FS . 'reset.css' . '">' . "\n";
	if($this->_fonts)
    	echo '<link rel="stylesheet" type="text/css" href="'. ROOT . FS . ASSETS . FS .'styles' . FS . DEFAULT_FONTS . '">' . "\n";
	if($this->_bootstrap)
    	echo '<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">' . "\n"; // Twitter Bootstrap
	if($this->_default_css)
		echo '<link rel="stylesheet" type="text/css" href="'. ROOT . FS . ASSETS . FS .'styles' . FS . DEFAULT_CSS . '">' . "\n";
	if(isset($this->_css))
		foreach($this->_css as $css)
			echo '<link rel="stylesheet" type="text/css" href="'. ROOT . FS . ASSETS . FS . 'styles' . FS . $css . '.css">' . "\n";
	?>
</head>
<body>