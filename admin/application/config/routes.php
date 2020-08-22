<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//     _    ____  __  __ ___ _   _   ____   _    _   _ _____ _     
//    / \  |  _ \|  \/  |_ _| \ | | |  _ \ / \  | \ | | ____| |    
//   / _ \ | | | | |\/| || ||  \| | | |_) / _ \ |  \| |  _| | |    
//  / ___ \| |_| | |  | || || |\  | |  __/ ___ \| |\  | |___| |___ 
// /_/   \_\____/|_|  |_|___|_| \_| |_| /_/   \_\_| \_|_____|_____|
                                                                




$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Dashboard
$route['dashboard'] ='home/Dashboard';
$route['student'] ='home/StudentList';
$route['tutor'] ='home/TutorList';
$route['category'] ='home/CategoryList';

//Batch
$route['batch'] ='home/BatchList';
$route['batch/edit/(:num)'] ='home/BatchAdd';
$route['batch/add'] ='home/BatchAdd';

//Course
$route['course'] ='home/CourseList';