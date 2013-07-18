<?php
include '../Dbhelper.php';
include '../Model/Parents.php';

$oneparent = new Parents();

$oneparent->set_first_name($_POST['first_name']);
$oneparent->set_last_name($_POST['last_name']);
$oneparent->set_gender($_POST['gender']);
$oneparent->set_blood_type($_POST['blood_type']);
$oneparent->set_email($_POST['email']);
$oneparent->set_password($_POST['password']);
$oneparent->set_parent_image_id($_POST['parent_image_id']);
$oneparent->set_family_id($_POST['parent_image_id']);
$oneparent->set_account_status($_POST['account_status']);

if(deactivate_parent($oneparent))
	echo 'true';
	else echo 'false';

?>