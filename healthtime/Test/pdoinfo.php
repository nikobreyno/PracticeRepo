<?php
include 'Model/Parents.php';
include 'Dbhelper.php';

$parent = authenticate_user('email','password');
if(empty($parent)){
	echo 'no user found';
}
else {
	echo 'YOLO!';
}
?>