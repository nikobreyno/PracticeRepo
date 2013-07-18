<?php
include '../Dbhelper.php';
include '../Model/Sharing.php';

$onesharing = new Sharing();

$onesharing->set_from_parent_id($_POST['from_parent_id']);
$onesharing->set_to_parent_id($_POST['to_parent_id']);
$onesharing->set_to_child_id($_POST['to_child_id']);
$onesharing->set_privilege($_POST['privilege']);

if(delete_sharing($onesharing))
	echo 'true';
	else echo 'false';

?>