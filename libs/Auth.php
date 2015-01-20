<?php

class Auth
{
	public static function signedIn()
	{
		$id = Session::get('id');

		if($id == NULL || $id == "")
			return false;
		else
			return true;	
	}

	public static function userOnly()
	{
		if(!self::signedIn())
		{
			Session::set('ref', $_SERVER['REQUEST_URI']);
			header("Location: ".ROOT . FS ."signin");
			exit;
		}
	}

	public static function returnRef()
	{
		$temp = Session::get('ref');
		Session::kill('ref');
		return $temp;
	}

	public static function isRef()
	{
		$temp = Session::get('ref');
		if(isset($temp))
			return true;
		else
			return false;
	} 
}