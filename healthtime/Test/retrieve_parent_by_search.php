<?php

include '../Dbhelper.php';

$parent = retrieve_parent_be_search($_GET['key']);
if(empty($parent)){
	echo 'no parent found!';
}
else {
	echo '{"parent" : '.json_encode($parents).'}';
}

?>