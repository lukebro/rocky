<?php
	if($this->_jquery)
		echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>' . "\n";
	if($this->_bootstrap)
		echo '<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>' . "\n";
	if($this->_default_js)
		echo '<script src="' . ROOT . FS . ASSETS . FS . "js" . FS . DEFAULT_JS . '"></script>' . "\n";
	if(isset($this->_js))
		foreach($this->_js as $js)
			echo "<script src=\"" . ROOT . FS . ASSETS . FS . "js" . FS . $js . ".js\"></script>" . "\n";
	?>
</body>
</html>