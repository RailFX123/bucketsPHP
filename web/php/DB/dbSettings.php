<?php
/* 
 * Database Connection Settings
 */

$localhost   = array(
	'driver' => 'mysql',
	'host' => getenv('CLOUDSQL_DSN'),
	'dbname' => 'empleo_cv',
	'username' => getenv('CLOUDSQL_USER'),
    'password' => getenv('CLOUDSQL_PASSWORD'));
?>