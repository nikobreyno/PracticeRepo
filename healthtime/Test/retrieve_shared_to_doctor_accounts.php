<?php

include '../Dbhelper.php';

$children = retrieve_shared_to_doctor_accounts($_GET['id']);
if(empty($children)){
	echo 'no children found!';
}
else {
	echo '{"children" : '.json_encode($children).'}';
}

?>