<?php

include '../Dbhelper.php';

$parent = retrieve_parent($_GET['id']);
if(empty($parent)){
	echo 'no parent found!';
}
else {
	echo '{"parent" : '.json_encode($parents).'}';
}

?>