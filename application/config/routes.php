<?php
defined('BASEPATH') or exit('No direct script access allowed');

// $route['welcome/(:any)'] = 'welcome/index';

// $route['admin/login'] = 'admin/login';
// $route['admin/dashboard'] = 'admin/dashboard';
// $route['admin/home'] = 'admin/home';

// $route['users/login'] = 'users/login';
// $route['users/signup'] = 'users/signup';

// $route['informations/details'] = 'informations/details';

$route['home']['GET'] = 'welcome';
$route['home/(:num)']['GET'] = 'welcome/index';
$route['home/(:any)']['GET'] = 'welcome/home/$1';

$route['login'] = 'Login';
$route['signup'] = 'SignUp';
$route['details'] = 'Details';

$route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
