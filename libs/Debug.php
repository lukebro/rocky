<?php

class Debug
{
	public static function checkArray($array, $kill = true)
	{
		echo '--START DEBUG--';
		echo '<pre>';
		if(empty($array))
			echo 'ARRAY IS EMPTY.';
		else
			print_r($array);
		echo '</pre>';
		if($kill)
			die('--END DEBUG--');
		else
			echo '--END DEBUG--';
	}
}