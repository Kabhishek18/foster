<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//  _____      _             
// |_   _|   _| |_ ___  _ __ 
//   | || | | | __/ _ \| '__|
//   | || |_| | || (_) | |   
//   |_| \__,_|\__\___/|_|   
         
                            


$route['default_controller'] = 'home';
$route['404_override'] = 'home/NotFound';
$route['translate_uri_dashes'] = FALSE;

//Home
$route['dashboard'] = 'home/Dashboard';
$route['verify/:any/:any/:any'] = 'home/EmailVerification';


$route['registration'] ='home/Register';
$route['profile'] ='home/Profile';
$route['bankprofile'] ='home/BankProfile';