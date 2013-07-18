<?php

include '../Dbhelper.php';

$parents = retrieve_parent_medical_history($_GET['id']);
if(empty($parents)){
	echo 'no parents found!';
}
else {
	echo '{"parents" : '.json_encode($parents).'}';
}

?>