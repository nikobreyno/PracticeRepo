<?php
include '../Dbhelper.php';
include '../Model/MedicalHistory.php';

$onemedicalhistory = new MedicalHistory();

$onemedicalhistory->set_parent_id($_POST['parent_id']);
$onemedicalhistory->set_anemia($_POST['anemia']);
$onemedicalhistory->set_asthma($_POST['asthma']);
$onemedicalhistory->set_bleeding_disorder($_POST['bleeding_disorder']);
$onemedicalhistory->set_diabetes($_POST['diabetes']);
$onemedicalhistory->set_epilepsy($_POST['epilepsy']);
$onemedicalhistory->set_heart_disorder($_POST['heart_disorder']);
$onemedicalhistory->set_high_blood($_POST['high_blood']);
$onemedicalhistory->set_high_cholesterol($_POST['high_cholesterol']);
$onemedicalhistory->set_liver_disorder($_POST['liver_disorder']);
$onemedicalhistory->set_kidney_disorder($_POST['kidney_disorder']);
$onemedicalhistory->set_nasal_allergy($_POST['nasal_allergy']);
$onemedicalhistory->set_tuberculosis($_POST['tuberculosis']);

if(add_medical_history($onemedicalhistory))
	echo 'true';
	else echo 'false';

?>