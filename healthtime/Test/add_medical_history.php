<?php
include '../Dbhelper.php';
include '../Model/MedicalHistory.php';

$onemedicalhistory = new MedicalHistory();

$onemedicalhistory->set_parent_id($_POST['parent_id']);
$onemedicalhistory->set_anemia((int)$_POST['anemia']);
$onemedicalhistory->set_asthma((int)$_POST['asthma']);
$onemedicalhistory->set_bleeding_disorder((int)$_POST['bleeding_disorder']);
$onemedicalhistory->set_diabetes((int)$_POST['diabetes']);
$onemedicalhistory->set_epilepsy((int)$_POST['epilepsy']);
$onemedicalhistory->set_heart_disorder((int)$_POST['heart_disorder']);
$onemedicalhistory->set_high_blood((int)$_POST['high_blood']);
$onemedicalhistory->set_high_cholesterol((int)$_POST['high_cholesterol']);
$onemedicalhistory->set_liver_disorder((int)$_POST['liver_disorder']);
$onemedicalhistory->set_kidney_disorder((int)$_POST['kidney_disorder']);
$onemedicalhistory->set_nasal_allergy((int)$_POST['nasal_allergy']);
$onemedicalhistory->set_tuberculosis((int)$_POST['tuberculosis']);

if(add_medical_history($onemedicalhistory))
	echo 'true';
	else echo 'false';

?>