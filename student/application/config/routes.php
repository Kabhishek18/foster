<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//  _   _                      
// | | | | ___  _ __ ___   ___ 
// | |_| |/ _ \| '_ ` _ \ / _ \
// |  _  | (_) | | | | | |  __/
// |_| |_|\___/|_| |_| |_|\___|
                            


$route['default_controller'] = 'home';
$route['404_override'] = 'home/NotFound';
$route['translate_uri_dashes'] = FALSE;

//Page
$route['about'] = 'home/About';
$route['contact'] = 'home/Contact';
$route['services'] = 'home/Service';

//Home
$route['dashboard'] = 'home/Dashboard';
$route['mycourse'] = 'home/MyCourse';
$route['freeevaluation'] = 'home/freeEvaluation';
$route['freezone'] = 'home/FreezoneRead';
$route['verify/:any/:any/:any'] = 'home/EmailVerification';


//Course
$route['course/:num/:any'] = 'cart/index';
$route['course-detail/:num/:any'] = 'cart/CourseDetail';


//Scheduler
$route['scheduler'] = 'home/Scheduler';

//Enroll 
$route['enroll'] = 'cart/Enroll';
