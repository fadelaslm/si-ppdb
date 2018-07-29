<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Kodingin Routes : Nanda Reynaldi*/
$route['auth/login'] = 'authentication/Login';
$route['app/auth'] = 'authentication/Login/auth';
$route['app/logout'] = 'authentication/Login/logout';
$route['app/dashboard'] = 'app/Dashboard';
$route['app/user'] = 'app/admin/Master_admin';
