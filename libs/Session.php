<?php

class Session
{
	public static function init()
	{
		session_start();
	}

	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function kill($key)
	{
		unset($_SESSION[$key]);
	}

	public static function get($key)
	{
		return isset($_SESSION[$key])? $_SESSION[$key] : null;
	}

	public static function destroy()
	{
		unset($_SESSION);
		session_destroy();
	}
}