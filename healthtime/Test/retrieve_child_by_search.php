<?php

include '../Dbhelper.php';

$child = retrieve_child_by_search($_GET['key']);
if(empty($doctor)){
	echo 'no child found!';
}
else {
	echo '{"child" : '.json_encode($child).'}';
}

?>