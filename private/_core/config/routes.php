<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*CONFIG DEFAULT_CONTROLLER*/
$route['default_controller'] = 'Welcome'; //defined on public/index.php 
$route['404_override'] = 'error_404';
/***************************************/
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];



