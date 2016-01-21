<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*CONFIG DEFAULT_CONTROLLER*/
$route['default_controller'] = 'Rest_client'; //defined on public/index.php 
$route['404_override'] = 'error_404';
/***************************************/
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];

/*
 | -------------------------------------------------------------------------
 | Sample REST API Routes
 | -------------------------------------------------------------------------
 */
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8



