<?php 

include'../autoload.php';
session_start();

try {
	echo json_encode(

array(
  "title" =>"Salio del Sistema",
  "text"   => $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS],
  "type"  => "success"
)
	);
	unset($_SESSION[KEY.ID]);
	unset($_SESSION[KEY.NOMBRES]);
	unset($_SESSION[KEY.APELLIDOS]);
} catch (Exception $e) {
	echo "error".$e->getMessage();
}


 ?>