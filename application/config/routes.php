<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'welcome/demo';


$route['post'] = 'PostController';
$route['blog/(:any)'] = 'PostController/blog/$1';
$route['blog-edit/(:num)'] = 'PostController/blogedit/$1';

$route['student'] = 'StudentController';


$route['employee'] = 'Frontend/EmployeeController';
$route['employee/create'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
$route['employee/edit/(:any)'] = 'Frontend/EmployeeController/edit/$1';
$route['employee/update/(:any)'] = 'Frontend/EmployeeController/update/$1';
$route['employee/delete/(:any)'] = 'Frontend/EmployeeController/delete/$1';



$route['register']['GET'] = 'Auth/RegisterController';
$route['register']['POST'] = 'Auth/RegisterController/register';

$route['login']['GET'] = 'Auth/LoginController';
$route['login']['POST'] = 'Auth/LoginController/login';

$route['logout']['GET'] = 'Auth/LogoutController/logout';

$route['user-profile']['GET'] = 'Frontend/UserController';
