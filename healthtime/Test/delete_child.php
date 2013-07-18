<?php
include '../Dbhelper.php';
include '../Model/Child.php';

$onechild = new Child();

$onechild->set_first_name($_POST['first_name']);
$onechild->set_last_name($_POST['last_name']);
$onechild->set_gender($_POST['gender']);
$onechild->set_birthdate($_POST['birthdate']);
$onechild->set_blood_type($_POST['blood_type']);
$onechild->set_family_id($_POST['family_id']);
$onechild->set_child_image_id($_POST['child_image_id']);

if(delete_child($onechild))
	echo 'true';
	else echo 'false';

?>