<?php
include '../Dbhelper.php';
include '../Model/Doctor.php';

$onedoctor = new Doctor();

$onedoctor->set_parent_id($_POST['parent_id']);
$onedoctor->set_specialty($_POST['specialty']);
$onedoctor->set_hospital($_POST['hospital']);
$onedoctor->set_hospital_address($_POST['hospital_adress']);
$onedoctor->set_consultation($_POST['consultation']);
$onedoctor->set_contact1($_POST['contact1']);
$onedoctor->set_contact2($_POST['contact2']);

if(edit_doctor($onedoctor))
	echo 'true';
	else echo 'false';

?>