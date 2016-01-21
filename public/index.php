<?php
/****
 *  STARTigniter
 *	INDEX.php file
 *  set: project_name, version, cdn, root 
 ***/

define('INDEXMODULE', 'start');
define('VERSION', 'development');
define('PUBLICPATH','http://dev.server/_projects/start/public/');
define('CDN',PUBLICPATH.'assets/');
define('PRIVATEPATH','../private/');
/*STARTigniter*/
require_once PRIVATEPATH.'_system/core/Start.php';
