<?php

include '../Dbhelper.php';

$child = retrieve_child_by_family($_GET['id']);
if(empty($child)){
	echo 'no child found!';
}
else {
	echo '{"child" : '.json_encode($child).'}';
}

?>