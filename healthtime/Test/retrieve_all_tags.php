<?php

include '../Dbhelper.php';

$tags = retrieve_all_tags();
if(empty($tags)){
	echo '{"error" : '.json_encode('no tags found').'}';
}
else {
	echo '{"hashtags" : '.json_encode($tags).'}';
}

?>