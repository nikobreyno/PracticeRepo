<?php
include 'Model/Parents.php';
include 'Dbhelper.php';

$parent = authenticate_user($_POST['username'],$_POST['password']);
if(empty($parent)){
	echo json_encode(array("error" => "no users found"));
}
else {
	echo json_encode(array("parents" => $parent));
}


?>