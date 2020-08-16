<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
##Function names##
force_ssl
generateUUID
generateOrderID
trimDropDown
*/
if ( ! function_exists('force_ssl'))
{
	function force_ssl() {		
		if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
			$url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			redirect($url);
			exit;		
		}	
	}
}



if ( ! function_exists('generateUUID'))
{
	function generateUUID(){
		$charid = md5(uniqid(rand(), true).time());
		$hyphen = chr(45);// "-"
		$uuid = substr($charid, 0, 8).$hyphen
		  .substr($charid, 8, 4).$hyphen
		  .substr($charid,12, 4).$hyphen
		  .substr($charid,16, 4).$hyphen
		  .substr($charid,20,12);
		return $uuid;
	}
}





?>
