<?php

include '../Dbhelper.php';

$child = retrieve_child($_GET['id']);
if(empty($child)){
	echo 'no child found!';
}
else {
	echo '{"child" : '.json_encode($child).'}';
}

?>