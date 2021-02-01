<?php 

date_default_timezone_set('America/Lima');

define("URL","http://localhost:8080/login_22/");

define("SERVER","localhost");
define("USER","root");
define("PASS","");
define("BD","db_prueba");

define("FOLDER","/login_22/");

$key = date('Y-m-d').$_SERVER['SERVER_NAME'].FOLDER;

define("KEY",$key);
define("ID","id");
define("NOMBRES","nombres");
define("APELLIDOS","apellidos");


 ?>