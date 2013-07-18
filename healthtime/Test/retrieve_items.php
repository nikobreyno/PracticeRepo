<?php

include '../Dbhelper.php';

$items = retrieve_items($_GET['category'], $_GET['key']);
if(empty($items)){
	echo 'no items found!';
}
else {
	echo '{"items" : '.json_encode($items).'}';
}

?>