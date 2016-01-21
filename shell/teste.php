<?php

//CREATE MAPPING DATABASE
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:convert-mapping --from-database annotation ./map');

//CREATE  DATABASE
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:schema-tool:create');



//CREATE MAPPING ENTITIES
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:generate-entities  --generate-annotations="true" --generate-methods="true" ./entities');

//CREATE MAPPING PROXIES
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:generate-proxies');


//CREATE A DUMP SQL FROM STRUTURE DATABASE 
$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:schema-tool:create --dump-sql  >> dump.sql');

//CREATE A DUMP SQL FROM DATABASE (dont work!! )
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:schema-tool:update   --dump-sql --complete >> dump.sql');


//CREATE  DATABASE
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:generate-repositories ./repositories');

//UPDATE  DATABASE
#$result = shell_exec('X:/xampp/php/php.exe doctrine.php orm:schema-tool:update --force');



echo $result;
?>