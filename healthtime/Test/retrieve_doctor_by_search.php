<?php

include '../Dbhelper.php';

$doctor = retrieve_doctor_by_search($_GET['key']);
if(empty($doctor)){
	echo 'no doctor found!';
}
else {
	echo '{"doctor" : '.json_encode($doctor).'}';
}

?>