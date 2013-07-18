<?php
include '../Dbhelper.php';
include '../Model/Child.php';

$onechild = new Child();

$onechild->set_first_name($_POST['first_name']);
$onechild->set_last_name($_POST['last_name']);
if($_POST['gender'] == "1")
$onechild->set_gender(1);
else
$onechild->set_gender(2);
$onechild->set_birthdate($_POST['birthdate']);
$onechild->set_blood_type($_POST['blood_type']);
$onechild->set_family_id($_POST['family_id']);

if(add_child($onechild))
	echo 'true';
	else echo 'false';

?>