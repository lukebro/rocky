<?php

class Validate
{
	/*
	*	Checks if token from form is valid. (session token)
	*	@param String $token token form input;
	*	@return int 1 = valid 0 = not valid
	*/
	public static function isTokenValid($token)
	{
		$result = ($token == Session::get('token')) ? 1 : 0;

		Session::kill('token');

        return $result;
	}

	/**
	 * Create a session token and store in $_SESSION["token"]
	 */
	public static function createToken()
	{
		$token = md5(uniqid(mt_rand(),true)); 
		Session::set('token', $token);
		return $token;
	}

	/*
	*	Checks if format of string is valid.
	*	@param String $string string to be validated
	*	@param int $min minimum length of string, default: 4
	*	@param int $max maximum length of string, default: 21
	*	@return int 1 = valid 0 = not valid
	*/
	public static function isFormatValid($string, $min = 5, $max = 21, $pattern = '[a-zA-Z0-9]')
	{ 
		return (preg_match('/^' . $pattern . '{'.$min.','.$max.'}$/', $string)) ? 1 : 0;
	}

	public static function filter($string, $pattern = '[^a-zA-Z0-9$]') {
		return preg_replace('/' . $pattern . '/', "", $string);
	}
}