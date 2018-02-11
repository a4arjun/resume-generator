<?php
ob_start();
session_start();

//DATABASE CONFIG
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','db');


//DO NOT MODIFY BELOW
$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>