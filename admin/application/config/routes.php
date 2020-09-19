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
$route['tutor/edit/(:num)'] ='home/TutorAdd';
$route['tutor/add'] ='home/TutorAdd';

$route['freezone'] ='home/Freezone';

//Batch
$route['batch'] ='home/BatchList';
$route['batch/edit/(:num)'] ='home/BatchAdd';
$route['batch/add'] ='home/BatchAdd';

//Category
$route['category'] ='home/CategoryList';
$route['category/edit/(:num)'] ='home/CategoryAdd';
$route['category/add'] ='home/CategoryAdd';

//Course
$route['course'] ='home/CourseList';
$route['course/edit/(:num)'] ='home/CourseAdd';
$route['course/add'] ='home/CourseAdd';

//Order
$route['order'] ='home/OrderList';
$route['order/view/(:num)'] ='home/OrderView';