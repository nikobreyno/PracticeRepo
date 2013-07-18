<?php

include '../Dbhelper.php';

$doctor = retrieve_doctor($_GET['id']);
if(empty($doctor)){
	echo 'no doctor found!';
}
else {
	echo '{"doctor" : '.json_encode($doctor).'}';
}

?>