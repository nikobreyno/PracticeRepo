<?php
include '../Dbhelper.php';
include '../Model/CategoryReference.php';

$onecategoryreference = new CategoryReference();

$onecategoryreference->set_category_name($_POST['category_name']);

if(add_category_reference($onecategoryreference))
	echo 'true';
	else echo 'false';

?>