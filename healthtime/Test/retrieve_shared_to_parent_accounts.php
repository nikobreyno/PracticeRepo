<?php

include '../Dbhelper.php';

$parents = retrieve_shared_to_parent_accounts($_GET['id']);
if(empty($parents)){
	echo 'no parents found!';
}
else {
	echo '{"parents" : '.json_encode($parents).'}';
}

?>