<?php
include '../Dbhelper.php';
include '../Model/Parents.php';

$oneparent = new Parents();

$oneparent->set_first_name($_POST['first_name']);
$oneparent->set_last_name($_POST['last_name']);
if($_POST['gender'] == "1")
$oneparent->set_gender(1);
else
$oneparent->set_gender(2);
$oneparent->set_blood_type($_POST['blood_type']);
$oneparent->set_email($_POST['email']);
$oneparent->set_password($_POST['password']);

$result = add_parent($oneparent);
	if(!empty($result))
	echo $result;
	else echo 'error';

?>