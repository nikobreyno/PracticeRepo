<?php
include '../Dbhelper.php';
include '../Model/SharingDoctor.php';

$onesharingdoctor = new SharingDoctor();

$onesharingdoctor->set_doctor_id($_POST['doctor_id']);
$onesharingdoctor->set_parent_id($_POST['parent_id']);
$onesharingdoctor->set_child_id($_POST['child_id']);

if(delete_sharing_doctor($onesharingdoctor))
	echo 'true';
	else echo 'false';

?>