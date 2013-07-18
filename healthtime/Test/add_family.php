<?php
include '../Dbhelper.php';
include '../Model/Family.php';

$onefamily = new family();

$onefamily->set_father_id($_POST['father_id']);
$onefamily->set_mother_id($_POST['mother_id']);

if(add_family($onefamily))
	echo 'true';
	else echo 'false';

?>